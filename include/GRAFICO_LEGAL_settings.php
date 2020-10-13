<?php
require_once(getabspath("classes/cipherer.php"));




$tdataGrafico_legal = array();
	$tdataGrafico_legal[".ShortName"] = "Grafico_legal";
	$tdataGrafico_legal[".OwnerID"] = "";
	$tdataGrafico_legal[".OriginalTable"] = "legal";

//	field labels
$fieldLabelsGrafico_legal = array();
$fieldToolTipsGrafico_legal = array();
$pageTitlesGrafico_legal = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsGrafico_legal["Spanish"] = array();
	$fieldToolTipsGrafico_legal["Spanish"] = array();
	$pageTitlesGrafico_legal["Spanish"] = array();
	$fieldLabelsGrafico_legal["Spanish"]["ID"] = "ID";
	$fieldToolTipsGrafico_legal["Spanish"]["ID"] = "";
	$fieldLabelsGrafico_legal["Spanish"]["FINCA_PROPIETARIO_CEDULA"] = "FINCA PROPIETARIO CEDULA";
	$fieldToolTipsGrafico_legal["Spanish"]["FINCA_PROPIETARIO_CEDULA"] = "";
	$fieldLabelsGrafico_legal["Spanish"]["NOMBRE"] = "NOMBRE";
	$fieldToolTipsGrafico_legal["Spanish"]["NOMBRE"] = "";
	$fieldLabelsGrafico_legal["Spanish"]["VEREDA"] = "VEREDA";
	$fieldToolTipsGrafico_legal["Spanish"]["VEREDA"] = "";
	$fieldLabelsGrafico_legal["Spanish"]["FINCA"] = "FINCA";
	$fieldToolTipsGrafico_legal["Spanish"]["FINCA"] = "";
	$fieldLabelsGrafico_legal["Spanish"]["TENECIA"] = "TENECIA";
	$fieldToolTipsGrafico_legal["Spanish"]["TENECIA"] = "";
	$fieldLabelsGrafico_legal["Spanish"]["SOPORTE"] = "SOPORTE";
	$fieldToolTipsGrafico_legal["Spanish"]["SOPORTE"] = "";
	$fieldLabelsGrafico_legal["Spanish"]["RUAT"] = "RUAT";
	$fieldToolTipsGrafico_legal["Spanish"]["RUAT"] = "";
	$fieldLabelsGrafico_legal["Spanish"]["ASOCIACION"] = "ASOCIACION";
	$fieldToolTipsGrafico_legal["Spanish"]["ASOCIACION"] = "";
	$fieldLabelsGrafico_legal["Spanish"]["OBSERVACIONES"] = "OBSERVACIONES";
	$fieldToolTipsGrafico_legal["Spanish"]["OBSERVACIONES"] = "";
	$fieldLabelsGrafico_legal["Spanish"]["A_O"] = "AÑO";
	$fieldToolTipsGrafico_legal["Spanish"]["A_O"] = "";
	if (count($fieldToolTipsGrafico_legal["Spanish"]))
		$tdataGrafico_legal[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsGrafico_legal[""] = array();
	$fieldToolTipsGrafico_legal[""] = array();
	$pageTitlesGrafico_legal[""] = array();
	$fieldLabelsGrafico_legal[""]["ID"] = "ID";
	$fieldToolTipsGrafico_legal[""]["ID"] = "";
	$fieldLabelsGrafico_legal[""]["FINCA_PROPIETARIO_CEDULA"] = "FINCA PROPIETARIO CEDULA";
	$fieldToolTipsGrafico_legal[""]["FINCA_PROPIETARIO_CEDULA"] = "";
	$fieldLabelsGrafico_legal[""]["NOMBRE"] = "NOMBRE";
	$fieldToolTipsGrafico_legal[""]["NOMBRE"] = "";
	$fieldLabelsGrafico_legal[""]["VEREDA"] = "VEREDA";
	$fieldToolTipsGrafico_legal[""]["VEREDA"] = "";
	$fieldLabelsGrafico_legal[""]["FINCA"] = "FINCA";
	$fieldToolTipsGrafico_legal[""]["FINCA"] = "";
	$fieldLabelsGrafico_legal[""]["TENECIA"] = "TENECIA";
	$fieldToolTipsGrafico_legal[""]["TENECIA"] = "";
	$fieldLabelsGrafico_legal[""]["SOPORTE"] = "SOPORTE";
	$fieldToolTipsGrafico_legal[""]["SOPORTE"] = "";
	$fieldLabelsGrafico_legal[""]["RUAT"] = "RUAT";
	$fieldToolTipsGrafico_legal[""]["RUAT"] = "";
	$fieldLabelsGrafico_legal[""]["ASOCIACION"] = "ASOCIACION";
	$fieldToolTipsGrafico_legal[""]["ASOCIACION"] = "";
	$fieldLabelsGrafico_legal[""]["OBSERVACIONES"] = "OBSERVACIONES";
	$fieldToolTipsGrafico_legal[""]["OBSERVACIONES"] = "";
	$fieldLabelsGrafico_legal[""]["A_O"] = "AÑO";
	$fieldToolTipsGrafico_legal[""]["A_O"] = "";
	if (count($fieldToolTipsGrafico_legal[""]))
		$tdataGrafico_legal[".isUseToolTips"] = true;
}


	$tdataGrafico_legal[".NCSearch"] = true;

	$tdataGrafico_legal[".ChartRefreshTime"] = 0;


$tdataGrafico_legal[".shortTableName"] = "Grafico_legal";
$tdataGrafico_legal[".nSecOptions"] = 0;
$tdataGrafico_legal[".recsPerRowPrint"] = 1;
$tdataGrafico_legal[".mainTableOwnerID"] = "";
$tdataGrafico_legal[".moveNext"] = 1;
$tdataGrafico_legal[".entityType"] = 3;

$tdataGrafico_legal[".strOriginalTableName"] = "legal";

	



$tdataGrafico_legal[".showAddInPopup"] = false;

$tdataGrafico_legal[".showEditInPopup"] = false;

$tdataGrafico_legal[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataGrafico_legal[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataGrafico_legal[".fieldsForRegister"] = array();

$tdataGrafico_legal[".listAjax"] = false;

	$tdataGrafico_legal[".audit"] = false;

	$tdataGrafico_legal[".locking"] = false;

$tdataGrafico_legal[".edit"] = true;
$tdataGrafico_legal[".afterEditAction"] = 1;
$tdataGrafico_legal[".closePopupAfterEdit"] = 1;
$tdataGrafico_legal[".afterEditActionDetTable"] = "";

$tdataGrafico_legal[".add"] = true;
$tdataGrafico_legal[".afterAddAction"] = 1;
$tdataGrafico_legal[".closePopupAfterAdd"] = 1;
$tdataGrafico_legal[".afterAddActionDetTable"] = "";

$tdataGrafico_legal[".list"] = true;

$tdataGrafico_legal[".view"] = true;




$tdataGrafico_legal[".delete"] = true;

$tdataGrafico_legal[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataGrafico_legal[".searchSaving"] = false;
//

$tdataGrafico_legal[".showSearchPanel"] = true;
		$tdataGrafico_legal[".flexibleSearch"] = true;

$tdataGrafico_legal[".isUseAjaxSuggest"] = true;




$tdataGrafico_legal[".addPageEvents"] = false;

// use timepicker for search panel
$tdataGrafico_legal[".isUseTimeForSearch"] = false;



$tdataGrafico_legal[".badgeColor"] = "1E90FF";


$tdataGrafico_legal[".allSearchFields"] = array();
$tdataGrafico_legal[".filterFields"] = array();
$tdataGrafico_legal[".requiredSearchFields"] = array();

$tdataGrafico_legal[".allSearchFields"][] = "ID";
	$tdataGrafico_legal[".allSearchFields"][] = "FINCA_PROPIETARIO_CEDULA";
	$tdataGrafico_legal[".allSearchFields"][] = "NOMBRE";
	$tdataGrafico_legal[".allSearchFields"][] = "VEREDA";
	$tdataGrafico_legal[".allSearchFields"][] = "FINCA";
	$tdataGrafico_legal[".allSearchFields"][] = "TENECIA";
	$tdataGrafico_legal[".allSearchFields"][] = "SOPORTE";
	$tdataGrafico_legal[".allSearchFields"][] = "RUAT";
	$tdataGrafico_legal[".allSearchFields"][] = "ASOCIACION";
	$tdataGrafico_legal[".allSearchFields"][] = "OBSERVACIONES";
	$tdataGrafico_legal[".allSearchFields"][] = "AÑO";
	

$tdataGrafico_legal[".googleLikeFields"] = array();
$tdataGrafico_legal[".googleLikeFields"][] = "ID";
$tdataGrafico_legal[".googleLikeFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdataGrafico_legal[".googleLikeFields"][] = "NOMBRE";
$tdataGrafico_legal[".googleLikeFields"][] = "VEREDA";
$tdataGrafico_legal[".googleLikeFields"][] = "FINCA";
$tdataGrafico_legal[".googleLikeFields"][] = "TENECIA";
$tdataGrafico_legal[".googleLikeFields"][] = "SOPORTE";
$tdataGrafico_legal[".googleLikeFields"][] = "RUAT";
$tdataGrafico_legal[".googleLikeFields"][] = "ASOCIACION";
$tdataGrafico_legal[".googleLikeFields"][] = "OBSERVACIONES";
$tdataGrafico_legal[".googleLikeFields"][] = "AÑO";


$tdataGrafico_legal[".advSearchFields"] = array();
$tdataGrafico_legal[".advSearchFields"][] = "ID";
$tdataGrafico_legal[".advSearchFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdataGrafico_legal[".advSearchFields"][] = "NOMBRE";
$tdataGrafico_legal[".advSearchFields"][] = "VEREDA";
$tdataGrafico_legal[".advSearchFields"][] = "FINCA";
$tdataGrafico_legal[".advSearchFields"][] = "TENECIA";
$tdataGrafico_legal[".advSearchFields"][] = "SOPORTE";
$tdataGrafico_legal[".advSearchFields"][] = "RUAT";
$tdataGrafico_legal[".advSearchFields"][] = "ASOCIACION";
$tdataGrafico_legal[".advSearchFields"][] = "OBSERVACIONES";
$tdataGrafico_legal[".advSearchFields"][] = "AÑO";

$tdataGrafico_legal[".tableType"] = "chart";

$tdataGrafico_legal[".printerPageOrientation"] = 0;
$tdataGrafico_legal[".nPrinterPageScale"] = 100;

$tdataGrafico_legal[".nPrinterSplitRecords"] = 40;

$tdataGrafico_legal[".nPrinterPDFSplitRecords"] = 40;



$tdataGrafico_legal[".geocodingEnabled"] = false;



// chart settings
$tdataGrafico_legal[".chartType"] = "2DColumn";
// end of chart settings


$tdataGrafico_legal[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataGrafico_legal[".strOrderBy"] = $tstrOrderBy;

$tdataGrafico_legal[".orderindexes"] = array();

$tdataGrafico_legal[".sqlHead"] = "SELECT ID,  	FINCA_PROPIETARIO_CEDULA,  	NOMBRE,  	VEREDA,  	FINCA,  	TENECIA,  	SOPORTE,  	RUAT,  	ASOCIACION,  	OBSERVACIONES,  	`AÑO`";
$tdataGrafico_legal[".sqlFrom"] = "FROM legal";
$tdataGrafico_legal[".sqlWhereExpr"] = "";
$tdataGrafico_legal[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataGrafico_legal[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataGrafico_legal[".arrGroupsPerPage"] = $arrGPP;

$tdataGrafico_legal[".highlightSearchResults"] = true;

$tableKeysGrafico_legal = array();
$tableKeysGrafico_legal[] = "ID";
$tableKeysGrafico_legal[] = "FINCA_PROPIETARIO_CEDULA";
$tdataGrafico_legal[".Keys"] = $tableKeysGrafico_legal;

$tdataGrafico_legal[".listFields"] = array();
$tdataGrafico_legal[".listFields"][] = "ID";
$tdataGrafico_legal[".listFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdataGrafico_legal[".listFields"][] = "NOMBRE";
$tdataGrafico_legal[".listFields"][] = "VEREDA";
$tdataGrafico_legal[".listFields"][] = "FINCA";
$tdataGrafico_legal[".listFields"][] = "TENECIA";
$tdataGrafico_legal[".listFields"][] = "SOPORTE";
$tdataGrafico_legal[".listFields"][] = "RUAT";
$tdataGrafico_legal[".listFields"][] = "ASOCIACION";
$tdataGrafico_legal[".listFields"][] = "OBSERVACIONES";
$tdataGrafico_legal[".listFields"][] = "AÑO";

$tdataGrafico_legal[".hideMobileList"] = array();


$tdataGrafico_legal[".viewFields"] = array();
$tdataGrafico_legal[".viewFields"][] = "ID";
$tdataGrafico_legal[".viewFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdataGrafico_legal[".viewFields"][] = "NOMBRE";
$tdataGrafico_legal[".viewFields"][] = "VEREDA";
$tdataGrafico_legal[".viewFields"][] = "FINCA";
$tdataGrafico_legal[".viewFields"][] = "TENECIA";
$tdataGrafico_legal[".viewFields"][] = "SOPORTE";
$tdataGrafico_legal[".viewFields"][] = "RUAT";
$tdataGrafico_legal[".viewFields"][] = "ASOCIACION";
$tdataGrafico_legal[".viewFields"][] = "OBSERVACIONES";
$tdataGrafico_legal[".viewFields"][] = "AÑO";

$tdataGrafico_legal[".addFields"] = array();
$tdataGrafico_legal[".addFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdataGrafico_legal[".addFields"][] = "NOMBRE";
$tdataGrafico_legal[".addFields"][] = "VEREDA";
$tdataGrafico_legal[".addFields"][] = "FINCA";
$tdataGrafico_legal[".addFields"][] = "TENECIA";
$tdataGrafico_legal[".addFields"][] = "SOPORTE";
$tdataGrafico_legal[".addFields"][] = "RUAT";
$tdataGrafico_legal[".addFields"][] = "ASOCIACION";
$tdataGrafico_legal[".addFields"][] = "OBSERVACIONES";
$tdataGrafico_legal[".addFields"][] = "AÑO";

$tdataGrafico_legal[".masterListFields"] = array();
$tdataGrafico_legal[".masterListFields"][] = "ID";
$tdataGrafico_legal[".masterListFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdataGrafico_legal[".masterListFields"][] = "NOMBRE";
$tdataGrafico_legal[".masterListFields"][] = "VEREDA";
$tdataGrafico_legal[".masterListFields"][] = "FINCA";
$tdataGrafico_legal[".masterListFields"][] = "TENECIA";
$tdataGrafico_legal[".masterListFields"][] = "SOPORTE";
$tdataGrafico_legal[".masterListFields"][] = "RUAT";
$tdataGrafico_legal[".masterListFields"][] = "ASOCIACION";
$tdataGrafico_legal[".masterListFields"][] = "OBSERVACIONES";
$tdataGrafico_legal[".masterListFields"][] = "AÑO";

$tdataGrafico_legal[".inlineAddFields"] = array();
$tdataGrafico_legal[".inlineAddFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdataGrafico_legal[".inlineAddFields"][] = "NOMBRE";
$tdataGrafico_legal[".inlineAddFields"][] = "VEREDA";
$tdataGrafico_legal[".inlineAddFields"][] = "FINCA";
$tdataGrafico_legal[".inlineAddFields"][] = "TENECIA";
$tdataGrafico_legal[".inlineAddFields"][] = "SOPORTE";
$tdataGrafico_legal[".inlineAddFields"][] = "RUAT";
$tdataGrafico_legal[".inlineAddFields"][] = "ASOCIACION";
$tdataGrafico_legal[".inlineAddFields"][] = "OBSERVACIONES";
$tdataGrafico_legal[".inlineAddFields"][] = "AÑO";

$tdataGrafico_legal[".editFields"] = array();
$tdataGrafico_legal[".editFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdataGrafico_legal[".editFields"][] = "NOMBRE";
$tdataGrafico_legal[".editFields"][] = "VEREDA";
$tdataGrafico_legal[".editFields"][] = "FINCA";
$tdataGrafico_legal[".editFields"][] = "TENECIA";
$tdataGrafico_legal[".editFields"][] = "SOPORTE";
$tdataGrafico_legal[".editFields"][] = "RUAT";
$tdataGrafico_legal[".editFields"][] = "ASOCIACION";
$tdataGrafico_legal[".editFields"][] = "OBSERVACIONES";
$tdataGrafico_legal[".editFields"][] = "AÑO";

$tdataGrafico_legal[".inlineEditFields"] = array();
$tdataGrafico_legal[".inlineEditFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdataGrafico_legal[".inlineEditFields"][] = "NOMBRE";
$tdataGrafico_legal[".inlineEditFields"][] = "VEREDA";
$tdataGrafico_legal[".inlineEditFields"][] = "FINCA";
$tdataGrafico_legal[".inlineEditFields"][] = "TENECIA";
$tdataGrafico_legal[".inlineEditFields"][] = "SOPORTE";
$tdataGrafico_legal[".inlineEditFields"][] = "RUAT";
$tdataGrafico_legal[".inlineEditFields"][] = "ASOCIACION";
$tdataGrafico_legal[".inlineEditFields"][] = "OBSERVACIONES";
$tdataGrafico_legal[".inlineEditFields"][] = "AÑO";

$tdataGrafico_legal[".exportFields"] = array();
$tdataGrafico_legal[".exportFields"][] = "ID";
$tdataGrafico_legal[".exportFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdataGrafico_legal[".exportFields"][] = "NOMBRE";
$tdataGrafico_legal[".exportFields"][] = "VEREDA";
$tdataGrafico_legal[".exportFields"][] = "FINCA";
$tdataGrafico_legal[".exportFields"][] = "TENECIA";
$tdataGrafico_legal[".exportFields"][] = "SOPORTE";
$tdataGrafico_legal[".exportFields"][] = "RUAT";
$tdataGrafico_legal[".exportFields"][] = "ASOCIACION";
$tdataGrafico_legal[".exportFields"][] = "OBSERVACIONES";
$tdataGrafico_legal[".exportFields"][] = "AÑO";

$tdataGrafico_legal[".importFields"] = array();
$tdataGrafico_legal[".importFields"][] = "ID";
$tdataGrafico_legal[".importFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdataGrafico_legal[".importFields"][] = "NOMBRE";
$tdataGrafico_legal[".importFields"][] = "VEREDA";
$tdataGrafico_legal[".importFields"][] = "FINCA";
$tdataGrafico_legal[".importFields"][] = "TENECIA";
$tdataGrafico_legal[".importFields"][] = "SOPORTE";
$tdataGrafico_legal[".importFields"][] = "RUAT";
$tdataGrafico_legal[".importFields"][] = "ASOCIACION";
$tdataGrafico_legal[".importFields"][] = "OBSERVACIONES";
$tdataGrafico_legal[".importFields"][] = "AÑO";

$tdataGrafico_legal[".printFields"] = array();
$tdataGrafico_legal[".printFields"][] = "ID";
$tdataGrafico_legal[".printFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdataGrafico_legal[".printFields"][] = "NOMBRE";
$tdataGrafico_legal[".printFields"][] = "VEREDA";
$tdataGrafico_legal[".printFields"][] = "FINCA";
$tdataGrafico_legal[".printFields"][] = "TENECIA";
$tdataGrafico_legal[".printFields"][] = "SOPORTE";
$tdataGrafico_legal[".printFields"][] = "RUAT";
$tdataGrafico_legal[".printFields"][] = "ASOCIACION";
$tdataGrafico_legal[".printFields"][] = "OBSERVACIONES";
$tdataGrafico_legal[".printFields"][] = "AÑO";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "legal";
	$fdata["Label"] = GetFieldLabel("Grafico_legal","ID");
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




	$tdataGrafico_legal["ID"] = $fdata;
//	FINCA_PROPIETARIO_CEDULA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FINCA_PROPIETARIO_CEDULA";
	$fdata["GoodName"] = "FINCA_PROPIETARIO_CEDULA";
	$fdata["ownerTable"] = "legal";
	$fdata["Label"] = GetFieldLabel("Grafico_legal","FINCA_PROPIETARIO_CEDULA");
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




	$tdataGrafico_legal["FINCA_PROPIETARIO_CEDULA"] = $fdata;
//	NOMBRE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "NOMBRE";
	$fdata["GoodName"] = "NOMBRE";
	$fdata["ownerTable"] = "legal";
	$fdata["Label"] = GetFieldLabel("Grafico_legal","NOMBRE");
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




	$tdataGrafico_legal["NOMBRE"] = $fdata;
//	VEREDA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "VEREDA";
	$fdata["GoodName"] = "VEREDA";
	$fdata["ownerTable"] = "legal";
	$fdata["Label"] = GetFieldLabel("Grafico_legal","VEREDA");
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




	$tdataGrafico_legal["VEREDA"] = $fdata;
//	FINCA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "FINCA";
	$fdata["GoodName"] = "FINCA";
	$fdata["ownerTable"] = "legal";
	$fdata["Label"] = GetFieldLabel("Grafico_legal","FINCA");
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




	$tdataGrafico_legal["FINCA"] = $fdata;
//	TENECIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "TENECIA";
	$fdata["GoodName"] = "TENECIA";
	$fdata["ownerTable"] = "legal";
	$fdata["Label"] = GetFieldLabel("Grafico_legal","TENECIA");
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




	$tdataGrafico_legal["TENECIA"] = $fdata;
//	SOPORTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "SOPORTE";
	$fdata["GoodName"] = "SOPORTE";
	$fdata["ownerTable"] = "legal";
	$fdata["Label"] = GetFieldLabel("Grafico_legal","SOPORTE");
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




	$tdataGrafico_legal["SOPORTE"] = $fdata;
//	RUAT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "RUAT";
	$fdata["GoodName"] = "RUAT";
	$fdata["ownerTable"] = "legal";
	$fdata["Label"] = GetFieldLabel("Grafico_legal","RUAT");
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




	$tdataGrafico_legal["RUAT"] = $fdata;
//	ASOCIACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ASOCIACION";
	$fdata["GoodName"] = "ASOCIACION";
	$fdata["ownerTable"] = "legal";
	$fdata["Label"] = GetFieldLabel("Grafico_legal","ASOCIACION");
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




	$tdataGrafico_legal["ASOCIACION"] = $fdata;
//	OBSERVACIONES
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "OBSERVACIONES";
	$fdata["GoodName"] = "OBSERVACIONES";
	$fdata["ownerTable"] = "legal";
	$fdata["Label"] = GetFieldLabel("Grafico_legal","OBSERVACIONES");
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




	$tdataGrafico_legal["OBSERVACIONES"] = $fdata;
//	AÑO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "AÑO";
	$fdata["GoodName"] = "A_O";
	$fdata["ownerTable"] = "legal";
	$fdata["Label"] = GetFieldLabel("Grafico_legal","A_O");
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




	$tdataGrafico_legal["AÑO"] = $fdata;

	$tdataGrafico_legal[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">Grafico legal</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdataGrafico_legal[".chartXml"] .= '<attr value="0">
			<attr value="name">FINCA_PROPIETARIO_CEDULA</attr>';
	$tdataGrafico_legal[".chartXml"] .= '</attr>';
	$tdataGrafico_legal[".chartXml"] .= '<attr value="1">
		<attr value="name">NOMBRE</attr>
	</attr>';
	$tdataGrafico_legal[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdataGrafico_legal[".chartXml"] .= '<attr value="head">'.xmlencode("legal Chart").'</attr>
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
$tdataGrafico_legal[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdataGrafico_legal[".chartXml"] .= '<attr value="0">
		<attr value="name">ID</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Grafico_legal","ID")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataGrafico_legal[".chartXml"] .= '<attr value="1">
		<attr value="name">FINCA_PROPIETARIO_CEDULA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Grafico_legal","FINCA_PROPIETARIO_CEDULA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataGrafico_legal[".chartXml"] .= '<attr value="2">
		<attr value="name">NOMBRE</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Grafico_legal","NOMBRE")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataGrafico_legal[".chartXml"] .= '<attr value="3">
		<attr value="name">VEREDA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Grafico_legal","VEREDA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataGrafico_legal[".chartXml"] .= '<attr value="4">
		<attr value="name">FINCA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Grafico_legal","FINCA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataGrafico_legal[".chartXml"] .= '<attr value="5">
		<attr value="name">TENECIA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Grafico_legal","TENECIA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataGrafico_legal[".chartXml"] .= '<attr value="6">
		<attr value="name">SOPORTE</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Grafico_legal","SOPORTE")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataGrafico_legal[".chartXml"] .= '<attr value="7">
		<attr value="name">RUAT</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Grafico_legal","RUAT")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataGrafico_legal[".chartXml"] .= '<attr value="8">
		<attr value="name">ASOCIACION</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Grafico_legal","ASOCIACION")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataGrafico_legal[".chartXml"] .= '<attr value="9">
		<attr value="name">OBSERVACIONES</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Grafico_legal","OBSERVACIONES")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataGrafico_legal[".chartXml"] .= '<attr value="10">
		<attr value="name">AÑO</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Grafico_legal","A_O")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdataGrafico_legal[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">Grafico legal</attr>
<attr value="short_table_name">Grafico_legal</attr>
</attr>

</chart>';

$tables_data["Grafico legal"]=&$tdataGrafico_legal;
$field_labels["Grafico_legal"] = &$fieldLabelsGrafico_legal;
$fieldToolTips["Grafico_legal"] = &$fieldToolTipsGrafico_legal;
$page_titles["Grafico_legal"] = &$pageTitlesGrafico_legal;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Grafico legal"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Grafico legal"] = array();


	
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
					$masterTablesData["Grafico legal"][0] = $masterParams;
				$masterTablesData["Grafico legal"][0]["masterKeys"] = array();
	$masterTablesData["Grafico legal"][0]["masterKeys"][]="PROPIETARIO_CEDULA";
				$masterTablesData["Grafico legal"][0]["detailKeys"] = array();
	$masterTablesData["Grafico legal"][0]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Grafico_legal()
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
	"m_srcTableName" => "Grafico legal"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "Grafico legal";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "FINCA_PROPIETARIO_CEDULA",
	"m_strTable" => "legal",
	"m_srcTableName" => "Grafico legal"
));

$proto8["m_sql"] = "FINCA_PROPIETARIO_CEDULA";
$proto8["m_srcTableName"] = "Grafico legal";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBRE",
	"m_strTable" => "legal",
	"m_srcTableName" => "Grafico legal"
));

$proto10["m_sql"] = "NOMBRE";
$proto10["m_srcTableName"] = "Grafico legal";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "VEREDA",
	"m_strTable" => "legal",
	"m_srcTableName" => "Grafico legal"
));

$proto12["m_sql"] = "VEREDA";
$proto12["m_srcTableName"] = "Grafico legal";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "FINCA",
	"m_strTable" => "legal",
	"m_srcTableName" => "Grafico legal"
));

$proto14["m_sql"] = "FINCA";
$proto14["m_srcTableName"] = "Grafico legal";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "TENECIA",
	"m_strTable" => "legal",
	"m_srcTableName" => "Grafico legal"
));

$proto16["m_sql"] = "TENECIA";
$proto16["m_srcTableName"] = "Grafico legal";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "SOPORTE",
	"m_strTable" => "legal",
	"m_srcTableName" => "Grafico legal"
));

$proto18["m_sql"] = "SOPORTE";
$proto18["m_srcTableName"] = "Grafico legal";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "RUAT",
	"m_strTable" => "legal",
	"m_srcTableName" => "Grafico legal"
));

$proto20["m_sql"] = "RUAT";
$proto20["m_srcTableName"] = "Grafico legal";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "ASOCIACION",
	"m_strTable" => "legal",
	"m_srcTableName" => "Grafico legal"
));

$proto22["m_sql"] = "ASOCIACION";
$proto22["m_srcTableName"] = "Grafico legal";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "OBSERVACIONES",
	"m_strTable" => "legal",
	"m_srcTableName" => "Grafico legal"
));

$proto24["m_sql"] = "OBSERVACIONES";
$proto24["m_srcTableName"] = "Grafico legal";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "legal",
	"m_srcTableName" => "Grafico legal"
));

$proto26["m_sql"] = "`AÑO`";
$proto26["m_srcTableName"] = "Grafico legal";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "legal";
$proto29["m_srcTableName"] = "Grafico legal";
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
$proto28["m_srcTableName"] = "Grafico legal";
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
$proto0["m_srcTableName"]="Grafico legal";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Grafico_legal = createSqlQuery_Grafico_legal();


	
		;

											

$tdataGrafico_legal[".sqlquery"] = $queryData_Grafico_legal;

$tableEvents["Grafico legal"] = new eventsBase;
$tdataGrafico_legal[".hasEvents"] = false;

?>