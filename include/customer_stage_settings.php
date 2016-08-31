<?php
require_once (getabspath ( "classes/cipherer.php" ));

$tdatacustomer_stage = array ();
$tdatacustomer_stage [".truncateText"] = true;
$tdatacustomer_stage [".NumberOfChars"] = 60;
$tdatacustomer_stage [".ShortName"] = "customer_stage";
$tdatacustomer_stage [".OwnerID"] = "";
$tdatacustomer_stage [".OriginalTable"] = "customer_stage";

// field labels
$fieldLabelscustomer_stage = array ();
$fieldToolTipscustomer_stage = array ();
$pageTitlescustomer_stage = array ();

if (mlang_getcurrentlang () == "English") {
	$fieldLabelscustomer_stage ["English"] = array ();
	$fieldToolTipscustomer_stage ["English"] = array ();
	$pageTitlescustomer_stage ["English"] = array ();
	$fieldLabelscustomer_stage ["English"] ["OracleID"] = "Oracle ID";
	$fieldToolTipscustomer_stage ["English"] ["OracleID"] = "";
	$fieldLabelscustomer_stage ["English"] ["StageCode"] = "Stage Code";
	$fieldToolTipscustomer_stage ["English"] ["StageCode"] = "";
	$fieldLabelscustomer_stage ["English"] ["Start_date"] = "Start Date";
	$fieldToolTipscustomer_stage ["English"] ["Start_date"] = "";
	$fieldLabelscustomer_stage ["English"] ["End_Date"] = "End Date";
	$fieldToolTipscustomer_stage ["English"] ["End_Date"] = "";
	$fieldLabelscustomer_stage ["English"] ["Remarks"] = "Remarks";
	$fieldToolTipscustomer_stage ["English"] ["Remarks"] = "";
	$fieldLabelscustomer_stage ["English"] ["created_by"] = "Created By";
	$fieldToolTipscustomer_stage ["English"] ["created_by"] = "";
	$fieldLabelscustomer_stage ["English"] ["updated_by"] = "Updated By";
	$fieldToolTipscustomer_stage ["English"] ["updated_by"] = "";
	$fieldLabelscustomer_stage ["English"] ["created_date"] = "Created Date";
	$fieldToolTipscustomer_stage ["English"] ["created_date"] = "";
	$fieldLabelscustomer_stage ["English"] ["updated_date"] = "Updated Date";
	$fieldToolTipscustomer_stage ["English"] ["updated_date"] = "";
	if (count ( $fieldToolTipscustomer_stage ["English"] ))
		$tdatacustomer_stage [".isUseToolTips"] = true;
}
if (mlang_getcurrentlang () == "") {
	$fieldLabelscustomer_stage [""] = array ();
	$fieldToolTipscustomer_stage [""] = array ();
	$pageTitlescustomer_stage [""] = array ();
	if (count ( $fieldToolTipscustomer_stage [""] ))
		$tdatacustomer_stage [".isUseToolTips"] = true;
}

$tdatacustomer_stage [".NCSearch"] = true;

$tdatacustomer_stage [".shortTableName"] = "customer_stage";
$tdatacustomer_stage [".nSecOptions"] = 0;
$tdatacustomer_stage [".recsPerRowList"] = 1;
$tdatacustomer_stage [".recsPerRowPrint"] = 1;
$tdatacustomer_stage [".mainTableOwnerID"] = "";
$tdatacustomer_stage [".moveNext"] = 0;
$tdatacustomer_stage [".entityType"] = 0;

$tdatacustomer_stage [".strOriginalTableName"] = "customer_stage";

$tdatacustomer_stage [".showAddInPopup"] = false;

$tdatacustomer_stage [".showEditInPopup"] = false;

$tdatacustomer_stage [".showViewInPopup"] = false;

// page's base css files names
$popupPagesLayoutNames = array ();
$tdatacustomer_stage [".popupPagesLayoutNames"] = $popupPagesLayoutNames;

$tdatacustomer_stage [".fieldsForRegister"] = array ();

$tdatacustomer_stage [".listAjax"] = false;

$tdatacustomer_stage [".audit"] = false;

$tdatacustomer_stage [".locking"] = false;

$tdatacustomer_stage [".list"] = true;

$tdatacustomer_stage [".import"] = true;

$tdatacustomer_stage [".exportTo"] = true;

$tdatacustomer_stage [".printFriendly"] = true;

$tdatacustomer_stage [".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacustomer_stage [".searchSaving"] = false;
//

$tdatacustomer_stage [".showSearchPanel"] = true;
$tdatacustomer_stage [".flexibleSearch"] = true;

if (isMobile ())
	$tdatacustomer_stage [".isUseAjaxSuggest"] = false;
else
	$tdatacustomer_stage [".isUseAjaxSuggest"] = true;

$tdatacustomer_stage [".rowHighlite"] = true;

$tdatacustomer_stage [".addPageEvents"] = false;

// use timepicker for search panel
$tdatacustomer_stage [".isUseTimeForSearch"] = false;

$tdatacustomer_stage [".allSearchFields"] = array ();
$tdatacustomer_stage [".filterFields"] = array ();
$tdatacustomer_stage [".requiredSearchFields"] = array ();

$tdatacustomer_stage [".allSearchFields"] [] = "OracleID";
$tdatacustomer_stage [".allSearchFields"] [] = "StageCode";
$tdatacustomer_stage [".allSearchFields"] [] = "Start_date";
$tdatacustomer_stage [".allSearchFields"] [] = "End_Date";
$tdatacustomer_stage [".allSearchFields"] [] = "Remarks";
$tdatacustomer_stage [".allSearchFields"] [] = "created_by";
$tdatacustomer_stage [".allSearchFields"] [] = "updated_by";
$tdatacustomer_stage [".allSearchFields"] [] = "created_date";
$tdatacustomer_stage [".allSearchFields"] [] = "updated_date";

$tdatacustomer_stage [".googleLikeFields"] = array ();
$tdatacustomer_stage [".googleLikeFields"] [] = "OracleID";
$tdatacustomer_stage [".googleLikeFields"] [] = "StageCode";
$tdatacustomer_stage [".googleLikeFields"] [] = "Start_date";
$tdatacustomer_stage [".googleLikeFields"] [] = "End_Date";
$tdatacustomer_stage [".googleLikeFields"] [] = "Remarks";
$tdatacustomer_stage [".googleLikeFields"] [] = "created_by";
$tdatacustomer_stage [".googleLikeFields"] [] = "updated_by";
$tdatacustomer_stage [".googleLikeFields"] [] = "created_date";
$tdatacustomer_stage [".googleLikeFields"] [] = "updated_date";

$tdatacustomer_stage [".advSearchFields"] = array ();
$tdatacustomer_stage [".advSearchFields"] [] = "OracleID";
$tdatacustomer_stage [".advSearchFields"] [] = "StageCode";
$tdatacustomer_stage [".advSearchFields"] [] = "Start_date";
$tdatacustomer_stage [".advSearchFields"] [] = "End_Date";
$tdatacustomer_stage [".advSearchFields"] [] = "Remarks";
$tdatacustomer_stage [".advSearchFields"] [] = "created_by";
$tdatacustomer_stage [".advSearchFields"] [] = "updated_by";
$tdatacustomer_stage [".advSearchFields"] [] = "created_date";
$tdatacustomer_stage [".advSearchFields"] [] = "updated_date";

$tdatacustomer_stage [".tableType"] = "list";

$tdatacustomer_stage [".printerPageOrientation"] = 0;
$tdatacustomer_stage [".nPrinterPageScale"] = 100;

$tdatacustomer_stage [".nPrinterSplitRecords"] = 40;

$tdatacustomer_stage [".nPrinterPDFSplitRecords"] = 40;

$tdatacustomer_stage [".geocodingEnabled"] = false;

// view page pdf

// print page pdf

$tdatacustomer_stage [".pageSize"] = 10;

$tdatacustomer_stage [".warnLeavingPages"] = true;

$tstrOrderBy = "";
if (strlen ( $tstrOrderBy ) && strtolower ( substr ( $tstrOrderBy, 0, 8 ) ) != "order by")
	$tstrOrderBy = "order by " . $tstrOrderBy;
$tdatacustomer_stage [".strOrderBy"] = $tstrOrderBy;

$tdatacustomer_stage [".orderindexes"] = array ();

$tdatacustomer_stage [".sqlHead"] = "SELECT OracleID,  	StageCode,  	Start_date,  	End_Date,  	Remarks,  	created_by,  	updated_by,  	created_date,  	updated_date";
$tdatacustomer_stage [".sqlFrom"] = "FROM customer_stage";
$tdatacustomer_stage [".sqlWhereExpr"] = "";
$tdatacustomer_stage [".sqlTail"] = "";

// fill array of records per page for list and report without group fields
$arrRPP = array ();
$arrRPP [] = 10;
$arrRPP [] = 20;
$arrRPP [] = 30;
$arrRPP [] = 50;
$arrRPP [] = 100;
$arrRPP [] = 500;
$arrRPP [] = - 1;
$tdatacustomer_stage [".arrRecsPerPage"] = $arrRPP;

// fill array of groups per page for report with group fields
$arrGPP = array ();
$arrGPP [] = 1;
$arrGPP [] = 3;
$arrGPP [] = 5;
$arrGPP [] = 10;
$arrGPP [] = 50;
$arrGPP [] = 100;
$arrGPP [] = - 1;
$tdatacustomer_stage [".arrGroupsPerPage"] = $arrGPP;

$tableKeyscustomer_stage = array ();
$tdatacustomer_stage [".Keys"] = $tableKeyscustomer_stage;

$tdatacustomer_stage [".listFields"] = array ();
$tdatacustomer_stage [".listFields"] [] = "OracleID";
$tdatacustomer_stage [".listFields"] [] = "StageCode";
$tdatacustomer_stage [".listFields"] [] = "Start_date";
$tdatacustomer_stage [".listFields"] [] = "End_Date";
$tdatacustomer_stage [".listFields"] [] = "Remarks";
$tdatacustomer_stage [".listFields"] [] = "created_by";
$tdatacustomer_stage [".listFields"] [] = "updated_by";
$tdatacustomer_stage [".listFields"] [] = "created_date";
$tdatacustomer_stage [".listFields"] [] = "updated_date";

$tdatacustomer_stage [".hideMobileList"] = array ();

$tdatacustomer_stage [".viewFields"] = array ();

$tdatacustomer_stage [".addFields"] = array ();

$tdatacustomer_stage [".masterListFields"] = array ();
$tdatacustomer_stage [".masterListFields"] [] = "OracleID";
$tdatacustomer_stage [".masterListFields"] [] = "StageCode";
$tdatacustomer_stage [".masterListFields"] [] = "Start_date";
$tdatacustomer_stage [".masterListFields"] [] = "End_Date";
$tdatacustomer_stage [".masterListFields"] [] = "Remarks";
$tdatacustomer_stage [".masterListFields"] [] = "created_by";
$tdatacustomer_stage [".masterListFields"] [] = "updated_by";
$tdatacustomer_stage [".masterListFields"] [] = "created_date";
$tdatacustomer_stage [".masterListFields"] [] = "updated_date";

$tdatacustomer_stage [".inlineAddFields"] = array ();

$tdatacustomer_stage [".editFields"] = array ();

$tdatacustomer_stage [".inlineEditFields"] = array ();

$tdatacustomer_stage [".exportFields"] = array ();
$tdatacustomer_stage [".exportFields"] [] = "OracleID";
$tdatacustomer_stage [".exportFields"] [] = "StageCode";
$tdatacustomer_stage [".exportFields"] [] = "Start_date";
$tdatacustomer_stage [".exportFields"] [] = "End_Date";
$tdatacustomer_stage [".exportFields"] [] = "Remarks";
$tdatacustomer_stage [".exportFields"] [] = "created_by";
$tdatacustomer_stage [".exportFields"] [] = "updated_by";
$tdatacustomer_stage [".exportFields"] [] = "created_date";
$tdatacustomer_stage [".exportFields"] [] = "updated_date";

$tdatacustomer_stage [".importFields"] = array ();
$tdatacustomer_stage [".importFields"] [] = "OracleID";
$tdatacustomer_stage [".importFields"] [] = "StageCode";
$tdatacustomer_stage [".importFields"] [] = "Start_date";
$tdatacustomer_stage [".importFields"] [] = "End_Date";
$tdatacustomer_stage [".importFields"] [] = "Remarks";
$tdatacustomer_stage [".importFields"] [] = "created_by";
$tdatacustomer_stage [".importFields"] [] = "updated_by";
$tdatacustomer_stage [".importFields"] [] = "created_date";
$tdatacustomer_stage [".importFields"] [] = "updated_date";

$tdatacustomer_stage [".printFields"] = array ();
$tdatacustomer_stage [".printFields"] [] = "OracleID";
$tdatacustomer_stage [".printFields"] [] = "StageCode";
$tdatacustomer_stage [".printFields"] [] = "Start_date";
$tdatacustomer_stage [".printFields"] [] = "End_Date";
$tdatacustomer_stage [".printFields"] [] = "Remarks";
$tdatacustomer_stage [".printFields"] [] = "created_by";
$tdatacustomer_stage [".printFields"] [] = "updated_by";
$tdatacustomer_stage [".printFields"] [] = "created_date";
$tdatacustomer_stage [".printFields"] [] = "updated_date";

// OracleID
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 1;
$fdata ["strName"] = "OracleID";
$fdata ["GoodName"] = "OracleID";
$fdata ["ownerTable"] = "customer_stage";
$fdata ["Label"] = GetFieldLabel ( "customer_stage", "OracleID" );
$fdata ["FieldType"] = 3;

$fdata ["bListPage"] = true;

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

$tdatacustomer_stage ["OracleID"] = $fdata;
// StageCode
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 2;
$fdata ["strName"] = "StageCode";
$fdata ["GoodName"] = "StageCode";
$fdata ["ownerTable"] = "customer_stage";
$fdata ["Label"] = GetFieldLabel ( "customer_stage", "StageCode" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "StageCode";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "StageCode";

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

$tdatacustomer_stage ["StageCode"] = $fdata;
// Start_date
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 3;
$fdata ["strName"] = "Start_date";
$fdata ["GoodName"] = "Start_date";
$fdata ["ownerTable"] = "customer_stage";
$fdata ["Label"] = GetFieldLabel ( "customer_stage", "Start_date" );
$fdata ["FieldType"] = 7;

$fdata ["bListPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Start_date";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Start_date";

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

$tdatacustomer_stage ["Start_date"] = $fdata;
// End_Date
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 4;
$fdata ["strName"] = "End_Date";
$fdata ["GoodName"] = "End_Date";
$fdata ["ownerTable"] = "customer_stage";
$fdata ["Label"] = GetFieldLabel ( "customer_stage", "End_Date" );
$fdata ["FieldType"] = 7;

$fdata ["bListPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "End_Date";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "End_Date";

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

$tdatacustomer_stage ["End_Date"] = $fdata;
// Remarks
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 5;
$fdata ["strName"] = "Remarks";
$fdata ["GoodName"] = "Remarks";
$fdata ["ownerTable"] = "customer_stage";
$fdata ["Label"] = GetFieldLabel ( "customer_stage", "Remarks" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

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

$tdatacustomer_stage ["Remarks"] = $fdata;
// created_by
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 6;
$fdata ["strName"] = "created_by";
$fdata ["GoodName"] = "created_by";
$fdata ["ownerTable"] = "customer_stage";
$fdata ["Label"] = GetFieldLabel ( "customer_stage", "created_by" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

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

$tdatacustomer_stage ["created_by"] = $fdata;
// updated_by
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 7;
$fdata ["strName"] = "updated_by";
$fdata ["GoodName"] = "updated_by";
$fdata ["ownerTable"] = "customer_stage";
$fdata ["Label"] = GetFieldLabel ( "customer_stage", "updated_by" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

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

$tdatacustomer_stage ["updated_by"] = $fdata;
// created_date
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 8;
$fdata ["strName"] = "created_date";
$fdata ["GoodName"] = "created_date";
$fdata ["ownerTable"] = "customer_stage";
$fdata ["Label"] = GetFieldLabel ( "customer_stage", "created_date" );
$fdata ["FieldType"] = 135;

$fdata ["bListPage"] = true;

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

$tdatacustomer_stage ["created_date"] = $fdata;
// updated_date
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 9;
$fdata ["strName"] = "updated_date";
$fdata ["GoodName"] = "updated_date";
$fdata ["ownerTable"] = "customer_stage";
$fdata ["Label"] = GetFieldLabel ( "customer_stage", "updated_date" );
$fdata ["FieldType"] = 135;

$fdata ["bListPage"] = true;

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

$tdatacustomer_stage ["updated_date"] = $fdata;

$tables_data ["customer_stage"] = &$tdatacustomer_stage;
$field_labels ["customer_stage"] = &$fieldLabelscustomer_stage;
$fieldToolTips ["customer_stage"] = &$fieldToolTipscustomer_stage;
$page_titles ["customer_stage"] = &$pageTitlescustomer_stage;

// -----------------start prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData ["customer_stage"] = array ();

// tables which are master tables for current table (detail)
$masterTablesData ["customer_stage"] = array ();

// -----------------end prepare master-details data arrays ------------------------------//

require_once (getabspath ( "classes/sql.php" ));
function createSqlQuery_customer_stage() {
	$proto0 = array ();
	$proto0 ["m_strHead"] = "SELECT";
	$proto0 ["m_strFieldList"] = "OracleID,  	StageCode,  	Start_date,  	End_Date,  	Remarks,  	created_by,  	updated_by,  	created_date,  	updated_date";
	$proto0 ["m_strFrom"] = "FROM customer_stage";
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
			"m_strName" => "OracleID",
			"m_strTable" => "customer_stage",
			"m_srcTableName" => "customer_stage" 
	) );
	
	$proto5 ["m_sql"] = "OracleID";
	$proto5 ["m_srcTableName"] = "customer_stage";
	$proto5 ["m_expr"] = $obj;
	$proto5 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto5 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto7 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "StageCode",
			"m_strTable" => "customer_stage",
			"m_srcTableName" => "customer_stage" 
	) );
	
	$proto7 ["m_sql"] = "StageCode";
	$proto7 ["m_srcTableName"] = "customer_stage";
	$proto7 ["m_expr"] = $obj;
	$proto7 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto7 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto9 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Start_date",
			"m_strTable" => "customer_stage",
			"m_srcTableName" => "customer_stage" 
	) );
	
	$proto9 ["m_sql"] = "Start_date";
	$proto9 ["m_srcTableName"] = "customer_stage";
	$proto9 ["m_expr"] = $obj;
	$proto9 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto9 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto11 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "End_Date",
			"m_strTable" => "customer_stage",
			"m_srcTableName" => "customer_stage" 
	) );
	
	$proto11 ["m_sql"] = "End_Date";
	$proto11 ["m_srcTableName"] = "customer_stage";
	$proto11 ["m_expr"] = $obj;
	$proto11 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto11 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto13 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Remarks",
			"m_strTable" => "customer_stage",
			"m_srcTableName" => "customer_stage" 
	) );
	
	$proto13 ["m_sql"] = "Remarks";
	$proto13 ["m_srcTableName"] = "customer_stage";
	$proto13 ["m_expr"] = $obj;
	$proto13 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto13 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto15 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "created_by",
			"m_strTable" => "customer_stage",
			"m_srcTableName" => "customer_stage" 
	) );
	
	$proto15 ["m_sql"] = "created_by";
	$proto15 ["m_srcTableName"] = "customer_stage";
	$proto15 ["m_expr"] = $obj;
	$proto15 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto15 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto17 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "updated_by",
			"m_strTable" => "customer_stage",
			"m_srcTableName" => "customer_stage" 
	) );
	
	$proto17 ["m_sql"] = "updated_by";
	$proto17 ["m_srcTableName"] = "customer_stage";
	$proto17 ["m_expr"] = $obj;
	$proto17 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto17 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto19 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "created_date",
			"m_strTable" => "customer_stage",
			"m_srcTableName" => "customer_stage" 
	) );
	
	$proto19 ["m_sql"] = "created_date";
	$proto19 ["m_srcTableName"] = "customer_stage";
	$proto19 ["m_expr"] = $obj;
	$proto19 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto19 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto21 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "updated_date",
			"m_strTable" => "customer_stage",
			"m_srcTableName" => "customer_stage" 
	) );
	
	$proto21 ["m_sql"] = "updated_date";
	$proto21 ["m_srcTableName"] = "customer_stage";
	$proto21 ["m_expr"] = $obj;
	$proto21 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto21 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto0 ["m_fromlist"] = array ();
	$proto23 = array ();
	$proto23 ["m_link"] = "SQLL_MAIN";
	$proto24 = array ();
	$proto24 ["m_strName"] = "customer_stage";
	$proto24 ["m_srcTableName"] = "customer_stage";
	$proto24 ["m_columns"] = array ();
	$proto24 ["m_columns"] [] = "OracleID";
	$proto24 ["m_columns"] [] = "StageCode";
	$proto24 ["m_columns"] [] = "Start_date";
	$proto24 ["m_columns"] [] = "End_Date";
	$proto24 ["m_columns"] [] = "Remarks";
	$proto24 ["m_columns"] [] = "created_by";
	$proto24 ["m_columns"] [] = "updated_by";
	$proto24 ["m_columns"] [] = "created_date";
	$proto24 ["m_columns"] [] = "updated_date";
	$obj = new SQLTable ( $proto24 );
	
	$proto23 ["m_table"] = $obj;
	$proto23 ["m_sql"] = "customer_stage";
	$proto23 ["m_alias"] = "";
	$proto23 ["m_srcTableName"] = "customer_stage";
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
	$proto0 ["m_srcTableName"] = "customer_stage";
	$obj = new SQLQuery ( $proto0 );
	
	return $obj;
}
$queryData_customer_stage = createSqlQuery_customer_stage ();

$tdatacustomer_stage [".sqlquery"] = $queryData_customer_stage;

$tableEvents ["customer_stage"] = new eventsBase ();
$tdatacustomer_stage [".hasEvents"] = false;

?>