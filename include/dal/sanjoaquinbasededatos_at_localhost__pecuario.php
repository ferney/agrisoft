<?php
$dalTablepecuario = array();
$dalTablepecuario["ID"] = array("type"=>3,"varname"=>"ID");
$dalTablepecuario["FINCA_PROPIETARIO_CEDULA"] = array("type"=>3,"varname"=>"FINCA_PROPIETARIO_CEDULA");
$dalTablepecuario["NOMBRE"] = array("type"=>200,"varname"=>"NOMBRE");
$dalTablepecuario["VEREDA"] = array("type"=>200,"varname"=>"VEREDA");
$dalTablepecuario["FINCA"] = array("type"=>200,"varname"=>"FINCA");
$dalTablepecuario["RAZA"] = array("type"=>200,"varname"=>"RAZA");
$dalTablepecuario["U_A"] = array("type"=>3,"varname"=>"U_A");
$dalTablepecuario["AREA"] = array("type"=>5,"varname"=>"AREA");
$dalTablepecuario["PRODUCCION_ANUAL"] = array("type"=>5,"varname"=>"PRODUCCION_ANUAL");
$dalTablepecuario["AÑO"] = array("type"=>200,"varname"=>"A_O");
	$dalTablepecuario["ID"]["key"]=true;
	$dalTablepecuario["FINCA_PROPIETARIO_CEDULA"]["key"]=true;

$dal_info["sanjoaquinbasededatos_at_localhost__pecuario"] = &$dalTablepecuario;
?>