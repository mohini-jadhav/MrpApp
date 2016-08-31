<?php
require_once (getabspath ( "classes/cipherer.php" ));

$tdatacustomer_platform = array ();
$tdatacustomer_platform [".truncateText"] = true;
$tdatacustomer_platform [".NumberOfChars"] = 60;
$tdatacustomer_platform [".ShortName"] = "customer_platform";
$tdatacustomer_platform [".OwnerID"] = "";
$tdatacustomer_platform [".OriginalTable"] = "customer_platform";

// field labels
$fieldLabelscustomer_platform = array ();
$fieldToolTipscustomer_platform = array ();
$pageTitlescustomer_platform = array ();

if (mlang_getcurrentlang () == "English") {
	$fieldLabelscustomer_platform ["English"] = array ();
	$fieldToolTipscustomer_platform ["English"] = array ();
	$pageTitlescustomer_platform ["English"] = array ();
	$fieldLabelscustomer_platform ["English"] ["Created_By"] = "Created By";
	$fieldToolTipscustomer_platform ["English"] ["Created_By"] = "";
	$fieldLabelscustomer_platform ["English"] ["Created_date"] = "Created Date";
	$fieldToolTipscustomer_platform ["English"] ["Created_date"] = "";
	$fieldLabelscustomer_platform ["English"] ["Updated_by"] = "Updated By";
	$fieldToolTipscustomer_platform ["English"] ["Updated_by"] = "";
	$fieldLabelscustomer_platform ["English"] ["updated_date"] = "Updated Date";
	$fieldToolTipscustomer_platform ["English"] ["updated_date"] = "";
	$fieldLabelscustomer_platform ["English"] ["Remarks"] = "Remarks";
	$fieldToolTipscustomer_platform ["English"] ["Remarks"] = "";
	$fieldLabelscustomer_platform ["English"] ["OracleID"] = "Oracle ID";
	$fieldToolTipscustomer_platform ["English"] ["OracleID"] = "";
	$fieldLabelscustomer_platform ["English"] ["Platform_lookup_id"] = "Platform Lookup Id";
	$fieldToolTipscustomer_platform ["English"] ["Platform_lookup_id"] = "";
	$fieldLabelscustomer_platform ["English"] ["Count"] = "Count";
	$fieldToolTipscustomer_platform ["English"] ["Count"] = "";
	$fieldLabelscustomer_platform ["English"] ["Remarks1"] = "Remarks1";
	$fieldToolTipscustomer_platform ["English"] ["Remarks1"] = "";
	if (count ( $fieldToolTipscustomer_platform ["English"] ))
		$tdatacustomer_platform [".isUseToolTips"] = true;
}
if (mlang_getcurrentlang () == "") {
	$fieldLabelscustomer_platform [""] = array ();
	$fieldToolTipscustomer_platform [""] = array ();
	$pageTitlescustomer_platform [""] = array ();
	if (count ( $fieldToolTipscustomer_platform [""] ))
		$tdatacustomer_platform [".isUseToolTips"] = true;
}

$tdatacustomer_platform [".NCSearch"] = true;

$tdatacustomer_platform [".shortTableName"] = "customer_platform";
$tdatacustomer_platform [".nSecOptions"] = 0;
$tdatacustomer_platform [".recsPerRowList"] = 1;
$tdatacustomer_platform [".recsPerRowPrint"] = 1;
$tdatacustomer_platform [".mainTableOwnerID"] = "";
$tdatacustomer_platform [".moveNext"] = 0;
$tdatacustomer_platform [".entityType"] = 0;

$tdatacustomer_platform [".strOriginalTableName"] = "customer_platform";

$tdatacustomer_platform [".showAddInPopup"] = false;

$tdatacustomer_platform [".showEditInPopup"] = false;

$tdatacustomer_platform [".showViewInPopup"] = false;

// page's base css files names
$popupPagesLayoutNames = array ();
$tdatacustomer_platform [".popupPagesLayoutNames"] = $popupPagesLayoutNames;

$tdatacustomer_platform [".fieldsForRegister"] = array ();

$tdatacustomer_platform [".listAjax"] = false;

$tdatacustomer_platform [".audit"] = false;

$tdatacustomer_platform [".locking"] = false;

$tdatacustomer_platform [".list"] = true;

$tdatacustomer_platform [".import"] = true;

$tdatacustomer_platform [".exportTo"] = true;

$tdatacustomer_platform [".printFriendly"] = true;

$tdatacustomer_platform [".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacustomer_platform [".searchSaving"] = false;
//

$tdatacustomer_platform [".showSearchPanel"] = true;
$tdatacustomer_platform [".flexibleSearch"] = true;

if (isMobile ())
	$tdatacustomer_platform [".isUseAjaxSuggest"] = false;
else
	$tdatacustomer_platform [".isUseAjaxSuggest"] = true;

$tdatacustomer_platform [".rowHighlite"] = true;

$tdatacustomer_platform [".addPageEvents"] = false;

// use timepicker for search panel
$tdatacustomer_platform [".isUseTimeForSearch"] = false;

$tdatacustomer_platform [".allSearchFields"] = array ();
$tdatacustomer_platform [".filterFields"] = array ();
$tdatacustomer_platform [".requiredSearchFields"] = array ();

$tdatacustomer_platform [".allSearchFields"] [] = "Created_By";
$tdatacustomer_platform [".allSearchFields"] [] = "Created_date";
$tdatacustomer_platform [".allSearchFields"] [] = "Updated_by";
$tdatacustomer_platform [".allSearchFields"] [] = "updated_date";
$tdatacustomer_platform [".allSearchFields"] [] = "Remarks";
$tdatacustomer_platform [".allSearchFields"] [] = "OracleID";
$tdatacustomer_platform [".allSearchFields"] [] = "Platform_lookup_id";
$tdatacustomer_platform [".allSearchFields"] [] = "Count";
$tdatacustomer_platform [".allSearchFields"] [] = "Remarks1";

$tdatacustomer_platform [".googleLikeFields"] = array ();
$tdatacustomer_platform [".googleLikeFields"] [] = "Created_By";
$tdatacustomer_platform [".googleLikeFields"] [] = "Created_date";
$tdatacustomer_platform [".googleLikeFields"] [] = "Updated_by";
$tdatacustomer_platform [".googleLikeFields"] [] = "updated_date";
$tdatacustomer_platform [".googleLikeFields"] [] = "Remarks";
$tdatacustomer_platform [".googleLikeFields"] [] = "OracleID";
$tdatacustomer_platform [".googleLikeFields"] [] = "Platform_lookup_id";
$tdatacustomer_platform [".googleLikeFields"] [] = "Count";
$tdatacustomer_platform [".googleLikeFields"] [] = "Remarks1";

$tdatacustomer_platform [".advSearchFields"] = array ();
$tdatacustomer_platform [".advSearchFields"] [] = "Created_By";
$tdatacustomer_platform [".advSearchFields"] [] = "Created_date";
$tdatacustomer_platform [".advSearchFields"] [] = "Updated_by";
$tdatacustomer_platform [".advSearchFields"] [] = "updated_date";
$tdatacustomer_platform [".advSearchFields"] [] = "Remarks";
$tdatacustomer_platform [".advSearchFields"] [] = "OracleID";
$tdatacustomer_platform [".advSearchFields"] [] = "Platform_lookup_id";
$tdatacustomer_platform [".advSearchFields"] [] = "Count";
$tdatacustomer_platform [".advSearchFields"] [] = "Remarks1";

$tdatacustomer_platform [".tableType"] = "list";

$tdatacustomer_platform [".printerPageOrientation"] = 0;
$tdatacustomer_platform [".nPrinterPageScale"] = 100;

$tdatacustomer_platform [".nPrinterSplitRecords"] = 40;

$tdatacustomer_platform [".nPrinterPDFSplitRecords"] = 40;

$tdatacustomer_platform [".geocodingEnabled"] = false;

// view page pdf

// print page pdf

$tdatacustomer_platform [".pageSize"] = 10;

$tdatacustomer_platform [".warnLeavingPages"] = true;

$tstrOrderBy = "";
if (strlen ( $tstrOrderBy ) && strtolower ( substr ( $tstrOrderBy, 0, 8 ) ) != "order by")
	$tstrOrderBy = "order by " . $tstrOrderBy;
$tdatacustomer_platform [".strOrderBy"] = $tstrOrderBy;

$tdatacustomer_platform [".orderindexes"] = array ();

$tdatacustomer_platform [".sqlHead"] = "SELECT Created_By,  	Created_date,  	Updated_by,  	updated_date,  	Remarks,  	OracleID,  	Platform_lookup_id,  	`Count`,  	Remarks1";
$tdatacustomer_platform [".sqlFrom"] = "FROM customer_platform";
$tdatacustomer_platform [".sqlWhereExpr"] = "";
$tdatacustomer_platform [".sqlTail"] = "";

// fill array of records per page for list and report without group fields
$arrRPP = array ();
$arrRPP [] = 10;
$arrRPP [] = 20;
$arrRPP [] = 30;
$arrRPP [] = 50;
$arrRPP [] = 100;
$arrRPP [] = 500;
$arrRPP [] = - 1;
$tdatacustomer_platform [".arrRecsPerPage"] = $arrRPP;

// fill array of groups per page for report with group fields
$arrGPP = array ();
$arrGPP [] = 1;
$arrGPP [] = 3;
$arrGPP [] = 5;
$arrGPP [] = 10;
$arrGPP [] = 50;
$arrGPP [] = 100;
$arrGPP [] = - 1;
$tdatacustomer_platform [".arrGroupsPerPage"] = $arrGPP;

$tableKeyscustomer_platform = array ();
$tdatacustomer_platform [".Keys"] = $tableKeyscustomer_platform;

$tdatacustomer_platform [".listFields"] = array ();
$tdatacustomer_platform [".listFields"] [] = "Created_By";
$tdatacustomer_platform [".listFields"] [] = "Created_date";
$tdatacustomer_platform [".listFields"] [] = "Updated_by";
$tdatacustomer_platform [".listFields"] [] = "updated_date";
$tdatacustomer_platform [".listFields"] [] = "Remarks";
$tdatacustomer_platform [".listFields"] [] = "OracleID";
$tdatacustomer_platform [".listFields"] [] = "Platform_lookup_id";
$tdatacustomer_platform [".listFields"] [] = "Count";
$tdatacustomer_platform [".listFields"] [] = "Remarks1";

$tdatacustomer_platform [".hideMobileList"] = array ();

$tdatacustomer_platform [".viewFields"] = array ();
$tdatacustomer_platform [".viewFields"] [] = "Created_By";
$tdatacustomer_platform [".viewFields"] [] = "Created_date";
$tdatacustomer_platform [".viewFields"] [] = "Updated_by";
$tdatacustomer_platform [".viewFields"] [] = "updated_date";
$tdatacustomer_platform [".viewFields"] [] = "Remarks";
$tdatacustomer_platform [".viewFields"] [] = "OracleID";
$tdatacustomer_platform [".viewFields"] [] = "Platform_lookup_id";
$tdatacustomer_platform [".viewFields"] [] = "Count";
$tdatacustomer_platform [".viewFields"] [] = "Remarks1";

$tdatacustomer_platform [".addFields"] = array ();
$tdatacustomer_platform [".addFields"] [] = "Created_By";
$tdatacustomer_platform [".addFields"] [] = "Created_date";
$tdatacustomer_platform [".addFields"] [] = "Updated_by";
$tdatacustomer_platform [".addFields"] [] = "updated_date";
$tdatacustomer_platform [".addFields"] [] = "Remarks";
$tdatacustomer_platform [".addFields"] [] = "OracleID";
$tdatacustomer_platform [".addFields"] [] = "Platform_lookup_id";
$tdatacustomer_platform [".addFields"] [] = "Count";
$tdatacustomer_platform [".addFields"] [] = "Remarks1";

$tdatacustomer_platform [".masterListFields"] = array ();
$tdatacustomer_platform [".masterListFields"] [] = "Created_By";
$tdatacustomer_platform [".masterListFields"] [] = "Created_date";
$tdatacustomer_platform [".masterListFields"] [] = "Updated_by";
$tdatacustomer_platform [".masterListFields"] [] = "updated_date";
$tdatacustomer_platform [".masterListFields"] [] = "Remarks";
$tdatacustomer_platform [".masterListFields"] [] = "OracleID";
$tdatacustomer_platform [".masterListFields"] [] = "Platform_lookup_id";
$tdatacustomer_platform [".masterListFields"] [] = "Count";
$tdatacustomer_platform [".masterListFields"] [] = "Remarks1";

$tdatacustomer_platform [".inlineAddFields"] = array ();
$tdatacustomer_platform [".inlineAddFields"] [] = "Created_By";
$tdatacustomer_platform [".inlineAddFields"] [] = "Created_date";
$tdatacustomer_platform [".inlineAddFields"] [] = "Updated_by";
$tdatacustomer_platform [".inlineAddFields"] [] = "updated_date";
$tdatacustomer_platform [".inlineAddFields"] [] = "Remarks";
$tdatacustomer_platform [".inlineAddFields"] [] = "OracleID";
$tdatacustomer_platform [".inlineAddFields"] [] = "Platform_lookup_id";
$tdatacustomer_platform [".inlineAddFields"] [] = "Count";
$tdatacustomer_platform [".inlineAddFields"] [] = "Remarks1";

$tdatacustomer_platform [".editFields"] = array ();
$tdatacustomer_platform [".editFields"] [] = "Created_By";
$tdatacustomer_platform [".editFields"] [] = "Created_date";
$tdatacustomer_platform [".editFields"] [] = "Updated_by";
$tdatacustomer_platform [".editFields"] [] = "updated_date";
$tdatacustomer_platform [".editFields"] [] = "Remarks";
$tdatacustomer_platform [".editFields"] [] = "OracleID";
$tdatacustomer_platform [".editFields"] [] = "Platform_lookup_id";
$tdatacustomer_platform [".editFields"] [] = "Count";
$tdatacustomer_platform [".editFields"] [] = "Remarks1";

$tdatacustomer_platform [".inlineEditFields"] = array ();
$tdatacustomer_platform [".inlineEditFields"] [] = "Created_By";
$tdatacustomer_platform [".inlineEditFields"] [] = "Created_date";
$tdatacustomer_platform [".inlineEditFields"] [] = "Updated_by";
$tdatacustomer_platform [".inlineEditFields"] [] = "updated_date";
$tdatacustomer_platform [".inlineEditFields"] [] = "Remarks";
$tdatacustomer_platform [".inlineEditFields"] [] = "OracleID";
$tdatacustomer_platform [".inlineEditFields"] [] = "Platform_lookup_id";
$tdatacustomer_platform [".inlineEditFields"] [] = "Count";
$tdatacustomer_platform [".inlineEditFields"] [] = "Remarks1";

$tdatacustomer_platform [".exportFields"] = array ();
$tdatacustomer_platform [".exportFields"] [] = "Created_By";
$tdatacustomer_platform [".exportFields"] [] = "Created_date";
$tdatacustomer_platform [".exportFields"] [] = "Updated_by";
$tdatacustomer_platform [".exportFields"] [] = "updated_date";
$tdatacustomer_platform [".exportFields"] [] = "Remarks";
$tdatacustomer_platform [".exportFields"] [] = "OracleID";
$tdatacustomer_platform [".exportFields"] [] = "Platform_lookup_id";
$tdatacustomer_platform [".exportFields"] [] = "Count";
$tdatacustomer_platform [".exportFields"] [] = "Remarks1";

$tdatacustomer_platform [".importFields"] = array ();
$tdatacustomer_platform [".importFields"] [] = "Created_By";
$tdatacustomer_platform [".importFields"] [] = "Created_date";
$tdatacustomer_platform [".importFields"] [] = "Updated_by";
$tdatacustomer_platform [".importFields"] [] = "updated_date";
$tdatacustomer_platform [".importFields"] [] = "Remarks";
$tdatacustomer_platform [".importFields"] [] = "OracleID";
$tdatacustomer_platform [".importFields"] [] = "Platform_lookup_id";
$tdatacustomer_platform [".importFields"] [] = "Count";
$tdatacustomer_platform [".importFields"] [] = "Remarks1";

$tdatacustomer_platform [".printFields"] = array ();
$tdatacustomer_platform [".printFields"] [] = "Created_By";
$tdatacustomer_platform [".printFields"] [] = "Created_date";
$tdatacustomer_platform [".printFields"] [] = "Updated_by";
$tdatacustomer_platform [".printFields"] [] = "updated_date";
$tdatacustomer_platform [".printFields"] [] = "Remarks";
$tdatacustomer_platform [".printFields"] [] = "OracleID";
$tdatacustomer_platform [".printFields"] [] = "Platform_lookup_id";
$tdatacustomer_platform [".printFields"] [] = "Count";
$tdatacustomer_platform [".printFields"] [] = "Remarks1";

// Created_By
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 1;
$fdata ["strName"] = "Created_By";
$fdata ["GoodName"] = "Created_By";
$fdata ["ownerTable"] = "customer_platform";
$fdata ["Label"] = GetFieldLabel ( "customer_platform", "Created_By" );
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

$fdata ["strField"] = "Created_By";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Created_By";

$fdata ["FieldPermissions"] = true;

$fdata ["UploadFolder"] = "files";

// Begin View Formats
$fdata ["ViewFormats"] = array ();

$vdata = array (
		"ViewFormat" => "" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["view"] = $vdata;
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
$edata ["EditParams"] .= " maxlength=10";

$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = false;

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

// the end of search options settings

$tdatacustomer_platform ["Created_By"] = $fdata;
// Created_date
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 2;
$fdata ["strName"] = "Created_date";
$fdata ["GoodName"] = "Created_date";
$fdata ["ownerTable"] = "customer_platform";
$fdata ["Label"] = GetFieldLabel ( "customer_platform", "Created_date" );
$fdata ["FieldType"] = 135;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Created_date";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Created_date";

$fdata ["FieldPermissions"] = true;

$fdata ["UploadFolder"] = "files";

// Begin View Formats
$fdata ["ViewFormats"] = array ();

$vdata = array (
		"ViewFormat" => "Short Date" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["view"] = $vdata;
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

$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = false;

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

// the end of search options settings

$tdatacustomer_platform ["Created_date"] = $fdata;
// Updated_by
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 3;
$fdata ["strName"] = "Updated_by";
$fdata ["GoodName"] = "Updated_by";
$fdata ["ownerTable"] = "customer_platform";
$fdata ["Label"] = GetFieldLabel ( "customer_platform", "Updated_by" );
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

$fdata ["strField"] = "Updated_by";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Updated_by";

$fdata ["FieldPermissions"] = true;

$fdata ["UploadFolder"] = "files";

// Begin View Formats
$fdata ["ViewFormats"] = array ();

$vdata = array (
		"ViewFormat" => "" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["view"] = $vdata;
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
$edata ["EditParams"] .= " maxlength=10";

$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = false;

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

// the end of search options settings

$tdatacustomer_platform ["Updated_by"] = $fdata;
// updated_date
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 4;
$fdata ["strName"] = "updated_date";
$fdata ["GoodName"] = "updated_date";
$fdata ["ownerTable"] = "customer_platform";
$fdata ["Label"] = GetFieldLabel ( "customer_platform", "updated_date" );
$fdata ["FieldType"] = 135;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "updated_date";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "updated_date";

$fdata ["FieldPermissions"] = true;

$fdata ["UploadFolder"] = "files";

// Begin View Formats
$fdata ["ViewFormats"] = array ();

$vdata = array (
		"ViewFormat" => "Short Date" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["view"] = $vdata;
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

$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = false;

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

// the end of search options settings

$tdatacustomer_platform ["updated_date"] = $fdata;
// Remarks
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 5;
$fdata ["strName"] = "Remarks";
$fdata ["GoodName"] = "Remarks";
$fdata ["ownerTable"] = "customer_platform";
$fdata ["Label"] = GetFieldLabel ( "customer_platform", "Remarks" );
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

$fdata ["strField"] = "Remarks";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Remarks";

$fdata ["FieldPermissions"] = true;

$fdata ["UploadFolder"] = "files";

// Begin View Formats
$fdata ["ViewFormats"] = array ();

$vdata = array (
		"ViewFormat" => "" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["view"] = $vdata;
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
$edata ["EditParams"] .= " maxlength=1000";

$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = false;

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

// the end of search options settings

$tdatacustomer_platform ["Remarks"] = $fdata;
// OracleID
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 6;
$fdata ["strName"] = "OracleID";
$fdata ["GoodName"] = "OracleID";
$fdata ["ownerTable"] = "customer_platform";
$fdata ["Label"] = GetFieldLabel ( "customer_platform", "OracleID" );
$fdata ["FieldType"] = 3;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "OracleID";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "OracleID";

$fdata ["FieldPermissions"] = true;

$fdata ["UploadFolder"] = "files";

// Begin View Formats
$fdata ["ViewFormats"] = array ();

$vdata = array (
		"ViewFormat" => "" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["view"] = $vdata;
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

$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = getJsValidatorName ( "Number" );

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = false;

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

// the end of search options settings

$tdatacustomer_platform ["OracleID"] = $fdata;
// Platform_lookup_id
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 7;
$fdata ["strName"] = "Platform_lookup_id";
$fdata ["GoodName"] = "Platform_lookup_id";
$fdata ["ownerTable"] = "customer_platform";
$fdata ["Label"] = GetFieldLabel ( "customer_platform", "Platform_lookup_id" );
$fdata ["FieldType"] = 3;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Platform_lookup_id";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Platform_lookup_id";

$fdata ["FieldPermissions"] = true;

$fdata ["UploadFolder"] = "files";

// Begin View Formats
$fdata ["ViewFormats"] = array ();

$vdata = array (
		"ViewFormat" => "" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["view"] = $vdata;
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

$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = getJsValidatorName ( "Number" );

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = false;

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

// the end of search options settings

$tdatacustomer_platform ["Platform_lookup_id"] = $fdata;
// Count
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 8;
$fdata ["strName"] = "Count";
$fdata ["GoodName"] = "Count";
$fdata ["ownerTable"] = "customer_platform";
$fdata ["Label"] = GetFieldLabel ( "customer_platform", "Count" );
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

$fdata ["strField"] = "Count";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "`Count`";

$fdata ["FieldPermissions"] = true;

$fdata ["UploadFolder"] = "files";

// Begin View Formats
$fdata ["ViewFormats"] = array ();

$vdata = array (
		"ViewFormat" => "" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["view"] = $vdata;
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
$edata ["EditParams"] .= " maxlength=45";

$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = false;

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

// the end of search options settings

$tdatacustomer_platform ["Count"] = $fdata;
// Remarks1
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 9;
$fdata ["strName"] = "Remarks1";
$fdata ["GoodName"] = "Remarks1";
$fdata ["ownerTable"] = "customer_platform";
$fdata ["Label"] = GetFieldLabel ( "customer_platform", "Remarks1" );
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

$fdata ["strField"] = "Remarks1";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Remarks1";

$fdata ["FieldPermissions"] = true;

$fdata ["UploadFolder"] = "files";

// Begin View Formats
$fdata ["ViewFormats"] = array ();

$vdata = array (
		"ViewFormat" => "" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["view"] = $vdata;
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
$edata ["EditParams"] .= " maxlength=1000";

$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = false;

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

// the end of search options settings

$tdatacustomer_platform ["Remarks1"] = $fdata;

$tables_data ["customer_platform"] = &$tdatacustomer_platform;
$field_labels ["customer_platform"] = &$fieldLabelscustomer_platform;
$fieldToolTips ["customer_platform"] = &$fieldToolTipscustomer_platform;
$page_titles ["customer_platform"] = &$pageTitlescustomer_platform;

// -----------------start prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData ["customer_platform"] = array ();

// tables which are master tables for current table (detail)
$masterTablesData ["customer_platform"] = array ();

// -----------------end prepare master-details data arrays ------------------------------//

require_once (getabspath ( "classes/sql.php" ));
function createSqlQuery_customer_platform() {
	$proto0 = array ();
	$proto0 ["m_strHead"] = "SELECT";
	$proto0 ["m_strFieldList"] = "Created_By,  	Created_date,  	Updated_by,  	updated_date,  	Remarks,  	OracleID,  	Platform_lookup_id,  	`Count`,  	Remarks1";
	$proto0 ["m_strFrom"] = "FROM customer_platform";
	$proto0 ["m_strWhere"] = "";
	$proto0 ["m_strOrderBy"] = "";
	$proto0 ["m_strTail"] = "";
	$proto0 ["cipherer"] = null;
	$proto1 = array ();
	$proto1 ["m_sql"] = "";
	$proto1 ["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed ( array (
			"m_sql" => "" 
	) );
	
	$proto1 ["m_column"] = $obj;
	$proto1 ["m_contained"] = array ();
	$proto1 ["m_strCase"] = "";
	$proto1 ["m_havingmode"] = false;
	$proto1 ["m_inBrackets"] = false;
	$proto1 ["m_useAlias"] = false;
	$obj = new SQLLogicalExpr ( $proto1 );
	
	$proto0 ["m_where"] = $obj;
	$proto3 = array ();
	$proto3 ["m_sql"] = "";
	$proto3 ["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed ( array (
			"m_sql" => "" 
	) );
	
	$proto3 ["m_column"] = $obj;
	$proto3 ["m_contained"] = array ();
	$proto3 ["m_strCase"] = "";
	$proto3 ["m_havingmode"] = false;
	$proto3 ["m_inBrackets"] = false;
	$proto3 ["m_useAlias"] = false;
	$obj = new SQLLogicalExpr ( $proto3 );
	
	$proto0 ["m_having"] = $obj;
	$proto0 ["m_fieldlist"] = array ();
	$proto5 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Created_By",
			"m_strTable" => "customer_platform",
			"m_srcTableName" => "customer_platform" 
	) );
	
	$proto5 ["m_sql"] = "Created_By";
	$proto5 ["m_srcTableName"] = "customer_platform";
	$proto5 ["m_expr"] = $obj;
	$proto5 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto5 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto7 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Created_date",
			"m_strTable" => "customer_platform",
			"m_srcTableName" => "customer_platform" 
	) );
	
	$proto7 ["m_sql"] = "Created_date";
	$proto7 ["m_srcTableName"] = "customer_platform";
	$proto7 ["m_expr"] = $obj;
	$proto7 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto7 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto9 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Updated_by",
			"m_strTable" => "customer_platform",
			"m_srcTableName" => "customer_platform" 
	) );
	
	$proto9 ["m_sql"] = "Updated_by";
	$proto9 ["m_srcTableName"] = "customer_platform";
	$proto9 ["m_expr"] = $obj;
	$proto9 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto9 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto11 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "updated_date",
			"m_strTable" => "customer_platform",
			"m_srcTableName" => "customer_platform" 
	) );
	
	$proto11 ["m_sql"] = "updated_date";
	$proto11 ["m_srcTableName"] = "customer_platform";
	$proto11 ["m_expr"] = $obj;
	$proto11 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto11 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto13 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Remarks",
			"m_strTable" => "customer_platform",
			"m_srcTableName" => "customer_platform" 
	) );
	
	$proto13 ["m_sql"] = "Remarks";
	$proto13 ["m_srcTableName"] = "customer_platform";
	$proto13 ["m_expr"] = $obj;
	$proto13 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto13 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto15 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "OracleID",
			"m_strTable" => "customer_platform",
			"m_srcTableName" => "customer_platform" 
	) );
	
	$proto15 ["m_sql"] = "OracleID";
	$proto15 ["m_srcTableName"] = "customer_platform";
	$proto15 ["m_expr"] = $obj;
	$proto15 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto15 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto17 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Platform_lookup_id",
			"m_strTable" => "customer_platform",
			"m_srcTableName" => "customer_platform" 
	) );
	
	$proto17 ["m_sql"] = "Platform_lookup_id";
	$proto17 ["m_srcTableName"] = "customer_platform";
	$proto17 ["m_expr"] = $obj;
	$proto17 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto17 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto19 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Count",
			"m_strTable" => "customer_platform",
			"m_srcTableName" => "customer_platform" 
	) );
	
	$proto19 ["m_sql"] = "`Count`";
	$proto19 ["m_srcTableName"] = "customer_platform";
	$proto19 ["m_expr"] = $obj;
	$proto19 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto19 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto21 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Remarks1",
			"m_strTable" => "customer_platform",
			"m_srcTableName" => "customer_platform" 
	) );
	
	$proto21 ["m_sql"] = "Remarks1";
	$proto21 ["m_srcTableName"] = "customer_platform";
	$proto21 ["m_expr"] = $obj;
	$proto21 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto21 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto0 ["m_fromlist"] = array ();
	$proto23 = array ();
	$proto23 ["m_link"] = "SQLL_MAIN";
	$proto24 = array ();
	$proto24 ["m_strName"] = "customer_platform";
	$proto24 ["m_srcTableName"] = "customer_platform";
	$proto24 ["m_columns"] = array ();
	$proto24 ["m_columns"] [] = "Created_By";
	$proto24 ["m_columns"] [] = "Created_date";
	$proto24 ["m_columns"] [] = "Updated_by";
	$proto24 ["m_columns"] [] = "updated_date";
	$proto24 ["m_columns"] [] = "Remarks";
	$proto24 ["m_columns"] [] = "OracleID";
	$proto24 ["m_columns"] [] = "Platform_lookup_id";
	$proto24 ["m_columns"] [] = "Count";
	$proto24 ["m_columns"] [] = "Remarks1";
	$obj = new SQLTable ( $proto24 );
	
	$proto23 ["m_table"] = $obj;
	$proto23 ["m_sql"] = "customer_platform";
	$proto23 ["m_alias"] = "";
	$proto23 ["m_srcTableName"] = "customer_platform";
	$proto25 = array ();
	$proto25 ["m_sql"] = "";
	$proto25 ["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed ( array (
			"m_sql" => "" 
	) );
	
	$proto25 ["m_column"] = $obj;
	$proto25 ["m_contained"] = array ();
	$proto25 ["m_strCase"] = "";
	$proto25 ["m_havingmode"] = false;
	$proto25 ["m_inBrackets"] = false;
	$proto25 ["m_useAlias"] = false;
	$obj = new SQLLogicalExpr ( $proto25 );
	
	$proto23 ["m_joinon"] = $obj;
	$obj = new SQLFromListItem ( $proto23 );
	
	$proto0 ["m_fromlist"] [] = $obj;
	$proto0 ["m_groupby"] = array ();
	$proto0 ["m_orderby"] = array ();
	$proto0 ["m_srcTableName"] = "customer_platform";
	$obj = new SQLQuery ( $proto0 );
	
	return $obj;
}
$queryData_customer_platform = createSqlQuery_customer_platform ();

$tdatacustomer_platform [".sqlquery"] = $queryData_customer_platform;

$tableEvents ["customer_platform"] = new eventsBase ();
$tdatacustomer_platform [".hasEvents"] = false;

?>