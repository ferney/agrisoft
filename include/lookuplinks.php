<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

	$lookupTableLinks["finca"]["agricola.FINCA_PROPIETARIO_CEDULA"]["edit"] = array("table" => "agricola", "field" => "FINCA_PROPIETARIO_CEDULA", "page" => "edit");
	$lookupTableLinks["finca"]["agricola.NOMBRE"]["edit"] = array("table" => "agricola", "field" => "NOMBRE", "page" => "edit");
	$lookupTableLinks["finca"]["agricola.VEREDA"]["edit"] = array("table" => "agricola", "field" => "VEREDA", "page" => "edit");
	$lookupTableLinks["finca"]["agricola.FINCA"]["edit"] = array("table" => "agricola", "field" => "FINCA", "page" => "edit");
	$lookupTableLinks["propietario"]["finca.PROPIETARIO_CEDULA"]["edit"] = array("table" => "finca", "field" => "PROPIETARIO_CEDULA", "page" => "edit");
	$lookupTableLinks["propietario"]["finca.NOMBRE"]["edit"] = array("table" => "finca", "field" => "NOMBRE", "page" => "edit");
	$lookupTableLinks["finca"]["hortifruticola.FINCA_PROPIETARIO_CEDULA"]["edit"] = array("table" => "hortifruticola", "field" => "FINCA_PROPIETARIO_CEDULA", "page" => "edit");
	$lookupTableLinks["finca"]["hortifruticola.NOMBRE"]["edit"] = array("table" => "hortifruticola", "field" => "NOMBRE", "page" => "edit");
	$lookupTableLinks["finca"]["hortifruticola.VEREDA"]["edit"] = array("table" => "hortifruticola", "field" => "VEREDA", "page" => "edit");
	$lookupTableLinks["finca"]["hortifruticola.FINCA"]["edit"] = array("table" => "hortifruticola", "field" => "FINCA", "page" => "edit");
	$lookupTableLinks["finca"]["inversion.FINCA_PROPIETARIO_CEDULA"]["edit"] = array("table" => "inversion", "field" => "FINCA_PROPIETARIO_CEDULA", "page" => "edit");
	$lookupTableLinks["finca"]["inversion.NOMBRE"]["edit"] = array("table" => "inversion", "field" => "NOMBRE", "page" => "edit");
	$lookupTableLinks["finca"]["inversion.VEREDA"]["edit"] = array("table" => "inversion", "field" => "VEREDA", "page" => "edit");
	$lookupTableLinks["finca"]["inversion.FINCA"]["edit"] = array("table" => "inversion", "field" => "FINCA", "page" => "edit");
	$lookupTableLinks["finca"]["legal.FINCA_PROPIETARIO_CEDULA"]["edit"] = array("table" => "legal", "field" => "FINCA_PROPIETARIO_CEDULA", "page" => "edit");
	$lookupTableLinks["finca"]["legal.NOMBRE"]["edit"] = array("table" => "legal", "field" => "NOMBRE", "page" => "edit");
	$lookupTableLinks["finca"]["legal.VEREDA"]["edit"] = array("table" => "legal", "field" => "VEREDA", "page" => "edit");
	$lookupTableLinks["finca"]["legal.FINCA"]["edit"] = array("table" => "legal", "field" => "FINCA", "page" => "edit");
	$lookupTableLinks["finca"]["lineas_agrarias.FINCA_PROPIETARIO_CEDULA"]["edit"] = array("table" => "lineas_agrarias", "field" => "FINCA_PROPIETARIO_CEDULA", "page" => "edit");
	$lookupTableLinks["finca"]["lineas_agrarias.NOMBRE"]["edit"] = array("table" => "lineas_agrarias", "field" => "NOMBRE", "page" => "edit");
	$lookupTableLinks["finca"]["lineas_agrarias.VEREDA"]["edit"] = array("table" => "lineas_agrarias", "field" => "VEREDA", "page" => "edit");
	$lookupTableLinks["finca"]["lineas_agrarias.FINCA"]["edit"] = array("table" => "lineas_agrarias", "field" => "FINCA", "page" => "edit");
	$lookupTableLinks["finca"]["pecuario.FINCA_PROPIETARIO_CEDULA"]["edit"] = array("table" => "pecuario", "field" => "FINCA_PROPIETARIO_CEDULA", "page" => "edit");
	$lookupTableLinks["finca"]["pecuario.NOMBRE"]["edit"] = array("table" => "pecuario", "field" => "NOMBRE", "page" => "edit");
	$lookupTableLinks["finca"]["pecuario.VEREDA"]["edit"] = array("table" => "pecuario", "field" => "VEREDA", "page" => "edit");
	$lookupTableLinks["finca"]["pecuario.FINCA"]["edit"] = array("table" => "pecuario", "field" => "FINCA", "page" => "edit");
	$lookupTableLinks["propietario"]["REPORTE_GLOBAL.PROPIETARIO_CEDULA"]["search"] = array("table" => "REPORTE GLOBAL", "field" => "PROPIETARIO_CEDULA", "page" => "search");
	$lookupTableLinks["propietario"]["REPORTE_GLOBAL.NOMBRE"]["search"] = array("table" => "REPORTE GLOBAL", "field" => "NOMBRE", "page" => "search");
	$lookupTableLinks["finca"]["REPORTE_AGRICOLA.VEREDA"]["search"] = array("table" => "REPORTE AGRICOLA", "field" => "VEREDA", "page" => "search");
	$lookupTableLinks["finca"]["REPORTE_PECUARIO.VEREDA"]["search"] = array("table" => "REPORTE PECUARIO", "field" => "VEREDA", "page" => "search");
	$lookupTableLinks["finca"]["REPORTE_HORTIFRUTICOLA.VEREDA"]["search"] = array("table" => "REPORTE HORTIFRUTICOLA", "field" => "VEREDA", "page" => "search");
	$lookupTableLinks["finca"]["REPORTE_INVERSION.VEREDA"]["search"] = array("table" => "REPORTE INVERSION", "field" => "VEREDA", "page" => "search");
	$lookupTableLinks["finca"]["REPORTE_INVERSION.FINCA"]["search"] = array("table" => "REPORTE INVERSION", "field" => "FINCA", "page" => "search");
	$lookupTableLinks["finca"]["REPORTE_LEGAL.VEREDA"]["search"] = array("table" => "REPORTE LEGAL", "field" => "VEREDA", "page" => "search");
	$lookupTableLinks["finca"]["REPORTE_LINEAS.VEREDA"]["search"] = array("table" => "REPORTE LINEAS", "field" => "VEREDA", "page" => "search");
}

?>