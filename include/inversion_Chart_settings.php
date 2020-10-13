<?php
require_once(getabspath("classes/cipherer.php"));




$tdatainversion_Chart = array();
	$tdatainversion_Chart[".ShortName"] = "inversion_Chart";
	$tdatainversion_Chart[".OwnerID"] = "";
	$tdatainversion_Chart[".OriginalTable"] = "inversion";

//	field labels
$fieldLabelsinversion_Chart = array();
$fieldToolTipsinversion_Chart = array();
$pageTitlesinversion_Chart = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsinversion_Chart["Spanish"] = array();
	$fieldToolTipsinversion_Chart["Spanish"] = array();
	$pageTitlesinversion_Chart["Spanish"] = array();
	$fieldLabelsinversion_Chart["Spanish"]["ID"] = "ID";
	$fieldToolTipsinversion_Chart["Spanish"]["ID"] = "";
	$fieldLabelsinversion_Chart["Spanish"]["FINCA_PROPIETARIO_CEDULA"] = "FINCA PROPIETARIO CEDULA";
	$fieldToolTipsinversion_Chart["Spanish"]["FINCA_PROPIETARIO_CEDULA"] = "";
	$fieldLabelsinversion_Chart["Spanish"]["NOMBRE"] = "NOMBRE";
	$fieldToolTipsinversion_Chart["Spanish"]["NOMBRE"] = "";
	$fieldLabelsinversion_Chart["Spanish"]["VEREDA"] = "VEREDA";
	$fieldToolTipsinversion_Chart["Spanish"]["VEREDA"] = "";
	$fieldLabelsinversion_Chart["Spanish"]["FINCA"] = "FINCA";
	$fieldToolTipsinversion_Chart["Spanish"]["FINCA"] = "";
	$fieldLabelsinversion_Chart["Spanish"]["TIPO"] = "TIPO";
	$fieldToolTipsinversion_Chart["Spanish"]["TIPO"] = "";
	$fieldLabelsinversion_Chart["Spanish"]["NOMBRE_PROYECTO"] = "NOMBRE PROYECTO";
	$fieldToolTipsinversion_Chart["Spanish"]["NOMBRE_PROYECTO"] = "";
	$fieldLabelsinversion_Chart["Spanish"]["OBSERVACIONES"] = "OBSERVACIONES";
	$fieldToolTipsinversion_Chart["Spanish"]["OBSERVACIONES"] = "";
	$fieldLabelsinversion_Chart["Spanish"]["A_O"] = "AÑO";
	$fieldToolTipsinversion_Chart["Spanish"]["A_O"] = "";
	if (count($fieldToolTipsinversion_Chart["Spanish"]))
		$tdatainversion_Chart[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsinversion_Chart[""] = array();
	$fieldToolTipsinversion_Chart[""] = array();
	$pageTitlesinversion_Chart[""] = array();
	$fieldLabelsinversion_Chart[""]["ID"] = "ID";
	$fieldToolTipsinversion_Chart[""]["ID"] = "";
	$fieldLabelsinversion_Chart[""]["FINCA_PROPIETARIO_CEDULA"] = "FINCA PROPIETARIO CEDULA";
	$fieldToolTipsinversion_Chart[""]["FINCA_PROPIETARIO_CEDULA"] = "";
	$fieldLabelsinversion_Chart[""]["NOMBRE"] = "NOMBRE";
	$fieldToolTipsinversion_Chart[""]["NOMBRE"] = "";
	$fieldLabelsinversion_Chart[""]["VEREDA"] = "VEREDA";
	$fieldToolTipsinversion_Chart[""]["VEREDA"] = "";
	$fieldLabelsinversion_Chart[""]["FINCA"] = "FINCA";
	$fieldToolTipsinversion_Chart[""]["FINCA"] = "";
	$fieldLabelsinversion_Chart[""]["TIPO"] = "TIPO";
	$fieldToolTipsinversion_Chart[""]["TIPO"] = "";
	$fieldLabelsinversion_Chart[""]["NOMBRE_PROYECTO"] = "NOMBRE PROYECTO";
	$fieldToolTipsinversion_Chart[""]["NOMBRE_PROYECTO"] = "";
	$fieldLabelsinversion_Chart[""]["OBSERVACIONES"] = "OBSERVACIONES";
	$fieldToolTipsinversion_Chart[""]["OBSERVACIONES"] = "";
	$fieldLabelsinversion_Chart[""]["A_O"] = "AÑO";
	$fieldToolTipsinversion_Chart[""]["A_O"] = "";
	if (count($fieldToolTipsinversion_Chart[""]))
		$tdatainversion_Chart[".isUseToolTips"] = true;
}


	$tdatainversion_Chart[".NCSearch"] = true;

	$tdatainversion_Chart[".ChartRefreshTime"] = 0;


$tdatainversion_Chart[".shortTableName"] = "inversion_Chart";
$tdatainversion_Chart[".nSecOptions"] = 0;
$tdatainversion_Chart[".recsPerRowPrint"] = 1;
$tdatainversion_Chart[".mainTableOwnerID"] = "";
$tdatainversion_Chart[".moveNext"] = 1;
$tdatainversion_Chart[".entityType"] = 3;

$tdatainversion_Chart[".strOriginalTableName"] = "inversion";

	



$tdatainversion_Chart[".showAddInPopup"] = false;

$tdatainversion_Chart[".showEditInPopup"] = false;

$tdatainversion_Chart[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatainversion_Chart[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatainversion_Chart[".fieldsForRegister"] = array();

$tdatainversion_Chart[".listAjax"] = false;

	$tdatainversion_Chart[".audit"] = false;

	$tdatainversion_Chart[".locking"] = false;

$tdatainversion_Chart[".edit"] = true;
$tdatainversion_Chart[".afterEditAction"] = 1;
$tdatainversion_Chart[".closePopupAfterEdit"] = 1;
$tdatainversion_Chart[".afterEditActionDetTable"] = "";

$tdatainversion_Chart[".add"] = true;
$tdatainversion_Chart[".afterAddAction"] = 1;
$tdatainversion_Chart[".closePopupAfterAdd"] = 1;
$tdatainversion_Chart[".afterAddActionDetTable"] = "";

$tdatainversion_Chart[".list"] = true;

$tdatainversion_Chart[".view"] = true;




$tdatainversion_Chart[".delete"] = true;

$tdatainversion_Chart[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatainversion_Chart[".searchSaving"] = false;
//

$tdatainversion_Chart[".showSearchPanel"] = true;
		$tdatainversion_Chart[".flexibleSearch"] = true;

$tdatainversion_Chart[".isUseAjaxSuggest"] = true;




$tdatainversion_Chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainversion_Chart[".isUseTimeForSearch"] = false;



$tdatainversion_Chart[".badgeColor"] = "EDCA00";


$tdatainversion_Chart[".allSearchFields"] = array();
$tdatainversion_Chart[".filterFields"] = array();
$tdatainversion_Chart[".requiredSearchFields"] = array();

$tdatainversion_Chart[".allSearchFields"][] = "ID";
	$tdatainversion_Chart[".allSearchFields"][] = "FINCA_PROPIETARIO_CEDULA";
	$tdatainversion_Chart[".allSearchFields"][] = "NOMBRE";
	$tdatainversion_Chart[".allSearchFields"][] = "VEREDA";
	$tdatainversion_Chart[".allSearchFields"][] = "FINCA";
	$tdatainversion_Chart[".allSearchFields"][] = "TIPO";
	$tdatainversion_Chart[".allSearchFields"][] = "NOMBRE_PROYECTO";
	$tdatainversion_Chart[".allSearchFields"][] = "OBSERVACIONES";
	$tdatainversion_Chart[".allSearchFields"][] = "AÑO";
	

$tdatainversion_Chart[".googleLikeFields"] = array();
$tdatainversion_Chart[".googleLikeFields"][] = "ID";
$tdatainversion_Chart[".googleLikeFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatainversion_Chart[".googleLikeFields"][] = "NOMBRE";
$tdatainversion_Chart[".googleLikeFields"][] = "VEREDA";
$tdatainversion_Chart[".googleLikeFields"][] = "FINCA";
$tdatainversion_Chart[".googleLikeFields"][] = "TIPO";
$tdatainversion_Chart[".googleLikeFields"][] = "NOMBRE_PROYECTO";
$tdatainversion_Chart[".googleLikeFields"][] = "OBSERVACIONES";
$tdatainversion_Chart[".googleLikeFields"][] = "AÑO";


$tdatainversion_Chart[".advSearchFields"] = array();
$tdatainversion_Chart[".advSearchFields"][] = "ID";
$tdatainversion_Chart[".advSearchFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatainversion_Chart[".advSearchFields"][] = "NOMBRE";
$tdatainversion_Chart[".advSearchFields"][] = "VEREDA";
$tdatainversion_Chart[".advSearchFields"][] = "FINCA";
$tdatainversion_Chart[".advSearchFields"][] = "TIPO";
$tdatainversion_Chart[".advSearchFields"][] = "NOMBRE_PROYECTO";
$tdatainversion_Chart[".advSearchFields"][] = "OBSERVACIONES";
$tdatainversion_Chart[".advSearchFields"][] = "AÑO";

$tdatainversion_Chart[".tableType"] = "chart";

$tdatainversion_Chart[".printerPageOrientation"] = 0;
$tdatainversion_Chart[".nPrinterPageScale"] = 100;

$tdatainversion_Chart[".nPrinterSplitRecords"] = 40;

$tdatainversion_Chart[".nPrinterPDFSplitRecords"] = 40;



$tdatainversion_Chart[".geocodingEnabled"] = false;



// chart settings
$tdatainversion_Chart[".chartType"] = "2DColumn";
// end of chart settings


$tdatainversion_Chart[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatainversion_Chart[".strOrderBy"] = $tstrOrderBy;

$tdatainversion_Chart[".orderindexes"] = array();

$tdatainversion_Chart[".sqlHead"] = "SELECT ID,  	FINCA_PROPIETARIO_CEDULA,  	NOMBRE,  	VEREDA,  	FINCA,  	TIPO,  	NOMBRE_PROYECTO,  	OBSERVACIONES,  	`AÑO`";
$tdatainversion_Chart[".sqlFrom"] = "FROM inversion";
$tdatainversion_Chart[".sqlWhereExpr"] = "";
$tdatainversion_Chart[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatainversion_Chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainversion_Chart[".arrGroupsPerPage"] = $arrGPP;

$tdatainversion_Chart[".highlightSearchResults"] = true;

$tableKeysinversion_Chart = array();
$tableKeysinversion_Chart[] = "ID";
$tableKeysinversion_Chart[] = "FINCA_PROPIETARIO_CEDULA";
$tdatainversion_Chart[".Keys"] = $tableKeysinversion_Chart;

$tdatainversion_Chart[".listFields"] = array();
$tdatainversion_Chart[".listFields"][] = "ID";
$tdatainversion_Chart[".listFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatainversion_Chart[".listFields"][] = "NOMBRE";
$tdatainversion_Chart[".listFields"][] = "VEREDA";
$tdatainversion_Chart[".listFields"][] = "FINCA";
$tdatainversion_Chart[".listFields"][] = "TIPO";
$tdatainversion_Chart[".listFields"][] = "NOMBRE_PROYECTO";
$tdatainversion_Chart[".listFields"][] = "OBSERVACIONES";
$tdatainversion_Chart[".listFields"][] = "AÑO";

$tdatainversion_Chart[".hideMobileList"] = array();


$tdatainversion_Chart[".viewFields"] = array();
$tdatainversion_Chart[".viewFields"][] = "ID";
$tdatainversion_Chart[".viewFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatainversion_Chart[".viewFields"][] = "NOMBRE";
$tdatainversion_Chart[".viewFields"][] = "VEREDA";
$tdatainversion_Chart[".viewFields"][] = "FINCA";
$tdatainversion_Chart[".viewFields"][] = "TIPO";
$tdatainversion_Chart[".viewFields"][] = "NOMBRE_PROYECTO";
$tdatainversion_Chart[".viewFields"][] = "OBSERVACIONES";
$tdatainversion_Chart[".viewFields"][] = "AÑO";

$tdatainversion_Chart[".addFields"] = array();
$tdatainversion_Chart[".addFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatainversion_Chart[".addFields"][] = "NOMBRE";
$tdatainversion_Chart[".addFields"][] = "VEREDA";
$tdatainversion_Chart[".addFields"][] = "FINCA";
$tdatainversion_Chart[".addFields"][] = "TIPO";
$tdatainversion_Chart[".addFields"][] = "NOMBRE_PROYECTO";
$tdatainversion_Chart[".addFields"][] = "OBSERVACIONES";
$tdatainversion_Chart[".addFields"][] = "AÑO";

$tdatainversion_Chart[".masterListFields"] = array();
$tdatainversion_Chart[".masterListFields"][] = "ID";
$tdatainversion_Chart[".masterListFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatainversion_Chart[".masterListFields"][] = "NOMBRE";
$tdatainversion_Chart[".masterListFields"][] = "VEREDA";
$tdatainversion_Chart[".masterListFields"][] = "FINCA";
$tdatainversion_Chart[".masterListFields"][] = "TIPO";
$tdatainversion_Chart[".masterListFields"][] = "NOMBRE_PROYECTO";
$tdatainversion_Chart[".masterListFields"][] = "OBSERVACIONES";
$tdatainversion_Chart[".masterListFields"][] = "AÑO";

$tdatainversion_Chart[".inlineAddFields"] = array();
$tdatainversion_Chart[".inlineAddFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatainversion_Chart[".inlineAddFields"][] = "NOMBRE";
$tdatainversion_Chart[".inlineAddFields"][] = "VEREDA";
$tdatainversion_Chart[".inlineAddFields"][] = "FINCA";
$tdatainversion_Chart[".inlineAddFields"][] = "TIPO";
$tdatainversion_Chart[".inlineAddFields"][] = "NOMBRE_PROYECTO";
$tdatainversion_Chart[".inlineAddFields"][] = "OBSERVACIONES";
$tdatainversion_Chart[".inlineAddFields"][] = "AÑO";

$tdatainversion_Chart[".editFields"] = array();
$tdatainversion_Chart[".editFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatainversion_Chart[".editFields"][] = "NOMBRE";
$tdatainversion_Chart[".editFields"][] = "VEREDA";
$tdatainversion_Chart[".editFields"][] = "FINCA";
$tdatainversion_Chart[".editFields"][] = "TIPO";
$tdatainversion_Chart[".editFields"][] = "NOMBRE_PROYECTO";
$tdatainversion_Chart[".editFields"][] = "OBSERVACIONES";
$tdatainversion_Chart[".editFields"][] = "AÑO";

$tdatainversion_Chart[".inlineEditFields"] = array();
$tdatainversion_Chart[".inlineEditFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatainversion_Chart[".inlineEditFields"][] = "NOMBRE";
$tdatainversion_Chart[".inlineEditFields"][] = "VEREDA";
$tdatainversion_Chart[".inlineEditFields"][] = "FINCA";
$tdatainversion_Chart[".inlineEditFields"][] = "TIPO";
$tdatainversion_Chart[".inlineEditFields"][] = "NOMBRE_PROYECTO";
$tdatainversion_Chart[".inlineEditFields"][] = "OBSERVACIONES";
$tdatainversion_Chart[".inlineEditFields"][] = "AÑO";

$tdatainversion_Chart[".exportFields"] = array();
$tdatainversion_Chart[".exportFields"][] = "ID";
$tdatainversion_Chart[".exportFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatainversion_Chart[".exportFields"][] = "NOMBRE";
$tdatainversion_Chart[".exportFields"][] = "VEREDA";
$tdatainversion_Chart[".exportFields"][] = "FINCA";
$tdatainversion_Chart[".exportFields"][] = "TIPO";
$tdatainversion_Chart[".exportFields"][] = "NOMBRE_PROYECTO";
$tdatainversion_Chart[".exportFields"][] = "OBSERVACIONES";
$tdatainversion_Chart[".exportFields"][] = "AÑO";

$tdatainversion_Chart[".importFields"] = array();
$tdatainversion_Chart[".importFields"][] = "ID";
$tdatainversion_Chart[".importFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatainversion_Chart[".importFields"][] = "NOMBRE";
$tdatainversion_Chart[".importFields"][] = "VEREDA";
$tdatainversion_Chart[".importFields"][] = "FINCA";
$tdatainversion_Chart[".importFields"][] = "TIPO";
$tdatainversion_Chart[".importFields"][] = "NOMBRE_PROYECTO";
$tdatainversion_Chart[".importFields"][] = "OBSERVACIONES";
$tdatainversion_Chart[".importFields"][] = "AÑO";

$tdatainversion_Chart[".printFields"] = array();
$tdatainversion_Chart[".printFields"][] = "ID";
$tdatainversion_Chart[".printFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdatainversion_Chart[".printFields"][] = "NOMBRE";
$tdatainversion_Chart[".printFields"][] = "VEREDA";
$tdatainversion_Chart[".printFields"][] = "FINCA";
$tdatainversion_Chart[".printFields"][] = "TIPO";
$tdatainversion_Chart[".printFields"][] = "NOMBRE_PROYECTO";
$tdatainversion_Chart[".printFields"][] = "OBSERVACIONES";
$tdatainversion_Chart[".printFields"][] = "AÑO";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "inversion";
	$fdata["Label"] = GetFieldLabel("inversion_Chart","ID");
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




	$tdatainversion_Chart["ID"] = $fdata;
//	FINCA_PROPIETARIO_CEDULA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FINCA_PROPIETARIO_CEDULA";
	$fdata["GoodName"] = "FINCA_PROPIETARIO_CEDULA";
	$fdata["ownerTable"] = "inversion";
	$fdata["Label"] = GetFieldLabel("inversion_Chart","FINCA_PROPIETARIO_CEDULA");
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatainversion_Chart["FINCA_PROPIETARIO_CEDULA"] = $fdata;
//	NOMBRE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "NOMBRE";
	$fdata["GoodName"] = "NOMBRE";
	$fdata["ownerTable"] = "inversion";
	$fdata["Label"] = GetFieldLabel("inversion_Chart","NOMBRE");
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatainversion_Chart["NOMBRE"] = $fdata;
//	VEREDA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "VEREDA";
	$fdata["GoodName"] = "VEREDA";
	$fdata["ownerTable"] = "inversion";
	$fdata["Label"] = GetFieldLabel("inversion_Chart","VEREDA");
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




	$tdatainversion_Chart["VEREDA"] = $fdata;
//	FINCA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "FINCA";
	$fdata["GoodName"] = "FINCA";
	$fdata["ownerTable"] = "inversion";
	$fdata["Label"] = GetFieldLabel("inversion_Chart","FINCA");
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




	$tdatainversion_Chart["FINCA"] = $fdata;
//	TIPO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "TIPO";
	$fdata["GoodName"] = "TIPO";
	$fdata["ownerTable"] = "inversion";
	$fdata["Label"] = GetFieldLabel("inversion_Chart","TIPO");
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




	$tdatainversion_Chart["TIPO"] = $fdata;
//	NOMBRE_PROYECTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "NOMBRE_PROYECTO";
	$fdata["GoodName"] = "NOMBRE_PROYECTO";
	$fdata["ownerTable"] = "inversion";
	$fdata["Label"] = GetFieldLabel("inversion_Chart","NOMBRE_PROYECTO");
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




	$tdatainversion_Chart["NOMBRE_PROYECTO"] = $fdata;
//	OBSERVACIONES
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "OBSERVACIONES";
	$fdata["GoodName"] = "OBSERVACIONES";
	$fdata["ownerTable"] = "inversion";
	$fdata["Label"] = GetFieldLabel("inversion_Chart","OBSERVACIONES");
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




	$tdatainversion_Chart["OBSERVACIONES"] = $fdata;
//	AÑO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "AÑO";
	$fdata["GoodName"] = "A_O";
	$fdata["ownerTable"] = "inversion";
	$fdata["Label"] = GetFieldLabel("inversion_Chart","A_O");
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




	$tdatainversion_Chart["AÑO"] = $fdata;

	$tdatainversion_Chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">inversion Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdatainversion_Chart[".chartXml"] .= '<attr value="0">
			<attr value="name">FINCA_PROPIETARIO_CEDULA</attr>';
	$tdatainversion_Chart[".chartXml"] .= '</attr>';
	$tdatainversion_Chart[".chartXml"] .= '<attr value="1">
		<attr value="name">NOMBRE</attr>
	</attr>';
	$tdatainversion_Chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatainversion_Chart[".chartXml"] .= '<attr value="head">'.xmlencode("inversion Chart").'</attr>
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
$tdatainversion_Chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatainversion_Chart[".chartXml"] .= '<attr value="0">
		<attr value="name">ID</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("inversion_Chart","ID")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatainversion_Chart[".chartXml"] .= '<attr value="1">
		<attr value="name">FINCA_PROPIETARIO_CEDULA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("inversion_Chart","FINCA_PROPIETARIO_CEDULA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatainversion_Chart[".chartXml"] .= '<attr value="2">
		<attr value="name">NOMBRE</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("inversion_Chart","NOMBRE")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatainversion_Chart[".chartXml"] .= '<attr value="3">
		<attr value="name">VEREDA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("inversion_Chart","VEREDA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatainversion_Chart[".chartXml"] .= '<attr value="4">
		<attr value="name">FINCA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("inversion_Chart","FINCA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatainversion_Chart[".chartXml"] .= '<attr value="5">
		<attr value="name">TIPO</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("inversion_Chart","TIPO")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatainversion_Chart[".chartXml"] .= '<attr value="6">
		<attr value="name">NOMBRE_PROYECTO</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("inversion_Chart","NOMBRE_PROYECTO")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatainversion_Chart[".chartXml"] .= '<attr value="7">
		<attr value="name">OBSERVACIONES</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("inversion_Chart","OBSERVACIONES")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatainversion_Chart[".chartXml"] .= '<attr value="8">
		<attr value="name">AÑO</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("inversion_Chart","A_O")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatainversion_Chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">inversion Chart</attr>
<attr value="short_table_name">inversion_Chart</attr>
</attr>

</chart>';

$tables_data["inversion Chart"]=&$tdatainversion_Chart;
$field_labels["inversion_Chart"] = &$fieldLabelsinversion_Chart;
$fieldToolTips["inversion_Chart"] = &$fieldToolTipsinversion_Chart;
$page_titles["inversion_Chart"] = &$pageTitlesinversion_Chart;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["inversion Chart"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["inversion Chart"] = array();


	
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
					$masterTablesData["inversion Chart"][0] = $masterParams;
				$masterTablesData["inversion Chart"][0]["masterKeys"] = array();
	$masterTablesData["inversion Chart"][0]["masterKeys"][]="PROPIETARIO_CEDULA";
				$masterTablesData["inversion Chart"][0]["detailKeys"] = array();
	$masterTablesData["inversion Chart"][0]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_inversion_Chart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	FINCA_PROPIETARIO_CEDULA,  	NOMBRE,  	VEREDA,  	FINCA,  	TIPO,  	NOMBRE_PROYECTO,  	OBSERVACIONES,  	`AÑO`";
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
	"m_srcTableName" => "inversion Chart"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "inversion Chart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "FINCA_PROPIETARIO_CEDULA",
	"m_strTable" => "inversion",
	"m_srcTableName" => "inversion Chart"
));

$proto8["m_sql"] = "FINCA_PROPIETARIO_CEDULA";
$proto8["m_srcTableName"] = "inversion Chart";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBRE",
	"m_strTable" => "inversion",
	"m_srcTableName" => "inversion Chart"
));

$proto10["m_sql"] = "NOMBRE";
$proto10["m_srcTableName"] = "inversion Chart";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "VEREDA",
	"m_strTable" => "inversion",
	"m_srcTableName" => "inversion Chart"
));

$proto12["m_sql"] = "VEREDA";
$proto12["m_srcTableName"] = "inversion Chart";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "FINCA",
	"m_strTable" => "inversion",
	"m_srcTableName" => "inversion Chart"
));

$proto14["m_sql"] = "FINCA";
$proto14["m_srcTableName"] = "inversion Chart";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "TIPO",
	"m_strTable" => "inversion",
	"m_srcTableName" => "inversion Chart"
));

$proto16["m_sql"] = "TIPO";
$proto16["m_srcTableName"] = "inversion Chart";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBRE_PROYECTO",
	"m_strTable" => "inversion",
	"m_srcTableName" => "inversion Chart"
));

$proto18["m_sql"] = "NOMBRE_PROYECTO";
$proto18["m_srcTableName"] = "inversion Chart";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "OBSERVACIONES",
	"m_strTable" => "inversion",
	"m_srcTableName" => "inversion Chart"
));

$proto20["m_sql"] = "OBSERVACIONES";
$proto20["m_srcTableName"] = "inversion Chart";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "inversion",
	"m_srcTableName" => "inversion Chart"
));

$proto22["m_sql"] = "`AÑO`";
$proto22["m_srcTableName"] = "inversion Chart";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "inversion";
$proto25["m_srcTableName"] = "inversion Chart";
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
$proto24["m_srcTableName"] = "inversion Chart";
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
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="inversion Chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_inversion_Chart = createSqlQuery_inversion_Chart();


	
		;

									

$tdatainversion_Chart[".sqlquery"] = $queryData_inversion_Chart;

$tableEvents["inversion Chart"] = new eventsBase;
$tdatainversion_Chart[".hasEvents"] = false;

?>