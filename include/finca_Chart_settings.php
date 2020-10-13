<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafinca_Chart = array();
	$tdatafinca_Chart[".ShortName"] = "finca_Chart";
	$tdatafinca_Chart[".OwnerID"] = "";
	$tdatafinca_Chart[".OriginalTable"] = "finca";

//	field labels
$fieldLabelsfinca_Chart = array();
$fieldToolTipsfinca_Chart = array();
$pageTitlesfinca_Chart = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsfinca_Chart["Spanish"] = array();
	$fieldToolTipsfinca_Chart["Spanish"] = array();
	$pageTitlesfinca_Chart["Spanish"] = array();
	$fieldLabelsfinca_Chart["Spanish"]["VEREDA"] = "VEREDA";
	$fieldToolTipsfinca_Chart["Spanish"]["VEREDA"] = "";
	$fieldLabelsfinca_Chart["Spanish"]["LINEA_PRINCIPAL"] = "LINEA PRINCIPAL";
	$fieldToolTipsfinca_Chart["Spanish"]["LINEA_PRINCIPAL"] = "";
	$fieldLabelsfinca_Chart["Spanish"]["AREA_FINCA_TOTAL"] = "AREA FINCA TOTAL";
	$fieldToolTipsfinca_Chart["Spanish"]["AREA_FINCA_TOTAL"] = "";
	$fieldLabelsfinca_Chart["Spanish"]["LINEA"] = "LINEA";
	$fieldToolTipsfinca_Chart["Spanish"]["LINEA"] = "";
	$fieldLabelsfinca_Chart["Spanish"]["AREA_SIN_OCUPAR"] = "AREA SIN OCUPAR";
	$fieldToolTipsfinca_Chart["Spanish"]["AREA_SIN_OCUPAR"] = "";
	$fieldLabelsfinca_Chart["Spanish"]["ANNO"] = "ANNO";
	$fieldToolTipsfinca_Chart["Spanish"]["ANNO"] = "";
	if (count($fieldToolTipsfinca_Chart["Spanish"]))
		$tdatafinca_Chart[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfinca_Chart[""] = array();
	$fieldToolTipsfinca_Chart[""] = array();
	$pageTitlesfinca_Chart[""] = array();
	$fieldLabelsfinca_Chart[""]["VEREDA"] = "VEREDA";
	$fieldToolTipsfinca_Chart[""]["VEREDA"] = "";
	$fieldLabelsfinca_Chart[""]["LINEA_PRINCIPAL"] = "LINEA PRINCIPAL";
	$fieldToolTipsfinca_Chart[""]["LINEA_PRINCIPAL"] = "";
	$fieldLabelsfinca_Chart[""]["AREA_FINCA_TOTAL"] = "AREA FINCA TOTAL";
	$fieldToolTipsfinca_Chart[""]["AREA_FINCA_TOTAL"] = "";
	$fieldLabelsfinca_Chart[""]["LINEA"] = "LINEA";
	$fieldToolTipsfinca_Chart[""]["LINEA"] = "";
	$fieldLabelsfinca_Chart[""]["AREA_SIN_OCUPAR"] = "AREA SIN OCUPAR";
	$fieldToolTipsfinca_Chart[""]["AREA_SIN_OCUPAR"] = "";
	$fieldLabelsfinca_Chart[""]["ANNO"] = "ANNO";
	$fieldToolTipsfinca_Chart[""]["ANNO"] = "";
	if (count($fieldToolTipsfinca_Chart[""]))
		$tdatafinca_Chart[".isUseToolTips"] = true;
}


	$tdatafinca_Chart[".NCSearch"] = true;

	$tdatafinca_Chart[".ChartRefreshTime"] = 0;


$tdatafinca_Chart[".shortTableName"] = "finca_Chart";
$tdatafinca_Chart[".nSecOptions"] = 0;
$tdatafinca_Chart[".recsPerRowPrint"] = 1;
$tdatafinca_Chart[".mainTableOwnerID"] = "";
$tdatafinca_Chart[".moveNext"] = 1;
$tdatafinca_Chart[".entityType"] = 3;

$tdatafinca_Chart[".strOriginalTableName"] = "finca";

	



$tdatafinca_Chart[".showAddInPopup"] = false;

$tdatafinca_Chart[".showEditInPopup"] = false;

$tdatafinca_Chart[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafinca_Chart[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafinca_Chart[".fieldsForRegister"] = array();

$tdatafinca_Chart[".listAjax"] = false;

	$tdatafinca_Chart[".audit"] = false;

	$tdatafinca_Chart[".locking"] = false;


$tdatafinca_Chart[".add"] = true;
$tdatafinca_Chart[".afterAddAction"] = 1;
$tdatafinca_Chart[".closePopupAfterAdd"] = 1;
$tdatafinca_Chart[".afterAddActionDetTable"] = "";

$tdatafinca_Chart[".list"] = true;






$tdatafinca_Chart[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatafinca_Chart[".searchSaving"] = false;
//

$tdatafinca_Chart[".showSearchPanel"] = true;
		$tdatafinca_Chart[".flexibleSearch"] = true;

$tdatafinca_Chart[".isUseAjaxSuggest"] = true;




$tdatafinca_Chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafinca_Chart[".isUseTimeForSearch"] = false;



$tdatafinca_Chart[".badgeColor"] = "1E90FF";


$tdatafinca_Chart[".allSearchFields"] = array();
$tdatafinca_Chart[".filterFields"] = array();
$tdatafinca_Chart[".requiredSearchFields"] = array();

$tdatafinca_Chart[".allSearchFields"][] = "VEREDA";
	$tdatafinca_Chart[".allSearchFields"][] = "AREA_FINCA_TOTAL";
	$tdatafinca_Chart[".allSearchFields"][] = "LINEA_PRINCIPAL";
	$tdatafinca_Chart[".allSearchFields"][] = "LINEA";
	$tdatafinca_Chart[".allSearchFields"][] = "AREA_SIN_OCUPAR";
	$tdatafinca_Chart[".allSearchFields"][] = "ANNO";
	

$tdatafinca_Chart[".googleLikeFields"] = array();
$tdatafinca_Chart[".googleLikeFields"][] = "VEREDA";
$tdatafinca_Chart[".googleLikeFields"][] = "AREA_FINCA_TOTAL";
$tdatafinca_Chart[".googleLikeFields"][] = "LINEA_PRINCIPAL";
$tdatafinca_Chart[".googleLikeFields"][] = "LINEA";
$tdatafinca_Chart[".googleLikeFields"][] = "AREA_SIN_OCUPAR";
$tdatafinca_Chart[".googleLikeFields"][] = "ANNO";


$tdatafinca_Chart[".advSearchFields"] = array();
$tdatafinca_Chart[".advSearchFields"][] = "VEREDA";
$tdatafinca_Chart[".advSearchFields"][] = "AREA_FINCA_TOTAL";
$tdatafinca_Chart[".advSearchFields"][] = "LINEA_PRINCIPAL";
$tdatafinca_Chart[".advSearchFields"][] = "LINEA";
$tdatafinca_Chart[".advSearchFields"][] = "AREA_SIN_OCUPAR";
$tdatafinca_Chart[".advSearchFields"][] = "ANNO";

$tdatafinca_Chart[".tableType"] = "chart";

$tdatafinca_Chart[".printerPageOrientation"] = 0;
$tdatafinca_Chart[".nPrinterPageScale"] = 100;

$tdatafinca_Chart[".nPrinterSplitRecords"] = 40;

$tdatafinca_Chart[".nPrinterPDFSplitRecords"] = 40;



$tdatafinca_Chart[".geocodingEnabled"] = false;



// chart settings
$tdatafinca_Chart[".chartType"] = "2DColumn";
// end of chart settings


$tdatafinca_Chart[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafinca_Chart[".strOrderBy"] = $tstrOrderBy;

$tdatafinca_Chart[".orderindexes"] = array();

$tdatafinca_Chart[".sqlHead"] = "SELECT  DISTINCT VEREDA,  SUM(AREA_FINCA) AS AREA_FINCA_TOTAL,  LINEA_PRINCIPAL,  SUM(`AREA_ L_P`) AS LINEA,  (AREA_FINCA-`AREA_ L_P`)AS AREA_SIN_OCUPAR,  `AÑO` AS ANNO";
$tdatafinca_Chart[".sqlFrom"] = "FROM finca";
$tdatafinca_Chart[".sqlWhereExpr"] = "";
$tdatafinca_Chart[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafinca_Chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafinca_Chart[".arrGroupsPerPage"] = $arrGPP;

$tdatafinca_Chart[".highlightSearchResults"] = true;

$tableKeysfinca_Chart = array();
$tdatafinca_Chart[".Keys"] = $tableKeysfinca_Chart;

$tdatafinca_Chart[".listFields"] = array();
$tdatafinca_Chart[".listFields"][] = "VEREDA";
$tdatafinca_Chart[".listFields"][] = "AREA_FINCA_TOTAL";
$tdatafinca_Chart[".listFields"][] = "LINEA_PRINCIPAL";
$tdatafinca_Chart[".listFields"][] = "LINEA";
$tdatafinca_Chart[".listFields"][] = "AREA_SIN_OCUPAR";
$tdatafinca_Chart[".listFields"][] = "ANNO";

$tdatafinca_Chart[".hideMobileList"] = array();


$tdatafinca_Chart[".viewFields"] = array();
$tdatafinca_Chart[".viewFields"][] = "VEREDA";
$tdatafinca_Chart[".viewFields"][] = "AREA_FINCA_TOTAL";
$tdatafinca_Chart[".viewFields"][] = "LINEA_PRINCIPAL";
$tdatafinca_Chart[".viewFields"][] = "LINEA";
$tdatafinca_Chart[".viewFields"][] = "AREA_SIN_OCUPAR";
$tdatafinca_Chart[".viewFields"][] = "ANNO";

$tdatafinca_Chart[".addFields"] = array();
$tdatafinca_Chart[".addFields"][] = "VEREDA";
$tdatafinca_Chart[".addFields"][] = "LINEA_PRINCIPAL";

$tdatafinca_Chart[".masterListFields"] = array();
$tdatafinca_Chart[".masterListFields"][] = "VEREDA";
$tdatafinca_Chart[".masterListFields"][] = "AREA_FINCA_TOTAL";
$tdatafinca_Chart[".masterListFields"][] = "LINEA_PRINCIPAL";
$tdatafinca_Chart[".masterListFields"][] = "LINEA";
$tdatafinca_Chart[".masterListFields"][] = "AREA_SIN_OCUPAR";
$tdatafinca_Chart[".masterListFields"][] = "ANNO";

$tdatafinca_Chart[".inlineAddFields"] = array();
$tdatafinca_Chart[".inlineAddFields"][] = "VEREDA";
$tdatafinca_Chart[".inlineAddFields"][] = "LINEA_PRINCIPAL";

$tdatafinca_Chart[".editFields"] = array();
$tdatafinca_Chart[".editFields"][] = "VEREDA";
$tdatafinca_Chart[".editFields"][] = "LINEA_PRINCIPAL";

$tdatafinca_Chart[".inlineEditFields"] = array();
$tdatafinca_Chart[".inlineEditFields"][] = "VEREDA";
$tdatafinca_Chart[".inlineEditFields"][] = "LINEA_PRINCIPAL";

$tdatafinca_Chart[".exportFields"] = array();
$tdatafinca_Chart[".exportFields"][] = "VEREDA";
$tdatafinca_Chart[".exportFields"][] = "AREA_FINCA_TOTAL";
$tdatafinca_Chart[".exportFields"][] = "LINEA_PRINCIPAL";
$tdatafinca_Chart[".exportFields"][] = "LINEA";
$tdatafinca_Chart[".exportFields"][] = "AREA_SIN_OCUPAR";
$tdatafinca_Chart[".exportFields"][] = "ANNO";

$tdatafinca_Chart[".importFields"] = array();
$tdatafinca_Chart[".importFields"][] = "VEREDA";
$tdatafinca_Chart[".importFields"][] = "AREA_FINCA_TOTAL";
$tdatafinca_Chart[".importFields"][] = "LINEA_PRINCIPAL";
$tdatafinca_Chart[".importFields"][] = "LINEA";
$tdatafinca_Chart[".importFields"][] = "AREA_SIN_OCUPAR";
$tdatafinca_Chart[".importFields"][] = "ANNO";

$tdatafinca_Chart[".printFields"] = array();
$tdatafinca_Chart[".printFields"][] = "VEREDA";
$tdatafinca_Chart[".printFields"][] = "AREA_FINCA_TOTAL";
$tdatafinca_Chart[".printFields"][] = "LINEA_PRINCIPAL";
$tdatafinca_Chart[".printFields"][] = "LINEA";
$tdatafinca_Chart[".printFields"][] = "AREA_SIN_OCUPAR";
$tdatafinca_Chart[".printFields"][] = "ANNO";

//	VEREDA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "VEREDA";
	$fdata["GoodName"] = "VEREDA";
	$fdata["ownerTable"] = "finca";
	$fdata["Label"] = GetFieldLabel("finca_Chart","VEREDA");
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




	$tdatafinca_Chart["VEREDA"] = $fdata;
//	AREA_FINCA_TOTAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "AREA_FINCA_TOTAL";
	$fdata["GoodName"] = "AREA_FINCA_TOTAL";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("finca_Chart","AREA_FINCA_TOTAL");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AREA_FINCA_TOTAL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(AREA_FINCA)";

	
	
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




	$tdatafinca_Chart["AREA_FINCA_TOTAL"] = $fdata;
//	LINEA_PRINCIPAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "LINEA_PRINCIPAL";
	$fdata["GoodName"] = "LINEA_PRINCIPAL";
	$fdata["ownerTable"] = "finca";
	$fdata["Label"] = GetFieldLabel("finca_Chart","LINEA_PRINCIPAL");
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




	$tdatafinca_Chart["LINEA_PRINCIPAL"] = $fdata;
//	LINEA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "LINEA";
	$fdata["GoodName"] = "LINEA";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("finca_Chart","LINEA");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LINEA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(`AREA_ L_P`)";

	
	
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




	$tdatafinca_Chart["LINEA"] = $fdata;
//	AREA_SIN_OCUPAR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "AREA_SIN_OCUPAR";
	$fdata["GoodName"] = "AREA_SIN_OCUPAR";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("finca_Chart","AREA_SIN_OCUPAR");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AREA_SIN_OCUPAR";

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




	$tdatafinca_Chart["AREA_SIN_OCUPAR"] = $fdata;
//	ANNO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ANNO";
	$fdata["GoodName"] = "ANNO";
	$fdata["ownerTable"] = "finca";
	$fdata["Label"] = GetFieldLabel("finca_Chart","ANNO");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
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




	$tdatafinca_Chart["ANNO"] = $fdata;

	$tdatafinca_Chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">finca Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdatafinca_Chart[".chartXml"] .= '<attr value="0">
			<attr value="name">AREA_FINCA_TOTAL</attr>';
	$tdatafinca_Chart[".chartXml"] .= '</attr>';
	$tdatafinca_Chart[".chartXml"] .= '<attr value="1">
			<attr value="name">AREA_SIN_OCUPAR</attr>';
	$tdatafinca_Chart[".chartXml"] .= '</attr>';
	$tdatafinca_Chart[".chartXml"] .= '<attr value="2">
			<attr value="name">LINEA</attr>';
	$tdatafinca_Chart[".chartXml"] .= '</attr>';
	$tdatafinca_Chart[".chartXml"] .= '<attr value="3">
		<attr value="name">VEREDA</attr>
	</attr>';
	$tdatafinca_Chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatafinca_Chart[".chartXml"] .= '<attr value="head">'.xmlencode("ESTADISTICA POR VEREDA").'</attr>
<attr value="foot">'.xmlencode("AREA OCUPADA vs. AREA SIN USO").'</attr>
<attr value="y_axis_label">'.xmlencode("").'</attr>


<attr value="slegend">true</attr>
<attr value="sgrid">false</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">0</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>';
$tdatafinca_Chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatafinca_Chart[".chartXml"] .= '<attr value="0">
		<attr value="name">VEREDA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("finca_Chart","VEREDA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatafinca_Chart[".chartXml"] .= '<attr value="1">
		<attr value="name">AREA_FINCA_TOTAL</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("finca_Chart","AREA_FINCA_TOTAL")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatafinca_Chart[".chartXml"] .= '<attr value="2">
		<attr value="name">LINEA_PRINCIPAL</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("finca_Chart","LINEA_PRINCIPAL")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatafinca_Chart[".chartXml"] .= '<attr value="3">
		<attr value="name">LINEA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("finca_Chart","LINEA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatafinca_Chart[".chartXml"] .= '<attr value="4">
		<attr value="name">AREA_SIN_OCUPAR</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("finca_Chart","AREA_SIN_OCUPAR")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatafinca_Chart[".chartXml"] .= '<attr value="5">
		<attr value="name">ANNO</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("finca_Chart","ANNO")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatafinca_Chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">finca Chart</attr>
<attr value="short_table_name">finca_Chart</attr>
</attr>

</chart>';

$tables_data["finca Chart"]=&$tdatafinca_Chart;
$field_labels["finca_Chart"] = &$fieldLabelsfinca_Chart;
$fieldToolTips["finca_Chart"] = &$fieldToolTipsfinca_Chart;
$page_titles["finca_Chart"] = &$pageTitlesfinca_Chart;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["finca Chart"] = array();
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
		
	$detailsTablesData["finca Chart"][$dIndex] = $detailsParam;

	
		$detailsTablesData["finca Chart"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["finca Chart"][$dIndex]["masterKeys"][]="PROPIETARIO_CEDULA";

				$detailsTablesData["finca Chart"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["finca Chart"][$dIndex]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
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
		
	$detailsTablesData["finca Chart"][$dIndex] = $detailsParam;

	
		$detailsTablesData["finca Chart"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["finca Chart"][$dIndex]["masterKeys"][]="PROPIETARIO_CEDULA";

				$detailsTablesData["finca Chart"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["finca Chart"][$dIndex]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
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
		
	$detailsTablesData["finca Chart"][$dIndex] = $detailsParam;

	
		$detailsTablesData["finca Chart"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["finca Chart"][$dIndex]["masterKeys"][]="PROPIETARIO_CEDULA";

				$detailsTablesData["finca Chart"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["finca Chart"][$dIndex]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
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
		
	$detailsTablesData["finca Chart"][$dIndex] = $detailsParam;

	
		$detailsTablesData["finca Chart"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["finca Chart"][$dIndex]["masterKeys"][]="PROPIETARIO_CEDULA";

				$detailsTablesData["finca Chart"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["finca Chart"][$dIndex]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
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
		
	$detailsTablesData["finca Chart"][$dIndex] = $detailsParam;

	
		$detailsTablesData["finca Chart"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["finca Chart"][$dIndex]["masterKeys"][]="PROPIETARIO_CEDULA";

				$detailsTablesData["finca Chart"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["finca Chart"][$dIndex]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
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
		
	$detailsTablesData["finca Chart"][$dIndex] = $detailsParam;

	
		$detailsTablesData["finca Chart"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["finca Chart"][$dIndex]["masterKeys"][]="PROPIETARIO_CEDULA";

				$detailsTablesData["finca Chart"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["finca Chart"][$dIndex]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";

// tables which are master tables for current table (detail)
$masterTablesData["finca Chart"] = array();


	
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
					$masterTablesData["finca Chart"][0] = $masterParams;
				$masterTablesData["finca Chart"][0]["masterKeys"] = array();
	$masterTablesData["finca Chart"][0]["masterKeys"][]="CEDULA";
				$masterTablesData["finca Chart"][0]["detailKeys"] = array();
	$masterTablesData["finca Chart"][0]["detailKeys"][]="PROPIETARIO_CEDULA";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_finca_Chart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT  DISTINCT";
$proto0["m_strFieldList"] = "VEREDA,  SUM(AREA_FINCA) AS AREA_FINCA_TOTAL,  LINEA_PRINCIPAL,  SUM(`AREA_ L_P`) AS LINEA,  (AREA_FINCA-`AREA_ L_P`)AS AREA_SIN_OCUPAR,  `AÑO` AS ANNO";
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
	"m_srcTableName" => "finca Chart"
));

$proto6["m_sql"] = "VEREDA";
$proto6["m_srcTableName"] = "finca Chart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$proto9=array();
$proto9["m_functiontype"] = "SQLF_SUM";
$proto9["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "AREA_FINCA",
	"m_strTable" => "finca",
	"m_srcTableName" => "finca Chart"
));

$proto9["m_arguments"][]=$obj;
$proto9["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto9);

$proto8["m_sql"] = "SUM(AREA_FINCA)";
$proto8["m_srcTableName"] = "finca Chart";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "AREA_FINCA_TOTAL";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "LINEA_PRINCIPAL",
	"m_strTable" => "finca",
	"m_srcTableName" => "finca Chart"
));

$proto11["m_sql"] = "LINEA_PRINCIPAL";
$proto11["m_srcTableName"] = "finca Chart";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$proto14=array();
$proto14["m_functiontype"] = "SQLF_SUM";
$proto14["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "AREA_ L_P",
	"m_strTable" => "finca",
	"m_srcTableName" => "finca Chart"
));

$proto14["m_arguments"][]=$obj;
$proto14["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto14);

$proto13["m_sql"] = "SUM(`AREA_ L_P`)";
$proto13["m_srcTableName"] = "finca Chart";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "LINEA";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(AREA_FINCA-`AREA_ L_P`)"
));

$proto16["m_sql"] = "(AREA_FINCA-`AREA_ L_P`)";
$proto16["m_srcTableName"] = "finca Chart";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "AREA_SIN_OCUPAR";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "finca",
	"m_srcTableName" => "finca Chart"
));

$proto18["m_sql"] = "`AÑO`";
$proto18["m_srcTableName"] = "finca Chart";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "ANNO";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "finca";
$proto21["m_srcTableName"] = "finca Chart";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "ID";
$proto21["m_columns"][] = "PROPIETARIO_CEDULA";
$proto21["m_columns"][] = "NOMBRE";
$proto21["m_columns"][] = "VEREDA";
$proto21["m_columns"][] = "FINCA";
$proto21["m_columns"][] = "ALTURA";
$proto21["m_columns"][] = "GEOREFERENCIA";
$proto21["m_columns"][] = "AREA_FINCA";
$proto21["m_columns"][] = "LINEA_PRINCIPAL";
$proto21["m_columns"][] = "AREA_ L_P";
$proto21["m_columns"][] = "AÑO";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "finca";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "finca Chart";
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
	"m_strName" => "VEREDA",
	"m_strTable" => "finca",
	"m_srcTableName" => "finca Chart"
));

$proto24["m_column"]=$obj;
$obj = new SQLGroupByItem($proto24);

$proto0["m_groupby"][]=$obj;
												$proto26=array();
						$obj = new SQLField(array(
	"m_strName" => "FINCA",
	"m_strTable" => "finca",
	"m_srcTableName" => "finca Chart"
));

$proto26["m_column"]=$obj;
$obj = new SQLGroupByItem($proto26);

$proto0["m_groupby"][]=$obj;
												$proto28=array();
						$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "finca",
	"m_srcTableName" => "finca Chart"
));

$proto28["m_column"]=$obj;
$obj = new SQLGroupByItem($proto28);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="finca Chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_finca_Chart = createSqlQuery_finca_Chart();


	
		;

						

$tdatafinca_Chart[".sqlquery"] = $queryData_finca_Chart;

$tableEvents["finca Chart"] = new eventsBase;
$tdatafinca_Chart[".hasEvents"] = false;

?>