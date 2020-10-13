<?php
require_once(getabspath("classes/cipherer.php"));




$tdataREPORTE_FINCA = array();
	$tdataREPORTE_FINCA[".truncateText"] = true;
	$tdataREPORTE_FINCA[".NumberOfChars"] = 80;
	$tdataREPORTE_FINCA[".ShortName"] = "REPORTE_FINCA";
	$tdataREPORTE_FINCA[".OwnerID"] = "";
	$tdataREPORTE_FINCA[".OriginalTable"] = "finca";

//	field labels
$fieldLabelsREPORTE_FINCA = array();
$fieldToolTipsREPORTE_FINCA = array();
$pageTitlesREPORTE_FINCA = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsREPORTE_FINCA["Spanish"] = array();
	$fieldToolTipsREPORTE_FINCA["Spanish"] = array();
	$pageTitlesREPORTE_FINCA["Spanish"] = array();
	$fieldLabelsREPORTE_FINCA["Spanish"]["LINEA_PRINCIPAL"] = "LINEA PRINCIPAL";
	$fieldToolTipsREPORTE_FINCA["Spanish"]["LINEA_PRINCIPAL"] = "";
	$fieldLabelsREPORTE_FINCA["Spanish"]["FINCA"] = "FINCA";
	$fieldToolTipsREPORTE_FINCA["Spanish"]["FINCA"] = "";
	$fieldLabelsREPORTE_FINCA["Spanish"]["AREA_FINCA"] = "AREA FINCA";
	$fieldToolTipsREPORTE_FINCA["Spanish"]["AREA_FINCA"] = "";
	$fieldLabelsREPORTE_FINCA["Spanish"]["AREA__L_P"] = "AREA  L P";
	$fieldToolTipsREPORTE_FINCA["Spanish"]["AREA__L_P"] = "";
	$fieldLabelsREPORTE_FINCA["Spanish"]["A_O"] = "AÑO";
	$fieldToolTipsREPORTE_FINCA["Spanish"]["A_O"] = "";
	if (count($fieldToolTipsREPORTE_FINCA["Spanish"]))
		$tdataREPORTE_FINCA[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsREPORTE_FINCA[""] = array();
	$fieldToolTipsREPORTE_FINCA[""] = array();
	$pageTitlesREPORTE_FINCA[""] = array();
	$fieldLabelsREPORTE_FINCA[""]["LINEA_PRINCIPAL"] = "LINEA PRINCIPAL";
	$fieldToolTipsREPORTE_FINCA[""]["LINEA_PRINCIPAL"] = "";
	$fieldLabelsREPORTE_FINCA[""]["FINCA"] = "FINCA";
	$fieldToolTipsREPORTE_FINCA[""]["FINCA"] = "";
	$fieldLabelsREPORTE_FINCA[""]["AREA_FINCA"] = "AREA FINCA";
	$fieldToolTipsREPORTE_FINCA[""]["AREA_FINCA"] = "";
	$fieldLabelsREPORTE_FINCA[""]["AREA__L_P"] = "AREA  L P";
	$fieldToolTipsREPORTE_FINCA[""]["AREA__L_P"] = "";
	$fieldLabelsREPORTE_FINCA[""]["A_O"] = "AÑO";
	$fieldToolTipsREPORTE_FINCA[""]["A_O"] = "";
	if (count($fieldToolTipsREPORTE_FINCA[""]))
		$tdataREPORTE_FINCA[".isUseToolTips"] = true;
}


	$tdataREPORTE_FINCA[".NCSearch"] = true;



$tdataREPORTE_FINCA[".shortTableName"] = "REPORTE_FINCA";
$tdataREPORTE_FINCA[".nSecOptions"] = 0;
$tdataREPORTE_FINCA[".recsPerRowPrint"] = 1;
$tdataREPORTE_FINCA[".mainTableOwnerID"] = "";
$tdataREPORTE_FINCA[".moveNext"] = 1;
$tdataREPORTE_FINCA[".entityType"] = 2;

$tdataREPORTE_FINCA[".strOriginalTableName"] = "finca";

	



$tdataREPORTE_FINCA[".showAddInPopup"] = false;

$tdataREPORTE_FINCA[".showEditInPopup"] = false;

$tdataREPORTE_FINCA[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataREPORTE_FINCA[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataREPORTE_FINCA[".fieldsForRegister"] = array();

$tdataREPORTE_FINCA[".listAjax"] = false;

	$tdataREPORTE_FINCA[".audit"] = false;

	$tdataREPORTE_FINCA[".locking"] = false;


$tdataREPORTE_FINCA[".add"] = true;
$tdataREPORTE_FINCA[".afterAddAction"] = 1;
$tdataREPORTE_FINCA[".closePopupAfterAdd"] = 1;
$tdataREPORTE_FINCA[".afterAddActionDetTable"] = "";

$tdataREPORTE_FINCA[".list"] = true;



$tdataREPORTE_FINCA[".exportTo"] = true;

$tdataREPORTE_FINCA[".printFriendly"] = true;


$tdataREPORTE_FINCA[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataREPORTE_FINCA[".searchSaving"] = false;
//

$tdataREPORTE_FINCA[".showSearchPanel"] = true;
		$tdataREPORTE_FINCA[".flexibleSearch"] = true;

$tdataREPORTE_FINCA[".isUseAjaxSuggest"] = true;




$tdataREPORTE_FINCA[".addPageEvents"] = false;

// use timepicker for search panel
$tdataREPORTE_FINCA[".isUseTimeForSearch"] = false;





$tdataREPORTE_FINCA[".allSearchFields"] = array();
$tdataREPORTE_FINCA[".filterFields"] = array();
$tdataREPORTE_FINCA[".requiredSearchFields"] = array();

$tdataREPORTE_FINCA[".allSearchFields"][] = "FINCA";
	$tdataREPORTE_FINCA[".allSearchFields"][] = "AREA_FINCA";
	$tdataREPORTE_FINCA[".allSearchFields"][] = "LINEA_PRINCIPAL";
	$tdataREPORTE_FINCA[".allSearchFields"][] = "AREA_ L_P";
	$tdataREPORTE_FINCA[".allSearchFields"][] = "AÑO";
	

$tdataREPORTE_FINCA[".googleLikeFields"] = array();
$tdataREPORTE_FINCA[".googleLikeFields"][] = "FINCA";
$tdataREPORTE_FINCA[".googleLikeFields"][] = "AREA_FINCA";
$tdataREPORTE_FINCA[".googleLikeFields"][] = "LINEA_PRINCIPAL";
$tdataREPORTE_FINCA[".googleLikeFields"][] = "AREA_ L_P";
$tdataREPORTE_FINCA[".googleLikeFields"][] = "AÑO";


$tdataREPORTE_FINCA[".advSearchFields"] = array();
$tdataREPORTE_FINCA[".advSearchFields"][] = "FINCA";
$tdataREPORTE_FINCA[".advSearchFields"][] = "AREA_FINCA";
$tdataREPORTE_FINCA[".advSearchFields"][] = "LINEA_PRINCIPAL";
$tdataREPORTE_FINCA[".advSearchFields"][] = "AREA_ L_P";
$tdataREPORTE_FINCA[".advSearchFields"][] = "AÑO";

$tdataREPORTE_FINCA[".tableType"] = "report";

$tdataREPORTE_FINCA[".printerPageOrientation"] = 0;
$tdataREPORTE_FINCA[".nPrinterPageScale"] = 100;

$tdataREPORTE_FINCA[".nPrinterSplitRecords"] = 40;

$tdataREPORTE_FINCA[".nPrinterPDFSplitRecords"] = 40;



$tdataREPORTE_FINCA[".geocodingEnabled"] = false;

//report settings
$tdataREPORTE_FINCA[".printReportLayout"] = 6;

$tdataREPORTE_FINCA[".reportPrintPartitionType"] = 1;
$tdataREPORTE_FINCA[".reportPrintGroupsPerPage"] = 40;
$tdataREPORTE_FINCA[".reportPrintPDFGroupsPerPage"] = 40;
$tdataREPORTE_FINCA[".lowGroup"] = 0;



$tdataREPORTE_FINCA[".pageSize"] = 20;






$tdataREPORTE_FINCA[".repShowDet"] = true;

$tdataREPORTE_FINCA[".reportLayout"] = 6;

//end of report settings




$tdataREPORTE_FINCA[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataREPORTE_FINCA[".strOrderBy"] = $tstrOrderBy;

$tdataREPORTE_FINCA[".orderindexes"] = array();

$tdataREPORTE_FINCA[".sqlHead"] = "  SELECT  DISTINCT FINCA,  AREA_FINCA,  LINEA_PRINCIPAL,  `AREA_ L_P`,  `AÑO`";
$tdataREPORTE_FINCA[".sqlFrom"] = "FROM finca";
$tdataREPORTE_FINCA[".sqlWhereExpr"] = "";
$tdataREPORTE_FINCA[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataREPORTE_FINCA[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataREPORTE_FINCA[".arrGroupsPerPage"] = $arrGPP;

$tdataREPORTE_FINCA[".highlightSearchResults"] = true;

$tableKeysREPORTE_FINCA = array();
$tdataREPORTE_FINCA[".Keys"] = $tableKeysREPORTE_FINCA;

$tdataREPORTE_FINCA[".listFields"] = array();
$tdataREPORTE_FINCA[".listFields"][] = "FINCA";
$tdataREPORTE_FINCA[".listFields"][] = "AREA_FINCA";
$tdataREPORTE_FINCA[".listFields"][] = "LINEA_PRINCIPAL";
$tdataREPORTE_FINCA[".listFields"][] = "AREA_ L_P";
$tdataREPORTE_FINCA[".listFields"][] = "AÑO";

$tdataREPORTE_FINCA[".hideMobileList"] = array();


$tdataREPORTE_FINCA[".viewFields"] = array();
$tdataREPORTE_FINCA[".viewFields"][] = "FINCA";
$tdataREPORTE_FINCA[".viewFields"][] = "AREA_FINCA";
$tdataREPORTE_FINCA[".viewFields"][] = "LINEA_PRINCIPAL";
$tdataREPORTE_FINCA[".viewFields"][] = "AREA_ L_P";
$tdataREPORTE_FINCA[".viewFields"][] = "AÑO";

$tdataREPORTE_FINCA[".addFields"] = array();
$tdataREPORTE_FINCA[".addFields"][] = "FINCA";
$tdataREPORTE_FINCA[".addFields"][] = "AREA_FINCA";
$tdataREPORTE_FINCA[".addFields"][] = "LINEA_PRINCIPAL";
$tdataREPORTE_FINCA[".addFields"][] = "AREA_ L_P";
$tdataREPORTE_FINCA[".addFields"][] = "AÑO";

$tdataREPORTE_FINCA[".masterListFields"] = array();
$tdataREPORTE_FINCA[".masterListFields"][] = "FINCA";
$tdataREPORTE_FINCA[".masterListFields"][] = "AREA_FINCA";
$tdataREPORTE_FINCA[".masterListFields"][] = "LINEA_PRINCIPAL";
$tdataREPORTE_FINCA[".masterListFields"][] = "AREA_ L_P";
$tdataREPORTE_FINCA[".masterListFields"][] = "AÑO";

$tdataREPORTE_FINCA[".inlineAddFields"] = array();
$tdataREPORTE_FINCA[".inlineAddFields"][] = "FINCA";
$tdataREPORTE_FINCA[".inlineAddFields"][] = "AREA_FINCA";
$tdataREPORTE_FINCA[".inlineAddFields"][] = "LINEA_PRINCIPAL";
$tdataREPORTE_FINCA[".inlineAddFields"][] = "AREA_ L_P";
$tdataREPORTE_FINCA[".inlineAddFields"][] = "AÑO";

$tdataREPORTE_FINCA[".editFields"] = array();
$tdataREPORTE_FINCA[".editFields"][] = "FINCA";
$tdataREPORTE_FINCA[".editFields"][] = "AREA_FINCA";
$tdataREPORTE_FINCA[".editFields"][] = "LINEA_PRINCIPAL";
$tdataREPORTE_FINCA[".editFields"][] = "AREA_ L_P";
$tdataREPORTE_FINCA[".editFields"][] = "AÑO";

$tdataREPORTE_FINCA[".inlineEditFields"] = array();
$tdataREPORTE_FINCA[".inlineEditFields"][] = "FINCA";
$tdataREPORTE_FINCA[".inlineEditFields"][] = "AREA_FINCA";
$tdataREPORTE_FINCA[".inlineEditFields"][] = "LINEA_PRINCIPAL";
$tdataREPORTE_FINCA[".inlineEditFields"][] = "AREA_ L_P";
$tdataREPORTE_FINCA[".inlineEditFields"][] = "AÑO";

$tdataREPORTE_FINCA[".exportFields"] = array();
$tdataREPORTE_FINCA[".exportFields"][] = "FINCA";
$tdataREPORTE_FINCA[".exportFields"][] = "AREA_FINCA";
$tdataREPORTE_FINCA[".exportFields"][] = "LINEA_PRINCIPAL";
$tdataREPORTE_FINCA[".exportFields"][] = "AREA_ L_P";
$tdataREPORTE_FINCA[".exportFields"][] = "AÑO";

$tdataREPORTE_FINCA[".importFields"] = array();
$tdataREPORTE_FINCA[".importFields"][] = "FINCA";
$tdataREPORTE_FINCA[".importFields"][] = "AREA_FINCA";
$tdataREPORTE_FINCA[".importFields"][] = "LINEA_PRINCIPAL";
$tdataREPORTE_FINCA[".importFields"][] = "AREA_ L_P";
$tdataREPORTE_FINCA[".importFields"][] = "AÑO";

$tdataREPORTE_FINCA[".printFields"] = array();
$tdataREPORTE_FINCA[".printFields"][] = "FINCA";
$tdataREPORTE_FINCA[".printFields"][] = "AREA_FINCA";
$tdataREPORTE_FINCA[".printFields"][] = "LINEA_PRINCIPAL";
$tdataREPORTE_FINCA[".printFields"][] = "AREA_ L_P";
$tdataREPORTE_FINCA[".printFields"][] = "AÑO";

//	FINCA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "FINCA";
	$fdata["GoodName"] = "FINCA";
	$fdata["ownerTable"] = "finca";
	$fdata["Label"] = GetFieldLabel("REPORTE_FINCA","FINCA");
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
	$fdata["FullName"] = "FINCA";

	
	
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




	$tdataREPORTE_FINCA["FINCA"] = $fdata;
//	AREA_FINCA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "AREA_FINCA";
	$fdata["GoodName"] = "AREA_FINCA";
	$fdata["ownerTable"] = "finca";
	$fdata["Label"] = GetFieldLabel("REPORTE_FINCA","AREA_FINCA");
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
	$fdata["FullName"] = "AREA_FINCA";

	
	
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




	$tdataREPORTE_FINCA["AREA_FINCA"] = $fdata;
//	LINEA_PRINCIPAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "LINEA_PRINCIPAL";
	$fdata["GoodName"] = "LINEA_PRINCIPAL";
	$fdata["ownerTable"] = "finca";
	$fdata["Label"] = GetFieldLabel("REPORTE_FINCA","LINEA_PRINCIPAL");
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
	$fdata["FullName"] = "LINEA_PRINCIPAL";

	
	
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




	$tdataREPORTE_FINCA["LINEA_PRINCIPAL"] = $fdata;
//	AREA_ L_P
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "AREA_ L_P";
	$fdata["GoodName"] = "AREA__L_P";
	$fdata["ownerTable"] = "finca";
	$fdata["Label"] = GetFieldLabel("REPORTE_FINCA","AREA__L_P");
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
	$fdata["FullName"] = "`AREA_ L_P`";

	
	
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




	$tdataREPORTE_FINCA["AREA_ L_P"] = $fdata;
//	AÑO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "AÑO";
	$fdata["GoodName"] = "A_O";
	$fdata["ownerTable"] = "finca";
	$fdata["Label"] = GetFieldLabel("REPORTE_FINCA","A_O");
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
	$fdata["FullName"] = "`AÑO`";

	
	
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




	$tdataREPORTE_FINCA["AÑO"] = $fdata;


$tables_data["REPORTE FINCA"]=&$tdataREPORTE_FINCA;
$field_labels["REPORTE_FINCA"] = &$fieldLabelsREPORTE_FINCA;
$fieldToolTips["REPORTE_FINCA"] = &$fieldToolTipsREPORTE_FINCA;
$page_titles["REPORTE_FINCA"] = &$pageTitlesREPORTE_FINCA;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["REPORTE FINCA"] = array();
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
		
	$detailsTablesData["REPORTE FINCA"][$dIndex] = $detailsParam;

	
		$detailsTablesData["REPORTE FINCA"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["REPORTE FINCA"][$dIndex]["masterKeys"][]="PROPIETARIO_CEDULA";

				$detailsTablesData["REPORTE FINCA"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["REPORTE FINCA"][$dIndex]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
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
		
	$detailsTablesData["REPORTE FINCA"][$dIndex] = $detailsParam;

	
		$detailsTablesData["REPORTE FINCA"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["REPORTE FINCA"][$dIndex]["masterKeys"][]="PROPIETARIO_CEDULA";

				$detailsTablesData["REPORTE FINCA"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["REPORTE FINCA"][$dIndex]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
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
		
	$detailsTablesData["REPORTE FINCA"][$dIndex] = $detailsParam;

	
		$detailsTablesData["REPORTE FINCA"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["REPORTE FINCA"][$dIndex]["masterKeys"][]="PROPIETARIO_CEDULA";

				$detailsTablesData["REPORTE FINCA"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["REPORTE FINCA"][$dIndex]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
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
		
	$detailsTablesData["REPORTE FINCA"][$dIndex] = $detailsParam;

	
		$detailsTablesData["REPORTE FINCA"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["REPORTE FINCA"][$dIndex]["masterKeys"][]="PROPIETARIO_CEDULA";

				$detailsTablesData["REPORTE FINCA"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["REPORTE FINCA"][$dIndex]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
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
		
	$detailsTablesData["REPORTE FINCA"][$dIndex] = $detailsParam;

	
		$detailsTablesData["REPORTE FINCA"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["REPORTE FINCA"][$dIndex]["masterKeys"][]="PROPIETARIO_CEDULA";

				$detailsTablesData["REPORTE FINCA"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["REPORTE FINCA"][$dIndex]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
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
		
	$detailsTablesData["REPORTE FINCA"][$dIndex] = $detailsParam;

	
		$detailsTablesData["REPORTE FINCA"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["REPORTE FINCA"][$dIndex]["masterKeys"][]="PROPIETARIO_CEDULA";

				$detailsTablesData["REPORTE FINCA"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["REPORTE FINCA"][$dIndex]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";

// tables which are master tables for current table (detail)
$masterTablesData["REPORTE FINCA"] = array();


	
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
					$masterTablesData["REPORTE FINCA"][0] = $masterParams;
				$masterTablesData["REPORTE FINCA"][0]["masterKeys"] = array();
	$masterTablesData["REPORTE FINCA"][0]["masterKeys"][]="CEDULA";
				$masterTablesData["REPORTE FINCA"][0]["detailKeys"] = array();
	$masterTablesData["REPORTE FINCA"][0]["detailKeys"][]="PROPIETARIO_CEDULA";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_REPORTE_FINCA()
{
$proto0=array();
$proto0["m_strHead"] = "  SELECT  DISTINCT";
$proto0["m_strFieldList"] = "FINCA,  AREA_FINCA,  LINEA_PRINCIPAL,  `AREA_ L_P`,  `AÑO`";
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
	"m_strName" => "FINCA",
	"m_strTable" => "finca",
	"m_srcTableName" => "REPORTE FINCA"
));

$proto6["m_sql"] = "FINCA";
$proto6["m_srcTableName"] = "REPORTE FINCA";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "AREA_FINCA",
	"m_strTable" => "finca",
	"m_srcTableName" => "REPORTE FINCA"
));

$proto8["m_sql"] = "AREA_FINCA";
$proto8["m_srcTableName"] = "REPORTE FINCA";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "LINEA_PRINCIPAL",
	"m_strTable" => "finca",
	"m_srcTableName" => "REPORTE FINCA"
));

$proto10["m_sql"] = "LINEA_PRINCIPAL";
$proto10["m_srcTableName"] = "REPORTE FINCA";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "AREA_ L_P",
	"m_strTable" => "finca",
	"m_srcTableName" => "REPORTE FINCA"
));

$proto12["m_sql"] = "`AREA_ L_P`";
$proto12["m_srcTableName"] = "REPORTE FINCA";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "finca",
	"m_srcTableName" => "REPORTE FINCA"
));

$proto14["m_sql"] = "`AÑO`";
$proto14["m_srcTableName"] = "REPORTE FINCA";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "finca";
$proto17["m_srcTableName"] = "REPORTE FINCA";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "ID";
$proto17["m_columns"][] = "PROPIETARIO_CEDULA";
$proto17["m_columns"][] = "NOMBRE";
$proto17["m_columns"][] = "VEREDA";
$proto17["m_columns"][] = "FINCA";
$proto17["m_columns"][] = "ALTURA";
$proto17["m_columns"][] = "GEOREFERENCIA";
$proto17["m_columns"][] = "AREA_FINCA";
$proto17["m_columns"][] = "LINEA_PRINCIPAL";
$proto17["m_columns"][] = "AREA_ L_P";
$proto17["m_columns"][] = "AÑO";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "finca";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "REPORTE FINCA";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto20=array();
						$obj = new SQLField(array(
	"m_strName" => "FINCA",
	"m_strTable" => "finca",
	"m_srcTableName" => "REPORTE FINCA"
));

$proto20["m_column"]=$obj;
$obj = new SQLGroupByItem($proto20);

$proto0["m_groupby"][]=$obj;
												$proto22=array();
						$obj = new SQLField(array(
	"m_strName" => "LINEA_PRINCIPAL",
	"m_strTable" => "finca",
	"m_srcTableName" => "REPORTE FINCA"
));

$proto22["m_column"]=$obj;
$obj = new SQLGroupByItem($proto22);

$proto0["m_groupby"][]=$obj;
												$proto24=array();
						$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "finca",
	"m_srcTableName" => "REPORTE FINCA"
));

$proto24["m_column"]=$obj;
$obj = new SQLGroupByItem($proto24);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="REPORTE FINCA";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_REPORTE_FINCA = createSqlQuery_REPORTE_FINCA();


	
		;

					

$tdataREPORTE_FINCA[".sqlquery"] = $queryData_REPORTE_FINCA;

$tableEvents["REPORTE FINCA"] = new eventsBase;
$tdataREPORTE_FINCA[".hasEvents"] = false;

?>