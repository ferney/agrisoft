<?php
require_once(getabspath("classes/cipherer.php"));




$tdatainversion_ESTADISTICA = array();
	$tdatainversion_ESTADISTICA[".ShortName"] = "inversion_ESTADISTICA";
	$tdatainversion_ESTADISTICA[".OwnerID"] = "";
	$tdatainversion_ESTADISTICA[".OriginalTable"] = "inversion";

//	field labels
$fieldLabelsinversion_ESTADISTICA = array();
$fieldToolTipsinversion_ESTADISTICA = array();
$pageTitlesinversion_ESTADISTICA = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsinversion_ESTADISTICA["Spanish"] = array();
	$fieldToolTipsinversion_ESTADISTICA["Spanish"] = array();
	$pageTitlesinversion_ESTADISTICA["Spanish"] = array();
	$fieldLabelsinversion_ESTADISTICA["Spanish"]["VEREDA"] = "VEREDA";
	$fieldToolTipsinversion_ESTADISTICA["Spanish"]["VEREDA"] = "";
	$fieldLabelsinversion_ESTADISTICA["Spanish"]["FINCA"] = "FINCA";
	$fieldToolTipsinversion_ESTADISTICA["Spanish"]["FINCA"] = "";
	$fieldLabelsinversion_ESTADISTICA["Spanish"]["TIPO"] = "TIPO";
	$fieldToolTipsinversion_ESTADISTICA["Spanish"]["TIPO"] = "";
	$fieldLabelsinversion_ESTADISTICA["Spanish"]["NOMBRE_PROYECTO"] = "NOMBRE PROYECTO";
	$fieldToolTipsinversion_ESTADISTICA["Spanish"]["NOMBRE_PROYECTO"] = "";
	$fieldLabelsinversion_ESTADISTICA["Spanish"]["OBSERVACIONES"] = "OBSERVACIONES";
	$fieldToolTipsinversion_ESTADISTICA["Spanish"]["OBSERVACIONES"] = "";
	$fieldLabelsinversion_ESTADISTICA["Spanish"]["A_O"] = "AÑO";
	$fieldToolTipsinversion_ESTADISTICA["Spanish"]["A_O"] = "";
	if (count($fieldToolTipsinversion_ESTADISTICA["Spanish"]))
		$tdatainversion_ESTADISTICA[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsinversion_ESTADISTICA[""] = array();
	$fieldToolTipsinversion_ESTADISTICA[""] = array();
	$pageTitlesinversion_ESTADISTICA[""] = array();
	$fieldLabelsinversion_ESTADISTICA[""]["VEREDA"] = "VEREDA";
	$fieldToolTipsinversion_ESTADISTICA[""]["VEREDA"] = "";
	$fieldLabelsinversion_ESTADISTICA[""]["FINCA"] = "FINCA";
	$fieldToolTipsinversion_ESTADISTICA[""]["FINCA"] = "";
	$fieldLabelsinversion_ESTADISTICA[""]["TIPO"] = "TIPO";
	$fieldToolTipsinversion_ESTADISTICA[""]["TIPO"] = "";
	$fieldLabelsinversion_ESTADISTICA[""]["NOMBRE_PROYECTO"] = "NOMBRE PROYECTO";
	$fieldToolTipsinversion_ESTADISTICA[""]["NOMBRE_PROYECTO"] = "";
	$fieldLabelsinversion_ESTADISTICA[""]["OBSERVACIONES"] = "OBSERVACIONES";
	$fieldToolTipsinversion_ESTADISTICA[""]["OBSERVACIONES"] = "";
	$fieldLabelsinversion_ESTADISTICA[""]["A_O"] = "AÑO";
	$fieldToolTipsinversion_ESTADISTICA[""]["A_O"] = "";
	if (count($fieldToolTipsinversion_ESTADISTICA[""]))
		$tdatainversion_ESTADISTICA[".isUseToolTips"] = true;
}


	$tdatainversion_ESTADISTICA[".NCSearch"] = true;

	$tdatainversion_ESTADISTICA[".ChartRefreshTime"] = 0;


$tdatainversion_ESTADISTICA[".shortTableName"] = "inversion_ESTADISTICA";
$tdatainversion_ESTADISTICA[".nSecOptions"] = 0;
$tdatainversion_ESTADISTICA[".recsPerRowPrint"] = 1;
$tdatainversion_ESTADISTICA[".mainTableOwnerID"] = "";
$tdatainversion_ESTADISTICA[".moveNext"] = 1;
$tdatainversion_ESTADISTICA[".entityType"] = 3;

$tdatainversion_ESTADISTICA[".strOriginalTableName"] = "inversion";

	



$tdatainversion_ESTADISTICA[".showAddInPopup"] = false;

$tdatainversion_ESTADISTICA[".showEditInPopup"] = false;

$tdatainversion_ESTADISTICA[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatainversion_ESTADISTICA[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatainversion_ESTADISTICA[".fieldsForRegister"] = array();

$tdatainversion_ESTADISTICA[".listAjax"] = false;

	$tdatainversion_ESTADISTICA[".audit"] = false;

	$tdatainversion_ESTADISTICA[".locking"] = false;


$tdatainversion_ESTADISTICA[".add"] = true;
$tdatainversion_ESTADISTICA[".afterAddAction"] = 1;
$tdatainversion_ESTADISTICA[".closePopupAfterAdd"] = 1;
$tdatainversion_ESTADISTICA[".afterAddActionDetTable"] = "";

$tdatainversion_ESTADISTICA[".list"] = true;






$tdatainversion_ESTADISTICA[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatainversion_ESTADISTICA[".searchSaving"] = false;
//

$tdatainversion_ESTADISTICA[".showSearchPanel"] = true;
		$tdatainversion_ESTADISTICA[".flexibleSearch"] = true;

$tdatainversion_ESTADISTICA[".isUseAjaxSuggest"] = true;




$tdatainversion_ESTADISTICA[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainversion_ESTADISTICA[".isUseTimeForSearch"] = false;



$tdatainversion_ESTADISTICA[".badgeColor"] = "E67349";


$tdatainversion_ESTADISTICA[".allSearchFields"] = array();
$tdatainversion_ESTADISTICA[".filterFields"] = array();
$tdatainversion_ESTADISTICA[".requiredSearchFields"] = array();

$tdatainversion_ESTADISTICA[".allSearchFields"][] = "VEREDA";
	$tdatainversion_ESTADISTICA[".allSearchFields"][] = "FINCA";
	$tdatainversion_ESTADISTICA[".allSearchFields"][] = "TIPO";
	$tdatainversion_ESTADISTICA[".allSearchFields"][] = "NOMBRE_PROYECTO";
	$tdatainversion_ESTADISTICA[".allSearchFields"][] = "OBSERVACIONES";
	$tdatainversion_ESTADISTICA[".allSearchFields"][] = "AÑO";
	

$tdatainversion_ESTADISTICA[".googleLikeFields"] = array();
$tdatainversion_ESTADISTICA[".googleLikeFields"][] = "VEREDA";
$tdatainversion_ESTADISTICA[".googleLikeFields"][] = "FINCA";
$tdatainversion_ESTADISTICA[".googleLikeFields"][] = "TIPO";
$tdatainversion_ESTADISTICA[".googleLikeFields"][] = "NOMBRE_PROYECTO";
$tdatainversion_ESTADISTICA[".googleLikeFields"][] = "OBSERVACIONES";
$tdatainversion_ESTADISTICA[".googleLikeFields"][] = "AÑO";


$tdatainversion_ESTADISTICA[".advSearchFields"] = array();
$tdatainversion_ESTADISTICA[".advSearchFields"][] = "VEREDA";
$tdatainversion_ESTADISTICA[".advSearchFields"][] = "FINCA";
$tdatainversion_ESTADISTICA[".advSearchFields"][] = "TIPO";
$tdatainversion_ESTADISTICA[".advSearchFields"][] = "NOMBRE_PROYECTO";
$tdatainversion_ESTADISTICA[".advSearchFields"][] = "OBSERVACIONES";
$tdatainversion_ESTADISTICA[".advSearchFields"][] = "AÑO";

$tdatainversion_ESTADISTICA[".tableType"] = "chart";

$tdatainversion_ESTADISTICA[".printerPageOrientation"] = 0;
$tdatainversion_ESTADISTICA[".nPrinterPageScale"] = 100;

$tdatainversion_ESTADISTICA[".nPrinterSplitRecords"] = 40;

$tdatainversion_ESTADISTICA[".nPrinterPDFSplitRecords"] = 40;



$tdatainversion_ESTADISTICA[".geocodingEnabled"] = false;



// chart settings
$tdatainversion_ESTADISTICA[".chartType"] = "2DColumn";
// end of chart settings


$tdatainversion_ESTADISTICA[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatainversion_ESTADISTICA[".strOrderBy"] = $tstrOrderBy;

$tdatainversion_ESTADISTICA[".orderindexes"] = array();

$tdatainversion_ESTADISTICA[".sqlHead"] = "SELECT  DISTINCT VEREDA,  FINCA,  TIPO,  NOMBRE_PROYECTO,  OBSERVACIONES,  `AÑO`";
$tdatainversion_ESTADISTICA[".sqlFrom"] = "FROM inversion";
$tdatainversion_ESTADISTICA[".sqlWhereExpr"] = "";
$tdatainversion_ESTADISTICA[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatainversion_ESTADISTICA[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainversion_ESTADISTICA[".arrGroupsPerPage"] = $arrGPP;

$tdatainversion_ESTADISTICA[".highlightSearchResults"] = true;

$tableKeysinversion_ESTADISTICA = array();
$tdatainversion_ESTADISTICA[".Keys"] = $tableKeysinversion_ESTADISTICA;

$tdatainversion_ESTADISTICA[".listFields"] = array();
$tdatainversion_ESTADISTICA[".listFields"][] = "VEREDA";
$tdatainversion_ESTADISTICA[".listFields"][] = "FINCA";
$tdatainversion_ESTADISTICA[".listFields"][] = "TIPO";
$tdatainversion_ESTADISTICA[".listFields"][] = "NOMBRE_PROYECTO";
$tdatainversion_ESTADISTICA[".listFields"][] = "OBSERVACIONES";
$tdatainversion_ESTADISTICA[".listFields"][] = "AÑO";

$tdatainversion_ESTADISTICA[".hideMobileList"] = array();


$tdatainversion_ESTADISTICA[".viewFields"] = array();
$tdatainversion_ESTADISTICA[".viewFields"][] = "VEREDA";
$tdatainversion_ESTADISTICA[".viewFields"][] = "FINCA";
$tdatainversion_ESTADISTICA[".viewFields"][] = "TIPO";
$tdatainversion_ESTADISTICA[".viewFields"][] = "NOMBRE_PROYECTO";
$tdatainversion_ESTADISTICA[".viewFields"][] = "OBSERVACIONES";
$tdatainversion_ESTADISTICA[".viewFields"][] = "AÑO";

$tdatainversion_ESTADISTICA[".addFields"] = array();
$tdatainversion_ESTADISTICA[".addFields"][] = "VEREDA";
$tdatainversion_ESTADISTICA[".addFields"][] = "FINCA";
$tdatainversion_ESTADISTICA[".addFields"][] = "TIPO";
$tdatainversion_ESTADISTICA[".addFields"][] = "NOMBRE_PROYECTO";
$tdatainversion_ESTADISTICA[".addFields"][] = "OBSERVACIONES";
$tdatainversion_ESTADISTICA[".addFields"][] = "AÑO";

$tdatainversion_ESTADISTICA[".masterListFields"] = array();
$tdatainversion_ESTADISTICA[".masterListFields"][] = "VEREDA";
$tdatainversion_ESTADISTICA[".masterListFields"][] = "FINCA";
$tdatainversion_ESTADISTICA[".masterListFields"][] = "TIPO";
$tdatainversion_ESTADISTICA[".masterListFields"][] = "NOMBRE_PROYECTO";
$tdatainversion_ESTADISTICA[".masterListFields"][] = "OBSERVACIONES";
$tdatainversion_ESTADISTICA[".masterListFields"][] = "AÑO";

$tdatainversion_ESTADISTICA[".inlineAddFields"] = array();
$tdatainversion_ESTADISTICA[".inlineAddFields"][] = "VEREDA";
$tdatainversion_ESTADISTICA[".inlineAddFields"][] = "FINCA";
$tdatainversion_ESTADISTICA[".inlineAddFields"][] = "TIPO";
$tdatainversion_ESTADISTICA[".inlineAddFields"][] = "NOMBRE_PROYECTO";
$tdatainversion_ESTADISTICA[".inlineAddFields"][] = "OBSERVACIONES";
$tdatainversion_ESTADISTICA[".inlineAddFields"][] = "AÑO";

$tdatainversion_ESTADISTICA[".editFields"] = array();
$tdatainversion_ESTADISTICA[".editFields"][] = "VEREDA";
$tdatainversion_ESTADISTICA[".editFields"][] = "FINCA";
$tdatainversion_ESTADISTICA[".editFields"][] = "TIPO";
$tdatainversion_ESTADISTICA[".editFields"][] = "NOMBRE_PROYECTO";
$tdatainversion_ESTADISTICA[".editFields"][] = "OBSERVACIONES";
$tdatainversion_ESTADISTICA[".editFields"][] = "AÑO";

$tdatainversion_ESTADISTICA[".inlineEditFields"] = array();
$tdatainversion_ESTADISTICA[".inlineEditFields"][] = "VEREDA";
$tdatainversion_ESTADISTICA[".inlineEditFields"][] = "FINCA";
$tdatainversion_ESTADISTICA[".inlineEditFields"][] = "TIPO";
$tdatainversion_ESTADISTICA[".inlineEditFields"][] = "NOMBRE_PROYECTO";
$tdatainversion_ESTADISTICA[".inlineEditFields"][] = "OBSERVACIONES";
$tdatainversion_ESTADISTICA[".inlineEditFields"][] = "AÑO";

$tdatainversion_ESTADISTICA[".exportFields"] = array();
$tdatainversion_ESTADISTICA[".exportFields"][] = "VEREDA";
$tdatainversion_ESTADISTICA[".exportFields"][] = "FINCA";
$tdatainversion_ESTADISTICA[".exportFields"][] = "TIPO";
$tdatainversion_ESTADISTICA[".exportFields"][] = "NOMBRE_PROYECTO";
$tdatainversion_ESTADISTICA[".exportFields"][] = "OBSERVACIONES";
$tdatainversion_ESTADISTICA[".exportFields"][] = "AÑO";

$tdatainversion_ESTADISTICA[".importFields"] = array();
$tdatainversion_ESTADISTICA[".importFields"][] = "VEREDA";
$tdatainversion_ESTADISTICA[".importFields"][] = "FINCA";
$tdatainversion_ESTADISTICA[".importFields"][] = "TIPO";
$tdatainversion_ESTADISTICA[".importFields"][] = "NOMBRE_PROYECTO";
$tdatainversion_ESTADISTICA[".importFields"][] = "OBSERVACIONES";
$tdatainversion_ESTADISTICA[".importFields"][] = "AÑO";

$tdatainversion_ESTADISTICA[".printFields"] = array();
$tdatainversion_ESTADISTICA[".printFields"][] = "VEREDA";
$tdatainversion_ESTADISTICA[".printFields"][] = "FINCA";
$tdatainversion_ESTADISTICA[".printFields"][] = "TIPO";
$tdatainversion_ESTADISTICA[".printFields"][] = "NOMBRE_PROYECTO";
$tdatainversion_ESTADISTICA[".printFields"][] = "OBSERVACIONES";
$tdatainversion_ESTADISTICA[".printFields"][] = "AÑO";

//	VEREDA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "VEREDA";
	$fdata["GoodName"] = "VEREDA";
	$fdata["ownerTable"] = "inversion";
	$fdata["Label"] = GetFieldLabel("inversion_ESTADISTICA","VEREDA");
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




	$tdatainversion_ESTADISTICA["VEREDA"] = $fdata;
//	FINCA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FINCA";
	$fdata["GoodName"] = "FINCA";
	$fdata["ownerTable"] = "inversion";
	$fdata["Label"] = GetFieldLabel("inversion_ESTADISTICA","FINCA");
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




	$tdatainversion_ESTADISTICA["FINCA"] = $fdata;
//	TIPO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TIPO";
	$fdata["GoodName"] = "TIPO";
	$fdata["ownerTable"] = "inversion";
	$fdata["Label"] = GetFieldLabel("inversion_ESTADISTICA","TIPO");
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

		$fdata["strField"] = "TIPO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TIPO";

	
	
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
	$edata["LookupValues"][] = "POR PROYECTO";
	$edata["LookupValues"][] = "POR CREDITO";
	$edata["LookupValues"][] = "INVERSION PROPIA";
	$edata["LookupValues"][] = "APOYOS DE TERCEROS";
	$edata["LookupValues"][] = "OTROS";

	
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




	$tdatainversion_ESTADISTICA["TIPO"] = $fdata;
//	NOMBRE_PROYECTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "NOMBRE_PROYECTO";
	$fdata["GoodName"] = "NOMBRE_PROYECTO";
	$fdata["ownerTable"] = "inversion";
	$fdata["Label"] = GetFieldLabel("inversion_ESTADISTICA","NOMBRE_PROYECTO");
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

		$fdata["strField"] = "NOMBRE_PROYECTO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NOMBRE_PROYECTO";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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




	$tdatainversion_ESTADISTICA["NOMBRE_PROYECTO"] = $fdata;
//	OBSERVACIONES
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "OBSERVACIONES";
	$fdata["GoodName"] = "OBSERVACIONES";
	$fdata["ownerTable"] = "inversion";
	$fdata["Label"] = GetFieldLabel("inversion_ESTADISTICA","OBSERVACIONES");
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

		$fdata["strField"] = "OBSERVACIONES";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OBSERVACIONES";

	
	
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




	$tdatainversion_ESTADISTICA["OBSERVACIONES"] = $fdata;
//	AÑO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "AÑO";
	$fdata["GoodName"] = "A_O";
	$fdata["ownerTable"] = "inversion";
	$fdata["Label"] = GetFieldLabel("inversion_ESTADISTICA","A_O");
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




	$tdatainversion_ESTADISTICA["AÑO"] = $fdata;

	$tdatainversion_ESTADISTICA[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">inversion ESTADISTICA</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdatainversion_ESTADISTICA[".chartXml"] .= '<attr value="0">
			<attr value="name">FINCA_PROPIETARIO_CEDULA</attr>';
	$tdatainversion_ESTADISTICA[".chartXml"] .= '</attr>';
	$tdatainversion_ESTADISTICA[".chartXml"] .= '<attr value="1">
		<attr value="name">NOMBRE</attr>
	</attr>';
	$tdatainversion_ESTADISTICA[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatainversion_ESTADISTICA[".chartXml"] .= '<attr value="head">'.xmlencode("inversion ESTADISTICA").'</attr>
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
$tdatainversion_ESTADISTICA[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatainversion_ESTADISTICA[".chartXml"] .= '<attr value="0">
		<attr value="name">VEREDA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("inversion_ESTADISTICA","VEREDA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatainversion_ESTADISTICA[".chartXml"] .= '<attr value="1">
		<attr value="name">FINCA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("inversion_ESTADISTICA","FINCA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatainversion_ESTADISTICA[".chartXml"] .= '<attr value="2">
		<attr value="name">TIPO</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("inversion_ESTADISTICA","TIPO")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatainversion_ESTADISTICA[".chartXml"] .= '<attr value="3">
		<attr value="name">NOMBRE_PROYECTO</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("inversion_ESTADISTICA","NOMBRE_PROYECTO")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatainversion_ESTADISTICA[".chartXml"] .= '<attr value="4">
		<attr value="name">OBSERVACIONES</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("inversion_ESTADISTICA","OBSERVACIONES")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatainversion_ESTADISTICA[".chartXml"] .= '<attr value="5">
		<attr value="name">AÑO</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("inversion_ESTADISTICA","A_O")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatainversion_ESTADISTICA[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">inversion ESTADISTICA</attr>
<attr value="short_table_name">inversion_ESTADISTICA</attr>
</attr>

</chart>';

$tables_data["inversion ESTADISTICA"]=&$tdatainversion_ESTADISTICA;
$field_labels["inversion_ESTADISTICA"] = &$fieldLabelsinversion_ESTADISTICA;
$fieldToolTips["inversion_ESTADISTICA"] = &$fieldToolTipsinversion_ESTADISTICA;
$page_titles["inversion_ESTADISTICA"] = &$pageTitlesinversion_ESTADISTICA;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["inversion ESTADISTICA"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["inversion ESTADISTICA"] = array();


	
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
					$masterTablesData["inversion ESTADISTICA"][0] = $masterParams;
				$masterTablesData["inversion ESTADISTICA"][0]["masterKeys"] = array();
	$masterTablesData["inversion ESTADISTICA"][0]["masterKeys"][]="PROPIETARIO_CEDULA";
				$masterTablesData["inversion ESTADISTICA"][0]["detailKeys"] = array();
	$masterTablesData["inversion ESTADISTICA"][0]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_inversion_ESTADISTICA()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT  DISTINCT";
$proto0["m_strFieldList"] = "VEREDA,  FINCA,  TIPO,  NOMBRE_PROYECTO,  OBSERVACIONES,  `AÑO`";
$proto0["m_strFrom"] = "FROM inversion";
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
	"m_strTable" => "inversion",
	"m_srcTableName" => "inversion ESTADISTICA"
));

$proto6["m_sql"] = "VEREDA";
$proto6["m_srcTableName"] = "inversion ESTADISTICA";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "FINCA",
	"m_strTable" => "inversion",
	"m_srcTableName" => "inversion ESTADISTICA"
));

$proto8["m_sql"] = "FINCA";
$proto8["m_srcTableName"] = "inversion ESTADISTICA";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TIPO",
	"m_strTable" => "inversion",
	"m_srcTableName" => "inversion ESTADISTICA"
));

$proto10["m_sql"] = "TIPO";
$proto10["m_srcTableName"] = "inversion ESTADISTICA";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBRE_PROYECTO",
	"m_strTable" => "inversion",
	"m_srcTableName" => "inversion ESTADISTICA"
));

$proto12["m_sql"] = "NOMBRE_PROYECTO";
$proto12["m_srcTableName"] = "inversion ESTADISTICA";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "OBSERVACIONES",
	"m_strTable" => "inversion",
	"m_srcTableName" => "inversion ESTADISTICA"
));

$proto14["m_sql"] = "OBSERVACIONES";
$proto14["m_srcTableName"] = "inversion ESTADISTICA";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "inversion",
	"m_srcTableName" => "inversion ESTADISTICA"
));

$proto16["m_sql"] = "`AÑO`";
$proto16["m_srcTableName"] = "inversion ESTADISTICA";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "inversion";
$proto19["m_srcTableName"] = "inversion ESTADISTICA";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "ID";
$proto19["m_columns"][] = "FINCA_PROPIETARIO_CEDULA";
$proto19["m_columns"][] = "NOMBRE";
$proto19["m_columns"][] = "VEREDA";
$proto19["m_columns"][] = "FINCA";
$proto19["m_columns"][] = "TIPO";
$proto19["m_columns"][] = "NOMBRE_PROYECTO";
$proto19["m_columns"][] = "OBSERVACIONES";
$proto19["m_columns"][] = "AÑO";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "inversion";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "inversion ESTADISTICA";
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
	"m_strTable" => "inversion",
	"m_srcTableName" => "inversion ESTADISTICA"
));

$proto22["m_column"]=$obj;
$obj = new SQLGroupByItem($proto22);

$proto0["m_groupby"][]=$obj;
												$proto24=array();
						$obj = new SQLField(array(
	"m_strName" => "FINCA",
	"m_strTable" => "inversion",
	"m_srcTableName" => "inversion ESTADISTICA"
));

$proto24["m_column"]=$obj;
$obj = new SQLGroupByItem($proto24);

$proto0["m_groupby"][]=$obj;
												$proto26=array();
						$obj = new SQLField(array(
	"m_strName" => "TIPO",
	"m_strTable" => "inversion",
	"m_srcTableName" => "inversion ESTADISTICA"
));

$proto26["m_column"]=$obj;
$obj = new SQLGroupByItem($proto26);

$proto0["m_groupby"][]=$obj;
												$proto28=array();
						$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "inversion",
	"m_srcTableName" => "inversion ESTADISTICA"
));

$proto28["m_column"]=$obj;
$obj = new SQLGroupByItem($proto28);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="inversion ESTADISTICA";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_inversion_ESTADISTICA = createSqlQuery_inversion_ESTADISTICA();


	
		;

						

$tdatainversion_ESTADISTICA[".sqlquery"] = $queryData_inversion_ESTADISTICA;

$tableEvents["inversion ESTADISTICA"] = new eventsBase;
$tdatainversion_ESTADISTICA[".hasEvents"] = false;

?>