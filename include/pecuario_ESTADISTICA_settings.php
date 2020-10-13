<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapecuario_ESTADISTICA = array();
	$tdatapecuario_ESTADISTICA[".ShortName"] = "pecuario_ESTADISTICA";
	$tdatapecuario_ESTADISTICA[".OwnerID"] = "";
	$tdatapecuario_ESTADISTICA[".OriginalTable"] = "pecuario";

//	field labels
$fieldLabelspecuario_ESTADISTICA = array();
$fieldToolTipspecuario_ESTADISTICA = array();
$pageTitlespecuario_ESTADISTICA = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspecuario_ESTADISTICA["Spanish"] = array();
	$fieldToolTipspecuario_ESTADISTICA["Spanish"] = array();
	$pageTitlespecuario_ESTADISTICA["Spanish"] = array();
	$fieldLabelspecuario_ESTADISTICA["Spanish"]["VEREDA"] = "VEREDA";
	$fieldToolTipspecuario_ESTADISTICA["Spanish"]["VEREDA"] = "";
	$fieldLabelspecuario_ESTADISTICA["Spanish"]["FINCA"] = "FINCA";
	$fieldToolTipspecuario_ESTADISTICA["Spanish"]["FINCA"] = "";
	$fieldLabelspecuario_ESTADISTICA["Spanish"]["RAZA"] = "RAZA";
	$fieldToolTipspecuario_ESTADISTICA["Spanish"]["RAZA"] = "";
	$fieldLabelspecuario_ESTADISTICA["Spanish"]["U_A"] = "U A";
	$fieldToolTipspecuario_ESTADISTICA["Spanish"]["U_A"] = "";
	$fieldLabelspecuario_ESTADISTICA["Spanish"]["AREA"] = "AREA";
	$fieldToolTipspecuario_ESTADISTICA["Spanish"]["AREA"] = "";
	$fieldLabelspecuario_ESTADISTICA["Spanish"]["PRODUCCION_ANUAL"] = "PRODUCCION ANUAL";
	$fieldToolTipspecuario_ESTADISTICA["Spanish"]["PRODUCCION_ANUAL"] = "";
	$fieldLabelspecuario_ESTADISTICA["Spanish"]["A_O"] = "AÑO";
	$fieldToolTipspecuario_ESTADISTICA["Spanish"]["A_O"] = "";
	if (count($fieldToolTipspecuario_ESTADISTICA["Spanish"]))
		$tdatapecuario_ESTADISTICA[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspecuario_ESTADISTICA[""] = array();
	$fieldToolTipspecuario_ESTADISTICA[""] = array();
	$pageTitlespecuario_ESTADISTICA[""] = array();
	$fieldLabelspecuario_ESTADISTICA[""]["VEREDA"] = "VEREDA";
	$fieldToolTipspecuario_ESTADISTICA[""]["VEREDA"] = "";
	$fieldLabelspecuario_ESTADISTICA[""]["FINCA"] = "FINCA";
	$fieldToolTipspecuario_ESTADISTICA[""]["FINCA"] = "";
	$fieldLabelspecuario_ESTADISTICA[""]["RAZA"] = "RAZA";
	$fieldToolTipspecuario_ESTADISTICA[""]["RAZA"] = "";
	$fieldLabelspecuario_ESTADISTICA[""]["U_A"] = "U A";
	$fieldToolTipspecuario_ESTADISTICA[""]["U_A"] = "";
	$fieldLabelspecuario_ESTADISTICA[""]["AREA"] = "AREA";
	$fieldToolTipspecuario_ESTADISTICA[""]["AREA"] = "";
	$fieldLabelspecuario_ESTADISTICA[""]["PRODUCCION_ANUAL"] = "PRODUCCION ANUAL";
	$fieldToolTipspecuario_ESTADISTICA[""]["PRODUCCION_ANUAL"] = "";
	$fieldLabelspecuario_ESTADISTICA[""]["A_O"] = "AÑO";
	$fieldToolTipspecuario_ESTADISTICA[""]["A_O"] = "";
	if (count($fieldToolTipspecuario_ESTADISTICA[""]))
		$tdatapecuario_ESTADISTICA[".isUseToolTips"] = true;
}


	$tdatapecuario_ESTADISTICA[".NCSearch"] = true;

	$tdatapecuario_ESTADISTICA[".ChartRefreshTime"] = 0;


$tdatapecuario_ESTADISTICA[".shortTableName"] = "pecuario_ESTADISTICA";
$tdatapecuario_ESTADISTICA[".nSecOptions"] = 0;
$tdatapecuario_ESTADISTICA[".recsPerRowPrint"] = 1;
$tdatapecuario_ESTADISTICA[".mainTableOwnerID"] = "";
$tdatapecuario_ESTADISTICA[".moveNext"] = 1;
$tdatapecuario_ESTADISTICA[".entityType"] = 3;

$tdatapecuario_ESTADISTICA[".strOriginalTableName"] = "pecuario";

	



$tdatapecuario_ESTADISTICA[".showAddInPopup"] = false;

$tdatapecuario_ESTADISTICA[".showEditInPopup"] = false;

$tdatapecuario_ESTADISTICA[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapecuario_ESTADISTICA[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapecuario_ESTADISTICA[".fieldsForRegister"] = array();

$tdatapecuario_ESTADISTICA[".listAjax"] = false;

	$tdatapecuario_ESTADISTICA[".audit"] = false;

	$tdatapecuario_ESTADISTICA[".locking"] = false;


$tdatapecuario_ESTADISTICA[".add"] = true;
$tdatapecuario_ESTADISTICA[".afterAddAction"] = 1;
$tdatapecuario_ESTADISTICA[".closePopupAfterAdd"] = 1;
$tdatapecuario_ESTADISTICA[".afterAddActionDetTable"] = "";

$tdatapecuario_ESTADISTICA[".list"] = true;






$tdatapecuario_ESTADISTICA[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatapecuario_ESTADISTICA[".searchSaving"] = false;
//

$tdatapecuario_ESTADISTICA[".showSearchPanel"] = true;
		$tdatapecuario_ESTADISTICA[".flexibleSearch"] = true;

$tdatapecuario_ESTADISTICA[".isUseAjaxSuggest"] = true;




$tdatapecuario_ESTADISTICA[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapecuario_ESTADISTICA[".isUseTimeForSearch"] = false;



$tdatapecuario_ESTADISTICA[".badgeColor"] = "9ACD32";


$tdatapecuario_ESTADISTICA[".allSearchFields"] = array();
$tdatapecuario_ESTADISTICA[".filterFields"] = array();
$tdatapecuario_ESTADISTICA[".requiredSearchFields"] = array();

$tdatapecuario_ESTADISTICA[".allSearchFields"][] = "VEREDA";
	$tdatapecuario_ESTADISTICA[".allSearchFields"][] = "FINCA";
	$tdatapecuario_ESTADISTICA[".allSearchFields"][] = "RAZA";
	$tdatapecuario_ESTADISTICA[".allSearchFields"][] = "U_A";
	$tdatapecuario_ESTADISTICA[".allSearchFields"][] = "AREA";
	$tdatapecuario_ESTADISTICA[".allSearchFields"][] = "PRODUCCION_ANUAL";
	$tdatapecuario_ESTADISTICA[".allSearchFields"][] = "AÑO";
	

$tdatapecuario_ESTADISTICA[".googleLikeFields"] = array();
$tdatapecuario_ESTADISTICA[".googleLikeFields"][] = "VEREDA";
$tdatapecuario_ESTADISTICA[".googleLikeFields"][] = "FINCA";
$tdatapecuario_ESTADISTICA[".googleLikeFields"][] = "RAZA";
$tdatapecuario_ESTADISTICA[".googleLikeFields"][] = "U_A";
$tdatapecuario_ESTADISTICA[".googleLikeFields"][] = "AREA";
$tdatapecuario_ESTADISTICA[".googleLikeFields"][] = "PRODUCCION_ANUAL";
$tdatapecuario_ESTADISTICA[".googleLikeFields"][] = "AÑO";


$tdatapecuario_ESTADISTICA[".advSearchFields"] = array();
$tdatapecuario_ESTADISTICA[".advSearchFields"][] = "VEREDA";
$tdatapecuario_ESTADISTICA[".advSearchFields"][] = "FINCA";
$tdatapecuario_ESTADISTICA[".advSearchFields"][] = "RAZA";
$tdatapecuario_ESTADISTICA[".advSearchFields"][] = "U_A";
$tdatapecuario_ESTADISTICA[".advSearchFields"][] = "AREA";
$tdatapecuario_ESTADISTICA[".advSearchFields"][] = "PRODUCCION_ANUAL";
$tdatapecuario_ESTADISTICA[".advSearchFields"][] = "AÑO";

$tdatapecuario_ESTADISTICA[".tableType"] = "chart";

$tdatapecuario_ESTADISTICA[".printerPageOrientation"] = 0;
$tdatapecuario_ESTADISTICA[".nPrinterPageScale"] = 100;

$tdatapecuario_ESTADISTICA[".nPrinterSplitRecords"] = 40;

$tdatapecuario_ESTADISTICA[".nPrinterPDFSplitRecords"] = 40;



$tdatapecuario_ESTADISTICA[".geocodingEnabled"] = false;



// chart settings
$tdatapecuario_ESTADISTICA[".chartType"] = "2DColumn";
// end of chart settings


$tdatapecuario_ESTADISTICA[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapecuario_ESTADISTICA[".strOrderBy"] = $tstrOrderBy;

$tdatapecuario_ESTADISTICA[".orderindexes"] = array();

$tdatapecuario_ESTADISTICA[".sqlHead"] = "SELECT  DISTINCT VEREDA,  FINCA,  RAZA,  U_A,  AREA,  PRODUCCION_ANUAL,  `AÑO`";
$tdatapecuario_ESTADISTICA[".sqlFrom"] = "FROM pecuario";
$tdatapecuario_ESTADISTICA[".sqlWhereExpr"] = "";
$tdatapecuario_ESTADISTICA[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapecuario_ESTADISTICA[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapecuario_ESTADISTICA[".arrGroupsPerPage"] = $arrGPP;

$tdatapecuario_ESTADISTICA[".highlightSearchResults"] = true;

$tableKeyspecuario_ESTADISTICA = array();
$tdatapecuario_ESTADISTICA[".Keys"] = $tableKeyspecuario_ESTADISTICA;

$tdatapecuario_ESTADISTICA[".listFields"] = array();
$tdatapecuario_ESTADISTICA[".listFields"][] = "VEREDA";
$tdatapecuario_ESTADISTICA[".listFields"][] = "FINCA";
$tdatapecuario_ESTADISTICA[".listFields"][] = "RAZA";
$tdatapecuario_ESTADISTICA[".listFields"][] = "U_A";
$tdatapecuario_ESTADISTICA[".listFields"][] = "AREA";
$tdatapecuario_ESTADISTICA[".listFields"][] = "PRODUCCION_ANUAL";
$tdatapecuario_ESTADISTICA[".listFields"][] = "AÑO";

$tdatapecuario_ESTADISTICA[".hideMobileList"] = array();


$tdatapecuario_ESTADISTICA[".viewFields"] = array();
$tdatapecuario_ESTADISTICA[".viewFields"][] = "VEREDA";
$tdatapecuario_ESTADISTICA[".viewFields"][] = "FINCA";
$tdatapecuario_ESTADISTICA[".viewFields"][] = "RAZA";
$tdatapecuario_ESTADISTICA[".viewFields"][] = "U_A";
$tdatapecuario_ESTADISTICA[".viewFields"][] = "AREA";
$tdatapecuario_ESTADISTICA[".viewFields"][] = "PRODUCCION_ANUAL";
$tdatapecuario_ESTADISTICA[".viewFields"][] = "AÑO";

$tdatapecuario_ESTADISTICA[".addFields"] = array();
$tdatapecuario_ESTADISTICA[".addFields"][] = "VEREDA";
$tdatapecuario_ESTADISTICA[".addFields"][] = "FINCA";
$tdatapecuario_ESTADISTICA[".addFields"][] = "RAZA";
$tdatapecuario_ESTADISTICA[".addFields"][] = "U_A";
$tdatapecuario_ESTADISTICA[".addFields"][] = "AREA";
$tdatapecuario_ESTADISTICA[".addFields"][] = "PRODUCCION_ANUAL";
$tdatapecuario_ESTADISTICA[".addFields"][] = "AÑO";

$tdatapecuario_ESTADISTICA[".masterListFields"] = array();
$tdatapecuario_ESTADISTICA[".masterListFields"][] = "VEREDA";
$tdatapecuario_ESTADISTICA[".masterListFields"][] = "FINCA";
$tdatapecuario_ESTADISTICA[".masterListFields"][] = "RAZA";
$tdatapecuario_ESTADISTICA[".masterListFields"][] = "U_A";
$tdatapecuario_ESTADISTICA[".masterListFields"][] = "AREA";
$tdatapecuario_ESTADISTICA[".masterListFields"][] = "PRODUCCION_ANUAL";
$tdatapecuario_ESTADISTICA[".masterListFields"][] = "AÑO";

$tdatapecuario_ESTADISTICA[".inlineAddFields"] = array();
$tdatapecuario_ESTADISTICA[".inlineAddFields"][] = "VEREDA";
$tdatapecuario_ESTADISTICA[".inlineAddFields"][] = "FINCA";
$tdatapecuario_ESTADISTICA[".inlineAddFields"][] = "RAZA";
$tdatapecuario_ESTADISTICA[".inlineAddFields"][] = "U_A";
$tdatapecuario_ESTADISTICA[".inlineAddFields"][] = "AREA";
$tdatapecuario_ESTADISTICA[".inlineAddFields"][] = "PRODUCCION_ANUAL";
$tdatapecuario_ESTADISTICA[".inlineAddFields"][] = "AÑO";

$tdatapecuario_ESTADISTICA[".editFields"] = array();
$tdatapecuario_ESTADISTICA[".editFields"][] = "VEREDA";
$tdatapecuario_ESTADISTICA[".editFields"][] = "FINCA";
$tdatapecuario_ESTADISTICA[".editFields"][] = "RAZA";
$tdatapecuario_ESTADISTICA[".editFields"][] = "U_A";
$tdatapecuario_ESTADISTICA[".editFields"][] = "AREA";
$tdatapecuario_ESTADISTICA[".editFields"][] = "PRODUCCION_ANUAL";
$tdatapecuario_ESTADISTICA[".editFields"][] = "AÑO";

$tdatapecuario_ESTADISTICA[".inlineEditFields"] = array();
$tdatapecuario_ESTADISTICA[".inlineEditFields"][] = "VEREDA";
$tdatapecuario_ESTADISTICA[".inlineEditFields"][] = "FINCA";
$tdatapecuario_ESTADISTICA[".inlineEditFields"][] = "RAZA";
$tdatapecuario_ESTADISTICA[".inlineEditFields"][] = "U_A";
$tdatapecuario_ESTADISTICA[".inlineEditFields"][] = "AREA";
$tdatapecuario_ESTADISTICA[".inlineEditFields"][] = "PRODUCCION_ANUAL";
$tdatapecuario_ESTADISTICA[".inlineEditFields"][] = "AÑO";

$tdatapecuario_ESTADISTICA[".exportFields"] = array();
$tdatapecuario_ESTADISTICA[".exportFields"][] = "VEREDA";
$tdatapecuario_ESTADISTICA[".exportFields"][] = "FINCA";
$tdatapecuario_ESTADISTICA[".exportFields"][] = "RAZA";
$tdatapecuario_ESTADISTICA[".exportFields"][] = "U_A";
$tdatapecuario_ESTADISTICA[".exportFields"][] = "AREA";
$tdatapecuario_ESTADISTICA[".exportFields"][] = "PRODUCCION_ANUAL";
$tdatapecuario_ESTADISTICA[".exportFields"][] = "AÑO";

$tdatapecuario_ESTADISTICA[".importFields"] = array();
$tdatapecuario_ESTADISTICA[".importFields"][] = "VEREDA";
$tdatapecuario_ESTADISTICA[".importFields"][] = "FINCA";
$tdatapecuario_ESTADISTICA[".importFields"][] = "RAZA";
$tdatapecuario_ESTADISTICA[".importFields"][] = "U_A";
$tdatapecuario_ESTADISTICA[".importFields"][] = "AREA";
$tdatapecuario_ESTADISTICA[".importFields"][] = "PRODUCCION_ANUAL";
$tdatapecuario_ESTADISTICA[".importFields"][] = "AÑO";

$tdatapecuario_ESTADISTICA[".printFields"] = array();
$tdatapecuario_ESTADISTICA[".printFields"][] = "VEREDA";
$tdatapecuario_ESTADISTICA[".printFields"][] = "FINCA";
$tdatapecuario_ESTADISTICA[".printFields"][] = "RAZA";
$tdatapecuario_ESTADISTICA[".printFields"][] = "U_A";
$tdatapecuario_ESTADISTICA[".printFields"][] = "AREA";
$tdatapecuario_ESTADISTICA[".printFields"][] = "PRODUCCION_ANUAL";
$tdatapecuario_ESTADISTICA[".printFields"][] = "AÑO";

//	VEREDA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "VEREDA";
	$fdata["GoodName"] = "VEREDA";
	$fdata["ownerTable"] = "pecuario";
	$fdata["Label"] = GetFieldLabel("pecuario_ESTADISTICA","VEREDA");
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




	$tdatapecuario_ESTADISTICA["VEREDA"] = $fdata;
//	FINCA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FINCA";
	$fdata["GoodName"] = "FINCA";
	$fdata["ownerTable"] = "pecuario";
	$fdata["Label"] = GetFieldLabel("pecuario_ESTADISTICA","FINCA");
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




	$tdatapecuario_ESTADISTICA["FINCA"] = $fdata;
//	RAZA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "RAZA";
	$fdata["GoodName"] = "RAZA";
	$fdata["ownerTable"] = "pecuario";
	$fdata["Label"] = GetFieldLabel("pecuario_ESTADISTICA","RAZA");
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




	$tdatapecuario_ESTADISTICA["RAZA"] = $fdata;
//	U_A
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "U_A";
	$fdata["GoodName"] = "U_A";
	$fdata["ownerTable"] = "pecuario";
	$fdata["Label"] = GetFieldLabel("pecuario_ESTADISTICA","U_A");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "U_A";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "U_A";

	
	
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




	$tdatapecuario_ESTADISTICA["U_A"] = $fdata;
//	AREA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "AREA";
	$fdata["GoodName"] = "AREA";
	$fdata["ownerTable"] = "pecuario";
	$fdata["Label"] = GetFieldLabel("pecuario_ESTADISTICA","AREA");
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




	$tdatapecuario_ESTADISTICA["AREA"] = $fdata;
//	PRODUCCION_ANUAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "PRODUCCION_ANUAL";
	$fdata["GoodName"] = "PRODUCCION_ANUAL";
	$fdata["ownerTable"] = "pecuario";
	$fdata["Label"] = GetFieldLabel("pecuario_ESTADISTICA","PRODUCCION_ANUAL");
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




	$tdatapecuario_ESTADISTICA["PRODUCCION_ANUAL"] = $fdata;
//	AÑO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "AÑO";
	$fdata["GoodName"] = "A_O";
	$fdata["ownerTable"] = "pecuario";
	$fdata["Label"] = GetFieldLabel("pecuario_ESTADISTICA","A_O");
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




	$tdatapecuario_ESTADISTICA["AÑO"] = $fdata;

	$tdatapecuario_ESTADISTICA[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">pecuario ESTADISTICA</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdatapecuario_ESTADISTICA[".chartXml"] .= '<attr value="0">
			<attr value="name">AREA</attr>';
	$tdatapecuario_ESTADISTICA[".chartXml"] .= '</attr>';
	$tdatapecuario_ESTADISTICA[".chartXml"] .= '<attr value="1">
			<attr value="name">PRODUCCION_ANUAL</attr>';
	$tdatapecuario_ESTADISTICA[".chartXml"] .= '</attr>';
	$tdatapecuario_ESTADISTICA[".chartXml"] .= '<attr value="2">
			<attr value="name">U_A</attr>';
	$tdatapecuario_ESTADISTICA[".chartXml"] .= '</attr>';
	$tdatapecuario_ESTADISTICA[".chartXml"] .= '<attr value="3">
		<attr value="name">AÑO</attr>
	</attr>';
	$tdatapecuario_ESTADISTICA[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatapecuario_ESTADISTICA[".chartXml"] .= '<attr value="head">'.xmlencode("pecuario ESTADISTICA").'</attr>
<attr value="foot">'.xmlencode("Legend Title").'</attr>
<attr value="y_axis_label">'.xmlencode("FINCA_PROPIETARIO_CEDULA").'</attr>


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
$tdatapecuario_ESTADISTICA[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatapecuario_ESTADISTICA[".chartXml"] .= '<attr value="0">
		<attr value="name">VEREDA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("pecuario_ESTADISTICA","VEREDA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatapecuario_ESTADISTICA[".chartXml"] .= '<attr value="1">
		<attr value="name">FINCA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("pecuario_ESTADISTICA","FINCA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatapecuario_ESTADISTICA[".chartXml"] .= '<attr value="2">
		<attr value="name">RAZA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("pecuario_ESTADISTICA","RAZA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatapecuario_ESTADISTICA[".chartXml"] .= '<attr value="3">
		<attr value="name">U_A</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("pecuario_ESTADISTICA","U_A")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatapecuario_ESTADISTICA[".chartXml"] .= '<attr value="4">
		<attr value="name">AREA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("pecuario_ESTADISTICA","AREA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatapecuario_ESTADISTICA[".chartXml"] .= '<attr value="5">
		<attr value="name">PRODUCCION_ANUAL</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("pecuario_ESTADISTICA","PRODUCCION_ANUAL")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatapecuario_ESTADISTICA[".chartXml"] .= '<attr value="6">
		<attr value="name">AÑO</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("pecuario_ESTADISTICA","A_O")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatapecuario_ESTADISTICA[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">pecuario ESTADISTICA</attr>
<attr value="short_table_name">pecuario_ESTADISTICA</attr>
</attr>

</chart>';

$tables_data["pecuario ESTADISTICA"]=&$tdatapecuario_ESTADISTICA;
$field_labels["pecuario_ESTADISTICA"] = &$fieldLabelspecuario_ESTADISTICA;
$fieldToolTips["pecuario_ESTADISTICA"] = &$fieldToolTipspecuario_ESTADISTICA;
$page_titles["pecuario_ESTADISTICA"] = &$pageTitlespecuario_ESTADISTICA;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["pecuario ESTADISTICA"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["pecuario ESTADISTICA"] = array();


	
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
					$masterTablesData["pecuario ESTADISTICA"][0] = $masterParams;
				$masterTablesData["pecuario ESTADISTICA"][0]["masterKeys"] = array();
	$masterTablesData["pecuario ESTADISTICA"][0]["masterKeys"][]="PROPIETARIO_CEDULA";
				$masterTablesData["pecuario ESTADISTICA"][0]["detailKeys"] = array();
	$masterTablesData["pecuario ESTADISTICA"][0]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_pecuario_ESTADISTICA()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT  DISTINCT";
$proto0["m_strFieldList"] = "VEREDA,  FINCA,  RAZA,  U_A,  AREA,  PRODUCCION_ANUAL,  `AÑO`";
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
	"m_srcTableName" => "pecuario ESTADISTICA"
));

$proto6["m_sql"] = "VEREDA";
$proto6["m_srcTableName"] = "pecuario ESTADISTICA";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "FINCA",
	"m_strTable" => "pecuario",
	"m_srcTableName" => "pecuario ESTADISTICA"
));

$proto8["m_sql"] = "FINCA";
$proto8["m_srcTableName"] = "pecuario ESTADISTICA";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "RAZA",
	"m_strTable" => "pecuario",
	"m_srcTableName" => "pecuario ESTADISTICA"
));

$proto10["m_sql"] = "RAZA";
$proto10["m_srcTableName"] = "pecuario ESTADISTICA";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "U_A",
	"m_strTable" => "pecuario",
	"m_srcTableName" => "pecuario ESTADISTICA"
));

$proto12["m_sql"] = "U_A";
$proto12["m_srcTableName"] = "pecuario ESTADISTICA";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "AREA",
	"m_strTable" => "pecuario",
	"m_srcTableName" => "pecuario ESTADISTICA"
));

$proto14["m_sql"] = "AREA";
$proto14["m_srcTableName"] = "pecuario ESTADISTICA";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "PRODUCCION_ANUAL",
	"m_strTable" => "pecuario",
	"m_srcTableName" => "pecuario ESTADISTICA"
));

$proto16["m_sql"] = "PRODUCCION_ANUAL";
$proto16["m_srcTableName"] = "pecuario ESTADISTICA";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "pecuario",
	"m_srcTableName" => "pecuario ESTADISTICA"
));

$proto18["m_sql"] = "`AÑO`";
$proto18["m_srcTableName"] = "pecuario ESTADISTICA";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "pecuario";
$proto21["m_srcTableName"] = "pecuario ESTADISTICA";
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
$proto20["m_srcTableName"] = "pecuario ESTADISTICA";
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
	"m_srcTableName" => "pecuario ESTADISTICA"
));

$proto24["m_column"]=$obj;
$obj = new SQLGroupByItem($proto24);

$proto0["m_groupby"][]=$obj;
												$proto26=array();
						$obj = new SQLField(array(
	"m_strName" => "FINCA",
	"m_strTable" => "pecuario",
	"m_srcTableName" => "pecuario ESTADISTICA"
));

$proto26["m_column"]=$obj;
$obj = new SQLGroupByItem($proto26);

$proto0["m_groupby"][]=$obj;
												$proto28=array();
						$obj = new SQLField(array(
	"m_strName" => "RAZA",
	"m_strTable" => "pecuario",
	"m_srcTableName" => "pecuario ESTADISTICA"
));

$proto28["m_column"]=$obj;
$obj = new SQLGroupByItem($proto28);

$proto0["m_groupby"][]=$obj;
												$proto30=array();
						$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "pecuario",
	"m_srcTableName" => "pecuario ESTADISTICA"
));

$proto30["m_column"]=$obj;
$obj = new SQLGroupByItem($proto30);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="pecuario ESTADISTICA";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pecuario_ESTADISTICA = createSqlQuery_pecuario_ESTADISTICA();


	
		;

							

$tdatapecuario_ESTADISTICA[".sqlquery"] = $queryData_pecuario_ESTADISTICA;

$tableEvents["pecuario ESTADISTICA"] = new eventsBase;
$tdatapecuario_ESTADISTICA[".hasEvents"] = false;

?>