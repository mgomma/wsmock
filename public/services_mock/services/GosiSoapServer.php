<?php
ini_set('display_errors', 1);

//$base_url = 'http://10.60.14.11/wsmock/public/services_mock/services/GosiSoapServer.php';
$base_url = 'http://webservices.dev/public/services_mock/services/GosiSoapServer.php';
$base_url_wsdl = $base_url.'?wsdl';
    
use WSDL\WSDLCreator;
ini_set("soap.wsdl_cache_enabled","0");

require_once '/var/www/html/wsmock/public/services_mock/vendor/autoload.php';

$wsdl = new WSDLCreator('GosiSoapServer', $base_url);
$wsdl->setNamespace($base_url);

if (isset($_GET['wsdl'])) {
    $wsdl->renderWSDL();
    exit;
} 
$wsdl->renderWSDLService();

$server = new SoapServer($base_url_wsdl, array(
    'uri' => $base_url,
    'location' => $wsdl->getLocation(),
));
$server->setClass('GosiSoapServer');
$server->handle();

class Contributor
{
    /**
     * @type object
     */
    public $GetContributorSummaryResult;
}

class Employee
{
    /**
     * @type int
     */
    public $id;
    /**
     * @type string
     */
    public $department;
    
    /**
     * @type wrapper[] @className=Address 
     */
    public $addresses = array();
}

class Address {
    /**
     * @type string
     */
    public $street;
    /**
     * @type int
     */
    public $address;
}

class GetContributorSummaryParam{
  /**
     * @type int
     */
  public $gosiInput;
  
    /**
     * @type string
     */
  public $specifiedDate;
}

class GosiSoapServer
{
    /**
     * @WebMethod
     * @param wrapper[] $param @className=GetContributorSummaryParam
     * @return wrapper $userReturn @className=Contributor
     */
    public function GetContributorSummary($param)
    {  
      $contributor = new Contributor();
      $data = file_get_contents('http://10.60.14.11/wsmock/public/gosi/'.$param[0]);
      
      $data = json_decode($data);
      
      $result = new stdClass();
      
//      $result->NIN = $data->NIN;
//      $result->engagmentSummaryBeanList['SimplifiedEngagmentSummaryBeanList'][] = $data->engagmentSummaryBeanList['SimplifiedEngagmentSummaryBeanList'][0];
      $engagmentSummaryBeanList = $data->engagmentSummaryBeanList->SimplifiedEngagmentSummaryBeanList;
      unset($data->engagment_summary_bean_list);
      unset($data->engagmentSummaryBeanList);
//      
      $result = $data;
      $val = new stdClass();
      $val->SimplifiedEngagmentSummaryBeanList = $engagmentSummaryBeanList;

     $result->engagmentSummaryBeanList = $val;
      $contributor->GetContributorSummaryResult = $result;
      return $contributor;
    }

    /**
     * @WebMethod
     * @return wrapper[] $employees @className=Employee
     */
    public function getEmployees()
    {
        $employees = array();
        $departments = array('IT', 'Logistics', 'Management');
        for ($i = 0; $i < 3; $i++) {
            $employee = new Employee();
            $employee->id = 2 + $i + 1;
            $employee->department = $departments[$i];
            
            if(mt_rand(0, 3) == 2) {
                $address = new Address();
                $address->address = mt_rand(1000, 9999);
                $address->street = 'random string '.  mt_rand(0, 99);

                $employee->addresses[] = $address;
            }
            
            $employees[] = $employee;
        }
        return $employees;
    }

    /**
     * @WebMethod
     * @param wrapper[] $employeesList @className=Employee
     * @return string $str
     */
    public function getEmployeesDepartments($employeesList)
    {
        //FIXME getting correct $employeesList
        $names = array();
        foreach ($employeesList as $employee) {
            $names[] = $employee->department;
        }
        return implode(', ', $names);
    }
}
