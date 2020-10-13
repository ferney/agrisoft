<?php
require_once(getabspath("classes/cipherer.php"));




$tdataREPORTE_PECUARIO = array();
	$tdataREPORTE_PECUARIO[".truncateText"] = true;
	$tdataREPORTE_PECUARIO[".NumberOfChars"] = 80;
	$tdataREPORTE_PECUARIO[".ShortName"] = "REPORTE_PECUARIO";
	$tdataREPORTE_PECUARIO[".OwnerID"] = "";
	$tdataREPORTE_PECUARIO[".OriginalTable"] = "pecuario";

//	field labels
$fieldLabelsREPORTE_PECUARIO = array();
$fieldToolTipsREPORTE_PECUARIO = array();
$pageTitlesREPORTE_PECUARIO = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsREPORTE_PECUARIO["Spanish"] = array();
	$fieldToolTipsREPORTE_PECUARIO["Spanish"] = array();
	$pageTitlesREPORTE_PECUARIO["Spanish"] = array();
	$fieldLabelsREPORTE_PECUARIO["Spanish"]["VEREDA"] = "VEREDA";
	$fieldToolTipsREPORTE_PECUARIO["Spanish"]["VEREDA"] = "";
	$fieldLabelsREPORTE_PECUARIO["Spanish"]["RAZA"] = "RAZA";
	$fieldToolTipsREPORTE_PECUARIO["Spanish"]["RAZA"] = "";
	$fieldLabelsREPORTE_PECUARIO["Spanish"]["AREA"] = "AREA";
	$fieldToolTipsREPORTE_PECUARIO["Spanish"]["AREA"] = "";
	$fieldLabelsREPORTE_PECUARIO["Spanish"]["A_O"] = "AÑO";
	$fieldToolTipsREPORTE_PECUARIO["Spanish"]["A_O"] = "";
	$fieldLabelsREPORTE_PECUARIO["Spanish"]["UNIDADES"] = "UNIDADES";
	$fieldToolTipsREPORTE_PECUARIO["Spanish"]["UNIDADES"] = "";
	$fieldLabelsREPORTE_PECUARIO["Spanish"]["PRODUCCION_ANUAL"] = "PRODUCCION ANUAL";
	$fieldToolTipsREPORTE_PECUARIO["Spanish"]["PRODUCCION_ANUAL"] = "";
	if (count($fieldToolTipsREPORTE_PECUARIO["Spanish"]))
		$tdataREPORTE_PECUARIO[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsREPORTE_PECUARIO[""] = array();
	$fieldToolTipsREPORTE_PECUARIO[""] = array();
	$pageTitlesREPORTE_PECUARIO[""] = array();
	$fieldLabelsREPORTE_PECUARIO[""]["VEREDA"] = "VEREDA";
	$fieldToolTipsREPORTE_PECUARIO[""]["VEREDA"] = "";
	$fieldLabelsREPORTE_PECUARIO[""]["RAZA"] = "RAZA";
	$fieldToolTipsREPORTE_PECUARIO[""]["RAZA"] = "";
	$fieldLabelsREPORTE_PECUARIO[""]["AREA"] = "AREA";
	$fieldToolTipsREPORTE_PECUARIO[""]["AREA"] = "";
	$fieldLabelsREPORTE_PECUARIO[""]["A_O"] = "AÑO";
	$fieldToolTipsREPORTE_PECUARIO[""]["A_O"] = "";
	$fieldLabelsREPORTE_PECUARIO[""]["UNIDADES"] = "UNIDADES";
	$fieldToolTipsREPORTE_PECUARIO[""]["UNIDADES"] = "";
	$fieldLabelsREPORTE_PECUARIO[""]["PRODUCCION_ANUAL"] = "PRODUCCION ANUAL";
	$fieldToolTipsREPORTE_PECUARIO[""]["PRODUCCION_ANUAL"] = "";
	if (count($fieldToolTipsREPORTE_PECUARIO[""]))
		$tdataREPORTE_PECUARIO[".isUseToolTips"] = true;
}


	$tdataREPORTE_PECUARIO[".NCSearch"] = true;



$tdataREPORTE_PECUARIO[".shortTableName"] = "REPORTE_PECUARIO";
$tdataREPORTE_PECUARIO[".nSecOptions"] = 0;
$tdataREPORTE_PECUARIO[".recsPerRowPrint"] = 1;
$tdataREPORTE_PECUARIO[".mainTableOwnerID"] = "";
$tdataREPORTE_PECUARIO[".moveNext"] = 1;
$tdataREPORTE_PECUARIO[".entityType"] = 2;

$tdataREPORTE_PECUARIO[".strOriginalTableName"] = "pecuario";

	



$tdataREPORTE_PECUARIO[".showAddInPopup"] = false;

$tdataREPORTE_PECUARIO[".showEditInPopup"] = false;

$tdataREPORTE_PECUARIO[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataREPORTE_PECUARIO[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataREPORTE_PECUARIO[".fieldsForRegister"] = array();

$tdataREPORTE_PECUARIO[".listAjax"] = false;

	$tdataREPORTE_PECUARIO[".audit"] = false;

	$tdataREPORTE_PECUARIO[".locking"] = false;


$tdataREPORTE_PECUARIO[".add"] = true;
$tdataREPORTE_PECUARIO[".afterAddAction"] = 1;
$tdataREPORTE_PECUARIO[".closePopupAfterAdd"] = 1;
$tdataREPORTE_PECUARIO[".afterAddActionDetTable"] = "";

$tdataREPORTE_PECUARIO[".list"] = true;



$tdataREPORTE_PECUARIO[".exportTo"] = true;

$tdataREPORTE_PECUARIO[".printFriendly"] = true;


$tdataREPORTE_PECUARIO[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataREPORTE_PECUARIO[".searchSaving"] = false;
//

$tdataREPORTE_PECUARIO[".showSearchPanel"] = true;
		$tdataREPORTE_PECUARIO[".flexibleSearch"] = true;

$tdataREPORTE_PECUARIO[".isUseAjaxSuggest"] = true;




$tdataREPORTE_PECUARIO[".addPageEvents"] = false;

// use timepicker for search panel
$tdataREPORTE_PECUARIO[".isUseTimeForSearch"] = false;





$tdataREPORTE_PECUARIO[".allSearchFields"] = array();
$tdataREPORTE_PECUARIO[".filterFields"] = array();
$tdataREPORTE_PECUARIO[".requiredSearchFields"] = array();

$tdataREPORTE_PECUARIO[".allSearchFields"][] = "VEREDA";
	$tdataREPORTE_PECUARIO[".allSearchFields"][] = "RAZA";
	$tdataREPORTE_PECUARIO[".allSearchFields"][] = "UNIDADES";
	$tdataREPORTE_PECUARIO[".allSearchFields"][] = "AREA";
	$tdataREPORTE_PECUARIO[".allSearchFields"][] = "PRODUCCION_ANUAL";
	$tdataREPORTE_PECUARIO[".allSearchFields"][] = "AÑO";
	

$tdataREPORTE_PECUARIO[".googleLikeFields"] = array();
$tdataREPORTE_PECUARIO[".googleLikeFields"][] = "VEREDA";
$tdataREPORTE_PECUARIO[".googleLikeFields"][] = "RAZA";
$tdataREPORTE_PECUARIO[".googleLikeFields"][] = "UNIDADES";
$tdataREPORTE_PECUARIO[".googleLikeFields"][] = "AREA";
$tdataREPORTE_PECUARIO[".googleLikeFields"][] = "PRODUCCION_ANUAL";
$tdataREPORTE_PECUARIO[".googleLikeFields"][] = "AÑO";


$tdataREPORTE_PECUARIO[".advSearchFields"] = array();
$tdataREPORTE_PECUARIO[".advSearchFields"][] = "VEREDA";
$tdataREPORTE_PECUARIO[".advSearchFields"][] = "RAZA";
$tdataREPORTE_PECUARIO[".advSearchFields"][] = "UNIDADES";
$tdataREPORTE_PECUARIO[".advSearchFields"][] = "AREA";
$tdataREPORTE_PECUARIO[".advSearchFields"][] = "PRODUCCION_ANUAL";
$tdataREPORTE_PECUARIO[".advSearchFields"][] = "AÑO";

$tdataREPORTE_PECUARIO[".tableType"] = "report";

$tdataREPORTE_PECUARIO[".printerPageOrientation"] = 0;
$tdataREPORTE_PECUARIO[".nPrinterPageScale"] = 100;

$tdataREPORTE_PECUARIO[".nPrinterSplitRecords"] = 40;

$tdataREPORTE_PECUARIO[".nPrinterPDFSplitRecords"] = 40;



$tdataREPORTE_PECUARIO[".geocodingEnabled"] = false;

//report settings
$tdataREPORTE_PECUARIO[".printReportLayout"] = 6;

$tdataREPORTE_PECUARIO[".reportPrintPartitionType"] = 1;
$tdataREPORTE_PECUARIO[".reportPrintGroupsPerPage"] = 40;
$tdataREPORTE_PECUARIO[".reportPrintPDFGroupsPerPage"] = 40;
$tdataREPORTE_PECUARIO[".lowGroup"] = 0;



$tdataREPORTE_PECUARIO[".pageSize"] = 20;






$tdataREPORTE_PECUARIO[".repShowDet"] = true;

$tdataREPORTE_PECUARIO[".reportLayout"] = 6;

//end of report settings




$tdataREPORTE_PECUARIO[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataREPORTE_PECUARIO[".strOrderBy"] = $tstrOrderBy;

$tdataREPORTE_PECUARIO[".orderindexes"] = array();

$tdataREPORTE_PECUARIO[".sqlHead"] = "SELECT  DISTINCT VEREDA,  RAZA,  SUM(U_A) AS UNIDADES,  AREA,  PRODUCCION_ANUAL,  `AÑO`";
$tdataREPORTE_PECUARIO[".sqlFrom"] = "FROM pecuario";
$tdataREPORTE_PECUARIO[".sqlWhereExpr"] = "";
$tdataREPORTE_PECUARIO[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataREPORTE_PECUARIO[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataREPORTE_PECUARIO[".arrGroupsPerPage"] = $arrGPP;

$tdataREPORTE_PECUARIO[".highlightSearchResults"] = true;

$tableKeysREPORTE_PECUARIO = array();
$tdataREPORTE_PECUARIO[".Keys"] = $tableKeysREPORTE_PECUARIO;

$tdataREPORTE_PECUARIO[".listFields"] = array();
$tdataREPORTE_PECUARIO[".listFields"][] = "VEREDA";
$tdataREPORTE_PECUARIO[".listFields"][] = "RAZA";
$tdataREPORTE_PECUARIO[".listFields"][] = "UNIDADES";
$tdataREPORTE_PECUARIO[".listFields"][] = "AREA";
$tdataREPORTE_PECUARIO[".listFields"][] = "PRODUCCION_ANUAL";
$tdataREPORTE_PECUARIO[".listFields"][] = "AÑO";

$tdataREPORTE_PECUARIO[".hideMobileList"] = array();


$tdataREPORTE_PECUARIO[".viewFields"] = array();
$tdataREPORTE_PECUARIO[".viewFields"][] = "VEREDA";
$tdataREPORTE_PECUARIO[".viewFields"][] = "RAZA";
$tdataREPORTE_PECUARIO[".viewFields"][] = "UNIDADES";
$tdataREPORTE_PECUARIO[".viewFields"][] = "AREA";
$tdataREPORTE_PECUARIO[".viewFields"][] = "PRODUCCION_ANUAL";
$tdataREPORTE_PECUARIO[".viewFields"][] = "AÑO";

$tdataREPORTE_PECUARIO[".addFields"] = array();
$tdataREPORTE_PECUARIO[".addFields"][] = "VEREDA";
$tdataREPORTE_PECUARIO[".addFields"][] = "RAZA";
$tdataREPORTE_PECUARIO[".addFields"][] = "AREA";
$tdataREPORTE_PECUARIO[".addFields"][] = "PRODUCCION_ANUAL";
$tdataREPORTE_PECUARIO[".addFields"][] = "AÑO";

$tdataREPORTE_PECUARIO[".masterListFields"] = array();
$tdataREPORTE_PECUARIO[".masterListFields"][] = "VEREDA";
$tdataREPORTE_PECUARIO[".masterListFields"][] = "RAZA";
$tdataREPORTE_PECUARIO[".masterListFields"][] = "UNIDADES";
$tdataREPORTE_PECUARIO[".masterListFields"][] = "AREA";
$tdataREPORTE_PECUARIO[".masterListFields"][] = "PRODUCCION_ANUAL";
$tdataREPORTE_PECUARIO[".masterListFields"][] = "AÑO";

$tdataREPORTE_PECUARIO[".inlineAddFields"] = array();
$tdataREPORTE_PECUARIO[".inlineAddFields"][] = "VEREDA";
$tdataREPORTE_PECUARIO[".inlineAddFields"][] = "RAZA";
$tdataREPORTE_PECUARIO[".inlineAddFields"][] = "AREA";
$tdataREPORTE_PECUARIO[".inlineAddFields"][] = "PRODUCCION_ANUAL";
$tdataREPORTE_PECUARIO[".inlineAddFields"][] = "AÑO";

$tdataREPORTE_PECUARIO[".editFields"] = array();
$tdataREPORTE_PECUARIO[".editFields"][] = "VEREDA";
$tdataREPORTE_PECUARIO[".editFields"][] = "RAZA";
$tdataREPORTE_PECUARIO[".editFields"][] = "AREA";
$tdataREPORTE_PECUARIO[".editFields"][] = "PRODUCCION_ANUAL";
$tdataREPORTE_PECUARIO[".editFields"][] = "AÑO";

$tdataREPORTE_PECUARIO[".inlineEditFields"] = array();
$tdataREPORTE_PECUARIO[".inlineEditFields"][] = "VEREDA";
$tdataREPORTE_PECUARIO[".inlineEditFields"][] = "RAZA";
$tdataREPORTE_PECUARIO[".inlineEditFields"][] = "AREA";
$tdataREPORTE_PECUARIO[".inlineEditFields"][] = "PRODUCCION_ANUAL";
$tdataREPORTE_PECUARIO[".inlineEditFields"][] = "AÑO";

$tdataREPORTE_PECUARIO[".exportFields"] = array();
$tdataREPORTE_PECUARIO[".exportFields"][] = "VEREDA";
$tdataREPORTE_PECUARIO[".exportFields"][] = "RAZA";
$tdataREPORTE_PECUARIO[".exportFields"][] = "UNIDADES";
$tdataREPORTE_PECUARIO[".exportFields"][] = "AREA";
$tdataREPORTE_PECUARIO[".exportFields"][] = "PRODUCCION_ANUAL";
$tdataREPORTE_PECUARIO[".exportFields"][] = "AÑO";

$tdataREPORTE_PECUARIO[".importFields"] = array();
$tdataREPORTE_PECUARIO[".importFields"][] = "VEREDA";
$tdataREPORTE_PECUARIO[".importFields"][] = "RAZA";
$tdataREPORTE_PECUARIO[".importFields"][] = "UNIDADES";
$tdataREPORTE_PECUARIO[".importFields"][] = "AREA";
$tdataREPORTE_PECUARIO[".importFields"][] = "PRODUCCION_ANUAL";
$tdataREPORTE_PECUARIO[".importFields"][] = "AÑO";

$tdataREPORTE_PECUARIO[".printFields"] = array();
$tdataREPORTE_PECUARIO[".printFields"][] = "VEREDA";
$tdataREPORTE_PECUARIO[".printFields"][] = "RAZA";
$tdataREPORTE_PECUARIO[".printFields"][] = "UNIDADES";
$tdataREPORTE_PECUARIO[".printFields"][] = "AREA";
$tdataREPORTE_PECUARIO[".printFields"][] = "PRODUCCION_ANUAL";
$tdataREPORTE_PECUARIO[".printFields"][] = "AÑO";

//	VEREDA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "VEREDA";
	$fdata["GoodName"] = "VEREDA";
	$fdata["ownerTable"] = "pecuario";
	$fdata["Label"] = GetFieldLabel("REPORTE_PECUARIO","VEREDA");
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




	$tdataREPORTE_PECUARIO["VEREDA"] = $fdata;
//	RAZA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "RAZA";
	$fdata["GoodName"] = "RAZA";
	$fdata["ownerTable"] = "pecuario";
	$fdata["Label"] = GetFieldLabel("REPORTE_PECUARIO","RAZA");
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

		$fdata["strField"] = "RAZA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RAZA";

	
	
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
	$edata["LookupValues"][] = "----BOVINO----";
	$edata["LookupValues"][] = "ANGUS";
	$edata["LookupValues"][] = "AYRSHINE";
	$edata["LookupValues"][] = "BLANCO OREJINEGO";
	$edata["LookupValues"][] = "BRAHMAN";
	$edata["LookupValues"][] = "CASANAREÑO";
	$edata["LookupValues"][] = "CHINO SANTANDEREANO";
	$edata["LookupValues"][] = "CRIOLLO";
	$edata["LookupValues"][] = "CEBÚ";
	$edata["LookupValues"][] = "HOLSTEIN";
	$edata["LookupValues"][] = "JERSEY";
	$edata["LookupValues"][] = "LUCERNA";
	$edata["LookupValues"][] = "MESTIZO";
	$edata["LookupValues"][] = "NORMNDO";
	$edata["LookupValues"][] = "PARDO SUIZO";
	$edata["LookupValues"][] = "ROMOSINUANO";
	$edata["LookupValues"][] = "SIBONEY";
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
	$edata["LookupValues"][] = "----OVINO--CAPRINO----";
	$edata["LookupValues"][] = "LAMANCHA";
	$edata["LookupValues"][] = "SAANEN";
	$edata["LookupValues"][] = "TOGGENBURG";
	$edata["LookupValues"][] = "BOER";
	$edata["LookupValues"][] = "ESPAÑOLA";
	$edata["LookupValues"][] = "CRIOLLA";
	$edata["LookupValues"][] = "ANGLO-NUBIAN";
	$edata["LookupValues"][] = "ANGORA";
	$edata["LookupValues"][] = "KATAHDIN";
	$edata["LookupValues"][] = "SANTA INES";
	$edata["LookupValues"][] = "DORPER";
	$edata["LookupValues"][] = "PELIBUEY";
	$edata["LookupValues"][] = "CHAROLLAIS";
	$edata["LookupValues"][] = "OTRO";
	$edata["LookupValues"][] = "----ACUICOLA----";
	$edata["LookupValues"][] = "BOCACHICO";
	$edata["LookupValues"][] = "CACHAMA";
	$edata["LookupValues"][] = "CARPA";
	$edata["LookupValues"][] = "TILAPIA";
	$edata["LookupValues"][] = "TRUCHA";
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




	$tdataREPORTE_PECUARIO["RAZA"] = $fdata;
//	UNIDADES
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "UNIDADES";
	$fdata["GoodName"] = "UNIDADES";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("REPORTE_PECUARIO","UNIDADES");
	$fdata["FieldType"] = 14;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "UNIDADES";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(U_A)";

	
	
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




	$tdataREPORTE_PECUARIO["UNIDADES"] = $fdata;
//	AREA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "AREA";
	$fdata["GoodName"] = "AREA";
	$fdata["ownerTable"] = "pecuario";
	$fdata["Label"] = GetFieldLabel("REPORTE_PECUARIO","AREA");
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




	$tdataREPORTE_PECUARIO["AREA"] = $fdata;
//	PRODUCCION_ANUAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "PRODUCCION_ANUAL";
	$fdata["GoodName"] = "PRODUCCION_ANUAL";
	$fdata["ownerTable"] = "pecuario";
	$fdata["Label"] = GetFieldLabel("REPORTE_PECUARIO","PRODUCCION_ANUAL");
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




	$tdataREPORTE_PECUARIO["PRODUCCION_ANUAL"] = $fdata;
//	AÑO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "AÑO";
	$fdata["GoodName"] = "A_O";
	$fdata["ownerTable"] = "pecuario";
	$fdata["Label"] = GetFieldLabel("REPORTE_PECUARIO","A_O");
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




	$tdataREPORTE_PECUARIO["AÑO"] = $fdata;


$tables_data["REPORTE PECUARIO"]=&$tdataREPORTE_PECUARIO;
$field_labels["REPORTE_PECUARIO"] = &$fieldLabelsREPORTE_PECUARIO;
$fieldToolTips["REPORTE_PECUARIO"] = &$fieldToolTipsREPORTE_PECUARIO;
$page_titles["REPORTE_PECUARIO"] = &$pageTitlesREPORTE_PECUARIO;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["REPORTE PECUARIO"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["REPORTE PECUARIO"] = array();


	
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
					$masterTablesData["REPORTE PECUARIO"][0] = $masterParams;
				$masterTablesData["REPORTE PECUARIO"][0]["masterKeys"] = array();
	$masterTablesData["REPORTE PECUARIO"][0]["masterKeys"][]="PROPIETARIO_CEDULA";
				$masterTablesData["REPORTE PECUARIO"][0]["detailKeys"] = array();
	$masterTablesData["REPORTE PECUARIO"][0]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_REPORTE_PECUARIO()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT  DISTINCT";
$proto0["m_strFieldList"] = "VEREDA,  RAZA,  SUM(U_A) AS UNIDADES,  AREA,  PRODUCCION_ANUAL,  `AÑO`";
$proto0["m_strFrom"] = "FROM pecuario";
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
	"m_strTable" => "pecuario",
	"m_srcTableName" => "REPORTE PECUARIO"
));

$proto6["m_sql"] = "VEREDA";
$proto6["m_srcTableName"] = "REPORTE PECUARIO";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "RAZA",
	"m_strTable" => "pecuario",
	"m_srcTableName" => "REPORTE PECUARIO"
));

$proto8["m_sql"] = "RAZA";
$proto8["m_srcTableName"] = "REPORTE PECUARIO";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$proto11=array();
$proto11["m_functiontype"] = "SQLF_SUM";
$proto11["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "U_A",
	"m_strTable" => "pecuario",
	"m_srcTableName" => "REPORTE PECUARIO"
));

$proto11["m_arguments"][]=$obj;
$proto11["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto11);

$proto10["m_sql"] = "SUM(U_A)";
$proto10["m_srcTableName"] = "REPORTE PECUARIO";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "UNIDADES";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "AREA",
	"m_strTable" => "pecuario",
	"m_srcTableName" => "REPORTE PECUARIO"
));

$proto13["m_sql"] = "AREA";
$proto13["m_srcTableName"] = "REPORTE PECUARIO";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "PRODUCCION_ANUAL",
	"m_strTable" => "pecuario",
	"m_srcTableName" => "REPORTE PECUARIO"
));

$proto15["m_sql"] = "PRODUCCION_ANUAL";
$proto15["m_srcTableName"] = "REPORTE PECUARIO";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "pecuario",
	"m_srcTableName" => "REPORTE PECUARIO"
));

$proto17["m_sql"] = "`AÑO`";
$proto17["m_srcTableName"] = "REPORTE PECUARIO";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "pecuario";
$proto20["m_srcTableName"] = "REPORTE PECUARIO";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "ID";
$proto20["m_columns"][] = "FINCA_PROPIETARIO_CEDULA";
$proto20["m_columns"][] = "NOMBRE";
$proto20["m_columns"][] = "VEREDA";
$proto20["m_columns"][] = "FINCA";
$proto20["m_columns"][] = "RAZA";
$proto20["m_columns"][] = "U_A";
$proto20["m_columns"][] = "AREA";
$proto20["m_columns"][] = "PRODUCCION_ANUAL";
$proto20["m_columns"][] = "AÑO";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_sql"] = "pecuario";
$proto19["m_alias"] = "";
$proto19["m_srcTableName"] = "REPORTE PECUARIO";
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
	"m_strTable" => "pecuario",
	"m_srcTableName" => "REPORTE PECUARIO"
));

$proto23["m_column"]=$obj;
$obj = new SQLGroupByItem($proto23);

$proto0["m_groupby"][]=$obj;
												$proto25=array();
						$obj = new SQLField(array(
	"m_strName" => "RAZA",
	"m_strTable" => "pecuario",
	"m_srcTableName" => "REPORTE PECUARIO"
));

$proto25["m_column"]=$obj;
$obj = new SQLGroupByItem($proto25);

$proto0["m_groupby"][]=$obj;
												$proto27=array();
						$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "pecuario",
	"m_srcTableName" => "REPORTE PECUARIO"
));

$proto27["m_column"]=$obj;
$obj = new SQLGroupByItem($proto27);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="REPORTE PECUARIO";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_REPORTE_PECUARIO = createSqlQuery_REPORTE_PECUARIO();


	
		;

						

$tdataREPORTE_PECUARIO[".sqlquery"] = $queryData_REPORTE_PECUARIO;

$tableEvents["REPORTE PECUARIO"] = new eventsBase;
$tdataREPORTE_PECUARIO[".hasEvents"] = false;

?>