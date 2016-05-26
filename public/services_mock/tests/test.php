<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
ini_set("soap.wsdl_cache_enabled","0");
      
//$base_url = 'http://10.10.4.1:1980/LiteGOSIService.svc?wsdl';
$base_url = 'http://191.101.7.225/public/services_mock/services/GosiSoapServer.php?wsdl';

//1000051700  local
//1001878840 

$options = array('trace' => 1,'cache_wsdl' => WSDL_CACHE_NONE,'exceptions' => true);
$client = new SoapClient($base_url, $options);
$param = array("gosiInput" => "1000202489", "specifiedDate" => "2009-09-01");

$result = $client->GetContributorSummary($param);

echo '<pre>'; print_r($result); exit;