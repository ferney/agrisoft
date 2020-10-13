<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapecuario_Chart = array();
	$tdatapecuario_Chart[".ShortName"] = "pecuario_Chart";
	$tdatapecuario_Chart[".OwnerID"] = "";
	$tdatapecuario_Chart[".OriginalTable"] = "pecuario";

//	field labels
$fieldLabelspecuario_Chart = array();
$fieldToolTipspecuario_Chart = array();
$pageTitlespecuario_Chart = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspecuario_Chart["Spanish"] = array();
	$fieldToolTipspecuario_Chart["Spanish"] = array();
	$pageTitlespecuario_Chart["Spanish"] = array();
	$fieldLabelspecuario_Chart["Spanish"]["VEREDA"] = "VEREDA";
	$fieldToolTipspecuario_Chart["Spanish"]["VEREDA"] = "";
	$fieldLabelspecuario_Chart["Spanish"]["RAZA"] = "RAZA";
	$fieldToolTipspecuario_Chart["Spanish"]["RAZA"] = "";
	$fieldLabelspecuario_Chart["Spanish"]["AREA"] = "AREA";
	$fieldToolTipspecuario_Chart["Spanish"]["AREA"] = "";
	$fieldLabelspecuario_Chart["Spanish"]["A_O"] = "AÑO";
	$fieldToolTipspecuario_Chart["Spanish"]["A_O"] = "";
	$fieldLabelspecuario_Chart["Spanish"]["UNIDADES"] = "UNIDADES";
	$fieldToolTipspecuario_Chart["Spanish"]["UNIDADES"] = "";
	$fieldLabelspecuario_Chart["Spanish"]["PRODUCCION"] = "PRODUCCION";
	$fieldToolTipspecuario_Chart["Spanish"]["PRODUCCION"] = "";
	if (count($fieldToolTipspecuario_Chart["Spanish"]))
		$tdatapecuario_Chart[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspecuario_Chart[""] = array();
	$fieldToolTipspecuario_Chart[""] = array();
	$pageTitlespecuario_Chart[""] = array();
	$fieldLabelspecuario_Chart[""]["VEREDA"] = "VEREDA";
	$fieldToolTipspecuario_Chart[""]["VEREDA"] = "";
	$fieldLabelspecuario_Chart[""]["RAZA"] = "RAZA";
	$fieldToolTipspecuario_Chart[""]["RAZA"] = "";
	$fieldLabelspecuario_Chart[""]["AREA"] = "AREA";
	$fieldToolTipspecuario_Chart[""]["AREA"] = "";
	$fieldLabelspecuario_Chart[""]["A_O"] = "AÑO";
	$fieldToolTipspecuario_Chart[""]["A_O"] = "";
	$fieldLabelspecuario_Chart[""]["UNIDADES"] = "UNIDADES";
	$fieldToolTipspecuario_Chart[""]["UNIDADES"] = "";
	$fieldLabelspecuario_Chart[""]["PRODUCCION"] = "PRODUCCION";
	$fieldToolTipspecuario_Chart[""]["PRODUCCION"] = "";
	if (count($fieldToolTipspecuario_Chart[""]))
		$tdatapecuario_Chart[".isUseToolTips"] = true;
}


	$tdatapecuario_Chart[".NCSearch"] = true;

	$tdatapecuario_Chart[".ChartRefreshTime"] = 0;


$tdatapecuario_Chart[".shortTableName"] = "pecuario_Chart";
$tdatapecuario_Chart[".nSecOptions"] = 0;
$tdatapecuario_Chart[".recsPerRowPrint"] = 1;
$tdatapecuario_Chart[".mainTableOwnerID"] = "";
$tdatapecuario_Chart[".moveNext"] = 1;
$tdatapecuario_Chart[".entityType"] = 3;

$tdatapecuario_Chart[".strOriginalTableName"] = "pecuario";

	



$tdatapecuario_Chart[".showAddInPopup"] = false;

$tdatapecuario_Chart[".showEditInPopup"] = false;

$tdatapecuario_Chart[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapecuario_Chart[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapecuario_Chart[".fieldsForRegister"] = array();

$tdatapecuario_Chart[".listAjax"] = false;

	$tdatapecuario_Chart[".audit"] = false;

	$tdatapecuario_Chart[".locking"] = false;


$tdatapecuario_Chart[".add"] = true;
$tdatapecuario_Chart[".afterAddAction"] = 1;
$tdatapecuario_Chart[".closePopupAfterAdd"] = 1;
$tdatapecuario_Chart[".afterAddActionDetTable"] = "";

$tdatapecuario_Chart[".list"] = true;






$tdatapecuario_Chart[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatapecuario_Chart[".searchSaving"] = false;
//

$tdatapecuario_Chart[".showSearchPanel"] = true;
		$tdatapecuario_Chart[".flexibleSearch"] = true;

$tdatapecuario_Chart[".isUseAjaxSuggest"] = true;




$tdatapecuario_Chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapecuario_Chart[".isUseTimeForSearch"] = false;





$tdatapecuario_Chart[".allSearchFields"] = array();
$tdatapecuario_Chart[".filterFields"] = array();
$tdatapecuario_Chart[".requiredSearchFields"] = array();

$tdatapecuario_Chart[".allSearchFields"][] = "VEREDA";
	$tdatapecuario_Chart[".allSearchFields"][] = "RAZA";
	$tdatapecuario_Chart[".allSearchFields"][] = "UNIDADES";
	$tdatapecuario_Chart[".allSearchFields"][] = "AREA";
	$tdatapecuario_Chart[".allSearchFields"][] = "PRODUCCION";
	$tdatapecuario_Chart[".allSearchFields"][] = "AÑO";
	
$tdatapecuario_Chart[".filterFields"][] = "VEREDA";
$tdatapecuario_Chart[".filterFields"][] = "RAZA";
$tdatapecuario_Chart[".filterFields"][] = "UNIDADES";
$tdatapecuario_Chart[".filterFields"][] = "AREA";
$tdatapecuario_Chart[".filterFields"][] = "PRODUCCION";
$tdatapecuario_Chart[".filterFields"][] = "AÑO";

$tdatapecuario_Chart[".googleLikeFields"] = array();
$tdatapecuario_Chart[".googleLikeFields"][] = "VEREDA";
$tdatapecuario_Chart[".googleLikeFields"][] = "RAZA";
$tdatapecuario_Chart[".googleLikeFields"][] = "UNIDADES";
$tdatapecuario_Chart[".googleLikeFields"][] = "AREA";
$tdatapecuario_Chart[".googleLikeFields"][] = "PRODUCCION";
$tdatapecuario_Chart[".googleLikeFields"][] = "AÑO";


$tdatapecuario_Chart[".advSearchFields"] = array();
$tdatapecuario_Chart[".advSearchFields"][] = "VEREDA";
$tdatapecuario_Chart[".advSearchFields"][] = "RAZA";
$tdatapecuario_Chart[".advSearchFields"][] = "UNIDADES";
$tdatapecuario_Chart[".advSearchFields"][] = "AREA";
$tdatapecuario_Chart[".advSearchFields"][] = "PRODUCCION";
$tdatapecuario_Chart[".advSearchFields"][] = "AÑO";

$tdatapecuario_Chart[".tableType"] = "chart";

$tdatapecuario_Chart[".printerPageOrientation"] = 0;
$tdatapecuario_Chart[".nPrinterPageScale"] = 100;

$tdatapecuario_Chart[".nPrinterSplitRecords"] = 40;

$tdatapecuario_Chart[".nPrinterPDFSplitRecords"] = 40;



$tdatapecuario_Chart[".geocodingEnabled"] = false;



// chart settings
$tdatapecuario_Chart[".chartType"] = "2DColumn";
// end of chart settings


$tdatapecuario_Chart[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapecuario_Chart[".strOrderBy"] = $tstrOrderBy;

$tdatapecuario_Chart[".orderindexes"] = array();

$tdatapecuario_Chart[".sqlHead"] = "SELECT VEREDA,  RAZA,  SUM(U_A) AS UNIDADES,  AREA,  SUM(PRODUCCION_ANUAL) AS PRODUCCION,  `AÑO`";
$tdatapecuario_Chart[".sqlFrom"] = "FROM pecuario";
$tdatapecuario_Chart[".sqlWhereExpr"] = "";
$tdatapecuario_Chart[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapecuario_Chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapecuario_Chart[".arrGroupsPerPage"] = $arrGPP;

$tdatapecuario_Chart[".highlightSearchResults"] = true;

$tableKeyspecuario_Chart = array();
$tdatapecuario_Chart[".Keys"] = $tableKeyspecuario_Chart;

$tdatapecuario_Chart[".listFields"] = array();
$tdatapecuario_Chart[".listFields"][] = "VEREDA";
$tdatapecuario_Chart[".listFields"][] = "RAZA";
$tdatapecuario_Chart[".listFields"][] = "UNIDADES";
$tdatapecuario_Chart[".listFields"][] = "AREA";
$tdatapecuario_Chart[".listFields"][] = "PRODUCCION";
$tdatapecuario_Chart[".listFields"][] = "AÑO";

$tdatapecuario_Chart[".hideMobileList"] = array();


$tdatapecuario_Chart[".viewFields"] = array();
$tdatapecuario_Chart[".viewFields"][] = "VEREDA";
$tdatapecuario_Chart[".viewFields"][] = "RAZA";
$tdatapecuario_Chart[".viewFields"][] = "UNIDADES";
$tdatapecuario_Chart[".viewFields"][] = "AREA";
$tdatapecuario_Chart[".viewFields"][] = "PRODUCCION";
$tdatapecuario_Chart[".viewFields"][] = "AÑO";

$tdatapecuario_Chart[".addFields"] = array();
$tdatapecuario_Chart[".addFields"][] = "VEREDA";
$tdatapecuario_Chart[".addFields"][] = "RAZA";
$tdatapecuario_Chart[".addFields"][] = "AREA";
$tdatapecuario_Chart[".addFields"][] = "AÑO";

$tdatapecuario_Chart[".masterListFields"] = array();
$tdatapecuario_Chart[".masterListFields"][] = "VEREDA";
$tdatapecuario_Chart[".masterListFields"][] = "RAZA";
$tdatapecuario_Chart[".masterListFields"][] = "UNIDADES";
$tdatapecuario_Chart[".masterListFields"][] = "AREA";
$tdatapecuario_Chart[".masterListFields"][] = "PRODUCCION";
$tdatapecuario_Chart[".masterListFields"][] = "AÑO";

$tdatapecuario_Chart[".inlineAddFields"] = array();
$tdatapecuario_Chart[".inlineAddFields"][] = "VEREDA";
$tdatapecuario_Chart[".inlineAddFields"][] = "RAZA";
$tdatapecuario_Chart[".inlineAddFields"][] = "AREA";
$tdatapecuario_Chart[".inlineAddFields"][] = "AÑO";

$tdatapecuario_Chart[".editFields"] = array();
$tdatapecuario_Chart[".editFields"][] = "VEREDA";
$tdatapecuario_Chart[".editFields"][] = "RAZA";
$tdatapecuario_Chart[".editFields"][] = "AREA";
$tdatapecuario_Chart[".editFields"][] = "AÑO";

$tdatapecuario_Chart[".inlineEditFields"] = array();
$tdatapecuario_Chart[".inlineEditFields"][] = "VEREDA";
$tdatapecuario_Chart[".inlineEditFields"][] = "RAZA";
$tdatapecuario_Chart[".inlineEditFields"][] = "AREA";
$tdatapecuario_Chart[".inlineEditFields"][] = "AÑO";

$tdatapecuario_Chart[".exportFields"] = array();
$tdatapecuario_Chart[".exportFields"][] = "VEREDA";
$tdatapecuario_Chart[".exportFields"][] = "RAZA";
$tdatapecuario_Chart[".exportFields"][] = "UNIDADES";
$tdatapecuario_Chart[".exportFields"][] = "AREA";
$tdatapecuario_Chart[".exportFields"][] = "PRODUCCION";
$tdatapecuario_Chart[".exportFields"][] = "AÑO";

$tdatapecuario_Chart[".importFields"] = array();
$tdatapecuario_Chart[".importFields"][] = "VEREDA";
$tdatapecuario_Chart[".importFields"][] = "RAZA";
$tdatapecuario_Chart[".importFields"][] = "UNIDADES";
$tdatapecuario_Chart[".importFields"][] = "AREA";
$tdatapecuario_Chart[".importFields"][] = "PRODUCCION";
$tdatapecuario_Chart[".importFields"][] = "AÑO";

$tdatapecuario_Chart[".printFields"] = array();
$tdatapecuario_Chart[".printFields"][] = "VEREDA";
$tdatapecuario_Chart[".printFields"][] = "RAZA";
$tdatapecuario_Chart[".printFields"][] = "UNIDADES";
$tdatapecuario_Chart[".printFields"][] = "AREA";
$tdatapecuario_Chart[".printFields"][] = "PRODUCCION";
$tdatapecuario_Chart[".printFields"][] = "AÑO";

//	VEREDA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "VEREDA";
	$fdata["GoodName"] = "VEREDA";
	$fdata["ownerTable"] = "pecuario";
	$fdata["Label"] = GetFieldLabel("pecuario_Chart","VEREDA");
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


	$tdatapecuario_Chart["VEREDA"] = $fdata;
//	RAZA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "RAZA";
	$fdata["GoodName"] = "RAZA";
	$fdata["ownerTable"] = "pecuario";
	$fdata["Label"] = GetFieldLabel("pecuario_Chart","RAZA");
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


	$tdatapecuario_Chart["RAZA"] = $fdata;
//	UNIDADES
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "UNIDADES";
	$fdata["GoodName"] = "UNIDADES";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("pecuario_Chart","UNIDADES");
	$fdata["FieldType"] = 14;

	
	
	
			
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


	$tdatapecuario_Chart["UNIDADES"] = $fdata;
//	AREA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "AREA";
	$fdata["GoodName"] = "AREA";
	$fdata["ownerTable"] = "pecuario";
	$fdata["Label"] = GetFieldLabel("pecuario_Chart","AREA");
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


	$tdatapecuario_Chart["AREA"] = $fdata;
//	PRODUCCION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "PRODUCCION";
	$fdata["GoodName"] = "PRODUCCION";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("pecuario_Chart","PRODUCCION");
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


	$tdatapecuario_Chart["PRODUCCION"] = $fdata;
//	AÑO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "AÑO";
	$fdata["GoodName"] = "A_O";
	$fdata["ownerTable"] = "pecuario";
	$fdata["Label"] = GetFieldLabel("pecuario_Chart","A_O");
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


	$tdatapecuario_Chart["AÑO"] = $fdata;

	$tdatapecuario_Chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">pecuario Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdatapecuario_Chart[".chartXml"] .= '<attr value="0">
			<attr value="name">UNIDADES</attr>';
	$tdatapecuario_Chart[".chartXml"] .= '</attr>';
	$tdatapecuario_Chart[".chartXml"] .= '<attr value="1">
			<attr value="name">AREA</attr>';
	$tdatapecuario_Chart[".chartXml"] .= '</attr>';
	$tdatapecuario_Chart[".chartXml"] .= '<attr value="2">
			<attr value="name">PRODUCCION</attr>';
	$tdatapecuario_Chart[".chartXml"] .= '</attr>';
	$tdatapecuario_Chart[".chartXml"] .= '<attr value="3">
		<attr value="name">RAZA</attr>
	</attr>';
	$tdatapecuario_Chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatapecuario_Chart[".chartXml"] .= '<attr value="head">'.xmlencode("").'</attr>
<attr value="foot">'.xmlencode("").'</attr>
<attr value="y_axis_label">'.xmlencode("").'</attr>


<attr value="slegend">false</attr>
<attr value="sgrid">false</attr>
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
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>';
$tdatapecuario_Chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatapecuario_Chart[".chartXml"] .= '<attr value="0">
		<attr value="name">VEREDA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("pecuario_Chart","VEREDA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatapecuario_Chart[".chartXml"] .= '<attr value="1">
		<attr value="name">RAZA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("pecuario_Chart","RAZA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatapecuario_Chart[".chartXml"] .= '<attr value="2">
		<attr value="name">UNIDADES</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("pecuario_Chart","UNIDADES")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatapecuario_Chart[".chartXml"] .= '<attr value="3">
		<attr value="name">AREA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("pecuario_Chart","AREA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatapecuario_Chart[".chartXml"] .= '<attr value="4">
		<attr value="name">PRODUCCION</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("pecuario_Chart","PRODUCCION")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatapecuario_Chart[".chartXml"] .= '<attr value="5">
		<attr value="name">AÑO</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("pecuario_Chart","A_O")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatapecuario_Chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">pecuario Chart</attr>
<attr value="short_table_name">pecuario_Chart</attr>
</attr>

</chart>';

$tables_data["pecuario Chart"]=&$tdatapecuario_Chart;
$field_labels["pecuario_Chart"] = &$fieldLabelspecuario_Chart;
$fieldToolTips["pecuario_Chart"] = &$fieldToolTipspecuario_Chart;
$page_titles["pecuario_Chart"] = &$pageTitlespecuario_Chart;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["pecuario Chart"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["pecuario Chart"] = array();


	
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
					$masterTablesData["pecuario Chart"][0] = $masterParams;
				$masterTablesData["pecuario Chart"][0]["masterKeys"] = array();
	$masterTablesData["pecuario Chart"][0]["masterKeys"][]="PROPIETARIO_CEDULA";
				$masterTablesData["pecuario Chart"][0]["detailKeys"] = array();
	$masterTablesData["pecuario Chart"][0]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_pecuario_Chart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "VEREDA,  RAZA,  SUM(U_A) AS UNIDADES,  AREA,  SUM(PRODUCCION_ANUAL) AS PRODUCCION,  `AÑO`";
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
	"m_srcTableName" => "pecuario Chart"
));

$proto6["m_sql"] = "VEREDA";
$proto6["m_srcTableName"] = "pecuario Chart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "RAZA",
	"m_strTable" => "pecuario",
	"m_srcTableName" => "pecuario Chart"
));

$proto8["m_sql"] = "RAZA";
$proto8["m_srcTableName"] = "pecuario Chart";
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
	"m_srcTableName" => "pecuario Chart"
));

$proto11["m_arguments"][]=$obj;
$proto11["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto11);

$proto10["m_sql"] = "SUM(U_A)";
$proto10["m_srcTableName"] = "pecuario Chart";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "UNIDADES";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "AREA",
	"m_strTable" => "pecuario",
	"m_srcTableName" => "pecuario Chart"
));

$proto13["m_sql"] = "AREA";
$proto13["m_srcTableName"] = "pecuario Chart";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$proto16=array();
$proto16["m_functiontype"] = "SQLF_SUM";
$proto16["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "PRODUCCION_ANUAL",
	"m_strTable" => "pecuario",
	"m_srcTableName" => "pecuario Chart"
));

$proto16["m_arguments"][]=$obj;
$proto16["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto16);

$proto15["m_sql"] = "SUM(PRODUCCION_ANUAL)";
$proto15["m_srcTableName"] = "pecuario Chart";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "PRODUCCION";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "pecuario",
	"m_srcTableName" => "pecuario Chart"
));

$proto18["m_sql"] = "`AÑO`";
$proto18["m_srcTableName"] = "pecuario Chart";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "pecuario";
$proto21["m_srcTableName"] = "pecuario Chart";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "ID";
$proto21["m_columns"][] = "FINCA_PROPIETARIO_CEDULA";
$proto21["m_columns"][] = "NOMBRE";
$proto21["m_columns"][] = "VEREDA";
$proto21["m_columns"][] = "FINCA";
$proto21["m_columns"][] = "RAZA";
$proto21["m_columns"][] = "U_A";
$proto21["m_columns"][] = "AREA";
$proto21["m_columns"][] = "PRODUCCION_ANUAL";
$proto21["m_columns"][] = "AÑO";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "pecuario";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "pecuario Chart";
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
	"m_strTable" => "pecuario",
	"m_srcTableName" => "pecuario Chart"
));

$proto24["m_column"]=$obj;
$obj = new SQLGroupByItem($proto24);

$proto0["m_groupby"][]=$obj;
												$proto26=array();
						$obj = new SQLField(array(
	"m_strName" => "RAZA",
	"m_strTable" => "pecuario",
	"m_srcTableName" => "pecuario Chart"
));

$proto26["m_column"]=$obj;
$obj = new SQLGroupByItem($proto26);

$proto0["m_groupby"][]=$obj;
												$proto28=array();
						$obj = new SQLField(array(
	"m_strName" => "PRODUCCION_ANUAL",
	"m_strTable" => "pecuario",
	"m_srcTableName" => "pecuario Chart"
));

$proto28["m_column"]=$obj;
$obj = new SQLGroupByItem($proto28);

$proto0["m_groupby"][]=$obj;
												$proto30=array();
						$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "pecuario",
	"m_srcTableName" => "pecuario Chart"
));

$proto30["m_column"]=$obj;
$obj = new SQLGroupByItem($proto30);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="pecuario Chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pecuario_Chart = createSqlQuery_pecuario_Chart();


	
		;

						

$tdatapecuario_Chart[".sqlquery"] = $queryData_pecuario_Chart;

$tableEvents["pecuario Chart"] = new eventsBase;
$tdatapecuario_Chart[".hasEvents"] = false;

?>