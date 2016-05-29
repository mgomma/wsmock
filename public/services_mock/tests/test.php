<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
ini_set("soap.wsdl_cache_enabled","0");
      
if(isset($_POST['WSDL']) ){
	$base_url = $_POST['WSDL'];
}else{
	$base_url = 'http://10.60.14.11/wsmock/public/services_mock/services/GosiSoapServer.php?wsdl';
}

if(isset($_POST['NIN'])){
	$NIN = $_POST['NIN'];
}else{
	$NIN = 0;
}

if(isset($_POST['specifiedDate'])){
	$specifiedDate = $_POST['specifiedDate'];
}else{
	$specifiedDate = '2009-09-01';
}

//1000051700  local
//1001878840 
?>

<div>
	<form class="" id="gosi" accept-charset="UTF-8" action="" method="POST">


	<input type="text" value="<?php echo $NIN; ?>" placeholder="NIN"  name="NIN" size='50' />
	<input type="text" value="<?php echo $specifiedDate; ?>" placeholder="2009-09-01"  name="specifiedDate"  size='100'  />

	<input type="text" value="<?php echo $base_url; ?>" placeholder="WSDL" name="WSDL"  size='100'  />

	<button value="submit" id="submit" type="submit"> submit </button>
	</form>
</div>

<?php
if($NIN > 0){

  
  $options = array('trace' => 1,'cache_wsdl' => WSDL_CACHE_NONE,'exceptions' => true);
$client = new SoapClient($base_url, $options);
$param = array("gosiInput" => $NIN , "specifiedDate" => $specifiedDate);

$result = $client->GetContributorSummary($param);

echo '<pre>';
print_r($result); 
}
?>