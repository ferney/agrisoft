<?php
$dalTablefinca = array();
$dalTablefinca["ID"] = array("type"=>3,"varname"=>"ID");
$dalTablefinca["PROPIETARIO_CEDULA"] = array("type"=>3,"varname"=>"PROPIETARIO_CEDULA");
$dalTablefinca["NOMBRE"] = array("type"=>200,"varname"=>"NOMBRE");
$dalTablefinca["VEREDA"] = array("type"=>200,"varname"=>"VEREDA");
$dalTablefinca["FINCA"] = array("type"=>200,"varname"=>"FINCA");
$dalTablefinca["ALTURA"] = array("type"=>200,"varname"=>"ALTURA");
$dalTablefinca["GEOREFERENCIA"] = array("type"=>200,"varname"=>"GEOREFERENCIA");
$dalTablefinca["AREA_FINCA"] = array("type"=>5,"varname"=>"AREA_FINCA");
$dalTablefinca["LINEA_PRINCIPAL"] = array("type"=>200,"varname"=>"LINEA_PRINCIPAL");
$dalTablefinca["AREA_ L_P"] = array("type"=>5,"varname"=>"AREA__L_P");
$dalTablefinca["AÑO"] = array("type"=>200,"varname"=>"A_O");
	$dalTablefinca["ID"]["key"]=true;
	$dalTablefinca["PROPIETARIO_CEDULA"]["key"]=true;

$dal_info["sanjoaquinbasededatos_at_localhost__finca"] = &$dalTablefinca;
?>