<?php
/**
 * Created by PhpStorm.
 * User: jan
 * Date: 11.8.2016
 * Time: 9:07
 */
/*echo file_get_contents("http://localhost:8080/result/My.wsdl");
die()*/;

$url = 'http://10.10.12.30//result/My.wsdl';
$request_data="jan";
$client = new SoapClient($url,array('soap_version' => SOAP_1_2,'trace' => 1,'uri' => 'urn:mytargetns' ));
//test
$response = $client->__soapCall("MyOperation",array($request_data));
var_dump($response);