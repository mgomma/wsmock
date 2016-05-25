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
            $wsdl = new WSDLCreator(ContributorService::class, 'http://ws.local/contributor');
            $wsdl->setNamespace("http://ws.local/");
            $wsdl->renderWSDL();
            exit;
        }

        $options= array('uri'=>'http://ws.local/contributor');
        $server= new \SoapServer('http://ws.local/contributor?wsdl',$options);
        $server->setClass(ContributorService::class);
        $server->handle();
        //dd($server);
        
        
    }


    public function testSoapClient(){

        $service = new ContributorService();
        $result = $service->listContributors();



        $options = array('location' => 'http://ws.local/contributor','uri' => 'http://ws.local/','cache_wsdl' => WSDL_CACHE_NONE);

        //
        $client = new \SoapClient('http://ws.local/contributor?wsdl', $options);

        //$SoapCallParameters = new \stdClass();
        //$SoapCallParameters->nid = "1232131";



        try{
            //call an API method
            $result = $client->listContributors();
        }catch (\Exception $ex){
            //var_dump($ex->getMessage());
        }

        dd($result);

    }





}
