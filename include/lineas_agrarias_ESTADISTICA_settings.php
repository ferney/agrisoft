<?php
require_once(getabspath("classes/cipherer.php"));




$tdatalineas_agrarias_ESTADISTICA = array();
	$tdatalineas_agrarias_ESTADISTICA[".ShortName"] = "lineas_agrarias_ESTADISTICA";
	$tdatalineas_agrarias_ESTADISTICA[".OwnerID"] = "";
	$tdatalineas_agrarias_ESTADISTICA[".OriginalTable"] = "lineas_agrarias";

//	field labels
$fieldLabelslineas_agrarias_ESTADISTICA = array();
$fieldToolTipslineas_agrarias_ESTADISTICA = array();
$pageTitleslineas_agrarias_ESTADISTICA = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelslineas_agrarias_ESTADISTICA["Spanish"] = array();
	$fieldToolTipslineas_agrarias_ESTADISTICA["Spanish"] = array();
	$pageTitleslineas_agrarias_ESTADISTICA["Spanish"] = array();
	$fieldLabelslineas_agrarias_ESTADISTICA["Spanish"]["VEREDA"] = "VEREDA";
	$fieldToolTipslineas_agrarias_ESTADISTICA["Spanish"]["VEREDA"] = "";
	$fieldLabelslineas_agrarias_ESTADISTICA["Spanish"]["FINCA"] = "FINCA";
	$fieldToolTipslineas_agrarias_ESTADISTICA["Spanish"]["FINCA"] = "";
	$fieldLabelslineas_agrarias_ESTADISTICA["Spanish"]["LINEA"] = "LINEA";
	$fieldToolTipslineas_agrarias_ESTADISTICA["Spanish"]["LINEA"] = "";
	$fieldLabelslineas_agrarias_ESTADISTICA["Spanish"]["VARIEDAD"] = "VARIEDAD";
	$fieldToolTipslineas_agrarias_ESTADISTICA["Spanish"]["VARIEDAD"] = "";
	$fieldLabelslineas_agrarias_ESTADISTICA["Spanish"]["AREA"] = "AREA";
	$fieldToolTipslineas_agrarias_ESTADISTICA["Spanish"]["AREA"] = "";
	$fieldLabelslineas_agrarias_ESTADISTICA["Spanish"]["PRODUCCION_ANUAL"] = "PRODUCCION ANUAL";
	$fieldToolTipslineas_agrarias_ESTADISTICA["Spanish"]["PRODUCCION_ANUAL"] = "";
	$fieldLabelslineas_agrarias_ESTADISTICA["Spanish"]["A_O"] = "AÑO";
	$fieldToolTipslineas_agrarias_ESTADISTICA["Spanish"]["A_O"] = "";
	if (count($fieldToolTipslineas_agrarias_ESTADISTICA["Spanish"]))
		$tdatalineas_agrarias_ESTADISTICA[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelslineas_agrarias_ESTADISTICA[""] = array();
	$fieldToolTipslineas_agrarias_ESTADISTICA[""] = array();
	$pageTitleslineas_agrarias_ESTADISTICA[""] = array();
	$fieldLabelslineas_agrarias_ESTADISTICA[""]["VEREDA"] = "VEREDA";
	$fieldToolTipslineas_agrarias_ESTADISTICA[""]["VEREDA"] = "";
	$fieldLabelslineas_agrarias_ESTADISTICA[""]["FINCA"] = "FINCA";
	$fieldToolTipslineas_agrarias_ESTADISTICA[""]["FINCA"] = "";
	$fieldLabelslineas_agrarias_ESTADISTICA[""]["LINEA"] = "LINEA";
	$fieldToolTipslineas_agrarias_ESTADISTICA[""]["LINEA"] = "";
	$fieldLabelslineas_agrarias_ESTADISTICA[""]["VARIEDAD"] = "VARIEDAD";
	$fieldToolTipslineas_agrarias_ESTADISTICA[""]["VARIEDAD"] = "";
	$fieldLabelslineas_agrarias_ESTADISTICA[""]["AREA"] = "AREA";
	$fieldToolTipslineas_agrarias_ESTADISTICA[""]["AREA"] = "";
	$fieldLabelslineas_agrarias_ESTADISTICA[""]["PRODUCCION_ANUAL"] = "PRODUCCION ANUAL";
	$fieldToolTipslineas_agrarias_ESTADISTICA[""]["PRODUCCION_ANUAL"] = "";
	$fieldLabelslineas_agrarias_ESTADISTICA[""]["A_O"] = "AÑO";
	$fieldToolTipslineas_agrarias_ESTADISTICA[""]["A_O"] = "";
	if (count($fieldToolTipslineas_agrarias_ESTADISTICA[""]))
		$tdatalineas_agrarias_ESTADISTICA[".isUseToolTips"] = true;
}


	$tdatalineas_agrarias_ESTADISTICA[".NCSearch"] = true;

	$tdatalineas_agrarias_ESTADISTICA[".ChartRefreshTime"] = 0;


$tdatalineas_agrarias_ESTADISTICA[".shortTableName"] = "lineas_agrarias_ESTADISTICA";
$tdatalineas_agrarias_ESTADISTICA[".nSecOptions"] = 0;
$tdatalineas_agrarias_ESTADISTICA[".recsPerRowPrint"] = 1;
$tdatalineas_agrarias_ESTADISTICA[".mainTableOwnerID"] = "";
$tdatalineas_agrarias_ESTADISTICA[".moveNext"] = 1;
$tdatalineas_agrarias_ESTADISTICA[".entityType"] = 3;

$tdatalineas_agrarias_ESTADISTICA[".strOriginalTableName"] = "lineas_agrarias";

	



$tdatalineas_agrarias_ESTADISTICA[".showAddInPopup"] = false;

$tdatalineas_agrarias_ESTADISTICA[".showEditInPopup"] = false;

$tdatalineas_agrarias_ESTADISTICA[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatalineas_agrarias_ESTADISTICA[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatalineas_agrarias_ESTADISTICA[".fieldsForRegister"] = array();

$tdatalineas_agrarias_ESTADISTICA[".listAjax"] = false;

	$tdatalineas_agrarias_ESTADISTICA[".audit"] = false;

	$tdatalineas_agrarias_ESTADISTICA[".locking"] = false;


$tdatalineas_agrarias_ESTADISTICA[".add"] = true;
$tdatalineas_agrarias_ESTADISTICA[".afterAddAction"] = 1;
$tdatalineas_agrarias_ESTADISTICA[".closePopupAfterAdd"] = 1;
$tdatalineas_agrarias_ESTADISTICA[".afterAddActionDetTable"] = "";

$tdatalineas_agrarias_ESTADISTICA[".list"] = true;






$tdatalineas_agrarias_ESTADISTICA[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatalineas_agrarias_ESTADISTICA[".searchSaving"] = false;
//

$tdatalineas_agrarias_ESTADISTICA[".showSearchPanel"] = true;
		$tdatalineas_agrarias_ESTADISTICA[".flexibleSearch"] = true;

$tdatalineas_agrarias_ESTADISTICA[".isUseAjaxSuggest"] = true;




$tdatalineas_agrarias_ESTADISTICA[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalineas_agrarias_ESTADISTICA[".isUseTimeForSearch"] = false;



$tdatalineas_agrarias_ESTADISTICA[".badgeColor"] = "6B8E23";


$tdatalineas_agrarias_ESTADISTICA[".allSearchFields"] = array();
$tdatalineas_agrarias_ESTADISTICA[".filterFields"] = array();
$tdatalineas_agrarias_ESTADISTICA[".requiredSearchFields"] = array();

$tdatalineas_agrarias_ESTADISTICA[".allSearchFields"][] = "VEREDA";
	$tdatalineas_agrarias_ESTADISTICA[".allSearchFields"][] = "FINCA";
	$tdatalineas_agrarias_ESTADISTICA[".allSearchFields"][] = "LINEA";
	$tdatalineas_agrarias_ESTADISTICA[".allSearchFields"][] = "VARIEDAD";
	$tdatalineas_agrarias_ESTADISTICA[".allSearchFields"][] = "AREA";
	$tdatalineas_agrarias_ESTADISTICA[".allSearchFields"][] = "PRODUCCION_ANUAL";
	$tdatalineas_agrarias_ESTADISTICA[".allSearchFields"][] = "AÑO";
	

$tdatalineas_agrarias_ESTADISTICA[".googleLikeFields"] = array();
$tdatalineas_agrarias_ESTADISTICA[".googleLikeFields"][] = "VEREDA";
$tdatalineas_agrarias_ESTADISTICA[".googleLikeFields"][] = "FINCA";
$tdatalineas_agrarias_ESTADISTICA[".googleLikeFields"][] = "LINEA";
$tdatalineas_agrarias_ESTADISTICA[".googleLikeFields"][] = "VARIEDAD";
$tdatalineas_agrarias_ESTADISTICA[".googleLikeFields"][] = "AREA";
$tdatalineas_agrarias_ESTADISTICA[".googleLikeFields"][] = "PRODUCCION_ANUAL";
$tdatalineas_agrarias_ESTADISTICA[".googleLikeFields"][] = "AÑO";


$tdatalineas_agrarias_ESTADISTICA[".advSearchFields"] = array();
$tdatalineas_agrarias_ESTADISTICA[".advSearchFields"][] = "VEREDA";
$tdatalineas_agrarias_ESTADISTICA[".advSearchFields"][] = "FINCA";
$tdatalineas_agrarias_ESTADISTICA[".advSearchFields"][] = "LINEA";
$tdatalineas_agrarias_ESTADISTICA[".advSearchFields"][] = "VARIEDAD";
$tdatalineas_agrarias_ESTADISTICA[".advSearchFields"][] = "AREA";
$tdatalineas_agrarias_ESTADISTICA[".advSearchFields"][] = "PRODUCCION_ANUAL";
$tdatalineas_agrarias_ESTADISTICA[".advSearchFields"][] = "AÑO";

$tdatalineas_agrarias_ESTADISTICA[".tableType"] = "chart";

$tdatalineas_agrarias_ESTADISTICA[".printerPageOrientation"] = 0;
$tdatalineas_agrarias_ESTADISTICA[".nPrinterPageScale"] = 100;

$tdatalineas_agrarias_ESTADISTICA[".nPrinterSplitRecords"] = 40;

$tdatalineas_agrarias_ESTADISTICA[".nPrinterPDFSplitRecords"] = 40;



$tdatalineas_agrarias_ESTADISTICA[".geocodingEnabled"] = false;



// chart settings
$tdatalineas_agrarias_ESTADISTICA[".chartType"] = "2DColumn";
// end of chart settings


$tdatalineas_agrarias_ESTADISTICA[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatalineas_agrarias_ESTADISTICA[".strOrderBy"] = $tstrOrderBy;

$tdatalineas_agrarias_ESTADISTICA[".orderindexes"] = array();

$tdatalineas_agrarias_ESTADISTICA[".sqlHead"] = "SELECT  DISTINCT VEREDA,  FINCA,  LINEA,  VARIEDAD,  AREA,  PRODUCCION_ANUAL,  `AÑO`";
$tdatalineas_agrarias_ESTADISTICA[".sqlFrom"] = "FROM lineas_agrarias";
$tdatalineas_agrarias_ESTADISTICA[".sqlWhereExpr"] = "";
$tdatalineas_agrarias_ESTADISTICA[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalineas_agrarias_ESTADISTICA[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalineas_agrarias_ESTADISTICA[".arrGroupsPerPage"] = $arrGPP;

$tdatalineas_agrarias_ESTADISTICA[".highlightSearchResults"] = true;

$tableKeyslineas_agrarias_ESTADISTICA = array();
$tdatalineas_agrarias_ESTADISTICA[".Keys"] = $tableKeyslineas_agrarias_ESTADISTICA;

$tdatalineas_agrarias_ESTADISTICA[".listFields"] = array();
$tdatalineas_agrarias_ESTADISTICA[".listFields"][] = "VEREDA";
$tdatalineas_agrarias_ESTADISTICA[".listFields"][] = "FINCA";
$tdatalineas_agrarias_ESTADISTICA[".listFields"][] = "LINEA";
$tdatalineas_agrarias_ESTADISTICA[".listFields"][] = "VARIEDAD";
$tdatalineas_agrarias_ESTADISTICA[".listFields"][] = "AREA";
$tdatalineas_agrarias_ESTADISTICA[".listFields"][] = "PRODUCCION_ANUAL";
$tdatalineas_agrarias_ESTADISTICA[".listFields"][] = "AÑO";

$tdatalineas_agrarias_ESTADISTICA[".hideMobileList"] = array();


$tdatalineas_agrarias_ESTADISTICA[".viewFields"] = array();
$tdatalineas_agrarias_ESTADISTICA[".viewFields"][] = "VEREDA";
$tdatalineas_agrarias_ESTADISTICA[".viewFields"][] = "FINCA";
$tdatalineas_agrarias_ESTADISTICA[".viewFields"][] = "LINEA";
$tdatalineas_agrarias_ESTADISTICA[".viewFields"][] = "VARIEDAD";
$tdatalineas_agrarias_ESTADISTICA[".viewFields"][] = "AREA";
$tdatalineas_agrarias_ESTADISTICA[".viewFields"][] = "PRODUCCION_ANUAL";
$tdatalineas_agrarias_ESTADISTICA[".viewFields"][] = "AÑO";

$tdatalineas_agrarias_ESTADISTICA[".addFields"] = array();
$tdatalineas_agrarias_ESTADISTICA[".addFields"][] = "VEREDA";
$tdatalineas_agrarias_ESTADISTICA[".addFields"][] = "FINCA";
$tdatalineas_agrarias_ESTADISTICA[".addFields"][] = "LINEA";
$tdatalineas_agrarias_ESTADISTICA[".addFields"][] = "VARIEDAD";
$tdatalineas_agrarias_ESTADISTICA[".addFields"][] = "AREA";
$tdatalineas_agrarias_ESTADISTICA[".addFields"][] = "PRODUCCION_ANUAL";
$tdatalineas_agrarias_ESTADISTICA[".addFields"][] = "AÑO";

$tdatalineas_agrarias_ESTADISTICA[".masterListFields"] = array();
$tdatalineas_agrarias_ESTADISTICA[".masterListFields"][] = "VEREDA";
$tdatalineas_agrarias_ESTADISTICA[".masterListFields"][] = "FINCA";
$tdatalineas_agrarias_ESTADISTICA[".masterListFields"][] = "LINEA";
$tdatalineas_agrarias_ESTADISTICA[".masterListFields"][] = "VARIEDAD";
$tdatalineas_agrarias_ESTADISTICA[".masterListFields"][] = "AREA";
$tdatalineas_agrarias_ESTADISTICA[".masterListFields"][] = "PRODUCCION_ANUAL";
$tdatalineas_agrarias_ESTADISTICA[".masterListFields"][] = "AÑO";

$tdatalineas_agrarias_ESTADISTICA[".inlineAddFields"] = array();
$tdatalineas_agrarias_ESTADISTICA[".inlineAddFields"][] = "VEREDA";
$tdatalineas_agrarias_ESTADISTICA[".inlineAddFields"][] = "FINCA";
$tdatalineas_agrarias_ESTADISTICA[".inlineAddFields"][] = "LINEA";
$tdatalineas_agrarias_ESTADISTICA[".inlineAddFields"][] = "VARIEDAD";
$tdatalineas_agrarias_ESTADISTICA[".inlineAddFields"][] = "AREA";
$tdatalineas_agrarias_ESTADISTICA[".inlineAddFields"][] = "PRODUCCION_ANUAL";
$tdatalineas_agrarias_ESTADISTICA[".inlineAddFields"][] = "AÑO";

$tdatalineas_agrarias_ESTADISTICA[".editFields"] = array();
$tdatalineas_agrarias_ESTADISTICA[".editFields"][] = "VEREDA";
$tdatalineas_agrarias_ESTADISTICA[".editFields"][] = "FINCA";
$tdatalineas_agrarias_ESTADISTICA[".editFields"][] = "LINEA";
$tdatalineas_agrarias_ESTADISTICA[".editFields"][] = "VARIEDAD";
$tdatalineas_agrarias_ESTADISTICA[".editFields"][] = "AREA";
$tdatalineas_agrarias_ESTADISTICA[".editFields"][] = "PRODUCCION_ANUAL";
$tdatalineas_agrarias_ESTADISTICA[".editFields"][] = "AÑO";

$tdatalineas_agrarias_ESTADISTICA[".inlineEditFields"] = array();
$tdatalineas_agrarias_ESTADISTICA[".inlineEditFields"][] = "VEREDA";
$tdatalineas_agrarias_ESTADISTICA[".inlineEditFields"][] = "FINCA";
$tdatalineas_agrarias_ESTADISTICA[".inlineEditFields"][] = "LINEA";
$tdatalineas_agrarias_ESTADISTICA[".inlineEditFields"][] = "VARIEDAD";
$tdatalineas_agrarias_ESTADISTICA[".inlineEditFields"][] = "AREA";
$tdatalineas_agrarias_ESTADISTICA[".inlineEditFields"][] = "PRODUCCION_ANUAL";
$tdatalineas_agrarias_ESTADISTICA[".inlineEditFields"][] = "AÑO";

$tdatalineas_agrarias_ESTADISTICA[".exportFields"] = array();
$tdatalineas_agrarias_ESTADISTICA[".exportFields"][] = "VEREDA";
$tdatalineas_agrarias_ESTADISTICA[".exportFields"][] = "FINCA";
$tdatalineas_agrarias_ESTADISTICA[".exportFields"][] = "LINEA";
$tdatalineas_agrarias_ESTADISTICA[".exportFields"][] = "VARIEDAD";
$tdatalineas_agrarias_ESTADISTICA[".exportFields"][] = "AREA";
$tdatalineas_agrarias_ESTADISTICA[".exportFields"][] = "PRODUCCION_ANUAL";
$tdatalineas_agrarias_ESTADISTICA[".exportFields"][] = "AÑO";

$tdatalineas_agrarias_ESTADISTICA[".importFields"] = array();
$tdatalineas_agrarias_ESTADISTICA[".importFields"][] = "VEREDA";
$tdatalineas_agrarias_ESTADISTICA[".importFields"][] = "FINCA";
$tdatalineas_agrarias_ESTADISTICA[".importFields"][] = "LINEA";
$tdatalineas_agrarias_ESTADISTICA[".importFields"][] = "VARIEDAD";
$tdatalineas_agrarias_ESTADISTICA[".importFields"][] = "AREA";
$tdatalineas_agrarias_ESTADISTICA[".importFields"][] = "PRODUCCION_ANUAL";
$tdatalineas_agrarias_ESTADISTICA[".importFields"][] = "AÑO";

$tdatalineas_agrarias_ESTADISTICA[".printFields"] = array();
$tdatalineas_agrarias_ESTADISTICA[".printFields"][] = "VEREDA";
$tdatalineas_agrarias_ESTADISTICA[".printFields"][] = "FINCA";
$tdatalineas_agrarias_ESTADISTICA[".printFields"][] = "LINEA";
$tdatalineas_agrarias_ESTADISTICA[".printFields"][] = "VARIEDAD";
$tdatalineas_agrarias_ESTADISTICA[".printFields"][] = "AREA";
$tdatalineas_agrarias_ESTADISTICA[".printFields"][] = "PRODUCCION_ANUAL";
$tdatalineas_agrarias_ESTADISTICA[".printFields"][] = "AÑO";

//	VEREDA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "VEREDA";
	$fdata["GoodName"] = "VEREDA";
	$fdata["ownerTable"] = "lineas_agrarias";
	$fdata["Label"] = GetFieldLabel("lineas_agrarias_ESTADISTICA","VEREDA");
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




	$tdatalineas_agrarias_ESTADISTICA["VEREDA"] = $fdata;
//	FINCA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FINCA";
	$fdata["GoodName"] = "FINCA";
	$fdata["ownerTable"] = "lineas_agrarias";
	$fdata["Label"] = GetFieldLabel("lineas_agrarias_ESTADISTICA","FINCA");
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

		$fdata["strField"] = "FINCA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FINCA";

	
	
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




	$tdatalineas_agrarias_ESTADISTICA["FINCA"] = $fdata;
//	LINEA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "LINEA";
	$fdata["GoodName"] = "LINEA";
	$fdata["ownerTable"] = "lineas_agrarias";
	$fdata["Label"] = GetFieldLabel("lineas_agrarias_ESTADISTICA","LINEA");
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

		$fdata["strField"] = "LINEA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LINEA";

	
	
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
	$edata["LookupValues"][] = "Ninguna";
	$edata["LookupValues"][] = "Cafe";
	$edata["LookupValues"][] = "Caña";
	$edata["LookupValues"][] = "Fique";
	$edata["LookupValues"][] = "Hortifruticola";
	$edata["LookupValues"][] = "Pecuario";
	$edata["LookupValues"][] = "";

	
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




	$tdatalineas_agrarias_ESTADISTICA["LINEA"] = $fdata;
//	VARIEDAD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "VARIEDAD";
	$fdata["GoodName"] = "VARIEDAD";
	$fdata["ownerTable"] = "lineas_agrarias";
	$fdata["Label"] = GetFieldLabel("lineas_agrarias_ESTADISTICA","VARIEDAD");
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
	$edata["LookupValues"][] = "----Ninguna----";
	$edata["LookupValues"][] = "----Cafe----";
	$edata["LookupValues"][] = "Castilla";
	$edata["LookupValues"][] = "Variedad Colombia";
	$edata["LookupValues"][] = "Caturra";
	$edata["LookupValues"][] = "Otros";
	$edata["LookupValues"][] = "----Bovinos----";
	$edata["LookupValues"][] = "Chino Satandereano";
	$edata["LookupValues"][] = "Costeño";
	$edata["LookupValues"][] = "Holsteyn";
	$edata["LookupValues"][] = "Ayrshire";
	$edata["LookupValues"][] = "Pardo Suizo";
	$edata["LookupValues"][] = "Normando";
	$edata["LookupValues"][] = "Cebú";
	$edata["LookupValues"][] = "Criollo";
	$edata["LookupValues"][] = "Brahman";
	$edata["LookupValues"][] = "Jirolando";
	$edata["LookupValues"][] = "Bufalo";
	$edata["LookupValues"][] = "Simental";
	$edata["LookupValues"][] = "----Porcinos----";
	$edata["LookupValues"][] = "Care palo";
	$edata["LookupValues"][] = "Casco de Mula";
	$edata["LookupValues"][] = "Chocoano";
	$edata["LookupValues"][] = "Congo";
	$edata["LookupValues"][] = "Curi";
	$edata["LookupValues"][] = "Duroc";
	$edata["LookupValues"][] = "Zungo";
	$edata["LookupValues"][] = "Choncho";
	$edata["LookupValues"][] = "Otro";
	$edata["LookupValues"][] = "----Caprinos----";
	$edata["LookupValues"][] = "Saanen";
	$edata["LookupValues"][] = "Alpina";
	$edata["LookupValues"][] = "Boer";
	$edata["LookupValues"][] = "Lamancha";
	$edata["LookupValues"][] = "Anglonubiana";
	$edata["LookupValues"][] = "Toggenburg";
	$edata["LookupValues"][] = "Criolla Santandereana";
	$edata["LookupValues"][] = "----Ovinos----";
	$edata["LookupValues"][] = "Katahdin";
	$edata["LookupValues"][] = "Santa Inés";
	$edata["LookupValues"][] = "Dorper";
	$edata["LookupValues"][] = "Pelibuey";
	$edata["LookupValues"][] = "Charollais";
	$edata["LookupValues"][] = "otra";
	$edata["LookupValues"][] = "----Aves----";
	$edata["LookupValues"][] = "Carioca";
	$edata["LookupValues"][] = "Chusca";
	$edata["LookupValues"][] = "Copetona";
	$edata["LookupValues"][] = "Nicaragua";
	$edata["LookupValues"][] = "Santanderina";
	$edata["LookupValues"][] = "otra";
	$edata["LookupValues"][] = "----Acuicola----";
	$edata["LookupValues"][] = "Bocachico";
	$edata["LookupValues"][] = "Cachama";
	$edata["LookupValues"][] = "Carpa";
	$edata["LookupValues"][] = "Tilapia";
	$edata["LookupValues"][] = "Trucha";
	$edata["LookupValues"][] = "otro";
	$edata["LookupValues"][] = "----Caña----";
	$edata["LookupValues"][] = "Azucarera";
	$edata["LookupValues"][] = "Panelera";
	$edata["LookupValues"][] = "Criolla";
	$edata["LookupValues"][] = "Variedades CENICAÑA";
	$edata["LookupValues"][] = "----Fique----";
	$edata["LookupValues"][] = "Castilla";
	$edata["LookupValues"][] = "Ceniza";
	$edata["LookupValues"][] = "Comun";
	$edata["LookupValues"][] = "Espinosa";
	$edata["LookupValues"][] = "Frontera";
	$edata["LookupValues"][] = "Verde de Cabuya";
	$edata["LookupValues"][] = "Uña de Aguila";
	$edata["LookupValues"][] = "otro";
	$edata["LookupValues"][] = "---Frutas----";
	$edata["LookupValues"][] = "Tropicales (Bananas, Guayaba, Mango, etc )";
	$edata["LookupValues"][] = "De Bosque (Mora, Fresa, Frambuesa, etc)";
	$edata["LookupValues"][] = "Citricas (Naranja, Limon, Mandarina, etc)";
	$edata["LookupValues"][] = "Frutos secos (Tamarindo, Almendras, etc)";
	$edata["LookupValues"][] = "----Hortalizas----";
	$edata["LookupValues"][] = "Frutos (Berengena, tomate, Calabaza, tec )";
	$edata["LookupValues"][] = "Bulbos (Cebolla cabezona, ajo, etc)";
	$edata["LookupValues"][] = "Flor (Alcachofa, Coliflor, etc)";
	$edata["LookupValues"][] = "Hojas y Tallos (Lechuga, etc, Perejil, etc)";
	$edata["LookupValues"][] = "Legumbres (Frijol, Habichuela, etc)";
	$edata["LookupValues"][] = "Otros";

	
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




	$tdatalineas_agrarias_ESTADISTICA["VARIEDAD"] = $fdata;
//	AREA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "AREA";
	$fdata["GoodName"] = "AREA";
	$fdata["ownerTable"] = "lineas_agrarias";
	$fdata["Label"] = GetFieldLabel("lineas_agrarias_ESTADISTICA","AREA");
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatalineas_agrarias_ESTADISTICA["AREA"] = $fdata;
//	PRODUCCION_ANUAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "PRODUCCION_ANUAL";
	$fdata["GoodName"] = "PRODUCCION_ANUAL";
	$fdata["ownerTable"] = "lineas_agrarias";
	$fdata["Label"] = GetFieldLabel("lineas_agrarias_ESTADISTICA","PRODUCCION_ANUAL");
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




	$tdatalineas_agrarias_ESTADISTICA["PRODUCCION_ANUAL"] = $fdata;
//	AÑO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "AÑO";
	$fdata["GoodName"] = "A_O";
	$fdata["ownerTable"] = "lineas_agrarias";
	$fdata["Label"] = GetFieldLabel("lineas_agrarias_ESTADISTICA","A_O");
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatalineas_agrarias_ESTADISTICA["AÑO"] = $fdata;

	$tdatalineas_agrarias_ESTADISTICA[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">lineas_agrarias ESTADISTICA</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdatalineas_agrarias_ESTADISTICA[".chartXml"] .= '<attr value="0">
			<attr value="name">FINCA_PROPIETARIO_CEDULA</attr>';
	$tdatalineas_agrarias_ESTADISTICA[".chartXml"] .= '</attr>';
	$tdatalineas_agrarias_ESTADISTICA[".chartXml"] .= '<attr value="1">
		<attr value="name">NOMBRE</attr>
	</attr>';
	$tdatalineas_agrarias_ESTADISTICA[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatalineas_agrarias_ESTADISTICA[".chartXml"] .= '<attr value="head">'.xmlencode("lineas_agrarias ESTADISTICA").'</attr>
<attr value="foot">'.xmlencode("Legend Title").'</attr>
<attr value="y_axis_label">'.xmlencode("FINCA_PROPIETARIO_CEDULA").'</attr>


<attr value="slegend">true</attr>
<attr value="sgrid">false</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">None</attr>
<attr value="cview">Column</attr>
<attr value="is3d">0</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>';
$tdatalineas_agrarias_ESTADISTICA[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatalineas_agrarias_ESTADISTICA[".chartXml"] .= '<attr value="0">
		<attr value="name">VEREDA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("lineas_agrarias_ESTADISTICA","VEREDA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatalineas_agrarias_ESTADISTICA[".chartXml"] .= '<attr value="1">
		<attr value="name">FINCA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("lineas_agrarias_ESTADISTICA","FINCA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatalineas_agrarias_ESTADISTICA[".chartXml"] .= '<attr value="2">
		<attr value="name">LINEA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("lineas_agrarias_ESTADISTICA","LINEA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatalineas_agrarias_ESTADISTICA[".chartXml"] .= '<attr value="3">
		<attr value="name">VARIEDAD</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("lineas_agrarias_ESTADISTICA","VARIEDAD")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatalineas_agrarias_ESTADISTICA[".chartXml"] .= '<attr value="4">
		<attr value="name">AREA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("lineas_agrarias_ESTADISTICA","AREA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatalineas_agrarias_ESTADISTICA[".chartXml"] .= '<attr value="5">
		<attr value="name">PRODUCCION_ANUAL</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("lineas_agrarias_ESTADISTICA","PRODUCCION_ANUAL")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatalineas_agrarias_ESTADISTICA[".chartXml"] .= '<attr value="6">
		<attr value="name">AÑO</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("lineas_agrarias_ESTADISTICA","A_O")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatalineas_agrarias_ESTADISTICA[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">lineas_agrarias ESTADISTICA</attr>
<attr value="short_table_name">lineas_agrarias_ESTADISTICA</attr>
</attr>

</chart>';

$tables_data["lineas_agrarias ESTADISTICA"]=&$tdatalineas_agrarias_ESTADISTICA;
$field_labels["lineas_agrarias_ESTADISTICA"] = &$fieldLabelslineas_agrarias_ESTADISTICA;
$fieldToolTips["lineas_agrarias_ESTADISTICA"] = &$fieldToolTipslineas_agrarias_ESTADISTICA;
$page_titles["lineas_agrarias_ESTADISTICA"] = &$pageTitleslineas_agrarias_ESTADISTICA;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["lineas_agrarias ESTADISTICA"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["lineas_agrarias ESTADISTICA"] = array();


	
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
					$masterTablesData["lineas_agrarias ESTADISTICA"][0] = $masterParams;
				$masterTablesData["lineas_agrarias ESTADISTICA"][0]["masterKeys"] = array();
	$masterTablesData["lineas_agrarias ESTADISTICA"][0]["masterKeys"][]="PROPIETARIO_CEDULA";
				$masterTablesData["lineas_agrarias ESTADISTICA"][0]["detailKeys"] = array();
	$masterTablesData["lineas_agrarias ESTADISTICA"][0]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_lineas_agrarias_ESTADISTICA()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT  DISTINCT";
$proto0["m_strFieldList"] = "VEREDA,  FINCA,  LINEA,  VARIEDAD,  AREA,  PRODUCCION_ANUAL,  `AÑO`";
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
	"m_srcTableName" => "lineas_agrarias ESTADISTICA"
));

$proto6["m_sql"] = "VEREDA";
$proto6["m_srcTableName"] = "lineas_agrarias ESTADISTICA";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "FINCA",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "lineas_agrarias ESTADISTICA"
));

$proto8["m_sql"] = "FINCA";
$proto8["m_srcTableName"] = "lineas_agrarias ESTADISTICA";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "LINEA",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "lineas_agrarias ESTADISTICA"
));

$proto10["m_sql"] = "LINEA";
$proto10["m_srcTableName"] = "lineas_agrarias ESTADISTICA";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "VARIEDAD",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "lineas_agrarias ESTADISTICA"
));

$proto12["m_sql"] = "VARIEDAD";
$proto12["m_srcTableName"] = "lineas_agrarias ESTADISTICA";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "AREA",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "lineas_agrarias ESTADISTICA"
));

$proto14["m_sql"] = "AREA";
$proto14["m_srcTableName"] = "lineas_agrarias ESTADISTICA";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "PRODUCCION_ANUAL",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "lineas_agrarias ESTADISTICA"
));

$proto16["m_sql"] = "PRODUCCION_ANUAL";
$proto16["m_srcTableName"] = "lineas_agrarias ESTADISTICA";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "lineas_agrarias ESTADISTICA"
));

$proto18["m_sql"] = "`AÑO`";
$proto18["m_srcTableName"] = "lineas_agrarias ESTADISTICA";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "lineas_agrarias";
$proto21["m_srcTableName"] = "lineas_agrarias ESTADISTICA";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "ID";
$proto21["m_columns"][] = "FINCA_PROPIETARIO_CEDULA";
$proto21["m_columns"][] = "NOMBRE";
$proto21["m_columns"][] = "VEREDA";
$proto21["m_columns"][] = "FINCA";
$proto21["m_columns"][] = "LINEA";
$proto21["m_columns"][] = "VARIEDAD";
$proto21["m_columns"][] = "AREA";
$proto21["m_columns"][] = "PRODUCCION_ANUAL";
$proto21["m_columns"][] = "AÑO";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "lineas_agrarias";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "lineas_agrarias ESTADISTICA";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto24=array();
						$obj = new SQLField(array(
	"m_strName" => "VEREDA",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "lineas_agrarias ESTADISTICA"
));

$proto24["m_column"]=$obj;
$obj = new SQLGroupByItem($proto24);

$proto0["m_groupby"][]=$obj;
												$proto26=array();
						$obj = new SQLField(array(
	"m_strName" => "FINCA",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "lineas_agrarias ESTADISTICA"
));

$proto26["m_column"]=$obj;
$obj = new SQLGroupByItem($proto26);

$proto0["m_groupby"][]=$obj;
												$proto28=array();
						$obj = new SQLField(array(
	"m_strName" => "LINEA",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "lineas_agrarias ESTADISTICA"
));

$proto28["m_column"]=$obj;
$obj = new SQLGroupByItem($proto28);

$proto0["m_groupby"][]=$obj;
												$proto30=array();
						$obj = new SQLField(array(
	"m_strName" => "VARIEDAD",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "lineas_agrarias ESTADISTICA"
));

$proto30["m_column"]=$obj;
$obj = new SQLGroupByItem($proto30);

$proto0["m_groupby"][]=$obj;
												$proto32=array();
						$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "lineas_agrarias ESTADISTICA"
));

$proto32["m_column"]=$obj;
$obj = new SQLGroupByItem($proto32);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="lineas_agrarias ESTADISTICA";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_lineas_agrarias_ESTADISTICA = createSqlQuery_lineas_agrarias_ESTADISTICA();


	
		;

							

$tdatalineas_agrarias_ESTADISTICA[".sqlquery"] = $queryData_lineas_agrarias_ESTADISTICA;

$tableEvents["lineas_agrarias ESTADISTICA"] = new eventsBase;
$tdatalineas_agrarias_ESTADISTICA[".hasEvents"] = false;

?>