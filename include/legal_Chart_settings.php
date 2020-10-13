<?php
require_once(getabspath("classes/cipherer.php"));




$tdatalegal_Chart = array();
	$tdatalegal_Chart[".ShortName"] = "legal_Chart";
	$tdatalegal_Chart[".OwnerID"] = "";
	$tdatalegal_Chart[".OriginalTable"] = "legal";

//	field labels
$fieldLabelslegal_Chart = array();
$fieldToolTipslegal_Chart = array();
$pageTitleslegal_Chart = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelslegal_Chart["Spanish"] = array();
	$fieldToolTipslegal_Chart["Spanish"] = array();
	$pageTitleslegal_Chart["Spanish"] = array();
	$fieldLabelslegal_Chart["Spanish"]["ID"] = "ID";
	$fieldToolTipslegal_Chart["Spanish"]["ID"] = "";
	$fieldLabelslegal_Chart["Spanish"]["FINCA_PROPIETARIO_CEDULA"] = "FINCA PROPIETARIO CEDULA";
	$fieldToolTipslegal_Chart["Spanish"]["FINCA_PROPIETARIO_CEDULA"] = "";
	$fieldLabelslegal_Chart["Spanish"]["NOMBRE"] = "NOMBRE";
	$fieldToolTipslegal_Chart["Spanish"]["NOMBRE"] = "";
	$fieldLabelslegal_Chart["Spanish"]["VEREDA"] = "VEREDA";
	$fieldToolTipslegal_Chart["Spanish"]["VEREDA"] = "";
	$fieldLabelslegal_Chart["Spanish"]["FINCA"] = "FINCA";
	$fieldToolTipslegal_Chart["Spanish"]["FINCA"] = "";
	$fieldLabelslegal_Chart["Spanish"]["TENECIA"] = "TENECIA";
	$fieldToolTipslegal_Chart["Spanish"]["TENECIA"] = "";
	$fieldLabelslegal_Chart["Spanish"]["SOPORTE"] = "SOPORTE";
	$fieldToolTipslegal_Chart["Spanish"]["SOPORTE"] = "";
	$fieldLabelslegal_Chart["Spanish"]["RUAT"] = "RUAT";
	$fieldToolTipslegal_Chart["Spanish"]["RUAT"] = "";
	$fieldLabelslegal_Chart["Spanish"]["ASOCIACION"] = "ASOCIACION";
	$fieldToolTipslegal_Chart["Spanish"]["ASOCIACION"] = "";
	$fieldLabelslegal_Chart["Spanish"]["OBSERVACIONES"] = "OBSERVACIONES";
	$fieldToolTipslegal_Chart["Spanish"]["OBSERVACIONES"] = "";
	$fieldLabelslegal_Chart["Spanish"]["A_O"] = "AÑO";
	$fieldToolTipslegal_Chart["Spanish"]["A_O"] = "";
	if (count($fieldToolTipslegal_Chart["Spanish"]))
		$tdatalegal_Chart[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelslegal_Chart[""] = array();
	$fieldToolTipslegal_Chart[""] = array();
	$pageTitleslegal_Chart[""] = array();
	$fieldLabelslegal_Chart[""]["ID"] = "ID";
	$fieldToolTipslegal_Chart[""]["ID"] = "";
	$fieldLabelslegal_Chart[""]["FINCA_PROPIETARIO_CEDULA"] = "FINCA PROPIETARIO CEDULA";
	$fieldToolTipslegal_Chart[""]["FINCA_PROPIETARIO_CEDULA"] = "";
	$fieldLabelslegal_Chart[""]["NOMBRE"] = "NOMBRE";
	$fieldToolTipslegal_Chart[""]["NOMBRE"] = "";
	$fieldLabelslegal_Chart[""]["VEREDA"] = "VEREDA";
	$fieldToolTipslegal_Chart[""]["VEREDA"] = "";
	$fieldLabelslegal_Chart[""]["FINCA"] = "FINCA";
	$fieldToolTipslegal_Chart[""]["FINCA"] = "";
	$fieldLabelslegal_Chart[""]["TENECIA"] = "TENECIA";
	$fieldToolTipslegal_Chart[""]["TENECIA"] = "";
	$fieldLabelslegal_Chart[""]["SOPORTE"] = "SOPORTE";
	$fieldToolTipslegal_Chart[""]["SOPORTE"] = "";
	$fieldLabelslegal_Chart[""]["RUAT"] = "RUAT";
	$fieldToolTipslegal_Chart[""]["RUAT"] = "";
	$fieldLabelslegal_Chart[""]["ASOCIACION"] = "ASOCIACION";
	$fieldToolTipslegal_Chart[""]["ASOCIACION"] = "";
	$fieldLabelslegal_Chart[""]["OBSERVACIONES"] = "OBSERVACIONES";
	$fieldToolTipslegal_Chart[""]["OBSERVACIONES"] = "";
	$fieldLabelslegal_Chart[""]["A_O"] = "AÑO";
	$fieldToolTipslegal_Chart[""]["A_O"] = "";
	if (count($fieldToolTipslegal_Chart[""]))
		$tdatalegal_Chart[".isUseToolTips"] = true;
}


	$tdatalegal_Chart[".NCSearch"] = true;

	$tdatalegal_Chart[".ChartRefreshTime"] = 0;


$tdatalegal_Chart[".shortTableName"] = "legal_Chart";
$tdatalegal_Chart[".nSecOptions"] = 0;
$tdatalegal_Chart[".recsPerRowPrint"] = 1;
$tdatalegal_Chart[".mainTableOwnerID"] = "";
$tdatalegal_Chart[".moveNext"] = 1;
$tdatalegal_Chart[".entityType"] = 3;

$tdatalegal_Chart[".strOriginalTableName"] = "legal";

	



$tdatalegal_Chart[".showAddInPopup"] = false;

$tdatalegal_Chart[".showEditInPopup"] = false;

$tdatalegal_Chart[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatalegal_Chart[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatalegal_Chart[".fieldsForRegister"] = array();

$tdatalegal_Chart[".listAjax"] = false;

	$tdatalegal_Chart[".audit"] = false;

	$tdatalegal_Chart[".locking"] = false;

$tdatalegal_Chart[".edit"] = true;
$tdatalegal_Chart[".afterEditAction"] = 1;
$tdatalegal_Chart[".closePopupAfterEdit"] = 1;
$tdatalegal_Chart[".afterEditActionDetTable"] = "";

$tdatalegal_Chart[".add"] = true;
$tdatalegal_Chart[".afterAddAction"] = 1;
$tdatalegal_Chart[".closePopupAfterAdd"] = 1;
$tdatalegal_Chart[".afterAddActionDetTable"] = "";

$tdatalegal_Chart[".list"] = true;

$tdatalegal_Chart[".view"] = true;




$tdatalegal_Chart[".delete"] = true;

$tdatalegal_Chart[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatalegal_Chart[".searchSaving"] = false;
//

$tdatalegal_Chart[".showSearchPanel"] = true;
		$tdatalegal_Chart[".flexibleSearch"] = true;

$tdatalegal_Chart[".isUseAjaxSuggest"] = true;




$tdatalegal_Chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalegal_Chart[".isUseTimeForSearch"] = false;



$tdatalegal_Chart[".badgeColor"] = "1E90FF";


$tdatalegal_Chart[".allSearchFields"] = array();
$tdatalegal_Chart[".filterFields"] = array();
$tdatalegal_Chart[".requiredSearchFields"] = array();

$tdatalegal_Chart[".allSearchFields"][] = "ID";
	$tdatalegal_Chart[".allSearchFields"][] = "FINCA_PROPIETARIO_CEDULA";
	$tdatalegal_Chart[".allSearchFields"][] = "NOMBRE";
	$tdatalegal_Chart[".allSearchFields"][] = "VEREDA";
	$tdatalegal_Chart[".allSearchFields"][] = "FINCA";
	$tdatalegal_Chart[".allSearchFields"][] = "TENECIA";
	$tdatalegal_Chart[".allSearchFields"][] = "SOPORTE";
	$tdatalegal_Chart[".allSearchFields"][] = "RUAT";
	$tdatalegal_Chart[".allSearchFields"][] = "ASOCIACION";
	$tdatalegal_Chart[".allSearchFields"][] = "OBSERVACIONES";
	$tdatalegal_Chart[".allSearchFields"][] = "AÑO";
	

$tdatalegal_Chart[".googleLikeFields"] = array();
$tdatalegal_Chart[".googleLikeFields"][] = "ID";
$tdatalegal_Chart[".googleLikeFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatalegal_Chart[".googleLikeFields"][] = "NOMBRE";
$tdatalegal_Chart[".googleLikeFields"][] = "VEREDA";
$tdatalegal_Chart[".googleLikeFields"][] = "FINCA";
$tdatalegal_Chart[".googleLikeFields"][] = "TENECIA";
$tdatalegal_Chart[".googleLikeFields"][] = "SOPORTE";
$tdatalegal_Chart[".googleLikeFields"][] = "RUAT";
$tdatalegal_Chart[".googleLikeFields"][] = "ASOCIACION";
$tdatalegal_Chart[".googleLikeFields"][] = "OBSERVACIONES";
$tdatalegal_Chart[".googleLikeFields"][] = "AÑO";


$tdatalegal_Chart[".advSearchFields"] = array();
$tdatalegal_Chart[".advSearchFields"][] = "ID";
$tdatalegal_Chart[".advSearchFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatalegal_Chart[".advSearchFields"][] = "NOMBRE";
$tdatalegal_Chart[".advSearchFields"][] = "VEREDA";
$tdatalegal_Chart[".advSearchFields"][] = "FINCA";
$tdatalegal_Chart[".advSearchFields"][] = "TENECIA";
$tdatalegal_Chart[".advSearchFields"][] = "SOPORTE";
$tdatalegal_Chart[".advSearchFields"][] = "RUAT";
$tdatalegal_Chart[".advSearchFields"][] = "ASOCIACION";
$tdatalegal_Chart[".advSearchFields"][] = "OBSERVACIONES";
$tdatalegal_Chart[".advSearchFields"][] = "AÑO";

$tdatalegal_Chart[".tableType"] = "chart";

$tdatalegal_Chart[".printerPageOrientation"] = 0;
$tdatalegal_Chart[".nPrinterPageScale"] = 100;

$tdatalegal_Chart[".nPrinterSplitRecords"] = 40;

$tdatalegal_Chart[".nPrinterPDFSplitRecords"] = 40;



$tdatalegal_Chart[".geocodingEnabled"] = false;



// chart settings
$tdatalegal_Chart[".chartType"] = "2DColumn";
// end of chart settings


$tdatalegal_Chart[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatalegal_Chart[".strOrderBy"] = $tstrOrderBy;

$tdatalegal_Chart[".orderindexes"] = array();

$tdatalegal_Chart[".sqlHead"] = "SELECT ID,  	FINCA_PROPIETARIO_CEDULA,  	NOMBRE,  	VEREDA,  	FINCA,  	TENECIA,  	SOPORTE,  	RUAT,  	ASOCIACION,  	OBSERVACIONES,  	`AÑO`";
$tdatalegal_Chart[".sqlFrom"] = "FROM legal";
$tdatalegal_Chart[".sqlWhereExpr"] = "";
$tdatalegal_Chart[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalegal_Chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalegal_Chart[".arrGroupsPerPage"] = $arrGPP;

$tdatalegal_Chart[".highlightSearchResults"] = true;

$tableKeyslegal_Chart = array();
$tableKeyslegal_Chart[] = "ID";
$tableKeyslegal_Chart[] = "FINCA_PROPIETARIO_CEDULA";
$tdatalegal_Chart[".Keys"] = $tableKeyslegal_Chart;

$tdatalegal_Chart[".listFields"] = array();
$tdatalegal_Chart[".listFields"][] = "ID";
$tdatalegal_Chart[".listFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatalegal_Chart[".listFields"][] = "NOMBRE";
$tdatalegal_Chart[".listFields"][] = "VEREDA";
$tdatalegal_Chart[".listFields"][] = "FINCA";
$tdatalegal_Chart[".listFields"][] = "TENECIA";
$tdatalegal_Chart[".listFields"][] = "SOPORTE";
$tdatalegal_Chart[".listFields"][] = "RUAT";
$tdatalegal_Chart[".listFields"][] = "ASOCIACION";
$tdatalegal_Chart[".listFields"][] = "OBSERVACIONES";
$tdatalegal_Chart[".listFields"][] = "AÑO";

$tdatalegal_Chart[".hideMobileList"] = array();


$tdatalegal_Chart[".viewFields"] = array();
$tdatalegal_Chart[".viewFields"][] = "ID";
$tdatalegal_Chart[".viewFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatalegal_Chart[".viewFields"][] = "NOMBRE";
$tdatalegal_Chart[".viewFields"][] = "VEREDA";
$tdatalegal_Chart[".viewFields"][] = "FINCA";
$tdatalegal_Chart[".viewFields"][] = "TENECIA";
$tdatalegal_Chart[".viewFields"][] = "SOPORTE";
$tdatalegal_Chart[".viewFields"][] = "RUAT";
$tdatalegal_Chart[".viewFields"][] = "ASOCIACION";
$tdatalegal_Chart[".viewFields"][] = "OBSERVACIONES";
$tdatalegal_Chart[".viewFields"][] = "AÑO";

$tdatalegal_Chart[".addFields"] = array();
$tdatalegal_Chart[".addFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatalegal_Chart[".addFields"][] = "NOMBRE";
$tdatalegal_Chart[".addFields"][] = "VEREDA";
$tdatalegal_Chart[".addFields"][] = "FINCA";
$tdatalegal_Chart[".addFields"][] = "TENECIA";
$tdatalegal_Chart[".addFields"][] = "SOPORTE";
$tdatalegal_Chart[".addFields"][] = "RUAT";
$tdatalegal_Chart[".addFields"][] = "ASOCIACION";
$tdatalegal_Chart[".addFields"][] = "OBSERVACIONES";
$tdatalegal_Chart[".addFields"][] = "AÑO";

$tdatalegal_Chart[".masterListFields"] = array();
$tdatalegal_Chart[".masterListFields"][] = "ID";
$tdatalegal_Chart[".masterListFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatalegal_Chart[".masterListFields"][] = "NOMBRE";
$tdatalegal_Chart[".masterListFields"][] = "VEREDA";
$tdatalegal_Chart[".masterListFields"][] = "FINCA";
$tdatalegal_Chart[".masterListFields"][] = "TENECIA";
$tdatalegal_Chart[".masterListFields"][] = "SOPORTE";
$tdatalegal_Chart[".masterListFields"][] = "RUAT";
$tdatalegal_Chart[".masterListFields"][] = "ASOCIACION";
$tdatalegal_Chart[".masterListFields"][] = "OBSERVACIONES";
$tdatalegal_Chart[".masterListFields"][] = "AÑO";

$tdatalegal_Chart[".inlineAddFields"] = array();
$tdatalegal_Chart[".inlineAddFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatalegal_Chart[".inlineAddFields"][] = "NOMBRE";
$tdatalegal_Chart[".inlineAddFields"][] = "VEREDA";
$tdatalegal_Chart[".inlineAddFields"][] = "FINCA";
$tdatalegal_Chart[".inlineAddFields"][] = "TENECIA";
$tdatalegal_Chart[".inlineAddFields"][] = "SOPORTE";
$tdatalegal_Chart[".inlineAddFields"][] = "RUAT";
$tdatalegal_Chart[".inlineAddFields"][] = "ASOCIACION";
$tdatalegal_Chart[".inlineAddFields"][] = "OBSERVACIONES";
$tdatalegal_Chart[".inlineAddFields"][] = "AÑO";

$tdatalegal_Chart[".editFields"] = array();
$tdatalegal_Chart[".editFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatalegal_Chart[".editFields"][] = "NOMBRE";
$tdatalegal_Chart[".editFields"][] = "VEREDA";
$tdatalegal_Chart[".editFields"][] = "FINCA";
$tdatalegal_Chart[".editFields"][] = "TENECIA";
$tdatalegal_Chart[".editFields"][] = "SOPORTE";
$tdatalegal_Chart[".editFields"][] = "RUAT";
$tdatalegal_Chart[".editFields"][] = "ASOCIACION";
$tdatalegal_Chart[".editFields"][] = "OBSERVACIONES";
$tdatalegal_Chart[".editFields"][] = "AÑO";

$tdatalegal_Chart[".inlineEditFields"] = array();
$tdatalegal_Chart[".inlineEditFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatalegal_Chart[".inlineEditFields"][] = "NOMBRE";
$tdatalegal_Chart[".inlineEditFields"][] = "VEREDA";
$tdatalegal_Chart[".inlineEditFields"][] = "FINCA";
$tdatalegal_Chart[".inlineEditFields"][] = "TENECIA";
$tdatalegal_Chart[".inlineEditFields"][] = "SOPORTE";
$tdatalegal_Chart[".inlineEditFields"][] = "RUAT";
$tdatalegal_Chart[".inlineEditFields"][] = "ASOCIACION";
$tdatalegal_Chart[".inlineEditFields"][] = "OBSERVACIONES";
$tdatalegal_Chart[".inlineEditFields"][] = "AÑO";

$tdatalegal_Chart[".exportFields"] = array();
$tdatalegal_Chart[".exportFields"][] = "ID";
$tdatalegal_Chart[".exportFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatalegal_Chart[".exportFields"][] = "NOMBRE";
$tdatalegal_Chart[".exportFields"][] = "VEREDA";
$tdatalegal_Chart[".exportFields"][] = "FINCA";
$tdatalegal_Chart[".exportFields"][] = "TENECIA";
$tdatalegal_Chart[".exportFields"][] = "SOPORTE";
$tdatalegal_Chart[".exportFields"][] = "RUAT";
$tdatalegal_Chart[".exportFields"][] = "ASOCIACION";
$tdatalegal_Chart[".exportFields"][] = "OBSERVACIONES";
$tdatalegal_Chart[".exportFields"][] = "AÑO";

$tdatalegal_Chart[".importFields"] = array();
$tdatalegal_Chart[".importFields"][] = "ID";
$tdatalegal_Chart[".importFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatalegal_Chart[".importFields"][] = "NOMBRE";
$tdatalegal_Chart[".importFields"][] = "VEREDA";
$tdatalegal_Chart[".importFields"][] = "FINCA";
$tdatalegal_Chart[".importFields"][] = "TENECIA";
$tdatalegal_Chart[".importFields"][] = "SOPORTE";
$tdatalegal_Chart[".importFields"][] = "RUAT";
$tdatalegal_Chart[".importFields"][] = "ASOCIACION";
$tdatalegal_Chart[".importFields"][] = "OBSERVACIONES";
$tdatalegal_Chart[".importFields"][] = "AÑO";

$tdatalegal_Chart[".printFields"] = array();
$tdatalegal_Chart[".printFields"][] = "ID";
$tdatalegal_Chart[".printFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatalegal_Chart[".printFields"][] = "NOMBRE";
$tdatalegal_Chart[".printFields"][] = "VEREDA";
$tdatalegal_Chart[".printFields"][] = "FINCA";
$tdatalegal_Chart[".printFields"][] = "TENECIA";
$tdatalegal_Chart[".printFields"][] = "SOPORTE";
$tdatalegal_Chart[".printFields"][] = "RUAT";
$tdatalegal_Chart[".printFields"][] = "ASOCIACION";
$tdatalegal_Chart[".printFields"][] = "OBSERVACIONES";
$tdatalegal_Chart[".printFields"][] = "AÑO";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "legal";
	$fdata["Label"] = GetFieldLabel("legal_Chart","ID");
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatalegal_Chart["ID"] = $fdata;
//	FINCA_PROPIETARIO_CEDULA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FINCA_PROPIETARIO_CEDULA";
	$fdata["GoodName"] = "FINCA_PROPIETARIO_CEDULA";
	$fdata["ownerTable"] = "legal";
	$fdata["Label"] = GetFieldLabel("legal_Chart","FINCA_PROPIETARIO_CEDULA");
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatalegal_Chart["FINCA_PROPIETARIO_CEDULA"] = $fdata;
//	NOMBRE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "NOMBRE";
	$fdata["GoodName"] = "NOMBRE";
	$fdata["ownerTable"] = "legal";
	$fdata["Label"] = GetFieldLabel("legal_Chart","NOMBRE");
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatalegal_Chart["NOMBRE"] = $fdata;
//	VEREDA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "VEREDA";
	$fdata["GoodName"] = "VEREDA";
	$fdata["ownerTable"] = "legal";
	$fdata["Label"] = GetFieldLabel("legal_Chart","VEREDA");
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




	$tdatalegal_Chart["VEREDA"] = $fdata;
//	FINCA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "FINCA";
	$fdata["GoodName"] = "FINCA";
	$fdata["ownerTable"] = "legal";
	$fdata["Label"] = GetFieldLabel("legal_Chart","FINCA");
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




	$tdatalegal_Chart["FINCA"] = $fdata;
//	TENECIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "TENECIA";
	$fdata["GoodName"] = "TENECIA";
	$fdata["ownerTable"] = "legal";
	$fdata["Label"] = GetFieldLabel("legal_Chart","TENECIA");
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatalegal_Chart["TENECIA"] = $fdata;
//	SOPORTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "SOPORTE";
	$fdata["GoodName"] = "SOPORTE";
	$fdata["ownerTable"] = "legal";
	$fdata["Label"] = GetFieldLabel("legal_Chart","SOPORTE");
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
	$edata["LookupValues"][] = "Si";
	$edata["LookupValues"][] = "No";
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




	$tdatalegal_Chart["SOPORTE"] = $fdata;
//	RUAT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "RUAT";
	$fdata["GoodName"] = "RUAT";
	$fdata["ownerTable"] = "legal";
	$fdata["Label"] = GetFieldLabel("legal_Chart","RUAT");
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




	$tdatalegal_Chart["RUAT"] = $fdata;
//	ASOCIACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ASOCIACION";
	$fdata["GoodName"] = "ASOCIACION";
	$fdata["ownerTable"] = "legal";
	$fdata["Label"] = GetFieldLabel("legal_Chart","ASOCIACION");
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
	$edata["LookupValues"][] = "Asoapiasan";
	$edata["LookupValues"][] = "Asoprocass";
	$edata["LookupValues"][] = "Asocaprisan";
	$edata["LookupValues"][] = "Asprotrans";
	$edata["LookupValues"][] = "Apropsan";
	$edata["LookupValues"][] = "Approgran";
	$edata["LookupValues"][] = "Asovictimas";
	$edata["LookupValues"][] = "Fibrassan";

	
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




	$tdatalegal_Chart["ASOCIACION"] = $fdata;
//	OBSERVACIONES
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "OBSERVACIONES";
	$fdata["GoodName"] = "OBSERVACIONES";
	$fdata["ownerTable"] = "legal";
	$fdata["Label"] = GetFieldLabel("legal_Chart","OBSERVACIONES");
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




	$tdatalegal_Chart["OBSERVACIONES"] = $fdata;
//	AÑO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "AÑO";
	$fdata["GoodName"] = "A_O";
	$fdata["ownerTable"] = "legal";
	$fdata["Label"] = GetFieldLabel("legal_Chart","A_O");
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




	$tdatalegal_Chart["AÑO"] = $fdata;

	$tdatalegal_Chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">legal Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdatalegal_Chart[".chartXml"] .= '<attr value="0">
			<attr value="name">FINCA_PROPIETARIO_CEDULA</attr>';
	$tdatalegal_Chart[".chartXml"] .= '</attr>';
	$tdatalegal_Chart[".chartXml"] .= '<attr value="1">
		<attr value="name">NOMBRE</attr>
	</attr>';
	$tdatalegal_Chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatalegal_Chart[".chartXml"] .= '<attr value="head">'.xmlencode("legal Chart").'</attr>
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
$tdatalegal_Chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatalegal_Chart[".chartXml"] .= '<attr value="0">
		<attr value="name">ID</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("legal_Chart","ID")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatalegal_Chart[".chartXml"] .= '<attr value="1">
		<attr value="name">FINCA_PROPIETARIO_CEDULA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("legal_Chart","FINCA_PROPIETARIO_CEDULA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatalegal_Chart[".chartXml"] .= '<attr value="2">
		<attr value="name">NOMBRE</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("legal_Chart","NOMBRE")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatalegal_Chart[".chartXml"] .= '<attr value="3">
		<attr value="name">VEREDA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("legal_Chart","VEREDA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatalegal_Chart[".chartXml"] .= '<attr value="4">
		<attr value="name">FINCA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("legal_Chart","FINCA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatalegal_Chart[".chartXml"] .= '<attr value="5">
		<attr value="name">TENECIA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("legal_Chart","TENECIA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatalegal_Chart[".chartXml"] .= '<attr value="6">
		<attr value="name">SOPORTE</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("legal_Chart","SOPORTE")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatalegal_Chart[".chartXml"] .= '<attr value="7">
		<attr value="name">RUAT</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("legal_Chart","RUAT")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatalegal_Chart[".chartXml"] .= '<attr value="8">
		<attr value="name">ASOCIACION</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("legal_Chart","ASOCIACION")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatalegal_Chart[".chartXml"] .= '<attr value="9">
		<attr value="name">OBSERVACIONES</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("legal_Chart","OBSERVACIONES")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatalegal_Chart[".chartXml"] .= '<attr value="10">
		<attr value="name">AÑO</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("legal_Chart","A_O")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatalegal_Chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">legal Chart</attr>
<attr value="short_table_name">legal_Chart</attr>
</attr>

</chart>';

$tables_data["legal Chart"]=&$tdatalegal_Chart;
$field_labels["legal_Chart"] = &$fieldLabelslegal_Chart;
$fieldToolTips["legal_Chart"] = &$fieldToolTipslegal_Chart;
$page_titles["legal_Chart"] = &$pageTitleslegal_Chart;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["legal Chart"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["legal Chart"] = array();


	
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
					$masterTablesData["legal Chart"][0] = $masterParams;
				$masterTablesData["legal Chart"][0]["masterKeys"] = array();
	$masterTablesData["legal Chart"][0]["masterKeys"][]="PROPIETARIO_CEDULA";
				$masterTablesData["legal Chart"][0]["detailKeys"] = array();
	$masterTablesData["legal Chart"][0]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_legal_Chart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	FINCA_PROPIETARIO_CEDULA,  	NOMBRE,  	VEREDA,  	FINCA,  	TENECIA,  	SOPORTE,  	RUAT,  	ASOCIACION,  	OBSERVACIONES,  	`AÑO`";
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
	"m_srcTableName" => "legal Chart"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "legal Chart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "FINCA_PROPIETARIO_CEDULA",
	"m_strTable" => "legal",
	"m_srcTableName" => "legal Chart"
));

$proto8["m_sql"] = "FINCA_PROPIETARIO_CEDULA";
$proto8["m_srcTableName"] = "legal Chart";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBRE",
	"m_strTable" => "legal",
	"m_srcTableName" => "legal Chart"
));

$proto10["m_sql"] = "NOMBRE";
$proto10["m_srcTableName"] = "legal Chart";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "VEREDA",
	"m_strTable" => "legal",
	"m_srcTableName" => "legal Chart"
));

$proto12["m_sql"] = "VEREDA";
$proto12["m_srcTableName"] = "legal Chart";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "FINCA",
	"m_strTable" => "legal",
	"m_srcTableName" => "legal Chart"
));

$proto14["m_sql"] = "FINCA";
$proto14["m_srcTableName"] = "legal Chart";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "TENECIA",
	"m_strTable" => "legal",
	"m_srcTableName" => "legal Chart"
));

$proto16["m_sql"] = "TENECIA";
$proto16["m_srcTableName"] = "legal Chart";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "SOPORTE",
	"m_strTable" => "legal",
	"m_srcTableName" => "legal Chart"
));

$proto18["m_sql"] = "SOPORTE";
$proto18["m_srcTableName"] = "legal Chart";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "RUAT",
	"m_strTable" => "legal",
	"m_srcTableName" => "legal Chart"
));

$proto20["m_sql"] = "RUAT";
$proto20["m_srcTableName"] = "legal Chart";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "ASOCIACION",
	"m_strTable" => "legal",
	"m_srcTableName" => "legal Chart"
));

$proto22["m_sql"] = "ASOCIACION";
$proto22["m_srcTableName"] = "legal Chart";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "OBSERVACIONES",
	"m_strTable" => "legal",
	"m_srcTableName" => "legal Chart"
));

$proto24["m_sql"] = "OBSERVACIONES";
$proto24["m_srcTableName"] = "legal Chart";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "legal",
	"m_srcTableName" => "legal Chart"
));

$proto26["m_sql"] = "`AÑO`";
$proto26["m_srcTableName"] = "legal Chart";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "legal";
$proto29["m_srcTableName"] = "legal Chart";
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
$proto28["m_srcTableName"] = "legal Chart";
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
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="legal Chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_legal_Chart = createSqlQuery_legal_Chart();


	
		;

											

$tdatalegal_Chart[".sqlquery"] = $queryData_legal_Chart;

$tableEvents["legal Chart"] = new eventsBase;
$tdatalegal_Chart[".hasEvents"] = false;

?>