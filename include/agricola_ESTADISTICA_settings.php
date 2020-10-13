<?php
require_once(getabspath("classes/cipherer.php"));




$tdataagricola_ESTADISTICA = array();
	$tdataagricola_ESTADISTICA[".ShortName"] = "agricola_ESTADISTICA";
	$tdataagricola_ESTADISTICA[".OwnerID"] = "";
	$tdataagricola_ESTADISTICA[".OriginalTable"] = "agricola";

//	field labels
$fieldLabelsagricola_ESTADISTICA = array();
$fieldToolTipsagricola_ESTADISTICA = array();
$pageTitlesagricola_ESTADISTICA = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsagricola_ESTADISTICA["Spanish"] = array();
	$fieldToolTipsagricola_ESTADISTICA["Spanish"] = array();
	$pageTitlesagricola_ESTADISTICA["Spanish"] = array();
	$fieldLabelsagricola_ESTADISTICA["Spanish"]["VEREDA"] = "VEREDA";
	$fieldToolTipsagricola_ESTADISTICA["Spanish"]["VEREDA"] = "";
	$fieldLabelsagricola_ESTADISTICA["Spanish"]["FINCA"] = "FINCA";
	$fieldToolTipsagricola_ESTADISTICA["Spanish"]["FINCA"] = "";
	$fieldLabelsagricola_ESTADISTICA["Spanish"]["VARIEDAD"] = "VARIEDAD";
	$fieldToolTipsagricola_ESTADISTICA["Spanish"]["VARIEDAD"] = "";
	$fieldLabelsagricola_ESTADISTICA["Spanish"]["AREA"] = "AREA";
	$fieldToolTipsagricola_ESTADISTICA["Spanish"]["AREA"] = "";
	$fieldLabelsagricola_ESTADISTICA["Spanish"]["A_O"] = "AÑO";
	$fieldToolTipsagricola_ESTADISTICA["Spanish"]["A_O"] = "";
	$fieldLabelsagricola_ESTADISTICA["Spanish"]["PRODUCCION"] = "PRODUCCION";
	$fieldToolTipsagricola_ESTADISTICA["Spanish"]["PRODUCCION"] = "";
	if (count($fieldToolTipsagricola_ESTADISTICA["Spanish"]))
		$tdataagricola_ESTADISTICA[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsagricola_ESTADISTICA[""] = array();
	$fieldToolTipsagricola_ESTADISTICA[""] = array();
	$pageTitlesagricola_ESTADISTICA[""] = array();
	$fieldLabelsagricola_ESTADISTICA[""]["VEREDA"] = "VEREDA";
	$fieldToolTipsagricola_ESTADISTICA[""]["VEREDA"] = "";
	$fieldLabelsagricola_ESTADISTICA[""]["FINCA"] = "FINCA";
	$fieldToolTipsagricola_ESTADISTICA[""]["FINCA"] = "";
	$fieldLabelsagricola_ESTADISTICA[""]["VARIEDAD"] = "VARIEDAD";
	$fieldToolTipsagricola_ESTADISTICA[""]["VARIEDAD"] = "";
	$fieldLabelsagricola_ESTADISTICA[""]["AREA"] = "AREA";
	$fieldToolTipsagricola_ESTADISTICA[""]["AREA"] = "";
	$fieldLabelsagricola_ESTADISTICA[""]["A_O"] = "AÑO";
	$fieldToolTipsagricola_ESTADISTICA[""]["A_O"] = "";
	$fieldLabelsagricola_ESTADISTICA[""]["PRODUCCION"] = "PRODUCCION";
	$fieldToolTipsagricola_ESTADISTICA[""]["PRODUCCION"] = "";
	if (count($fieldToolTipsagricola_ESTADISTICA[""]))
		$tdataagricola_ESTADISTICA[".isUseToolTips"] = true;
}


	$tdataagricola_ESTADISTICA[".NCSearch"] = true;

	$tdataagricola_ESTADISTICA[".ChartRefreshTime"] = 0;


$tdataagricola_ESTADISTICA[".shortTableName"] = "agricola_ESTADISTICA";
$tdataagricola_ESTADISTICA[".nSecOptions"] = 0;
$tdataagricola_ESTADISTICA[".recsPerRowPrint"] = 1;
$tdataagricola_ESTADISTICA[".mainTableOwnerID"] = "";
$tdataagricola_ESTADISTICA[".moveNext"] = 1;
$tdataagricola_ESTADISTICA[".entityType"] = 3;

$tdataagricola_ESTADISTICA[".strOriginalTableName"] = "agricola";

	



$tdataagricola_ESTADISTICA[".showAddInPopup"] = false;

$tdataagricola_ESTADISTICA[".showEditInPopup"] = false;

$tdataagricola_ESTADISTICA[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataagricola_ESTADISTICA[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataagricola_ESTADISTICA[".fieldsForRegister"] = array();

$tdataagricola_ESTADISTICA[".listAjax"] = false;

	$tdataagricola_ESTADISTICA[".audit"] = false;

	$tdataagricola_ESTADISTICA[".locking"] = false;


$tdataagricola_ESTADISTICA[".add"] = true;
$tdataagricola_ESTADISTICA[".afterAddAction"] = 1;
$tdataagricola_ESTADISTICA[".closePopupAfterAdd"] = 1;
$tdataagricola_ESTADISTICA[".afterAddActionDetTable"] = "";

$tdataagricola_ESTADISTICA[".list"] = true;






$tdataagricola_ESTADISTICA[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataagricola_ESTADISTICA[".searchSaving"] = false;
//

$tdataagricola_ESTADISTICA[".showSearchPanel"] = true;
		$tdataagricola_ESTADISTICA[".flexibleSearch"] = true;

$tdataagricola_ESTADISTICA[".isUseAjaxSuggest"] = true;




$tdataagricola_ESTADISTICA[".addPageEvents"] = false;

// use timepicker for search panel
$tdataagricola_ESTADISTICA[".isUseTimeForSearch"] = false;



$tdataagricola_ESTADISTICA[".badgeColor"] = "1E90FF";


$tdataagricola_ESTADISTICA[".allSearchFields"] = array();
$tdataagricola_ESTADISTICA[".filterFields"] = array();
$tdataagricola_ESTADISTICA[".requiredSearchFields"] = array();

$tdataagricola_ESTADISTICA[".allSearchFields"][] = "VEREDA";
	$tdataagricola_ESTADISTICA[".allSearchFields"][] = "FINCA";
	$tdataagricola_ESTADISTICA[".allSearchFields"][] = "VARIEDAD";
	$tdataagricola_ESTADISTICA[".allSearchFields"][] = "AREA";
	$tdataagricola_ESTADISTICA[".allSearchFields"][] = "PRODUCCION";
	$tdataagricola_ESTADISTICA[".allSearchFields"][] = "AÑO";
	

$tdataagricola_ESTADISTICA[".googleLikeFields"] = array();
$tdataagricola_ESTADISTICA[".googleLikeFields"][] = "VEREDA";
$tdataagricola_ESTADISTICA[".googleLikeFields"][] = "FINCA";
$tdataagricola_ESTADISTICA[".googleLikeFields"][] = "VARIEDAD";
$tdataagricola_ESTADISTICA[".googleLikeFields"][] = "AREA";
$tdataagricola_ESTADISTICA[".googleLikeFields"][] = "PRODUCCION";
$tdataagricola_ESTADISTICA[".googleLikeFields"][] = "AÑO";


$tdataagricola_ESTADISTICA[".advSearchFields"] = array();
$tdataagricola_ESTADISTICA[".advSearchFields"][] = "VEREDA";
$tdataagricola_ESTADISTICA[".advSearchFields"][] = "FINCA";
$tdataagricola_ESTADISTICA[".advSearchFields"][] = "VARIEDAD";
$tdataagricola_ESTADISTICA[".advSearchFields"][] = "AREA";
$tdataagricola_ESTADISTICA[".advSearchFields"][] = "PRODUCCION";
$tdataagricola_ESTADISTICA[".advSearchFields"][] = "AÑO";

$tdataagricola_ESTADISTICA[".tableType"] = "chart";

$tdataagricola_ESTADISTICA[".printerPageOrientation"] = 0;
$tdataagricola_ESTADISTICA[".nPrinterPageScale"] = 100;

$tdataagricola_ESTADISTICA[".nPrinterSplitRecords"] = 40;

$tdataagricola_ESTADISTICA[".nPrinterPDFSplitRecords"] = 40;



$tdataagricola_ESTADISTICA[".geocodingEnabled"] = false;



// chart settings
$tdataagricola_ESTADISTICA[".chartType"] = "2DColumn";
// end of chart settings


$tdataagricola_ESTADISTICA[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataagricola_ESTADISTICA[".strOrderBy"] = $tstrOrderBy;

$tdataagricola_ESTADISTICA[".orderindexes"] = array();

$tdataagricola_ESTADISTICA[".sqlHead"] = "SELECT  DISTINCT VEREDA,  FINCA,  VARIEDAD,  SUM(AREA) AS AREA,  SUM(PRODUCCION_ANUAL) AS PRODUCCION,  `AÑO`";
$tdataagricola_ESTADISTICA[".sqlFrom"] = "FROM agricola";
$tdataagricola_ESTADISTICA[".sqlWhereExpr"] = "";
$tdataagricola_ESTADISTICA[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataagricola_ESTADISTICA[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataagricola_ESTADISTICA[".arrGroupsPerPage"] = $arrGPP;

$tdataagricola_ESTADISTICA[".highlightSearchResults"] = true;

$tableKeysagricola_ESTADISTICA = array();
$tdataagricola_ESTADISTICA[".Keys"] = $tableKeysagricola_ESTADISTICA;

$tdataagricola_ESTADISTICA[".listFields"] = array();
$tdataagricola_ESTADISTICA[".listFields"][] = "VEREDA";
$tdataagricola_ESTADISTICA[".listFields"][] = "FINCA";
$tdataagricola_ESTADISTICA[".listFields"][] = "VARIEDAD";
$tdataagricola_ESTADISTICA[".listFields"][] = "AREA";
$tdataagricola_ESTADISTICA[".listFields"][] = "PRODUCCION";
$tdataagricola_ESTADISTICA[".listFields"][] = "AÑO";

$tdataagricola_ESTADISTICA[".hideMobileList"] = array();


$tdataagricola_ESTADISTICA[".viewFields"] = array();
$tdataagricola_ESTADISTICA[".viewFields"][] = "VEREDA";
$tdataagricola_ESTADISTICA[".viewFields"][] = "FINCA";
$tdataagricola_ESTADISTICA[".viewFields"][] = "VARIEDAD";
$tdataagricola_ESTADISTICA[".viewFields"][] = "AREA";
$tdataagricola_ESTADISTICA[".viewFields"][] = "PRODUCCION";
$tdataagricola_ESTADISTICA[".viewFields"][] = "AÑO";

$tdataagricola_ESTADISTICA[".addFields"] = array();
$tdataagricola_ESTADISTICA[".addFields"][] = "VEREDA";
$tdataagricola_ESTADISTICA[".addFields"][] = "FINCA";
$tdataagricola_ESTADISTICA[".addFields"][] = "VARIEDAD";
$tdataagricola_ESTADISTICA[".addFields"][] = "AREA";
$tdataagricola_ESTADISTICA[".addFields"][] = "AÑO";

$tdataagricola_ESTADISTICA[".masterListFields"] = array();
$tdataagricola_ESTADISTICA[".masterListFields"][] = "VEREDA";
$tdataagricola_ESTADISTICA[".masterListFields"][] = "FINCA";
$tdataagricola_ESTADISTICA[".masterListFields"][] = "VARIEDAD";
$tdataagricola_ESTADISTICA[".masterListFields"][] = "AREA";
$tdataagricola_ESTADISTICA[".masterListFields"][] = "PRODUCCION";
$tdataagricola_ESTADISTICA[".masterListFields"][] = "AÑO";

$tdataagricola_ESTADISTICA[".inlineAddFields"] = array();
$tdataagricola_ESTADISTICA[".inlineAddFields"][] = "VEREDA";
$tdataagricola_ESTADISTICA[".inlineAddFields"][] = "FINCA";
$tdataagricola_ESTADISTICA[".inlineAddFields"][] = "VARIEDAD";
$tdataagricola_ESTADISTICA[".inlineAddFields"][] = "AREA";
$tdataagricola_ESTADISTICA[".inlineAddFields"][] = "AÑO";

$tdataagricola_ESTADISTICA[".editFields"] = array();
$tdataagricola_ESTADISTICA[".editFields"][] = "VEREDA";
$tdataagricola_ESTADISTICA[".editFields"][] = "FINCA";
$tdataagricola_ESTADISTICA[".editFields"][] = "VARIEDAD";
$tdataagricola_ESTADISTICA[".editFields"][] = "AREA";
$tdataagricola_ESTADISTICA[".editFields"][] = "AÑO";

$tdataagricola_ESTADISTICA[".inlineEditFields"] = array();
$tdataagricola_ESTADISTICA[".inlineEditFields"][] = "VEREDA";
$tdataagricola_ESTADISTICA[".inlineEditFields"][] = "FINCA";
$tdataagricola_ESTADISTICA[".inlineEditFields"][] = "VARIEDAD";
$tdataagricola_ESTADISTICA[".inlineEditFields"][] = "AREA";
$tdataagricola_ESTADISTICA[".inlineEditFields"][] = "AÑO";

$tdataagricola_ESTADISTICA[".exportFields"] = array();
$tdataagricola_ESTADISTICA[".exportFields"][] = "VEREDA";
$tdataagricola_ESTADISTICA[".exportFields"][] = "FINCA";
$tdataagricola_ESTADISTICA[".exportFields"][] = "VARIEDAD";
$tdataagricola_ESTADISTICA[".exportFields"][] = "AREA";
$tdataagricola_ESTADISTICA[".exportFields"][] = "PRODUCCION";
$tdataagricola_ESTADISTICA[".exportFields"][] = "AÑO";

$tdataagricola_ESTADISTICA[".importFields"] = array();
$tdataagricola_ESTADISTICA[".importFields"][] = "VEREDA";
$tdataagricola_ESTADISTICA[".importFields"][] = "FINCA";
$tdataagricola_ESTADISTICA[".importFields"][] = "VARIEDAD";
$tdataagricola_ESTADISTICA[".importFields"][] = "AREA";
$tdataagricola_ESTADISTICA[".importFields"][] = "PRODUCCION";
$tdataagricola_ESTADISTICA[".importFields"][] = "AÑO";

$tdataagricola_ESTADISTICA[".printFields"] = array();
$tdataagricola_ESTADISTICA[".printFields"][] = "VEREDA";
$tdataagricola_ESTADISTICA[".printFields"][] = "FINCA";
$tdataagricola_ESTADISTICA[".printFields"][] = "VARIEDAD";
$tdataagricola_ESTADISTICA[".printFields"][] = "AREA";
$tdataagricola_ESTADISTICA[".printFields"][] = "PRODUCCION";
$tdataagricola_ESTADISTICA[".printFields"][] = "AÑO";

//	VEREDA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "VEREDA";
	$fdata["GoodName"] = "VEREDA";
	$fdata["ownerTable"] = "agricola";
	$fdata["Label"] = GetFieldLabel("agricola_ESTADISTICA","VEREDA");
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




	$tdataagricola_ESTADISTICA["VEREDA"] = $fdata;
//	FINCA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FINCA";
	$fdata["GoodName"] = "FINCA";
	$fdata["ownerTable"] = "agricola";
	$fdata["Label"] = GetFieldLabel("agricola_ESTADISTICA","FINCA");
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




	$tdataagricola_ESTADISTICA["FINCA"] = $fdata;
//	VARIEDAD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "VARIEDAD";
	$fdata["GoodName"] = "VARIEDAD";
	$fdata["ownerTable"] = "agricola";
	$fdata["Label"] = GetFieldLabel("agricola_ESTADISTICA","VARIEDAD");
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
	$edata["LookupValues"][] = "Ahuyama";
	$edata["LookupValues"][] = "Ají";
	$edata["LookupValues"][] = "Aromáticas";
	$edata["LookupValues"][] = "Arveja";
	$edata["LookupValues"][] = "Berenjena";
	$edata["LookupValues"][] = "Cilantro";
	$edata["LookupValues"][] = "Habichuela";
	$edata["LookupValues"][] = "Hortalizas Varias";
	$edata["LookupValues"][] = "Huerta";
	$edata["LookupValues"][] = "Maiz";
	$edata["LookupValues"][] = "Papa";
	$edata["LookupValues"][] = "Perejíl";
	$edata["LookupValues"][] = "Pimentón";
	$edata["LookupValues"][] = "Plátano";
	$edata["LookupValues"][] = "Tomate";
	$edata["LookupValues"][] = "Yuca";
	$edata["LookupValues"][] = "Zanahoria";

	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataagricola_ESTADISTICA["VARIEDAD"] = $fdata;
//	AREA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "AREA";
	$fdata["GoodName"] = "AREA";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("agricola_ESTADISTICA","AREA");
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
	$fdata["FullName"] = "SUM(AREA)";

	
	
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




	$tdataagricola_ESTADISTICA["AREA"] = $fdata;
//	PRODUCCION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "PRODUCCION";
	$fdata["GoodName"] = "PRODUCCION";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("agricola_ESTADISTICA","PRODUCCION");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PRODUCCION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(PRODUCCION_ANUAL)";

	
	
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




	$tdataagricola_ESTADISTICA["PRODUCCION"] = $fdata;
//	AÑO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "AÑO";
	$fdata["GoodName"] = "A_O";
	$fdata["ownerTable"] = "agricola";
	$fdata["Label"] = GetFieldLabel("agricola_ESTADISTICA","A_O");
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




	$tdataagricola_ESTADISTICA["AÑO"] = $fdata;

	$tdataagricola_ESTADISTICA[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">agricola ESTADISTICA</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdataagricola_ESTADISTICA[".chartXml"] .= '<attr value="0">
			<attr value="name">FINCA_PROPIETARIO_CEDULA</attr>';
	$tdataagricola_ESTADISTICA[".chartXml"] .= '</attr>';
	$tdataagricola_ESTADISTICA[".chartXml"] .= '<attr value="1">
		<attr value="name">NOMBRE</attr>
	</attr>';
	$tdataagricola_ESTADISTICA[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdataagricola_ESTADISTICA[".chartXml"] .= '<attr value="head">'.xmlencode("agricola ESTADISTICA").'</attr>
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
$tdataagricola_ESTADISTICA[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdataagricola_ESTADISTICA[".chartXml"] .= '<attr value="0">
		<attr value="name">VEREDA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("agricola_ESTADISTICA","VEREDA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataagricola_ESTADISTICA[".chartXml"] .= '<attr value="1">
		<attr value="name">FINCA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("agricola_ESTADISTICA","FINCA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataagricola_ESTADISTICA[".chartXml"] .= '<attr value="2">
		<attr value="name">VARIEDAD</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("agricola_ESTADISTICA","VARIEDAD")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataagricola_ESTADISTICA[".chartXml"] .= '<attr value="3">
		<attr value="name">AREA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("agricola_ESTADISTICA","AREA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataagricola_ESTADISTICA[".chartXml"] .= '<attr value="4">
		<attr value="name">PRODUCCION</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("agricola_ESTADISTICA","PRODUCCION")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataagricola_ESTADISTICA[".chartXml"] .= '<attr value="5">
		<attr value="name">AÑO</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("agricola_ESTADISTICA","A_O")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdataagricola_ESTADISTICA[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">agricola ESTADISTICA</attr>
<attr value="short_table_name">agricola_ESTADISTICA</attr>
</attr>

</chart>';

$tables_data["agricola ESTADISTICA"]=&$tdataagricola_ESTADISTICA;
$field_labels["agricola_ESTADISTICA"] = &$fieldLabelsagricola_ESTADISTICA;
$fieldToolTips["agricola_ESTADISTICA"] = &$fieldToolTipsagricola_ESTADISTICA;
$page_titles["agricola_ESTADISTICA"] = &$pageTitlesagricola_ESTADISTICA;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["agricola ESTADISTICA"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["agricola ESTADISTICA"] = array();


	
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
					$masterTablesData["agricola ESTADISTICA"][0] = $masterParams;
				$masterTablesData["agricola ESTADISTICA"][0]["masterKeys"] = array();
	$masterTablesData["agricola ESTADISTICA"][0]["masterKeys"][]="PROPIETARIO_CEDULA";
				$masterTablesData["agricola ESTADISTICA"][0]["detailKeys"] = array();
	$masterTablesData["agricola ESTADISTICA"][0]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_agricola_ESTADISTICA()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT  DISTINCT";
$proto0["m_strFieldList"] = "VEREDA,  FINCA,  VARIEDAD,  SUM(AREA) AS AREA,  SUM(PRODUCCION_ANUAL) AS PRODUCCION,  `AÑO`";
$proto0["m_strFrom"] = "FROM agricola";
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
	"m_strTable" => "agricola",
	"m_srcTableName" => "agricola ESTADISTICA"
));

$proto6["m_sql"] = "VEREDA";
$proto6["m_srcTableName"] = "agricola ESTADISTICA";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "FINCA",
	"m_strTable" => "agricola",
	"m_srcTableName" => "agricola ESTADISTICA"
));

$proto8["m_sql"] = "FINCA";
$proto8["m_srcTableName"] = "agricola ESTADISTICA";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "VARIEDAD",
	"m_strTable" => "agricola",
	"m_srcTableName" => "agricola ESTADISTICA"
));

$proto10["m_sql"] = "VARIEDAD";
$proto10["m_srcTableName"] = "agricola ESTADISTICA";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$proto13=array();
$proto13["m_functiontype"] = "SQLF_SUM";
$proto13["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "AREA",
	"m_strTable" => "agricola",
	"m_srcTableName" => "agricola ESTADISTICA"
));

$proto13["m_arguments"][]=$obj;
$proto13["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto13);

$proto12["m_sql"] = "SUM(AREA)";
$proto12["m_srcTableName"] = "agricola ESTADISTICA";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "AREA";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$proto16=array();
$proto16["m_functiontype"] = "SQLF_SUM";
$proto16["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "PRODUCCION_ANUAL",
	"m_strTable" => "agricola",
	"m_srcTableName" => "agricola ESTADISTICA"
));

$proto16["m_arguments"][]=$obj;
$proto16["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto16);

$proto15["m_sql"] = "SUM(PRODUCCION_ANUAL)";
$proto15["m_srcTableName"] = "agricola ESTADISTICA";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "PRODUCCION";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "agricola",
	"m_srcTableName" => "agricola ESTADISTICA"
));

$proto18["m_sql"] = "`AÑO`";
$proto18["m_srcTableName"] = "agricola ESTADISTICA";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "agricola";
$proto21["m_srcTableName"] = "agricola ESTADISTICA";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "ID";
$proto21["m_columns"][] = "FINCA_PROPIETARIO_CEDULA";
$proto21["m_columns"][] = "NOMBRE";
$proto21["m_columns"][] = "VEREDA";
$proto21["m_columns"][] = "FINCA";
$proto21["m_columns"][] = "VARIEDAD";
$proto21["m_columns"][] = "AREA";
$proto21["m_columns"][] = "PRODUCCION_ANUAL";
$proto21["m_columns"][] = "AÑO";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "agricola";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "agricola ESTADISTICA";
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
	"m_strTable" => "agricola",
	"m_srcTableName" => "agricola ESTADISTICA"
));

$proto24["m_column"]=$obj;
$obj = new SQLGroupByItem($proto24);

$proto0["m_groupby"][]=$obj;
												$proto26=array();
						$obj = new SQLField(array(
	"m_strName" => "FINCA",
	"m_strTable" => "agricola",
	"m_srcTableName" => "agricola ESTADISTICA"
));

$proto26["m_column"]=$obj;
$obj = new SQLGroupByItem($proto26);

$proto0["m_groupby"][]=$obj;
												$proto28=array();
						$obj = new SQLField(array(
	"m_strName" => "VARIEDAD",
	"m_strTable" => "agricola",
	"m_srcTableName" => "agricola ESTADISTICA"
));

$proto28["m_column"]=$obj;
$obj = new SQLGroupByItem($proto28);

$proto0["m_groupby"][]=$obj;
												$proto30=array();
						$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "agricola",
	"m_srcTableName" => "agricola ESTADISTICA"
));

$proto30["m_column"]=$obj;
$obj = new SQLGroupByItem($proto30);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="agricola ESTADISTICA";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_agricola_ESTADISTICA = createSqlQuery_agricola_ESTADISTICA();


	
		;

						

$tdataagricola_ESTADISTICA[".sqlquery"] = $queryData_agricola_ESTADISTICA;

$tableEvents["agricola ESTADISTICA"] = new eventsBase;
$tdataagricola_ESTADISTICA[".hasEvents"] = false;

?>