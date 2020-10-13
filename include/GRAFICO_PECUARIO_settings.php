<?php
require_once(getabspath("classes/cipherer.php"));




$tdataGRAFICO_PECUARIO = array();
	$tdataGRAFICO_PECUARIO[".ShortName"] = "GRAFICO_PECUARIO";
	$tdataGRAFICO_PECUARIO[".OwnerID"] = "";
	$tdataGRAFICO_PECUARIO[".OriginalTable"] = "pecuario";

//	field labels
$fieldLabelsGRAFICO_PECUARIO = array();
$fieldToolTipsGRAFICO_PECUARIO = array();
$pageTitlesGRAFICO_PECUARIO = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsGRAFICO_PECUARIO["Spanish"] = array();
	$fieldToolTipsGRAFICO_PECUARIO["Spanish"] = array();
	$pageTitlesGRAFICO_PECUARIO["Spanish"] = array();
	$fieldLabelsGRAFICO_PECUARIO["Spanish"]["VEREDA"] = "VEREDA";
	$fieldToolTipsGRAFICO_PECUARIO["Spanish"]["VEREDA"] = "";
	$fieldLabelsGRAFICO_PECUARIO["Spanish"]["RAZA"] = "RAZA";
	$fieldToolTipsGRAFICO_PECUARIO["Spanish"]["RAZA"] = "";
	$fieldLabelsGRAFICO_PECUARIO["Spanish"]["AREA"] = "AREA";
	$fieldToolTipsGRAFICO_PECUARIO["Spanish"]["AREA"] = "";
	$fieldLabelsGRAFICO_PECUARIO["Spanish"]["A_O"] = "AÑO";
	$fieldToolTipsGRAFICO_PECUARIO["Spanish"]["A_O"] = "";
	$fieldLabelsGRAFICO_PECUARIO["Spanish"]["ANIMALES"] = "ANIMALES";
	$fieldToolTipsGRAFICO_PECUARIO["Spanish"]["ANIMALES"] = "";
	$fieldLabelsGRAFICO_PECUARIO["Spanish"]["PRODUCCION"] = "PRODUCCION";
	$fieldToolTipsGRAFICO_PECUARIO["Spanish"]["PRODUCCION"] = "";
	if (count($fieldToolTipsGRAFICO_PECUARIO["Spanish"]))
		$tdataGRAFICO_PECUARIO[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsGRAFICO_PECUARIO[""] = array();
	$fieldToolTipsGRAFICO_PECUARIO[""] = array();
	$pageTitlesGRAFICO_PECUARIO[""] = array();
	$fieldLabelsGRAFICO_PECUARIO[""]["VEREDA"] = "VEREDA";
	$fieldToolTipsGRAFICO_PECUARIO[""]["VEREDA"] = "";
	$fieldLabelsGRAFICO_PECUARIO[""]["RAZA"] = "RAZA";
	$fieldToolTipsGRAFICO_PECUARIO[""]["RAZA"] = "";
	$fieldLabelsGRAFICO_PECUARIO[""]["AREA"] = "AREA";
	$fieldToolTipsGRAFICO_PECUARIO[""]["AREA"] = "";
	$fieldLabelsGRAFICO_PECUARIO[""]["A_O"] = "AÑO";
	$fieldToolTipsGRAFICO_PECUARIO[""]["A_O"] = "";
	$fieldLabelsGRAFICO_PECUARIO[""]["ANIMALES"] = "ANIMALES";
	$fieldToolTipsGRAFICO_PECUARIO[""]["ANIMALES"] = "";
	$fieldLabelsGRAFICO_PECUARIO[""]["PRODUCCION"] = "PRODUCCION";
	$fieldToolTipsGRAFICO_PECUARIO[""]["PRODUCCION"] = "";
	if (count($fieldToolTipsGRAFICO_PECUARIO[""]))
		$tdataGRAFICO_PECUARIO[".isUseToolTips"] = true;
}


	$tdataGRAFICO_PECUARIO[".NCSearch"] = true;

	$tdataGRAFICO_PECUARIO[".ChartRefreshTime"] = 60;


$tdataGRAFICO_PECUARIO[".shortTableName"] = "GRAFICO_PECUARIO";
$tdataGRAFICO_PECUARIO[".nSecOptions"] = 0;
$tdataGRAFICO_PECUARIO[".recsPerRowPrint"] = 1;
$tdataGRAFICO_PECUARIO[".mainTableOwnerID"] = "";
$tdataGRAFICO_PECUARIO[".moveNext"] = 1;
$tdataGRAFICO_PECUARIO[".entityType"] = 3;

$tdataGRAFICO_PECUARIO[".strOriginalTableName"] = "pecuario";

	



$tdataGRAFICO_PECUARIO[".showAddInPopup"] = false;

$tdataGRAFICO_PECUARIO[".showEditInPopup"] = false;

$tdataGRAFICO_PECUARIO[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataGRAFICO_PECUARIO[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataGRAFICO_PECUARIO[".fieldsForRegister"] = array();

$tdataGRAFICO_PECUARIO[".listAjax"] = false;

	$tdataGRAFICO_PECUARIO[".audit"] = false;

	$tdataGRAFICO_PECUARIO[".locking"] = false;


$tdataGRAFICO_PECUARIO[".add"] = true;
$tdataGRAFICO_PECUARIO[".afterAddAction"] = 1;
$tdataGRAFICO_PECUARIO[".closePopupAfterAdd"] = 1;
$tdataGRAFICO_PECUARIO[".afterAddActionDetTable"] = "";

$tdataGRAFICO_PECUARIO[".list"] = true;






$tdataGRAFICO_PECUARIO[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataGRAFICO_PECUARIO[".searchSaving"] = false;
//

$tdataGRAFICO_PECUARIO[".showSearchPanel"] = true;
		$tdataGRAFICO_PECUARIO[".flexibleSearch"] = true;

$tdataGRAFICO_PECUARIO[".isUseAjaxSuggest"] = true;




$tdataGRAFICO_PECUARIO[".addPageEvents"] = false;

// use timepicker for search panel
$tdataGRAFICO_PECUARIO[".isUseTimeForSearch"] = false;



$tdataGRAFICO_PECUARIO[".badgeColor"] = "5BF276";


$tdataGRAFICO_PECUARIO[".allSearchFields"] = array();
$tdataGRAFICO_PECUARIO[".filterFields"] = array();
$tdataGRAFICO_PECUARIO[".requiredSearchFields"] = array();

$tdataGRAFICO_PECUARIO[".allSearchFields"][] = "VEREDA";
	$tdataGRAFICO_PECUARIO[".allSearchFields"][] = "RAZA";
	$tdataGRAFICO_PECUARIO[".allSearchFields"][] = "ANIMALES";
	$tdataGRAFICO_PECUARIO[".allSearchFields"][] = "AREA";
	$tdataGRAFICO_PECUARIO[".allSearchFields"][] = "PRODUCCION";
	$tdataGRAFICO_PECUARIO[".allSearchFields"][] = "AÑO";
	
$tdataGRAFICO_PECUARIO[".filterFields"][] = "VEREDA";
$tdataGRAFICO_PECUARIO[".filterFields"][] = "RAZA";
$tdataGRAFICO_PECUARIO[".filterFields"][] = "ANIMALES";
$tdataGRAFICO_PECUARIO[".filterFields"][] = "AREA";
$tdataGRAFICO_PECUARIO[".filterFields"][] = "PRODUCCION";
$tdataGRAFICO_PECUARIO[".filterFields"][] = "AÑO";

$tdataGRAFICO_PECUARIO[".googleLikeFields"] = array();
$tdataGRAFICO_PECUARIO[".googleLikeFields"][] = "VEREDA";
$tdataGRAFICO_PECUARIO[".googleLikeFields"][] = "RAZA";
$tdataGRAFICO_PECUARIO[".googleLikeFields"][] = "ANIMALES";
$tdataGRAFICO_PECUARIO[".googleLikeFields"][] = "AREA";
$tdataGRAFICO_PECUARIO[".googleLikeFields"][] = "PRODUCCION";
$tdataGRAFICO_PECUARIO[".googleLikeFields"][] = "AÑO";


$tdataGRAFICO_PECUARIO[".advSearchFields"] = array();
$tdataGRAFICO_PECUARIO[".advSearchFields"][] = "VEREDA";
$tdataGRAFICO_PECUARIO[".advSearchFields"][] = "RAZA";
$tdataGRAFICO_PECUARIO[".advSearchFields"][] = "ANIMALES";
$tdataGRAFICO_PECUARIO[".advSearchFields"][] = "AREA";
$tdataGRAFICO_PECUARIO[".advSearchFields"][] = "PRODUCCION";
$tdataGRAFICO_PECUARIO[".advSearchFields"][] = "AÑO";

$tdataGRAFICO_PECUARIO[".tableType"] = "chart";

$tdataGRAFICO_PECUARIO[".printerPageOrientation"] = 0;
$tdataGRAFICO_PECUARIO[".nPrinterPageScale"] = 100;

$tdataGRAFICO_PECUARIO[".nPrinterSplitRecords"] = 40;

$tdataGRAFICO_PECUARIO[".nPrinterPDFSplitRecords"] = 40;



$tdataGRAFICO_PECUARIO[".geocodingEnabled"] = false;



// chart settings
$tdataGRAFICO_PECUARIO[".chartType"] = "2DDoughnut";
// end of chart settings


$tdataGRAFICO_PECUARIO[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataGRAFICO_PECUARIO[".strOrderBy"] = $tstrOrderBy;

$tdataGRAFICO_PECUARIO[".orderindexes"] = array();

$tdataGRAFICO_PECUARIO[".sqlHead"] = "SELECT  DISTINCT VEREDA,  RAZA,  SUM(U_A)AS ANIMALES,  SUM(AREA) AS AREA,  SUM(PRODUCCION_ANUAL) AS PRODUCCION,  `AÑO`";
$tdataGRAFICO_PECUARIO[".sqlFrom"] = "FROM pecuario";
$tdataGRAFICO_PECUARIO[".sqlWhereExpr"] = "";
$tdataGRAFICO_PECUARIO[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataGRAFICO_PECUARIO[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataGRAFICO_PECUARIO[".arrGroupsPerPage"] = $arrGPP;

$tdataGRAFICO_PECUARIO[".highlightSearchResults"] = true;

$tableKeysGRAFICO_PECUARIO = array();
$tdataGRAFICO_PECUARIO[".Keys"] = $tableKeysGRAFICO_PECUARIO;

$tdataGRAFICO_PECUARIO[".listFields"] = array();
$tdataGRAFICO_PECUARIO[".listFields"][] = "VEREDA";
$tdataGRAFICO_PECUARIO[".listFields"][] = "RAZA";
$tdataGRAFICO_PECUARIO[".listFields"][] = "ANIMALES";
$tdataGRAFICO_PECUARIO[".listFields"][] = "AREA";
$tdataGRAFICO_PECUARIO[".listFields"][] = "PRODUCCION";
$tdataGRAFICO_PECUARIO[".listFields"][] = "AÑO";

$tdataGRAFICO_PECUARIO[".hideMobileList"] = array();


$tdataGRAFICO_PECUARIO[".viewFields"] = array();
$tdataGRAFICO_PECUARIO[".viewFields"][] = "VEREDA";
$tdataGRAFICO_PECUARIO[".viewFields"][] = "RAZA";
$tdataGRAFICO_PECUARIO[".viewFields"][] = "ANIMALES";
$tdataGRAFICO_PECUARIO[".viewFields"][] = "AREA";
$tdataGRAFICO_PECUARIO[".viewFields"][] = "PRODUCCION";
$tdataGRAFICO_PECUARIO[".viewFields"][] = "AÑO";

$tdataGRAFICO_PECUARIO[".addFields"] = array();
$tdataGRAFICO_PECUARIO[".addFields"][] = "VEREDA";
$tdataGRAFICO_PECUARIO[".addFields"][] = "RAZA";
$tdataGRAFICO_PECUARIO[".addFields"][] = "AREA";
$tdataGRAFICO_PECUARIO[".addFields"][] = "AÑO";

$tdataGRAFICO_PECUARIO[".masterListFields"] = array();
$tdataGRAFICO_PECUARIO[".masterListFields"][] = "VEREDA";
$tdataGRAFICO_PECUARIO[".masterListFields"][] = "RAZA";
$tdataGRAFICO_PECUARIO[".masterListFields"][] = "ANIMALES";
$tdataGRAFICO_PECUARIO[".masterListFields"][] = "AREA";
$tdataGRAFICO_PECUARIO[".masterListFields"][] = "PRODUCCION";
$tdataGRAFICO_PECUARIO[".masterListFields"][] = "AÑO";

$tdataGRAFICO_PECUARIO[".inlineAddFields"] = array();
$tdataGRAFICO_PECUARIO[".inlineAddFields"][] = "VEREDA";
$tdataGRAFICO_PECUARIO[".inlineAddFields"][] = "RAZA";
$tdataGRAFICO_PECUARIO[".inlineAddFields"][] = "AREA";
$tdataGRAFICO_PECUARIO[".inlineAddFields"][] = "AÑO";

$tdataGRAFICO_PECUARIO[".editFields"] = array();
$tdataGRAFICO_PECUARIO[".editFields"][] = "VEREDA";
$tdataGRAFICO_PECUARIO[".editFields"][] = "RAZA";
$tdataGRAFICO_PECUARIO[".editFields"][] = "AREA";
$tdataGRAFICO_PECUARIO[".editFields"][] = "AÑO";

$tdataGRAFICO_PECUARIO[".inlineEditFields"] = array();
$tdataGRAFICO_PECUARIO[".inlineEditFields"][] = "VEREDA";
$tdataGRAFICO_PECUARIO[".inlineEditFields"][] = "RAZA";
$tdataGRAFICO_PECUARIO[".inlineEditFields"][] = "AREA";
$tdataGRAFICO_PECUARIO[".inlineEditFields"][] = "AÑO";

$tdataGRAFICO_PECUARIO[".exportFields"] = array();
$tdataGRAFICO_PECUARIO[".exportFields"][] = "VEREDA";
$tdataGRAFICO_PECUARIO[".exportFields"][] = "RAZA";
$tdataGRAFICO_PECUARIO[".exportFields"][] = "ANIMALES";
$tdataGRAFICO_PECUARIO[".exportFields"][] = "AREA";
$tdataGRAFICO_PECUARIO[".exportFields"][] = "PRODUCCION";
$tdataGRAFICO_PECUARIO[".exportFields"][] = "AÑO";

$tdataGRAFICO_PECUARIO[".importFields"] = array();
$tdataGRAFICO_PECUARIO[".importFields"][] = "VEREDA";
$tdataGRAFICO_PECUARIO[".importFields"][] = "RAZA";
$tdataGRAFICO_PECUARIO[".importFields"][] = "ANIMALES";
$tdataGRAFICO_PECUARIO[".importFields"][] = "AREA";
$tdataGRAFICO_PECUARIO[".importFields"][] = "PRODUCCION";
$tdataGRAFICO_PECUARIO[".importFields"][] = "AÑO";

$tdataGRAFICO_PECUARIO[".printFields"] = array();
$tdataGRAFICO_PECUARIO[".printFields"][] = "VEREDA";
$tdataGRAFICO_PECUARIO[".printFields"][] = "RAZA";
$tdataGRAFICO_PECUARIO[".printFields"][] = "ANIMALES";
$tdataGRAFICO_PECUARIO[".printFields"][] = "AREA";
$tdataGRAFICO_PECUARIO[".printFields"][] = "PRODUCCION";
$tdataGRAFICO_PECUARIO[".printFields"][] = "AÑO";

//	VEREDA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "VEREDA";
	$fdata["GoodName"] = "VEREDA";
	$fdata["ownerTable"] = "pecuario";
	$fdata["Label"] = GetFieldLabel("GRAFICO_PECUARIO","VEREDA");
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


	$tdataGRAFICO_PECUARIO["VEREDA"] = $fdata;
//	RAZA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "RAZA";
	$fdata["GoodName"] = "RAZA";
	$fdata["ownerTable"] = "pecuario";
	$fdata["Label"] = GetFieldLabel("GRAFICO_PECUARIO","RAZA");
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

		$fdata["strField"] = "RAZA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RAZA";

	
	
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
	$edata["LookupValues"][] = "--------VARIEDADES VOVINOS------";
	$edata["LookupValues"][] = "Angus ";
	$edata["LookupValues"][] = "Ayrshire";
	$edata["LookupValues"][] = "Blanco orejinegro";
	$edata["LookupValues"][] = "Brahman";
	$edata["LookupValues"][] = "Casanareño";
	$edata["LookupValues"][] = "Chino santandereano";
	$edata["LookupValues"][] = "Criollo";
	$edata["LookupValues"][] = "Cebú";
	$edata["LookupValues"][] = "Holstein";
	$edata["LookupValues"][] = "Jersey";
	$edata["LookupValues"][] = "Lucerna";
	$edata["LookupValues"][] = "Mestizo";
	$edata["LookupValues"][] = "Normando";
	$edata["LookupValues"][] = "Pardo Suizo";
	$edata["LookupValues"][] = "Romosinuano";
	$edata["LookupValues"][] = "Siboney";
	$edata["LookupValues"][] = "Simental";
	$edata["LookupValues"][] = "Otro";
	$edata["LookupValues"][] = "--------VARIEDADES PORCINOS------";
	$edata["LookupValues"][] = "Care Palo";
	$edata["LookupValues"][] = "Casco de Mula";
	$edata["LookupValues"][] = "Chocoano";
	$edata["LookupValues"][] = "Congo";
	$edata["LookupValues"][] = "Curí";
	$edata["LookupValues"][] = "Duroc";
	$edata["LookupValues"][] = "Zungo";
	$edata["LookupValues"][] = "Choncho";
	$edata["LookupValues"][] = "Otro";
	$edata["LookupValues"][] = "------VARIEDADES OVINOS-CAPRINOS-----";
	$edata["LookupValues"][] = "LaMancha";
	$edata["LookupValues"][] = "Saanen";
	$edata["LookupValues"][] = "Toggenburg";
	$edata["LookupValues"][] = "Boer";
	$edata["LookupValues"][] = "Española";
	$edata["LookupValues"][] = "Criolla";
	$edata["LookupValues"][] = "Anglo-Nubian";
	$edata["LookupValues"][] = "Angora";
	$edata["LookupValues"][] = "Katahdin";
	$edata["LookupValues"][] = "Santa Ines";
	$edata["LookupValues"][] = "Dorper";
	$edata["LookupValues"][] = "Pelibuey";
	$edata["LookupValues"][] = "Charollais";
	$edata["LookupValues"][] = "Otro";
	$edata["LookupValues"][] = "--------VARIEDAD ACUICOLA-----";
	$edata["LookupValues"][] = "Bocachico";
	$edata["LookupValues"][] = "Cachama";
	$edata["LookupValues"][] = "Carpa";
	$edata["LookupValues"][] = "Tilapia";
	$edata["LookupValues"][] = "Trucha";
	$edata["LookupValues"][] = "otro";

	
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


	$tdataGRAFICO_PECUARIO["RAZA"] = $fdata;
//	ANIMALES
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ANIMALES";
	$fdata["GoodName"] = "ANIMALES";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("GRAFICO_PECUARIO","ANIMALES");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ANIMALES";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(U_A)";

	
	
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


	$tdataGRAFICO_PECUARIO["ANIMALES"] = $fdata;
//	AREA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "AREA";
	$fdata["GoodName"] = "AREA";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("GRAFICO_PECUARIO","AREA");
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


	$tdataGRAFICO_PECUARIO["AREA"] = $fdata;
//	PRODUCCION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "PRODUCCION";
	$fdata["GoodName"] = "PRODUCCION";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("GRAFICO_PECUARIO","PRODUCCION");
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


	$tdataGRAFICO_PECUARIO["PRODUCCION"] = $fdata;
//	AÑO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "AÑO";
	$fdata["GoodName"] = "A_O";
	$fdata["ownerTable"] = "pecuario";
	$fdata["Label"] = GetFieldLabel("GRAFICO_PECUARIO","A_O");
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


	$tdataGRAFICO_PECUARIO["AÑO"] = $fdata;

	$tdataGRAFICO_PECUARIO[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">GRAFICO PECUARIO</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_doughnut</attr>
		</attr>

		<attr value="parameters">';
	$tdataGRAFICO_PECUARIO[".chartXml"] .= '<attr value="0">
			<attr value="name">ANIMALES</attr>';
	$tdataGRAFICO_PECUARIO[".chartXml"] .= '</attr>';
	$tdataGRAFICO_PECUARIO[".chartXml"] .= '<attr value="1">
			<attr value="name">AREA</attr>';
	$tdataGRAFICO_PECUARIO[".chartXml"] .= '</attr>';
	$tdataGRAFICO_PECUARIO[".chartXml"] .= '<attr value="2">
			<attr value="name">PRODUCCION</attr>';
	$tdataGRAFICO_PECUARIO[".chartXml"] .= '</attr>';
	$tdataGRAFICO_PECUARIO[".chartXml"] .= '<attr value="3">
		<attr value="name">VEREDA</attr>
	</attr>';
	$tdataGRAFICO_PECUARIO[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdataGRAFICO_PECUARIO[".chartXml"] .= '<attr value="head">'.xmlencode("").'</attr>
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
$tdataGRAFICO_PECUARIO[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdataGRAFICO_PECUARIO[".chartXml"] .= '<attr value="0">
		<attr value="name">VEREDA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("GRAFICO_PECUARIO","VEREDA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataGRAFICO_PECUARIO[".chartXml"] .= '<attr value="1">
		<attr value="name">RAZA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("GRAFICO_PECUARIO","RAZA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataGRAFICO_PECUARIO[".chartXml"] .= '<attr value="2">
		<attr value="name">ANIMALES</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("GRAFICO_PECUARIO","ANIMALES")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataGRAFICO_PECUARIO[".chartXml"] .= '<attr value="3">
		<attr value="name">AREA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("GRAFICO_PECUARIO","AREA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataGRAFICO_PECUARIO[".chartXml"] .= '<attr value="4">
		<attr value="name">PRODUCCION</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("GRAFICO_PECUARIO","PRODUCCION")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataGRAFICO_PECUARIO[".chartXml"] .= '<attr value="5">
		<attr value="name">AÑO</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("GRAFICO_PECUARIO","A_O")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdataGRAFICO_PECUARIO[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">GRAFICO PECUARIO</attr>
<attr value="short_table_name">GRAFICO_PECUARIO</attr>
</attr>

</chart>';

$tables_data["GRAFICO PECUARIO"]=&$tdataGRAFICO_PECUARIO;
$field_labels["GRAFICO_PECUARIO"] = &$fieldLabelsGRAFICO_PECUARIO;
$fieldToolTips["GRAFICO_PECUARIO"] = &$fieldToolTipsGRAFICO_PECUARIO;
$page_titles["GRAFICO_PECUARIO"] = &$pageTitlesGRAFICO_PECUARIO;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["GRAFICO PECUARIO"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["GRAFICO PECUARIO"] = array();


	
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
					$masterTablesData["GRAFICO PECUARIO"][0] = $masterParams;
				$masterTablesData["GRAFICO PECUARIO"][0]["masterKeys"] = array();
	$masterTablesData["GRAFICO PECUARIO"][0]["masterKeys"][]="PROPIETARIO_CEDULA";
				$masterTablesData["GRAFICO PECUARIO"][0]["detailKeys"] = array();
	$masterTablesData["GRAFICO PECUARIO"][0]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_GRAFICO_PECUARIO()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT  DISTINCT";
$proto0["m_strFieldList"] = "VEREDA,  RAZA,  SUM(U_A)AS ANIMALES,  SUM(AREA) AS AREA,  SUM(PRODUCCION_ANUAL) AS PRODUCCION,  `AÑO`";
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
	"m_srcTableName" => "GRAFICO PECUARIO"
));

$proto6["m_sql"] = "VEREDA";
$proto6["m_srcTableName"] = "GRAFICO PECUARIO";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "RAZA",
	"m_strTable" => "pecuario",
	"m_srcTableName" => "GRAFICO PECUARIO"
));

$proto8["m_sql"] = "RAZA";
$proto8["m_srcTableName"] = "GRAFICO PECUARIO";
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
	"m_srcTableName" => "GRAFICO PECUARIO"
));

$proto11["m_arguments"][]=$obj;
$proto11["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto11);

$proto10["m_sql"] = "SUM(U_A)";
$proto10["m_srcTableName"] = "GRAFICO PECUARIO";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "ANIMALES";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$proto14=array();
$proto14["m_functiontype"] = "SQLF_SUM";
$proto14["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "AREA",
	"m_strTable" => "pecuario",
	"m_srcTableName" => "GRAFICO PECUARIO"
));

$proto14["m_arguments"][]=$obj;
$proto14["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto14);

$proto13["m_sql"] = "SUM(AREA)";
$proto13["m_srcTableName"] = "GRAFICO PECUARIO";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "AREA";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$proto17=array();
$proto17["m_functiontype"] = "SQLF_SUM";
$proto17["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "PRODUCCION_ANUAL",
	"m_strTable" => "pecuario",
	"m_srcTableName" => "GRAFICO PECUARIO"
));

$proto17["m_arguments"][]=$obj;
$proto17["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto17);

$proto16["m_sql"] = "SUM(PRODUCCION_ANUAL)";
$proto16["m_srcTableName"] = "GRAFICO PECUARIO";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "PRODUCCION";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "pecuario",
	"m_srcTableName" => "GRAFICO PECUARIO"
));

$proto19["m_sql"] = "`AÑO`";
$proto19["m_srcTableName"] = "GRAFICO PECUARIO";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "pecuario";
$proto22["m_srcTableName"] = "GRAFICO PECUARIO";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "ID";
$proto22["m_columns"][] = "FINCA_PROPIETARIO_CEDULA";
$proto22["m_columns"][] = "NOMBRE";
$proto22["m_columns"][] = "VEREDA";
$proto22["m_columns"][] = "FINCA";
$proto22["m_columns"][] = "RAZA";
$proto22["m_columns"][] = "U_A";
$proto22["m_columns"][] = "AREA";
$proto22["m_columns"][] = "PRODUCCION_ANUAL";
$proto22["m_columns"][] = "AÑO";
$obj = new SQLTable($proto22);

$proto21["m_table"] = $obj;
$proto21["m_sql"] = "pecuario";
$proto21["m_alias"] = "";
$proto21["m_srcTableName"] = "GRAFICO PECUARIO";
$proto23=array();
$proto23["m_sql"] = "";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto23["m_column"]=$obj;
$proto23["m_contained"] = array();
$proto23["m_strCase"] = "";
$proto23["m_havingmode"] = false;
$proto23["m_inBrackets"] = false;
$proto23["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto23);

$proto21["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto21);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto25=array();
						$obj = new SQLField(array(
	"m_strName" => "VEREDA",
	"m_strTable" => "pecuario",
	"m_srcTableName" => "GRAFICO PECUARIO"
));

$proto25["m_column"]=$obj;
$obj = new SQLGroupByItem($proto25);

$proto0["m_groupby"][]=$obj;
												$proto27=array();
						$obj = new SQLField(array(
	"m_strName" => "RAZA",
	"m_strTable" => "pecuario",
	"m_srcTableName" => "GRAFICO PECUARIO"
));

$proto27["m_column"]=$obj;
$obj = new SQLGroupByItem($proto27);

$proto0["m_groupby"][]=$obj;
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "pecuario",
	"m_srcTableName" => "GRAFICO PECUARIO"
));

$proto29["m_column"]=$obj;
$obj = new SQLGroupByItem($proto29);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="GRAFICO PECUARIO";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_GRAFICO_PECUARIO = createSqlQuery_GRAFICO_PECUARIO();


	
		;

						

$tdataGRAFICO_PECUARIO[".sqlquery"] = $queryData_GRAFICO_PECUARIO;

$tableEvents["GRAFICO PECUARIO"] = new eventsBase;
$tdataGRAFICO_PECUARIO[".hasEvents"] = false;

?>