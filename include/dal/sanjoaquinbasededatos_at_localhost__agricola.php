<?php
$dalTableagricola = array();
$dalTableagricola["ID"] = array("type"=>3,"varname"=>"ID");
$dalTableagricola["FINCA_PROPIETARIO_CEDULA"] = array("type"=>3,"varname"=>"FINCA_PROPIETARIO_CEDULA");
$dalTableagricola["NOMBRE"] = array("type"=>200,"varname"=>"NOMBRE");
$dalTableagricola["VEREDA"] = array("type"=>200,"varname"=>"VEREDA");
$dalTableagricola["FINCA"] = array("type"=>200,"varname"=>"FINCA");
$dalTableagricola["VARIEDAD"] = array("type"=>200,"varname"=>"VARIEDAD");
$dalTableagricola["AREA"] = array("type"=>5,"varname"=>"AREA");
$dalTableagricola["PRODUCCION_ANUAL"] = array("type"=>5,"varname"=>"PRODUCCION_ANUAL");
$dalTableagricola["AÑO"] = array("type"=>200,"varname"=>"A_O");
	$dalTableagricola["ID"]["key"]=true;
	$dalTableagricola["FINCA_PROPIETARIO_CEDULA"]["key"]=true;

$dal_info["sanjoaquinbasededatos_at_localhost__agricola"] = &$dalTableagricola;
?>