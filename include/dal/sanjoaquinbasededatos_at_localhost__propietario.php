<?php
$dalTablepropietario = array();
$dalTablepropietario["CEDULA"] = array("type"=>3,"varname"=>"CEDULA");
$dalTablepropietario["NOMBRE"] = array("type"=>200,"varname"=>"NOMBRE");
$dalTablepropietario["TELEFONO"] = array("type"=>200,"varname"=>"TELEFONO");
$dalTablepropietario["F_NACIMIENTO"] = array("type"=>7,"varname"=>"F_NACIMIENTO");
$dalTablepropietario["E_CIVIL"] = array("type"=>200,"varname"=>"E_CIVIL");
$dalTablepropietario["PARIENTE"] = array("type"=>200,"varname"=>"PARIENTE");
$dalTablepropietario["NOMBRE_PARIENTE"] = array("type"=>200,"varname"=>"NOMBRE_PARIENTE");
$dalTablepropietario["IDENTIFICACION"] = array("type"=>200,"varname"=>"IDENTIFICACION");
$dalTablepropietario["TEL_PARIENTE"] = array("type"=>200,"varname"=>"TEL_PARIENTE");
	$dalTablepropietario["CEDULA"]["key"]=true;

$dal_info["sanjoaquinbasededatos_at_localhost__propietario"] = &$dalTablepropietario;
?>