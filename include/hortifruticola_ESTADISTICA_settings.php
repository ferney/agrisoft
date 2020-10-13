<?php
require_once(getabspath("classes/cipherer.php"));




$tdatahortifruticola_ESTADISTICA = array();
	$tdatahortifruticola_ESTADISTICA[".ShortName"] = "hortifruticola_ESTADISTICA";
	$tdatahortifruticola_ESTADISTICA[".OwnerID"] = "";
	$tdatahortifruticola_ESTADISTICA[".OriginalTable"] = "hortifruticola";

//	field labels
$fieldLabelshortifruticola_ESTADISTICA = array();
$fieldToolTipshortifruticola_ESTADISTICA = array();
$pageTitleshortifruticola_ESTADISTICA = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelshortifruticola_ESTADISTICA["Spanish"] = array();
	$fieldToolTipshortifruticola_ESTADISTICA["Spanish"] = array();
	$pageTitleshortifruticola_ESTADISTICA["Spanish"] = array();
	$fieldLabelshortifruticola_ESTADISTICA["Spanish"]["VEREDA"] = "VEREDA";
	$fieldToolTipshortifruticola_ESTADISTICA["Spanish"]["VEREDA"] = "";
	$fieldLabelshortifruticola_ESTADISTICA["Spanish"]["FINCA"] = "FINCA";
	$fieldToolTipshortifruticola_ESTADISTICA["Spanish"]["FINCA"] = "";
	$fieldLabelshortifruticola_ESTADISTICA["Spanish"]["VARIEDAD"] = "VARIEDAD";
	$fieldToolTipshortifruticola_ESTADISTICA["Spanish"]["VARIEDAD"] = "";
	$fieldLabelshortifruticola_ESTADISTICA["Spanish"]["AREA"] = "AREA";
	$fieldToolTipshortifruticola_ESTADISTICA["Spanish"]["AREA"] = "";
	$fieldLabelshortifruticola_ESTADISTICA["Spanish"]["PRODUCCION_ANUAL"] = "PRODUCCION ANUAL";
	$fieldToolTipshortifruticola_ESTADISTICA["Spanish"]["PRODUCCION_ANUAL"] = "";
	$fieldLabelshortifruticola_ESTADISTICA["Spanish"]["A_O"] = "AÑO";
	$fieldToolTipshortifruticola_ESTADISTICA["Spanish"]["A_O"] = "";
	if (count($fieldToolTipshortifruticola_ESTADISTICA["Spanish"]))
		$tdatahortifruticola_ESTADISTICA[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelshortifruticola_ESTADISTICA[""] = array();
	$fieldToolTipshortifruticola_ESTADISTICA[""] = array();
	$pageTitleshortifruticola_ESTADISTICA[""] = array();
	$fieldLabelshortifruticola_ESTADISTICA[""]["VEREDA"] = "VEREDA";
	$fieldToolTipshortifruticola_ESTADISTICA[""]["VEREDA"] = "";
	$fieldLabelshortifruticola_ESTADISTICA[""]["FINCA"] = "FINCA";
	$fieldToolTipshortifruticola_ESTADISTICA[""]["FINCA"] = "";
	$fieldLabelshortifruticola_ESTADISTICA[""]["VARIEDAD"] = "VARIEDAD";
	$fieldToolTipshortifruticola_ESTADISTICA[""]["VARIEDAD"] = "";
	$fieldLabelshortifruticola_ESTADISTICA[""]["AREA"] = "AREA";
	$fieldToolTipshortifruticola_ESTADISTICA[""]["AREA"] = "";
	$fieldLabelshortifruticola_ESTADISTICA[""]["PRODUCCION_ANUAL"] = "PRODUCCION ANUAL";
	$fieldToolTipshortifruticola_ESTADISTICA[""]["PRODUCCION_ANUAL"] = "";
	$fieldLabelshortifruticola_ESTADISTICA[""]["A_O"] = "AÑO";
	$fieldToolTipshortifruticola_ESTADISTICA[""]["A_O"] = "";
	if (count($fieldToolTipshortifruticola_ESTADISTICA[""]))
		$tdatahortifruticola_ESTADISTICA[".isUseToolTips"] = true;
}


	$tdatahortifruticola_ESTADISTICA[".NCSearch"] = true;

	$tdatahortifruticola_ESTADISTICA[".ChartRefreshTime"] = 0;


$tdatahortifruticola_ESTADISTICA[".shortTableName"] = "hortifruticola_ESTADISTICA";
$tdatahortifruticola_ESTADISTICA[".nSecOptions"] = 0;
$tdatahortifruticola_ESTADISTICA[".recsPerRowPrint"] = 1;
$tdatahortifruticola_ESTADISTICA[".mainTableOwnerID"] = "";
$tdatahortifruticola_ESTADISTICA[".moveNext"] = 1;
$tdatahortifruticola_ESTADISTICA[".entityType"] = 3;

$tdatahortifruticola_ESTADISTICA[".strOriginalTableName"] = "hortifruticola";

	



$tdatahortifruticola_ESTADISTICA[".showAddInPopup"] = false;

$tdatahortifruticola_ESTADISTICA[".showEditInPopup"] = false;

$tdatahortifruticola_ESTADISTICA[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatahortifruticola_ESTADISTICA[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatahortifruticola_ESTADISTICA[".fieldsForRegister"] = array();

$tdatahortifruticola_ESTADISTICA[".listAjax"] = false;

	$tdatahortifruticola_ESTADISTICA[".audit"] = false;

	$tdatahortifruticola_ESTADISTICA[".locking"] = false;


$tdatahortifruticola_ESTADISTICA[".add"] = true;
$tdatahortifruticola_ESTADISTICA[".afterAddAction"] = 1;
$tdatahortifruticola_ESTADISTICA[".closePopupAfterAdd"] = 1;
$tdatahortifruticola_ESTADISTICA[".afterAddActionDetTable"] = "";

$tdatahortifruticola_ESTADISTICA[".list"] = true;






$tdatahortifruticola_ESTADISTICA[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatahortifruticola_ESTADISTICA[".searchSaving"] = false;
//

$tdatahortifruticola_ESTADISTICA[".showSearchPanel"] = true;
		$tdatahortifruticola_ESTADISTICA[".flexibleSearch"] = true;

$tdatahortifruticola_ESTADISTICA[".isUseAjaxSuggest"] = true;




$tdatahortifruticola_ESTADISTICA[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahortifruticola_ESTADISTICA[".isUseTimeForSearch"] = false;



$tdatahortifruticola_ESTADISTICA[".badgeColor"] = "B22222";


$tdatahortifruticola_ESTADISTICA[".allSearchFields"] = array();
$tdatahortifruticola_ESTADISTICA[".filterFields"] = array();
$tdatahortifruticola_ESTADISTICA[".requiredSearchFields"] = array();

$tdatahortifruticola_ESTADISTICA[".allSearchFields"][] = "VEREDA";
	$tdatahortifruticola_ESTADISTICA[".allSearchFields"][] = "FINCA";
	$tdatahortifruticola_ESTADISTICA[".allSearchFields"][] = "VARIEDAD";
	$tdatahortifruticola_ESTADISTICA[".allSearchFields"][] = "AREA";
	$tdatahortifruticola_ESTADISTICA[".allSearchFields"][] = "PRODUCCION_ANUAL";
	$tdatahortifruticola_ESTADISTICA[".allSearchFields"][] = "AÑO";
	

$tdatahortifruticola_ESTADISTICA[".googleLikeFields"] = array();
$tdatahortifruticola_ESTADISTICA[".googleLikeFields"][] = "VEREDA";
$tdatahortifruticola_ESTADISTICA[".googleLikeFields"][] = "FINCA";
$tdatahortifruticola_ESTADISTICA[".googleLikeFields"][] = "VARIEDAD";
$tdatahortifruticola_ESTADISTICA[".googleLikeFields"][] = "AREA";
$tdatahortifruticola_ESTADISTICA[".googleLikeFields"][] = "PRODUCCION_ANUAL";
$tdatahortifruticola_ESTADISTICA[".googleLikeFields"][] = "AÑO";


$tdatahortifruticola_ESTADISTICA[".advSearchFields"] = array();
$tdatahortifruticola_ESTADISTICA[".advSearchFields"][] = "VEREDA";
$tdatahortifruticola_ESTADISTICA[".advSearchFields"][] = "FINCA";
$tdatahortifruticola_ESTADISTICA[".advSearchFields"][] = "VARIEDAD";
$tdatahortifruticola_ESTADISTICA[".advSearchFields"][] = "AREA";
$tdatahortifruticola_ESTADISTICA[".advSearchFields"][] = "PRODUCCION_ANUAL";
$tdatahortifruticola_ESTADISTICA[".advSearchFields"][] = "AÑO";

$tdatahortifruticola_ESTADISTICA[".tableType"] = "chart";

$tdatahortifruticola_ESTADISTICA[".printerPageOrientation"] = 0;
$tdatahortifruticola_ESTADISTICA[".nPrinterPageScale"] = 100;

$tdatahortifruticola_ESTADISTICA[".nPrinterSplitRecords"] = 40;

$tdatahortifruticola_ESTADISTICA[".nPrinterPDFSplitRecords"] = 40;



$tdatahortifruticola_ESTADISTICA[".geocodingEnabled"] = false;



// chart settings
$tdatahortifruticola_ESTADISTICA[".chartType"] = "2DColumn";
// end of chart settings


$tdatahortifruticola_ESTADISTICA[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatahortifruticola_ESTADISTICA[".strOrderBy"] = $tstrOrderBy;

$tdatahortifruticola_ESTADISTICA[".orderindexes"] = array();

$tdatahortifruticola_ESTADISTICA[".sqlHead"] = "SELECT  DISTINCT VEREDA,  FINCA,  VARIEDAD,  AREA,  PRODUCCION_ANUAL,  `AÑO`";
$tdatahortifruticola_ESTADISTICA[".sqlFrom"] = "FROM hortifruticola";
$tdatahortifruticola_ESTADISTICA[".sqlWhereExpr"] = "";
$tdatahortifruticola_ESTADISTICA[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahortifruticola_ESTADISTICA[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahortifruticola_ESTADISTICA[".arrGroupsPerPage"] = $arrGPP;

$tdatahortifruticola_ESTADISTICA[".highlightSearchResults"] = true;

$tableKeyshortifruticola_ESTADISTICA = array();
$tdatahortifruticola_ESTADISTICA[".Keys"] = $tableKeyshortifruticola_ESTADISTICA;

$tdatahortifruticola_ESTADISTICA[".listFields"] = array();
$tdatahortifruticola_ESTADISTICA[".listFields"][] = "VEREDA";
$tdatahortifruticola_ESTADISTICA[".listFields"][] = "FINCA";
$tdatahortifruticola_ESTADISTICA[".listFields"][] = "VARIEDAD";
$tdatahortifruticola_ESTADISTICA[".listFields"][] = "AREA";
$tdatahortifruticola_ESTADISTICA[".listFields"][] = "PRODUCCION_ANUAL";
$tdatahortifruticola_ESTADISTICA[".listFields"][] = "AÑO";

$tdatahortifruticola_ESTADISTICA[".hideMobileList"] = array();


$tdatahortifruticola_ESTADISTICA[".viewFields"] = array();
$tdatahortifruticola_ESTADISTICA[".viewFields"][] = "VEREDA";
$tdatahortifruticola_ESTADISTICA[".viewFields"][] = "FINCA";
$tdatahortifruticola_ESTADISTICA[".viewFields"][] = "VARIEDAD";
$tdatahortifruticola_ESTADISTICA[".viewFields"][] = "AREA";
$tdatahortifruticola_ESTADISTICA[".viewFields"][] = "PRODUCCION_ANUAL";
$tdatahortifruticola_ESTADISTICA[".viewFields"][] = "AÑO";

$tdatahortifruticola_ESTADISTICA[".addFields"] = array();
$tdatahortifruticola_ESTADISTICA[".addFields"][] = "VEREDA";
$tdatahortifruticola_ESTADISTICA[".addFields"][] = "FINCA";
$tdatahortifruticola_ESTADISTICA[".addFields"][] = "VARIEDAD";
$tdatahortifruticola_ESTADISTICA[".addFields"][] = "AREA";
$tdatahortifruticola_ESTADISTICA[".addFields"][] = "PRODUCCION_ANUAL";
$tdatahortifruticola_ESTADISTICA[".addFields"][] = "AÑO";

$tdatahortifruticola_ESTADISTICA[".masterListFields"] = array();
$tdatahortifruticola_ESTADISTICA[".masterListFields"][] = "VEREDA";
$tdatahortifruticola_ESTADISTICA[".masterListFields"][] = "FINCA";
$tdatahortifruticola_ESTADISTICA[".masterListFields"][] = "VARIEDAD";
$tdatahortifruticola_ESTADISTICA[".masterListFields"][] = "AREA";
$tdatahortifruticola_ESTADISTICA[".masterListFields"][] = "PRODUCCION_ANUAL";
$tdatahortifruticola_ESTADISTICA[".masterListFields"][] = "AÑO";

$tdatahortifruticola_ESTADISTICA[".inlineAddFields"] = array();
$tdatahortifruticola_ESTADISTICA[".inlineAddFields"][] = "VEREDA";
$tdatahortifruticola_ESTADISTICA[".inlineAddFields"][] = "FINCA";
$tdatahortifruticola_ESTADISTICA[".inlineAddFields"][] = "VARIEDAD";
$tdatahortifruticola_ESTADISTICA[".inlineAddFields"][] = "AREA";
$tdatahortifruticola_ESTADISTICA[".inlineAddFields"][] = "PRODUCCION_ANUAL";
$tdatahortifruticola_ESTADISTICA[".inlineAddFields"][] = "AÑO";

$tdatahortifruticola_ESTADISTICA[".editFields"] = array();
$tdatahortifruticola_ESTADISTICA[".editFields"][] = "VEREDA";
$tdatahortifruticola_ESTADISTICA[".editFields"][] = "FINCA";
$tdatahortifruticola_ESTADISTICA[".editFields"][] = "VARIEDAD";
$tdatahortifruticola_ESTADISTICA[".editFields"][] = "AREA";
$tdatahortifruticola_ESTADISTICA[".editFields"][] = "PRODUCCION_ANUAL";
$tdatahortifruticola_ESTADISTICA[".editFields"][] = "AÑO";

$tdatahortifruticola_ESTADISTICA[".inlineEditFields"] = array();
$tdatahortifruticola_ESTADISTICA[".inlineEditFields"][] = "VEREDA";
$tdatahortifruticola_ESTADISTICA[".inlineEditFields"][] = "FINCA";
$tdatahortifruticola_ESTADISTICA[".inlineEditFields"][] = "VARIEDAD";
$tdatahortifruticola_ESTADISTICA[".inlineEditFields"][] = "AREA";
$tdatahortifruticola_ESTADISTICA[".inlineEditFields"][] = "PRODUCCION_ANUAL";
$tdatahortifruticola_ESTADISTICA[".inlineEditFields"][] = "AÑO";

$tdatahortifruticola_ESTADISTICA[".exportFields"] = array();
$tdatahortifruticola_ESTADISTICA[".exportFields"][] = "VEREDA";
$tdatahortifruticola_ESTADISTICA[".exportFields"][] = "FINCA";
$tdatahortifruticola_ESTADISTICA[".exportFields"][] = "VARIEDAD";
$tdatahortifruticola_ESTADISTICA[".exportFields"][] = "AREA";
$tdatahortifruticola_ESTADISTICA[".exportFields"][] = "PRODUCCION_ANUAL";
$tdatahortifruticola_ESTADISTICA[".exportFields"][] = "AÑO";

$tdatahortifruticola_ESTADISTICA[".importFields"] = array();
$tdatahortifruticola_ESTADISTICA[".importFields"][] = "VEREDA";
$tdatahortifruticola_ESTADISTICA[".importFields"][] = "FINCA";
$tdatahortifruticola_ESTADISTICA[".importFields"][] = "VARIEDAD";
$tdatahortifruticola_ESTADISTICA[".importFields"][] = "AREA";
$tdatahortifruticola_ESTADISTICA[".importFields"][] = "PRODUCCION_ANUAL";
$tdatahortifruticola_ESTADISTICA[".importFields"][] = "AÑO";

$tdatahortifruticola_ESTADISTICA[".printFields"] = array();
$tdatahortifruticola_ESTADISTICA[".printFields"][] = "VEREDA";
$tdatahortifruticola_ESTADISTICA[".printFields"][] = "FINCA";
$tdatahortifruticola_ESTADISTICA[".printFields"][] = "VARIEDAD";
$tdatahortifruticola_ESTADISTICA[".printFields"][] = "AREA";
$tdatahortifruticola_ESTADISTICA[".printFields"][] = "PRODUCCION_ANUAL";
$tdatahortifruticola_ESTADISTICA[".printFields"][] = "AÑO";

//	VEREDA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "VEREDA";
	$fdata["GoodName"] = "VEREDA";
	$fdata["ownerTable"] = "hortifruticola";
	$fdata["Label"] = GetFieldLabel("hortifruticola_ESTADISTICA","VEREDA");
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




	$tdatahortifruticola_ESTADISTICA["VEREDA"] = $fdata;
//	FINCA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FINCA";
	$fdata["GoodName"] = "FINCA";
	$fdata["ownerTable"] = "hortifruticola";
	$fdata["Label"] = GetFieldLabel("hortifruticola_ESTADISTICA","FINCA");
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




	$tdatahortifruticola_ESTADISTICA["FINCA"] = $fdata;
//	VARIEDAD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "VARIEDAD";
	$fdata["GoodName"] = "VARIEDAD";
	$fdata["ownerTable"] = "hortifruticola";
	$fdata["Label"] = GetFieldLabel("hortifruticola_ESTADISTICA","VARIEDAD");
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
	$edata["LookupValues"][] = "Aguacate";
	$edata["LookupValues"][] = "Bananito bocadillo";
	$edata["LookupValues"][] = "Banano";
	$edata["LookupValues"][] = "Chirimoya";
	$edata["LookupValues"][] = "Curuba";
	$edata["LookupValues"][] = "Feijoa";
	$edata["LookupValues"][] = "Fresa";
	$edata["LookupValues"][] = "Granadilla";
	$edata["LookupValues"][] = "Guanabana";
	$edata["LookupValues"][] = "Guayaba";
	$edata["LookupValues"][] = "Limon Mandarina";
	$edata["LookupValues"][] = "Limon Tahiti";
	$edata["LookupValues"][] = "Lulo";
	$edata["LookupValues"][] = "Mamoncillo";
	$edata["LookupValues"][] = "Mandarina";
	$edata["LookupValues"][] = "Mango";
	$edata["LookupValues"][] = "Maracuya";
	$edata["LookupValues"][] = "Melon";
	$edata["LookupValues"][] = "Mora";
	$edata["LookupValues"][] = "Naranja";
	$edata["LookupValues"][] = "Papaya";
	$edata["LookupValues"][] = "Piña";
	$edata["LookupValues"][] = "Tamarindo";
	$edata["LookupValues"][] = "Tomate Arbol";
	$edata["LookupValues"][] = "Zapote";

	
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




	$tdatahortifruticola_ESTADISTICA["VARIEDAD"] = $fdata;
//	AREA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "AREA";
	$fdata["GoodName"] = "AREA";
	$fdata["ownerTable"] = "hortifruticola";
	$fdata["Label"] = GetFieldLabel("hortifruticola_ESTADISTICA","AREA");
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




	$tdatahortifruticola_ESTADISTICA["AREA"] = $fdata;
//	PRODUCCION_ANUAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "PRODUCCION_ANUAL";
	$fdata["GoodName"] = "PRODUCCION_ANUAL";
	$fdata["ownerTable"] = "hortifruticola";
	$fdata["Label"] = GetFieldLabel("hortifruticola_ESTADISTICA","PRODUCCION_ANUAL");
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




	$tdatahortifruticola_ESTADISTICA["PRODUCCION_ANUAL"] = $fdata;
//	AÑO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "AÑO";
	$fdata["GoodName"] = "A_O";
	$fdata["ownerTable"] = "hortifruticola";
	$fdata["Label"] = GetFieldLabel("hortifruticola_ESTADISTICA","A_O");
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahortifruticola_ESTADISTICA["AÑO"] = $fdata;

	$tdatahortifruticola_ESTADISTICA[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">hortifruticola ESTADISTICA</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdatahortifruticola_ESTADISTICA[".chartXml"] .= '<attr value="0">
			<attr value="name">FINCA_PROPIETARIO_CEDULA</attr>';
	$tdatahortifruticola_ESTADISTICA[".chartXml"] .= '</attr>';
	$tdatahortifruticola_ESTADISTICA[".chartXml"] .= '<attr value="1">
		<attr value="name">NOMBRE</attr>
	</attr>';
	$tdatahortifruticola_ESTADISTICA[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatahortifruticola_ESTADISTICA[".chartXml"] .= '<attr value="head">'.xmlencode("hortifruticola ESTADISTICA").'</attr>
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
$tdatahortifruticola_ESTADISTICA[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatahortifruticola_ESTADISTICA[".chartXml"] .= '<attr value="0">
		<attr value="name">VEREDA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("hortifruticola_ESTADISTICA","VEREDA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatahortifruticola_ESTADISTICA[".chartXml"] .= '<attr value="1">
		<attr value="name">FINCA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("hortifruticola_ESTADISTICA","FINCA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatahortifruticola_ESTADISTICA[".chartXml"] .= '<attr value="2">
		<attr value="name">VARIEDAD</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("hortifruticola_ESTADISTICA","VARIEDAD")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatahortifruticola_ESTADISTICA[".chartXml"] .= '<attr value="3">
		<attr value="name">AREA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("hortifruticola_ESTADISTICA","AREA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatahortifruticola_ESTADISTICA[".chartXml"] .= '<attr value="4">
		<attr value="name">PRODUCCION_ANUAL</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("hortifruticola_ESTADISTICA","PRODUCCION_ANUAL")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatahortifruticola_ESTADISTICA[".chartXml"] .= '<attr value="5">
		<attr value="name">AÑO</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("hortifruticola_ESTADISTICA","A_O")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatahortifruticola_ESTADISTICA[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">hortifruticola ESTADISTICA</attr>
<attr value="short_table_name">hortifruticola_ESTADISTICA</attr>
</attr>

</chart>';

$tables_data["hortifruticola ESTADISTICA"]=&$tdatahortifruticola_ESTADISTICA;
$field_labels["hortifruticola_ESTADISTICA"] = &$fieldLabelshortifruticola_ESTADISTICA;
$fieldToolTips["hortifruticola_ESTADISTICA"] = &$fieldToolTipshortifruticola_ESTADISTICA;
$page_titles["hortifruticola_ESTADISTICA"] = &$pageTitleshortifruticola_ESTADISTICA;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["hortifruticola ESTADISTICA"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["hortifruticola ESTADISTICA"] = array();


	
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
					$masterTablesData["hortifruticola ESTADISTICA"][0] = $masterParams;
				$masterTablesData["hortifruticola ESTADISTICA"][0]["masterKeys"] = array();
	$masterTablesData["hortifruticola ESTADISTICA"][0]["masterKeys"][]="PROPIETARIO_CEDULA";
				$masterTablesData["hortifruticola ESTADISTICA"][0]["detailKeys"] = array();
	$masterTablesData["hortifruticola ESTADISTICA"][0]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_hortifruticola_ESTADISTICA()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT  DISTINCT";
$proto0["m_strFieldList"] = "VEREDA,  FINCA,  VARIEDAD,  AREA,  PRODUCCION_ANUAL,  `AÑO`";
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
	"m_srcTableName" => "hortifruticola ESTADISTICA"
));

$proto6["m_sql"] = "VEREDA";
$proto6["m_srcTableName"] = "hortifruticola ESTADISTICA";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "FINCA",
	"m_strTable" => "hortifruticola",
	"m_srcTableName" => "hortifruticola ESTADISTICA"
));

$proto8["m_sql"] = "FINCA";
$proto8["m_srcTableName"] = "hortifruticola ESTADISTICA";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "VARIEDAD",
	"m_strTable" => "hortifruticola",
	"m_srcTableName" => "hortifruticola ESTADISTICA"
));

$proto10["m_sql"] = "VARIEDAD";
$proto10["m_srcTableName"] = "hortifruticola ESTADISTICA";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "AREA",
	"m_strTable" => "hortifruticola",
	"m_srcTableName" => "hortifruticola ESTADISTICA"
));

$proto12["m_sql"] = "AREA";
$proto12["m_srcTableName"] = "hortifruticola ESTADISTICA";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "PRODUCCION_ANUAL",
	"m_strTable" => "hortifruticola",
	"m_srcTableName" => "hortifruticola ESTADISTICA"
));

$proto14["m_sql"] = "PRODUCCION_ANUAL";
$proto14["m_srcTableName"] = "hortifruticola ESTADISTICA";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "hortifruticola",
	"m_srcTableName" => "hortifruticola ESTADISTICA"
));

$proto16["m_sql"] = "`AÑO`";
$proto16["m_srcTableName"] = "hortifruticola ESTADISTICA";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "hortifruticola";
$proto19["m_srcTableName"] = "hortifruticola ESTADISTICA";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "ID";
$proto19["m_columns"][] = "FINCA_PROPIETARIO_CEDULA";
$proto19["m_columns"][] = "NOMBRE";
$proto19["m_columns"][] = "VEREDA";
$proto19["m_columns"][] = "FINCA";
$proto19["m_columns"][] = "VARIEDAD";
$proto19["m_columns"][] = "AREA";
$proto19["m_columns"][] = "PRODUCCION_ANUAL";
$proto19["m_columns"][] = "AÑO";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "hortifruticola";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "hortifruticola ESTADISTICA";
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
	"m_strTable" => "hortifruticola",
	"m_srcTableName" => "hortifruticola ESTADISTICA"
));

$proto22["m_column"]=$obj;
$obj = new SQLGroupByItem($proto22);

$proto0["m_groupby"][]=$obj;
												$proto24=array();
						$obj = new SQLField(array(
	"m_strName" => "FINCA",
	"m_strTable" => "hortifruticola",
	"m_srcTableName" => "hortifruticola ESTADISTICA"
));

$proto24["m_column"]=$obj;
$obj = new SQLGroupByItem($proto24);

$proto0["m_groupby"][]=$obj;
												$proto26=array();
						$obj = new SQLField(array(
	"m_strName" => "VARIEDAD",
	"m_strTable" => "hortifruticola",
	"m_srcTableName" => "hortifruticola ESTADISTICA"
));

$proto26["m_column"]=$obj;
$obj = new SQLGroupByItem($proto26);

$proto0["m_groupby"][]=$obj;
												$proto28=array();
						$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "hortifruticola",
	"m_srcTableName" => "hortifruticola ESTADISTICA"
));

$proto28["m_column"]=$obj;
$obj = new SQLGroupByItem($proto28);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="hortifruticola ESTADISTICA";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hortifruticola_ESTADISTICA = createSqlQuery_hortifruticola_ESTADISTICA();


	
		;

						

$tdatahortifruticola_ESTADISTICA[".sqlquery"] = $queryData_hortifruticola_ESTADISTICA;

$tableEvents["hortifruticola ESTADISTICA"] = new eventsBase;
$tdatahortifruticola_ESTADISTICA[".hasEvents"] = false;

?>