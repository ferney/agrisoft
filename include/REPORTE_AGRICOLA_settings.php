<?php
require_once(getabspath("classes/cipherer.php"));




$tdataREPORTE_AGRICOLA = array();
	$tdataREPORTE_AGRICOLA[".truncateText"] = true;
	$tdataREPORTE_AGRICOLA[".NumberOfChars"] = 80;
	$tdataREPORTE_AGRICOLA[".ShortName"] = "REPORTE_AGRICOLA";
	$tdataREPORTE_AGRICOLA[".OwnerID"] = "";
	$tdataREPORTE_AGRICOLA[".OriginalTable"] = "agricola";

//	field labels
$fieldLabelsREPORTE_AGRICOLA = array();
$fieldToolTipsREPORTE_AGRICOLA = array();
$pageTitlesREPORTE_AGRICOLA = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsREPORTE_AGRICOLA["Spanish"] = array();
	$fieldToolTipsREPORTE_AGRICOLA["Spanish"] = array();
	$pageTitlesREPORTE_AGRICOLA["Spanish"] = array();
	$fieldLabelsREPORTE_AGRICOLA["Spanish"]["VEREDA"] = "VEREDA";
	$fieldToolTipsREPORTE_AGRICOLA["Spanish"]["VEREDA"] = "";
	$fieldLabelsREPORTE_AGRICOLA["Spanish"]["VARIEDAD"] = "VARIEDAD";
	$fieldToolTipsREPORTE_AGRICOLA["Spanish"]["VARIEDAD"] = "";
	$fieldLabelsREPORTE_AGRICOLA["Spanish"]["AREA"] = "AREA";
	$fieldToolTipsREPORTE_AGRICOLA["Spanish"]["AREA"] = "";
	$fieldLabelsREPORTE_AGRICOLA["Spanish"]["PRODUCCION_ANUAL"] = "PRODUCCION ANUAL";
	$fieldToolTipsREPORTE_AGRICOLA["Spanish"]["PRODUCCION_ANUAL"] = "";
	$fieldLabelsREPORTE_AGRICOLA["Spanish"]["A_O"] = "AÑO";
	$fieldToolTipsREPORTE_AGRICOLA["Spanish"]["A_O"] = "";
	if (count($fieldToolTipsREPORTE_AGRICOLA["Spanish"]))
		$tdataREPORTE_AGRICOLA[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsREPORTE_AGRICOLA[""] = array();
	$fieldToolTipsREPORTE_AGRICOLA[""] = array();
	$pageTitlesREPORTE_AGRICOLA[""] = array();
	$fieldLabelsREPORTE_AGRICOLA[""]["VEREDA"] = "VEREDA";
	$fieldToolTipsREPORTE_AGRICOLA[""]["VEREDA"] = "";
	$fieldLabelsREPORTE_AGRICOLA[""]["VARIEDAD"] = "VARIEDAD";
	$fieldToolTipsREPORTE_AGRICOLA[""]["VARIEDAD"] = "";
	$fieldLabelsREPORTE_AGRICOLA[""]["AREA"] = "AREA";
	$fieldToolTipsREPORTE_AGRICOLA[""]["AREA"] = "";
	$fieldLabelsREPORTE_AGRICOLA[""]["PRODUCCION_ANUAL"] = "PRODUCCION ANUAL";
	$fieldToolTipsREPORTE_AGRICOLA[""]["PRODUCCION_ANUAL"] = "";
	$fieldLabelsREPORTE_AGRICOLA[""]["A_O"] = "AÑO";
	$fieldToolTipsREPORTE_AGRICOLA[""]["A_O"] = "";
	if (count($fieldToolTipsREPORTE_AGRICOLA[""]))
		$tdataREPORTE_AGRICOLA[".isUseToolTips"] = true;
}


	$tdataREPORTE_AGRICOLA[".NCSearch"] = true;



$tdataREPORTE_AGRICOLA[".shortTableName"] = "REPORTE_AGRICOLA";
$tdataREPORTE_AGRICOLA[".nSecOptions"] = 0;
$tdataREPORTE_AGRICOLA[".recsPerRowPrint"] = 1;
$tdataREPORTE_AGRICOLA[".mainTableOwnerID"] = "";
$tdataREPORTE_AGRICOLA[".moveNext"] = 1;
$tdataREPORTE_AGRICOLA[".entityType"] = 2;

$tdataREPORTE_AGRICOLA[".strOriginalTableName"] = "agricola";

	



$tdataREPORTE_AGRICOLA[".showAddInPopup"] = false;

$tdataREPORTE_AGRICOLA[".showEditInPopup"] = false;

$tdataREPORTE_AGRICOLA[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataREPORTE_AGRICOLA[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataREPORTE_AGRICOLA[".fieldsForRegister"] = array();

$tdataREPORTE_AGRICOLA[".listAjax"] = false;

	$tdataREPORTE_AGRICOLA[".audit"] = false;

	$tdataREPORTE_AGRICOLA[".locking"] = false;


$tdataREPORTE_AGRICOLA[".add"] = true;
$tdataREPORTE_AGRICOLA[".afterAddAction"] = 1;
$tdataREPORTE_AGRICOLA[".closePopupAfterAdd"] = 1;
$tdataREPORTE_AGRICOLA[".afterAddActionDetTable"] = "";

$tdataREPORTE_AGRICOLA[".list"] = true;



$tdataREPORTE_AGRICOLA[".exportTo"] = true;

$tdataREPORTE_AGRICOLA[".printFriendly"] = true;


$tdataREPORTE_AGRICOLA[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataREPORTE_AGRICOLA[".searchSaving"] = false;
//

$tdataREPORTE_AGRICOLA[".showSearchPanel"] = true;
		$tdataREPORTE_AGRICOLA[".flexibleSearch"] = true;

$tdataREPORTE_AGRICOLA[".isUseAjaxSuggest"] = true;




$tdataREPORTE_AGRICOLA[".addPageEvents"] = false;

// use timepicker for search panel
$tdataREPORTE_AGRICOLA[".isUseTimeForSearch"] = false;





$tdataREPORTE_AGRICOLA[".allSearchFields"] = array();
$tdataREPORTE_AGRICOLA[".filterFields"] = array();
$tdataREPORTE_AGRICOLA[".requiredSearchFields"] = array();

$tdataREPORTE_AGRICOLA[".allSearchFields"][] = "VEREDA";
	$tdataREPORTE_AGRICOLA[".allSearchFields"][] = "VARIEDAD";
	$tdataREPORTE_AGRICOLA[".allSearchFields"][] = "AREA";
	$tdataREPORTE_AGRICOLA[".allSearchFields"][] = "PRODUCCION_ANUAL";
	$tdataREPORTE_AGRICOLA[".allSearchFields"][] = "AÑO";
	

$tdataREPORTE_AGRICOLA[".googleLikeFields"] = array();
$tdataREPORTE_AGRICOLA[".googleLikeFields"][] = "VEREDA";
$tdataREPORTE_AGRICOLA[".googleLikeFields"][] = "VARIEDAD";
$tdataREPORTE_AGRICOLA[".googleLikeFields"][] = "AREA";
$tdataREPORTE_AGRICOLA[".googleLikeFields"][] = "PRODUCCION_ANUAL";
$tdataREPORTE_AGRICOLA[".googleLikeFields"][] = "AÑO";


$tdataREPORTE_AGRICOLA[".advSearchFields"] = array();
$tdataREPORTE_AGRICOLA[".advSearchFields"][] = "VEREDA";
$tdataREPORTE_AGRICOLA[".advSearchFields"][] = "VARIEDAD";
$tdataREPORTE_AGRICOLA[".advSearchFields"][] = "AREA";
$tdataREPORTE_AGRICOLA[".advSearchFields"][] = "PRODUCCION_ANUAL";
$tdataREPORTE_AGRICOLA[".advSearchFields"][] = "AÑO";

$tdataREPORTE_AGRICOLA[".tableType"] = "report";

$tdataREPORTE_AGRICOLA[".printerPageOrientation"] = 0;
$tdataREPORTE_AGRICOLA[".nPrinterPageScale"] = 100;

$tdataREPORTE_AGRICOLA[".nPrinterSplitRecords"] = 40;

$tdataREPORTE_AGRICOLA[".nPrinterPDFSplitRecords"] = 40;



$tdataREPORTE_AGRICOLA[".geocodingEnabled"] = false;

//report settings
$tdataREPORTE_AGRICOLA[".printReportLayout"] = 6;

$tdataREPORTE_AGRICOLA[".reportPrintPartitionType"] = 1;
$tdataREPORTE_AGRICOLA[".reportPrintGroupsPerPage"] = 40;
$tdataREPORTE_AGRICOLA[".reportPrintPDFGroupsPerPage"] = 40;
$tdataREPORTE_AGRICOLA[".lowGroup"] = 0;



$tdataREPORTE_AGRICOLA[".pageSize"] = 20;






$tdataREPORTE_AGRICOLA[".repShowDet"] = true;

$tdataREPORTE_AGRICOLA[".reportLayout"] = 6;

//end of report settings




$tdataREPORTE_AGRICOLA[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataREPORTE_AGRICOLA[".strOrderBy"] = $tstrOrderBy;

$tdataREPORTE_AGRICOLA[".orderindexes"] = array();

$tdataREPORTE_AGRICOLA[".sqlHead"] = "SELECT  DISTINCT VEREDA,  VARIEDAD,  AREA,  PRODUCCION_ANUAL,  `AÑO`";
$tdataREPORTE_AGRICOLA[".sqlFrom"] = "FROM agricola";
$tdataREPORTE_AGRICOLA[".sqlWhereExpr"] = "";
$tdataREPORTE_AGRICOLA[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataREPORTE_AGRICOLA[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataREPORTE_AGRICOLA[".arrGroupsPerPage"] = $arrGPP;

$tdataREPORTE_AGRICOLA[".highlightSearchResults"] = true;

$tableKeysREPORTE_AGRICOLA = array();
$tdataREPORTE_AGRICOLA[".Keys"] = $tableKeysREPORTE_AGRICOLA;

$tdataREPORTE_AGRICOLA[".listFields"] = array();
$tdataREPORTE_AGRICOLA[".listFields"][] = "VEREDA";
$tdataREPORTE_AGRICOLA[".listFields"][] = "VARIEDAD";
$tdataREPORTE_AGRICOLA[".listFields"][] = "AREA";
$tdataREPORTE_AGRICOLA[".listFields"][] = "PRODUCCION_ANUAL";
$tdataREPORTE_AGRICOLA[".listFields"][] = "AÑO";

$tdataREPORTE_AGRICOLA[".hideMobileList"] = array();


$tdataREPORTE_AGRICOLA[".viewFields"] = array();
$tdataREPORTE_AGRICOLA[".viewFields"][] = "VEREDA";
$tdataREPORTE_AGRICOLA[".viewFields"][] = "VARIEDAD";
$tdataREPORTE_AGRICOLA[".viewFields"][] = "AREA";
$tdataREPORTE_AGRICOLA[".viewFields"][] = "PRODUCCION_ANUAL";
$tdataREPORTE_AGRICOLA[".viewFields"][] = "AÑO";

$tdataREPORTE_AGRICOLA[".addFields"] = array();
$tdataREPORTE_AGRICOLA[".addFields"][] = "VEREDA";
$tdataREPORTE_AGRICOLA[".addFields"][] = "VARIEDAD";
$tdataREPORTE_AGRICOLA[".addFields"][] = "AREA";
$tdataREPORTE_AGRICOLA[".addFields"][] = "PRODUCCION_ANUAL";
$tdataREPORTE_AGRICOLA[".addFields"][] = "AÑO";

$tdataREPORTE_AGRICOLA[".masterListFields"] = array();
$tdataREPORTE_AGRICOLA[".masterListFields"][] = "VEREDA";
$tdataREPORTE_AGRICOLA[".masterListFields"][] = "VARIEDAD";
$tdataREPORTE_AGRICOLA[".masterListFields"][] = "AREA";
$tdataREPORTE_AGRICOLA[".masterListFields"][] = "PRODUCCION_ANUAL";
$tdataREPORTE_AGRICOLA[".masterListFields"][] = "AÑO";

$tdataREPORTE_AGRICOLA[".inlineAddFields"] = array();
$tdataREPORTE_AGRICOLA[".inlineAddFields"][] = "VEREDA";
$tdataREPORTE_AGRICOLA[".inlineAddFields"][] = "VARIEDAD";
$tdataREPORTE_AGRICOLA[".inlineAddFields"][] = "AREA";
$tdataREPORTE_AGRICOLA[".inlineAddFields"][] = "PRODUCCION_ANUAL";
$tdataREPORTE_AGRICOLA[".inlineAddFields"][] = "AÑO";

$tdataREPORTE_AGRICOLA[".editFields"] = array();
$tdataREPORTE_AGRICOLA[".editFields"][] = "VEREDA";
$tdataREPORTE_AGRICOLA[".editFields"][] = "VARIEDAD";
$tdataREPORTE_AGRICOLA[".editFields"][] = "AREA";
$tdataREPORTE_AGRICOLA[".editFields"][] = "PRODUCCION_ANUAL";
$tdataREPORTE_AGRICOLA[".editFields"][] = "AÑO";

$tdataREPORTE_AGRICOLA[".inlineEditFields"] = array();
$tdataREPORTE_AGRICOLA[".inlineEditFields"][] = "VEREDA";
$tdataREPORTE_AGRICOLA[".inlineEditFields"][] = "VARIEDAD";
$tdataREPORTE_AGRICOLA[".inlineEditFields"][] = "AREA";
$tdataREPORTE_AGRICOLA[".inlineEditFields"][] = "PRODUCCION_ANUAL";
$tdataREPORTE_AGRICOLA[".inlineEditFields"][] = "AÑO";

$tdataREPORTE_AGRICOLA[".exportFields"] = array();
$tdataREPORTE_AGRICOLA[".exportFields"][] = "VEREDA";
$tdataREPORTE_AGRICOLA[".exportFields"][] = "VARIEDAD";
$tdataREPORTE_AGRICOLA[".exportFields"][] = "AREA";
$tdataREPORTE_AGRICOLA[".exportFields"][] = "PRODUCCION_ANUAL";
$tdataREPORTE_AGRICOLA[".exportFields"][] = "AÑO";

$tdataREPORTE_AGRICOLA[".importFields"] = array();
$tdataREPORTE_AGRICOLA[".importFields"][] = "VEREDA";
$tdataREPORTE_AGRICOLA[".importFields"][] = "VARIEDAD";
$tdataREPORTE_AGRICOLA[".importFields"][] = "AREA";
$tdataREPORTE_AGRICOLA[".importFields"][] = "PRODUCCION_ANUAL";
$tdataREPORTE_AGRICOLA[".importFields"][] = "AÑO";

$tdataREPORTE_AGRICOLA[".printFields"] = array();
$tdataREPORTE_AGRICOLA[".printFields"][] = "VEREDA";
$tdataREPORTE_AGRICOLA[".printFields"][] = "VARIEDAD";
$tdataREPORTE_AGRICOLA[".printFields"][] = "AREA";
$tdataREPORTE_AGRICOLA[".printFields"][] = "PRODUCCION_ANUAL";
$tdataREPORTE_AGRICOLA[".printFields"][] = "AÑO";

//	VEREDA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "VEREDA";
	$fdata["GoodName"] = "VEREDA";
	$fdata["ownerTable"] = "agricola";
	$fdata["Label"] = GetFieldLabel("REPORTE_AGRICOLA","VEREDA");
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

		$fdata["strField"] = "VEREDA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VEREDA";

	
	
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




	$tdataREPORTE_AGRICOLA["VEREDA"] = $fdata;
//	VARIEDAD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "VARIEDAD";
	$fdata["GoodName"] = "VARIEDAD";
	$fdata["ownerTable"] = "agricola";
	$fdata["Label"] = GetFieldLabel("REPORTE_AGRICOLA","VARIEDAD");
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

		$fdata["strField"] = "VARIEDAD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VARIEDAD";

	
	
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
	$edata["LookupValues"][] = "AHUYAMA";
	$edata["LookupValues"][] = "AJI";
	$edata["LookupValues"][] = "AROMATICAS";
	$edata["LookupValues"][] = "ARVEJA";
	$edata["LookupValues"][] = "BERENJENA";
	$edata["LookupValues"][] = "CILANTRO";
	$edata["LookupValues"][] = "HABICHUELA";
	$edata["LookupValues"][] = "HORTALIZAS VRIAS";
	$edata["LookupValues"][] = "HUERTA";
	$edata["LookupValues"][] = "MAIZ";
	$edata["LookupValues"][] = "PAPA";
	$edata["LookupValues"][] = "PEREJIL";
	$edata["LookupValues"][] = "PIMENTON";
	$edata["LookupValues"][] = "PLATANO";
	$edata["LookupValues"][] = "TOMATE";
	$edata["LookupValues"][] = "YUCA";
	$edata["LookupValues"][] = "ZANAHORIA";

	
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




	$tdataREPORTE_AGRICOLA["VARIEDAD"] = $fdata;
//	AREA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "AREA";
	$fdata["GoodName"] = "AREA";
	$fdata["ownerTable"] = "agricola";
	$fdata["Label"] = GetFieldLabel("REPORTE_AGRICOLA","AREA");
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




	$tdataREPORTE_AGRICOLA["AREA"] = $fdata;
//	PRODUCCION_ANUAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "PRODUCCION_ANUAL";
	$fdata["GoodName"] = "PRODUCCION_ANUAL";
	$fdata["ownerTable"] = "agricola";
	$fdata["Label"] = GetFieldLabel("REPORTE_AGRICOLA","PRODUCCION_ANUAL");
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




	$tdataREPORTE_AGRICOLA["PRODUCCION_ANUAL"] = $fdata;
//	AÑO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "AÑO";
	$fdata["GoodName"] = "A_O";
	$fdata["ownerTable"] = "agricola";
	$fdata["Label"] = GetFieldLabel("REPORTE_AGRICOLA","A_O");
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataREPORTE_AGRICOLA["AÑO"] = $fdata;


$tables_data["REPORTE AGRICOLA"]=&$tdataREPORTE_AGRICOLA;
$field_labels["REPORTE_AGRICOLA"] = &$fieldLabelsREPORTE_AGRICOLA;
$fieldToolTips["REPORTE_AGRICOLA"] = &$fieldToolTipsREPORTE_AGRICOLA;
$page_titles["REPORTE_AGRICOLA"] = &$pageTitlesREPORTE_AGRICOLA;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["REPORTE AGRICOLA"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["REPORTE AGRICOLA"] = array();


	
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
					$masterTablesData["REPORTE AGRICOLA"][0] = $masterParams;
				$masterTablesData["REPORTE AGRICOLA"][0]["masterKeys"] = array();
	$masterTablesData["REPORTE AGRICOLA"][0]["masterKeys"][]="PROPIETARIO_CEDULA";
				$masterTablesData["REPORTE AGRICOLA"][0]["detailKeys"] = array();
	$masterTablesData["REPORTE AGRICOLA"][0]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_REPORTE_AGRICOLA()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT  DISTINCT";
$proto0["m_strFieldList"] = "VEREDA,  VARIEDAD,  AREA,  PRODUCCION_ANUAL,  `AÑO`";
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
	"m_srcTableName" => "REPORTE AGRICOLA"
));

$proto6["m_sql"] = "VEREDA";
$proto6["m_srcTableName"] = "REPORTE AGRICOLA";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "VARIEDAD",
	"m_strTable" => "agricola",
	"m_srcTableName" => "REPORTE AGRICOLA"
));

$proto8["m_sql"] = "VARIEDAD";
$proto8["m_srcTableName"] = "REPORTE AGRICOLA";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "AREA",
	"m_strTable" => "agricola",
	"m_srcTableName" => "REPORTE AGRICOLA"
));

$proto10["m_sql"] = "AREA";
$proto10["m_srcTableName"] = "REPORTE AGRICOLA";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "PRODUCCION_ANUAL",
	"m_strTable" => "agricola",
	"m_srcTableName" => "REPORTE AGRICOLA"
));

$proto12["m_sql"] = "PRODUCCION_ANUAL";
$proto12["m_srcTableName"] = "REPORTE AGRICOLA";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "agricola",
	"m_srcTableName" => "REPORTE AGRICOLA"
));

$proto14["m_sql"] = "`AÑO`";
$proto14["m_srcTableName"] = "REPORTE AGRICOLA";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "agricola";
$proto17["m_srcTableName"] = "REPORTE AGRICOLA";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "ID";
$proto17["m_columns"][] = "FINCA_PROPIETARIO_CEDULA";
$proto17["m_columns"][] = "NOMBRE";
$proto17["m_columns"][] = "VEREDA";
$proto17["m_columns"][] = "FINCA";
$proto17["m_columns"][] = "VARIEDAD";
$proto17["m_columns"][] = "AREA";
$proto17["m_columns"][] = "PRODUCCION_ANUAL";
$proto17["m_columns"][] = "AÑO";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "agricola";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "REPORTE AGRICOLA";
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
	"m_strName" => "VEREDA",
	"m_strTable" => "agricola",
	"m_srcTableName" => "REPORTE AGRICOLA"
));

$proto20["m_column"]=$obj;
$obj = new SQLGroupByItem($proto20);

$proto0["m_groupby"][]=$obj;
												$proto22=array();
						$obj = new SQLField(array(
	"m_strName" => "VARIEDAD",
	"m_strTable" => "agricola",
	"m_srcTableName" => "REPORTE AGRICOLA"
));

$proto22["m_column"]=$obj;
$obj = new SQLGroupByItem($proto22);

$proto0["m_groupby"][]=$obj;
												$proto24=array();
						$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "agricola",
	"m_srcTableName" => "REPORTE AGRICOLA"
));

$proto24["m_column"]=$obj;
$obj = new SQLGroupByItem($proto24);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="REPORTE AGRICOLA";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_REPORTE_AGRICOLA = createSqlQuery_REPORTE_AGRICOLA();


	
		;

					

$tdataREPORTE_AGRICOLA[".sqlquery"] = $queryData_REPORTE_AGRICOLA;

$tableEvents["REPORTE AGRICOLA"] = new eventsBase;
$tdataREPORTE_AGRICOLA[".hasEvents"] = false;

?>