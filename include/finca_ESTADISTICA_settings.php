<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafinca_ESTADISTICA = array();
	$tdatafinca_ESTADISTICA[".ShortName"] = "finca_ESTADISTICA";
	$tdatafinca_ESTADISTICA[".OwnerID"] = "";
	$tdatafinca_ESTADISTICA[".OriginalTable"] = "finca";

//	field labels
$fieldLabelsfinca_ESTADISTICA = array();
$fieldToolTipsfinca_ESTADISTICA = array();
$pageTitlesfinca_ESTADISTICA = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsfinca_ESTADISTICA["Spanish"] = array();
	$fieldToolTipsfinca_ESTADISTICA["Spanish"] = array();
	$pageTitlesfinca_ESTADISTICA["Spanish"] = array();
	$fieldLabelsfinca_ESTADISTICA["Spanish"]["VEREDA"] = "VEREDA";
	$fieldToolTipsfinca_ESTADISTICA["Spanish"]["VEREDA"] = "";
	$fieldLabelsfinca_ESTADISTICA["Spanish"]["FINCA"] = "FINCA";
	$fieldToolTipsfinca_ESTADISTICA["Spanish"]["FINCA"] = "";
	$fieldLabelsfinca_ESTADISTICA["Spanish"]["ALTURA"] = "ALTURA";
	$fieldToolTipsfinca_ESTADISTICA["Spanish"]["ALTURA"] = "";
	$fieldLabelsfinca_ESTADISTICA["Spanish"]["AREA_FINCA"] = "AREA FINCA";
	$fieldToolTipsfinca_ESTADISTICA["Spanish"]["AREA_FINCA"] = "";
	$fieldLabelsfinca_ESTADISTICA["Spanish"]["LINEA_PRINCIPAL"] = "LINEA PRINCIPAL";
	$fieldToolTipsfinca_ESTADISTICA["Spanish"]["LINEA_PRINCIPAL"] = "";
	$fieldLabelsfinca_ESTADISTICA["Spanish"]["A_O"] = "AÑO";
	$fieldToolTipsfinca_ESTADISTICA["Spanish"]["A_O"] = "";
	$fieldLabelsfinca_ESTADISTICA["Spanish"]["AREA_LINEA"] = "AREA LINEA";
	$fieldToolTipsfinca_ESTADISTICA["Spanish"]["AREA_LINEA"] = "";
	$fieldLabelsfinca_ESTADISTICA["Spanish"]["AREA_LIBRE"] = "AREA LIBRE";
	$fieldToolTipsfinca_ESTADISTICA["Spanish"]["AREA_LIBRE"] = "";
	if (count($fieldToolTipsfinca_ESTADISTICA["Spanish"]))
		$tdatafinca_ESTADISTICA[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfinca_ESTADISTICA[""] = array();
	$fieldToolTipsfinca_ESTADISTICA[""] = array();
	$pageTitlesfinca_ESTADISTICA[""] = array();
	$fieldLabelsfinca_ESTADISTICA[""]["VEREDA"] = "VEREDA";
	$fieldToolTipsfinca_ESTADISTICA[""]["VEREDA"] = "";
	$fieldLabelsfinca_ESTADISTICA[""]["FINCA"] = "FINCA";
	$fieldToolTipsfinca_ESTADISTICA[""]["FINCA"] = "";
	$fieldLabelsfinca_ESTADISTICA[""]["ALTURA"] = "ALTURA";
	$fieldToolTipsfinca_ESTADISTICA[""]["ALTURA"] = "";
	$fieldLabelsfinca_ESTADISTICA[""]["AREA_FINCA"] = "AREA FINCA";
	$fieldToolTipsfinca_ESTADISTICA[""]["AREA_FINCA"] = "";
	$fieldLabelsfinca_ESTADISTICA[""]["LINEA_PRINCIPAL"] = "LINEA PRINCIPAL";
	$fieldToolTipsfinca_ESTADISTICA[""]["LINEA_PRINCIPAL"] = "";
	$fieldLabelsfinca_ESTADISTICA[""]["A_O"] = "AÑO";
	$fieldToolTipsfinca_ESTADISTICA[""]["A_O"] = "";
	$fieldLabelsfinca_ESTADISTICA[""]["AREA_LINEA"] = "AREA LINEA";
	$fieldToolTipsfinca_ESTADISTICA[""]["AREA_LINEA"] = "";
	$fieldLabelsfinca_ESTADISTICA[""]["AREA_LIBRE"] = "AREA LIBRE";
	$fieldToolTipsfinca_ESTADISTICA[""]["AREA_LIBRE"] = "";
	if (count($fieldToolTipsfinca_ESTADISTICA[""]))
		$tdatafinca_ESTADISTICA[".isUseToolTips"] = true;
}


	$tdatafinca_ESTADISTICA[".NCSearch"] = true;

	$tdatafinca_ESTADISTICA[".ChartRefreshTime"] = 0;


$tdatafinca_ESTADISTICA[".shortTableName"] = "finca_ESTADISTICA";
$tdatafinca_ESTADISTICA[".nSecOptions"] = 0;
$tdatafinca_ESTADISTICA[".recsPerRowPrint"] = 1;
$tdatafinca_ESTADISTICA[".mainTableOwnerID"] = "";
$tdatafinca_ESTADISTICA[".moveNext"] = 1;
$tdatafinca_ESTADISTICA[".entityType"] = 3;

$tdatafinca_ESTADISTICA[".strOriginalTableName"] = "finca";

	



$tdatafinca_ESTADISTICA[".showAddInPopup"] = false;

$tdatafinca_ESTADISTICA[".showEditInPopup"] = false;

$tdatafinca_ESTADISTICA[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafinca_ESTADISTICA[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafinca_ESTADISTICA[".fieldsForRegister"] = array();

$tdatafinca_ESTADISTICA[".listAjax"] = false;

	$tdatafinca_ESTADISTICA[".audit"] = false;

	$tdatafinca_ESTADISTICA[".locking"] = false;


$tdatafinca_ESTADISTICA[".add"] = true;
$tdatafinca_ESTADISTICA[".afterAddAction"] = 1;
$tdatafinca_ESTADISTICA[".closePopupAfterAdd"] = 1;
$tdatafinca_ESTADISTICA[".afterAddActionDetTable"] = "";

$tdatafinca_ESTADISTICA[".list"] = true;






$tdatafinca_ESTADISTICA[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatafinca_ESTADISTICA[".searchSaving"] = false;
//

$tdatafinca_ESTADISTICA[".showSearchPanel"] = true;
		$tdatafinca_ESTADISTICA[".flexibleSearch"] = true;

$tdatafinca_ESTADISTICA[".isUseAjaxSuggest"] = true;




$tdatafinca_ESTADISTICA[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafinca_ESTADISTICA[".isUseTimeForSearch"] = false;



$tdatafinca_ESTADISTICA[".badgeColor"] = "DAA520";


$tdatafinca_ESTADISTICA[".allSearchFields"] = array();
$tdatafinca_ESTADISTICA[".filterFields"] = array();
$tdatafinca_ESTADISTICA[".requiredSearchFields"] = array();

$tdatafinca_ESTADISTICA[".allSearchFields"][] = "VEREDA";
	$tdatafinca_ESTADISTICA[".allSearchFields"][] = "FINCA";
	$tdatafinca_ESTADISTICA[".allSearchFields"][] = "ALTURA";
	$tdatafinca_ESTADISTICA[".allSearchFields"][] = "AREA_FINCA";
	$tdatafinca_ESTADISTICA[".allSearchFields"][] = "LINEA_PRINCIPAL";
	$tdatafinca_ESTADISTICA[".allSearchFields"][] = "AREA_LINEA";
	$tdatafinca_ESTADISTICA[".allSearchFields"][] = "AREA_LIBRE";
	$tdatafinca_ESTADISTICA[".allSearchFields"][] = "AÑO";
	

$tdatafinca_ESTADISTICA[".googleLikeFields"] = array();
$tdatafinca_ESTADISTICA[".googleLikeFields"][] = "VEREDA";
$tdatafinca_ESTADISTICA[".googleLikeFields"][] = "FINCA";
$tdatafinca_ESTADISTICA[".googleLikeFields"][] = "ALTURA";
$tdatafinca_ESTADISTICA[".googleLikeFields"][] = "AREA_FINCA";
$tdatafinca_ESTADISTICA[".googleLikeFields"][] = "LINEA_PRINCIPAL";
$tdatafinca_ESTADISTICA[".googleLikeFields"][] = "AREA_LINEA";
$tdatafinca_ESTADISTICA[".googleLikeFields"][] = "AREA_LIBRE";
$tdatafinca_ESTADISTICA[".googleLikeFields"][] = "AÑO";


$tdatafinca_ESTADISTICA[".advSearchFields"] = array();
$tdatafinca_ESTADISTICA[".advSearchFields"][] = "VEREDA";
$tdatafinca_ESTADISTICA[".advSearchFields"][] = "FINCA";
$tdatafinca_ESTADISTICA[".advSearchFields"][] = "ALTURA";
$tdatafinca_ESTADISTICA[".advSearchFields"][] = "AREA_FINCA";
$tdatafinca_ESTADISTICA[".advSearchFields"][] = "LINEA_PRINCIPAL";
$tdatafinca_ESTADISTICA[".advSearchFields"][] = "AREA_LINEA";
$tdatafinca_ESTADISTICA[".advSearchFields"][] = "AREA_LIBRE";
$tdatafinca_ESTADISTICA[".advSearchFields"][] = "AÑO";

$tdatafinca_ESTADISTICA[".tableType"] = "chart";

$tdatafinca_ESTADISTICA[".printerPageOrientation"] = 0;
$tdatafinca_ESTADISTICA[".nPrinterPageScale"] = 100;

$tdatafinca_ESTADISTICA[".nPrinterSplitRecords"] = 40;

$tdatafinca_ESTADISTICA[".nPrinterPDFSplitRecords"] = 40;



$tdatafinca_ESTADISTICA[".geocodingEnabled"] = false;



// chart settings
$tdatafinca_ESTADISTICA[".chartType"] = "2DColumn";
// end of chart settings


$tdatafinca_ESTADISTICA[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafinca_ESTADISTICA[".strOrderBy"] = $tstrOrderBy;

$tdatafinca_ESTADISTICA[".orderindexes"] = array();

$tdatafinca_ESTADISTICA[".sqlHead"] = "SELECT  DISTINCT VEREDA,  FINCA,  ALTURA,  AREA_FINCA,  LINEA_PRINCIPAL,  `AREA_ L_P` AS AREA_LINEA,  (AREA_FINCA-`AREA_ L_P`)AS AREA_LIBRE,  `AÑO`";
$tdatafinca_ESTADISTICA[".sqlFrom"] = "FROM finca";
$tdatafinca_ESTADISTICA[".sqlWhereExpr"] = "";
$tdatafinca_ESTADISTICA[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafinca_ESTADISTICA[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafinca_ESTADISTICA[".arrGroupsPerPage"] = $arrGPP;

$tdatafinca_ESTADISTICA[".highlightSearchResults"] = true;

$tableKeysfinca_ESTADISTICA = array();
$tdatafinca_ESTADISTICA[".Keys"] = $tableKeysfinca_ESTADISTICA;

$tdatafinca_ESTADISTICA[".listFields"] = array();
$tdatafinca_ESTADISTICA[".listFields"][] = "VEREDA";
$tdatafinca_ESTADISTICA[".listFields"][] = "FINCA";
$tdatafinca_ESTADISTICA[".listFields"][] = "ALTURA";
$tdatafinca_ESTADISTICA[".listFields"][] = "AREA_FINCA";
$tdatafinca_ESTADISTICA[".listFields"][] = "LINEA_PRINCIPAL";
$tdatafinca_ESTADISTICA[".listFields"][] = "AREA_LINEA";
$tdatafinca_ESTADISTICA[".listFields"][] = "AREA_LIBRE";
$tdatafinca_ESTADISTICA[".listFields"][] = "AÑO";

$tdatafinca_ESTADISTICA[".hideMobileList"] = array();


$tdatafinca_ESTADISTICA[".viewFields"] = array();
$tdatafinca_ESTADISTICA[".viewFields"][] = "VEREDA";
$tdatafinca_ESTADISTICA[".viewFields"][] = "FINCA";
$tdatafinca_ESTADISTICA[".viewFields"][] = "ALTURA";
$tdatafinca_ESTADISTICA[".viewFields"][] = "AREA_FINCA";
$tdatafinca_ESTADISTICA[".viewFields"][] = "LINEA_PRINCIPAL";
$tdatafinca_ESTADISTICA[".viewFields"][] = "AREA_LINEA";
$tdatafinca_ESTADISTICA[".viewFields"][] = "AREA_LIBRE";
$tdatafinca_ESTADISTICA[".viewFields"][] = "AÑO";

$tdatafinca_ESTADISTICA[".addFields"] = array();
$tdatafinca_ESTADISTICA[".addFields"][] = "VEREDA";
$tdatafinca_ESTADISTICA[".addFields"][] = "FINCA";
$tdatafinca_ESTADISTICA[".addFields"][] = "ALTURA";
$tdatafinca_ESTADISTICA[".addFields"][] = "AREA_FINCA";
$tdatafinca_ESTADISTICA[".addFields"][] = "LINEA_PRINCIPAL";
$tdatafinca_ESTADISTICA[".addFields"][] = "AÑO";

$tdatafinca_ESTADISTICA[".masterListFields"] = array();
$tdatafinca_ESTADISTICA[".masterListFields"][] = "VEREDA";
$tdatafinca_ESTADISTICA[".masterListFields"][] = "FINCA";
$tdatafinca_ESTADISTICA[".masterListFields"][] = "ALTURA";
$tdatafinca_ESTADISTICA[".masterListFields"][] = "AREA_FINCA";
$tdatafinca_ESTADISTICA[".masterListFields"][] = "LINEA_PRINCIPAL";
$tdatafinca_ESTADISTICA[".masterListFields"][] = "AREA_LINEA";
$tdatafinca_ESTADISTICA[".masterListFields"][] = "AREA_LIBRE";
$tdatafinca_ESTADISTICA[".masterListFields"][] = "AÑO";

$tdatafinca_ESTADISTICA[".inlineAddFields"] = array();
$tdatafinca_ESTADISTICA[".inlineAddFields"][] = "VEREDA";
$tdatafinca_ESTADISTICA[".inlineAddFields"][] = "FINCA";
$tdatafinca_ESTADISTICA[".inlineAddFields"][] = "ALTURA";
$tdatafinca_ESTADISTICA[".inlineAddFields"][] = "AREA_FINCA";
$tdatafinca_ESTADISTICA[".inlineAddFields"][] = "LINEA_PRINCIPAL";
$tdatafinca_ESTADISTICA[".inlineAddFields"][] = "AÑO";

$tdatafinca_ESTADISTICA[".editFields"] = array();
$tdatafinca_ESTADISTICA[".editFields"][] = "VEREDA";
$tdatafinca_ESTADISTICA[".editFields"][] = "FINCA";
$tdatafinca_ESTADISTICA[".editFields"][] = "ALTURA";
$tdatafinca_ESTADISTICA[".editFields"][] = "AREA_FINCA";
$tdatafinca_ESTADISTICA[".editFields"][] = "LINEA_PRINCIPAL";
$tdatafinca_ESTADISTICA[".editFields"][] = "AÑO";

$tdatafinca_ESTADISTICA[".inlineEditFields"] = array();
$tdatafinca_ESTADISTICA[".inlineEditFields"][] = "VEREDA";
$tdatafinca_ESTADISTICA[".inlineEditFields"][] = "FINCA";
$tdatafinca_ESTADISTICA[".inlineEditFields"][] = "ALTURA";
$tdatafinca_ESTADISTICA[".inlineEditFields"][] = "AREA_FINCA";
$tdatafinca_ESTADISTICA[".inlineEditFields"][] = "LINEA_PRINCIPAL";
$tdatafinca_ESTADISTICA[".inlineEditFields"][] = "AÑO";

$tdatafinca_ESTADISTICA[".exportFields"] = array();
$tdatafinca_ESTADISTICA[".exportFields"][] = "VEREDA";
$tdatafinca_ESTADISTICA[".exportFields"][] = "FINCA";
$tdatafinca_ESTADISTICA[".exportFields"][] = "ALTURA";
$tdatafinca_ESTADISTICA[".exportFields"][] = "AREA_FINCA";
$tdatafinca_ESTADISTICA[".exportFields"][] = "LINEA_PRINCIPAL";
$tdatafinca_ESTADISTICA[".exportFields"][] = "AREA_LINEA";
$tdatafinca_ESTADISTICA[".exportFields"][] = "AREA_LIBRE";
$tdatafinca_ESTADISTICA[".exportFields"][] = "AÑO";

$tdatafinca_ESTADISTICA[".importFields"] = array();
$tdatafinca_ESTADISTICA[".importFields"][] = "VEREDA";
$tdatafinca_ESTADISTICA[".importFields"][] = "FINCA";
$tdatafinca_ESTADISTICA[".importFields"][] = "ALTURA";
$tdatafinca_ESTADISTICA[".importFields"][] = "AREA_FINCA";
$tdatafinca_ESTADISTICA[".importFields"][] = "LINEA_PRINCIPAL";
$tdatafinca_ESTADISTICA[".importFields"][] = "AREA_LINEA";
$tdatafinca_ESTADISTICA[".importFields"][] = "AREA_LIBRE";
$tdatafinca_ESTADISTICA[".importFields"][] = "AÑO";

$tdatafinca_ESTADISTICA[".printFields"] = array();
$tdatafinca_ESTADISTICA[".printFields"][] = "VEREDA";
$tdatafinca_ESTADISTICA[".printFields"][] = "FINCA";
$tdatafinca_ESTADISTICA[".printFields"][] = "ALTURA";
$tdatafinca_ESTADISTICA[".printFields"][] = "AREA_FINCA";
$tdatafinca_ESTADISTICA[".printFields"][] = "LINEA_PRINCIPAL";
$tdatafinca_ESTADISTICA[".printFields"][] = "AREA_LINEA";
$tdatafinca_ESTADISTICA[".printFields"][] = "AREA_LIBRE";
$tdatafinca_ESTADISTICA[".printFields"][] = "AÑO";

//	VEREDA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "VEREDA";
	$fdata["GoodName"] = "VEREDA";
	$fdata["ownerTable"] = "finca";
	$fdata["Label"] = GetFieldLabel("finca_ESTADISTICA","VEREDA");
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




	$tdatafinca_ESTADISTICA["VEREDA"] = $fdata;
//	FINCA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FINCA";
	$fdata["GoodName"] = "FINCA";
	$fdata["ownerTable"] = "finca";
	$fdata["Label"] = GetFieldLabel("finca_ESTADISTICA","FINCA");
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




	$tdatafinca_ESTADISTICA["FINCA"] = $fdata;
//	ALTURA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ALTURA";
	$fdata["GoodName"] = "ALTURA";
	$fdata["ownerTable"] = "finca";
	$fdata["Label"] = GetFieldLabel("finca_ESTADISTICA","ALTURA");
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

		$fdata["strField"] = "ALTURA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ALTURA";

	
	
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




	$tdatafinca_ESTADISTICA["ALTURA"] = $fdata;
//	AREA_FINCA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "AREA_FINCA";
	$fdata["GoodName"] = "AREA_FINCA";
	$fdata["ownerTable"] = "finca";
	$fdata["Label"] = GetFieldLabel("finca_ESTADISTICA","AREA_FINCA");
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

		$fdata["strField"] = "AREA_FINCA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AREA_FINCA";

	
	
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




	$tdatafinca_ESTADISTICA["AREA_FINCA"] = $fdata;
//	LINEA_PRINCIPAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "LINEA_PRINCIPAL";
	$fdata["GoodName"] = "LINEA_PRINCIPAL";
	$fdata["ownerTable"] = "finca";
	$fdata["Label"] = GetFieldLabel("finca_ESTADISTICA","LINEA_PRINCIPAL");
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

		$fdata["strField"] = "LINEA_PRINCIPAL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LINEA_PRINCIPAL";

	
	
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




	$tdatafinca_ESTADISTICA["LINEA_PRINCIPAL"] = $fdata;
//	AREA_LINEA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "AREA_LINEA";
	$fdata["GoodName"] = "AREA_LINEA";
	$fdata["ownerTable"] = "finca";
	$fdata["Label"] = GetFieldLabel("finca_ESTADISTICA","AREA_LINEA");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AREA_ L_P";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`AREA_ L_P`";

	
	
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




	$tdatafinca_ESTADISTICA["AREA_LINEA"] = $fdata;
//	AREA_LIBRE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "AREA_LIBRE";
	$fdata["GoodName"] = "AREA_LIBRE";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("finca_ESTADISTICA","AREA_LIBRE");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AREA_LIBRE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(AREA_FINCA-`AREA_ L_P`)";

	
	
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




	$tdatafinca_ESTADISTICA["AREA_LIBRE"] = $fdata;
//	AÑO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "AÑO";
	$fdata["GoodName"] = "A_O";
	$fdata["ownerTable"] = "finca";
	$fdata["Label"] = GetFieldLabel("finca_ESTADISTICA","A_O");
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatafinca_ESTADISTICA["AÑO"] = $fdata;

	$tdatafinca_ESTADISTICA[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">finca ESTADISTICA</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdatafinca_ESTADISTICA[".chartXml"] .= '<attr value="0">
			<attr value="name">PROPIETARIO_CEDULA</attr>';
	$tdatafinca_ESTADISTICA[".chartXml"] .= '</attr>';
	$tdatafinca_ESTADISTICA[".chartXml"] .= '<attr value="1">
		<attr value="name">NOMBRE</attr>
	</attr>';
	$tdatafinca_ESTADISTICA[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatafinca_ESTADISTICA[".chartXml"] .= '<attr value="head">'.xmlencode("finca ESTADISTICA").'</attr>
<attr value="foot">'.xmlencode("Legend Title").'</attr>
<attr value="y_axis_label">'.xmlencode("PROPIETARIO_CEDULA").'</attr>


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
$tdatafinca_ESTADISTICA[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatafinca_ESTADISTICA[".chartXml"] .= '<attr value="0">
		<attr value="name">VEREDA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("finca_ESTADISTICA","VEREDA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatafinca_ESTADISTICA[".chartXml"] .= '<attr value="1">
		<attr value="name">FINCA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("finca_ESTADISTICA","FINCA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatafinca_ESTADISTICA[".chartXml"] .= '<attr value="2">
		<attr value="name">ALTURA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("finca_ESTADISTICA","ALTURA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatafinca_ESTADISTICA[".chartXml"] .= '<attr value="3">
		<attr value="name">AREA_FINCA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("finca_ESTADISTICA","AREA_FINCA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatafinca_ESTADISTICA[".chartXml"] .= '<attr value="4">
		<attr value="name">LINEA_PRINCIPAL</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("finca_ESTADISTICA","LINEA_PRINCIPAL")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatafinca_ESTADISTICA[".chartXml"] .= '<attr value="5">
		<attr value="name">AREA_LINEA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("finca_ESTADISTICA","AREA_LINEA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatafinca_ESTADISTICA[".chartXml"] .= '<attr value="6">
		<attr value="name">AREA_LIBRE</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("finca_ESTADISTICA","AREA_LIBRE")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatafinca_ESTADISTICA[".chartXml"] .= '<attr value="7">
		<attr value="name">AÑO</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("finca_ESTADISTICA","A_O")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatafinca_ESTADISTICA[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">finca ESTADISTICA</attr>
<attr value="short_table_name">finca_ESTADISTICA</attr>
</attr>

</chart>';

$tables_data["finca ESTADISTICA"]=&$tdatafinca_ESTADISTICA;
$field_labels["finca_ESTADISTICA"] = &$fieldLabelsfinca_ESTADISTICA;
$fieldToolTips["finca_ESTADISTICA"] = &$fieldToolTipsfinca_ESTADISTICA;
$page_titles["finca_ESTADISTICA"] = &$pageTitlesfinca_ESTADISTICA;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["finca ESTADISTICA"] = array();
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
		
	$detailsTablesData["finca ESTADISTICA"][$dIndex] = $detailsParam;

	
		$detailsTablesData["finca ESTADISTICA"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["finca ESTADISTICA"][$dIndex]["masterKeys"][]="PROPIETARIO_CEDULA";

				$detailsTablesData["finca ESTADISTICA"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["finca ESTADISTICA"][$dIndex]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
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
		
	$detailsTablesData["finca ESTADISTICA"][$dIndex] = $detailsParam;

	
		$detailsTablesData["finca ESTADISTICA"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["finca ESTADISTICA"][$dIndex]["masterKeys"][]="PROPIETARIO_CEDULA";

				$detailsTablesData["finca ESTADISTICA"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["finca ESTADISTICA"][$dIndex]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
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
		
	$detailsTablesData["finca ESTADISTICA"][$dIndex] = $detailsParam;

	
		$detailsTablesData["finca ESTADISTICA"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["finca ESTADISTICA"][$dIndex]["masterKeys"][]="PROPIETARIO_CEDULA";

				$detailsTablesData["finca ESTADISTICA"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["finca ESTADISTICA"][$dIndex]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
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
		
	$detailsTablesData["finca ESTADISTICA"][$dIndex] = $detailsParam;

	
		$detailsTablesData["finca ESTADISTICA"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["finca ESTADISTICA"][$dIndex]["masterKeys"][]="PROPIETARIO_CEDULA";

				$detailsTablesData["finca ESTADISTICA"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["finca ESTADISTICA"][$dIndex]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
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
		
	$detailsTablesData["finca ESTADISTICA"][$dIndex] = $detailsParam;

	
		$detailsTablesData["finca ESTADISTICA"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["finca ESTADISTICA"][$dIndex]["masterKeys"][]="PROPIETARIO_CEDULA";

				$detailsTablesData["finca ESTADISTICA"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["finca ESTADISTICA"][$dIndex]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
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
		
	$detailsTablesData["finca ESTADISTICA"][$dIndex] = $detailsParam;

	
		$detailsTablesData["finca ESTADISTICA"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["finca ESTADISTICA"][$dIndex]["masterKeys"][]="PROPIETARIO_CEDULA";

				$detailsTablesData["finca ESTADISTICA"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["finca ESTADISTICA"][$dIndex]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";

// tables which are master tables for current table (detail)
$masterTablesData["finca ESTADISTICA"] = array();


	
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
					$masterTablesData["finca ESTADISTICA"][0] = $masterParams;
				$masterTablesData["finca ESTADISTICA"][0]["masterKeys"] = array();
	$masterTablesData["finca ESTADISTICA"][0]["masterKeys"][]="CEDULA";
				$masterTablesData["finca ESTADISTICA"][0]["detailKeys"] = array();
	$masterTablesData["finca ESTADISTICA"][0]["detailKeys"][]="PROPIETARIO_CEDULA";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_finca_ESTADISTICA()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT  DISTINCT";
$proto0["m_strFieldList"] = "VEREDA,  FINCA,  ALTURA,  AREA_FINCA,  LINEA_PRINCIPAL,  `AREA_ L_P` AS AREA_LINEA,  (AREA_FINCA-`AREA_ L_P`)AS AREA_LIBRE,  `AÑO`";
$proto0["m_strFrom"] = "FROM finca";
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
	"m_strName" => "VEREDA",
	"m_strTable" => "finca",
	"m_srcTableName" => "finca ESTADISTICA"
));

$proto6["m_sql"] = "VEREDA";
$proto6["m_srcTableName"] = "finca ESTADISTICA";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "FINCA",
	"m_strTable" => "finca",
	"m_srcTableName" => "finca ESTADISTICA"
));

$proto8["m_sql"] = "FINCA";
$proto8["m_srcTableName"] = "finca ESTADISTICA";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ALTURA",
	"m_strTable" => "finca",
	"m_srcTableName" => "finca ESTADISTICA"
));

$proto10["m_sql"] = "ALTURA";
$proto10["m_srcTableName"] = "finca ESTADISTICA";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "AREA_FINCA",
	"m_strTable" => "finca",
	"m_srcTableName" => "finca ESTADISTICA"
));

$proto12["m_sql"] = "AREA_FINCA";
$proto12["m_srcTableName"] = "finca ESTADISTICA";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "LINEA_PRINCIPAL",
	"m_strTable" => "finca",
	"m_srcTableName" => "finca ESTADISTICA"
));

$proto14["m_sql"] = "LINEA_PRINCIPAL";
$proto14["m_srcTableName"] = "finca ESTADISTICA";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "AREA_ L_P",
	"m_strTable" => "finca",
	"m_srcTableName" => "finca ESTADISTICA"
));

$proto16["m_sql"] = "`AREA_ L_P`";
$proto16["m_srcTableName"] = "finca ESTADISTICA";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "AREA_LINEA";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(AREA_FINCA-`AREA_ L_P`)"
));

$proto18["m_sql"] = "(AREA_FINCA-`AREA_ L_P`)";
$proto18["m_srcTableName"] = "finca ESTADISTICA";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "AREA_LIBRE";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "finca",
	"m_srcTableName" => "finca ESTADISTICA"
));

$proto20["m_sql"] = "`AÑO`";
$proto20["m_srcTableName"] = "finca ESTADISTICA";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "finca";
$proto23["m_srcTableName"] = "finca ESTADISTICA";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "ID";
$proto23["m_columns"][] = "PROPIETARIO_CEDULA";
$proto23["m_columns"][] = "NOMBRE";
$proto23["m_columns"][] = "VEREDA";
$proto23["m_columns"][] = "FINCA";
$proto23["m_columns"][] = "ALTURA";
$proto23["m_columns"][] = "GEOREFERENCIA";
$proto23["m_columns"][] = "AREA_FINCA";
$proto23["m_columns"][] = "LINEA_PRINCIPAL";
$proto23["m_columns"][] = "AREA_ L_P";
$proto23["m_columns"][] = "AÑO";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "finca";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "finca ESTADISTICA";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto26=array();
						$obj = new SQLField(array(
	"m_strName" => "VEREDA",
	"m_strTable" => "finca",
	"m_srcTableName" => "finca ESTADISTICA"
));

$proto26["m_column"]=$obj;
$obj = new SQLGroupByItem($proto26);

$proto0["m_groupby"][]=$obj;
												$proto28=array();
						$obj = new SQLField(array(
	"m_strName" => "FINCA",
	"m_strTable" => "finca",
	"m_srcTableName" => "finca ESTADISTICA"
));

$proto28["m_column"]=$obj;
$obj = new SQLGroupByItem($proto28);

$proto0["m_groupby"][]=$obj;
												$proto30=array();
						$obj = new SQLField(array(
	"m_strName" => "ALTURA",
	"m_strTable" => "finca",
	"m_srcTableName" => "finca ESTADISTICA"
));

$proto30["m_column"]=$obj;
$obj = new SQLGroupByItem($proto30);

$proto0["m_groupby"][]=$obj;
												$proto32=array();
						$obj = new SQLField(array(
	"m_strName" => "LINEA_PRINCIPAL",
	"m_strTable" => "finca",
	"m_srcTableName" => "finca ESTADISTICA"
));

$proto32["m_column"]=$obj;
$obj = new SQLGroupByItem($proto32);

$proto0["m_groupby"][]=$obj;
												$proto34=array();
						$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "finca",
	"m_srcTableName" => "finca ESTADISTICA"
));

$proto34["m_column"]=$obj;
$obj = new SQLGroupByItem($proto34);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="finca ESTADISTICA";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_finca_ESTADISTICA = createSqlQuery_finca_ESTADISTICA();


	
		;

								

$tdatafinca_ESTADISTICA[".sqlquery"] = $queryData_finca_ESTADISTICA;

$tableEvents["finca ESTADISTICA"] = new eventsBase;
$tdatafinca_ESTADISTICA[".hasEvents"] = false;

?>