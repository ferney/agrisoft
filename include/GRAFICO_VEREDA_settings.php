<?php
require_once(getabspath("classes/cipherer.php"));




$tdataGRAFICO_VEREDA = array();
	$tdataGRAFICO_VEREDA[".ShortName"] = "GRAFICO_VEREDA";
	$tdataGRAFICO_VEREDA[".OwnerID"] = "";
	$tdataGRAFICO_VEREDA[".OriginalTable"] = "finca";

//	field labels
$fieldLabelsGRAFICO_VEREDA = array();
$fieldToolTipsGRAFICO_VEREDA = array();
$pageTitlesGRAFICO_VEREDA = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsGRAFICO_VEREDA["Spanish"] = array();
	$fieldToolTipsGRAFICO_VEREDA["Spanish"] = array();
	$pageTitlesGRAFICO_VEREDA["Spanish"] = array();
	$fieldLabelsGRAFICO_VEREDA["Spanish"]["VEREDA"] = "VEREDA";
	$fieldToolTipsGRAFICO_VEREDA["Spanish"]["VEREDA"] = "";
	$fieldLabelsGRAFICO_VEREDA["Spanish"]["A_O"] = "AÑO";
	$fieldToolTipsGRAFICO_VEREDA["Spanish"]["A_O"] = "";
	$fieldLabelsGRAFICO_VEREDA["Spanish"]["LINEA_PRINCIPAL"] = "LINEA PRINCIPAL";
	$fieldToolTipsGRAFICO_VEREDA["Spanish"]["LINEA_PRINCIPAL"] = "";
	$fieldLabelsGRAFICO_VEREDA["Spanish"]["AREA_VEREDA"] = "AREA VEREDA";
	$fieldToolTipsGRAFICO_VEREDA["Spanish"]["AREA_VEREDA"] = "";
	$fieldLabelsGRAFICO_VEREDA["Spanish"]["FINCAS"] = "FINCAS";
	$fieldToolTipsGRAFICO_VEREDA["Spanish"]["FINCAS"] = "";
	$fieldLabelsGRAFICO_VEREDA["Spanish"]["AREA"] = "AREA";
	$fieldToolTipsGRAFICO_VEREDA["Spanish"]["AREA"] = "";
	$fieldLabelsGRAFICO_VEREDA["Spanish"]["AREA_LIBRE"] = "AREA LIBRE";
	$fieldToolTipsGRAFICO_VEREDA["Spanish"]["AREA_LIBRE"] = "";
	if (count($fieldToolTipsGRAFICO_VEREDA["Spanish"]))
		$tdataGRAFICO_VEREDA[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsGRAFICO_VEREDA[""] = array();
	$fieldToolTipsGRAFICO_VEREDA[""] = array();
	$pageTitlesGRAFICO_VEREDA[""] = array();
	$fieldLabelsGRAFICO_VEREDA[""]["VEREDA"] = "VEREDA";
	$fieldToolTipsGRAFICO_VEREDA[""]["VEREDA"] = "";
	$fieldLabelsGRAFICO_VEREDA[""]["A_O"] = "AÑO";
	$fieldToolTipsGRAFICO_VEREDA[""]["A_O"] = "";
	$fieldLabelsGRAFICO_VEREDA[""]["LINEA_PRINCIPAL"] = "LINEA PRINCIPAL";
	$fieldToolTipsGRAFICO_VEREDA[""]["LINEA_PRINCIPAL"] = "";
	$fieldLabelsGRAFICO_VEREDA[""]["AREA_VEREDA"] = "AREA VEREDA";
	$fieldToolTipsGRAFICO_VEREDA[""]["AREA_VEREDA"] = "";
	$fieldLabelsGRAFICO_VEREDA[""]["FINCAS"] = "FINCAS";
	$fieldToolTipsGRAFICO_VEREDA[""]["FINCAS"] = "";
	$fieldLabelsGRAFICO_VEREDA[""]["AREA"] = "AREA";
	$fieldToolTipsGRAFICO_VEREDA[""]["AREA"] = "";
	$fieldLabelsGRAFICO_VEREDA[""]["AREA_LIBRE"] = "AREA LIBRE";
	$fieldToolTipsGRAFICO_VEREDA[""]["AREA_LIBRE"] = "";
	if (count($fieldToolTipsGRAFICO_VEREDA[""]))
		$tdataGRAFICO_VEREDA[".isUseToolTips"] = true;
}


	$tdataGRAFICO_VEREDA[".NCSearch"] = true;

	$tdataGRAFICO_VEREDA[".ChartRefreshTime"] = 60;


$tdataGRAFICO_VEREDA[".shortTableName"] = "GRAFICO_VEREDA";
$tdataGRAFICO_VEREDA[".nSecOptions"] = 0;
$tdataGRAFICO_VEREDA[".recsPerRowPrint"] = 1;
$tdataGRAFICO_VEREDA[".mainTableOwnerID"] = "";
$tdataGRAFICO_VEREDA[".moveNext"] = 1;
$tdataGRAFICO_VEREDA[".entityType"] = 3;

$tdataGRAFICO_VEREDA[".strOriginalTableName"] = "finca";

	



$tdataGRAFICO_VEREDA[".showAddInPopup"] = false;

$tdataGRAFICO_VEREDA[".showEditInPopup"] = false;

$tdataGRAFICO_VEREDA[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataGRAFICO_VEREDA[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataGRAFICO_VEREDA[".fieldsForRegister"] = array();

$tdataGRAFICO_VEREDA[".listAjax"] = false;

	$tdataGRAFICO_VEREDA[".audit"] = false;

	$tdataGRAFICO_VEREDA[".locking"] = false;


$tdataGRAFICO_VEREDA[".add"] = true;
$tdataGRAFICO_VEREDA[".afterAddAction"] = 1;
$tdataGRAFICO_VEREDA[".closePopupAfterAdd"] = 1;
$tdataGRAFICO_VEREDA[".afterAddActionDetTable"] = "";

$tdataGRAFICO_VEREDA[".list"] = true;






$tdataGRAFICO_VEREDA[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataGRAFICO_VEREDA[".searchSaving"] = false;
//

$tdataGRAFICO_VEREDA[".showSearchPanel"] = true;
		$tdataGRAFICO_VEREDA[".flexibleSearch"] = true;

$tdataGRAFICO_VEREDA[".isUseAjaxSuggest"] = true;




$tdataGRAFICO_VEREDA[".addPageEvents"] = false;

// use timepicker for search panel
$tdataGRAFICO_VEREDA[".isUseTimeForSearch"] = false;





$tdataGRAFICO_VEREDA[".allSearchFields"] = array();
$tdataGRAFICO_VEREDA[".filterFields"] = array();
$tdataGRAFICO_VEREDA[".requiredSearchFields"] = array();

$tdataGRAFICO_VEREDA[".allSearchFields"][] = "VEREDA";
	$tdataGRAFICO_VEREDA[".allSearchFields"][] = "AREA_VEREDA";
	$tdataGRAFICO_VEREDA[".allSearchFields"][] = "LINEA_PRINCIPAL";
	$tdataGRAFICO_VEREDA[".allSearchFields"][] = "FINCAS";
	$tdataGRAFICO_VEREDA[".allSearchFields"][] = "AREA";
	$tdataGRAFICO_VEREDA[".allSearchFields"][] = "AREA_LIBRE";
	$tdataGRAFICO_VEREDA[".allSearchFields"][] = "AÑO";
	
$tdataGRAFICO_VEREDA[".filterFields"][] = "VEREDA";
$tdataGRAFICO_VEREDA[".filterFields"][] = "AREA_VEREDA";
$tdataGRAFICO_VEREDA[".filterFields"][] = "LINEA_PRINCIPAL";
$tdataGRAFICO_VEREDA[".filterFields"][] = "FINCAS";
$tdataGRAFICO_VEREDA[".filterFields"][] = "AREA";
$tdataGRAFICO_VEREDA[".filterFields"][] = "AREA_LIBRE";
$tdataGRAFICO_VEREDA[".filterFields"][] = "AÑO";

$tdataGRAFICO_VEREDA[".googleLikeFields"] = array();
$tdataGRAFICO_VEREDA[".googleLikeFields"][] = "VEREDA";
$tdataGRAFICO_VEREDA[".googleLikeFields"][] = "AREA_VEREDA";
$tdataGRAFICO_VEREDA[".googleLikeFields"][] = "LINEA_PRINCIPAL";
$tdataGRAFICO_VEREDA[".googleLikeFields"][] = "FINCAS";
$tdataGRAFICO_VEREDA[".googleLikeFields"][] = "AREA";
$tdataGRAFICO_VEREDA[".googleLikeFields"][] = "AREA_LIBRE";
$tdataGRAFICO_VEREDA[".googleLikeFields"][] = "AÑO";


$tdataGRAFICO_VEREDA[".advSearchFields"] = array();
$tdataGRAFICO_VEREDA[".advSearchFields"][] = "VEREDA";
$tdataGRAFICO_VEREDA[".advSearchFields"][] = "AREA_VEREDA";
$tdataGRAFICO_VEREDA[".advSearchFields"][] = "LINEA_PRINCIPAL";
$tdataGRAFICO_VEREDA[".advSearchFields"][] = "FINCAS";
$tdataGRAFICO_VEREDA[".advSearchFields"][] = "AREA";
$tdataGRAFICO_VEREDA[".advSearchFields"][] = "AREA_LIBRE";
$tdataGRAFICO_VEREDA[".advSearchFields"][] = "AÑO";

$tdataGRAFICO_VEREDA[".tableType"] = "chart";

$tdataGRAFICO_VEREDA[".printerPageOrientation"] = 0;
$tdataGRAFICO_VEREDA[".nPrinterPageScale"] = 100;

$tdataGRAFICO_VEREDA[".nPrinterSplitRecords"] = 40;

$tdataGRAFICO_VEREDA[".nPrinterPDFSplitRecords"] = 40;



$tdataGRAFICO_VEREDA[".geocodingEnabled"] = false;



// chart settings
$tdataGRAFICO_VEREDA[".chartType"] = "2DColumn";
// end of chart settings


$tdataGRAFICO_VEREDA[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataGRAFICO_VEREDA[".strOrderBy"] = $tstrOrderBy;

$tdataGRAFICO_VEREDA[".orderindexes"] = array();

$tdataGRAFICO_VEREDA[".sqlHead"] = "SELECT  DISTINCT VEREDA,  SUM(AREA_FINCA) AS AREA_VEREDA,  LINEA_PRINCIPAL,  COUNT(LINEA_PRINCIPAL) AS FINCAS,  SUM(`AREA_ L_P`) AS AREA,  SUM(AREA_FINCA-`AREA_ L_P`)AS AREA_LIBRE,  `AÑO`";
$tdataGRAFICO_VEREDA[".sqlFrom"] = "FROM finca";
$tdataGRAFICO_VEREDA[".sqlWhereExpr"] = "";
$tdataGRAFICO_VEREDA[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataGRAFICO_VEREDA[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataGRAFICO_VEREDA[".arrGroupsPerPage"] = $arrGPP;

$tdataGRAFICO_VEREDA[".highlightSearchResults"] = true;

$tableKeysGRAFICO_VEREDA = array();
$tdataGRAFICO_VEREDA[".Keys"] = $tableKeysGRAFICO_VEREDA;

$tdataGRAFICO_VEREDA[".listFields"] = array();
$tdataGRAFICO_VEREDA[".listFields"][] = "VEREDA";
$tdataGRAFICO_VEREDA[".listFields"][] = "AREA_VEREDA";
$tdataGRAFICO_VEREDA[".listFields"][] = "LINEA_PRINCIPAL";
$tdataGRAFICO_VEREDA[".listFields"][] = "FINCAS";
$tdataGRAFICO_VEREDA[".listFields"][] = "AREA";
$tdataGRAFICO_VEREDA[".listFields"][] = "AREA_LIBRE";
$tdataGRAFICO_VEREDA[".listFields"][] = "AÑO";

$tdataGRAFICO_VEREDA[".hideMobileList"] = array();


$tdataGRAFICO_VEREDA[".viewFields"] = array();
$tdataGRAFICO_VEREDA[".viewFields"][] = "VEREDA";
$tdataGRAFICO_VEREDA[".viewFields"][] = "AREA_VEREDA";
$tdataGRAFICO_VEREDA[".viewFields"][] = "LINEA_PRINCIPAL";
$tdataGRAFICO_VEREDA[".viewFields"][] = "FINCAS";
$tdataGRAFICO_VEREDA[".viewFields"][] = "AREA";
$tdataGRAFICO_VEREDA[".viewFields"][] = "AREA_LIBRE";
$tdataGRAFICO_VEREDA[".viewFields"][] = "AÑO";

$tdataGRAFICO_VEREDA[".addFields"] = array();
$tdataGRAFICO_VEREDA[".addFields"][] = "VEREDA";
$tdataGRAFICO_VEREDA[".addFields"][] = "LINEA_PRINCIPAL";
$tdataGRAFICO_VEREDA[".addFields"][] = "AÑO";

$tdataGRAFICO_VEREDA[".masterListFields"] = array();
$tdataGRAFICO_VEREDA[".masterListFields"][] = "VEREDA";
$tdataGRAFICO_VEREDA[".masterListFields"][] = "AREA_VEREDA";
$tdataGRAFICO_VEREDA[".masterListFields"][] = "LINEA_PRINCIPAL";
$tdataGRAFICO_VEREDA[".masterListFields"][] = "FINCAS";
$tdataGRAFICO_VEREDA[".masterListFields"][] = "AREA";
$tdataGRAFICO_VEREDA[".masterListFields"][] = "AREA_LIBRE";
$tdataGRAFICO_VEREDA[".masterListFields"][] = "AÑO";

$tdataGRAFICO_VEREDA[".inlineAddFields"] = array();
$tdataGRAFICO_VEREDA[".inlineAddFields"][] = "VEREDA";
$tdataGRAFICO_VEREDA[".inlineAddFields"][] = "LINEA_PRINCIPAL";
$tdataGRAFICO_VEREDA[".inlineAddFields"][] = "AÑO";

$tdataGRAFICO_VEREDA[".editFields"] = array();
$tdataGRAFICO_VEREDA[".editFields"][] = "VEREDA";
$tdataGRAFICO_VEREDA[".editFields"][] = "LINEA_PRINCIPAL";
$tdataGRAFICO_VEREDA[".editFields"][] = "AÑO";

$tdataGRAFICO_VEREDA[".inlineEditFields"] = array();
$tdataGRAFICO_VEREDA[".inlineEditFields"][] = "VEREDA";
$tdataGRAFICO_VEREDA[".inlineEditFields"][] = "LINEA_PRINCIPAL";
$tdataGRAFICO_VEREDA[".inlineEditFields"][] = "AÑO";

$tdataGRAFICO_VEREDA[".exportFields"] = array();
$tdataGRAFICO_VEREDA[".exportFields"][] = "VEREDA";
$tdataGRAFICO_VEREDA[".exportFields"][] = "AREA_VEREDA";
$tdataGRAFICO_VEREDA[".exportFields"][] = "LINEA_PRINCIPAL";
$tdataGRAFICO_VEREDA[".exportFields"][] = "FINCAS";
$tdataGRAFICO_VEREDA[".exportFields"][] = "AREA";
$tdataGRAFICO_VEREDA[".exportFields"][] = "AREA_LIBRE";
$tdataGRAFICO_VEREDA[".exportFields"][] = "AÑO";

$tdataGRAFICO_VEREDA[".importFields"] = array();
$tdataGRAFICO_VEREDA[".importFields"][] = "VEREDA";
$tdataGRAFICO_VEREDA[".importFields"][] = "AREA_VEREDA";
$tdataGRAFICO_VEREDA[".importFields"][] = "LINEA_PRINCIPAL";
$tdataGRAFICO_VEREDA[".importFields"][] = "FINCAS";
$tdataGRAFICO_VEREDA[".importFields"][] = "AREA";
$tdataGRAFICO_VEREDA[".importFields"][] = "AREA_LIBRE";
$tdataGRAFICO_VEREDA[".importFields"][] = "AÑO";

$tdataGRAFICO_VEREDA[".printFields"] = array();
$tdataGRAFICO_VEREDA[".printFields"][] = "VEREDA";
$tdataGRAFICO_VEREDA[".printFields"][] = "AREA_VEREDA";
$tdataGRAFICO_VEREDA[".printFields"][] = "LINEA_PRINCIPAL";
$tdataGRAFICO_VEREDA[".printFields"][] = "FINCAS";
$tdataGRAFICO_VEREDA[".printFields"][] = "AREA";
$tdataGRAFICO_VEREDA[".printFields"][] = "AREA_LIBRE";
$tdataGRAFICO_VEREDA[".printFields"][] = "AÑO";

//	VEREDA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "VEREDA";
	$fdata["GoodName"] = "VEREDA";
	$fdata["ownerTable"] = "finca";
	$fdata["Label"] = GetFieldLabel("GRAFICO_VEREDA","VEREDA");
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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdataGRAFICO_VEREDA["VEREDA"] = $fdata;
//	AREA_VEREDA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "AREA_VEREDA";
	$fdata["GoodName"] = "AREA_VEREDA";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("GRAFICO_VEREDA","AREA_VEREDA");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AREA_VEREDA";

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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdataGRAFICO_VEREDA["AREA_VEREDA"] = $fdata;
//	LINEA_PRINCIPAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "LINEA_PRINCIPAL";
	$fdata["GoodName"] = "LINEA_PRINCIPAL";
	$fdata["ownerTable"] = "finca";
	$fdata["Label"] = GetFieldLabel("GRAFICO_VEREDA","LINEA_PRINCIPAL");
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


	$tdataGRAFICO_VEREDA["LINEA_PRINCIPAL"] = $fdata;
//	FINCAS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "FINCAS";
	$fdata["GoodName"] = "FINCAS";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("GRAFICO_VEREDA","FINCAS");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "FINCAS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(LINEA_PRINCIPAL)";

	
	
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


	$tdataGRAFICO_VEREDA["FINCAS"] = $fdata;
//	AREA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "AREA";
	$fdata["GoodName"] = "AREA";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("GRAFICO_VEREDA","AREA");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AREA";

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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdataGRAFICO_VEREDA["AREA"] = $fdata;
//	AREA_LIBRE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "AREA_LIBRE";
	$fdata["GoodName"] = "AREA_LIBRE";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("GRAFICO_VEREDA","AREA_LIBRE");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AREA_LIBRE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(AREA_FINCA-`AREA_ L_P`)";

	
	
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


	$tdataGRAFICO_VEREDA["AREA_LIBRE"] = $fdata;
//	AÑO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "AÑO";
	$fdata["GoodName"] = "A_O";
	$fdata["ownerTable"] = "finca";
	$fdata["Label"] = GetFieldLabel("GRAFICO_VEREDA","A_O");
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


	$tdataGRAFICO_VEREDA["AÑO"] = $fdata;

	$tdataGRAFICO_VEREDA[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">GRAFICO VEREDA</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdataGRAFICO_VEREDA[".chartXml"] .= '<attr value="0">
			<attr value="name">AREA</attr>';
	$tdataGRAFICO_VEREDA[".chartXml"] .= '</attr>';
	$tdataGRAFICO_VEREDA[".chartXml"] .= '<attr value="1">
			<attr value="name">AREA_LIBRE</attr>';
	$tdataGRAFICO_VEREDA[".chartXml"] .= '</attr>';
	$tdataGRAFICO_VEREDA[".chartXml"] .= '<attr value="2">
			<attr value="name">AREA_VEREDA</attr>';
	$tdataGRAFICO_VEREDA[".chartXml"] .= '</attr>';
	$tdataGRAFICO_VEREDA[".chartXml"] .= '<attr value="3">
			<attr value="name">FINCAS</attr>';
	$tdataGRAFICO_VEREDA[".chartXml"] .= '</attr>';
	$tdataGRAFICO_VEREDA[".chartXml"] .= '<attr value="4">
		<attr value="name">VEREDA</attr>
	</attr>';
	$tdataGRAFICO_VEREDA[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdataGRAFICO_VEREDA[".chartXml"] .= '<attr value="head">'.xmlencode("").'</attr>
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
$tdataGRAFICO_VEREDA[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdataGRAFICO_VEREDA[".chartXml"] .= '<attr value="0">
		<attr value="name">VEREDA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("GRAFICO_VEREDA","VEREDA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataGRAFICO_VEREDA[".chartXml"] .= '<attr value="1">
		<attr value="name">AREA_VEREDA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("GRAFICO_VEREDA","AREA_VEREDA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataGRAFICO_VEREDA[".chartXml"] .= '<attr value="2">
		<attr value="name">LINEA_PRINCIPAL</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("GRAFICO_VEREDA","LINEA_PRINCIPAL")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataGRAFICO_VEREDA[".chartXml"] .= '<attr value="3">
		<attr value="name">FINCAS</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("GRAFICO_VEREDA","FINCAS")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataGRAFICO_VEREDA[".chartXml"] .= '<attr value="4">
		<attr value="name">AREA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("GRAFICO_VEREDA","AREA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataGRAFICO_VEREDA[".chartXml"] .= '<attr value="5">
		<attr value="name">AREA_LIBRE</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("GRAFICO_VEREDA","AREA_LIBRE")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataGRAFICO_VEREDA[".chartXml"] .= '<attr value="6">
		<attr value="name">AÑO</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("GRAFICO_VEREDA","A_O")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdataGRAFICO_VEREDA[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">GRAFICO VEREDA</attr>
<attr value="short_table_name">GRAFICO_VEREDA</attr>
</attr>

</chart>';

$tables_data["GRAFICO VEREDA"]=&$tdataGRAFICO_VEREDA;
$field_labels["GRAFICO_VEREDA"] = &$fieldLabelsGRAFICO_VEREDA;
$fieldToolTips["GRAFICO_VEREDA"] = &$fieldToolTipsGRAFICO_VEREDA;
$page_titles["GRAFICO_VEREDA"] = &$pageTitlesGRAFICO_VEREDA;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["GRAFICO VEREDA"] = array();
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
		
	$detailsTablesData["GRAFICO VEREDA"][$dIndex] = $detailsParam;

	
		$detailsTablesData["GRAFICO VEREDA"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["GRAFICO VEREDA"][$dIndex]["masterKeys"][]="PROPIETARIO_CEDULA";

				$detailsTablesData["GRAFICO VEREDA"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["GRAFICO VEREDA"][$dIndex]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
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
		
	$detailsTablesData["GRAFICO VEREDA"][$dIndex] = $detailsParam;

	
		$detailsTablesData["GRAFICO VEREDA"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["GRAFICO VEREDA"][$dIndex]["masterKeys"][]="PROPIETARIO_CEDULA";

				$detailsTablesData["GRAFICO VEREDA"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["GRAFICO VEREDA"][$dIndex]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
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
		
	$detailsTablesData["GRAFICO VEREDA"][$dIndex] = $detailsParam;

	
		$detailsTablesData["GRAFICO VEREDA"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["GRAFICO VEREDA"][$dIndex]["masterKeys"][]="PROPIETARIO_CEDULA";

				$detailsTablesData["GRAFICO VEREDA"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["GRAFICO VEREDA"][$dIndex]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
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
		
	$detailsTablesData["GRAFICO VEREDA"][$dIndex] = $detailsParam;

	
		$detailsTablesData["GRAFICO VEREDA"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["GRAFICO VEREDA"][$dIndex]["masterKeys"][]="PROPIETARIO_CEDULA";

				$detailsTablesData["GRAFICO VEREDA"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["GRAFICO VEREDA"][$dIndex]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
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
		
	$detailsTablesData["GRAFICO VEREDA"][$dIndex] = $detailsParam;

	
		$detailsTablesData["GRAFICO VEREDA"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["GRAFICO VEREDA"][$dIndex]["masterKeys"][]="PROPIETARIO_CEDULA";

				$detailsTablesData["GRAFICO VEREDA"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["GRAFICO VEREDA"][$dIndex]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
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
		
	$detailsTablesData["GRAFICO VEREDA"][$dIndex] = $detailsParam;

	
		$detailsTablesData["GRAFICO VEREDA"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["GRAFICO VEREDA"][$dIndex]["masterKeys"][]="PROPIETARIO_CEDULA";

				$detailsTablesData["GRAFICO VEREDA"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["GRAFICO VEREDA"][$dIndex]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";

// tables which are master tables for current table (detail)
$masterTablesData["GRAFICO VEREDA"] = array();


	
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
					$masterTablesData["GRAFICO VEREDA"][0] = $masterParams;
				$masterTablesData["GRAFICO VEREDA"][0]["masterKeys"] = array();
	$masterTablesData["GRAFICO VEREDA"][0]["masterKeys"][]="CEDULA";
				$masterTablesData["GRAFICO VEREDA"][0]["detailKeys"] = array();
	$masterTablesData["GRAFICO VEREDA"][0]["detailKeys"][]="PROPIETARIO_CEDULA";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_GRAFICO_VEREDA()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT  DISTINCT";
$proto0["m_strFieldList"] = "VEREDA,  SUM(AREA_FINCA) AS AREA_VEREDA,  LINEA_PRINCIPAL,  COUNT(LINEA_PRINCIPAL) AS FINCAS,  SUM(`AREA_ L_P`) AS AREA,  SUM(AREA_FINCA-`AREA_ L_P`)AS AREA_LIBRE,  `AÑO`";
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
	"m_srcTableName" => "GRAFICO VEREDA"
));

$proto6["m_sql"] = "VEREDA";
$proto6["m_srcTableName"] = "GRAFICO VEREDA";
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
	"m_srcTableName" => "GRAFICO VEREDA"
));

$proto9["m_arguments"][]=$obj;
$proto9["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto9);

$proto8["m_sql"] = "SUM(AREA_FINCA)";
$proto8["m_srcTableName"] = "GRAFICO VEREDA";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "AREA_VEREDA";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "LINEA_PRINCIPAL",
	"m_strTable" => "finca",
	"m_srcTableName" => "GRAFICO VEREDA"
));

$proto11["m_sql"] = "LINEA_PRINCIPAL";
$proto11["m_srcTableName"] = "GRAFICO VEREDA";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$proto14=array();
$proto14["m_functiontype"] = "SQLF_COUNT";
$proto14["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "LINEA_PRINCIPAL",
	"m_strTable" => "finca",
	"m_srcTableName" => "GRAFICO VEREDA"
));

$proto14["m_arguments"][]=$obj;
$proto14["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto14);

$proto13["m_sql"] = "COUNT(LINEA_PRINCIPAL)";
$proto13["m_srcTableName"] = "GRAFICO VEREDA";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "FINCAS";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$proto17=array();
$proto17["m_functiontype"] = "SQLF_SUM";
$proto17["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "AREA_ L_P",
	"m_strTable" => "finca",
	"m_srcTableName" => "GRAFICO VEREDA"
));

$proto17["m_arguments"][]=$obj;
$proto17["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto17);

$proto16["m_sql"] = "SUM(`AREA_ L_P`)";
$proto16["m_srcTableName"] = "GRAFICO VEREDA";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "AREA";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$proto20=array();
$proto20["m_functiontype"] = "SQLF_SUM";
$proto20["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "AREA_FINCA-`AREA_ L_P`"
));

$proto20["m_arguments"][]=$obj;
$proto20["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto20);

$proto19["m_sql"] = "SUM(AREA_FINCA-`AREA_ L_P`)";
$proto19["m_srcTableName"] = "GRAFICO VEREDA";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "AREA_LIBRE";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "finca",
	"m_srcTableName" => "GRAFICO VEREDA"
));

$proto22["m_sql"] = "`AÑO`";
$proto22["m_srcTableName"] = "GRAFICO VEREDA";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "finca";
$proto25["m_srcTableName"] = "GRAFICO VEREDA";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "ID";
$proto25["m_columns"][] = "PROPIETARIO_CEDULA";
$proto25["m_columns"][] = "NOMBRE";
$proto25["m_columns"][] = "VEREDA";
$proto25["m_columns"][] = "FINCA";
$proto25["m_columns"][] = "ALTURA";
$proto25["m_columns"][] = "GEOREFERENCIA";
$proto25["m_columns"][] = "AREA_FINCA";
$proto25["m_columns"][] = "LINEA_PRINCIPAL";
$proto25["m_columns"][] = "AREA_ L_P";
$proto25["m_columns"][] = "AÑO";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "finca";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "GRAFICO VEREDA";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto28=array();
						$obj = new SQLField(array(
	"m_strName" => "VEREDA",
	"m_strTable" => "finca",
	"m_srcTableName" => "GRAFICO VEREDA"
));

$proto28["m_column"]=$obj;
$obj = new SQLGroupByItem($proto28);

$proto0["m_groupby"][]=$obj;
												$proto30=array();
						$obj = new SQLField(array(
	"m_strName" => "LINEA_PRINCIPAL",
	"m_strTable" => "finca",
	"m_srcTableName" => "GRAFICO VEREDA"
));

$proto30["m_column"]=$obj;
$obj = new SQLGroupByItem($proto30);

$proto0["m_groupby"][]=$obj;
												$proto32=array();
						$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "finca",
	"m_srcTableName" => "GRAFICO VEREDA"
));

$proto32["m_column"]=$obj;
$obj = new SQLGroupByItem($proto32);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="GRAFICO VEREDA";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_GRAFICO_VEREDA = createSqlQuery_GRAFICO_VEREDA();


	
		;

							

$tdataGRAFICO_VEREDA[".sqlquery"] = $queryData_GRAFICO_VEREDA;

$tableEvents["GRAFICO VEREDA"] = new eventsBase;
$tdataGRAFICO_VEREDA[".hasEvents"] = false;

?>