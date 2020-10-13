<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapropietario = array();
	$tdatapropietario[".truncateText"] = true;
	$tdatapropietario[".NumberOfChars"] = 80;
	$tdatapropietario[".ShortName"] = "propietario";
	$tdatapropietario[".OwnerID"] = "";
	$tdatapropietario[".OriginalTable"] = "propietario";

//	field labels
$fieldLabelspropietario = array();
$fieldToolTipspropietario = array();
$pageTitlespropietario = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspropietario["Spanish"] = array();
	$fieldToolTipspropietario["Spanish"] = array();
	$pageTitlespropietario["Spanish"] = array();
	$fieldLabelspropietario["Spanish"]["CEDULA"] = "CEDULA";
	$fieldToolTipspropietario["Spanish"]["CEDULA"] = "";
	$fieldLabelspropietario["Spanish"]["NOMBRE"] = "NOMBRE";
	$fieldToolTipspropietario["Spanish"]["NOMBRE"] = "";
	$fieldLabelspropietario["Spanish"]["TELEFONO"] = "TELEFONO";
	$fieldToolTipspropietario["Spanish"]["TELEFONO"] = "";
	$fieldLabelspropietario["Spanish"]["F_NACIMIENTO"] = "F NACIMIENTO";
	$fieldToolTipspropietario["Spanish"]["F_NACIMIENTO"] = "";
	$fieldLabelspropietario["Spanish"]["E_CIVIL"] = "E CIVIL";
	$fieldToolTipspropietario["Spanish"]["E_CIVIL"] = "";
	$fieldLabelspropietario["Spanish"]["PARIENTE"] = "PARENTESCO";
	$fieldToolTipspropietario["Spanish"]["PARIENTE"] = "";
	$fieldLabelspropietario["Spanish"]["NOMBRE_PARIENTE"] = "NOMBRE DE CONTACTO";
	$fieldToolTipspropietario["Spanish"]["NOMBRE_PARIENTE"] = "";
	$fieldLabelspropietario["Spanish"]["IDENTIFICACION"] = "IDENTIFICACION";
	$fieldToolTipspropietario["Spanish"]["IDENTIFICACION"] = "";
	$fieldLabelspropietario["Spanish"]["TEL_PARIENTE"] = "TEL PARIENTE";
	$fieldToolTipspropietario["Spanish"]["TEL_PARIENTE"] = "";
	if (count($fieldToolTipspropietario["Spanish"]))
		$tdatapropietario[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspropietario[""] = array();
	$fieldToolTipspropietario[""] = array();
	$pageTitlespropietario[""] = array();
	if (count($fieldToolTipspropietario[""]))
		$tdatapropietario[".isUseToolTips"] = true;
}


	$tdatapropietario[".NCSearch"] = true;



$tdatapropietario[".shortTableName"] = "propietario";
$tdatapropietario[".nSecOptions"] = 0;
$tdatapropietario[".recsPerRowPrint"] = 1;
$tdatapropietario[".mainTableOwnerID"] = "";
$tdatapropietario[".moveNext"] = 1;
$tdatapropietario[".entityType"] = 0;

$tdatapropietario[".strOriginalTableName"] = "propietario";

	



$tdatapropietario[".showAddInPopup"] = false;

$tdatapropietario[".showEditInPopup"] = false;

$tdatapropietario[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapropietario[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapropietario[".fieldsForRegister"] = array();

$tdatapropietario[".listAjax"] = false;

	$tdatapropietario[".audit"] = false;

	$tdatapropietario[".locking"] = false;

$tdatapropietario[".edit"] = true;
$tdatapropietario[".afterEditAction"] = 1;
$tdatapropietario[".closePopupAfterEdit"] = 1;
$tdatapropietario[".afterEditActionDetTable"] = "";

$tdatapropietario[".add"] = true;
$tdatapropietario[".afterAddAction"] = 1;
$tdatapropietario[".closePopupAfterAdd"] = 1;
$tdatapropietario[".afterAddActionDetTable"] = "";

$tdatapropietario[".list"] = true;

$tdatapropietario[".view"] = true;

$tdatapropietario[".import"] = true;

$tdatapropietario[".exportTo"] = true;

$tdatapropietario[".printFriendly"] = true;

$tdatapropietario[".delete"] = true;

$tdatapropietario[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatapropietario[".searchSaving"] = false;
//

$tdatapropietario[".showSearchPanel"] = true;
		$tdatapropietario[".flexibleSearch"] = true;

$tdatapropietario[".isUseAjaxSuggest"] = true;

$tdatapropietario[".rowHighlite"] = true;



$tdatapropietario[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapropietario[".isUseTimeForSearch"] = false;




$tdatapropietario[".detailsLinksOnList"] = "1";

$tdatapropietario[".allSearchFields"] = array();
$tdatapropietario[".filterFields"] = array();
$tdatapropietario[".requiredSearchFields"] = array();

$tdatapropietario[".allSearchFields"][] = "CEDULA";
	$tdatapropietario[".allSearchFields"][] = "NOMBRE";
	$tdatapropietario[".allSearchFields"][] = "TELEFONO";
	$tdatapropietario[".allSearchFields"][] = "F_NACIMIENTO";
	$tdatapropietario[".allSearchFields"][] = "E_CIVIL";
	$tdatapropietario[".allSearchFields"][] = "PARIENTE";
	$tdatapropietario[".allSearchFields"][] = "NOMBRE_PARIENTE";
	$tdatapropietario[".allSearchFields"][] = "IDENTIFICACION";
	$tdatapropietario[".allSearchFields"][] = "TEL_PARIENTE";
	

$tdatapropietario[".googleLikeFields"] = array();
$tdatapropietario[".googleLikeFields"][] = "CEDULA";
$tdatapropietario[".googleLikeFields"][] = "NOMBRE";
$tdatapropietario[".googleLikeFields"][] = "TELEFONO";
$tdatapropietario[".googleLikeFields"][] = "F_NACIMIENTO";
$tdatapropietario[".googleLikeFields"][] = "E_CIVIL";
$tdatapropietario[".googleLikeFields"][] = "PARIENTE";
$tdatapropietario[".googleLikeFields"][] = "NOMBRE_PARIENTE";
$tdatapropietario[".googleLikeFields"][] = "IDENTIFICACION";
$tdatapropietario[".googleLikeFields"][] = "TEL_PARIENTE";


$tdatapropietario[".advSearchFields"] = array();
$tdatapropietario[".advSearchFields"][] = "CEDULA";
$tdatapropietario[".advSearchFields"][] = "NOMBRE";
$tdatapropietario[".advSearchFields"][] = "TELEFONO";
$tdatapropietario[".advSearchFields"][] = "F_NACIMIENTO";
$tdatapropietario[".advSearchFields"][] = "E_CIVIL";
$tdatapropietario[".advSearchFields"][] = "PARIENTE";
$tdatapropietario[".advSearchFields"][] = "NOMBRE_PARIENTE";
$tdatapropietario[".advSearchFields"][] = "IDENTIFICACION";
$tdatapropietario[".advSearchFields"][] = "TEL_PARIENTE";

$tdatapropietario[".tableType"] = "list";

$tdatapropietario[".printerPageOrientation"] = 0;
$tdatapropietario[".nPrinterPageScale"] = 100;

$tdatapropietario[".nPrinterSplitRecords"] = 40;

$tdatapropietario[".nPrinterPDFSplitRecords"] = 40;



$tdatapropietario[".geocodingEnabled"] = false;





$tdatapropietario[".listGridLayout"] = 3;





// view page pdf
$tdatapropietario[".isViewPagePDF"] = true;
$tdatapropietario[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatapropietario[".isPrinterPagePDF"] = true;
$tdatapropietario[".isLandscapePrinterPagePDFOrientation"] = 1;
$tdatapropietario[".nPrinterPagePDFScale"] = 100;


$tdatapropietario[".pageSize"] = 20;

$tdatapropietario[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapropietario[".strOrderBy"] = $tstrOrderBy;

$tdatapropietario[".orderindexes"] = array();

$tdatapropietario[".sqlHead"] = "SELECT CEDULA,  NOMBRE,  TELEFONO,  F_NACIMIENTO,  E_CIVIL,  PARIENTE,  NOMBRE_PARIENTE,  IDENTIFICACION,  TEL_PARIENTE";
$tdatapropietario[".sqlFrom"] = "FROM propietario";
$tdatapropietario[".sqlWhereExpr"] = "";
$tdatapropietario[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapropietario[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapropietario[".arrGroupsPerPage"] = $arrGPP;

$tdatapropietario[".highlightSearchResults"] = true;

$tableKeyspropietario = array();
$tableKeyspropietario[] = "CEDULA";
$tdatapropietario[".Keys"] = $tableKeyspropietario;

$tdatapropietario[".listFields"] = array();
$tdatapropietario[".listFields"][] = "CEDULA";
$tdatapropietario[".listFields"][] = "NOMBRE";
$tdatapropietario[".listFields"][] = "TELEFONO";
$tdatapropietario[".listFields"][] = "F_NACIMIENTO";
$tdatapropietario[".listFields"][] = "E_CIVIL";
$tdatapropietario[".listFields"][] = "NOMBRE_PARIENTE";
$tdatapropietario[".listFields"][] = "PARIENTE";
$tdatapropietario[".listFields"][] = "IDENTIFICACION";
$tdatapropietario[".listFields"][] = "TEL_PARIENTE";

$tdatapropietario[".hideMobileList"] = array();


$tdatapropietario[".viewFields"] = array();
$tdatapropietario[".viewFields"][] = "CEDULA";
$tdatapropietario[".viewFields"][] = "NOMBRE";
$tdatapropietario[".viewFields"][] = "TELEFONO";
$tdatapropietario[".viewFields"][] = "F_NACIMIENTO";
$tdatapropietario[".viewFields"][] = "E_CIVIL";
$tdatapropietario[".viewFields"][] = "PARIENTE";
$tdatapropietario[".viewFields"][] = "NOMBRE_PARIENTE";
$tdatapropietario[".viewFields"][] = "IDENTIFICACION";
$tdatapropietario[".viewFields"][] = "TEL_PARIENTE";

$tdatapropietario[".addFields"] = array();
$tdatapropietario[".addFields"][] = "CEDULA";
$tdatapropietario[".addFields"][] = "NOMBRE";
$tdatapropietario[".addFields"][] = "TELEFONO";
$tdatapropietario[".addFields"][] = "F_NACIMIENTO";
$tdatapropietario[".addFields"][] = "E_CIVIL";
$tdatapropietario[".addFields"][] = "PARIENTE";
$tdatapropietario[".addFields"][] = "NOMBRE_PARIENTE";
$tdatapropietario[".addFields"][] = "IDENTIFICACION";
$tdatapropietario[".addFields"][] = "TEL_PARIENTE";

$tdatapropietario[".masterListFields"] = array();
$tdatapropietario[".masterListFields"][] = "CEDULA";
$tdatapropietario[".masterListFields"][] = "NOMBRE";
$tdatapropietario[".masterListFields"][] = "TELEFONO";
$tdatapropietario[".masterListFields"][] = "F_NACIMIENTO";
$tdatapropietario[".masterListFields"][] = "E_CIVIL";
$tdatapropietario[".masterListFields"][] = "PARIENTE";
$tdatapropietario[".masterListFields"][] = "NOMBRE_PARIENTE";
$tdatapropietario[".masterListFields"][] = "IDENTIFICACION";
$tdatapropietario[".masterListFields"][] = "TEL_PARIENTE";

$tdatapropietario[".inlineAddFields"] = array();

$tdatapropietario[".editFields"] = array();
$tdatapropietario[".editFields"][] = "CEDULA";
$tdatapropietario[".editFields"][] = "NOMBRE";
$tdatapropietario[".editFields"][] = "TELEFONO";
$tdatapropietario[".editFields"][] = "F_NACIMIENTO";
$tdatapropietario[".editFields"][] = "E_CIVIL";
$tdatapropietario[".editFields"][] = "PARIENTE";
$tdatapropietario[".editFields"][] = "NOMBRE_PARIENTE";
$tdatapropietario[".editFields"][] = "IDENTIFICACION";
$tdatapropietario[".editFields"][] = "TEL_PARIENTE";

$tdatapropietario[".inlineEditFields"] = array();

$tdatapropietario[".exportFields"] = array();
$tdatapropietario[".exportFields"][] = "CEDULA";
$tdatapropietario[".exportFields"][] = "NOMBRE";
$tdatapropietario[".exportFields"][] = "TELEFONO";
$tdatapropietario[".exportFields"][] = "F_NACIMIENTO";
$tdatapropietario[".exportFields"][] = "E_CIVIL";
$tdatapropietario[".exportFields"][] = "PARIENTE";
$tdatapropietario[".exportFields"][] = "NOMBRE_PARIENTE";
$tdatapropietario[".exportFields"][] = "IDENTIFICACION";
$tdatapropietario[".exportFields"][] = "TEL_PARIENTE";

$tdatapropietario[".importFields"] = array();
$tdatapropietario[".importFields"][] = "CEDULA";
$tdatapropietario[".importFields"][] = "NOMBRE";
$tdatapropietario[".importFields"][] = "TELEFONO";
$tdatapropietario[".importFields"][] = "F_NACIMIENTO";
$tdatapropietario[".importFields"][] = "E_CIVIL";
$tdatapropietario[".importFields"][] = "PARIENTE";
$tdatapropietario[".importFields"][] = "NOMBRE_PARIENTE";
$tdatapropietario[".importFields"][] = "IDENTIFICACION";
$tdatapropietario[".importFields"][] = "TEL_PARIENTE";

$tdatapropietario[".printFields"] = array();
$tdatapropietario[".printFields"][] = "CEDULA";
$tdatapropietario[".printFields"][] = "NOMBRE";
$tdatapropietario[".printFields"][] = "TELEFONO";
$tdatapropietario[".printFields"][] = "F_NACIMIENTO";
$tdatapropietario[".printFields"][] = "E_CIVIL";
$tdatapropietario[".printFields"][] = "PARIENTE";
$tdatapropietario[".printFields"][] = "NOMBRE_PARIENTE";
$tdatapropietario[".printFields"][] = "IDENTIFICACION";
$tdatapropietario[".printFields"][] = "TEL_PARIENTE";

//	CEDULA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CEDULA";
	$fdata["GoodName"] = "CEDULA";
	$fdata["ownerTable"] = "propietario";
	$fdata["Label"] = GetFieldLabel("propietario","CEDULA");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "CEDULA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CEDULA";

	
	
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




	$tdatapropietario["CEDULA"] = $fdata;
//	NOMBRE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "NOMBRE";
	$fdata["GoodName"] = "NOMBRE";
	$fdata["ownerTable"] = "propietario";
	$fdata["Label"] = GetFieldLabel("propietario","NOMBRE");
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapropietario["NOMBRE"] = $fdata;
//	TELEFONO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TELEFONO";
	$fdata["GoodName"] = "TELEFONO";
	$fdata["ownerTable"] = "propietario";
	$fdata["Label"] = GetFieldLabel("propietario","TELEFONO");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TELEFONO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TELEFONO";

	
	
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




	$tdatapropietario["TELEFONO"] = $fdata;
//	F_NACIMIENTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "F_NACIMIENTO";
	$fdata["GoodName"] = "F_NACIMIENTO";
	$fdata["ownerTable"] = "propietario";
	$fdata["Label"] = GetFieldLabel("propietario","F_NACIMIENTO");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "F_NACIMIENTO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "F_NACIMIENTO";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatapropietario["F_NACIMIENTO"] = $fdata;
//	E_CIVIL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "E_CIVIL";
	$fdata["GoodName"] = "E_CIVIL";
	$fdata["ownerTable"] = "propietario";
	$fdata["Label"] = GetFieldLabel("propietario","E_CIVIL");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "E_CIVIL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "E_CIVIL";

	
	
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
	$edata["LookupValues"][] = "SOLTERO(A)";
	$edata["LookupValues"][] = "CASADO(A)";
	$edata["LookupValues"][] = "SEPARADO(A)";
	$edata["LookupValues"][] = "DIVORSIADO(A)";
	$edata["LookupValues"][] = "VIUDO(A)";
	$edata["LookupValues"][] = "UNION LIBRE";

	
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




	$tdatapropietario["E_CIVIL"] = $fdata;
//	PARIENTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "PARIENTE";
	$fdata["GoodName"] = "PARIENTE";
	$fdata["ownerTable"] = "propietario";
	$fdata["Label"] = GetFieldLabel("propietario","PARIENTE");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PARIENTE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PARIENTE";

	
	
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
	$edata["LookupValues"][] = "ESPOSO(A)";
	$edata["LookupValues"][] = "HIJO(A)";
	$edata["LookupValues"][] = "PADRE";
	$edata["LookupValues"][] = "MADRE";
	$edata["LookupValues"][] = "TIO(A)";
	$edata["LookupValues"][] = "HERMANO(A)";
	$edata["LookupValues"][] = "SOBRINO(A)";
	$edata["LookupValues"][] = "ABUELO(A)";
	$edata["LookupValues"][] = "PRIMO(A)";
	$edata["LookupValues"][] = "SUEGRO(A)";
	$edata["LookupValues"][] = "CUÑADO(A)";
	$edata["LookupValues"][] = "NIETO(A)";
	$edata["LookupValues"][] = "OTRO";
	$edata["LookupValues"][] = "NINGUNO";

	
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




	$tdatapropietario["PARIENTE"] = $fdata;
//	NOMBRE_PARIENTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "NOMBRE_PARIENTE";
	$fdata["GoodName"] = "NOMBRE_PARIENTE";
	$fdata["ownerTable"] = "propietario";
	$fdata["Label"] = GetFieldLabel("propietario","NOMBRE_PARIENTE");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NOMBRE_PARIENTE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NOMBRE_PARIENTE";

	
	
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




	$tdatapropietario["NOMBRE_PARIENTE"] = $fdata;
//	IDENTIFICACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "IDENTIFICACION";
	$fdata["GoodName"] = "IDENTIFICACION";
	$fdata["ownerTable"] = "propietario";
	$fdata["Label"] = GetFieldLabel("propietario","IDENTIFICACION");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "IDENTIFICACION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IDENTIFICACION";

	
	
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




	$tdatapropietario["IDENTIFICACION"] = $fdata;
//	TEL_PARIENTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "TEL_PARIENTE";
	$fdata["GoodName"] = "TEL_PARIENTE";
	$fdata["ownerTable"] = "propietario";
	$fdata["Label"] = GetFieldLabel("propietario","TEL_PARIENTE");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TEL_PARIENTE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TEL_PARIENTE";

	
	
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




	$tdatapropietario["TEL_PARIENTE"] = $fdata;


$tables_data["propietario"]=&$tdatapropietario;
$field_labels["propietario"] = &$fieldLabelspropietario;
$fieldToolTips["propietario"] = &$fieldToolTipspropietario;
$page_titles["propietario"] = &$pageTitlespropietario;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["propietario"] = array();
//	finca
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="finca";
		$detailsParam["dOriginalTable"] = "finca";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "finca";
	$detailsParam["dCaptionTable"] = GetTableCaption("finca");
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
		
	$detailsTablesData["propietario"][$dIndex] = $detailsParam;

	
		$detailsTablesData["propietario"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["propietario"][$dIndex]["masterKeys"][]="CEDULA";

				$detailsTablesData["propietario"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["propietario"][$dIndex]["detailKeys"][]="PROPIETARIO_CEDULA";
//	REPORTE GLOBAL
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="REPORTE GLOBAL";
		$detailsParam["dOriginalTable"] = "finca";
		$detailsParam["proceedLink"] = true;
		$detailsParam["dType"]=PAGE_REPORT;
			$detailsParam["dShortTable"] = "REPORTE_GLOBAL";
	$detailsParam["dCaptionTable"] = GetTableCaption("REPORTE_GLOBAL");
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
		
	$detailsTablesData["propietario"][$dIndex] = $detailsParam;

	
		$detailsTablesData["propietario"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["propietario"][$dIndex]["masterKeys"][]="CEDULA";

				$detailsTablesData["propietario"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["propietario"][$dIndex]["detailKeys"][]="PROPIETARIO_CEDULA";
//	REPORTE FINCA
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="REPORTE FINCA";
		$detailsParam["dOriginalTable"] = "finca";
		$detailsParam["proceedLink"] = true;
		$detailsParam["dType"]=PAGE_REPORT;
			$detailsParam["dShortTable"] = "REPORTE_FINCA";
	$detailsParam["dCaptionTable"] = GetTableCaption("REPORTE_FINCA");
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
		
	$detailsTablesData["propietario"][$dIndex] = $detailsParam;

	
		$detailsTablesData["propietario"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["propietario"][$dIndex]["masterKeys"][]="CEDULA";

				$detailsTablesData["propietario"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["propietario"][$dIndex]["detailKeys"][]="PROPIETARIO_CEDULA";
//	REPORTE VEREDA
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="REPORTE VEREDA";
		$detailsParam["dOriginalTable"] = "finca";
		$detailsParam["proceedLink"] = true;
		$detailsParam["dType"]=PAGE_REPORT;
			$detailsParam["dShortTable"] = "REPORTE_VEREDA";
	$detailsParam["dCaptionTable"] = GetTableCaption("REPORTE_VEREDA");
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
		
	$detailsTablesData["propietario"][$dIndex] = $detailsParam;

	
		$detailsTablesData["propietario"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["propietario"][$dIndex]["masterKeys"][]="CEDULA";

				$detailsTablesData["propietario"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["propietario"][$dIndex]["detailKeys"][]="PROPIETARIO_CEDULA";

// tables which are master tables for current table (detail)
$masterTablesData["propietario"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_propietario()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CEDULA,  NOMBRE,  TELEFONO,  F_NACIMIENTO,  E_CIVIL,  PARIENTE,  NOMBRE_PARIENTE,  IDENTIFICACION,  TEL_PARIENTE";
$proto0["m_strFrom"] = "FROM propietario";
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
	"m_strName" => "CEDULA",
	"m_strTable" => "propietario",
	"m_srcTableName" => "propietario"
));

$proto6["m_sql"] = "CEDULA";
$proto6["m_srcTableName"] = "propietario";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBRE",
	"m_strTable" => "propietario",
	"m_srcTableName" => "propietario"
));

$proto8["m_sql"] = "NOMBRE";
$proto8["m_srcTableName"] = "propietario";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TELEFONO",
	"m_strTable" => "propietario",
	"m_srcTableName" => "propietario"
));

$proto10["m_sql"] = "TELEFONO";
$proto10["m_srcTableName"] = "propietario";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "F_NACIMIENTO",
	"m_strTable" => "propietario",
	"m_srcTableName" => "propietario"
));

$proto12["m_sql"] = "F_NACIMIENTO";
$proto12["m_srcTableName"] = "propietario";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "E_CIVIL",
	"m_strTable" => "propietario",
	"m_srcTableName" => "propietario"
));

$proto14["m_sql"] = "E_CIVIL";
$proto14["m_srcTableName"] = "propietario";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "PARIENTE",
	"m_strTable" => "propietario",
	"m_srcTableName" => "propietario"
));

$proto16["m_sql"] = "PARIENTE";
$proto16["m_srcTableName"] = "propietario";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBRE_PARIENTE",
	"m_strTable" => "propietario",
	"m_srcTableName" => "propietario"
));

$proto18["m_sql"] = "NOMBRE_PARIENTE";
$proto18["m_srcTableName"] = "propietario";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "IDENTIFICACION",
	"m_strTable" => "propietario",
	"m_srcTableName" => "propietario"
));

$proto20["m_sql"] = "IDENTIFICACION";
$proto20["m_srcTableName"] = "propietario";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "TEL_PARIENTE",
	"m_strTable" => "propietario",
	"m_srcTableName" => "propietario"
));

$proto22["m_sql"] = "TEL_PARIENTE";
$proto22["m_srcTableName"] = "propietario";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "propietario";
$proto25["m_srcTableName"] = "propietario";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "CEDULA";
$proto25["m_columns"][] = "NOMBRE";
$proto25["m_columns"][] = "TELEFONO";
$proto25["m_columns"][] = "F_NACIMIENTO";
$proto25["m_columns"][] = "E_CIVIL";
$proto25["m_columns"][] = "PARIENTE";
$proto25["m_columns"][] = "NOMBRE_PARIENTE";
$proto25["m_columns"][] = "IDENTIFICACION";
$proto25["m_columns"][] = "TEL_PARIENTE";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "propietario";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "propietario";
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
	"m_strName" => "CEDULA",
	"m_strTable" => "propietario",
	"m_srcTableName" => "propietario"
));

$proto28["m_column"]=$obj;
$obj = new SQLGroupByItem($proto28);

$proto0["m_groupby"][]=$obj;
												$proto30=array();
						$obj = new SQLField(array(
	"m_strName" => "NOMBRE",
	"m_strTable" => "propietario",
	"m_srcTableName" => "propietario"
));

$proto30["m_column"]=$obj;
$obj = new SQLGroupByItem($proto30);

$proto0["m_groupby"][]=$obj;
												$proto32=array();
						$obj = new SQLField(array(
	"m_strName" => "TELEFONO",
	"m_strTable" => "propietario",
	"m_srcTableName" => "propietario"
));

$proto32["m_column"]=$obj;
$obj = new SQLGroupByItem($proto32);

$proto0["m_groupby"][]=$obj;
												$proto34=array();
						$obj = new SQLField(array(
	"m_strName" => "F_NACIMIENTO",
	"m_strTable" => "propietario",
	"m_srcTableName" => "propietario"
));

$proto34["m_column"]=$obj;
$obj = new SQLGroupByItem($proto34);

$proto0["m_groupby"][]=$obj;
												$proto36=array();
						$obj = new SQLField(array(
	"m_strName" => "E_CIVIL",
	"m_strTable" => "propietario",
	"m_srcTableName" => "propietario"
));

$proto36["m_column"]=$obj;
$obj = new SQLGroupByItem($proto36);

$proto0["m_groupby"][]=$obj;
												$proto38=array();
						$obj = new SQLField(array(
	"m_strName" => "PARIENTE",
	"m_strTable" => "propietario",
	"m_srcTableName" => "propietario"
));

$proto38["m_column"]=$obj;
$obj = new SQLGroupByItem($proto38);

$proto0["m_groupby"][]=$obj;
												$proto40=array();
						$obj = new SQLField(array(
	"m_strName" => "NOMBRE_PARIENTE",
	"m_strTable" => "propietario",
	"m_srcTableName" => "propietario"
));

$proto40["m_column"]=$obj;
$obj = new SQLGroupByItem($proto40);

$proto0["m_groupby"][]=$obj;
												$proto42=array();
						$obj = new SQLField(array(
	"m_strName" => "IDENTIFICACION",
	"m_strTable" => "propietario",
	"m_srcTableName" => "propietario"
));

$proto42["m_column"]=$obj;
$obj = new SQLGroupByItem($proto42);

$proto0["m_groupby"][]=$obj;
												$proto44=array();
						$obj = new SQLField(array(
	"m_strName" => "TEL_PARIENTE",
	"m_strTable" => "propietario",
	"m_srcTableName" => "propietario"
));

$proto44["m_column"]=$obj;
$obj = new SQLGroupByItem($proto44);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="propietario";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_propietario = createSqlQuery_propietario();


	
		;

									

$tdatapropietario[".sqlquery"] = $queryData_propietario;

$tableEvents["propietario"] = new eventsBase;
$tdatapropietario[".hasEvents"] = false;

?>