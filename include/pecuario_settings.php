<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapecuario = array();
	$tdatapecuario[".truncateText"] = true;
	$tdatapecuario[".NumberOfChars"] = 80;
	$tdatapecuario[".ShortName"] = "pecuario";
	$tdatapecuario[".OwnerID"] = "";
	$tdatapecuario[".OriginalTable"] = "pecuario";

//	field labels
$fieldLabelspecuario = array();
$fieldToolTipspecuario = array();
$pageTitlespecuario = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspecuario["Spanish"] = array();
	$fieldToolTipspecuario["Spanish"] = array();
	$pageTitlespecuario["Spanish"] = array();
	$fieldLabelspecuario["Spanish"]["ID"] = "ID";
	$fieldToolTipspecuario["Spanish"]["ID"] = "";
	$fieldLabelspecuario["Spanish"]["FINCA_PROPIETARIO_CEDULA"] = "CEDULA";
	$fieldToolTipspecuario["Spanish"]["FINCA_PROPIETARIO_CEDULA"] = "";
	$fieldLabelspecuario["Spanish"]["NOMBRE"] = "NOMBRE";
	$fieldToolTipspecuario["Spanish"]["NOMBRE"] = "";
	$fieldLabelspecuario["Spanish"]["VEREDA"] = "VEREDA";
	$fieldToolTipspecuario["Spanish"]["VEREDA"] = "";
	$fieldLabelspecuario["Spanish"]["FINCA"] = "FINCA";
	$fieldToolTipspecuario["Spanish"]["FINCA"] = "";
	$fieldLabelspecuario["Spanish"]["RAZA"] = "RAZA";
	$fieldToolTipspecuario["Spanish"]["RAZA"] = "";
	$fieldLabelspecuario["Spanish"]["U_A"] = "U A";
	$fieldToolTipspecuario["Spanish"]["U_A"] = "";
	$fieldLabelspecuario["Spanish"]["AREA"] = "AREA";
	$fieldToolTipspecuario["Spanish"]["AREA"] = "";
	$fieldLabelspecuario["Spanish"]["PRODUCCION_ANUAL"] = "PROD. ANUAL (Ton)";
	$fieldToolTipspecuario["Spanish"]["PRODUCCION_ANUAL"] = "";
	$fieldLabelspecuario["Spanish"]["A_O"] = "AÑO";
	$fieldToolTipspecuario["Spanish"]["A_O"] = "";
	$pageTitlespecuario["Spanish"]["add"] = "Pecuario, Añadir";
	if (count($fieldToolTipspecuario["Spanish"]))
		$tdatapecuario[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspecuario[""] = array();
	$fieldToolTipspecuario[""] = array();
	$pageTitlespecuario[""] = array();
	if (count($fieldToolTipspecuario[""]))
		$tdatapecuario[".isUseToolTips"] = true;
}


	$tdatapecuario[".NCSearch"] = true;



$tdatapecuario[".shortTableName"] = "pecuario";
$tdatapecuario[".nSecOptions"] = 0;
$tdatapecuario[".recsPerRowPrint"] = 1;
$tdatapecuario[".mainTableOwnerID"] = "";
$tdatapecuario[".moveNext"] = 1;
$tdatapecuario[".entityType"] = 0;

$tdatapecuario[".strOriginalTableName"] = "pecuario";

	



$tdatapecuario[".showAddInPopup"] = false;

$tdatapecuario[".showEditInPopup"] = false;

$tdatapecuario[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapecuario[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapecuario[".fieldsForRegister"] = array();

$tdatapecuario[".listAjax"] = false;

	$tdatapecuario[".audit"] = false;

	$tdatapecuario[".locking"] = false;

$tdatapecuario[".edit"] = true;
$tdatapecuario[".afterEditAction"] = 1;
$tdatapecuario[".closePopupAfterEdit"] = 1;
$tdatapecuario[".afterEditActionDetTable"] = "";

$tdatapecuario[".add"] = true;
$tdatapecuario[".afterAddAction"] = 1;
$tdatapecuario[".closePopupAfterAdd"] = 1;
$tdatapecuario[".afterAddActionDetTable"] = "";

$tdatapecuario[".list"] = true;

$tdatapecuario[".view"] = true;

$tdatapecuario[".import"] = true;

$tdatapecuario[".exportTo"] = true;

$tdatapecuario[".printFriendly"] = true;

$tdatapecuario[".delete"] = true;

$tdatapecuario[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatapecuario[".searchSaving"] = false;
//

$tdatapecuario[".showSearchPanel"] = true;
		$tdatapecuario[".flexibleSearch"] = true;

$tdatapecuario[".isUseAjaxSuggest"] = true;

$tdatapecuario[".rowHighlite"] = true;



$tdatapecuario[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapecuario[".isUseTimeForSearch"] = false;



$tdatapecuario[".badgeColor"] = "D526D5";


$tdatapecuario[".allSearchFields"] = array();
$tdatapecuario[".filterFields"] = array();
$tdatapecuario[".requiredSearchFields"] = array();

$tdatapecuario[".allSearchFields"][] = "ID";
	$tdatapecuario[".allSearchFields"][] = "FINCA_PROPIETARIO_CEDULA";
	$tdatapecuario[".allSearchFields"][] = "NOMBRE";
	$tdatapecuario[".allSearchFields"][] = "VEREDA";
	$tdatapecuario[".allSearchFields"][] = "FINCA";
	$tdatapecuario[".allSearchFields"][] = "RAZA";
	$tdatapecuario[".allSearchFields"][] = "U_A";
	$tdatapecuario[".allSearchFields"][] = "AREA";
	$tdatapecuario[".allSearchFields"][] = "PRODUCCION_ANUAL";
	$tdatapecuario[".allSearchFields"][] = "AÑO";
	

$tdatapecuario[".googleLikeFields"] = array();
$tdatapecuario[".googleLikeFields"][] = "ID";
$tdatapecuario[".googleLikeFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatapecuario[".googleLikeFields"][] = "NOMBRE";
$tdatapecuario[".googleLikeFields"][] = "VEREDA";
$tdatapecuario[".googleLikeFields"][] = "FINCA";
$tdatapecuario[".googleLikeFields"][] = "RAZA";
$tdatapecuario[".googleLikeFields"][] = "U_A";
$tdatapecuario[".googleLikeFields"][] = "AREA";
$tdatapecuario[".googleLikeFields"][] = "PRODUCCION_ANUAL";
$tdatapecuario[".googleLikeFields"][] = "AÑO";


$tdatapecuario[".advSearchFields"] = array();
$tdatapecuario[".advSearchFields"][] = "ID";
$tdatapecuario[".advSearchFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatapecuario[".advSearchFields"][] = "NOMBRE";
$tdatapecuario[".advSearchFields"][] = "VEREDA";
$tdatapecuario[".advSearchFields"][] = "FINCA";
$tdatapecuario[".advSearchFields"][] = "RAZA";
$tdatapecuario[".advSearchFields"][] = "U_A";
$tdatapecuario[".advSearchFields"][] = "AREA";
$tdatapecuario[".advSearchFields"][] = "PRODUCCION_ANUAL";
$tdatapecuario[".advSearchFields"][] = "AÑO";

$tdatapecuario[".tableType"] = "list";

$tdatapecuario[".printerPageOrientation"] = 0;
$tdatapecuario[".nPrinterPageScale"] = 100;

$tdatapecuario[".nPrinterSplitRecords"] = 40;

$tdatapecuario[".nPrinterPDFSplitRecords"] = 40;



$tdatapecuario[".geocodingEnabled"] = false;





$tdatapecuario[".listGridLayout"] = 3;





// view page pdf
$tdatapecuario[".isViewPagePDF"] = true;
$tdatapecuario[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatapecuario[".isPrinterPagePDF"] = true;
$tdatapecuario[".isLandscapePrinterPagePDFOrientation"] = 1;
$tdatapecuario[".nPrinterPagePDFScale"] = 100;


$tdatapecuario[".pageSize"] = 20;

$tdatapecuario[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapecuario[".strOrderBy"] = $tstrOrderBy;

$tdatapecuario[".orderindexes"] = array();

$tdatapecuario[".sqlHead"] = "SELECT ID,  FINCA_PROPIETARIO_CEDULA,  NOMBRE,  VEREDA,  FINCA,  RAZA,  U_A,  AREA,  PRODUCCION_ANUAL,  `AÑO`";
$tdatapecuario[".sqlFrom"] = "FROM pecuario";
$tdatapecuario[".sqlWhereExpr"] = "";
$tdatapecuario[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapecuario[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapecuario[".arrGroupsPerPage"] = $arrGPP;

$tdatapecuario[".highlightSearchResults"] = true;

$tableKeyspecuario = array();
$tableKeyspecuario[] = "ID";
$tableKeyspecuario[] = "FINCA_PROPIETARIO_CEDULA";
$tdatapecuario[".Keys"] = $tableKeyspecuario;

$tdatapecuario[".listFields"] = array();
$tdatapecuario[".listFields"][] = "ID";
$tdatapecuario[".listFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatapecuario[".listFields"][] = "NOMBRE";
$tdatapecuario[".listFields"][] = "VEREDA";
$tdatapecuario[".listFields"][] = "FINCA";
$tdatapecuario[".listFields"][] = "RAZA";
$tdatapecuario[".listFields"][] = "U_A";
$tdatapecuario[".listFields"][] = "AREA";
$tdatapecuario[".listFields"][] = "PRODUCCION_ANUAL";
$tdatapecuario[".listFields"][] = "AÑO";

$tdatapecuario[".hideMobileList"] = array();


$tdatapecuario[".viewFields"] = array();
$tdatapecuario[".viewFields"][] = "ID";
$tdatapecuario[".viewFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatapecuario[".viewFields"][] = "NOMBRE";
$tdatapecuario[".viewFields"][] = "VEREDA";
$tdatapecuario[".viewFields"][] = "FINCA";
$tdatapecuario[".viewFields"][] = "RAZA";
$tdatapecuario[".viewFields"][] = "U_A";
$tdatapecuario[".viewFields"][] = "AREA";
$tdatapecuario[".viewFields"][] = "PRODUCCION_ANUAL";
$tdatapecuario[".viewFields"][] = "AÑO";

$tdatapecuario[".addFields"] = array();
$tdatapecuario[".addFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatapecuario[".addFields"][] = "NOMBRE";
$tdatapecuario[".addFields"][] = "VEREDA";
$tdatapecuario[".addFields"][] = "FINCA";
$tdatapecuario[".addFields"][] = "RAZA";
$tdatapecuario[".addFields"][] = "U_A";
$tdatapecuario[".addFields"][] = "AREA";
$tdatapecuario[".addFields"][] = "PRODUCCION_ANUAL";
$tdatapecuario[".addFields"][] = "AÑO";

$tdatapecuario[".masterListFields"] = array();
$tdatapecuario[".masterListFields"][] = "ID";
$tdatapecuario[".masterListFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatapecuario[".masterListFields"][] = "NOMBRE";
$tdatapecuario[".masterListFields"][] = "VEREDA";
$tdatapecuario[".masterListFields"][] = "FINCA";
$tdatapecuario[".masterListFields"][] = "RAZA";
$tdatapecuario[".masterListFields"][] = "U_A";
$tdatapecuario[".masterListFields"][] = "AREA";
$tdatapecuario[".masterListFields"][] = "PRODUCCION_ANUAL";
$tdatapecuario[".masterListFields"][] = "AÑO";

$tdatapecuario[".inlineAddFields"] = array();
$tdatapecuario[".inlineAddFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatapecuario[".inlineAddFields"][] = "NOMBRE";
$tdatapecuario[".inlineAddFields"][] = "VEREDA";
$tdatapecuario[".inlineAddFields"][] = "FINCA";
$tdatapecuario[".inlineAddFields"][] = "RAZA";
$tdatapecuario[".inlineAddFields"][] = "U_A";
$tdatapecuario[".inlineAddFields"][] = "AREA";
$tdatapecuario[".inlineAddFields"][] = "PRODUCCION_ANUAL";
$tdatapecuario[".inlineAddFields"][] = "AÑO";

$tdatapecuario[".editFields"] = array();
$tdatapecuario[".editFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatapecuario[".editFields"][] = "NOMBRE";
$tdatapecuario[".editFields"][] = "VEREDA";
$tdatapecuario[".editFields"][] = "FINCA";
$tdatapecuario[".editFields"][] = "RAZA";
$tdatapecuario[".editFields"][] = "U_A";
$tdatapecuario[".editFields"][] = "AREA";
$tdatapecuario[".editFields"][] = "PRODUCCION_ANUAL";
$tdatapecuario[".editFields"][] = "AÑO";

$tdatapecuario[".inlineEditFields"] = array();
$tdatapecuario[".inlineEditFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatapecuario[".inlineEditFields"][] = "NOMBRE";
$tdatapecuario[".inlineEditFields"][] = "VEREDA";
$tdatapecuario[".inlineEditFields"][] = "FINCA";
$tdatapecuario[".inlineEditFields"][] = "RAZA";
$tdatapecuario[".inlineEditFields"][] = "U_A";
$tdatapecuario[".inlineEditFields"][] = "AREA";
$tdatapecuario[".inlineEditFields"][] = "PRODUCCION_ANUAL";
$tdatapecuario[".inlineEditFields"][] = "AÑO";

$tdatapecuario[".exportFields"] = array();
$tdatapecuario[".exportFields"][] = "ID";
$tdatapecuario[".exportFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatapecuario[".exportFields"][] = "NOMBRE";
$tdatapecuario[".exportFields"][] = "VEREDA";
$tdatapecuario[".exportFields"][] = "FINCA";
$tdatapecuario[".exportFields"][] = "RAZA";
$tdatapecuario[".exportFields"][] = "U_A";
$tdatapecuario[".exportFields"][] = "AREA";
$tdatapecuario[".exportFields"][] = "PRODUCCION_ANUAL";
$tdatapecuario[".exportFields"][] = "AÑO";

$tdatapecuario[".importFields"] = array();
$tdatapecuario[".importFields"][] = "ID";
$tdatapecuario[".importFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatapecuario[".importFields"][] = "NOMBRE";
$tdatapecuario[".importFields"][] = "VEREDA";
$tdatapecuario[".importFields"][] = "FINCA";
$tdatapecuario[".importFields"][] = "RAZA";
$tdatapecuario[".importFields"][] = "U_A";
$tdatapecuario[".importFields"][] = "AREA";
$tdatapecuario[".importFields"][] = "PRODUCCION_ANUAL";
$tdatapecuario[".importFields"][] = "AÑO";

$tdatapecuario[".printFields"] = array();
$tdatapecuario[".printFields"][] = "ID";
$tdatapecuario[".printFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatapecuario[".printFields"][] = "NOMBRE";
$tdatapecuario[".printFields"][] = "VEREDA";
$tdatapecuario[".printFields"][] = "FINCA";
$tdatapecuario[".printFields"][] = "RAZA";
$tdatapecuario[".printFields"][] = "U_A";
$tdatapecuario[".printFields"][] = "AREA";
$tdatapecuario[".printFields"][] = "PRODUCCION_ANUAL";
$tdatapecuario[".printFields"][] = "AÑO";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "pecuario";
	$fdata["Label"] = GetFieldLabel("pecuario","ID");
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




	$tdatapecuario["ID"] = $fdata;
//	FINCA_PROPIETARIO_CEDULA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FINCA_PROPIETARIO_CEDULA";
	$fdata["GoodName"] = "FINCA_PROPIETARIO_CEDULA";
	$fdata["ownerTable"] = "pecuario";
	$fdata["Label"] = GetFieldLabel("pecuario","FINCA_PROPIETARIO_CEDULA");
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




	$tdatapecuario["FINCA_PROPIETARIO_CEDULA"] = $fdata;
//	NOMBRE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "NOMBRE";
	$fdata["GoodName"] = "NOMBRE";
	$fdata["ownerTable"] = "pecuario";
	$fdata["Label"] = GetFieldLabel("pecuario","NOMBRE");
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




	$tdatapecuario["NOMBRE"] = $fdata;
//	VEREDA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "VEREDA";
	$fdata["GoodName"] = "VEREDA";
	$fdata["ownerTable"] = "pecuario";
	$fdata["Label"] = GetFieldLabel("pecuario","VEREDA");
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




	$tdatapecuario["VEREDA"] = $fdata;
//	FINCA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "FINCA";
	$fdata["GoodName"] = "FINCA";
	$fdata["ownerTable"] = "pecuario";
	$fdata["Label"] = GetFieldLabel("pecuario","FINCA");
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




	$tdatapecuario["FINCA"] = $fdata;
//	RAZA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "RAZA";
	$fdata["GoodName"] = "RAZA";
	$fdata["ownerTable"] = "pecuario";
	$fdata["Label"] = GetFieldLabel("pecuario","RAZA");
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
	$edata["LookupValues"][] = "----BOVINO----";
	$edata["LookupValues"][] = "ANGUS";
	$edata["LookupValues"][] = "AYRSHINE";
	$edata["LookupValues"][] = "BLANCO OREJINEGO";
	$edata["LookupValues"][] = "BRAHMAN";
	$edata["LookupValues"][] = "CASANAREÑO";
	$edata["LookupValues"][] = "CHINO SANTANDEREANO";
	$edata["LookupValues"][] = "CRIOLLO";
	$edata["LookupValues"][] = "CEBÚ";
	$edata["LookupValues"][] = "HOLSTEIN";
	$edata["LookupValues"][] = "JERSEY";
	$edata["LookupValues"][] = "LUCERNA";
	$edata["LookupValues"][] = "MESTIZO";
	$edata["LookupValues"][] = "NORMNDO";
	$edata["LookupValues"][] = "PARDO SUIZO";
	$edata["LookupValues"][] = "ROMOSINUANO";
	$edata["LookupValues"][] = "SIBONEY";
	$edata["LookupValues"][] = "SIMENTAL";
	$edata["LookupValues"][] = "OTRO";
	$edata["LookupValues"][] = "----PORCINOS----";
	$edata["LookupValues"][] = "CARE PALO";
	$edata["LookupValues"][] = "CASCO DE MULA";
	$edata["LookupValues"][] = "CHOCOANO";
	$edata["LookupValues"][] = "CONGO";
	$edata["LookupValues"][] = "CURI";
	$edata["LookupValues"][] = "DUROC";
	$edata["LookupValues"][] = "ZUNGO";
	$edata["LookupValues"][] = "CHONCHO";
	$edata["LookupValues"][] = "OTRO";
	$edata["LookupValues"][] = "----OVINO--CAPRINO----";
	$edata["LookupValues"][] = "LAMANCHA";
	$edata["LookupValues"][] = "SAANEN";
	$edata["LookupValues"][] = "TOGGENBURG";
	$edata["LookupValues"][] = "BOER";
	$edata["LookupValues"][] = "ESPAÑOLA";
	$edata["LookupValues"][] = "CRIOLLA";
	$edata["LookupValues"][] = "ANGLO-NUBIAN";
	$edata["LookupValues"][] = "ANGORA";
	$edata["LookupValues"][] = "KATAHDIN";
	$edata["LookupValues"][] = "SANTA INES";
	$edata["LookupValues"][] = "DORPER";
	$edata["LookupValues"][] = "PELIBUEY";
	$edata["LookupValues"][] = "CHAROLLAIS";
	$edata["LookupValues"][] = "OTRO";
	$edata["LookupValues"][] = "----ACUICOLA----";
	$edata["LookupValues"][] = "BOCACHICO";
	$edata["LookupValues"][] = "CACHAMA";
	$edata["LookupValues"][] = "CARPA";
	$edata["LookupValues"][] = "TILAPIA";
	$edata["LookupValues"][] = "TRUCHA";
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




	$tdatapecuario["RAZA"] = $fdata;
//	U_A
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "U_A";
	$fdata["GoodName"] = "U_A";
	$fdata["ownerTable"] = "pecuario";
	$fdata["Label"] = GetFieldLabel("pecuario","U_A");
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




	$tdatapecuario["U_A"] = $fdata;
//	AREA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "AREA";
	$fdata["GoodName"] = "AREA";
	$fdata["ownerTable"] = "pecuario";
	$fdata["Label"] = GetFieldLabel("pecuario","AREA");
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




	$tdatapecuario["AREA"] = $fdata;
//	PRODUCCION_ANUAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "PRODUCCION_ANUAL";
	$fdata["GoodName"] = "PRODUCCION_ANUAL";
	$fdata["ownerTable"] = "pecuario";
	$fdata["Label"] = GetFieldLabel("pecuario","PRODUCCION_ANUAL");
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




	$tdatapecuario["PRODUCCION_ANUAL"] = $fdata;
//	AÑO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "AÑO";
	$fdata["GoodName"] = "A_O";
	$fdata["ownerTable"] = "pecuario";
	$fdata["Label"] = GetFieldLabel("pecuario","A_O");
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




	$tdatapecuario["AÑO"] = $fdata;


$tables_data["pecuario"]=&$tdatapecuario;
$field_labels["pecuario"] = &$fieldLabelspecuario;
$fieldToolTips["pecuario"] = &$fieldToolTipspecuario;
$page_titles["pecuario"] = &$pageTitlespecuario;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["pecuario"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["pecuario"] = array();


	
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
					$masterTablesData["pecuario"][0] = $masterParams;
				$masterTablesData["pecuario"][0]["masterKeys"] = array();
	$masterTablesData["pecuario"][0]["masterKeys"][]="PROPIETARIO_CEDULA";
				$masterTablesData["pecuario"][0]["detailKeys"] = array();
	$masterTablesData["pecuario"][0]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
		
	
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
	$masterTablesData["pecuario"][1] = $masterParams;
				$masterTablesData["pecuario"][1]["masterKeys"] = array();
	$masterTablesData["pecuario"][1]["masterKeys"][]="PROPIETARIO_CEDULA";
				$masterTablesData["pecuario"][1]["detailKeys"] = array();
	$masterTablesData["pecuario"][1]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
		
	
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
	$masterTablesData["pecuario"][2] = $masterParams;
				$masterTablesData["pecuario"][2]["masterKeys"] = array();
	$masterTablesData["pecuario"][2]["masterKeys"][]="PROPIETARIO_CEDULA";
				$masterTablesData["pecuario"][2]["detailKeys"] = array();
	$masterTablesData["pecuario"][2]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
		
	
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
	$masterTablesData["pecuario"][3] = $masterParams;
				$masterTablesData["pecuario"][3]["masterKeys"] = array();
	$masterTablesData["pecuario"][3]["masterKeys"][]="PROPIETARIO_CEDULA";
				$masterTablesData["pecuario"][3]["detailKeys"] = array();
	$masterTablesData["pecuario"][3]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_pecuario()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  FINCA_PROPIETARIO_CEDULA,  NOMBRE,  VEREDA,  FINCA,  RAZA,  U_A,  AREA,  PRODUCCION_ANUAL,  `AÑO`";
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
	"m_strName" => "ID",
	"m_strTable" => "pecuario",
	"m_srcTableName" => "pecuario"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "pecuario";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "FINCA_PROPIETARIO_CEDULA",
	"m_strTable" => "pecuario",
	"m_srcTableName" => "pecuario"
));

$proto8["m_sql"] = "FINCA_PROPIETARIO_CEDULA";
$proto8["m_srcTableName"] = "pecuario";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBRE",
	"m_strTable" => "pecuario",
	"m_srcTableName" => "pecuario"
));

$proto10["m_sql"] = "NOMBRE";
$proto10["m_srcTableName"] = "pecuario";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "VEREDA",
	"m_strTable" => "pecuario",
	"m_srcTableName" => "pecuario"
));

$proto12["m_sql"] = "VEREDA";
$proto12["m_srcTableName"] = "pecuario";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "FINCA",
	"m_strTable" => "pecuario",
	"m_srcTableName" => "pecuario"
));

$proto14["m_sql"] = "FINCA";
$proto14["m_srcTableName"] = "pecuario";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "RAZA",
	"m_strTable" => "pecuario",
	"m_srcTableName" => "pecuario"
));

$proto16["m_sql"] = "RAZA";
$proto16["m_srcTableName"] = "pecuario";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "U_A",
	"m_strTable" => "pecuario",
	"m_srcTableName" => "pecuario"
));

$proto18["m_sql"] = "U_A";
$proto18["m_srcTableName"] = "pecuario";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "AREA",
	"m_strTable" => "pecuario",
	"m_srcTableName" => "pecuario"
));

$proto20["m_sql"] = "AREA";
$proto20["m_srcTableName"] = "pecuario";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "PRODUCCION_ANUAL",
	"m_strTable" => "pecuario",
	"m_srcTableName" => "pecuario"
));

$proto22["m_sql"] = "PRODUCCION_ANUAL";
$proto22["m_srcTableName"] = "pecuario";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "pecuario",
	"m_srcTableName" => "pecuario"
));

$proto24["m_sql"] = "`AÑO`";
$proto24["m_srcTableName"] = "pecuario";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "pecuario";
$proto27["m_srcTableName"] = "pecuario";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "ID";
$proto27["m_columns"][] = "FINCA_PROPIETARIO_CEDULA";
$proto27["m_columns"][] = "NOMBRE";
$proto27["m_columns"][] = "VEREDA";
$proto27["m_columns"][] = "FINCA";
$proto27["m_columns"][] = "RAZA";
$proto27["m_columns"][] = "U_A";
$proto27["m_columns"][] = "AREA";
$proto27["m_columns"][] = "PRODUCCION_ANUAL";
$proto27["m_columns"][] = "AÑO";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "pecuario";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "pecuario";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto30=array();
						$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "pecuario",
	"m_srcTableName" => "pecuario"
));

$proto30["m_column"]=$obj;
$obj = new SQLGroupByItem($proto30);

$proto0["m_groupby"][]=$obj;
												$proto32=array();
						$obj = new SQLField(array(
	"m_strName" => "FINCA_PROPIETARIO_CEDULA",
	"m_strTable" => "pecuario",
	"m_srcTableName" => "pecuario"
));

$proto32["m_column"]=$obj;
$obj = new SQLGroupByItem($proto32);

$proto0["m_groupby"][]=$obj;
												$proto34=array();
						$obj = new SQLField(array(
	"m_strName" => "NOMBRE",
	"m_strTable" => "pecuario",
	"m_srcTableName" => "pecuario"
));

$proto34["m_column"]=$obj;
$obj = new SQLGroupByItem($proto34);

$proto0["m_groupby"][]=$obj;
												$proto36=array();
						$obj = new SQLField(array(
	"m_strName" => "VEREDA",
	"m_strTable" => "pecuario",
	"m_srcTableName" => "pecuario"
));

$proto36["m_column"]=$obj;
$obj = new SQLGroupByItem($proto36);

$proto0["m_groupby"][]=$obj;
												$proto38=array();
						$obj = new SQLField(array(
	"m_strName" => "FINCA",
	"m_strTable" => "pecuario",
	"m_srcTableName" => "pecuario"
));

$proto38["m_column"]=$obj;
$obj = new SQLGroupByItem($proto38);

$proto0["m_groupby"][]=$obj;
												$proto40=array();
						$obj = new SQLField(array(
	"m_strName" => "RAZA",
	"m_strTable" => "pecuario",
	"m_srcTableName" => "pecuario"
));

$proto40["m_column"]=$obj;
$obj = new SQLGroupByItem($proto40);

$proto0["m_groupby"][]=$obj;
												$proto42=array();
						$obj = new SQLField(array(
	"m_strName" => "U_A",
	"m_strTable" => "pecuario",
	"m_srcTableName" => "pecuario"
));

$proto42["m_column"]=$obj;
$obj = new SQLGroupByItem($proto42);

$proto0["m_groupby"][]=$obj;
												$proto44=array();
						$obj = new SQLField(array(
	"m_strName" => "AREA",
	"m_strTable" => "pecuario",
	"m_srcTableName" => "pecuario"
));

$proto44["m_column"]=$obj;
$obj = new SQLGroupByItem($proto44);

$proto0["m_groupby"][]=$obj;
												$proto46=array();
						$obj = new SQLField(array(
	"m_strName" => "PRODUCCION_ANUAL",
	"m_strTable" => "pecuario",
	"m_srcTableName" => "pecuario"
));

$proto46["m_column"]=$obj;
$obj = new SQLGroupByItem($proto46);

$proto0["m_groupby"][]=$obj;
												$proto48=array();
						$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "pecuario",
	"m_srcTableName" => "pecuario"
));

$proto48["m_column"]=$obj;
$obj = new SQLGroupByItem($proto48);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="pecuario";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pecuario = createSqlQuery_pecuario();


	
		;

										

$tdatapecuario[".sqlquery"] = $queryData_pecuario;

$tableEvents["pecuario"] = new eventsBase;
$tdatapecuario[".hasEvents"] = false;

?>