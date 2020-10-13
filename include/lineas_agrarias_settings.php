<?php
require_once(getabspath("classes/cipherer.php"));




$tdatalineas_agrarias = array();
	$tdatalineas_agrarias[".truncateText"] = true;
	$tdatalineas_agrarias[".NumberOfChars"] = 80;
	$tdatalineas_agrarias[".ShortName"] = "lineas_agrarias";
	$tdatalineas_agrarias[".OwnerID"] = "";
	$tdatalineas_agrarias[".OriginalTable"] = "lineas_agrarias";

//	field labels
$fieldLabelslineas_agrarias = array();
$fieldToolTipslineas_agrarias = array();
$pageTitleslineas_agrarias = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelslineas_agrarias["Spanish"] = array();
	$fieldToolTipslineas_agrarias["Spanish"] = array();
	$pageTitleslineas_agrarias["Spanish"] = array();
	$fieldLabelslineas_agrarias["Spanish"]["ID"] = "ID";
	$fieldToolTipslineas_agrarias["Spanish"]["ID"] = "";
	$fieldLabelslineas_agrarias["Spanish"]["FINCA_PROPIETARIO_CEDULA"] = "CEDULA";
	$fieldToolTipslineas_agrarias["Spanish"]["FINCA_PROPIETARIO_CEDULA"] = "";
	$fieldLabelslineas_agrarias["Spanish"]["NOMBRE"] = "NOMBRE";
	$fieldToolTipslineas_agrarias["Spanish"]["NOMBRE"] = "";
	$fieldLabelslineas_agrarias["Spanish"]["VEREDA"] = "VEREDA";
	$fieldToolTipslineas_agrarias["Spanish"]["VEREDA"] = "";
	$fieldLabelslineas_agrarias["Spanish"]["FINCA"] = "FINCA";
	$fieldToolTipslineas_agrarias["Spanish"]["FINCA"] = "";
	$fieldLabelslineas_agrarias["Spanish"]["LINEA"] = "LINEA";
	$fieldToolTipslineas_agrarias["Spanish"]["LINEA"] = "";
	$fieldLabelslineas_agrarias["Spanish"]["VARIEDAD"] = "VARIEDAD";
	$fieldToolTipslineas_agrarias["Spanish"]["VARIEDAD"] = "";
	$fieldLabelslineas_agrarias["Spanish"]["AREA"] = "AREA";
	$fieldToolTipslineas_agrarias["Spanish"]["AREA"] = "";
	$fieldLabelslineas_agrarias["Spanish"]["PRODUCCION_ANUAL"] = "PROD. ANUAL (Ton)";
	$fieldToolTipslineas_agrarias["Spanish"]["PRODUCCION_ANUAL"] = "";
	$fieldLabelslineas_agrarias["Spanish"]["A_O"] = "AÑO";
	$fieldToolTipslineas_agrarias["Spanish"]["A_O"] = "";
	if (count($fieldToolTipslineas_agrarias["Spanish"]))
		$tdatalineas_agrarias[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelslineas_agrarias[""] = array();
	$fieldToolTipslineas_agrarias[""] = array();
	$pageTitleslineas_agrarias[""] = array();
	if (count($fieldToolTipslineas_agrarias[""]))
		$tdatalineas_agrarias[".isUseToolTips"] = true;
}


	$tdatalineas_agrarias[".NCSearch"] = true;



$tdatalineas_agrarias[".shortTableName"] = "lineas_agrarias";
$tdatalineas_agrarias[".nSecOptions"] = 0;
$tdatalineas_agrarias[".recsPerRowPrint"] = 1;
$tdatalineas_agrarias[".mainTableOwnerID"] = "";
$tdatalineas_agrarias[".moveNext"] = 1;
$tdatalineas_agrarias[".entityType"] = 0;

$tdatalineas_agrarias[".strOriginalTableName"] = "lineas_agrarias";

	



$tdatalineas_agrarias[".showAddInPopup"] = false;

$tdatalineas_agrarias[".showEditInPopup"] = false;

$tdatalineas_agrarias[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatalineas_agrarias[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatalineas_agrarias[".fieldsForRegister"] = array();

$tdatalineas_agrarias[".listAjax"] = false;

	$tdatalineas_agrarias[".audit"] = false;

	$tdatalineas_agrarias[".locking"] = false;

$tdatalineas_agrarias[".edit"] = true;
$tdatalineas_agrarias[".afterEditAction"] = 1;
$tdatalineas_agrarias[".closePopupAfterEdit"] = 1;
$tdatalineas_agrarias[".afterEditActionDetTable"] = "";

$tdatalineas_agrarias[".add"] = true;
$tdatalineas_agrarias[".afterAddAction"] = 1;
$tdatalineas_agrarias[".closePopupAfterAdd"] = 1;
$tdatalineas_agrarias[".afterAddActionDetTable"] = "";

$tdatalineas_agrarias[".list"] = true;

$tdatalineas_agrarias[".view"] = true;

$tdatalineas_agrarias[".import"] = true;

$tdatalineas_agrarias[".exportTo"] = true;

$tdatalineas_agrarias[".printFriendly"] = true;

$tdatalineas_agrarias[".delete"] = true;

$tdatalineas_agrarias[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatalineas_agrarias[".searchSaving"] = false;
//

$tdatalineas_agrarias[".showSearchPanel"] = true;
		$tdatalineas_agrarias[".flexibleSearch"] = true;

$tdatalineas_agrarias[".isUseAjaxSuggest"] = true;

$tdatalineas_agrarias[".rowHighlite"] = true;



$tdatalineas_agrarias[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalineas_agrarias[".isUseTimeForSearch"] = false;



$tdatalineas_agrarias[".badgeColor"] = "800080";


$tdatalineas_agrarias[".allSearchFields"] = array();
$tdatalineas_agrarias[".filterFields"] = array();
$tdatalineas_agrarias[".requiredSearchFields"] = array();

$tdatalineas_agrarias[".allSearchFields"][] = "ID";
	$tdatalineas_agrarias[".allSearchFields"][] = "FINCA_PROPIETARIO_CEDULA";
	$tdatalineas_agrarias[".allSearchFields"][] = "NOMBRE";
	$tdatalineas_agrarias[".allSearchFields"][] = "VEREDA";
	$tdatalineas_agrarias[".allSearchFields"][] = "FINCA";
	$tdatalineas_agrarias[".allSearchFields"][] = "LINEA";
	$tdatalineas_agrarias[".allSearchFields"][] = "VARIEDAD";
	$tdatalineas_agrarias[".allSearchFields"][] = "AREA";
	$tdatalineas_agrarias[".allSearchFields"][] = "PRODUCCION_ANUAL";
	$tdatalineas_agrarias[".allSearchFields"][] = "AÑO";
	

$tdatalineas_agrarias[".googleLikeFields"] = array();
$tdatalineas_agrarias[".googleLikeFields"][] = "ID";
$tdatalineas_agrarias[".googleLikeFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatalineas_agrarias[".googleLikeFields"][] = "NOMBRE";
$tdatalineas_agrarias[".googleLikeFields"][] = "VEREDA";
$tdatalineas_agrarias[".googleLikeFields"][] = "FINCA";
$tdatalineas_agrarias[".googleLikeFields"][] = "LINEA";
$tdatalineas_agrarias[".googleLikeFields"][] = "VARIEDAD";
$tdatalineas_agrarias[".googleLikeFields"][] = "AREA";
$tdatalineas_agrarias[".googleLikeFields"][] = "PRODUCCION_ANUAL";
$tdatalineas_agrarias[".googleLikeFields"][] = "AÑO";


$tdatalineas_agrarias[".advSearchFields"] = array();
$tdatalineas_agrarias[".advSearchFields"][] = "ID";
$tdatalineas_agrarias[".advSearchFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatalineas_agrarias[".advSearchFields"][] = "NOMBRE";
$tdatalineas_agrarias[".advSearchFields"][] = "VEREDA";
$tdatalineas_agrarias[".advSearchFields"][] = "FINCA";
$tdatalineas_agrarias[".advSearchFields"][] = "LINEA";
$tdatalineas_agrarias[".advSearchFields"][] = "VARIEDAD";
$tdatalineas_agrarias[".advSearchFields"][] = "AREA";
$tdatalineas_agrarias[".advSearchFields"][] = "PRODUCCION_ANUAL";
$tdatalineas_agrarias[".advSearchFields"][] = "AÑO";

$tdatalineas_agrarias[".tableType"] = "list";

$tdatalineas_agrarias[".printerPageOrientation"] = 0;
$tdatalineas_agrarias[".nPrinterPageScale"] = 100;

$tdatalineas_agrarias[".nPrinterSplitRecords"] = 40;

$tdatalineas_agrarias[".nPrinterPDFSplitRecords"] = 40;



$tdatalineas_agrarias[".geocodingEnabled"] = false;





$tdatalineas_agrarias[".listGridLayout"] = 3;





// view page pdf
$tdatalineas_agrarias[".isViewPagePDF"] = true;
$tdatalineas_agrarias[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatalineas_agrarias[".isPrinterPagePDF"] = true;
$tdatalineas_agrarias[".isLandscapePrinterPagePDFOrientation"] = 1;
$tdatalineas_agrarias[".nPrinterPagePDFScale"] = 100;


$tdatalineas_agrarias[".pageSize"] = 20;

$tdatalineas_agrarias[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatalineas_agrarias[".strOrderBy"] = $tstrOrderBy;

$tdatalineas_agrarias[".orderindexes"] = array();

$tdatalineas_agrarias[".sqlHead"] = "SELECT ID,  FINCA_PROPIETARIO_CEDULA,  NOMBRE,  VEREDA,  FINCA,  LINEA,  VARIEDAD,  AREA,  PRODUCCION_ANUAL,  `AÑO`";
$tdatalineas_agrarias[".sqlFrom"] = "FROM lineas_agrarias";
$tdatalineas_agrarias[".sqlWhereExpr"] = "";
$tdatalineas_agrarias[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalineas_agrarias[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalineas_agrarias[".arrGroupsPerPage"] = $arrGPP;

$tdatalineas_agrarias[".highlightSearchResults"] = true;

$tableKeyslineas_agrarias = array();
$tableKeyslineas_agrarias[] = "ID";
$tableKeyslineas_agrarias[] = "FINCA_PROPIETARIO_CEDULA";
$tdatalineas_agrarias[".Keys"] = $tableKeyslineas_agrarias;

$tdatalineas_agrarias[".listFields"] = array();
$tdatalineas_agrarias[".listFields"][] = "ID";
$tdatalineas_agrarias[".listFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatalineas_agrarias[".listFields"][] = "NOMBRE";
$tdatalineas_agrarias[".listFields"][] = "VEREDA";
$tdatalineas_agrarias[".listFields"][] = "FINCA";
$tdatalineas_agrarias[".listFields"][] = "LINEA";
$tdatalineas_agrarias[".listFields"][] = "VARIEDAD";
$tdatalineas_agrarias[".listFields"][] = "AREA";
$tdatalineas_agrarias[".listFields"][] = "PRODUCCION_ANUAL";
$tdatalineas_agrarias[".listFields"][] = "AÑO";

$tdatalineas_agrarias[".hideMobileList"] = array();


$tdatalineas_agrarias[".viewFields"] = array();
$tdatalineas_agrarias[".viewFields"][] = "ID";
$tdatalineas_agrarias[".viewFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatalineas_agrarias[".viewFields"][] = "NOMBRE";
$tdatalineas_agrarias[".viewFields"][] = "VEREDA";
$tdatalineas_agrarias[".viewFields"][] = "FINCA";
$tdatalineas_agrarias[".viewFields"][] = "LINEA";
$tdatalineas_agrarias[".viewFields"][] = "VARIEDAD";
$tdatalineas_agrarias[".viewFields"][] = "AREA";
$tdatalineas_agrarias[".viewFields"][] = "PRODUCCION_ANUAL";
$tdatalineas_agrarias[".viewFields"][] = "AÑO";

$tdatalineas_agrarias[".addFields"] = array();
$tdatalineas_agrarias[".addFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatalineas_agrarias[".addFields"][] = "NOMBRE";
$tdatalineas_agrarias[".addFields"][] = "VEREDA";
$tdatalineas_agrarias[".addFields"][] = "FINCA";
$tdatalineas_agrarias[".addFields"][] = "LINEA";
$tdatalineas_agrarias[".addFields"][] = "VARIEDAD";
$tdatalineas_agrarias[".addFields"][] = "AREA";
$tdatalineas_agrarias[".addFields"][] = "PRODUCCION_ANUAL";
$tdatalineas_agrarias[".addFields"][] = "AÑO";

$tdatalineas_agrarias[".masterListFields"] = array();
$tdatalineas_agrarias[".masterListFields"][] = "ID";
$tdatalineas_agrarias[".masterListFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatalineas_agrarias[".masterListFields"][] = "NOMBRE";
$tdatalineas_agrarias[".masterListFields"][] = "VEREDA";
$tdatalineas_agrarias[".masterListFields"][] = "FINCA";
$tdatalineas_agrarias[".masterListFields"][] = "LINEA";
$tdatalineas_agrarias[".masterListFields"][] = "VARIEDAD";
$tdatalineas_agrarias[".masterListFields"][] = "AREA";
$tdatalineas_agrarias[".masterListFields"][] = "PRODUCCION_ANUAL";
$tdatalineas_agrarias[".masterListFields"][] = "AÑO";

$tdatalineas_agrarias[".inlineAddFields"] = array();
$tdatalineas_agrarias[".inlineAddFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatalineas_agrarias[".inlineAddFields"][] = "NOMBRE";
$tdatalineas_agrarias[".inlineAddFields"][] = "VEREDA";
$tdatalineas_agrarias[".inlineAddFields"][] = "FINCA";
$tdatalineas_agrarias[".inlineAddFields"][] = "LINEA";
$tdatalineas_agrarias[".inlineAddFields"][] = "VARIEDAD";
$tdatalineas_agrarias[".inlineAddFields"][] = "AREA";
$tdatalineas_agrarias[".inlineAddFields"][] = "PRODUCCION_ANUAL";
$tdatalineas_agrarias[".inlineAddFields"][] = "AÑO";

$tdatalineas_agrarias[".editFields"] = array();
$tdatalineas_agrarias[".editFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatalineas_agrarias[".editFields"][] = "NOMBRE";
$tdatalineas_agrarias[".editFields"][] = "VEREDA";
$tdatalineas_agrarias[".editFields"][] = "FINCA";
$tdatalineas_agrarias[".editFields"][] = "LINEA";
$tdatalineas_agrarias[".editFields"][] = "VARIEDAD";
$tdatalineas_agrarias[".editFields"][] = "AREA";
$tdatalineas_agrarias[".editFields"][] = "PRODUCCION_ANUAL";
$tdatalineas_agrarias[".editFields"][] = "AÑO";

$tdatalineas_agrarias[".inlineEditFields"] = array();
$tdatalineas_agrarias[".inlineEditFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatalineas_agrarias[".inlineEditFields"][] = "NOMBRE";
$tdatalineas_agrarias[".inlineEditFields"][] = "VEREDA";
$tdatalineas_agrarias[".inlineEditFields"][] = "FINCA";
$tdatalineas_agrarias[".inlineEditFields"][] = "LINEA";
$tdatalineas_agrarias[".inlineEditFields"][] = "VARIEDAD";
$tdatalineas_agrarias[".inlineEditFields"][] = "AREA";
$tdatalineas_agrarias[".inlineEditFields"][] = "PRODUCCION_ANUAL";
$tdatalineas_agrarias[".inlineEditFields"][] = "AÑO";

$tdatalineas_agrarias[".exportFields"] = array();
$tdatalineas_agrarias[".exportFields"][] = "ID";
$tdatalineas_agrarias[".exportFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatalineas_agrarias[".exportFields"][] = "NOMBRE";
$tdatalineas_agrarias[".exportFields"][] = "VEREDA";
$tdatalineas_agrarias[".exportFields"][] = "FINCA";
$tdatalineas_agrarias[".exportFields"][] = "LINEA";
$tdatalineas_agrarias[".exportFields"][] = "VARIEDAD";
$tdatalineas_agrarias[".exportFields"][] = "AREA";
$tdatalineas_agrarias[".exportFields"][] = "PRODUCCION_ANUAL";
$tdatalineas_agrarias[".exportFields"][] = "AÑO";

$tdatalineas_agrarias[".importFields"] = array();
$tdatalineas_agrarias[".importFields"][] = "ID";
$tdatalineas_agrarias[".importFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatalineas_agrarias[".importFields"][] = "NOMBRE";
$tdatalineas_agrarias[".importFields"][] = "VEREDA";
$tdatalineas_agrarias[".importFields"][] = "FINCA";
$tdatalineas_agrarias[".importFields"][] = "LINEA";
$tdatalineas_agrarias[".importFields"][] = "VARIEDAD";
$tdatalineas_agrarias[".importFields"][] = "AREA";
$tdatalineas_agrarias[".importFields"][] = "PRODUCCION_ANUAL";
$tdatalineas_agrarias[".importFields"][] = "AÑO";

$tdatalineas_agrarias[".printFields"] = array();
$tdatalineas_agrarias[".printFields"][] = "ID";
$tdatalineas_agrarias[".printFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatalineas_agrarias[".printFields"][] = "NOMBRE";
$tdatalineas_agrarias[".printFields"][] = "VEREDA";
$tdatalineas_agrarias[".printFields"][] = "FINCA";
$tdatalineas_agrarias[".printFields"][] = "LINEA";
$tdatalineas_agrarias[".printFields"][] = "VARIEDAD";
$tdatalineas_agrarias[".printFields"][] = "AREA";
$tdatalineas_agrarias[".printFields"][] = "PRODUCCION_ANUAL";
$tdatalineas_agrarias[".printFields"][] = "AÑO";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "lineas_agrarias";
	$fdata["Label"] = GetFieldLabel("lineas_agrarias","ID");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatalineas_agrarias["ID"] = $fdata;
//	FINCA_PROPIETARIO_CEDULA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FINCA_PROPIETARIO_CEDULA";
	$fdata["GoodName"] = "FINCA_PROPIETARIO_CEDULA";
	$fdata["ownerTable"] = "lineas_agrarias";
	$fdata["Label"] = GetFieldLabel("lineas_agrarias","FINCA_PROPIETARIO_CEDULA");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatalineas_agrarias["FINCA_PROPIETARIO_CEDULA"] = $fdata;
//	NOMBRE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "NOMBRE";
	$fdata["GoodName"] = "NOMBRE";
	$fdata["ownerTable"] = "lineas_agrarias";
	$fdata["Label"] = GetFieldLabel("lineas_agrarias","NOMBRE");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatalineas_agrarias["NOMBRE"] = $fdata;
//	VEREDA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "VEREDA";
	$fdata["GoodName"] = "VEREDA";
	$fdata["ownerTable"] = "lineas_agrarias";
	$fdata["Label"] = GetFieldLabel("lineas_agrarias","VEREDA");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatalineas_agrarias["VEREDA"] = $fdata;
//	FINCA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "FINCA";
	$fdata["GoodName"] = "FINCA";
	$fdata["ownerTable"] = "lineas_agrarias";
	$fdata["Label"] = GetFieldLabel("lineas_agrarias","FINCA");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatalineas_agrarias["FINCA"] = $fdata;
//	LINEA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "LINEA";
	$fdata["GoodName"] = "LINEA";
	$fdata["ownerTable"] = "lineas_agrarias";
	$fdata["Label"] = GetFieldLabel("lineas_agrarias","LINEA");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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
	$edata["LookupValues"][] = "CAFE";
	$edata["LookupValues"][] = "CAÑA";
	$edata["LookupValues"][] = "FIQUE";
	$edata["LookupValues"][] = "HORTIFRUTICOLA";
	$edata["LookupValues"][] = "PECUARIO";
	$edata["LookupValues"][] = "NINGUNO";

	
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatalineas_agrarias["LINEA"] = $fdata;
//	VARIEDAD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "VARIEDAD";
	$fdata["GoodName"] = "VARIEDAD";
	$fdata["ownerTable"] = "lineas_agrarias";
	$fdata["Label"] = GetFieldLabel("lineas_agrarias","VARIEDAD");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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
	$edata["LookupValues"][] = "------CAFE------";
	$edata["LookupValues"][] = "CASTILLA";
	$edata["LookupValues"][] = "VARIEDAD COLOMBIA";
	$edata["LookupValues"][] = "CATURRA";
	$edata["LookupValues"][] = "OTRO";
	$edata["LookupValues"][] = "----BOVINOS----";
	$edata["LookupValues"][] = "CHINO SANTANDEREANO";
	$edata["LookupValues"][] = "COSTEÑO";
	$edata["LookupValues"][] = "HOLSTEYN";
	$edata["LookupValues"][] = "AYRSHINE";
	$edata["LookupValues"][] = "PARDO SUIZO";
	$edata["LookupValues"][] = "NORMANDO";
	$edata["LookupValues"][] = "CEBÚ";
	$edata["LookupValues"][] = "CRIOLLO";
	$edata["LookupValues"][] = "BRAHMAN";
	$edata["LookupValues"][] = "JIROLANDO";
	$edata["LookupValues"][] = "BUFALO";
	$edata["LookupValues"][] = "SIMENTAL";
	$edata["LookupValues"][] = "OTRO";
	$edata["LookupValues"][] = "----PORCINOS----";
	$edata["LookupValues"][] = "CARE PALO";
	$edata["LookupValues"][] = "CASCO DE MULA";
	$edata["LookupValues"][] = "CHOCOANO";
	$edata["LookupValues"][] = "CONGO";
	$edata["LookupValues"][] = "CURI";
	$edata["LookupValues"][] = "DUROC";
	$edata["LookupValues"][] = "ZUNGO";
	$edata["LookupValues"][] = "CHONCHO";
	$edata["LookupValues"][] = "OTRO";
	$edata["LookupValues"][] = "----CAPRINOS----";
	$edata["LookupValues"][] = "SAANEN";
	$edata["LookupValues"][] = "ALPINA";
	$edata["LookupValues"][] = "BOER";
	$edata["LookupValues"][] = "LAMANCHA";
	$edata["LookupValues"][] = "ANGLONUBIANA";
	$edata["LookupValues"][] = "TOGGENBURG";
	$edata["LookupValues"][] = "CRIOLLA";
	$edata["LookupValues"][] = "OTRO";
	$edata["LookupValues"][] = "----OVINOS----";
	$edata["LookupValues"][] = "KATAHDIN";
	$edata["LookupValues"][] = "SANTA INES";
	$edata["LookupValues"][] = "DORPER";
	$edata["LookupValues"][] = "PELIBUEY";
	$edata["LookupValues"][] = "CHAROLLAIS";
	$edata["LookupValues"][] = "OTRO";
	$edata["LookupValues"][] = "----AVES----";
	$edata["LookupValues"][] = "CARIOCA";
	$edata["LookupValues"][] = "CHUSCA";
	$edata["LookupValues"][] = "COPETONA";
	$edata["LookupValues"][] = "NICARAGUA";
	$edata["LookupValues"][] = "SANTANDEREANA";
	$edata["LookupValues"][] = "GIGANTE";
	$edata["LookupValues"][] = "OTRO";
	$edata["LookupValues"][] = "----ACUICOLA----";
	$edata["LookupValues"][] = "BOCACHICO";
	$edata["LookupValues"][] = "CACHAMA";
	$edata["LookupValues"][] = "CARPA";
	$edata["LookupValues"][] = "TILAPIA";
	$edata["LookupValues"][] = "TRUCHA";
	$edata["LookupValues"][] = "OTRO";
	$edata["LookupValues"][] = "----CAÑA----";
	$edata["LookupValues"][] = "AZUCARERA";
	$edata["LookupValues"][] = "PANELERA";
	$edata["LookupValues"][] = "CRIOLLA";
	$edata["LookupValues"][] = "VARIEDADES CENICAÑA";
	$edata["LookupValues"][] = "----FIQUE----";
	$edata["LookupValues"][] = "CASTILLA";
	$edata["LookupValues"][] = "CENIZA";
	$edata["LookupValues"][] = "COMUN";
	$edata["LookupValues"][] = "ESPINOSO";
	$edata["LookupValues"][] = "FRONTERA";
	$edata["LookupValues"][] = "VERDE DE CABUYA";
	$edata["LookupValues"][] = "UÑA DE AGUILA";
	$edata["LookupValues"][] = "OTRO";
	$edata["LookupValues"][] = "----FRUTAS----";
	$edata["LookupValues"][] = "TROPICALES (Banana, guayaba, mango, etc)";
	$edata["LookupValues"][] = "BOSQUE (Mora, Fresa, Frambuesa, etc)";
	$edata["LookupValues"][] = "CITRICAS (Naranja, limon, mandarina, etc)";
	$edata["LookupValues"][] = "SECOS (Tamarindo, almendras, etc)";
	$edata["LookupValues"][] = "----HORTALIZAS----";
	$edata["LookupValues"][] = "FRUTOS (Berenjena, Tomate, Calabaza, etc)";
	$edata["LookupValues"][] = "BULBOS (Cebolla cabezona, etc)";
	$edata["LookupValues"][] = "FLOR (Coliflor, Alcachofa, etc)";
	$edata["LookupValues"][] = "HUERTA (Lechuga, Perejil, Cilantro, etc )";
	$edata["LookupValues"][] = "LEGUMBRES (Frijol, Habichuela, etc)";
	$edata["LookupValues"][] = "OTROS";

	
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatalineas_agrarias["VARIEDAD"] = $fdata;
//	AREA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "AREA";
	$fdata["GoodName"] = "AREA";
	$fdata["ownerTable"] = "lineas_agrarias";
	$fdata["Label"] = GetFieldLabel("lineas_agrarias","AREA");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatalineas_agrarias["AREA"] = $fdata;
//	PRODUCCION_ANUAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "PRODUCCION_ANUAL";
	$fdata["GoodName"] = "PRODUCCION_ANUAL";
	$fdata["ownerTable"] = "lineas_agrarias";
	$fdata["Label"] = GetFieldLabel("lineas_agrarias","PRODUCCION_ANUAL");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatalineas_agrarias["PRODUCCION_ANUAL"] = $fdata;
//	AÑO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "AÑO";
	$fdata["GoodName"] = "A_O";
	$fdata["ownerTable"] = "lineas_agrarias";
	$fdata["Label"] = GetFieldLabel("lineas_agrarias","A_O");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatalineas_agrarias["AÑO"] = $fdata;


$tables_data["lineas_agrarias"]=&$tdatalineas_agrarias;
$field_labels["lineas_agrarias"] = &$fieldLabelslineas_agrarias;
$fieldToolTips["lineas_agrarias"] = &$fieldToolTipslineas_agrarias;
$page_titles["lineas_agrarias"] = &$pageTitleslineas_agrarias;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["lineas_agrarias"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["lineas_agrarias"] = array();


	
				$strOriginalDetailsTable="finca";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="finca";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "finca";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
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
					$masterTablesData["lineas_agrarias"][0] = $masterParams;
				$masterTablesData["lineas_agrarias"][0]["masterKeys"] = array();
	$masterTablesData["lineas_agrarias"][0]["masterKeys"][]="PROPIETARIO_CEDULA";
				$masterTablesData["lineas_agrarias"][0]["detailKeys"] = array();
	$masterTablesData["lineas_agrarias"][0]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
		
	
				$strOriginalDetailsTable="finca";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="REPORTE GLOBAL";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "REPORTE_GLOBAL";
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
					$masterParams["type"] = PAGE_REPORT;
	$masterTablesData["lineas_agrarias"][1] = $masterParams;
				$masterTablesData["lineas_agrarias"][1]["masterKeys"] = array();
	$masterTablesData["lineas_agrarias"][1]["masterKeys"][]="PROPIETARIO_CEDULA";
				$masterTablesData["lineas_agrarias"][1]["detailKeys"] = array();
	$masterTablesData["lineas_agrarias"][1]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
		
	
				$strOriginalDetailsTable="finca";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="REPORTE FINCA";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "REPORTE_FINCA";
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
					$masterParams["type"] = PAGE_REPORT;
	$masterTablesData["lineas_agrarias"][2] = $masterParams;
				$masterTablesData["lineas_agrarias"][2]["masterKeys"] = array();
	$masterTablesData["lineas_agrarias"][2]["masterKeys"][]="PROPIETARIO_CEDULA";
				$masterTablesData["lineas_agrarias"][2]["detailKeys"] = array();
	$masterTablesData["lineas_agrarias"][2]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
		
	
				$strOriginalDetailsTable="finca";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="REPORTE VEREDA";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "REPORTE_VEREDA";
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
					$masterParams["type"] = PAGE_REPORT;
	$masterTablesData["lineas_agrarias"][3] = $masterParams;
				$masterTablesData["lineas_agrarias"][3]["masterKeys"] = array();
	$masterTablesData["lineas_agrarias"][3]["masterKeys"][]="PROPIETARIO_CEDULA";
				$masterTablesData["lineas_agrarias"][3]["detailKeys"] = array();
	$masterTablesData["lineas_agrarias"][3]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_lineas_agrarias()
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
	"m_srcTableName" => "lineas_agrarias"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "lineas_agrarias";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "FINCA_PROPIETARIO_CEDULA",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "lineas_agrarias"
));

$proto8["m_sql"] = "FINCA_PROPIETARIO_CEDULA";
$proto8["m_srcTableName"] = "lineas_agrarias";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBRE",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "lineas_agrarias"
));

$proto10["m_sql"] = "NOMBRE";
$proto10["m_srcTableName"] = "lineas_agrarias";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "VEREDA",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "lineas_agrarias"
));

$proto12["m_sql"] = "VEREDA";
$proto12["m_srcTableName"] = "lineas_agrarias";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "FINCA",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "lineas_agrarias"
));

$proto14["m_sql"] = "FINCA";
$proto14["m_srcTableName"] = "lineas_agrarias";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "LINEA",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "lineas_agrarias"
));

$proto16["m_sql"] = "LINEA";
$proto16["m_srcTableName"] = "lineas_agrarias";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "VARIEDAD",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "lineas_agrarias"
));

$proto18["m_sql"] = "VARIEDAD";
$proto18["m_srcTableName"] = "lineas_agrarias";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "AREA",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "lineas_agrarias"
));

$proto20["m_sql"] = "AREA";
$proto20["m_srcTableName"] = "lineas_agrarias";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "PRODUCCION_ANUAL",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "lineas_agrarias"
));

$proto22["m_sql"] = "PRODUCCION_ANUAL";
$proto22["m_srcTableName"] = "lineas_agrarias";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "lineas_agrarias"
));

$proto24["m_sql"] = "`AÑO`";
$proto24["m_srcTableName"] = "lineas_agrarias";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "lineas_agrarias";
$proto27["m_srcTableName"] = "lineas_agrarias";
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
$proto26["m_srcTableName"] = "lineas_agrarias";
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
	"m_srcTableName" => "lineas_agrarias"
));

$proto30["m_column"]=$obj;
$obj = new SQLGroupByItem($proto30);

$proto0["m_groupby"][]=$obj;
												$proto32=array();
						$obj = new SQLField(array(
	"m_strName" => "FINCA_PROPIETARIO_CEDULA",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "lineas_agrarias"
));

$proto32["m_column"]=$obj;
$obj = new SQLGroupByItem($proto32);

$proto0["m_groupby"][]=$obj;
												$proto34=array();
						$obj = new SQLField(array(
	"m_strName" => "NOMBRE",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "lineas_agrarias"
));

$proto34["m_column"]=$obj;
$obj = new SQLGroupByItem($proto34);

$proto0["m_groupby"][]=$obj;
												$proto36=array();
						$obj = new SQLField(array(
	"m_strName" => "VEREDA",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "lineas_agrarias"
));

$proto36["m_column"]=$obj;
$obj = new SQLGroupByItem($proto36);

$proto0["m_groupby"][]=$obj;
												$proto38=array();
						$obj = new SQLField(array(
	"m_strName" => "FINCA",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "lineas_agrarias"
));

$proto38["m_column"]=$obj;
$obj = new SQLGroupByItem($proto38);

$proto0["m_groupby"][]=$obj;
												$proto40=array();
						$obj = new SQLField(array(
	"m_strName" => "LINEA",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "lineas_agrarias"
));

$proto40["m_column"]=$obj;
$obj = new SQLGroupByItem($proto40);

$proto0["m_groupby"][]=$obj;
												$proto42=array();
						$obj = new SQLField(array(
	"m_strName" => "VARIEDAD",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "lineas_agrarias"
));

$proto42["m_column"]=$obj;
$obj = new SQLGroupByItem($proto42);

$proto0["m_groupby"][]=$obj;
												$proto44=array();
						$obj = new SQLField(array(
	"m_strName" => "AREA",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "lineas_agrarias"
));

$proto44["m_column"]=$obj;
$obj = new SQLGroupByItem($proto44);

$proto0["m_groupby"][]=$obj;
												$proto46=array();
						$obj = new SQLField(array(
	"m_strName" => "PRODUCCION_ANUAL",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "lineas_agrarias"
));

$proto46["m_column"]=$obj;
$obj = new SQLGroupByItem($proto46);

$proto0["m_groupby"][]=$obj;
												$proto48=array();
						$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "lineas_agrarias"
));

$proto48["m_column"]=$obj;
$obj = new SQLGroupByItem($proto48);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="lineas_agrarias";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_lineas_agrarias = createSqlQuery_lineas_agrarias();


	
		;

										

$tdatalineas_agrarias[".sqlquery"] = $queryData_lineas_agrarias;

$tableEvents["lineas_agrarias"] = new eventsBase;
$tdatalineas_agrarias[".hasEvents"] = false;

?>