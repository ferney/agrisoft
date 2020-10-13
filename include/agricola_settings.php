<?php
require_once(getabspath("classes/cipherer.php"));




$tdataagricola = array();
	$tdataagricola[".truncateText"] = true;
	$tdataagricola[".NumberOfChars"] = 80;
	$tdataagricola[".ShortName"] = "agricola";
	$tdataagricola[".OwnerID"] = "";
	$tdataagricola[".OriginalTable"] = "agricola";

//	field labels
$fieldLabelsagricola = array();
$fieldToolTipsagricola = array();
$pageTitlesagricola = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsagricola["Spanish"] = array();
	$fieldToolTipsagricola["Spanish"] = array();
	$pageTitlesagricola["Spanish"] = array();
	$fieldLabelsagricola["Spanish"]["ID"] = "ID";
	$fieldToolTipsagricola["Spanish"]["ID"] = "";
	$fieldLabelsagricola["Spanish"]["FINCA_PROPIETARIO_CEDULA"] = "CEDULA";
	$fieldToolTipsagricola["Spanish"]["FINCA_PROPIETARIO_CEDULA"] = "";
	$fieldLabelsagricola["Spanish"]["NOMBRE"] = "NOMBRE";
	$fieldToolTipsagricola["Spanish"]["NOMBRE"] = "";
	$fieldLabelsagricola["Spanish"]["VEREDA"] = "VEREDA";
	$fieldToolTipsagricola["Spanish"]["VEREDA"] = "";
	$fieldLabelsagricola["Spanish"]["FINCA"] = "FINCA";
	$fieldToolTipsagricola["Spanish"]["FINCA"] = "";
	$fieldLabelsagricola["Spanish"]["VARIEDAD"] = "VARIEDAD";
	$fieldToolTipsagricola["Spanish"]["VARIEDAD"] = "";
	$fieldLabelsagricola["Spanish"]["AREA"] = "AREA (Htas)";
	$fieldToolTipsagricola["Spanish"]["AREA"] = "";
	$fieldLabelsagricola["Spanish"]["PRODUCCION_ANUAL"] = "PROD. ANUAL (TONELADAS)";
	$fieldToolTipsagricola["Spanish"]["PRODUCCION_ANUAL"] = "";
	$fieldLabelsagricola["Spanish"]["A_O"] = "AÑO";
	$fieldToolTipsagricola["Spanish"]["A_O"] = "";
	$pageTitlesagricola["Spanish"]["add"] = "Agricola, Añadir";
	if (count($fieldToolTipsagricola["Spanish"]))
		$tdataagricola[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsagricola[""] = array();
	$fieldToolTipsagricola[""] = array();
	$pageTitlesagricola[""] = array();
	if (count($fieldToolTipsagricola[""]))
		$tdataagricola[".isUseToolTips"] = true;
}


	$tdataagricola[".NCSearch"] = true;



$tdataagricola[".shortTableName"] = "agricola";
$tdataagricola[".nSecOptions"] = 0;
$tdataagricola[".recsPerRowPrint"] = 1;
$tdataagricola[".mainTableOwnerID"] = "";
$tdataagricola[".moveNext"] = 1;
$tdataagricola[".entityType"] = 0;

$tdataagricola[".strOriginalTableName"] = "agricola";

	



$tdataagricola[".showAddInPopup"] = false;

$tdataagricola[".showEditInPopup"] = false;

$tdataagricola[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataagricola[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataagricola[".fieldsForRegister"] = array();

$tdataagricola[".listAjax"] = false;

	$tdataagricola[".audit"] = false;

	$tdataagricola[".locking"] = false;

$tdataagricola[".edit"] = true;
$tdataagricola[".afterEditAction"] = 1;
$tdataagricola[".closePopupAfterEdit"] = 1;
$tdataagricola[".afterEditActionDetTable"] = "";

$tdataagricola[".add"] = true;
$tdataagricola[".afterAddAction"] = 1;
$tdataagricola[".closePopupAfterAdd"] = 1;
$tdataagricola[".afterAddActionDetTable"] = "";

$tdataagricola[".list"] = true;

$tdataagricola[".view"] = true;

$tdataagricola[".import"] = true;

$tdataagricola[".exportTo"] = true;

$tdataagricola[".printFriendly"] = true;

$tdataagricola[".delete"] = true;

$tdataagricola[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataagricola[".searchSaving"] = false;
//

$tdataagricola[".showSearchPanel"] = true;
		$tdataagricola[".flexibleSearch"] = true;

$tdataagricola[".isUseAjaxSuggest"] = true;

$tdataagricola[".rowHighlite"] = true;



$tdataagricola[".addPageEvents"] = false;

// use timepicker for search panel
$tdataagricola[".isUseTimeForSearch"] = false;



$tdataagricola[".badgeColor"] = "E2E813";


$tdataagricola[".allSearchFields"] = array();
$tdataagricola[".filterFields"] = array();
$tdataagricola[".requiredSearchFields"] = array();

$tdataagricola[".allSearchFields"][] = "ID";
	$tdataagricola[".allSearchFields"][] = "FINCA_PROPIETARIO_CEDULA";
	$tdataagricola[".allSearchFields"][] = "NOMBRE";
	$tdataagricola[".allSearchFields"][] = "VEREDA";
	$tdataagricola[".allSearchFields"][] = "FINCA";
	$tdataagricola[".allSearchFields"][] = "VARIEDAD";
	$tdataagricola[".allSearchFields"][] = "AREA";
	$tdataagricola[".allSearchFields"][] = "PRODUCCION_ANUAL";
	$tdataagricola[".allSearchFields"][] = "AÑO";
	

$tdataagricola[".googleLikeFields"] = array();
$tdataagricola[".googleLikeFields"][] = "ID";
$tdataagricola[".googleLikeFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdataagricola[".googleLikeFields"][] = "NOMBRE";
$tdataagricola[".googleLikeFields"][] = "VEREDA";
$tdataagricola[".googleLikeFields"][] = "FINCA";
$tdataagricola[".googleLikeFields"][] = "VARIEDAD";
$tdataagricola[".googleLikeFields"][] = "AREA";
$tdataagricola[".googleLikeFields"][] = "PRODUCCION_ANUAL";
$tdataagricola[".googleLikeFields"][] = "AÑO";


$tdataagricola[".advSearchFields"] = array();
$tdataagricola[".advSearchFields"][] = "ID";
$tdataagricola[".advSearchFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdataagricola[".advSearchFields"][] = "NOMBRE";
$tdataagricola[".advSearchFields"][] = "VEREDA";
$tdataagricola[".advSearchFields"][] = "FINCA";
$tdataagricola[".advSearchFields"][] = "VARIEDAD";
$tdataagricola[".advSearchFields"][] = "AREA";
$tdataagricola[".advSearchFields"][] = "PRODUCCION_ANUAL";
$tdataagricola[".advSearchFields"][] = "AÑO";

$tdataagricola[".tableType"] = "list";

$tdataagricola[".printerPageOrientation"] = 0;
$tdataagricola[".nPrinterPageScale"] = 100;

$tdataagricola[".nPrinterSplitRecords"] = 40;

$tdataagricola[".nPrinterPDFSplitRecords"] = 40;



$tdataagricola[".geocodingEnabled"] = false;





$tdataagricola[".listGridLayout"] = 3;





// view page pdf
$tdataagricola[".isViewPagePDF"] = true;
$tdataagricola[".nViewPagePDFScale"] = 100;

// print page pdf
$tdataagricola[".isPrinterPagePDF"] = true;
$tdataagricola[".isLandscapePrinterPagePDFOrientation"] = 1;
$tdataagricola[".nPrinterPagePDFScale"] = 100;


$tdataagricola[".pageSize"] = 20;

$tdataagricola[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataagricola[".strOrderBy"] = $tstrOrderBy;

$tdataagricola[".orderindexes"] = array();

$tdataagricola[".sqlHead"] = "SELECT ID,  FINCA_PROPIETARIO_CEDULA,  NOMBRE,  VEREDA,  FINCA,  VARIEDAD,  AREA,  PRODUCCION_ANUAL,  `AÑO`";
$tdataagricola[".sqlFrom"] = "FROM agricola";
$tdataagricola[".sqlWhereExpr"] = "";
$tdataagricola[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataagricola[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataagricola[".arrGroupsPerPage"] = $arrGPP;

$tdataagricola[".highlightSearchResults"] = true;

$tableKeysagricola = array();
$tableKeysagricola[] = "ID";
$tableKeysagricola[] = "FINCA_PROPIETARIO_CEDULA";
$tdataagricola[".Keys"] = $tableKeysagricola;

$tdataagricola[".listFields"] = array();
$tdataagricola[".listFields"][] = "ID";
$tdataagricola[".listFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdataagricola[".listFields"][] = "NOMBRE";
$tdataagricola[".listFields"][] = "VEREDA";
$tdataagricola[".listFields"][] = "FINCA";
$tdataagricola[".listFields"][] = "VARIEDAD";
$tdataagricola[".listFields"][] = "AREA";
$tdataagricola[".listFields"][] = "PRODUCCION_ANUAL";
$tdataagricola[".listFields"][] = "AÑO";

$tdataagricola[".hideMobileList"] = array();


$tdataagricola[".viewFields"] = array();
$tdataagricola[".viewFields"][] = "ID";
$tdataagricola[".viewFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdataagricola[".viewFields"][] = "NOMBRE";
$tdataagricola[".viewFields"][] = "VEREDA";
$tdataagricola[".viewFields"][] = "FINCA";
$tdataagricola[".viewFields"][] = "VARIEDAD";
$tdataagricola[".viewFields"][] = "AREA";
$tdataagricola[".viewFields"][] = "PRODUCCION_ANUAL";
$tdataagricola[".viewFields"][] = "AÑO";

$tdataagricola[".addFields"] = array();
$tdataagricola[".addFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdataagricola[".addFields"][] = "NOMBRE";
$tdataagricola[".addFields"][] = "VEREDA";
$tdataagricola[".addFields"][] = "FINCA";
$tdataagricola[".addFields"][] = "VARIEDAD";
$tdataagricola[".addFields"][] = "AREA";
$tdataagricola[".addFields"][] = "PRODUCCION_ANUAL";
$tdataagricola[".addFields"][] = "AÑO";

$tdataagricola[".masterListFields"] = array();
$tdataagricola[".masterListFields"][] = "ID";
$tdataagricola[".masterListFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdataagricola[".masterListFields"][] = "NOMBRE";
$tdataagricola[".masterListFields"][] = "VEREDA";
$tdataagricola[".masterListFields"][] = "FINCA";
$tdataagricola[".masterListFields"][] = "VARIEDAD";
$tdataagricola[".masterListFields"][] = "AREA";
$tdataagricola[".masterListFields"][] = "PRODUCCION_ANUAL";
$tdataagricola[".masterListFields"][] = "AÑO";

$tdataagricola[".inlineAddFields"] = array();

$tdataagricola[".editFields"] = array();
$tdataagricola[".editFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdataagricola[".editFields"][] = "NOMBRE";
$tdataagricola[".editFields"][] = "VEREDA";
$tdataagricola[".editFields"][] = "FINCA";
$tdataagricola[".editFields"][] = "VARIEDAD";
$tdataagricola[".editFields"][] = "AREA";
$tdataagricola[".editFields"][] = "PRODUCCION_ANUAL";
$tdataagricola[".editFields"][] = "AÑO";

$tdataagricola[".inlineEditFields"] = array();

$tdataagricola[".exportFields"] = array();
$tdataagricola[".exportFields"][] = "ID";
$tdataagricola[".exportFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdataagricola[".exportFields"][] = "NOMBRE";
$tdataagricola[".exportFields"][] = "VEREDA";
$tdataagricola[".exportFields"][] = "FINCA";
$tdataagricola[".exportFields"][] = "VARIEDAD";
$tdataagricola[".exportFields"][] = "AREA";
$tdataagricola[".exportFields"][] = "PRODUCCION_ANUAL";
$tdataagricola[".exportFields"][] = "AÑO";

$tdataagricola[".importFields"] = array();
$tdataagricola[".importFields"][] = "ID";
$tdataagricola[".importFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdataagricola[".importFields"][] = "NOMBRE";
$tdataagricola[".importFields"][] = "VEREDA";
$tdataagricola[".importFields"][] = "FINCA";
$tdataagricola[".importFields"][] = "VARIEDAD";
$tdataagricola[".importFields"][] = "AREA";
$tdataagricola[".importFields"][] = "PRODUCCION_ANUAL";
$tdataagricola[".importFields"][] = "AÑO";

$tdataagricola[".printFields"] = array();
$tdataagricola[".printFields"][] = "ID";
$tdataagricola[".printFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdataagricola[".printFields"][] = "NOMBRE";
$tdataagricola[".printFields"][] = "VEREDA";
$tdataagricola[".printFields"][] = "FINCA";
$tdataagricola[".printFields"][] = "VARIEDAD";
$tdataagricola[".printFields"][] = "AREA";
$tdataagricola[".printFields"][] = "PRODUCCION_ANUAL";
$tdataagricola[".printFields"][] = "AÑO";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "agricola";
	$fdata["Label"] = GetFieldLabel("agricola","ID");
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




	$tdataagricola["ID"] = $fdata;
//	FINCA_PROPIETARIO_CEDULA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FINCA_PROPIETARIO_CEDULA";
	$fdata["GoodName"] = "FINCA_PROPIETARIO_CEDULA";
	$fdata["ownerTable"] = "agricola";
	$fdata["Label"] = GetFieldLabel("agricola","FINCA_PROPIETARIO_CEDULA");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataagricola["FINCA_PROPIETARIO_CEDULA"] = $fdata;
//	NOMBRE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "NOMBRE";
	$fdata["GoodName"] = "NOMBRE";
	$fdata["ownerTable"] = "agricola";
	$fdata["Label"] = GetFieldLabel("agricola","NOMBRE");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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
		$edata["autoCompleteFields"][] = array('masterF'=>"FINCA_PROPIETARIO_CEDULA", 'lookupF'=>"PROPIETARIO_CEDULA");
	$edata["autoCompleteFields"][] = array('masterF'=>"VEREDA", 'lookupF'=>"VEREDA");
	$edata["autoCompleteFields"][] = array('masterF'=>"FINCA", 'lookupF'=>"FINCA");
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




	$tdataagricola["NOMBRE"] = $fdata;
//	VEREDA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "VEREDA";
	$fdata["GoodName"] = "VEREDA";
	$fdata["ownerTable"] = "agricola";
	$fdata["Label"] = GetFieldLabel("agricola","VEREDA");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataagricola["VEREDA"] = $fdata;
//	FINCA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "FINCA";
	$fdata["GoodName"] = "FINCA";
	$fdata["ownerTable"] = "agricola";
	$fdata["Label"] = GetFieldLabel("agricola","FINCA");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataagricola["FINCA"] = $fdata;
//	VARIEDAD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "VARIEDAD";
	$fdata["GoodName"] = "VARIEDAD";
	$fdata["ownerTable"] = "agricola";
	$fdata["Label"] = GetFieldLabel("agricola","VARIEDAD");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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
	$edata["LookupValues"][] = "AHUYAMA";
	$edata["LookupValues"][] = "AJI";
	$edata["LookupValues"][] = "AROMATICAS";
	$edata["LookupValues"][] = "ARVEJA";
	$edata["LookupValues"][] = "BERENJENA";
	$edata["LookupValues"][] = "CILANTRO";
	$edata["LookupValues"][] = "HABICHUELA";
	$edata["LookupValues"][] = "HORTALIZAS VRIAS";
	$edata["LookupValues"][] = "HUERTA";
	$edata["LookupValues"][] = "MAIZ";
	$edata["LookupValues"][] = "PAPA";
	$edata["LookupValues"][] = "PEREJIL";
	$edata["LookupValues"][] = "PIMENTON";
	$edata["LookupValues"][] = "PLATANO";
	$edata["LookupValues"][] = "TOMATE";
	$edata["LookupValues"][] = "YUCA";
	$edata["LookupValues"][] = "ZANAHORIA";

	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataagricola["VARIEDAD"] = $fdata;
//	AREA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "AREA";
	$fdata["GoodName"] = "AREA";
	$fdata["ownerTable"] = "agricola";
	$fdata["Label"] = GetFieldLabel("agricola","AREA");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataagricola["AREA"] = $fdata;
//	PRODUCCION_ANUAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "PRODUCCION_ANUAL";
	$fdata["GoodName"] = "PRODUCCION_ANUAL";
	$fdata["ownerTable"] = "agricola";
	$fdata["Label"] = GetFieldLabel("agricola","PRODUCCION_ANUAL");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataagricola["PRODUCCION_ANUAL"] = $fdata;
//	AÑO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "AÑO";
	$fdata["GoodName"] = "A_O";
	$fdata["ownerTable"] = "agricola";
	$fdata["Label"] = GetFieldLabel("agricola","A_O");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataagricola["AÑO"] = $fdata;


$tables_data["agricola"]=&$tdataagricola;
$field_labels["agricola"] = &$fieldLabelsagricola;
$fieldToolTips["agricola"] = &$fieldToolTipsagricola;
$page_titles["agricola"] = &$pageTitlesagricola;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["agricola"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["agricola"] = array();


	
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
					$masterTablesData["agricola"][0] = $masterParams;
				$masterTablesData["agricola"][0]["masterKeys"] = array();
	$masterTablesData["agricola"][0]["masterKeys"][]="PROPIETARIO_CEDULA";
				$masterTablesData["agricola"][0]["detailKeys"] = array();
	$masterTablesData["agricola"][0]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
		
	
				$strOriginalDetailsTable="finca";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="REPORTE GLOBAL";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "REPORTE_GLOBAL";
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
					$masterParams["type"] = PAGE_REPORT;
	$masterTablesData["agricola"][1] = $masterParams;
				$masterTablesData["agricola"][1]["masterKeys"] = array();
	$masterTablesData["agricola"][1]["masterKeys"][]="PROPIETARIO_CEDULA";
				$masterTablesData["agricola"][1]["detailKeys"] = array();
	$masterTablesData["agricola"][1]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
		
	
				$strOriginalDetailsTable="finca";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="REPORTE FINCA";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "REPORTE_FINCA";
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
					$masterParams["type"] = PAGE_REPORT;
	$masterTablesData["agricola"][2] = $masterParams;
				$masterTablesData["agricola"][2]["masterKeys"] = array();
	$masterTablesData["agricola"][2]["masterKeys"][]="PROPIETARIO_CEDULA";
				$masterTablesData["agricola"][2]["detailKeys"] = array();
	$masterTablesData["agricola"][2]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
		
	
				$strOriginalDetailsTable="finca";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="REPORTE VEREDA";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "REPORTE_VEREDA";
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
					$masterParams["type"] = PAGE_REPORT;
	$masterTablesData["agricola"][3] = $masterParams;
				$masterTablesData["agricola"][3]["masterKeys"] = array();
	$masterTablesData["agricola"][3]["masterKeys"][]="PROPIETARIO_CEDULA";
				$masterTablesData["agricola"][3]["detailKeys"] = array();
	$masterTablesData["agricola"][3]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_agricola()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  FINCA_PROPIETARIO_CEDULA,  NOMBRE,  VEREDA,  FINCA,  VARIEDAD,  AREA,  PRODUCCION_ANUAL,  `AÑO`";
$proto0["m_strFrom"] = "FROM agricola";
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
	"m_strTable" => "agricola",
	"m_srcTableName" => "agricola"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "agricola";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "FINCA_PROPIETARIO_CEDULA",
	"m_strTable" => "agricola",
	"m_srcTableName" => "agricola"
));

$proto8["m_sql"] = "FINCA_PROPIETARIO_CEDULA";
$proto8["m_srcTableName"] = "agricola";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBRE",
	"m_strTable" => "agricola",
	"m_srcTableName" => "agricola"
));

$proto10["m_sql"] = "NOMBRE";
$proto10["m_srcTableName"] = "agricola";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "VEREDA",
	"m_strTable" => "agricola",
	"m_srcTableName" => "agricola"
));

$proto12["m_sql"] = "VEREDA";
$proto12["m_srcTableName"] = "agricola";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "FINCA",
	"m_strTable" => "agricola",
	"m_srcTableName" => "agricola"
));

$proto14["m_sql"] = "FINCA";
$proto14["m_srcTableName"] = "agricola";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "VARIEDAD",
	"m_strTable" => "agricola",
	"m_srcTableName" => "agricola"
));

$proto16["m_sql"] = "VARIEDAD";
$proto16["m_srcTableName"] = "agricola";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "AREA",
	"m_strTable" => "agricola",
	"m_srcTableName" => "agricola"
));

$proto18["m_sql"] = "AREA";
$proto18["m_srcTableName"] = "agricola";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "PRODUCCION_ANUAL",
	"m_strTable" => "agricola",
	"m_srcTableName" => "agricola"
));

$proto20["m_sql"] = "PRODUCCION_ANUAL";
$proto20["m_srcTableName"] = "agricola";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "agricola",
	"m_srcTableName" => "agricola"
));

$proto22["m_sql"] = "`AÑO`";
$proto22["m_srcTableName"] = "agricola";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "agricola";
$proto25["m_srcTableName"] = "agricola";
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
$proto24["m_sql"] = "agricola";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "agricola";
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
	"m_strTable" => "agricola",
	"m_srcTableName" => "agricola"
));

$proto28["m_column"]=$obj;
$obj = new SQLGroupByItem($proto28);

$proto0["m_groupby"][]=$obj;
												$proto30=array();
						$obj = new SQLField(array(
	"m_strName" => "FINCA_PROPIETARIO_CEDULA",
	"m_strTable" => "agricola",
	"m_srcTableName" => "agricola"
));

$proto30["m_column"]=$obj;
$obj = new SQLGroupByItem($proto30);

$proto0["m_groupby"][]=$obj;
												$proto32=array();
						$obj = new SQLField(array(
	"m_strName" => "NOMBRE",
	"m_strTable" => "agricola",
	"m_srcTableName" => "agricola"
));

$proto32["m_column"]=$obj;
$obj = new SQLGroupByItem($proto32);

$proto0["m_groupby"][]=$obj;
												$proto34=array();
						$obj = new SQLField(array(
	"m_strName" => "VEREDA",
	"m_strTable" => "agricola",
	"m_srcTableName" => "agricola"
));

$proto34["m_column"]=$obj;
$obj = new SQLGroupByItem($proto34);

$proto0["m_groupby"][]=$obj;
												$proto36=array();
						$obj = new SQLField(array(
	"m_strName" => "FINCA",
	"m_strTable" => "agricola",
	"m_srcTableName" => "agricola"
));

$proto36["m_column"]=$obj;
$obj = new SQLGroupByItem($proto36);

$proto0["m_groupby"][]=$obj;
												$proto38=array();
						$obj = new SQLField(array(
	"m_strName" => "VARIEDAD",
	"m_strTable" => "agricola",
	"m_srcTableName" => "agricola"
));

$proto38["m_column"]=$obj;
$obj = new SQLGroupByItem($proto38);

$proto0["m_groupby"][]=$obj;
												$proto40=array();
						$obj = new SQLField(array(
	"m_strName" => "AREA",
	"m_strTable" => "agricola",
	"m_srcTableName" => "agricola"
));

$proto40["m_column"]=$obj;
$obj = new SQLGroupByItem($proto40);

$proto0["m_groupby"][]=$obj;
												$proto42=array();
						$obj = new SQLField(array(
	"m_strName" => "PRODUCCION_ANUAL",
	"m_strTable" => "agricola",
	"m_srcTableName" => "agricola"
));

$proto42["m_column"]=$obj;
$obj = new SQLGroupByItem($proto42);

$proto0["m_groupby"][]=$obj;
												$proto44=array();
						$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "agricola",
	"m_srcTableName" => "agricola"
));

$proto44["m_column"]=$obj;
$obj = new SQLGroupByItem($proto44);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="agricola";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_agricola = createSqlQuery_agricola();


	
		;

									

$tdataagricola[".sqlquery"] = $queryData_agricola;

$tableEvents["agricola"] = new eventsBase;
$tdataagricola[".hasEvents"] = false;

?>