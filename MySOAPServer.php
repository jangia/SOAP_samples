<?php

function MyOperation($someone) {
        return "Price of: " . $someone . " is 100$";
    }


ini_set("soap.wsdl_cache_enabled", "0");
ini_set('soap.wsdl_cache_ttl',0);
$server = new SoapServer("http://10.10.12.30//result/My.wsdl",
    array('soap_version' => SOAP_1_2));
$server->addFunction("MyOperation");
$server->handle();