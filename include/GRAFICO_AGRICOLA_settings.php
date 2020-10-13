<?php
require_once(getabspath("classes/cipherer.php"));




$tdataGRAFICO_AGRICOLA = array();
	$tdataGRAFICO_AGRICOLA[".ShortName"] = "GRAFICO_AGRICOLA";
	$tdataGRAFICO_AGRICOLA[".OwnerID"] = "";
	$tdataGRAFICO_AGRICOLA[".OriginalTable"] = "agricola";

//	field labels
$fieldLabelsGRAFICO_AGRICOLA = array();
$fieldToolTipsGRAFICO_AGRICOLA = array();
$pageTitlesGRAFICO_AGRICOLA = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsGRAFICO_AGRICOLA["Spanish"] = array();
	$fieldToolTipsGRAFICO_AGRICOLA["Spanish"] = array();
	$pageTitlesGRAFICO_AGRICOLA["Spanish"] = array();
	$fieldLabelsGRAFICO_AGRICOLA["Spanish"]["VEREDA"] = "VEREDA";
	$fieldToolTipsGRAFICO_AGRICOLA["Spanish"]["VEREDA"] = "";
	$fieldLabelsGRAFICO_AGRICOLA["Spanish"]["VARIEDAD"] = "VARIEDAD";
	$fieldToolTipsGRAFICO_AGRICOLA["Spanish"]["VARIEDAD"] = "";
	$fieldLabelsGRAFICO_AGRICOLA["Spanish"]["AREA"] = "AREA";
	$fieldToolTipsGRAFICO_AGRICOLA["Spanish"]["AREA"] = "";
	$fieldLabelsGRAFICO_AGRICOLA["Spanish"]["A_O"] = "AÑO";
	$fieldToolTipsGRAFICO_AGRICOLA["Spanish"]["A_O"] = "";
	$fieldLabelsGRAFICO_AGRICOLA["Spanish"]["PRODUCCION"] = "PRODUCCION";
	$fieldToolTipsGRAFICO_AGRICOLA["Spanish"]["PRODUCCION"] = "";
	if (count($fieldToolTipsGRAFICO_AGRICOLA["Spanish"]))
		$tdataGRAFICO_AGRICOLA[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsGRAFICO_AGRICOLA[""] = array();
	$fieldToolTipsGRAFICO_AGRICOLA[""] = array();
	$pageTitlesGRAFICO_AGRICOLA[""] = array();
	$fieldLabelsGRAFICO_AGRICOLA[""]["VEREDA"] = "VEREDA";
	$fieldToolTipsGRAFICO_AGRICOLA[""]["VEREDA"] = "";
	$fieldLabelsGRAFICO_AGRICOLA[""]["VARIEDAD"] = "VARIEDAD";
	$fieldToolTipsGRAFICO_AGRICOLA[""]["VARIEDAD"] = "";
	$fieldLabelsGRAFICO_AGRICOLA[""]["AREA"] = "AREA";
	$fieldToolTipsGRAFICO_AGRICOLA[""]["AREA"] = "";
	$fieldLabelsGRAFICO_AGRICOLA[""]["A_O"] = "AÑO";
	$fieldToolTipsGRAFICO_AGRICOLA[""]["A_O"] = "";
	$fieldLabelsGRAFICO_AGRICOLA[""]["PRODUCCION"] = "PRODUCCION";
	$fieldToolTipsGRAFICO_AGRICOLA[""]["PRODUCCION"] = "";
	if (count($fieldToolTipsGRAFICO_AGRICOLA[""]))
		$tdataGRAFICO_AGRICOLA[".isUseToolTips"] = true;
}


	$tdataGRAFICO_AGRICOLA[".NCSearch"] = true;

	$tdataGRAFICO_AGRICOLA[".ChartRefreshTime"] = 60;


$tdataGRAFICO_AGRICOLA[".shortTableName"] = "GRAFICO_AGRICOLA";
$tdataGRAFICO_AGRICOLA[".nSecOptions"] = 0;
$tdataGRAFICO_AGRICOLA[".recsPerRowPrint"] = 1;
$tdataGRAFICO_AGRICOLA[".mainTableOwnerID"] = "";
$tdataGRAFICO_AGRICOLA[".moveNext"] = 1;
$tdataGRAFICO_AGRICOLA[".entityType"] = 3;

$tdataGRAFICO_AGRICOLA[".strOriginalTableName"] = "agricola";

	



$tdataGRAFICO_AGRICOLA[".showAddInPopup"] = false;

$tdataGRAFICO_AGRICOLA[".showEditInPopup"] = false;

$tdataGRAFICO_AGRICOLA[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataGRAFICO_AGRICOLA[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataGRAFICO_AGRICOLA[".fieldsForRegister"] = array();

$tdataGRAFICO_AGRICOLA[".listAjax"] = false;

	$tdataGRAFICO_AGRICOLA[".audit"] = false;

	$tdataGRAFICO_AGRICOLA[".locking"] = false;


$tdataGRAFICO_AGRICOLA[".add"] = true;
$tdataGRAFICO_AGRICOLA[".afterAddAction"] = 1;
$tdataGRAFICO_AGRICOLA[".closePopupAfterAdd"] = 1;
$tdataGRAFICO_AGRICOLA[".afterAddActionDetTable"] = "";

$tdataGRAFICO_AGRICOLA[".list"] = true;






$tdataGRAFICO_AGRICOLA[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataGRAFICO_AGRICOLA[".searchSaving"] = false;
//

$tdataGRAFICO_AGRICOLA[".showSearchPanel"] = true;
		$tdataGRAFICO_AGRICOLA[".flexibleSearch"] = true;

$tdataGRAFICO_AGRICOLA[".isUseAjaxSuggest"] = true;




$tdataGRAFICO_AGRICOLA[".addPageEvents"] = false;

// use timepicker for search panel
$tdataGRAFICO_AGRICOLA[".isUseTimeForSearch"] = false;



$tdataGRAFICO_AGRICOLA[".badgeColor"] = "408080";


$tdataGRAFICO_AGRICOLA[".allSearchFields"] = array();
$tdataGRAFICO_AGRICOLA[".filterFields"] = array();
$tdataGRAFICO_AGRICOLA[".requiredSearchFields"] = array();

$tdataGRAFICO_AGRICOLA[".allSearchFields"][] = "VEREDA";
	$tdataGRAFICO_AGRICOLA[".allSearchFields"][] = "VARIEDAD";
	$tdataGRAFICO_AGRICOLA[".allSearchFields"][] = "AREA";
	$tdataGRAFICO_AGRICOLA[".allSearchFields"][] = "PRODUCCION";
	$tdataGRAFICO_AGRICOLA[".allSearchFields"][] = "AÑO";
	
$tdataGRAFICO_AGRICOLA[".filterFields"][] = "VEREDA";
$tdataGRAFICO_AGRICOLA[".filterFields"][] = "VARIEDAD";
$tdataGRAFICO_AGRICOLA[".filterFields"][] = "AREA";
$tdataGRAFICO_AGRICOLA[".filterFields"][] = "AÑO";

$tdataGRAFICO_AGRICOLA[".googleLikeFields"] = array();
$tdataGRAFICO_AGRICOLA[".googleLikeFields"][] = "VEREDA";
$tdataGRAFICO_AGRICOLA[".googleLikeFields"][] = "VARIEDAD";
$tdataGRAFICO_AGRICOLA[".googleLikeFields"][] = "AREA";
$tdataGRAFICO_AGRICOLA[".googleLikeFields"][] = "PRODUCCION";
$tdataGRAFICO_AGRICOLA[".googleLikeFields"][] = "AÑO";


$tdataGRAFICO_AGRICOLA[".advSearchFields"] = array();
$tdataGRAFICO_AGRICOLA[".advSearchFields"][] = "VEREDA";
$tdataGRAFICO_AGRICOLA[".advSearchFields"][] = "VARIEDAD";
$tdataGRAFICO_AGRICOLA[".advSearchFields"][] = "AREA";
$tdataGRAFICO_AGRICOLA[".advSearchFields"][] = "PRODUCCION";
$tdataGRAFICO_AGRICOLA[".advSearchFields"][] = "AÑO";

$tdataGRAFICO_AGRICOLA[".tableType"] = "chart";

$tdataGRAFICO_AGRICOLA[".printerPageOrientation"] = 0;
$tdataGRAFICO_AGRICOLA[".nPrinterPageScale"] = 100;

$tdataGRAFICO_AGRICOLA[".nPrinterSplitRecords"] = 40;

$tdataGRAFICO_AGRICOLA[".nPrinterPDFSplitRecords"] = 40;



$tdataGRAFICO_AGRICOLA[".geocodingEnabled"] = false;



// chart settings
$tdataGRAFICO_AGRICOLA[".chartType"] = "2DColumn";
// end of chart settings


$tdataGRAFICO_AGRICOLA[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataGRAFICO_AGRICOLA[".strOrderBy"] = $tstrOrderBy;

$tdataGRAFICO_AGRICOLA[".orderindexes"] = array();

$tdataGRAFICO_AGRICOLA[".sqlHead"] = "SELECT  DISTINCT VEREDA,  VARIEDAD,  AREA,  SUM(PRODUCCION_ANUAL) AS PRODUCCION,  `AÑO`";
$tdataGRAFICO_AGRICOLA[".sqlFrom"] = "FROM agricola";
$tdataGRAFICO_AGRICOLA[".sqlWhereExpr"] = "";
$tdataGRAFICO_AGRICOLA[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataGRAFICO_AGRICOLA[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataGRAFICO_AGRICOLA[".arrGroupsPerPage"] = $arrGPP;

$tdataGRAFICO_AGRICOLA[".highlightSearchResults"] = true;

$tableKeysGRAFICO_AGRICOLA = array();
$tdataGRAFICO_AGRICOLA[".Keys"] = $tableKeysGRAFICO_AGRICOLA;

$tdataGRAFICO_AGRICOLA[".listFields"] = array();
$tdataGRAFICO_AGRICOLA[".listFields"][] = "VEREDA";
$tdataGRAFICO_AGRICOLA[".listFields"][] = "VARIEDAD";
$tdataGRAFICO_AGRICOLA[".listFields"][] = "AREA";
$tdataGRAFICO_AGRICOLA[".listFields"][] = "PRODUCCION";
$tdataGRAFICO_AGRICOLA[".listFields"][] = "AÑO";

$tdataGRAFICO_AGRICOLA[".hideMobileList"] = array();


$tdataGRAFICO_AGRICOLA[".viewFields"] = array();
$tdataGRAFICO_AGRICOLA[".viewFields"][] = "VEREDA";
$tdataGRAFICO_AGRICOLA[".viewFields"][] = "VARIEDAD";
$tdataGRAFICO_AGRICOLA[".viewFields"][] = "AREA";
$tdataGRAFICO_AGRICOLA[".viewFields"][] = "PRODUCCION";
$tdataGRAFICO_AGRICOLA[".viewFields"][] = "AÑO";

$tdataGRAFICO_AGRICOLA[".addFields"] = array();
$tdataGRAFICO_AGRICOLA[".addFields"][] = "VEREDA";
$tdataGRAFICO_AGRICOLA[".addFields"][] = "VARIEDAD";
$tdataGRAFICO_AGRICOLA[".addFields"][] = "AREA";
$tdataGRAFICO_AGRICOLA[".addFields"][] = "AÑO";

$tdataGRAFICO_AGRICOLA[".masterListFields"] = array();
$tdataGRAFICO_AGRICOLA[".masterListFields"][] = "VEREDA";
$tdataGRAFICO_AGRICOLA[".masterListFields"][] = "VARIEDAD";
$tdataGRAFICO_AGRICOLA[".masterListFields"][] = "AREA";
$tdataGRAFICO_AGRICOLA[".masterListFields"][] = "PRODUCCION";
$tdataGRAFICO_AGRICOLA[".masterListFields"][] = "AÑO";

$tdataGRAFICO_AGRICOLA[".inlineAddFields"] = array();
$tdataGRAFICO_AGRICOLA[".inlineAddFields"][] = "VEREDA";
$tdataGRAFICO_AGRICOLA[".inlineAddFields"][] = "VARIEDAD";
$tdataGRAFICO_AGRICOLA[".inlineAddFields"][] = "AREA";
$tdataGRAFICO_AGRICOLA[".inlineAddFields"][] = "AÑO";

$tdataGRAFICO_AGRICOLA[".editFields"] = array();
$tdataGRAFICO_AGRICOLA[".editFields"][] = "VEREDA";
$tdataGRAFICO_AGRICOLA[".editFields"][] = "VARIEDAD";
$tdataGRAFICO_AGRICOLA[".editFields"][] = "AREA";
$tdataGRAFICO_AGRICOLA[".editFields"][] = "AÑO";

$tdataGRAFICO_AGRICOLA[".inlineEditFields"] = array();
$tdataGRAFICO_AGRICOLA[".inlineEditFields"][] = "VEREDA";
$tdataGRAFICO_AGRICOLA[".inlineEditFields"][] = "VARIEDAD";
$tdataGRAFICO_AGRICOLA[".inlineEditFields"][] = "AREA";
$tdataGRAFICO_AGRICOLA[".inlineEditFields"][] = "AÑO";

$tdataGRAFICO_AGRICOLA[".exportFields"] = array();
$tdataGRAFICO_AGRICOLA[".exportFields"][] = "VEREDA";
$tdataGRAFICO_AGRICOLA[".exportFields"][] = "VARIEDAD";
$tdataGRAFICO_AGRICOLA[".exportFields"][] = "AREA";
$tdataGRAFICO_AGRICOLA[".exportFields"][] = "PRODUCCION";
$tdataGRAFICO_AGRICOLA[".exportFields"][] = "AÑO";

$tdataGRAFICO_AGRICOLA[".importFields"] = array();
$tdataGRAFICO_AGRICOLA[".importFields"][] = "VEREDA";
$tdataGRAFICO_AGRICOLA[".importFields"][] = "VARIEDAD";
$tdataGRAFICO_AGRICOLA[".importFields"][] = "AREA";
$tdataGRAFICO_AGRICOLA[".importFields"][] = "PRODUCCION";
$tdataGRAFICO_AGRICOLA[".importFields"][] = "AÑO";

$tdataGRAFICO_AGRICOLA[".printFields"] = array();
$tdataGRAFICO_AGRICOLA[".printFields"][] = "VEREDA";
$tdataGRAFICO_AGRICOLA[".printFields"][] = "VARIEDAD";
$tdataGRAFICO_AGRICOLA[".printFields"][] = "AREA";
$tdataGRAFICO_AGRICOLA[".printFields"][] = "PRODUCCION";
$tdataGRAFICO_AGRICOLA[".printFields"][] = "AÑO";

//	VEREDA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "VEREDA";
	$fdata["GoodName"] = "VEREDA";
	$fdata["ownerTable"] = "agricola";
	$fdata["Label"] = GetFieldLabel("GRAFICO_AGRICOLA","VEREDA");
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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdataGRAFICO_AGRICOLA["VEREDA"] = $fdata;
//	VARIEDAD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "VARIEDAD";
	$fdata["GoodName"] = "VARIEDAD";
	$fdata["ownerTable"] = "agricola";
	$fdata["Label"] = GetFieldLabel("GRAFICO_AGRICOLA","VARIEDAD");
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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdataGRAFICO_AGRICOLA["VARIEDAD"] = $fdata;
//	AREA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "AREA";
	$fdata["GoodName"] = "AREA";
	$fdata["ownerTable"] = "agricola";
	$fdata["Label"] = GetFieldLabel("GRAFICO_AGRICOLA","AREA");
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


	$tdataGRAFICO_AGRICOLA["AREA"] = $fdata;
//	PRODUCCION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "PRODUCCION";
	$fdata["GoodName"] = "PRODUCCION";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("GRAFICO_AGRICOLA","PRODUCCION");
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




	$tdataGRAFICO_AGRICOLA["PRODUCCION"] = $fdata;
//	AÑO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "AÑO";
	$fdata["GoodName"] = "A_O";
	$fdata["ownerTable"] = "agricola";
	$fdata["Label"] = GetFieldLabel("GRAFICO_AGRICOLA","A_O");
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


	$tdataGRAFICO_AGRICOLA["AÑO"] = $fdata;

	$tdataGRAFICO_AGRICOLA[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">GRAFICO AGRICOLA</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdataGRAFICO_AGRICOLA[".chartXml"] .= '<attr value="0">
			<attr value="name">AREA</attr>';
	$tdataGRAFICO_AGRICOLA[".chartXml"] .= '</attr>';
	$tdataGRAFICO_AGRICOLA[".chartXml"] .= '<attr value="1">
			<attr value="name">PRODUCCION</attr>';
	$tdataGRAFICO_AGRICOLA[".chartXml"] .= '</attr>';
	$tdataGRAFICO_AGRICOLA[".chartXml"] .= '<attr value="2">
		<attr value="name">VARIEDAD</attr>
	</attr>';
	$tdataGRAFICO_AGRICOLA[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdataGRAFICO_AGRICOLA[".chartXml"] .= '<attr value="head">'.xmlencode("").'</attr>
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
$tdataGRAFICO_AGRICOLA[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdataGRAFICO_AGRICOLA[".chartXml"] .= '<attr value="0">
		<attr value="name">VEREDA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("GRAFICO_AGRICOLA","VEREDA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataGRAFICO_AGRICOLA[".chartXml"] .= '<attr value="1">
		<attr value="name">VARIEDAD</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("GRAFICO_AGRICOLA","VARIEDAD")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataGRAFICO_AGRICOLA[".chartXml"] .= '<attr value="2">
		<attr value="name">AREA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("GRAFICO_AGRICOLA","AREA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataGRAFICO_AGRICOLA[".chartXml"] .= '<attr value="3">
		<attr value="name">PRODUCCION</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("GRAFICO_AGRICOLA","PRODUCCION")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataGRAFICO_AGRICOLA[".chartXml"] .= '<attr value="4">
		<attr value="name">AÑO</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("GRAFICO_AGRICOLA","A_O")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdataGRAFICO_AGRICOLA[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">GRAFICO AGRICOLA</attr>
<attr value="short_table_name">GRAFICO_AGRICOLA</attr>
</attr>

</chart>';

$tables_data["GRAFICO AGRICOLA"]=&$tdataGRAFICO_AGRICOLA;
$field_labels["GRAFICO_AGRICOLA"] = &$fieldLabelsGRAFICO_AGRICOLA;
$fieldToolTips["GRAFICO_AGRICOLA"] = &$fieldToolTipsGRAFICO_AGRICOLA;
$page_titles["GRAFICO_AGRICOLA"] = &$pageTitlesGRAFICO_AGRICOLA;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["GRAFICO AGRICOLA"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["GRAFICO AGRICOLA"] = array();


	
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
					$masterTablesData["GRAFICO AGRICOLA"][0] = $masterParams;
				$masterTablesData["GRAFICO AGRICOLA"][0]["masterKeys"] = array();
	$masterTablesData["GRAFICO AGRICOLA"][0]["masterKeys"][]="PROPIETARIO_CEDULA";
				$masterTablesData["GRAFICO AGRICOLA"][0]["detailKeys"] = array();
	$masterTablesData["GRAFICO AGRICOLA"][0]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_GRAFICO_AGRICOLA()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT  DISTINCT";
$proto0["m_strFieldList"] = "VEREDA,  VARIEDAD,  AREA,  SUM(PRODUCCION_ANUAL) AS PRODUCCION,  `AÑO`";
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
	"m_srcTableName" => "GRAFICO AGRICOLA"
));

$proto6["m_sql"] = "VEREDA";
$proto6["m_srcTableName"] = "GRAFICO AGRICOLA";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "VARIEDAD",
	"m_strTable" => "agricola",
	"m_srcTableName" => "GRAFICO AGRICOLA"
));

$proto8["m_sql"] = "VARIEDAD";
$proto8["m_srcTableName"] = "GRAFICO AGRICOLA";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "AREA",
	"m_strTable" => "agricola",
	"m_srcTableName" => "GRAFICO AGRICOLA"
));

$proto10["m_sql"] = "AREA";
$proto10["m_srcTableName"] = "GRAFICO AGRICOLA";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$proto13=array();
$proto13["m_functiontype"] = "SQLF_SUM";
$proto13["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "PRODUCCION_ANUAL",
	"m_strTable" => "agricola",
	"m_srcTableName" => "GRAFICO AGRICOLA"
));

$proto13["m_arguments"][]=$obj;
$proto13["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto13);

$proto12["m_sql"] = "SUM(PRODUCCION_ANUAL)";
$proto12["m_srcTableName"] = "GRAFICO AGRICOLA";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "PRODUCCION";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "agricola",
	"m_srcTableName" => "GRAFICO AGRICOLA"
));

$proto15["m_sql"] = "`AÑO`";
$proto15["m_srcTableName"] = "GRAFICO AGRICOLA";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "agricola";
$proto18["m_srcTableName"] = "GRAFICO AGRICOLA";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "ID";
$proto18["m_columns"][] = "FINCA_PROPIETARIO_CEDULA";
$proto18["m_columns"][] = "NOMBRE";
$proto18["m_columns"][] = "VEREDA";
$proto18["m_columns"][] = "FINCA";
$proto18["m_columns"][] = "VARIEDAD";
$proto18["m_columns"][] = "AREA";
$proto18["m_columns"][] = "PRODUCCION_ANUAL";
$proto18["m_columns"][] = "AÑO";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "agricola";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "GRAFICO AGRICOLA";
$proto19=array();
$proto19["m_sql"] = "";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "";
$proto19["m_havingmode"] = false;
$proto19["m_inBrackets"] = false;
$proto19["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto19);

$proto17["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto17);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto21=array();
						$obj = new SQLField(array(
	"m_strName" => "VEREDA",
	"m_strTable" => "agricola",
	"m_srcTableName" => "GRAFICO AGRICOLA"
));

$proto21["m_column"]=$obj;
$obj = new SQLGroupByItem($proto21);

$proto0["m_groupby"][]=$obj;
												$proto23=array();
						$obj = new SQLField(array(
	"m_strName" => "VARIEDAD",
	"m_strTable" => "agricola",
	"m_srcTableName" => "GRAFICO AGRICOLA"
));

$proto23["m_column"]=$obj;
$obj = new SQLGroupByItem($proto23);

$proto0["m_groupby"][]=$obj;
												$proto25=array();
						$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "agricola",
	"m_srcTableName" => "GRAFICO AGRICOLA"
));

$proto25["m_column"]=$obj;
$obj = new SQLGroupByItem($proto25);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="GRAFICO AGRICOLA";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_GRAFICO_AGRICOLA = createSqlQuery_GRAFICO_AGRICOLA();


	
		;

					

$tdataGRAFICO_AGRICOLA[".sqlquery"] = $queryData_GRAFICO_AGRICOLA;

$tableEvents["GRAFICO AGRICOLA"] = new eventsBase;
$tdataGRAFICO_AGRICOLA[".hasEvents"] = false;

?>