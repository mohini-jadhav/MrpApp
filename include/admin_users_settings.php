<?php
require_once (getabspath ( "classes/cipherer.php" ));

$tdataadmin_users = array ();
$tdataadmin_users [".truncateText"] = true;
$tdataadmin_users [".NumberOfChars"] = 60;
$tdataadmin_users [".ShortName"] = "admin_users";
$tdataadmin_users [".OwnerID"] = "";
$tdataadmin_users [".OriginalTable"] = "users";

// field labels
$fieldLabelsadmin_users = array ();
$fieldToolTipsadmin_users = array ();
$pageTitlesadmin_users = array ();

if (mlang_getcurrentlang () == "English") {
	$fieldLabelsadmin_users ["English"] = array ();
	$fieldToolTipsadmin_users ["English"] = array ();
	$pageTitlesadmin_users ["English"] = array ();
	$fieldLabelsadmin_users ["English"] ["AutUserID"] = "Aut User ID";
	$fieldToolTipsadmin_users ["English"] ["AutUserID"] = "";
	$fieldLabelsadmin_users ["English"] ["UserName"] = "User Name";
	$fieldToolTipsadmin_users ["English"] ["UserName"] = "";
	$fieldLabelsadmin_users ["English"] ["Password"] = "Password";
	$fieldToolTipsadmin_users ["English"] ["Password"] = "";
	$fieldLabelsadmin_users ["English"] ["Email"] = "Email";
	$fieldToolTipsadmin_users ["English"] ["Email"] = "";
	$fieldLabelsadmin_users ["English"] ["GroupName"] = "Group Name";
	$fieldToolTipsadmin_users ["English"] ["GroupName"] = "";
	$fieldLabelsadmin_users ["English"] ["Active"] = "Active";
	$fieldToolTipsadmin_users ["English"] ["Active"] = "";
	$fieldLabelsadmin_users ["English"] ["Logo"] = "Logo";
	$fieldToolTipsadmin_users ["English"] ["Logo"] = "";
	$fieldLabelsadmin_users ["English"] ["FullName"] = "Full Name";
	$fieldToolTipsadmin_users ["English"] ["FullName"] = "";
	if (count ( $fieldToolTipsadmin_users ["English"] ))
		$tdataadmin_users [".isUseToolTips"] = true;
}
if (mlang_getcurrentlang () == "") {
	$fieldLabelsadmin_users [""] = array ();
	$fieldToolTipsadmin_users [""] = array ();
	$pageTitlesadmin_users [""] = array ();
	if (count ( $fieldToolTipsadmin_users [""] ))
		$tdataadmin_users [".isUseToolTips"] = true;
}

$tdataadmin_users [".NCSearch"] = true;

$tdataadmin_users [".shortTableName"] = "admin_users";
$tdataadmin_users [".nSecOptions"] = 0;
$tdataadmin_users [".recsPerRowList"] = 1;
$tdataadmin_users [".recsPerRowPrint"] = 1;
$tdataadmin_users [".mainTableOwnerID"] = "";
$tdataadmin_users [".moveNext"] = 0;
$tdataadmin_users [".entityType"] = 1;

$tdataadmin_users [".strOriginalTableName"] = "users";

$tdataadmin_users [".showAddInPopup"] = false;

$tdataadmin_users [".showEditInPopup"] = false;

$tdataadmin_users [".showViewInPopup"] = false;

// page's base css files names
$popupPagesLayoutNames = array ();
$tdataadmin_users [".popupPagesLayoutNames"] = $popupPagesLayoutNames;

$tdataadmin_users [".fieldsForRegister"] = array ();

$tdataadmin_users [".listAjax"] = false;

$tdataadmin_users [".audit"] = false;

$tdataadmin_users [".locking"] = false;

$tdataadmin_users [".list"] = true;

$tdataadmin_users [".inlineEdit"] = true;
$tdataadmin_users [".inlineAdd"] = true;

$tdataadmin_users [".exportTo"] = true;

$tdataadmin_users [".printFriendly"] = true;

$tdataadmin_users [".delete"] = true;

$tdataadmin_users [".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataadmin_users [".searchSaving"] = false;
//

$tdataadmin_users [".showSearchPanel"] = true;
$tdataadmin_users [".flexibleSearch"] = true;

if (isMobile ())
	$tdataadmin_users [".isUseAjaxSuggest"] = false;
else
	$tdataadmin_users [".isUseAjaxSuggest"] = true;

$tdataadmin_users [".rowHighlite"] = true;

$tdataadmin_users [".addPageEvents"] = false;

// use timepicker for search panel
$tdataadmin_users [".isUseTimeForSearch"] = false;

$tdataadmin_users [".allSearchFields"] = array ();
$tdataadmin_users [".filterFields"] = array ();
$tdataadmin_users [".requiredSearchFields"] = array ();

$tdataadmin_users [".allSearchFields"] [] = "AutUserID";
$tdataadmin_users [".allSearchFields"] [] = "UserName";
$tdataadmin_users [".allSearchFields"] [] = "Password";
$tdataadmin_users [".allSearchFields"] [] = "Email";
$tdataadmin_users [".allSearchFields"] [] = "GroupName";
$tdataadmin_users [".allSearchFields"] [] = "Active";
$tdataadmin_users [".allSearchFields"] [] = "Logo";
$tdataadmin_users [".allSearchFields"] [] = "FullName";

$tdataadmin_users [".googleLikeFields"] = array ();
$tdataadmin_users [".googleLikeFields"] [] = "AutUserID";
$tdataadmin_users [".googleLikeFields"] [] = "UserName";
$tdataadmin_users [".googleLikeFields"] [] = "Password";
$tdataadmin_users [".googleLikeFields"] [] = "Email";
$tdataadmin_users [".googleLikeFields"] [] = "GroupName";
$tdataadmin_users [".googleLikeFields"] [] = "Active";
$tdataadmin_users [".googleLikeFields"] [] = "Logo";
$tdataadmin_users [".googleLikeFields"] [] = "FullName";

$tdataadmin_users [".advSearchFields"] = array ();
$tdataadmin_users [".advSearchFields"] [] = "AutUserID";
$tdataadmin_users [".advSearchFields"] [] = "UserName";
$tdataadmin_users [".advSearchFields"] [] = "Password";
$tdataadmin_users [".advSearchFields"] [] = "Email";
$tdataadmin_users [".advSearchFields"] [] = "GroupName";
$tdataadmin_users [".advSearchFields"] [] = "Active";
$tdataadmin_users [".advSearchFields"] [] = "Logo";
$tdataadmin_users [".advSearchFields"] [] = "FullName";

$tdataadmin_users [".tableType"] = "list";

$tdataadmin_users [".printerPageOrientation"] = 0;
$tdataadmin_users [".nPrinterPageScale"] = 100;

$tdataadmin_users [".nPrinterSplitRecords"] = 40;

$tdataadmin_users [".nPrinterPDFSplitRecords"] = 40;

$tdataadmin_users [".geocodingEnabled"] = false;

// view page pdf

// print page pdf

$tdataadmin_users [".pageSize"] = 10;

$tdataadmin_users [".warnLeavingPages"] = true;

$tstrOrderBy = "";
if (strlen ( $tstrOrderBy ) && strtolower ( substr ( $tstrOrderBy, 0, 8 ) ) != "order by")
	$tstrOrderBy = "order by " . $tstrOrderBy;
$tdataadmin_users [".strOrderBy"] = $tstrOrderBy;

$tdataadmin_users [".orderindexes"] = array ();

$tdataadmin_users [".sqlHead"] = "SELECT AutUserID,  	UserName,  	Password,  	Email,  	GroupName,  	Active,  	Logo,  	FullName";
$tdataadmin_users [".sqlFrom"] = "FROM users";
$tdataadmin_users [".sqlWhereExpr"] = "";
$tdataadmin_users [".sqlTail"] = "";

// fill array of records per page for list and report without group fields
$arrRPP = array ();
$arrRPP [] = 10;
$arrRPP [] = 20;
$arrRPP [] = 30;
$arrRPP [] = 50;
$arrRPP [] = 100;
$arrRPP [] = 500;
$arrRPP [] = - 1;
$tdataadmin_users [".arrRecsPerPage"] = $arrRPP;

// fill array of groups per page for report with group fields
$arrGPP = array ();
$arrGPP [] = 1;
$arrGPP [] = 3;
$arrGPP [] = 5;
$arrGPP [] = 10;
$arrGPP [] = 50;
$arrGPP [] = 100;
$arrGPP [] = - 1;
$tdataadmin_users [".arrGroupsPerPage"] = $arrGPP;

$tableKeysadmin_users = array ();
$tableKeysadmin_users [] = "AutUserID";
$tdataadmin_users [".Keys"] = $tableKeysadmin_users;

$tdataadmin_users [".listFields"] = array ();
$tdataadmin_users [".listFields"] [] = "AutUserID";
$tdataadmin_users [".listFields"] [] = "UserName";
$tdataadmin_users [".listFields"] [] = "Password";
$tdataadmin_users [".listFields"] [] = "Email";
$tdataadmin_users [".listFields"] [] = "GroupName";
$tdataadmin_users [".listFields"] [] = "Active";
$tdataadmin_users [".listFields"] [] = "Logo";
$tdataadmin_users [".listFields"] [] = "FullName";

$tdataadmin_users [".hideMobileList"] = array ();

$tdataadmin_users [".viewFields"] = array ();
$tdataadmin_users [".viewFields"] [] = "AutUserID";
$tdataadmin_users [".viewFields"] [] = "UserName";
$tdataadmin_users [".viewFields"] [] = "Password";
$tdataadmin_users [".viewFields"] [] = "Email";
$tdataadmin_users [".viewFields"] [] = "GroupName";
$tdataadmin_users [".viewFields"] [] = "Active";
$tdataadmin_users [".viewFields"] [] = "Logo";
$tdataadmin_users [".viewFields"] [] = "FullName";

$tdataadmin_users [".addFields"] = array ();
$tdataadmin_users [".addFields"] [] = "UserName";
$tdataadmin_users [".addFields"] [] = "Password";
$tdataadmin_users [".addFields"] [] = "Email";
$tdataadmin_users [".addFields"] [] = "GroupName";
$tdataadmin_users [".addFields"] [] = "Active";
$tdataadmin_users [".addFields"] [] = "Logo";
$tdataadmin_users [".addFields"] [] = "FullName";

$tdataadmin_users [".masterListFields"] = array ();
$tdataadmin_users [".masterListFields"] [] = "AutUserID";
$tdataadmin_users [".masterListFields"] [] = "UserName";
$tdataadmin_users [".masterListFields"] [] = "Password";
$tdataadmin_users [".masterListFields"] [] = "Email";
$tdataadmin_users [".masterListFields"] [] = "GroupName";
$tdataadmin_users [".masterListFields"] [] = "Active";
$tdataadmin_users [".masterListFields"] [] = "Logo";
$tdataadmin_users [".masterListFields"] [] = "FullName";

$tdataadmin_users [".inlineAddFields"] = array ();
$tdataadmin_users [".inlineAddFields"] [] = "UserName";
$tdataadmin_users [".inlineAddFields"] [] = "Password";
$tdataadmin_users [".inlineAddFields"] [] = "Email";
$tdataadmin_users [".inlineAddFields"] [] = "GroupName";
$tdataadmin_users [".inlineAddFields"] [] = "Active";
$tdataadmin_users [".inlineAddFields"] [] = "Logo";
$tdataadmin_users [".inlineAddFields"] [] = "FullName";

$tdataadmin_users [".editFields"] = array ();
$tdataadmin_users [".editFields"] [] = "UserName";
$tdataadmin_users [".editFields"] [] = "Password";
$tdataadmin_users [".editFields"] [] = "Email";
$tdataadmin_users [".editFields"] [] = "GroupName";
$tdataadmin_users [".editFields"] [] = "Active";
$tdataadmin_users [".editFields"] [] = "Logo";
$tdataadmin_users [".editFields"] [] = "FullName";

$tdataadmin_users [".inlineEditFields"] = array ();
$tdataadmin_users [".inlineEditFields"] [] = "UserName";
$tdataadmin_users [".inlineEditFields"] [] = "Password";
$tdataadmin_users [".inlineEditFields"] [] = "Email";
$tdataadmin_users [".inlineEditFields"] [] = "GroupName";
$tdataadmin_users [".inlineEditFields"] [] = "Active";
$tdataadmin_users [".inlineEditFields"] [] = "Logo";
$tdataadmin_users [".inlineEditFields"] [] = "FullName";

$tdataadmin_users [".exportFields"] = array ();
$tdataadmin_users [".exportFields"] [] = "AutUserID";
$tdataadmin_users [".exportFields"] [] = "UserName";
$tdataadmin_users [".exportFields"] [] = "Password";
$tdataadmin_users [".exportFields"] [] = "Email";
$tdataadmin_users [".exportFields"] [] = "GroupName";
$tdataadmin_users [".exportFields"] [] = "Active";
$tdataadmin_users [".exportFields"] [] = "Logo";
$tdataadmin_users [".exportFields"] [] = "FullName";

$tdataadmin_users [".importFields"] = array ();
$tdataadmin_users [".importFields"] [] = "AutUserID";
$tdataadmin_users [".importFields"] [] = "UserName";
$tdataadmin_users [".importFields"] [] = "Password";
$tdataadmin_users [".importFields"] [] = "Email";
$tdataadmin_users [".importFields"] [] = "GroupName";
$tdataadmin_users [".importFields"] [] = "Active";
$tdataadmin_users [".importFields"] [] = "Logo";
$tdataadmin_users [".importFields"] [] = "FullName";

$tdataadmin_users [".printFields"] = array ();
$tdataadmin_users [".printFields"] [] = "AutUserID";
$tdataadmin_users [".printFields"] [] = "UserName";
$tdataadmin_users [".printFields"] [] = "Password";
$tdataadmin_users [".printFields"] [] = "Email";
$tdataadmin_users [".printFields"] [] = "GroupName";
$tdataadmin_users [".printFields"] [] = "Active";
$tdataadmin_users [".printFields"] [] = "Logo";
$tdataadmin_users [".printFields"] [] = "FullName";

// AutUserID
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 1;
$fdata ["strName"] = "AutUserID";
$fdata ["GoodName"] = "AutUserID";
$fdata ["ownerTable"] = "users";
$fdata ["Label"] = GetFieldLabel ( "admin_users", "AutUserID" );
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

$tdataadmin_users ["AutUserID"] = $fdata;
// UserName
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 2;
$fdata ["strName"] = "UserName";
$fdata ["GoodName"] = "UserName";
$fdata ["ownerTable"] = "users";
$fdata ["Label"] = GetFieldLabel ( "admin_users", "UserName" );
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

$tdataadmin_users ["UserName"] = $fdata;
// Password
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 3;
$fdata ["strName"] = "Password";
$fdata ["GoodName"] = "Password";
$fdata ["ownerTable"] = "users";
$fdata ["Label"] = GetFieldLabel ( "admin_users", "Password" );
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

$tdataadmin_users ["Password"] = $fdata;
// Email
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 4;
$fdata ["strName"] = "Email";
$fdata ["GoodName"] = "Email";
$fdata ["ownerTable"] = "users";
$fdata ["Label"] = GetFieldLabel ( "admin_users", "Email" );
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

$tdataadmin_users ["Email"] = $fdata;
// GroupName
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 5;
$fdata ["strName"] = "GroupName";
$fdata ["GoodName"] = "GroupName";
$fdata ["ownerTable"] = "users";
$fdata ["Label"] = GetFieldLabel ( "admin_users", "GroupName" );
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

$tdataadmin_users ["GroupName"] = $fdata;
// Active
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 6;
$fdata ["strName"] = "Active";
$fdata ["GoodName"] = "Active";
$fdata ["ownerTable"] = "users";
$fdata ["Label"] = GetFieldLabel ( "admin_users", "Active" );
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

$tdataadmin_users ["Active"] = $fdata;
// Logo
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 7;
$fdata ["strName"] = "Logo";
$fdata ["GoodName"] = "Logo";
$fdata ["ownerTable"] = "users";
$fdata ["Label"] = GetFieldLabel ( "admin_users", "Logo" );
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

$tdataadmin_users ["Logo"] = $fdata;
// FullName
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 8;
$fdata ["strName"] = "FullName";
$fdata ["GoodName"] = "FullName";
$fdata ["ownerTable"] = "users";
$fdata ["Label"] = GetFieldLabel ( "admin_users", "FullName" );
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

$tdataadmin_users ["FullName"] = $fdata;

$tables_data ["admin_users"] = &$tdataadmin_users;
$field_labels ["admin_users"] = &$fieldLabelsadmin_users;
$fieldToolTips ["admin_users"] = &$fieldToolTipsadmin_users;
$page_titles ["admin_users"] = &$pageTitlesadmin_users;

// -----------------start prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData ["admin_users"] = array ();

// tables which are master tables for current table (detail)
$masterTablesData ["admin_users"] = array ();

// -----------------end prepare master-details data arrays ------------------------------//

require_once (getabspath ( "classes/sql.php" ));
function createSqlQuery_admin_users() {
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
			"m_srcTableName" => "admin_users" 
	) );
	
	$proto5 ["m_sql"] = "AutUserID";
	$proto5 ["m_srcTableName"] = "admin_users";
	$proto5 ["m_expr"] = $obj;
	$proto5 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto5 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto7 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "UserName",
			"m_strTable" => "users",
			"m_srcTableName" => "admin_users" 
	) );
	
	$proto7 ["m_sql"] = "UserName";
	$proto7 ["m_srcTableName"] = "admin_users";
	$proto7 ["m_expr"] = $obj;
	$proto7 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto7 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto9 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Password",
			"m_strTable" => "users",
			"m_srcTableName" => "admin_users" 
	) );
	
	$proto9 ["m_sql"] = "Password";
	$proto9 ["m_srcTableName"] = "admin_users";
	$proto9 ["m_expr"] = $obj;
	$proto9 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto9 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto11 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Email",
			"m_strTable" => "users",
			"m_srcTableName" => "admin_users" 
	) );
	
	$proto11 ["m_sql"] = "Email";
	$proto11 ["m_srcTableName"] = "admin_users";
	$proto11 ["m_expr"] = $obj;
	$proto11 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto11 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto13 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "GroupName",
			"m_strTable" => "users",
			"m_srcTableName" => "admin_users" 
	) );
	
	$proto13 ["m_sql"] = "GroupName";
	$proto13 ["m_srcTableName"] = "admin_users";
	$proto13 ["m_expr"] = $obj;
	$proto13 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto13 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto15 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Active",
			"m_strTable" => "users",
			"m_srcTableName" => "admin_users" 
	) );
	
	$proto15 ["m_sql"] = "Active";
	$proto15 ["m_srcTableName"] = "admin_users";
	$proto15 ["m_expr"] = $obj;
	$proto15 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto15 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto17 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Logo",
			"m_strTable" => "users",
			"m_srcTableName" => "admin_users" 
	) );
	
	$proto17 ["m_sql"] = "Logo";
	$proto17 ["m_srcTableName"] = "admin_users";
	$proto17 ["m_expr"] = $obj;
	$proto17 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto17 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto19 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "FullName",
			"m_strTable" => "users",
			"m_srcTableName" => "admin_users" 
	) );
	
	$proto19 ["m_sql"] = "FullName";
	$proto19 ["m_srcTableName"] = "admin_users";
	$proto19 ["m_expr"] = $obj;
	$proto19 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto19 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto0 ["m_fromlist"] = array ();
	$proto21 = array ();
	$proto21 ["m_link"] = "SQLL_MAIN";
	$proto22 = array ();
	$proto22 ["m_strName"] = "users";
	$proto22 ["m_srcTableName"] = "admin_users";
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
	$proto21 ["m_srcTableName"] = "admin_users";
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
	$proto0 ["m_srcTableName"] = "admin_users";
	$obj = new SQLQuery ( $proto0 );
	
	return $obj;
}
$queryData_admin_users = createSqlQuery_admin_users ();

$tdataadmin_users [".sqlquery"] = $queryData_admin_users;

$tableEvents ["admin_users"] = new eventsBase ();
$tdataadmin_users [".hasEvents"] = false;

?>