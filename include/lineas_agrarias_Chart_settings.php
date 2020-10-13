<?php
require_once(getabspath("classes/cipherer.php"));




$tdatalineas_agrarias_Chart = array();
	$tdatalineas_agrarias_Chart[".ShortName"] = "lineas_agrarias_Chart";
	$tdatalineas_agrarias_Chart[".OwnerID"] = "";
	$tdatalineas_agrarias_Chart[".OriginalTable"] = "lineas_agrarias";

//	field labels
$fieldLabelslineas_agrarias_Chart = array();
$fieldToolTipslineas_agrarias_Chart = array();
$pageTitleslineas_agrarias_Chart = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelslineas_agrarias_Chart["Spanish"] = array();
	$fieldToolTipslineas_agrarias_Chart["Spanish"] = array();
	$pageTitleslineas_agrarias_Chart["Spanish"] = array();
	$fieldLabelslineas_agrarias_Chart["Spanish"]["ID"] = "ID";
	$fieldToolTipslineas_agrarias_Chart["Spanish"]["ID"] = "";
	$fieldLabelslineas_agrarias_Chart["Spanish"]["FINCA_PROPIETARIO_CEDULA"] = "FINCA PROPIETARIO CEDULA";
	$fieldToolTipslineas_agrarias_Chart["Spanish"]["FINCA_PROPIETARIO_CEDULA"] = "";
	$fieldLabelslineas_agrarias_Chart["Spanish"]["NOMBRE"] = "NOMBRE";
	$fieldToolTipslineas_agrarias_Chart["Spanish"]["NOMBRE"] = "";
	$fieldLabelslineas_agrarias_Chart["Spanish"]["VEREDA"] = "VEREDA";
	$fieldToolTipslineas_agrarias_Chart["Spanish"]["VEREDA"] = "";
	$fieldLabelslineas_agrarias_Chart["Spanish"]["FINCA"] = "FINCA";
	$fieldToolTipslineas_agrarias_Chart["Spanish"]["FINCA"] = "";
	$fieldLabelslineas_agrarias_Chart["Spanish"]["LINEA"] = "LINEA";
	$fieldToolTipslineas_agrarias_Chart["Spanish"]["LINEA"] = "";
	$fieldLabelslineas_agrarias_Chart["Spanish"]["VARIEDAD"] = "VARIEDAD";
	$fieldToolTipslineas_agrarias_Chart["Spanish"]["VARIEDAD"] = "";
	$fieldLabelslineas_agrarias_Chart["Spanish"]["AREA"] = "AREA";
	$fieldToolTipslineas_agrarias_Chart["Spanish"]["AREA"] = "";
	$fieldLabelslineas_agrarias_Chart["Spanish"]["PRODUCCION_ANUAL"] = "PRODUCCION ANUAL";
	$fieldToolTipslineas_agrarias_Chart["Spanish"]["PRODUCCION_ANUAL"] = "";
	$fieldLabelslineas_agrarias_Chart["Spanish"]["A_O"] = "AÑO";
	$fieldToolTipslineas_agrarias_Chart["Spanish"]["A_O"] = "";
	if (count($fieldToolTipslineas_agrarias_Chart["Spanish"]))
		$tdatalineas_agrarias_Chart[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelslineas_agrarias_Chart[""] = array();
	$fieldToolTipslineas_agrarias_Chart[""] = array();
	$pageTitleslineas_agrarias_Chart[""] = array();
	$fieldLabelslineas_agrarias_Chart[""]["ID"] = "ID";
	$fieldToolTipslineas_agrarias_Chart[""]["ID"] = "";
	$fieldLabelslineas_agrarias_Chart[""]["FINCA_PROPIETARIO_CEDULA"] = "FINCA PROPIETARIO CEDULA";
	$fieldToolTipslineas_agrarias_Chart[""]["FINCA_PROPIETARIO_CEDULA"] = "";
	$fieldLabelslineas_agrarias_Chart[""]["NOMBRE"] = "NOMBRE";
	$fieldToolTipslineas_agrarias_Chart[""]["NOMBRE"] = "";
	$fieldLabelslineas_agrarias_Chart[""]["VEREDA"] = "VEREDA";
	$fieldToolTipslineas_agrarias_Chart[""]["VEREDA"] = "";
	$fieldLabelslineas_agrarias_Chart[""]["FINCA"] = "FINCA";
	$fieldToolTipslineas_agrarias_Chart[""]["FINCA"] = "";
	$fieldLabelslineas_agrarias_Chart[""]["LINEA"] = "LINEA";
	$fieldToolTipslineas_agrarias_Chart[""]["LINEA"] = "";
	$fieldLabelslineas_agrarias_Chart[""]["VARIEDAD"] = "VARIEDAD";
	$fieldToolTipslineas_agrarias_Chart[""]["VARIEDAD"] = "";
	$fieldLabelslineas_agrarias_Chart[""]["AREA"] = "AREA";
	$fieldToolTipslineas_agrarias_Chart[""]["AREA"] = "";
	$fieldLabelslineas_agrarias_Chart[""]["PRODUCCION_ANUAL"] = "PRODUCCION ANUAL";
	$fieldToolTipslineas_agrarias_Chart[""]["PRODUCCION_ANUAL"] = "";
	$fieldLabelslineas_agrarias_Chart[""]["A_O"] = "AÑO";
	$fieldToolTipslineas_agrarias_Chart[""]["A_O"] = "";
	if (count($fieldToolTipslineas_agrarias_Chart[""]))
		$tdatalineas_agrarias_Chart[".isUseToolTips"] = true;
}


	$tdatalineas_agrarias_Chart[".NCSearch"] = true;

	$tdatalineas_agrarias_Chart[".ChartRefreshTime"] = 0;


$tdatalineas_agrarias_Chart[".shortTableName"] = "lineas_agrarias_Chart";
$tdatalineas_agrarias_Chart[".nSecOptions"] = 0;
$tdatalineas_agrarias_Chart[".recsPerRowPrint"] = 1;
$tdatalineas_agrarias_Chart[".mainTableOwnerID"] = "";
$tdatalineas_agrarias_Chart[".moveNext"] = 1;
$tdatalineas_agrarias_Chart[".entityType"] = 3;

$tdatalineas_agrarias_Chart[".strOriginalTableName"] = "lineas_agrarias";

	



$tdatalineas_agrarias_Chart[".showAddInPopup"] = false;

$tdatalineas_agrarias_Chart[".showEditInPopup"] = false;

$tdatalineas_agrarias_Chart[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatalineas_agrarias_Chart[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatalineas_agrarias_Chart[".fieldsForRegister"] = array();

$tdatalineas_agrarias_Chart[".listAjax"] = false;

	$tdatalineas_agrarias_Chart[".audit"] = false;

	$tdatalineas_agrarias_Chart[".locking"] = false;

$tdatalineas_agrarias_Chart[".edit"] = true;
$tdatalineas_agrarias_Chart[".afterEditAction"] = 1;
$tdatalineas_agrarias_Chart[".closePopupAfterEdit"] = 1;
$tdatalineas_agrarias_Chart[".afterEditActionDetTable"] = "";

$tdatalineas_agrarias_Chart[".add"] = true;
$tdatalineas_agrarias_Chart[".afterAddAction"] = 1;
$tdatalineas_agrarias_Chart[".closePopupAfterAdd"] = 1;
$tdatalineas_agrarias_Chart[".afterAddActionDetTable"] = "";

$tdatalineas_agrarias_Chart[".list"] = true;

$tdatalineas_agrarias_Chart[".view"] = true;




$tdatalineas_agrarias_Chart[".delete"] = true;

$tdatalineas_agrarias_Chart[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatalineas_agrarias_Chart[".searchSaving"] = false;
//

$tdatalineas_agrarias_Chart[".showSearchPanel"] = true;
		$tdatalineas_agrarias_Chart[".flexibleSearch"] = true;

$tdatalineas_agrarias_Chart[".isUseAjaxSuggest"] = true;




$tdatalineas_agrarias_Chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalineas_agrarias_Chart[".isUseTimeForSearch"] = false;



$tdatalineas_agrarias_Chart[".badgeColor"] = "5F9EA0";


$tdatalineas_agrarias_Chart[".allSearchFields"] = array();
$tdatalineas_agrarias_Chart[".filterFields"] = array();
$tdatalineas_agrarias_Chart[".requiredSearchFields"] = array();

$tdatalineas_agrarias_Chart[".allSearchFields"][] = "ID";
	$tdatalineas_agrarias_Chart[".allSearchFields"][] = "FINCA_PROPIETARIO_CEDULA";
	$tdatalineas_agrarias_Chart[".allSearchFields"][] = "NOMBRE";
	$tdatalineas_agrarias_Chart[".allSearchFields"][] = "VEREDA";
	$tdatalineas_agrarias_Chart[".allSearchFields"][] = "FINCA";
	$tdatalineas_agrarias_Chart[".allSearchFields"][] = "LINEA";
	$tdatalineas_agrarias_Chart[".allSearchFields"][] = "VARIEDAD";
	$tdatalineas_agrarias_Chart[".allSearchFields"][] = "AREA";
	$tdatalineas_agrarias_Chart[".allSearchFields"][] = "PRODUCCION_ANUAL";
	$tdatalineas_agrarias_Chart[".allSearchFields"][] = "AÑO";
	

$tdatalineas_agrarias_Chart[".googleLikeFields"] = array();
$tdatalineas_agrarias_Chart[".googleLikeFields"][] = "ID";
$tdatalineas_agrarias_Chart[".googleLikeFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatalineas_agrarias_Chart[".googleLikeFields"][] = "NOMBRE";
$tdatalineas_agrarias_Chart[".googleLikeFields"][] = "VEREDA";
$tdatalineas_agrarias_Chart[".googleLikeFields"][] = "FINCA";
$tdatalineas_agrarias_Chart[".googleLikeFields"][] = "LINEA";
$tdatalineas_agrarias_Chart[".googleLikeFields"][] = "VARIEDAD";
$tdatalineas_agrarias_Chart[".googleLikeFields"][] = "AREA";
$tdatalineas_agrarias_Chart[".googleLikeFields"][] = "PRODUCCION_ANUAL";
$tdatalineas_agrarias_Chart[".googleLikeFields"][] = "AÑO";


$tdatalineas_agrarias_Chart[".advSearchFields"] = array();
$tdatalineas_agrarias_Chart[".advSearchFields"][] = "ID";
$tdatalineas_agrarias_Chart[".advSearchFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatalineas_agrarias_Chart[".advSearchFields"][] = "NOMBRE";
$tdatalineas_agrarias_Chart[".advSearchFields"][] = "VEREDA";
$tdatalineas_agrarias_Chart[".advSearchFields"][] = "FINCA";
$tdatalineas_agrarias_Chart[".advSearchFields"][] = "LINEA";
$tdatalineas_agrarias_Chart[".advSearchFields"][] = "VARIEDAD";
$tdatalineas_agrarias_Chart[".advSearchFields"][] = "AREA";
$tdatalineas_agrarias_Chart[".advSearchFields"][] = "PRODUCCION_ANUAL";
$tdatalineas_agrarias_Chart[".advSearchFields"][] = "AÑO";

$tdatalineas_agrarias_Chart[".tableType"] = "chart";

$tdatalineas_agrarias_Chart[".printerPageOrientation"] = 0;
$tdatalineas_agrarias_Chart[".nPrinterPageScale"] = 100;

$tdatalineas_agrarias_Chart[".nPrinterSplitRecords"] = 40;

$tdatalineas_agrarias_Chart[".nPrinterPDFSplitRecords"] = 40;



$tdatalineas_agrarias_Chart[".geocodingEnabled"] = false;



// chart settings
$tdatalineas_agrarias_Chart[".chartType"] = "2DColumn";
// end of chart settings


$tdatalineas_agrarias_Chart[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatalineas_agrarias_Chart[".strOrderBy"] = $tstrOrderBy;

$tdatalineas_agrarias_Chart[".orderindexes"] = array();

$tdatalineas_agrarias_Chart[".sqlHead"] = "SELECT ID,  	FINCA_PROPIETARIO_CEDULA,  	NOMBRE,  	VEREDA,  	FINCA,  	LINEA,  	VARIEDAD,  	AREA,  	PRODUCCION_ANUAL,  	`AÑO`";
$tdatalineas_agrarias_Chart[".sqlFrom"] = "FROM lineas_agrarias";
$tdatalineas_agrarias_Chart[".sqlWhereExpr"] = "";
$tdatalineas_agrarias_Chart[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalineas_agrarias_Chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalineas_agrarias_Chart[".arrGroupsPerPage"] = $arrGPP;

$tdatalineas_agrarias_Chart[".highlightSearchResults"] = true;

$tableKeyslineas_agrarias_Chart = array();
$tableKeyslineas_agrarias_Chart[] = "ID";
$tableKeyslineas_agrarias_Chart[] = "FINCA_PROPIETARIO_CEDULA";
$tdatalineas_agrarias_Chart[".Keys"] = $tableKeyslineas_agrarias_Chart;

$tdatalineas_agrarias_Chart[".listFields"] = array();
$tdatalineas_agrarias_Chart[".listFields"][] = "ID";
$tdatalineas_agrarias_Chart[".listFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatalineas_agrarias_Chart[".listFields"][] = "NOMBRE";
$tdatalineas_agrarias_Chart[".listFields"][] = "VEREDA";
$tdatalineas_agrarias_Chart[".listFields"][] = "FINCA";
$tdatalineas_agrarias_Chart[".listFields"][] = "LINEA";
$tdatalineas_agrarias_Chart[".listFields"][] = "VARIEDAD";
$tdatalineas_agrarias_Chart[".listFields"][] = "AREA";
$tdatalineas_agrarias_Chart[".listFields"][] = "PRODUCCION_ANUAL";
$tdatalineas_agrarias_Chart[".listFields"][] = "AÑO";

$tdatalineas_agrarias_Chart[".hideMobileList"] = array();


$tdatalineas_agrarias_Chart[".viewFields"] = array();
$tdatalineas_agrarias_Chart[".viewFields"][] = "ID";
$tdatalineas_agrarias_Chart[".viewFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatalineas_agrarias_Chart[".viewFields"][] = "NOMBRE";
$tdatalineas_agrarias_Chart[".viewFields"][] = "VEREDA";
$tdatalineas_agrarias_Chart[".viewFields"][] = "FINCA";
$tdatalineas_agrarias_Chart[".viewFields"][] = "LINEA";
$tdatalineas_agrarias_Chart[".viewFields"][] = "VARIEDAD";
$tdatalineas_agrarias_Chart[".viewFields"][] = "AREA";
$tdatalineas_agrarias_Chart[".viewFields"][] = "PRODUCCION_ANUAL";
$tdatalineas_agrarias_Chart[".viewFields"][] = "AÑO";

$tdatalineas_agrarias_Chart[".addFields"] = array();
$tdatalineas_agrarias_Chart[".addFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatalineas_agrarias_Chart[".addFields"][] = "NOMBRE";
$tdatalineas_agrarias_Chart[".addFields"][] = "VEREDA";
$tdatalineas_agrarias_Chart[".addFields"][] = "FINCA";
$tdatalineas_agrarias_Chart[".addFields"][] = "LINEA";
$tdatalineas_agrarias_Chart[".addFields"][] = "VARIEDAD";
$tdatalineas_agrarias_Chart[".addFields"][] = "AREA";
$tdatalineas_agrarias_Chart[".addFields"][] = "PRODUCCION_ANUAL";
$tdatalineas_agrarias_Chart[".addFields"][] = "AÑO";

$tdatalineas_agrarias_Chart[".masterListFields"] = array();
$tdatalineas_agrarias_Chart[".masterListFields"][] = "ID";
$tdatalineas_agrarias_Chart[".masterListFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatalineas_agrarias_Chart[".masterListFields"][] = "NOMBRE";
$tdatalineas_agrarias_Chart[".masterListFields"][] = "VEREDA";
$tdatalineas_agrarias_Chart[".masterListFields"][] = "FINCA";
$tdatalineas_agrarias_Chart[".masterListFields"][] = "LINEA";
$tdatalineas_agrarias_Chart[".masterListFields"][] = "VARIEDAD";
$tdatalineas_agrarias_Chart[".masterListFields"][] = "AREA";
$tdatalineas_agrarias_Chart[".masterListFields"][] = "PRODUCCION_ANUAL";
$tdatalineas_agrarias_Chart[".masterListFields"][] = "AÑO";

$tdatalineas_agrarias_Chart[".inlineAddFields"] = array();
$tdatalineas_agrarias_Chart[".inlineAddFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatalineas_agrarias_Chart[".inlineAddFields"][] = "NOMBRE";
$tdatalineas_agrarias_Chart[".inlineAddFields"][] = "VEREDA";
$tdatalineas_agrarias_Chart[".inlineAddFields"][] = "FINCA";
$tdatalineas_agrarias_Chart[".inlineAddFields"][] = "LINEA";
$tdatalineas_agrarias_Chart[".inlineAddFields"][] = "VARIEDAD";
$tdatalineas_agrarias_Chart[".inlineAddFields"][] = "AREA";
$tdatalineas_agrarias_Chart[".inlineAddFields"][] = "PRODUCCION_ANUAL";
$tdatalineas_agrarias_Chart[".inlineAddFields"][] = "AÑO";

$tdatalineas_agrarias_Chart[".editFields"] = array();
$tdatalineas_agrarias_Chart[".editFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatalineas_agrarias_Chart[".editFields"][] = "NOMBRE";
$tdatalineas_agrarias_Chart[".editFields"][] = "VEREDA";
$tdatalineas_agrarias_Chart[".editFields"][] = "FINCA";
$tdatalineas_agrarias_Chart[".editFields"][] = "LINEA";
$tdatalineas_agrarias_Chart[".editFields"][] = "VARIEDAD";
$tdatalineas_agrarias_Chart[".editFields"][] = "AREA";
$tdatalineas_agrarias_Chart[".editFields"][] = "PRODUCCION_ANUAL";
$tdatalineas_agrarias_Chart[".editFields"][] = "AÑO";

$tdatalineas_agrarias_Chart[".inlineEditFields"] = array();
$tdatalineas_agrarias_Chart[".inlineEditFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatalineas_agrarias_Chart[".inlineEditFields"][] = "NOMBRE";
$tdatalineas_agrarias_Chart[".inlineEditFields"][] = "VEREDA";
$tdatalineas_agrarias_Chart[".inlineEditFields"][] = "FINCA";
$tdatalineas_agrarias_Chart[".inlineEditFields"][] = "LINEA";
$tdatalineas_agrarias_Chart[".inlineEditFields"][] = "VARIEDAD";
$tdatalineas_agrarias_Chart[".inlineEditFields"][] = "AREA";
$tdatalineas_agrarias_Chart[".inlineEditFields"][] = "PRODUCCION_ANUAL";
$tdatalineas_agrarias_Chart[".inlineEditFields"][] = "AÑO";

$tdatalineas_agrarias_Chart[".exportFields"] = array();
$tdatalineas_agrarias_Chart[".exportFields"][] = "ID";
$tdatalineas_agrarias_Chart[".exportFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatalineas_agrarias_Chart[".exportFields"][] = "NOMBRE";
$tdatalineas_agrarias_Chart[".exportFields"][] = "VEREDA";
$tdatalineas_agrarias_Chart[".exportFields"][] = "FINCA";
$tdatalineas_agrarias_Chart[".exportFields"][] = "LINEA";
$tdatalineas_agrarias_Chart[".exportFields"][] = "VARIEDAD";
$tdatalineas_agrarias_Chart[".exportFields"][] = "AREA";
$tdatalineas_agrarias_Chart[".exportFields"][] = "PRODUCCION_ANUAL";
$tdatalineas_agrarias_Chart[".exportFields"][] = "AÑO";

$tdatalineas_agrarias_Chart[".importFields"] = array();
$tdatalineas_agrarias_Chart[".importFields"][] = "ID";
$tdatalineas_agrarias_Chart[".importFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatalineas_agrarias_Chart[".importFields"][] = "NOMBRE";
$tdatalineas_agrarias_Chart[".importFields"][] = "VEREDA";
$tdatalineas_agrarias_Chart[".importFields"][] = "FINCA";
$tdatalineas_agrarias_Chart[".importFields"][] = "LINEA";
$tdatalineas_agrarias_Chart[".importFields"][] = "VARIEDAD";
$tdatalineas_agrarias_Chart[".importFields"][] = "AREA";
$tdatalineas_agrarias_Chart[".importFields"][] = "PRODUCCION_ANUAL";
$tdatalineas_agrarias_Chart[".importFields"][] = "AÑO";

$tdatalineas_agrarias_Chart[".printFields"] = array();
$tdatalineas_agrarias_Chart[".printFields"][] = "ID";
$tdatalineas_agrarias_Chart[".printFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatalineas_agrarias_Chart[".printFields"][] = "NOMBRE";
$tdatalineas_agrarias_Chart[".printFields"][] = "VEREDA";
$tdatalineas_agrarias_Chart[".printFields"][] = "FINCA";
$tdatalineas_agrarias_Chart[".printFields"][] = "LINEA";
$tdatalineas_agrarias_Chart[".printFields"][] = "VARIEDAD";
$tdatalineas_agrarias_Chart[".printFields"][] = "AREA";
$tdatalineas_agrarias_Chart[".printFields"][] = "PRODUCCION_ANUAL";
$tdatalineas_agrarias_Chart[".printFields"][] = "AÑO";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "lineas_agrarias";
	$fdata["Label"] = GetFieldLabel("lineas_agrarias_Chart","ID");
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




	$tdatalineas_agrarias_Chart["ID"] = $fdata;
//	FINCA_PROPIETARIO_CEDULA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FINCA_PROPIETARIO_CEDULA";
	$fdata["GoodName"] = "FINCA_PROPIETARIO_CEDULA";
	$fdata["ownerTable"] = "lineas_agrarias";
	$fdata["Label"] = GetFieldLabel("lineas_agrarias_Chart","FINCA_PROPIETARIO_CEDULA");
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




	$tdatalineas_agrarias_Chart["FINCA_PROPIETARIO_CEDULA"] = $fdata;
//	NOMBRE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "NOMBRE";
	$fdata["GoodName"] = "NOMBRE";
	$fdata["ownerTable"] = "lineas_agrarias";
	$fdata["Label"] = GetFieldLabel("lineas_agrarias_Chart","NOMBRE");
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




	$tdatalineas_agrarias_Chart["NOMBRE"] = $fdata;
//	VEREDA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "VEREDA";
	$fdata["GoodName"] = "VEREDA";
	$fdata["ownerTable"] = "lineas_agrarias";
	$fdata["Label"] = GetFieldLabel("lineas_agrarias_Chart","VEREDA");
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




	$tdatalineas_agrarias_Chart["VEREDA"] = $fdata;
//	FINCA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "FINCA";
	$fdata["GoodName"] = "FINCA";
	$fdata["ownerTable"] = "lineas_agrarias";
	$fdata["Label"] = GetFieldLabel("lineas_agrarias_Chart","FINCA");
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




	$tdatalineas_agrarias_Chart["FINCA"] = $fdata;
//	LINEA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "LINEA";
	$fdata["GoodName"] = "LINEA";
	$fdata["ownerTable"] = "lineas_agrarias";
	$fdata["Label"] = GetFieldLabel("lineas_agrarias_Chart","LINEA");
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




	$tdatalineas_agrarias_Chart["LINEA"] = $fdata;
//	VARIEDAD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "VARIEDAD";
	$fdata["GoodName"] = "VARIEDAD";
	$fdata["ownerTable"] = "lineas_agrarias";
	$fdata["Label"] = GetFieldLabel("lineas_agrarias_Chart","VARIEDAD");
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




	$tdatalineas_agrarias_Chart["VARIEDAD"] = $fdata;
//	AREA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "AREA";
	$fdata["GoodName"] = "AREA";
	$fdata["ownerTable"] = "lineas_agrarias";
	$fdata["Label"] = GetFieldLabel("lineas_agrarias_Chart","AREA");
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




	$tdatalineas_agrarias_Chart["AREA"] = $fdata;
//	PRODUCCION_ANUAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "PRODUCCION_ANUAL";
	$fdata["GoodName"] = "PRODUCCION_ANUAL";
	$fdata["ownerTable"] = "lineas_agrarias";
	$fdata["Label"] = GetFieldLabel("lineas_agrarias_Chart","PRODUCCION_ANUAL");
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




	$tdatalineas_agrarias_Chart["PRODUCCION_ANUAL"] = $fdata;
//	AÑO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "AÑO";
	$fdata["GoodName"] = "A_O";
	$fdata["ownerTable"] = "lineas_agrarias";
	$fdata["Label"] = GetFieldLabel("lineas_agrarias_Chart","A_O");
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




	$tdatalineas_agrarias_Chart["AÑO"] = $fdata;

	$tdatalineas_agrarias_Chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">lineas_agrarias Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdatalineas_agrarias_Chart[".chartXml"] .= '<attr value="0">
			<attr value="name">FINCA_PROPIETARIO_CEDULA</attr>';
	$tdatalineas_agrarias_Chart[".chartXml"] .= '</attr>';
	$tdatalineas_agrarias_Chart[".chartXml"] .= '<attr value="1">
		<attr value="name">NOMBRE</attr>
	</attr>';
	$tdatalineas_agrarias_Chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatalineas_agrarias_Chart[".chartXml"] .= '<attr value="head">'.xmlencode("lineas_agrarias Chart").'</attr>
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
$tdatalineas_agrarias_Chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatalineas_agrarias_Chart[".chartXml"] .= '<attr value="0">
		<attr value="name">ID</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("lineas_agrarias_Chart","ID")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatalineas_agrarias_Chart[".chartXml"] .= '<attr value="1">
		<attr value="name">FINCA_PROPIETARIO_CEDULA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("lineas_agrarias_Chart","FINCA_PROPIETARIO_CEDULA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatalineas_agrarias_Chart[".chartXml"] .= '<attr value="2">
		<attr value="name">NOMBRE</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("lineas_agrarias_Chart","NOMBRE")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatalineas_agrarias_Chart[".chartXml"] .= '<attr value="3">
		<attr value="name">VEREDA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("lineas_agrarias_Chart","VEREDA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatalineas_agrarias_Chart[".chartXml"] .= '<attr value="4">
		<attr value="name">FINCA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("lineas_agrarias_Chart","FINCA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatalineas_agrarias_Chart[".chartXml"] .= '<attr value="5">
		<attr value="name">LINEA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("lineas_agrarias_Chart","LINEA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatalineas_agrarias_Chart[".chartXml"] .= '<attr value="6">
		<attr value="name">VARIEDAD</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("lineas_agrarias_Chart","VARIEDAD")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatalineas_agrarias_Chart[".chartXml"] .= '<attr value="7">
		<attr value="name">AREA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("lineas_agrarias_Chart","AREA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatalineas_agrarias_Chart[".chartXml"] .= '<attr value="8">
		<attr value="name">PRODUCCION_ANUAL</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("lineas_agrarias_Chart","PRODUCCION_ANUAL")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatalineas_agrarias_Chart[".chartXml"] .= '<attr value="9">
		<attr value="name">AÑO</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("lineas_agrarias_Chart","A_O")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatalineas_agrarias_Chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">lineas_agrarias Chart</attr>
<attr value="short_table_name">lineas_agrarias_Chart</attr>
</attr>

</chart>';

$tables_data["lineas_agrarias Chart"]=&$tdatalineas_agrarias_Chart;
$field_labels["lineas_agrarias_Chart"] = &$fieldLabelslineas_agrarias_Chart;
$fieldToolTips["lineas_agrarias_Chart"] = &$fieldToolTipslineas_agrarias_Chart;
$page_titles["lineas_agrarias_Chart"] = &$pageTitleslineas_agrarias_Chart;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["lineas_agrarias Chart"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["lineas_agrarias Chart"] = array();


	
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
					$masterTablesData["lineas_agrarias Chart"][0] = $masterParams;
				$masterTablesData["lineas_agrarias Chart"][0]["masterKeys"] = array();
	$masterTablesData["lineas_agrarias Chart"][0]["masterKeys"][]="PROPIETARIO_CEDULA";
				$masterTablesData["lineas_agrarias Chart"][0]["detailKeys"] = array();
	$masterTablesData["lineas_agrarias Chart"][0]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_lineas_agrarias_Chart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	FINCA_PROPIETARIO_CEDULA,  	NOMBRE,  	VEREDA,  	FINCA,  	LINEA,  	VARIEDAD,  	AREA,  	PRODUCCION_ANUAL,  	`AÑO`";
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
	"m_srcTableName" => "lineas_agrarias Chart"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "lineas_agrarias Chart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "FINCA_PROPIETARIO_CEDULA",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "lineas_agrarias Chart"
));

$proto8["m_sql"] = "FINCA_PROPIETARIO_CEDULA";
$proto8["m_srcTableName"] = "lineas_agrarias Chart";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBRE",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "lineas_agrarias Chart"
));

$proto10["m_sql"] = "NOMBRE";
$proto10["m_srcTableName"] = "lineas_agrarias Chart";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "VEREDA",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "lineas_agrarias Chart"
));

$proto12["m_sql"] = "VEREDA";
$proto12["m_srcTableName"] = "lineas_agrarias Chart";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "FINCA",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "lineas_agrarias Chart"
));

$proto14["m_sql"] = "FINCA";
$proto14["m_srcTableName"] = "lineas_agrarias Chart";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "LINEA",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "lineas_agrarias Chart"
));

$proto16["m_sql"] = "LINEA";
$proto16["m_srcTableName"] = "lineas_agrarias Chart";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "VARIEDAD",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "lineas_agrarias Chart"
));

$proto18["m_sql"] = "VARIEDAD";
$proto18["m_srcTableName"] = "lineas_agrarias Chart";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "AREA",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "lineas_agrarias Chart"
));

$proto20["m_sql"] = "AREA";
$proto20["m_srcTableName"] = "lineas_agrarias Chart";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "PRODUCCION_ANUAL",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "lineas_agrarias Chart"
));

$proto22["m_sql"] = "PRODUCCION_ANUAL";
$proto22["m_srcTableName"] = "lineas_agrarias Chart";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "lineas_agrarias Chart"
));

$proto24["m_sql"] = "`AÑO`";
$proto24["m_srcTableName"] = "lineas_agrarias Chart";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "lineas_agrarias";
$proto27["m_srcTableName"] = "lineas_agrarias Chart";
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
$proto26["m_srcTableName"] = "lineas_agrarias Chart";
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
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="lineas_agrarias Chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_lineas_agrarias_Chart = createSqlQuery_lineas_agrarias_Chart();


	
		;

										

$tdatalineas_agrarias_Chart[".sqlquery"] = $queryData_lineas_agrarias_Chart;

$tableEvents["lineas_agrarias Chart"] = new eventsBase;
$tdatalineas_agrarias_Chart[".hasEvents"] = false;

?>