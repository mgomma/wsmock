<?php
/**
 * Created by IntelliJ IDEA.
 * User: Mohamed Farghaly
 * Date: 24/05/16
 * Time: 11:25 م
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Services\ContributorService;
use WSDL\WSDLCreator;


class ContributorController extends Controller
{

  public function index()
    {
        //
       if (isset($_GET['wsdl'])) {
         
//         header('Content-Type: application/xml; charset=utf-8');
            $wsdl = new WSDLCreator(ContributorService::class, url()->to('/').'/contributor');
            $wsdl->setNamespace(url()->to('/').'/');
            $wsdl->renderWSDL();
            exit;
        }

        $options= array('uri'=>url()->to('/').'/contributor');
        $server= new \SoapServer(NULL, $options);
        $server->setClass(ContributorService::class);
        $server->handle();
        //dd($server);
        
        
    }


    public function testSoapClient(){
        $options = array('trace' => 1,'cache_wsdl' => WSDL_CACHE_NONE);
        $client = new \SoapClient(url()->to('/').'/contributor?wsdl', $options);
 //call an API method
//        var_dump($client->__getFunctions());
//            
//            dd(SoapClient::__getLastResponseHeaders()); 
                  $result = $client->GetContributorSummary();

        try{
          $result = $client->GetContributorSummary([]);
          dd($result);
        }catch (\Exception $ex){
            var_dump($ex->getMessage());
        }

    }
    
    public function testme($param) {
        $service = new ContributorService();
        $result = $service->GetContributorSummary();
        dd($result);
    }

}
