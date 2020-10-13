<?php
require_once(getabspath("classes/cipherer.php"));




$tdatahortifruticola = array();
	$tdatahortifruticola[".truncateText"] = true;
	$tdatahortifruticola[".NumberOfChars"] = 80;
	$tdatahortifruticola[".ShortName"] = "hortifruticola";
	$tdatahortifruticola[".OwnerID"] = "";
	$tdatahortifruticola[".OriginalTable"] = "hortifruticola";

//	field labels
$fieldLabelshortifruticola = array();
$fieldToolTipshortifruticola = array();
$pageTitleshortifruticola = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelshortifruticola["Spanish"] = array();
	$fieldToolTipshortifruticola["Spanish"] = array();
	$pageTitleshortifruticola["Spanish"] = array();
	$fieldLabelshortifruticola["Spanish"]["ID"] = "ID";
	$fieldToolTipshortifruticola["Spanish"]["ID"] = "";
	$fieldLabelshortifruticola["Spanish"]["FINCA_PROPIETARIO_CEDULA"] = "CEDULA";
	$fieldToolTipshortifruticola["Spanish"]["FINCA_PROPIETARIO_CEDULA"] = "";
	$fieldLabelshortifruticola["Spanish"]["NOMBRE"] = "NOMBRE";
	$fieldToolTipshortifruticola["Spanish"]["NOMBRE"] = "";
	$fieldLabelshortifruticola["Spanish"]["VEREDA"] = "VEREDA";
	$fieldToolTipshortifruticola["Spanish"]["VEREDA"] = "";
	$fieldLabelshortifruticola["Spanish"]["FINCA"] = "FINCA";
	$fieldToolTipshortifruticola["Spanish"]["FINCA"] = "";
	$fieldLabelshortifruticola["Spanish"]["VARIEDAD"] = "VARIEDAD";
	$fieldToolTipshortifruticola["Spanish"]["VARIEDAD"] = "";
	$fieldLabelshortifruticola["Spanish"]["AREA"] = "AREA";
	$fieldToolTipshortifruticola["Spanish"]["AREA"] = "";
	$fieldLabelshortifruticola["Spanish"]["PRODUCCION_ANUAL"] = "PROD. ANUAL (Toneladas)";
	$fieldToolTipshortifruticola["Spanish"]["PRODUCCION_ANUAL"] = "";
	$fieldLabelshortifruticola["Spanish"]["A_O"] = "AÑO";
	$fieldToolTipshortifruticola["Spanish"]["A_O"] = "";
	$pageTitleshortifruticola["Spanish"]["add"] = "Fruticola, Añadir";
	if (count($fieldToolTipshortifruticola["Spanish"]))
		$tdatahortifruticola[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelshortifruticola[""] = array();
	$fieldToolTipshortifruticola[""] = array();
	$pageTitleshortifruticola[""] = array();
	if (count($fieldToolTipshortifruticola[""]))
		$tdatahortifruticola[".isUseToolTips"] = true;
}


	$tdatahortifruticola[".NCSearch"] = true;



$tdatahortifruticola[".shortTableName"] = "hortifruticola";
$tdatahortifruticola[".nSecOptions"] = 0;
$tdatahortifruticola[".recsPerRowPrint"] = 1;
$tdatahortifruticola[".mainTableOwnerID"] = "";
$tdatahortifruticola[".moveNext"] = 1;
$tdatahortifruticola[".entityType"] = 0;

$tdatahortifruticola[".strOriginalTableName"] = "hortifruticola";

	



$tdatahortifruticola[".showAddInPopup"] = false;

$tdatahortifruticola[".showEditInPopup"] = false;

$tdatahortifruticola[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatahortifruticola[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatahortifruticola[".fieldsForRegister"] = array();

$tdatahortifruticola[".listAjax"] = false;

	$tdatahortifruticola[".audit"] = false;

	$tdatahortifruticola[".locking"] = false;

$tdatahortifruticola[".edit"] = true;
$tdatahortifruticola[".afterEditAction"] = 1;
$tdatahortifruticola[".closePopupAfterEdit"] = 1;
$tdatahortifruticola[".afterEditActionDetTable"] = "";

$tdatahortifruticola[".add"] = true;
$tdatahortifruticola[".afterAddAction"] = 1;
$tdatahortifruticola[".closePopupAfterAdd"] = 1;
$tdatahortifruticola[".afterAddActionDetTable"] = "";

$tdatahortifruticola[".list"] = true;

$tdatahortifruticola[".view"] = true;

$tdatahortifruticola[".import"] = true;

$tdatahortifruticola[".exportTo"] = true;

$tdatahortifruticola[".printFriendly"] = true;

$tdatahortifruticola[".delete"] = true;

$tdatahortifruticola[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatahortifruticola[".searchSaving"] = false;
//

$tdatahortifruticola[".showSearchPanel"] = true;
		$tdatahortifruticola[".flexibleSearch"] = true;

$tdatahortifruticola[".isUseAjaxSuggest"] = true;

$tdatahortifruticola[".rowHighlite"] = true;



$tdatahortifruticola[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahortifruticola[".isUseTimeForSearch"] = false;



$tdatahortifruticola[".badgeColor"] = "7B7BC0";


$tdatahortifruticola[".allSearchFields"] = array();
$tdatahortifruticola[".filterFields"] = array();
$tdatahortifruticola[".requiredSearchFields"] = array();

$tdatahortifruticola[".allSearchFields"][] = "ID";
	$tdatahortifruticola[".allSearchFields"][] = "FINCA_PROPIETARIO_CEDULA";
	$tdatahortifruticola[".allSearchFields"][] = "NOMBRE";
	$tdatahortifruticola[".allSearchFields"][] = "VEREDA";
	$tdatahortifruticola[".allSearchFields"][] = "FINCA";
	$tdatahortifruticola[".allSearchFields"][] = "VARIEDAD";
	$tdatahortifruticola[".allSearchFields"][] = "AREA";
	$tdatahortifruticola[".allSearchFields"][] = "PRODUCCION_ANUAL";
	$tdatahortifruticola[".allSearchFields"][] = "AÑO";
	

$tdatahortifruticola[".googleLikeFields"] = array();
$tdatahortifruticola[".googleLikeFields"][] = "ID";
$tdatahortifruticola[".googleLikeFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatahortifruticola[".googleLikeFields"][] = "NOMBRE";
$tdatahortifruticola[".googleLikeFields"][] = "VEREDA";
$tdatahortifruticola[".googleLikeFields"][] = "FINCA";
$tdatahortifruticola[".googleLikeFields"][] = "VARIEDAD";
$tdatahortifruticola[".googleLikeFields"][] = "AREA";
$tdatahortifruticola[".googleLikeFields"][] = "PRODUCCION_ANUAL";
$tdatahortifruticola[".googleLikeFields"][] = "AÑO";


$tdatahortifruticola[".advSearchFields"] = array();
$tdatahortifruticola[".advSearchFields"][] = "ID";
$tdatahortifruticola[".advSearchFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatahortifruticola[".advSearchFields"][] = "NOMBRE";
$tdatahortifruticola[".advSearchFields"][] = "VEREDA";
$tdatahortifruticola[".advSearchFields"][] = "FINCA";
$tdatahortifruticola[".advSearchFields"][] = "VARIEDAD";
$tdatahortifruticola[".advSearchFields"][] = "AREA";
$tdatahortifruticola[".advSearchFields"][] = "PRODUCCION_ANUAL";
$tdatahortifruticola[".advSearchFields"][] = "AÑO";

$tdatahortifruticola[".tableType"] = "list";

$tdatahortifruticola[".printerPageOrientation"] = 0;
$tdatahortifruticola[".nPrinterPageScale"] = 100;

$tdatahortifruticola[".nPrinterSplitRecords"] = 40;

$tdatahortifruticola[".nPrinterPDFSplitRecords"] = 40;



$tdatahortifruticola[".geocodingEnabled"] = false;





$tdatahortifruticola[".listGridLayout"] = 3;





// view page pdf
$tdatahortifruticola[".isViewPagePDF"] = true;
$tdatahortifruticola[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatahortifruticola[".isPrinterPagePDF"] = true;
$tdatahortifruticola[".isLandscapePrinterPagePDFOrientation"] = 1;
$tdatahortifruticola[".nPrinterPagePDFScale"] = 100;


$tdatahortifruticola[".pageSize"] = 20;

$tdatahortifruticola[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatahortifruticola[".strOrderBy"] = $tstrOrderBy;

$tdatahortifruticola[".orderindexes"] = array();

$tdatahortifruticola[".sqlHead"] = "SELECT ID,  FINCA_PROPIETARIO_CEDULA,  NOMBRE,  VEREDA,  FINCA,  VARIEDAD,  AREA,  PRODUCCION_ANUAL,  `AÑO`";
$tdatahortifruticola[".sqlFrom"] = "FROM hortifruticola";
$tdatahortifruticola[".sqlWhereExpr"] = "";
$tdatahortifruticola[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahortifruticola[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahortifruticola[".arrGroupsPerPage"] = $arrGPP;

$tdatahortifruticola[".highlightSearchResults"] = true;

$tableKeyshortifruticola = array();
$tableKeyshortifruticola[] = "ID";
$tableKeyshortifruticola[] = "FINCA_PROPIETARIO_CEDULA";
$tdatahortifruticola[".Keys"] = $tableKeyshortifruticola;

$tdatahortifruticola[".listFields"] = array();
$tdatahortifruticola[".listFields"][] = "ID";
$tdatahortifruticola[".listFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatahortifruticola[".listFields"][] = "NOMBRE";
$tdatahortifruticola[".listFields"][] = "VEREDA";
$tdatahortifruticola[".listFields"][] = "FINCA";
$tdatahortifruticola[".listFields"][] = "VARIEDAD";
$tdatahortifruticola[".listFields"][] = "AREA";
$tdatahortifruticola[".listFields"][] = "PRODUCCION_ANUAL";
$tdatahortifruticola[".listFields"][] = "AÑO";

$tdatahortifruticola[".hideMobileList"] = array();


$tdatahortifruticola[".viewFields"] = array();
$tdatahortifruticola[".viewFields"][] = "ID";
$tdatahortifruticola[".viewFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatahortifruticola[".viewFields"][] = "NOMBRE";
$tdatahortifruticola[".viewFields"][] = "VEREDA";
$tdatahortifruticola[".viewFields"][] = "FINCA";
$tdatahortifruticola[".viewFields"][] = "VARIEDAD";
$tdatahortifruticola[".viewFields"][] = "AREA";
$tdatahortifruticola[".viewFields"][] = "PRODUCCION_ANUAL";
$tdatahortifruticola[".viewFields"][] = "AÑO";

$tdatahortifruticola[".addFields"] = array();
$tdatahortifruticola[".addFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatahortifruticola[".addFields"][] = "NOMBRE";
$tdatahortifruticola[".addFields"][] = "VEREDA";
$tdatahortifruticola[".addFields"][] = "FINCA";
$tdatahortifruticola[".addFields"][] = "VARIEDAD";
$tdatahortifruticola[".addFields"][] = "AREA";
$tdatahortifruticola[".addFields"][] = "PRODUCCION_ANUAL";
$tdatahortifruticola[".addFields"][] = "AÑO";

$tdatahortifruticola[".masterListFields"] = array();
$tdatahortifruticola[".masterListFields"][] = "ID";
$tdatahortifruticola[".masterListFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatahortifruticola[".masterListFields"][] = "NOMBRE";
$tdatahortifruticola[".masterListFields"][] = "VEREDA";
$tdatahortifruticola[".masterListFields"][] = "FINCA";
$tdatahortifruticola[".masterListFields"][] = "VARIEDAD";
$tdatahortifruticola[".masterListFields"][] = "AREA";
$tdatahortifruticola[".masterListFields"][] = "PRODUCCION_ANUAL";
$tdatahortifruticola[".masterListFields"][] = "AÑO";

$tdatahortifruticola[".inlineAddFields"] = array();
$tdatahortifruticola[".inlineAddFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatahortifruticola[".inlineAddFields"][] = "NOMBRE";
$tdatahortifruticola[".inlineAddFields"][] = "VEREDA";
$tdatahortifruticola[".inlineAddFields"][] = "FINCA";
$tdatahortifruticola[".inlineAddFields"][] = "VARIEDAD";
$tdatahortifruticola[".inlineAddFields"][] = "AREA";
$tdatahortifruticola[".inlineAddFields"][] = "PRODUCCION_ANUAL";
$tdatahortifruticola[".inlineAddFields"][] = "AÑO";

$tdatahortifruticola[".editFields"] = array();
$tdatahortifruticola[".editFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatahortifruticola[".editFields"][] = "NOMBRE";
$tdatahortifruticola[".editFields"][] = "VEREDA";
$tdatahortifruticola[".editFields"][] = "FINCA";
$tdatahortifruticola[".editFields"][] = "VARIEDAD";
$tdatahortifruticola[".editFields"][] = "AREA";
$tdatahortifruticola[".editFields"][] = "PRODUCCION_ANUAL";
$tdatahortifruticola[".editFields"][] = "AÑO";

$tdatahortifruticola[".inlineEditFields"] = array();
$tdatahortifruticola[".inlineEditFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatahortifruticola[".inlineEditFields"][] = "NOMBRE";
$tdatahortifruticola[".inlineEditFields"][] = "VEREDA";
$tdatahortifruticola[".inlineEditFields"][] = "FINCA";
$tdatahortifruticola[".inlineEditFields"][] = "VARIEDAD";
$tdatahortifruticola[".inlineEditFields"][] = "AREA";
$tdatahortifruticola[".inlineEditFields"][] = "PRODUCCION_ANUAL";
$tdatahortifruticola[".inlineEditFields"][] = "AÑO";

$tdatahortifruticola[".exportFields"] = array();
$tdatahortifruticola[".exportFields"][] = "ID";
$tdatahortifruticola[".exportFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatahortifruticola[".exportFields"][] = "NOMBRE";
$tdatahortifruticola[".exportFields"][] = "VEREDA";
$tdatahortifruticola[".exportFields"][] = "FINCA";
$tdatahortifruticola[".exportFields"][] = "VARIEDAD";
$tdatahortifruticola[".exportFields"][] = "AREA";
$tdatahortifruticola[".exportFields"][] = "PRODUCCION_ANUAL";
$tdatahortifruticola[".exportFields"][] = "AÑO";

$tdatahortifruticola[".importFields"] = array();
$tdatahortifruticola[".importFields"][] = "ID";
$tdatahortifruticola[".importFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatahortifruticola[".importFields"][] = "NOMBRE";
$tdatahortifruticola[".importFields"][] = "VEREDA";
$tdatahortifruticola[".importFields"][] = "FINCA";
$tdatahortifruticola[".importFields"][] = "VARIEDAD";
$tdatahortifruticola[".importFields"][] = "AREA";
$tdatahortifruticola[".importFields"][] = "PRODUCCION_ANUAL";
$tdatahortifruticola[".importFields"][] = "AÑO";

$tdatahortifruticola[".printFields"] = array();
$tdatahortifruticola[".printFields"][] = "ID";
$tdatahortifruticola[".printFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatahortifruticola[".printFields"][] = "NOMBRE";
$tdatahortifruticola[".printFields"][] = "VEREDA";
$tdatahortifruticola[".printFields"][] = "FINCA";
$tdatahortifruticola[".printFields"][] = "VARIEDAD";
$tdatahortifruticola[".printFields"][] = "AREA";
$tdatahortifruticola[".printFields"][] = "PRODUCCION_ANUAL";
$tdatahortifruticola[".printFields"][] = "AÑO";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "hortifruticola";
	$fdata["Label"] = GetFieldLabel("hortifruticola","ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahortifruticola["ID"] = $fdata;
//	FINCA_PROPIETARIO_CEDULA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FINCA_PROPIETARIO_CEDULA";
	$fdata["GoodName"] = "FINCA_PROPIETARIO_CEDULA";
	$fdata["ownerTable"] = "hortifruticola";
	$fdata["Label"] = GetFieldLabel("hortifruticola","FINCA_PROPIETARIO_CEDULA");
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

		$fdata["strField"] = "FINCA_PROPIETARIO_CEDULA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FINCA_PROPIETARIO_CEDULA";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "finca";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"NOMBRE", 'lookupF'=>"NOMBRE");
	$edata["autoCompleteFields"][] = array('masterF'=>"VEREDA", 'lookupF'=>"VEREDA");
	$edata["autoCompleteFields"][] = array('masterF'=>"FINCA", 'lookupF'=>"FINCA");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "PROPIETARIO_CEDULA";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "PROPIETARIO_CEDULA";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahortifruticola["FINCA_PROPIETARIO_CEDULA"] = $fdata;
//	NOMBRE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "NOMBRE";
	$fdata["GoodName"] = "NOMBRE";
	$fdata["ownerTable"] = "hortifruticola";
	$fdata["Label"] = GetFieldLabel("hortifruticola","NOMBRE");
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

		$fdata["strField"] = "NOMBRE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NOMBRE";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
		
	$edata["LinkField"] = "NOMBRE";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "NOMBRE";

	
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahortifruticola["NOMBRE"] = $fdata;
//	VEREDA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "VEREDA";
	$fdata["GoodName"] = "VEREDA";
	$fdata["ownerTable"] = "hortifruticola";
	$fdata["Label"] = GetFieldLabel("hortifruticola","VEREDA");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahortifruticola["VEREDA"] = $fdata;
//	FINCA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "FINCA";
	$fdata["GoodName"] = "FINCA";
	$fdata["ownerTable"] = "hortifruticola";
	$fdata["Label"] = GetFieldLabel("hortifruticola","FINCA");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahortifruticola["FINCA"] = $fdata;
//	VARIEDAD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "VARIEDAD";
	$fdata["GoodName"] = "VARIEDAD";
	$fdata["ownerTable"] = "hortifruticola";
	$fdata["Label"] = GetFieldLabel("hortifruticola","VARIEDAD");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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
	$edata["LookupValues"][] = "AGUACATE";
	$edata["LookupValues"][] = "BANANILLO BOCADILLO";
	$edata["LookupValues"][] = "BANANO";
	$edata["LookupValues"][] = "CHIRIMOYA";
	$edata["LookupValues"][] = "CURUBA";
	$edata["LookupValues"][] = "FEIJOA";
	$edata["LookupValues"][] = "FRESA";
	$edata["LookupValues"][] = "GRANADILLA";
	$edata["LookupValues"][] = "GUANABANA";
	$edata["LookupValues"][] = "GUAYABA";
	$edata["LookupValues"][] = "LIMON MANDARINA";
	$edata["LookupValues"][] = "LIMON TAHITI";
	$edata["LookupValues"][] = "LIMON COMÚN";
	$edata["LookupValues"][] = "LULO";
	$edata["LookupValues"][] = "MAMONCILLO";
	$edata["LookupValues"][] = "MANDARINA";
	$edata["LookupValues"][] = "MANGO";
	$edata["LookupValues"][] = "MARACUYÁ";
	$edata["LookupValues"][] = "MELON";
	$edata["LookupValues"][] = "NARANJA";
	$edata["LookupValues"][] = "MORA";
	$edata["LookupValues"][] = "PAPAYA";
	$edata["LookupValues"][] = "PIÑA";
	$edata["LookupValues"][] = "TAMARINDO";
	$edata["LookupValues"][] = "TOMATE ARBOL";
	$edata["LookupValues"][] = "ZAPOTE";
	$edata["LookupValues"][] = "OTRO";

	
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahortifruticola["VARIEDAD"] = $fdata;
//	AREA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "AREA";
	$fdata["GoodName"] = "AREA";
	$fdata["ownerTable"] = "hortifruticola";
	$fdata["Label"] = GetFieldLabel("hortifruticola","AREA");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahortifruticola["AREA"] = $fdata;
//	PRODUCCION_ANUAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "PRODUCCION_ANUAL";
	$fdata["GoodName"] = "PRODUCCION_ANUAL";
	$fdata["ownerTable"] = "hortifruticola";
	$fdata["Label"] = GetFieldLabel("hortifruticola","PRODUCCION_ANUAL");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahortifruticola["PRODUCCION_ANUAL"] = $fdata;
//	AÑO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "AÑO";
	$fdata["GoodName"] = "A_O";
	$fdata["ownerTable"] = "hortifruticola";
	$fdata["Label"] = GetFieldLabel("hortifruticola","A_O");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahortifruticola["AÑO"] = $fdata;


$tables_data["hortifruticola"]=&$tdatahortifruticola;
$field_labels["hortifruticola"] = &$fieldLabelshortifruticola;
$fieldToolTips["hortifruticola"] = &$fieldToolTipshortifruticola;
$page_titles["hortifruticola"] = &$pageTitleshortifruticola;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["hortifruticola"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["hortifruticola"] = array();


	
				$strOriginalDetailsTable="finca";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="finca";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "finca";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
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
					$masterTablesData["hortifruticola"][0] = $masterParams;
				$masterTablesData["hortifruticola"][0]["masterKeys"] = array();
	$masterTablesData["hortifruticola"][0]["masterKeys"][]="PROPIETARIO_CEDULA";
				$masterTablesData["hortifruticola"][0]["detailKeys"] = array();
	$masterTablesData["hortifruticola"][0]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
		
	
				$strOriginalDetailsTable="finca";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="REPORTE GLOBAL";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "REPORTE_GLOBAL";
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
					$masterParams["type"] = PAGE_REPORT;
	$masterTablesData["hortifruticola"][1] = $masterParams;
				$masterTablesData["hortifruticola"][1]["masterKeys"] = array();
	$masterTablesData["hortifruticola"][1]["masterKeys"][]="PROPIETARIO_CEDULA";
				$masterTablesData["hortifruticola"][1]["detailKeys"] = array();
	$masterTablesData["hortifruticola"][1]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
		
	
				$strOriginalDetailsTable="finca";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="REPORTE FINCA";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "REPORTE_FINCA";
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
					$masterParams["type"] = PAGE_REPORT;
	$masterTablesData["hortifruticola"][2] = $masterParams;
				$masterTablesData["hortifruticola"][2]["masterKeys"] = array();
	$masterTablesData["hortifruticola"][2]["masterKeys"][]="PROPIETARIO_CEDULA";
				$masterTablesData["hortifruticola"][2]["detailKeys"] = array();
	$masterTablesData["hortifruticola"][2]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
		
	
				$strOriginalDetailsTable="finca";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="REPORTE VEREDA";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "REPORTE_VEREDA";
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
					$masterParams["type"] = PAGE_REPORT;
	$masterTablesData["hortifruticola"][3] = $masterParams;
				$masterTablesData["hortifruticola"][3]["masterKeys"] = array();
	$masterTablesData["hortifruticola"][3]["masterKeys"][]="PROPIETARIO_CEDULA";
				$masterTablesData["hortifruticola"][3]["detailKeys"] = array();
	$masterTablesData["hortifruticola"][3]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_hortifruticola()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  FINCA_PROPIETARIO_CEDULA,  NOMBRE,  VEREDA,  FINCA,  VARIEDAD,  AREA,  PRODUCCION_ANUAL,  `AÑO`";
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
	"m_strName" => "ID",
	"m_strTable" => "hortifruticola",
	"m_srcTableName" => "hortifruticola"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "hortifruticola";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "FINCA_PROPIETARIO_CEDULA",
	"m_strTable" => "hortifruticola",
	"m_srcTableName" => "hortifruticola"
));

$proto8["m_sql"] = "FINCA_PROPIETARIO_CEDULA";
$proto8["m_srcTableName"] = "hortifruticola";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBRE",
	"m_strTable" => "hortifruticola",
	"m_srcTableName" => "hortifruticola"
));

$proto10["m_sql"] = "NOMBRE";
$proto10["m_srcTableName"] = "hortifruticola";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "VEREDA",
	"m_strTable" => "hortifruticola",
	"m_srcTableName" => "hortifruticola"
));

$proto12["m_sql"] = "VEREDA";
$proto12["m_srcTableName"] = "hortifruticola";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "FINCA",
	"m_strTable" => "hortifruticola",
	"m_srcTableName" => "hortifruticola"
));

$proto14["m_sql"] = "FINCA";
$proto14["m_srcTableName"] = "hortifruticola";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "VARIEDAD",
	"m_strTable" => "hortifruticola",
	"m_srcTableName" => "hortifruticola"
));

$proto16["m_sql"] = "VARIEDAD";
$proto16["m_srcTableName"] = "hortifruticola";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "AREA",
	"m_strTable" => "hortifruticola",
	"m_srcTableName" => "hortifruticola"
));

$proto18["m_sql"] = "AREA";
$proto18["m_srcTableName"] = "hortifruticola";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "PRODUCCION_ANUAL",
	"m_strTable" => "hortifruticola",
	"m_srcTableName" => "hortifruticola"
));

$proto20["m_sql"] = "PRODUCCION_ANUAL";
$proto20["m_srcTableName"] = "hortifruticola";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "hortifruticola",
	"m_srcTableName" => "hortifruticola"
));

$proto22["m_sql"] = "`AÑO`";
$proto22["m_srcTableName"] = "hortifruticola";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "hortifruticola";
$proto25["m_srcTableName"] = "hortifruticola";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "ID";
$proto25["m_columns"][] = "FINCA_PROPIETARIO_CEDULA";
$proto25["m_columns"][] = "NOMBRE";
$proto25["m_columns"][] = "VEREDA";
$proto25["m_columns"][] = "FINCA";
$proto25["m_columns"][] = "VARIEDAD";
$proto25["m_columns"][] = "AREA";
$proto25["m_columns"][] = "PRODUCCION_ANUAL";
$proto25["m_columns"][] = "AÑO";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "hortifruticola";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "hortifruticola";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto28=array();
						$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "hortifruticola",
	"m_srcTableName" => "hortifruticola"
));

$proto28["m_column"]=$obj;
$obj = new SQLGroupByItem($proto28);

$proto0["m_groupby"][]=$obj;
												$proto30=array();
						$obj = new SQLField(array(
	"m_strName" => "FINCA_PROPIETARIO_CEDULA",
	"m_strTable" => "hortifruticola",
	"m_srcTableName" => "hortifruticola"
));

$proto30["m_column"]=$obj;
$obj = new SQLGroupByItem($proto30);

$proto0["m_groupby"][]=$obj;
												$proto32=array();
						$obj = new SQLField(array(
	"m_strName" => "NOMBRE",
	"m_strTable" => "hortifruticola",
	"m_srcTableName" => "hortifruticola"
));

$proto32["m_column"]=$obj;
$obj = new SQLGroupByItem($proto32);

$proto0["m_groupby"][]=$obj;
												$proto34=array();
						$obj = new SQLField(array(
	"m_strName" => "VEREDA",
	"m_strTable" => "hortifruticola",
	"m_srcTableName" => "hortifruticola"
));

$proto34["m_column"]=$obj;
$obj = new SQLGroupByItem($proto34);

$proto0["m_groupby"][]=$obj;
												$proto36=array();
						$obj = new SQLField(array(
	"m_strName" => "FINCA",
	"m_strTable" => "hortifruticola",
	"m_srcTableName" => "hortifruticola"
));

$proto36["m_column"]=$obj;
$obj = new SQLGroupByItem($proto36);

$proto0["m_groupby"][]=$obj;
												$proto38=array();
						$obj = new SQLField(array(
	"m_strName" => "VARIEDAD",
	"m_strTable" => "hortifruticola",
	"m_srcTableName" => "hortifruticola"
));

$proto38["m_column"]=$obj;
$obj = new SQLGroupByItem($proto38);

$proto0["m_groupby"][]=$obj;
												$proto40=array();
						$obj = new SQLField(array(
	"m_strName" => "AREA",
	"m_strTable" => "hortifruticola",
	"m_srcTableName" => "hortifruticola"
));

$proto40["m_column"]=$obj;
$obj = new SQLGroupByItem($proto40);

$proto0["m_groupby"][]=$obj;
												$proto42=array();
						$obj = new SQLField(array(
	"m_strName" => "PRODUCCION_ANUAL",
	"m_strTable" => "hortifruticola",
	"m_srcTableName" => "hortifruticola"
));

$proto42["m_column"]=$obj;
$obj = new SQLGroupByItem($proto42);

$proto0["m_groupby"][]=$obj;
												$proto44=array();
						$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "hortifruticola",
	"m_srcTableName" => "hortifruticola"
));

$proto44["m_column"]=$obj;
$obj = new SQLGroupByItem($proto44);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="hortifruticola";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hortifruticola = createSqlQuery_hortifruticola();


	
		;

									

$tdatahortifruticola[".sqlquery"] = $queryData_hortifruticola;

$tableEvents["hortifruticola"] = new eventsBase;
$tdatahortifruticola[".hasEvents"] = false;

?>