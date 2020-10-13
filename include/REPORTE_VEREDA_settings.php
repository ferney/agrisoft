<?php
require_once(getabspath("classes/cipherer.php"));




$tdataREPORTE_VEREDA = array();
	$tdataREPORTE_VEREDA[".truncateText"] = true;
	$tdataREPORTE_VEREDA[".NumberOfChars"] = 80;
	$tdataREPORTE_VEREDA[".ShortName"] = "REPORTE_VEREDA";
	$tdataREPORTE_VEREDA[".OwnerID"] = "";
	$tdataREPORTE_VEREDA[".OriginalTable"] = "finca";

//	field labels
$fieldLabelsREPORTE_VEREDA = array();
$fieldToolTipsREPORTE_VEREDA = array();
$pageTitlesREPORTE_VEREDA = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsREPORTE_VEREDA["Spanish"] = array();
	$fieldToolTipsREPORTE_VEREDA["Spanish"] = array();
	$pageTitlesREPORTE_VEREDA["Spanish"] = array();
	$fieldLabelsREPORTE_VEREDA["Spanish"]["VEREDA"] = "VEREDA";
	$fieldToolTipsREPORTE_VEREDA["Spanish"]["VEREDA"] = "";
	$fieldLabelsREPORTE_VEREDA["Spanish"]["LINEA_PRINCIPAL"] = "LINEA PRINCIPAL";
	$fieldToolTipsREPORTE_VEREDA["Spanish"]["LINEA_PRINCIPAL"] = "";
	$fieldLabelsREPORTE_VEREDA["Spanish"]["A_O"] = "AÑO";
	$fieldToolTipsREPORTE_VEREDA["Spanish"]["A_O"] = "";
	$fieldLabelsREPORTE_VEREDA["Spanish"]["AREA_LINEA"] = "AREA LINEA";
	$fieldToolTipsREPORTE_VEREDA["Spanish"]["AREA_LINEA"] = "";
	if (count($fieldToolTipsREPORTE_VEREDA["Spanish"]))
		$tdataREPORTE_VEREDA[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsREPORTE_VEREDA[""] = array();
	$fieldToolTipsREPORTE_VEREDA[""] = array();
	$pageTitlesREPORTE_VEREDA[""] = array();
	$fieldLabelsREPORTE_VEREDA[""]["VEREDA"] = "VEREDA";
	$fieldToolTipsREPORTE_VEREDA[""]["VEREDA"] = "";
	$fieldLabelsREPORTE_VEREDA[""]["LINEA_PRINCIPAL"] = "LINEA PRINCIPAL";
	$fieldToolTipsREPORTE_VEREDA[""]["LINEA_PRINCIPAL"] = "";
	$fieldLabelsREPORTE_VEREDA[""]["A_O"] = "AÑO";
	$fieldToolTipsREPORTE_VEREDA[""]["A_O"] = "";
	$fieldLabelsREPORTE_VEREDA[""]["AREA_LINEA"] = "AREA LINEA";
	$fieldToolTipsREPORTE_VEREDA[""]["AREA_LINEA"] = "";
	if (count($fieldToolTipsREPORTE_VEREDA[""]))
		$tdataREPORTE_VEREDA[".isUseToolTips"] = true;
}


	$tdataREPORTE_VEREDA[".NCSearch"] = true;



$tdataREPORTE_VEREDA[".shortTableName"] = "REPORTE_VEREDA";
$tdataREPORTE_VEREDA[".nSecOptions"] = 0;
$tdataREPORTE_VEREDA[".recsPerRowPrint"] = 1;
$tdataREPORTE_VEREDA[".mainTableOwnerID"] = "";
$tdataREPORTE_VEREDA[".moveNext"] = 1;
$tdataREPORTE_VEREDA[".entityType"] = 2;

$tdataREPORTE_VEREDA[".strOriginalTableName"] = "finca";

	



$tdataREPORTE_VEREDA[".showAddInPopup"] = false;

$tdataREPORTE_VEREDA[".showEditInPopup"] = false;

$tdataREPORTE_VEREDA[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataREPORTE_VEREDA[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataREPORTE_VEREDA[".fieldsForRegister"] = array();

$tdataREPORTE_VEREDA[".listAjax"] = false;

	$tdataREPORTE_VEREDA[".audit"] = false;

	$tdataREPORTE_VEREDA[".locking"] = false;


$tdataREPORTE_VEREDA[".add"] = true;
$tdataREPORTE_VEREDA[".afterAddAction"] = 1;
$tdataREPORTE_VEREDA[".closePopupAfterAdd"] = 1;
$tdataREPORTE_VEREDA[".afterAddActionDetTable"] = "";

$tdataREPORTE_VEREDA[".list"] = true;



$tdataREPORTE_VEREDA[".exportTo"] = true;

$tdataREPORTE_VEREDA[".printFriendly"] = true;


$tdataREPORTE_VEREDA[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataREPORTE_VEREDA[".searchSaving"] = false;
//

$tdataREPORTE_VEREDA[".showSearchPanel"] = true;
		$tdataREPORTE_VEREDA[".flexibleSearch"] = true;

$tdataREPORTE_VEREDA[".isUseAjaxSuggest"] = true;




$tdataREPORTE_VEREDA[".addPageEvents"] = false;

// use timepicker for search panel
$tdataREPORTE_VEREDA[".isUseTimeForSearch"] = false;





$tdataREPORTE_VEREDA[".allSearchFields"] = array();
$tdataREPORTE_VEREDA[".filterFields"] = array();
$tdataREPORTE_VEREDA[".requiredSearchFields"] = array();

$tdataREPORTE_VEREDA[".allSearchFields"][] = "VEREDA";
	$tdataREPORTE_VEREDA[".allSearchFields"][] = "LINEA_PRINCIPAL";
	$tdataREPORTE_VEREDA[".allSearchFields"][] = "AREA_LINEA";
	$tdataREPORTE_VEREDA[".allSearchFields"][] = "AÑO";
	

$tdataREPORTE_VEREDA[".googleLikeFields"] = array();
$tdataREPORTE_VEREDA[".googleLikeFields"][] = "VEREDA";
$tdataREPORTE_VEREDA[".googleLikeFields"][] = "LINEA_PRINCIPAL";
$tdataREPORTE_VEREDA[".googleLikeFields"][] = "AREA_LINEA";
$tdataREPORTE_VEREDA[".googleLikeFields"][] = "AÑO";


$tdataREPORTE_VEREDA[".advSearchFields"] = array();
$tdataREPORTE_VEREDA[".advSearchFields"][] = "VEREDA";
$tdataREPORTE_VEREDA[".advSearchFields"][] = "LINEA_PRINCIPAL";
$tdataREPORTE_VEREDA[".advSearchFields"][] = "AREA_LINEA";
$tdataREPORTE_VEREDA[".advSearchFields"][] = "AÑO";

$tdataREPORTE_VEREDA[".tableType"] = "report";

$tdataREPORTE_VEREDA[".printerPageOrientation"] = 0;
$tdataREPORTE_VEREDA[".nPrinterPageScale"] = 100;

$tdataREPORTE_VEREDA[".nPrinterSplitRecords"] = 40;

$tdataREPORTE_VEREDA[".nPrinterPDFSplitRecords"] = 40;



$tdataREPORTE_VEREDA[".geocodingEnabled"] = false;

//report settings
$tdataREPORTE_VEREDA[".printReportLayout"] = 6;

$tdataREPORTE_VEREDA[".reportPrintPartitionType"] = 1;
$tdataREPORTE_VEREDA[".reportPrintGroupsPerPage"] = 40;
$tdataREPORTE_VEREDA[".reportPrintPDFGroupsPerPage"] = 40;
$tdataREPORTE_VEREDA[".lowGroup"] = 0;



$tdataREPORTE_VEREDA[".pageSize"] = 20;






$tdataREPORTE_VEREDA[".repShowDet"] = true;

$tdataREPORTE_VEREDA[".reportLayout"] = 6;

//end of report settings




$tdataREPORTE_VEREDA[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataREPORTE_VEREDA[".strOrderBy"] = $tstrOrderBy;

$tdataREPORTE_VEREDA[".orderindexes"] = array();

$tdataREPORTE_VEREDA[".sqlHead"] = "SELECT  DISTINCT VEREDA,  LINEA_PRINCIPAL,  SUM(`AREA_ L_P`) AS AREA_LINEA,  `AÑO`";
$tdataREPORTE_VEREDA[".sqlFrom"] = "FROM finca";
$tdataREPORTE_VEREDA[".sqlWhereExpr"] = "";
$tdataREPORTE_VEREDA[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataREPORTE_VEREDA[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataREPORTE_VEREDA[".arrGroupsPerPage"] = $arrGPP;

$tdataREPORTE_VEREDA[".highlightSearchResults"] = true;

$tableKeysREPORTE_VEREDA = array();
$tdataREPORTE_VEREDA[".Keys"] = $tableKeysREPORTE_VEREDA;

$tdataREPORTE_VEREDA[".listFields"] = array();
$tdataREPORTE_VEREDA[".listFields"][] = "VEREDA";
$tdataREPORTE_VEREDA[".listFields"][] = "LINEA_PRINCIPAL";
$tdataREPORTE_VEREDA[".listFields"][] = "AREA_LINEA";
$tdataREPORTE_VEREDA[".listFields"][] = "AÑO";

$tdataREPORTE_VEREDA[".hideMobileList"] = array();


$tdataREPORTE_VEREDA[".viewFields"] = array();
$tdataREPORTE_VEREDA[".viewFields"][] = "VEREDA";
$tdataREPORTE_VEREDA[".viewFields"][] = "LINEA_PRINCIPAL";
$tdataREPORTE_VEREDA[".viewFields"][] = "AREA_LINEA";
$tdataREPORTE_VEREDA[".viewFields"][] = "AÑO";

$tdataREPORTE_VEREDA[".addFields"] = array();
$tdataREPORTE_VEREDA[".addFields"][] = "VEREDA";
$tdataREPORTE_VEREDA[".addFields"][] = "LINEA_PRINCIPAL";
$tdataREPORTE_VEREDA[".addFields"][] = "AÑO";

$tdataREPORTE_VEREDA[".masterListFields"] = array();
$tdataREPORTE_VEREDA[".masterListFields"][] = "VEREDA";
$tdataREPORTE_VEREDA[".masterListFields"][] = "LINEA_PRINCIPAL";
$tdataREPORTE_VEREDA[".masterListFields"][] = "AREA_LINEA";
$tdataREPORTE_VEREDA[".masterListFields"][] = "AÑO";

$tdataREPORTE_VEREDA[".inlineAddFields"] = array();
$tdataREPORTE_VEREDA[".inlineAddFields"][] = "VEREDA";
$tdataREPORTE_VEREDA[".inlineAddFields"][] = "LINEA_PRINCIPAL";
$tdataREPORTE_VEREDA[".inlineAddFields"][] = "AÑO";

$tdataREPORTE_VEREDA[".editFields"] = array();
$tdataREPORTE_VEREDA[".editFields"][] = "VEREDA";
$tdataREPORTE_VEREDA[".editFields"][] = "LINEA_PRINCIPAL";
$tdataREPORTE_VEREDA[".editFields"][] = "AÑO";

$tdataREPORTE_VEREDA[".inlineEditFields"] = array();
$tdataREPORTE_VEREDA[".inlineEditFields"][] = "VEREDA";
$tdataREPORTE_VEREDA[".inlineEditFields"][] = "LINEA_PRINCIPAL";
$tdataREPORTE_VEREDA[".inlineEditFields"][] = "AÑO";

$tdataREPORTE_VEREDA[".exportFields"] = array();
$tdataREPORTE_VEREDA[".exportFields"][] = "VEREDA";
$tdataREPORTE_VEREDA[".exportFields"][] = "LINEA_PRINCIPAL";
$tdataREPORTE_VEREDA[".exportFields"][] = "AREA_LINEA";
$tdataREPORTE_VEREDA[".exportFields"][] = "AÑO";

$tdataREPORTE_VEREDA[".importFields"] = array();
$tdataREPORTE_VEREDA[".importFields"][] = "VEREDA";
$tdataREPORTE_VEREDA[".importFields"][] = "LINEA_PRINCIPAL";
$tdataREPORTE_VEREDA[".importFields"][] = "AREA_LINEA";
$tdataREPORTE_VEREDA[".importFields"][] = "AÑO";

$tdataREPORTE_VEREDA[".printFields"] = array();
$tdataREPORTE_VEREDA[".printFields"][] = "VEREDA";
$tdataREPORTE_VEREDA[".printFields"][] = "LINEA_PRINCIPAL";
$tdataREPORTE_VEREDA[".printFields"][] = "AREA_LINEA";
$tdataREPORTE_VEREDA[".printFields"][] = "AÑO";

//	VEREDA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "VEREDA";
	$fdata["GoodName"] = "VEREDA";
	$fdata["ownerTable"] = "finca";
	$fdata["Label"] = GetFieldLabel("REPORTE_VEREDA","VEREDA");
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
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "LA ANTIGUA";
	$edata["LookupValues"][] = "LA AURORA";
	$edata["LookupValues"][] = "LA DESPENSA";
	$edata["LookupValues"][] = "RICAURTE";
	$edata["LookupValues"][] = "SAN ANTONIO";
	$edata["LookupValues"][] = "SAN CAYETANO";
	$edata["LookupValues"][] = "SAN EMIGDIO";
	$edata["LookupValues"][] = "SAN ISIDRO";
	$edata["LookupValues"][] = "SAN RAFAEL";
	$edata["LookupValues"][] = "SAN IGNACIO";
	$edata["LookupValues"][] = "SANTA ANA";
	$edata["LookupValues"][] = "SANTA BARBARA";

	
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




	$tdataREPORTE_VEREDA["VEREDA"] = $fdata;
//	LINEA_PRINCIPAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "LINEA_PRINCIPAL";
	$fdata["GoodName"] = "LINEA_PRINCIPAL";
	$fdata["ownerTable"] = "finca";
	$fdata["Label"] = GetFieldLabel("REPORTE_VEREDA","LINEA_PRINCIPAL");
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

		$fdata["strField"] = "LINEA_PRINCIPAL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LINEA_PRINCIPAL";

	
	
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
	$edata["LookupValues"][] = "CAÑA";
	$edata["LookupValues"][] = "CAFE";
	$edata["LookupValues"][] = "HORTIFRUTICOLA";
	$edata["LookupValues"][] = "AGRICOLA";
	$edata["LookupValues"][] = "PECUARIO";
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




	$tdataREPORTE_VEREDA["LINEA_PRINCIPAL"] = $fdata;
//	AREA_LINEA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "AREA_LINEA";
	$fdata["GoodName"] = "AREA_LINEA";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("REPORTE_VEREDA","AREA_LINEA");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AREA_LINEA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(`AREA_ L_P`)";

	
	
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




	$tdataREPORTE_VEREDA["AREA_LINEA"] = $fdata;
//	AÑO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "AÑO";
	$fdata["GoodName"] = "A_O";
	$fdata["ownerTable"] = "finca";
	$fdata["Label"] = GetFieldLabel("REPORTE_VEREDA","A_O");
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




	$tdataREPORTE_VEREDA["AÑO"] = $fdata;


$tables_data["REPORTE VEREDA"]=&$tdataREPORTE_VEREDA;
$field_labels["REPORTE_VEREDA"] = &$fieldLabelsREPORTE_VEREDA;
$fieldToolTips["REPORTE_VEREDA"] = &$fieldToolTipsREPORTE_VEREDA;
$page_titles["REPORTE_VEREDA"] = &$pageTitlesREPORTE_VEREDA;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["REPORTE VEREDA"] = array();
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
		
	$detailsTablesData["REPORTE VEREDA"][$dIndex] = $detailsParam;

	
		$detailsTablesData["REPORTE VEREDA"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["REPORTE VEREDA"][$dIndex]["masterKeys"][]="PROPIETARIO_CEDULA";

				$detailsTablesData["REPORTE VEREDA"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["REPORTE VEREDA"][$dIndex]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
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
		
	$detailsTablesData["REPORTE VEREDA"][$dIndex] = $detailsParam;

	
		$detailsTablesData["REPORTE VEREDA"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["REPORTE VEREDA"][$dIndex]["masterKeys"][]="PROPIETARIO_CEDULA";

				$detailsTablesData["REPORTE VEREDA"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["REPORTE VEREDA"][$dIndex]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
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
		
	$detailsTablesData["REPORTE VEREDA"][$dIndex] = $detailsParam;

	
		$detailsTablesData["REPORTE VEREDA"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["REPORTE VEREDA"][$dIndex]["masterKeys"][]="PROPIETARIO_CEDULA";

				$detailsTablesData["REPORTE VEREDA"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["REPORTE VEREDA"][$dIndex]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
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
		
	$detailsTablesData["REPORTE VEREDA"][$dIndex] = $detailsParam;

	
		$detailsTablesData["REPORTE VEREDA"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["REPORTE VEREDA"][$dIndex]["masterKeys"][]="PROPIETARIO_CEDULA";

				$detailsTablesData["REPORTE VEREDA"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["REPORTE VEREDA"][$dIndex]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
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
		
	$detailsTablesData["REPORTE VEREDA"][$dIndex] = $detailsParam;

	
		$detailsTablesData["REPORTE VEREDA"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["REPORTE VEREDA"][$dIndex]["masterKeys"][]="PROPIETARIO_CEDULA";

				$detailsTablesData["REPORTE VEREDA"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["REPORTE VEREDA"][$dIndex]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
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
		
	$detailsTablesData["REPORTE VEREDA"][$dIndex] = $detailsParam;

	
		$detailsTablesData["REPORTE VEREDA"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["REPORTE VEREDA"][$dIndex]["masterKeys"][]="PROPIETARIO_CEDULA";

				$detailsTablesData["REPORTE VEREDA"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["REPORTE VEREDA"][$dIndex]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";

// tables which are master tables for current table (detail)
$masterTablesData["REPORTE VEREDA"] = array();


	
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
					$masterTablesData["REPORTE VEREDA"][0] = $masterParams;
				$masterTablesData["REPORTE VEREDA"][0]["masterKeys"] = array();
	$masterTablesData["REPORTE VEREDA"][0]["masterKeys"][]="CEDULA";
				$masterTablesData["REPORTE VEREDA"][0]["detailKeys"] = array();
	$masterTablesData["REPORTE VEREDA"][0]["detailKeys"][]="PROPIETARIO_CEDULA";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_REPORTE_VEREDA()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT  DISTINCT";
$proto0["m_strFieldList"] = "VEREDA,  LINEA_PRINCIPAL,  SUM(`AREA_ L_P`) AS AREA_LINEA,  `AÑO`";
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
	"m_srcTableName" => "REPORTE VEREDA"
));

$proto6["m_sql"] = "VEREDA";
$proto6["m_srcTableName"] = "REPORTE VEREDA";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "LINEA_PRINCIPAL",
	"m_strTable" => "finca",
	"m_srcTableName" => "REPORTE VEREDA"
));

$proto8["m_sql"] = "LINEA_PRINCIPAL";
$proto8["m_srcTableName"] = "REPORTE VEREDA";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$proto11=array();
$proto11["m_functiontype"] = "SQLF_SUM";
$proto11["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "AREA_ L_P",
	"m_strTable" => "finca",
	"m_srcTableName" => "REPORTE VEREDA"
));

$proto11["m_arguments"][]=$obj;
$proto11["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto11);

$proto10["m_sql"] = "SUM(`AREA_ L_P`)";
$proto10["m_srcTableName"] = "REPORTE VEREDA";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "AREA_LINEA";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "finca",
	"m_srcTableName" => "REPORTE VEREDA"
));

$proto13["m_sql"] = "`AÑO`";
$proto13["m_srcTableName"] = "REPORTE VEREDA";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "finca";
$proto16["m_srcTableName"] = "REPORTE VEREDA";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "ID";
$proto16["m_columns"][] = "PROPIETARIO_CEDULA";
$proto16["m_columns"][] = "NOMBRE";
$proto16["m_columns"][] = "VEREDA";
$proto16["m_columns"][] = "FINCA";
$proto16["m_columns"][] = "ALTURA";
$proto16["m_columns"][] = "GEOREFERENCIA";
$proto16["m_columns"][] = "AREA_FINCA";
$proto16["m_columns"][] = "LINEA_PRINCIPAL";
$proto16["m_columns"][] = "AREA_ L_P";
$proto16["m_columns"][] = "AÑO";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "finca";
$proto15["m_alias"] = "";
$proto15["m_srcTableName"] = "REPORTE VEREDA";
$proto17=array();
$proto17["m_sql"] = "";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "";
$proto17["m_havingmode"] = false;
$proto17["m_inBrackets"] = false;
$proto17["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto17);

$proto15["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto15);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto19=array();
						$obj = new SQLField(array(
	"m_strName" => "VEREDA",
	"m_strTable" => "finca",
	"m_srcTableName" => "REPORTE VEREDA"
));

$proto19["m_column"]=$obj;
$obj = new SQLGroupByItem($proto19);

$proto0["m_groupby"][]=$obj;
												$proto21=array();
						$obj = new SQLField(array(
	"m_strName" => "LINEA_PRINCIPAL",
	"m_strTable" => "finca",
	"m_srcTableName" => "REPORTE VEREDA"
));

$proto21["m_column"]=$obj;
$obj = new SQLGroupByItem($proto21);

$proto0["m_groupby"][]=$obj;
												$proto23=array();
						$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "finca",
	"m_srcTableName" => "REPORTE VEREDA"
));

$proto23["m_column"]=$obj;
$obj = new SQLGroupByItem($proto23);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="REPORTE VEREDA";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_REPORTE_VEREDA = createSqlQuery_REPORTE_VEREDA();


	
		;

				

$tdataREPORTE_VEREDA[".sqlquery"] = $queryData_REPORTE_VEREDA;

$tableEvents["REPORTE VEREDA"] = new eventsBase;
$tdataREPORTE_VEREDA[".hasEvents"] = false;

?>