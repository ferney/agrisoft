<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafinca = array();
	$tdatafinca[".truncateText"] = true;
	$tdatafinca[".NumberOfChars"] = 80;
	$tdatafinca[".ShortName"] = "finca";
	$tdatafinca[".OwnerID"] = "";
	$tdatafinca[".OriginalTable"] = "finca";

//	field labels
$fieldLabelsfinca = array();
$fieldToolTipsfinca = array();
$pageTitlesfinca = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsfinca["Spanish"] = array();
	$fieldToolTipsfinca["Spanish"] = array();
	$pageTitlesfinca["Spanish"] = array();
	$fieldLabelsfinca["Spanish"]["ID"] = "ID";
	$fieldToolTipsfinca["Spanish"]["ID"] = "";
	$fieldLabelsfinca["Spanish"]["PROPIETARIO_CEDULA"] = "CEDULA";
	$fieldToolTipsfinca["Spanish"]["PROPIETARIO_CEDULA"] = "";
	$fieldLabelsfinca["Spanish"]["NOMBRE"] = "NOMBRE";
	$fieldToolTipsfinca["Spanish"]["NOMBRE"] = "";
	$fieldLabelsfinca["Spanish"]["VEREDA"] = "VEREDA";
	$fieldToolTipsfinca["Spanish"]["VEREDA"] = "";
	$fieldLabelsfinca["Spanish"]["FINCA"] = "FINCA";
	$fieldToolTipsfinca["Spanish"]["FINCA"] = "";
	$fieldLabelsfinca["Spanish"]["ALTURA"] = "ALTURA";
	$fieldToolTipsfinca["Spanish"]["ALTURA"] = "";
	$fieldLabelsfinca["Spanish"]["GEOREFERENCIA"] = "GEOREFERENCIA";
	$fieldToolTipsfinca["Spanish"]["GEOREFERENCIA"] = "";
	$fieldLabelsfinca["Spanish"]["AREA_FINCA"] = "AREA FINCA";
	$fieldToolTipsfinca["Spanish"]["AREA_FINCA"] = "";
	$fieldLabelsfinca["Spanish"]["LINEA_PRINCIPAL"] = "LINEA PRINCIPAL";
	$fieldToolTipsfinca["Spanish"]["LINEA_PRINCIPAL"] = "";
	$fieldLabelsfinca["Spanish"]["AREA__L_P"] = "AREA  LIN. PRINCIPAL";
	$fieldToolTipsfinca["Spanish"]["AREA__L_P"] = "";
	$fieldLabelsfinca["Spanish"]["A_O"] = "AÑO";
	$fieldToolTipsfinca["Spanish"]["A_O"] = "";
	$pageTitlesfinca["Spanish"]["add"] = "Finca, Añadir ";
	if (count($fieldToolTipsfinca["Spanish"]))
		$tdatafinca[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfinca[""] = array();
	$fieldToolTipsfinca[""] = array();
	$pageTitlesfinca[""] = array();
	if (count($fieldToolTipsfinca[""]))
		$tdatafinca[".isUseToolTips"] = true;
}


	$tdatafinca[".NCSearch"] = true;



$tdatafinca[".shortTableName"] = "finca";
$tdatafinca[".nSecOptions"] = 0;
$tdatafinca[".recsPerRowPrint"] = 1;
$tdatafinca[".mainTableOwnerID"] = "";
$tdatafinca[".moveNext"] = 1;
$tdatafinca[".entityType"] = 0;

$tdatafinca[".strOriginalTableName"] = "finca";

	



$tdatafinca[".showAddInPopup"] = false;

$tdatafinca[".showEditInPopup"] = false;

$tdatafinca[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafinca[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafinca[".fieldsForRegister"] = array();

$tdatafinca[".listAjax"] = false;

	$tdatafinca[".audit"] = false;

	$tdatafinca[".locking"] = false;

$tdatafinca[".edit"] = true;
$tdatafinca[".afterEditAction"] = 1;
$tdatafinca[".closePopupAfterEdit"] = 1;
$tdatafinca[".afterEditActionDetTable"] = "";

$tdatafinca[".add"] = true;
$tdatafinca[".afterAddAction"] = 1;
$tdatafinca[".closePopupAfterAdd"] = 1;
$tdatafinca[".afterAddActionDetTable"] = "";

$tdatafinca[".list"] = true;

$tdatafinca[".view"] = true;

$tdatafinca[".import"] = true;

$tdatafinca[".exportTo"] = true;

$tdatafinca[".printFriendly"] = true;

$tdatafinca[".delete"] = true;

$tdatafinca[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatafinca[".searchSaving"] = false;
//

$tdatafinca[".showSearchPanel"] = true;
		$tdatafinca[".flexibleSearch"] = true;

$tdatafinca[".isUseAjaxSuggest"] = true;

$tdatafinca[".rowHighlite"] = true;



$tdatafinca[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafinca[".isUseTimeForSearch"] = false;



$tdatafinca[".badgeColor"] = "D2B48C";

$tdatafinca[".detailsLinksOnList"] = "1";

$tdatafinca[".allSearchFields"] = array();
$tdatafinca[".filterFields"] = array();
$tdatafinca[".requiredSearchFields"] = array();

$tdatafinca[".allSearchFields"][] = "ID";
	$tdatafinca[".allSearchFields"][] = "PROPIETARIO_CEDULA";
	$tdatafinca[".allSearchFields"][] = "NOMBRE";
	$tdatafinca[".allSearchFields"][] = "VEREDA";
	$tdatafinca[".allSearchFields"][] = "FINCA";
	$tdatafinca[".allSearchFields"][] = "ALTURA";
	$tdatafinca[".allSearchFields"][] = "GEOREFERENCIA";
	$tdatafinca[".allSearchFields"][] = "AREA_FINCA";
	$tdatafinca[".allSearchFields"][] = "LINEA_PRINCIPAL";
	$tdatafinca[".allSearchFields"][] = "AREA_ L_P";
	$tdatafinca[".allSearchFields"][] = "AÑO";
	

$tdatafinca[".googleLikeFields"] = array();
$tdatafinca[".googleLikeFields"][] = "ID";
$tdatafinca[".googleLikeFields"][] = "PROPIETARIO_CEDULA";
$tdatafinca[".googleLikeFields"][] = "NOMBRE";
$tdatafinca[".googleLikeFields"][] = "VEREDA";
$tdatafinca[".googleLikeFields"][] = "FINCA";
$tdatafinca[".googleLikeFields"][] = "ALTURA";
$tdatafinca[".googleLikeFields"][] = "GEOREFERENCIA";
$tdatafinca[".googleLikeFields"][] = "AREA_FINCA";
$tdatafinca[".googleLikeFields"][] = "LINEA_PRINCIPAL";
$tdatafinca[".googleLikeFields"][] = "AREA_ L_P";
$tdatafinca[".googleLikeFields"][] = "AÑO";


$tdatafinca[".advSearchFields"] = array();
$tdatafinca[".advSearchFields"][] = "ID";
$tdatafinca[".advSearchFields"][] = "PROPIETARIO_CEDULA";
$tdatafinca[".advSearchFields"][] = "NOMBRE";
$tdatafinca[".advSearchFields"][] = "VEREDA";
$tdatafinca[".advSearchFields"][] = "FINCA";
$tdatafinca[".advSearchFields"][] = "ALTURA";
$tdatafinca[".advSearchFields"][] = "GEOREFERENCIA";
$tdatafinca[".advSearchFields"][] = "AREA_FINCA";
$tdatafinca[".advSearchFields"][] = "LINEA_PRINCIPAL";
$tdatafinca[".advSearchFields"][] = "AREA_ L_P";
$tdatafinca[".advSearchFields"][] = "AÑO";

$tdatafinca[".tableType"] = "list";

$tdatafinca[".printerPageOrientation"] = 0;
$tdatafinca[".nPrinterPageScale"] = 100;

$tdatafinca[".nPrinterSplitRecords"] = 40;

$tdatafinca[".nPrinterPDFSplitRecords"] = 40;



$tdatafinca[".geocodingEnabled"] = false;





$tdatafinca[".listGridLayout"] = 3;





// view page pdf
$tdatafinca[".isViewPagePDF"] = true;
$tdatafinca[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatafinca[".isPrinterPagePDF"] = true;
$tdatafinca[".isLandscapePrinterPagePDFOrientation"] = 1;
$tdatafinca[".nPrinterPagePDFScale"] = 100;


$tdatafinca[".pageSize"] = 20;

$tdatafinca[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafinca[".strOrderBy"] = $tstrOrderBy;

$tdatafinca[".orderindexes"] = array();

$tdatafinca[".sqlHead"] = "SELECT ID,  PROPIETARIO_CEDULA,  NOMBRE,  VEREDA,  FINCA,  ALTURA,  GEOREFERENCIA,  AREA_FINCA,  LINEA_PRINCIPAL,  `AREA_ L_P`,  `AÑO`";
$tdatafinca[".sqlFrom"] = "FROM finca";
$tdatafinca[".sqlWhereExpr"] = "";
$tdatafinca[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafinca[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafinca[".arrGroupsPerPage"] = $arrGPP;

$tdatafinca[".highlightSearchResults"] = true;

$tableKeysfinca = array();
$tableKeysfinca[] = "ID";
$tableKeysfinca[] = "PROPIETARIO_CEDULA";
$tdatafinca[".Keys"] = $tableKeysfinca;

$tdatafinca[".listFields"] = array();
$tdatafinca[".listFields"][] = "ID";
$tdatafinca[".listFields"][] = "PROPIETARIO_CEDULA";
$tdatafinca[".listFields"][] = "NOMBRE";
$tdatafinca[".listFields"][] = "VEREDA";
$tdatafinca[".listFields"][] = "FINCA";
$tdatafinca[".listFields"][] = "ALTURA";
$tdatafinca[".listFields"][] = "GEOREFERENCIA";
$tdatafinca[".listFields"][] = "AREA_FINCA";
$tdatafinca[".listFields"][] = "LINEA_PRINCIPAL";
$tdatafinca[".listFields"][] = "AREA_ L_P";
$tdatafinca[".listFields"][] = "AÑO";

$tdatafinca[".hideMobileList"] = array();


$tdatafinca[".viewFields"] = array();
$tdatafinca[".viewFields"][] = "ID";
$tdatafinca[".viewFields"][] = "PROPIETARIO_CEDULA";
$tdatafinca[".viewFields"][] = "NOMBRE";
$tdatafinca[".viewFields"][] = "VEREDA";
$tdatafinca[".viewFields"][] = "FINCA";
$tdatafinca[".viewFields"][] = "ALTURA";
$tdatafinca[".viewFields"][] = "GEOREFERENCIA";
$tdatafinca[".viewFields"][] = "AREA_FINCA";
$tdatafinca[".viewFields"][] = "LINEA_PRINCIPAL";
$tdatafinca[".viewFields"][] = "AREA_ L_P";
$tdatafinca[".viewFields"][] = "AÑO";

$tdatafinca[".addFields"] = array();
$tdatafinca[".addFields"][] = "PROPIETARIO_CEDULA";
$tdatafinca[".addFields"][] = "NOMBRE";
$tdatafinca[".addFields"][] = "VEREDA";
$tdatafinca[".addFields"][] = "FINCA";
$tdatafinca[".addFields"][] = "ALTURA";
$tdatafinca[".addFields"][] = "GEOREFERENCIA";
$tdatafinca[".addFields"][] = "AREA_FINCA";
$tdatafinca[".addFields"][] = "LINEA_PRINCIPAL";
$tdatafinca[".addFields"][] = "AREA_ L_P";
$tdatafinca[".addFields"][] = "AÑO";

$tdatafinca[".masterListFields"] = array();
$tdatafinca[".masterListFields"][] = "ID";
$tdatafinca[".masterListFields"][] = "PROPIETARIO_CEDULA";
$tdatafinca[".masterListFields"][] = "NOMBRE";
$tdatafinca[".masterListFields"][] = "VEREDA";
$tdatafinca[".masterListFields"][] = "FINCA";
$tdatafinca[".masterListFields"][] = "ALTURA";
$tdatafinca[".masterListFields"][] = "GEOREFERENCIA";
$tdatafinca[".masterListFields"][] = "AREA_FINCA";
$tdatafinca[".masterListFields"][] = "LINEA_PRINCIPAL";
$tdatafinca[".masterListFields"][] = "AREA_ L_P";
$tdatafinca[".masterListFields"][] = "AÑO";

$tdatafinca[".inlineAddFields"] = array();

$tdatafinca[".editFields"] = array();
$tdatafinca[".editFields"][] = "PROPIETARIO_CEDULA";
$tdatafinca[".editFields"][] = "NOMBRE";
$tdatafinca[".editFields"][] = "VEREDA";
$tdatafinca[".editFields"][] = "FINCA";
$tdatafinca[".editFields"][] = "ALTURA";
$tdatafinca[".editFields"][] = "GEOREFERENCIA";
$tdatafinca[".editFields"][] = "AREA_FINCA";
$tdatafinca[".editFields"][] = "LINEA_PRINCIPAL";
$tdatafinca[".editFields"][] = "AREA_ L_P";
$tdatafinca[".editFields"][] = "AÑO";

$tdatafinca[".inlineEditFields"] = array();

$tdatafinca[".exportFields"] = array();
$tdatafinca[".exportFields"][] = "ID";
$tdatafinca[".exportFields"][] = "PROPIETARIO_CEDULA";
$tdatafinca[".exportFields"][] = "NOMBRE";
$tdatafinca[".exportFields"][] = "VEREDA";
$tdatafinca[".exportFields"][] = "FINCA";
$tdatafinca[".exportFields"][] = "ALTURA";
$tdatafinca[".exportFields"][] = "GEOREFERENCIA";
$tdatafinca[".exportFields"][] = "AREA_FINCA";
$tdatafinca[".exportFields"][] = "LINEA_PRINCIPAL";
$tdatafinca[".exportFields"][] = "AREA_ L_P";
$tdatafinca[".exportFields"][] = "AÑO";

$tdatafinca[".importFields"] = array();
$tdatafinca[".importFields"][] = "ID";
$tdatafinca[".importFields"][] = "PROPIETARIO_CEDULA";
$tdatafinca[".importFields"][] = "NOMBRE";
$tdatafinca[".importFields"][] = "VEREDA";
$tdatafinca[".importFields"][] = "FINCA";
$tdatafinca[".importFields"][] = "ALTURA";
$tdatafinca[".importFields"][] = "GEOREFERENCIA";
$tdatafinca[".importFields"][] = "AREA_FINCA";
$tdatafinca[".importFields"][] = "LINEA_PRINCIPAL";
$tdatafinca[".importFields"][] = "AREA_ L_P";
$tdatafinca[".importFields"][] = "AÑO";

$tdatafinca[".printFields"] = array();
$tdatafinca[".printFields"][] = "ID";
$tdatafinca[".printFields"][] = "PROPIETARIO_CEDULA";
$tdatafinca[".printFields"][] = "NOMBRE";
$tdatafinca[".printFields"][] = "VEREDA";
$tdatafinca[".printFields"][] = "FINCA";
$tdatafinca[".printFields"][] = "ALTURA";
$tdatafinca[".printFields"][] = "GEOREFERENCIA";
$tdatafinca[".printFields"][] = "AREA_FINCA";
$tdatafinca[".printFields"][] = "LINEA_PRINCIPAL";
$tdatafinca[".printFields"][] = "AREA_ L_P";
$tdatafinca[".printFields"][] = "AÑO";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "finca";
	$fdata["Label"] = GetFieldLabel("finca","ID");
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




	$tdatafinca["ID"] = $fdata;
//	PROPIETARIO_CEDULA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PROPIETARIO_CEDULA";
	$fdata["GoodName"] = "PROPIETARIO_CEDULA";
	$fdata["ownerTable"] = "finca";
	$fdata["Label"] = GetFieldLabel("finca","PROPIETARIO_CEDULA");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PROPIETARIO_CEDULA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PROPIETARIO_CEDULA";

	
	
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
	$edata["LookupTable"] = "propietario";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"NOMBRE", 'lookupF'=>"NOMBRE");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "CEDULA";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "CEDULA";

	
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




	$tdatafinca["PROPIETARIO_CEDULA"] = $fdata;
//	NOMBRE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "NOMBRE";
	$fdata["GoodName"] = "NOMBRE";
	$fdata["ownerTable"] = "finca";
	$fdata["Label"] = GetFieldLabel("finca","NOMBRE");
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
	$edata["LookupTable"] = "propietario";
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




	$tdatafinca["NOMBRE"] = $fdata;
//	VEREDA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "VEREDA";
	$fdata["GoodName"] = "VEREDA";
	$fdata["ownerTable"] = "finca";
	$fdata["Label"] = GetFieldLabel("finca","VEREDA");
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
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "LA ANTIGUA";
	$edata["LookupValues"][] = "LA AURORA";
	$edata["LookupValues"][] = "LA DESPENSA";
	$edata["LookupValues"][] = "RICAURTE";
	$edata["LookupValues"][] = "SAN ANTONIO";
	$edata["LookupValues"][] = "SAN CAYETANO";
	$edata["LookupValues"][] = "SAN EMIGDIO";
	$edata["LookupValues"][] = "SAN ISIDRO";
	$edata["LookupValues"][] = "SAN RAFAEL";
	$edata["LookupValues"][] = "SAN IGNACIO";
	$edata["LookupValues"][] = "SANTA ANA";
	$edata["LookupValues"][] = "SANTA BARBARA";

	
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




	$tdatafinca["VEREDA"] = $fdata;
//	FINCA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "FINCA";
	$fdata["GoodName"] = "FINCA";
	$fdata["ownerTable"] = "finca";
	$fdata["Label"] = GetFieldLabel("finca","FINCA");
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




	$tdatafinca["FINCA"] = $fdata;
//	ALTURA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ALTURA";
	$fdata["GoodName"] = "ALTURA";
	$fdata["ownerTable"] = "finca";
	$fdata["Label"] = GetFieldLabel("finca","ALTURA");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ALTURA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ALTURA";

	
	
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




	$tdatafinca["ALTURA"] = $fdata;
//	GEOREFERENCIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "GEOREFERENCIA";
	$fdata["GoodName"] = "GEOREFERENCIA";
	$fdata["ownerTable"] = "finca";
	$fdata["Label"] = GetFieldLabel("finca","GEOREFERENCIA");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "GEOREFERENCIA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GEOREFERENCIA";

	
	
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




	$tdatafinca["GEOREFERENCIA"] = $fdata;
//	AREA_FINCA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "AREA_FINCA";
	$fdata["GoodName"] = "AREA_FINCA";
	$fdata["ownerTable"] = "finca";
	$fdata["Label"] = GetFieldLabel("finca","AREA_FINCA");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AREA_FINCA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AREA_FINCA";

	
	
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




	$tdatafinca["AREA_FINCA"] = $fdata;
//	LINEA_PRINCIPAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "LINEA_PRINCIPAL";
	$fdata["GoodName"] = "LINEA_PRINCIPAL";
	$fdata["ownerTable"] = "finca";
	$fdata["Label"] = GetFieldLabel("finca","LINEA_PRINCIPAL");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LINEA_PRINCIPAL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LINEA_PRINCIPAL";

	
	
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
	$edata["LookupValues"][] = "CAÑA";
	$edata["LookupValues"][] = "CAFE";
	$edata["LookupValues"][] = "HORTIFRUTICOLA";
	$edata["LookupValues"][] = "AGRICOLA";
	$edata["LookupValues"][] = "PECUARIO";
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




	$tdatafinca["LINEA_PRINCIPAL"] = $fdata;
//	AREA_ L_P
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "AREA_ L_P";
	$fdata["GoodName"] = "AREA__L_P";
	$fdata["ownerTable"] = "finca";
	$fdata["Label"] = GetFieldLabel("finca","AREA__L_P");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AREA_ L_P";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`AREA_ L_P`";

	
	
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




	$tdatafinca["AREA_ L_P"] = $fdata;
//	AÑO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "AÑO";
	$fdata["GoodName"] = "A_O";
	$fdata["ownerTable"] = "finca";
	$fdata["Label"] = GetFieldLabel("finca","A_O");
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




	$tdatafinca["AÑO"] = $fdata;


$tables_data["finca"]=&$tdatafinca;
$field_labels["finca"] = &$fieldLabelsfinca;
$fieldToolTips["finca"] = &$fieldToolTipsfinca;
$page_titles["finca"] = &$pageTitlesfinca;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["finca"] = array();
//	agricola
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="agricola";
		$detailsParam["dOriginalTable"] = "agricola";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "agricola";
	$detailsParam["dCaptionTable"] = GetTableCaption("agricola");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = "1";
*/
	$detailsParam["dispChildCount"] = "1";
	
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["finca"][$dIndex] = $detailsParam;

	
		$detailsTablesData["finca"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["finca"][$dIndex]["masterKeys"][]="PROPIETARIO_CEDULA";

				$detailsTablesData["finca"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["finca"][$dIndex]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
//	hortifruticola
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="hortifruticola";
		$detailsParam["dOriginalTable"] = "hortifruticola";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "hortifruticola";
	$detailsParam["dCaptionTable"] = GetTableCaption("hortifruticola");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = "1";
*/
	$detailsParam["dispChildCount"] = "1";
	
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["finca"][$dIndex] = $detailsParam;

	
		$detailsTablesData["finca"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["finca"][$dIndex]["masterKeys"][]="PROPIETARIO_CEDULA";

				$detailsTablesData["finca"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["finca"][$dIndex]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
//	inversion
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="inversion";
		$detailsParam["dOriginalTable"] = "inversion";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "inversion";
	$detailsParam["dCaptionTable"] = GetTableCaption("inversion");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = "1";
*/
	$detailsParam["dispChildCount"] = "1";
	
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["finca"][$dIndex] = $detailsParam;

	
		$detailsTablesData["finca"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["finca"][$dIndex]["masterKeys"][]="PROPIETARIO_CEDULA";

				$detailsTablesData["finca"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["finca"][$dIndex]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
//	legal
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="legal";
		$detailsParam["dOriginalTable"] = "legal";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "legal";
	$detailsParam["dCaptionTable"] = GetTableCaption("legal");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = "1";
*/
	$detailsParam["dispChildCount"] = "1";
	
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["finca"][$dIndex] = $detailsParam;

	
		$detailsTablesData["finca"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["finca"][$dIndex]["masterKeys"][]="PROPIETARIO_CEDULA";

				$detailsTablesData["finca"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["finca"][$dIndex]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
//	lineas_agrarias
	
	

		$dIndex = 4;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="lineas_agrarias";
		$detailsParam["dOriginalTable"] = "lineas_agrarias";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lineas_agrarias";
	$detailsParam["dCaptionTable"] = GetTableCaption("lineas_agrarias");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = "1";
*/
	$detailsParam["dispChildCount"] = "1";
	
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["finca"][$dIndex] = $detailsParam;

	
		$detailsTablesData["finca"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["finca"][$dIndex]["masterKeys"][]="PROPIETARIO_CEDULA";

				$detailsTablesData["finca"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["finca"][$dIndex]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
//	pecuario
	
	

		$dIndex = 5;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="pecuario";
		$detailsParam["dOriginalTable"] = "pecuario";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "pecuario";
	$detailsParam["dCaptionTable"] = GetTableCaption("pecuario");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = "1";
*/
	$detailsParam["dispChildCount"] = "1";
	
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["finca"][$dIndex] = $detailsParam;

	
		$detailsTablesData["finca"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["finca"][$dIndex]["masterKeys"][]="PROPIETARIO_CEDULA";

				$detailsTablesData["finca"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["finca"][$dIndex]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
//	REPORTE AGRICOLA
	
	

		$dIndex = 6;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="REPORTE AGRICOLA";
		$detailsParam["dOriginalTable"] = "agricola";
		$detailsParam["proceedLink"] = true;
		$detailsParam["dType"]=PAGE_REPORT;
			$detailsParam["dShortTable"] = "REPORTE_AGRICOLA";
	$detailsParam["dCaptionTable"] = GetTableCaption("REPORTE_AGRICOLA");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = "0";
*/
	$detailsParam["dispChildCount"] = "0";
	
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["finca"][$dIndex] = $detailsParam;

	
		$detailsTablesData["finca"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["finca"][$dIndex]["masterKeys"][]="PROPIETARIO_CEDULA";

				$detailsTablesData["finca"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["finca"][$dIndex]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
//	REPORTE PECUARIO
	
	

		$dIndex = 7;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="REPORTE PECUARIO";
		$detailsParam["dOriginalTable"] = "pecuario";
		$detailsParam["proceedLink"] = true;
		$detailsParam["dType"]=PAGE_REPORT;
			$detailsParam["dShortTable"] = "REPORTE_PECUARIO";
	$detailsParam["dCaptionTable"] = GetTableCaption("REPORTE_PECUARIO");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = "0";
*/
	$detailsParam["dispChildCount"] = "0";
	
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["finca"][$dIndex] = $detailsParam;

	
		$detailsTablesData["finca"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["finca"][$dIndex]["masterKeys"][]="PROPIETARIO_CEDULA";

				$detailsTablesData["finca"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["finca"][$dIndex]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
//	REPORTE HORTIFRUTICOLA
	
	

		$dIndex = 8;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="REPORTE HORTIFRUTICOLA";
		$detailsParam["dOriginalTable"] = "hortifruticola";
		$detailsParam["proceedLink"] = true;
		$detailsParam["dType"]=PAGE_REPORT;
			$detailsParam["dShortTable"] = "REPORTE_HORTIFRUTICOLA";
	$detailsParam["dCaptionTable"] = GetTableCaption("REPORTE_HORTIFRUTICOLA");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = "0";
*/
	$detailsParam["dispChildCount"] = "0";
	
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["finca"][$dIndex] = $detailsParam;

	
		$detailsTablesData["finca"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["finca"][$dIndex]["masterKeys"][]="PROPIETARIO_CEDULA";

				$detailsTablesData["finca"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["finca"][$dIndex]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
//	REPORTE INVERSION
	
	

		$dIndex = 9;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="REPORTE INVERSION";
		$detailsParam["dOriginalTable"] = "inversion";
		$detailsParam["proceedLink"] = true;
		$detailsParam["dType"]=PAGE_REPORT;
			$detailsParam["dShortTable"] = "REPORTE_INVERSION";
	$detailsParam["dCaptionTable"] = GetTableCaption("REPORTE_INVERSION");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = "0";
*/
	$detailsParam["dispChildCount"] = "0";
	
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["finca"][$dIndex] = $detailsParam;

	
		$detailsTablesData["finca"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["finca"][$dIndex]["masterKeys"][]="PROPIETARIO_CEDULA";

				$detailsTablesData["finca"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["finca"][$dIndex]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
//	REPORTE LEGAL
	
	

		$dIndex = 10;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="REPORTE LEGAL";
		$detailsParam["dOriginalTable"] = "legal";
		$detailsParam["proceedLink"] = true;
		$detailsParam["dType"]=PAGE_REPORT;
			$detailsParam["dShortTable"] = "REPORTE_LEGAL";
	$detailsParam["dCaptionTable"] = GetTableCaption("REPORTE_LEGAL");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = "0";
*/
	$detailsParam["dispChildCount"] = "0";
	
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["finca"][$dIndex] = $detailsParam;

	
		$detailsTablesData["finca"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["finca"][$dIndex]["masterKeys"][]="PROPIETARIO_CEDULA";

				$detailsTablesData["finca"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["finca"][$dIndex]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
//	REPORTE LINEAS
	
	

		$dIndex = 11;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="REPORTE LINEAS";
		$detailsParam["dOriginalTable"] = "lineas_agrarias";
		$detailsParam["proceedLink"] = true;
		$detailsParam["dType"]=PAGE_REPORT;
			$detailsParam["dShortTable"] = "REPORTE_LINEAS";
	$detailsParam["dCaptionTable"] = GetTableCaption("REPORTE_LINEAS");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = "0";
*/
	$detailsParam["dispChildCount"] = "0";
	
		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["finca"][$dIndex] = $detailsParam;

	
		$detailsTablesData["finca"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["finca"][$dIndex]["masterKeys"][]="PROPIETARIO_CEDULA";

				$detailsTablesData["finca"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["finca"][$dIndex]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";

// tables which are master tables for current table (detail)
$masterTablesData["finca"] = array();


	
				$strOriginalDetailsTable="propietario";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="propietario";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "propietario";
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
					$masterTablesData["finca"][0] = $masterParams;
				$masterTablesData["finca"][0]["masterKeys"] = array();
	$masterTablesData["finca"][0]["masterKeys"][]="CEDULA";
				$masterTablesData["finca"][0]["detailKeys"] = array();
	$masterTablesData["finca"][0]["detailKeys"][]="PROPIETARIO_CEDULA";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_finca()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  PROPIETARIO_CEDULA,  NOMBRE,  VEREDA,  FINCA,  ALTURA,  GEOREFERENCIA,  AREA_FINCA,  LINEA_PRINCIPAL,  `AREA_ L_P`,  `AÑO`";
$proto0["m_strFrom"] = "FROM finca";
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
	"m_strTable" => "finca",
	"m_srcTableName" => "finca"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "finca";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PROPIETARIO_CEDULA",
	"m_strTable" => "finca",
	"m_srcTableName" => "finca"
));

$proto8["m_sql"] = "PROPIETARIO_CEDULA";
$proto8["m_srcTableName"] = "finca";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBRE",
	"m_strTable" => "finca",
	"m_srcTableName" => "finca"
));

$proto10["m_sql"] = "NOMBRE";
$proto10["m_srcTableName"] = "finca";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "VEREDA",
	"m_strTable" => "finca",
	"m_srcTableName" => "finca"
));

$proto12["m_sql"] = "VEREDA";
$proto12["m_srcTableName"] = "finca";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "FINCA",
	"m_strTable" => "finca",
	"m_srcTableName" => "finca"
));

$proto14["m_sql"] = "FINCA";
$proto14["m_srcTableName"] = "finca";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ALTURA",
	"m_strTable" => "finca",
	"m_srcTableName" => "finca"
));

$proto16["m_sql"] = "ALTURA";
$proto16["m_srcTableName"] = "finca";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "GEOREFERENCIA",
	"m_strTable" => "finca",
	"m_srcTableName" => "finca"
));

$proto18["m_sql"] = "GEOREFERENCIA";
$proto18["m_srcTableName"] = "finca";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "AREA_FINCA",
	"m_strTable" => "finca",
	"m_srcTableName" => "finca"
));

$proto20["m_sql"] = "AREA_FINCA";
$proto20["m_srcTableName"] = "finca";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "LINEA_PRINCIPAL",
	"m_strTable" => "finca",
	"m_srcTableName" => "finca"
));

$proto22["m_sql"] = "LINEA_PRINCIPAL";
$proto22["m_srcTableName"] = "finca";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "AREA_ L_P",
	"m_strTable" => "finca",
	"m_srcTableName" => "finca"
));

$proto24["m_sql"] = "`AREA_ L_P`";
$proto24["m_srcTableName"] = "finca";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "finca",
	"m_srcTableName" => "finca"
));

$proto26["m_sql"] = "`AÑO`";
$proto26["m_srcTableName"] = "finca";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "finca";
$proto29["m_srcTableName"] = "finca";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "ID";
$proto29["m_columns"][] = "PROPIETARIO_CEDULA";
$proto29["m_columns"][] = "NOMBRE";
$proto29["m_columns"][] = "VEREDA";
$proto29["m_columns"][] = "FINCA";
$proto29["m_columns"][] = "ALTURA";
$proto29["m_columns"][] = "GEOREFERENCIA";
$proto29["m_columns"][] = "AREA_FINCA";
$proto29["m_columns"][] = "LINEA_PRINCIPAL";
$proto29["m_columns"][] = "AREA_ L_P";
$proto29["m_columns"][] = "AÑO";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "finca";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "finca";
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
	"m_strTable" => "finca",
	"m_srcTableName" => "finca"
));

$proto32["m_column"]=$obj;
$obj = new SQLGroupByItem($proto32);

$proto0["m_groupby"][]=$obj;
												$proto34=array();
						$obj = new SQLField(array(
	"m_strName" => "PROPIETARIO_CEDULA",
	"m_strTable" => "finca",
	"m_srcTableName" => "finca"
));

$proto34["m_column"]=$obj;
$obj = new SQLGroupByItem($proto34);

$proto0["m_groupby"][]=$obj;
												$proto36=array();
						$obj = new SQLField(array(
	"m_strName" => "NOMBRE",
	"m_strTable" => "finca",
	"m_srcTableName" => "finca"
));

$proto36["m_column"]=$obj;
$obj = new SQLGroupByItem($proto36);

$proto0["m_groupby"][]=$obj;
												$proto38=array();
						$obj = new SQLField(array(
	"m_strName" => "VEREDA",
	"m_strTable" => "finca",
	"m_srcTableName" => "finca"
));

$proto38["m_column"]=$obj;
$obj = new SQLGroupByItem($proto38);

$proto0["m_groupby"][]=$obj;
												$proto40=array();
						$obj = new SQLField(array(
	"m_strName" => "FINCA",
	"m_strTable" => "finca",
	"m_srcTableName" => "finca"
));

$proto40["m_column"]=$obj;
$obj = new SQLGroupByItem($proto40);

$proto0["m_groupby"][]=$obj;
												$proto42=array();
						$obj = new SQLField(array(
	"m_strName" => "ALTURA",
	"m_strTable" => "finca",
	"m_srcTableName" => "finca"
));

$proto42["m_column"]=$obj;
$obj = new SQLGroupByItem($proto42);

$proto0["m_groupby"][]=$obj;
												$proto44=array();
						$obj = new SQLField(array(
	"m_strName" => "GEOREFERENCIA",
	"m_strTable" => "finca",
	"m_srcTableName" => "finca"
));

$proto44["m_column"]=$obj;
$obj = new SQLGroupByItem($proto44);

$proto0["m_groupby"][]=$obj;
												$proto46=array();
						$obj = new SQLField(array(
	"m_strName" => "AREA_FINCA",
	"m_strTable" => "finca",
	"m_srcTableName" => "finca"
));

$proto46["m_column"]=$obj;
$obj = new SQLGroupByItem($proto46);

$proto0["m_groupby"][]=$obj;
												$proto48=array();
						$obj = new SQLField(array(
	"m_strName" => "LINEA_PRINCIPAL",
	"m_strTable" => "finca",
	"m_srcTableName" => "finca"
));

$proto48["m_column"]=$obj;
$obj = new SQLGroupByItem($proto48);

$proto0["m_groupby"][]=$obj;
												$proto50=array();
						$obj = new SQLField(array(
	"m_strName" => "AREA_ L_P",
	"m_strTable" => "finca",
	"m_srcTableName" => "finca"
));

$proto50["m_column"]=$obj;
$obj = new SQLGroupByItem($proto50);

$proto0["m_groupby"][]=$obj;
												$proto52=array();
						$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "finca",
	"m_srcTableName" => "finca"
));

$proto52["m_column"]=$obj;
$obj = new SQLGroupByItem($proto52);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="finca";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_finca = createSqlQuery_finca();


	
		;

											

$tdatafinca[".sqlquery"] = $queryData_finca;

$tableEvents["finca"] = new eventsBase;
$tdatafinca[".hasEvents"] = false;

?>