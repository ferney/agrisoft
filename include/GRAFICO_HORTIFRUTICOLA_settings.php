<?php
require_once(getabspath("classes/cipherer.php"));




$tdataGrafico_hortifruticola = array();
	$tdataGrafico_hortifruticola[".ShortName"] = "Grafico_hortifruticola";
	$tdataGrafico_hortifruticola[".OwnerID"] = "";
	$tdataGrafico_hortifruticola[".OriginalTable"] = "hortifruticola";

//	field labels
$fieldLabelsGrafico_hortifruticola = array();
$fieldToolTipsGrafico_hortifruticola = array();
$pageTitlesGrafico_hortifruticola = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsGrafico_hortifruticola["Spanish"] = array();
	$fieldToolTipsGrafico_hortifruticola["Spanish"] = array();
	$pageTitlesGrafico_hortifruticola["Spanish"] = array();
	$fieldLabelsGrafico_hortifruticola["Spanish"]["VEREDA"] = "VEREDA";
	$fieldToolTipsGrafico_hortifruticola["Spanish"]["VEREDA"] = "";
	$fieldLabelsGrafico_hortifruticola["Spanish"]["VARIEDAD"] = "VARIEDAD";
	$fieldToolTipsGrafico_hortifruticola["Spanish"]["VARIEDAD"] = "";
	$fieldLabelsGrafico_hortifruticola["Spanish"]["AREA"] = "AREA";
	$fieldToolTipsGrafico_hortifruticola["Spanish"]["AREA"] = "";
	$fieldLabelsGrafico_hortifruticola["Spanish"]["A_O"] = "AÑO";
	$fieldToolTipsGrafico_hortifruticola["Spanish"]["A_O"] = "";
	$fieldLabelsGrafico_hortifruticola["Spanish"]["PRODUCCION"] = "PRODUCCION";
	$fieldToolTipsGrafico_hortifruticola["Spanish"]["PRODUCCION"] = "";
	if (count($fieldToolTipsGrafico_hortifruticola["Spanish"]))
		$tdataGrafico_hortifruticola[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsGrafico_hortifruticola[""] = array();
	$fieldToolTipsGrafico_hortifruticola[""] = array();
	$pageTitlesGrafico_hortifruticola[""] = array();
	$fieldLabelsGrafico_hortifruticola[""]["VEREDA"] = "VEREDA";
	$fieldToolTipsGrafico_hortifruticola[""]["VEREDA"] = "";
	$fieldLabelsGrafico_hortifruticola[""]["VARIEDAD"] = "VARIEDAD";
	$fieldToolTipsGrafico_hortifruticola[""]["VARIEDAD"] = "";
	$fieldLabelsGrafico_hortifruticola[""]["AREA"] = "AREA";
	$fieldToolTipsGrafico_hortifruticola[""]["AREA"] = "";
	$fieldLabelsGrafico_hortifruticola[""]["A_O"] = "AÑO";
	$fieldToolTipsGrafico_hortifruticola[""]["A_O"] = "";
	$fieldLabelsGrafico_hortifruticola[""]["PRODUCCION"] = "PRODUCCION";
	$fieldToolTipsGrafico_hortifruticola[""]["PRODUCCION"] = "";
	if (count($fieldToolTipsGrafico_hortifruticola[""]))
		$tdataGrafico_hortifruticola[".isUseToolTips"] = true;
}


	$tdataGrafico_hortifruticola[".NCSearch"] = true;

	$tdataGrafico_hortifruticola[".ChartRefreshTime"] = 0;


$tdataGrafico_hortifruticola[".shortTableName"] = "Grafico_hortifruticola";
$tdataGrafico_hortifruticola[".nSecOptions"] = 0;
$tdataGrafico_hortifruticola[".recsPerRowPrint"] = 1;
$tdataGrafico_hortifruticola[".mainTableOwnerID"] = "";
$tdataGrafico_hortifruticola[".moveNext"] = 1;
$tdataGrafico_hortifruticola[".entityType"] = 3;

$tdataGrafico_hortifruticola[".strOriginalTableName"] = "hortifruticola";

	



$tdataGrafico_hortifruticola[".showAddInPopup"] = false;

$tdataGrafico_hortifruticola[".showEditInPopup"] = false;

$tdataGrafico_hortifruticola[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataGrafico_hortifruticola[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataGrafico_hortifruticola[".fieldsForRegister"] = array();

$tdataGrafico_hortifruticola[".listAjax"] = false;

	$tdataGrafico_hortifruticola[".audit"] = false;

	$tdataGrafico_hortifruticola[".locking"] = false;


$tdataGrafico_hortifruticola[".add"] = true;
$tdataGrafico_hortifruticola[".afterAddAction"] = 1;
$tdataGrafico_hortifruticola[".closePopupAfterAdd"] = 1;
$tdataGrafico_hortifruticola[".afterAddActionDetTable"] = "";

$tdataGrafico_hortifruticola[".list"] = true;






$tdataGrafico_hortifruticola[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataGrafico_hortifruticola[".searchSaving"] = false;
//

$tdataGrafico_hortifruticola[".showSearchPanel"] = true;
		$tdataGrafico_hortifruticola[".flexibleSearch"] = true;

$tdataGrafico_hortifruticola[".isUseAjaxSuggest"] = true;




$tdataGrafico_hortifruticola[".addPageEvents"] = false;

// use timepicker for search panel
$tdataGrafico_hortifruticola[".isUseTimeForSearch"] = false;



$tdataGrafico_hortifruticola[".badgeColor"] = "2F4F4F";


$tdataGrafico_hortifruticola[".allSearchFields"] = array();
$tdataGrafico_hortifruticola[".filterFields"] = array();
$tdataGrafico_hortifruticola[".requiredSearchFields"] = array();

$tdataGrafico_hortifruticola[".allSearchFields"][] = "VEREDA";
	$tdataGrafico_hortifruticola[".allSearchFields"][] = "VARIEDAD";
	$tdataGrafico_hortifruticola[".allSearchFields"][] = "AREA";
	$tdataGrafico_hortifruticola[".allSearchFields"][] = "PRODUCCION";
	$tdataGrafico_hortifruticola[".allSearchFields"][] = "AÑO";
	

$tdataGrafico_hortifruticola[".googleLikeFields"] = array();
$tdataGrafico_hortifruticola[".googleLikeFields"][] = "VEREDA";
$tdataGrafico_hortifruticola[".googleLikeFields"][] = "VARIEDAD";
$tdataGrafico_hortifruticola[".googleLikeFields"][] = "AREA";
$tdataGrafico_hortifruticola[".googleLikeFields"][] = "PRODUCCION";
$tdataGrafico_hortifruticola[".googleLikeFields"][] = "AÑO";


$tdataGrafico_hortifruticola[".advSearchFields"] = array();
$tdataGrafico_hortifruticola[".advSearchFields"][] = "VEREDA";
$tdataGrafico_hortifruticola[".advSearchFields"][] = "VARIEDAD";
$tdataGrafico_hortifruticola[".advSearchFields"][] = "AREA";
$tdataGrafico_hortifruticola[".advSearchFields"][] = "PRODUCCION";
$tdataGrafico_hortifruticola[".advSearchFields"][] = "AÑO";

$tdataGrafico_hortifruticola[".tableType"] = "chart";

$tdataGrafico_hortifruticola[".printerPageOrientation"] = 0;
$tdataGrafico_hortifruticola[".nPrinterPageScale"] = 100;

$tdataGrafico_hortifruticola[".nPrinterSplitRecords"] = 40;

$tdataGrafico_hortifruticola[".nPrinterPDFSplitRecords"] = 40;



$tdataGrafico_hortifruticola[".geocodingEnabled"] = false;



// chart settings
$tdataGrafico_hortifruticola[".chartType"] = "2DColumn";
// end of chart settings


$tdataGrafico_hortifruticola[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataGrafico_hortifruticola[".strOrderBy"] = $tstrOrderBy;

$tdataGrafico_hortifruticola[".orderindexes"] = array();

$tdataGrafico_hortifruticola[".sqlHead"] = "SELECT  DISTINCT VEREDA,  VARIEDAD AS VARIEDAD,  SUM(AREA) AS AREA,  SUM(PRODUCCION_ANUAL) AS PRODUCCION,  `AÑO`";
$tdataGrafico_hortifruticola[".sqlFrom"] = "FROM hortifruticola";
$tdataGrafico_hortifruticola[".sqlWhereExpr"] = "";
$tdataGrafico_hortifruticola[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataGrafico_hortifruticola[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataGrafico_hortifruticola[".arrGroupsPerPage"] = $arrGPP;

$tdataGrafico_hortifruticola[".highlightSearchResults"] = true;

$tableKeysGrafico_hortifruticola = array();
$tdataGrafico_hortifruticola[".Keys"] = $tableKeysGrafico_hortifruticola;

$tdataGrafico_hortifruticola[".listFields"] = array();
$tdataGrafico_hortifruticola[".listFields"][] = "VEREDA";
$tdataGrafico_hortifruticola[".listFields"][] = "VARIEDAD";
$tdataGrafico_hortifruticola[".listFields"][] = "AREA";
$tdataGrafico_hortifruticola[".listFields"][] = "PRODUCCION";
$tdataGrafico_hortifruticola[".listFields"][] = "AÑO";

$tdataGrafico_hortifruticola[".hideMobileList"] = array();


$tdataGrafico_hortifruticola[".viewFields"] = array();
$tdataGrafico_hortifruticola[".viewFields"][] = "VEREDA";
$tdataGrafico_hortifruticola[".viewFields"][] = "VARIEDAD";
$tdataGrafico_hortifruticola[".viewFields"][] = "AREA";
$tdataGrafico_hortifruticola[".viewFields"][] = "PRODUCCION";
$tdataGrafico_hortifruticola[".viewFields"][] = "AÑO";

$tdataGrafico_hortifruticola[".addFields"] = array();
$tdataGrafico_hortifruticola[".addFields"][] = "VEREDA";
$tdataGrafico_hortifruticola[".addFields"][] = "VARIEDAD";
$tdataGrafico_hortifruticola[".addFields"][] = "AREA";
$tdataGrafico_hortifruticola[".addFields"][] = "AÑO";

$tdataGrafico_hortifruticola[".masterListFields"] = array();
$tdataGrafico_hortifruticola[".masterListFields"][] = "VEREDA";
$tdataGrafico_hortifruticola[".masterListFields"][] = "VARIEDAD";
$tdataGrafico_hortifruticola[".masterListFields"][] = "AREA";
$tdataGrafico_hortifruticola[".masterListFields"][] = "PRODUCCION";
$tdataGrafico_hortifruticola[".masterListFields"][] = "AÑO";

$tdataGrafico_hortifruticola[".inlineAddFields"] = array();
$tdataGrafico_hortifruticola[".inlineAddFields"][] = "VEREDA";
$tdataGrafico_hortifruticola[".inlineAddFields"][] = "VARIEDAD";
$tdataGrafico_hortifruticola[".inlineAddFields"][] = "AREA";
$tdataGrafico_hortifruticola[".inlineAddFields"][] = "AÑO";

$tdataGrafico_hortifruticola[".editFields"] = array();
$tdataGrafico_hortifruticola[".editFields"][] = "VEREDA";
$tdataGrafico_hortifruticola[".editFields"][] = "VARIEDAD";
$tdataGrafico_hortifruticola[".editFields"][] = "AREA";
$tdataGrafico_hortifruticola[".editFields"][] = "AÑO";

$tdataGrafico_hortifruticola[".inlineEditFields"] = array();
$tdataGrafico_hortifruticola[".inlineEditFields"][] = "VEREDA";
$tdataGrafico_hortifruticola[".inlineEditFields"][] = "VARIEDAD";
$tdataGrafico_hortifruticola[".inlineEditFields"][] = "AREA";
$tdataGrafico_hortifruticola[".inlineEditFields"][] = "AÑO";

$tdataGrafico_hortifruticola[".exportFields"] = array();
$tdataGrafico_hortifruticola[".exportFields"][] = "VEREDA";
$tdataGrafico_hortifruticola[".exportFields"][] = "VARIEDAD";
$tdataGrafico_hortifruticola[".exportFields"][] = "AREA";
$tdataGrafico_hortifruticola[".exportFields"][] = "PRODUCCION";
$tdataGrafico_hortifruticola[".exportFields"][] = "AÑO";

$tdataGrafico_hortifruticola[".importFields"] = array();
$tdataGrafico_hortifruticola[".importFields"][] = "VEREDA";
$tdataGrafico_hortifruticola[".importFields"][] = "VARIEDAD";
$tdataGrafico_hortifruticola[".importFields"][] = "AREA";
$tdataGrafico_hortifruticola[".importFields"][] = "PRODUCCION";
$tdataGrafico_hortifruticola[".importFields"][] = "AÑO";

$tdataGrafico_hortifruticola[".printFields"] = array();
$tdataGrafico_hortifruticola[".printFields"][] = "VEREDA";
$tdataGrafico_hortifruticola[".printFields"][] = "VARIEDAD";
$tdataGrafico_hortifruticola[".printFields"][] = "AREA";
$tdataGrafico_hortifruticola[".printFields"][] = "PRODUCCION";
$tdataGrafico_hortifruticola[".printFields"][] = "AÑO";

//	VEREDA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "VEREDA";
	$fdata["GoodName"] = "VEREDA";
	$fdata["ownerTable"] = "hortifruticola";
	$fdata["Label"] = GetFieldLabel("Grafico_hortifruticola","VEREDA");
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




	$tdataGrafico_hortifruticola["VEREDA"] = $fdata;
//	VARIEDAD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "VARIEDAD";
	$fdata["GoodName"] = "VARIEDAD";
	$fdata["ownerTable"] = "hortifruticola";
	$fdata["Label"] = GetFieldLabel("Grafico_hortifruticola","VARIEDAD");
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




	$tdataGrafico_hortifruticola["VARIEDAD"] = $fdata;
//	AREA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "AREA";
	$fdata["GoodName"] = "AREA";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Grafico_hortifruticola","AREA");
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




	$tdataGrafico_hortifruticola["AREA"] = $fdata;
//	PRODUCCION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "PRODUCCION";
	$fdata["GoodName"] = "PRODUCCION";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Grafico_hortifruticola","PRODUCCION");
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




	$tdataGrafico_hortifruticola["PRODUCCION"] = $fdata;
//	AÑO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "AÑO";
	$fdata["GoodName"] = "A_O";
	$fdata["ownerTable"] = "hortifruticola";
	$fdata["Label"] = GetFieldLabel("Grafico_hortifruticola","A_O");
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




	$tdataGrafico_hortifruticola["AÑO"] = $fdata;

	$tdataGrafico_hortifruticola[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">Grafico hortifruticola</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdataGrafico_hortifruticola[".chartXml"] .= '<attr value="0">
			<attr value="name">AREA</attr>';
	$tdataGrafico_hortifruticola[".chartXml"] .= '</attr>';
	$tdataGrafico_hortifruticola[".chartXml"] .= '<attr value="1">
			<attr value="name">PRODUCCION</attr>';
	$tdataGrafico_hortifruticola[".chartXml"] .= '</attr>';
	$tdataGrafico_hortifruticola[".chartXml"] .= '<attr value="2">
		<attr value="name">VEREDA</attr>
	</attr>';
	$tdataGrafico_hortifruticola[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdataGrafico_hortifruticola[".chartXml"] .= '<attr value="head">'.xmlencode("ESTAADISTICA HORTIFRUTICOLA").'</attr>
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
$tdataGrafico_hortifruticola[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdataGrafico_hortifruticola[".chartXml"] .= '<attr value="0">
		<attr value="name">VEREDA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Grafico_hortifruticola","VEREDA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataGrafico_hortifruticola[".chartXml"] .= '<attr value="1">
		<attr value="name">VARIEDAD</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Grafico_hortifruticola","VARIEDAD")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataGrafico_hortifruticola[".chartXml"] .= '<attr value="2">
		<attr value="name">AREA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Grafico_hortifruticola","AREA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataGrafico_hortifruticola[".chartXml"] .= '<attr value="3">
		<attr value="name">PRODUCCION</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Grafico_hortifruticola","PRODUCCION")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataGrafico_hortifruticola[".chartXml"] .= '<attr value="4">
		<attr value="name">AÑO</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Grafico_hortifruticola","A_O")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdataGrafico_hortifruticola[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">Grafico hortifruticola</attr>
<attr value="short_table_name">Grafico_hortifruticola</attr>
</attr>

</chart>';

$tables_data["Grafico hortifruticola"]=&$tdataGrafico_hortifruticola;
$field_labels["Grafico_hortifruticola"] = &$fieldLabelsGrafico_hortifruticola;
$fieldToolTips["Grafico_hortifruticola"] = &$fieldToolTipsGrafico_hortifruticola;
$page_titles["Grafico_hortifruticola"] = &$pageTitlesGrafico_hortifruticola;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Grafico hortifruticola"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Grafico hortifruticola"] = array();


	
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
					$masterTablesData["Grafico hortifruticola"][0] = $masterParams;
				$masterTablesData["Grafico hortifruticola"][0]["masterKeys"] = array();
	$masterTablesData["Grafico hortifruticola"][0]["masterKeys"][]="PROPIETARIO_CEDULA";
				$masterTablesData["Grafico hortifruticola"][0]["detailKeys"] = array();
	$masterTablesData["Grafico hortifruticola"][0]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Grafico_hortifruticola()
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
	"m_srcTableName" => "Grafico hortifruticola"
));

$proto6["m_sql"] = "VEREDA";
$proto6["m_srcTableName"] = "Grafico hortifruticola";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "VARIEDAD",
	"m_strTable" => "hortifruticola",
	"m_srcTableName" => "Grafico hortifruticola"
));

$proto8["m_sql"] = "VARIEDAD";
$proto8["m_srcTableName"] = "Grafico hortifruticola";
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
	"m_srcTableName" => "Grafico hortifruticola"
));

$proto11["m_arguments"][]=$obj;
$proto11["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto11);

$proto10["m_sql"] = "SUM(AREA)";
$proto10["m_srcTableName"] = "Grafico hortifruticola";
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
	"m_srcTableName" => "Grafico hortifruticola"
));

$proto14["m_arguments"][]=$obj;
$proto14["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto14);

$proto13["m_sql"] = "SUM(PRODUCCION_ANUAL)";
$proto13["m_srcTableName"] = "Grafico hortifruticola";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "PRODUCCION";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "hortifruticola",
	"m_srcTableName" => "Grafico hortifruticola"
));

$proto16["m_sql"] = "`AÑO`";
$proto16["m_srcTableName"] = "Grafico hortifruticola";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "hortifruticola";
$proto19["m_srcTableName"] = "Grafico hortifruticola";
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
$proto18["m_srcTableName"] = "Grafico hortifruticola";
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
	"m_srcTableName" => "Grafico hortifruticola"
));

$proto22["m_column"]=$obj;
$obj = new SQLGroupByItem($proto22);

$proto0["m_groupby"][]=$obj;
												$proto24=array();
						$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "hortifruticola",
	"m_srcTableName" => "Grafico hortifruticola"
));

$proto24["m_column"]=$obj;
$obj = new SQLGroupByItem($proto24);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Grafico hortifruticola";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Grafico_hortifruticola = createSqlQuery_Grafico_hortifruticola();


	
		;

					

$tdataGrafico_hortifruticola[".sqlquery"] = $queryData_Grafico_hortifruticola;

$tableEvents["Grafico hortifruticola"] = new eventsBase;
$tdataGrafico_hortifruticola[".hasEvents"] = false;

?>