<?php
require_once (getabspath ( "classes/cipherer.php" ));

$tdataWorkload = array ();
$tdataWorkload [".ShortName"] = "Workload";
$tdataWorkload [".OwnerID"] = "";
$tdataWorkload [".OriginalTable"] = "customerallocation";

// field labels
$fieldLabelsWorkload = array ();
$fieldToolTipsWorkload = array ();
$pageTitlesWorkload = array ();

if (mlang_getcurrentlang () == "English") {
	$fieldLabelsWorkload ["English"] = array ();
	$fieldToolTipsWorkload ["English"] = array ();
	$pageTitlesWorkload ["English"] = array ();
	$fieldLabelsWorkload ["English"] ["AutCustID"] = "Aut Cust ID";
	$fieldToolTipsWorkload ["English"] ["AutCustID"] = "";
	$fieldLabelsWorkload ["English"] ["RSAName"] = "Recource";
	$fieldToolTipsWorkload ["English"] ["RSAName"] = "";
	$fieldLabelsWorkload ["English"] ["Supervisor"] = "Manager";
	$fieldToolTipsWorkload ["English"] ["Supervisor"] = "";
	$fieldLabelsWorkload ["English"] ["StartDate"] = "Start Date";
	$fieldToolTipsWorkload ["English"] ["StartDate"] = "";
	$fieldLabelsWorkload ["English"] ["EndDate"] = "End Date";
	$fieldToolTipsWorkload ["English"] ["EndDate"] = "";
	$fieldLabelsWorkload ["English"] ["COUNT_Allocation_"] = "# of Active Allocation";
	$fieldToolTipsWorkload ["English"] ["COUNT(Allocation)"] = "";
	$fieldLabelsWorkload ["English"] ["PercentValue"] = "Total Active Allocation %";
	$fieldToolTipsWorkload ["English"] ["PercentValue"] = "";
	if (count ( $fieldToolTipsWorkload ["English"] ))
		$tdataWorkload [".isUseToolTips"] = true;
}
if (mlang_getcurrentlang () == "") {
	$fieldLabelsWorkload [""] = array ();
	$fieldToolTipsWorkload [""] = array ();
	$pageTitlesWorkload [""] = array ();
	$fieldLabelsWorkload [""] ["AutCustID"] = "Aut Cust ID";
	$fieldToolTipsWorkload [""] ["AutCustID"] = "";
	$fieldLabelsWorkload [""] ["RSAName"] = "RSAName";
	$fieldToolTipsWorkload [""] ["RSAName"] = "";
	$fieldLabelsWorkload [""] ["Supervisor"] = "Supervisor";
	$fieldToolTipsWorkload [""] ["Supervisor"] = "";
	$fieldLabelsWorkload [""] ["StartDate"] = "Start Date";
	$fieldToolTipsWorkload [""] ["StartDate"] = "";
	$fieldLabelsWorkload [""] ["EndDate"] = "End Date";
	$fieldToolTipsWorkload [""] ["EndDate"] = "";
	$fieldLabelsWorkload [""] ["COUNT_Allocation_"] = "COUNT(Allocation)";
	$fieldToolTipsWorkload [""] ["COUNT(Allocation)"] = "";
	$fieldLabelsWorkload [""] ["PercentValue"] = "Percent Value";
	$fieldToolTipsWorkload [""] ["PercentValue"] = "";
	if (count ( $fieldToolTipsWorkload [""] ))
		$tdataWorkload [".isUseToolTips"] = true;
}

$tdataWorkload [".NCSearch"] = true;

$tdataWorkload [".ChartRefreshTime"] = 0;

$tdataWorkload [".shortTableName"] = "Workload";
$tdataWorkload [".nSecOptions"] = 0;
$tdataWorkload [".recsPerRowList"] = 1;
$tdataWorkload [".mainTableOwnerID"] = "";
$tdataWorkload [".moveNext"] = 1;
$tdataWorkload [".nType"] = 3;

$tdataWorkload [".strOriginalTableName"] = "customerallocation";

$tdataWorkload [".showAddInPopup"] = false;

$tdataWorkload [".showEditInPopup"] = false;

$tdataWorkload [".showViewInPopup"] = false;

// page's base css files names
$popupPagesLayoutNames = array ();
$tdataWorkload [".popupPagesLayoutNames"] = $popupPagesLayoutNames;

$tdataWorkload [".fieldsForRegister"] = array ();

$tdataWorkload [".listAjax"] = false;

$tdataWorkload [".audit"] = false;

$tdataWorkload [".locking"] = false;

$tdataWorkload [".edit"] = true;

$tdataWorkload [".list"] = true;

$tdataWorkload [".inlineEdit"] = true;
$tdataWorkload [".inlineAdd"] = true;
$tdataWorkload [".view"] = true;

$tdataWorkload [".delete"] = true;

$tdataWorkload [".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataWorkload [".searchSaving"] = false;
//

$tdataWorkload [".showSearchPanel"] = true;
$tdataWorkload [".flexibleSearch"] = true;

if (isMobile ())
	$tdataWorkload [".isUseAjaxSuggest"] = false;
else
	$tdataWorkload [".isUseAjaxSuggest"] = true;

$tdataWorkload [".addPageEvents"] = false;

// use timepicker for search panel
$tdataWorkload [".isUseTimeForSearch"] = false;

$tdataWorkload [".useDetailsPreview"] = true;

$tdataWorkload [".allSearchFields"] = array ();
$tdataWorkload [".filterFields"] = array ();
$tdataWorkload [".requiredSearchFields"] = array ();

$tdataWorkload [".allSearchFields"] [] = "Supervisor";

$tdataWorkload [".advSearchFields"] = array ();
$tdataWorkload [".advSearchFields"] [] = "Supervisor";

$tdataWorkload [".tableType"] = "chart";

$tdataWorkload [".printerPageOrientation"] = 0;
$tdataWorkload [".nPrinterPageScale"] = 100;

$tdataWorkload [".nPrinterSplitRecords"] = 40;

$tdataWorkload [".nPrinterPDFSplitRecords"] = 40;

// chart settings
$tdataWorkload [".chartType"] = "2DColumn";
// end of chart settings

// view page pdf

// print page pdf

$tstrOrderBy = "";
if (strlen ( $tstrOrderBy ) && strtolower ( substr ( $tstrOrderBy, 0, 8 ) ) != "order by")
	$tstrOrderBy = "order by " . $tstrOrderBy;
$tdataWorkload [".strOrderBy"] = $tstrOrderBy;

$tdataWorkload [".orderindexes"] = array ();

$tdataWorkload [".sqlHead"] = "Select RSAName,  Supervisor,  COUNT(Allocation) AS `COUNT(Allocation)`,  AutCustID,  StartDate,  EndDate,  SUM(Allocation)*100 AS PercentValue";
$tdataWorkload [".sqlFrom"] = "FROM customerallocation";
$tdataWorkload [".sqlWhereExpr"] = "(StartDate <Now()) AND (EndDate >Now())";
$tdataWorkload [".sqlTail"] = "GROUP BY RSAName";

// fill array of records per page for list and report without group fields
$arrRPP = array ();
$arrRPP [] = 10;
$arrRPP [] = 20;
$arrRPP [] = 30;
$arrRPP [] = 50;
$arrRPP [] = 100;
$arrRPP [] = 500;
$arrRPP [] = - 1;
$tdataWorkload [".arrRecsPerPage"] = $arrRPP;

// fill array of groups per page for report with group fields
$arrGPP = array ();
$arrGPP [] = 1;
$arrGPP [] = 3;
$arrGPP [] = 5;
$arrGPP [] = 10;
$arrGPP [] = 50;
$arrGPP [] = 100;
$arrGPP [] = - 1;
$tdataWorkload [".arrGroupsPerPage"] = $arrGPP;

$tdataWorkload [".highlightSearchResults"] = true;

$tableKeysWorkload = array ();
$tableKeysWorkload [] = "AutCustID";
$tdataWorkload [".Keys"] = $tableKeysWorkload;

$tdataWorkload [".listFields"] = array ();
$tdataWorkload [".listFields"] [] = "RSAName";
$tdataWorkload [".listFields"] [] = "Supervisor";
$tdataWorkload [".listFields"] [] = "COUNT(Allocation)";
$tdataWorkload [".listFields"] [] = "AutCustID";
$tdataWorkload [".listFields"] [] = "StartDate";
$tdataWorkload [".listFields"] [] = "EndDate";
$tdataWorkload [".listFields"] [] = "PercentValue";

$tdataWorkload [".hideMobileList"] = array ();

$tdataWorkload [".viewFields"] = array ();
$tdataWorkload [".viewFields"] [] = "RSAName";
$tdataWorkload [".viewFields"] [] = "Supervisor";
$tdataWorkload [".viewFields"] [] = "COUNT(Allocation)";
$tdataWorkload [".viewFields"] [] = "AutCustID";
$tdataWorkload [".viewFields"] [] = "StartDate";
$tdataWorkload [".viewFields"] [] = "EndDate";
$tdataWorkload [".viewFields"] [] = "PercentValue";

$tdataWorkload [".addFields"] = array ();
$tdataWorkload [".addFields"] [] = "RSAName";
$tdataWorkload [".addFields"] [] = "Supervisor";
$tdataWorkload [".addFields"] [] = "StartDate";
$tdataWorkload [".addFields"] [] = "EndDate";

$tdataWorkload [".inlineAddFields"] = array ();
$tdataWorkload [".inlineAddFields"] [] = "RSAName";
$tdataWorkload [".inlineAddFields"] [] = "Supervisor";
$tdataWorkload [".inlineAddFields"] [] = "StartDate";
$tdataWorkload [".inlineAddFields"] [] = "EndDate";

$tdataWorkload [".editFields"] = array ();
$tdataWorkload [".editFields"] [] = "RSAName";
$tdataWorkload [".editFields"] [] = "Supervisor";
$tdataWorkload [".editFields"] [] = "StartDate";
$tdataWorkload [".editFields"] [] = "EndDate";

$tdataWorkload [".inlineEditFields"] = array ();
$tdataWorkload [".inlineEditFields"] [] = "RSAName";
$tdataWorkload [".inlineEditFields"] [] = "Supervisor";
$tdataWorkload [".inlineEditFields"] [] = "StartDate";
$tdataWorkload [".inlineEditFields"] [] = "EndDate";

$tdataWorkload [".exportFields"] = array ();
$tdataWorkload [".exportFields"] [] = "RSAName";
$tdataWorkload [".exportFields"] [] = "Supervisor";
$tdataWorkload [".exportFields"] [] = "COUNT(Allocation)";
$tdataWorkload [".exportFields"] [] = "AutCustID";
$tdataWorkload [".exportFields"] [] = "StartDate";
$tdataWorkload [".exportFields"] [] = "EndDate";
$tdataWorkload [".exportFields"] [] = "PercentValue";

$tdataWorkload [".importFields"] = array ();
$tdataWorkload [".importFields"] [] = "RSAName";
$tdataWorkload [".importFields"] [] = "Supervisor";
$tdataWorkload [".importFields"] [] = "COUNT(Allocation)";
$tdataWorkload [".importFields"] [] = "AutCustID";
$tdataWorkload [".importFields"] [] = "StartDate";
$tdataWorkload [".importFields"] [] = "EndDate";
$tdataWorkload [".importFields"] [] = "PercentValue";

$tdataWorkload [".printFields"] = array ();
$tdataWorkload [".printFields"] [] = "RSAName";
$tdataWorkload [".printFields"] [] = "Supervisor";
$tdataWorkload [".printFields"] [] = "COUNT(Allocation)";
$tdataWorkload [".printFields"] [] = "AutCustID";
$tdataWorkload [".printFields"] [] = "StartDate";
$tdataWorkload [".printFields"] [] = "EndDate";
$tdataWorkload [".printFields"] [] = "PercentValue";

// RSAName
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 1;
$fdata ["strName"] = "RSAName";
$fdata ["GoodName"] = "RSAName";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "Workload", "RSAName" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "RSAName";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "RSAName";

$fdata ["UploadFolder"] = "files";

// Begin View Formats
$fdata ["ViewFormats"] = array ();

$vdata = array (
		"ViewFormat" => "" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["chart"] = $vdata;
$vdata = array (
		"ViewFormat" => "" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["print"] = $vdata;
// End View Formats

// Begin Edit Formats
$fdata ["EditFormats"] = array ();

$edata = array (
		"EditFormat" => "Text field" 
);

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["HTML5InuptType"] = "text";

$edata ["EditParams"] = "";
$edata ["EditParams"] .= " maxlength=50";

$edata ["controlWidth"] = 200;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

// End validation

$fdata ["EditFormats"] ["register"] = $edata;
$edata = array (
		"EditFormat" => "Lookup wizard" 
);

// Begin Lookup settings
$edata ["LookupType"] = 2;
$edata ["LookupTable"] = "employee_header";
$edata ["autoCompleteFieldsOnEdit"] = 1;
$edata ["autoCompleteFields"] = array ();
$edata ["LCType"] = 0;

$edata ["LinkField"] = "FullName";
$edata ["LinkFieldType"] = 3;
$edata ["DisplayField"] = "FullName";

$edata ["LookupOrderBy"] = "FullName";

$edata ["SelectSize"] = 1;

// End Lookup Settings

$edata ["IsRequired"] = true;

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 130;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = "IsRequired";

// End validation

$fdata ["EditFormats"] ["search"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = true;

$tdataWorkload ["RSAName"] = $fdata;
// Supervisor
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 2;
$fdata ["strName"] = "Supervisor";
$fdata ["GoodName"] = "Supervisor";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "Workload", "Supervisor" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Supervisor";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Supervisor";

$fdata ["FieldPermissions"] = true;

$fdata ["UploadFolder"] = "files";

// Begin View Formats
$fdata ["ViewFormats"] = array ();

$vdata = array (
		"ViewFormat" => "" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["chart"] = $vdata;
// End View Formats

// Begin Edit Formats
$fdata ["EditFormats"] = array ();

$edata = array (
		"EditFormat" => "Lookup wizard" 
);

// Begin Lookup settings
$edata ["LookupType"] = 2;
$edata ["LookupTable"] = "tbl_director";
$edata ["autoCompleteFieldsOnEdit"] = 0;
$edata ["autoCompleteFields"] = array ();
$edata ["LCType"] = 0;

$edata ["LinkField"] = "SupervisorID";
$edata ["LinkFieldType"] = 3;
$edata ["DisplayField"] = "FullName";

$edata ["LookupOrderBy"] = "FullName";

$edata ["SelectSize"] = 1;

// End Lookup Settings

$edata ["IsRequired"] = true;

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 130;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = "IsRequired";

// End validation

$fdata ["EditFormats"] ["search"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = false;

// the field's search options settings

// the user's search options list
$fdata ["searchOptionsList"] = array ();
$fdata ["searchOptionsList"] [] = "Equals";
// the end of search options settings

$tdataWorkload ["Supervisor"] = $fdata;
// COUNT(Allocation)
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 3;
$fdata ["strName"] = "COUNT(Allocation)";
$fdata ["GoodName"] = "COUNT_Allocation_";
$fdata ["ownerTable"] = "";
$fdata ["Label"] = GetFieldLabel ( "Workload", "COUNT_Allocation_" );
$fdata ["FieldType"] = 3;

$fdata ["bListPage"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "COUNT(Allocation)";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "COUNT(Allocation)";

$fdata ["UploadFolder"] = "files";

// Begin View Formats
$fdata ["ViewFormats"] = array ();

$vdata = array (
		"ViewFormat" => "" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["chart"] = $vdata;
// End View Formats

// Begin Edit Formats
$fdata ["EditFormats"] = array ();

$edata = array (
		"EditFormat" => "Text field" 
);

$edata ["IsRequired"] = true;

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["HTML5InuptType"] = "number";

$edata ["EditParams"] = "";

$edata ["controlWidth"] = 200;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = getJsValidatorName ( "Number" );
$edata ["validateAs"] ["basicValidate"] [] = "IsRequired";

// End validation

$fdata ["EditFormats"] ["search"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = false;

$tdataWorkload ["COUNT(Allocation)"] = $fdata;
// AutCustID
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 4;
$fdata ["strName"] = "AutCustID";
$fdata ["GoodName"] = "AutCustID";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "Workload", "AutCustID" );
$fdata ["FieldType"] = 3;

$fdata ["AutoInc"] = true;

$fdata ["bListPage"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "AutCustID";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "AutCustID";

$fdata ["UploadFolder"] = "files";

// Begin View Formats
$fdata ["ViewFormats"] = array ();

$vdata = array (
		"ViewFormat" => "" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["chart"] = $vdata;
// End View Formats

// Begin Edit Formats
$fdata ["EditFormats"] = array ();

$edata = array (
		"EditFormat" => "Text field" 
);

$edata ["IsRequired"] = true;

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["HTML5InuptType"] = "text";

$edata ["EditParams"] = "";

$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = getJsValidatorName ( "Number" );
$edata ["validateAs"] ["basicValidate"] [] = "IsRequired";

// End validation

$fdata ["EditFormats"] ["search"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = false;

$tdataWorkload ["AutCustID"] = $fdata;
// StartDate
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 5;
$fdata ["strName"] = "StartDate";
$fdata ["GoodName"] = "StartDate";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "Workload", "StartDate" );
$fdata ["FieldType"] = 7;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "StartDate";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "StartDate";

$fdata ["UploadFolder"] = "files";

// Begin View Formats
$fdata ["ViewFormats"] = array ();

$vdata = array (
		"ViewFormat" => "Short Date" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["chart"] = $vdata;
$vdata = array (
		"ViewFormat" => "Short Date" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["print"] = $vdata;
// End View Formats

// Begin Edit Formats
$fdata ["EditFormats"] = array ();

$edata = array (
		"EditFormat" => "Date" 
);

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["DateEditType"] = 13;
$edata ["InitialYearFactor"] = 100;
$edata ["LastYearFactor"] = 10;

$edata ["controlWidth"] = 200;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

// End validation

$fdata ["EditFormats"] ["register"] = $edata;
$edata = array (
		"EditFormat" => "Date" 
);

$edata ["IsRequired"] = true;

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["DateEditType"] = 11;
$edata ["InitialYearFactor"] = 100;
$edata ["LastYearFactor"] = 10;

$edata ["controlWidth"] = 110;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = "IsRequired";

// End validation

$fdata ["EditFormats"] ["search"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = true;

$tdataWorkload ["StartDate"] = $fdata;
// EndDate
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 6;
$fdata ["strName"] = "EndDate";
$fdata ["GoodName"] = "EndDate";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "Workload", "EndDate" );
$fdata ["FieldType"] = 7;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "EndDate";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "EndDate";

$fdata ["UploadFolder"] = "files";

// Begin View Formats
$fdata ["ViewFormats"] = array ();

$vdata = array (
		"ViewFormat" => "Short Date" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["chart"] = $vdata;
$vdata = array (
		"ViewFormat" => "Short Date" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["print"] = $vdata;
// End View Formats

// Begin Edit Formats
$fdata ["EditFormats"] = array ();

$edata = array (
		"EditFormat" => "Date" 
);

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["DateEditType"] = 13;
$edata ["InitialYearFactor"] = 100;
$edata ["LastYearFactor"] = 10;

$edata ["controlWidth"] = 200;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

// End validation

$fdata ["EditFormats"] ["register"] = $edata;
$edata = array (
		"EditFormat" => "Date" 
);

$edata ["IsRequired"] = true;

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["DateEditType"] = 11;
$edata ["InitialYearFactor"] = 100;
$edata ["LastYearFactor"] = 10;

$edata ["controlWidth"] = 80;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = "IsRequired";

// End validation

$fdata ["EditFormats"] ["search"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = true;

$tdataWorkload ["EndDate"] = $fdata;
// PercentValue
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 7;
$fdata ["strName"] = "PercentValue";
$fdata ["GoodName"] = "PercentValue";
$fdata ["ownerTable"] = "";
$fdata ["Label"] = GetFieldLabel ( "Workload", "PercentValue" );
$fdata ["FieldType"] = 5;

$fdata ["bListPage"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "percentValue";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "SUM(Allocation)*100";

$fdata ["UploadFolder"] = "files";

// Begin View Formats
$fdata ["ViewFormats"] = array ();

$vdata = array (
		"ViewFormat" => "Number" 
);

$vdata ["DecimalDigits"] = 0;

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["chart"] = $vdata;
// End View Formats

// Begin Edit Formats
$fdata ["EditFormats"] = array ();

$edata = array (
		"EditFormat" => "Text field" 
);

$edata ["IsRequired"] = true;

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["HTML5InuptType"] = "number";

$edata ["EditParams"] = "";

$edata ["controlWidth"] = 200;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = getJsValidatorName ( "Number" );
$edata ["validateAs"] ["basicValidate"] [] = "IsRequired";

// End validation

$fdata ["EditFormats"] ["search"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = false;

$tdataWorkload ["PercentValue"] = $fdata;

$tdataWorkload [".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">Workload</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>
		
		<attr value="parameters">';
$tdataWorkload [".chartXml"] .= '<attr value="0">
			<attr value="name">PercentValue</attr>
			<attr value="currencyFormat">0</attr>
			<attr value="decimalFormat">0</attr>
			<attr value="customFormat">1</attr>
			<attr value="customFormatStr">{%Value}%</attr>';
$tdataWorkload [".chartXml"] .= '</attr>';
$tdataWorkload [".chartXml"] .= '<attr value="1">
			<attr value="name">COUNT(Allocation)</attr>
			<attr value="currencyFormat">0</attr>
			<attr value="decimalFormat">0</attr>
			<attr value="customFormat">0</attr>
			<attr value="customFormatStr"></attr>';
$tdataWorkload [".chartXml"] .= '</attr>';
$tdataWorkload [".chartXml"] .= '<attr value="2">
		<attr value="name">RSAName</attr>
	</attr>';
$tdataWorkload [".chartXml"] .= '</attr>
			<attr value="appearance">';
$tdataWorkload [".chartXml"] .= '<attr value="scolor11">0000FF</attr>
			<attr value="scolor12">0000FF</attr>';
$tdataWorkload [".chartXml"] .= '<attr value="scolor21">666666</attr>
			<attr value="scolor22">666666</attr>';

$tdataWorkload [".chartXml"] .= '<attr value="head">' . xmlencode ( "Recource Allocation Work load" ) . '</attr>
<attr value="foot">' . xmlencode ( "Legend Title" ) . '</attr>
<attr value="y_axis_label">' . xmlencode ( "Total Active Allocation/# of Active Allocation" ) . '</attr>

<attr value="color51">49563A</attr>
<attr value="color52">49563A</attr>
<attr value="color61">49563A</attr>
<attr value="color62">49563A</attr>
<attr value="color71">C7CDC1</attr>
<attr value="color72">C7CDC1</attr>
<attr value="color81">ECF0E8</attr>
<attr value="color82">ECF0E8</attr>
<attr value="color91">68838B</attr>
<attr value="color92">68838B</attr>
<attr value="color101">48505A</attr>
<attr value="color102">48505A</attr>
<attr value="color111">45595F</attr>
<attr value="color112">45595F</attr>
<attr value="color121"></attr>
<attr value="color122"></attr>
<attr value="color131">000000</attr>
<attr value="color132">000000</attr>
<attr value="color141">000000</attr>
<attr value="color142">000000</attr>

<attr value="slegend">true</attr>
<attr value="sgrid">true</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="saxes">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">1</attr>
<attr value="isstacked">1</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>
<attr value="cscroll">true</attr>
<attr value="maxbarscroll">25</attr>';
$tdataWorkload [".chartXml"] .= '</attr>

<attr value="fields">';
$tdataWorkload [".chartXml"] .= '<attr value="0">
		<attr value="name">RSAName</attr>
		<attr value="label">' . xmlencode ( GetFieldLabel ( "Workload", "RSAName" ) ) . '</attr>
		<attr value="search"></attr>
	</attr>';
$tdataWorkload [".chartXml"] .= '<attr value="1">
		<attr value="name">Supervisor</attr>
		<attr value="label">' . xmlencode ( GetFieldLabel ( "Workload", "Supervisor" ) ) . '</attr>
		<attr value="search"></attr>
	</attr>';
$tdataWorkload [".chartXml"] .= '<attr value="2">
		<attr value="name">COUNT(Allocation)</attr>
		<attr value="label">' . xmlencode ( GetFieldLabel ( "Workload", "COUNT_Allocation_" ) ) . '</attr>
		<attr value="search"></attr>
	</attr>';
$tdataWorkload [".chartXml"] .= '<attr value="3">
		<attr value="name">AutCustID</attr>
		<attr value="label">' . xmlencode ( GetFieldLabel ( "Workload", "AutCustID" ) ) . '</attr>
		<attr value="search"></attr>
	</attr>';
$tdataWorkload [".chartXml"] .= '<attr value="4">
		<attr value="name">StartDate</attr>
		<attr value="label">' . xmlencode ( GetFieldLabel ( "Workload", "StartDate" ) ) . '</attr>
		<attr value="search"></attr>
	</attr>';
$tdataWorkload [".chartXml"] .= '<attr value="5">
		<attr value="name">EndDate</attr>
		<attr value="label">' . xmlencode ( GetFieldLabel ( "Workload", "EndDate" ) ) . '</attr>
		<attr value="search"></attr>
	</attr>';
$tdataWorkload [".chartXml"] .= '<attr value="6">
		<attr value="name">PercentValue</attr>
		<attr value="label">' . xmlencode ( GetFieldLabel ( "Workload", "PercentValue" ) ) . '</attr>
		<attr value="search"></attr>
	</attr>';
$tdataWorkload [".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">Workload</attr>
<attr value="short_table_name">Workload</attr>
</attr>

</chart>';

$tables_data ["Workload"] = &$tdataWorkload;
$field_labels ["Workload"] = &$fieldLabelsWorkload;
$fieldToolTips ["Workload"] = &$fieldToolTipsWorkload;
$page_titles ["Workload"] = &$pageTitlesWorkload;

// -----------------start prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData ["Workload"] = array ();
// customerallocation

$dIndex = 0;
$detailsParam = array ();
$detailsParam ["dDataSourceTable"] = "customerallocation";
$detailsParam ["dOriginalTable"] = "customerallocation";
$detailsParam ["dType"] = PAGE_LIST;
$detailsParam ["dShortTable"] = "customerallocation";
$detailsParam ["dCaptionTable"] = GetTableCaption ( "customerallocation" );
$detailsParam ["masterKeys"] = array ();
$detailsParam ["detailKeys"] = array ();
$detailsParam ["dispChildCount"] = "1";
$detailsParam ["hideChild"] = true;
$detailsParam ["previewOnList"] = 1;
$detailsParam ["previewOnAdd"] = 0;
$detailsParam ["previewOnEdit"] = 0;
$detailsParam ["previewOnView"] = 0;

$detailsTablesData ["Workload"] [$dIndex] = $detailsParam;

$detailsTablesData ["Workload"] [$dIndex] ["masterKeys"] = array ();

$detailsTablesData ["Workload"] [$dIndex] ["masterKeys"] [] = "RSAName";

$detailsTablesData ["Workload"] [$dIndex] ["detailKeys"] = array ();

$detailsTablesData ["Workload"] [$dIndex] ["detailKeys"] [] = "RSAName";

// tables which are master tables for current table (detail)
$masterTablesData ["Workload"] = array ();

// -----------------end prepare master-details data arrays ------------------------------//

require_once (getabspath ( "classes/sql.php" ));
function createSqlQuery_Workload() {
	$proto0 = array ();
	$proto0 ["m_strHead"] = "Select";
	$proto0 ["m_strFieldList"] = "RSAName,  Supervisor,  COUNT(Allocation) AS `COUNT(Allocation)`,  AutCustID,  StartDate,  EndDate,  SUM(Allocation)*100 AS PercentValue";
	$proto0 ["m_strFrom"] = "FROM customerallocation";
	$proto0 ["m_strWhere"] = "(StartDate <Now()) AND (EndDate >Now())";
	$proto0 ["m_strOrderBy"] = "";
	$proto0 ["m_strTail"] = "GROUP BY RSAName";
	$proto0 ["cipherer"] = null;
	$proto1 = array ();
	$proto1 ["m_sql"] = "(StartDate <Now()) AND (EndDate >Now())";
	$proto1 ["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed ( array (
			"m_sql" => "(StartDate <Now()) AND (EndDate >Now())" 
	) );
	
	$proto1 ["m_column"] = $obj;
	$proto1 ["m_contained"] = array ();
	$proto3 = array ();
	$proto3 ["m_sql"] = "StartDate <Now()";
	$proto3 ["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLField ( array (
			"m_strName" => "StartDate",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "Workload" 
	) );
	
	$proto3 ["m_column"] = $obj;
	$proto3 ["m_contained"] = array ();
	$proto3 ["m_strCase"] = "<Now()";
	$proto3 ["m_havingmode"] = false;
	$proto3 ["m_inBrackets"] = true;
	$proto3 ["m_useAlias"] = false;
	$obj = new SQLLogicalExpr ( $proto3 );
	
	$proto1 ["m_contained"] [] = $obj;
	$proto5 = array ();
	$proto5 ["m_sql"] = "EndDate >Now()";
	$proto5 ["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLField ( array (
			"m_strName" => "EndDate",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "Workload" 
	) );
	
	$proto5 ["m_column"] = $obj;
	$proto5 ["m_contained"] = array ();
	$proto5 ["m_strCase"] = ">Now()";
	$proto5 ["m_havingmode"] = false;
	$proto5 ["m_inBrackets"] = true;
	$proto5 ["m_useAlias"] = false;
	$obj = new SQLLogicalExpr ( $proto5 );
	
	$proto1 ["m_contained"] [] = $obj;
	$proto1 ["m_strCase"] = "";
	$proto1 ["m_havingmode"] = false;
	$proto1 ["m_inBrackets"] = false;
	$proto1 ["m_useAlias"] = false;
	$obj = new SQLLogicalExpr ( $proto1 );
	
	$proto0 ["m_where"] = $obj;
	$proto7 = array ();
	$proto7 ["m_sql"] = "";
	$proto7 ["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed ( array (
			"m_sql" => "" 
	) );
	
	$proto7 ["m_column"] = $obj;
	$proto7 ["m_contained"] = array ();
	$proto7 ["m_strCase"] = "";
	$proto7 ["m_havingmode"] = false;
	$proto7 ["m_inBrackets"] = false;
	$proto7 ["m_useAlias"] = false;
	$obj = new SQLLogicalExpr ( $proto7 );
	
	$proto0 ["m_having"] = $obj;
	$proto0 ["m_fieldlist"] = array ();
	$proto9 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "RSAName",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "Workload" 
	) );
	
	$proto9 ["m_sql"] = "RSAName";
	$proto9 ["m_srcTableName"] = "Workload";
	$proto9 ["m_expr"] = $obj;
	$proto9 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto9 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto11 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Supervisor",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "Workload" 
	) );
	
	$proto11 ["m_sql"] = "Supervisor";
	$proto11 ["m_srcTableName"] = "Workload";
	$proto11 ["m_expr"] = $obj;
	$proto11 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto11 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto13 = array ();
	$proto14 = array ();
	$proto14 ["m_functiontype"] = "SQLF_COUNT";
	$proto14 ["m_arguments"] = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Allocation",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "Workload" 
	) );
	
	$proto14 ["m_arguments"] [] = $obj;
	$proto14 ["m_strFunctionName"] = "COUNT";
	$obj = new SQLFunctionCall ( $proto14 );
	
	$proto13 ["m_sql"] = "COUNT(Allocation)";
	$proto13 ["m_srcTableName"] = "Workload";
	$proto13 ["m_expr"] = $obj;
	$proto13 ["m_alias"] = "COUNT(Allocation)";
	$obj = new SQLFieldListItem ( $proto13 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto16 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "AutCustID",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "Workload" 
	) );
	
	$proto16 ["m_sql"] = "AutCustID";
	$proto16 ["m_srcTableName"] = "Workload";
	$proto16 ["m_expr"] = $obj;
	$proto16 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto16 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto18 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "StartDate",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "Workload" 
	) );
	
	$proto18 ["m_sql"] = "StartDate";
	$proto18 ["m_srcTableName"] = "Workload";
	$proto18 ["m_expr"] = $obj;
	$proto18 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto18 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto20 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "EndDate",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "Workload" 
	) );
	
	$proto20 ["m_sql"] = "EndDate";
	$proto20 ["m_srcTableName"] = "Workload";
	$proto20 ["m_expr"] = $obj;
	$proto20 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto20 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto22 = array ();
	$obj = new SQLNonParsed ( array (
			"m_sql" => "SUM(Allocation)*100" 
	) );
	
	$proto22 ["m_sql"] = "SUM(Allocation)*100";
	$proto22 ["m_srcTableName"] = "Workload";
	$proto22 ["m_expr"] = $obj;
	$proto22 ["m_alias"] = "PercentValue";
	$obj = new SQLFieldListItem ( $proto22 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto0 ["m_fromlist"] = array ();
	$proto24 = array ();
	$proto24 ["m_link"] = "SQLL_MAIN";
	$proto25 = array ();
	$proto25 ["m_strName"] = "customerallocation";
	$proto25 ["m_srcTableName"] = "Workload";
	$proto25 ["m_columns"] = array ();
	$proto25 ["m_columns"] [] = "AutCustID";
	$proto25 ["m_columns"] [] = "OracleID";
	$proto25 ["m_columns"] [] = "CustomerName";
	$proto25 ["m_columns"] [] = "Stage";
	$proto25 ["m_columns"] [] = "RSAName";
	$proto25 ["m_columns"] [] = "Location";
	$proto25 ["m_columns"] [] = "Supervisor";
	$proto25 ["m_columns"] [] = "StartDate";
	$proto25 ["m_columns"] [] = "EndDate";
	$proto25 ["m_columns"] [] = "Allocation";
	$proto25 ["m_columns"] [] = "Override";
	$proto25 ["m_columns"] [] = "Compre_String";
	$proto25 ["m_columns"] [] = "Temp";
	$proto25 ["m_columns"] [] = "Size";
	$proto25 ["m_columns"] [] = "Contract_Start";
	$proto25 ["m_columns"] [] = "SteadyStateDate";
	$proto25 ["m_columns"] [] = "Contract_End";
	$proto25 ["m_columns"] [] = "OnshoreSupportOnly";
	$proto25 ["m_columns"] [] = "Role";
	$proto25 ["m_columns"] [] = "PlatformType";
	$proto25 ["m_columns"] [] = "PlatformName";
	$proto25 ["m_columns"] [] = "TimeZone";
	$proto25 ["m_columns"] [] = "Project";
	$obj = new SQLTable ( $proto25 );
	
	$proto24 ["m_table"] = $obj;
	$proto24 ["m_sql"] = "customerallocation";
	$proto24 ["m_alias"] = "";
	$proto24 ["m_srcTableName"] = "Workload";
	$proto26 = array ();
	$proto26 ["m_sql"] = "";
	$proto26 ["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed ( array (
			"m_sql" => "" 
	) );
	
	$proto26 ["m_column"] = $obj;
	$proto26 ["m_contained"] = array ();
	$proto26 ["m_strCase"] = "";
	$proto26 ["m_havingmode"] = false;
	$proto26 ["m_inBrackets"] = false;
	$proto26 ["m_useAlias"] = false;
	$obj = new SQLLogicalExpr ( $proto26 );
	
	$proto24 ["m_joinon"] = $obj;
	$obj = new SQLFromListItem ( $proto24 );
	
	$proto0 ["m_fromlist"] [] = $obj;
	$proto0 ["m_groupby"] = array ();
	$proto28 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "RSAName",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "Workload" 
	) );
	
	$proto28 ["m_column"] = $obj;
	$obj = new SQLGroupByItem ( $proto28 );
	
	$proto0 ["m_groupby"] [] = $obj;
	$proto0 ["m_orderby"] = array ();
	$proto0 ["m_srcTableName"] = "Workload";
	$obj = new SQLQuery ( $proto0 );
	
	return $obj;
}
$queryData_Workload = createSqlQuery_Workload ();

$tdataWorkload [".sqlquery"] = $queryData_Workload;

$tableEvents ["Workload"] = new eventsBase ();
$tdataWorkload [".hasEvents"] = false;

?>