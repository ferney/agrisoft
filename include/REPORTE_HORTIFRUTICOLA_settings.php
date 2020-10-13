<?php
require_once(getabspath("classes/cipherer.php"));




$tdataREPORTE_HORTIFRUTICOLA = array();
	$tdataREPORTE_HORTIFRUTICOLA[".truncateText"] = true;
	$tdataREPORTE_HORTIFRUTICOLA[".NumberOfChars"] = 80;
	$tdataREPORTE_HORTIFRUTICOLA[".ShortName"] = "REPORTE_HORTIFRUTICOLA";
	$tdataREPORTE_HORTIFRUTICOLA[".OwnerID"] = "";
	$tdataREPORTE_HORTIFRUTICOLA[".OriginalTable"] = "hortifruticola";

//	field labels
$fieldLabelsREPORTE_HORTIFRUTICOLA = array();
$fieldToolTipsREPORTE_HORTIFRUTICOLA = array();
$pageTitlesREPORTE_HORTIFRUTICOLA = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsREPORTE_HORTIFRUTICOLA["Spanish"] = array();
	$fieldToolTipsREPORTE_HORTIFRUTICOLA["Spanish"] = array();
	$pageTitlesREPORTE_HORTIFRUTICOLA["Spanish"] = array();
	$fieldLabelsREPORTE_HORTIFRUTICOLA["Spanish"]["VEREDA"] = "VEREDA";
	$fieldToolTipsREPORTE_HORTIFRUTICOLA["Spanish"]["VEREDA"] = "";
	$fieldLabelsREPORTE_HORTIFRUTICOLA["Spanish"]["VARIEDAD"] = "VARIEDAD";
	$fieldToolTipsREPORTE_HORTIFRUTICOLA["Spanish"]["VARIEDAD"] = "";
	$fieldLabelsREPORTE_HORTIFRUTICOLA["Spanish"]["A_O"] = "AÑO";
	$fieldToolTipsREPORTE_HORTIFRUTICOLA["Spanish"]["A_O"] = "";
	$fieldLabelsREPORTE_HORTIFRUTICOLA["Spanish"]["AREA_OCUPADA"] = "AREA OCUPADA";
	$fieldToolTipsREPORTE_HORTIFRUTICOLA["Spanish"]["AREA_OCUPADA"] = "";
	$fieldLabelsREPORTE_HORTIFRUTICOLA["Spanish"]["PRODUCCION_ANUAL"] = "PRODUCCION ANUAL";
	$fieldToolTipsREPORTE_HORTIFRUTICOLA["Spanish"]["PRODUCCION_ANUAL"] = "";
	if (count($fieldToolTipsREPORTE_HORTIFRUTICOLA["Spanish"]))
		$tdataREPORTE_HORTIFRUTICOLA[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsREPORTE_HORTIFRUTICOLA[""] = array();
	$fieldToolTipsREPORTE_HORTIFRUTICOLA[""] = array();
	$pageTitlesREPORTE_HORTIFRUTICOLA[""] = array();
	$fieldLabelsREPORTE_HORTIFRUTICOLA[""]["VEREDA"] = "VEREDA";
	$fieldToolTipsREPORTE_HORTIFRUTICOLA[""]["VEREDA"] = "";
	$fieldLabelsREPORTE_HORTIFRUTICOLA[""]["VARIEDAD"] = "VARIEDAD";
	$fieldToolTipsREPORTE_HORTIFRUTICOLA[""]["VARIEDAD"] = "";
	$fieldLabelsREPORTE_HORTIFRUTICOLA[""]["A_O"] = "AÑO";
	$fieldToolTipsREPORTE_HORTIFRUTICOLA[""]["A_O"] = "";
	$fieldLabelsREPORTE_HORTIFRUTICOLA[""]["AREA_OCUPADA"] = "AREA OCUPADA";
	$fieldToolTipsREPORTE_HORTIFRUTICOLA[""]["AREA_OCUPADA"] = "";
	$fieldLabelsREPORTE_HORTIFRUTICOLA[""]["PRODUCCION_ANUAL"] = "PRODUCCION ANUAL";
	$fieldToolTipsREPORTE_HORTIFRUTICOLA[""]["PRODUCCION_ANUAL"] = "";
	if (count($fieldToolTipsREPORTE_HORTIFRUTICOLA[""]))
		$tdataREPORTE_HORTIFRUTICOLA[".isUseToolTips"] = true;
}


	$tdataREPORTE_HORTIFRUTICOLA[".NCSearch"] = true;



$tdataREPORTE_HORTIFRUTICOLA[".shortTableName"] = "REPORTE_HORTIFRUTICOLA";
$tdataREPORTE_HORTIFRUTICOLA[".nSecOptions"] = 0;
$tdataREPORTE_HORTIFRUTICOLA[".recsPerRowPrint"] = 1;
$tdataREPORTE_HORTIFRUTICOLA[".mainTableOwnerID"] = "";
$tdataREPORTE_HORTIFRUTICOLA[".moveNext"] = 1;
$tdataREPORTE_HORTIFRUTICOLA[".entityType"] = 2;

$tdataREPORTE_HORTIFRUTICOLA[".strOriginalTableName"] = "hortifruticola";

	



$tdataREPORTE_HORTIFRUTICOLA[".showAddInPopup"] = false;

$tdataREPORTE_HORTIFRUTICOLA[".showEditInPopup"] = false;

$tdataREPORTE_HORTIFRUTICOLA[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataREPORTE_HORTIFRUTICOLA[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataREPORTE_HORTIFRUTICOLA[".fieldsForRegister"] = array();

$tdataREPORTE_HORTIFRUTICOLA[".listAjax"] = false;

	$tdataREPORTE_HORTIFRUTICOLA[".audit"] = false;

	$tdataREPORTE_HORTIFRUTICOLA[".locking"] = false;


$tdataREPORTE_HORTIFRUTICOLA[".add"] = true;
$tdataREPORTE_HORTIFRUTICOLA[".afterAddAction"] = 1;
$tdataREPORTE_HORTIFRUTICOLA[".closePopupAfterAdd"] = 1;
$tdataREPORTE_HORTIFRUTICOLA[".afterAddActionDetTable"] = "";

$tdataREPORTE_HORTIFRUTICOLA[".list"] = true;



$tdataREPORTE_HORTIFRUTICOLA[".exportTo"] = true;

$tdataREPORTE_HORTIFRUTICOLA[".printFriendly"] = true;


$tdataREPORTE_HORTIFRUTICOLA[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataREPORTE_HORTIFRUTICOLA[".searchSaving"] = false;
//

$tdataREPORTE_HORTIFRUTICOLA[".showSearchPanel"] = true;
		$tdataREPORTE_HORTIFRUTICOLA[".flexibleSearch"] = true;

$tdataREPORTE_HORTIFRUTICOLA[".isUseAjaxSuggest"] = true;




$tdataREPORTE_HORTIFRUTICOLA[".addPageEvents"] = false;

// use timepicker for search panel
$tdataREPORTE_HORTIFRUTICOLA[".isUseTimeForSearch"] = false;





$tdataREPORTE_HORTIFRUTICOLA[".allSearchFields"] = array();
$tdataREPORTE_HORTIFRUTICOLA[".filterFields"] = array();
$tdataREPORTE_HORTIFRUTICOLA[".requiredSearchFields"] = array();

$tdataREPORTE_HORTIFRUTICOLA[".allSearchFields"][] = "VEREDA";
	$tdataREPORTE_HORTIFRUTICOLA[".allSearchFields"][] = "VARIEDAD";
	$tdataREPORTE_HORTIFRUTICOLA[".allSearchFields"][] = "AREA_OCUPADA";
	$tdataREPORTE_HORTIFRUTICOLA[".allSearchFields"][] = "PRODUCCION_ANUAL";
	$tdataREPORTE_HORTIFRUTICOLA[".allSearchFields"][] = "AÑO";
	

$tdataREPORTE_HORTIFRUTICOLA[".googleLikeFields"] = array();
$tdataREPORTE_HORTIFRUTICOLA[".googleLikeFields"][] = "VEREDA";
$tdataREPORTE_HORTIFRUTICOLA[".googleLikeFields"][] = "VARIEDAD";
$tdataREPORTE_HORTIFRUTICOLA[".googleLikeFields"][] = "AREA_OCUPADA";
$tdataREPORTE_HORTIFRUTICOLA[".googleLikeFields"][] = "PRODUCCION_ANUAL";
$tdataREPORTE_HORTIFRUTICOLA[".googleLikeFields"][] = "AÑO";


$tdataREPORTE_HORTIFRUTICOLA[".advSearchFields"] = array();
$tdataREPORTE_HORTIFRUTICOLA[".advSearchFields"][] = "VEREDA";
$tdataREPORTE_HORTIFRUTICOLA[".advSearchFields"][] = "VARIEDAD";
$tdataREPORTE_HORTIFRUTICOLA[".advSearchFields"][] = "AREA_OCUPADA";
$tdataREPORTE_HORTIFRUTICOLA[".advSearchFields"][] = "PRODUCCION_ANUAL";
$tdataREPORTE_HORTIFRUTICOLA[".advSearchFields"][] = "AÑO";

$tdataREPORTE_HORTIFRUTICOLA[".tableType"] = "report";

$tdataREPORTE_HORTIFRUTICOLA[".printerPageOrientation"] = 0;
$tdataREPORTE_HORTIFRUTICOLA[".nPrinterPageScale"] = 100;

$tdataREPORTE_HORTIFRUTICOLA[".nPrinterSplitRecords"] = 40;

$tdataREPORTE_HORTIFRUTICOLA[".nPrinterPDFSplitRecords"] = 40;



$tdataREPORTE_HORTIFRUTICOLA[".geocodingEnabled"] = false;

//report settings
$tdataREPORTE_HORTIFRUTICOLA[".printReportLayout"] = 6;

$tdataREPORTE_HORTIFRUTICOLA[".reportPrintPartitionType"] = 1;
$tdataREPORTE_HORTIFRUTICOLA[".reportPrintGroupsPerPage"] = 40;
$tdataREPORTE_HORTIFRUTICOLA[".reportPrintPDFGroupsPerPage"] = 40;
$tdataREPORTE_HORTIFRUTICOLA[".lowGroup"] = 0;



$tdataREPORTE_HORTIFRUTICOLA[".pageSize"] = 20;






$tdataREPORTE_HORTIFRUTICOLA[".repShowDet"] = true;

$tdataREPORTE_HORTIFRUTICOLA[".reportLayout"] = 6;

//end of report settings




$tdataREPORTE_HORTIFRUTICOLA[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataREPORTE_HORTIFRUTICOLA[".strOrderBy"] = $tstrOrderBy;

$tdataREPORTE_HORTIFRUTICOLA[".orderindexes"] = array();

$tdataREPORTE_HORTIFRUTICOLA[".sqlHead"] = "SELECT  DISTINCT VEREDA,  VARIEDAD,  SUM(AREA) AS AREA_OCUPADA,  PRODUCCION_ANUAL,  `AÑO`";
$tdataREPORTE_HORTIFRUTICOLA[".sqlFrom"] = "FROM hortifruticola";
$tdataREPORTE_HORTIFRUTICOLA[".sqlWhereExpr"] = "";
$tdataREPORTE_HORTIFRUTICOLA[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataREPORTE_HORTIFRUTICOLA[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataREPORTE_HORTIFRUTICOLA[".arrGroupsPerPage"] = $arrGPP;

$tdataREPORTE_HORTIFRUTICOLA[".highlightSearchResults"] = true;

$tableKeysREPORTE_HORTIFRUTICOLA = array();
$tdataREPORTE_HORTIFRUTICOLA[".Keys"] = $tableKeysREPORTE_HORTIFRUTICOLA;

$tdataREPORTE_HORTIFRUTICOLA[".listFields"] = array();
$tdataREPORTE_HORTIFRUTICOLA[".listFields"][] = "VEREDA";
$tdataREPORTE_HORTIFRUTICOLA[".listFields"][] = "VARIEDAD";
$tdataREPORTE_HORTIFRUTICOLA[".listFields"][] = "AREA_OCUPADA";
$tdataREPORTE_HORTIFRUTICOLA[".listFields"][] = "PRODUCCION_ANUAL";
$tdataREPORTE_HORTIFRUTICOLA[".listFields"][] = "AÑO";

$tdataREPORTE_HORTIFRUTICOLA[".hideMobileList"] = array();


$tdataREPORTE_HORTIFRUTICOLA[".viewFields"] = array();
$tdataREPORTE_HORTIFRUTICOLA[".viewFields"][] = "VEREDA";
$tdataREPORTE_HORTIFRUTICOLA[".viewFields"][] = "VARIEDAD";
$tdataREPORTE_HORTIFRUTICOLA[".viewFields"][] = "AREA_OCUPADA";
$tdataREPORTE_HORTIFRUTICOLA[".viewFields"][] = "PRODUCCION_ANUAL";
$tdataREPORTE_HORTIFRUTICOLA[".viewFields"][] = "AÑO";

$tdataREPORTE_HORTIFRUTICOLA[".addFields"] = array();
$tdataREPORTE_HORTIFRUTICOLA[".addFields"][] = "VEREDA";
$tdataREPORTE_HORTIFRUTICOLA[".addFields"][] = "VARIEDAD";
$tdataREPORTE_HORTIFRUTICOLA[".addFields"][] = "PRODUCCION_ANUAL";
$tdataREPORTE_HORTIFRUTICOLA[".addFields"][] = "AÑO";

$tdataREPORTE_HORTIFRUTICOLA[".masterListFields"] = array();
$tdataREPORTE_HORTIFRUTICOLA[".masterListFields"][] = "VEREDA";
$tdataREPORTE_HORTIFRUTICOLA[".masterListFields"][] = "VARIEDAD";
$tdataREPORTE_HORTIFRUTICOLA[".masterListFields"][] = "AREA_OCUPADA";
$tdataREPORTE_HORTIFRUTICOLA[".masterListFields"][] = "PRODUCCION_ANUAL";
$tdataREPORTE_HORTIFRUTICOLA[".masterListFields"][] = "AÑO";

$tdataREPORTE_HORTIFRUTICOLA[".inlineAddFields"] = array();
$tdataREPORTE_HORTIFRUTICOLA[".inlineAddFields"][] = "VEREDA";
$tdataREPORTE_HORTIFRUTICOLA[".inlineAddFields"][] = "VARIEDAD";
$tdataREPORTE_HORTIFRUTICOLA[".inlineAddFields"][] = "PRODUCCION_ANUAL";
$tdataREPORTE_HORTIFRUTICOLA[".inlineAddFields"][] = "AÑO";

$tdataREPORTE_HORTIFRUTICOLA[".editFields"] = array();
$tdataREPORTE_HORTIFRUTICOLA[".editFields"][] = "VEREDA";
$tdataREPORTE_HORTIFRUTICOLA[".editFields"][] = "VARIEDAD";
$tdataREPORTE_HORTIFRUTICOLA[".editFields"][] = "PRODUCCION_ANUAL";
$tdataREPORTE_HORTIFRUTICOLA[".editFields"][] = "AÑO";

$tdataREPORTE_HORTIFRUTICOLA[".inlineEditFields"] = array();
$tdataREPORTE_HORTIFRUTICOLA[".inlineEditFields"][] = "VEREDA";
$tdataREPORTE_HORTIFRUTICOLA[".inlineEditFields"][] = "VARIEDAD";
$tdataREPORTE_HORTIFRUTICOLA[".inlineEditFields"][] = "PRODUCCION_ANUAL";
$tdataREPORTE_HORTIFRUTICOLA[".inlineEditFields"][] = "AÑO";

$tdataREPORTE_HORTIFRUTICOLA[".exportFields"] = array();
$tdataREPORTE_HORTIFRUTICOLA[".exportFields"][] = "VEREDA";
$tdataREPORTE_HORTIFRUTICOLA[".exportFields"][] = "VARIEDAD";
$tdataREPORTE_HORTIFRUTICOLA[".exportFields"][] = "AREA_OCUPADA";
$tdataREPORTE_HORTIFRUTICOLA[".exportFields"][] = "PRODUCCION_ANUAL";
$tdataREPORTE_HORTIFRUTICOLA[".exportFields"][] = "AÑO";

$tdataREPORTE_HORTIFRUTICOLA[".importFields"] = array();
$tdataREPORTE_HORTIFRUTICOLA[".importFields"][] = "VEREDA";
$tdataREPORTE_HORTIFRUTICOLA[".importFields"][] = "VARIEDAD";
$tdataREPORTE_HORTIFRUTICOLA[".importFields"][] = "AREA_OCUPADA";
$tdataREPORTE_HORTIFRUTICOLA[".importFields"][] = "PRODUCCION_ANUAL";
$tdataREPORTE_HORTIFRUTICOLA[".importFields"][] = "AÑO";

$tdataREPORTE_HORTIFRUTICOLA[".printFields"] = array();
$tdataREPORTE_HORTIFRUTICOLA[".printFields"][] = "VEREDA";
$tdataREPORTE_HORTIFRUTICOLA[".printFields"][] = "VARIEDAD";
$tdataREPORTE_HORTIFRUTICOLA[".printFields"][] = "AREA_OCUPADA";
$tdataREPORTE_HORTIFRUTICOLA[".printFields"][] = "PRODUCCION_ANUAL";
$tdataREPORTE_HORTIFRUTICOLA[".printFields"][] = "AÑO";

//	VEREDA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "VEREDA";
	$fdata["GoodName"] = "VEREDA";
	$fdata["ownerTable"] = "hortifruticola";
	$fdata["Label"] = GetFieldLabel("REPORTE_HORTIFRUTICOLA","VEREDA");
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




	$tdataREPORTE_HORTIFRUTICOLA["VEREDA"] = $fdata;
//	VARIEDAD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "VARIEDAD";
	$fdata["GoodName"] = "VARIEDAD";
	$fdata["ownerTable"] = "hortifruticola";
	$fdata["Label"] = GetFieldLabel("REPORTE_HORTIFRUTICOLA","VARIEDAD");
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
	$edata["LookupValues"][] = "AGUACATE";
	$edata["LookupValues"][] = "BANANILLO BOCADILLO";
	$edata["LookupValues"][] = "BANANO";
	$edata["LookupValues"][] = "CHIRIMOYA";
	$edata["LookupValues"][] = "CURUBA";
	$edata["LookupValues"][] = "FEIJOA";
	$edata["LookupValues"][] = "FRESA";
	$edata["LookupValues"][] = "GRANADILLA";
	$edata["LookupValues"][] = "GUANABANA";
	$edata["LookupValues"][] = "GUAYABA";
	$edata["LookupValues"][] = "LIMON MANDARINA";
	$edata["LookupValues"][] = "LIMON TAHITI";
	$edata["LookupValues"][] = "LIMON COMÚN";
	$edata["LookupValues"][] = "LULO";
	$edata["LookupValues"][] = "MAMONCILLO";
	$edata["LookupValues"][] = "MANDARINA";
	$edata["LookupValues"][] = "MANGO";
	$edata["LookupValues"][] = "MARACUYÁ";
	$edata["LookupValues"][] = "MELON";
	$edata["LookupValues"][] = "NARANJA";
	$edata["LookupValues"][] = "MORA";
	$edata["LookupValues"][] = "PAPAYA";
	$edata["LookupValues"][] = "PIÑA";
	$edata["LookupValues"][] = "TAMARINDO";
	$edata["LookupValues"][] = "TOMATE ARBOL";
	$edata["LookupValues"][] = "ZAPOTE";
	$edata["LookupValues"][] = "OTRO";

	
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




	$tdataREPORTE_HORTIFRUTICOLA["VARIEDAD"] = $fdata;
//	AREA_OCUPADA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "AREA_OCUPADA";
	$fdata["GoodName"] = "AREA_OCUPADA";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("REPORTE_HORTIFRUTICOLA","AREA_OCUPADA");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AREA_OCUPADA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(AREA)";

	
	
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




	$tdataREPORTE_HORTIFRUTICOLA["AREA_OCUPADA"] = $fdata;
//	PRODUCCION_ANUAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "PRODUCCION_ANUAL";
	$fdata["GoodName"] = "PRODUCCION_ANUAL";
	$fdata["ownerTable"] = "hortifruticola";
	$fdata["Label"] = GetFieldLabel("REPORTE_HORTIFRUTICOLA","PRODUCCION_ANUAL");
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




	$tdataREPORTE_HORTIFRUTICOLA["PRODUCCION_ANUAL"] = $fdata;
//	AÑO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "AÑO";
	$fdata["GoodName"] = "A_O";
	$fdata["ownerTable"] = "hortifruticola";
	$fdata["Label"] = GetFieldLabel("REPORTE_HORTIFRUTICOLA","A_O");
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




	$tdataREPORTE_HORTIFRUTICOLA["AÑO"] = $fdata;


$tables_data["REPORTE HORTIFRUTICOLA"]=&$tdataREPORTE_HORTIFRUTICOLA;
$field_labels["REPORTE_HORTIFRUTICOLA"] = &$fieldLabelsREPORTE_HORTIFRUTICOLA;
$fieldToolTips["REPORTE_HORTIFRUTICOLA"] = &$fieldToolTipsREPORTE_HORTIFRUTICOLA;
$page_titles["REPORTE_HORTIFRUTICOLA"] = &$pageTitlesREPORTE_HORTIFRUTICOLA;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["REPORTE HORTIFRUTICOLA"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["REPORTE HORTIFRUTICOLA"] = array();


	
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
					$masterTablesData["REPORTE HORTIFRUTICOLA"][0] = $masterParams;
				$masterTablesData["REPORTE HORTIFRUTICOLA"][0]["masterKeys"] = array();
	$masterTablesData["REPORTE HORTIFRUTICOLA"][0]["masterKeys"][]="PROPIETARIO_CEDULA";
				$masterTablesData["REPORTE HORTIFRUTICOLA"][0]["detailKeys"] = array();
	$masterTablesData["REPORTE HORTIFRUTICOLA"][0]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_REPORTE_HORTIFRUTICOLA()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT  DISTINCT";
$proto0["m_strFieldList"] = "VEREDA,  VARIEDAD,  SUM(AREA) AS AREA_OCUPADA,  PRODUCCION_ANUAL,  `AÑO`";
$proto0["m_strFrom"] = "FROM hortifruticola";
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
	"m_strTable" => "hortifruticola",
	"m_srcTableName" => "REPORTE HORTIFRUTICOLA"
));

$proto6["m_sql"] = "VEREDA";
$proto6["m_srcTableName"] = "REPORTE HORTIFRUTICOLA";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "VARIEDAD",
	"m_strTable" => "hortifruticola",
	"m_srcTableName" => "REPORTE HORTIFRUTICOLA"
));

$proto8["m_sql"] = "VARIEDAD";
$proto8["m_srcTableName"] = "REPORTE HORTIFRUTICOLA";
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
	"m_strTable" => "hortifruticola",
	"m_srcTableName" => "REPORTE HORTIFRUTICOLA"
));

$proto11["m_arguments"][]=$obj;
$proto11["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto11);

$proto10["m_sql"] = "SUM(AREA)";
$proto10["m_srcTableName"] = "REPORTE HORTIFRUTICOLA";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "AREA_OCUPADA";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "PRODUCCION_ANUAL",
	"m_strTable" => "hortifruticola",
	"m_srcTableName" => "REPORTE HORTIFRUTICOLA"
));

$proto13["m_sql"] = "PRODUCCION_ANUAL";
$proto13["m_srcTableName"] = "REPORTE HORTIFRUTICOLA";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "hortifruticola",
	"m_srcTableName" => "REPORTE HORTIFRUTICOLA"
));

$proto15["m_sql"] = "`AÑO`";
$proto15["m_srcTableName"] = "REPORTE HORTIFRUTICOLA";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "hortifruticola";
$proto18["m_srcTableName"] = "REPORTE HORTIFRUTICOLA";
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
$proto17["m_sql"] = "hortifruticola";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "REPORTE HORTIFRUTICOLA";
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
	"m_strTable" => "hortifruticola",
	"m_srcTableName" => "REPORTE HORTIFRUTICOLA"
));

$proto21["m_column"]=$obj;
$obj = new SQLGroupByItem($proto21);

$proto0["m_groupby"][]=$obj;
												$proto23=array();
						$obj = new SQLField(array(
	"m_strName" => "VARIEDAD",
	"m_strTable" => "hortifruticola",
	"m_srcTableName" => "REPORTE HORTIFRUTICOLA"
));

$proto23["m_column"]=$obj;
$obj = new SQLGroupByItem($proto23);

$proto0["m_groupby"][]=$obj;
												$proto25=array();
						$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "hortifruticola",
	"m_srcTableName" => "REPORTE HORTIFRUTICOLA"
));

$proto25["m_column"]=$obj;
$obj = new SQLGroupByItem($proto25);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="REPORTE HORTIFRUTICOLA";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_REPORTE_HORTIFRUTICOLA = createSqlQuery_REPORTE_HORTIFRUTICOLA();


	
		;

					

$tdataREPORTE_HORTIFRUTICOLA[".sqlquery"] = $queryData_REPORTE_HORTIFRUTICOLA;

$tableEvents["REPORTE HORTIFRUTICOLA"] = new eventsBase;
$tdataREPORTE_HORTIFRUTICOLA[".hasEvents"] = false;

?>