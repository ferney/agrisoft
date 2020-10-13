<?php
require_once(getabspath("classes/cipherer.php"));




$tdataREPORTE_LEGAL = array();
	$tdataREPORTE_LEGAL[".truncateText"] = true;
	$tdataREPORTE_LEGAL[".NumberOfChars"] = 80;
	$tdataREPORTE_LEGAL[".ShortName"] = "REPORTE_LEGAL";
	$tdataREPORTE_LEGAL[".OwnerID"] = "";
	$tdataREPORTE_LEGAL[".OriginalTable"] = "legal";

//	field labels
$fieldLabelsREPORTE_LEGAL = array();
$fieldToolTipsREPORTE_LEGAL = array();
$pageTitlesREPORTE_LEGAL = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsREPORTE_LEGAL["Spanish"] = array();
	$fieldToolTipsREPORTE_LEGAL["Spanish"] = array();
	$pageTitlesREPORTE_LEGAL["Spanish"] = array();
	$fieldLabelsREPORTE_LEGAL["Spanish"]["VEREDA"] = "VEREDA";
	$fieldToolTipsREPORTE_LEGAL["Spanish"]["VEREDA"] = "";
	$fieldLabelsREPORTE_LEGAL["Spanish"]["TENECIA"] = "TENECIA";
	$fieldToolTipsREPORTE_LEGAL["Spanish"]["TENECIA"] = "";
	$fieldLabelsREPORTE_LEGAL["Spanish"]["ASOCIACION"] = "ASOCIACION";
	$fieldToolTipsREPORTE_LEGAL["Spanish"]["ASOCIACION"] = "";
	$fieldLabelsREPORTE_LEGAL["Spanish"]["A_O"] = "AÑO";
	$fieldToolTipsREPORTE_LEGAL["Spanish"]["A_O"] = "";
	$fieldLabelsREPORTE_LEGAL["Spanish"]["EN_PROPIEDAD"] = "EN PROPIEDAD";
	$fieldToolTipsREPORTE_LEGAL["Spanish"]["EN_PROPIEDAD"] = "";
	$fieldLabelsREPORTE_LEGAL["Spanish"]["SOPORTADO"] = "SOPORTADO";
	$fieldToolTipsREPORTE_LEGAL["Spanish"]["SOPORTADO"] = "";
	$fieldLabelsREPORTE_LEGAL["Spanish"]["ASOCIADOS"] = "ASOCIADOS";
	$fieldToolTipsREPORTE_LEGAL["Spanish"]["ASOCIADOS"] = "";
	if (count($fieldToolTipsREPORTE_LEGAL["Spanish"]))
		$tdataREPORTE_LEGAL[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsREPORTE_LEGAL[""] = array();
	$fieldToolTipsREPORTE_LEGAL[""] = array();
	$pageTitlesREPORTE_LEGAL[""] = array();
	$fieldLabelsREPORTE_LEGAL[""]["VEREDA"] = "VEREDA";
	$fieldToolTipsREPORTE_LEGAL[""]["VEREDA"] = "";
	$fieldLabelsREPORTE_LEGAL[""]["TENECIA"] = "TENECIA";
	$fieldToolTipsREPORTE_LEGAL[""]["TENECIA"] = "";
	$fieldLabelsREPORTE_LEGAL[""]["ASOCIACION"] = "ASOCIACION";
	$fieldToolTipsREPORTE_LEGAL[""]["ASOCIACION"] = "";
	$fieldLabelsREPORTE_LEGAL[""]["A_O"] = "AÑO";
	$fieldToolTipsREPORTE_LEGAL[""]["A_O"] = "";
	$fieldLabelsREPORTE_LEGAL[""]["EN_PROPIEDAD"] = "EN PROPIEDAD";
	$fieldToolTipsREPORTE_LEGAL[""]["EN_PROPIEDAD"] = "";
	$fieldLabelsREPORTE_LEGAL[""]["SOPORTADO"] = "SOPORTADO";
	$fieldToolTipsREPORTE_LEGAL[""]["SOPORTADO"] = "";
	$fieldLabelsREPORTE_LEGAL[""]["ASOCIADOS"] = "ASOCIADOS";
	$fieldToolTipsREPORTE_LEGAL[""]["ASOCIADOS"] = "";
	if (count($fieldToolTipsREPORTE_LEGAL[""]))
		$tdataREPORTE_LEGAL[".isUseToolTips"] = true;
}


	$tdataREPORTE_LEGAL[".NCSearch"] = true;



$tdataREPORTE_LEGAL[".shortTableName"] = "REPORTE_LEGAL";
$tdataREPORTE_LEGAL[".nSecOptions"] = 0;
$tdataREPORTE_LEGAL[".recsPerRowPrint"] = 1;
$tdataREPORTE_LEGAL[".mainTableOwnerID"] = "";
$tdataREPORTE_LEGAL[".moveNext"] = 1;
$tdataREPORTE_LEGAL[".entityType"] = 2;

$tdataREPORTE_LEGAL[".strOriginalTableName"] = "legal";

	



$tdataREPORTE_LEGAL[".showAddInPopup"] = false;

$tdataREPORTE_LEGAL[".showEditInPopup"] = false;

$tdataREPORTE_LEGAL[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataREPORTE_LEGAL[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataREPORTE_LEGAL[".fieldsForRegister"] = array();

$tdataREPORTE_LEGAL[".listAjax"] = false;

	$tdataREPORTE_LEGAL[".audit"] = false;

	$tdataREPORTE_LEGAL[".locking"] = false;


$tdataREPORTE_LEGAL[".add"] = true;
$tdataREPORTE_LEGAL[".afterAddAction"] = 1;
$tdataREPORTE_LEGAL[".closePopupAfterAdd"] = 1;
$tdataREPORTE_LEGAL[".afterAddActionDetTable"] = "";

$tdataREPORTE_LEGAL[".list"] = true;



$tdataREPORTE_LEGAL[".exportTo"] = true;

$tdataREPORTE_LEGAL[".printFriendly"] = true;


$tdataREPORTE_LEGAL[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataREPORTE_LEGAL[".searchSaving"] = false;
//

$tdataREPORTE_LEGAL[".showSearchPanel"] = true;
		$tdataREPORTE_LEGAL[".flexibleSearch"] = true;

$tdataREPORTE_LEGAL[".isUseAjaxSuggest"] = true;




$tdataREPORTE_LEGAL[".addPageEvents"] = false;

// use timepicker for search panel
$tdataREPORTE_LEGAL[".isUseTimeForSearch"] = false;





$tdataREPORTE_LEGAL[".allSearchFields"] = array();
$tdataREPORTE_LEGAL[".filterFields"] = array();
$tdataREPORTE_LEGAL[".requiredSearchFields"] = array();

$tdataREPORTE_LEGAL[".allSearchFields"][] = "VEREDA";
	$tdataREPORTE_LEGAL[".allSearchFields"][] = "TENECIA";
	$tdataREPORTE_LEGAL[".allSearchFields"][] = "EN_PROPIEDAD";
	$tdataREPORTE_LEGAL[".allSearchFields"][] = "SOPORTADO";
	$tdataREPORTE_LEGAL[".allSearchFields"][] = "ASOCIACION";
	$tdataREPORTE_LEGAL[".allSearchFields"][] = "ASOCIADOS";
	$tdataREPORTE_LEGAL[".allSearchFields"][] = "AÑO";
	

$tdataREPORTE_LEGAL[".googleLikeFields"] = array();
$tdataREPORTE_LEGAL[".googleLikeFields"][] = "VEREDA";
$tdataREPORTE_LEGAL[".googleLikeFields"][] = "TENECIA";
$tdataREPORTE_LEGAL[".googleLikeFields"][] = "EN_PROPIEDAD";
$tdataREPORTE_LEGAL[".googleLikeFields"][] = "SOPORTADO";
$tdataREPORTE_LEGAL[".googleLikeFields"][] = "ASOCIACION";
$tdataREPORTE_LEGAL[".googleLikeFields"][] = "ASOCIADOS";
$tdataREPORTE_LEGAL[".googleLikeFields"][] = "AÑO";


$tdataREPORTE_LEGAL[".advSearchFields"] = array();
$tdataREPORTE_LEGAL[".advSearchFields"][] = "VEREDA";
$tdataREPORTE_LEGAL[".advSearchFields"][] = "TENECIA";
$tdataREPORTE_LEGAL[".advSearchFields"][] = "EN_PROPIEDAD";
$tdataREPORTE_LEGAL[".advSearchFields"][] = "SOPORTADO";
$tdataREPORTE_LEGAL[".advSearchFields"][] = "ASOCIACION";
$tdataREPORTE_LEGAL[".advSearchFields"][] = "ASOCIADOS";
$tdataREPORTE_LEGAL[".advSearchFields"][] = "AÑO";

$tdataREPORTE_LEGAL[".tableType"] = "report";

$tdataREPORTE_LEGAL[".printerPageOrientation"] = 0;
$tdataREPORTE_LEGAL[".nPrinterPageScale"] = 100;

$tdataREPORTE_LEGAL[".nPrinterSplitRecords"] = 40;

$tdataREPORTE_LEGAL[".nPrinterPDFSplitRecords"] = 40;



$tdataREPORTE_LEGAL[".geocodingEnabled"] = false;

//report settings
$tdataREPORTE_LEGAL[".printReportLayout"] = 6;

$tdataREPORTE_LEGAL[".reportPrintPartitionType"] = 1;
$tdataREPORTE_LEGAL[".reportPrintGroupsPerPage"] = 40;
$tdataREPORTE_LEGAL[".reportPrintPDFGroupsPerPage"] = 40;
$tdataREPORTE_LEGAL[".lowGroup"] = 0;



$tdataREPORTE_LEGAL[".pageSize"] = 20;






$tdataREPORTE_LEGAL[".repShowDet"] = true;

$tdataREPORTE_LEGAL[".reportLayout"] = 6;

//end of report settings




$tdataREPORTE_LEGAL[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataREPORTE_LEGAL[".strOrderBy"] = $tstrOrderBy;

$tdataREPORTE_LEGAL[".orderindexes"] = array();

$tdataREPORTE_LEGAL[".sqlHead"] = "SELECT  DISTINCT VEREDA,  TENECIA,  COUNT(*) AS EN_PROPIEDAD,  COUNT(*) AS SOPORTADO,  ASOCIACION,  COUNT(*) AS ASOCIADOS,  `AÑO`";
$tdataREPORTE_LEGAL[".sqlFrom"] = "FROM legal";
$tdataREPORTE_LEGAL[".sqlWhereExpr"] = "";
$tdataREPORTE_LEGAL[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataREPORTE_LEGAL[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataREPORTE_LEGAL[".arrGroupsPerPage"] = $arrGPP;

$tdataREPORTE_LEGAL[".highlightSearchResults"] = true;

$tableKeysREPORTE_LEGAL = array();
$tdataREPORTE_LEGAL[".Keys"] = $tableKeysREPORTE_LEGAL;

$tdataREPORTE_LEGAL[".listFields"] = array();
$tdataREPORTE_LEGAL[".listFields"][] = "VEREDA";
$tdataREPORTE_LEGAL[".listFields"][] = "TENECIA";
$tdataREPORTE_LEGAL[".listFields"][] = "EN_PROPIEDAD";
$tdataREPORTE_LEGAL[".listFields"][] = "SOPORTADO";
$tdataREPORTE_LEGAL[".listFields"][] = "ASOCIACION";
$tdataREPORTE_LEGAL[".listFields"][] = "ASOCIADOS";
$tdataREPORTE_LEGAL[".listFields"][] = "AÑO";

$tdataREPORTE_LEGAL[".hideMobileList"] = array();


$tdataREPORTE_LEGAL[".viewFields"] = array();
$tdataREPORTE_LEGAL[".viewFields"][] = "VEREDA";
$tdataREPORTE_LEGAL[".viewFields"][] = "TENECIA";
$tdataREPORTE_LEGAL[".viewFields"][] = "EN_PROPIEDAD";
$tdataREPORTE_LEGAL[".viewFields"][] = "SOPORTADO";
$tdataREPORTE_LEGAL[".viewFields"][] = "ASOCIACION";
$tdataREPORTE_LEGAL[".viewFields"][] = "ASOCIADOS";
$tdataREPORTE_LEGAL[".viewFields"][] = "AÑO";

$tdataREPORTE_LEGAL[".addFields"] = array();
$tdataREPORTE_LEGAL[".addFields"][] = "VEREDA";
$tdataREPORTE_LEGAL[".addFields"][] = "TENECIA";
$tdataREPORTE_LEGAL[".addFields"][] = "ASOCIACION";
$tdataREPORTE_LEGAL[".addFields"][] = "AÑO";

$tdataREPORTE_LEGAL[".masterListFields"] = array();
$tdataREPORTE_LEGAL[".masterListFields"][] = "VEREDA";
$tdataREPORTE_LEGAL[".masterListFields"][] = "TENECIA";
$tdataREPORTE_LEGAL[".masterListFields"][] = "EN_PROPIEDAD";
$tdataREPORTE_LEGAL[".masterListFields"][] = "SOPORTADO";
$tdataREPORTE_LEGAL[".masterListFields"][] = "ASOCIACION";
$tdataREPORTE_LEGAL[".masterListFields"][] = "ASOCIADOS";
$tdataREPORTE_LEGAL[".masterListFields"][] = "AÑO";

$tdataREPORTE_LEGAL[".inlineAddFields"] = array();
$tdataREPORTE_LEGAL[".inlineAddFields"][] = "VEREDA";
$tdataREPORTE_LEGAL[".inlineAddFields"][] = "TENECIA";
$tdataREPORTE_LEGAL[".inlineAddFields"][] = "ASOCIACION";
$tdataREPORTE_LEGAL[".inlineAddFields"][] = "AÑO";

$tdataREPORTE_LEGAL[".editFields"] = array();
$tdataREPORTE_LEGAL[".editFields"][] = "VEREDA";
$tdataREPORTE_LEGAL[".editFields"][] = "TENECIA";
$tdataREPORTE_LEGAL[".editFields"][] = "ASOCIACION";
$tdataREPORTE_LEGAL[".editFields"][] = "AÑO";

$tdataREPORTE_LEGAL[".inlineEditFields"] = array();
$tdataREPORTE_LEGAL[".inlineEditFields"][] = "VEREDA";
$tdataREPORTE_LEGAL[".inlineEditFields"][] = "TENECIA";
$tdataREPORTE_LEGAL[".inlineEditFields"][] = "ASOCIACION";
$tdataREPORTE_LEGAL[".inlineEditFields"][] = "AÑO";

$tdataREPORTE_LEGAL[".exportFields"] = array();
$tdataREPORTE_LEGAL[".exportFields"][] = "VEREDA";
$tdataREPORTE_LEGAL[".exportFields"][] = "TENECIA";
$tdataREPORTE_LEGAL[".exportFields"][] = "EN_PROPIEDAD";
$tdataREPORTE_LEGAL[".exportFields"][] = "SOPORTADO";
$tdataREPORTE_LEGAL[".exportFields"][] = "ASOCIACION";
$tdataREPORTE_LEGAL[".exportFields"][] = "ASOCIADOS";
$tdataREPORTE_LEGAL[".exportFields"][] = "AÑO";

$tdataREPORTE_LEGAL[".importFields"] = array();
$tdataREPORTE_LEGAL[".importFields"][] = "VEREDA";
$tdataREPORTE_LEGAL[".importFields"][] = "TENECIA";
$tdataREPORTE_LEGAL[".importFields"][] = "EN_PROPIEDAD";
$tdataREPORTE_LEGAL[".importFields"][] = "SOPORTADO";
$tdataREPORTE_LEGAL[".importFields"][] = "ASOCIACION";
$tdataREPORTE_LEGAL[".importFields"][] = "ASOCIADOS";
$tdataREPORTE_LEGAL[".importFields"][] = "AÑO";

$tdataREPORTE_LEGAL[".printFields"] = array();
$tdataREPORTE_LEGAL[".printFields"][] = "VEREDA";
$tdataREPORTE_LEGAL[".printFields"][] = "TENECIA";
$tdataREPORTE_LEGAL[".printFields"][] = "EN_PROPIEDAD";
$tdataREPORTE_LEGAL[".printFields"][] = "SOPORTADO";
$tdataREPORTE_LEGAL[".printFields"][] = "ASOCIACION";
$tdataREPORTE_LEGAL[".printFields"][] = "ASOCIADOS";
$tdataREPORTE_LEGAL[".printFields"][] = "AÑO";

//	VEREDA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "VEREDA";
	$fdata["GoodName"] = "VEREDA";
	$fdata["ownerTable"] = "legal";
	$fdata["Label"] = GetFieldLabel("REPORTE_LEGAL","VEREDA");
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




	$tdataREPORTE_LEGAL["VEREDA"] = $fdata;
//	TENECIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "TENECIA";
	$fdata["GoodName"] = "TENECIA";
	$fdata["ownerTable"] = "legal";
	$fdata["Label"] = GetFieldLabel("REPORTE_LEGAL","TENECIA");
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

		$fdata["strField"] = "TENECIA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TENECIA";

	
	
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
	$edata["LookupValues"][] = "PROPIA (Totalmente Pagada)";
	$edata["LookupValues"][] = "PROPIA (La Esta Pagando)";
	$edata["LookupValues"][] = "ARRIENDO";
	$edata["LookupValues"][] = "CON PERMISO DE PROPIETARIO";
	$edata["LookupValues"][] = "OCUPANTE DE HECHO";
	$edata["LookupValues"][] = "POSECION SIN TITULO";
	$edata["LookupValues"][] = "OTRA";

	
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




	$tdataREPORTE_LEGAL["TENECIA"] = $fdata;
//	EN_PROPIEDAD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "EN_PROPIEDAD";
	$fdata["GoodName"] = "EN_PROPIEDAD";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("REPORTE_LEGAL","EN_PROPIEDAD");
	$fdata["FieldType"] = 3;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "EN_PROPIEDAD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(*)";

	
	
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




	$tdataREPORTE_LEGAL["EN_PROPIEDAD"] = $fdata;
//	SOPORTADO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "SOPORTADO";
	$fdata["GoodName"] = "SOPORTADO";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("REPORTE_LEGAL","SOPORTADO");
	$fdata["FieldType"] = 3;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SOPORTADO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(*)";

	
	
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




	$tdataREPORTE_LEGAL["SOPORTADO"] = $fdata;
//	ASOCIACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ASOCIACION";
	$fdata["GoodName"] = "ASOCIACION";
	$fdata["ownerTable"] = "legal";
	$fdata["Label"] = GetFieldLabel("REPORTE_LEGAL","ASOCIACION");
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

		$fdata["strField"] = "ASOCIACION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ASOCIACION";

	
	
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
	$edata["LookupValues"][] = "ASOAPIASAN";
	$edata["LookupValues"][] = "ASOPROCASS";
	$edata["LookupValues"][] = "ASOCAPRISAN";
	$edata["LookupValues"][] = "ASPROTRANS";
	$edata["LookupValues"][] = "APROPSAN";
	$edata["LookupValues"][] = "APPROGRAN";
	$edata["LookupValues"][] = "ASOVICTIMAS";
	$edata["LookupValues"][] = "FIBRASSAN";
	$edata["LookupValues"][] = "NINGUNA";

	
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




	$tdataREPORTE_LEGAL["ASOCIACION"] = $fdata;
//	ASOCIADOS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ASOCIADOS";
	$fdata["GoodName"] = "ASOCIADOS";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("REPORTE_LEGAL","ASOCIADOS");
	$fdata["FieldType"] = 3;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ASOCIADOS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(*)";

	
	
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




	$tdataREPORTE_LEGAL["ASOCIADOS"] = $fdata;
//	AÑO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "AÑO";
	$fdata["GoodName"] = "A_O";
	$fdata["ownerTable"] = "legal";
	$fdata["Label"] = GetFieldLabel("REPORTE_LEGAL","A_O");
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




	$tdataREPORTE_LEGAL["AÑO"] = $fdata;


$tables_data["REPORTE LEGAL"]=&$tdataREPORTE_LEGAL;
$field_labels["REPORTE_LEGAL"] = &$fieldLabelsREPORTE_LEGAL;
$fieldToolTips["REPORTE_LEGAL"] = &$fieldToolTipsREPORTE_LEGAL;
$page_titles["REPORTE_LEGAL"] = &$pageTitlesREPORTE_LEGAL;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["REPORTE LEGAL"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["REPORTE LEGAL"] = array();


	
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
					$masterTablesData["REPORTE LEGAL"][0] = $masterParams;
				$masterTablesData["REPORTE LEGAL"][0]["masterKeys"] = array();
	$masterTablesData["REPORTE LEGAL"][0]["masterKeys"][]="PROPIETARIO_CEDULA";
				$masterTablesData["REPORTE LEGAL"][0]["detailKeys"] = array();
	$masterTablesData["REPORTE LEGAL"][0]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_REPORTE_LEGAL()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT  DISTINCT";
$proto0["m_strFieldList"] = "VEREDA,  TENECIA,  COUNT(*) AS EN_PROPIEDAD,  COUNT(*) AS SOPORTADO,  ASOCIACION,  COUNT(*) AS ASOCIADOS,  `AÑO`";
$proto0["m_strFrom"] = "FROM legal";
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
	"m_strTable" => "legal",
	"m_srcTableName" => "REPORTE LEGAL"
));

$proto6["m_sql"] = "VEREDA";
$proto6["m_srcTableName"] = "REPORTE LEGAL";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "TENECIA",
	"m_strTable" => "legal",
	"m_srcTableName" => "REPORTE LEGAL"
));

$proto8["m_sql"] = "TENECIA";
$proto8["m_srcTableName"] = "REPORTE LEGAL";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$proto11=array();
$proto11["m_functiontype"] = "SQLF_COUNT";
$proto11["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "*"
));

$proto11["m_arguments"][]=$obj;
$proto11["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto11);

$proto10["m_sql"] = "COUNT(*)";
$proto10["m_srcTableName"] = "REPORTE LEGAL";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "EN_PROPIEDAD";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$proto14=array();
$proto14["m_functiontype"] = "SQLF_COUNT";
$proto14["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "*"
));

$proto14["m_arguments"][]=$obj;
$proto14["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto14);

$proto13["m_sql"] = "COUNT(*)";
$proto13["m_srcTableName"] = "REPORTE LEGAL";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "SOPORTADO";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ASOCIACION",
	"m_strTable" => "legal",
	"m_srcTableName" => "REPORTE LEGAL"
));

$proto16["m_sql"] = "ASOCIACION";
$proto16["m_srcTableName"] = "REPORTE LEGAL";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$proto19=array();
$proto19["m_functiontype"] = "SQLF_COUNT";
$proto19["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "*"
));

$proto19["m_arguments"][]=$obj;
$proto19["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto19);

$proto18["m_sql"] = "COUNT(*)";
$proto18["m_srcTableName"] = "REPORTE LEGAL";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "ASOCIADOS";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "legal",
	"m_srcTableName" => "REPORTE LEGAL"
));

$proto21["m_sql"] = "`AÑO`";
$proto21["m_srcTableName"] = "REPORTE LEGAL";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strName"] = "legal";
$proto24["m_srcTableName"] = "REPORTE LEGAL";
$proto24["m_columns"] = array();
$proto24["m_columns"][] = "ID";
$proto24["m_columns"][] = "FINCA_PROPIETARIO_CEDULA";
$proto24["m_columns"][] = "NOMBRE";
$proto24["m_columns"][] = "VEREDA";
$proto24["m_columns"][] = "FINCA";
$proto24["m_columns"][] = "TENECIA";
$proto24["m_columns"][] = "SOPORTE";
$proto24["m_columns"][] = "RUAT";
$proto24["m_columns"][] = "ASOCIACION";
$proto24["m_columns"][] = "OBSERVACIONES";
$proto24["m_columns"][] = "AÑO";
$obj = new SQLTable($proto24);

$proto23["m_table"] = $obj;
$proto23["m_sql"] = "legal";
$proto23["m_alias"] = "";
$proto23["m_srcTableName"] = "REPORTE LEGAL";
$proto25=array();
$proto25["m_sql"] = "";
$proto25["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto25["m_column"]=$obj;
$proto25["m_contained"] = array();
$proto25["m_strCase"] = "";
$proto25["m_havingmode"] = false;
$proto25["m_inBrackets"] = false;
$proto25["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto25);

$proto23["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto23);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto27=array();
						$obj = new SQLField(array(
	"m_strName" => "VEREDA",
	"m_strTable" => "legal",
	"m_srcTableName" => "REPORTE LEGAL"
));

$proto27["m_column"]=$obj;
$obj = new SQLGroupByItem($proto27);

$proto0["m_groupby"][]=$obj;
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "legal",
	"m_srcTableName" => "REPORTE LEGAL"
));

$proto29["m_column"]=$obj;
$obj = new SQLGroupByItem($proto29);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="REPORTE LEGAL";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_REPORTE_LEGAL = createSqlQuery_REPORTE_LEGAL();


	
		;

							

$tdataREPORTE_LEGAL[".sqlquery"] = $queryData_REPORTE_LEGAL;

$tableEvents["REPORTE LEGAL"] = new eventsBase;
$tdataREPORTE_LEGAL[".hasEvents"] = false;

?>