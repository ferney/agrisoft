<?php
require_once(getabspath("classes/cipherer.php"));




$tdataREPORTE_LINEAS = array();
	$tdataREPORTE_LINEAS[".truncateText"] = true;
	$tdataREPORTE_LINEAS[".NumberOfChars"] = 80;
	$tdataREPORTE_LINEAS[".ShortName"] = "REPORTE_LINEAS";
	$tdataREPORTE_LINEAS[".OwnerID"] = "";
	$tdataREPORTE_LINEAS[".OriginalTable"] = "lineas_agrarias";

//	field labels
$fieldLabelsREPORTE_LINEAS = array();
$fieldToolTipsREPORTE_LINEAS = array();
$pageTitlesREPORTE_LINEAS = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsREPORTE_LINEAS["Spanish"] = array();
	$fieldToolTipsREPORTE_LINEAS["Spanish"] = array();
	$pageTitlesREPORTE_LINEAS["Spanish"] = array();
	$fieldLabelsREPORTE_LINEAS["Spanish"]["VEREDA"] = "VEREDA";
	$fieldToolTipsREPORTE_LINEAS["Spanish"]["VEREDA"] = "";
	$fieldLabelsREPORTE_LINEAS["Spanish"]["LINEA"] = "LINEA";
	$fieldToolTipsREPORTE_LINEAS["Spanish"]["LINEA"] = "";
	$fieldLabelsREPORTE_LINEAS["Spanish"]["A_O"] = "AÑO";
	$fieldToolTipsREPORTE_LINEAS["Spanish"]["A_O"] = "";
	$fieldLabelsREPORTE_LINEAS["Spanish"]["NUMERO"] = "NUMERO";
	$fieldToolTipsREPORTE_LINEAS["Spanish"]["NUMERO"] = "";
	$fieldLabelsREPORTE_LINEAS["Spanish"]["VARIEDAD"] = "VARIEDAD";
	$fieldToolTipsREPORTE_LINEAS["Spanish"]["VARIEDAD"] = "";
	$fieldLabelsREPORTE_LINEAS["Spanish"]["PRODUCCION_ANUAL"] = "PRODUCCION ANUAL";
	$fieldToolTipsREPORTE_LINEAS["Spanish"]["PRODUCCION_ANUAL"] = "";
	if (count($fieldToolTipsREPORTE_LINEAS["Spanish"]))
		$tdataREPORTE_LINEAS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsREPORTE_LINEAS[""] = array();
	$fieldToolTipsREPORTE_LINEAS[""] = array();
	$pageTitlesREPORTE_LINEAS[""] = array();
	$fieldLabelsREPORTE_LINEAS[""]["VEREDA"] = "VEREDA";
	$fieldToolTipsREPORTE_LINEAS[""]["VEREDA"] = "";
	$fieldLabelsREPORTE_LINEAS[""]["LINEA"] = "LINEA";
	$fieldToolTipsREPORTE_LINEAS[""]["LINEA"] = "";
	$fieldLabelsREPORTE_LINEAS[""]["A_O"] = "AÑO";
	$fieldToolTipsREPORTE_LINEAS[""]["A_O"] = "";
	$fieldLabelsREPORTE_LINEAS[""]["NUMERO"] = "NUMERO";
	$fieldToolTipsREPORTE_LINEAS[""]["NUMERO"] = "";
	$fieldLabelsREPORTE_LINEAS[""]["VARIEDAD"] = "VARIEDAD";
	$fieldToolTipsREPORTE_LINEAS[""]["VARIEDAD"] = "";
	$fieldLabelsREPORTE_LINEAS[""]["PRODUCCION_ANUAL"] = "PRODUCCION ANUAL";
	$fieldToolTipsREPORTE_LINEAS[""]["PRODUCCION_ANUAL"] = "";
	if (count($fieldToolTipsREPORTE_LINEAS[""]))
		$tdataREPORTE_LINEAS[".isUseToolTips"] = true;
}


	$tdataREPORTE_LINEAS[".NCSearch"] = true;



$tdataREPORTE_LINEAS[".shortTableName"] = "REPORTE_LINEAS";
$tdataREPORTE_LINEAS[".nSecOptions"] = 0;
$tdataREPORTE_LINEAS[".recsPerRowPrint"] = 1;
$tdataREPORTE_LINEAS[".mainTableOwnerID"] = "";
$tdataREPORTE_LINEAS[".moveNext"] = 1;
$tdataREPORTE_LINEAS[".entityType"] = 2;

$tdataREPORTE_LINEAS[".strOriginalTableName"] = "lineas_agrarias";

	



$tdataREPORTE_LINEAS[".showAddInPopup"] = false;

$tdataREPORTE_LINEAS[".showEditInPopup"] = false;

$tdataREPORTE_LINEAS[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataREPORTE_LINEAS[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataREPORTE_LINEAS[".fieldsForRegister"] = array();

$tdataREPORTE_LINEAS[".listAjax"] = false;

	$tdataREPORTE_LINEAS[".audit"] = false;

	$tdataREPORTE_LINEAS[".locking"] = false;


$tdataREPORTE_LINEAS[".add"] = true;
$tdataREPORTE_LINEAS[".afterAddAction"] = 1;
$tdataREPORTE_LINEAS[".closePopupAfterAdd"] = 1;
$tdataREPORTE_LINEAS[".afterAddActionDetTable"] = "";

$tdataREPORTE_LINEAS[".list"] = true;



$tdataREPORTE_LINEAS[".exportTo"] = true;

$tdataREPORTE_LINEAS[".printFriendly"] = true;


$tdataREPORTE_LINEAS[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataREPORTE_LINEAS[".searchSaving"] = false;
//

$tdataREPORTE_LINEAS[".showSearchPanel"] = true;
		$tdataREPORTE_LINEAS[".flexibleSearch"] = true;

$tdataREPORTE_LINEAS[".isUseAjaxSuggest"] = true;




$tdataREPORTE_LINEAS[".addPageEvents"] = false;

// use timepicker for search panel
$tdataREPORTE_LINEAS[".isUseTimeForSearch"] = false;





$tdataREPORTE_LINEAS[".allSearchFields"] = array();
$tdataREPORTE_LINEAS[".filterFields"] = array();
$tdataREPORTE_LINEAS[".requiredSearchFields"] = array();

$tdataREPORTE_LINEAS[".allSearchFields"][] = "VEREDA";
	$tdataREPORTE_LINEAS[".allSearchFields"][] = "LINEA";
	$tdataREPORTE_LINEAS[".allSearchFields"][] = "NUMERO";
	$tdataREPORTE_LINEAS[".allSearchFields"][] = "VARIEDAD";
	$tdataREPORTE_LINEAS[".allSearchFields"][] = "PRODUCCION_ANUAL";
	$tdataREPORTE_LINEAS[".allSearchFields"][] = "AÑO";
	

$tdataREPORTE_LINEAS[".googleLikeFields"] = array();
$tdataREPORTE_LINEAS[".googleLikeFields"][] = "VEREDA";
$tdataREPORTE_LINEAS[".googleLikeFields"][] = "LINEA";
$tdataREPORTE_LINEAS[".googleLikeFields"][] = "NUMERO";
$tdataREPORTE_LINEAS[".googleLikeFields"][] = "VARIEDAD";
$tdataREPORTE_LINEAS[".googleLikeFields"][] = "PRODUCCION_ANUAL";
$tdataREPORTE_LINEAS[".googleLikeFields"][] = "AÑO";


$tdataREPORTE_LINEAS[".advSearchFields"] = array();
$tdataREPORTE_LINEAS[".advSearchFields"][] = "VEREDA";
$tdataREPORTE_LINEAS[".advSearchFields"][] = "LINEA";
$tdataREPORTE_LINEAS[".advSearchFields"][] = "NUMERO";
$tdataREPORTE_LINEAS[".advSearchFields"][] = "VARIEDAD";
$tdataREPORTE_LINEAS[".advSearchFields"][] = "PRODUCCION_ANUAL";
$tdataREPORTE_LINEAS[".advSearchFields"][] = "AÑO";

$tdataREPORTE_LINEAS[".tableType"] = "report";

$tdataREPORTE_LINEAS[".printerPageOrientation"] = 0;
$tdataREPORTE_LINEAS[".nPrinterPageScale"] = 100;

$tdataREPORTE_LINEAS[".nPrinterSplitRecords"] = 40;

$tdataREPORTE_LINEAS[".nPrinterPDFSplitRecords"] = 40;



$tdataREPORTE_LINEAS[".geocodingEnabled"] = false;

//report settings
$tdataREPORTE_LINEAS[".printReportLayout"] = 6;

$tdataREPORTE_LINEAS[".reportPrintPartitionType"] = 1;
$tdataREPORTE_LINEAS[".reportPrintGroupsPerPage"] = 40;
$tdataREPORTE_LINEAS[".reportPrintPDFGroupsPerPage"] = 40;
$tdataREPORTE_LINEAS[".lowGroup"] = 0;



$tdataREPORTE_LINEAS[".pageSize"] = 20;






$tdataREPORTE_LINEAS[".repShowDet"] = true;

$tdataREPORTE_LINEAS[".reportLayout"] = 6;

//end of report settings




$tdataREPORTE_LINEAS[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataREPORTE_LINEAS[".strOrderBy"] = $tstrOrderBy;

$tdataREPORTE_LINEAS[".orderindexes"] = array();

$tdataREPORTE_LINEAS[".sqlHead"] = "SELECT  DISTINCT VEREDA,  LINEA,  COUNT(LINEA) AS NUMERO,  VARIEDAD,  PRODUCCION_ANUAL,  `AÑO`";
$tdataREPORTE_LINEAS[".sqlFrom"] = "FROM lineas_agrarias";
$tdataREPORTE_LINEAS[".sqlWhereExpr"] = "";
$tdataREPORTE_LINEAS[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataREPORTE_LINEAS[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataREPORTE_LINEAS[".arrGroupsPerPage"] = $arrGPP;

$tdataREPORTE_LINEAS[".highlightSearchResults"] = true;

$tableKeysREPORTE_LINEAS = array();
$tdataREPORTE_LINEAS[".Keys"] = $tableKeysREPORTE_LINEAS;

$tdataREPORTE_LINEAS[".listFields"] = array();
$tdataREPORTE_LINEAS[".listFields"][] = "VEREDA";
$tdataREPORTE_LINEAS[".listFields"][] = "LINEA";
$tdataREPORTE_LINEAS[".listFields"][] = "NUMERO";
$tdataREPORTE_LINEAS[".listFields"][] = "VARIEDAD";
$tdataREPORTE_LINEAS[".listFields"][] = "PRODUCCION_ANUAL";
$tdataREPORTE_LINEAS[".listFields"][] = "AÑO";

$tdataREPORTE_LINEAS[".hideMobileList"] = array();


$tdataREPORTE_LINEAS[".viewFields"] = array();
$tdataREPORTE_LINEAS[".viewFields"][] = "VEREDA";
$tdataREPORTE_LINEAS[".viewFields"][] = "LINEA";
$tdataREPORTE_LINEAS[".viewFields"][] = "NUMERO";
$tdataREPORTE_LINEAS[".viewFields"][] = "VARIEDAD";
$tdataREPORTE_LINEAS[".viewFields"][] = "PRODUCCION_ANUAL";
$tdataREPORTE_LINEAS[".viewFields"][] = "AÑO";

$tdataREPORTE_LINEAS[".addFields"] = array();
$tdataREPORTE_LINEAS[".addFields"][] = "VEREDA";
$tdataREPORTE_LINEAS[".addFields"][] = "LINEA";
$tdataREPORTE_LINEAS[".addFields"][] = "VARIEDAD";
$tdataREPORTE_LINEAS[".addFields"][] = "PRODUCCION_ANUAL";
$tdataREPORTE_LINEAS[".addFields"][] = "AÑO";

$tdataREPORTE_LINEAS[".masterListFields"] = array();
$tdataREPORTE_LINEAS[".masterListFields"][] = "VEREDA";
$tdataREPORTE_LINEAS[".masterListFields"][] = "LINEA";
$tdataREPORTE_LINEAS[".masterListFields"][] = "NUMERO";
$tdataREPORTE_LINEAS[".masterListFields"][] = "VARIEDAD";
$tdataREPORTE_LINEAS[".masterListFields"][] = "PRODUCCION_ANUAL";
$tdataREPORTE_LINEAS[".masterListFields"][] = "AÑO";

$tdataREPORTE_LINEAS[".inlineAddFields"] = array();
$tdataREPORTE_LINEAS[".inlineAddFields"][] = "VEREDA";
$tdataREPORTE_LINEAS[".inlineAddFields"][] = "LINEA";
$tdataREPORTE_LINEAS[".inlineAddFields"][] = "VARIEDAD";
$tdataREPORTE_LINEAS[".inlineAddFields"][] = "PRODUCCION_ANUAL";
$tdataREPORTE_LINEAS[".inlineAddFields"][] = "AÑO";

$tdataREPORTE_LINEAS[".editFields"] = array();
$tdataREPORTE_LINEAS[".editFields"][] = "VEREDA";
$tdataREPORTE_LINEAS[".editFields"][] = "LINEA";
$tdataREPORTE_LINEAS[".editFields"][] = "VARIEDAD";
$tdataREPORTE_LINEAS[".editFields"][] = "PRODUCCION_ANUAL";
$tdataREPORTE_LINEAS[".editFields"][] = "AÑO";

$tdataREPORTE_LINEAS[".inlineEditFields"] = array();
$tdataREPORTE_LINEAS[".inlineEditFields"][] = "VEREDA";
$tdataREPORTE_LINEAS[".inlineEditFields"][] = "LINEA";
$tdataREPORTE_LINEAS[".inlineEditFields"][] = "VARIEDAD";
$tdataREPORTE_LINEAS[".inlineEditFields"][] = "PRODUCCION_ANUAL";
$tdataREPORTE_LINEAS[".inlineEditFields"][] = "AÑO";

$tdataREPORTE_LINEAS[".exportFields"] = array();
$tdataREPORTE_LINEAS[".exportFields"][] = "VEREDA";
$tdataREPORTE_LINEAS[".exportFields"][] = "LINEA";
$tdataREPORTE_LINEAS[".exportFields"][] = "NUMERO";
$tdataREPORTE_LINEAS[".exportFields"][] = "VARIEDAD";
$tdataREPORTE_LINEAS[".exportFields"][] = "PRODUCCION_ANUAL";
$tdataREPORTE_LINEAS[".exportFields"][] = "AÑO";

$tdataREPORTE_LINEAS[".importFields"] = array();
$tdataREPORTE_LINEAS[".importFields"][] = "VEREDA";
$tdataREPORTE_LINEAS[".importFields"][] = "LINEA";
$tdataREPORTE_LINEAS[".importFields"][] = "NUMERO";
$tdataREPORTE_LINEAS[".importFields"][] = "VARIEDAD";
$tdataREPORTE_LINEAS[".importFields"][] = "PRODUCCION_ANUAL";
$tdataREPORTE_LINEAS[".importFields"][] = "AÑO";

$tdataREPORTE_LINEAS[".printFields"] = array();
$tdataREPORTE_LINEAS[".printFields"][] = "VEREDA";
$tdataREPORTE_LINEAS[".printFields"][] = "LINEA";
$tdataREPORTE_LINEAS[".printFields"][] = "NUMERO";
$tdataREPORTE_LINEAS[".printFields"][] = "VARIEDAD";
$tdataREPORTE_LINEAS[".printFields"][] = "PRODUCCION_ANUAL";
$tdataREPORTE_LINEAS[".printFields"][] = "AÑO";

//	VEREDA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "VEREDA";
	$fdata["GoodName"] = "VEREDA";
	$fdata["ownerTable"] = "lineas_agrarias";
	$fdata["Label"] = GetFieldLabel("REPORTE_LINEAS","VEREDA");
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




	$tdataREPORTE_LINEAS["VEREDA"] = $fdata;
//	LINEA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "LINEA";
	$fdata["GoodName"] = "LINEA";
	$fdata["ownerTable"] = "lineas_agrarias";
	$fdata["Label"] = GetFieldLabel("REPORTE_LINEAS","LINEA");
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

		$fdata["strField"] = "LINEA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LINEA";

	
	
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
	$edata["LookupValues"][] = "CAFE";
	$edata["LookupValues"][] = "CAÑA";
	$edata["LookupValues"][] = "FIQUE";
	$edata["LookupValues"][] = "HORTIFRUTICOLA";
	$edata["LookupValues"][] = "PECUARIO";
	$edata["LookupValues"][] = "NINGUNO";

	
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




	$tdataREPORTE_LINEAS["LINEA"] = $fdata;
//	NUMERO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "NUMERO";
	$fdata["GoodName"] = "NUMERO";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("REPORTE_LINEAS","NUMERO");
	$fdata["FieldType"] = 3;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NUMERO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(LINEA)";

	
	
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




	$tdataREPORTE_LINEAS["NUMERO"] = $fdata;
//	VARIEDAD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "VARIEDAD";
	$fdata["GoodName"] = "VARIEDAD";
	$fdata["ownerTable"] = "lineas_agrarias";
	$fdata["Label"] = GetFieldLabel("REPORTE_LINEAS","VARIEDAD");
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
	$edata["LookupValues"][] = "------CAFE------";
	$edata["LookupValues"][] = "CASTILLA";
	$edata["LookupValues"][] = "VARIEDAD COLOMBIA";
	$edata["LookupValues"][] = "CATURRA";
	$edata["LookupValues"][] = "OTRO";
	$edata["LookupValues"][] = "----BOVINOS----";
	$edata["LookupValues"][] = "CHINO SANTANDEREANO";
	$edata["LookupValues"][] = "COSTEÑO";
	$edata["LookupValues"][] = "HOLSTEYN";
	$edata["LookupValues"][] = "AYRSHINE";
	$edata["LookupValues"][] = "PARDO SUIZO";
	$edata["LookupValues"][] = "NORMANDO";
	$edata["LookupValues"][] = "CEBÚ";
	$edata["LookupValues"][] = "CRIOLLO";
	$edata["LookupValues"][] = "BRAHMAN";
	$edata["LookupValues"][] = "JIROLANDO";
	$edata["LookupValues"][] = "BUFALO";
	$edata["LookupValues"][] = "SIMENTAL";
	$edata["LookupValues"][] = "OTRO";
	$edata["LookupValues"][] = "----PORCINOS----";
	$edata["LookupValues"][] = "CARE PALO";
	$edata["LookupValues"][] = "CASCO DE MULA";
	$edata["LookupValues"][] = "CHOCOANO";
	$edata["LookupValues"][] = "CONGO";
	$edata["LookupValues"][] = "CURI";
	$edata["LookupValues"][] = "DUROC";
	$edata["LookupValues"][] = "ZUNGO";
	$edata["LookupValues"][] = "CHONCHO";
	$edata["LookupValues"][] = "OTRO";
	$edata["LookupValues"][] = "----CAPRINOS----";
	$edata["LookupValues"][] = "SAANEN";
	$edata["LookupValues"][] = "ALPINA";
	$edata["LookupValues"][] = "BOER";
	$edata["LookupValues"][] = "LAMANCHA";
	$edata["LookupValues"][] = "ANGLONUBIANA";
	$edata["LookupValues"][] = "TOGGENBURG";
	$edata["LookupValues"][] = "CRIOLLA";
	$edata["LookupValues"][] = "OTRO";
	$edata["LookupValues"][] = "----OVINOS----";
	$edata["LookupValues"][] = "KATAHDIN";
	$edata["LookupValues"][] = "SANTA INES";
	$edata["LookupValues"][] = "DORPER";
	$edata["LookupValues"][] = "PELIBUEY";
	$edata["LookupValues"][] = "CHAROLLAIS";
	$edata["LookupValues"][] = "OTRO";
	$edata["LookupValues"][] = "----AVES----";
	$edata["LookupValues"][] = "CARIOCA";
	$edata["LookupValues"][] = "CHUSCA";
	$edata["LookupValues"][] = "COPETONA";
	$edata["LookupValues"][] = "NICARAGUA";
	$edata["LookupValues"][] = "SANTANDEREANA";
	$edata["LookupValues"][] = "GIGANTE";
	$edata["LookupValues"][] = "OTRO";
	$edata["LookupValues"][] = "----ACUICOLA----";
	$edata["LookupValues"][] = "BOCACHICO";
	$edata["LookupValues"][] = "CACHAMA";
	$edata["LookupValues"][] = "CARPA";
	$edata["LookupValues"][] = "TILAPIA";
	$edata["LookupValues"][] = "TRUCHA";
	$edata["LookupValues"][] = "OTRO";
	$edata["LookupValues"][] = "----CAÑA----";
	$edata["LookupValues"][] = "AZUCARERA";
	$edata["LookupValues"][] = "PANELERA";
	$edata["LookupValues"][] = "CRIOLLA";
	$edata["LookupValues"][] = "VARIEDADES CENICAÑA";
	$edata["LookupValues"][] = "----FIQUE----";
	$edata["LookupValues"][] = "CASTILLA";
	$edata["LookupValues"][] = "CENIZA";
	$edata["LookupValues"][] = "COMUN";
	$edata["LookupValues"][] = "ESPINOSO";
	$edata["LookupValues"][] = "FRONTERA";
	$edata["LookupValues"][] = "VERDE DE CABUYA";
	$edata["LookupValues"][] = "UÑA DE AGUILA";
	$edata["LookupValues"][] = "OTRO";
	$edata["LookupValues"][] = "----FRUTAS----";
	$edata["LookupValues"][] = "TROPICALES (Banana, guayaba, mango, etc)";
	$edata["LookupValues"][] = "BOSQUE (Mora, Fresa, Frambuesa, etc)";
	$edata["LookupValues"][] = "CITRICAS (Naranja, limon, mandarina, etc)";
	$edata["LookupValues"][] = "SECOS (Tamarindo, almendras, etc)";
	$edata["LookupValues"][] = "----HORTALIZAS----";
	$edata["LookupValues"][] = "FRUTOS (Berenjena, Tomate, Calabaza, etc)";
	$edata["LookupValues"][] = "BULBOS (Cebolla cabezona, etc)";
	$edata["LookupValues"][] = "FLOR (Coliflor, Alcachofa, etc)";
	$edata["LookupValues"][] = "HUERTA (Lechuga, Perejil, Cilantro, etc )";
	$edata["LookupValues"][] = "LEGUMBRES (Frijol, Habichuela, etc)";
	$edata["LookupValues"][] = "OTROS";

	
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




	$tdataREPORTE_LINEAS["VARIEDAD"] = $fdata;
//	PRODUCCION_ANUAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "PRODUCCION_ANUAL";
	$fdata["GoodName"] = "PRODUCCION_ANUAL";
	$fdata["ownerTable"] = "lineas_agrarias";
	$fdata["Label"] = GetFieldLabel("REPORTE_LINEAS","PRODUCCION_ANUAL");
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




	$tdataREPORTE_LINEAS["PRODUCCION_ANUAL"] = $fdata;
//	AÑO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "AÑO";
	$fdata["GoodName"] = "A_O";
	$fdata["ownerTable"] = "lineas_agrarias";
	$fdata["Label"] = GetFieldLabel("REPORTE_LINEAS","A_O");
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




	$tdataREPORTE_LINEAS["AÑO"] = $fdata;


$tables_data["REPORTE LINEAS"]=&$tdataREPORTE_LINEAS;
$field_labels["REPORTE_LINEAS"] = &$fieldLabelsREPORTE_LINEAS;
$fieldToolTips["REPORTE_LINEAS"] = &$fieldToolTipsREPORTE_LINEAS;
$page_titles["REPORTE_LINEAS"] = &$pageTitlesREPORTE_LINEAS;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["REPORTE LINEAS"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["REPORTE LINEAS"] = array();


	
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
					$masterTablesData["REPORTE LINEAS"][0] = $masterParams;
				$masterTablesData["REPORTE LINEAS"][0]["masterKeys"] = array();
	$masterTablesData["REPORTE LINEAS"][0]["masterKeys"][]="PROPIETARIO_CEDULA";
				$masterTablesData["REPORTE LINEAS"][0]["detailKeys"] = array();
	$masterTablesData["REPORTE LINEAS"][0]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_REPORTE_LINEAS()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT  DISTINCT";
$proto0["m_strFieldList"] = "VEREDA,  LINEA,  COUNT(LINEA) AS NUMERO,  VARIEDAD,  PRODUCCION_ANUAL,  `AÑO`";
$proto0["m_strFrom"] = "FROM lineas_agrarias";
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
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "REPORTE LINEAS"
));

$proto6["m_sql"] = "VEREDA";
$proto6["m_srcTableName"] = "REPORTE LINEAS";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "LINEA",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "REPORTE LINEAS"
));

$proto8["m_sql"] = "LINEA";
$proto8["m_srcTableName"] = "REPORTE LINEAS";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$proto11=array();
$proto11["m_functiontype"] = "SQLF_COUNT";
$proto11["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "LINEA",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "REPORTE LINEAS"
));

$proto11["m_arguments"][]=$obj;
$proto11["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto11);

$proto10["m_sql"] = "COUNT(LINEA)";
$proto10["m_srcTableName"] = "REPORTE LINEAS";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "NUMERO";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "VARIEDAD",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "REPORTE LINEAS"
));

$proto13["m_sql"] = "VARIEDAD";
$proto13["m_srcTableName"] = "REPORTE LINEAS";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "PRODUCCION_ANUAL",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "REPORTE LINEAS"
));

$proto15["m_sql"] = "PRODUCCION_ANUAL";
$proto15["m_srcTableName"] = "REPORTE LINEAS";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "REPORTE LINEAS"
));

$proto17["m_sql"] = "`AÑO`";
$proto17["m_srcTableName"] = "REPORTE LINEAS";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "lineas_agrarias";
$proto20["m_srcTableName"] = "REPORTE LINEAS";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "ID";
$proto20["m_columns"][] = "FINCA_PROPIETARIO_CEDULA";
$proto20["m_columns"][] = "NOMBRE";
$proto20["m_columns"][] = "VEREDA";
$proto20["m_columns"][] = "FINCA";
$proto20["m_columns"][] = "LINEA";
$proto20["m_columns"][] = "VARIEDAD";
$proto20["m_columns"][] = "AREA";
$proto20["m_columns"][] = "PRODUCCION_ANUAL";
$proto20["m_columns"][] = "AÑO";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_sql"] = "lineas_agrarias";
$proto19["m_alias"] = "";
$proto19["m_srcTableName"] = "REPORTE LINEAS";
$proto21=array();
$proto21["m_sql"] = "";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = "";
$proto21["m_havingmode"] = false;
$proto21["m_inBrackets"] = false;
$proto21["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto21);

$proto19["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto19);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto23=array();
						$obj = new SQLField(array(
	"m_strName" => "VEREDA",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "REPORTE LINEAS"
));

$proto23["m_column"]=$obj;
$obj = new SQLGroupByItem($proto23);

$proto0["m_groupby"][]=$obj;
												$proto25=array();
						$obj = new SQLField(array(
	"m_strName" => "LINEA",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "REPORTE LINEAS"
));

$proto25["m_column"]=$obj;
$obj = new SQLGroupByItem($proto25);

$proto0["m_groupby"][]=$obj;
												$proto27=array();
						$obj = new SQLField(array(
	"m_strName" => "VARIEDAD",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "REPORTE LINEAS"
));

$proto27["m_column"]=$obj;
$obj = new SQLGroupByItem($proto27);

$proto0["m_groupby"][]=$obj;
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "REPORTE LINEAS"
));

$proto29["m_column"]=$obj;
$obj = new SQLGroupByItem($proto29);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="REPORTE LINEAS";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_REPORTE_LINEAS = createSqlQuery_REPORTE_LINEAS();


	
		;

						

$tdataREPORTE_LINEAS[".sqlquery"] = $queryData_REPORTE_LINEAS;

$tableEvents["REPORTE LINEAS"] = new eventsBase;
$tdataREPORTE_LINEAS[".hasEvents"] = false;

?>