<?php
require_once (getabspath ( "classes/cipherer.php" ));

$tdatastage2 = array ();
$tdatastage2 [".truncateText"] = true;
$tdatastage2 [".NumberOfChars"] = 80;
$tdatastage2 [".ShortName"] = "stage2";
$tdatastage2 [".OwnerID"] = "";
$tdatastage2 [".OriginalTable"] = "stage2";

// field labels
$fieldLabelsstage2 = array ();
$fieldToolTipsstage2 = array ();
$pageTitlesstage2 = array ();

if (mlang_getcurrentlang () == "English") {
	$fieldLabelsstage2 ["English"] = array ();
	$fieldToolTipsstage2 ["English"] = array ();
	$pageTitlesstage2 ["English"] = array ();
	$fieldLabelsstage2 ["English"] ["PK1"] = "PK1";
	$fieldToolTipsstage2 ["English"] ["PK1"] = "";
	$fieldLabelsstage2 ["English"] ["Duration__Weeks"] = "Duration  Weeks";
	$fieldToolTipsstage2 ["English"] ["Duration _Weeks"] = "";
	$fieldLabelsstage2 ["English"] ["TAM"] = "TAM";
	$fieldToolTipsstage2 ["English"] ["TAM"] = "";
	$fieldLabelsstage2 ["English"] ["Other"] = "Other";
	$fieldToolTipsstage2 ["English"] ["Other"] = "";
	$fieldLabelsstage2 ["English"] ["CategoryName"] = "Category Name";
	$fieldToolTipsstage2 ["English"] ["CategoryName"] = "";
	$fieldLabelsstage2 ["English"] ["Activity"] = "Activity";
	$fieldToolTipsstage2 ["English"] ["Activity"] = "";
	$fieldLabelsstage2 ["English"] ["CategoryID"] = "Category ID";
	$fieldToolTipsstage2 ["English"] ["CategoryID"] = "";
	$fieldLabelsstage2 ["English"] ["AutRoleID"] = "Aut Role ID";
	$fieldToolTipsstage2 ["English"] ["AutRoleID"] = "";
	$fieldLabelsstage2 ["English"] ["RSA"] = "RSA";
	$fieldToolTipsstage2 ["English"] ["RSA"] = "";
	$fieldLabelsstage2 ["English"] ["PA"] = "PA";
	$fieldToolTipsstage2 ["English"] ["PA"] = "";
	if (count ( $fieldToolTipsstage2 ["English"] ))
		$tdatastage2 [".isUseToolTips"] = true;
}
if (mlang_getcurrentlang () == "") {
	$fieldLabelsstage2 [""] = array ();
	$fieldToolTipsstage2 [""] = array ();
	$pageTitlesstage2 [""] = array ();
	$fieldLabelsstage2 [""] ["PK1"] = "PK1";
	$fieldToolTipsstage2 [""] ["PK1"] = "";
	if (count ( $fieldToolTipsstage2 [""] ))
		$tdatastage2 [".isUseToolTips"] = true;
}

$tdatastage2 [".NCSearch"] = true;

$tdatastage2 [".shortTableName"] = "stage2";
$tdatastage2 [".nSecOptions"] = 0;
$tdatastage2 [".recsPerRowList"] = 1;
$tdatastage2 [".recsPerRowPrint"] = 1;
$tdatastage2 [".mainTableOwnerID"] = "";
$tdatastage2 [".moveNext"] = 0;
$tdatastage2 [".entityType"] = 0;

$tdatastage2 [".strOriginalTableName"] = "stage2";

$tdatastage2 [".showAddInPopup"] = true;

$tdatastage2 [".showEditInPopup"] = true;

$tdatastage2 [".showViewInPopup"] = true;

// page's base css files names
$popupPagesLayoutNames = array ();

;
$popupPagesLayoutNames ["add"] = "add2";

;
$popupPagesLayoutNames ["edit"] = "edit2";

;
$popupPagesLayoutNames ["view"] = "view2";
$tdatastage2 [".popupPagesLayoutNames"] = $popupPagesLayoutNames;

$tdatastage2 [".fieldsForRegister"] = array ();

$tdatastage2 [".listAjax"] = false;

$tdatastage2 [".audit"] = false;

$tdatastage2 [".locking"] = false;

$tdatastage2 [".edit"] = true;
$tdatastage2 [".afterEditAction"] = 1;
$tdatastage2 [".closePopupAfterEdit"] = 1;
$tdatastage2 [".afterEditActionDetTable"] = "";

$tdatastage2 [".add"] = true;
$tdatastage2 [".afterAddAction"] = 1;
$tdatastage2 [".closePopupAfterAdd"] = 1;
$tdatastage2 [".afterAddActionDetTable"] = "";

$tdatastage2 [".list"] = true;

$tdatastage2 [".inlineEdit"] = true;
$tdatastage2 [".view"] = true;

$tdatastage2 [".import"] = true;

$tdatastage2 [".exportTo"] = true;

$tdatastage2 [".printFriendly"] = true;

$tdatastage2 [".delete"] = true;

$tdatastage2 [".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatastage2 [".searchSaving"] = false;
//

$tdatastage2 [".showSearchPanel"] = true;
$tdatastage2 [".flexibleSearch"] = true;

if (isMobile ())
	$tdatastage2 [".isUseAjaxSuggest"] = false;
else
	$tdatastage2 [".isUseAjaxSuggest"] = true;

$tdatastage2 [".rowHighlite"] = true;

$tdatastage2 [".addPageEvents"] = true;

// use timepicker for search panel
$tdatastage2 [".isUseTimeForSearch"] = false;

$tdatastage2 [".allSearchFields"] = array ();
$tdatastage2 [".filterFields"] = array ();
$tdatastage2 [".requiredSearchFields"] = array ();

$tdatastage2 [".allSearchFields"] [] = "PK1";
$tdatastage2 [".allSearchFields"] [] = "CategoryName";
$tdatastage2 [".allSearchFields"] [] = "Activity";
$tdatastage2 [".allSearchFields"] [] = "Duration _Weeks";
$tdatastage2 [".allSearchFields"] [] = "RSA";
$tdatastage2 [".allSearchFields"] [] = "PA";
$tdatastage2 [".allSearchFields"] [] = "TAM";
$tdatastage2 [".allSearchFields"] [] = "Other";
$tdatastage2 [".allSearchFields"] [] = "CategoryID";
$tdatastage2 [".allSearchFields"] [] = "AutRoleID";

$tdatastage2 [".googleLikeFields"] = array ();
$tdatastage2 [".googleLikeFields"] [] = "PK1";
$tdatastage2 [".googleLikeFields"] [] = "CategoryName";
$tdatastage2 [".googleLikeFields"] [] = "Activity";
$tdatastage2 [".googleLikeFields"] [] = "Duration _Weeks";
$tdatastage2 [".googleLikeFields"] [] = "RSA";
$tdatastage2 [".googleLikeFields"] [] = "PA";
$tdatastage2 [".googleLikeFields"] [] = "TAM";
$tdatastage2 [".googleLikeFields"] [] = "Other";
$tdatastage2 [".googleLikeFields"] [] = "CategoryID";
$tdatastage2 [".googleLikeFields"] [] = "AutRoleID";

$tdatastage2 [".advSearchFields"] = array ();
$tdatastage2 [".advSearchFields"] [] = "PK1";
$tdatastage2 [".advSearchFields"] [] = "CategoryName";
$tdatastage2 [".advSearchFields"] [] = "Activity";
$tdatastage2 [".advSearchFields"] [] = "Duration _Weeks";
$tdatastage2 [".advSearchFields"] [] = "RSA";
$tdatastage2 [".advSearchFields"] [] = "PA";
$tdatastage2 [".advSearchFields"] [] = "TAM";
$tdatastage2 [".advSearchFields"] [] = "Other";
$tdatastage2 [".advSearchFields"] [] = "CategoryID";
$tdatastage2 [".advSearchFields"] [] = "AutRoleID";

$tdatastage2 [".tableType"] = "list";

$tdatastage2 [".printerPageOrientation"] = 0;
$tdatastage2 [".nPrinterPageScale"] = 100;

$tdatastage2 [".nPrinterSplitRecords"] = 40;

$tdatastage2 [".nPrinterPDFSplitRecords"] = 40;

$tdatastage2 [".geocodingEnabled"] = false;

// view page pdf

// print page pdf

$tdatastage2 [".pageSize"] = 20;

$tdatastage2 [".warnLeavingPages"] = true;

$tstrOrderBy = "ORDER BY Activity";
if (strlen ( $tstrOrderBy ) && strtolower ( substr ( $tstrOrderBy, 0, 8 ) ) != "order by")
	$tstrOrderBy = "order by " . $tstrOrderBy;
$tdatastage2 [".strOrderBy"] = $tstrOrderBy;

$tdatastage2 [".orderindexes"] = array ();
$tdatastage2 [".orderindexes"] [] = array (
		3,
		(1 ? "ASC" : "DESC"),
		"Activity" 
);

$tdatastage2 [".sqlHead"] = "SELECT PK1,  CategoryName,  Activity,  `Duration _Weeks`,  RSA,  PA,  TAM,  Other,  CategoryID,  AutRoleID";
$tdatastage2 [".sqlFrom"] = "FROM stage2";
$tdatastage2 [".sqlWhereExpr"] = "";
$tdatastage2 [".sqlTail"] = "";

// fill array of records per page for list and report without group fields
$arrRPP = array ();
$arrRPP [] = 10;
$arrRPP [] = 20;
$arrRPP [] = 30;
$arrRPP [] = 50;
$arrRPP [] = 100;
$arrRPP [] = 500;
$arrRPP [] = - 1;
$tdatastage2 [".arrRecsPerPage"] = $arrRPP;

// fill array of groups per page for report with group fields
$arrGPP = array ();
$arrGPP [] = 1;
$arrGPP [] = 3;
$arrGPP [] = 5;
$arrGPP [] = 10;
$arrGPP [] = 50;
$arrGPP [] = 100;
$arrGPP [] = - 1;
$tdatastage2 [".arrGroupsPerPage"] = $arrGPP;

$tableKeysstage2 = array ();
$tableKeysstage2 [] = "PK1";
$tdatastage2 [".Keys"] = $tableKeysstage2;

$tdatastage2 [".listFields"] = array ();
$tdatastage2 [".listFields"] [] = "RSA";
$tdatastage2 [".listFields"] [] = "PA";
$tdatastage2 [".listFields"] [] = "CategoryID";
$tdatastage2 [".listFields"] [] = "AutRoleID";
$tdatastage2 [".listFields"] [] = "PK1";
$tdatastage2 [".listFields"] [] = "CategoryName";
$tdatastage2 [".listFields"] [] = "Activity";
$tdatastage2 [".listFields"] [] = "Duration _Weeks";
$tdatastage2 [".listFields"] [] = "TAM";
$tdatastage2 [".listFields"] [] = "Other";

$tdatastage2 [".hideMobileList"] = array ();

$tdatastage2 [".viewFields"] = array ();
$tdatastage2 [".viewFields"] [] = "PK1";
$tdatastage2 [".viewFields"] [] = "CategoryName";
$tdatastage2 [".viewFields"] [] = "Activity";
$tdatastage2 [".viewFields"] [] = "Duration _Weeks";
$tdatastage2 [".viewFields"] [] = "RSA";
$tdatastage2 [".viewFields"] [] = "PA";
$tdatastage2 [".viewFields"] [] = "TAM";
$tdatastage2 [".viewFields"] [] = "Other";
$tdatastage2 [".viewFields"] [] = "CategoryID";
$tdatastage2 [".viewFields"] [] = "AutRoleID";

$tdatastage2 [".addFields"] = array ();
$tdatastage2 [".addFields"] [] = "CategoryName";
$tdatastage2 [".addFields"] [] = "Activity";
$tdatastage2 [".addFields"] [] = "Duration _Weeks";
$tdatastage2 [".addFields"] [] = "RSA";
$tdatastage2 [".addFields"] [] = "PA";
$tdatastage2 [".addFields"] [] = "TAM";
$tdatastage2 [".addFields"] [] = "Other";
$tdatastage2 [".addFields"] [] = "CategoryID";
$tdatastage2 [".addFields"] [] = "AutRoleID";

$tdatastage2 [".masterListFields"] = array ();
$tdatastage2 [".masterListFields"] [] = "PK1";
$tdatastage2 [".masterListFields"] [] = "CategoryName";
$tdatastage2 [".masterListFields"] [] = "Activity";
$tdatastage2 [".masterListFields"] [] = "Duration _Weeks";
$tdatastage2 [".masterListFields"] [] = "RSA";
$tdatastage2 [".masterListFields"] [] = "PA";
$tdatastage2 [".masterListFields"] [] = "TAM";
$tdatastage2 [".masterListFields"] [] = "Other";
$tdatastage2 [".masterListFields"] [] = "CategoryID";
$tdatastage2 [".masterListFields"] [] = "AutRoleID";

$tdatastage2 [".inlineAddFields"] = array ();

$tdatastage2 [".editFields"] = array ();
$tdatastage2 [".editFields"] [] = "CategoryName";
$tdatastage2 [".editFields"] [] = "Activity";
$tdatastage2 [".editFields"] [] = "Duration _Weeks";
$tdatastage2 [".editFields"] [] = "RSA";
$tdatastage2 [".editFields"] [] = "PA";
$tdatastage2 [".editFields"] [] = "TAM";
$tdatastage2 [".editFields"] [] = "Other";
$tdatastage2 [".editFields"] [] = "CategoryID";
$tdatastage2 [".editFields"] [] = "AutRoleID";

$tdatastage2 [".inlineEditFields"] = array ();
$tdatastage2 [".inlineEditFields"] [] = "RSA";
$tdatastage2 [".inlineEditFields"] [] = "PA";
$tdatastage2 [".inlineEditFields"] [] = "CategoryID";
$tdatastage2 [".inlineEditFields"] [] = "AutRoleID";
$tdatastage2 [".inlineEditFields"] [] = "CategoryName";
$tdatastage2 [".inlineEditFields"] [] = "Activity";
$tdatastage2 [".inlineEditFields"] [] = "Duration _Weeks";
$tdatastage2 [".inlineEditFields"] [] = "TAM";
$tdatastage2 [".inlineEditFields"] [] = "Other";

$tdatastage2 [".exportFields"] = array ();
$tdatastage2 [".exportFields"] [] = "PK1";
$tdatastage2 [".exportFields"] [] = "CategoryName";
$tdatastage2 [".exportFields"] [] = "Activity";
$tdatastage2 [".exportFields"] [] = "Duration _Weeks";
$tdatastage2 [".exportFields"] [] = "RSA";
$tdatastage2 [".exportFields"] [] = "PA";
$tdatastage2 [".exportFields"] [] = "TAM";
$tdatastage2 [".exportFields"] [] = "Other";
$tdatastage2 [".exportFields"] [] = "CategoryID";
$tdatastage2 [".exportFields"] [] = "AutRoleID";

$tdatastage2 [".importFields"] = array ();
$tdatastage2 [".importFields"] [] = "PK1";
$tdatastage2 [".importFields"] [] = "CategoryName";
$tdatastage2 [".importFields"] [] = "Activity";
$tdatastage2 [".importFields"] [] = "Duration _Weeks";
$tdatastage2 [".importFields"] [] = "RSA";
$tdatastage2 [".importFields"] [] = "PA";
$tdatastage2 [".importFields"] [] = "TAM";
$tdatastage2 [".importFields"] [] = "Other";
$tdatastage2 [".importFields"] [] = "CategoryID";
$tdatastage2 [".importFields"] [] = "AutRoleID";

$tdatastage2 [".printFields"] = array ();
$tdatastage2 [".printFields"] [] = "PK1";
$tdatastage2 [".printFields"] [] = "CategoryName";
$tdatastage2 [".printFields"] [] = "Activity";
$tdatastage2 [".printFields"] [] = "Duration _Weeks";
$tdatastage2 [".printFields"] [] = "RSA";
$tdatastage2 [".printFields"] [] = "PA";
$tdatastage2 [".printFields"] [] = "TAM";
$tdatastage2 [".printFields"] [] = "Other";
$tdatastage2 [".printFields"] [] = "CategoryID";
$tdatastage2 [".printFields"] [] = "AutRoleID";

// PK1
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 1;
$fdata ["strName"] = "PK1";
$fdata ["GoodName"] = "PK1";
$fdata ["ownerTable"] = "stage2";
$fdata ["Label"] = GetFieldLabel ( "stage2", "PK1" );
$fdata ["FieldType"] = 3;

$fdata ["AutoInc"] = true;

$fdata ["bListPage"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "PK1";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "PK1";

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

$fdata ["EditFormats"] ["edit"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = false;

// the field's search options settings

// the default search options list
$fdata ["searchOptionsList"] = array (
		"Contains",
		"Equals",
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdatastage2 ["PK1"] = $fdata;
// CategoryName
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 2;
$fdata ["strName"] = "CategoryName";
$fdata ["GoodName"] = "CategoryName";
$fdata ["ownerTable"] = "stage2";
$fdata ["Label"] = GetFieldLabel ( "stage2", "CategoryName" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "CategoryName";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "CategoryName";

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
$edata ["EditParams"] .= " maxlength=2";

$edata ["controlWidth"] = 200;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = false;

// the field's search options settings

// the default search options list
$fdata ["searchOptionsList"] = array (
		"Contains",
		"Equals",
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdatastage2 ["CategoryName"] = $fdata;
// Activity
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 3;
$fdata ["strName"] = "Activity";
$fdata ["GoodName"] = "Activity";
$fdata ["ownerTable"] = "stage2";
$fdata ["Label"] = GetFieldLabel ( "stage2", "Activity" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Activity";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Activity";

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
$edata ["EditParams"] .= " maxlength=13";

$edata ["controlWidth"] = 200;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = false;

// the field's search options settings

// the default search options list
$fdata ["searchOptionsList"] = array (
		"Contains",
		"Equals",
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdatastage2 ["Activity"] = $fdata;
// Duration _Weeks
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 4;
$fdata ["strName"] = "Duration _Weeks";
$fdata ["GoodName"] = "Duration__Weeks";
$fdata ["ownerTable"] = "stage2";
$fdata ["Label"] = GetFieldLabel ( "stage2", "Duration__Weeks" );
$fdata ["FieldType"] = 3;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Duration _Weeks";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "`Duration _Weeks`";

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

$edata ["HTML5InuptType"] = "number";

$edata ["EditParams"] = "";

$edata ["controlWidth"] = 200;

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

// the default search options list
$fdata ["searchOptionsList"] = array (
		"Contains",
		"Equals",
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdatastage2 ["Duration _Weeks"] = $fdata;
// RSA
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 5;
$fdata ["strName"] = "RSA";
$fdata ["GoodName"] = "RSA";
$fdata ["ownerTable"] = "stage2";
$fdata ["Label"] = GetFieldLabel ( "stage2", "RSA" );
$fdata ["FieldType"] = 14;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "RSA";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "RSA";

$fdata ["FieldPermissions"] = true;

$fdata ["UploadFolder"] = "files";

// Begin View Formats
$fdata ["ViewFormats"] = array ();

$vdata = array (
		"ViewFormat" => "Number" 
);

$vdata ["controlWidth"] = 200;

$vdata ["DecimalDigits"] = 2;

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

$edata ["HTML5InuptType"] = "number";

$edata ["EditParams"] = "";

$edata ["controlWidth"] = 200;

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

// the default search options list
$fdata ["searchOptionsList"] = array (
		"Contains",
		"Equals",
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdatastage2 ["RSA"] = $fdata;
// PA
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 6;
$fdata ["strName"] = "PA";
$fdata ["GoodName"] = "PA";
$fdata ["ownerTable"] = "stage2";
$fdata ["Label"] = GetFieldLabel ( "stage2", "PA" );
$fdata ["FieldType"] = 14;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "PA";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "PA";

$fdata ["FieldPermissions"] = true;

$fdata ["UploadFolder"] = "files";

// Begin View Formats
$fdata ["ViewFormats"] = array ();

$vdata = array (
		"ViewFormat" => "Number" 
);

$vdata ["DecimalDigits"] = 2;

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

$edata ["HTML5InuptType"] = "number";

$edata ["EditParams"] = "";

$edata ["controlWidth"] = 200;

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

// the default search options list
$fdata ["searchOptionsList"] = array (
		"Contains",
		"Equals",
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdatastage2 ["PA"] = $fdata;
// TAM
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 7;
$fdata ["strName"] = "TAM";
$fdata ["GoodName"] = "TAM";
$fdata ["ownerTable"] = "stage2";
$fdata ["Label"] = GetFieldLabel ( "stage2", "TAM" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "TAM";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "TAM";

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

$edata ["controlWidth"] = 200;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = false;

// the field's search options settings

// the default search options list
$fdata ["searchOptionsList"] = array (
		"Contains",
		"Equals",
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdatastage2 ["TAM"] = $fdata;
// Other
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 8;
$fdata ["strName"] = "Other";
$fdata ["GoodName"] = "Other";
$fdata ["ownerTable"] = "stage2";
$fdata ["Label"] = GetFieldLabel ( "stage2", "Other" );
$fdata ["FieldType"] = 14;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Other";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Other";

$fdata ["FieldPermissions"] = true;

$fdata ["UploadFolder"] = "files";

// Begin View Formats
$fdata ["ViewFormats"] = array ();

$vdata = array (
		"ViewFormat" => "Number" 
);

$vdata ["DecimalDigits"] = 2;

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

$edata ["HTML5InuptType"] = "number";

$edata ["EditParams"] = "";

$edata ["controlWidth"] = 200;

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

// the default search options list
$fdata ["searchOptionsList"] = array (
		"Contains",
		"Equals",
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdatastage2 ["Other"] = $fdata;
// CategoryID
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 9;
$fdata ["strName"] = "CategoryID";
$fdata ["GoodName"] = "CategoryID";
$fdata ["ownerTable"] = "stage2";
$fdata ["Label"] = GetFieldLabel ( "stage2", "CategoryID" );
$fdata ["FieldType"] = 3;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "CategoryID";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "CategoryID";

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

$edata ["HTML5InuptType"] = "number";

$edata ["EditParams"] = "";

$edata ["controlWidth"] = 200;

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

// the default search options list
$fdata ["searchOptionsList"] = array (
		"Contains",
		"Equals",
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdatastage2 ["CategoryID"] = $fdata;
// AutRoleID
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 10;
$fdata ["strName"] = "AutRoleID";
$fdata ["GoodName"] = "AutRoleID";
$fdata ["ownerTable"] = "stage2";
$fdata ["Label"] = GetFieldLabel ( "stage2", "AutRoleID" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "AutRoleID";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "AutRoleID";

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
$edata ["EditParams"] .= " maxlength=11";

$edata ["controlWidth"] = 200;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = false;

// the field's search options settings

// the default search options list
$fdata ["searchOptionsList"] = array (
		"Contains",
		"Equals",
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdatastage2 ["AutRoleID"] = $fdata;

$tables_data ["stage2"] = &$tdatastage2;
$field_labels ["stage2"] = &$fieldLabelsstage2;
$fieldToolTips ["stage2"] = &$fieldToolTipsstage2;
$page_titles ["stage2"] = &$pageTitlesstage2;

// -----------------start prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData ["stage2"] = array ();

// tables which are master tables for current table (detail)
$masterTablesData ["stage2"] = array ();

// -----------------end prepare master-details data arrays ------------------------------//

require_once (getabspath ( "classes/sql.php" ));
function createSqlQuery_stage2() {
	$proto3 = array ();
	$proto3 ["m_strHead"] = "SELECT";
	$proto3 ["m_strFieldList"] = "PK1,  CategoryName,  Activity,  `Duration _Weeks`,  RSA,  PA,  TAM,  Other,  CategoryID,  AutRoleID";
	$proto3 ["m_strFrom"] = "FROM stage2";
	$proto3 ["m_strWhere"] = "";
	$proto3 ["m_strOrderBy"] = "ORDER BY Activity";
	$proto3 ["m_strTail"] = "";
	$proto3 ["cipherer"] = null;
	$proto4 = array ();
	$proto4 ["m_sql"] = "";
	$proto4 ["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed ( array (
			"m_sql" => "" 
	) );
	
	$proto4 ["m_column"] = $obj;
	$proto4 ["m_contained"] = array ();
	$proto4 ["m_strCase"] = "";
	$proto4 ["m_havingmode"] = false;
	$proto4 ["m_inBrackets"] = false;
	$proto4 ["m_useAlias"] = false;
	$obj = new SQLLogicalExpr ( $proto4 );
	
	$proto3 ["m_where"] = $obj;
	$proto6 = array ();
	$proto6 ["m_sql"] = "";
	$proto6 ["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed ( array (
			"m_sql" => "" 
	) );
	
	$proto6 ["m_column"] = $obj;
	$proto6 ["m_contained"] = array ();
	$proto6 ["m_strCase"] = "";
	$proto6 ["m_havingmode"] = false;
	$proto6 ["m_inBrackets"] = false;
	$proto6 ["m_useAlias"] = false;
	$obj = new SQLLogicalExpr ( $proto6 );
	
	$proto3 ["m_having"] = $obj;
	$proto3 ["m_fieldlist"] = array ();
	$proto8 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "PK1",
			"m_strTable" => "stage2",
			"m_srcTableName" => "stage2" 
	) );
	
	$proto8 ["m_sql"] = "PK1";
	$proto8 ["m_srcTableName"] = "stage2";
	$proto8 ["m_expr"] = $obj;
	$proto8 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto8 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto10 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "CategoryName",
			"m_strTable" => "stage2",
			"m_srcTableName" => "stage2" 
	) );
	
	$proto10 ["m_sql"] = "CategoryName";
	$proto10 ["m_srcTableName"] = "stage2";
	$proto10 ["m_expr"] = $obj;
	$proto10 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto10 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto12 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Activity",
			"m_strTable" => "stage2",
			"m_srcTableName" => "stage2" 
	) );
	
	$proto12 ["m_sql"] = "Activity";
	$proto12 ["m_srcTableName"] = "stage2";
	$proto12 ["m_expr"] = $obj;
	$proto12 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto12 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto14 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Duration _Weeks",
			"m_strTable" => "stage2",
			"m_srcTableName" => "stage2" 
	) );
	
	$proto14 ["m_sql"] = "`Duration _Weeks`";
	$proto14 ["m_srcTableName"] = "stage2";
	$proto14 ["m_expr"] = $obj;
	$proto14 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto14 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto16 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "RSA",
			"m_strTable" => "stage2",
			"m_srcTableName" => "stage2" 
	) );
	
	$proto16 ["m_sql"] = "RSA";
	$proto16 ["m_srcTableName"] = "stage2";
	$proto16 ["m_expr"] = $obj;
	$proto16 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto16 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto18 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "PA",
			"m_strTable" => "stage2",
			"m_srcTableName" => "stage2" 
	) );
	
	$proto18 ["m_sql"] = "PA";
	$proto18 ["m_srcTableName"] = "stage2";
	$proto18 ["m_expr"] = $obj;
	$proto18 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto18 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto20 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "TAM",
			"m_strTable" => "stage2",
			"m_srcTableName" => "stage2" 
	) );
	
	$proto20 ["m_sql"] = "TAM";
	$proto20 ["m_srcTableName"] = "stage2";
	$proto20 ["m_expr"] = $obj;
	$proto20 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto20 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto22 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Other",
			"m_strTable" => "stage2",
			"m_srcTableName" => "stage2" 
	) );
	
	$proto22 ["m_sql"] = "Other";
	$proto22 ["m_srcTableName"] = "stage2";
	$proto22 ["m_expr"] = $obj;
	$proto22 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto22 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto24 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "CategoryID",
			"m_strTable" => "stage2",
			"m_srcTableName" => "stage2" 
	) );
	
	$proto24 ["m_sql"] = "CategoryID";
	$proto24 ["m_srcTableName"] = "stage2";
	$proto24 ["m_expr"] = $obj;
	$proto24 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto24 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto26 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "AutRoleID",
			"m_strTable" => "stage2",
			"m_srcTableName" => "stage2" 
	) );
	
	$proto26 ["m_sql"] = "AutRoleID";
	$proto26 ["m_srcTableName"] = "stage2";
	$proto26 ["m_expr"] = $obj;
	$proto26 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto26 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto3 ["m_fromlist"] = array ();
	$proto28 = array ();
	$proto28 ["m_link"] = "SQLL_MAIN";
	$proto29 = array ();
	$proto29 ["m_strName"] = "stage2";
	$proto29 ["m_srcTableName"] = "stage2";
	$proto29 ["m_columns"] = array ();
	$proto29 ["m_columns"] [] = "PK1";
	$proto29 ["m_columns"] [] = "CategoryName";
	$proto29 ["m_columns"] [] = "Activity";
	$proto29 ["m_columns"] [] = "Duration _Weeks";
	$proto29 ["m_columns"] [] = "RSA";
	$proto29 ["m_columns"] [] = "PA";
	$proto29 ["m_columns"] [] = "TAM";
	$proto29 ["m_columns"] [] = "Other";
	$proto29 ["m_columns"] [] = "CategoryID";
	$proto29 ["m_columns"] [] = "AutRoleID";
	$obj = new SQLTable ( $proto29 );
	
	$proto28 ["m_table"] = $obj;
	$proto28 ["m_sql"] = "stage2";
	$proto28 ["m_alias"] = "";
	$proto28 ["m_srcTableName"] = "stage2";
	$proto30 = array ();
	$proto30 ["m_sql"] = "";
	$proto30 ["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed ( array (
			"m_sql" => "" 
	) );
	
	$proto30 ["m_column"] = $obj;
	$proto30 ["m_contained"] = array ();
	$proto30 ["m_strCase"] = "";
	$proto30 ["m_havingmode"] = false;
	$proto30 ["m_inBrackets"] = false;
	$proto30 ["m_useAlias"] = false;
	$obj = new SQLLogicalExpr ( $proto30 );
	
	$proto28 ["m_joinon"] = $obj;
	$obj = new SQLFromListItem ( $proto28 );
	
	$proto3 ["m_fromlist"] [] = $obj;
	$proto3 ["m_groupby"] = array ();
	$proto3 ["m_orderby"] = array ();
	$proto32 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Activity",
			"m_strTable" => "stage2",
			"m_srcTableName" => "stage2" 
	) );
	
	$proto32 ["m_column"] = $obj;
	$proto32 ["m_bAsc"] = 1;
	$proto32 ["m_nColumn"] = 0;
	$obj = new SQLOrderByItem ( $proto32 );
	
	$proto3 ["m_orderby"] [] = $obj;
	$proto3 ["m_srcTableName"] = "stage2";
	$obj = new SQLQuery ( $proto3 );
	
	return $obj;
}
$queryData_stage2 = createSqlQuery_stage2 ();

$tdatastage2 [".sqlquery"] = $queryData_stage2;

include_once (getabspath ( "include/stage2_events.php" ));
$tableEvents ["stage2"] = new eventclass_stage2 ();
$tdatastage2 [".hasEvents"] = true;

?>