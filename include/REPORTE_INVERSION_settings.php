<?php
require_once(getabspath("classes/cipherer.php"));




$tdataREPORTE_INVERSION = array();
	$tdataREPORTE_INVERSION[".truncateText"] = true;
	$tdataREPORTE_INVERSION[".NumberOfChars"] = 80;
	$tdataREPORTE_INVERSION[".ShortName"] = "REPORTE_INVERSION";
	$tdataREPORTE_INVERSION[".OwnerID"] = "";
	$tdataREPORTE_INVERSION[".OriginalTable"] = "inversion";

//	field labels
$fieldLabelsREPORTE_INVERSION = array();
$fieldToolTipsREPORTE_INVERSION = array();
$pageTitlesREPORTE_INVERSION = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsREPORTE_INVERSION["Spanish"] = array();
	$fieldToolTipsREPORTE_INVERSION["Spanish"] = array();
	$pageTitlesREPORTE_INVERSION["Spanish"] = array();
	$fieldLabelsREPORTE_INVERSION["Spanish"]["VEREDA"] = "VEREDA";
	$fieldToolTipsREPORTE_INVERSION["Spanish"]["VEREDA"] = "";
	$fieldLabelsREPORTE_INVERSION["Spanish"]["FINCA"] = "FINCA";
	$fieldToolTipsREPORTE_INVERSION["Spanish"]["FINCA"] = "";
	$fieldLabelsREPORTE_INVERSION["Spanish"]["TIPO"] = "TIPO";
	$fieldToolTipsREPORTE_INVERSION["Spanish"]["TIPO"] = "";
	$fieldLabelsREPORTE_INVERSION["Spanish"]["NOMBRE_PROYECTO"] = "NOMBRE PROYECTO";
	$fieldToolTipsREPORTE_INVERSION["Spanish"]["NOMBRE_PROYECTO"] = "";
	$fieldLabelsREPORTE_INVERSION["Spanish"]["OBSERVACIONES"] = "OBSERVACIONES";
	$fieldToolTipsREPORTE_INVERSION["Spanish"]["OBSERVACIONES"] = "";
	$fieldLabelsREPORTE_INVERSION["Spanish"]["A_O"] = "AÑO";
	$fieldToolTipsREPORTE_INVERSION["Spanish"]["A_O"] = "";
	if (count($fieldToolTipsREPORTE_INVERSION["Spanish"]))
		$tdataREPORTE_INVERSION[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsREPORTE_INVERSION[""] = array();
	$fieldToolTipsREPORTE_INVERSION[""] = array();
	$pageTitlesREPORTE_INVERSION[""] = array();
	$fieldLabelsREPORTE_INVERSION[""]["VEREDA"] = "VEREDA";
	$fieldToolTipsREPORTE_INVERSION[""]["VEREDA"] = "";
	$fieldLabelsREPORTE_INVERSION[""]["FINCA"] = "FINCA";
	$fieldToolTipsREPORTE_INVERSION[""]["FINCA"] = "";
	$fieldLabelsREPORTE_INVERSION[""]["TIPO"] = "TIPO";
	$fieldToolTipsREPORTE_INVERSION[""]["TIPO"] = "";
	$fieldLabelsREPORTE_INVERSION[""]["NOMBRE_PROYECTO"] = "NOMBRE PROYECTO";
	$fieldToolTipsREPORTE_INVERSION[""]["NOMBRE_PROYECTO"] = "";
	$fieldLabelsREPORTE_INVERSION[""]["OBSERVACIONES"] = "OBSERVACIONES";
	$fieldToolTipsREPORTE_INVERSION[""]["OBSERVACIONES"] = "";
	$fieldLabelsREPORTE_INVERSION[""]["A_O"] = "AÑO";
	$fieldToolTipsREPORTE_INVERSION[""]["A_O"] = "";
	if (count($fieldToolTipsREPORTE_INVERSION[""]))
		$tdataREPORTE_INVERSION[".isUseToolTips"] = true;
}


	$tdataREPORTE_INVERSION[".NCSearch"] = true;



$tdataREPORTE_INVERSION[".shortTableName"] = "REPORTE_INVERSION";
$tdataREPORTE_INVERSION[".nSecOptions"] = 0;
$tdataREPORTE_INVERSION[".recsPerRowPrint"] = 1;
$tdataREPORTE_INVERSION[".mainTableOwnerID"] = "";
$tdataREPORTE_INVERSION[".moveNext"] = 1;
$tdataREPORTE_INVERSION[".entityType"] = 2;

$tdataREPORTE_INVERSION[".strOriginalTableName"] = "inversion";

	



$tdataREPORTE_INVERSION[".showAddInPopup"] = false;

$tdataREPORTE_INVERSION[".showEditInPopup"] = false;

$tdataREPORTE_INVERSION[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataREPORTE_INVERSION[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataREPORTE_INVERSION[".fieldsForRegister"] = array();

$tdataREPORTE_INVERSION[".listAjax"] = false;

	$tdataREPORTE_INVERSION[".audit"] = false;

	$tdataREPORTE_INVERSION[".locking"] = false;


$tdataREPORTE_INVERSION[".add"] = true;
$tdataREPORTE_INVERSION[".afterAddAction"] = 1;
$tdataREPORTE_INVERSION[".closePopupAfterAdd"] = 1;
$tdataREPORTE_INVERSION[".afterAddActionDetTable"] = "";

$tdataREPORTE_INVERSION[".list"] = true;



$tdataREPORTE_INVERSION[".exportTo"] = true;

$tdataREPORTE_INVERSION[".printFriendly"] = true;


$tdataREPORTE_INVERSION[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataREPORTE_INVERSION[".searchSaving"] = false;
//

$tdataREPORTE_INVERSION[".showSearchPanel"] = true;
		$tdataREPORTE_INVERSION[".flexibleSearch"] = true;

$tdataREPORTE_INVERSION[".isUseAjaxSuggest"] = true;




$tdataREPORTE_INVERSION[".addPageEvents"] = false;

// use timepicker for search panel
$tdataREPORTE_INVERSION[".isUseTimeForSearch"] = false;





$tdataREPORTE_INVERSION[".allSearchFields"] = array();
$tdataREPORTE_INVERSION[".filterFields"] = array();
$tdataREPORTE_INVERSION[".requiredSearchFields"] = array();

$tdataREPORTE_INVERSION[".allSearchFields"][] = "VEREDA";
	$tdataREPORTE_INVERSION[".allSearchFields"][] = "FINCA";
	$tdataREPORTE_INVERSION[".allSearchFields"][] = "TIPO";
	$tdataREPORTE_INVERSION[".allSearchFields"][] = "NOMBRE_PROYECTO";
	$tdataREPORTE_INVERSION[".allSearchFields"][] = "OBSERVACIONES";
	$tdataREPORTE_INVERSION[".allSearchFields"][] = "AÑO";
	

$tdataREPORTE_INVERSION[".googleLikeFields"] = array();
$tdataREPORTE_INVERSION[".googleLikeFields"][] = "VEREDA";
$tdataREPORTE_INVERSION[".googleLikeFields"][] = "FINCA";
$tdataREPORTE_INVERSION[".googleLikeFields"][] = "TIPO";
$tdataREPORTE_INVERSION[".googleLikeFields"][] = "NOMBRE_PROYECTO";
$tdataREPORTE_INVERSION[".googleLikeFields"][] = "OBSERVACIONES";
$tdataREPORTE_INVERSION[".googleLikeFields"][] = "AÑO";


$tdataREPORTE_INVERSION[".advSearchFields"] = array();
$tdataREPORTE_INVERSION[".advSearchFields"][] = "VEREDA";
$tdataREPORTE_INVERSION[".advSearchFields"][] = "FINCA";
$tdataREPORTE_INVERSION[".advSearchFields"][] = "TIPO";
$tdataREPORTE_INVERSION[".advSearchFields"][] = "NOMBRE_PROYECTO";
$tdataREPORTE_INVERSION[".advSearchFields"][] = "OBSERVACIONES";
$tdataREPORTE_INVERSION[".advSearchFields"][] = "AÑO";

$tdataREPORTE_INVERSION[".tableType"] = "report";

$tdataREPORTE_INVERSION[".printerPageOrientation"] = 0;
$tdataREPORTE_INVERSION[".nPrinterPageScale"] = 100;

$tdataREPORTE_INVERSION[".nPrinterSplitRecords"] = 40;

$tdataREPORTE_INVERSION[".nPrinterPDFSplitRecords"] = 40;



$tdataREPORTE_INVERSION[".geocodingEnabled"] = false;

//report settings
$tdataREPORTE_INVERSION[".printReportLayout"] = 6;

$tdataREPORTE_INVERSION[".reportPrintPartitionType"] = 1;
$tdataREPORTE_INVERSION[".reportPrintGroupsPerPage"] = 40;
$tdataREPORTE_INVERSION[".reportPrintPDFGroupsPerPage"] = 40;
$tdataREPORTE_INVERSION[".lowGroup"] = 0;



$tdataREPORTE_INVERSION[".pageSize"] = 20;






$tdataREPORTE_INVERSION[".repShowDet"] = true;

$tdataREPORTE_INVERSION[".reportLayout"] = 6;

//end of report settings




$tdataREPORTE_INVERSION[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataREPORTE_INVERSION[".strOrderBy"] = $tstrOrderBy;

$tdataREPORTE_INVERSION[".orderindexes"] = array();

$tdataREPORTE_INVERSION[".sqlHead"] = "SELECT  DISTINCT VEREDA,  FINCA,  TIPO,  NOMBRE_PROYECTO,  OBSERVACIONES,  `AÑO`";
$tdataREPORTE_INVERSION[".sqlFrom"] = "FROM inversion";
$tdataREPORTE_INVERSION[".sqlWhereExpr"] = "";
$tdataREPORTE_INVERSION[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataREPORTE_INVERSION[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataREPORTE_INVERSION[".arrGroupsPerPage"] = $arrGPP;

$tdataREPORTE_INVERSION[".highlightSearchResults"] = true;

$tableKeysREPORTE_INVERSION = array();
$tdataREPORTE_INVERSION[".Keys"] = $tableKeysREPORTE_INVERSION;

$tdataREPORTE_INVERSION[".listFields"] = array();
$tdataREPORTE_INVERSION[".listFields"][] = "VEREDA";
$tdataREPORTE_INVERSION[".listFields"][] = "FINCA";
$tdataREPORTE_INVERSION[".listFields"][] = "TIPO";
$tdataREPORTE_INVERSION[".listFields"][] = "NOMBRE_PROYECTO";
$tdataREPORTE_INVERSION[".listFields"][] = "OBSERVACIONES";
$tdataREPORTE_INVERSION[".listFields"][] = "AÑO";

$tdataREPORTE_INVERSION[".hideMobileList"] = array();


$tdataREPORTE_INVERSION[".viewFields"] = array();
$tdataREPORTE_INVERSION[".viewFields"][] = "VEREDA";
$tdataREPORTE_INVERSION[".viewFields"][] = "FINCA";
$tdataREPORTE_INVERSION[".viewFields"][] = "TIPO";
$tdataREPORTE_INVERSION[".viewFields"][] = "NOMBRE_PROYECTO";
$tdataREPORTE_INVERSION[".viewFields"][] = "OBSERVACIONES";
$tdataREPORTE_INVERSION[".viewFields"][] = "AÑO";

$tdataREPORTE_INVERSION[".addFields"] = array();
$tdataREPORTE_INVERSION[".addFields"][] = "VEREDA";
$tdataREPORTE_INVERSION[".addFields"][] = "FINCA";
$tdataREPORTE_INVERSION[".addFields"][] = "TIPO";
$tdataREPORTE_INVERSION[".addFields"][] = "NOMBRE_PROYECTO";
$tdataREPORTE_INVERSION[".addFields"][] = "OBSERVACIONES";
$tdataREPORTE_INVERSION[".addFields"][] = "AÑO";

$tdataREPORTE_INVERSION[".masterListFields"] = array();
$tdataREPORTE_INVERSION[".masterListFields"][] = "VEREDA";
$tdataREPORTE_INVERSION[".masterListFields"][] = "FINCA";
$tdataREPORTE_INVERSION[".masterListFields"][] = "TIPO";
$tdataREPORTE_INVERSION[".masterListFields"][] = "NOMBRE_PROYECTO";
$tdataREPORTE_INVERSION[".masterListFields"][] = "OBSERVACIONES";
$tdataREPORTE_INVERSION[".masterListFields"][] = "AÑO";

$tdataREPORTE_INVERSION[".inlineAddFields"] = array();
$tdataREPORTE_INVERSION[".inlineAddFields"][] = "VEREDA";
$tdataREPORTE_INVERSION[".inlineAddFields"][] = "FINCA";
$tdataREPORTE_INVERSION[".inlineAddFields"][] = "TIPO";
$tdataREPORTE_INVERSION[".inlineAddFields"][] = "NOMBRE_PROYECTO";
$tdataREPORTE_INVERSION[".inlineAddFields"][] = "OBSERVACIONES";
$tdataREPORTE_INVERSION[".inlineAddFields"][] = "AÑO";

$tdataREPORTE_INVERSION[".editFields"] = array();
$tdataREPORTE_INVERSION[".editFields"][] = "VEREDA";
$tdataREPORTE_INVERSION[".editFields"][] = "FINCA";
$tdataREPORTE_INVERSION[".editFields"][] = "TIPO";
$tdataREPORTE_INVERSION[".editFields"][] = "NOMBRE_PROYECTO";
$tdataREPORTE_INVERSION[".editFields"][] = "OBSERVACIONES";
$tdataREPORTE_INVERSION[".editFields"][] = "AÑO";

$tdataREPORTE_INVERSION[".inlineEditFields"] = array();
$tdataREPORTE_INVERSION[".inlineEditFields"][] = "VEREDA";
$tdataREPORTE_INVERSION[".inlineEditFields"][] = "FINCA";
$tdataREPORTE_INVERSION[".inlineEditFields"][] = "TIPO";
$tdataREPORTE_INVERSION[".inlineEditFields"][] = "NOMBRE_PROYECTO";
$tdataREPORTE_INVERSION[".inlineEditFields"][] = "OBSERVACIONES";
$tdataREPORTE_INVERSION[".inlineEditFields"][] = "AÑO";

$tdataREPORTE_INVERSION[".exportFields"] = array();
$tdataREPORTE_INVERSION[".exportFields"][] = "VEREDA";
$tdataREPORTE_INVERSION[".exportFields"][] = "FINCA";
$tdataREPORTE_INVERSION[".exportFields"][] = "TIPO";
$tdataREPORTE_INVERSION[".exportFields"][] = "NOMBRE_PROYECTO";
$tdataREPORTE_INVERSION[".exportFields"][] = "OBSERVACIONES";
$tdataREPORTE_INVERSION[".exportFields"][] = "AÑO";

$tdataREPORTE_INVERSION[".importFields"] = array();
$tdataREPORTE_INVERSION[".importFields"][] = "VEREDA";
$tdataREPORTE_INVERSION[".importFields"][] = "FINCA";
$tdataREPORTE_INVERSION[".importFields"][] = "TIPO";
$tdataREPORTE_INVERSION[".importFields"][] = "NOMBRE_PROYECTO";
$tdataREPORTE_INVERSION[".importFields"][] = "OBSERVACIONES";
$tdataREPORTE_INVERSION[".importFields"][] = "AÑO";

$tdataREPORTE_INVERSION[".printFields"] = array();
$tdataREPORTE_INVERSION[".printFields"][] = "VEREDA";
$tdataREPORTE_INVERSION[".printFields"][] = "FINCA";
$tdataREPORTE_INVERSION[".printFields"][] = "TIPO";
$tdataREPORTE_INVERSION[".printFields"][] = "NOMBRE_PROYECTO";
$tdataREPORTE_INVERSION[".printFields"][] = "OBSERVACIONES";
$tdataREPORTE_INVERSION[".printFields"][] = "AÑO";

//	VEREDA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "VEREDA";
	$fdata["GoodName"] = "VEREDA";
	$fdata["ownerTable"] = "inversion";
	$fdata["Label"] = GetFieldLabel("REPORTE_INVERSION","VEREDA");
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




	$tdataREPORTE_INVERSION["VEREDA"] = $fdata;
//	FINCA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FINCA";
	$fdata["GoodName"] = "FINCA";
	$fdata["ownerTable"] = "inversion";
	$fdata["Label"] = GetFieldLabel("REPORTE_INVERSION","FINCA");
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




	$tdataREPORTE_INVERSION["FINCA"] = $fdata;
//	TIPO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TIPO";
	$fdata["GoodName"] = "TIPO";
	$fdata["ownerTable"] = "inversion";
	$fdata["Label"] = GetFieldLabel("REPORTE_INVERSION","TIPO");
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

		$fdata["strField"] = "TIPO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TIPO";

	
	
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
	$edata["LookupValues"][] = "POR PROYECTO";
	$edata["LookupValues"][] = "POR CREDITO";
	$edata["LookupValues"][] = "INVERSION PROPIA";
	$edata["LookupValues"][] = "APOYOS DE TERCEROS";
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataREPORTE_INVERSION["TIPO"] = $fdata;
//	NOMBRE_PROYECTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "NOMBRE_PROYECTO";
	$fdata["GoodName"] = "NOMBRE_PROYECTO";
	$fdata["ownerTable"] = "inversion";
	$fdata["Label"] = GetFieldLabel("REPORTE_INVERSION","NOMBRE_PROYECTO");
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

		$fdata["strField"] = "NOMBRE_PROYECTO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NOMBRE_PROYECTO";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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




	$tdataREPORTE_INVERSION["NOMBRE_PROYECTO"] = $fdata;
//	OBSERVACIONES
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "OBSERVACIONES";
	$fdata["GoodName"] = "OBSERVACIONES";
	$fdata["ownerTable"] = "inversion";
	$fdata["Label"] = GetFieldLabel("REPORTE_INVERSION","OBSERVACIONES");
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

		$fdata["strField"] = "OBSERVACIONES";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OBSERVACIONES";

	
	
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




	$tdataREPORTE_INVERSION["OBSERVACIONES"] = $fdata;
//	AÑO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "AÑO";
	$fdata["GoodName"] = "A_O";
	$fdata["ownerTable"] = "inversion";
	$fdata["Label"] = GetFieldLabel("REPORTE_INVERSION","A_O");
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




	$tdataREPORTE_INVERSION["AÑO"] = $fdata;


$tables_data["REPORTE INVERSION"]=&$tdataREPORTE_INVERSION;
$field_labels["REPORTE_INVERSION"] = &$fieldLabelsREPORTE_INVERSION;
$fieldToolTips["REPORTE_INVERSION"] = &$fieldToolTipsREPORTE_INVERSION;
$page_titles["REPORTE_INVERSION"] = &$pageTitlesREPORTE_INVERSION;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["REPORTE INVERSION"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["REPORTE INVERSION"] = array();


	
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
					$masterTablesData["REPORTE INVERSION"][0] = $masterParams;
				$masterTablesData["REPORTE INVERSION"][0]["masterKeys"] = array();
	$masterTablesData["REPORTE INVERSION"][0]["masterKeys"][]="PROPIETARIO_CEDULA";
				$masterTablesData["REPORTE INVERSION"][0]["detailKeys"] = array();
	$masterTablesData["REPORTE INVERSION"][0]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_REPORTE_INVERSION()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT  DISTINCT";
$proto0["m_strFieldList"] = "VEREDA,  FINCA,  TIPO,  NOMBRE_PROYECTO,  OBSERVACIONES,  `AÑO`";
$proto0["m_strFrom"] = "FROM inversion";
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
	"m_strTable" => "inversion",
	"m_srcTableName" => "REPORTE INVERSION"
));

$proto6["m_sql"] = "VEREDA";
$proto6["m_srcTableName"] = "REPORTE INVERSION";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "FINCA",
	"m_strTable" => "inversion",
	"m_srcTableName" => "REPORTE INVERSION"
));

$proto8["m_sql"] = "FINCA";
$proto8["m_srcTableName"] = "REPORTE INVERSION";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TIPO",
	"m_strTable" => "inversion",
	"m_srcTableName" => "REPORTE INVERSION"
));

$proto10["m_sql"] = "TIPO";
$proto10["m_srcTableName"] = "REPORTE INVERSION";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBRE_PROYECTO",
	"m_strTable" => "inversion",
	"m_srcTableName" => "REPORTE INVERSION"
));

$proto12["m_sql"] = "NOMBRE_PROYECTO";
$proto12["m_srcTableName"] = "REPORTE INVERSION";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "OBSERVACIONES",
	"m_strTable" => "inversion",
	"m_srcTableName" => "REPORTE INVERSION"
));

$proto14["m_sql"] = "OBSERVACIONES";
$proto14["m_srcTableName"] = "REPORTE INVERSION";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "inversion",
	"m_srcTableName" => "REPORTE INVERSION"
));

$proto16["m_sql"] = "`AÑO`";
$proto16["m_srcTableName"] = "REPORTE INVERSION";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "inversion";
$proto19["m_srcTableName"] = "REPORTE INVERSION";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "ID";
$proto19["m_columns"][] = "FINCA_PROPIETARIO_CEDULA";
$proto19["m_columns"][] = "NOMBRE";
$proto19["m_columns"][] = "VEREDA";
$proto19["m_columns"][] = "FINCA";
$proto19["m_columns"][] = "TIPO";
$proto19["m_columns"][] = "NOMBRE_PROYECTO";
$proto19["m_columns"][] = "OBSERVACIONES";
$proto19["m_columns"][] = "AÑO";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "inversion";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "REPORTE INVERSION";
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
	"m_strTable" => "inversion",
	"m_srcTableName" => "REPORTE INVERSION"
));

$proto22["m_column"]=$obj;
$obj = new SQLGroupByItem($proto22);

$proto0["m_groupby"][]=$obj;
												$proto24=array();
						$obj = new SQLField(array(
	"m_strName" => "TIPO",
	"m_strTable" => "inversion",
	"m_srcTableName" => "REPORTE INVERSION"
));

$proto24["m_column"]=$obj;
$obj = new SQLGroupByItem($proto24);

$proto0["m_groupby"][]=$obj;
												$proto26=array();
						$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "inversion",
	"m_srcTableName" => "REPORTE INVERSION"
));

$proto26["m_column"]=$obj;
$obj = new SQLGroupByItem($proto26);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="REPORTE INVERSION";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_REPORTE_INVERSION = createSqlQuery_REPORTE_INVERSION();


	
		;

						

$tdataREPORTE_INVERSION[".sqlquery"] = $queryData_REPORTE_INVERSION;

$tableEvents["REPORTE INVERSION"] = new eventsBase;
$tdataREPORTE_INVERSION[".hasEvents"] = false;

?>