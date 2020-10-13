<?php
require_once(getabspath("classes/cipherer.php"));




$tdatalegal = array();
	$tdatalegal[".truncateText"] = true;
	$tdatalegal[".NumberOfChars"] = 80;
	$tdatalegal[".ShortName"] = "legal";
	$tdatalegal[".OwnerID"] = "";
	$tdatalegal[".OriginalTable"] = "legal";

//	field labels
$fieldLabelslegal = array();
$fieldToolTipslegal = array();
$pageTitleslegal = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelslegal["Spanish"] = array();
	$fieldToolTipslegal["Spanish"] = array();
	$pageTitleslegal["Spanish"] = array();
	$fieldLabelslegal["Spanish"]["ID"] = "ID";
	$fieldToolTipslegal["Spanish"]["ID"] = "";
	$fieldLabelslegal["Spanish"]["FINCA_PROPIETARIO_CEDULA"] = "CEDULA";
	$fieldToolTipslegal["Spanish"]["FINCA_PROPIETARIO_CEDULA"] = "";
	$fieldLabelslegal["Spanish"]["NOMBRE"] = "NOMBRE";
	$fieldToolTipslegal["Spanish"]["NOMBRE"] = "";
	$fieldLabelslegal["Spanish"]["VEREDA"] = "VEREDA";
	$fieldToolTipslegal["Spanish"]["VEREDA"] = "";
	$fieldLabelslegal["Spanish"]["FINCA"] = "FINCA";
	$fieldToolTipslegal["Spanish"]["FINCA"] = "";
	$fieldLabelslegal["Spanish"]["TENECIA"] = "TENENCIA";
	$fieldToolTipslegal["Spanish"]["TENECIA"] = "";
	$fieldLabelslegal["Spanish"]["SOPORTE"] = "SOPORTE";
	$fieldToolTipslegal["Spanish"]["SOPORTE"] = "";
	$fieldLabelslegal["Spanish"]["RUAT"] = "RUAT";
	$fieldToolTipslegal["Spanish"]["RUAT"] = "";
	$fieldLabelslegal["Spanish"]["ASOCIACION"] = "ASOCIACION";
	$fieldToolTipslegal["Spanish"]["ASOCIACION"] = "";
	$fieldLabelslegal["Spanish"]["OBSERVACIONES"] = "OBSERVACIONES";
	$fieldToolTipslegal["Spanish"]["OBSERVACIONES"] = "";
	$fieldLabelslegal["Spanish"]["A_O"] = "AÑO";
	$fieldToolTipslegal["Spanish"]["A_O"] = "";
	if (count($fieldToolTipslegal["Spanish"]))
		$tdatalegal[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelslegal[""] = array();
	$fieldToolTipslegal[""] = array();
	$pageTitleslegal[""] = array();
	if (count($fieldToolTipslegal[""]))
		$tdatalegal[".isUseToolTips"] = true;
}


	$tdatalegal[".NCSearch"] = true;



$tdatalegal[".shortTableName"] = "legal";
$tdatalegal[".nSecOptions"] = 0;
$tdatalegal[".recsPerRowPrint"] = 1;
$tdatalegal[".mainTableOwnerID"] = "";
$tdatalegal[".moveNext"] = 1;
$tdatalegal[".entityType"] = 0;

$tdatalegal[".strOriginalTableName"] = "legal";

	



$tdatalegal[".showAddInPopup"] = false;

$tdatalegal[".showEditInPopup"] = false;

$tdatalegal[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatalegal[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatalegal[".fieldsForRegister"] = array();

$tdatalegal[".listAjax"] = false;

	$tdatalegal[".audit"] = false;

	$tdatalegal[".locking"] = false;

$tdatalegal[".edit"] = true;
$tdatalegal[".afterEditAction"] = 1;
$tdatalegal[".closePopupAfterEdit"] = 1;
$tdatalegal[".afterEditActionDetTable"] = "";

$tdatalegal[".add"] = true;
$tdatalegal[".afterAddAction"] = 1;
$tdatalegal[".closePopupAfterAdd"] = 1;
$tdatalegal[".afterAddActionDetTable"] = "";

$tdatalegal[".list"] = true;

$tdatalegal[".view"] = true;

$tdatalegal[".import"] = true;

$tdatalegal[".exportTo"] = true;

$tdatalegal[".printFriendly"] = true;

$tdatalegal[".delete"] = true;

$tdatalegal[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatalegal[".searchSaving"] = false;
//

$tdatalegal[".showSearchPanel"] = true;
		$tdatalegal[".flexibleSearch"] = true;

$tdatalegal[".isUseAjaxSuggest"] = true;

$tdatalegal[".rowHighlite"] = true;



$tdatalegal[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalegal[".isUseTimeForSearch"] = false;



$tdatalegal[".badgeColor"] = "0000FF";


$tdatalegal[".allSearchFields"] = array();
$tdatalegal[".filterFields"] = array();
$tdatalegal[".requiredSearchFields"] = array();

$tdatalegal[".allSearchFields"][] = "ID";
	$tdatalegal[".allSearchFields"][] = "FINCA_PROPIETARIO_CEDULA";
	$tdatalegal[".allSearchFields"][] = "NOMBRE";
	$tdatalegal[".allSearchFields"][] = "VEREDA";
	$tdatalegal[".allSearchFields"][] = "FINCA";
	$tdatalegal[".allSearchFields"][] = "TENECIA";
	$tdatalegal[".allSearchFields"][] = "SOPORTE";
	$tdatalegal[".allSearchFields"][] = "RUAT";
	$tdatalegal[".allSearchFields"][] = "ASOCIACION";
	$tdatalegal[".allSearchFields"][] = "OBSERVACIONES";
	$tdatalegal[".allSearchFields"][] = "AÑO";
	

$tdatalegal[".googleLikeFields"] = array();
$tdatalegal[".googleLikeFields"][] = "ID";
$tdatalegal[".googleLikeFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatalegal[".googleLikeFields"][] = "NOMBRE";
$tdatalegal[".googleLikeFields"][] = "VEREDA";
$tdatalegal[".googleLikeFields"][] = "FINCA";
$tdatalegal[".googleLikeFields"][] = "TENECIA";
$tdatalegal[".googleLikeFields"][] = "SOPORTE";
$tdatalegal[".googleLikeFields"][] = "RUAT";
$tdatalegal[".googleLikeFields"][] = "ASOCIACION";
$tdatalegal[".googleLikeFields"][] = "OBSERVACIONES";
$tdatalegal[".googleLikeFields"][] = "AÑO";


$tdatalegal[".advSearchFields"] = array();
$tdatalegal[".advSearchFields"][] = "ID";
$tdatalegal[".advSearchFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatalegal[".advSearchFields"][] = "NOMBRE";
$tdatalegal[".advSearchFields"][] = "VEREDA";
$tdatalegal[".advSearchFields"][] = "FINCA";
$tdatalegal[".advSearchFields"][] = "TENECIA";
$tdatalegal[".advSearchFields"][] = "SOPORTE";
$tdatalegal[".advSearchFields"][] = "RUAT";
$tdatalegal[".advSearchFields"][] = "ASOCIACION";
$tdatalegal[".advSearchFields"][] = "OBSERVACIONES";
$tdatalegal[".advSearchFields"][] = "AÑO";

$tdatalegal[".tableType"] = "list";

$tdatalegal[".printerPageOrientation"] = 0;
$tdatalegal[".nPrinterPageScale"] = 100;

$tdatalegal[".nPrinterSplitRecords"] = 40;

$tdatalegal[".nPrinterPDFSplitRecords"] = 40;



$tdatalegal[".geocodingEnabled"] = false;





$tdatalegal[".listGridLayout"] = 3;





// view page pdf
$tdatalegal[".isViewPagePDF"] = true;
$tdatalegal[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatalegal[".isPrinterPagePDF"] = true;
$tdatalegal[".isLandscapePrinterPagePDFOrientation"] = 1;
$tdatalegal[".nPrinterPagePDFScale"] = 100;


$tdatalegal[".pageSize"] = 20;

$tdatalegal[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatalegal[".strOrderBy"] = $tstrOrderBy;

$tdatalegal[".orderindexes"] = array();

$tdatalegal[".sqlHead"] = "SELECT ID,  FINCA_PROPIETARIO_CEDULA,  NOMBRE,  VEREDA,  FINCA,  TENECIA,  SOPORTE,  RUAT,  ASOCIACION,  OBSERVACIONES,  `AÑO`";
$tdatalegal[".sqlFrom"] = "FROM legal";
$tdatalegal[".sqlWhereExpr"] = "";
$tdatalegal[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalegal[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalegal[".arrGroupsPerPage"] = $arrGPP;

$tdatalegal[".highlightSearchResults"] = true;

$tableKeyslegal = array();
$tableKeyslegal[] = "ID";
$tableKeyslegal[] = "FINCA_PROPIETARIO_CEDULA";
$tdatalegal[".Keys"] = $tableKeyslegal;

$tdatalegal[".listFields"] = array();
$tdatalegal[".listFields"][] = "ID";
$tdatalegal[".listFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatalegal[".listFields"][] = "NOMBRE";
$tdatalegal[".listFields"][] = "VEREDA";
$tdatalegal[".listFields"][] = "FINCA";
$tdatalegal[".listFields"][] = "TENECIA";
$tdatalegal[".listFields"][] = "SOPORTE";
$tdatalegal[".listFields"][] = "RUAT";
$tdatalegal[".listFields"][] = "ASOCIACION";
$tdatalegal[".listFields"][] = "OBSERVACIONES";
$tdatalegal[".listFields"][] = "AÑO";

$tdatalegal[".hideMobileList"] = array();


$tdatalegal[".viewFields"] = array();
$tdatalegal[".viewFields"][] = "ID";
$tdatalegal[".viewFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatalegal[".viewFields"][] = "NOMBRE";
$tdatalegal[".viewFields"][] = "VEREDA";
$tdatalegal[".viewFields"][] = "FINCA";
$tdatalegal[".viewFields"][] = "TENECIA";
$tdatalegal[".viewFields"][] = "SOPORTE";
$tdatalegal[".viewFields"][] = "RUAT";
$tdatalegal[".viewFields"][] = "ASOCIACION";
$tdatalegal[".viewFields"][] = "OBSERVACIONES";
$tdatalegal[".viewFields"][] = "AÑO";

$tdatalegal[".addFields"] = array();
$tdatalegal[".addFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatalegal[".addFields"][] = "NOMBRE";
$tdatalegal[".addFields"][] = "VEREDA";
$tdatalegal[".addFields"][] = "FINCA";
$tdatalegal[".addFields"][] = "TENECIA";
$tdatalegal[".addFields"][] = "SOPORTE";
$tdatalegal[".addFields"][] = "RUAT";
$tdatalegal[".addFields"][] = "ASOCIACION";
$tdatalegal[".addFields"][] = "OBSERVACIONES";
$tdatalegal[".addFields"][] = "AÑO";

$tdatalegal[".masterListFields"] = array();
$tdatalegal[".masterListFields"][] = "ID";
$tdatalegal[".masterListFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatalegal[".masterListFields"][] = "NOMBRE";
$tdatalegal[".masterListFields"][] = "VEREDA";
$tdatalegal[".masterListFields"][] = "FINCA";
$tdatalegal[".masterListFields"][] = "TENECIA";
$tdatalegal[".masterListFields"][] = "SOPORTE";
$tdatalegal[".masterListFields"][] = "RUAT";
$tdatalegal[".masterListFields"][] = "ASOCIACION";
$tdatalegal[".masterListFields"][] = "OBSERVACIONES";
$tdatalegal[".masterListFields"][] = "AÑO";

$tdatalegal[".inlineAddFields"] = array();
$tdatalegal[".inlineAddFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatalegal[".inlineAddFields"][] = "NOMBRE";
$tdatalegal[".inlineAddFields"][] = "VEREDA";
$tdatalegal[".inlineAddFields"][] = "FINCA";
$tdatalegal[".inlineAddFields"][] = "TENECIA";
$tdatalegal[".inlineAddFields"][] = "SOPORTE";
$tdatalegal[".inlineAddFields"][] = "RUAT";
$tdatalegal[".inlineAddFields"][] = "ASOCIACION";
$tdatalegal[".inlineAddFields"][] = "OBSERVACIONES";
$tdatalegal[".inlineAddFields"][] = "AÑO";

$tdatalegal[".editFields"] = array();
$tdatalegal[".editFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatalegal[".editFields"][] = "NOMBRE";
$tdatalegal[".editFields"][] = "VEREDA";
$tdatalegal[".editFields"][] = "FINCA";
$tdatalegal[".editFields"][] = "TENECIA";
$tdatalegal[".editFields"][] = "SOPORTE";
$tdatalegal[".editFields"][] = "RUAT";
$tdatalegal[".editFields"][] = "ASOCIACION";
$tdatalegal[".editFields"][] = "OBSERVACIONES";
$tdatalegal[".editFields"][] = "AÑO";

$tdatalegal[".inlineEditFields"] = array();
$tdatalegal[".inlineEditFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatalegal[".inlineEditFields"][] = "NOMBRE";
$tdatalegal[".inlineEditFields"][] = "VEREDA";
$tdatalegal[".inlineEditFields"][] = "FINCA";
$tdatalegal[".inlineEditFields"][] = "TENECIA";
$tdatalegal[".inlineEditFields"][] = "SOPORTE";
$tdatalegal[".inlineEditFields"][] = "RUAT";
$tdatalegal[".inlineEditFields"][] = "ASOCIACION";
$tdatalegal[".inlineEditFields"][] = "OBSERVACIONES";
$tdatalegal[".inlineEditFields"][] = "AÑO";

$tdatalegal[".exportFields"] = array();
$tdatalegal[".exportFields"][] = "ID";
$tdatalegal[".exportFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatalegal[".exportFields"][] = "NOMBRE";
$tdatalegal[".exportFields"][] = "VEREDA";
$tdatalegal[".exportFields"][] = "FINCA";
$tdatalegal[".exportFields"][] = "TENECIA";
$tdatalegal[".exportFields"][] = "SOPORTE";
$tdatalegal[".exportFields"][] = "RUAT";
$tdatalegal[".exportFields"][] = "ASOCIACION";
$tdatalegal[".exportFields"][] = "OBSERVACIONES";
$tdatalegal[".exportFields"][] = "AÑO";

$tdatalegal[".importFields"] = array();
$tdatalegal[".importFields"][] = "ID";
$tdatalegal[".importFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatalegal[".importFields"][] = "NOMBRE";
$tdatalegal[".importFields"][] = "VEREDA";
$tdatalegal[".importFields"][] = "FINCA";
$tdatalegal[".importFields"][] = "TENECIA";
$tdatalegal[".importFields"][] = "SOPORTE";
$tdatalegal[".importFields"][] = "RUAT";
$tdatalegal[".importFields"][] = "ASOCIACION";
$tdatalegal[".importFields"][] = "OBSERVACIONES";
$tdatalegal[".importFields"][] = "AÑO";

$tdatalegal[".printFields"] = array();
$tdatalegal[".printFields"][] = "ID";
$tdatalegal[".printFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatalegal[".printFields"][] = "NOMBRE";
$tdatalegal[".printFields"][] = "VEREDA";
$tdatalegal[".printFields"][] = "FINCA";
$tdatalegal[".printFields"][] = "TENECIA";
$tdatalegal[".printFields"][] = "SOPORTE";
$tdatalegal[".printFields"][] = "RUAT";
$tdatalegal[".printFields"][] = "ASOCIACION";
$tdatalegal[".printFields"][] = "OBSERVACIONES";
$tdatalegal[".printFields"][] = "AÑO";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "legal";
	$fdata["Label"] = GetFieldLabel("legal","ID");
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




	$tdatalegal["ID"] = $fdata;
//	FINCA_PROPIETARIO_CEDULA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FINCA_PROPIETARIO_CEDULA";
	$fdata["GoodName"] = "FINCA_PROPIETARIO_CEDULA";
	$fdata["ownerTable"] = "legal";
	$fdata["Label"] = GetFieldLabel("legal","FINCA_PROPIETARIO_CEDULA");
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
	$edata["LinkFieldType"] = 3;
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




	$tdatalegal["FINCA_PROPIETARIO_CEDULA"] = $fdata;
//	NOMBRE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "NOMBRE";
	$fdata["GoodName"] = "NOMBRE";
	$fdata["ownerTable"] = "legal";
	$fdata["Label"] = GetFieldLabel("legal","NOMBRE");
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




	$tdatalegal["NOMBRE"] = $fdata;
//	VEREDA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "VEREDA";
	$fdata["GoodName"] = "VEREDA";
	$fdata["ownerTable"] = "legal";
	$fdata["Label"] = GetFieldLabel("legal","VEREDA");
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




	$tdatalegal["VEREDA"] = $fdata;
//	FINCA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "FINCA";
	$fdata["GoodName"] = "FINCA";
	$fdata["ownerTable"] = "legal";
	$fdata["Label"] = GetFieldLabel("legal","FINCA");
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




	$tdatalegal["FINCA"] = $fdata;
//	TENECIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "TENECIA";
	$fdata["GoodName"] = "TENECIA";
	$fdata["ownerTable"] = "legal";
	$fdata["Label"] = GetFieldLabel("legal","TENECIA");
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

		$fdata["strField"] = "TENECIA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TENECIA";

	
	
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
	$edata["LookupValues"][] = "PROPIA (Totalmente Pagada)";
	$edata["LookupValues"][] = "PROPIA (La Esta Pagando)";
	$edata["LookupValues"][] = "ARRIENDO";
	$edata["LookupValues"][] = "CON PERMISO DE PROPIETARIO";
	$edata["LookupValues"][] = "OCUPANTE DE HECHO";
	$edata["LookupValues"][] = "POSECION SIN TITULO";
	$edata["LookupValues"][] = "OTRA";

	
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




	$tdatalegal["TENECIA"] = $fdata;
//	SOPORTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "SOPORTE";
	$fdata["GoodName"] = "SOPORTE";
	$fdata["ownerTable"] = "legal";
	$fdata["Label"] = GetFieldLabel("legal","SOPORTE");
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

		$fdata["strField"] = "SOPORTE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SOPORTE";

	
	
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
	$edata["LookupValues"][] = "SI";
	$edata["LookupValues"][] = "NO";

	
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




	$tdatalegal["SOPORTE"] = $fdata;
//	RUAT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "RUAT";
	$fdata["GoodName"] = "RUAT";
	$fdata["ownerTable"] = "legal";
	$fdata["Label"] = GetFieldLabel("legal","RUAT");
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

		$fdata["strField"] = "RUAT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RUAT";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatalegal["RUAT"] = $fdata;
//	ASOCIACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ASOCIACION";
	$fdata["GoodName"] = "ASOCIACION";
	$fdata["ownerTable"] = "legal";
	$fdata["Label"] = GetFieldLabel("legal","ASOCIACION");
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

		$fdata["strField"] = "ASOCIACION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ASOCIACION";

	
	
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
	$edata["LookupValues"][] = "ASOAPIASAN";
	$edata["LookupValues"][] = "ASOPROCASS";
	$edata["LookupValues"][] = "ASOCAPRISAN";
	$edata["LookupValues"][] = "ASPROTRANS";
	$edata["LookupValues"][] = "APROPSAN";
	$edata["LookupValues"][] = "APPROGRAN";
	$edata["LookupValues"][] = "ASOVICTIMAS";
	$edata["LookupValues"][] = "FIBRASSAN";
	$edata["LookupValues"][] = "NINGUNA";

	
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




	$tdatalegal["ASOCIACION"] = $fdata;
//	OBSERVACIONES
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "OBSERVACIONES";
	$fdata["GoodName"] = "OBSERVACIONES";
	$fdata["ownerTable"] = "legal";
	$fdata["Label"] = GetFieldLabel("legal","OBSERVACIONES");
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatalegal["OBSERVACIONES"] = $fdata;
//	AÑO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "AÑO";
	$fdata["GoodName"] = "A_O";
	$fdata["ownerTable"] = "legal";
	$fdata["Label"] = GetFieldLabel("legal","A_O");
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatalegal["AÑO"] = $fdata;


$tables_data["legal"]=&$tdatalegal;
$field_labels["legal"] = &$fieldLabelslegal;
$fieldToolTips["legal"] = &$fieldToolTipslegal;
$page_titles["legal"] = &$pageTitleslegal;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["legal"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["legal"] = array();


	
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
					$masterTablesData["legal"][0] = $masterParams;
				$masterTablesData["legal"][0]["masterKeys"] = array();
	$masterTablesData["legal"][0]["masterKeys"][]="PROPIETARIO_CEDULA";
				$masterTablesData["legal"][0]["detailKeys"] = array();
	$masterTablesData["legal"][0]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
		
	
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
	$masterTablesData["legal"][1] = $masterParams;
				$masterTablesData["legal"][1]["masterKeys"] = array();
	$masterTablesData["legal"][1]["masterKeys"][]="PROPIETARIO_CEDULA";
				$masterTablesData["legal"][1]["detailKeys"] = array();
	$masterTablesData["legal"][1]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
		
	
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
	$masterTablesData["legal"][2] = $masterParams;
				$masterTablesData["legal"][2]["masterKeys"] = array();
	$masterTablesData["legal"][2]["masterKeys"][]="PROPIETARIO_CEDULA";
				$masterTablesData["legal"][2]["detailKeys"] = array();
	$masterTablesData["legal"][2]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
		
	
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
	$masterTablesData["legal"][3] = $masterParams;
				$masterTablesData["legal"][3]["masterKeys"] = array();
	$masterTablesData["legal"][3]["masterKeys"][]="PROPIETARIO_CEDULA";
				$masterTablesData["legal"][3]["detailKeys"] = array();
	$masterTablesData["legal"][3]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_legal()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  FINCA_PROPIETARIO_CEDULA,  NOMBRE,  VEREDA,  FINCA,  TENECIA,  SOPORTE,  RUAT,  ASOCIACION,  OBSERVACIONES,  `AÑO`";
$proto0["m_strFrom"] = "FROM legal";
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
	"m_strTable" => "legal",
	"m_srcTableName" => "legal"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "legal";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "FINCA_PROPIETARIO_CEDULA",
	"m_strTable" => "legal",
	"m_srcTableName" => "legal"
));

$proto8["m_sql"] = "FINCA_PROPIETARIO_CEDULA";
$proto8["m_srcTableName"] = "legal";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBRE",
	"m_strTable" => "legal",
	"m_srcTableName" => "legal"
));

$proto10["m_sql"] = "NOMBRE";
$proto10["m_srcTableName"] = "legal";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "VEREDA",
	"m_strTable" => "legal",
	"m_srcTableName" => "legal"
));

$proto12["m_sql"] = "VEREDA";
$proto12["m_srcTableName"] = "legal";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "FINCA",
	"m_strTable" => "legal",
	"m_srcTableName" => "legal"
));

$proto14["m_sql"] = "FINCA";
$proto14["m_srcTableName"] = "legal";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "TENECIA",
	"m_strTable" => "legal",
	"m_srcTableName" => "legal"
));

$proto16["m_sql"] = "TENECIA";
$proto16["m_srcTableName"] = "legal";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "SOPORTE",
	"m_strTable" => "legal",
	"m_srcTableName" => "legal"
));

$proto18["m_sql"] = "SOPORTE";
$proto18["m_srcTableName"] = "legal";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "RUAT",
	"m_strTable" => "legal",
	"m_srcTableName" => "legal"
));

$proto20["m_sql"] = "RUAT";
$proto20["m_srcTableName"] = "legal";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "ASOCIACION",
	"m_strTable" => "legal",
	"m_srcTableName" => "legal"
));

$proto22["m_sql"] = "ASOCIACION";
$proto22["m_srcTableName"] = "legal";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "OBSERVACIONES",
	"m_strTable" => "legal",
	"m_srcTableName" => "legal"
));

$proto24["m_sql"] = "OBSERVACIONES";
$proto24["m_srcTableName"] = "legal";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "legal",
	"m_srcTableName" => "legal"
));

$proto26["m_sql"] = "`AÑO`";
$proto26["m_srcTableName"] = "legal";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "legal";
$proto29["m_srcTableName"] = "legal";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "ID";
$proto29["m_columns"][] = "FINCA_PROPIETARIO_CEDULA";
$proto29["m_columns"][] = "NOMBRE";
$proto29["m_columns"][] = "VEREDA";
$proto29["m_columns"][] = "FINCA";
$proto29["m_columns"][] = "TENECIA";
$proto29["m_columns"][] = "SOPORTE";
$proto29["m_columns"][] = "RUAT";
$proto29["m_columns"][] = "ASOCIACION";
$proto29["m_columns"][] = "OBSERVACIONES";
$proto29["m_columns"][] = "AÑO";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "legal";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "legal";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto32=array();
						$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "legal",
	"m_srcTableName" => "legal"
));

$proto32["m_column"]=$obj;
$obj = new SQLGroupByItem($proto32);

$proto0["m_groupby"][]=$obj;
												$proto34=array();
						$obj = new SQLField(array(
	"m_strName" => "FINCA_PROPIETARIO_CEDULA",
	"m_strTable" => "legal",
	"m_srcTableName" => "legal"
));

$proto34["m_column"]=$obj;
$obj = new SQLGroupByItem($proto34);

$proto0["m_groupby"][]=$obj;
												$proto36=array();
						$obj = new SQLField(array(
	"m_strName" => "NOMBRE",
	"m_strTable" => "legal",
	"m_srcTableName" => "legal"
));

$proto36["m_column"]=$obj;
$obj = new SQLGroupByItem($proto36);

$proto0["m_groupby"][]=$obj;
												$proto38=array();
						$obj = new SQLField(array(
	"m_strName" => "VEREDA",
	"m_strTable" => "legal",
	"m_srcTableName" => "legal"
));

$proto38["m_column"]=$obj;
$obj = new SQLGroupByItem($proto38);

$proto0["m_groupby"][]=$obj;
												$proto40=array();
						$obj = new SQLField(array(
	"m_strName" => "FINCA",
	"m_strTable" => "legal",
	"m_srcTableName" => "legal"
));

$proto40["m_column"]=$obj;
$obj = new SQLGroupByItem($proto40);

$proto0["m_groupby"][]=$obj;
												$proto42=array();
						$obj = new SQLField(array(
	"m_strName" => "TENECIA",
	"m_strTable" => "legal",
	"m_srcTableName" => "legal"
));

$proto42["m_column"]=$obj;
$obj = new SQLGroupByItem($proto42);

$proto0["m_groupby"][]=$obj;
												$proto44=array();
						$obj = new SQLField(array(
	"m_strName" => "SOPORTE",
	"m_strTable" => "legal",
	"m_srcTableName" => "legal"
));

$proto44["m_column"]=$obj;
$obj = new SQLGroupByItem($proto44);

$proto0["m_groupby"][]=$obj;
												$proto46=array();
						$obj = new SQLField(array(
	"m_strName" => "RUAT",
	"m_strTable" => "legal",
	"m_srcTableName" => "legal"
));

$proto46["m_column"]=$obj;
$obj = new SQLGroupByItem($proto46);

$proto0["m_groupby"][]=$obj;
												$proto48=array();
						$obj = new SQLField(array(
	"m_strName" => "ASOCIACION",
	"m_strTable" => "legal",
	"m_srcTableName" => "legal"
));

$proto48["m_column"]=$obj;
$obj = new SQLGroupByItem($proto48);

$proto0["m_groupby"][]=$obj;
												$proto50=array();
						$obj = new SQLField(array(
	"m_strName" => "OBSERVACIONES",
	"m_strTable" => "legal",
	"m_srcTableName" => "legal"
));

$proto50["m_column"]=$obj;
$obj = new SQLGroupByItem($proto50);

$proto0["m_groupby"][]=$obj;
												$proto52=array();
						$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "legal",
	"m_srcTableName" => "legal"
));

$proto52["m_column"]=$obj;
$obj = new SQLGroupByItem($proto52);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="legal";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_legal = createSqlQuery_legal();


	
		;

											

$tdatalegal[".sqlquery"] = $queryData_legal;

$tableEvents["legal"] = new eventsBase;
$tdatalegal[".hasEvents"] = false;

?>