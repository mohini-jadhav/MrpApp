<?php
require_once (getabspath ( "classes/cipherer.php" ));

$tdataadmin_members = array ();
$tdataadmin_members [".truncateText"] = true;
$tdataadmin_members [".NumberOfChars"] = 60;
$tdataadmin_members [".ShortName"] = "admin_members";
$tdataadmin_members [".OwnerID"] = "";
$tdataadmin_members [".OriginalTable"] = "users";

// field labels
$fieldLabelsadmin_members = array ();
$fieldToolTipsadmin_members = array ();
$pageTitlesadmin_members = array ();

if (mlang_getcurrentlang () == "English") {
	$fieldLabelsadmin_members ["English"] = array ();
	$fieldToolTipsadmin_members ["English"] = array ();
	$pageTitlesadmin_members ["English"] = array ();
	$fieldLabelsadmin_members ["English"] ["AutUserID"] = "Aut User ID";
	$fieldToolTipsadmin_members ["English"] ["AutUserID"] = "";
	$fieldLabelsadmin_members ["English"] ["UserName"] = "User Name";
	$fieldToolTipsadmin_members ["English"] ["UserName"] = "";
	$fieldLabelsadmin_members ["English"] ["Password"] = "Password";
	$fieldToolTipsadmin_members ["English"] ["Password"] = "";
	$fieldLabelsadmin_members ["English"] ["Email"] = "Email";
	$fieldToolTipsadmin_members ["English"] ["Email"] = "";
	$fieldLabelsadmin_members ["English"] ["GroupName"] = "Group Name";
	$fieldToolTipsadmin_members ["English"] ["GroupName"] = "";
	$fieldLabelsadmin_members ["English"] ["Active"] = "Active";
	$fieldToolTipsadmin_members ["English"] ["Active"] = "";
	$fieldLabelsadmin_members ["English"] ["Logo"] = "Logo";
	$fieldToolTipsadmin_members ["English"] ["Logo"] = "";
	$fieldLabelsadmin_members ["English"] ["FullName"] = "Full Name";
	$fieldToolTipsadmin_members ["English"] ["FullName"] = "";
	if (count ( $fieldToolTipsadmin_members ["English"] ))
		$tdataadmin_members [".isUseToolTips"] = true;
}
if (mlang_getcurrentlang () == "") {
	$fieldLabelsadmin_members [""] = array ();
	$fieldToolTipsadmin_members [""] = array ();
	$pageTitlesadmin_members [""] = array ();
	if (count ( $fieldToolTipsadmin_members [""] ))
		$tdataadmin_members [".isUseToolTips"] = true;
}

$tdataadmin_members [".NCSearch"] = true;

$tdataadmin_members [".shortTableName"] = "admin_members";
$tdataadmin_members [".nSecOptions"] = 0;
$tdataadmin_members [".recsPerRowList"] = 1;
$tdataadmin_members [".recsPerRowPrint"] = 1;
$tdataadmin_members [".mainTableOwnerID"] = "";
$tdataadmin_members [".moveNext"] = 0;
$tdataadmin_members [".entityType"] = 1;

$tdataadmin_members [".strOriginalTableName"] = "users";

$tdataadmin_members [".showAddInPopup"] = false;

$tdataadmin_members [".showEditInPopup"] = false;

$tdataadmin_members [".showViewInPopup"] = false;

// page's base css files names
$popupPagesLayoutNames = array ();
$tdataadmin_members [".popupPagesLayoutNames"] = $popupPagesLayoutNames;

$tdataadmin_members [".fieldsForRegister"] = array ();

$tdataadmin_members [".listAjax"] = false;

$tdataadmin_members [".audit"] = false;

$tdataadmin_members [".locking"] = false;

$tdataadmin_members [".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataadmin_members [".searchSaving"] = false;
//

$tdataadmin_members [".showSearchPanel"] = true;
$tdataadmin_members [".flexibleSearch"] = true;

if (isMobile ())
	$tdataadmin_members [".isUseAjaxSuggest"] = false;
else
	$tdataadmin_members [".isUseAjaxSuggest"] = true;

$tdataadmin_members [".rowHighlite"] = true;

$tdataadmin_members [".addPageEvents"] = false;

// use timepicker for search panel
$tdataadmin_members [".isUseTimeForSearch"] = false;

$tdataadmin_members [".allSearchFields"] = array ();
$tdataadmin_members [".filterFields"] = array ();
$tdataadmin_members [".requiredSearchFields"] = array ();

$tdataadmin_members [".allSearchFields"] [] = "AutUserID";
$tdataadmin_members [".allSearchFields"] [] = "UserName";
$tdataadmin_members [".allSearchFields"] [] = "Password";
$tdataadmin_members [".allSearchFields"] [] = "Email";
$tdataadmin_members [".allSearchFields"] [] = "GroupName";
$tdataadmin_members [".allSearchFields"] [] = "Active";
$tdataadmin_members [".allSearchFields"] [] = "Logo";
$tdataadmin_members [".allSearchFields"] [] = "FullName";

$tdataadmin_members [".googleLikeFields"] = array ();
$tdataadmin_members [".googleLikeFields"] [] = "AutUserID";
$tdataadmin_members [".googleLikeFields"] [] = "UserName";
$tdataadmin_members [".googleLikeFields"] [] = "Password";
$tdataadmin_members [".googleLikeFields"] [] = "Email";
$tdataadmin_members [".googleLikeFields"] [] = "GroupName";
$tdataadmin_members [".googleLikeFields"] [] = "Active";
$tdataadmin_members [".googleLikeFields"] [] = "Logo";
$tdataadmin_members [".googleLikeFields"] [] = "FullName";

$tdataadmin_members [".advSearchFields"] = array ();
$tdataadmin_members [".advSearchFields"] [] = "AutUserID";
$tdataadmin_members [".advSearchFields"] [] = "UserName";
$tdataadmin_members [".advSearchFields"] [] = "Password";
$tdataadmin_members [".advSearchFields"] [] = "Email";
$tdataadmin_members [".advSearchFields"] [] = "GroupName";
$tdataadmin_members [".advSearchFields"] [] = "Active";
$tdataadmin_members [".advSearchFields"] [] = "Logo";
$tdataadmin_members [".advSearchFields"] [] = "FullName";

$tdataadmin_members [".tableType"] = "list";

$tdataadmin_members [".printerPageOrientation"] = 0;
$tdataadmin_members [".nPrinterPageScale"] = 100;

$tdataadmin_members [".nPrinterSplitRecords"] = 40;

$tdataadmin_members [".nPrinterPDFSplitRecords"] = 40;

$tdataadmin_members [".geocodingEnabled"] = false;

// view page pdf

// print page pdf

$tdataadmin_members [".pageSize"] = 10;

$tdataadmin_members [".warnLeavingPages"] = true;

$tstrOrderBy = "";
if (strlen ( $tstrOrderBy ) && strtolower ( substr ( $tstrOrderBy, 0, 8 ) ) != "order by")
	$tstrOrderBy = "order by " . $tstrOrderBy;
$tdataadmin_members [".strOrderBy"] = $tstrOrderBy;

$tdataadmin_members [".orderindexes"] = array ();

$tdataadmin_members [".sqlHead"] = "SELECT AutUserID,  	UserName,  	Password,  	Email,  	GroupName,  	Active,  	Logo,  	FullName";
$tdataadmin_members [".sqlFrom"] = "FROM users";
$tdataadmin_members [".sqlWhereExpr"] = "";
$tdataadmin_members [".sqlTail"] = "";

// fill array of records per page for list and report without group fields
$arrRPP = array ();
$arrRPP [] = 10;
$arrRPP [] = 20;
$arrRPP [] = 30;
$arrRPP [] = 50;
$arrRPP [] = 100;
$arrRPP [] = 500;
$arrRPP [] = - 1;
$tdataadmin_members [".arrRecsPerPage"] = $arrRPP;

// fill array of groups per page for report with group fields
$arrGPP = array ();
$arrGPP [] = 1;
$arrGPP [] = 3;
$arrGPP [] = 5;
$arrGPP [] = 10;
$arrGPP [] = 50;
$arrGPP [] = 100;
$arrGPP [] = - 1;
$tdataadmin_members [".arrGroupsPerPage"] = $arrGPP;

$tableKeysadmin_members = array ();
$tableKeysadmin_members [] = "AutUserID";
$tdataadmin_members [".Keys"] = $tableKeysadmin_members;

$tdataadmin_members [".listFields"] = array ();
$tdataadmin_members [".listFields"] [] = "AutUserID";
$tdataadmin_members [".listFields"] [] = "UserName";
$tdataadmin_members [".listFields"] [] = "Password";
$tdataadmin_members [".listFields"] [] = "Email";
$tdataadmin_members [".listFields"] [] = "GroupName";
$tdataadmin_members [".listFields"] [] = "Active";
$tdataadmin_members [".listFields"] [] = "Logo";
$tdataadmin_members [".listFields"] [] = "FullName";

$tdataadmin_members [".hideMobileList"] = array ();

$tdataadmin_members [".viewFields"] = array ();
$tdataadmin_members [".viewFields"] [] = "AutUserID";
$tdataadmin_members [".viewFields"] [] = "UserName";
$tdataadmin_members [".viewFields"] [] = "Password";
$tdataadmin_members [".viewFields"] [] = "Email";
$tdataadmin_members [".viewFields"] [] = "GroupName";
$tdataadmin_members [".viewFields"] [] = "Active";
$tdataadmin_members [".viewFields"] [] = "Logo";
$tdataadmin_members [".viewFields"] [] = "FullName";

$tdataadmin_members [".addFields"] = array ();
$tdataadmin_members [".addFields"] [] = "UserName";
$tdataadmin_members [".addFields"] [] = "Password";
$tdataadmin_members [".addFields"] [] = "Email";
$tdataadmin_members [".addFields"] [] = "GroupName";
$tdataadmin_members [".addFields"] [] = "Active";
$tdataadmin_members [".addFields"] [] = "Logo";
$tdataadmin_members [".addFields"] [] = "FullName";

$tdataadmin_members [".masterListFields"] = array ();
$tdataadmin_members [".masterListFields"] [] = "AutUserID";
$tdataadmin_members [".masterListFields"] [] = "UserName";
$tdataadmin_members [".masterListFields"] [] = "Password";
$tdataadmin_members [".masterListFields"] [] = "Email";
$tdataadmin_members [".masterListFields"] [] = "GroupName";
$tdataadmin_members [".masterListFields"] [] = "Active";
$tdataadmin_members [".masterListFields"] [] = "Logo";
$tdataadmin_members [".masterListFields"] [] = "FullName";

$tdataadmin_members [".inlineAddFields"] = array ();
$tdataadmin_members [".inlineAddFields"] [] = "UserName";
$tdataadmin_members [".inlineAddFields"] [] = "Password";
$tdataadmin_members [".inlineAddFields"] [] = "Email";
$tdataadmin_members [".inlineAddFields"] [] = "GroupName";
$tdataadmin_members [".inlineAddFields"] [] = "Active";
$tdataadmin_members [".inlineAddFields"] [] = "Logo";
$tdataadmin_members [".inlineAddFields"] [] = "FullName";

$tdataadmin_members [".editFields"] = array ();
$tdataadmin_members [".editFields"] [] = "UserName";
$tdataadmin_members [".editFields"] [] = "Password";
$tdataadmin_members [".editFields"] [] = "Email";
$tdataadmin_members [".editFields"] [] = "GroupName";
$tdataadmin_members [".editFields"] [] = "Active";
$tdataadmin_members [".editFields"] [] = "Logo";
$tdataadmin_members [".editFields"] [] = "FullName";

$tdataadmin_members [".inlineEditFields"] = array ();
$tdataadmin_members [".inlineEditFields"] [] = "UserName";
$tdataadmin_members [".inlineEditFields"] [] = "Password";
$tdataadmin_members [".inlineEditFields"] [] = "Email";
$tdataadmin_members [".inlineEditFields"] [] = "GroupName";
$tdataadmin_members [".inlineEditFields"] [] = "Active";
$tdataadmin_members [".inlineEditFields"] [] = "Logo";
$tdataadmin_members [".inlineEditFields"] [] = "FullName";

$tdataadmin_members [".exportFields"] = array ();
$tdataadmin_members [".exportFields"] [] = "AutUserID";
$tdataadmin_members [".exportFields"] [] = "UserName";
$tdataadmin_members [".exportFields"] [] = "Password";
$tdataadmin_members [".exportFields"] [] = "Email";
$tdataadmin_members [".exportFields"] [] = "GroupName";
$tdataadmin_members [".exportFields"] [] = "Active";
$tdataadmin_members [".exportFields"] [] = "Logo";
$tdataadmin_members [".exportFields"] [] = "FullName";

$tdataadmin_members [".importFields"] = array ();
$tdataadmin_members [".importFields"] [] = "AutUserID";
$tdataadmin_members [".importFields"] [] = "UserName";
$tdataadmin_members [".importFields"] [] = "Password";
$tdataadmin_members [".importFields"] [] = "Email";
$tdataadmin_members [".importFields"] [] = "GroupName";
$tdataadmin_members [".importFields"] [] = "Active";
$tdataadmin_members [".importFields"] [] = "Logo";
$tdataadmin_members [".importFields"] [] = "FullName";

$tdataadmin_members [".printFields"] = array ();
$tdataadmin_members [".printFields"] [] = "AutUserID";
$tdataadmin_members [".printFields"] [] = "UserName";
$tdataadmin_members [".printFields"] [] = "Password";
$tdataadmin_members [".printFields"] [] = "Email";
$tdataadmin_members [".printFields"] [] = "GroupName";
$tdataadmin_members [".printFields"] [] = "Active";
$tdataadmin_members [".printFields"] [] = "Logo";
$tdataadmin_members [".printFields"] [] = "FullName";

// AutUserID
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 1;
$fdata ["strName"] = "AutUserID";
$fdata ["GoodName"] = "AutUserID";
$fdata ["ownerTable"] = "users";
$fdata ["Label"] = GetFieldLabel ( "admin_members", "AutUserID" );
$fdata ["FieldType"] = 3;

$fdata ["AutoInc"] = true;

$fdata ["bListPage"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "AutUserID";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "AutUserID";

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

$tdataadmin_members ["AutUserID"] = $fdata;
// UserName
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 2;
$fdata ["strName"] = "UserName";
$fdata ["GoodName"] = "UserName";
$fdata ["ownerTable"] = "users";
$fdata ["Label"] = GetFieldLabel ( "admin_members", "UserName" );
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

$fdata ["strField"] = "UserName";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "UserName";

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
$edata ["EditParams"] .= " maxlength=50";

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

$tdataadmin_members ["UserName"] = $fdata;
// Password
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 3;
$fdata ["strName"] = "Password";
$fdata ["GoodName"] = "Password";
$fdata ["ownerTable"] = "users";
$fdata ["Label"] = GetFieldLabel ( "admin_members", "Password" );
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

$fdata ["strField"] = "Password";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Password";

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
		"EditFormat" => "Password" 
);

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["EditParams"] = "";
$edata ["EditParams"] .= " maxlength=50";

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

$tdataadmin_members ["Password"] = $fdata;
// Email
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 4;
$fdata ["strName"] = "Email";
$fdata ["GoodName"] = "Email";
$fdata ["ownerTable"] = "users";
$fdata ["Label"] = GetFieldLabel ( "admin_members", "Email" );
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

$fdata ["strField"] = "Email";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Email";

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
$edata ["EditParams"] .= " maxlength=50";

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

$tdataadmin_members ["Email"] = $fdata;
// GroupName
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 5;
$fdata ["strName"] = "GroupName";
$fdata ["GoodName"] = "GroupName";
$fdata ["ownerTable"] = "users";
$fdata ["Label"] = GetFieldLabel ( "admin_members", "GroupName" );
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

$fdata ["strField"] = "GroupName";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "GroupName";

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
$edata ["EditParams"] .= " maxlength=50";

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

$tdataadmin_members ["GroupName"] = $fdata;
// Active
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 6;
$fdata ["strName"] = "Active";
$fdata ["GoodName"] = "Active";
$fdata ["ownerTable"] = "users";
$fdata ["Label"] = GetFieldLabel ( "admin_members", "Active" );
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

$fdata ["strField"] = "Active";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Active";

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

$tdataadmin_members ["Active"] = $fdata;
// Logo
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 7;
$fdata ["strName"] = "Logo";
$fdata ["GoodName"] = "Logo";
$fdata ["ownerTable"] = "users";
$fdata ["Label"] = GetFieldLabel ( "admin_members", "Logo" );
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

$fdata ["strField"] = "Logo";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Logo";

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
$edata ["EditParams"] .= " maxlength=50";

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

$tdataadmin_members ["Logo"] = $fdata;
// FullName
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 8;
$fdata ["strName"] = "FullName";
$fdata ["GoodName"] = "FullName";
$fdata ["ownerTable"] = "users";
$fdata ["Label"] = GetFieldLabel ( "admin_members", "FullName" );
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

$fdata ["strField"] = "FullName";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "FullName";

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
$edata ["EditParams"] .= " maxlength=50";

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

$tdataadmin_members ["FullName"] = $fdata;

$tables_data ["admin_members"] = &$tdataadmin_members;
$field_labels ["admin_members"] = &$fieldLabelsadmin_members;
$fieldToolTips ["admin_members"] = &$fieldToolTipsadmin_members;
$page_titles ["admin_members"] = &$pageTitlesadmin_members;

// -----------------start prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData ["admin_members"] = array ();

// tables which are master tables for current table (detail)
$masterTablesData ["admin_members"] = array ();

// -----------------end prepare master-details data arrays ------------------------------//

require_once (getabspath ( "classes/sql.php" ));
function createSqlQuery_admin_members() {
	$proto0 = array ();
	$proto0 ["m_strHead"] = "SELECT";
	$proto0 ["m_strFieldList"] = "AutUserID,  	UserName,  	Password,  	Email,  	GroupName,  	Active,  	Logo,  	FullName";
	$proto0 ["m_strFrom"] = "FROM users";
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
			"m_strName" => "AutUserID",
			"m_strTable" => "users",
			"m_srcTableName" => "admin_members" 
	) );
	
	$proto5 ["m_sql"] = "AutUserID";
	$proto5 ["m_srcTableName"] = "admin_members";
	$proto5 ["m_expr"] = $obj;
	$proto5 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto5 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto7 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "UserName",
			"m_strTable" => "users",
			"m_srcTableName" => "admin_members" 
	) );
	
	$proto7 ["m_sql"] = "UserName";
	$proto7 ["m_srcTableName"] = "admin_members";
	$proto7 ["m_expr"] = $obj;
	$proto7 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto7 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto9 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Password",
			"m_strTable" => "users",
			"m_srcTableName" => "admin_members" 
	) );
	
	$proto9 ["m_sql"] = "Password";
	$proto9 ["m_srcTableName"] = "admin_members";
	$proto9 ["m_expr"] = $obj;
	$proto9 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto9 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto11 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Email",
			"m_strTable" => "users",
			"m_srcTableName" => "admin_members" 
	) );
	
	$proto11 ["m_sql"] = "Email";
	$proto11 ["m_srcTableName"] = "admin_members";
	$proto11 ["m_expr"] = $obj;
	$proto11 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto11 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto13 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "GroupName",
			"m_strTable" => "users",
			"m_srcTableName" => "admin_members" 
	) );
	
	$proto13 ["m_sql"] = "GroupName";
	$proto13 ["m_srcTableName"] = "admin_members";
	$proto13 ["m_expr"] = $obj;
	$proto13 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto13 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto15 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Active",
			"m_strTable" => "users",
			"m_srcTableName" => "admin_members" 
	) );
	
	$proto15 ["m_sql"] = "Active";
	$proto15 ["m_srcTableName"] = "admin_members";
	$proto15 ["m_expr"] = $obj;
	$proto15 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto15 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto17 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Logo",
			"m_strTable" => "users",
			"m_srcTableName" => "admin_members" 
	) );
	
	$proto17 ["m_sql"] = "Logo";
	$proto17 ["m_srcTableName"] = "admin_members";
	$proto17 ["m_expr"] = $obj;
	$proto17 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto17 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto19 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "FullName",
			"m_strTable" => "users",
			"m_srcTableName" => "admin_members" 
	) );
	
	$proto19 ["m_sql"] = "FullName";
	$proto19 ["m_srcTableName"] = "admin_members";
	$proto19 ["m_expr"] = $obj;
	$proto19 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto19 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto0 ["m_fromlist"] = array ();
	$proto21 = array ();
	$proto21 ["m_link"] = "SQLL_MAIN";
	$proto22 = array ();
	$proto22 ["m_strName"] = "users";
	$proto22 ["m_srcTableName"] = "admin_members";
	$proto22 ["m_columns"] = array ();
	$proto22 ["m_columns"] [] = "AutUserID";
	$proto22 ["m_columns"] [] = "UserName";
	$proto22 ["m_columns"] [] = "Password";
	$proto22 ["m_columns"] [] = "Email";
	$proto22 ["m_columns"] [] = "GroupName";
	$proto22 ["m_columns"] [] = "Active";
	$proto22 ["m_columns"] [] = "Logo";
	$proto22 ["m_columns"] [] = "FullName";
	$obj = new SQLTable ( $proto22 );
	
	$proto21 ["m_table"] = $obj;
	$proto21 ["m_sql"] = "users";
	$proto21 ["m_alias"] = "";
	$proto21 ["m_srcTableName"] = "admin_members";
	$proto23 = array ();
	$proto23 ["m_sql"] = "";
	$proto23 ["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed ( array (
			"m_sql" => "" 
	) );
	
	$proto23 ["m_column"] = $obj;
	$proto23 ["m_contained"] = array ();
	$proto23 ["m_strCase"] = "";
	$proto23 ["m_havingmode"] = false;
	$proto23 ["m_inBrackets"] = false;
	$proto23 ["m_useAlias"] = false;
	$obj = new SQLLogicalExpr ( $proto23 );
	
	$proto21 ["m_joinon"] = $obj;
	$obj = new SQLFromListItem ( $proto21 );
	
	$proto0 ["m_fromlist"] [] = $obj;
	$proto0 ["m_groupby"] = array ();
	$proto0 ["m_orderby"] = array ();
	$proto0 ["m_srcTableName"] = "admin_members";
	$obj = new SQLQuery ( $proto0 );
	
	return $obj;
}
$queryData_admin_members = createSqlQuery_admin_members ();

$tdataadmin_members [".sqlquery"] = $queryData_admin_members;

$tableEvents ["admin_members"] = new eventsBase ();
$tdataadmin_members [".hasEvents"] = false;

?>