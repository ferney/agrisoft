<?php
$dalTablelineas_agrarias = array();
$dalTablelineas_agrarias["ID"] = array("type"=>3,"varname"=>"ID");
$dalTablelineas_agrarias["FINCA_PROPIETARIO_CEDULA"] = array("type"=>3,"varname"=>"FINCA_PROPIETARIO_CEDULA");
$dalTablelineas_agrarias["NOMBRE"] = array("type"=>200,"varname"=>"NOMBRE");
$dalTablelineas_agrarias["VEREDA"] = array("type"=>200,"varname"=>"VEREDA");
$dalTablelineas_agrarias["FINCA"] = array("type"=>200,"varname"=>"FINCA");
$dalTablelineas_agrarias["LINEA"] = array("type"=>200,"varname"=>"LINEA");
$dalTablelineas_agrarias["VARIEDAD"] = array("type"=>200,"varname"=>"VARIEDAD");
$dalTablelineas_agrarias["AREA"] = array("type"=>5,"varname"=>"AREA");
$dalTablelineas_agrarias["PRODUCCION_ANUAL"] = array("type"=>5,"varname"=>"PRODUCCION_ANUAL");
$dalTablelineas_agrarias["AÑO"] = array("type"=>200,"varname"=>"A_O");
	$dalTablelineas_agrarias["ID"]["key"]=true;
	$dalTablelineas_agrarias["FINCA_PROPIETARIO_CEDULA"]["key"]=true;

$dal_info["sanjoaquinbasededatos_at_localhost__lineas_agrarias"] = &$dalTablelineas_agrarias;
?>