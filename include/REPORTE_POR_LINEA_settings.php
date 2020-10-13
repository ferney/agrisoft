<?php
require_once(getabspath("classes/cipherer.php"));




$tdataREPORTE_POR_LINEA = array();
	$tdataREPORTE_POR_LINEA[".ShortName"] = "REPORTE_POR_LINEA";
	$tdataREPORTE_POR_LINEA[".OwnerID"] = "";
	$tdataREPORTE_POR_LINEA[".OriginalTable"] = "lineas_agrarias";

//	field labels
$fieldLabelsREPORTE_POR_LINEA = array();
$fieldToolTipsREPORTE_POR_LINEA = array();
$pageTitlesREPORTE_POR_LINEA = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsREPORTE_POR_LINEA["Spanish"] = array();
	$fieldToolTipsREPORTE_POR_LINEA["Spanish"] = array();
	$pageTitlesREPORTE_POR_LINEA["Spanish"] = array();
	$fieldLabelsREPORTE_POR_LINEA["Spanish"]["VEREDA"] = "VEREDA";
	$fieldToolTipsREPORTE_POR_LINEA["Spanish"]["VEREDA"] = "";
	$fieldLabelsREPORTE_POR_LINEA["Spanish"]["LINEA"] = "LINEA";
	$fieldToolTipsREPORTE_POR_LINEA["Spanish"]["LINEA"] = "";
	$fieldLabelsREPORTE_POR_LINEA["Spanish"]["AREA"] = "AREA";
	$fieldToolTipsREPORTE_POR_LINEA["Spanish"]["AREA"] = "";
	$fieldLabelsREPORTE_POR_LINEA["Spanish"]["A_O"] = "AÑO";
	$fieldToolTipsREPORTE_POR_LINEA["Spanish"]["A_O"] = "";
	$fieldLabelsREPORTE_POR_LINEA["Spanish"]["PRODUCCION"] = "PRODUCCION";
	$fieldToolTipsREPORTE_POR_LINEA["Spanish"]["PRODUCCION"] = "";
	if (count($fieldToolTipsREPORTE_POR_LINEA["Spanish"]))
		$tdataREPORTE_POR_LINEA[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsREPORTE_POR_LINEA[""] = array();
	$fieldToolTipsREPORTE_POR_LINEA[""] = array();
	$pageTitlesREPORTE_POR_LINEA[""] = array();
	$fieldLabelsREPORTE_POR_LINEA[""]["VEREDA"] = "VEREDA";
	$fieldToolTipsREPORTE_POR_LINEA[""]["VEREDA"] = "";
	$fieldLabelsREPORTE_POR_LINEA[""]["LINEA"] = "LINEA";
	$fieldToolTipsREPORTE_POR_LINEA[""]["LINEA"] = "";
	$fieldLabelsREPORTE_POR_LINEA[""]["AREA"] = "AREA";
	$fieldToolTipsREPORTE_POR_LINEA[""]["AREA"] = "";
	$fieldLabelsREPORTE_POR_LINEA[""]["A_O"] = "AÑO";
	$fieldToolTipsREPORTE_POR_LINEA[""]["A_O"] = "";
	$fieldLabelsREPORTE_POR_LINEA[""]["PRODUCCION"] = "PRODUCCION";
	$fieldToolTipsREPORTE_POR_LINEA[""]["PRODUCCION"] = "";
	if (count($fieldToolTipsREPORTE_POR_LINEA[""]))
		$tdataREPORTE_POR_LINEA[".isUseToolTips"] = true;
}


	$tdataREPORTE_POR_LINEA[".NCSearch"] = true;

	$tdataREPORTE_POR_LINEA[".ChartRefreshTime"] = 60;


$tdataREPORTE_POR_LINEA[".shortTableName"] = "REPORTE_POR_LINEA";
$tdataREPORTE_POR_LINEA[".nSecOptions"] = 0;
$tdataREPORTE_POR_LINEA[".recsPerRowPrint"] = 1;
$tdataREPORTE_POR_LINEA[".mainTableOwnerID"] = "";
$tdataREPORTE_POR_LINEA[".moveNext"] = 1;
$tdataREPORTE_POR_LINEA[".entityType"] = 3;

$tdataREPORTE_POR_LINEA[".strOriginalTableName"] = "lineas_agrarias";

	



$tdataREPORTE_POR_LINEA[".showAddInPopup"] = false;

$tdataREPORTE_POR_LINEA[".showEditInPopup"] = false;

$tdataREPORTE_POR_LINEA[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataREPORTE_POR_LINEA[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataREPORTE_POR_LINEA[".fieldsForRegister"] = array();

$tdataREPORTE_POR_LINEA[".listAjax"] = false;

	$tdataREPORTE_POR_LINEA[".audit"] = false;

	$tdataREPORTE_POR_LINEA[".locking"] = false;


$tdataREPORTE_POR_LINEA[".add"] = true;
$tdataREPORTE_POR_LINEA[".afterAddAction"] = 1;
$tdataREPORTE_POR_LINEA[".closePopupAfterAdd"] = 1;
$tdataREPORTE_POR_LINEA[".afterAddActionDetTable"] = "";

$tdataREPORTE_POR_LINEA[".list"] = true;






$tdataREPORTE_POR_LINEA[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataREPORTE_POR_LINEA[".searchSaving"] = false;
//

$tdataREPORTE_POR_LINEA[".showSearchPanel"] = true;
		$tdataREPORTE_POR_LINEA[".flexibleSearch"] = true;

$tdataREPORTE_POR_LINEA[".isUseAjaxSuggest"] = true;




$tdataREPORTE_POR_LINEA[".addPageEvents"] = false;

// use timepicker for search panel
$tdataREPORTE_POR_LINEA[".isUseTimeForSearch"] = false;



$tdataREPORTE_POR_LINEA[".badgeColor"] = "40E0D0";


$tdataREPORTE_POR_LINEA[".allSearchFields"] = array();
$tdataREPORTE_POR_LINEA[".filterFields"] = array();
$tdataREPORTE_POR_LINEA[".requiredSearchFields"] = array();

$tdataREPORTE_POR_LINEA[".allSearchFields"][] = "VEREDA";
	$tdataREPORTE_POR_LINEA[".allSearchFields"][] = "LINEA";
	$tdataREPORTE_POR_LINEA[".allSearchFields"][] = "AREA";
	$tdataREPORTE_POR_LINEA[".allSearchFields"][] = "PRODUCCION";
	$tdataREPORTE_POR_LINEA[".allSearchFields"][] = "AÑO";
	
$tdataREPORTE_POR_LINEA[".filterFields"][] = "VEREDA";
$tdataREPORTE_POR_LINEA[".filterFields"][] = "LINEA";
$tdataREPORTE_POR_LINEA[".filterFields"][] = "AREA";
$tdataREPORTE_POR_LINEA[".filterFields"][] = "PRODUCCION";
$tdataREPORTE_POR_LINEA[".filterFields"][] = "AÑO";

$tdataREPORTE_POR_LINEA[".googleLikeFields"] = array();
$tdataREPORTE_POR_LINEA[".googleLikeFields"][] = "VEREDA";
$tdataREPORTE_POR_LINEA[".googleLikeFields"][] = "LINEA";
$tdataREPORTE_POR_LINEA[".googleLikeFields"][] = "AREA";
$tdataREPORTE_POR_LINEA[".googleLikeFields"][] = "PRODUCCION";
$tdataREPORTE_POR_LINEA[".googleLikeFields"][] = "AÑO";


$tdataREPORTE_POR_LINEA[".advSearchFields"] = array();
$tdataREPORTE_POR_LINEA[".advSearchFields"][] = "VEREDA";
$tdataREPORTE_POR_LINEA[".advSearchFields"][] = "LINEA";
$tdataREPORTE_POR_LINEA[".advSearchFields"][] = "AREA";
$tdataREPORTE_POR_LINEA[".advSearchFields"][] = "PRODUCCION";
$tdataREPORTE_POR_LINEA[".advSearchFields"][] = "AÑO";

$tdataREPORTE_POR_LINEA[".tableType"] = "chart";

$tdataREPORTE_POR_LINEA[".printerPageOrientation"] = 0;
$tdataREPORTE_POR_LINEA[".nPrinterPageScale"] = 100;

$tdataREPORTE_POR_LINEA[".nPrinterSplitRecords"] = 40;

$tdataREPORTE_POR_LINEA[".nPrinterPDFSplitRecords"] = 40;



$tdataREPORTE_POR_LINEA[".geocodingEnabled"] = false;



// chart settings
$tdataREPORTE_POR_LINEA[".chartType"] = "2DColumn";
// end of chart settings


$tdataREPORTE_POR_LINEA[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataREPORTE_POR_LINEA[".strOrderBy"] = $tstrOrderBy;

$tdataREPORTE_POR_LINEA[".orderindexes"] = array();

$tdataREPORTE_POR_LINEA[".sqlHead"] = "SELECT  DISTINCT VEREDA,  LINEA,  SUM(AREA) AS AREA,  SUM(PRODUCCION_ANUAL) AS PRODUCCION,  `AÑO`";
$tdataREPORTE_POR_LINEA[".sqlFrom"] = "FROM lineas_agrarias";
$tdataREPORTE_POR_LINEA[".sqlWhereExpr"] = "";
$tdataREPORTE_POR_LINEA[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataREPORTE_POR_LINEA[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataREPORTE_POR_LINEA[".arrGroupsPerPage"] = $arrGPP;

$tdataREPORTE_POR_LINEA[".highlightSearchResults"] = true;

$tableKeysREPORTE_POR_LINEA = array();
$tdataREPORTE_POR_LINEA[".Keys"] = $tableKeysREPORTE_POR_LINEA;

$tdataREPORTE_POR_LINEA[".listFields"] = array();
$tdataREPORTE_POR_LINEA[".listFields"][] = "VEREDA";
$tdataREPORTE_POR_LINEA[".listFields"][] = "LINEA";
$tdataREPORTE_POR_LINEA[".listFields"][] = "AREA";
$tdataREPORTE_POR_LINEA[".listFields"][] = "PRODUCCION";
$tdataREPORTE_POR_LINEA[".listFields"][] = "AÑO";

$tdataREPORTE_POR_LINEA[".hideMobileList"] = array();


$tdataREPORTE_POR_LINEA[".viewFields"] = array();
$tdataREPORTE_POR_LINEA[".viewFields"][] = "VEREDA";
$tdataREPORTE_POR_LINEA[".viewFields"][] = "LINEA";
$tdataREPORTE_POR_LINEA[".viewFields"][] = "AREA";
$tdataREPORTE_POR_LINEA[".viewFields"][] = "PRODUCCION";
$tdataREPORTE_POR_LINEA[".viewFields"][] = "AÑO";

$tdataREPORTE_POR_LINEA[".addFields"] = array();
$tdataREPORTE_POR_LINEA[".addFields"][] = "VEREDA";
$tdataREPORTE_POR_LINEA[".addFields"][] = "LINEA";
$tdataREPORTE_POR_LINEA[".addFields"][] = "AREA";
$tdataREPORTE_POR_LINEA[".addFields"][] = "AÑO";

$tdataREPORTE_POR_LINEA[".masterListFields"] = array();
$tdataREPORTE_POR_LINEA[".masterListFields"][] = "VEREDA";
$tdataREPORTE_POR_LINEA[".masterListFields"][] = "LINEA";
$tdataREPORTE_POR_LINEA[".masterListFields"][] = "AREA";
$tdataREPORTE_POR_LINEA[".masterListFields"][] = "PRODUCCION";
$tdataREPORTE_POR_LINEA[".masterListFields"][] = "AÑO";

$tdataREPORTE_POR_LINEA[".inlineAddFields"] = array();
$tdataREPORTE_POR_LINEA[".inlineAddFields"][] = "VEREDA";
$tdataREPORTE_POR_LINEA[".inlineAddFields"][] = "LINEA";
$tdataREPORTE_POR_LINEA[".inlineAddFields"][] = "AREA";
$tdataREPORTE_POR_LINEA[".inlineAddFields"][] = "AÑO";

$tdataREPORTE_POR_LINEA[".editFields"] = array();
$tdataREPORTE_POR_LINEA[".editFields"][] = "VEREDA";
$tdataREPORTE_POR_LINEA[".editFields"][] = "LINEA";
$tdataREPORTE_POR_LINEA[".editFields"][] = "AREA";
$tdataREPORTE_POR_LINEA[".editFields"][] = "AÑO";

$tdataREPORTE_POR_LINEA[".inlineEditFields"] = array();
$tdataREPORTE_POR_LINEA[".inlineEditFields"][] = "VEREDA";
$tdataREPORTE_POR_LINEA[".inlineEditFields"][] = "LINEA";
$tdataREPORTE_POR_LINEA[".inlineEditFields"][] = "AREA";
$tdataREPORTE_POR_LINEA[".inlineEditFields"][] = "AÑO";

$tdataREPORTE_POR_LINEA[".exportFields"] = array();
$tdataREPORTE_POR_LINEA[".exportFields"][] = "VEREDA";
$tdataREPORTE_POR_LINEA[".exportFields"][] = "LINEA";
$tdataREPORTE_POR_LINEA[".exportFields"][] = "AREA";
$tdataREPORTE_POR_LINEA[".exportFields"][] = "PRODUCCION";
$tdataREPORTE_POR_LINEA[".exportFields"][] = "AÑO";

$tdataREPORTE_POR_LINEA[".importFields"] = array();
$tdataREPORTE_POR_LINEA[".importFields"][] = "VEREDA";
$tdataREPORTE_POR_LINEA[".importFields"][] = "LINEA";
$tdataREPORTE_POR_LINEA[".importFields"][] = "AREA";
$tdataREPORTE_POR_LINEA[".importFields"][] = "PRODUCCION";
$tdataREPORTE_POR_LINEA[".importFields"][] = "AÑO";

$tdataREPORTE_POR_LINEA[".printFields"] = array();
$tdataREPORTE_POR_LINEA[".printFields"][] = "VEREDA";
$tdataREPORTE_POR_LINEA[".printFields"][] = "LINEA";
$tdataREPORTE_POR_LINEA[".printFields"][] = "AREA";
$tdataREPORTE_POR_LINEA[".printFields"][] = "PRODUCCION";
$tdataREPORTE_POR_LINEA[".printFields"][] = "AÑO";

//	VEREDA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "VEREDA";
	$fdata["GoodName"] = "VEREDA";
	$fdata["ownerTable"] = "lineas_agrarias";
	$fdata["Label"] = GetFieldLabel("REPORTE_POR_LINEA","VEREDA");
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


	$tdataREPORTE_POR_LINEA["VEREDA"] = $fdata;
//	LINEA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "LINEA";
	$fdata["GoodName"] = "LINEA";
	$fdata["ownerTable"] = "lineas_agrarias";
	$fdata["Label"] = GetFieldLabel("REPORTE_POR_LINEA","LINEA");
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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdataREPORTE_POR_LINEA["LINEA"] = $fdata;
//	AREA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "AREA";
	$fdata["GoodName"] = "AREA";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("REPORTE_POR_LINEA","AREA");
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
	$fdata["FullName"] = "SUM(AREA)";

	
	
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


	$tdataREPORTE_POR_LINEA["AREA"] = $fdata;
//	PRODUCCION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "PRODUCCION";
	$fdata["GoodName"] = "PRODUCCION";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("REPORTE_POR_LINEA","PRODUCCION");
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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdataREPORTE_POR_LINEA["PRODUCCION"] = $fdata;
//	AÑO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "AÑO";
	$fdata["GoodName"] = "A_O";
	$fdata["ownerTable"] = "lineas_agrarias";
	$fdata["Label"] = GetFieldLabel("REPORTE_POR_LINEA","A_O");
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


	$tdataREPORTE_POR_LINEA["AÑO"] = $fdata;

	$tdataREPORTE_POR_LINEA[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">REPORTE POR LINEA</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdataREPORTE_POR_LINEA[".chartXml"] .= '<attr value="0">
			<attr value="name">AREA</attr>';
	$tdataREPORTE_POR_LINEA[".chartXml"] .= '</attr>';
	$tdataREPORTE_POR_LINEA[".chartXml"] .= '<attr value="1">
			<attr value="name">PRODUCCION</attr>';
	$tdataREPORTE_POR_LINEA[".chartXml"] .= '</attr>';
	$tdataREPORTE_POR_LINEA[".chartXml"] .= '<attr value="2">
		<attr value="name">LINEA</attr>
	</attr>';
	$tdataREPORTE_POR_LINEA[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdataREPORTE_POR_LINEA[".chartXml"] .= '<attr value="head">'.xmlencode("").'</attr>
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
$tdataREPORTE_POR_LINEA[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdataREPORTE_POR_LINEA[".chartXml"] .= '<attr value="0">
		<attr value="name">VEREDA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("REPORTE_POR_LINEA","VEREDA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataREPORTE_POR_LINEA[".chartXml"] .= '<attr value="1">
		<attr value="name">LINEA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("REPORTE_POR_LINEA","LINEA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataREPORTE_POR_LINEA[".chartXml"] .= '<attr value="2">
		<attr value="name">AREA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("REPORTE_POR_LINEA","AREA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataREPORTE_POR_LINEA[".chartXml"] .= '<attr value="3">
		<attr value="name">PRODUCCION</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("REPORTE_POR_LINEA","PRODUCCION")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataREPORTE_POR_LINEA[".chartXml"] .= '<attr value="4">
		<attr value="name">AÑO</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("REPORTE_POR_LINEA","A_O")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdataREPORTE_POR_LINEA[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">REPORTE POR LINEA</attr>
<attr value="short_table_name">REPORTE_POR_LINEA</attr>
</attr>

</chart>';

$tables_data["REPORTE POR LINEA"]=&$tdataREPORTE_POR_LINEA;
$field_labels["REPORTE_POR_LINEA"] = &$fieldLabelsREPORTE_POR_LINEA;
$fieldToolTips["REPORTE_POR_LINEA"] = &$fieldToolTipsREPORTE_POR_LINEA;
$page_titles["REPORTE_POR_LINEA"] = &$pageTitlesREPORTE_POR_LINEA;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["REPORTE POR LINEA"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["REPORTE POR LINEA"] = array();


	
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
					$masterTablesData["REPORTE POR LINEA"][0] = $masterParams;
				$masterTablesData["REPORTE POR LINEA"][0]["masterKeys"] = array();
	$masterTablesData["REPORTE POR LINEA"][0]["masterKeys"][]="PROPIETARIO_CEDULA";
				$masterTablesData["REPORTE POR LINEA"][0]["detailKeys"] = array();
	$masterTablesData["REPORTE POR LINEA"][0]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_REPORTE_POR_LINEA()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT  DISTINCT";
$proto0["m_strFieldList"] = "VEREDA,  LINEA,  SUM(AREA) AS AREA,  SUM(PRODUCCION_ANUAL) AS PRODUCCION,  `AÑO`";
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
	"m_srcTableName" => "REPORTE POR LINEA"
));

$proto6["m_sql"] = "VEREDA";
$proto6["m_srcTableName"] = "REPORTE POR LINEA";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "LINEA",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "REPORTE POR LINEA"
));

$proto8["m_sql"] = "LINEA";
$proto8["m_srcTableName"] = "REPORTE POR LINEA";
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
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "REPORTE POR LINEA"
));

$proto11["m_arguments"][]=$obj;
$proto11["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto11);

$proto10["m_sql"] = "SUM(AREA)";
$proto10["m_srcTableName"] = "REPORTE POR LINEA";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "AREA";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$proto14=array();
$proto14["m_functiontype"] = "SQLF_SUM";
$proto14["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "PRODUCCION_ANUAL",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "REPORTE POR LINEA"
));

$proto14["m_arguments"][]=$obj;
$proto14["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto14);

$proto13["m_sql"] = "SUM(PRODUCCION_ANUAL)";
$proto13["m_srcTableName"] = "REPORTE POR LINEA";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "PRODUCCION";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "REPORTE POR LINEA"
));

$proto16["m_sql"] = "`AÑO`";
$proto16["m_srcTableName"] = "REPORTE POR LINEA";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "lineas_agrarias";
$proto19["m_srcTableName"] = "REPORTE POR LINEA";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "ID";
$proto19["m_columns"][] = "FINCA_PROPIETARIO_CEDULA";
$proto19["m_columns"][] = "NOMBRE";
$proto19["m_columns"][] = "VEREDA";
$proto19["m_columns"][] = "FINCA";
$proto19["m_columns"][] = "LINEA";
$proto19["m_columns"][] = "VARIEDAD";
$proto19["m_columns"][] = "AREA";
$proto19["m_columns"][] = "PRODUCCION_ANUAL";
$proto19["m_columns"][] = "AÑO";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "lineas_agrarias";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "REPORTE POR LINEA";
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
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "REPORTE POR LINEA"
));

$proto22["m_column"]=$obj;
$obj = new SQLGroupByItem($proto22);

$proto0["m_groupby"][]=$obj;
												$proto24=array();
						$obj = new SQLField(array(
	"m_strName" => "LINEA",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "REPORTE POR LINEA"
));

$proto24["m_column"]=$obj;
$obj = new SQLGroupByItem($proto24);

$proto0["m_groupby"][]=$obj;
												$proto26=array();
						$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "REPORTE POR LINEA"
));

$proto26["m_column"]=$obj;
$obj = new SQLGroupByItem($proto26);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="REPORTE POR LINEA";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_REPORTE_POR_LINEA = createSqlQuery_REPORTE_POR_LINEA();


	
		;

					

$tdataREPORTE_POR_LINEA[".sqlquery"] = $queryData_REPORTE_POR_LINEA;

$tableEvents["REPORTE POR LINEA"] = new eventsBase;
$tdataREPORTE_POR_LINEA[".hasEvents"] = false;

?>