<?php
require_once(getabspath("classes/cipherer.php"));




$tdataGrafico_lineas_agrarias = array();
	$tdataGrafico_lineas_agrarias[".ShortName"] = "Grafico_lineas_agrarias";
	$tdataGrafico_lineas_agrarias[".OwnerID"] = "";
	$tdataGrafico_lineas_agrarias[".OriginalTable"] = "lineas_agrarias";

//	field labels
$fieldLabelsGrafico_lineas_agrarias = array();
$fieldToolTipsGrafico_lineas_agrarias = array();
$pageTitlesGrafico_lineas_agrarias = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsGrafico_lineas_agrarias["Spanish"] = array();
	$fieldToolTipsGrafico_lineas_agrarias["Spanish"] = array();
	$pageTitlesGrafico_lineas_agrarias["Spanish"] = array();
	$fieldLabelsGrafico_lineas_agrarias["Spanish"]["ID"] = "ID";
	$fieldToolTipsGrafico_lineas_agrarias["Spanish"]["ID"] = "";
	$fieldLabelsGrafico_lineas_agrarias["Spanish"]["FINCA_PROPIETARIO_CEDULA"] = "FINCA PROPIETARIO CEDULA";
	$fieldToolTipsGrafico_lineas_agrarias["Spanish"]["FINCA_PROPIETARIO_CEDULA"] = "";
	$fieldLabelsGrafico_lineas_agrarias["Spanish"]["NOMBRE"] = "NOMBRE";
	$fieldToolTipsGrafico_lineas_agrarias["Spanish"]["NOMBRE"] = "";
	$fieldLabelsGrafico_lineas_agrarias["Spanish"]["VEREDA"] = "VEREDA";
	$fieldToolTipsGrafico_lineas_agrarias["Spanish"]["VEREDA"] = "";
	$fieldLabelsGrafico_lineas_agrarias["Spanish"]["FINCA"] = "FINCA";
	$fieldToolTipsGrafico_lineas_agrarias["Spanish"]["FINCA"] = "";
	$fieldLabelsGrafico_lineas_agrarias["Spanish"]["LINEA"] = "LINEA";
	$fieldToolTipsGrafico_lineas_agrarias["Spanish"]["LINEA"] = "";
	$fieldLabelsGrafico_lineas_agrarias["Spanish"]["VARIEDAD"] = "VARIEDAD";
	$fieldToolTipsGrafico_lineas_agrarias["Spanish"]["VARIEDAD"] = "";
	$fieldLabelsGrafico_lineas_agrarias["Spanish"]["AREA"] = "AREA";
	$fieldToolTipsGrafico_lineas_agrarias["Spanish"]["AREA"] = "";
	$fieldLabelsGrafico_lineas_agrarias["Spanish"]["PRODUCCION_ANUAL"] = "PRODUCCION ANUAL";
	$fieldToolTipsGrafico_lineas_agrarias["Spanish"]["PRODUCCION_ANUAL"] = "";
	$fieldLabelsGrafico_lineas_agrarias["Spanish"]["A_O"] = "AÑO";
	$fieldToolTipsGrafico_lineas_agrarias["Spanish"]["A_O"] = "";
	if (count($fieldToolTipsGrafico_lineas_agrarias["Spanish"]))
		$tdataGrafico_lineas_agrarias[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsGrafico_lineas_agrarias[""] = array();
	$fieldToolTipsGrafico_lineas_agrarias[""] = array();
	$pageTitlesGrafico_lineas_agrarias[""] = array();
	$fieldLabelsGrafico_lineas_agrarias[""]["ID"] = "ID";
	$fieldToolTipsGrafico_lineas_agrarias[""]["ID"] = "";
	$fieldLabelsGrafico_lineas_agrarias[""]["FINCA_PROPIETARIO_CEDULA"] = "FINCA PROPIETARIO CEDULA";
	$fieldToolTipsGrafico_lineas_agrarias[""]["FINCA_PROPIETARIO_CEDULA"] = "";
	$fieldLabelsGrafico_lineas_agrarias[""]["NOMBRE"] = "NOMBRE";
	$fieldToolTipsGrafico_lineas_agrarias[""]["NOMBRE"] = "";
	$fieldLabelsGrafico_lineas_agrarias[""]["VEREDA"] = "VEREDA";
	$fieldToolTipsGrafico_lineas_agrarias[""]["VEREDA"] = "";
	$fieldLabelsGrafico_lineas_agrarias[""]["FINCA"] = "FINCA";
	$fieldToolTipsGrafico_lineas_agrarias[""]["FINCA"] = "";
	$fieldLabelsGrafico_lineas_agrarias[""]["LINEA"] = "LINEA";
	$fieldToolTipsGrafico_lineas_agrarias[""]["LINEA"] = "";
	$fieldLabelsGrafico_lineas_agrarias[""]["VARIEDAD"] = "VARIEDAD";
	$fieldToolTipsGrafico_lineas_agrarias[""]["VARIEDAD"] = "";
	$fieldLabelsGrafico_lineas_agrarias[""]["AREA"] = "AREA";
	$fieldToolTipsGrafico_lineas_agrarias[""]["AREA"] = "";
	$fieldLabelsGrafico_lineas_agrarias[""]["PRODUCCION_ANUAL"] = "PRODUCCION ANUAL";
	$fieldToolTipsGrafico_lineas_agrarias[""]["PRODUCCION_ANUAL"] = "";
	$fieldLabelsGrafico_lineas_agrarias[""]["A_O"] = "AÑO";
	$fieldToolTipsGrafico_lineas_agrarias[""]["A_O"] = "";
	if (count($fieldToolTipsGrafico_lineas_agrarias[""]))
		$tdataGrafico_lineas_agrarias[".isUseToolTips"] = true;
}


	$tdataGrafico_lineas_agrarias[".NCSearch"] = true;

	$tdataGrafico_lineas_agrarias[".ChartRefreshTime"] = 0;


$tdataGrafico_lineas_agrarias[".shortTableName"] = "Grafico_lineas_agrarias";
$tdataGrafico_lineas_agrarias[".nSecOptions"] = 0;
$tdataGrafico_lineas_agrarias[".recsPerRowPrint"] = 1;
$tdataGrafico_lineas_agrarias[".mainTableOwnerID"] = "";
$tdataGrafico_lineas_agrarias[".moveNext"] = 1;
$tdataGrafico_lineas_agrarias[".entityType"] = 3;

$tdataGrafico_lineas_agrarias[".strOriginalTableName"] = "lineas_agrarias";

	



$tdataGrafico_lineas_agrarias[".showAddInPopup"] = false;

$tdataGrafico_lineas_agrarias[".showEditInPopup"] = false;

$tdataGrafico_lineas_agrarias[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataGrafico_lineas_agrarias[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataGrafico_lineas_agrarias[".fieldsForRegister"] = array();

$tdataGrafico_lineas_agrarias[".listAjax"] = false;

	$tdataGrafico_lineas_agrarias[".audit"] = false;

	$tdataGrafico_lineas_agrarias[".locking"] = false;

$tdataGrafico_lineas_agrarias[".edit"] = true;
$tdataGrafico_lineas_agrarias[".afterEditAction"] = 1;
$tdataGrafico_lineas_agrarias[".closePopupAfterEdit"] = 1;
$tdataGrafico_lineas_agrarias[".afterEditActionDetTable"] = "";

$tdataGrafico_lineas_agrarias[".add"] = true;
$tdataGrafico_lineas_agrarias[".afterAddAction"] = 1;
$tdataGrafico_lineas_agrarias[".closePopupAfterAdd"] = 1;
$tdataGrafico_lineas_agrarias[".afterAddActionDetTable"] = "";

$tdataGrafico_lineas_agrarias[".list"] = true;

$tdataGrafico_lineas_agrarias[".view"] = true;




$tdataGrafico_lineas_agrarias[".delete"] = true;

$tdataGrafico_lineas_agrarias[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataGrafico_lineas_agrarias[".searchSaving"] = false;
//

$tdataGrafico_lineas_agrarias[".showSearchPanel"] = true;
		$tdataGrafico_lineas_agrarias[".flexibleSearch"] = true;

$tdataGrafico_lineas_agrarias[".isUseAjaxSuggest"] = true;




$tdataGrafico_lineas_agrarias[".addPageEvents"] = false;

// use timepicker for search panel
$tdataGrafico_lineas_agrarias[".isUseTimeForSearch"] = false;



$tdataGrafico_lineas_agrarias[".badgeColor"] = "5F9EA0";


$tdataGrafico_lineas_agrarias[".allSearchFields"] = array();
$tdataGrafico_lineas_agrarias[".filterFields"] = array();
$tdataGrafico_lineas_agrarias[".requiredSearchFields"] = array();

$tdataGrafico_lineas_agrarias[".allSearchFields"][] = "ID";
	$tdataGrafico_lineas_agrarias[".allSearchFields"][] = "FINCA_PROPIETARIO_CEDULA";
	$tdataGrafico_lineas_agrarias[".allSearchFields"][] = "NOMBRE";
	$tdataGrafico_lineas_agrarias[".allSearchFields"][] = "VEREDA";
	$tdataGrafico_lineas_agrarias[".allSearchFields"][] = "FINCA";
	$tdataGrafico_lineas_agrarias[".allSearchFields"][] = "LINEA";
	$tdataGrafico_lineas_agrarias[".allSearchFields"][] = "VARIEDAD";
	$tdataGrafico_lineas_agrarias[".allSearchFields"][] = "AREA";
	$tdataGrafico_lineas_agrarias[".allSearchFields"][] = "PRODUCCION_ANUAL";
	$tdataGrafico_lineas_agrarias[".allSearchFields"][] = "AÑO";
	

$tdataGrafico_lineas_agrarias[".googleLikeFields"] = array();
$tdataGrafico_lineas_agrarias[".googleLikeFields"][] = "ID";
$tdataGrafico_lineas_agrarias[".googleLikeFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdataGrafico_lineas_agrarias[".googleLikeFields"][] = "NOMBRE";
$tdataGrafico_lineas_agrarias[".googleLikeFields"][] = "VEREDA";
$tdataGrafico_lineas_agrarias[".googleLikeFields"][] = "FINCA";
$tdataGrafico_lineas_agrarias[".googleLikeFields"][] = "LINEA";
$tdataGrafico_lineas_agrarias[".googleLikeFields"][] = "VARIEDAD";
$tdataGrafico_lineas_agrarias[".googleLikeFields"][] = "AREA";
$tdataGrafico_lineas_agrarias[".googleLikeFields"][] = "PRODUCCION_ANUAL";
$tdataGrafico_lineas_agrarias[".googleLikeFields"][] = "AÑO";


$tdataGrafico_lineas_agrarias[".advSearchFields"] = array();
$tdataGrafico_lineas_agrarias[".advSearchFields"][] = "ID";
$tdataGrafico_lineas_agrarias[".advSearchFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdataGrafico_lineas_agrarias[".advSearchFields"][] = "NOMBRE";
$tdataGrafico_lineas_agrarias[".advSearchFields"][] = "VEREDA";
$tdataGrafico_lineas_agrarias[".advSearchFields"][] = "FINCA";
$tdataGrafico_lineas_agrarias[".advSearchFields"][] = "LINEA";
$tdataGrafico_lineas_agrarias[".advSearchFields"][] = "VARIEDAD";
$tdataGrafico_lineas_agrarias[".advSearchFields"][] = "AREA";
$tdataGrafico_lineas_agrarias[".advSearchFields"][] = "PRODUCCION_ANUAL";
$tdataGrafico_lineas_agrarias[".advSearchFields"][] = "AÑO";

$tdataGrafico_lineas_agrarias[".tableType"] = "chart";

$tdataGrafico_lineas_agrarias[".printerPageOrientation"] = 0;
$tdataGrafico_lineas_agrarias[".nPrinterPageScale"] = 100;

$tdataGrafico_lineas_agrarias[".nPrinterSplitRecords"] = 40;

$tdataGrafico_lineas_agrarias[".nPrinterPDFSplitRecords"] = 40;



$tdataGrafico_lineas_agrarias[".geocodingEnabled"] = false;



// chart settings
$tdataGrafico_lineas_agrarias[".chartType"] = "2DColumn";
// end of chart settings


$tdataGrafico_lineas_agrarias[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataGrafico_lineas_agrarias[".strOrderBy"] = $tstrOrderBy;

$tdataGrafico_lineas_agrarias[".orderindexes"] = array();

$tdataGrafico_lineas_agrarias[".sqlHead"] = "SELECT ID,  FINCA_PROPIETARIO_CEDULA,  NOMBRE,  VEREDA,  FINCA,  LINEA,  VARIEDAD,  AREA,  PRODUCCION_ANUAL,  `AÑO`";
$tdataGrafico_lineas_agrarias[".sqlFrom"] = "FROM lineas_agrarias";
$tdataGrafico_lineas_agrarias[".sqlWhereExpr"] = "";
$tdataGrafico_lineas_agrarias[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataGrafico_lineas_agrarias[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataGrafico_lineas_agrarias[".arrGroupsPerPage"] = $arrGPP;

$tdataGrafico_lineas_agrarias[".highlightSearchResults"] = true;

$tableKeysGrafico_lineas_agrarias = array();
$tableKeysGrafico_lineas_agrarias[] = "ID";
$tableKeysGrafico_lineas_agrarias[] = "FINCA_PROPIETARIO_CEDULA";
$tdataGrafico_lineas_agrarias[".Keys"] = $tableKeysGrafico_lineas_agrarias;

$tdataGrafico_lineas_agrarias[".listFields"] = array();
$tdataGrafico_lineas_agrarias[".listFields"][] = "ID";
$tdataGrafico_lineas_agrarias[".listFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdataGrafico_lineas_agrarias[".listFields"][] = "NOMBRE";
$tdataGrafico_lineas_agrarias[".listFields"][] = "VEREDA";
$tdataGrafico_lineas_agrarias[".listFields"][] = "FINCA";
$tdataGrafico_lineas_agrarias[".listFields"][] = "LINEA";
$tdataGrafico_lineas_agrarias[".listFields"][] = "VARIEDAD";
$tdataGrafico_lineas_agrarias[".listFields"][] = "AREA";
$tdataGrafico_lineas_agrarias[".listFields"][] = "PRODUCCION_ANUAL";
$tdataGrafico_lineas_agrarias[".listFields"][] = "AÑO";

$tdataGrafico_lineas_agrarias[".hideMobileList"] = array();


$tdataGrafico_lineas_agrarias[".viewFields"] = array();
$tdataGrafico_lineas_agrarias[".viewFields"][] = "ID";
$tdataGrafico_lineas_agrarias[".viewFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdataGrafico_lineas_agrarias[".viewFields"][] = "NOMBRE";
$tdataGrafico_lineas_agrarias[".viewFields"][] = "VEREDA";
$tdataGrafico_lineas_agrarias[".viewFields"][] = "FINCA";
$tdataGrafico_lineas_agrarias[".viewFields"][] = "LINEA";
$tdataGrafico_lineas_agrarias[".viewFields"][] = "VARIEDAD";
$tdataGrafico_lineas_agrarias[".viewFields"][] = "AREA";
$tdataGrafico_lineas_agrarias[".viewFields"][] = "PRODUCCION_ANUAL";
$tdataGrafico_lineas_agrarias[".viewFields"][] = "AÑO";

$tdataGrafico_lineas_agrarias[".addFields"] = array();
$tdataGrafico_lineas_agrarias[".addFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdataGrafico_lineas_agrarias[".addFields"][] = "NOMBRE";
$tdataGrafico_lineas_agrarias[".addFields"][] = "VEREDA";
$tdataGrafico_lineas_agrarias[".addFields"][] = "FINCA";
$tdataGrafico_lineas_agrarias[".addFields"][] = "LINEA";
$tdataGrafico_lineas_agrarias[".addFields"][] = "VARIEDAD";
$tdataGrafico_lineas_agrarias[".addFields"][] = "AREA";
$tdataGrafico_lineas_agrarias[".addFields"][] = "PRODUCCION_ANUAL";
$tdataGrafico_lineas_agrarias[".addFields"][] = "AÑO";

$tdataGrafico_lineas_agrarias[".masterListFields"] = array();
$tdataGrafico_lineas_agrarias[".masterListFields"][] = "ID";
$tdataGrafico_lineas_agrarias[".masterListFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdataGrafico_lineas_agrarias[".masterListFields"][] = "NOMBRE";
$tdataGrafico_lineas_agrarias[".masterListFields"][] = "VEREDA";
$tdataGrafico_lineas_agrarias[".masterListFields"][] = "FINCA";
$tdataGrafico_lineas_agrarias[".masterListFields"][] = "LINEA";
$tdataGrafico_lineas_agrarias[".masterListFields"][] = "VARIEDAD";
$tdataGrafico_lineas_agrarias[".masterListFields"][] = "AREA";
$tdataGrafico_lineas_agrarias[".masterListFields"][] = "PRODUCCION_ANUAL";
$tdataGrafico_lineas_agrarias[".masterListFields"][] = "AÑO";

$tdataGrafico_lineas_agrarias[".inlineAddFields"] = array();
$tdataGrafico_lineas_agrarias[".inlineAddFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdataGrafico_lineas_agrarias[".inlineAddFields"][] = "NOMBRE";
$tdataGrafico_lineas_agrarias[".inlineAddFields"][] = "VEREDA";
$tdataGrafico_lineas_agrarias[".inlineAddFields"][] = "FINCA";
$tdataGrafico_lineas_agrarias[".inlineAddFields"][] = "LINEA";
$tdataGrafico_lineas_agrarias[".inlineAddFields"][] = "VARIEDAD";
$tdataGrafico_lineas_agrarias[".inlineAddFields"][] = "AREA";
$tdataGrafico_lineas_agrarias[".inlineAddFields"][] = "PRODUCCION_ANUAL";
$tdataGrafico_lineas_agrarias[".inlineAddFields"][] = "AÑO";

$tdataGrafico_lineas_agrarias[".editFields"] = array();
$tdataGrafico_lineas_agrarias[".editFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdataGrafico_lineas_agrarias[".editFields"][] = "NOMBRE";
$tdataGrafico_lineas_agrarias[".editFields"][] = "VEREDA";
$tdataGrafico_lineas_agrarias[".editFields"][] = "FINCA";
$tdataGrafico_lineas_agrarias[".editFields"][] = "LINEA";
$tdataGrafico_lineas_agrarias[".editFields"][] = "VARIEDAD";
$tdataGrafico_lineas_agrarias[".editFields"][] = "AREA";
$tdataGrafico_lineas_agrarias[".editFields"][] = "PRODUCCION_ANUAL";
$tdataGrafico_lineas_agrarias[".editFields"][] = "AÑO";

$tdataGrafico_lineas_agrarias[".inlineEditFields"] = array();
$tdataGrafico_lineas_agrarias[".inlineEditFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdataGrafico_lineas_agrarias[".inlineEditFields"][] = "NOMBRE";
$tdataGrafico_lineas_agrarias[".inlineEditFields"][] = "VEREDA";
$tdataGrafico_lineas_agrarias[".inlineEditFields"][] = "FINCA";
$tdataGrafico_lineas_agrarias[".inlineEditFields"][] = "LINEA";
$tdataGrafico_lineas_agrarias[".inlineEditFields"][] = "VARIEDAD";
$tdataGrafico_lineas_agrarias[".inlineEditFields"][] = "AREA";
$tdataGrafico_lineas_agrarias[".inlineEditFields"][] = "PRODUCCION_ANUAL";
$tdataGrafico_lineas_agrarias[".inlineEditFields"][] = "AÑO";

$tdataGrafico_lineas_agrarias[".exportFields"] = array();
$tdataGrafico_lineas_agrarias[".exportFields"][] = "ID";
$tdataGrafico_lineas_agrarias[".exportFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdataGrafico_lineas_agrarias[".exportFields"][] = "NOMBRE";
$tdataGrafico_lineas_agrarias[".exportFields"][] = "VEREDA";
$tdataGrafico_lineas_agrarias[".exportFields"][] = "FINCA";
$tdataGrafico_lineas_agrarias[".exportFields"][] = "LINEA";
$tdataGrafico_lineas_agrarias[".exportFields"][] = "VARIEDAD";
$tdataGrafico_lineas_agrarias[".exportFields"][] = "AREA";
$tdataGrafico_lineas_agrarias[".exportFields"][] = "PRODUCCION_ANUAL";
$tdataGrafico_lineas_agrarias[".exportFields"][] = "AÑO";

$tdataGrafico_lineas_agrarias[".importFields"] = array();
$tdataGrafico_lineas_agrarias[".importFields"][] = "ID";
$tdataGrafico_lineas_agrarias[".importFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdataGrafico_lineas_agrarias[".importFields"][] = "NOMBRE";
$tdataGrafico_lineas_agrarias[".importFields"][] = "VEREDA";
$tdataGrafico_lineas_agrarias[".importFields"][] = "FINCA";
$tdataGrafico_lineas_agrarias[".importFields"][] = "LINEA";
$tdataGrafico_lineas_agrarias[".importFields"][] = "VARIEDAD";
$tdataGrafico_lineas_agrarias[".importFields"][] = "AREA";
$tdataGrafico_lineas_agrarias[".importFields"][] = "PRODUCCION_ANUAL";
$tdataGrafico_lineas_agrarias[".importFields"][] = "AÑO";

$tdataGrafico_lineas_agrarias[".printFields"] = array();
$tdataGrafico_lineas_agrarias[".printFields"][] = "ID";
$tdataGrafico_lineas_agrarias[".printFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdataGrafico_lineas_agrarias[".printFields"][] = "NOMBRE";
$tdataGrafico_lineas_agrarias[".printFields"][] = "VEREDA";
$tdataGrafico_lineas_agrarias[".printFields"][] = "FINCA";
$tdataGrafico_lineas_agrarias[".printFields"][] = "LINEA";
$tdataGrafico_lineas_agrarias[".printFields"][] = "VARIEDAD";
$tdataGrafico_lineas_agrarias[".printFields"][] = "AREA";
$tdataGrafico_lineas_agrarias[".printFields"][] = "PRODUCCION_ANUAL";
$tdataGrafico_lineas_agrarias[".printFields"][] = "AÑO";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "lineas_agrarias";
	$fdata["Label"] = GetFieldLabel("Grafico_lineas_agrarias","ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataGrafico_lineas_agrarias["ID"] = $fdata;
//	FINCA_PROPIETARIO_CEDULA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FINCA_PROPIETARIO_CEDULA";
	$fdata["GoodName"] = "FINCA_PROPIETARIO_CEDULA";
	$fdata["ownerTable"] = "lineas_agrarias";
	$fdata["Label"] = GetFieldLabel("Grafico_lineas_agrarias","FINCA_PROPIETARIO_CEDULA");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "FINCA_PROPIETARIO_CEDULA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FINCA_PROPIETARIO_CEDULA";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "finca";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"NOMBRE", 'lookupF'=>"NOMBRE");
	$edata["autoCompleteFields"][] = array('masterF'=>"VEREDA", 'lookupF'=>"VEREDA");
	$edata["autoCompleteFields"][] = array('masterF'=>"FINCA", 'lookupF'=>"FINCA");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "PROPIETARIO_CEDULA";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "PROPIETARIO_CEDULA";

	
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




	$tdataGrafico_lineas_agrarias["FINCA_PROPIETARIO_CEDULA"] = $fdata;
//	NOMBRE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "NOMBRE";
	$fdata["GoodName"] = "NOMBRE";
	$fdata["ownerTable"] = "lineas_agrarias";
	$fdata["Label"] = GetFieldLabel("Grafico_lineas_agrarias","NOMBRE");
	$fdata["FieldType"] = 200;

	
	
	
			
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
	$fdata["FullName"] = "NOMBRE";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "finca";
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




	$tdataGrafico_lineas_agrarias["NOMBRE"] = $fdata;
//	VEREDA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "VEREDA";
	$fdata["GoodName"] = "VEREDA";
	$fdata["ownerTable"] = "lineas_agrarias";
	$fdata["Label"] = GetFieldLabel("Grafico_lineas_agrarias","VEREDA");
	$fdata["FieldType"] = 200;

	
	
	
			
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
	$fdata["FullName"] = "VEREDA";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "finca";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "VEREDA";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "VEREDA";

	
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




	$tdataGrafico_lineas_agrarias["VEREDA"] = $fdata;
//	FINCA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "FINCA";
	$fdata["GoodName"] = "FINCA";
	$fdata["ownerTable"] = "lineas_agrarias";
	$fdata["Label"] = GetFieldLabel("Grafico_lineas_agrarias","FINCA");
	$fdata["FieldType"] = 200;

	
	
	
			
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
	$fdata["FullName"] = "FINCA";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "finca";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "FINCA";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "FINCA";

	
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




	$tdataGrafico_lineas_agrarias["FINCA"] = $fdata;
//	LINEA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "LINEA";
	$fdata["GoodName"] = "LINEA";
	$fdata["ownerTable"] = "lineas_agrarias";
	$fdata["Label"] = GetFieldLabel("Grafico_lineas_agrarias","LINEA");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LINEA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LINEA";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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
	$edata["LookupValues"][] = "Ninguna";
	$edata["LookupValues"][] = "Cafe";
	$edata["LookupValues"][] = "Caña";
	$edata["LookupValues"][] = "Fique";
	$edata["LookupValues"][] = "Hortifruticola";
	$edata["LookupValues"][] = "Pecuario";
	$edata["LookupValues"][] = "";

	
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




	$tdataGrafico_lineas_agrarias["LINEA"] = $fdata;
//	VARIEDAD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "VARIEDAD";
	$fdata["GoodName"] = "VARIEDAD";
	$fdata["ownerTable"] = "lineas_agrarias";
	$fdata["Label"] = GetFieldLabel("Grafico_lineas_agrarias","VARIEDAD");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "VARIEDAD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VARIEDAD";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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
	$edata["LookupValues"][] = "----Ninguna----";
	$edata["LookupValues"][] = "----Cafe----";
	$edata["LookupValues"][] = "Castilla";
	$edata["LookupValues"][] = "Variedad Colombia";
	$edata["LookupValues"][] = "Caturra";
	$edata["LookupValues"][] = "Otros";
	$edata["LookupValues"][] = "----Bovinos----";
	$edata["LookupValues"][] = "Chino Satandereano";
	$edata["LookupValues"][] = "Costeño";
	$edata["LookupValues"][] = "Holsteyn";
	$edata["LookupValues"][] = "Ayrshire";
	$edata["LookupValues"][] = "Pardo Suizo";
	$edata["LookupValues"][] = "Normando";
	$edata["LookupValues"][] = "Cebú";
	$edata["LookupValues"][] = "Criollo";
	$edata["LookupValues"][] = "Brahman";
	$edata["LookupValues"][] = "Jirolando";
	$edata["LookupValues"][] = "Bufalo";
	$edata["LookupValues"][] = "Simental";
	$edata["LookupValues"][] = "----Porcinos----";
	$edata["LookupValues"][] = "Care palo";
	$edata["LookupValues"][] = "Casco de Mula";
	$edata["LookupValues"][] = "Chocoano";
	$edata["LookupValues"][] = "Congo";
	$edata["LookupValues"][] = "Curi";
	$edata["LookupValues"][] = "Duroc";
	$edata["LookupValues"][] = "Zungo";
	$edata["LookupValues"][] = "Choncho";
	$edata["LookupValues"][] = "Otro";
	$edata["LookupValues"][] = "----Caprinos----";
	$edata["LookupValues"][] = "Saanen";
	$edata["LookupValues"][] = "Alpina";
	$edata["LookupValues"][] = "Boer";
	$edata["LookupValues"][] = "Lamancha";
	$edata["LookupValues"][] = "Anglonubiana";
	$edata["LookupValues"][] = "Toggenburg";
	$edata["LookupValues"][] = "Criolla Santandereana";
	$edata["LookupValues"][] = "----Ovinos----";
	$edata["LookupValues"][] = "Katahdin";
	$edata["LookupValues"][] = "Santa Inés";
	$edata["LookupValues"][] = "Dorper";
	$edata["LookupValues"][] = "Pelibuey";
	$edata["LookupValues"][] = "Charollais";
	$edata["LookupValues"][] = "otra";
	$edata["LookupValues"][] = "----Aves----";
	$edata["LookupValues"][] = "Carioca";
	$edata["LookupValues"][] = "Chusca";
	$edata["LookupValues"][] = "Copetona";
	$edata["LookupValues"][] = "Nicaragua";
	$edata["LookupValues"][] = "Santanderina";
	$edata["LookupValues"][] = "otra";
	$edata["LookupValues"][] = "----Acuicola----";
	$edata["LookupValues"][] = "Bocachico";
	$edata["LookupValues"][] = "Cachama";
	$edata["LookupValues"][] = "Carpa";
	$edata["LookupValues"][] = "Tilapia";
	$edata["LookupValues"][] = "Trucha";
	$edata["LookupValues"][] = "otro";
	$edata["LookupValues"][] = "----Caña----";
	$edata["LookupValues"][] = "Azucarera";
	$edata["LookupValues"][] = "Panelera";
	$edata["LookupValues"][] = "Criolla";
	$edata["LookupValues"][] = "Variedades CENICAÑA";
	$edata["LookupValues"][] = "----Fique----";
	$edata["LookupValues"][] = "Castilla";
	$edata["LookupValues"][] = "Ceniza";
	$edata["LookupValues"][] = "Comun";
	$edata["LookupValues"][] = "Espinosa";
	$edata["LookupValues"][] = "Frontera";
	$edata["LookupValues"][] = "Verde de Cabuya";
	$edata["LookupValues"][] = "Uña de Aguila";
	$edata["LookupValues"][] = "otro";
	$edata["LookupValues"][] = "---Frutas----";
	$edata["LookupValues"][] = "Tropicales (Bananas, Guayaba, Mango, etc )";
	$edata["LookupValues"][] = "De Bosque (Mora, Fresa, Frambuesa, etc)";
	$edata["LookupValues"][] = "Citricas (Naranja, Limon, Mandarina, etc)";
	$edata["LookupValues"][] = "Frutos secos (Tamarindo, Almendras, etc)";
	$edata["LookupValues"][] = "----Hortalizas----";
	$edata["LookupValues"][] = "Frutos (Berengena, tomate, Calabaza, tec )";
	$edata["LookupValues"][] = "Bulbos (Cebolla cabezona, ajo, etc)";
	$edata["LookupValues"][] = "Flor (Alcachofa, Coliflor, etc)";
	$edata["LookupValues"][] = "Hojas y Tallos (Lechuga, etc, Perejil, etc)";
	$edata["LookupValues"][] = "Legumbres (Frijol, Habichuela, etc)";
	$edata["LookupValues"][] = "Otros";

	
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




	$tdataGrafico_lineas_agrarias["VARIEDAD"] = $fdata;
//	AREA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "AREA";
	$fdata["GoodName"] = "AREA";
	$fdata["ownerTable"] = "lineas_agrarias";
	$fdata["Label"] = GetFieldLabel("Grafico_lineas_agrarias","AREA");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AREA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AREA";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataGrafico_lineas_agrarias["AREA"] = $fdata;
//	PRODUCCION_ANUAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "PRODUCCION_ANUAL";
	$fdata["GoodName"] = "PRODUCCION_ANUAL";
	$fdata["ownerTable"] = "lineas_agrarias";
	$fdata["Label"] = GetFieldLabel("Grafico_lineas_agrarias","PRODUCCION_ANUAL");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PRODUCCION_ANUAL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRODUCCION_ANUAL";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataGrafico_lineas_agrarias["PRODUCCION_ANUAL"] = $fdata;
//	AÑO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "AÑO";
	$fdata["GoodName"] = "A_O";
	$fdata["ownerTable"] = "lineas_agrarias";
	$fdata["Label"] = GetFieldLabel("Grafico_lineas_agrarias","A_O");
	$fdata["FieldType"] = 200;

	
	
	
			
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
	$fdata["FullName"] = "`AÑO`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataGrafico_lineas_agrarias["AÑO"] = $fdata;

	$tdataGrafico_lineas_agrarias[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">Grafico lineas agrarias</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdataGrafico_lineas_agrarias[".chartXml"] .= '<attr value="0">
			<attr value="name">FINCA_PROPIETARIO_CEDULA</attr>';
	$tdataGrafico_lineas_agrarias[".chartXml"] .= '</attr>';
	$tdataGrafico_lineas_agrarias[".chartXml"] .= '<attr value="1">
		<attr value="name">NOMBRE</attr>
	</attr>';
	$tdataGrafico_lineas_agrarias[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdataGrafico_lineas_agrarias[".chartXml"] .= '<attr value="head">'.xmlencode("lineas_agrarias Chart").'</attr>
<attr value="foot">'.xmlencode("Legend Title").'</attr>
<attr value="y_axis_label">'.xmlencode("FINCA_PROPIETARIO_CEDULA").'</attr>


<attr value="slegend">true</attr>
<attr value="sgrid">false</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">None</attr>
<attr value="cview">Column</attr>
<attr value="is3d">0</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>';
$tdataGrafico_lineas_agrarias[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdataGrafico_lineas_agrarias[".chartXml"] .= '<attr value="0">
		<attr value="name">ID</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Grafico_lineas_agrarias","ID")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataGrafico_lineas_agrarias[".chartXml"] .= '<attr value="1">
		<attr value="name">FINCA_PROPIETARIO_CEDULA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Grafico_lineas_agrarias","FINCA_PROPIETARIO_CEDULA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataGrafico_lineas_agrarias[".chartXml"] .= '<attr value="2">
		<attr value="name">NOMBRE</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Grafico_lineas_agrarias","NOMBRE")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataGrafico_lineas_agrarias[".chartXml"] .= '<attr value="3">
		<attr value="name">VEREDA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Grafico_lineas_agrarias","VEREDA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataGrafico_lineas_agrarias[".chartXml"] .= '<attr value="4">
		<attr value="name">FINCA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Grafico_lineas_agrarias","FINCA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataGrafico_lineas_agrarias[".chartXml"] .= '<attr value="5">
		<attr value="name">LINEA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Grafico_lineas_agrarias","LINEA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataGrafico_lineas_agrarias[".chartXml"] .= '<attr value="6">
		<attr value="name">VARIEDAD</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Grafico_lineas_agrarias","VARIEDAD")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataGrafico_lineas_agrarias[".chartXml"] .= '<attr value="7">
		<attr value="name">AREA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Grafico_lineas_agrarias","AREA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataGrafico_lineas_agrarias[".chartXml"] .= '<attr value="8">
		<attr value="name">PRODUCCION_ANUAL</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Grafico_lineas_agrarias","PRODUCCION_ANUAL")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataGrafico_lineas_agrarias[".chartXml"] .= '<attr value="9">
		<attr value="name">AÑO</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Grafico_lineas_agrarias","A_O")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdataGrafico_lineas_agrarias[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">Grafico lineas agrarias</attr>
<attr value="short_table_name">Grafico_lineas_agrarias</attr>
</attr>

</chart>';

$tables_data["Grafico lineas agrarias"]=&$tdataGrafico_lineas_agrarias;
$field_labels["Grafico_lineas_agrarias"] = &$fieldLabelsGrafico_lineas_agrarias;
$fieldToolTips["Grafico_lineas_agrarias"] = &$fieldToolTipsGrafico_lineas_agrarias;
$page_titles["Grafico_lineas_agrarias"] = &$pageTitlesGrafico_lineas_agrarias;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Grafico lineas agrarias"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Grafico lineas agrarias"] = array();


	
				$strOriginalDetailsTable="finca";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="finca";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "finca";
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
					$masterTablesData["Grafico lineas agrarias"][0] = $masterParams;
				$masterTablesData["Grafico lineas agrarias"][0]["masterKeys"] = array();
	$masterTablesData["Grafico lineas agrarias"][0]["masterKeys"][]="PROPIETARIO_CEDULA";
				$masterTablesData["Grafico lineas agrarias"][0]["detailKeys"] = array();
	$masterTablesData["Grafico lineas agrarias"][0]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Grafico_lineas_agrarias()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  FINCA_PROPIETARIO_CEDULA,  NOMBRE,  VEREDA,  FINCA,  LINEA,  VARIEDAD,  AREA,  PRODUCCION_ANUAL,  `AÑO`";
$proto0["m_strFrom"] = "FROM lineas_agrarias";
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
	"m_strName" => "ID",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "Grafico lineas agrarias"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "Grafico lineas agrarias";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "FINCA_PROPIETARIO_CEDULA",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "Grafico lineas agrarias"
));

$proto8["m_sql"] = "FINCA_PROPIETARIO_CEDULA";
$proto8["m_srcTableName"] = "Grafico lineas agrarias";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBRE",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "Grafico lineas agrarias"
));

$proto10["m_sql"] = "NOMBRE";
$proto10["m_srcTableName"] = "Grafico lineas agrarias";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "VEREDA",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "Grafico lineas agrarias"
));

$proto12["m_sql"] = "VEREDA";
$proto12["m_srcTableName"] = "Grafico lineas agrarias";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "FINCA",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "Grafico lineas agrarias"
));

$proto14["m_sql"] = "FINCA";
$proto14["m_srcTableName"] = "Grafico lineas agrarias";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "LINEA",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "Grafico lineas agrarias"
));

$proto16["m_sql"] = "LINEA";
$proto16["m_srcTableName"] = "Grafico lineas agrarias";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "VARIEDAD",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "Grafico lineas agrarias"
));

$proto18["m_sql"] = "VARIEDAD";
$proto18["m_srcTableName"] = "Grafico lineas agrarias";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "AREA",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "Grafico lineas agrarias"
));

$proto20["m_sql"] = "AREA";
$proto20["m_srcTableName"] = "Grafico lineas agrarias";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "PRODUCCION_ANUAL",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "Grafico lineas agrarias"
));

$proto22["m_sql"] = "PRODUCCION_ANUAL";
$proto22["m_srcTableName"] = "Grafico lineas agrarias";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "Grafico lineas agrarias"
));

$proto24["m_sql"] = "`AÑO`";
$proto24["m_srcTableName"] = "Grafico lineas agrarias";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "lineas_agrarias";
$proto27["m_srcTableName"] = "Grafico lineas agrarias";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "ID";
$proto27["m_columns"][] = "FINCA_PROPIETARIO_CEDULA";
$proto27["m_columns"][] = "NOMBRE";
$proto27["m_columns"][] = "VEREDA";
$proto27["m_columns"][] = "FINCA";
$proto27["m_columns"][] = "LINEA";
$proto27["m_columns"][] = "VARIEDAD";
$proto27["m_columns"][] = "AREA";
$proto27["m_columns"][] = "PRODUCCION_ANUAL";
$proto27["m_columns"][] = "AÑO";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "lineas_agrarias";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "Grafico lineas agrarias";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto30=array();
						$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "Grafico lineas agrarias"
));

$proto30["m_column"]=$obj;
$obj = new SQLGroupByItem($proto30);

$proto0["m_groupby"][]=$obj;
												$proto32=array();
						$obj = new SQLField(array(
	"m_strName" => "FINCA_PROPIETARIO_CEDULA",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "Grafico lineas agrarias"
));

$proto32["m_column"]=$obj;
$obj = new SQLGroupByItem($proto32);

$proto0["m_groupby"][]=$obj;
												$proto34=array();
						$obj = new SQLField(array(
	"m_strName" => "NOMBRE",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "Grafico lineas agrarias"
));

$proto34["m_column"]=$obj;
$obj = new SQLGroupByItem($proto34);

$proto0["m_groupby"][]=$obj;
												$proto36=array();
						$obj = new SQLField(array(
	"m_strName" => "VEREDA",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "Grafico lineas agrarias"
));

$proto36["m_column"]=$obj;
$obj = new SQLGroupByItem($proto36);

$proto0["m_groupby"][]=$obj;
												$proto38=array();
						$obj = new SQLField(array(
	"m_strName" => "FINCA",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "Grafico lineas agrarias"
));

$proto38["m_column"]=$obj;
$obj = new SQLGroupByItem($proto38);

$proto0["m_groupby"][]=$obj;
												$proto40=array();
						$obj = new SQLField(array(
	"m_strName" => "LINEA",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "Grafico lineas agrarias"
));

$proto40["m_column"]=$obj;
$obj = new SQLGroupByItem($proto40);

$proto0["m_groupby"][]=$obj;
												$proto42=array();
						$obj = new SQLField(array(
	"m_strName" => "VARIEDAD",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "Grafico lineas agrarias"
));

$proto42["m_column"]=$obj;
$obj = new SQLGroupByItem($proto42);

$proto0["m_groupby"][]=$obj;
												$proto44=array();
						$obj = new SQLField(array(
	"m_strName" => "AREA",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "Grafico lineas agrarias"
));

$proto44["m_column"]=$obj;
$obj = new SQLGroupByItem($proto44);

$proto0["m_groupby"][]=$obj;
												$proto46=array();
						$obj = new SQLField(array(
	"m_strName" => "PRODUCCION_ANUAL",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "Grafico lineas agrarias"
));

$proto46["m_column"]=$obj;
$obj = new SQLGroupByItem($proto46);

$proto0["m_groupby"][]=$obj;
												$proto48=array();
						$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "Grafico lineas agrarias"
));

$proto48["m_column"]=$obj;
$obj = new SQLGroupByItem($proto48);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Grafico lineas agrarias";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Grafico_lineas_agrarias = createSqlQuery_Grafico_lineas_agrarias();


	
		;

										

$tdataGrafico_lineas_agrarias[".sqlquery"] = $queryData_Grafico_lineas_agrarias;

$tableEvents["Grafico lineas agrarias"] = new eventsBase;
$tdataGrafico_lineas_agrarias[".hasEvents"] = false;

?>