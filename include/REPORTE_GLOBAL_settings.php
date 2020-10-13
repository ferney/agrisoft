<?php
require_once(getabspath("classes/cipherer.php"));




$tdataREPORTE_GLOBAL = array();
	$tdataREPORTE_GLOBAL[".truncateText"] = true;
	$tdataREPORTE_GLOBAL[".NumberOfChars"] = 80;
	$tdataREPORTE_GLOBAL[".ShortName"] = "REPORTE_GLOBAL";
	$tdataREPORTE_GLOBAL[".OwnerID"] = "";
	$tdataREPORTE_GLOBAL[".OriginalTable"] = "finca";

//	field labels
$fieldLabelsREPORTE_GLOBAL = array();
$fieldToolTipsREPORTE_GLOBAL = array();
$pageTitlesREPORTE_GLOBAL = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsREPORTE_GLOBAL["Spanish"] = array();
	$fieldToolTipsREPORTE_GLOBAL["Spanish"] = array();
	$pageTitlesREPORTE_GLOBAL["Spanish"] = array();
	$fieldLabelsREPORTE_GLOBAL["Spanish"]["PROPIETARIO_CEDULA"] = "PROPIETARIO CEDULA";
	$fieldToolTipsREPORTE_GLOBAL["Spanish"]["PROPIETARIO_CEDULA"] = "";
	$fieldLabelsREPORTE_GLOBAL["Spanish"]["NOMBRE"] = "NOMBRE";
	$fieldToolTipsREPORTE_GLOBAL["Spanish"]["NOMBRE"] = "";
	$fieldLabelsREPORTE_GLOBAL["Spanish"]["VEREDA"] = "VEREDA";
	$fieldToolTipsREPORTE_GLOBAL["Spanish"]["VEREDA"] = "";
	$fieldLabelsREPORTE_GLOBAL["Spanish"]["FINCA"] = "FINCA";
	$fieldToolTipsREPORTE_GLOBAL["Spanish"]["FINCA"] = "";
	$fieldLabelsREPORTE_GLOBAL["Spanish"]["AREA_FINCA"] = "AREA FINCA";
	$fieldToolTipsREPORTE_GLOBAL["Spanish"]["AREA_FINCA"] = "";
	$fieldLabelsREPORTE_GLOBAL["Spanish"]["LINEA_PRINCIPAL"] = "LINEA PRINCIPAL";
	$fieldToolTipsREPORTE_GLOBAL["Spanish"]["LINEA_PRINCIPAL"] = "";
	$fieldLabelsREPORTE_GLOBAL["Spanish"]["AREA__L_P"] = "AREA  L P";
	$fieldToolTipsREPORTE_GLOBAL["Spanish"]["AREA__L_P"] = "";
	$fieldLabelsREPORTE_GLOBAL["Spanish"]["A_O"] = "AÑO";
	$fieldToolTipsREPORTE_GLOBAL["Spanish"]["A_O"] = "";
	$fieldLabelsREPORTE_GLOBAL["Spanish"]["LINEAS_AGRARIAS"] = "LINEAS AGRARIAS";
	$fieldToolTipsREPORTE_GLOBAL["Spanish"]["LINEAS_AGRARIAS"] = "";
	$fieldLabelsREPORTE_GLOBAL["Spanish"]["VARIEDAD"] = "VARIEDAD";
	$fieldToolTipsREPORTE_GLOBAL["Spanish"]["VARIEDAD"] = "";
	$fieldLabelsREPORTE_GLOBAL["Spanish"]["AREA"] = "AREA";
	$fieldToolTipsREPORTE_GLOBAL["Spanish"]["AREA"] = "";
	$fieldLabelsREPORTE_GLOBAL["Spanish"]["PRODUCCION_ANUAL"] = "PRODUCCION ANUAL";
	$fieldToolTipsREPORTE_GLOBAL["Spanish"]["PRODUCCION_ANUAL"] = "";
	$fieldLabelsREPORTE_GLOBAL["Spanish"]["A_O1"] = "AÑO1";
	$fieldToolTipsREPORTE_GLOBAL["Spanish"]["A_O1"] = "";
	$fieldLabelsREPORTE_GLOBAL["Spanish"]["VARIEDAD_AGRICOLA"] = "VARIEDAD AGRICOLA";
	$fieldToolTipsREPORTE_GLOBAL["Spanish"]["VARIEDAD_AGRICOLA"] = "";
	$fieldLabelsREPORTE_GLOBAL["Spanish"]["AREA1"] = "AREA1";
	$fieldToolTipsREPORTE_GLOBAL["Spanish"]["AREA1"] = "";
	$fieldLabelsREPORTE_GLOBAL["Spanish"]["PRODUCCION_ANUAL1"] = "PRODUCCION ANUAL1";
	$fieldToolTipsREPORTE_GLOBAL["Spanish"]["PRODUCCION_ANUAL1"] = "";
	$fieldLabelsREPORTE_GLOBAL["Spanish"]["A_O2"] = "AÑO2";
	$fieldToolTipsREPORTE_GLOBAL["Spanish"]["A_O2"] = "";
	$fieldLabelsREPORTE_GLOBAL["Spanish"]["RAZA_PECUARIO"] = "RAZA PECUARIO";
	$fieldToolTipsREPORTE_GLOBAL["Spanish"]["RAZA_PECUARIO"] = "";
	$fieldLabelsREPORTE_GLOBAL["Spanish"]["U_A"] = "U A";
	$fieldToolTipsREPORTE_GLOBAL["Spanish"]["U_A"] = "";
	$fieldLabelsREPORTE_GLOBAL["Spanish"]["AREA2"] = "AREA2";
	$fieldToolTipsREPORTE_GLOBAL["Spanish"]["AREA2"] = "";
	$fieldLabelsREPORTE_GLOBAL["Spanish"]["PRODUCCION_ANUAL2"] = "PRODUCCION ANUAL2";
	$fieldToolTipsREPORTE_GLOBAL["Spanish"]["PRODUCCION_ANUAL2"] = "";
	$fieldLabelsREPORTE_GLOBAL["Spanish"]["A_O3"] = "AÑO3";
	$fieldToolTipsREPORTE_GLOBAL["Spanish"]["A_O3"] = "";
	$fieldLabelsREPORTE_GLOBAL["Spanish"]["VARIEDAD_HORTIFRUTICOLA"] = "VARIEDAD HORTIFRUTICOLA";
	$fieldToolTipsREPORTE_GLOBAL["Spanish"]["VARIEDAD_HORTIFRUTICOLA"] = "";
	$fieldLabelsREPORTE_GLOBAL["Spanish"]["AREA3"] = "AREA3";
	$fieldToolTipsREPORTE_GLOBAL["Spanish"]["AREA3"] = "";
	$fieldLabelsREPORTE_GLOBAL["Spanish"]["PRODUCCION_ANUAL3"] = "PRODUCCION ANUAL3";
	$fieldToolTipsREPORTE_GLOBAL["Spanish"]["PRODUCCION_ANUAL3"] = "";
	$fieldLabelsREPORTE_GLOBAL["Spanish"]["A_O4"] = "AÑO4";
	$fieldToolTipsREPORTE_GLOBAL["Spanish"]["A_O4"] = "";
	$fieldLabelsREPORTE_GLOBAL["Spanish"]["TENENCIA_LEGAL"] = "TENENCIA LEGAL";
	$fieldToolTipsREPORTE_GLOBAL["Spanish"]["TENENCIA_LEGAL"] = "";
	$fieldLabelsREPORTE_GLOBAL["Spanish"]["SOPORTE"] = "SOPORTE";
	$fieldToolTipsREPORTE_GLOBAL["Spanish"]["SOPORTE"] = "";
	$fieldLabelsREPORTE_GLOBAL["Spanish"]["RUAT"] = "RUAT";
	$fieldToolTipsREPORTE_GLOBAL["Spanish"]["RUAT"] = "";
	$fieldLabelsREPORTE_GLOBAL["Spanish"]["ASOCIACION"] = "ASOCIACION";
	$fieldToolTipsREPORTE_GLOBAL["Spanish"]["ASOCIACION"] = "";
	$fieldLabelsREPORTE_GLOBAL["Spanish"]["OBSERVACIONES"] = "OBSERVACIONES";
	$fieldToolTipsREPORTE_GLOBAL["Spanish"]["OBSERVACIONES"] = "";
	$fieldLabelsREPORTE_GLOBAL["Spanish"]["A_O5"] = "AÑO5";
	$fieldToolTipsREPORTE_GLOBAL["Spanish"]["A_O5"] = "";
	$fieldLabelsREPORTE_GLOBAL["Spanish"]["TIPO_INVERSION"] = "TIPO INVERSION";
	$fieldToolTipsREPORTE_GLOBAL["Spanish"]["TIPO_INVERSION"] = "";
	$fieldLabelsREPORTE_GLOBAL["Spanish"]["NOMBRE_PROYECTO"] = "NOMBRE PROYECTO";
	$fieldToolTipsREPORTE_GLOBAL["Spanish"]["NOMBRE_PROYECTO"] = "";
	$fieldLabelsREPORTE_GLOBAL["Spanish"]["OBSERVACIONES1"] = "OBSERVACIONES1";
	$fieldToolTipsREPORTE_GLOBAL["Spanish"]["OBSERVACIONES1"] = "";
	$fieldLabelsREPORTE_GLOBAL["Spanish"]["A_O6"] = "AÑO6";
	$fieldToolTipsREPORTE_GLOBAL["Spanish"]["A_O6"] = "";
	if (count($fieldToolTipsREPORTE_GLOBAL["Spanish"]))
		$tdataREPORTE_GLOBAL[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsREPORTE_GLOBAL[""] = array();
	$fieldToolTipsREPORTE_GLOBAL[""] = array();
	$pageTitlesREPORTE_GLOBAL[""] = array();
	$fieldLabelsREPORTE_GLOBAL[""]["PROPIETARIO_CEDULA"] = "PROPIETARIO CEDULA";
	$fieldToolTipsREPORTE_GLOBAL[""]["PROPIETARIO_CEDULA"] = "";
	$fieldLabelsREPORTE_GLOBAL[""]["NOMBRE"] = "NOMBRE";
	$fieldToolTipsREPORTE_GLOBAL[""]["NOMBRE"] = "";
	$fieldLabelsREPORTE_GLOBAL[""]["VEREDA"] = "VEREDA";
	$fieldToolTipsREPORTE_GLOBAL[""]["VEREDA"] = "";
	$fieldLabelsREPORTE_GLOBAL[""]["FINCA"] = "FINCA";
	$fieldToolTipsREPORTE_GLOBAL[""]["FINCA"] = "";
	$fieldLabelsREPORTE_GLOBAL[""]["AREA_FINCA"] = "AREA FINCA";
	$fieldToolTipsREPORTE_GLOBAL[""]["AREA_FINCA"] = "";
	$fieldLabelsREPORTE_GLOBAL[""]["LINEA_PRINCIPAL"] = "LINEA PRINCIPAL";
	$fieldToolTipsREPORTE_GLOBAL[""]["LINEA_PRINCIPAL"] = "";
	$fieldLabelsREPORTE_GLOBAL[""]["AREA__L_P"] = "AREA  L P";
	$fieldToolTipsREPORTE_GLOBAL[""]["AREA__L_P"] = "";
	$fieldLabelsREPORTE_GLOBAL[""]["A_O"] = "AÑO";
	$fieldToolTipsREPORTE_GLOBAL[""]["A_O"] = "";
	$fieldLabelsREPORTE_GLOBAL[""]["LINEAS_AGRARIAS"] = "LINEAS AGRARIAS";
	$fieldToolTipsREPORTE_GLOBAL[""]["LINEAS_AGRARIAS"] = "";
	$fieldLabelsREPORTE_GLOBAL[""]["VARIEDAD"] = "VARIEDAD";
	$fieldToolTipsREPORTE_GLOBAL[""]["VARIEDAD"] = "";
	$fieldLabelsREPORTE_GLOBAL[""]["AREA"] = "AREA";
	$fieldToolTipsREPORTE_GLOBAL[""]["AREA"] = "";
	$fieldLabelsREPORTE_GLOBAL[""]["PRODUCCION_ANUAL"] = "PRODUCCION ANUAL";
	$fieldToolTipsREPORTE_GLOBAL[""]["PRODUCCION_ANUAL"] = "";
	$fieldLabelsREPORTE_GLOBAL[""]["A_O1"] = "AÑO1";
	$fieldToolTipsREPORTE_GLOBAL[""]["A_O1"] = "";
	$fieldLabelsREPORTE_GLOBAL[""]["VARIEDAD_AGRICOLA"] = "VARIEDAD AGRICOLA";
	$fieldToolTipsREPORTE_GLOBAL[""]["VARIEDAD_AGRICOLA"] = "";
	$fieldLabelsREPORTE_GLOBAL[""]["AREA1"] = "AREA1";
	$fieldToolTipsREPORTE_GLOBAL[""]["AREA1"] = "";
	$fieldLabelsREPORTE_GLOBAL[""]["PRODUCCION_ANUAL1"] = "PRODUCCION ANUAL1";
	$fieldToolTipsREPORTE_GLOBAL[""]["PRODUCCION_ANUAL1"] = "";
	$fieldLabelsREPORTE_GLOBAL[""]["A_O2"] = "AÑO2";
	$fieldToolTipsREPORTE_GLOBAL[""]["A_O2"] = "";
	$fieldLabelsREPORTE_GLOBAL[""]["RAZA_PECUARIO"] = "RAZA PECUARIO";
	$fieldToolTipsREPORTE_GLOBAL[""]["RAZA_PECUARIO"] = "";
	$fieldLabelsREPORTE_GLOBAL[""]["U_A"] = "U A";
	$fieldToolTipsREPORTE_GLOBAL[""]["U_A"] = "";
	$fieldLabelsREPORTE_GLOBAL[""]["AREA2"] = "AREA2";
	$fieldToolTipsREPORTE_GLOBAL[""]["AREA2"] = "";
	$fieldLabelsREPORTE_GLOBAL[""]["PRODUCCION_ANUAL2"] = "PRODUCCION ANUAL2";
	$fieldToolTipsREPORTE_GLOBAL[""]["PRODUCCION_ANUAL2"] = "";
	$fieldLabelsREPORTE_GLOBAL[""]["A_O3"] = "AÑO3";
	$fieldToolTipsREPORTE_GLOBAL[""]["A_O3"] = "";
	$fieldLabelsREPORTE_GLOBAL[""]["VARIEDAD_HORTIFRUTICOLA"] = "VARIEDAD HORTIFRUTICOLA";
	$fieldToolTipsREPORTE_GLOBAL[""]["VARIEDAD_HORTIFRUTICOLA"] = "";
	$fieldLabelsREPORTE_GLOBAL[""]["AREA3"] = "AREA3";
	$fieldToolTipsREPORTE_GLOBAL[""]["AREA3"] = "";
	$fieldLabelsREPORTE_GLOBAL[""]["PRODUCCION_ANUAL3"] = "PRODUCCION ANUAL3";
	$fieldToolTipsREPORTE_GLOBAL[""]["PRODUCCION_ANUAL3"] = "";
	$fieldLabelsREPORTE_GLOBAL[""]["A_O4"] = "AÑO4";
	$fieldToolTipsREPORTE_GLOBAL[""]["A_O4"] = "";
	$fieldLabelsREPORTE_GLOBAL[""]["TENENCIA_LEGAL"] = "TENENCIA LEGAL";
	$fieldToolTipsREPORTE_GLOBAL[""]["TENENCIA_LEGAL"] = "";
	$fieldLabelsREPORTE_GLOBAL[""]["SOPORTE"] = "SOPORTE";
	$fieldToolTipsREPORTE_GLOBAL[""]["SOPORTE"] = "";
	$fieldLabelsREPORTE_GLOBAL[""]["RUAT"] = "RUAT";
	$fieldToolTipsREPORTE_GLOBAL[""]["RUAT"] = "";
	$fieldLabelsREPORTE_GLOBAL[""]["ASOCIACION"] = "ASOCIACION";
	$fieldToolTipsREPORTE_GLOBAL[""]["ASOCIACION"] = "";
	$fieldLabelsREPORTE_GLOBAL[""]["OBSERVACIONES"] = "OBSERVACIONES";
	$fieldToolTipsREPORTE_GLOBAL[""]["OBSERVACIONES"] = "";
	$fieldLabelsREPORTE_GLOBAL[""]["A_O5"] = "AÑO5";
	$fieldToolTipsREPORTE_GLOBAL[""]["A_O5"] = "";
	$fieldLabelsREPORTE_GLOBAL[""]["TIPO_INVERSION"] = "TIPO INVERSION";
	$fieldToolTipsREPORTE_GLOBAL[""]["TIPO_INVERSION"] = "";
	$fieldLabelsREPORTE_GLOBAL[""]["NOMBRE_PROYECTO"] = "NOMBRE PROYECTO";
	$fieldToolTipsREPORTE_GLOBAL[""]["NOMBRE_PROYECTO"] = "";
	$fieldLabelsREPORTE_GLOBAL[""]["OBSERVACIONES1"] = "OBSERVACIONES1";
	$fieldToolTipsREPORTE_GLOBAL[""]["OBSERVACIONES1"] = "";
	$fieldLabelsREPORTE_GLOBAL[""]["A_O6"] = "AÑO6";
	$fieldToolTipsREPORTE_GLOBAL[""]["A_O6"] = "";
	if (count($fieldToolTipsREPORTE_GLOBAL[""]))
		$tdataREPORTE_GLOBAL[".isUseToolTips"] = true;
}


	$tdataREPORTE_GLOBAL[".NCSearch"] = true;



$tdataREPORTE_GLOBAL[".shortTableName"] = "REPORTE_GLOBAL";
$tdataREPORTE_GLOBAL[".nSecOptions"] = 0;
$tdataREPORTE_GLOBAL[".recsPerRowPrint"] = 1;
$tdataREPORTE_GLOBAL[".mainTableOwnerID"] = "";
$tdataREPORTE_GLOBAL[".moveNext"] = 1;
$tdataREPORTE_GLOBAL[".entityType"] = 2;

$tdataREPORTE_GLOBAL[".strOriginalTableName"] = "finca";

	



$tdataREPORTE_GLOBAL[".showAddInPopup"] = false;

$tdataREPORTE_GLOBAL[".showEditInPopup"] = false;

$tdataREPORTE_GLOBAL[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataREPORTE_GLOBAL[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataREPORTE_GLOBAL[".fieldsForRegister"] = array();

$tdataREPORTE_GLOBAL[".listAjax"] = false;

	$tdataREPORTE_GLOBAL[".audit"] = false;

	$tdataREPORTE_GLOBAL[".locking"] = false;

$tdataREPORTE_GLOBAL[".edit"] = true;
$tdataREPORTE_GLOBAL[".afterEditAction"] = 1;
$tdataREPORTE_GLOBAL[".closePopupAfterEdit"] = 1;
$tdataREPORTE_GLOBAL[".afterEditActionDetTable"] = "";

$tdataREPORTE_GLOBAL[".add"] = true;
$tdataREPORTE_GLOBAL[".afterAddAction"] = 1;
$tdataREPORTE_GLOBAL[".closePopupAfterAdd"] = 1;
$tdataREPORTE_GLOBAL[".afterAddActionDetTable"] = "";

$tdataREPORTE_GLOBAL[".list"] = true;

$tdataREPORTE_GLOBAL[".view"] = true;


$tdataREPORTE_GLOBAL[".exportTo"] = true;

$tdataREPORTE_GLOBAL[".printFriendly"] = true;

$tdataREPORTE_GLOBAL[".delete"] = true;

$tdataREPORTE_GLOBAL[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataREPORTE_GLOBAL[".searchSaving"] = false;
//

$tdataREPORTE_GLOBAL[".showSearchPanel"] = true;
		$tdataREPORTE_GLOBAL[".flexibleSearch"] = true;

$tdataREPORTE_GLOBAL[".isUseAjaxSuggest"] = true;




$tdataREPORTE_GLOBAL[".addPageEvents"] = false;

// use timepicker for search panel
$tdataREPORTE_GLOBAL[".isUseTimeForSearch"] = false;



$tdataREPORTE_GLOBAL[".badgeColor"] = "029DA6";


$tdataREPORTE_GLOBAL[".allSearchFields"] = array();
$tdataREPORTE_GLOBAL[".filterFields"] = array();
$tdataREPORTE_GLOBAL[".requiredSearchFields"] = array();

$tdataREPORTE_GLOBAL[".allSearchFields"][] = "PROPIETARIO_CEDULA";
	$tdataREPORTE_GLOBAL[".allSearchFields"][] = "NOMBRE";
	$tdataREPORTE_GLOBAL[".allSearchFields"][] = "VEREDA";
	$tdataREPORTE_GLOBAL[".allSearchFields"][] = "FINCA";
	$tdataREPORTE_GLOBAL[".allSearchFields"][] = "AREA_FINCA";
	$tdataREPORTE_GLOBAL[".allSearchFields"][] = "LINEA_PRINCIPAL";
	$tdataREPORTE_GLOBAL[".allSearchFields"][] = "AREA_ L_P";
	$tdataREPORTE_GLOBAL[".allSearchFields"][] = "AÑO";
	$tdataREPORTE_GLOBAL[".allSearchFields"][] = "LINEAS_AGRARIAS";
	$tdataREPORTE_GLOBAL[".allSearchFields"][] = "VARIEDAD";
	$tdataREPORTE_GLOBAL[".allSearchFields"][] = "AREA";
	$tdataREPORTE_GLOBAL[".allSearchFields"][] = "PRODUCCION_ANUAL";
	$tdataREPORTE_GLOBAL[".allSearchFields"][] = "AÑO1";
	$tdataREPORTE_GLOBAL[".allSearchFields"][] = "VARIEDAD_AGRICOLA";
	$tdataREPORTE_GLOBAL[".allSearchFields"][] = "AREA1";
	$tdataREPORTE_GLOBAL[".allSearchFields"][] = "PRODUCCION_ANUAL1";
	$tdataREPORTE_GLOBAL[".allSearchFields"][] = "AÑO2";
	$tdataREPORTE_GLOBAL[".allSearchFields"][] = "RAZA_PECUARIO";
	$tdataREPORTE_GLOBAL[".allSearchFields"][] = "U_A";
	$tdataREPORTE_GLOBAL[".allSearchFields"][] = "AREA2";
	$tdataREPORTE_GLOBAL[".allSearchFields"][] = "PRODUCCION_ANUAL2";
	$tdataREPORTE_GLOBAL[".allSearchFields"][] = "AÑO3";
	$tdataREPORTE_GLOBAL[".allSearchFields"][] = "VARIEDAD_HORTIFRUTICOLA";
	$tdataREPORTE_GLOBAL[".allSearchFields"][] = "AREA3";
	$tdataREPORTE_GLOBAL[".allSearchFields"][] = "PRODUCCION_ANUAL3";
	$tdataREPORTE_GLOBAL[".allSearchFields"][] = "AÑO4";
	$tdataREPORTE_GLOBAL[".allSearchFields"][] = "TENENCIA_LEGAL";
	$tdataREPORTE_GLOBAL[".allSearchFields"][] = "SOPORTE";
	$tdataREPORTE_GLOBAL[".allSearchFields"][] = "RUAT";
	$tdataREPORTE_GLOBAL[".allSearchFields"][] = "ASOCIACION";
	$tdataREPORTE_GLOBAL[".allSearchFields"][] = "OBSERVACIONES";
	$tdataREPORTE_GLOBAL[".allSearchFields"][] = "AÑO5";
	$tdataREPORTE_GLOBAL[".allSearchFields"][] = "TIPO_INVERSION";
	$tdataREPORTE_GLOBAL[".allSearchFields"][] = "NOMBRE_PROYECTO";
	$tdataREPORTE_GLOBAL[".allSearchFields"][] = "OBSERVACIONES1";
	$tdataREPORTE_GLOBAL[".allSearchFields"][] = "AÑO6";
	

$tdataREPORTE_GLOBAL[".googleLikeFields"] = array();
$tdataREPORTE_GLOBAL[".googleLikeFields"][] = "PROPIETARIO_CEDULA";
$tdataREPORTE_GLOBAL[".googleLikeFields"][] = "NOMBRE";
$tdataREPORTE_GLOBAL[".googleLikeFields"][] = "VEREDA";
$tdataREPORTE_GLOBAL[".googleLikeFields"][] = "FINCA";
$tdataREPORTE_GLOBAL[".googleLikeFields"][] = "AREA_FINCA";
$tdataREPORTE_GLOBAL[".googleLikeFields"][] = "LINEA_PRINCIPAL";
$tdataREPORTE_GLOBAL[".googleLikeFields"][] = "AREA_ L_P";
$tdataREPORTE_GLOBAL[".googleLikeFields"][] = "AÑO";
$tdataREPORTE_GLOBAL[".googleLikeFields"][] = "LINEAS_AGRARIAS";
$tdataREPORTE_GLOBAL[".googleLikeFields"][] = "VARIEDAD";
$tdataREPORTE_GLOBAL[".googleLikeFields"][] = "AREA";
$tdataREPORTE_GLOBAL[".googleLikeFields"][] = "PRODUCCION_ANUAL";
$tdataREPORTE_GLOBAL[".googleLikeFields"][] = "AÑO1";
$tdataREPORTE_GLOBAL[".googleLikeFields"][] = "VARIEDAD_AGRICOLA";
$tdataREPORTE_GLOBAL[".googleLikeFields"][] = "AREA1";
$tdataREPORTE_GLOBAL[".googleLikeFields"][] = "PRODUCCION_ANUAL1";
$tdataREPORTE_GLOBAL[".googleLikeFields"][] = "AÑO2";
$tdataREPORTE_GLOBAL[".googleLikeFields"][] = "RAZA_PECUARIO";
$tdataREPORTE_GLOBAL[".googleLikeFields"][] = "U_A";
$tdataREPORTE_GLOBAL[".googleLikeFields"][] = "AREA2";
$tdataREPORTE_GLOBAL[".googleLikeFields"][] = "PRODUCCION_ANUAL2";
$tdataREPORTE_GLOBAL[".googleLikeFields"][] = "AÑO3";
$tdataREPORTE_GLOBAL[".googleLikeFields"][] = "VARIEDAD_HORTIFRUTICOLA";
$tdataREPORTE_GLOBAL[".googleLikeFields"][] = "AREA3";
$tdataREPORTE_GLOBAL[".googleLikeFields"][] = "PRODUCCION_ANUAL3";
$tdataREPORTE_GLOBAL[".googleLikeFields"][] = "AÑO4";
$tdataREPORTE_GLOBAL[".googleLikeFields"][] = "TENENCIA_LEGAL";
$tdataREPORTE_GLOBAL[".googleLikeFields"][] = "SOPORTE";
$tdataREPORTE_GLOBAL[".googleLikeFields"][] = "RUAT";
$tdataREPORTE_GLOBAL[".googleLikeFields"][] = "ASOCIACION";
$tdataREPORTE_GLOBAL[".googleLikeFields"][] = "OBSERVACIONES";
$tdataREPORTE_GLOBAL[".googleLikeFields"][] = "AÑO5";
$tdataREPORTE_GLOBAL[".googleLikeFields"][] = "TIPO_INVERSION";
$tdataREPORTE_GLOBAL[".googleLikeFields"][] = "NOMBRE_PROYECTO";
$tdataREPORTE_GLOBAL[".googleLikeFields"][] = "OBSERVACIONES1";
$tdataREPORTE_GLOBAL[".googleLikeFields"][] = "AÑO6";


$tdataREPORTE_GLOBAL[".advSearchFields"] = array();
$tdataREPORTE_GLOBAL[".advSearchFields"][] = "PROPIETARIO_CEDULA";
$tdataREPORTE_GLOBAL[".advSearchFields"][] = "NOMBRE";
$tdataREPORTE_GLOBAL[".advSearchFields"][] = "VEREDA";
$tdataREPORTE_GLOBAL[".advSearchFields"][] = "FINCA";
$tdataREPORTE_GLOBAL[".advSearchFields"][] = "AREA_FINCA";
$tdataREPORTE_GLOBAL[".advSearchFields"][] = "LINEA_PRINCIPAL";
$tdataREPORTE_GLOBAL[".advSearchFields"][] = "AREA_ L_P";
$tdataREPORTE_GLOBAL[".advSearchFields"][] = "AÑO";
$tdataREPORTE_GLOBAL[".advSearchFields"][] = "LINEAS_AGRARIAS";
$tdataREPORTE_GLOBAL[".advSearchFields"][] = "VARIEDAD";
$tdataREPORTE_GLOBAL[".advSearchFields"][] = "AREA";
$tdataREPORTE_GLOBAL[".advSearchFields"][] = "PRODUCCION_ANUAL";
$tdataREPORTE_GLOBAL[".advSearchFields"][] = "AÑO1";
$tdataREPORTE_GLOBAL[".advSearchFields"][] = "VARIEDAD_AGRICOLA";
$tdataREPORTE_GLOBAL[".advSearchFields"][] = "AREA1";
$tdataREPORTE_GLOBAL[".advSearchFields"][] = "PRODUCCION_ANUAL1";
$tdataREPORTE_GLOBAL[".advSearchFields"][] = "AÑO2";
$tdataREPORTE_GLOBAL[".advSearchFields"][] = "RAZA_PECUARIO";
$tdataREPORTE_GLOBAL[".advSearchFields"][] = "U_A";
$tdataREPORTE_GLOBAL[".advSearchFields"][] = "AREA2";
$tdataREPORTE_GLOBAL[".advSearchFields"][] = "PRODUCCION_ANUAL2";
$tdataREPORTE_GLOBAL[".advSearchFields"][] = "AÑO3";
$tdataREPORTE_GLOBAL[".advSearchFields"][] = "VARIEDAD_HORTIFRUTICOLA";
$tdataREPORTE_GLOBAL[".advSearchFields"][] = "AREA3";
$tdataREPORTE_GLOBAL[".advSearchFields"][] = "PRODUCCION_ANUAL3";
$tdataREPORTE_GLOBAL[".advSearchFields"][] = "AÑO4";
$tdataREPORTE_GLOBAL[".advSearchFields"][] = "TENENCIA_LEGAL";
$tdataREPORTE_GLOBAL[".advSearchFields"][] = "SOPORTE";
$tdataREPORTE_GLOBAL[".advSearchFields"][] = "RUAT";
$tdataREPORTE_GLOBAL[".advSearchFields"][] = "ASOCIACION";
$tdataREPORTE_GLOBAL[".advSearchFields"][] = "OBSERVACIONES";
$tdataREPORTE_GLOBAL[".advSearchFields"][] = "AÑO5";
$tdataREPORTE_GLOBAL[".advSearchFields"][] = "TIPO_INVERSION";
$tdataREPORTE_GLOBAL[".advSearchFields"][] = "NOMBRE_PROYECTO";
$tdataREPORTE_GLOBAL[".advSearchFields"][] = "OBSERVACIONES1";
$tdataREPORTE_GLOBAL[".advSearchFields"][] = "AÑO6";

$tdataREPORTE_GLOBAL[".tableType"] = "report";

$tdataREPORTE_GLOBAL[".printerPageOrientation"] = 1;
$tdataREPORTE_GLOBAL[".nPrinterPageScale"] = 100;

$tdataREPORTE_GLOBAL[".nPrinterSplitRecords"] = 40;

$tdataREPORTE_GLOBAL[".nPrinterPDFSplitRecords"] = 40;



$tdataREPORTE_GLOBAL[".geocodingEnabled"] = false;

//report settings
$tdataREPORTE_GLOBAL[".printReportLayout"] = 6;

$tdataREPORTE_GLOBAL[".reportPrintPartitionType"] = 1;
$tdataREPORTE_GLOBAL[".reportPrintGroupsPerPage"] = 40;
$tdataREPORTE_GLOBAL[".reportPrintPDFGroupsPerPage"] = 40;
$tdataREPORTE_GLOBAL[".lowGroup"] = 0;



$tdataREPORTE_GLOBAL[".pageSize"] = 20;






$tdataREPORTE_GLOBAL[".repShowDet"] = true;

$tdataREPORTE_GLOBAL[".reportLayout"] = 6;

//end of report settings




$tdataREPORTE_GLOBAL[".listGridLayout"] = 3;





// view page pdf

// print page pdf
$tdataREPORTE_GLOBAL[".isPrinterPagePDF"] = true;
$tdataREPORTE_GLOBAL[".isLandscapePrinterPagePDFOrientation"] = 1;
$tdataREPORTE_GLOBAL[".nPrinterPagePDFScale"] = 100;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataREPORTE_GLOBAL[".strOrderBy"] = $tstrOrderBy;

$tdataREPORTE_GLOBAL[".orderindexes"] = array();

$tdataREPORTE_GLOBAL[".sqlHead"] = "SELECT finca.PROPIETARIO_CEDULA,  finca.NOMBRE,  finca.VEREDA,  finca.FINCA,  finca.AREA_FINCA,  finca.LINEA_PRINCIPAL,  finca.`AREA_ L_P`,  finca.`AÑO`,  lineas_agrarias.LINEA AS LINEAS_AGRARIAS,  lineas_agrarias.VARIEDAD,  lineas_agrarias.AREA,  lineas_agrarias.PRODUCCION_ANUAL,  lineas_agrarias.`AÑO` AS `AÑO1`,  agricola.VARIEDAD AS VARIEDAD_AGRICOLA,  agricola.AREA AS AREA1,  agricola.PRODUCCION_ANUAL AS PRODUCCION_ANUAL1,  agricola.`AÑO` AS `AÑO2`,  pecuario.RAZA AS RAZA_PECUARIO,  pecuario.U_A,  pecuario.AREA AS AREA2,  pecuario.PRODUCCION_ANUAL AS PRODUCCION_ANUAL2,  pecuario.`AÑO` AS `AÑO3`,  hortifruticola.VARIEDAD AS VARIEDAD_HORTIFRUTICOLA,  hortifruticola.AREA AS AREA3,  hortifruticola.PRODUCCION_ANUAL AS PRODUCCION_ANUAL3,  hortifruticola.`AÑO` AS `AÑO4`,  legal.TENECIA AS TENENCIA_LEGAL,  legal.SOPORTE,  legal.RUAT,  legal.ASOCIACION,  legal.OBSERVACIONES,  legal.`AÑO` AS `AÑO5`,  inversion.TIPO AS TIPO_INVERSION,  inversion.NOMBRE_PROYECTO,  inversion.OBSERVACIONES AS OBSERVACIONES1,  inversion.`AÑO` AS `AÑO6`";
$tdataREPORTE_GLOBAL[".sqlFrom"] = "FROM finca  LEFT OUTER JOIN lineas_agrarias ON finca.PROPIETARIO_CEDULA = lineas_agrarias.FINCA_PROPIETARIO_CEDULA  LEFT OUTER JOIN agricola ON finca.PROPIETARIO_CEDULA = agricola.FINCA_PROPIETARIO_CEDULA  LEFT OUTER JOIN pecuario ON finca.PROPIETARIO_CEDULA = pecuario.FINCA_PROPIETARIO_CEDULA  LEFT OUTER JOIN hortifruticola ON finca.PROPIETARIO_CEDULA = hortifruticola.FINCA_PROPIETARIO_CEDULA  LEFT OUTER JOIN legal ON finca.PROPIETARIO_CEDULA = legal.FINCA_PROPIETARIO_CEDULA  LEFT OUTER JOIN inversion ON finca.PROPIETARIO_CEDULA = inversion.FINCA_PROPIETARIO_CEDULA";
$tdataREPORTE_GLOBAL[".sqlWhereExpr"] = "";
$tdataREPORTE_GLOBAL[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataREPORTE_GLOBAL[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataREPORTE_GLOBAL[".arrGroupsPerPage"] = $arrGPP;

$tdataREPORTE_GLOBAL[".highlightSearchResults"] = true;

$tableKeysREPORTE_GLOBAL = array();
$tableKeysREPORTE_GLOBAL[] = "PROPIETARIO_CEDULA";
$tdataREPORTE_GLOBAL[".Keys"] = $tableKeysREPORTE_GLOBAL;

$tdataREPORTE_GLOBAL[".listFields"] = array();
$tdataREPORTE_GLOBAL[".listFields"][] = "PROPIETARIO_CEDULA";
$tdataREPORTE_GLOBAL[".listFields"][] = "NOMBRE";
$tdataREPORTE_GLOBAL[".listFields"][] = "VEREDA";
$tdataREPORTE_GLOBAL[".listFields"][] = "FINCA";
$tdataREPORTE_GLOBAL[".listFields"][] = "AREA_FINCA";
$tdataREPORTE_GLOBAL[".listFields"][] = "LINEA_PRINCIPAL";
$tdataREPORTE_GLOBAL[".listFields"][] = "AREA_ L_P";
$tdataREPORTE_GLOBAL[".listFields"][] = "AÑO";
$tdataREPORTE_GLOBAL[".listFields"][] = "LINEAS_AGRARIAS";
$tdataREPORTE_GLOBAL[".listFields"][] = "VARIEDAD";
$tdataREPORTE_GLOBAL[".listFields"][] = "AREA";
$tdataREPORTE_GLOBAL[".listFields"][] = "PRODUCCION_ANUAL";
$tdataREPORTE_GLOBAL[".listFields"][] = "AÑO1";
$tdataREPORTE_GLOBAL[".listFields"][] = "VARIEDAD_AGRICOLA";
$tdataREPORTE_GLOBAL[".listFields"][] = "AREA1";
$tdataREPORTE_GLOBAL[".listFields"][] = "PRODUCCION_ANUAL1";
$tdataREPORTE_GLOBAL[".listFields"][] = "AÑO2";
$tdataREPORTE_GLOBAL[".listFields"][] = "RAZA_PECUARIO";
$tdataREPORTE_GLOBAL[".listFields"][] = "U_A";
$tdataREPORTE_GLOBAL[".listFields"][] = "AREA2";
$tdataREPORTE_GLOBAL[".listFields"][] = "PRODUCCION_ANUAL2";
$tdataREPORTE_GLOBAL[".listFields"][] = "AÑO3";
$tdataREPORTE_GLOBAL[".listFields"][] = "VARIEDAD_HORTIFRUTICOLA";
$tdataREPORTE_GLOBAL[".listFields"][] = "AREA3";
$tdataREPORTE_GLOBAL[".listFields"][] = "PRODUCCION_ANUAL3";
$tdataREPORTE_GLOBAL[".listFields"][] = "AÑO4";
$tdataREPORTE_GLOBAL[".listFields"][] = "TENENCIA_LEGAL";
$tdataREPORTE_GLOBAL[".listFields"][] = "SOPORTE";
$tdataREPORTE_GLOBAL[".listFields"][] = "RUAT";
$tdataREPORTE_GLOBAL[".listFields"][] = "ASOCIACION";
$tdataREPORTE_GLOBAL[".listFields"][] = "OBSERVACIONES";
$tdataREPORTE_GLOBAL[".listFields"][] = "AÑO5";
$tdataREPORTE_GLOBAL[".listFields"][] = "TIPO_INVERSION";
$tdataREPORTE_GLOBAL[".listFields"][] = "NOMBRE_PROYECTO";
$tdataREPORTE_GLOBAL[".listFields"][] = "OBSERVACIONES1";
$tdataREPORTE_GLOBAL[".listFields"][] = "AÑO6";

$tdataREPORTE_GLOBAL[".hideMobileList"] = array();


$tdataREPORTE_GLOBAL[".viewFields"] = array();
$tdataREPORTE_GLOBAL[".viewFields"][] = "PROPIETARIO_CEDULA";
$tdataREPORTE_GLOBAL[".viewFields"][] = "NOMBRE";
$tdataREPORTE_GLOBAL[".viewFields"][] = "VEREDA";
$tdataREPORTE_GLOBAL[".viewFields"][] = "FINCA";
$tdataREPORTE_GLOBAL[".viewFields"][] = "AREA_FINCA";
$tdataREPORTE_GLOBAL[".viewFields"][] = "LINEA_PRINCIPAL";
$tdataREPORTE_GLOBAL[".viewFields"][] = "AREA_ L_P";
$tdataREPORTE_GLOBAL[".viewFields"][] = "AÑO";
$tdataREPORTE_GLOBAL[".viewFields"][] = "LINEAS_AGRARIAS";
$tdataREPORTE_GLOBAL[".viewFields"][] = "VARIEDAD";
$tdataREPORTE_GLOBAL[".viewFields"][] = "AREA";
$tdataREPORTE_GLOBAL[".viewFields"][] = "PRODUCCION_ANUAL";
$tdataREPORTE_GLOBAL[".viewFields"][] = "AÑO1";
$tdataREPORTE_GLOBAL[".viewFields"][] = "VARIEDAD_AGRICOLA";
$tdataREPORTE_GLOBAL[".viewFields"][] = "AREA1";
$tdataREPORTE_GLOBAL[".viewFields"][] = "PRODUCCION_ANUAL1";
$tdataREPORTE_GLOBAL[".viewFields"][] = "AÑO2";
$tdataREPORTE_GLOBAL[".viewFields"][] = "RAZA_PECUARIO";
$tdataREPORTE_GLOBAL[".viewFields"][] = "U_A";
$tdataREPORTE_GLOBAL[".viewFields"][] = "AREA2";
$tdataREPORTE_GLOBAL[".viewFields"][] = "PRODUCCION_ANUAL2";
$tdataREPORTE_GLOBAL[".viewFields"][] = "AÑO3";
$tdataREPORTE_GLOBAL[".viewFields"][] = "VARIEDAD_HORTIFRUTICOLA";
$tdataREPORTE_GLOBAL[".viewFields"][] = "AREA3";
$tdataREPORTE_GLOBAL[".viewFields"][] = "PRODUCCION_ANUAL3";
$tdataREPORTE_GLOBAL[".viewFields"][] = "AÑO4";
$tdataREPORTE_GLOBAL[".viewFields"][] = "TENENCIA_LEGAL";
$tdataREPORTE_GLOBAL[".viewFields"][] = "SOPORTE";
$tdataREPORTE_GLOBAL[".viewFields"][] = "RUAT";
$tdataREPORTE_GLOBAL[".viewFields"][] = "ASOCIACION";
$tdataREPORTE_GLOBAL[".viewFields"][] = "OBSERVACIONES";
$tdataREPORTE_GLOBAL[".viewFields"][] = "AÑO5";
$tdataREPORTE_GLOBAL[".viewFields"][] = "TIPO_INVERSION";
$tdataREPORTE_GLOBAL[".viewFields"][] = "NOMBRE_PROYECTO";
$tdataREPORTE_GLOBAL[".viewFields"][] = "OBSERVACIONES1";
$tdataREPORTE_GLOBAL[".viewFields"][] = "AÑO6";

$tdataREPORTE_GLOBAL[".addFields"] = array();
$tdataREPORTE_GLOBAL[".addFields"][] = "PROPIETARIO_CEDULA";
$tdataREPORTE_GLOBAL[".addFields"][] = "NOMBRE";
$tdataREPORTE_GLOBAL[".addFields"][] = "VEREDA";
$tdataREPORTE_GLOBAL[".addFields"][] = "FINCA";
$tdataREPORTE_GLOBAL[".addFields"][] = "AREA_FINCA";
$tdataREPORTE_GLOBAL[".addFields"][] = "LINEA_PRINCIPAL";
$tdataREPORTE_GLOBAL[".addFields"][] = "AREA_ L_P";
$tdataREPORTE_GLOBAL[".addFields"][] = "AÑO";

$tdataREPORTE_GLOBAL[".masterListFields"] = array();
$tdataREPORTE_GLOBAL[".masterListFields"][] = "PROPIETARIO_CEDULA";
$tdataREPORTE_GLOBAL[".masterListFields"][] = "NOMBRE";
$tdataREPORTE_GLOBAL[".masterListFields"][] = "VEREDA";
$tdataREPORTE_GLOBAL[".masterListFields"][] = "FINCA";
$tdataREPORTE_GLOBAL[".masterListFields"][] = "AREA_FINCA";
$tdataREPORTE_GLOBAL[".masterListFields"][] = "LINEA_PRINCIPAL";
$tdataREPORTE_GLOBAL[".masterListFields"][] = "AREA_ L_P";
$tdataREPORTE_GLOBAL[".masterListFields"][] = "AÑO";
$tdataREPORTE_GLOBAL[".masterListFields"][] = "LINEAS_AGRARIAS";
$tdataREPORTE_GLOBAL[".masterListFields"][] = "VARIEDAD";
$tdataREPORTE_GLOBAL[".masterListFields"][] = "AREA";
$tdataREPORTE_GLOBAL[".masterListFields"][] = "PRODUCCION_ANUAL";
$tdataREPORTE_GLOBAL[".masterListFields"][] = "AÑO1";
$tdataREPORTE_GLOBAL[".masterListFields"][] = "VARIEDAD_AGRICOLA";
$tdataREPORTE_GLOBAL[".masterListFields"][] = "AREA1";
$tdataREPORTE_GLOBAL[".masterListFields"][] = "PRODUCCION_ANUAL1";
$tdataREPORTE_GLOBAL[".masterListFields"][] = "AÑO2";
$tdataREPORTE_GLOBAL[".masterListFields"][] = "RAZA_PECUARIO";
$tdataREPORTE_GLOBAL[".masterListFields"][] = "U_A";
$tdataREPORTE_GLOBAL[".masterListFields"][] = "AREA2";
$tdataREPORTE_GLOBAL[".masterListFields"][] = "PRODUCCION_ANUAL2";
$tdataREPORTE_GLOBAL[".masterListFields"][] = "AÑO3";
$tdataREPORTE_GLOBAL[".masterListFields"][] = "VARIEDAD_HORTIFRUTICOLA";
$tdataREPORTE_GLOBAL[".masterListFields"][] = "AREA3";
$tdataREPORTE_GLOBAL[".masterListFields"][] = "PRODUCCION_ANUAL3";
$tdataREPORTE_GLOBAL[".masterListFields"][] = "AÑO4";
$tdataREPORTE_GLOBAL[".masterListFields"][] = "TENENCIA_LEGAL";
$tdataREPORTE_GLOBAL[".masterListFields"][] = "SOPORTE";
$tdataREPORTE_GLOBAL[".masterListFields"][] = "RUAT";
$tdataREPORTE_GLOBAL[".masterListFields"][] = "ASOCIACION";
$tdataREPORTE_GLOBAL[".masterListFields"][] = "OBSERVACIONES";
$tdataREPORTE_GLOBAL[".masterListFields"][] = "AÑO5";
$tdataREPORTE_GLOBAL[".masterListFields"][] = "TIPO_INVERSION";
$tdataREPORTE_GLOBAL[".masterListFields"][] = "NOMBRE_PROYECTO";
$tdataREPORTE_GLOBAL[".masterListFields"][] = "OBSERVACIONES1";
$tdataREPORTE_GLOBAL[".masterListFields"][] = "AÑO6";

$tdataREPORTE_GLOBAL[".inlineAddFields"] = array();
$tdataREPORTE_GLOBAL[".inlineAddFields"][] = "PROPIETARIO_CEDULA";
$tdataREPORTE_GLOBAL[".inlineAddFields"][] = "NOMBRE";
$tdataREPORTE_GLOBAL[".inlineAddFields"][] = "VEREDA";
$tdataREPORTE_GLOBAL[".inlineAddFields"][] = "FINCA";
$tdataREPORTE_GLOBAL[".inlineAddFields"][] = "AREA_FINCA";
$tdataREPORTE_GLOBAL[".inlineAddFields"][] = "LINEA_PRINCIPAL";
$tdataREPORTE_GLOBAL[".inlineAddFields"][] = "AREA_ L_P";
$tdataREPORTE_GLOBAL[".inlineAddFields"][] = "AÑO";

$tdataREPORTE_GLOBAL[".editFields"] = array();
$tdataREPORTE_GLOBAL[".editFields"][] = "PROPIETARIO_CEDULA";
$tdataREPORTE_GLOBAL[".editFields"][] = "NOMBRE";
$tdataREPORTE_GLOBAL[".editFields"][] = "VEREDA";
$tdataREPORTE_GLOBAL[".editFields"][] = "FINCA";
$tdataREPORTE_GLOBAL[".editFields"][] = "AREA_FINCA";
$tdataREPORTE_GLOBAL[".editFields"][] = "LINEA_PRINCIPAL";
$tdataREPORTE_GLOBAL[".editFields"][] = "AREA_ L_P";
$tdataREPORTE_GLOBAL[".editFields"][] = "AÑO";

$tdataREPORTE_GLOBAL[".inlineEditFields"] = array();
$tdataREPORTE_GLOBAL[".inlineEditFields"][] = "PROPIETARIO_CEDULA";
$tdataREPORTE_GLOBAL[".inlineEditFields"][] = "NOMBRE";
$tdataREPORTE_GLOBAL[".inlineEditFields"][] = "VEREDA";
$tdataREPORTE_GLOBAL[".inlineEditFields"][] = "FINCA";
$tdataREPORTE_GLOBAL[".inlineEditFields"][] = "AREA_FINCA";
$tdataREPORTE_GLOBAL[".inlineEditFields"][] = "LINEA_PRINCIPAL";
$tdataREPORTE_GLOBAL[".inlineEditFields"][] = "AREA_ L_P";
$tdataREPORTE_GLOBAL[".inlineEditFields"][] = "AÑO";

$tdataREPORTE_GLOBAL[".exportFields"] = array();
$tdataREPORTE_GLOBAL[".exportFields"][] = "PROPIETARIO_CEDULA";
$tdataREPORTE_GLOBAL[".exportFields"][] = "NOMBRE";
$tdataREPORTE_GLOBAL[".exportFields"][] = "VEREDA";
$tdataREPORTE_GLOBAL[".exportFields"][] = "FINCA";
$tdataREPORTE_GLOBAL[".exportFields"][] = "AREA_FINCA";
$tdataREPORTE_GLOBAL[".exportFields"][] = "LINEA_PRINCIPAL";
$tdataREPORTE_GLOBAL[".exportFields"][] = "AREA_ L_P";
$tdataREPORTE_GLOBAL[".exportFields"][] = "AÑO";
$tdataREPORTE_GLOBAL[".exportFields"][] = "LINEAS_AGRARIAS";
$tdataREPORTE_GLOBAL[".exportFields"][] = "VARIEDAD";
$tdataREPORTE_GLOBAL[".exportFields"][] = "AREA";
$tdataREPORTE_GLOBAL[".exportFields"][] = "PRODUCCION_ANUAL";
$tdataREPORTE_GLOBAL[".exportFields"][] = "AÑO1";
$tdataREPORTE_GLOBAL[".exportFields"][] = "VARIEDAD_AGRICOLA";
$tdataREPORTE_GLOBAL[".exportFields"][] = "AREA1";
$tdataREPORTE_GLOBAL[".exportFields"][] = "PRODUCCION_ANUAL1";
$tdataREPORTE_GLOBAL[".exportFields"][] = "AÑO2";
$tdataREPORTE_GLOBAL[".exportFields"][] = "RAZA_PECUARIO";
$tdataREPORTE_GLOBAL[".exportFields"][] = "U_A";
$tdataREPORTE_GLOBAL[".exportFields"][] = "AREA2";
$tdataREPORTE_GLOBAL[".exportFields"][] = "PRODUCCION_ANUAL2";
$tdataREPORTE_GLOBAL[".exportFields"][] = "AÑO3";
$tdataREPORTE_GLOBAL[".exportFields"][] = "VARIEDAD_HORTIFRUTICOLA";
$tdataREPORTE_GLOBAL[".exportFields"][] = "AREA3";
$tdataREPORTE_GLOBAL[".exportFields"][] = "PRODUCCION_ANUAL3";
$tdataREPORTE_GLOBAL[".exportFields"][] = "AÑO4";
$tdataREPORTE_GLOBAL[".exportFields"][] = "TENENCIA_LEGAL";
$tdataREPORTE_GLOBAL[".exportFields"][] = "SOPORTE";
$tdataREPORTE_GLOBAL[".exportFields"][] = "RUAT";
$tdataREPORTE_GLOBAL[".exportFields"][] = "ASOCIACION";
$tdataREPORTE_GLOBAL[".exportFields"][] = "OBSERVACIONES";
$tdataREPORTE_GLOBAL[".exportFields"][] = "AÑO5";
$tdataREPORTE_GLOBAL[".exportFields"][] = "TIPO_INVERSION";
$tdataREPORTE_GLOBAL[".exportFields"][] = "NOMBRE_PROYECTO";
$tdataREPORTE_GLOBAL[".exportFields"][] = "OBSERVACIONES1";
$tdataREPORTE_GLOBAL[".exportFields"][] = "AÑO6";

$tdataREPORTE_GLOBAL[".importFields"] = array();
$tdataREPORTE_GLOBAL[".importFields"][] = "PROPIETARIO_CEDULA";
$tdataREPORTE_GLOBAL[".importFields"][] = "NOMBRE";
$tdataREPORTE_GLOBAL[".importFields"][] = "VEREDA";
$tdataREPORTE_GLOBAL[".importFields"][] = "FINCA";
$tdataREPORTE_GLOBAL[".importFields"][] = "AREA_FINCA";
$tdataREPORTE_GLOBAL[".importFields"][] = "LINEA_PRINCIPAL";
$tdataREPORTE_GLOBAL[".importFields"][] = "AREA_ L_P";
$tdataREPORTE_GLOBAL[".importFields"][] = "AÑO";
$tdataREPORTE_GLOBAL[".importFields"][] = "LINEAS_AGRARIAS";
$tdataREPORTE_GLOBAL[".importFields"][] = "VARIEDAD";
$tdataREPORTE_GLOBAL[".importFields"][] = "AREA";
$tdataREPORTE_GLOBAL[".importFields"][] = "PRODUCCION_ANUAL";
$tdataREPORTE_GLOBAL[".importFields"][] = "AÑO1";
$tdataREPORTE_GLOBAL[".importFields"][] = "VARIEDAD_AGRICOLA";
$tdataREPORTE_GLOBAL[".importFields"][] = "AREA1";
$tdataREPORTE_GLOBAL[".importFields"][] = "PRODUCCION_ANUAL1";
$tdataREPORTE_GLOBAL[".importFields"][] = "AÑO2";
$tdataREPORTE_GLOBAL[".importFields"][] = "RAZA_PECUARIO";
$tdataREPORTE_GLOBAL[".importFields"][] = "U_A";
$tdataREPORTE_GLOBAL[".importFields"][] = "AREA2";
$tdataREPORTE_GLOBAL[".importFields"][] = "PRODUCCION_ANUAL2";
$tdataREPORTE_GLOBAL[".importFields"][] = "AÑO3";
$tdataREPORTE_GLOBAL[".importFields"][] = "VARIEDAD_HORTIFRUTICOLA";
$tdataREPORTE_GLOBAL[".importFields"][] = "AREA3";
$tdataREPORTE_GLOBAL[".importFields"][] = "PRODUCCION_ANUAL3";
$tdataREPORTE_GLOBAL[".importFields"][] = "AÑO4";
$tdataREPORTE_GLOBAL[".importFields"][] = "TENENCIA_LEGAL";
$tdataREPORTE_GLOBAL[".importFields"][] = "SOPORTE";
$tdataREPORTE_GLOBAL[".importFields"][] = "RUAT";
$tdataREPORTE_GLOBAL[".importFields"][] = "ASOCIACION";
$tdataREPORTE_GLOBAL[".importFields"][] = "OBSERVACIONES";
$tdataREPORTE_GLOBAL[".importFields"][] = "AÑO5";
$tdataREPORTE_GLOBAL[".importFields"][] = "TIPO_INVERSION";
$tdataREPORTE_GLOBAL[".importFields"][] = "NOMBRE_PROYECTO";
$tdataREPORTE_GLOBAL[".importFields"][] = "OBSERVACIONES1";
$tdataREPORTE_GLOBAL[".importFields"][] = "AÑO6";

$tdataREPORTE_GLOBAL[".printFields"] = array();
$tdataREPORTE_GLOBAL[".printFields"][] = "PROPIETARIO_CEDULA";
$tdataREPORTE_GLOBAL[".printFields"][] = "NOMBRE";
$tdataREPORTE_GLOBAL[".printFields"][] = "VEREDA";
$tdataREPORTE_GLOBAL[".printFields"][] = "FINCA";
$tdataREPORTE_GLOBAL[".printFields"][] = "AREA_FINCA";
$tdataREPORTE_GLOBAL[".printFields"][] = "LINEA_PRINCIPAL";
$tdataREPORTE_GLOBAL[".printFields"][] = "AREA_ L_P";
$tdataREPORTE_GLOBAL[".printFields"][] = "AÑO";
$tdataREPORTE_GLOBAL[".printFields"][] = "LINEAS_AGRARIAS";
$tdataREPORTE_GLOBAL[".printFields"][] = "VARIEDAD";
$tdataREPORTE_GLOBAL[".printFields"][] = "AREA";
$tdataREPORTE_GLOBAL[".printFields"][] = "PRODUCCION_ANUAL";
$tdataREPORTE_GLOBAL[".printFields"][] = "AÑO1";
$tdataREPORTE_GLOBAL[".printFields"][] = "VARIEDAD_AGRICOLA";
$tdataREPORTE_GLOBAL[".printFields"][] = "AREA1";
$tdataREPORTE_GLOBAL[".printFields"][] = "PRODUCCION_ANUAL1";
$tdataREPORTE_GLOBAL[".printFields"][] = "AÑO2";
$tdataREPORTE_GLOBAL[".printFields"][] = "RAZA_PECUARIO";
$tdataREPORTE_GLOBAL[".printFields"][] = "U_A";
$tdataREPORTE_GLOBAL[".printFields"][] = "AREA2";
$tdataREPORTE_GLOBAL[".printFields"][] = "PRODUCCION_ANUAL2";
$tdataREPORTE_GLOBAL[".printFields"][] = "AÑO3";
$tdataREPORTE_GLOBAL[".printFields"][] = "VARIEDAD_HORTIFRUTICOLA";
$tdataREPORTE_GLOBAL[".printFields"][] = "AREA3";
$tdataREPORTE_GLOBAL[".printFields"][] = "PRODUCCION_ANUAL3";
$tdataREPORTE_GLOBAL[".printFields"][] = "AÑO4";
$tdataREPORTE_GLOBAL[".printFields"][] = "TENENCIA_LEGAL";
$tdataREPORTE_GLOBAL[".printFields"][] = "SOPORTE";
$tdataREPORTE_GLOBAL[".printFields"][] = "RUAT";
$tdataREPORTE_GLOBAL[".printFields"][] = "ASOCIACION";
$tdataREPORTE_GLOBAL[".printFields"][] = "OBSERVACIONES";
$tdataREPORTE_GLOBAL[".printFields"][] = "AÑO5";
$tdataREPORTE_GLOBAL[".printFields"][] = "TIPO_INVERSION";
$tdataREPORTE_GLOBAL[".printFields"][] = "NOMBRE_PROYECTO";
$tdataREPORTE_GLOBAL[".printFields"][] = "OBSERVACIONES1";
$tdataREPORTE_GLOBAL[".printFields"][] = "AÑO6";

//	PROPIETARIO_CEDULA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PROPIETARIO_CEDULA";
	$fdata["GoodName"] = "PROPIETARIO_CEDULA";
	$fdata["ownerTable"] = "finca";
	$fdata["Label"] = GetFieldLabel("REPORTE_GLOBAL","PROPIETARIO_CEDULA");
	$fdata["FieldType"] = 3;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PROPIETARIO_CEDULA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "finca.PROPIETARIO_CEDULA";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "propietario";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"NOMBRE", 'lookupF'=>"NOMBRE");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "CEDULA";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "CEDULA";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataREPORTE_GLOBAL["PROPIETARIO_CEDULA"] = $fdata;
//	NOMBRE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "NOMBRE";
	$fdata["GoodName"] = "NOMBRE";
	$fdata["ownerTable"] = "finca";
	$fdata["Label"] = GetFieldLabel("REPORTE_GLOBAL","NOMBRE");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NOMBRE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "finca.NOMBRE";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "propietario";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "NOMBRE";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "NOMBRE";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataREPORTE_GLOBAL["NOMBRE"] = $fdata;
//	VEREDA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "VEREDA";
	$fdata["GoodName"] = "VEREDA";
	$fdata["ownerTable"] = "finca";
	$fdata["Label"] = GetFieldLabel("REPORTE_GLOBAL","VEREDA");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "VEREDA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "finca.VEREDA";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "La Antigua";
	$edata["LookupValues"][] = "La Aurora";
	$edata["LookupValues"][] = "La Despensa";
	$edata["LookupValues"][] = "Ricaurte";
	$edata["LookupValues"][] = "San Antonio";
	$edata["LookupValues"][] = "San Cayetano";
	$edata["LookupValues"][] = "San Emigdio";
	$edata["LookupValues"][] = "San Isidro";
	$edata["LookupValues"][] = "San Rafael";
	$edata["LookupValues"][] = "San Ignacio";
	$edata["LookupValues"][] = "Santa Ana";
	$edata["LookupValues"][] = "Santa Barbara";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataREPORTE_GLOBAL["VEREDA"] = $fdata;
//	FINCA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "FINCA";
	$fdata["GoodName"] = "FINCA";
	$fdata["ownerTable"] = "finca";
	$fdata["Label"] = GetFieldLabel("REPORTE_GLOBAL","FINCA");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "FINCA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "finca.FINCA";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=45";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataREPORTE_GLOBAL["FINCA"] = $fdata;
//	AREA_FINCA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "AREA_FINCA";
	$fdata["GoodName"] = "AREA_FINCA";
	$fdata["ownerTable"] = "finca";
	$fdata["Label"] = GetFieldLabel("REPORTE_GLOBAL","AREA_FINCA");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AREA_FINCA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "finca.AREA_FINCA";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataREPORTE_GLOBAL["AREA_FINCA"] = $fdata;
//	LINEA_PRINCIPAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "LINEA_PRINCIPAL";
	$fdata["GoodName"] = "LINEA_PRINCIPAL";
	$fdata["ownerTable"] = "finca";
	$fdata["Label"] = GetFieldLabel("REPORTE_GLOBAL","LINEA_PRINCIPAL");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LINEA_PRINCIPAL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "finca.LINEA_PRINCIPAL";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Caña";
	$edata["LookupValues"][] = "Cafe";
	$edata["LookupValues"][] = "Hortifruticola";
	$edata["LookupValues"][] = "Agricola";
	$edata["LookupValues"][] = "Pecuario";
	$edata["LookupValues"][] = "Ninguna";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataREPORTE_GLOBAL["LINEA_PRINCIPAL"] = $fdata;
//	AREA_ L_P
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "AREA_ L_P";
	$fdata["GoodName"] = "AREA__L_P";
	$fdata["ownerTable"] = "finca";
	$fdata["Label"] = GetFieldLabel("REPORTE_GLOBAL","AREA__L_P");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AREA_ L_P";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "finca.`AREA_ L_P`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataREPORTE_GLOBAL["AREA_ L_P"] = $fdata;
//	AÑO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "AÑO";
	$fdata["GoodName"] = "A_O";
	$fdata["ownerTable"] = "finca";
	$fdata["Label"] = GetFieldLabel("REPORTE_GLOBAL","A_O");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AÑO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "finca.`AÑO`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=45";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataREPORTE_GLOBAL["AÑO"] = $fdata;
//	LINEAS_AGRARIAS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "LINEAS_AGRARIAS";
	$fdata["GoodName"] = "LINEAS_AGRARIAS";
	$fdata["ownerTable"] = "lineas_agrarias";
	$fdata["Label"] = GetFieldLabel("REPORTE_GLOBAL","LINEAS_AGRARIAS");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LINEA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lineas_agrarias.LINEA";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataREPORTE_GLOBAL["LINEAS_AGRARIAS"] = $fdata;
//	VARIEDAD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "VARIEDAD";
	$fdata["GoodName"] = "VARIEDAD";
	$fdata["ownerTable"] = "lineas_agrarias";
	$fdata["Label"] = GetFieldLabel("REPORTE_GLOBAL","VARIEDAD");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "VARIEDAD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lineas_agrarias.VARIEDAD";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataREPORTE_GLOBAL["VARIEDAD"] = $fdata;
//	AREA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "AREA";
	$fdata["GoodName"] = "AREA";
	$fdata["ownerTable"] = "lineas_agrarias";
	$fdata["Label"] = GetFieldLabel("REPORTE_GLOBAL","AREA");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AREA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lineas_agrarias.AREA";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataREPORTE_GLOBAL["AREA"] = $fdata;
//	PRODUCCION_ANUAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "PRODUCCION_ANUAL";
	$fdata["GoodName"] = "PRODUCCION_ANUAL";
	$fdata["ownerTable"] = "lineas_agrarias";
	$fdata["Label"] = GetFieldLabel("REPORTE_GLOBAL","PRODUCCION_ANUAL");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PRODUCCION_ANUAL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lineas_agrarias.PRODUCCION_ANUAL";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataREPORTE_GLOBAL["PRODUCCION_ANUAL"] = $fdata;
//	AÑO1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "AÑO1";
	$fdata["GoodName"] = "A_O1";
	$fdata["ownerTable"] = "lineas_agrarias";
	$fdata["Label"] = GetFieldLabel("REPORTE_GLOBAL","A_O1");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AÑO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lineas_agrarias.`AÑO`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataREPORTE_GLOBAL["AÑO1"] = $fdata;
//	VARIEDAD_AGRICOLA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "VARIEDAD_AGRICOLA";
	$fdata["GoodName"] = "VARIEDAD_AGRICOLA";
	$fdata["ownerTable"] = "agricola";
	$fdata["Label"] = GetFieldLabel("REPORTE_GLOBAL","VARIEDAD_AGRICOLA");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "VARIEDAD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "agricola.VARIEDAD";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataREPORTE_GLOBAL["VARIEDAD_AGRICOLA"] = $fdata;
//	AREA1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "AREA1";
	$fdata["GoodName"] = "AREA1";
	$fdata["ownerTable"] = "agricola";
	$fdata["Label"] = GetFieldLabel("REPORTE_GLOBAL","AREA1");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AREA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "agricola.AREA";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataREPORTE_GLOBAL["AREA1"] = $fdata;
//	PRODUCCION_ANUAL1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "PRODUCCION_ANUAL1";
	$fdata["GoodName"] = "PRODUCCION_ANUAL1";
	$fdata["ownerTable"] = "agricola";
	$fdata["Label"] = GetFieldLabel("REPORTE_GLOBAL","PRODUCCION_ANUAL1");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PRODUCCION_ANUAL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "agricola.PRODUCCION_ANUAL";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataREPORTE_GLOBAL["PRODUCCION_ANUAL1"] = $fdata;
//	AÑO2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "AÑO2";
	$fdata["GoodName"] = "A_O2";
	$fdata["ownerTable"] = "agricola";
	$fdata["Label"] = GetFieldLabel("REPORTE_GLOBAL","A_O2");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AÑO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "agricola.`AÑO`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataREPORTE_GLOBAL["AÑO2"] = $fdata;
//	RAZA_PECUARIO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "RAZA_PECUARIO";
	$fdata["GoodName"] = "RAZA_PECUARIO";
	$fdata["ownerTable"] = "pecuario";
	$fdata["Label"] = GetFieldLabel("REPORTE_GLOBAL","RAZA_PECUARIO");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RAZA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pecuario.RAZA";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataREPORTE_GLOBAL["RAZA_PECUARIO"] = $fdata;
//	U_A
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "U_A";
	$fdata["GoodName"] = "U_A";
	$fdata["ownerTable"] = "pecuario";
	$fdata["Label"] = GetFieldLabel("REPORTE_GLOBAL","U_A");
	$fdata["FieldType"] = 3;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "U_A";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pecuario.U_A";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataREPORTE_GLOBAL["U_A"] = $fdata;
//	AREA2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "AREA2";
	$fdata["GoodName"] = "AREA2";
	$fdata["ownerTable"] = "pecuario";
	$fdata["Label"] = GetFieldLabel("REPORTE_GLOBAL","AREA2");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AREA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pecuario.AREA";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataREPORTE_GLOBAL["AREA2"] = $fdata;
//	PRODUCCION_ANUAL2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "PRODUCCION_ANUAL2";
	$fdata["GoodName"] = "PRODUCCION_ANUAL2";
	$fdata["ownerTable"] = "pecuario";
	$fdata["Label"] = GetFieldLabel("REPORTE_GLOBAL","PRODUCCION_ANUAL2");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PRODUCCION_ANUAL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pecuario.PRODUCCION_ANUAL";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataREPORTE_GLOBAL["PRODUCCION_ANUAL2"] = $fdata;
//	AÑO3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "AÑO3";
	$fdata["GoodName"] = "A_O3";
	$fdata["ownerTable"] = "pecuario";
	$fdata["Label"] = GetFieldLabel("REPORTE_GLOBAL","A_O3");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AÑO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pecuario.`AÑO`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataREPORTE_GLOBAL["AÑO3"] = $fdata;
//	VARIEDAD_HORTIFRUTICOLA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "VARIEDAD_HORTIFRUTICOLA";
	$fdata["GoodName"] = "VARIEDAD_HORTIFRUTICOLA";
	$fdata["ownerTable"] = "hortifruticola";
	$fdata["Label"] = GetFieldLabel("REPORTE_GLOBAL","VARIEDAD_HORTIFRUTICOLA");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "VARIEDAD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hortifruticola.VARIEDAD";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataREPORTE_GLOBAL["VARIEDAD_HORTIFRUTICOLA"] = $fdata;
//	AREA3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "AREA3";
	$fdata["GoodName"] = "AREA3";
	$fdata["ownerTable"] = "hortifruticola";
	$fdata["Label"] = GetFieldLabel("REPORTE_GLOBAL","AREA3");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AREA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hortifruticola.AREA";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataREPORTE_GLOBAL["AREA3"] = $fdata;
//	PRODUCCION_ANUAL3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "PRODUCCION_ANUAL3";
	$fdata["GoodName"] = "PRODUCCION_ANUAL3";
	$fdata["ownerTable"] = "hortifruticola";
	$fdata["Label"] = GetFieldLabel("REPORTE_GLOBAL","PRODUCCION_ANUAL3");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PRODUCCION_ANUAL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hortifruticola.PRODUCCION_ANUAL";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataREPORTE_GLOBAL["PRODUCCION_ANUAL3"] = $fdata;
//	AÑO4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "AÑO4";
	$fdata["GoodName"] = "A_O4";
	$fdata["ownerTable"] = "hortifruticola";
	$fdata["Label"] = GetFieldLabel("REPORTE_GLOBAL","A_O4");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AÑO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hortifruticola.`AÑO`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataREPORTE_GLOBAL["AÑO4"] = $fdata;
//	TENENCIA_LEGAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "TENENCIA_LEGAL";
	$fdata["GoodName"] = "TENENCIA_LEGAL";
	$fdata["ownerTable"] = "legal";
	$fdata["Label"] = GetFieldLabel("REPORTE_GLOBAL","TENENCIA_LEGAL");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TENECIA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "legal.TENECIA";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataREPORTE_GLOBAL["TENENCIA_LEGAL"] = $fdata;
//	SOPORTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "SOPORTE";
	$fdata["GoodName"] = "SOPORTE";
	$fdata["ownerTable"] = "legal";
	$fdata["Label"] = GetFieldLabel("REPORTE_GLOBAL","SOPORTE");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SOPORTE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "legal.SOPORTE";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataREPORTE_GLOBAL["SOPORTE"] = $fdata;
//	RUAT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "RUAT";
	$fdata["GoodName"] = "RUAT";
	$fdata["ownerTable"] = "legal";
	$fdata["Label"] = GetFieldLabel("REPORTE_GLOBAL","RUAT");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RUAT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "legal.RUAT";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataREPORTE_GLOBAL["RUAT"] = $fdata;
//	ASOCIACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "ASOCIACION";
	$fdata["GoodName"] = "ASOCIACION";
	$fdata["ownerTable"] = "legal";
	$fdata["Label"] = GetFieldLabel("REPORTE_GLOBAL","ASOCIACION");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ASOCIACION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "legal.ASOCIACION";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataREPORTE_GLOBAL["ASOCIACION"] = $fdata;
//	OBSERVACIONES
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "OBSERVACIONES";
	$fdata["GoodName"] = "OBSERVACIONES";
	$fdata["ownerTable"] = "legal";
	$fdata["Label"] = GetFieldLabel("REPORTE_GLOBAL","OBSERVACIONES");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "OBSERVACIONES";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "legal.OBSERVACIONES";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataREPORTE_GLOBAL["OBSERVACIONES"] = $fdata;
//	AÑO5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "AÑO5";
	$fdata["GoodName"] = "A_O5";
	$fdata["ownerTable"] = "legal";
	$fdata["Label"] = GetFieldLabel("REPORTE_GLOBAL","A_O5");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AÑO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "legal.`AÑO`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataREPORTE_GLOBAL["AÑO5"] = $fdata;
//	TIPO_INVERSION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "TIPO_INVERSION";
	$fdata["GoodName"] = "TIPO_INVERSION";
	$fdata["ownerTable"] = "inversion";
	$fdata["Label"] = GetFieldLabel("REPORTE_GLOBAL","TIPO_INVERSION");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TIPO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inversion.TIPO";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataREPORTE_GLOBAL["TIPO_INVERSION"] = $fdata;
//	NOMBRE_PROYECTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "NOMBRE_PROYECTO";
	$fdata["GoodName"] = "NOMBRE_PROYECTO";
	$fdata["ownerTable"] = "inversion";
	$fdata["Label"] = GetFieldLabel("REPORTE_GLOBAL","NOMBRE_PROYECTO");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NOMBRE_PROYECTO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inversion.NOMBRE_PROYECTO";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataREPORTE_GLOBAL["NOMBRE_PROYECTO"] = $fdata;
//	OBSERVACIONES1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "OBSERVACIONES1";
	$fdata["GoodName"] = "OBSERVACIONES1";
	$fdata["ownerTable"] = "inversion";
	$fdata["Label"] = GetFieldLabel("REPORTE_GLOBAL","OBSERVACIONES1");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "OBSERVACIONES";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inversion.OBSERVACIONES";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataREPORTE_GLOBAL["OBSERVACIONES1"] = $fdata;
//	AÑO6
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "AÑO6";
	$fdata["GoodName"] = "A_O6";
	$fdata["ownerTable"] = "inversion";
	$fdata["Label"] = GetFieldLabel("REPORTE_GLOBAL","A_O6");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AÑO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inversion.`AÑO`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataREPORTE_GLOBAL["AÑO6"] = $fdata;


$tables_data["REPORTE GLOBAL"]=&$tdataREPORTE_GLOBAL;
$field_labels["REPORTE_GLOBAL"] = &$fieldLabelsREPORTE_GLOBAL;
$fieldToolTips["REPORTE_GLOBAL"] = &$fieldToolTipsREPORTE_GLOBAL;
$page_titles["REPORTE_GLOBAL"] = &$pageTitlesREPORTE_GLOBAL;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["REPORTE GLOBAL"] = array();
//	agricola
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="agricola";
		$detailsParam["dOriginalTable"] = "agricola";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "agricola";
	$detailsParam["dCaptionTable"] = GetTableCaption("agricola");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "1";
	
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["REPORTE GLOBAL"][$dIndex] = $detailsParam;

	
		$detailsTablesData["REPORTE GLOBAL"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["REPORTE GLOBAL"][$dIndex]["masterKeys"][]="PROPIETARIO_CEDULA";

				$detailsTablesData["REPORTE GLOBAL"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["REPORTE GLOBAL"][$dIndex]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
//	hortifruticola
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="hortifruticola";
		$detailsParam["dOriginalTable"] = "hortifruticola";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "hortifruticola";
	$detailsParam["dCaptionTable"] = GetTableCaption("hortifruticola");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";
	
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["REPORTE GLOBAL"][$dIndex] = $detailsParam;

	
		$detailsTablesData["REPORTE GLOBAL"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["REPORTE GLOBAL"][$dIndex]["masterKeys"][]="PROPIETARIO_CEDULA";

				$detailsTablesData["REPORTE GLOBAL"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["REPORTE GLOBAL"][$dIndex]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
//	inversion
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="inversion";
		$detailsParam["dOriginalTable"] = "inversion";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "inversion";
	$detailsParam["dCaptionTable"] = GetTableCaption("inversion");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";
	
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["REPORTE GLOBAL"][$dIndex] = $detailsParam;

	
		$detailsTablesData["REPORTE GLOBAL"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["REPORTE GLOBAL"][$dIndex]["masterKeys"][]="PROPIETARIO_CEDULA";

				$detailsTablesData["REPORTE GLOBAL"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["REPORTE GLOBAL"][$dIndex]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
//	legal
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="legal";
		$detailsParam["dOriginalTable"] = "legal";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "legal";
	$detailsParam["dCaptionTable"] = GetTableCaption("legal");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";
	
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["REPORTE GLOBAL"][$dIndex] = $detailsParam;

	
		$detailsTablesData["REPORTE GLOBAL"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["REPORTE GLOBAL"][$dIndex]["masterKeys"][]="PROPIETARIO_CEDULA";

				$detailsTablesData["REPORTE GLOBAL"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["REPORTE GLOBAL"][$dIndex]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
//	lineas_agrarias
	
	

		$dIndex = 4;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="lineas_agrarias";
		$detailsParam["dOriginalTable"] = "lineas_agrarias";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lineas_agrarias";
	$detailsParam["dCaptionTable"] = GetTableCaption("lineas_agrarias");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";
	
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["REPORTE GLOBAL"][$dIndex] = $detailsParam;

	
		$detailsTablesData["REPORTE GLOBAL"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["REPORTE GLOBAL"][$dIndex]["masterKeys"][]="PROPIETARIO_CEDULA";

				$detailsTablesData["REPORTE GLOBAL"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["REPORTE GLOBAL"][$dIndex]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
//	pecuario
	
	

		$dIndex = 5;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="pecuario";
		$detailsParam["dOriginalTable"] = "pecuario";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "pecuario";
	$detailsParam["dCaptionTable"] = GetTableCaption("pecuario");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";
	
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["REPORTE GLOBAL"][$dIndex] = $detailsParam;

	
		$detailsTablesData["REPORTE GLOBAL"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["REPORTE GLOBAL"][$dIndex]["masterKeys"][]="PROPIETARIO_CEDULA";

				$detailsTablesData["REPORTE GLOBAL"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["REPORTE GLOBAL"][$dIndex]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";

// tables which are master tables for current table (detail)
$masterTablesData["REPORTE GLOBAL"] = array();


	
				$strOriginalDetailsTable="propietario";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="propietario";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "propietario";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
			
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["REPORTE GLOBAL"][0] = $masterParams;
				$masterTablesData["REPORTE GLOBAL"][0]["masterKeys"] = array();
	$masterTablesData["REPORTE GLOBAL"][0]["masterKeys"][]="CEDULA";
				$masterTablesData["REPORTE GLOBAL"][0]["detailKeys"] = array();
	$masterTablesData["REPORTE GLOBAL"][0]["detailKeys"][]="PROPIETARIO_CEDULA";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_REPORTE_GLOBAL()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "finca.PROPIETARIO_CEDULA,  finca.NOMBRE,  finca.VEREDA,  finca.FINCA,  finca.AREA_FINCA,  finca.LINEA_PRINCIPAL,  finca.`AREA_ L_P`,  finca.`AÑO`,  lineas_agrarias.LINEA AS LINEAS_AGRARIAS,  lineas_agrarias.VARIEDAD,  lineas_agrarias.AREA,  lineas_agrarias.PRODUCCION_ANUAL,  lineas_agrarias.`AÑO` AS `AÑO1`,  agricola.VARIEDAD AS VARIEDAD_AGRICOLA,  agricola.AREA AS AREA1,  agricola.PRODUCCION_ANUAL AS PRODUCCION_ANUAL1,  agricola.`AÑO` AS `AÑO2`,  pecuario.RAZA AS RAZA_PECUARIO,  pecuario.U_A,  pecuario.AREA AS AREA2,  pecuario.PRODUCCION_ANUAL AS PRODUCCION_ANUAL2,  pecuario.`AÑO` AS `AÑO3`,  hortifruticola.VARIEDAD AS VARIEDAD_HORTIFRUTICOLA,  hortifruticola.AREA AS AREA3,  hortifruticola.PRODUCCION_ANUAL AS PRODUCCION_ANUAL3,  hortifruticola.`AÑO` AS `AÑO4`,  legal.TENECIA AS TENENCIA_LEGAL,  legal.SOPORTE,  legal.RUAT,  legal.ASOCIACION,  legal.OBSERVACIONES,  legal.`AÑO` AS `AÑO5`,  inversion.TIPO AS TIPO_INVERSION,  inversion.NOMBRE_PROYECTO,  inversion.OBSERVACIONES AS OBSERVACIONES1,  inversion.`AÑO` AS `AÑO6`";
$proto0["m_strFrom"] = "FROM finca  LEFT OUTER JOIN lineas_agrarias ON finca.PROPIETARIO_CEDULA = lineas_agrarias.FINCA_PROPIETARIO_CEDULA  LEFT OUTER JOIN agricola ON finca.PROPIETARIO_CEDULA = agricola.FINCA_PROPIETARIO_CEDULA  LEFT OUTER JOIN pecuario ON finca.PROPIETARIO_CEDULA = pecuario.FINCA_PROPIETARIO_CEDULA  LEFT OUTER JOIN hortifruticola ON finca.PROPIETARIO_CEDULA = hortifruticola.FINCA_PROPIETARIO_CEDULA  LEFT OUTER JOIN legal ON finca.PROPIETARIO_CEDULA = legal.FINCA_PROPIETARIO_CEDULA  LEFT OUTER JOIN inversion ON finca.PROPIETARIO_CEDULA = inversion.FINCA_PROPIETARIO_CEDULA";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "PROPIETARIO_CEDULA",
	"m_strTable" => "finca",
	"m_srcTableName" => "REPORTE GLOBAL"
));

$proto6["m_sql"] = "finca.PROPIETARIO_CEDULA";
$proto6["m_srcTableName"] = "REPORTE GLOBAL";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBRE",
	"m_strTable" => "finca",
	"m_srcTableName" => "REPORTE GLOBAL"
));

$proto8["m_sql"] = "finca.NOMBRE";
$proto8["m_srcTableName"] = "REPORTE GLOBAL";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "VEREDA",
	"m_strTable" => "finca",
	"m_srcTableName" => "REPORTE GLOBAL"
));

$proto10["m_sql"] = "finca.VEREDA";
$proto10["m_srcTableName"] = "REPORTE GLOBAL";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "FINCA",
	"m_strTable" => "finca",
	"m_srcTableName" => "REPORTE GLOBAL"
));

$proto12["m_sql"] = "finca.FINCA";
$proto12["m_srcTableName"] = "REPORTE GLOBAL";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "AREA_FINCA",
	"m_strTable" => "finca",
	"m_srcTableName" => "REPORTE GLOBAL"
));

$proto14["m_sql"] = "finca.AREA_FINCA";
$proto14["m_srcTableName"] = "REPORTE GLOBAL";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "LINEA_PRINCIPAL",
	"m_strTable" => "finca",
	"m_srcTableName" => "REPORTE GLOBAL"
));

$proto16["m_sql"] = "finca.LINEA_PRINCIPAL";
$proto16["m_srcTableName"] = "REPORTE GLOBAL";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "AREA_ L_P",
	"m_strTable" => "finca",
	"m_srcTableName" => "REPORTE GLOBAL"
));

$proto18["m_sql"] = "finca.`AREA_ L_P`";
$proto18["m_srcTableName"] = "REPORTE GLOBAL";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "finca",
	"m_srcTableName" => "REPORTE GLOBAL"
));

$proto20["m_sql"] = "finca.`AÑO`";
$proto20["m_srcTableName"] = "REPORTE GLOBAL";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "LINEA",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "REPORTE GLOBAL"
));

$proto22["m_sql"] = "lineas_agrarias.LINEA";
$proto22["m_srcTableName"] = "REPORTE GLOBAL";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "LINEAS_AGRARIAS";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "VARIEDAD",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "REPORTE GLOBAL"
));

$proto24["m_sql"] = "lineas_agrarias.VARIEDAD";
$proto24["m_srcTableName"] = "REPORTE GLOBAL";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "AREA",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "REPORTE GLOBAL"
));

$proto26["m_sql"] = "lineas_agrarias.AREA";
$proto26["m_srcTableName"] = "REPORTE GLOBAL";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "PRODUCCION_ANUAL",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "REPORTE GLOBAL"
));

$proto28["m_sql"] = "lineas_agrarias.PRODUCCION_ANUAL";
$proto28["m_srcTableName"] = "REPORTE GLOBAL";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "REPORTE GLOBAL"
));

$proto30["m_sql"] = "lineas_agrarias.`AÑO`";
$proto30["m_srcTableName"] = "REPORTE GLOBAL";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "AÑO1";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "VARIEDAD",
	"m_strTable" => "agricola",
	"m_srcTableName" => "REPORTE GLOBAL"
));

$proto32["m_sql"] = "agricola.VARIEDAD";
$proto32["m_srcTableName"] = "REPORTE GLOBAL";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "VARIEDAD_AGRICOLA";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "AREA",
	"m_strTable" => "agricola",
	"m_srcTableName" => "REPORTE GLOBAL"
));

$proto34["m_sql"] = "agricola.AREA";
$proto34["m_srcTableName"] = "REPORTE GLOBAL";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "AREA1";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "PRODUCCION_ANUAL",
	"m_strTable" => "agricola",
	"m_srcTableName" => "REPORTE GLOBAL"
));

$proto36["m_sql"] = "agricola.PRODUCCION_ANUAL";
$proto36["m_srcTableName"] = "REPORTE GLOBAL";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "PRODUCCION_ANUAL1";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "agricola",
	"m_srcTableName" => "REPORTE GLOBAL"
));

$proto38["m_sql"] = "agricola.`AÑO`";
$proto38["m_srcTableName"] = "REPORTE GLOBAL";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "AÑO2";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "RAZA",
	"m_strTable" => "pecuario",
	"m_srcTableName" => "REPORTE GLOBAL"
));

$proto40["m_sql"] = "pecuario.RAZA";
$proto40["m_srcTableName"] = "REPORTE GLOBAL";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "RAZA_PECUARIO";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "U_A",
	"m_strTable" => "pecuario",
	"m_srcTableName" => "REPORTE GLOBAL"
));

$proto42["m_sql"] = "pecuario.U_A";
$proto42["m_srcTableName"] = "REPORTE GLOBAL";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "AREA",
	"m_strTable" => "pecuario",
	"m_srcTableName" => "REPORTE GLOBAL"
));

$proto44["m_sql"] = "pecuario.AREA";
$proto44["m_srcTableName"] = "REPORTE GLOBAL";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "AREA2";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "PRODUCCION_ANUAL",
	"m_strTable" => "pecuario",
	"m_srcTableName" => "REPORTE GLOBAL"
));

$proto46["m_sql"] = "pecuario.PRODUCCION_ANUAL";
$proto46["m_srcTableName"] = "REPORTE GLOBAL";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "PRODUCCION_ANUAL2";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "pecuario",
	"m_srcTableName" => "REPORTE GLOBAL"
));

$proto48["m_sql"] = "pecuario.`AÑO`";
$proto48["m_srcTableName"] = "REPORTE GLOBAL";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "AÑO3";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "VARIEDAD",
	"m_strTable" => "hortifruticola",
	"m_srcTableName" => "REPORTE GLOBAL"
));

$proto50["m_sql"] = "hortifruticola.VARIEDAD";
$proto50["m_srcTableName"] = "REPORTE GLOBAL";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "VARIEDAD_HORTIFRUTICOLA";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "AREA",
	"m_strTable" => "hortifruticola",
	"m_srcTableName" => "REPORTE GLOBAL"
));

$proto52["m_sql"] = "hortifruticola.AREA";
$proto52["m_srcTableName"] = "REPORTE GLOBAL";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "AREA3";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "PRODUCCION_ANUAL",
	"m_strTable" => "hortifruticola",
	"m_srcTableName" => "REPORTE GLOBAL"
));

$proto54["m_sql"] = "hortifruticola.PRODUCCION_ANUAL";
$proto54["m_srcTableName"] = "REPORTE GLOBAL";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "PRODUCCION_ANUAL3";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "hortifruticola",
	"m_srcTableName" => "REPORTE GLOBAL"
));

$proto56["m_sql"] = "hortifruticola.`AÑO`";
$proto56["m_srcTableName"] = "REPORTE GLOBAL";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "AÑO4";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "TENECIA",
	"m_strTable" => "legal",
	"m_srcTableName" => "REPORTE GLOBAL"
));

$proto58["m_sql"] = "legal.TENECIA";
$proto58["m_srcTableName"] = "REPORTE GLOBAL";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "TENENCIA_LEGAL";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "SOPORTE",
	"m_strTable" => "legal",
	"m_srcTableName" => "REPORTE GLOBAL"
));

$proto60["m_sql"] = "legal.SOPORTE";
$proto60["m_srcTableName"] = "REPORTE GLOBAL";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "RUAT",
	"m_strTable" => "legal",
	"m_srcTableName" => "REPORTE GLOBAL"
));

$proto62["m_sql"] = "legal.RUAT";
$proto62["m_srcTableName"] = "REPORTE GLOBAL";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "ASOCIACION",
	"m_strTable" => "legal",
	"m_srcTableName" => "REPORTE GLOBAL"
));

$proto64["m_sql"] = "legal.ASOCIACION";
$proto64["m_srcTableName"] = "REPORTE GLOBAL";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "OBSERVACIONES",
	"m_strTable" => "legal",
	"m_srcTableName" => "REPORTE GLOBAL"
));

$proto66["m_sql"] = "legal.OBSERVACIONES";
$proto66["m_srcTableName"] = "REPORTE GLOBAL";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "legal",
	"m_srcTableName" => "REPORTE GLOBAL"
));

$proto68["m_sql"] = "legal.`AÑO`";
$proto68["m_srcTableName"] = "REPORTE GLOBAL";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "AÑO5";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "TIPO",
	"m_strTable" => "inversion",
	"m_srcTableName" => "REPORTE GLOBAL"
));

$proto70["m_sql"] = "inversion.TIPO";
$proto70["m_srcTableName"] = "REPORTE GLOBAL";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "TIPO_INVERSION";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBRE_PROYECTO",
	"m_strTable" => "inversion",
	"m_srcTableName" => "REPORTE GLOBAL"
));

$proto72["m_sql"] = "inversion.NOMBRE_PROYECTO";
$proto72["m_srcTableName"] = "REPORTE GLOBAL";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "OBSERVACIONES",
	"m_strTable" => "inversion",
	"m_srcTableName" => "REPORTE GLOBAL"
));

$proto74["m_sql"] = "inversion.OBSERVACIONES";
$proto74["m_srcTableName"] = "REPORTE GLOBAL";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "OBSERVACIONES1";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "inversion",
	"m_srcTableName" => "REPORTE GLOBAL"
));

$proto76["m_sql"] = "inversion.`AÑO`";
$proto76["m_srcTableName"] = "REPORTE GLOBAL";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "AÑO6";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto78=array();
$proto78["m_link"] = "SQLL_MAIN";
			$proto79=array();
$proto79["m_strName"] = "finca";
$proto79["m_srcTableName"] = "REPORTE GLOBAL";
$proto79["m_columns"] = array();
$proto79["m_columns"][] = "ID";
$proto79["m_columns"][] = "PROPIETARIO_CEDULA";
$proto79["m_columns"][] = "NOMBRE";
$proto79["m_columns"][] = "VEREDA";
$proto79["m_columns"][] = "FINCA";
$proto79["m_columns"][] = "ALTURA";
$proto79["m_columns"][] = "GEOREFERENCIA";
$proto79["m_columns"][] = "AREA_FINCA";
$proto79["m_columns"][] = "LINEA_PRINCIPAL";
$proto79["m_columns"][] = "AREA_ L_P";
$proto79["m_columns"][] = "AÑO";
$obj = new SQLTable($proto79);

$proto78["m_table"] = $obj;
$proto78["m_sql"] = "finca";
$proto78["m_alias"] = "";
$proto78["m_srcTableName"] = "REPORTE GLOBAL";
$proto80=array();
$proto80["m_sql"] = "";
$proto80["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto80["m_column"]=$obj;
$proto80["m_contained"] = array();
$proto80["m_strCase"] = "";
$proto80["m_havingmode"] = false;
$proto80["m_inBrackets"] = false;
$proto80["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto80);

$proto78["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto78);

$proto0["m_fromlist"][]=$obj;
												$proto82=array();
$proto82["m_link"] = "SQLL_LEFTJOIN";
			$proto83=array();
$proto83["m_strName"] = "lineas_agrarias";
$proto83["m_srcTableName"] = "REPORTE GLOBAL";
$proto83["m_columns"] = array();
$proto83["m_columns"][] = "ID";
$proto83["m_columns"][] = "FINCA_PROPIETARIO_CEDULA";
$proto83["m_columns"][] = "NOMBRE";
$proto83["m_columns"][] = "VEREDA";
$proto83["m_columns"][] = "FINCA";
$proto83["m_columns"][] = "LINEA";
$proto83["m_columns"][] = "VARIEDAD";
$proto83["m_columns"][] = "AREA";
$proto83["m_columns"][] = "PRODUCCION_ANUAL";
$proto83["m_columns"][] = "AÑO";
$obj = new SQLTable($proto83);

$proto82["m_table"] = $obj;
$proto82["m_sql"] = "LEFT OUTER JOIN lineas_agrarias ON finca.PROPIETARIO_CEDULA = lineas_agrarias.FINCA_PROPIETARIO_CEDULA";
$proto82["m_alias"] = "";
$proto82["m_srcTableName"] = "REPORTE GLOBAL";
$proto84=array();
$proto84["m_sql"] = "finca.PROPIETARIO_CEDULA = lineas_agrarias.FINCA_PROPIETARIO_CEDULA";
$proto84["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "PROPIETARIO_CEDULA",
	"m_strTable" => "finca",
	"m_srcTableName" => "REPORTE GLOBAL"
));

$proto84["m_column"]=$obj;
$proto84["m_contained"] = array();
$proto84["m_strCase"] = "= lineas_agrarias.FINCA_PROPIETARIO_CEDULA";
$proto84["m_havingmode"] = false;
$proto84["m_inBrackets"] = false;
$proto84["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto84);

$proto82["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto82);

$proto0["m_fromlist"][]=$obj;
												$proto86=array();
$proto86["m_link"] = "SQLL_LEFTJOIN";
			$proto87=array();
$proto87["m_strName"] = "agricola";
$proto87["m_srcTableName"] = "REPORTE GLOBAL";
$proto87["m_columns"] = array();
$proto87["m_columns"][] = "ID";
$proto87["m_columns"][] = "FINCA_PROPIETARIO_CEDULA";
$proto87["m_columns"][] = "NOMBRE";
$proto87["m_columns"][] = "VEREDA";
$proto87["m_columns"][] = "FINCA";
$proto87["m_columns"][] = "VARIEDAD";
$proto87["m_columns"][] = "AREA";
$proto87["m_columns"][] = "PRODUCCION_ANUAL";
$proto87["m_columns"][] = "AÑO";
$obj = new SQLTable($proto87);

$proto86["m_table"] = $obj;
$proto86["m_sql"] = "LEFT OUTER JOIN agricola ON finca.PROPIETARIO_CEDULA = agricola.FINCA_PROPIETARIO_CEDULA";
$proto86["m_alias"] = "";
$proto86["m_srcTableName"] = "REPORTE GLOBAL";
$proto88=array();
$proto88["m_sql"] = "finca.PROPIETARIO_CEDULA = agricola.FINCA_PROPIETARIO_CEDULA";
$proto88["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "PROPIETARIO_CEDULA",
	"m_strTable" => "finca",
	"m_srcTableName" => "REPORTE GLOBAL"
));

$proto88["m_column"]=$obj;
$proto88["m_contained"] = array();
$proto88["m_strCase"] = "= agricola.FINCA_PROPIETARIO_CEDULA";
$proto88["m_havingmode"] = false;
$proto88["m_inBrackets"] = false;
$proto88["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto88);

$proto86["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto86);

$proto0["m_fromlist"][]=$obj;
												$proto90=array();
$proto90["m_link"] = "SQLL_LEFTJOIN";
			$proto91=array();
$proto91["m_strName"] = "pecuario";
$proto91["m_srcTableName"] = "REPORTE GLOBAL";
$proto91["m_columns"] = array();
$proto91["m_columns"][] = "ID";
$proto91["m_columns"][] = "FINCA_PROPIETARIO_CEDULA";
$proto91["m_columns"][] = "NOMBRE";
$proto91["m_columns"][] = "VEREDA";
$proto91["m_columns"][] = "FINCA";
$proto91["m_columns"][] = "RAZA";
$proto91["m_columns"][] = "U_A";
$proto91["m_columns"][] = "AREA";
$proto91["m_columns"][] = "PRODUCCION_ANUAL";
$proto91["m_columns"][] = "AÑO";
$obj = new SQLTable($proto91);

$proto90["m_table"] = $obj;
$proto90["m_sql"] = "LEFT OUTER JOIN pecuario ON finca.PROPIETARIO_CEDULA = pecuario.FINCA_PROPIETARIO_CEDULA";
$proto90["m_alias"] = "";
$proto90["m_srcTableName"] = "REPORTE GLOBAL";
$proto92=array();
$proto92["m_sql"] = "finca.PROPIETARIO_CEDULA = pecuario.FINCA_PROPIETARIO_CEDULA";
$proto92["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "PROPIETARIO_CEDULA",
	"m_strTable" => "finca",
	"m_srcTableName" => "REPORTE GLOBAL"
));

$proto92["m_column"]=$obj;
$proto92["m_contained"] = array();
$proto92["m_strCase"] = "= pecuario.FINCA_PROPIETARIO_CEDULA";
$proto92["m_havingmode"] = false;
$proto92["m_inBrackets"] = false;
$proto92["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto92);

$proto90["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto90);

$proto0["m_fromlist"][]=$obj;
												$proto94=array();
$proto94["m_link"] = "SQLL_LEFTJOIN";
			$proto95=array();
$proto95["m_strName"] = "hortifruticola";
$proto95["m_srcTableName"] = "REPORTE GLOBAL";
$proto95["m_columns"] = array();
$proto95["m_columns"][] = "ID";
$proto95["m_columns"][] = "FINCA_PROPIETARIO_CEDULA";
$proto95["m_columns"][] = "NOMBRE";
$proto95["m_columns"][] = "VEREDA";
$proto95["m_columns"][] = "FINCA";
$proto95["m_columns"][] = "VARIEDAD";
$proto95["m_columns"][] = "AREA";
$proto95["m_columns"][] = "PRODUCCION_ANUAL";
$proto95["m_columns"][] = "AÑO";
$obj = new SQLTable($proto95);

$proto94["m_table"] = $obj;
$proto94["m_sql"] = "LEFT OUTER JOIN hortifruticola ON finca.PROPIETARIO_CEDULA = hortifruticola.FINCA_PROPIETARIO_CEDULA";
$proto94["m_alias"] = "";
$proto94["m_srcTableName"] = "REPORTE GLOBAL";
$proto96=array();
$proto96["m_sql"] = "finca.PROPIETARIO_CEDULA = hortifruticola.FINCA_PROPIETARIO_CEDULA";
$proto96["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "PROPIETARIO_CEDULA",
	"m_strTable" => "finca",
	"m_srcTableName" => "REPORTE GLOBAL"
));

$proto96["m_column"]=$obj;
$proto96["m_contained"] = array();
$proto96["m_strCase"] = "= hortifruticola.FINCA_PROPIETARIO_CEDULA";
$proto96["m_havingmode"] = false;
$proto96["m_inBrackets"] = false;
$proto96["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto96);

$proto94["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto94);

$proto0["m_fromlist"][]=$obj;
												$proto98=array();
$proto98["m_link"] = "SQLL_LEFTJOIN";
			$proto99=array();
$proto99["m_strName"] = "legal";
$proto99["m_srcTableName"] = "REPORTE GLOBAL";
$proto99["m_columns"] = array();
$proto99["m_columns"][] = "ID";
$proto99["m_columns"][] = "FINCA_PROPIETARIO_CEDULA";
$proto99["m_columns"][] = "NOMBRE";
$proto99["m_columns"][] = "VEREDA";
$proto99["m_columns"][] = "FINCA";
$proto99["m_columns"][] = "TENECIA";
$proto99["m_columns"][] = "SOPORTE";
$proto99["m_columns"][] = "RUAT";
$proto99["m_columns"][] = "ASOCIACION";
$proto99["m_columns"][] = "OBSERVACIONES";
$proto99["m_columns"][] = "AÑO";
$obj = new SQLTable($proto99);

$proto98["m_table"] = $obj;
$proto98["m_sql"] = "LEFT OUTER JOIN legal ON finca.PROPIETARIO_CEDULA = legal.FINCA_PROPIETARIO_CEDULA";
$proto98["m_alias"] = "";
$proto98["m_srcTableName"] = "REPORTE GLOBAL";
$proto100=array();
$proto100["m_sql"] = "finca.PROPIETARIO_CEDULA = legal.FINCA_PROPIETARIO_CEDULA";
$proto100["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "PROPIETARIO_CEDULA",
	"m_strTable" => "finca",
	"m_srcTableName" => "REPORTE GLOBAL"
));

$proto100["m_column"]=$obj;
$proto100["m_contained"] = array();
$proto100["m_strCase"] = "= legal.FINCA_PROPIETARIO_CEDULA";
$proto100["m_havingmode"] = false;
$proto100["m_inBrackets"] = false;
$proto100["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto100);

$proto98["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto98);

$proto0["m_fromlist"][]=$obj;
												$proto102=array();
$proto102["m_link"] = "SQLL_LEFTJOIN";
			$proto103=array();
$proto103["m_strName"] = "inversion";
$proto103["m_srcTableName"] = "REPORTE GLOBAL";
$proto103["m_columns"] = array();
$proto103["m_columns"][] = "ID";
$proto103["m_columns"][] = "FINCA_PROPIETARIO_CEDULA";
$proto103["m_columns"][] = "NOMBRE";
$proto103["m_columns"][] = "VEREDA";
$proto103["m_columns"][] = "FINCA";
$proto103["m_columns"][] = "TIPO";
$proto103["m_columns"][] = "NOMBRE_PROYECTO";
$proto103["m_columns"][] = "OBSERVACIONES";
$proto103["m_columns"][] = "AÑO";
$obj = new SQLTable($proto103);

$proto102["m_table"] = $obj;
$proto102["m_sql"] = "LEFT OUTER JOIN inversion ON finca.PROPIETARIO_CEDULA = inversion.FINCA_PROPIETARIO_CEDULA";
$proto102["m_alias"] = "";
$proto102["m_srcTableName"] = "REPORTE GLOBAL";
$proto104=array();
$proto104["m_sql"] = "finca.PROPIETARIO_CEDULA = inversion.FINCA_PROPIETARIO_CEDULA";
$proto104["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "PROPIETARIO_CEDULA",
	"m_strTable" => "finca",
	"m_srcTableName" => "REPORTE GLOBAL"
));

$proto104["m_column"]=$obj;
$proto104["m_contained"] = array();
$proto104["m_strCase"] = "= inversion.FINCA_PROPIETARIO_CEDULA";
$proto104["m_havingmode"] = false;
$proto104["m_inBrackets"] = false;
$proto104["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto104);

$proto102["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto102);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto106=array();
						$obj = new SQLField(array(
	"m_strName" => "PROPIETARIO_CEDULA",
	"m_strTable" => "finca",
	"m_srcTableName" => "REPORTE GLOBAL"
));

$proto106["m_column"]=$obj;
$obj = new SQLGroupByItem($proto106);

$proto0["m_groupby"][]=$obj;
												$proto108=array();
						$obj = new SQLField(array(
	"m_strName" => "NOMBRE",
	"m_strTable" => "finca",
	"m_srcTableName" => "REPORTE GLOBAL"
));

$proto108["m_column"]=$obj;
$obj = new SQLGroupByItem($proto108);

$proto0["m_groupby"][]=$obj;
												$proto110=array();
						$obj = new SQLField(array(
	"m_strName" => "VEREDA",
	"m_strTable" => "finca",
	"m_srcTableName" => "REPORTE GLOBAL"
));

$proto110["m_column"]=$obj;
$obj = new SQLGroupByItem($proto110);

$proto0["m_groupby"][]=$obj;
												$proto112=array();
						$obj = new SQLField(array(
	"m_strName" => "FINCA",
	"m_strTable" => "finca",
	"m_srcTableName" => "REPORTE GLOBAL"
));

$proto112["m_column"]=$obj;
$obj = new SQLGroupByItem($proto112);

$proto0["m_groupby"][]=$obj;
												$proto114=array();
						$obj = new SQLField(array(
	"m_strName" => "AREA_FINCA",
	"m_strTable" => "finca",
	"m_srcTableName" => "REPORTE GLOBAL"
));

$proto114["m_column"]=$obj;
$obj = new SQLGroupByItem($proto114);

$proto0["m_groupby"][]=$obj;
												$proto116=array();
						$obj = new SQLField(array(
	"m_strName" => "LINEA_PRINCIPAL",
	"m_strTable" => "finca",
	"m_srcTableName" => "REPORTE GLOBAL"
));

$proto116["m_column"]=$obj;
$obj = new SQLGroupByItem($proto116);

$proto0["m_groupby"][]=$obj;
												$proto118=array();
						$obj = new SQLField(array(
	"m_strName" => "AREA_ L_P",
	"m_strTable" => "finca",
	"m_srcTableName" => "REPORTE GLOBAL"
));

$proto118["m_column"]=$obj;
$obj = new SQLGroupByItem($proto118);

$proto0["m_groupby"][]=$obj;
												$proto120=array();
						$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "finca",
	"m_srcTableName" => "REPORTE GLOBAL"
));

$proto120["m_column"]=$obj;
$obj = new SQLGroupByItem($proto120);

$proto0["m_groupby"][]=$obj;
												$proto122=array();
						$obj = new SQLField(array(
	"m_strName" => "ALTURA",
	"m_strTable" => "finca",
	"m_srcTableName" => "REPORTE GLOBAL"
));

$proto122["m_column"]=$obj;
$obj = new SQLGroupByItem($proto122);

$proto0["m_groupby"][]=$obj;
												$proto124=array();
						$obj = new SQLField(array(
	"m_strName" => "GEOREFERENCIA",
	"m_strTable" => "finca",
	"m_srcTableName" => "REPORTE GLOBAL"
));

$proto124["m_column"]=$obj;
$obj = new SQLGroupByItem($proto124);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="REPORTE GLOBAL";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_REPORTE_GLOBAL = createSqlQuery_REPORTE_GLOBAL();


	
		;

																																				

$tdataREPORTE_GLOBAL[".sqlquery"] = $queryData_REPORTE_GLOBAL;

$tableEvents["REPORTE GLOBAL"] = new eventsBase;
$tdataREPORTE_GLOBAL[".hasEvents"] = false;

?>