<?php
require_once(getabspath("classes/cipherer.php"));




$tdataGRAFICO_LINEAS = array();
	$tdataGRAFICO_LINEAS[".ShortName"] = "GRAFICO_LINEAS";
	$tdataGRAFICO_LINEAS[".OwnerID"] = "";
	$tdataGRAFICO_LINEAS[".OriginalTable"] = "lineas_agrarias";

//	field labels
$fieldLabelsGRAFICO_LINEAS = array();
$fieldToolTipsGRAFICO_LINEAS = array();
$pageTitlesGRAFICO_LINEAS = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsGRAFICO_LINEAS["Spanish"] = array();
	$fieldToolTipsGRAFICO_LINEAS["Spanish"] = array();
	$pageTitlesGRAFICO_LINEAS["Spanish"] = array();
	$fieldLabelsGRAFICO_LINEAS["Spanish"]["VEREDA"] = "VEREDA";
	$fieldToolTipsGRAFICO_LINEAS["Spanish"]["VEREDA"] = "";
	$fieldLabelsGRAFICO_LINEAS["Spanish"]["LINEA"] = "LINEA";
	$fieldToolTipsGRAFICO_LINEAS["Spanish"]["LINEA"] = "";
	$fieldLabelsGRAFICO_LINEAS["Spanish"]["VARIEDAD"] = "VARIEDAD";
	$fieldToolTipsGRAFICO_LINEAS["Spanish"]["VARIEDAD"] = "";
	$fieldLabelsGRAFICO_LINEAS["Spanish"]["AREA"] = "AREA";
	$fieldToolTipsGRAFICO_LINEAS["Spanish"]["AREA"] = "";
	$fieldLabelsGRAFICO_LINEAS["Spanish"]["A_O"] = "AÑO";
	$fieldToolTipsGRAFICO_LINEAS["Spanish"]["A_O"] = "";
	$fieldLabelsGRAFICO_LINEAS["Spanish"]["FINCA"] = "FINCA";
	$fieldToolTipsGRAFICO_LINEAS["Spanish"]["FINCA"] = "";
	$fieldLabelsGRAFICO_LINEAS["Spanish"]["PRODUCCION_ANUAL"] = "PRODUCCION ANUAL";
	$fieldToolTipsGRAFICO_LINEAS["Spanish"]["PRODUCCION_ANUAL"] = "";
	if (count($fieldToolTipsGRAFICO_LINEAS["Spanish"]))
		$tdataGRAFICO_LINEAS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsGRAFICO_LINEAS[""] = array();
	$fieldToolTipsGRAFICO_LINEAS[""] = array();
	$pageTitlesGRAFICO_LINEAS[""] = array();
	$fieldLabelsGRAFICO_LINEAS[""]["VEREDA"] = "VEREDA";
	$fieldToolTipsGRAFICO_LINEAS[""]["VEREDA"] = "";
	$fieldLabelsGRAFICO_LINEAS[""]["LINEA"] = "LINEA";
	$fieldToolTipsGRAFICO_LINEAS[""]["LINEA"] = "";
	$fieldLabelsGRAFICO_LINEAS[""]["VARIEDAD"] = "VARIEDAD";
	$fieldToolTipsGRAFICO_LINEAS[""]["VARIEDAD"] = "";
	$fieldLabelsGRAFICO_LINEAS[""]["AREA"] = "AREA";
	$fieldToolTipsGRAFICO_LINEAS[""]["AREA"] = "";
	$fieldLabelsGRAFICO_LINEAS[""]["A_O"] = "AÑO";
	$fieldToolTipsGRAFICO_LINEAS[""]["A_O"] = "";
	$fieldLabelsGRAFICO_LINEAS[""]["FINCA"] = "FINCA";
	$fieldToolTipsGRAFICO_LINEAS[""]["FINCA"] = "";
	$fieldLabelsGRAFICO_LINEAS[""]["PRODUCCION_ANUAL"] = "PRODUCCION ANUAL";
	$fieldToolTipsGRAFICO_LINEAS[""]["PRODUCCION_ANUAL"] = "";
	if (count($fieldToolTipsGRAFICO_LINEAS[""]))
		$tdataGRAFICO_LINEAS[".isUseToolTips"] = true;
}


	$tdataGRAFICO_LINEAS[".NCSearch"] = true;

	$tdataGRAFICO_LINEAS[".ChartRefreshTime"] = 0;


$tdataGRAFICO_LINEAS[".shortTableName"] = "GRAFICO_LINEAS";
$tdataGRAFICO_LINEAS[".nSecOptions"] = 0;
$tdataGRAFICO_LINEAS[".recsPerRowPrint"] = 1;
$tdataGRAFICO_LINEAS[".mainTableOwnerID"] = "";
$tdataGRAFICO_LINEAS[".moveNext"] = 1;
$tdataGRAFICO_LINEAS[".entityType"] = 3;

$tdataGRAFICO_LINEAS[".strOriginalTableName"] = "lineas_agrarias";

	



$tdataGRAFICO_LINEAS[".showAddInPopup"] = false;

$tdataGRAFICO_LINEAS[".showEditInPopup"] = false;

$tdataGRAFICO_LINEAS[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataGRAFICO_LINEAS[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataGRAFICO_LINEAS[".fieldsForRegister"] = array();

$tdataGRAFICO_LINEAS[".listAjax"] = false;

	$tdataGRAFICO_LINEAS[".audit"] = false;

	$tdataGRAFICO_LINEAS[".locking"] = false;


$tdataGRAFICO_LINEAS[".add"] = true;
$tdataGRAFICO_LINEAS[".afterAddAction"] = 1;
$tdataGRAFICO_LINEAS[".closePopupAfterAdd"] = 1;
$tdataGRAFICO_LINEAS[".afterAddActionDetTable"] = "";

$tdataGRAFICO_LINEAS[".list"] = true;






$tdataGRAFICO_LINEAS[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataGRAFICO_LINEAS[".searchSaving"] = false;
//

$tdataGRAFICO_LINEAS[".showSearchPanel"] = true;
		$tdataGRAFICO_LINEAS[".flexibleSearch"] = true;

$tdataGRAFICO_LINEAS[".isUseAjaxSuggest"] = true;




$tdataGRAFICO_LINEAS[".addPageEvents"] = false;

// use timepicker for search panel
$tdataGRAFICO_LINEAS[".isUseTimeForSearch"] = false;



$tdataGRAFICO_LINEAS[".badgeColor"] = "9ACD32";


$tdataGRAFICO_LINEAS[".allSearchFields"] = array();
$tdataGRAFICO_LINEAS[".filterFields"] = array();
$tdataGRAFICO_LINEAS[".requiredSearchFields"] = array();

$tdataGRAFICO_LINEAS[".allSearchFields"][] = "VEREDA";
	$tdataGRAFICO_LINEAS[".allSearchFields"][] = "FINCA";
	$tdataGRAFICO_LINEAS[".allSearchFields"][] = "LINEA";
	$tdataGRAFICO_LINEAS[".allSearchFields"][] = "VARIEDAD";
	$tdataGRAFICO_LINEAS[".allSearchFields"][] = "AREA";
	$tdataGRAFICO_LINEAS[".allSearchFields"][] = "PRODUCCION_ANUAL";
	$tdataGRAFICO_LINEAS[".allSearchFields"][] = "AÑO";
	

$tdataGRAFICO_LINEAS[".googleLikeFields"] = array();
$tdataGRAFICO_LINEAS[".googleLikeFields"][] = "VEREDA";
$tdataGRAFICO_LINEAS[".googleLikeFields"][] = "FINCA";
$tdataGRAFICO_LINEAS[".googleLikeFields"][] = "LINEA";
$tdataGRAFICO_LINEAS[".googleLikeFields"][] = "VARIEDAD";
$tdataGRAFICO_LINEAS[".googleLikeFields"][] = "AREA";
$tdataGRAFICO_LINEAS[".googleLikeFields"][] = "PRODUCCION_ANUAL";
$tdataGRAFICO_LINEAS[".googleLikeFields"][] = "AÑO";


$tdataGRAFICO_LINEAS[".advSearchFields"] = array();
$tdataGRAFICO_LINEAS[".advSearchFields"][] = "VEREDA";
$tdataGRAFICO_LINEAS[".advSearchFields"][] = "FINCA";
$tdataGRAFICO_LINEAS[".advSearchFields"][] = "LINEA";
$tdataGRAFICO_LINEAS[".advSearchFields"][] = "VARIEDAD";
$tdataGRAFICO_LINEAS[".advSearchFields"][] = "AREA";
$tdataGRAFICO_LINEAS[".advSearchFields"][] = "PRODUCCION_ANUAL";
$tdataGRAFICO_LINEAS[".advSearchFields"][] = "AÑO";

$tdataGRAFICO_LINEAS[".tableType"] = "chart";

$tdataGRAFICO_LINEAS[".printerPageOrientation"] = 0;
$tdataGRAFICO_LINEAS[".nPrinterPageScale"] = 100;

$tdataGRAFICO_LINEAS[".nPrinterSplitRecords"] = 40;

$tdataGRAFICO_LINEAS[".nPrinterPDFSplitRecords"] = 40;



$tdataGRAFICO_LINEAS[".geocodingEnabled"] = false;



// chart settings
$tdataGRAFICO_LINEAS[".chartType"] = "2DColumn";
// end of chart settings


$tdataGRAFICO_LINEAS[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataGRAFICO_LINEAS[".strOrderBy"] = $tstrOrderBy;

$tdataGRAFICO_LINEAS[".orderindexes"] = array();

$tdataGRAFICO_LINEAS[".sqlHead"] = "SELECT VEREDA,  FINCA,  LINEA,  VARIEDAD,  AREA,  PRODUCCION_ANUAL,  `AÑO`";
$tdataGRAFICO_LINEAS[".sqlFrom"] = "FROM lineas_agrarias";
$tdataGRAFICO_LINEAS[".sqlWhereExpr"] = "";
$tdataGRAFICO_LINEAS[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataGRAFICO_LINEAS[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataGRAFICO_LINEAS[".arrGroupsPerPage"] = $arrGPP;

$tdataGRAFICO_LINEAS[".highlightSearchResults"] = true;

$tableKeysGRAFICO_LINEAS = array();
$tdataGRAFICO_LINEAS[".Keys"] = $tableKeysGRAFICO_LINEAS;

$tdataGRAFICO_LINEAS[".listFields"] = array();
$tdataGRAFICO_LINEAS[".listFields"][] = "VEREDA";
$tdataGRAFICO_LINEAS[".listFields"][] = "FINCA";
$tdataGRAFICO_LINEAS[".listFields"][] = "LINEA";
$tdataGRAFICO_LINEAS[".listFields"][] = "VARIEDAD";
$tdataGRAFICO_LINEAS[".listFields"][] = "AREA";
$tdataGRAFICO_LINEAS[".listFields"][] = "PRODUCCION_ANUAL";
$tdataGRAFICO_LINEAS[".listFields"][] = "AÑO";

$tdataGRAFICO_LINEAS[".hideMobileList"] = array();


$tdataGRAFICO_LINEAS[".viewFields"] = array();
$tdataGRAFICO_LINEAS[".viewFields"][] = "VEREDA";
$tdataGRAFICO_LINEAS[".viewFields"][] = "FINCA";
$tdataGRAFICO_LINEAS[".viewFields"][] = "LINEA";
$tdataGRAFICO_LINEAS[".viewFields"][] = "VARIEDAD";
$tdataGRAFICO_LINEAS[".viewFields"][] = "AREA";
$tdataGRAFICO_LINEAS[".viewFields"][] = "PRODUCCION_ANUAL";
$tdataGRAFICO_LINEAS[".viewFields"][] = "AÑO";

$tdataGRAFICO_LINEAS[".addFields"] = array();
$tdataGRAFICO_LINEAS[".addFields"][] = "VEREDA";
$tdataGRAFICO_LINEAS[".addFields"][] = "FINCA";
$tdataGRAFICO_LINEAS[".addFields"][] = "LINEA";
$tdataGRAFICO_LINEAS[".addFields"][] = "VARIEDAD";
$tdataGRAFICO_LINEAS[".addFields"][] = "AREA";
$tdataGRAFICO_LINEAS[".addFields"][] = "PRODUCCION_ANUAL";
$tdataGRAFICO_LINEAS[".addFields"][] = "AÑO";

$tdataGRAFICO_LINEAS[".masterListFields"] = array();
$tdataGRAFICO_LINEAS[".masterListFields"][] = "VEREDA";
$tdataGRAFICO_LINEAS[".masterListFields"][] = "FINCA";
$tdataGRAFICO_LINEAS[".masterListFields"][] = "LINEA";
$tdataGRAFICO_LINEAS[".masterListFields"][] = "VARIEDAD";
$tdataGRAFICO_LINEAS[".masterListFields"][] = "AREA";
$tdataGRAFICO_LINEAS[".masterListFields"][] = "PRODUCCION_ANUAL";
$tdataGRAFICO_LINEAS[".masterListFields"][] = "AÑO";

$tdataGRAFICO_LINEAS[".inlineAddFields"] = array();
$tdataGRAFICO_LINEAS[".inlineAddFields"][] = "VEREDA";
$tdataGRAFICO_LINEAS[".inlineAddFields"][] = "FINCA";
$tdataGRAFICO_LINEAS[".inlineAddFields"][] = "LINEA";
$tdataGRAFICO_LINEAS[".inlineAddFields"][] = "VARIEDAD";
$tdataGRAFICO_LINEAS[".inlineAddFields"][] = "AREA";
$tdataGRAFICO_LINEAS[".inlineAddFields"][] = "PRODUCCION_ANUAL";
$tdataGRAFICO_LINEAS[".inlineAddFields"][] = "AÑO";

$tdataGRAFICO_LINEAS[".editFields"] = array();
$tdataGRAFICO_LINEAS[".editFields"][] = "VEREDA";
$tdataGRAFICO_LINEAS[".editFields"][] = "FINCA";
$tdataGRAFICO_LINEAS[".editFields"][] = "LINEA";
$tdataGRAFICO_LINEAS[".editFields"][] = "VARIEDAD";
$tdataGRAFICO_LINEAS[".editFields"][] = "AREA";
$tdataGRAFICO_LINEAS[".editFields"][] = "PRODUCCION_ANUAL";
$tdataGRAFICO_LINEAS[".editFields"][] = "AÑO";

$tdataGRAFICO_LINEAS[".inlineEditFields"] = array();
$tdataGRAFICO_LINEAS[".inlineEditFields"][] = "VEREDA";
$tdataGRAFICO_LINEAS[".inlineEditFields"][] = "FINCA";
$tdataGRAFICO_LINEAS[".inlineEditFields"][] = "LINEA";
$tdataGRAFICO_LINEAS[".inlineEditFields"][] = "VARIEDAD";
$tdataGRAFICO_LINEAS[".inlineEditFields"][] = "AREA";
$tdataGRAFICO_LINEAS[".inlineEditFields"][] = "PRODUCCION_ANUAL";
$tdataGRAFICO_LINEAS[".inlineEditFields"][] = "AÑO";

$tdataGRAFICO_LINEAS[".exportFields"] = array();
$tdataGRAFICO_LINEAS[".exportFields"][] = "VEREDA";
$tdataGRAFICO_LINEAS[".exportFields"][] = "FINCA";
$tdataGRAFICO_LINEAS[".exportFields"][] = "LINEA";
$tdataGRAFICO_LINEAS[".exportFields"][] = "VARIEDAD";
$tdataGRAFICO_LINEAS[".exportFields"][] = "AREA";
$tdataGRAFICO_LINEAS[".exportFields"][] = "PRODUCCION_ANUAL";
$tdataGRAFICO_LINEAS[".exportFields"][] = "AÑO";

$tdataGRAFICO_LINEAS[".importFields"] = array();
$tdataGRAFICO_LINEAS[".importFields"][] = "VEREDA";
$tdataGRAFICO_LINEAS[".importFields"][] = "FINCA";
$tdataGRAFICO_LINEAS[".importFields"][] = "LINEA";
$tdataGRAFICO_LINEAS[".importFields"][] = "VARIEDAD";
$tdataGRAFICO_LINEAS[".importFields"][] = "AREA";
$tdataGRAFICO_LINEAS[".importFields"][] = "PRODUCCION_ANUAL";
$tdataGRAFICO_LINEAS[".importFields"][] = "AÑO";

$tdataGRAFICO_LINEAS[".printFields"] = array();
$tdataGRAFICO_LINEAS[".printFields"][] = "VEREDA";
$tdataGRAFICO_LINEAS[".printFields"][] = "FINCA";
$tdataGRAFICO_LINEAS[".printFields"][] = "LINEA";
$tdataGRAFICO_LINEAS[".printFields"][] = "VARIEDAD";
$tdataGRAFICO_LINEAS[".printFields"][] = "AREA";
$tdataGRAFICO_LINEAS[".printFields"][] = "PRODUCCION_ANUAL";
$tdataGRAFICO_LINEAS[".printFields"][] = "AÑO";

//	VEREDA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "VEREDA";
	$fdata["GoodName"] = "VEREDA";
	$fdata["ownerTable"] = "lineas_agrarias";
	$fdata["Label"] = GetFieldLabel("GRAFICO_LINEAS","VEREDA");
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




	$tdataGRAFICO_LINEAS["VEREDA"] = $fdata;
//	FINCA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FINCA";
	$fdata["GoodName"] = "FINCA";
	$fdata["ownerTable"] = "lineas_agrarias";
	$fdata["Label"] = GetFieldLabel("GRAFICO_LINEAS","FINCA");
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataGRAFICO_LINEAS["FINCA"] = $fdata;
//	LINEA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "LINEA";
	$fdata["GoodName"] = "LINEA";
	$fdata["ownerTable"] = "lineas_agrarias";
	$fdata["Label"] = GetFieldLabel("GRAFICO_LINEAS","LINEA");
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




	$tdataGRAFICO_LINEAS["LINEA"] = $fdata;
//	VARIEDAD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "VARIEDAD";
	$fdata["GoodName"] = "VARIEDAD";
	$fdata["ownerTable"] = "lineas_agrarias";
	$fdata["Label"] = GetFieldLabel("GRAFICO_LINEAS","VARIEDAD");
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




	$tdataGRAFICO_LINEAS["VARIEDAD"] = $fdata;
//	AREA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "AREA";
	$fdata["GoodName"] = "AREA";
	$fdata["ownerTable"] = "lineas_agrarias";
	$fdata["Label"] = GetFieldLabel("GRAFICO_LINEAS","AREA");
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




	$tdataGRAFICO_LINEAS["AREA"] = $fdata;
//	PRODUCCION_ANUAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "PRODUCCION_ANUAL";
	$fdata["GoodName"] = "PRODUCCION_ANUAL";
	$fdata["ownerTable"] = "lineas_agrarias";
	$fdata["Label"] = GetFieldLabel("GRAFICO_LINEAS","PRODUCCION_ANUAL");
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataGRAFICO_LINEAS["PRODUCCION_ANUAL"] = $fdata;
//	AÑO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "AÑO";
	$fdata["GoodName"] = "A_O";
	$fdata["ownerTable"] = "lineas_agrarias";
	$fdata["Label"] = GetFieldLabel("GRAFICO_LINEAS","A_O");
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




	$tdataGRAFICO_LINEAS["AÑO"] = $fdata;

	$tdataGRAFICO_LINEAS[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">GRAFICO LINEAS</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdataGRAFICO_LINEAS[".chartXml"] .= '<attr value="0">
			<attr value="name">AREA</attr>';
	$tdataGRAFICO_LINEAS[".chartXml"] .= '</attr>';
	$tdataGRAFICO_LINEAS[".chartXml"] .= '<attr value="1">
			<attr value="name">PRODUCCION_ANUAL</attr>';
	$tdataGRAFICO_LINEAS[".chartXml"] .= '</attr>';
	$tdataGRAFICO_LINEAS[".chartXml"] .= '<attr value="2">
		<attr value="name">LINEA</attr>
	</attr>';
	$tdataGRAFICO_LINEAS[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdataGRAFICO_LINEAS[".chartXml"] .= '<attr value="head">'.xmlencode("GRAFICO LINEAS").'</attr>
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
$tdataGRAFICO_LINEAS[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdataGRAFICO_LINEAS[".chartXml"] .= '<attr value="0">
		<attr value="name">VEREDA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("GRAFICO_LINEAS","VEREDA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataGRAFICO_LINEAS[".chartXml"] .= '<attr value="1">
		<attr value="name">FINCA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("GRAFICO_LINEAS","FINCA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataGRAFICO_LINEAS[".chartXml"] .= '<attr value="2">
		<attr value="name">LINEA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("GRAFICO_LINEAS","LINEA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataGRAFICO_LINEAS[".chartXml"] .= '<attr value="3">
		<attr value="name">VARIEDAD</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("GRAFICO_LINEAS","VARIEDAD")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataGRAFICO_LINEAS[".chartXml"] .= '<attr value="4">
		<attr value="name">AREA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("GRAFICO_LINEAS","AREA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataGRAFICO_LINEAS[".chartXml"] .= '<attr value="5">
		<attr value="name">PRODUCCION_ANUAL</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("GRAFICO_LINEAS","PRODUCCION_ANUAL")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataGRAFICO_LINEAS[".chartXml"] .= '<attr value="6">
		<attr value="name">AÑO</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("GRAFICO_LINEAS","A_O")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdataGRAFICO_LINEAS[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">GRAFICO LINEAS</attr>
<attr value="short_table_name">GRAFICO_LINEAS</attr>
</attr>

</chart>';

$tables_data["GRAFICO LINEAS"]=&$tdataGRAFICO_LINEAS;
$field_labels["GRAFICO_LINEAS"] = &$fieldLabelsGRAFICO_LINEAS;
$fieldToolTips["GRAFICO_LINEAS"] = &$fieldToolTipsGRAFICO_LINEAS;
$page_titles["GRAFICO_LINEAS"] = &$pageTitlesGRAFICO_LINEAS;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["GRAFICO LINEAS"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["GRAFICO LINEAS"] = array();


	
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
					$masterTablesData["GRAFICO LINEAS"][0] = $masterParams;
				$masterTablesData["GRAFICO LINEAS"][0]["masterKeys"] = array();
	$masterTablesData["GRAFICO LINEAS"][0]["masterKeys"][]="PROPIETARIO_CEDULA";
				$masterTablesData["GRAFICO LINEAS"][0]["detailKeys"] = array();
	$masterTablesData["GRAFICO LINEAS"][0]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_GRAFICO_LINEAS()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
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
	"m_srcTableName" => "GRAFICO LINEAS"
));

$proto6["m_sql"] = "VEREDA";
$proto6["m_srcTableName"] = "GRAFICO LINEAS";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "FINCA",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "GRAFICO LINEAS"
));

$proto8["m_sql"] = "FINCA";
$proto8["m_srcTableName"] = "GRAFICO LINEAS";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "LINEA",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "GRAFICO LINEAS"
));

$proto10["m_sql"] = "LINEA";
$proto10["m_srcTableName"] = "GRAFICO LINEAS";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "VARIEDAD",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "GRAFICO LINEAS"
));

$proto12["m_sql"] = "VARIEDAD";
$proto12["m_srcTableName"] = "GRAFICO LINEAS";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "AREA",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "GRAFICO LINEAS"
));

$proto14["m_sql"] = "AREA";
$proto14["m_srcTableName"] = "GRAFICO LINEAS";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "PRODUCCION_ANUAL",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "GRAFICO LINEAS"
));

$proto16["m_sql"] = "PRODUCCION_ANUAL";
$proto16["m_srcTableName"] = "GRAFICO LINEAS";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "GRAFICO LINEAS"
));

$proto18["m_sql"] = "`AÑO`";
$proto18["m_srcTableName"] = "GRAFICO LINEAS";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "lineas_agrarias";
$proto21["m_srcTableName"] = "GRAFICO LINEAS";
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
$proto20["m_srcTableName"] = "GRAFICO LINEAS";
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
	"m_srcTableName" => "GRAFICO LINEAS"
));

$proto24["m_column"]=$obj;
$obj = new SQLGroupByItem($proto24);

$proto0["m_groupby"][]=$obj;
												$proto26=array();
						$obj = new SQLField(array(
	"m_strName" => "FINCA",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "GRAFICO LINEAS"
));

$proto26["m_column"]=$obj;
$obj = new SQLGroupByItem($proto26);

$proto0["m_groupby"][]=$obj;
												$proto28=array();
						$obj = new SQLField(array(
	"m_strName" => "LINEA",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "GRAFICO LINEAS"
));

$proto28["m_column"]=$obj;
$obj = new SQLGroupByItem($proto28);

$proto0["m_groupby"][]=$obj;
												$proto30=array();
						$obj = new SQLField(array(
	"m_strName" => "VARIEDAD",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "GRAFICO LINEAS"
));

$proto30["m_column"]=$obj;
$obj = new SQLGroupByItem($proto30);

$proto0["m_groupby"][]=$obj;
												$proto32=array();
						$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "lineas_agrarias",
	"m_srcTableName" => "GRAFICO LINEAS"
));

$proto32["m_column"]=$obj;
$obj = new SQLGroupByItem($proto32);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="GRAFICO LINEAS";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_GRAFICO_LINEAS = createSqlQuery_GRAFICO_LINEAS();


	
		;

							

$tdataGRAFICO_LINEAS[".sqlquery"] = $queryData_GRAFICO_LINEAS;

$tableEvents["GRAFICO LINEAS"] = new eventsBase;
$tdataGRAFICO_LINEAS[".hasEvents"] = false;

?>