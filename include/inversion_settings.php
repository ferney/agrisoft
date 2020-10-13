<?php
require_once(getabspath("classes/cipherer.php"));




$tdatainversion = array();
	$tdatainversion[".truncateText"] = true;
	$tdatainversion[".NumberOfChars"] = 80;
	$tdatainversion[".ShortName"] = "inversion";
	$tdatainversion[".OwnerID"] = "";
	$tdatainversion[".OriginalTable"] = "inversion";

//	field labels
$fieldLabelsinversion = array();
$fieldToolTipsinversion = array();
$pageTitlesinversion = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsinversion["Spanish"] = array();
	$fieldToolTipsinversion["Spanish"] = array();
	$pageTitlesinversion["Spanish"] = array();
	$fieldLabelsinversion["Spanish"]["ID"] = "ID";
	$fieldToolTipsinversion["Spanish"]["ID"] = "";
	$fieldLabelsinversion["Spanish"]["FINCA_PROPIETARIO_CEDULA"] = "CEDULA";
	$fieldToolTipsinversion["Spanish"]["FINCA_PROPIETARIO_CEDULA"] = "";
	$fieldLabelsinversion["Spanish"]["NOMBRE"] = "NOMBRE";
	$fieldToolTipsinversion["Spanish"]["NOMBRE"] = "";
	$fieldLabelsinversion["Spanish"]["VEREDA"] = "VEREDA";
	$fieldToolTipsinversion["Spanish"]["VEREDA"] = "";
	$fieldLabelsinversion["Spanish"]["FINCA"] = "FINCA";
	$fieldToolTipsinversion["Spanish"]["FINCA"] = "";
	$fieldLabelsinversion["Spanish"]["TIPO"] = "TIPO";
	$fieldToolTipsinversion["Spanish"]["TIPO"] = "";
	$fieldLabelsinversion["Spanish"]["A_O"] = "AÑO";
	$fieldToolTipsinversion["Spanish"]["A_O"] = "";
	$fieldLabelsinversion["Spanish"]["OBSERVACIONES"] = "OBSERVACIONES";
	$fieldToolTipsinversion["Spanish"]["OBSERVACIONES"] = "";
	$fieldLabelsinversion["Spanish"]["NOMBRE_PROYECTO"] = "NOMBRE PROYECTO";
	$fieldToolTipsinversion["Spanish"]["NOMBRE_PROYECTO"] = "";
	$pageTitlesinversion["Spanish"]["add"] = "Inversion, Añadir";
	if (count($fieldToolTipsinversion["Spanish"]))
		$tdatainversion[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsinversion[""] = array();
	$fieldToolTipsinversion[""] = array();
	$pageTitlesinversion[""] = array();
	$fieldLabelsinversion[""]["NOMBRE_PROYECTO"] = "NOMBRE PROYECTO";
	$fieldToolTipsinversion[""]["NOMBRE_PROYECTO"] = "";
	if (count($fieldToolTipsinversion[""]))
		$tdatainversion[".isUseToolTips"] = true;
}


	$tdatainversion[".NCSearch"] = true;



$tdatainversion[".shortTableName"] = "inversion";
$tdatainversion[".nSecOptions"] = 0;
$tdatainversion[".recsPerRowPrint"] = 1;
$tdatainversion[".mainTableOwnerID"] = "";
$tdatainversion[".moveNext"] = 1;
$tdatainversion[".entityType"] = 0;

$tdatainversion[".strOriginalTableName"] = "inversion";

	



$tdatainversion[".showAddInPopup"] = false;

$tdatainversion[".showEditInPopup"] = false;

$tdatainversion[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatainversion[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatainversion[".fieldsForRegister"] = array();

$tdatainversion[".listAjax"] = false;

	$tdatainversion[".audit"] = false;

	$tdatainversion[".locking"] = false;

$tdatainversion[".edit"] = true;
$tdatainversion[".afterEditAction"] = 1;
$tdatainversion[".closePopupAfterEdit"] = 1;
$tdatainversion[".afterEditActionDetTable"] = "";

$tdatainversion[".add"] = true;
$tdatainversion[".afterAddAction"] = 1;
$tdatainversion[".closePopupAfterAdd"] = 1;
$tdatainversion[".afterAddActionDetTable"] = "";

$tdatainversion[".list"] = true;

$tdatainversion[".view"] = true;

$tdatainversion[".import"] = true;

$tdatainversion[".exportTo"] = true;

$tdatainversion[".printFriendly"] = true;

$tdatainversion[".delete"] = true;

$tdatainversion[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatainversion[".searchSaving"] = false;
//

$tdatainversion[".showSearchPanel"] = true;
		$tdatainversion[".flexibleSearch"] = true;

$tdatainversion[".isUseAjaxSuggest"] = true;

$tdatainversion[".rowHighlite"] = true;



$tdatainversion[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainversion[".isUseTimeForSearch"] = false;



$tdatainversion[".badgeColor"] = "A48B00";


$tdatainversion[".allSearchFields"] = array();
$tdatainversion[".filterFields"] = array();
$tdatainversion[".requiredSearchFields"] = array();

$tdatainversion[".allSearchFields"][] = "ID";
	$tdatainversion[".allSearchFields"][] = "FINCA_PROPIETARIO_CEDULA";
	$tdatainversion[".allSearchFields"][] = "NOMBRE";
	$tdatainversion[".allSearchFields"][] = "VEREDA";
	$tdatainversion[".allSearchFields"][] = "FINCA";
	$tdatainversion[".allSearchFields"][] = "NOMBRE_PROYECTO";
	$tdatainversion[".allSearchFields"][] = "TIPO";
	$tdatainversion[".allSearchFields"][] = "OBSERVACIONES";
	$tdatainversion[".allSearchFields"][] = "AÑO";
	

$tdatainversion[".googleLikeFields"] = array();
$tdatainversion[".googleLikeFields"][] = "ID";
$tdatainversion[".googleLikeFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatainversion[".googleLikeFields"][] = "NOMBRE";
$tdatainversion[".googleLikeFields"][] = "VEREDA";
$tdatainversion[".googleLikeFields"][] = "FINCA";
$tdatainversion[".googleLikeFields"][] = "NOMBRE_PROYECTO";
$tdatainversion[".googleLikeFields"][] = "TIPO";
$tdatainversion[".googleLikeFields"][] = "OBSERVACIONES";
$tdatainversion[".googleLikeFields"][] = "AÑO";


$tdatainversion[".advSearchFields"] = array();
$tdatainversion[".advSearchFields"][] = "ID";
$tdatainversion[".advSearchFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatainversion[".advSearchFields"][] = "NOMBRE";
$tdatainversion[".advSearchFields"][] = "VEREDA";
$tdatainversion[".advSearchFields"][] = "FINCA";
$tdatainversion[".advSearchFields"][] = "NOMBRE_PROYECTO";
$tdatainversion[".advSearchFields"][] = "TIPO";
$tdatainversion[".advSearchFields"][] = "OBSERVACIONES";
$tdatainversion[".advSearchFields"][] = "AÑO";

$tdatainversion[".tableType"] = "list";

$tdatainversion[".printerPageOrientation"] = 0;
$tdatainversion[".nPrinterPageScale"] = 100;

$tdatainversion[".nPrinterSplitRecords"] = 40;

$tdatainversion[".nPrinterPDFSplitRecords"] = 40;



$tdatainversion[".geocodingEnabled"] = false;





$tdatainversion[".listGridLayout"] = 3;





// view page pdf
$tdatainversion[".isViewPagePDF"] = true;
$tdatainversion[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatainversion[".isPrinterPagePDF"] = true;
$tdatainversion[".isLandscapePrinterPagePDFOrientation"] = 1;
$tdatainversion[".nPrinterPagePDFScale"] = 100;


$tdatainversion[".pageSize"] = 20;

$tdatainversion[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatainversion[".strOrderBy"] = $tstrOrderBy;

$tdatainversion[".orderindexes"] = array();

$tdatainversion[".sqlHead"] = "SELECT ID,  FINCA_PROPIETARIO_CEDULA,  NOMBRE,  VEREDA,  FINCA,  NOMBRE_PROYECTO,  TIPO,  OBSERVACIONES,  `AÑO`";
$tdatainversion[".sqlFrom"] = "FROM inversion";
$tdatainversion[".sqlWhereExpr"] = "";
$tdatainversion[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatainversion[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainversion[".arrGroupsPerPage"] = $arrGPP;

$tdatainversion[".highlightSearchResults"] = true;

$tableKeysinversion = array();
$tableKeysinversion[] = "ID";
$tableKeysinversion[] = "FINCA_PROPIETARIO_CEDULA";
$tdatainversion[".Keys"] = $tableKeysinversion;

$tdatainversion[".listFields"] = array();
$tdatainversion[".listFields"][] = "ID";
$tdatainversion[".listFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatainversion[".listFields"][] = "NOMBRE";
$tdatainversion[".listFields"][] = "VEREDA";
$tdatainversion[".listFields"][] = "FINCA";
$tdatainversion[".listFields"][] = "NOMBRE_PROYECTO";
$tdatainversion[".listFields"][] = "TIPO";
$tdatainversion[".listFields"][] = "OBSERVACIONES";
$tdatainversion[".listFields"][] = "AÑO";

$tdatainversion[".hideMobileList"] = array();


$tdatainversion[".viewFields"] = array();
$tdatainversion[".viewFields"][] = "ID";
$tdatainversion[".viewFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatainversion[".viewFields"][] = "NOMBRE";
$tdatainversion[".viewFields"][] = "VEREDA";
$tdatainversion[".viewFields"][] = "FINCA";
$tdatainversion[".viewFields"][] = "NOMBRE_PROYECTO";
$tdatainversion[".viewFields"][] = "TIPO";
$tdatainversion[".viewFields"][] = "OBSERVACIONES";
$tdatainversion[".viewFields"][] = "AÑO";

$tdatainversion[".addFields"] = array();
$tdatainversion[".addFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatainversion[".addFields"][] = "NOMBRE";
$tdatainversion[".addFields"][] = "VEREDA";
$tdatainversion[".addFields"][] = "FINCA";
$tdatainversion[".addFields"][] = "NOMBRE_PROYECTO";
$tdatainversion[".addFields"][] = "TIPO";
$tdatainversion[".addFields"][] = "OBSERVACIONES";
$tdatainversion[".addFields"][] = "AÑO";

$tdatainversion[".masterListFields"] = array();
$tdatainversion[".masterListFields"][] = "ID";
$tdatainversion[".masterListFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatainversion[".masterListFields"][] = "NOMBRE";
$tdatainversion[".masterListFields"][] = "VEREDA";
$tdatainversion[".masterListFields"][] = "FINCA";
$tdatainversion[".masterListFields"][] = "NOMBRE_PROYECTO";
$tdatainversion[".masterListFields"][] = "TIPO";
$tdatainversion[".masterListFields"][] = "OBSERVACIONES";
$tdatainversion[".masterListFields"][] = "AÑO";

$tdatainversion[".inlineAddFields"] = array();

$tdatainversion[".editFields"] = array();
$tdatainversion[".editFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatainversion[".editFields"][] = "NOMBRE";
$tdatainversion[".editFields"][] = "VEREDA";
$tdatainversion[".editFields"][] = "FINCA";
$tdatainversion[".editFields"][] = "NOMBRE_PROYECTO";
$tdatainversion[".editFields"][] = "TIPO";
$tdatainversion[".editFields"][] = "OBSERVACIONES";
$tdatainversion[".editFields"][] = "AÑO";

$tdatainversion[".inlineEditFields"] = array();

$tdatainversion[".exportFields"] = array();
$tdatainversion[".exportFields"][] = "ID";
$tdatainversion[".exportFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatainversion[".exportFields"][] = "NOMBRE";
$tdatainversion[".exportFields"][] = "VEREDA";
$tdatainversion[".exportFields"][] = "FINCA";
$tdatainversion[".exportFields"][] = "NOMBRE_PROYECTO";
$tdatainversion[".exportFields"][] = "TIPO";
$tdatainversion[".exportFields"][] = "OBSERVACIONES";
$tdatainversion[".exportFields"][] = "AÑO";

$tdatainversion[".importFields"] = array();
$tdatainversion[".importFields"][] = "ID";
$tdatainversion[".importFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatainversion[".importFields"][] = "NOMBRE";
$tdatainversion[".importFields"][] = "VEREDA";
$tdatainversion[".importFields"][] = "FINCA";
$tdatainversion[".importFields"][] = "NOMBRE_PROYECTO";
$tdatainversion[".importFields"][] = "TIPO";
$tdatainversion[".importFields"][] = "OBSERVACIONES";
$tdatainversion[".importFields"][] = "AÑO";

$tdatainversion[".printFields"] = array();
$tdatainversion[".printFields"][] = "ID";
$tdatainversion[".printFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatainversion[".printFields"][] = "NOMBRE";
$tdatainversion[".printFields"][] = "VEREDA";
$tdatainversion[".printFields"][] = "FINCA";
$tdatainversion[".printFields"][] = "NOMBRE_PROYECTO";
$tdatainversion[".printFields"][] = "TIPO";
$tdatainversion[".printFields"][] = "OBSERVACIONES";
$tdatainversion[".printFields"][] = "AÑO";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "inversion";
	$fdata["Label"] = GetFieldLabel("inversion","ID");
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




	$tdatainversion["ID"] = $fdata;
//	FINCA_PROPIETARIO_CEDULA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FINCA_PROPIETARIO_CEDULA";
	$fdata["GoodName"] = "FINCA_PROPIETARIO_CEDULA";
	$fdata["ownerTable"] = "inversion";
	$fdata["Label"] = GetFieldLabel("inversion","FINCA_PROPIETARIO_CEDULA");
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




	$tdatainversion["FINCA_PROPIETARIO_CEDULA"] = $fdata;
//	NOMBRE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "NOMBRE";
	$fdata["GoodName"] = "NOMBRE";
	$fdata["ownerTable"] = "inversion";
	$fdata["Label"] = GetFieldLabel("inversion","NOMBRE");
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




	$tdatainversion["NOMBRE"] = $fdata;
//	VEREDA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "VEREDA";
	$fdata["GoodName"] = "VEREDA";
	$fdata["ownerTable"] = "inversion";
	$fdata["Label"] = GetFieldLabel("inversion","VEREDA");
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




	$tdatainversion["VEREDA"] = $fdata;
//	FINCA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "FINCA";
	$fdata["GoodName"] = "FINCA";
	$fdata["ownerTable"] = "inversion";
	$fdata["Label"] = GetFieldLabel("inversion","FINCA");
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




	$tdatainversion["FINCA"] = $fdata;
//	NOMBRE_PROYECTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "NOMBRE_PROYECTO";
	$fdata["GoodName"] = "NOMBRE_PROYECTO";
	$fdata["ownerTable"] = "inversion";
	$fdata["Label"] = GetFieldLabel("inversion","NOMBRE_PROYECTO");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatainversion["NOMBRE_PROYECTO"] = $fdata;
//	TIPO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "TIPO";
	$fdata["GoodName"] = "TIPO";
	$fdata["ownerTable"] = "inversion";
	$fdata["Label"] = GetFieldLabel("inversion","TIPO");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatainversion["TIPO"] = $fdata;
//	OBSERVACIONES
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "OBSERVACIONES";
	$fdata["GoodName"] = "OBSERVACIONES";
	$fdata["ownerTable"] = "inversion";
	$fdata["Label"] = GetFieldLabel("inversion","OBSERVACIONES");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdatainversion["OBSERVACIONES"] = $fdata;
//	AÑO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "AÑO";
	$fdata["GoodName"] = "A_O";
	$fdata["ownerTable"] = "inversion";
	$fdata["Label"] = GetFieldLabel("inversion","A_O");
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




	$tdatainversion["AÑO"] = $fdata;


$tables_data["inversion"]=&$tdatainversion;
$field_labels["inversion"] = &$fieldLabelsinversion;
$fieldToolTips["inversion"] = &$fieldToolTipsinversion;
$page_titles["inversion"] = &$pageTitlesinversion;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["inversion"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["inversion"] = array();


	
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
					$masterTablesData["inversion"][0] = $masterParams;
				$masterTablesData["inversion"][0]["masterKeys"] = array();
	$masterTablesData["inversion"][0]["masterKeys"][]="PROPIETARIO_CEDULA";
				$masterTablesData["inversion"][0]["detailKeys"] = array();
	$masterTablesData["inversion"][0]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
		
	
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
	$masterTablesData["inversion"][1] = $masterParams;
				$masterTablesData["inversion"][1]["masterKeys"] = array();
	$masterTablesData["inversion"][1]["masterKeys"][]="PROPIETARIO_CEDULA";
				$masterTablesData["inversion"][1]["detailKeys"] = array();
	$masterTablesData["inversion"][1]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
		
	
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
	$masterTablesData["inversion"][2] = $masterParams;
				$masterTablesData["inversion"][2]["masterKeys"] = array();
	$masterTablesData["inversion"][2]["masterKeys"][]="PROPIETARIO_CEDULA";
				$masterTablesData["inversion"][2]["detailKeys"] = array();
	$masterTablesData["inversion"][2]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
		
	
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
	$masterTablesData["inversion"][3] = $masterParams;
				$masterTablesData["inversion"][3]["masterKeys"] = array();
	$masterTablesData["inversion"][3]["masterKeys"][]="PROPIETARIO_CEDULA";
				$masterTablesData["inversion"][3]["detailKeys"] = array();
	$masterTablesData["inversion"][3]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_inversion()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  FINCA_PROPIETARIO_CEDULA,  NOMBRE,  VEREDA,  FINCA,  NOMBRE_PROYECTO,  TIPO,  OBSERVACIONES,  `AÑO`";
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
	"m_strName" => "ID",
	"m_strTable" => "inversion",
	"m_srcTableName" => "inversion"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "inversion";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "FINCA_PROPIETARIO_CEDULA",
	"m_strTable" => "inversion",
	"m_srcTableName" => "inversion"
));

$proto8["m_sql"] = "FINCA_PROPIETARIO_CEDULA";
$proto8["m_srcTableName"] = "inversion";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBRE",
	"m_strTable" => "inversion",
	"m_srcTableName" => "inversion"
));

$proto10["m_sql"] = "NOMBRE";
$proto10["m_srcTableName"] = "inversion";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "VEREDA",
	"m_strTable" => "inversion",
	"m_srcTableName" => "inversion"
));

$proto12["m_sql"] = "VEREDA";
$proto12["m_srcTableName"] = "inversion";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "FINCA",
	"m_strTable" => "inversion",
	"m_srcTableName" => "inversion"
));

$proto14["m_sql"] = "FINCA";
$proto14["m_srcTableName"] = "inversion";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBRE_PROYECTO",
	"m_strTable" => "inversion",
	"m_srcTableName" => "inversion"
));

$proto16["m_sql"] = "NOMBRE_PROYECTO";
$proto16["m_srcTableName"] = "inversion";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "TIPO",
	"m_strTable" => "inversion",
	"m_srcTableName" => "inversion"
));

$proto18["m_sql"] = "TIPO";
$proto18["m_srcTableName"] = "inversion";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "OBSERVACIONES",
	"m_strTable" => "inversion",
	"m_srcTableName" => "inversion"
));

$proto20["m_sql"] = "OBSERVACIONES";
$proto20["m_srcTableName"] = "inversion";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "inversion",
	"m_srcTableName" => "inversion"
));

$proto22["m_sql"] = "`AÑO`";
$proto22["m_srcTableName"] = "inversion";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "inversion";
$proto25["m_srcTableName"] = "inversion";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "ID";
$proto25["m_columns"][] = "FINCA_PROPIETARIO_CEDULA";
$proto25["m_columns"][] = "NOMBRE";
$proto25["m_columns"][] = "VEREDA";
$proto25["m_columns"][] = "FINCA";
$proto25["m_columns"][] = "TIPO";
$proto25["m_columns"][] = "NOMBRE_PROYECTO";
$proto25["m_columns"][] = "OBSERVACIONES";
$proto25["m_columns"][] = "AÑO";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "inversion";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "inversion";
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
	"m_strTable" => "inversion",
	"m_srcTableName" => "inversion"
));

$proto28["m_column"]=$obj;
$obj = new SQLGroupByItem($proto28);

$proto0["m_groupby"][]=$obj;
												$proto30=array();
						$obj = new SQLField(array(
	"m_strName" => "FINCA_PROPIETARIO_CEDULA",
	"m_strTable" => "inversion",
	"m_srcTableName" => "inversion"
));

$proto30["m_column"]=$obj;
$obj = new SQLGroupByItem($proto30);

$proto0["m_groupby"][]=$obj;
												$proto32=array();
						$obj = new SQLField(array(
	"m_strName" => "NOMBRE",
	"m_strTable" => "inversion",
	"m_srcTableName" => "inversion"
));

$proto32["m_column"]=$obj;
$obj = new SQLGroupByItem($proto32);

$proto0["m_groupby"][]=$obj;
												$proto34=array();
						$obj = new SQLField(array(
	"m_strName" => "VEREDA",
	"m_strTable" => "inversion",
	"m_srcTableName" => "inversion"
));

$proto34["m_column"]=$obj;
$obj = new SQLGroupByItem($proto34);

$proto0["m_groupby"][]=$obj;
												$proto36=array();
						$obj = new SQLField(array(
	"m_strName" => "FINCA",
	"m_strTable" => "inversion",
	"m_srcTableName" => "inversion"
));

$proto36["m_column"]=$obj;
$obj = new SQLGroupByItem($proto36);

$proto0["m_groupby"][]=$obj;
												$proto38=array();
						$obj = new SQLField(array(
	"m_strName" => "NOMBRE_PROYECTO",
	"m_strTable" => "inversion",
	"m_srcTableName" => "inversion"
));

$proto38["m_column"]=$obj;
$obj = new SQLGroupByItem($proto38);

$proto0["m_groupby"][]=$obj;
												$proto40=array();
						$obj = new SQLField(array(
	"m_strName" => "TIPO",
	"m_strTable" => "inversion",
	"m_srcTableName" => "inversion"
));

$proto40["m_column"]=$obj;
$obj = new SQLGroupByItem($proto40);

$proto0["m_groupby"][]=$obj;
												$proto42=array();
						$obj = new SQLField(array(
	"m_strName" => "OBSERVACIONES",
	"m_strTable" => "inversion",
	"m_srcTableName" => "inversion"
));

$proto42["m_column"]=$obj;
$obj = new SQLGroupByItem($proto42);

$proto0["m_groupby"][]=$obj;
												$proto44=array();
						$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "inversion",
	"m_srcTableName" => "inversion"
));

$proto44["m_column"]=$obj;
$obj = new SQLGroupByItem($proto44);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="inversion";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_inversion = createSqlQuery_inversion();


	
		;

									

$tdatainversion[".sqlquery"] = $queryData_inversion;

$tableEvents["inversion"] = new eventsBase;
$tdatainversion[".hasEvents"] = false;

?>