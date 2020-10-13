<?php
require_once(getabspath("classes/cipherer.php"));




$tdataGrafico_inversion = array();
	$tdataGrafico_inversion[".ShortName"] = "Grafico_inversion";
	$tdataGrafico_inversion[".OwnerID"] = "";
	$tdataGrafico_inversion[".OriginalTable"] = "inversion";

//	field labels
$fieldLabelsGrafico_inversion = array();
$fieldToolTipsGrafico_inversion = array();
$pageTitlesGrafico_inversion = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsGrafico_inversion["Spanish"] = array();
	$fieldToolTipsGrafico_inversion["Spanish"] = array();
	$pageTitlesGrafico_inversion["Spanish"] = array();
	$fieldLabelsGrafico_inversion["Spanish"]["ID"] = "ID";
	$fieldToolTipsGrafico_inversion["Spanish"]["ID"] = "";
	$fieldLabelsGrafico_inversion["Spanish"]["FINCA_PROPIETARIO_CEDULA"] = "FINCA PROPIETARIO CEDULA";
	$fieldToolTipsGrafico_inversion["Spanish"]["FINCA_PROPIETARIO_CEDULA"] = "";
	$fieldLabelsGrafico_inversion["Spanish"]["NOMBRE"] = "NOMBRE";
	$fieldToolTipsGrafico_inversion["Spanish"]["NOMBRE"] = "";
	$fieldLabelsGrafico_inversion["Spanish"]["VEREDA"] = "VEREDA";
	$fieldToolTipsGrafico_inversion["Spanish"]["VEREDA"] = "";
	$fieldLabelsGrafico_inversion["Spanish"]["FINCA"] = "FINCA";
	$fieldToolTipsGrafico_inversion["Spanish"]["FINCA"] = "";
	$fieldLabelsGrafico_inversion["Spanish"]["TIPO"] = "TIPO";
	$fieldToolTipsGrafico_inversion["Spanish"]["TIPO"] = "";
	$fieldLabelsGrafico_inversion["Spanish"]["NOMBRE_PROYECTO"] = "NOMBRE PROYECTO";
	$fieldToolTipsGrafico_inversion["Spanish"]["NOMBRE_PROYECTO"] = "";
	$fieldLabelsGrafico_inversion["Spanish"]["OBSERVACIONES"] = "OBSERVACIONES";
	$fieldToolTipsGrafico_inversion["Spanish"]["OBSERVACIONES"] = "";
	$fieldLabelsGrafico_inversion["Spanish"]["A_O"] = "AÑO";
	$fieldToolTipsGrafico_inversion["Spanish"]["A_O"] = "";
	if (count($fieldToolTipsGrafico_inversion["Spanish"]))
		$tdataGrafico_inversion[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsGrafico_inversion[""] = array();
	$fieldToolTipsGrafico_inversion[""] = array();
	$pageTitlesGrafico_inversion[""] = array();
	$fieldLabelsGrafico_inversion[""]["ID"] = "ID";
	$fieldToolTipsGrafico_inversion[""]["ID"] = "";
	$fieldLabelsGrafico_inversion[""]["FINCA_PROPIETARIO_CEDULA"] = "FINCA PROPIETARIO CEDULA";
	$fieldToolTipsGrafico_inversion[""]["FINCA_PROPIETARIO_CEDULA"] = "";
	$fieldLabelsGrafico_inversion[""]["NOMBRE"] = "NOMBRE";
	$fieldToolTipsGrafico_inversion[""]["NOMBRE"] = "";
	$fieldLabelsGrafico_inversion[""]["VEREDA"] = "VEREDA";
	$fieldToolTipsGrafico_inversion[""]["VEREDA"] = "";
	$fieldLabelsGrafico_inversion[""]["FINCA"] = "FINCA";
	$fieldToolTipsGrafico_inversion[""]["FINCA"] = "";
	$fieldLabelsGrafico_inversion[""]["TIPO"] = "TIPO";
	$fieldToolTipsGrafico_inversion[""]["TIPO"] = "";
	$fieldLabelsGrafico_inversion[""]["NOMBRE_PROYECTO"] = "NOMBRE PROYECTO";
	$fieldToolTipsGrafico_inversion[""]["NOMBRE_PROYECTO"] = "";
	$fieldLabelsGrafico_inversion[""]["OBSERVACIONES"] = "OBSERVACIONES";
	$fieldToolTipsGrafico_inversion[""]["OBSERVACIONES"] = "";
	$fieldLabelsGrafico_inversion[""]["A_O"] = "AÑO";
	$fieldToolTipsGrafico_inversion[""]["A_O"] = "";
	if (count($fieldToolTipsGrafico_inversion[""]))
		$tdataGrafico_inversion[".isUseToolTips"] = true;
}


	$tdataGrafico_inversion[".NCSearch"] = true;

	$tdataGrafico_inversion[".ChartRefreshTime"] = 0;


$tdataGrafico_inversion[".shortTableName"] = "Grafico_inversion";
$tdataGrafico_inversion[".nSecOptions"] = 0;
$tdataGrafico_inversion[".recsPerRowPrint"] = 1;
$tdataGrafico_inversion[".mainTableOwnerID"] = "";
$tdataGrafico_inversion[".moveNext"] = 1;
$tdataGrafico_inversion[".entityType"] = 3;

$tdataGrafico_inversion[".strOriginalTableName"] = "inversion";

	



$tdataGrafico_inversion[".showAddInPopup"] = false;

$tdataGrafico_inversion[".showEditInPopup"] = false;

$tdataGrafico_inversion[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataGrafico_inversion[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataGrafico_inversion[".fieldsForRegister"] = array();

$tdataGrafico_inversion[".listAjax"] = false;

	$tdataGrafico_inversion[".audit"] = false;

	$tdataGrafico_inversion[".locking"] = false;

$tdataGrafico_inversion[".edit"] = true;
$tdataGrafico_inversion[".afterEditAction"] = 1;
$tdataGrafico_inversion[".closePopupAfterEdit"] = 1;
$tdataGrafico_inversion[".afterEditActionDetTable"] = "";

$tdataGrafico_inversion[".add"] = true;
$tdataGrafico_inversion[".afterAddAction"] = 1;
$tdataGrafico_inversion[".closePopupAfterAdd"] = 1;
$tdataGrafico_inversion[".afterAddActionDetTable"] = "";

$tdataGrafico_inversion[".list"] = true;

$tdataGrafico_inversion[".view"] = true;




$tdataGrafico_inversion[".delete"] = true;

$tdataGrafico_inversion[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataGrafico_inversion[".searchSaving"] = false;
//

$tdataGrafico_inversion[".showSearchPanel"] = true;
		$tdataGrafico_inversion[".flexibleSearch"] = true;

$tdataGrafico_inversion[".isUseAjaxSuggest"] = true;




$tdataGrafico_inversion[".addPageEvents"] = false;

// use timepicker for search panel
$tdataGrafico_inversion[".isUseTimeForSearch"] = false;



$tdataGrafico_inversion[".badgeColor"] = "EDCA00";


$tdataGrafico_inversion[".allSearchFields"] = array();
$tdataGrafico_inversion[".filterFields"] = array();
$tdataGrafico_inversion[".requiredSearchFields"] = array();

$tdataGrafico_inversion[".allSearchFields"][] = "ID";
	$tdataGrafico_inversion[".allSearchFields"][] = "FINCA_PROPIETARIO_CEDULA";
	$tdataGrafico_inversion[".allSearchFields"][] = "NOMBRE";
	$tdataGrafico_inversion[".allSearchFields"][] = "VEREDA";
	$tdataGrafico_inversion[".allSearchFields"][] = "FINCA";
	$tdataGrafico_inversion[".allSearchFields"][] = "TIPO";
	$tdataGrafico_inversion[".allSearchFields"][] = "NOMBRE_PROYECTO";
	$tdataGrafico_inversion[".allSearchFields"][] = "OBSERVACIONES";
	$tdataGrafico_inversion[".allSearchFields"][] = "AÑO";
	

$tdataGrafico_inversion[".googleLikeFields"] = array();
$tdataGrafico_inversion[".googleLikeFields"][] = "ID";
$tdataGrafico_inversion[".googleLikeFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdataGrafico_inversion[".googleLikeFields"][] = "NOMBRE";
$tdataGrafico_inversion[".googleLikeFields"][] = "VEREDA";
$tdataGrafico_inversion[".googleLikeFields"][] = "FINCA";
$tdataGrafico_inversion[".googleLikeFields"][] = "TIPO";
$tdataGrafico_inversion[".googleLikeFields"][] = "NOMBRE_PROYECTO";
$tdataGrafico_inversion[".googleLikeFields"][] = "OBSERVACIONES";
$tdataGrafico_inversion[".googleLikeFields"][] = "AÑO";


$tdataGrafico_inversion[".advSearchFields"] = array();
$tdataGrafico_inversion[".advSearchFields"][] = "ID";
$tdataGrafico_inversion[".advSearchFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdataGrafico_inversion[".advSearchFields"][] = "NOMBRE";
$tdataGrafico_inversion[".advSearchFields"][] = "VEREDA";
$tdataGrafico_inversion[".advSearchFields"][] = "FINCA";
$tdataGrafico_inversion[".advSearchFields"][] = "TIPO";
$tdataGrafico_inversion[".advSearchFields"][] = "NOMBRE_PROYECTO";
$tdataGrafico_inversion[".advSearchFields"][] = "OBSERVACIONES";
$tdataGrafico_inversion[".advSearchFields"][] = "AÑO";

$tdataGrafico_inversion[".tableType"] = "chart";

$tdataGrafico_inversion[".printerPageOrientation"] = 0;
$tdataGrafico_inversion[".nPrinterPageScale"] = 100;

$tdataGrafico_inversion[".nPrinterSplitRecords"] = 40;

$tdataGrafico_inversion[".nPrinterPDFSplitRecords"] = 40;



$tdataGrafico_inversion[".geocodingEnabled"] = false;



// chart settings
$tdataGrafico_inversion[".chartType"] = "2DColumn";
// end of chart settings


$tdataGrafico_inversion[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataGrafico_inversion[".strOrderBy"] = $tstrOrderBy;

$tdataGrafico_inversion[".orderindexes"] = array();

$tdataGrafico_inversion[".sqlHead"] = "SELECT ID,  	FINCA_PROPIETARIO_CEDULA,  	NOMBRE,  	VEREDA,  	FINCA,  	TIPO,  	NOMBRE_PROYECTO,  	OBSERVACIONES,  	`AÑO`";
$tdataGrafico_inversion[".sqlFrom"] = "FROM inversion";
$tdataGrafico_inversion[".sqlWhereExpr"] = "";
$tdataGrafico_inversion[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataGrafico_inversion[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataGrafico_inversion[".arrGroupsPerPage"] = $arrGPP;

$tdataGrafico_inversion[".highlightSearchResults"] = true;

$tableKeysGrafico_inversion = array();
$tableKeysGrafico_inversion[] = "ID";
$tableKeysGrafico_inversion[] = "FINCA_PROPIETARIO_CEDULA";
$tdataGrafico_inversion[".Keys"] = $tableKeysGrafico_inversion;

$tdataGrafico_inversion[".listFields"] = array();
$tdataGrafico_inversion[".listFields"][] = "ID";
$tdataGrafico_inversion[".listFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdataGrafico_inversion[".listFields"][] = "NOMBRE";
$tdataGrafico_inversion[".listFields"][] = "VEREDA";
$tdataGrafico_inversion[".listFields"][] = "FINCA";
$tdataGrafico_inversion[".listFields"][] = "TIPO";
$tdataGrafico_inversion[".listFields"][] = "NOMBRE_PROYECTO";
$tdataGrafico_inversion[".listFields"][] = "OBSERVACIONES";
$tdataGrafico_inversion[".listFields"][] = "AÑO";

$tdataGrafico_inversion[".hideMobileList"] = array();


$tdataGrafico_inversion[".viewFields"] = array();
$tdataGrafico_inversion[".viewFields"][] = "ID";
$tdataGrafico_inversion[".viewFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdataGrafico_inversion[".viewFields"][] = "NOMBRE";
$tdataGrafico_inversion[".viewFields"][] = "VEREDA";
$tdataGrafico_inversion[".viewFields"][] = "FINCA";
$tdataGrafico_inversion[".viewFields"][] = "TIPO";
$tdataGrafico_inversion[".viewFields"][] = "NOMBRE_PROYECTO";
$tdataGrafico_inversion[".viewFields"][] = "OBSERVACIONES";
$tdataGrafico_inversion[".viewFields"][] = "AÑO";

$tdataGrafico_inversion[".addFields"] = array();
$tdataGrafico_inversion[".addFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdataGrafico_inversion[".addFields"][] = "NOMBRE";
$tdataGrafico_inversion[".addFields"][] = "VEREDA";
$tdataGrafico_inversion[".addFields"][] = "FINCA";
$tdataGrafico_inversion[".addFields"][] = "TIPO";
$tdataGrafico_inversion[".addFields"][] = "NOMBRE_PROYECTO";
$tdataGrafico_inversion[".addFields"][] = "OBSERVACIONES";
$tdataGrafico_inversion[".addFields"][] = "AÑO";

$tdataGrafico_inversion[".masterListFields"] = array();
$tdataGrafico_inversion[".masterListFields"][] = "ID";
$tdataGrafico_inversion[".masterListFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdataGrafico_inversion[".masterListFields"][] = "NOMBRE";
$tdataGrafico_inversion[".masterListFields"][] = "VEREDA";
$tdataGrafico_inversion[".masterListFields"][] = "FINCA";
$tdataGrafico_inversion[".masterListFields"][] = "TIPO";
$tdataGrafico_inversion[".masterListFields"][] = "NOMBRE_PROYECTO";
$tdataGrafico_inversion[".masterListFields"][] = "OBSERVACIONES";
$tdataGrafico_inversion[".masterListFields"][] = "AÑO";

$tdataGrafico_inversion[".inlineAddFields"] = array();
$tdataGrafico_inversion[".inlineAddFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdataGrafico_inversion[".inlineAddFields"][] = "NOMBRE";
$tdataGrafico_inversion[".inlineAddFields"][] = "VEREDA";
$tdataGrafico_inversion[".inlineAddFields"][] = "FINCA";
$tdataGrafico_inversion[".inlineAddFields"][] = "TIPO";
$tdataGrafico_inversion[".inlineAddFields"][] = "NOMBRE_PROYECTO";
$tdataGrafico_inversion[".inlineAddFields"][] = "OBSERVACIONES";
$tdataGrafico_inversion[".inlineAddFields"][] = "AÑO";

$tdataGrafico_inversion[".editFields"] = array();
$tdataGrafico_inversion[".editFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdataGrafico_inversion[".editFields"][] = "NOMBRE";
$tdataGrafico_inversion[".editFields"][] = "VEREDA";
$tdataGrafico_inversion[".editFields"][] = "FINCA";
$tdataGrafico_inversion[".editFields"][] = "TIPO";
$tdataGrafico_inversion[".editFields"][] = "NOMBRE_PROYECTO";
$tdataGrafico_inversion[".editFields"][] = "OBSERVACIONES";
$tdataGrafico_inversion[".editFields"][] = "AÑO";

$tdataGrafico_inversion[".inlineEditFields"] = array();
$tdataGrafico_inversion[".inlineEditFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdataGrafico_inversion[".inlineEditFields"][] = "NOMBRE";
$tdataGrafico_inversion[".inlineEditFields"][] = "VEREDA";
$tdataGrafico_inversion[".inlineEditFields"][] = "FINCA";
$tdataGrafico_inversion[".inlineEditFields"][] = "TIPO";
$tdataGrafico_inversion[".inlineEditFields"][] = "NOMBRE_PROYECTO";
$tdataGrafico_inversion[".inlineEditFields"][] = "OBSERVACIONES";
$tdataGrafico_inversion[".inlineEditFields"][] = "AÑO";

$tdataGrafico_inversion[".exportFields"] = array();
$tdataGrafico_inversion[".exportFields"][] = "ID";
$tdataGrafico_inversion[".exportFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdataGrafico_inversion[".exportFields"][] = "NOMBRE";
$tdataGrafico_inversion[".exportFields"][] = "VEREDA";
$tdataGrafico_inversion[".exportFields"][] = "FINCA";
$tdataGrafico_inversion[".exportFields"][] = "TIPO";
$tdataGrafico_inversion[".exportFields"][] = "NOMBRE_PROYECTO";
$tdataGrafico_inversion[".exportFields"][] = "OBSERVACIONES";
$tdataGrafico_inversion[".exportFields"][] = "AÑO";

$tdataGrafico_inversion[".importFields"] = array();
$tdataGrafico_inversion[".importFields"][] = "ID";
$tdataGrafico_inversion[".importFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdataGrafico_inversion[".importFields"][] = "NOMBRE";
$tdataGrafico_inversion[".importFields"][] = "VEREDA";
$tdataGrafico_inversion[".importFields"][] = "FINCA";
$tdataGrafico_inversion[".importFields"][] = "TIPO";
$tdataGrafico_inversion[".importFields"][] = "NOMBRE_PROYECTO";
$tdataGrafico_inversion[".importFields"][] = "OBSERVACIONES";
$tdataGrafico_inversion[".importFields"][] = "AÑO";

$tdataGrafico_inversion[".printFields"] = array();
$tdataGrafico_inversion[".printFields"][] = "ID";
$tdataGrafico_inversion[".printFields"][] = "FINCA_PROPIETARIO_CEDULA";
$tdataGrafico_inversion[".printFields"][] = "NOMBRE";
$tdataGrafico_inversion[".printFields"][] = "VEREDA";
$tdataGrafico_inversion[".printFields"][] = "FINCA";
$tdataGrafico_inversion[".printFields"][] = "TIPO";
$tdataGrafico_inversion[".printFields"][] = "NOMBRE_PROYECTO";
$tdataGrafico_inversion[".printFields"][] = "OBSERVACIONES";
$tdataGrafico_inversion[".printFields"][] = "AÑO";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "inversion";
	$fdata["Label"] = GetFieldLabel("Grafico_inversion","ID");
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




	$tdataGrafico_inversion["ID"] = $fdata;
//	FINCA_PROPIETARIO_CEDULA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FINCA_PROPIETARIO_CEDULA";
	$fdata["GoodName"] = "FINCA_PROPIETARIO_CEDULA";
	$fdata["ownerTable"] = "inversion";
	$fdata["Label"] = GetFieldLabel("Grafico_inversion","FINCA_PROPIETARIO_CEDULA");
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




	$tdataGrafico_inversion["FINCA_PROPIETARIO_CEDULA"] = $fdata;
//	NOMBRE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "NOMBRE";
	$fdata["GoodName"] = "NOMBRE";
	$fdata["ownerTable"] = "inversion";
	$fdata["Label"] = GetFieldLabel("Grafico_inversion","NOMBRE");
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




	$tdataGrafico_inversion["NOMBRE"] = $fdata;
//	VEREDA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "VEREDA";
	$fdata["GoodName"] = "VEREDA";
	$fdata["ownerTable"] = "inversion";
	$fdata["Label"] = GetFieldLabel("Grafico_inversion","VEREDA");
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




	$tdataGrafico_inversion["VEREDA"] = $fdata;
//	FINCA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "FINCA";
	$fdata["GoodName"] = "FINCA";
	$fdata["ownerTable"] = "inversion";
	$fdata["Label"] = GetFieldLabel("Grafico_inversion","FINCA");
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




	$tdataGrafico_inversion["FINCA"] = $fdata;
//	TIPO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "TIPO";
	$fdata["GoodName"] = "TIPO";
	$fdata["ownerTable"] = "inversion";
	$fdata["Label"] = GetFieldLabel("Grafico_inversion","TIPO");
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




	$tdataGrafico_inversion["TIPO"] = $fdata;
//	NOMBRE_PROYECTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "NOMBRE_PROYECTO";
	$fdata["GoodName"] = "NOMBRE_PROYECTO";
	$fdata["ownerTable"] = "inversion";
	$fdata["Label"] = GetFieldLabel("Grafico_inversion","NOMBRE_PROYECTO");
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




	$tdataGrafico_inversion["NOMBRE_PROYECTO"] = $fdata;
//	OBSERVACIONES
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "OBSERVACIONES";
	$fdata["GoodName"] = "OBSERVACIONES";
	$fdata["ownerTable"] = "inversion";
	$fdata["Label"] = GetFieldLabel("Grafico_inversion","OBSERVACIONES");
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




	$tdataGrafico_inversion["OBSERVACIONES"] = $fdata;
//	AÑO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "AÑO";
	$fdata["GoodName"] = "A_O";
	$fdata["ownerTable"] = "inversion";
	$fdata["Label"] = GetFieldLabel("Grafico_inversion","A_O");
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




	$tdataGrafico_inversion["AÑO"] = $fdata;

	$tdataGrafico_inversion[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">Grafico inversion</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdataGrafico_inversion[".chartXml"] .= '<attr value="0">
			<attr value="name">FINCA_PROPIETARIO_CEDULA</attr>';
	$tdataGrafico_inversion[".chartXml"] .= '</attr>';
	$tdataGrafico_inversion[".chartXml"] .= '<attr value="1">
		<attr value="name">NOMBRE</attr>
	</attr>';
	$tdataGrafico_inversion[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdataGrafico_inversion[".chartXml"] .= '<attr value="head">'.xmlencode("inversion Chart").'</attr>
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
$tdataGrafico_inversion[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdataGrafico_inversion[".chartXml"] .= '<attr value="0">
		<attr value="name">ID</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Grafico_inversion","ID")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataGrafico_inversion[".chartXml"] .= '<attr value="1">
		<attr value="name">FINCA_PROPIETARIO_CEDULA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Grafico_inversion","FINCA_PROPIETARIO_CEDULA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataGrafico_inversion[".chartXml"] .= '<attr value="2">
		<attr value="name">NOMBRE</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Grafico_inversion","NOMBRE")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataGrafico_inversion[".chartXml"] .= '<attr value="3">
		<attr value="name">VEREDA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Grafico_inversion","VEREDA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataGrafico_inversion[".chartXml"] .= '<attr value="4">
		<attr value="name">FINCA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Grafico_inversion","FINCA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataGrafico_inversion[".chartXml"] .= '<attr value="5">
		<attr value="name">TIPO</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Grafico_inversion","TIPO")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataGrafico_inversion[".chartXml"] .= '<attr value="6">
		<attr value="name">NOMBRE_PROYECTO</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Grafico_inversion","NOMBRE_PROYECTO")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataGrafico_inversion[".chartXml"] .= '<attr value="7">
		<attr value="name">OBSERVACIONES</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Grafico_inversion","OBSERVACIONES")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataGrafico_inversion[".chartXml"] .= '<attr value="8">
		<attr value="name">AÑO</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Grafico_inversion","A_O")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdataGrafico_inversion[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">Grafico inversion</attr>
<attr value="short_table_name">Grafico_inversion</attr>
</attr>

</chart>';

$tables_data["Grafico inversion"]=&$tdataGrafico_inversion;
$field_labels["Grafico_inversion"] = &$fieldLabelsGrafico_inversion;
$fieldToolTips["Grafico_inversion"] = &$fieldToolTipsGrafico_inversion;
$page_titles["Grafico_inversion"] = &$pageTitlesGrafico_inversion;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Grafico inversion"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Grafico inversion"] = array();


	
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
					$masterTablesData["Grafico inversion"][0] = $masterParams;
				$masterTablesData["Grafico inversion"][0]["masterKeys"] = array();
	$masterTablesData["Grafico inversion"][0]["masterKeys"][]="PROPIETARIO_CEDULA";
				$masterTablesData["Grafico inversion"][0]["detailKeys"] = array();
	$masterTablesData["Grafico inversion"][0]["detailKeys"][]="FINCA_PROPIETARIO_CEDULA";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Grafico_inversion()
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
	"m_srcTableName" => "Grafico inversion"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "Grafico inversion";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "FINCA_PROPIETARIO_CEDULA",
	"m_strTable" => "inversion",
	"m_srcTableName" => "Grafico inversion"
));

$proto8["m_sql"] = "FINCA_PROPIETARIO_CEDULA";
$proto8["m_srcTableName"] = "Grafico inversion";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBRE",
	"m_strTable" => "inversion",
	"m_srcTableName" => "Grafico inversion"
));

$proto10["m_sql"] = "NOMBRE";
$proto10["m_srcTableName"] = "Grafico inversion";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "VEREDA",
	"m_strTable" => "inversion",
	"m_srcTableName" => "Grafico inversion"
));

$proto12["m_sql"] = "VEREDA";
$proto12["m_srcTableName"] = "Grafico inversion";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "FINCA",
	"m_strTable" => "inversion",
	"m_srcTableName" => "Grafico inversion"
));

$proto14["m_sql"] = "FINCA";
$proto14["m_srcTableName"] = "Grafico inversion";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "TIPO",
	"m_strTable" => "inversion",
	"m_srcTableName" => "Grafico inversion"
));

$proto16["m_sql"] = "TIPO";
$proto16["m_srcTableName"] = "Grafico inversion";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBRE_PROYECTO",
	"m_strTable" => "inversion",
	"m_srcTableName" => "Grafico inversion"
));

$proto18["m_sql"] = "NOMBRE_PROYECTO";
$proto18["m_srcTableName"] = "Grafico inversion";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "OBSERVACIONES",
	"m_strTable" => "inversion",
	"m_srcTableName" => "Grafico inversion"
));

$proto20["m_sql"] = "OBSERVACIONES";
$proto20["m_srcTableName"] = "Grafico inversion";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "AÑO",
	"m_strTable" => "inversion",
	"m_srcTableName" => "Grafico inversion"
));

$proto22["m_sql"] = "`AÑO`";
$proto22["m_srcTableName"] = "Grafico inversion";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "inversion";
$proto25["m_srcTableName"] = "Grafico inversion";
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
$proto24["m_srcTableName"] = "Grafico inversion";
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
$proto0["m_srcTableName"]="Grafico inversion";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Grafico_inversion = createSqlQuery_Grafico_inversion();


	
		;

									

$tdataGrafico_inversion[".sqlquery"] = $queryData_Grafico_inversion;

$tableEvents["Grafico inversion"] = new eventsBase;
$tdataGrafico_inversion[".hasEvents"] = false;

?>