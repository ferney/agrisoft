<?php
require_once(getabspath("classes/cipherer.php"));




$tdatalegal_ESTADISTICA = array();
	$tdatalegal_ESTADISTICA[".ShortName"] = "legal_ESTADISTICA";
	$tdatalegal_ESTADISTICA[".OwnerID"] = "";
	$tdatalegal_ESTADISTICA[".OriginalTable"] = "legal";

//	field labels
$fieldLabelslegal_ESTADISTICA = array();
$fieldToolTipslegal_ESTADISTICA = array();
$pageTitleslegal_ESTADISTICA = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelslegal_ESTADISTICA["Spanish"] = array();
	$fieldToolTipslegal_ESTADISTICA["Spanish"] = array();
	$pageTitleslegal_ESTADISTICA["Spanish"] = array();
	$fieldLabelslegal_ESTADISTICA["Spanish"]["FINCA"] = "FINCA";
	$fieldToolTipslegal_ESTADISTICA["Spanish"]["FINCA"] = "";
	$fieldLabelslegal_ESTADISTICA["Spanish"]["TENECIA"] = "TENECIA";
	$fieldToolTipslegal_ESTADISTICA["Spanish"]["TENECIA"] = "";
	$fieldLabelslegal_ESTADISTICA["Spanish"]["SOPORTE"] = "SOPORTE";
	$fieldToolTipslegal_ESTADISTICA["Spanish"]["SOPORTE"] = "";
	$fieldLabelslegal_ESTADISTICA["Spanish"]["RUAT"] = "RUAT";
	$fieldToolTipslegal_ESTADISTICA["Spanish"]["RUAT"] = "";
	$fieldLabelslegal_ESTADISTICA["Spanish"]["ASOCIACION"] = "ASOCIACION";
	$fieldToolTipslegal_ESTADISTICA["Spanish"]["ASOCIACION"] = "";
	$fieldLabelslegal_ESTADISTICA["Spanish"]["OBSERVACIONES"] = "OBSERVACIONES";
	$fieldToolTipslegal_ESTADISTICA["Spanish"]["OBSERVACIONES"] = "";
	$fieldLabelslegal_ESTADISTICA["Spanish"]["A_O"] = "AÑO";
	$fieldToolTipslegal_ESTADISTICA["Spanish"]["A_O"] = "";
	if (count($fieldToolTipslegal_ESTADISTICA["Spanish"]))
		$tdatalegal_ESTADISTICA[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelslegal_ESTADISTICA[""] = array();
	$fieldToolTipslegal_ESTADISTICA[""] = array();
	$pageTitleslegal_ESTADISTICA[""] = array();
	$fieldLabelslegal_ESTADISTICA[""]["FINCA"] = "FINCA";
	$fieldToolTipslegal_ESTADISTICA[""]["FINCA"] = "";
	$fieldLabelslegal_ESTADISTICA[""]["TENECIA"] = "TENECIA";
	$fieldToolTipslegal_ESTADISTICA[""]["TENECIA"] = "";
	$fieldLabelslegal_ESTADISTICA[""]["SOPORTE"] = "SOPORTE";
	$fieldToolTipslegal_ESTADISTICA[""]["SOPORTE"] = "";
	$fieldLabelslegal_ESTADISTICA[""]["RUAT"] = "RUAT";
	$fieldToolTipslegal_ESTADISTICA[""]["RUAT"] = "";
	$fieldLabelslegal_ESTADISTICA[""]["ASOCIACION"] = "ASOCIACION";
	$fieldToolTipslegal_ESTADISTICA[""]["ASOCIACION"] = "";
	$fieldLabelslegal_ESTADISTICA[""]["OBSERVACIONES"] = "OBSERVACIONES";
	$fieldToolTipslegal_ESTADISTICA[""]["OBSERVACIONES"] = "";
	$fieldLabelslegal_ESTADISTICA[""]["A_O"] = "AÑO";
	$fieldToolTipslegal_ESTADISTICA[""]["A_O"] = "";
	if (count($fieldToolTipslegal_ESTADISTICA[""]))
		$tdatalegal_ESTADISTICA[".isUseToolTips"] = true;
}


	$tdatalegal_ESTADISTICA[".NCSearch"] = true;

	$tdatalegal_ESTADISTICA[".ChartRefreshTime"] = 0;


$tdatalegal_ESTADISTICA[".shortTableName"] = "legal_ESTADISTICA";
$tdatalegal_ESTADISTICA[".nSecOptions"] = 0;
$tdatalegal_ESTADISTICA[".recsPerRowPrint"] = 1;
$tdatalegal_ESTADISTICA[".mainTableOwnerID"] = "";
$tdatalegal_ESTADISTICA[".moveNext"] = 1;
$tdatalegal_ESTADISTICA[".entityType"] = 3;

$tdatalegal_ESTADISTICA[".strOriginalTableName"] = "legal";

	



$tdatalegal_ESTADISTICA[".showAddInPopup"] = false;

$tdatalegal_ESTADISTICA[".showEditInPopup"] = false;

$tdatalegal_ESTADISTICA[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatalegal_ESTADISTICA[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatalegal_ESTADISTICA[".fieldsForRegister"] = array();

$tdatalegal_ESTADISTICA[".listAjax"] = false;

	$tdatalegal_ESTADISTICA[".audit"] = false;

	$tdatalegal_ESTADISTICA[".locking"] = false;


$tdatalegal_ESTADISTICA[".add"] = true;
$tdatalegal_ESTADISTICA[".afterAddAction"] = 1;
$tdatalegal_ESTADISTICA[".closePopupAfterAdd"] = 1;
$tdatalegal_ESTADISTICA[".afterAddActionDetTable"] = "";

$tdatalegal_ESTADISTICA[".list"] = true;






$tdatalegal_ESTADISTICA[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatalegal_ESTADISTICA[".searchSaving"] = false;
//

$tdatalegal_ESTADISTICA[".showSearchPanel"] = true;
		$tdatalegal_ESTADISTICA[".flexibleSearch"] = true;

$tdatalegal_ESTADISTICA[".isUseAjaxSuggest"] = true;




$tdatalegal_ESTADISTICA[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalegal_ESTADISTICA[".isUseTimeForSearch"] = false;



$tdatalegal_ESTADISTICA[".badgeColor"] = "D2AF80";


$tdatalegal_ESTADISTICA[".allSearchFields"] = array();
$tdatalegal_ESTADISTICA[".filterFields"] = array();
$tdatalegal_ESTADISTICA[".requiredSearchFields"] = array();

$tdatalegal_ESTADISTICA[".allSearchFields"][] = "FINCA";
	$tdatalegal_ESTADISTICA[".allSearchFields"][] = "TENECIA";
	$tdatalegal_ESTADISTICA[".allSearchFields"][] = "SOPORTE";
	$tdatalegal_ESTADISTICA[".allSearchFields"][] = "RUAT";
	$tdatalegal_ESTADISTICA[".allSearchFields"][] = "ASOCIACION";
	$tdatalegal_ESTADISTICA[".allSearchFields"][] = "OBSERVACIONES";
	$tdatalegal_ESTADISTICA[".allSearchFields"][] = "AÑO";
	

$tdatalegal_ESTADISTICA[".googleLikeFields"] = array();
$tdatalegal_ESTADISTICA[".googleLikeFields"][] = "FINCA";
$tdatalegal_ESTADISTICA[".googleLikeFields"][] = "TENECIA";
$tdatalegal_ESTADISTICA[".googleLikeFields"][] = "SOPORTE";
$tdatalegal_ESTADISTICA[".googleLikeFields"][] = "RUAT";
$tdatalegal_ESTADISTICA[".googleLikeFields"][] = "ASOCIACION";
$tdatalegal_ESTADISTICA[".googleLikeFields"][] = "OBSERVACIONES";
$tdatalegal_ESTADISTICA[".googleLikeFields"][] = "AÑO";


$tdatalegal_ESTADISTICA[".advSearchFields"] = array();
$tdatalegal_ESTADISTICA[".advSearchFields"][] = "FINCA";
$tdatalegal_ESTADISTICA[".advSearchFields"][] = "TENECIA";
$tdatalegal_ESTADISTICA[".advSearchFields"][] = "SOPORTE";
$tdatalegal_ESTADISTICA[".advSearchFields"][] = "RUAT";
$tdatalegal_ESTADISTICA[".advSearchFields"][] = "ASOCIACION";
$tdatalegal_ESTADISTICA[".advSearchFields"][] = "OBSERVACIONES";
$tdatalegal_ESTADISTICA[".advSearchFields"][] = "AÑO";

$tdatalegal_ESTADISTICA[".tableType"] = "chart";

$tdatalegal_ESTADISTICA[".printerPageOrientation"] = 0;
$tdatalegal_ESTADISTICA[".nPrinterPageScale"] = 100;

$tdatalegal_ESTADISTICA[".nPrinterSplitRecords"] = 40;

$tdatalegal_ESTADISTICA[".nPrinterPDFSplitRecords"] = 40;



$tdatalegal_ESTADISTICA[".geocodingEnabled"] = false;



// chart settings
$tdatalegal_ESTADISTICA[".chartType"] = "2DColumn";
// end of chart settings


$tdatalegal_ESTADISTICA[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatalegal_ESTADISTICA[".strOrderBy"] = $tstrOrderBy;

$tdatalegal_ESTADISTICA[".orderindexes"] = array();

$tdatalegal_ESTADISTICA[".sqlHead"] = "SELECT  DISTINCT FINCA,  TENECIA,  SOPORTE,  RUAT,  ASOCIACION,  OBSERVACIONES,  `AÑO`";
$tdatalegal_ESTADISTICA[".sqlFrom"] = "FROM legal";
$tdatalegal_ESTADISTICA[".sqlWhereExpr"] = "";
$tdatalegal_ESTADISTICA[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalegal_ESTADISTICA[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalegal_ESTADISTICA[".arrGroupsPerPage"] = $arrGPP;

$tdatalegal_ESTADISTICA[".highlightSearchResults"] = true;

$tableKeyslegal_ESTADISTICA = array();
$tdatalegal_ESTADISTICA[".Keys"] = $tableKeyslegal_ESTADISTICA;

$tdatalegal_ESTADISTICA[".listFields"] = array();
$tdatalegal_ESTADISTICA[".listFields"][] = "FINCA";
$tdatalegal_ESTADISTICA[".listFields"][] = "TENECIA";
$tdatalegal_ESTADISTICA[".listFields"][] = "SOPORTE";
$tdatalegal_ESTADISTICA[".listFields"][] = "RUAT";
$tdatalegal_ESTADISTICA[".listFields"][] = "ASOCIACION";
$tdatalegal_ESTADISTICA[".listFields"][] = "OBSERVACIONES";
$tdatalegal_ESTADISTICA[".listFields"][] = "AÑO";

$tdatalegal_ESTADISTICA[".hideMobileList"] = array();


$tdatalegal_ESTADISTICA[".viewFields"] = array();
$tdatalegal_ESTADISTICA[".viewFields"][] = "FINCA";
$tdatalegal_ESTADISTICA[".viewFields"][] = "TENECIA";
$tdatalegal_ESTADISTICA[".viewFields"][] = "SOPORTE";
$tdatalegal_ESTADISTICA[".viewFields"][] = "RUAT";
$tdatalegal_ESTADISTICA[".viewFields"][] = "ASOCIACION";
$tdatalegal_ESTADISTICA[".viewFields"][] = "OBSERVACIONES";
$tdatalegal_ESTADISTICA[".viewFields"][] = "AÑO";

$tdatalegal_ESTADISTICA[".addFields"] = array();
$tdatalegal_ESTADISTICA[".addFields"][] = "FINCA";
$tdatalegal_ESTADISTICA[".addFields"][] = "TENECIA";
$tdatalegal_ESTADISTICA[".addFields"][] = "SOPORTE";
$tdatalegal_ESTADISTICA[".addFields"][] = "RUAT";
$tdatalegal_ESTADISTICA[".addFields"][] = "ASOCIACION";
$tdatalegal_ESTADISTICA[".addFields"][] = "OBSERVACIONES";
$tdatalegal_ESTADISTICA[".addFields"][] = "AÑO";

$tdatalegal_ESTADISTICA[".masterListFields"] = array();
$tdatalegal_ESTADISTICA[".masterListFields"][] = "FINCA";
$tdatalegal_ESTADISTICA[".masterListFields"][] = "TENECIA";
$tdatalegal_ESTADISTICA[".masterListFields"][] = "SOPORTE";
$tdatalegal_ESTADISTICA[".masterListFields"][] = "RUAT";
$tdatalegal_ESTADISTICA[".masterListFields"][] = "ASOCIACION";
$tdatalegal_ESTADISTICA[".masterListFields"][] = "OBSERVACIONES";
$tdatalegal_ESTADISTICA[".masterListFields"][] = "AÑO";

$tdatalegal_ESTADISTICA[".inlineAddFields"] = array();
$tdatalegal_ESTADISTICA[".inlineAddFields"][] = "FINCA";
$tdatalegal_ESTADISTICA[".inlineAddFields"][] = "TENECIA";
$tdatalegal_ESTADISTICA[".inlineAddFields"][] = "SOPORTE";
$tdatalegal_ESTADISTICA[".inlineAddFields"][] = "RUAT";
$tdatalegal_ESTADISTICA[".inlineAddFields"][] = "ASOCIACION";
$tdatalegal_ESTADISTICA[".inlineAddFields"][] = "OBSERVACIONES";
$tdatalegal_ESTADISTICA[".inlineAddFields"][] = "AÑO";

$tdatalegal_ESTADISTICA[".editFields"] = array();
$tdatalegal_ESTADISTICA[".editFields"][] = "FINCA";
$tdatalegal_ESTADISTICA[".editFields"][] = "TENECIA";
$tdatalegal_ESTADISTICA[".editFields"][] = "SOPORTE";
$tdatalegal_ESTADISTICA[".editFields"][] = "RUAT";
$tdatalegal_ESTADISTICA[".editFields"][] = "ASOCIACION";
$tdatalegal_ESTADISTICA[".editFields"][] = "OBSERVACIONES";
$tdatalegal_ESTADISTICA[".editFields"][] = "AÑO";

$tdatalegal_ESTADISTICA[".inlineEditFields"] = array();
$tdatalegal_ESTADISTICA[".inlineEditFields"][] = "FINCA";
$tdatalegal_ESTADISTICA[".inlineEditFields"][] = "TENECIA";
$tdatalegal_ESTADISTICA[".inlineEditFields"][] = "SOPORTE";
$tdatalegal_ESTADISTICA[".inlineEditFields"][] = "RUAT";
$tdatalegal_ESTADISTICA[".inlineEditFields"][] = "ASOCIACION";
$tdatalegal_ESTADISTICA[".inlineEditFields"][] = "OBSERVACIONES";
$tdatalegal_ESTADISTICA[".inlineEditFields"][] = "AÑO";

$tdatalegal_ESTADISTICA[".exportFields"] = array();
$tdatalegal_ESTADISTICA[".exportFields"][] = "FINCA";
$tdatalegal_ESTADISTICA[".exportFields"][] = "TENECIA";
$tdatalegal_ESTADISTICA[".exportFields"][] = "SOPORTE";
$tdatalegal_ESTADISTICA[".exportFields"][] = "RUAT";
$tdatalegal_ESTADISTICA[".exportFields"][] = "ASOCIACION";
$tdatalegal_ESTADISTICA[".exportFields"][] = "OBSERVACIONES";
$tdatalegal_ESTADISTICA[".exportFields"][] = "AÑO";

$tdatalegal_ESTADISTICA[".importFields"] = array();
$tdatalegal_ESTADISTICA[".importFields"][] = "FINCA";
$tdatalegal_ESTADISTICA[".importFields"][] = "TENECIA";
$tdatalegal_ESTADISTICA[".importFields"][] = "SOPORTE";
$tdatalegal_ESTADISTICA[".importFields"][] = "RUAT";
$tdatalegal_ESTADISTICA[".importFields"][] = "ASOCIACION";
$tdatalegal_ESTADISTICA[".importFields"][] = "OBSERVACIONES";
$tdatalegal_ESTADISTICA[".importFields"][] = "AÑO";

$tdatalegal_ESTADISTICA[".printFields"] = array();
$tdatalegal_ESTADISTICA[".printFields"][] = "FINCA";
$tdatalegal_ESTADISTICA[".printFields"][] = "TENECIA";
$tdatalegal_ESTADISTICA[".printFields"][] = "SOPORTE";
$tdatalegal_ESTADISTICA[".printFields"][] = "RUAT";
$tdatalegal_ESTADISTICA[".printFields"][] = "ASOCIACION";
$tdatalegal_ESTADISTICA[".printFields"][] = "OBSERVACIONES";
$tdatalegal_ESTADISTICA[".printFields"][] = "AÑO";

//	FINCA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "FINCA";
	$fdata["GoodName"] = "FINCA";
	$fdata["ownerTable"] = "legal";
	$fdata["Label"] = GetFieldLabel("legal_ESTADISTICA","FINCA");
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




	$tdatalegal_ESTADISTICA["FINCA"] = $fdata;
//	TENECIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "TENECIA";
	$fdata["GoodName"] = "TENECIA";
	$fdata["ownerTable"] = "legal";
	$fdata["Label"] = GetFieldLabel("legal_ESTADISTICA","TENECIA");
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

		$fdata["strField"] = "TENECIA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TENECIA";

	
	
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
	$edata["LookupValues"][] = "PROPIA (Totalmente Pagada)";
	$edata["LookupValues"][] = "PROPIA (La Esta Pagando)";
	$edata["LookupValues"][] = "ARRIENDO";
	$edata["LookupValues"][] = "CON PERMISO DE PROPIETARIO";
	$edata["LookupValues"][] = "OCUPANTE DE HECHO";
	$edata["LookupValues"][] = "POSECION SIN TITULO";
	$edata["LookupValues"][] = "OTRA";

	
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




	$tdatalegal_ESTADISTICA["TENECIA"] = $fdata;
//	SOPORTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "SOPORTE";
	$fdata["GoodName"] = "SOPORTE";
	$fdata["ownerTable"] = "legal";
	$fdata["Label"] = GetFieldLabel("legal_ESTADISTICA","SOPORTE");
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

		$fdata["strField"] = "SOPORTE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SOPORTE";

	
	
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
	$edata["LookupValues"][] = "Si";
	$edata["LookupValues"][] = "No";
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




	$tdatalegal_ESTADISTICA["SOPORTE"] = $fdata;
//	RUAT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "RUAT";
	$fdata["GoodName"] = "RUAT";
	$fdata["ownerTable"] = "legal";
	$fdata["Label"] = GetFieldLabel("legal_ESTADISTICA","RUAT");
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

		$fdata["strField"] = "RUAT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RUAT";

	
	
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




	$tdatalegal_ESTADISTICA["RUAT"] = $fdata;
//	ASOCIACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ASOCIACION";
	$fdata["GoodName"] = "ASOCIACION";
	$fdata["ownerTable"] = "legal";
	$fdata["Label"] = GetFieldLabel("legal_ESTADISTICA","ASOCIACION");
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

		$fdata["strField"] = "ASOCIACION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ASOCIACION";

	
	
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
	$edata["LookupValues"][] = "Asoapiasan";
	$edata["LookupValues"][] = "Asoprocass";
	$edata["LookupValues"][] = "Asocaprisan";
	$edata["LookupValues"][] = "Asprotrans";
	$edata["LookupValues"][] = "Apropsan";
	$edata["LookupValues"][] = "Approgran";
	$edata["LookupValues"][] = "Asovictimas";
	$edata["LookupValues"][] = "Fibrassan";

	
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




	$tdatalegal_ESTADISTICA["ASOCIACION"] = $fdata;
//	OBSERVACIONES
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "OBSERVACIONES";
	$fdata["GoodName"] = "OBSERVACIONES";
	$fdata["ownerTable"] = "legal";
	$fdata["Label"] = GetFieldLabel("legal_ESTADISTICA","OBSERVACIONES");
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

		$fdata["strField"] = "OBSERVACIONES";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OBSERVACIONES";

	
	
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




	$tdatalegal_ESTADISTICA["OBSERVACIONES"] = $fdata;
//	AÑO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "AÑO";
	$fdata["GoodName"] = "A_O";
	$fdata["ownerTable"] = "legal";
	$fdata["Label"] = GetFieldLabel("legal_ESTADISTICA","A_O");
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




	$tdatalegal_ESTADISTICA["AÑO"] = $fdata;

	$tdatalegal_ESTADISTICA[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">legal ESTADISTICA</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdatalegal_ESTADISTICA[".chartXml"] .= '<attr value="0">
			<attr value="name">FINCA_PROPIETARIO_CEDULA</attr>';
	$tdatalegal_ESTADISTICA[".chartXml"] .= '</attr>';
	$tdatalegal_ESTADISTICA[".chartXml"] .= '<attr value="1">
		<attr value="name">NOMBRE</attr>
	</attr>';
	$tdatalegal_ESTADISTICA[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatalegal_ESTADISTICA[".chartXml"] .= '<attr value="head">'.xmlencode("legal ESTADISTICA").'</attr>
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
$tdatalegal_ESTADISTICA[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatalegal_ESTADISTICA[".chartXml"] .= '<attr value="0">
		<attr value="name">FINCA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("legal_ESTADISTICA","FINCA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatalegal_ESTADISTICA[".chartXml"] .= '<attr value="1">
		<attr value="name">TENECIA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("legal_ESTADISTICA","TENECIA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatalegal_ESTADISTICA[".chartXml"] .= '<attr value="2">
		<attr value="name">SOPORTE</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("legal_ESTADISTICA","SOPORTE")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatalegal_ESTADISTICA[".chartXml"] .= '<attr value="3">
		<attr value="name">RUAT</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("legal_ESTADISTICA","RUAT")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatalegal_ESTADISTICA[".chartXml"] .= '<attr value="4">
		<attr value="name">ASOCIACION</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("legal_ESTADISTICA","ASOCIACION")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatalegal_ESTADISTICA[".chartXml"] .= '<attr value="5">
		<attr value="name">OBSERVACIONES</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("legal_ESTADISTICA","OBSERVACIONES")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatalegal_ESTADISTICA[".chartXml"] .= '<attr value="6">
		<attr value="name">AÑO</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("legal_ESTADISTICA","A_O")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatalegal_ESTADISTICA[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">legal ESTADISTICA</attr>
<attr value="short_table_name">legal_ESTADISTICA</attr>
</attr>

</chart>';

$tables_data["legal ESTADISTICA"]=&$tdatalegal_ESTADISTICA;
$field_labels["legal_ESTADISTICA"] = &$fieldLabelslegal_ESTADISTICA;
$fieldToolTips["legal_ESTADISTICA"] = &$fieldToolTipslegal_ESTADISTICA;
$page_titles["legal_ESTADISTICA"] = &$pageTitleslegal_ESTADISTICA;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["legal ESTADISTICA"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["legal ESTADISTICA"] = array();


	
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
					$masterTablesData["legal ESTADISTICA"][0] = $masterParams;
				$masterTablesData["legal ESTADISTICA"][0]["masterKeys"] = array();
	$masterTablesData["legal ESTADISTICA"][0]["masterKeys"][]="PROPIETARIO_CEDULA";
				$masterTablesData["legal ESTADISTICA"][0]["detailKeys"] = array();
	$masterTablesData["legal ESTADISTICA"][0]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_legal_ESTADISTICA()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT  DISTINCT";
$proto0["m_strFieldList"] = "FINCA,  TENECIA,  SOPORTE,  RUAT,  ASOCIACION,  OBSERVACIONES,  `AÑO`";
$proto0["m_strFrom"] = "FROM legal";
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
	"m_strName" => "FINCA",
	"m_strTable" => "legal",
	"m_srcTableName" => "legal ESTADISTICA"
));

$proto6["m_sql"] = "FINCA";
$proto6["m_srcTableName"] = "legal ESTADISTICA";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "TENECIA",
	"m_strTable" => "legal",
	"m_srcTableName" => "legal ESTADISTICA"
));

$proto8["m_sql"] = "TENECIA";
$proto8["m_srcTableName"] = "legal ESTADISTICA";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "SOPORTE",
	"m_strTable" => "legal",
	"m_srcTableName" => "legal ESTADISTICA"
));

$proto10["m_sql"] = "SOPORTE";
$proto10["m_srcTableName"] = "legal ESTADISTICA";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "RUAT",
	"m_strTable" => "legal",
	"m_srcTableName" => "legal ESTADISTICA"
));

$proto12["m_sql"] = "RUAT";
$proto12["m_srcTableName"] = "legal ESTADISTICA";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ASOCIACION",
	"m_strTable" => "legal",
	"m_srcTableName" => "legal ESTADISTICA"
));

$proto14["m_sql"] = "ASOCIACION";
$proto14["m_srcTableName"] = "legal ESTADISTICA";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "OBSERVACIONES",
	"m_strTable" => "legal",
	"m_srcTableName" => "legal ESTADISTICA"
));

$proto16["m_sql"] = "OBSERVACIONES";
$proto16["m_srcTableName"] = "legal ESTADISTICA";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "legal",
	"m_srcTableName" => "legal ESTADISTICA"
));

$proto18["m_sql"] = "`AÑO`";
$proto18["m_srcTableName"] = "legal ESTADISTICA";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "legal";
$proto21["m_srcTableName"] = "legal ESTADISTICA";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "ID";
$proto21["m_columns"][] = "FINCA_PROPIETARIO_CEDULA";
$proto21["m_columns"][] = "NOMBRE";
$proto21["m_columns"][] = "VEREDA";
$proto21["m_columns"][] = "FINCA";
$proto21["m_columns"][] = "TENECIA";
$proto21["m_columns"][] = "SOPORTE";
$proto21["m_columns"][] = "RUAT";
$proto21["m_columns"][] = "ASOCIACION";
$proto21["m_columns"][] = "OBSERVACIONES";
$proto21["m_columns"][] = "AÑO";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "legal";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "legal ESTADISTICA";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto24=array();
						$obj = new SQLField(array(
	"m_strName" => "FINCA",
	"m_strTable" => "legal",
	"m_srcTableName" => "legal ESTADISTICA"
));

$proto24["m_column"]=$obj;
$obj = new SQLGroupByItem($proto24);

$proto0["m_groupby"][]=$obj;
												$proto26=array();
						$obj = new SQLField(array(
	"m_strName" => "TENECIA",
	"m_strTable" => "legal",
	"m_srcTableName" => "legal ESTADISTICA"
));

$proto26["m_column"]=$obj;
$obj = new SQLGroupByItem($proto26);

$proto0["m_groupby"][]=$obj;
												$proto28=array();
						$obj = new SQLField(array(
	"m_strName" => "ASOCIACION",
	"m_strTable" => "legal",
	"m_srcTableName" => "legal ESTADISTICA"
));

$proto28["m_column"]=$obj;
$obj = new SQLGroupByItem($proto28);

$proto0["m_groupby"][]=$obj;
												$proto30=array();
						$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "legal",
	"m_srcTableName" => "legal ESTADISTICA"
));

$proto30["m_column"]=$obj;
$obj = new SQLGroupByItem($proto30);

$proto0["m_groupby"][]=$obj;
												$proto32=array();
						$obj = new SQLField(array(
	"m_strName" => "VEREDA",
	"m_strTable" => "legal",
	"m_srcTableName" => "legal ESTADISTICA"
));

$proto32["m_column"]=$obj;
$obj = new SQLGroupByItem($proto32);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="legal ESTADISTICA";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_legal_ESTADISTICA = createSqlQuery_legal_ESTADISTICA();


	
		;

							

$tdatalegal_ESTADISTICA[".sqlquery"] = $queryData_legal_ESTADISTICA;

$tableEvents["legal ESTADISTICA"] = new eventsBase;
$tdatalegal_ESTADISTICA[".hasEvents"] = false;

?>