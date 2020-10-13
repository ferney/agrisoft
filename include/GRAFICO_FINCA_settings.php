<?php
require_once(getabspath("classes/cipherer.php"));




$tdataGRAFICO_FINCA = array();
	$tdataGRAFICO_FINCA[".ShortName"] = "GRAFICO_FINCA";
	$tdataGRAFICO_FINCA[".OwnerID"] = "";
	$tdataGRAFICO_FINCA[".OriginalTable"] = "finca";

//	field labels
$fieldLabelsGRAFICO_FINCA = array();
$fieldToolTipsGRAFICO_FINCA = array();
$pageTitlesGRAFICO_FINCA = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsGRAFICO_FINCA["Spanish"] = array();
	$fieldToolTipsGRAFICO_FINCA["Spanish"] = array();
	$pageTitlesGRAFICO_FINCA["Spanish"] = array();
	$fieldLabelsGRAFICO_FINCA["Spanish"]["FINCA"] = "FINCA";
	$fieldToolTipsGRAFICO_FINCA["Spanish"]["FINCA"] = "";
	$fieldLabelsGRAFICO_FINCA["Spanish"]["AREA_FINCA"] = "AREA FINCA";
	$fieldToolTipsGRAFICO_FINCA["Spanish"]["AREA_FINCA"] = "";
	$fieldLabelsGRAFICO_FINCA["Spanish"]["LINEA_PRINCIPAL"] = "LINEA PRINCIPAL";
	$fieldToolTipsGRAFICO_FINCA["Spanish"]["LINEA_PRINCIPAL"] = "";
	$fieldLabelsGRAFICO_FINCA["Spanish"]["AREA__L_P"] = "AREA  L P";
	$fieldToolTipsGRAFICO_FINCA["Spanish"]["AREA__L_P"] = "";
	$fieldLabelsGRAFICO_FINCA["Spanish"]["A_O"] = "AÑO";
	$fieldToolTipsGRAFICO_FINCA["Spanish"]["A_O"] = "";
	$fieldLabelsGRAFICO_FINCA["Spanish"]["AREA_LIBRE"] = "AREA LIBRE";
	$fieldToolTipsGRAFICO_FINCA["Spanish"]["AREA_LIBRE"] = "";
	if (count($fieldToolTipsGRAFICO_FINCA["Spanish"]))
		$tdataGRAFICO_FINCA[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsGRAFICO_FINCA[""] = array();
	$fieldToolTipsGRAFICO_FINCA[""] = array();
	$pageTitlesGRAFICO_FINCA[""] = array();
	$fieldLabelsGRAFICO_FINCA[""]["FINCA"] = "FINCA";
	$fieldToolTipsGRAFICO_FINCA[""]["FINCA"] = "";
	$fieldLabelsGRAFICO_FINCA[""]["AREA_FINCA"] = "AREA FINCA";
	$fieldToolTipsGRAFICO_FINCA[""]["AREA_FINCA"] = "";
	$fieldLabelsGRAFICO_FINCA[""]["LINEA_PRINCIPAL"] = "LINEA PRINCIPAL";
	$fieldToolTipsGRAFICO_FINCA[""]["LINEA_PRINCIPAL"] = "";
	$fieldLabelsGRAFICO_FINCA[""]["AREA__L_P"] = "AREA  L P";
	$fieldToolTipsGRAFICO_FINCA[""]["AREA__L_P"] = "";
	$fieldLabelsGRAFICO_FINCA[""]["A_O"] = "AÑO";
	$fieldToolTipsGRAFICO_FINCA[""]["A_O"] = "";
	$fieldLabelsGRAFICO_FINCA[""]["AREA_LIBRE"] = "AREA LIBRE";
	$fieldToolTipsGRAFICO_FINCA[""]["AREA_LIBRE"] = "";
	if (count($fieldToolTipsGRAFICO_FINCA[""]))
		$tdataGRAFICO_FINCA[".isUseToolTips"] = true;
}


	$tdataGRAFICO_FINCA[".NCSearch"] = true;

	$tdataGRAFICO_FINCA[".ChartRefreshTime"] = 60;


$tdataGRAFICO_FINCA[".shortTableName"] = "GRAFICO_FINCA";
$tdataGRAFICO_FINCA[".nSecOptions"] = 0;
$tdataGRAFICO_FINCA[".recsPerRowPrint"] = 1;
$tdataGRAFICO_FINCA[".mainTableOwnerID"] = "";
$tdataGRAFICO_FINCA[".moveNext"] = 1;
$tdataGRAFICO_FINCA[".entityType"] = 3;

$tdataGRAFICO_FINCA[".strOriginalTableName"] = "finca";

	



$tdataGRAFICO_FINCA[".showAddInPopup"] = false;

$tdataGRAFICO_FINCA[".showEditInPopup"] = false;

$tdataGRAFICO_FINCA[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataGRAFICO_FINCA[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataGRAFICO_FINCA[".fieldsForRegister"] = array();

$tdataGRAFICO_FINCA[".listAjax"] = false;

	$tdataGRAFICO_FINCA[".audit"] = false;

	$tdataGRAFICO_FINCA[".locking"] = false;


$tdataGRAFICO_FINCA[".add"] = true;
$tdataGRAFICO_FINCA[".afterAddAction"] = 1;
$tdataGRAFICO_FINCA[".closePopupAfterAdd"] = 1;
$tdataGRAFICO_FINCA[".afterAddActionDetTable"] = "";

$tdataGRAFICO_FINCA[".list"] = true;






$tdataGRAFICO_FINCA[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataGRAFICO_FINCA[".searchSaving"] = false;
//

$tdataGRAFICO_FINCA[".showSearchPanel"] = true;
		$tdataGRAFICO_FINCA[".flexibleSearch"] = true;

$tdataGRAFICO_FINCA[".isUseAjaxSuggest"] = true;




$tdataGRAFICO_FINCA[".addPageEvents"] = false;

// use timepicker for search panel
$tdataGRAFICO_FINCA[".isUseTimeForSearch"] = false;



$tdataGRAFICO_FINCA[".badgeColor"] = "C213E8";


$tdataGRAFICO_FINCA[".allSearchFields"] = array();
$tdataGRAFICO_FINCA[".filterFields"] = array();
$tdataGRAFICO_FINCA[".requiredSearchFields"] = array();

$tdataGRAFICO_FINCA[".allSearchFields"][] = "FINCA";
	$tdataGRAFICO_FINCA[".allSearchFields"][] = "AREA_FINCA";
	$tdataGRAFICO_FINCA[".allSearchFields"][] = "LINEA_PRINCIPAL";
	$tdataGRAFICO_FINCA[".allSearchFields"][] = "AREA_ L_P";
	$tdataGRAFICO_FINCA[".allSearchFields"][] = "AREA_LIBRE";
	$tdataGRAFICO_FINCA[".allSearchFields"][] = "AÑO";
	
$tdataGRAFICO_FINCA[".filterFields"][] = "FINCA";
$tdataGRAFICO_FINCA[".filterFields"][] = "AREA_FINCA";
$tdataGRAFICO_FINCA[".filterFields"][] = "LINEA_PRINCIPAL";
$tdataGRAFICO_FINCA[".filterFields"][] = "AREA_ L_P";
$tdataGRAFICO_FINCA[".filterFields"][] = "AREA_LIBRE";
$tdataGRAFICO_FINCA[".filterFields"][] = "AÑO";

$tdataGRAFICO_FINCA[".googleLikeFields"] = array();
$tdataGRAFICO_FINCA[".googleLikeFields"][] = "FINCA";
$tdataGRAFICO_FINCA[".googleLikeFields"][] = "AREA_FINCA";
$tdataGRAFICO_FINCA[".googleLikeFields"][] = "LINEA_PRINCIPAL";
$tdataGRAFICO_FINCA[".googleLikeFields"][] = "AREA_ L_P";
$tdataGRAFICO_FINCA[".googleLikeFields"][] = "AREA_LIBRE";
$tdataGRAFICO_FINCA[".googleLikeFields"][] = "AÑO";



$tdataGRAFICO_FINCA[".tableType"] = "chart";

$tdataGRAFICO_FINCA[".printerPageOrientation"] = 0;
$tdataGRAFICO_FINCA[".nPrinterPageScale"] = 100;

$tdataGRAFICO_FINCA[".nPrinterSplitRecords"] = 40;

$tdataGRAFICO_FINCA[".nPrinterPDFSplitRecords"] = 40;



$tdataGRAFICO_FINCA[".geocodingEnabled"] = false;



// chart settings
$tdataGRAFICO_FINCA[".chartType"] = "2DColumn";
// end of chart settings


$tdataGRAFICO_FINCA[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataGRAFICO_FINCA[".strOrderBy"] = $tstrOrderBy;

$tdataGRAFICO_FINCA[".orderindexes"] = array();

$tdataGRAFICO_FINCA[".sqlHead"] = "SELECT  DISTINCT FINCA,  AREA_FINCA,  LINEA_PRINCIPAL,  `AREA_ L_P`,  (AREA_FINCA-`AREA_ L_P`)AS AREA_LIBRE,  `AÑO`";
$tdataGRAFICO_FINCA[".sqlFrom"] = "FROM finca";
$tdataGRAFICO_FINCA[".sqlWhereExpr"] = "";
$tdataGRAFICO_FINCA[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataGRAFICO_FINCA[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataGRAFICO_FINCA[".arrGroupsPerPage"] = $arrGPP;

$tdataGRAFICO_FINCA[".highlightSearchResults"] = true;

$tableKeysGRAFICO_FINCA = array();
$tdataGRAFICO_FINCA[".Keys"] = $tableKeysGRAFICO_FINCA;

$tdataGRAFICO_FINCA[".listFields"] = array();
$tdataGRAFICO_FINCA[".listFields"][] = "FINCA";
$tdataGRAFICO_FINCA[".listFields"][] = "AREA_FINCA";
$tdataGRAFICO_FINCA[".listFields"][] = "LINEA_PRINCIPAL";
$tdataGRAFICO_FINCA[".listFields"][] = "AREA_ L_P";
$tdataGRAFICO_FINCA[".listFields"][] = "AREA_LIBRE";
$tdataGRAFICO_FINCA[".listFields"][] = "AÑO";

$tdataGRAFICO_FINCA[".hideMobileList"] = array();


$tdataGRAFICO_FINCA[".viewFields"] = array();
$tdataGRAFICO_FINCA[".viewFields"][] = "FINCA";
$tdataGRAFICO_FINCA[".viewFields"][] = "AREA_FINCA";
$tdataGRAFICO_FINCA[".viewFields"][] = "LINEA_PRINCIPAL";
$tdataGRAFICO_FINCA[".viewFields"][] = "AREA_ L_P";
$tdataGRAFICO_FINCA[".viewFields"][] = "AREA_LIBRE";
$tdataGRAFICO_FINCA[".viewFields"][] = "AÑO";

$tdataGRAFICO_FINCA[".addFields"] = array();
$tdataGRAFICO_FINCA[".addFields"][] = "FINCA";
$tdataGRAFICO_FINCA[".addFields"][] = "AREA_FINCA";
$tdataGRAFICO_FINCA[".addFields"][] = "LINEA_PRINCIPAL";
$tdataGRAFICO_FINCA[".addFields"][] = "AREA_ L_P";
$tdataGRAFICO_FINCA[".addFields"][] = "AÑO";

$tdataGRAFICO_FINCA[".masterListFields"] = array();
$tdataGRAFICO_FINCA[".masterListFields"][] = "FINCA";
$tdataGRAFICO_FINCA[".masterListFields"][] = "AREA_FINCA";
$tdataGRAFICO_FINCA[".masterListFields"][] = "LINEA_PRINCIPAL";
$tdataGRAFICO_FINCA[".masterListFields"][] = "AREA_ L_P";
$tdataGRAFICO_FINCA[".masterListFields"][] = "AREA_LIBRE";
$tdataGRAFICO_FINCA[".masterListFields"][] = "AÑO";

$tdataGRAFICO_FINCA[".inlineAddFields"] = array();
$tdataGRAFICO_FINCA[".inlineAddFields"][] = "FINCA";
$tdataGRAFICO_FINCA[".inlineAddFields"][] = "AREA_FINCA";
$tdataGRAFICO_FINCA[".inlineAddFields"][] = "LINEA_PRINCIPAL";
$tdataGRAFICO_FINCA[".inlineAddFields"][] = "AREA_ L_P";
$tdataGRAFICO_FINCA[".inlineAddFields"][] = "AÑO";

$tdataGRAFICO_FINCA[".editFields"] = array();
$tdataGRAFICO_FINCA[".editFields"][] = "FINCA";
$tdataGRAFICO_FINCA[".editFields"][] = "AREA_FINCA";
$tdataGRAFICO_FINCA[".editFields"][] = "LINEA_PRINCIPAL";
$tdataGRAFICO_FINCA[".editFields"][] = "AREA_ L_P";
$tdataGRAFICO_FINCA[".editFields"][] = "AÑO";

$tdataGRAFICO_FINCA[".inlineEditFields"] = array();
$tdataGRAFICO_FINCA[".inlineEditFields"][] = "FINCA";
$tdataGRAFICO_FINCA[".inlineEditFields"][] = "AREA_FINCA";
$tdataGRAFICO_FINCA[".inlineEditFields"][] = "LINEA_PRINCIPAL";
$tdataGRAFICO_FINCA[".inlineEditFields"][] = "AREA_ L_P";
$tdataGRAFICO_FINCA[".inlineEditFields"][] = "AÑO";

$tdataGRAFICO_FINCA[".exportFields"] = array();
$tdataGRAFICO_FINCA[".exportFields"][] = "FINCA";
$tdataGRAFICO_FINCA[".exportFields"][] = "AREA_FINCA";
$tdataGRAFICO_FINCA[".exportFields"][] = "LINEA_PRINCIPAL";
$tdataGRAFICO_FINCA[".exportFields"][] = "AREA_ L_P";
$tdataGRAFICO_FINCA[".exportFields"][] = "AREA_LIBRE";
$tdataGRAFICO_FINCA[".exportFields"][] = "AÑO";

$tdataGRAFICO_FINCA[".importFields"] = array();
$tdataGRAFICO_FINCA[".importFields"][] = "FINCA";
$tdataGRAFICO_FINCA[".importFields"][] = "AREA_FINCA";
$tdataGRAFICO_FINCA[".importFields"][] = "LINEA_PRINCIPAL";
$tdataGRAFICO_FINCA[".importFields"][] = "AREA_ L_P";
$tdataGRAFICO_FINCA[".importFields"][] = "AREA_LIBRE";
$tdataGRAFICO_FINCA[".importFields"][] = "AÑO";

$tdataGRAFICO_FINCA[".printFields"] = array();
$tdataGRAFICO_FINCA[".printFields"][] = "FINCA";
$tdataGRAFICO_FINCA[".printFields"][] = "AREA_FINCA";
$tdataGRAFICO_FINCA[".printFields"][] = "LINEA_PRINCIPAL";
$tdataGRAFICO_FINCA[".printFields"][] = "AREA_ L_P";
$tdataGRAFICO_FINCA[".printFields"][] = "AREA_LIBRE";
$tdataGRAFICO_FINCA[".printFields"][] = "AÑO";

//	FINCA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "FINCA";
	$fdata["GoodName"] = "FINCA";
	$fdata["ownerTable"] = "finca";
	$fdata["Label"] = GetFieldLabel("GRAFICO_FINCA","FINCA");
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdataGRAFICO_FINCA["FINCA"] = $fdata;
//	AREA_FINCA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "AREA_FINCA";
	$fdata["GoodName"] = "AREA_FINCA";
	$fdata["ownerTable"] = "finca";
	$fdata["Label"] = GetFieldLabel("GRAFICO_FINCA","AREA_FINCA");
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdataGRAFICO_FINCA["AREA_FINCA"] = $fdata;
//	LINEA_PRINCIPAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "LINEA_PRINCIPAL";
	$fdata["GoodName"] = "LINEA_PRINCIPAL";
	$fdata["ownerTable"] = "finca";
	$fdata["Label"] = GetFieldLabel("GRAFICO_FINCA","LINEA_PRINCIPAL");
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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdataGRAFICO_FINCA["LINEA_PRINCIPAL"] = $fdata;
//	AREA_ L_P
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "AREA_ L_P";
	$fdata["GoodName"] = "AREA__L_P";
	$fdata["ownerTable"] = "finca";
	$fdata["Label"] = GetFieldLabel("GRAFICO_FINCA","AREA__L_P");
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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdataGRAFICO_FINCA["AREA_ L_P"] = $fdata;
//	AREA_LIBRE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "AREA_LIBRE";
	$fdata["GoodName"] = "AREA_LIBRE";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("GRAFICO_FINCA","AREA_LIBRE");
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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdataGRAFICO_FINCA["AREA_LIBRE"] = $fdata;
//	AÑO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "AÑO";
	$fdata["GoodName"] = "A_O";
	$fdata["ownerTable"] = "finca";
	$fdata["Label"] = GetFieldLabel("GRAFICO_FINCA","A_O");
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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdataGRAFICO_FINCA["AÑO"] = $fdata;

	$tdataGRAFICO_FINCA[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">GRAFICO FINCA</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdataGRAFICO_FINCA[".chartXml"] .= '<attr value="0">
			<attr value="name">AREA_ L_P</attr>';
	$tdataGRAFICO_FINCA[".chartXml"] .= '</attr>';
	$tdataGRAFICO_FINCA[".chartXml"] .= '<attr value="1">
			<attr value="name">AREA_LIBRE</attr>';
	$tdataGRAFICO_FINCA[".chartXml"] .= '</attr>';
	$tdataGRAFICO_FINCA[".chartXml"] .= '<attr value="2">
			<attr value="name">AREA_FINCA</attr>';
	$tdataGRAFICO_FINCA[".chartXml"] .= '</attr>';
	$tdataGRAFICO_FINCA[".chartXml"] .= '<attr value="3">
		<attr value="name">FINCA</attr>
	</attr>';
	$tdataGRAFICO_FINCA[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdataGRAFICO_FINCA[".chartXml"] .= '<attr value="head">'.xmlencode("").'</attr>
<attr value="foot">'.xmlencode("").'</attr>
<attr value="y_axis_label">'.xmlencode("").'</attr>


<attr value="slegend">true</attr>
<attr value="sgrid">true</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">false</attr>
<attr value="sstacked">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">0</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">1</attr>
<attr value="autoupmin">60</attr>';
$tdataGRAFICO_FINCA[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdataGRAFICO_FINCA[".chartXml"] .= '<attr value="0">
		<attr value="name">FINCA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("GRAFICO_FINCA","FINCA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataGRAFICO_FINCA[".chartXml"] .= '<attr value="1">
		<attr value="name">AREA_FINCA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("GRAFICO_FINCA","AREA_FINCA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataGRAFICO_FINCA[".chartXml"] .= '<attr value="2">
		<attr value="name">LINEA_PRINCIPAL</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("GRAFICO_FINCA","LINEA_PRINCIPAL")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataGRAFICO_FINCA[".chartXml"] .= '<attr value="3">
		<attr value="name">AREA_ L_P</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("GRAFICO_FINCA","AREA__L_P")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataGRAFICO_FINCA[".chartXml"] .= '<attr value="4">
		<attr value="name">AREA_LIBRE</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("GRAFICO_FINCA","AREA_LIBRE")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataGRAFICO_FINCA[".chartXml"] .= '<attr value="5">
		<attr value="name">AÑO</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("GRAFICO_FINCA","A_O")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdataGRAFICO_FINCA[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">GRAFICO FINCA</attr>
<attr value="short_table_name">GRAFICO_FINCA</attr>
</attr>

</chart>';

$tables_data["GRAFICO FINCA"]=&$tdataGRAFICO_FINCA;
$field_labels["GRAFICO_FINCA"] = &$fieldLabelsGRAFICO_FINCA;
$fieldToolTips["GRAFICO_FINCA"] = &$fieldToolTipsGRAFICO_FINCA;
$page_titles["GRAFICO_FINCA"] = &$pageTitlesGRAFICO_FINCA;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["GRAFICO FINCA"] = array();
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
		
	$detailsTablesData["GRAFICO FINCA"][$dIndex] = $detailsParam;

	
		$detailsTablesData["GRAFICO FINCA"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["GRAFICO FINCA"][$dIndex]["masterKeys"][]="PROPIETARIO_CEDULA";

				$detailsTablesData["GRAFICO FINCA"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["GRAFICO FINCA"][$dIndex]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
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
		
	$detailsTablesData["GRAFICO FINCA"][$dIndex] = $detailsParam;

	
		$detailsTablesData["GRAFICO FINCA"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["GRAFICO FINCA"][$dIndex]["masterKeys"][]="PROPIETARIO_CEDULA";

				$detailsTablesData["GRAFICO FINCA"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["GRAFICO FINCA"][$dIndex]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
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
		
	$detailsTablesData["GRAFICO FINCA"][$dIndex] = $detailsParam;

	
		$detailsTablesData["GRAFICO FINCA"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["GRAFICO FINCA"][$dIndex]["masterKeys"][]="PROPIETARIO_CEDULA";

				$detailsTablesData["GRAFICO FINCA"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["GRAFICO FINCA"][$dIndex]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
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
		
	$detailsTablesData["GRAFICO FINCA"][$dIndex] = $detailsParam;

	
		$detailsTablesData["GRAFICO FINCA"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["GRAFICO FINCA"][$dIndex]["masterKeys"][]="PROPIETARIO_CEDULA";

				$detailsTablesData["GRAFICO FINCA"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["GRAFICO FINCA"][$dIndex]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
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
		
	$detailsTablesData["GRAFICO FINCA"][$dIndex] = $detailsParam;

	
		$detailsTablesData["GRAFICO FINCA"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["GRAFICO FINCA"][$dIndex]["masterKeys"][]="PROPIETARIO_CEDULA";

				$detailsTablesData["GRAFICO FINCA"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["GRAFICO FINCA"][$dIndex]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
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
		
	$detailsTablesData["GRAFICO FINCA"][$dIndex] = $detailsParam;

	
		$detailsTablesData["GRAFICO FINCA"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["GRAFICO FINCA"][$dIndex]["masterKeys"][]="PROPIETARIO_CEDULA";

				$detailsTablesData["GRAFICO FINCA"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["GRAFICO FINCA"][$dIndex]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";

// tables which are master tables for current table (detail)
$masterTablesData["GRAFICO FINCA"] = array();


	
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
					$masterTablesData["GRAFICO FINCA"][0] = $masterParams;
				$masterTablesData["GRAFICO FINCA"][0]["masterKeys"] = array();
	$masterTablesData["GRAFICO FINCA"][0]["masterKeys"][]="CEDULA";
				$masterTablesData["GRAFICO FINCA"][0]["detailKeys"] = array();
	$masterTablesData["GRAFICO FINCA"][0]["detailKeys"][]="PROPIETARIO_CEDULA";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_GRAFICO_FINCA()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT  DISTINCT";
$proto0["m_strFieldList"] = "FINCA,  AREA_FINCA,  LINEA_PRINCIPAL,  `AREA_ L_P`,  (AREA_FINCA-`AREA_ L_P`)AS AREA_LIBRE,  `AÑO`";
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
	"m_srcTableName" => "GRAFICO FINCA"
));

$proto6["m_sql"] = "FINCA";
$proto6["m_srcTableName"] = "GRAFICO FINCA";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "AREA_FINCA",
	"m_strTable" => "finca",
	"m_srcTableName" => "GRAFICO FINCA"
));

$proto8["m_sql"] = "AREA_FINCA";
$proto8["m_srcTableName"] = "GRAFICO FINCA";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "LINEA_PRINCIPAL",
	"m_strTable" => "finca",
	"m_srcTableName" => "GRAFICO FINCA"
));

$proto10["m_sql"] = "LINEA_PRINCIPAL";
$proto10["m_srcTableName"] = "GRAFICO FINCA";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "AREA_ L_P",
	"m_strTable" => "finca",
	"m_srcTableName" => "GRAFICO FINCA"
));

$proto12["m_sql"] = "`AREA_ L_P`";
$proto12["m_srcTableName"] = "GRAFICO FINCA";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(AREA_FINCA-`AREA_ L_P`)"
));

$proto14["m_sql"] = "(AREA_FINCA-`AREA_ L_P`)";
$proto14["m_srcTableName"] = "GRAFICO FINCA";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "AREA_LIBRE";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "finca",
	"m_srcTableName" => "GRAFICO FINCA"
));

$proto16["m_sql"] = "`AÑO`";
$proto16["m_srcTableName"] = "GRAFICO FINCA";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "finca";
$proto19["m_srcTableName"] = "GRAFICO FINCA";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "ID";
$proto19["m_columns"][] = "PROPIETARIO_CEDULA";
$proto19["m_columns"][] = "NOMBRE";
$proto19["m_columns"][] = "VEREDA";
$proto19["m_columns"][] = "FINCA";
$proto19["m_columns"][] = "ALTURA";
$proto19["m_columns"][] = "GEOREFERENCIA";
$proto19["m_columns"][] = "AREA_FINCA";
$proto19["m_columns"][] = "LINEA_PRINCIPAL";
$proto19["m_columns"][] = "AREA_ L_P";
$proto19["m_columns"][] = "AÑO";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "finca";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "GRAFICO FINCA";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto22=array();
						$obj = new SQLField(array(
	"m_strName" => "FINCA",
	"m_strTable" => "finca",
	"m_srcTableName" => "GRAFICO FINCA"
));

$proto22["m_column"]=$obj;
$obj = new SQLGroupByItem($proto22);

$proto0["m_groupby"][]=$obj;
												$proto24=array();
						$obj = new SQLField(array(
	"m_strName" => "LINEA_PRINCIPAL",
	"m_strTable" => "finca",
	"m_srcTableName" => "GRAFICO FINCA"
));

$proto24["m_column"]=$obj;
$obj = new SQLGroupByItem($proto24);

$proto0["m_groupby"][]=$obj;
												$proto26=array();
						$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "finca",
	"m_srcTableName" => "GRAFICO FINCA"
));

$proto26["m_column"]=$obj;
$obj = new SQLGroupByItem($proto26);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="GRAFICO FINCA";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_GRAFICO_FINCA = createSqlQuery_GRAFICO_FINCA();


	
		;

						

$tdataGRAFICO_FINCA[".sqlquery"] = $queryData_GRAFICO_FINCA;

$tableEvents["GRAFICO FINCA"] = new eventsBase;
$tdataGRAFICO_FINCA[".hasEvents"] = false;

?>