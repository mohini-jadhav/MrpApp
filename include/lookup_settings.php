<?php
require_once (getabspath ( "classes/cipherer.php" ));

$tdatalookup = array ();
$tdatalookup [".truncateText"] = true;
$tdatalookup [".NumberOfChars"] = 60;
$tdatalookup [".ShortName"] = "lookup";
$tdatalookup [".OwnerID"] = "";
$tdatalookup [".OriginalTable"] = "lookup";

// field labels
$fieldLabelslookup = array ();
$fieldToolTipslookup = array ();
$pageTitleslookup = array ();

if (mlang_getcurrentlang () == "English") {
	$fieldLabelslookup ["English"] = array ();
	$fieldToolTipslookup ["English"] = array ();
	$pageTitleslookup ["English"] = array ();
	$fieldLabelslookup ["English"] ["Lookup_ID"] = "Lookup ID";
	$fieldToolTipslookup ["English"] ["Lookup_ID"] = "";
	$fieldLabelslookup ["English"] ["Category"] = "Category";
	$fieldToolTipslookup ["English"] ["Category"] = "";
	$fieldLabelslookup ["English"] ["Lookup_code"] = "Lookup Code";
	$fieldToolTipslookup ["English"] ["Lookup_code"] = "";
	$fieldLabelslookup ["English"] ["Lookup_value"] = "Lookup Value";
	$fieldToolTipslookup ["English"] ["Lookup_value"] = "";
	$fieldLabelslookup ["English"] ["created_by"] = "Created By";
	$fieldToolTipslookup ["English"] ["created_by"] = "";
	$fieldLabelslookup ["English"] ["created_date"] = "Created Date";
	$fieldToolTipslookup ["English"] ["created_date"] = "";
	$fieldLabelslookup ["English"] ["updated_by"] = "Updated By";
	$fieldToolTipslookup ["English"] ["updated_by"] = "";
	$fieldLabelslookup ["English"] ["updated_date"] = "Updated Date";
	$fieldToolTipslookup ["English"] ["updated_date"] = "";
	$fieldLabelslookup ["English"] ["Remarks"] = "Remarks";
	$fieldToolTipslookup ["English"] ["Remarks"] = "";
	if (count ( $fieldToolTipslookup ["English"] ))
		$tdatalookup [".isUseToolTips"] = true;
}
if (mlang_getcurrentlang () == "") {
	$fieldLabelslookup [""] = array ();
	$fieldToolTipslookup [""] = array ();
	$pageTitleslookup [""] = array ();
	if (count ( $fieldToolTipslookup [""] ))
		$tdatalookup [".isUseToolTips"] = true;
}

$tdatalookup [".NCSearch"] = true;

$tdatalookup [".shortTableName"] = "lookup";
$tdatalookup [".nSecOptions"] = 0;
$tdatalookup [".recsPerRowList"] = 1;
$tdatalookup [".recsPerRowPrint"] = 1;
$tdatalookup [".mainTableOwnerID"] = "";
$tdatalookup [".moveNext"] = 0;
$tdatalookup [".entityType"] = 0;

$tdatalookup [".strOriginalTableName"] = "lookup";

$tdatalookup [".showAddInPopup"] = false;

$tdatalookup [".showEditInPopup"] = false;

$tdatalookup [".showViewInPopup"] = false;

// page's base css files names
$popupPagesLayoutNames = array ();
$tdatalookup [".popupPagesLayoutNames"] = $popupPagesLayoutNames;

$tdatalookup [".fieldsForRegister"] = array ();

$tdatalookup [".listAjax"] = false;

$tdatalookup [".audit"] = false;

$tdatalookup [".locking"] = false;

$tdatalookup [".edit"] = true;
$tdatalookup [".afterEditAction"] = 1;
$tdatalookup [".closePopupAfterEdit"] = 1;
$tdatalookup [".afterEditActionDetTable"] = "";

$tdatalookup [".add"] = true;
$tdatalookup [".afterAddAction"] = 1;
$tdatalookup [".closePopupAfterAdd"] = 1;
$tdatalookup [".afterAddActionDetTable"] = "";

$tdatalookup [".list"] = true;

$tdatalookup [".inlineEdit"] = true;
$tdatalookup [".inlineAdd"] = true;
$tdatalookup [".view"] = true;

$tdatalookup [".import"] = true;

$tdatalookup [".exportTo"] = true;

$tdatalookup [".printFriendly"] = true;

$tdatalookup [".delete"] = true;

$tdatalookup [".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatalookup [".searchSaving"] = false;
//

$tdatalookup [".showSearchPanel"] = true;
$tdatalookup [".flexibleSearch"] = true;

if (isMobile ())
	$tdatalookup [".isUseAjaxSuggest"] = false;
else
	$tdatalookup [".isUseAjaxSuggest"] = true;

$tdatalookup [".rowHighlite"] = true;

$tdatalookup [".addPageEvents"] = false;

// use timepicker for search panel
$tdatalookup [".isUseTimeForSearch"] = false;

$tdatalookup [".allSearchFields"] = array ();
$tdatalookup [".filterFields"] = array ();
$tdatalookup [".requiredSearchFields"] = array ();

$tdatalookup [".allSearchFields"] [] = "Lookup_ID";
$tdatalookup [".allSearchFields"] [] = "Category";
$tdatalookup [".allSearchFields"] [] = "Lookup_code";
$tdatalookup [".allSearchFields"] [] = "Lookup_value";
$tdatalookup [".allSearchFields"] [] = "created_by";
$tdatalookup [".allSearchFields"] [] = "created_date";
$tdatalookup [".allSearchFields"] [] = "updated_by";
$tdatalookup [".allSearchFields"] [] = "updated_date";
$tdatalookup [".allSearchFields"] [] = "Remarks";

$tdatalookup [".googleLikeFields"] = array ();
$tdatalookup [".googleLikeFields"] [] = "Lookup_ID";
$tdatalookup [".googleLikeFields"] [] = "Category";
$tdatalookup [".googleLikeFields"] [] = "Lookup_code";
$tdatalookup [".googleLikeFields"] [] = "Lookup_value";
$tdatalookup [".googleLikeFields"] [] = "created_by";
$tdatalookup [".googleLikeFields"] [] = "created_date";
$tdatalookup [".googleLikeFields"] [] = "updated_by";
$tdatalookup [".googleLikeFields"] [] = "updated_date";
$tdatalookup [".googleLikeFields"] [] = "Remarks";

$tdatalookup [".advSearchFields"] = array ();
$tdatalookup [".advSearchFields"] [] = "Lookup_ID";
$tdatalookup [".advSearchFields"] [] = "Category";
$tdatalookup [".advSearchFields"] [] = "Lookup_code";
$tdatalookup [".advSearchFields"] [] = "Lookup_value";
$tdatalookup [".advSearchFields"] [] = "created_by";
$tdatalookup [".advSearchFields"] [] = "created_date";
$tdatalookup [".advSearchFields"] [] = "updated_by";
$tdatalookup [".advSearchFields"] [] = "updated_date";
$tdatalookup [".advSearchFields"] [] = "Remarks";

$tdatalookup [".tableType"] = "list";

$tdatalookup [".printerPageOrientation"] = 0;
$tdatalookup [".nPrinterPageScale"] = 100;

$tdatalookup [".nPrinterSplitRecords"] = 40;

$tdatalookup [".nPrinterPDFSplitRecords"] = 40;

$tdatalookup [".geocodingEnabled"] = false;

// view page pdf

// print page pdf

$tdatalookup [".pageSize"] = 10;

$tdatalookup [".warnLeavingPages"] = true;

$tstrOrderBy = "";
if (strlen ( $tstrOrderBy ) && strtolower ( substr ( $tstrOrderBy, 0, 8 ) ) != "order by")
	$tstrOrderBy = "order by " . $tstrOrderBy;
$tdatalookup [".strOrderBy"] = $tstrOrderBy;

$tdatalookup [".orderindexes"] = array ();

$tdatalookup [".sqlHead"] = "SELECT Lookup_ID,  	Category,  	Lookup_code,  	Lookup_value,  	created_by,  	created_date,  	updated_by,  	updated_date,  	Remarks";
$tdatalookup [".sqlFrom"] = "FROM lookup";
$tdatalookup [".sqlWhereExpr"] = "";
$tdatalookup [".sqlTail"] = "";

// fill array of records per page for list and report without group fields
$arrRPP = array ();
$arrRPP [] = 10;
$arrRPP [] = 20;
$arrRPP [] = 30;
$arrRPP [] = 50;
$arrRPP [] = 100;
$arrRPP [] = 500;
$arrRPP [] = - 1;
$tdatalookup [".arrRecsPerPage"] = $arrRPP;

// fill array of groups per page for report with group fields
$arrGPP = array ();
$arrGPP [] = 1;
$arrGPP [] = 3;
$arrGPP [] = 5;
$arrGPP [] = 10;
$arrGPP [] = 50;
$arrGPP [] = 100;
$arrGPP [] = - 1;
$tdatalookup [".arrGroupsPerPage"] = $arrGPP;

$tableKeyslookup = array ();
$tableKeyslookup [] = "Lookup_ID";
$tdatalookup [".Keys"] = $tableKeyslookup;

$tdatalookup [".listFields"] = array ();
$tdatalookup [".listFields"] [] = "Lookup_ID";
$tdatalookup [".listFields"] [] = "Category";
$tdatalookup [".listFields"] [] = "Lookup_code";
$tdatalookup [".listFields"] [] = "Lookup_value";
$tdatalookup [".listFields"] [] = "created_by";
$tdatalookup [".listFields"] [] = "created_date";
$tdatalookup [".listFields"] [] = "updated_by";
$tdatalookup [".listFields"] [] = "updated_date";
$tdatalookup [".listFields"] [] = "Remarks";

$tdatalookup [".hideMobileList"] = array ();

$tdatalookup [".viewFields"] = array ();
$tdatalookup [".viewFields"] [] = "Lookup_ID";
$tdatalookup [".viewFields"] [] = "Category";
$tdatalookup [".viewFields"] [] = "Lookup_code";
$tdatalookup [".viewFields"] [] = "Lookup_value";
$tdatalookup [".viewFields"] [] = "created_by";
$tdatalookup [".viewFields"] [] = "created_date";
$tdatalookup [".viewFields"] [] = "updated_by";
$tdatalookup [".viewFields"] [] = "updated_date";
$tdatalookup [".viewFields"] [] = "Remarks";

$tdatalookup [".addFields"] = array ();
$tdatalookup [".addFields"] [] = "Lookup_ID";
$tdatalookup [".addFields"] [] = "Category";
$tdatalookup [".addFields"] [] = "Lookup_code";
$tdatalookup [".addFields"] [] = "Lookup_value";
$tdatalookup [".addFields"] [] = "created_by";
$tdatalookup [".addFields"] [] = "created_date";
$tdatalookup [".addFields"] [] = "updated_by";
$tdatalookup [".addFields"] [] = "updated_date";
$tdatalookup [".addFields"] [] = "Remarks";

$tdatalookup [".masterListFields"] = array ();
$tdatalookup [".masterListFields"] [] = "Lookup_ID";
$tdatalookup [".masterListFields"] [] = "Category";
$tdatalookup [".masterListFields"] [] = "Lookup_code";
$tdatalookup [".masterListFields"] [] = "Lookup_value";
$tdatalookup [".masterListFields"] [] = "created_by";
$tdatalookup [".masterListFields"] [] = "created_date";
$tdatalookup [".masterListFields"] [] = "updated_by";
$tdatalookup [".masterListFields"] [] = "updated_date";
$tdatalookup [".masterListFields"] [] = "Remarks";

$tdatalookup [".inlineAddFields"] = array ();
$tdatalookup [".inlineAddFields"] [] = "Lookup_ID";
$tdatalookup [".inlineAddFields"] [] = "Category";
$tdatalookup [".inlineAddFields"] [] = "Lookup_code";
$tdatalookup [".inlineAddFields"] [] = "Lookup_value";
$tdatalookup [".inlineAddFields"] [] = "created_by";
$tdatalookup [".inlineAddFields"] [] = "created_date";
$tdatalookup [".inlineAddFields"] [] = "updated_by";
$tdatalookup [".inlineAddFields"] [] = "updated_date";
$tdatalookup [".inlineAddFields"] [] = "Remarks";

$tdatalookup [".editFields"] = array ();
$tdatalookup [".editFields"] [] = "Lookup_ID";
$tdatalookup [".editFields"] [] = "Category";
$tdatalookup [".editFields"] [] = "Lookup_code";
$tdatalookup [".editFields"] [] = "Lookup_value";
$tdatalookup [".editFields"] [] = "created_by";
$tdatalookup [".editFields"] [] = "created_date";
$tdatalookup [".editFields"] [] = "updated_by";
$tdatalookup [".editFields"] [] = "updated_date";
$tdatalookup [".editFields"] [] = "Remarks";

$tdatalookup [".inlineEditFields"] = array ();
$tdatalookup [".inlineEditFields"] [] = "Lookup_ID";
$tdatalookup [".inlineEditFields"] [] = "Category";
$tdatalookup [".inlineEditFields"] [] = "Lookup_code";
$tdatalookup [".inlineEditFields"] [] = "Lookup_value";
$tdatalookup [".inlineEditFields"] [] = "created_by";
$tdatalookup [".inlineEditFields"] [] = "created_date";
$tdatalookup [".inlineEditFields"] [] = "updated_by";
$tdatalookup [".inlineEditFields"] [] = "updated_date";
$tdatalookup [".inlineEditFields"] [] = "Remarks";

$tdatalookup [".exportFields"] = array ();
$tdatalookup [".exportFields"] [] = "Lookup_ID";
$tdatalookup [".exportFields"] [] = "Category";
$tdatalookup [".exportFields"] [] = "Lookup_code";
$tdatalookup [".exportFields"] [] = "Lookup_value";
$tdatalookup [".exportFields"] [] = "created_by";
$tdatalookup [".exportFields"] [] = "created_date";
$tdatalookup [".exportFields"] [] = "updated_by";
$tdatalookup [".exportFields"] [] = "updated_date";
$tdatalookup [".exportFields"] [] = "Remarks";

$tdatalookup [".importFields"] = array ();
$tdatalookup [".importFields"] [] = "Lookup_ID";
$tdatalookup [".importFields"] [] = "Category";
$tdatalookup [".importFields"] [] = "Lookup_code";
$tdatalookup [".importFields"] [] = "Lookup_value";
$tdatalookup [".importFields"] [] = "created_by";
$tdatalookup [".importFields"] [] = "created_date";
$tdatalookup [".importFields"] [] = "updated_by";
$tdatalookup [".importFields"] [] = "updated_date";
$tdatalookup [".importFields"] [] = "Remarks";

$tdatalookup [".printFields"] = array ();
$tdatalookup [".printFields"] [] = "Lookup_ID";
$tdatalookup [".printFields"] [] = "Category";
$tdatalookup [".printFields"] [] = "Lookup_code";
$tdatalookup [".printFields"] [] = "Lookup_value";
$tdatalookup [".printFields"] [] = "created_by";
$tdatalookup [".printFields"] [] = "created_date";
$tdatalookup [".printFields"] [] = "updated_by";
$tdatalookup [".printFields"] [] = "updated_date";
$tdatalookup [".printFields"] [] = "Remarks";

// Lookup_ID
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 1;
$fdata ["strName"] = "Lookup_ID";
$fdata ["GoodName"] = "Lookup_ID";
$fdata ["ownerTable"] = "lookup";
$fdata ["Label"] = GetFieldLabel ( "lookup", "Lookup_ID" );
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

$fdata ["strField"] = "Lookup_ID";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Lookup_ID";

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

$fdata ["EditFormats"] ["edit"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = false;

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

// the end of search options settings

$tdatalookup ["Lookup_ID"] = $fdata;
// Category
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 2;
$fdata ["strName"] = "Category";
$fdata ["GoodName"] = "Category";
$fdata ["ownerTable"] = "lookup";
$fdata ["Label"] = GetFieldLabel ( "lookup", "Category" );
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

$fdata ["strField"] = "Category";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Category";

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

$tdatalookup ["Category"] = $fdata;
// Lookup_code
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 3;
$fdata ["strName"] = "Lookup_code";
$fdata ["GoodName"] = "Lookup_code";
$fdata ["ownerTable"] = "lookup";
$fdata ["Label"] = GetFieldLabel ( "lookup", "Lookup_code" );
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

$fdata ["strField"] = "Lookup_code";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Lookup_code";

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

$tdatalookup ["Lookup_code"] = $fdata;
// Lookup_value
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 4;
$fdata ["strName"] = "Lookup_value";
$fdata ["GoodName"] = "Lookup_value";
$fdata ["ownerTable"] = "lookup";
$fdata ["Label"] = GetFieldLabel ( "lookup", "Lookup_value" );
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

$fdata ["strField"] = "Lookup_value";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Lookup_value";

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

$tdatalookup ["Lookup_value"] = $fdata;
// created_by
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 5;
$fdata ["strName"] = "created_by";
$fdata ["GoodName"] = "created_by";
$fdata ["ownerTable"] = "lookup";
$fdata ["Label"] = GetFieldLabel ( "lookup", "created_by" );
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

$fdata ["strField"] = "created_by";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "created_by";

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

$tdatalookup ["created_by"] = $fdata;
// created_date
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 6;
$fdata ["strName"] = "created_date";
$fdata ["GoodName"] = "created_date";
$fdata ["ownerTable"] = "lookup";
$fdata ["Label"] = GetFieldLabel ( "lookup", "created_date" );
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

$fdata ["strField"] = "created_date";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "created_date";

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

$tdatalookup ["created_date"] = $fdata;
// updated_by
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 7;
$fdata ["strName"] = "updated_by";
$fdata ["GoodName"] = "updated_by";
$fdata ["ownerTable"] = "lookup";
$fdata ["Label"] = GetFieldLabel ( "lookup", "updated_by" );
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

$fdata ["strField"] = "updated_by";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "updated_by";

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

$tdatalookup ["updated_by"] = $fdata;
// updated_date
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 8;
$fdata ["strName"] = "updated_date";
$fdata ["GoodName"] = "updated_date";
$fdata ["ownerTable"] = "lookup";
$fdata ["Label"] = GetFieldLabel ( "lookup", "updated_date" );
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

$tdatalookup ["updated_date"] = $fdata;
// Remarks
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 9;
$fdata ["strName"] = "Remarks";
$fdata ["GoodName"] = "Remarks";
$fdata ["ownerTable"] = "lookup";
$fdata ["Label"] = GetFieldLabel ( "lookup", "Remarks" );
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

$tdatalookup ["Remarks"] = $fdata;

$tables_data ["lookup"] = &$tdatalookup;
$field_labels ["lookup"] = &$fieldLabelslookup;
$fieldToolTips ["lookup"] = &$fieldToolTipslookup;
$page_titles ["lookup"] = &$pageTitleslookup;

// -----------------start prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData ["lookup"] = array ();

// tables which are master tables for current table (detail)
$masterTablesData ["lookup"] = array ();

// -----------------end prepare master-details data arrays ------------------------------//

require_once (getabspath ( "classes/sql.php" ));
function createSqlQuery_lookup() {
	$proto0 = array ();
	$proto0 ["m_strHead"] = "SELECT";
	$proto0 ["m_strFieldList"] = "Lookup_ID,  	Category,  	Lookup_code,  	Lookup_value,  	created_by,  	created_date,  	updated_by,  	updated_date,  	Remarks";
	$proto0 ["m_strFrom"] = "FROM lookup";
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
			"m_strName" => "Lookup_ID",
			"m_strTable" => "lookup",
			"m_srcTableName" => "lookup" 
	) );
	
	$proto5 ["m_sql"] = "Lookup_ID";
	$proto5 ["m_srcTableName"] = "lookup";
	$proto5 ["m_expr"] = $obj;
	$proto5 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto5 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto7 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Category",
			"m_strTable" => "lookup",
			"m_srcTableName" => "lookup" 
	) );
	
	$proto7 ["m_sql"] = "Category";
	$proto7 ["m_srcTableName"] = "lookup";
	$proto7 ["m_expr"] = $obj;
	$proto7 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto7 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto9 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Lookup_code",
			"m_strTable" => "lookup",
			"m_srcTableName" => "lookup" 
	) );
	
	$proto9 ["m_sql"] = "Lookup_code";
	$proto9 ["m_srcTableName"] = "lookup";
	$proto9 ["m_expr"] = $obj;
	$proto9 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto9 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto11 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Lookup_value",
			"m_strTable" => "lookup",
			"m_srcTableName" => "lookup" 
	) );
	
	$proto11 ["m_sql"] = "Lookup_value";
	$proto11 ["m_srcTableName"] = "lookup";
	$proto11 ["m_expr"] = $obj;
	$proto11 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto11 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto13 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "created_by",
			"m_strTable" => "lookup",
			"m_srcTableName" => "lookup" 
	) );
	
	$proto13 ["m_sql"] = "created_by";
	$proto13 ["m_srcTableName"] = "lookup";
	$proto13 ["m_expr"] = $obj;
	$proto13 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto13 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto15 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "created_date",
			"m_strTable" => "lookup",
			"m_srcTableName" => "lookup" 
	) );
	
	$proto15 ["m_sql"] = "created_date";
	$proto15 ["m_srcTableName"] = "lookup";
	$proto15 ["m_expr"] = $obj;
	$proto15 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto15 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto17 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "updated_by",
			"m_strTable" => "lookup",
			"m_srcTableName" => "lookup" 
	) );
	
	$proto17 ["m_sql"] = "updated_by";
	$proto17 ["m_srcTableName"] = "lookup";
	$proto17 ["m_expr"] = $obj;
	$proto17 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto17 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto19 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "updated_date",
			"m_strTable" => "lookup",
			"m_srcTableName" => "lookup" 
	) );
	
	$proto19 ["m_sql"] = "updated_date";
	$proto19 ["m_srcTableName"] = "lookup";
	$proto19 ["m_expr"] = $obj;
	$proto19 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto19 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto21 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Remarks",
			"m_strTable" => "lookup",
			"m_srcTableName" => "lookup" 
	) );
	
	$proto21 ["m_sql"] = "Remarks";
	$proto21 ["m_srcTableName"] = "lookup";
	$proto21 ["m_expr"] = $obj;
	$proto21 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto21 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto0 ["m_fromlist"] = array ();
	$proto23 = array ();
	$proto23 ["m_link"] = "SQLL_MAIN";
	$proto24 = array ();
	$proto24 ["m_strName"] = "lookup";
	$proto24 ["m_srcTableName"] = "lookup";
	$proto24 ["m_columns"] = array ();
	$proto24 ["m_columns"] [] = "Lookup_ID";
	$proto24 ["m_columns"] [] = "Category";
	$proto24 ["m_columns"] [] = "Lookup_code";
	$proto24 ["m_columns"] [] = "Lookup_value";
	$proto24 ["m_columns"] [] = "created_by";
	$proto24 ["m_columns"] [] = "created_date";
	$proto24 ["m_columns"] [] = "updated_by";
	$proto24 ["m_columns"] [] = "updated_date";
	$proto24 ["m_columns"] [] = "Remarks";
	$obj = new SQLTable ( $proto24 );
	
	$proto23 ["m_table"] = $obj;
	$proto23 ["m_sql"] = "lookup";
	$proto23 ["m_alias"] = "";
	$proto23 ["m_srcTableName"] = "lookup";
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
	$proto0 ["m_srcTableName"] = "lookup";
	$obj = new SQLQuery ( $proto0 );
	
	return $obj;
}
$queryData_lookup = createSqlQuery_lookup ();

$tdatalookup [".sqlquery"] = $queryData_lookup;

$tableEvents ["lookup"] = new eventsBase ();
$tdatalookup [".hasEvents"] = false;

?>