<?php
require_once(getabspath("classes/cipherer.php"));




$tdatahortifruticola_Chart = array();
	$tdatahortifruticola_Chart[".ShortName"] = "hortifruticola_Chart";
	$tdatahortifruticola_Chart[".OwnerID"] = "";
	$tdatahortifruticola_Chart[".OriginalTable"] = "hortifruticola";

//	field labels
$fieldLabelshortifruticola_Chart = array();
$fieldToolTipshortifruticola_Chart = array();
$pageTitleshortifruticola_Chart = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelshortifruticola_Chart["Spanish"] = array();
	$fieldToolTipshortifruticola_Chart["Spanish"] = array();
	$pageTitleshortifruticola_Chart["Spanish"] = array();
	$fieldLabelshortifruticola_Chart["Spanish"]["VEREDA"] = "VEREDA";
	$fieldToolTipshortifruticola_Chart["Spanish"]["VEREDA"] = "";
	$fieldLabelshortifruticola_Chart["Spanish"]["VARIEDAD"] = "VARIEDAD";
	$fieldToolTipshortifruticola_Chart["Spanish"]["VARIEDAD"] = "";
	$fieldLabelshortifruticola_Chart["Spanish"]["AREA"] = "AREA";
	$fieldToolTipshortifruticola_Chart["Spanish"]["AREA"] = "";
	$fieldLabelshortifruticola_Chart["Spanish"]["A_O"] = "AÑO";
	$fieldToolTipshortifruticola_Chart["Spanish"]["A_O"] = "";
	$fieldLabelshortifruticola_Chart["Spanish"]["PRODUCCION"] = "PRODUCCION";
	$fieldToolTipshortifruticola_Chart["Spanish"]["PRODUCCION"] = "";
	if (count($fieldToolTipshortifruticola_Chart["Spanish"]))
		$tdatahortifruticola_Chart[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelshortifruticola_Chart[""] = array();
	$fieldToolTipshortifruticola_Chart[""] = array();
	$pageTitleshortifruticola_Chart[""] = array();
	$fieldLabelshortifruticola_Chart[""]["VEREDA"] = "VEREDA";
	$fieldToolTipshortifruticola_Chart[""]["VEREDA"] = "";
	$fieldLabelshortifruticola_Chart[""]["VARIEDAD"] = "VARIEDAD";
	$fieldToolTipshortifruticola_Chart[""]["VARIEDAD"] = "";
	$fieldLabelshortifruticola_Chart[""]["AREA"] = "AREA";
	$fieldToolTipshortifruticola_Chart[""]["AREA"] = "";
	$fieldLabelshortifruticola_Chart[""]["A_O"] = "AÑO";
	$fieldToolTipshortifruticola_Chart[""]["A_O"] = "";
	$fieldLabelshortifruticola_Chart[""]["PRODUCCION"] = "PRODUCCION";
	$fieldToolTipshortifruticola_Chart[""]["PRODUCCION"] = "";
	if (count($fieldToolTipshortifruticola_Chart[""]))
		$tdatahortifruticola_Chart[".isUseToolTips"] = true;
}


	$tdatahortifruticola_Chart[".NCSearch"] = true;

	$tdatahortifruticola_Chart[".ChartRefreshTime"] = 0;


$tdatahortifruticola_Chart[".shortTableName"] = "hortifruticola_Chart";
$tdatahortifruticola_Chart[".nSecOptions"] = 0;
$tdatahortifruticola_Chart[".recsPerRowPrint"] = 1;
$tdatahortifruticola_Chart[".mainTableOwnerID"] = "";
$tdatahortifruticola_Chart[".moveNext"] = 1;
$tdatahortifruticola_Chart[".entityType"] = 3;

$tdatahortifruticola_Chart[".strOriginalTableName"] = "hortifruticola";

	



$tdatahortifruticola_Chart[".showAddInPopup"] = false;

$tdatahortifruticola_Chart[".showEditInPopup"] = false;

$tdatahortifruticola_Chart[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatahortifruticola_Chart[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatahortifruticola_Chart[".fieldsForRegister"] = array();

$tdatahortifruticola_Chart[".listAjax"] = false;

	$tdatahortifruticola_Chart[".audit"] = false;

	$tdatahortifruticola_Chart[".locking"] = false;


$tdatahortifruticola_Chart[".add"] = true;
$tdatahortifruticola_Chart[".afterAddAction"] = 1;
$tdatahortifruticola_Chart[".closePopupAfterAdd"] = 1;
$tdatahortifruticola_Chart[".afterAddActionDetTable"] = "";

$tdatahortifruticola_Chart[".list"] = true;






$tdatahortifruticola_Chart[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatahortifruticola_Chart[".searchSaving"] = false;
//

$tdatahortifruticola_Chart[".showSearchPanel"] = true;
		$tdatahortifruticola_Chart[".flexibleSearch"] = true;

$tdatahortifruticola_Chart[".isUseAjaxSuggest"] = true;




$tdatahortifruticola_Chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahortifruticola_Chart[".isUseTimeForSearch"] = false;



$tdatahortifruticola_Chart[".badgeColor"] = "2F4F4F";


$tdatahortifruticola_Chart[".allSearchFields"] = array();
$tdatahortifruticola_Chart[".filterFields"] = array();
$tdatahortifruticola_Chart[".requiredSearchFields"] = array();

$tdatahortifruticola_Chart[".allSearchFields"][] = "VEREDA";
	$tdatahortifruticola_Chart[".allSearchFields"][] = "VARIEDAD";
	$tdatahortifruticola_Chart[".allSearchFields"][] = "AREA";
	$tdatahortifruticola_Chart[".allSearchFields"][] = "PRODUCCION";
	$tdatahortifruticola_Chart[".allSearchFields"][] = "AÑO";
	

$tdatahortifruticola_Chart[".googleLikeFields"] = array();
$tdatahortifruticola_Chart[".googleLikeFields"][] = "VEREDA";
$tdatahortifruticola_Chart[".googleLikeFields"][] = "VARIEDAD";
$tdatahortifruticola_Chart[".googleLikeFields"][] = "AREA";
$tdatahortifruticola_Chart[".googleLikeFields"][] = "PRODUCCION";
$tdatahortifruticola_Chart[".googleLikeFields"][] = "AÑO";


$tdatahortifruticola_Chart[".advSearchFields"] = array();
$tdatahortifruticola_Chart[".advSearchFields"][] = "VEREDA";
$tdatahortifruticola_Chart[".advSearchFields"][] = "VARIEDAD";
$tdatahortifruticola_Chart[".advSearchFields"][] = "AREA";
$tdatahortifruticola_Chart[".advSearchFields"][] = "PRODUCCION";
$tdatahortifruticola_Chart[".advSearchFields"][] = "AÑO";

$tdatahortifruticola_Chart[".tableType"] = "chart";

$tdatahortifruticola_Chart[".printerPageOrientation"] = 0;
$tdatahortifruticola_Chart[".nPrinterPageScale"] = 100;

$tdatahortifruticola_Chart[".nPrinterSplitRecords"] = 40;

$tdatahortifruticola_Chart[".nPrinterPDFSplitRecords"] = 40;



$tdatahortifruticola_Chart[".geocodingEnabled"] = false;



// chart settings
$tdatahortifruticola_Chart[".chartType"] = "2DColumn";
// end of chart settings


$tdatahortifruticola_Chart[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatahortifruticola_Chart[".strOrderBy"] = $tstrOrderBy;

$tdatahortifruticola_Chart[".orderindexes"] = array();

$tdatahortifruticola_Chart[".sqlHead"] = "SELECT  DISTINCT VEREDA,  VARIEDAD AS VARIEDAD,  SUM(AREA) AS AREA,  SUM(PRODUCCION_ANUAL) AS PRODUCCION,  `AÑO`";
$tdatahortifruticola_Chart[".sqlFrom"] = "FROM hortifruticola";
$tdatahortifruticola_Chart[".sqlWhereExpr"] = "";
$tdatahortifruticola_Chart[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahortifruticola_Chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahortifruticola_Chart[".arrGroupsPerPage"] = $arrGPP;

$tdatahortifruticola_Chart[".highlightSearchResults"] = true;

$tableKeyshortifruticola_Chart = array();
$tdatahortifruticola_Chart[".Keys"] = $tableKeyshortifruticola_Chart;

$tdatahortifruticola_Chart[".listFields"] = array();
$tdatahortifruticola_Chart[".listFields"][] = "VEREDA";
$tdatahortifruticola_Chart[".listFields"][] = "VARIEDAD";
$tdatahortifruticola_Chart[".listFields"][] = "AREA";
$tdatahortifruticola_Chart[".listFields"][] = "PRODUCCION";
$tdatahortifruticola_Chart[".listFields"][] = "AÑO";

$tdatahortifruticola_Chart[".hideMobileList"] = array();


$tdatahortifruticola_Chart[".viewFields"] = array();
$tdatahortifruticola_Chart[".viewFields"][] = "VEREDA";
$tdatahortifruticola_Chart[".viewFields"][] = "VARIEDAD";
$tdatahortifruticola_Chart[".viewFields"][] = "AREA";
$tdatahortifruticola_Chart[".viewFields"][] = "PRODUCCION";
$tdatahortifruticola_Chart[".viewFields"][] = "AÑO";

$tdatahortifruticola_Chart[".addFields"] = array();
$tdatahortifruticola_Chart[".addFields"][] = "VEREDA";
$tdatahortifruticola_Chart[".addFields"][] = "VARIEDAD";
$tdatahortifruticola_Chart[".addFields"][] = "AREA";
$tdatahortifruticola_Chart[".addFields"][] = "AÑO";

$tdatahortifruticola_Chart[".masterListFields"] = array();
$tdatahortifruticola_Chart[".masterListFields"][] = "VEREDA";
$tdatahortifruticola_Chart[".masterListFields"][] = "VARIEDAD";
$tdatahortifruticola_Chart[".masterListFields"][] = "AREA";
$tdatahortifruticola_Chart[".masterListFields"][] = "PRODUCCION";
$tdatahortifruticola_Chart[".masterListFields"][] = "AÑO";

$tdatahortifruticola_Chart[".inlineAddFields"] = array();
$tdatahortifruticola_Chart[".inlineAddFields"][] = "VEREDA";
$tdatahortifruticola_Chart[".inlineAddFields"][] = "VARIEDAD";
$tdatahortifruticola_Chart[".inlineAddFields"][] = "AREA";
$tdatahortifruticola_Chart[".inlineAddFields"][] = "AÑO";

$tdatahortifruticola_Chart[".editFields"] = array();
$tdatahortifruticola_Chart[".editFields"][] = "VEREDA";
$tdatahortifruticola_Chart[".editFields"][] = "VARIEDAD";
$tdatahortifruticola_Chart[".editFields"][] = "AREA";
$tdatahortifruticola_Chart[".editFields"][] = "AÑO";

$tdatahortifruticola_Chart[".inlineEditFields"] = array();
$tdatahortifruticola_Chart[".inlineEditFields"][] = "VEREDA";
$tdatahortifruticola_Chart[".inlineEditFields"][] = "VARIEDAD";
$tdatahortifruticola_Chart[".inlineEditFields"][] = "AREA";
$tdatahortifruticola_Chart[".inlineEditFields"][] = "AÑO";

$tdatahortifruticola_Chart[".exportFields"] = array();
$tdatahortifruticola_Chart[".exportFields"][] = "VEREDA";
$tdatahortifruticola_Chart[".exportFields"][] = "VARIEDAD";
$tdatahortifruticola_Chart[".exportFields"][] = "AREA";
$tdatahortifruticola_Chart[".exportFields"][] = "PRODUCCION";
$tdatahortifruticola_Chart[".exportFields"][] = "AÑO";

$tdatahortifruticola_Chart[".importFields"] = array();
$tdatahortifruticola_Chart[".importFields"][] = "VEREDA";
$tdatahortifruticola_Chart[".importFields"][] = "VARIEDAD";
$tdatahortifruticola_Chart[".importFields"][] = "AREA";
$tdatahortifruticola_Chart[".importFields"][] = "PRODUCCION";
$tdatahortifruticola_Chart[".importFields"][] = "AÑO";

$tdatahortifruticola_Chart[".printFields"] = array();
$tdatahortifruticola_Chart[".printFields"][] = "VEREDA";
$tdatahortifruticola_Chart[".printFields"][] = "VARIEDAD";
$tdatahortifruticola_Chart[".printFields"][] = "AREA";
$tdatahortifruticola_Chart[".printFields"][] = "PRODUCCION";
$tdatahortifruticola_Chart[".printFields"][] = "AÑO";

//	VEREDA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "VEREDA";
	$fdata["GoodName"] = "VEREDA";
	$fdata["ownerTable"] = "hortifruticola";
	$fdata["Label"] = GetFieldLabel("hortifruticola_Chart","VEREDA");
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




	$tdatahortifruticola_Chart["VEREDA"] = $fdata;
//	VARIEDAD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "VARIEDAD";
	$fdata["GoodName"] = "VARIEDAD";
	$fdata["ownerTable"] = "hortifruticola";
	$fdata["Label"] = GetFieldLabel("hortifruticola_Chart","VARIEDAD");
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




	$tdatahortifruticola_Chart["VARIEDAD"] = $fdata;
//	AREA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "AREA";
	$fdata["GoodName"] = "AREA";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("hortifruticola_Chart","AREA");
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahortifruticola_Chart["AREA"] = $fdata;
//	PRODUCCION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "PRODUCCION";
	$fdata["GoodName"] = "PRODUCCION";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("hortifruticola_Chart","PRODUCCION");
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




	$tdatahortifruticola_Chart["PRODUCCION"] = $fdata;
//	AÑO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "AÑO";
	$fdata["GoodName"] = "A_O";
	$fdata["ownerTable"] = "hortifruticola";
	$fdata["Label"] = GetFieldLabel("hortifruticola_Chart","A_O");
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




	$tdatahortifruticola_Chart["AÑO"] = $fdata;

	$tdatahortifruticola_Chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">hortifruticola Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdatahortifruticola_Chart[".chartXml"] .= '<attr value="0">
			<attr value="name">AREA</attr>';
	$tdatahortifruticola_Chart[".chartXml"] .= '</attr>';
	$tdatahortifruticola_Chart[".chartXml"] .= '<attr value="1">
			<attr value="name">PRODUCCION</attr>';
	$tdatahortifruticola_Chart[".chartXml"] .= '</attr>';
	$tdatahortifruticola_Chart[".chartXml"] .= '<attr value="2">
		<attr value="name">VEREDA</attr>
	</attr>';
	$tdatahortifruticola_Chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatahortifruticola_Chart[".chartXml"] .= '<attr value="head">'.xmlencode("ESTAADISTICA HORTIFRUTICOLA").'</attr>
<attr value="foot">'.xmlencode("EXTENCION HORTIFRUTICOLA").'</attr>
<attr value="y_axis_label">'.xmlencode("").'</attr>


<attr value="slegend">true</attr>
<attr value="sgrid">false</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">0</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>';
$tdatahortifruticola_Chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatahortifruticola_Chart[".chartXml"] .= '<attr value="0">
		<attr value="name">VEREDA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("hortifruticola_Chart","VEREDA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatahortifruticola_Chart[".chartXml"] .= '<attr value="1">
		<attr value="name">VARIEDAD</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("hortifruticola_Chart","VARIEDAD")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatahortifruticola_Chart[".chartXml"] .= '<attr value="2">
		<attr value="name">AREA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("hortifruticola_Chart","AREA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatahortifruticola_Chart[".chartXml"] .= '<attr value="3">
		<attr value="name">PRODUCCION</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("hortifruticola_Chart","PRODUCCION")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatahortifruticola_Chart[".chartXml"] .= '<attr value="4">
		<attr value="name">AÑO</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("hortifruticola_Chart","A_O")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatahortifruticola_Chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">hortifruticola Chart</attr>
<attr value="short_table_name">hortifruticola_Chart</attr>
</attr>

</chart>';

$tables_data["hortifruticola Chart"]=&$tdatahortifruticola_Chart;
$field_labels["hortifruticola_Chart"] = &$fieldLabelshortifruticola_Chart;
$fieldToolTips["hortifruticola_Chart"] = &$fieldToolTipshortifruticola_Chart;
$page_titles["hortifruticola_Chart"] = &$pageTitleshortifruticola_Chart;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["hortifruticola Chart"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["hortifruticola Chart"] = array();


	
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
					$masterTablesData["hortifruticola Chart"][0] = $masterParams;
				$masterTablesData["hortifruticola Chart"][0]["masterKeys"] = array();
	$masterTablesData["hortifruticola Chart"][0]["masterKeys"][]="PROPIETARIO_CEDULA";
				$masterTablesData["hortifruticola Chart"][0]["detailKeys"] = array();
	$masterTablesData["hortifruticola Chart"][0]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_hortifruticola_Chart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT  DISTINCT";
$proto0["m_strFieldList"] = "VEREDA,  VARIEDAD AS VARIEDAD,  SUM(AREA) AS AREA,  SUM(PRODUCCION_ANUAL) AS PRODUCCION,  `AÑO`";
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
	"m_srcTableName" => "hortifruticola Chart"
));

$proto6["m_sql"] = "VEREDA";
$proto6["m_srcTableName"] = "hortifruticola Chart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "VARIEDAD",
	"m_strTable" => "hortifruticola",
	"m_srcTableName" => "hortifruticola Chart"
));

$proto8["m_sql"] = "VARIEDAD";
$proto8["m_srcTableName"] = "hortifruticola Chart";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "VARIEDAD";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$proto11=array();
$proto11["m_functiontype"] = "SQLF_SUM";
$proto11["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "AREA",
	"m_strTable" => "hortifruticola",
	"m_srcTableName" => "hortifruticola Chart"
));

$proto11["m_arguments"][]=$obj;
$proto11["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto11);

$proto10["m_sql"] = "SUM(AREA)";
$proto10["m_srcTableName"] = "hortifruticola Chart";
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
	"m_strTable" => "hortifruticola",
	"m_srcTableName" => "hortifruticola Chart"
));

$proto14["m_arguments"][]=$obj;
$proto14["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto14);

$proto13["m_sql"] = "SUM(PRODUCCION_ANUAL)";
$proto13["m_srcTableName"] = "hortifruticola Chart";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "PRODUCCION";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "hortifruticola",
	"m_srcTableName" => "hortifruticola Chart"
));

$proto16["m_sql"] = "`AÑO`";
$proto16["m_srcTableName"] = "hortifruticola Chart";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "hortifruticola";
$proto19["m_srcTableName"] = "hortifruticola Chart";
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
$proto18["m_srcTableName"] = "hortifruticola Chart";
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
	"m_srcTableName" => "hortifruticola Chart"
));

$proto22["m_column"]=$obj;
$obj = new SQLGroupByItem($proto22);

$proto0["m_groupby"][]=$obj;
												$proto24=array();
						$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "hortifruticola",
	"m_srcTableName" => "hortifruticola Chart"
));

$proto24["m_column"]=$obj;
$obj = new SQLGroupByItem($proto24);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="hortifruticola Chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hortifruticola_Chart = createSqlQuery_hortifruticola_Chart();


	
		;

					

$tdatahortifruticola_Chart[".sqlquery"] = $queryData_hortifruticola_Chart;

$tableEvents["hortifruticola Chart"] = new eventsBase;
$tdatahortifruticola_Chart[".hasEvents"] = false;

?>