<?php
require_once(getabspath("classes/cipherer.php"));




$tdataagricola_Chart = array();
	$tdataagricola_Chart[".ShortName"] = "agricola_Chart";
	$tdataagricola_Chart[".OwnerID"] = "";
	$tdataagricola_Chart[".OriginalTable"] = "agricola";

//	field labels
$fieldLabelsagricola_Chart = array();
$fieldToolTipsagricola_Chart = array();
$pageTitlesagricola_Chart = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsagricola_Chart["Spanish"] = array();
	$fieldToolTipsagricola_Chart["Spanish"] = array();
	$pageTitlesagricola_Chart["Spanish"] = array();
	$fieldLabelsagricola_Chart["Spanish"]["VEREDA"] = "VEREDA";
	$fieldToolTipsagricola_Chart["Spanish"]["VEREDA"] = "";
	$fieldLabelsagricola_Chart["Spanish"]["VARIEDAD"] = "VARIEDAD";
	$fieldToolTipsagricola_Chart["Spanish"]["VARIEDAD"] = "";
	$fieldLabelsagricola_Chart["Spanish"]["AREA"] = "AREA";
	$fieldToolTipsagricola_Chart["Spanish"]["AREA"] = "";
	$fieldLabelsagricola_Chart["Spanish"]["A_O"] = "AÑO";
	$fieldToolTipsagricola_Chart["Spanish"]["A_O"] = "";
	$fieldLabelsagricola_Chart["Spanish"]["PRODUCCION"] = "PRODUCCION";
	$fieldToolTipsagricola_Chart["Spanish"]["PRODUCCION"] = "";
	if (count($fieldToolTipsagricola_Chart["Spanish"]))
		$tdataagricola_Chart[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsagricola_Chart[""] = array();
	$fieldToolTipsagricola_Chart[""] = array();
	$pageTitlesagricola_Chart[""] = array();
	$fieldLabelsagricola_Chart[""]["VEREDA"] = "VEREDA";
	$fieldToolTipsagricola_Chart[""]["VEREDA"] = "";
	$fieldLabelsagricola_Chart[""]["VARIEDAD"] = "VARIEDAD";
	$fieldToolTipsagricola_Chart[""]["VARIEDAD"] = "";
	$fieldLabelsagricola_Chart[""]["AREA"] = "AREA";
	$fieldToolTipsagricola_Chart[""]["AREA"] = "";
	$fieldLabelsagricola_Chart[""]["A_O"] = "AÑO";
	$fieldToolTipsagricola_Chart[""]["A_O"] = "";
	$fieldLabelsagricola_Chart[""]["PRODUCCION"] = "PRODUCCION";
	$fieldToolTipsagricola_Chart[""]["PRODUCCION"] = "";
	if (count($fieldToolTipsagricola_Chart[""]))
		$tdataagricola_Chart[".isUseToolTips"] = true;
}


	$tdataagricola_Chart[".NCSearch"] = true;

	$tdataagricola_Chart[".ChartRefreshTime"] = 0;


$tdataagricola_Chart[".shortTableName"] = "agricola_Chart";
$tdataagricola_Chart[".nSecOptions"] = 0;
$tdataagricola_Chart[".recsPerRowPrint"] = 1;
$tdataagricola_Chart[".mainTableOwnerID"] = "";
$tdataagricola_Chart[".moveNext"] = 1;
$tdataagricola_Chart[".entityType"] = 3;

$tdataagricola_Chart[".strOriginalTableName"] = "agricola";

	



$tdataagricola_Chart[".showAddInPopup"] = false;

$tdataagricola_Chart[".showEditInPopup"] = false;

$tdataagricola_Chart[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataagricola_Chart[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataagricola_Chart[".fieldsForRegister"] = array();

$tdataagricola_Chart[".listAjax"] = false;

	$tdataagricola_Chart[".audit"] = false;

	$tdataagricola_Chart[".locking"] = false;


$tdataagricola_Chart[".add"] = true;
$tdataagricola_Chart[".afterAddAction"] = 1;
$tdataagricola_Chart[".closePopupAfterAdd"] = 1;
$tdataagricola_Chart[".afterAddActionDetTable"] = "";

$tdataagricola_Chart[".list"] = true;






$tdataagricola_Chart[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataagricola_Chart[".searchSaving"] = false;
//

$tdataagricola_Chart[".showSearchPanel"] = true;
		$tdataagricola_Chart[".flexibleSearch"] = true;

$tdataagricola_Chart[".isUseAjaxSuggest"] = true;




$tdataagricola_Chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdataagricola_Chart[".isUseTimeForSearch"] = false;



$tdataagricola_Chart[".badgeColor"] = "CD853F";


$tdataagricola_Chart[".allSearchFields"] = array();
$tdataagricola_Chart[".filterFields"] = array();
$tdataagricola_Chart[".requiredSearchFields"] = array();

$tdataagricola_Chart[".allSearchFields"][] = "VEREDA";
	$tdataagricola_Chart[".allSearchFields"][] = "VARIEDAD";
	$tdataagricola_Chart[".allSearchFields"][] = "AREA";
	$tdataagricola_Chart[".allSearchFields"][] = "PRODUCCION";
	$tdataagricola_Chart[".allSearchFields"][] = "AÑO";
	

$tdataagricola_Chart[".googleLikeFields"] = array();
$tdataagricola_Chart[".googleLikeFields"][] = "VEREDA";
$tdataagricola_Chart[".googleLikeFields"][] = "VARIEDAD";
$tdataagricola_Chart[".googleLikeFields"][] = "AREA";
$tdataagricola_Chart[".googleLikeFields"][] = "PRODUCCION";
$tdataagricola_Chart[".googleLikeFields"][] = "AÑO";


$tdataagricola_Chart[".advSearchFields"] = array();
$tdataagricola_Chart[".advSearchFields"][] = "VEREDA";
$tdataagricola_Chart[".advSearchFields"][] = "VARIEDAD";
$tdataagricola_Chart[".advSearchFields"][] = "AREA";
$tdataagricola_Chart[".advSearchFields"][] = "PRODUCCION";
$tdataagricola_Chart[".advSearchFields"][] = "AÑO";

$tdataagricola_Chart[".tableType"] = "chart";

$tdataagricola_Chart[".printerPageOrientation"] = 0;
$tdataagricola_Chart[".nPrinterPageScale"] = 100;

$tdataagricola_Chart[".nPrinterSplitRecords"] = 40;

$tdataagricola_Chart[".nPrinterPDFSplitRecords"] = 40;



$tdataagricola_Chart[".geocodingEnabled"] = false;



// chart settings
$tdataagricola_Chart[".chartType"] = "2DColumn";
// end of chart settings


$tdataagricola_Chart[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataagricola_Chart[".strOrderBy"] = $tstrOrderBy;

$tdataagricola_Chart[".orderindexes"] = array();

$tdataagricola_Chart[".sqlHead"] = "SELECT  DISTINCT VEREDA,  VARIEDAD,  SUM(AREA)AS AREA,  SUM(PRODUCCION_ANUAL) AS PRODUCCION,  `AÑO`";
$tdataagricola_Chart[".sqlFrom"] = "FROM agricola";
$tdataagricola_Chart[".sqlWhereExpr"] = "";
$tdataagricola_Chart[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataagricola_Chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataagricola_Chart[".arrGroupsPerPage"] = $arrGPP;

$tdataagricola_Chart[".highlightSearchResults"] = true;

$tableKeysagricola_Chart = array();
$tdataagricola_Chart[".Keys"] = $tableKeysagricola_Chart;

$tdataagricola_Chart[".listFields"] = array();
$tdataagricola_Chart[".listFields"][] = "VEREDA";
$tdataagricola_Chart[".listFields"][] = "VARIEDAD";
$tdataagricola_Chart[".listFields"][] = "AREA";
$tdataagricola_Chart[".listFields"][] = "PRODUCCION";
$tdataagricola_Chart[".listFields"][] = "AÑO";

$tdataagricola_Chart[".hideMobileList"] = array();


$tdataagricola_Chart[".viewFields"] = array();
$tdataagricola_Chart[".viewFields"][] = "VEREDA";
$tdataagricola_Chart[".viewFields"][] = "VARIEDAD";
$tdataagricola_Chart[".viewFields"][] = "AREA";
$tdataagricola_Chart[".viewFields"][] = "PRODUCCION";
$tdataagricola_Chart[".viewFields"][] = "AÑO";

$tdataagricola_Chart[".addFields"] = array();
$tdataagricola_Chart[".addFields"][] = "VEREDA";
$tdataagricola_Chart[".addFields"][] = "VARIEDAD";
$tdataagricola_Chart[".addFields"][] = "AREA";
$tdataagricola_Chart[".addFields"][] = "AÑO";

$tdataagricola_Chart[".masterListFields"] = array();
$tdataagricola_Chart[".masterListFields"][] = "VEREDA";
$tdataagricola_Chart[".masterListFields"][] = "VARIEDAD";
$tdataagricola_Chart[".masterListFields"][] = "AREA";
$tdataagricola_Chart[".masterListFields"][] = "PRODUCCION";
$tdataagricola_Chart[".masterListFields"][] = "AÑO";

$tdataagricola_Chart[".inlineAddFields"] = array();
$tdataagricola_Chart[".inlineAddFields"][] = "VEREDA";
$tdataagricola_Chart[".inlineAddFields"][] = "VARIEDAD";
$tdataagricola_Chart[".inlineAddFields"][] = "AREA";
$tdataagricola_Chart[".inlineAddFields"][] = "AÑO";

$tdataagricola_Chart[".editFields"] = array();
$tdataagricola_Chart[".editFields"][] = "VEREDA";
$tdataagricola_Chart[".editFields"][] = "VARIEDAD";
$tdataagricola_Chart[".editFields"][] = "AREA";
$tdataagricola_Chart[".editFields"][] = "AÑO";

$tdataagricola_Chart[".inlineEditFields"] = array();
$tdataagricola_Chart[".inlineEditFields"][] = "VEREDA";
$tdataagricola_Chart[".inlineEditFields"][] = "VARIEDAD";
$tdataagricola_Chart[".inlineEditFields"][] = "AREA";
$tdataagricola_Chart[".inlineEditFields"][] = "AÑO";

$tdataagricola_Chart[".exportFields"] = array();
$tdataagricola_Chart[".exportFields"][] = "VEREDA";
$tdataagricola_Chart[".exportFields"][] = "VARIEDAD";
$tdataagricola_Chart[".exportFields"][] = "AREA";
$tdataagricola_Chart[".exportFields"][] = "PRODUCCION";
$tdataagricola_Chart[".exportFields"][] = "AÑO";

$tdataagricola_Chart[".importFields"] = array();
$tdataagricola_Chart[".importFields"][] = "VEREDA";
$tdataagricola_Chart[".importFields"][] = "VARIEDAD";
$tdataagricola_Chart[".importFields"][] = "AREA";
$tdataagricola_Chart[".importFields"][] = "PRODUCCION";
$tdataagricola_Chart[".importFields"][] = "AÑO";

$tdataagricola_Chart[".printFields"] = array();
$tdataagricola_Chart[".printFields"][] = "VEREDA";
$tdataagricola_Chart[".printFields"][] = "VARIEDAD";
$tdataagricola_Chart[".printFields"][] = "AREA";
$tdataagricola_Chart[".printFields"][] = "PRODUCCION";
$tdataagricola_Chart[".printFields"][] = "AÑO";

//	VEREDA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "VEREDA";
	$fdata["GoodName"] = "VEREDA";
	$fdata["ownerTable"] = "agricola";
	$fdata["Label"] = GetFieldLabel("agricola_Chart","VEREDA");
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




	$tdataagricola_Chart["VEREDA"] = $fdata;
//	VARIEDAD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "VARIEDAD";
	$fdata["GoodName"] = "VARIEDAD";
	$fdata["ownerTable"] = "agricola";
	$fdata["Label"] = GetFieldLabel("agricola_Chart","VARIEDAD");
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




	$tdataagricola_Chart["VARIEDAD"] = $fdata;
//	AREA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "AREA";
	$fdata["GoodName"] = "AREA";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("agricola_Chart","AREA");
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




	$tdataagricola_Chart["AREA"] = $fdata;
//	PRODUCCION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "PRODUCCION";
	$fdata["GoodName"] = "PRODUCCION";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("agricola_Chart","PRODUCCION");
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




	$tdataagricola_Chart["PRODUCCION"] = $fdata;
//	AÑO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "AÑO";
	$fdata["GoodName"] = "A_O";
	$fdata["ownerTable"] = "agricola";
	$fdata["Label"] = GetFieldLabel("agricola_Chart","A_O");
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




	$tdataagricola_Chart["AÑO"] = $fdata;

	$tdataagricola_Chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">agricola Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdataagricola_Chart[".chartXml"] .= '<attr value="0">
			<attr value="name">AREA</attr>';
	$tdataagricola_Chart[".chartXml"] .= '</attr>';
	$tdataagricola_Chart[".chartXml"] .= '<attr value="1">
			<attr value="name">PRODUCCION</attr>';
	$tdataagricola_Chart[".chartXml"] .= '</attr>';
	$tdataagricola_Chart[".chartXml"] .= '<attr value="2">
		<attr value="name">VEREDA</attr>
	</attr>';
	$tdataagricola_Chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdataagricola_Chart[".chartXml"] .= '<attr value="head">'.xmlencode("ESTADISTICA AGRICOLA").'</attr>
<attr value="foot">'.xmlencode("PROCESOS AGRICOLAS POR VEREDA").'</attr>
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
$tdataagricola_Chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdataagricola_Chart[".chartXml"] .= '<attr value="0">
		<attr value="name">VEREDA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("agricola_Chart","VEREDA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataagricola_Chart[".chartXml"] .= '<attr value="1">
		<attr value="name">VARIEDAD</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("agricola_Chart","VARIEDAD")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataagricola_Chart[".chartXml"] .= '<attr value="2">
		<attr value="name">AREA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("agricola_Chart","AREA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataagricola_Chart[".chartXml"] .= '<attr value="3">
		<attr value="name">PRODUCCION</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("agricola_Chart","PRODUCCION")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataagricola_Chart[".chartXml"] .= '<attr value="4">
		<attr value="name">AÑO</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("agricola_Chart","A_O")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdataagricola_Chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">agricola Chart</attr>
<attr value="short_table_name">agricola_Chart</attr>
</attr>

</chart>';

$tables_data["agricola Chart"]=&$tdataagricola_Chart;
$field_labels["agricola_Chart"] = &$fieldLabelsagricola_Chart;
$fieldToolTips["agricola_Chart"] = &$fieldToolTipsagricola_Chart;
$page_titles["agricola_Chart"] = &$pageTitlesagricola_Chart;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["agricola Chart"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["agricola Chart"] = array();


	
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
					$masterTablesData["agricola Chart"][0] = $masterParams;
				$masterTablesData["agricola Chart"][0]["masterKeys"] = array();
	$masterTablesData["agricola Chart"][0]["masterKeys"][]="PROPIETARIO_CEDULA";
				$masterTablesData["agricola Chart"][0]["detailKeys"] = array();
	$masterTablesData["agricola Chart"][0]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_agricola_Chart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT  DISTINCT";
$proto0["m_strFieldList"] = "VEREDA,  VARIEDAD,  SUM(AREA)AS AREA,  SUM(PRODUCCION_ANUAL) AS PRODUCCION,  `AÑO`";
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
	"m_srcTableName" => "agricola Chart"
));

$proto6["m_sql"] = "VEREDA";
$proto6["m_srcTableName"] = "agricola Chart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "VARIEDAD",
	"m_strTable" => "agricola",
	"m_srcTableName" => "agricola Chart"
));

$proto8["m_sql"] = "VARIEDAD";
$proto8["m_srcTableName"] = "agricola Chart";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$proto11=array();
$proto11["m_functiontype"] = "SQLF_SUM";
$proto11["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "AREA",
	"m_strTable" => "agricola",
	"m_srcTableName" => "agricola Chart"
));

$proto11["m_arguments"][]=$obj;
$proto11["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto11);

$proto10["m_sql"] = "SUM(AREA)";
$proto10["m_srcTableName"] = "agricola Chart";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "AREA";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$proto14=array();
$proto14["m_functiontype"] = "SQLF_SUM";
$proto14["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "PRODUCCION_ANUAL",
	"m_strTable" => "agricola",
	"m_srcTableName" => "agricola Chart"
));

$proto14["m_arguments"][]=$obj;
$proto14["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto14);

$proto13["m_sql"] = "SUM(PRODUCCION_ANUAL)";
$proto13["m_srcTableName"] = "agricola Chart";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "PRODUCCION";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "agricola",
	"m_srcTableName" => "agricola Chart"
));

$proto16["m_sql"] = "`AÑO`";
$proto16["m_srcTableName"] = "agricola Chart";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "agricola";
$proto19["m_srcTableName"] = "agricola Chart";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "ID";
$proto19["m_columns"][] = "FINCA_PROPIETARIO_CEDULA";
$proto19["m_columns"][] = "NOMBRE";
$proto19["m_columns"][] = "VEREDA";
$proto19["m_columns"][] = "FINCA";
$proto19["m_columns"][] = "VARIEDAD";
$proto19["m_columns"][] = "AREA";
$proto19["m_columns"][] = "PRODUCCION_ANUAL";
$proto19["m_columns"][] = "AÑO";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "agricola";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "agricola Chart";
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
	"m_strName" => "VEREDA",
	"m_strTable" => "agricola",
	"m_srcTableName" => "agricola Chart"
));

$proto22["m_column"]=$obj;
$obj = new SQLGroupByItem($proto22);

$proto0["m_groupby"][]=$obj;
												$proto24=array();
						$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "agricola",
	"m_srcTableName" => "agricola Chart"
));

$proto24["m_column"]=$obj;
$obj = new SQLGroupByItem($proto24);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="agricola Chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_agricola_Chart = createSqlQuery_agricola_Chart();


	
		;

					

$tdataagricola_Chart[".sqlquery"] = $queryData_agricola_Chart;

$tableEvents["agricola Chart"] = new eventsBase;
$tdataagricola_Chart[".hasEvents"] = false;

?>