<?php
require_once (getabspath ( "classes/cipherer.php" ));

$tdataemployee_auth = array ();
$tdataemployee_auth [".truncateText"] = true;
$tdataemployee_auth [".NumberOfChars"] = 60;
$tdataemployee_auth [".ShortName"] = "employee_auth";
$tdataemployee_auth [".OwnerID"] = "";
$tdataemployee_auth [".OriginalTable"] = "employee_auth";

// field labels
$fieldLabelsemployee_auth = array ();
$fieldToolTipsemployee_auth = array ();
$pageTitlesemployee_auth = array ();

if (mlang_getcurrentlang () == "English") {
	$fieldLabelsemployee_auth ["English"] = array ();
	$fieldToolTipsemployee_auth ["English"] = array ();
	$pageTitlesemployee_auth ["English"] = array ();
	$fieldLabelsemployee_auth ["English"] ["Created_By"] = "Created By";
	$fieldToolTipsemployee_auth ["English"] ["Created_By"] = "";
	$fieldLabelsemployee_auth ["English"] ["Created_date"] = "Created Date";
	$fieldToolTipsemployee_auth ["English"] ["Created_date"] = "";
	$fieldLabelsemployee_auth ["English"] ["Updated_by"] = "Updated By";
	$fieldToolTipsemployee_auth ["English"] ["Updated_by"] = "";
	$fieldLabelsemployee_auth ["English"] ["updated_date"] = "Updated Date";
	$fieldToolTipsemployee_auth ["English"] ["updated_date"] = "";
	$fieldLabelsemployee_auth ["English"] ["Remarks"] = "Remarks";
	$fieldToolTipsemployee_auth ["English"] ["Remarks"] = "";
	$fieldLabelsemployee_auth ["English"] ["employee_id"] = "Employee Id";
	$fieldToolTipsemployee_auth ["English"] ["employee_id"] = "";
	$fieldLabelsemployee_auth ["English"] ["Password_encrypted"] = "Password Encrypted";
	$fieldToolTipsemployee_auth ["English"] ["Password_encrypted"] = "";
	$fieldLabelsemployee_auth ["English"] ["roles_allowed"] = "Roles Allowed";
	$fieldToolTipsemployee_auth ["English"] ["roles_allowed"] = "";
	$fieldLabelsemployee_auth ["English"] ["password_last_changed"] = "Password Last Changed";
	$fieldToolTipsemployee_auth ["English"] ["password_last_changed"] = "";
	$fieldLabelsemployee_auth ["English"] ["password_expiry_date"] = "Password Expiry Date";
	$fieldToolTipsemployee_auth ["English"] ["password_expiry_date"] = "";
	if (count ( $fieldToolTipsemployee_auth ["English"] ))
		$tdataemployee_auth [".isUseToolTips"] = true;
}
if (mlang_getcurrentlang () == "") {
	$fieldLabelsemployee_auth [""] = array ();
	$fieldToolTipsemployee_auth [""] = array ();
	$pageTitlesemployee_auth [""] = array ();
	if (count ( $fieldToolTipsemployee_auth [""] ))
		$tdataemployee_auth [".isUseToolTips"] = true;
}

$tdataemployee_auth [".NCSearch"] = true;

$tdataemployee_auth [".shortTableName"] = "employee_auth";
$tdataemployee_auth [".nSecOptions"] = 0;
$tdataemployee_auth [".recsPerRowList"] = 1;
$tdataemployee_auth [".recsPerRowPrint"] = 1;
$tdataemployee_auth [".mainTableOwnerID"] = "";
$tdataemployee_auth [".moveNext"] = 0;
$tdataemployee_auth [".entityType"] = 0;

$tdataemployee_auth [".strOriginalTableName"] = "employee_auth";

$tdataemployee_auth [".showAddInPopup"] = false;

$tdataemployee_auth [".showEditInPopup"] = false;

$tdataemployee_auth [".showViewInPopup"] = false;

// page's base css files names
$popupPagesLayoutNames = array ();
$tdataemployee_auth [".popupPagesLayoutNames"] = $popupPagesLayoutNames;

$tdataemployee_auth [".fieldsForRegister"] = array ();

$tdataemployee_auth [".listAjax"] = false;

$tdataemployee_auth [".audit"] = false;

$tdataemployee_auth [".locking"] = false;

$tdataemployee_auth [".list"] = true;

$tdataemployee_auth [".import"] = true;

$tdataemployee_auth [".exportTo"] = true;

$tdataemployee_auth [".printFriendly"] = true;

$tdataemployee_auth [".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataemployee_auth [".searchSaving"] = false;
//

$tdataemployee_auth [".showSearchPanel"] = true;
$tdataemployee_auth [".flexibleSearch"] = true;

if (isMobile ())
	$tdataemployee_auth [".isUseAjaxSuggest"] = false;
else
	$tdataemployee_auth [".isUseAjaxSuggest"] = true;

$tdataemployee_auth [".rowHighlite"] = true;

$tdataemployee_auth [".addPageEvents"] = false;

// use timepicker for search panel
$tdataemployee_auth [".isUseTimeForSearch"] = false;

$tdataemployee_auth [".allSearchFields"] = array ();
$tdataemployee_auth [".filterFields"] = array ();
$tdataemployee_auth [".requiredSearchFields"] = array ();

$tdataemployee_auth [".allSearchFields"] [] = "Created_By";
$tdataemployee_auth [".allSearchFields"] [] = "Created_date";
$tdataemployee_auth [".allSearchFields"] [] = "Updated_by";
$tdataemployee_auth [".allSearchFields"] [] = "updated_date";
$tdataemployee_auth [".allSearchFields"] [] = "Remarks";
$tdataemployee_auth [".allSearchFields"] [] = "employee_id";
$tdataemployee_auth [".allSearchFields"] [] = "Password_encrypted";
$tdataemployee_auth [".allSearchFields"] [] = "roles_allowed";
$tdataemployee_auth [".allSearchFields"] [] = "password_last_changed";
$tdataemployee_auth [".allSearchFields"] [] = "password_expiry_date";

$tdataemployee_auth [".googleLikeFields"] = array ();
$tdataemployee_auth [".googleLikeFields"] [] = "Created_By";
$tdataemployee_auth [".googleLikeFields"] [] = "Created_date";
$tdataemployee_auth [".googleLikeFields"] [] = "Updated_by";
$tdataemployee_auth [".googleLikeFields"] [] = "updated_date";
$tdataemployee_auth [".googleLikeFields"] [] = "Remarks";
$tdataemployee_auth [".googleLikeFields"] [] = "employee_id";
$tdataemployee_auth [".googleLikeFields"] [] = "Password_encrypted";
$tdataemployee_auth [".googleLikeFields"] [] = "roles_allowed";
$tdataemployee_auth [".googleLikeFields"] [] = "password_last_changed";
$tdataemployee_auth [".googleLikeFields"] [] = "password_expiry_date";

$tdataemployee_auth [".advSearchFields"] = array ();
$tdataemployee_auth [".advSearchFields"] [] = "Created_By";
$tdataemployee_auth [".advSearchFields"] [] = "Created_date";
$tdataemployee_auth [".advSearchFields"] [] = "Updated_by";
$tdataemployee_auth [".advSearchFields"] [] = "updated_date";
$tdataemployee_auth [".advSearchFields"] [] = "Remarks";
$tdataemployee_auth [".advSearchFields"] [] = "employee_id";
$tdataemployee_auth [".advSearchFields"] [] = "Password_encrypted";
$tdataemployee_auth [".advSearchFields"] [] = "roles_allowed";
$tdataemployee_auth [".advSearchFields"] [] = "password_last_changed";
$tdataemployee_auth [".advSearchFields"] [] = "password_expiry_date";

$tdataemployee_auth [".tableType"] = "list";

$tdataemployee_auth [".printerPageOrientation"] = 0;
$tdataemployee_auth [".nPrinterPageScale"] = 100;

$tdataemployee_auth [".nPrinterSplitRecords"] = 40;

$tdataemployee_auth [".nPrinterPDFSplitRecords"] = 40;

$tdataemployee_auth [".geocodingEnabled"] = false;

// view page pdf

// print page pdf

$tdataemployee_auth [".pageSize"] = 10;

$tdataemployee_auth [".warnLeavingPages"] = true;

$tstrOrderBy = "";
if (strlen ( $tstrOrderBy ) && strtolower ( substr ( $tstrOrderBy, 0, 8 ) ) != "order by")
	$tstrOrderBy = "order by " . $tstrOrderBy;
$tdataemployee_auth [".strOrderBy"] = $tstrOrderBy;

$tdataemployee_auth [".orderindexes"] = array ();

$tdataemployee_auth [".sqlHead"] = "SELECT Created_By,  	Created_date,  	Updated_by,  	updated_date,  	Remarks,  	employee_id,  	Password_encrypted,  	roles_allowed,  	password_last_changed,  	password_expiry_date";
$tdataemployee_auth [".sqlFrom"] = "FROM employee_auth";
$tdataemployee_auth [".sqlWhereExpr"] = "";
$tdataemployee_auth [".sqlTail"] = "";

// fill array of records per page for list and report without group fields
$arrRPP = array ();
$arrRPP [] = 10;
$arrRPP [] = 20;
$arrRPP [] = 30;
$arrRPP [] = 50;
$arrRPP [] = 100;
$arrRPP [] = 500;
$arrRPP [] = - 1;
$tdataemployee_auth [".arrRecsPerPage"] = $arrRPP;

// fill array of groups per page for report with group fields
$arrGPP = array ();
$arrGPP [] = 1;
$arrGPP [] = 3;
$arrGPP [] = 5;
$arrGPP [] = 10;
$arrGPP [] = 50;
$arrGPP [] = 100;
$arrGPP [] = - 1;
$tdataemployee_auth [".arrGroupsPerPage"] = $arrGPP;

$tableKeysemployee_auth = array ();
$tdataemployee_auth [".Keys"] = $tableKeysemployee_auth;

$tdataemployee_auth [".listFields"] = array ();
$tdataemployee_auth [".listFields"] [] = "Created_By";
$tdataemployee_auth [".listFields"] [] = "Created_date";
$tdataemployee_auth [".listFields"] [] = "Updated_by";
$tdataemployee_auth [".listFields"] [] = "updated_date";
$tdataemployee_auth [".listFields"] [] = "Remarks";
$tdataemployee_auth [".listFields"] [] = "employee_id";
$tdataemployee_auth [".listFields"] [] = "Password_encrypted";
$tdataemployee_auth [".listFields"] [] = "roles_allowed";
$tdataemployee_auth [".listFields"] [] = "password_last_changed";
$tdataemployee_auth [".listFields"] [] = "password_expiry_date";

$tdataemployee_auth [".hideMobileList"] = array ();

$tdataemployee_auth [".viewFields"] = array ();

$tdataemployee_auth [".addFields"] = array ();

$tdataemployee_auth [".masterListFields"] = array ();
$tdataemployee_auth [".masterListFields"] [] = "Created_By";
$tdataemployee_auth [".masterListFields"] [] = "Created_date";
$tdataemployee_auth [".masterListFields"] [] = "Updated_by";
$tdataemployee_auth [".masterListFields"] [] = "updated_date";
$tdataemployee_auth [".masterListFields"] [] = "Remarks";
$tdataemployee_auth [".masterListFields"] [] = "employee_id";
$tdataemployee_auth [".masterListFields"] [] = "Password_encrypted";
$tdataemployee_auth [".masterListFields"] [] = "roles_allowed";
$tdataemployee_auth [".masterListFields"] [] = "password_last_changed";
$tdataemployee_auth [".masterListFields"] [] = "password_expiry_date";

$tdataemployee_auth [".inlineAddFields"] = array ();

$tdataemployee_auth [".editFields"] = array ();

$tdataemployee_auth [".inlineEditFields"] = array ();

$tdataemployee_auth [".exportFields"] = array ();
$tdataemployee_auth [".exportFields"] [] = "Created_By";
$tdataemployee_auth [".exportFields"] [] = "Created_date";
$tdataemployee_auth [".exportFields"] [] = "Updated_by";
$tdataemployee_auth [".exportFields"] [] = "updated_date";
$tdataemployee_auth [".exportFields"] [] = "Remarks";
$tdataemployee_auth [".exportFields"] [] = "employee_id";
$tdataemployee_auth [".exportFields"] [] = "Password_encrypted";
$tdataemployee_auth [".exportFields"] [] = "roles_allowed";
$tdataemployee_auth [".exportFields"] [] = "password_last_changed";
$tdataemployee_auth [".exportFields"] [] = "password_expiry_date";

$tdataemployee_auth [".importFields"] = array ();
$tdataemployee_auth [".importFields"] [] = "Created_By";
$tdataemployee_auth [".importFields"] [] = "Created_date";
$tdataemployee_auth [".importFields"] [] = "Updated_by";
$tdataemployee_auth [".importFields"] [] = "updated_date";
$tdataemployee_auth [".importFields"] [] = "Remarks";
$tdataemployee_auth [".importFields"] [] = "employee_id";
$tdataemployee_auth [".importFields"] [] = "Password_encrypted";
$tdataemployee_auth [".importFields"] [] = "roles_allowed";
$tdataemployee_auth [".importFields"] [] = "password_last_changed";
$tdataemployee_auth [".importFields"] [] = "password_expiry_date";

$tdataemployee_auth [".printFields"] = array ();
$tdataemployee_auth [".printFields"] [] = "Created_By";
$tdataemployee_auth [".printFields"] [] = "Created_date";
$tdataemployee_auth [".printFields"] [] = "Updated_by";
$tdataemployee_auth [".printFields"] [] = "updated_date";
$tdataemployee_auth [".printFields"] [] = "Remarks";
$tdataemployee_auth [".printFields"] [] = "employee_id";
$tdataemployee_auth [".printFields"] [] = "Password_encrypted";
$tdataemployee_auth [".printFields"] [] = "roles_allowed";
$tdataemployee_auth [".printFields"] [] = "password_last_changed";
$tdataemployee_auth [".printFields"] [] = "password_expiry_date";

// Created_By
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 1;
$fdata ["strName"] = "Created_By";
$fdata ["GoodName"] = "Created_By";
$fdata ["ownerTable"] = "employee_auth";
$fdata ["Label"] = GetFieldLabel ( "employee_auth", "Created_By" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

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

$tdataemployee_auth ["Created_By"] = $fdata;
// Created_date
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 2;
$fdata ["strName"] = "Created_date";
$fdata ["GoodName"] = "Created_date";
$fdata ["ownerTable"] = "employee_auth";
$fdata ["Label"] = GetFieldLabel ( "employee_auth", "Created_date" );
$fdata ["FieldType"] = 135;

$fdata ["bListPage"] = true;

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

$tdataemployee_auth ["Created_date"] = $fdata;
// Updated_by
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 3;
$fdata ["strName"] = "Updated_by";
$fdata ["GoodName"] = "Updated_by";
$fdata ["ownerTable"] = "employee_auth";
$fdata ["Label"] = GetFieldLabel ( "employee_auth", "Updated_by" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

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

$tdataemployee_auth ["Updated_by"] = $fdata;
// updated_date
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 4;
$fdata ["strName"] = "updated_date";
$fdata ["GoodName"] = "updated_date";
$fdata ["ownerTable"] = "employee_auth";
$fdata ["Label"] = GetFieldLabel ( "employee_auth", "updated_date" );
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

$tdataemployee_auth ["updated_date"] = $fdata;
// Remarks
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 5;
$fdata ["strName"] = "Remarks";
$fdata ["GoodName"] = "Remarks";
$fdata ["ownerTable"] = "employee_auth";
$fdata ["Label"] = GetFieldLabel ( "employee_auth", "Remarks" );
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

$tdataemployee_auth ["Remarks"] = $fdata;
// employee_id
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 6;
$fdata ["strName"] = "employee_id";
$fdata ["GoodName"] = "employee_id";
$fdata ["ownerTable"] = "employee_auth";
$fdata ["Label"] = GetFieldLabel ( "employee_auth", "employee_id" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "employee_id";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "employee_id";

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

$tdataemployee_auth ["employee_id"] = $fdata;
// Password_encrypted
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 7;
$fdata ["strName"] = "Password_encrypted";
$fdata ["GoodName"] = "Password_encrypted";
$fdata ["ownerTable"] = "employee_auth";
$fdata ["Label"] = GetFieldLabel ( "employee_auth", "Password_encrypted" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Password_encrypted";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Password_encrypted";

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

$tdataemployee_auth ["Password_encrypted"] = $fdata;
// roles_allowed
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 8;
$fdata ["strName"] = "roles_allowed";
$fdata ["GoodName"] = "roles_allowed";
$fdata ["ownerTable"] = "employee_auth";
$fdata ["Label"] = GetFieldLabel ( "employee_auth", "roles_allowed" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "roles_allowed";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "roles_allowed";

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

$tdataemployee_auth ["roles_allowed"] = $fdata;
// password_last_changed
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 9;
$fdata ["strName"] = "password_last_changed";
$fdata ["GoodName"] = "password_last_changed";
$fdata ["ownerTable"] = "employee_auth";
$fdata ["Label"] = GetFieldLabel ( "employee_auth", "password_last_changed" );
$fdata ["FieldType"] = 135;

$fdata ["bListPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "password_last_changed";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "password_last_changed";

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

$tdataemployee_auth ["password_last_changed"] = $fdata;
// password_expiry_date
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 10;
$fdata ["strName"] = "password_expiry_date";
$fdata ["GoodName"] = "password_expiry_date";
$fdata ["ownerTable"] = "employee_auth";
$fdata ["Label"] = GetFieldLabel ( "employee_auth", "password_expiry_date" );
$fdata ["FieldType"] = 135;

$fdata ["bListPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "password_expiry_date";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "password_expiry_date";

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

$tdataemployee_auth ["password_expiry_date"] = $fdata;

$tables_data ["employee_auth"] = &$tdataemployee_auth;
$field_labels ["employee_auth"] = &$fieldLabelsemployee_auth;
$fieldToolTips ["employee_auth"] = &$fieldToolTipsemployee_auth;
$page_titles ["employee_auth"] = &$pageTitlesemployee_auth;

// -----------------start prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData ["employee_auth"] = array ();

// tables which are master tables for current table (detail)
$masterTablesData ["employee_auth"] = array ();

// -----------------end prepare master-details data arrays ------------------------------//

require_once (getabspath ( "classes/sql.php" ));
function createSqlQuery_employee_auth() {
	$proto0 = array ();
	$proto0 ["m_strHead"] = "SELECT";
	$proto0 ["m_strFieldList"] = "Created_By,  	Created_date,  	Updated_by,  	updated_date,  	Remarks,  	employee_id,  	Password_encrypted,  	roles_allowed,  	password_last_changed,  	password_expiry_date";
	$proto0 ["m_strFrom"] = "FROM employee_auth";
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
			"m_strTable" => "employee_auth",
			"m_srcTableName" => "employee_auth" 
	) );
	
	$proto5 ["m_sql"] = "Created_By";
	$proto5 ["m_srcTableName"] = "employee_auth";
	$proto5 ["m_expr"] = $obj;
	$proto5 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto5 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto7 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Created_date",
			"m_strTable" => "employee_auth",
			"m_srcTableName" => "employee_auth" 
	) );
	
	$proto7 ["m_sql"] = "Created_date";
	$proto7 ["m_srcTableName"] = "employee_auth";
	$proto7 ["m_expr"] = $obj;
	$proto7 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto7 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto9 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Updated_by",
			"m_strTable" => "employee_auth",
			"m_srcTableName" => "employee_auth" 
	) );
	
	$proto9 ["m_sql"] = "Updated_by";
	$proto9 ["m_srcTableName"] = "employee_auth";
	$proto9 ["m_expr"] = $obj;
	$proto9 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto9 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto11 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "updated_date",
			"m_strTable" => "employee_auth",
			"m_srcTableName" => "employee_auth" 
	) );
	
	$proto11 ["m_sql"] = "updated_date";
	$proto11 ["m_srcTableName"] = "employee_auth";
	$proto11 ["m_expr"] = $obj;
	$proto11 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto11 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto13 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Remarks",
			"m_strTable" => "employee_auth",
			"m_srcTableName" => "employee_auth" 
	) );
	
	$proto13 ["m_sql"] = "Remarks";
	$proto13 ["m_srcTableName"] = "employee_auth";
	$proto13 ["m_expr"] = $obj;
	$proto13 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto13 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto15 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "employee_id",
			"m_strTable" => "employee_auth",
			"m_srcTableName" => "employee_auth" 
	) );
	
	$proto15 ["m_sql"] = "employee_id";
	$proto15 ["m_srcTableName"] = "employee_auth";
	$proto15 ["m_expr"] = $obj;
	$proto15 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto15 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto17 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Password_encrypted",
			"m_strTable" => "employee_auth",
			"m_srcTableName" => "employee_auth" 
	) );
	
	$proto17 ["m_sql"] = "Password_encrypted";
	$proto17 ["m_srcTableName"] = "employee_auth";
	$proto17 ["m_expr"] = $obj;
	$proto17 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto17 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto19 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "roles_allowed",
			"m_strTable" => "employee_auth",
			"m_srcTableName" => "employee_auth" 
	) );
	
	$proto19 ["m_sql"] = "roles_allowed";
	$proto19 ["m_srcTableName"] = "employee_auth";
	$proto19 ["m_expr"] = $obj;
	$proto19 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto19 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto21 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "password_last_changed",
			"m_strTable" => "employee_auth",
			"m_srcTableName" => "employee_auth" 
	) );
	
	$proto21 ["m_sql"] = "password_last_changed";
	$proto21 ["m_srcTableName"] = "employee_auth";
	$proto21 ["m_expr"] = $obj;
	$proto21 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto21 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto23 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "password_expiry_date",
			"m_strTable" => "employee_auth",
			"m_srcTableName" => "employee_auth" 
	) );
	
	$proto23 ["m_sql"] = "password_expiry_date";
	$proto23 ["m_srcTableName"] = "employee_auth";
	$proto23 ["m_expr"] = $obj;
	$proto23 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto23 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto0 ["m_fromlist"] = array ();
	$proto25 = array ();
	$proto25 ["m_link"] = "SQLL_MAIN";
	$proto26 = array ();
	$proto26 ["m_strName"] = "employee_auth";
	$proto26 ["m_srcTableName"] = "employee_auth";
	$proto26 ["m_columns"] = array ();
	$proto26 ["m_columns"] [] = "Created_By";
	$proto26 ["m_columns"] [] = "Created_date";
	$proto26 ["m_columns"] [] = "Updated_by";
	$proto26 ["m_columns"] [] = "updated_date";
	$proto26 ["m_columns"] [] = "Remarks";
	$proto26 ["m_columns"] [] = "employee_id";
	$proto26 ["m_columns"] [] = "Password_encrypted";
	$proto26 ["m_columns"] [] = "roles_allowed";
	$proto26 ["m_columns"] [] = "password_last_changed";
	$proto26 ["m_columns"] [] = "password_expiry_date";
	$obj = new SQLTable ( $proto26 );
	
	$proto25 ["m_table"] = $obj;
	$proto25 ["m_sql"] = "employee_auth";
	$proto25 ["m_alias"] = "";
	$proto25 ["m_srcTableName"] = "employee_auth";
	$proto27 = array ();
	$proto27 ["m_sql"] = "";
	$proto27 ["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed ( array (
			"m_sql" => "" 
	) );
	
	$proto27 ["m_column"] = $obj;
	$proto27 ["m_contained"] = array ();
	$proto27 ["m_strCase"] = "";
	$proto27 ["m_havingmode"] = false;
	$proto27 ["m_inBrackets"] = false;
	$proto27 ["m_useAlias"] = false;
	$obj = new SQLLogicalExpr ( $proto27 );
	
	$proto25 ["m_joinon"] = $obj;
	$obj = new SQLFromListItem ( $proto25 );
	
	$proto0 ["m_fromlist"] [] = $obj;
	$proto0 ["m_groupby"] = array ();
	$proto0 ["m_orderby"] = array ();
	$proto0 ["m_srcTableName"] = "employee_auth";
	$obj = new SQLQuery ( $proto0 );
	
	return $obj;
}
$queryData_employee_auth = createSqlQuery_employee_auth ();

$tdataemployee_auth [".sqlquery"] = $queryData_employee_auth;

$tableEvents ["employee_auth"] = new eventsBase ();
$tdataemployee_auth [".hasEvents"] = false;

?>