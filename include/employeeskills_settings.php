<?php
require_once (getabspath ( "classes/cipherer.php" ));

$tdataemployeeskills = array ();
$tdataemployeeskills [".truncateText"] = true;
$tdataemployeeskills [".NumberOfChars"] = 80;
$tdataemployeeskills [".ShortName"] = "employeeskills";
$tdataemployeeskills [".OwnerID"] = "";
$tdataemployeeskills [".OriginalTable"] = "employeeskills";

// field labels
$fieldLabelsemployeeskills = array ();
$fieldToolTipsemployeeskills = array ();
$pageTitlesemployeeskills = array ();

if (mlang_getcurrentlang () == "English") {
	$fieldLabelsemployeeskills ["English"] = array ();
	$fieldToolTipsemployeeskills ["English"] = array ();
	$pageTitlesemployeeskills ["English"] = array ();
	$fieldLabelsemployeeskills ["English"] ["AutEskillID"] = "Aut Eskill ID";
	$fieldToolTipsemployeeskills ["English"] ["AutEskillID"] = "";
	$fieldLabelsemployeeskills ["English"] ["SkillLevel"] = "Skill Level";
	$fieldToolTipsemployeeskills ["English"] ["SkillLevel"] = "";
	$fieldLabelsemployeeskills ["English"] ["Certificate"] = "Certificate";
	$fieldToolTipsemployeeskills ["English"] ["Certificate"] = "";
	$fieldLabelsemployeeskills ["English"] ["Comments"] = "Comments";
	$fieldToolTipsemployeeskills ["English"] ["Comments"] = "";
	$fieldLabelsemployeeskills ["English"] ["PlatformType"] = "Platform Type";
	$fieldToolTipsemployeeskills ["English"] ["PlatformType"] = "";
	$fieldLabelsemployeeskills ["English"] ["PlatformName"] = "Platform Name";
	$fieldToolTipsemployeeskills ["English"] ["PlatformName"] = "";
	$fieldLabelsemployeeskills ["English"] ["CategoryID"] = "Category ID";
	$fieldToolTipsemployeeskills ["English"] ["CategoryID"] = "";
	$fieldLabelsemployeeskills ["English"] ["EmployeeID"] = "Employee ID";
	$fieldToolTipsemployeeskills ["English"] ["EmployeeID"] = "";
	$fieldLabelsemployeeskills ["English"] ["EmployeeName"] = "Employee Name";
	$fieldToolTipsemployeeskills ["English"] ["EmployeeName"] = "";
	if (count ( $fieldToolTipsemployeeskills ["English"] ))
		$tdataemployeeskills [".isUseToolTips"] = true;
}
if (mlang_getcurrentlang () == "") {
	$fieldLabelsemployeeskills [""] = array ();
	$fieldToolTipsemployeeskills [""] = array ();
	$pageTitlesemployeeskills [""] = array ();
	$fieldLabelsemployeeskills [""] ["AutEskillID"] = "Aut Eskill ID";
	$fieldToolTipsemployeeskills [""] ["AutEskillID"] = "";
	if (count ( $fieldToolTipsemployeeskills [""] ))
		$tdataemployeeskills [".isUseToolTips"] = true;
}

$tdataemployeeskills [".NCSearch"] = true;

$tdataemployeeskills [".shortTableName"] = "employeeskills";
$tdataemployeeskills [".nSecOptions"] = 0;
$tdataemployeeskills [".recsPerRowList"] = 1;
$tdataemployeeskills [".recsPerRowPrint"] = 1;
$tdataemployeeskills [".mainTableOwnerID"] = "";
$tdataemployeeskills [".moveNext"] = 0;
$tdataemployeeskills [".entityType"] = 0;

$tdataemployeeskills [".strOriginalTableName"] = "employeeskills";

$tdataemployeeskills [".showAddInPopup"] = false;

$tdataemployeeskills [".showEditInPopup"] = false;

$tdataemployeeskills [".showViewInPopup"] = true;

// page's base css files names
$popupPagesLayoutNames = array ();
;
$popupPagesLayoutNames ["add"] = "view2";

;
$popupPagesLayoutNames ["edit"] = "edit2";

;
$popupPagesLayoutNames ["view"] = "view2";
$tdataemployeeskills [".popupPagesLayoutNames"] = $popupPagesLayoutNames;

$tdataemployeeskills [".fieldsForRegister"] = array ();

$tdataemployeeskills [".listAjax"] = false;

$tdataemployeeskills [".audit"] = false;

$tdataemployeeskills [".locking"] = false;

$tdataemployeeskills [".edit"] = true;
$tdataemployeeskills [".afterEditAction"] = 1;
$tdataemployeeskills [".closePopupAfterEdit"] = 1;
$tdataemployeeskills [".afterEditActionDetTable"] = "";

$tdataemployeeskills [".list"] = true;

$tdataemployeeskills [".inlineEdit"] = true;
$tdataemployeeskills [".inlineAdd"] = true;
$tdataemployeeskills [".view"] = true;

$tdataemployeeskills [".import"] = true;

$tdataemployeeskills [".exportTo"] = true;

$tdataemployeeskills [".printFriendly"] = true;

$tdataemployeeskills [".delete"] = true;

$tdataemployeeskills [".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataemployeeskills [".searchSaving"] = false;
//

$tdataemployeeskills [".showSearchPanel"] = true;
$tdataemployeeskills [".flexibleSearch"] = true;

if (isMobile ())
	$tdataemployeeskills [".isUseAjaxSuggest"] = false;
else
	$tdataemployeeskills [".isUseAjaxSuggest"] = true;

$tdataemployeeskills [".rowHighlite"] = true;

$tdataemployeeskills [".addPageEvents"] = true;

// use timepicker for search panel
$tdataemployeeskills [".isUseTimeForSearch"] = false;

$tdataemployeeskills [".allSearchFields"] = array ();
$tdataemployeeskills [".filterFields"] = array ();
$tdataemployeeskills [".requiredSearchFields"] = array ();

$tdataemployeeskills [".allSearchFields"] [] = "PlatformType";
$tdataemployeeskills [".allSearchFields"] [] = "PlatformName";
$tdataemployeeskills [".allSearchFields"] [] = "SkillLevel";
$tdataemployeeskills [".allSearchFields"] [] = "Certificate";
$tdataemployeeskills [".allSearchFields"] [] = "Comments";

$tdataemployeeskills [".googleLikeFields"] = array ();
$tdataemployeeskills [".googleLikeFields"] [] = "AutEskillID";
$tdataemployeeskills [".googleLikeFields"] [] = "PlatformType";
$tdataemployeeskills [".googleLikeFields"] [] = "PlatformName";
$tdataemployeeskills [".googleLikeFields"] [] = "SkillLevel";
$tdataemployeeskills [".googleLikeFields"] [] = "Certificate";
$tdataemployeeskills [".googleLikeFields"] [] = "Comments";
$tdataemployeeskills [".googleLikeFields"] [] = "CategoryID";
$tdataemployeeskills [".googleLikeFields"] [] = "EmployeeID";
$tdataemployeeskills [".googleLikeFields"] [] = "EmployeeName";

$tdataemployeeskills [".advSearchFields"] = array ();
$tdataemployeeskills [".advSearchFields"] [] = "PlatformType";
$tdataemployeeskills [".advSearchFields"] [] = "PlatformName";
$tdataemployeeskills [".advSearchFields"] [] = "SkillLevel";
$tdataemployeeskills [".advSearchFields"] [] = "Certificate";
$tdataemployeeskills [".advSearchFields"] [] = "Comments";

$tdataemployeeskills [".tableType"] = "list";

$tdataemployeeskills [".printerPageOrientation"] = 0;
$tdataemployeeskills [".nPrinterPageScale"] = 100;

$tdataemployeeskills [".nPrinterSplitRecords"] = 40;

$tdataemployeeskills [".nPrinterPDFSplitRecords"] = 40;

$tdataemployeeskills [".geocodingEnabled"] = false;

// view page pdf

// print page pdf

$tdataemployeeskills [".pageSize"] = 20;

$tdataemployeeskills [".warnLeavingPages"] = true;

$tstrOrderBy = "";
if (strlen ( $tstrOrderBy ) && strtolower ( substr ( $tstrOrderBy, 0, 8 ) ) != "order by")
	$tstrOrderBy = "order by " . $tstrOrderBy;
$tdataemployeeskills [".strOrderBy"] = $tstrOrderBy;

$tdataemployeeskills [".orderindexes"] = array ();

$tdataemployeeskills [".sqlHead"] = "SELECT AutEskillID,  PlatformType,  PlatformName,  SkillLevel,  Certificate,  Comments,  CategoryID,  EmployeeID,  EmployeeName";
$tdataemployeeskills [".sqlFrom"] = "FROM employeeskills";
$tdataemployeeskills [".sqlWhereExpr"] = "";
$tdataemployeeskills [".sqlTail"] = "";

// fill array of records per page for list and report without group fields
$arrRPP = array ();
$arrRPP [] = 10;
$arrRPP [] = 20;
$arrRPP [] = 30;
$arrRPP [] = 50;
$arrRPP [] = 100;
$arrRPP [] = 500;
$arrRPP [] = - 1;
$tdataemployeeskills [".arrRecsPerPage"] = $arrRPP;

// fill array of groups per page for report with group fields
$arrGPP = array ();
$arrGPP [] = 1;
$arrGPP [] = 3;
$arrGPP [] = 5;
$arrGPP [] = 10;
$arrGPP [] = 50;
$arrGPP [] = 100;
$arrGPP [] = - 1;
$tdataemployeeskills [".arrGroupsPerPage"] = $arrGPP;

$tableKeysemployeeskills = array ();
$tableKeysemployeeskills [] = "AutEskillID";
$tdataemployeeskills [".Keys"] = $tableKeysemployeeskills;

$tdataemployeeskills [".listFields"] = array ();
$tdataemployeeskills [".listFields"] [] = "PlatformType";
$tdataemployeeskills [".listFields"] [] = "PlatformName";
$tdataemployeeskills [".listFields"] [] = "SkillLevel";
$tdataemployeeskills [".listFields"] [] = "Certificate";
$tdataemployeeskills [".listFields"] [] = "Comments";

$tdataemployeeskills [".hideMobileList"] = array ();

$tdataemployeeskills [".viewFields"] = array ();
$tdataemployeeskills [".viewFields"] [] = "AutEskillID";
$tdataemployeeskills [".viewFields"] [] = "PlatformType";
$tdataemployeeskills [".viewFields"] [] = "PlatformName";
$tdataemployeeskills [".viewFields"] [] = "SkillLevel";
$tdataemployeeskills [".viewFields"] [] = "Certificate";
$tdataemployeeskills [".viewFields"] [] = "Comments";
$tdataemployeeskills [".viewFields"] [] = "CategoryID";

$tdataemployeeskills [".addFields"] = array ();

$tdataemployeeskills [".masterListFields"] = array ();
$tdataemployeeskills [".masterListFields"] [] = "AutEskillID";
$tdataemployeeskills [".masterListFields"] [] = "EmployeeID";
$tdataemployeeskills [".masterListFields"] [] = "EmployeeName";
$tdataemployeeskills [".masterListFields"] [] = "PlatformType";
$tdataemployeeskills [".masterListFields"] [] = "PlatformName";
$tdataemployeeskills [".masterListFields"] [] = "SkillLevel";
$tdataemployeeskills [".masterListFields"] [] = "Certificate";
$tdataemployeeskills [".masterListFields"] [] = "CategoryID";
$tdataemployeeskills [".masterListFields"] [] = "Comments";

$tdataemployeeskills [".inlineAddFields"] = array ();
$tdataemployeeskills [".inlineAddFields"] [] = "PlatformType";
$tdataemployeeskills [".inlineAddFields"] [] = "PlatformName";
$tdataemployeeskills [".inlineAddFields"] [] = "SkillLevel";
$tdataemployeeskills [".inlineAddFields"] [] = "Certificate";
$tdataemployeeskills [".inlineAddFields"] [] = "Comments";

$tdataemployeeskills [".editFields"] = array ();
$tdataemployeeskills [".editFields"] [] = "PlatformType";
$tdataemployeeskills [".editFields"] [] = "PlatformName";
$tdataemployeeskills [".editFields"] [] = "SkillLevel";
$tdataemployeeskills [".editFields"] [] = "Certificate";
$tdataemployeeskills [".editFields"] [] = "Comments";

$tdataemployeeskills [".inlineEditFields"] = array ();
$tdataemployeeskills [".inlineEditFields"] [] = "PlatformType";
$tdataemployeeskills [".inlineEditFields"] [] = "PlatformName";
$tdataemployeeskills [".inlineEditFields"] [] = "SkillLevel";
$tdataemployeeskills [".inlineEditFields"] [] = "Certificate";
$tdataemployeeskills [".inlineEditFields"] [] = "Comments";

$tdataemployeeskills [".exportFields"] = array ();
$tdataemployeeskills [".exportFields"] [] = "PlatformType";
$tdataemployeeskills [".exportFields"] [] = "PlatformName";
$tdataemployeeskills [".exportFields"] [] = "SkillLevel";
$tdataemployeeskills [".exportFields"] [] = "Certificate";
$tdataemployeeskills [".exportFields"] [] = "Comments";

$tdataemployeeskills [".importFields"] = array ();
$tdataemployeeskills [".importFields"] [] = "PlatformType";
$tdataemployeeskills [".importFields"] [] = "PlatformName";
$tdataemployeeskills [".importFields"] [] = "SkillLevel";
$tdataemployeeskills [".importFields"] [] = "Certificate";
$tdataemployeeskills [".importFields"] [] = "Comments";

$tdataemployeeskills [".printFields"] = array ();
$tdataemployeeskills [".printFields"] [] = "PlatformType";
$tdataemployeeskills [".printFields"] [] = "PlatformName";
$tdataemployeeskills [".printFields"] [] = "SkillLevel";
$tdataemployeeskills [".printFields"] [] = "Certificate";
$tdataemployeeskills [".printFields"] [] = "Comments";

// AutEskillID
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 1;
$fdata ["strName"] = "AutEskillID";
$fdata ["GoodName"] = "AutEskillID";
$fdata ["ownerTable"] = "employeeskills";
$fdata ["Label"] = GetFieldLabel ( "employeeskills", "AutEskillID" );
$fdata ["FieldType"] = 3;

$fdata ["AutoInc"] = true;

$fdata ["bViewPage"] = true;

$fdata ["strField"] = "AutEskillID";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "AutEskillID";

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

$tdataemployeeskills ["AutEskillID"] = $fdata;
// PlatformType
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 2;
$fdata ["strName"] = "PlatformType";
$fdata ["GoodName"] = "PlatformType";
$fdata ["ownerTable"] = "employeeskills";
$fdata ["Label"] = GetFieldLabel ( "employeeskills", "PlatformType" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "PlatformType";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "PlatformType";

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
		"EditFormat" => "Lookup wizard" 
);

// Begin Lookup settings
$edata ["LookupType"] = 2;
$edata ["LookupTable"] = "category";
$edata ["autoCompleteFieldsOnEdit"] = 0;
$edata ["autoCompleteFields"] = array ();
$edata ["LCType"] = 0;

$edata ["LinkField"] = "CategoryID";
$edata ["LinkFieldType"] = 3;
$edata ["DisplayField"] = "CategotyName";

$edata ["LookupOrderBy"] = "";

// dependent dropdowns
$edata ["DependentLookups"] = array ();
$edata ["DependentLookups"] [] = "PlatformName";

$edata ["SelectSize"] = 1;

// End Lookup Settings

$edata ["IsRequired"] = true;

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 200;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
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

$tdataemployeeskills ["PlatformType"] = $fdata;
// PlatformName
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 3;
$fdata ["strName"] = "PlatformName";
$fdata ["GoodName"] = "PlatformName";
$fdata ["ownerTable"] = "employeeskills";
$fdata ["Label"] = GetFieldLabel ( "employeeskills", "PlatformName" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "PlatformName";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "PlatformName";

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
		"EditFormat" => "Lookup wizard" 
);

// Begin Lookup settings
$edata ["LookupType"] = 2;
$edata ["LookupTable"] = "skillstable";
$edata ["autoCompleteFieldsOnEdit"] = 0;
$edata ["autoCompleteFields"] = array ();
$edata ["LCType"] = 0;

$edata ["LinkField"] = "PlatformID";
$edata ["LinkFieldType"] = 0;
$edata ["DisplayField"] = "PlatformName";

$edata ["LookupOrderBy"] = "PlatformName";

$edata ["UseCategory"] = true;
$edata ["categoryFields"] = array ();
$edata ["categoryFields"] [] = array (
		"main" => "PlatformType",
		"lookup" => "CategoryID" 
);

$edata ["SelectSize"] = 1;

// End Lookup Settings

$edata ["IsRequired"] = true;

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 200;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
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

$tdataemployeeskills ["PlatformName"] = $fdata;
// SkillLevel
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 4;
$fdata ["strName"] = "SkillLevel";
$fdata ["GoodName"] = "SkillLevel";
$fdata ["ownerTable"] = "employeeskills";
$fdata ["Label"] = GetFieldLabel ( "employeeskills", "SkillLevel" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "SkillLevel";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "SkillLevel";

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
		"EditFormat" => "Lookup wizard" 
);

// Begin Lookup settings
$edata ["LookupType"] = 2;
$edata ["LookupTable"] = "skilllevel";
$edata ["autoCompleteFieldsOnEdit"] = 0;
$edata ["autoCompleteFields"] = array ();
$edata ["LCType"] = 0;

$edata ["LinkField"] = "SkillLevel";
$edata ["LinkFieldType"] = 0;
$edata ["DisplayField"] = "SkillLevel";

$edata ["LookupOrderBy"] = "";

$edata ["SelectSize"] = 1;

// End Lookup Settings

$edata ["IsRequired"] = true;

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 140;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = "IsRequired";

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = false;

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

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

$tdataemployeeskills ["SkillLevel"] = $fdata;
// Certificate
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 5;
$fdata ["strName"] = "Certificate";
$fdata ["GoodName"] = "Certificate";
$fdata ["ownerTable"] = "employeeskills";
$fdata ["Label"] = GetFieldLabel ( "employeeskills", "Certificate" );
$fdata ["FieldType"] = 201;

$fdata ["bListPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Certificate";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Certificate";

$fdata ["FieldPermissions"] = true;

$fdata ["UploadFolder"] = "files";

// Begin View Formats
$fdata ["ViewFormats"] = array ();

$vdata = array (
		"ViewFormat" => "HTML" 
);

$fdata ["ViewFormats"] ["view"] = $vdata;
// End View Formats

// Begin Edit Formats
$fdata ["EditFormats"] = array ();

$edata = array (
		"EditFormat" => "Text area" 
);

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["nRows"] = 100;
$edata ["nCols"] = 350;

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

$tdataemployeeskills ["Certificate"] = $fdata;
// Comments
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 6;
$fdata ["strName"] = "Comments";
$fdata ["GoodName"] = "Comments";
$fdata ["ownerTable"] = "employeeskills";
$fdata ["Label"] = GetFieldLabel ( "employeeskills", "Comments" );
$fdata ["FieldType"] = 201;

$fdata ["bListPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Comments";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Comments";

$fdata ["FieldPermissions"] = true;

$fdata ["UploadFolder"] = "files";

// Begin View Formats
$fdata ["ViewFormats"] = array ();

$vdata = array (
		"ViewFormat" => "HTML" 
);

$fdata ["ViewFormats"] ["view"] = $vdata;
// End View Formats

// Begin Edit Formats
$fdata ["EditFormats"] = array ();

$edata = array (
		"EditFormat" => "Text area" 
);

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["nRows"] = 100;
$edata ["nCols"] = 350;

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

$tdataemployeeskills ["Comments"] = $fdata;
// CategoryID
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 7;
$fdata ["strName"] = "CategoryID";
$fdata ["GoodName"] = "CategoryID";
$fdata ["ownerTable"] = "employeeskills";
$fdata ["Label"] = GetFieldLabel ( "employeeskills", "CategoryID" );
$fdata ["FieldType"] = 3;

$fdata ["bViewPage"] = true;

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

$tdataemployeeskills ["CategoryID"] = $fdata;
// EmployeeID
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 8;
$fdata ["strName"] = "EmployeeID";
$fdata ["GoodName"] = "EmployeeID";
$fdata ["ownerTable"] = "employeeskills";
$fdata ["Label"] = GetFieldLabel ( "employeeskills", "EmployeeID" );
$fdata ["FieldType"] = 200;

$fdata ["strField"] = "EmployeeID";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "employeeskills.EmployeeID";

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

$tdataemployeeskills ["EmployeeID"] = $fdata;
// EmployeeName
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 9;
$fdata ["strName"] = "EmployeeName";
$fdata ["GoodName"] = "EmployeeName";
$fdata ["ownerTable"] = "employeeskills";
$fdata ["Label"] = GetFieldLabel ( "employeeskills", "EmployeeName" );
$fdata ["FieldType"] = 200;

$fdata ["strField"] = "EmployeeName";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "EmployeeName";

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

$edata ["controlWidth"] = 200;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = false;

$tdataemployeeskills ["EmployeeName"] = $fdata;

$tables_data ["employeeskills"] = &$tdataemployeeskills;
$field_labels ["employeeskills"] = &$fieldLabelsemployeeskills;
$fieldToolTips ["employeeskills"] = &$fieldToolTipsemployeeskills;
$page_titles ["employeeskills"] = &$pageTitlesemployeeskills;

// -----------------start prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData ["employeeskills"] = array ();

// tables which are master tables for current table (detail)
$masterTablesData ["employeeskills"] = array ();

$strOriginalDetailsTable = "employee_header";
$masterParams = array ();
$masterParams ["mDataSourceTable"] = "employee_header";
$masterParams ["mOriginalTable"] = $strOriginalDetailsTable;
$masterParams ["mShortTable"] = "employee_header";
$masterParams ["masterKeys"] = array ();
$masterParams ["detailKeys"] = array ();
$masterParams ["dispChildCount"] = "1";
$masterParams ["hideChild"] = "1";
$masterParams ["dispInfo"] = "1";
$masterParams ["previewOnList"] = 0;
$masterParams ["previewOnAdd"] = 1;
$masterParams ["previewOnEdit"] = 1;
$masterParams ["previewOnView"] = 1;
$masterParams ["proceedLink"] = 1;

$masterParams ["type"] = PAGE_LIST;
$masterTablesData ["employeeskills"] [0] = $masterParams;
$masterTablesData ["employeeskills"] [0] ["masterKeys"] = array ();
$masterTablesData ["employeeskills"] [0] ["masterKeys"] [] = "EmployeeID";
$masterTablesData ["employeeskills"] [0] ["detailKeys"] = array ();
$masterTablesData ["employeeskills"] [0] ["detailKeys"] [] = "EmployeeID";

// -----------------end prepare master-details data arrays ------------------------------//

require_once (getabspath ( "classes/sql.php" ));
function createSqlQuery_employeeskills() {
	if( false == is_null( $_SESSION['UserName'] ) ) {
		$userName = $_SESSION['UserName'];
	}
	
	if( false == is_null( $_SESSION['UserID']) ) {
		$userID = $_SESSION["UserID"];
		$groupID = $_SESSION["UserRights"][$userID][".Groups"][0];
	}

	$proto3 = array ();
	$proto3 ["m_strHead"] = "SELECT";
	$proto3 ["m_strFieldList"] = " employeeskills.AutEskillID,  employeeskills.PlatformType,  employeeskills.PlatformName,  employeeskills.SkillLevel,  employeeskills.Certificate,  employeeskills.Comments,  employeeskills.CategoryID,  employeeskills.EmployeeID,  employeeskills.EmployeeName";
	$proto3 ["m_strFrom"] = " FROM employeeskills INNER JOIN employee_header ON employeeskills.EmployeeID = employee_header.EmployeeID";
	$proto3 ["m_strWhere"] = "";
	$proto3 ["m_strOrderBy"] = "";
	$proto3 ["m_strTail"] = "";
	$proto3 ["cipherer"] = null;
	$proto4 = array ();
	if( !IsAdmin() && '5' == $groupID ) {
		$proto4 ["m_sql"] = "";
		$proto4 ["m_uniontype"] = "SQLL_UNKNOWN";
		$obj = new SQLNonParsed ( array (
				"m_sql" => ""
		) );
	} elseif( !IsAdmin() && ( '6' == $groupID || '7' == $groupID ) ) {
		$proto4 ["m_sql"] = "concat(employee_header.`FirstName`, ' ', employee_header.`LastName`) = '" . $userName ."' OR employee_header.SupervisorName = '" . $userName . "'";
		$proto4 ["m_uniontype"] = "SQLL_OR";
		$obj = new SQLNonParsed ( array (
				"m_sql" => "concat(employee_header.`FirstName`, ' ', employee_header.`LastName`) = '" . $userName ."' OR employee_header.SupervisorName = '" . $userName . "'"
		) );
	} elseif ( !IsAdmin() && '1' == $groupID ) {
		$proto4 ["m_sql"] = "concat(employee_header.`FirstName`, ' ', employee_header.`LastName`) = '" . $userName ."'";
		$proto4 ["m_uniontype"] = "SQLL_UNKNOWN";
		$obj = new SQLNonParsed ( array (
				"m_sql" => "concat(employee_header.`FirstName`, ' ', employee_header.`LastName`) = '" . $userName ."'"
		) );
	} else {
		$proto4 ["m_sql"] = "";
		$proto4 ["m_uniontype"] = "SQLL_UNKNOWN";
		$obj = new SQLNonParsed ( array (
				"m_sql" => ""
		) );
	}
	
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
			"m_strName" => "AutEskillID",
			"m_strTable" => "employeeskills",
			"m_srcTableName" => "employeeskills" 
	) );
	
	$proto8 ["m_sql"] = "employeeskills.AutEskillID";
	$proto8 ["m_srcTableName"] = "employeeskills";
	$proto8 ["m_expr"] = $obj;
	$proto8 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto8 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto10 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "PlatformType",
			"m_strTable" => "employeeskills",
			"m_srcTableName" => "employeeskills" 
	) );
	
	$proto10 ["m_sql"] = "employeeskills.PlatformType";
	$proto10 ["m_srcTableName"] = "employeeskills";
	$proto10 ["m_expr"] = $obj;
	$proto10 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto10 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto12 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "PlatformName",
			"m_strTable" => "employeeskills",
			"m_srcTableName" => "employeeskills" 
	) );
	
	$proto12 ["m_sql"] = "employeeskills.PlatformName";
	$proto12 ["m_srcTableName"] = "employeeskills";
	$proto12 ["m_expr"] = $obj;
	$proto12 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto12 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto14 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "SkillLevel",
			"m_strTable" => "employeeskills",
			"m_srcTableName" => "employeeskills" 
	) );
	
	$proto14 ["m_sql"] = "employeeskills.SkillLevel";
	$proto14 ["m_srcTableName"] = "employeeskills";
	$proto14 ["m_expr"] = $obj;
	$proto14 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto14 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto16 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Certificate",
			"m_strTable" => "employeeskills",
			"m_srcTableName" => "employeeskills" 
	) );
	
	$proto16 ["m_sql"] = "employeeskills.Certificate";
	$proto16 ["m_srcTableName"] = "employeeskills";
	$proto16 ["m_expr"] = $obj;
	$proto16 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto16 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto18 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Comments",
			"m_strTable" => "employeeskills",
			"m_srcTableName" => "employeeskills" 
	) );
	
	$proto18 ["m_sql"] = "employeeskills.Comments";
	$proto18 ["m_srcTableName"] = "employeeskills";
	$proto18 ["m_expr"] = $obj;
	$proto18 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto18 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto20 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "CategoryID",
			"m_strTable" => "employeeskills",
			"m_srcTableName" => "employeeskills" 
	) );
	
	$proto20 ["m_sql"] = "employeeskills.CategoryID";
	$proto20 ["m_srcTableName"] = "employeeskills";
	$proto20 ["m_expr"] = $obj;
	$proto20 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto20 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto22 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "EmployeeID",
			"m_strTable" => "employeeskills",
			"m_srcTableName" => "employeeskills" 
	) );
	
	$proto22 ["m_sql"] = "employeeskills.EmployeeID";
	$proto22 ["m_srcTableName"] = "employeeskills";
	$proto22 ["m_expr"] = $obj;
	$proto22 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto22 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto24 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "EmployeeName",
			"m_strTable" => "employeeskills",
			"m_srcTableName" => "employeeskills" 
	) );
	
	$proto24 ["m_sql"] = "employeeskills.EmployeeName";
	$proto24 ["m_srcTableName"] = "employeeskills";
	$proto24 ["m_expr"] = $obj;
	$proto24 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto24 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto3 ["m_fromlist"] = array ();
	$proto26 = array ();
	$proto26 ["m_link"] = "SQLL_MAIN";
	$proto27 = array ();
	$proto27 ["m_strName"] = "employeeskills";
	$proto27 ["m_srcTableName"] = "employeeskills";
	$proto27 ["m_columns"] = array ();
	$proto27 ["m_columns"] [] = "AutEskillID";
	$proto27 ["m_columns"] [] = "EmployeeName";
	$proto27 ["m_columns"] [] = "PlatformType";
	$proto27 ["m_columns"] [] = "PlatformName";
	$proto27 ["m_columns"] [] = "SkillLevel";
	$proto27 ["m_columns"] [] = "Certificate";
	$proto27 ["m_columns"] [] = "Comments";
	$proto27 ["m_columns"] [] = "CategoryID";
	$proto27 ["m_columns"] [] = "EmployeeID";
	$obj = new SQLTable ( $proto27 );
	
	$proto26 ["m_table"] = $obj;
	$proto26 ["m_sql"] = "employeeskills";
	$proto26 ["m_alias"] = "";
	$proto26 ["m_srcTableName"] = "employeeskills";
	$proto28 = array ();
	$proto28 ["m_sql"] = "";
	$proto28 ["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed ( array (
			"m_sql" => "" 
	) );
	
	$proto28 ["m_column"] = $obj;
	$proto28 ["m_contained"] = array ();
	$proto28 ["m_strCase"] = "";
	$proto28 ["m_havingmode"] = false;
	$proto28 ["m_inBrackets"] = false;
	$proto28 ["m_useAlias"] = false;
	$obj = new SQLLogicalExpr ( $proto28 );
	
	$proto26 ["m_joinon"] = $obj;
	$obj = new SQLFromListItem ( $proto26 );
	$proto3 ["m_fromlist"] [] = $obj;

	$proto30 = array ();
	$proto30 ["m_link"] = "SQLL_INNERJOIN";
	$proto31 = array ();
	$proto31 ["m_strName"] = "employee_header";
	$proto31 ["m_srcTableName"] = "emptime";
	$proto31 ["m_columns"] = array ();
	$proto31 ["m_columns"] [] = "EmployeeID";
	$proto31 ["m_columns"] [] = "FirstName";
	$proto31 ["m_columns"] [] = "LastName";
	$proto31 ["m_columns"] [] = "emailID";
	$proto31 ["m_columns"] [] = "Type";
	$proto31 ["m_columns"] [] = "SupervisorTitle";
	$proto31 ["m_columns"] [] = "Location";
	$proto31 ["m_columns"] [] = "SupervisorName";
	$proto31 ["m_columns"] [] = "InactiveDate";
	$proto31 ["m_columns"] [] = "created_by";
	$proto31 ["m_columns"] [] = "updated_by";
	$proto31 ["m_columns"] [] = "created_date";
	$proto31 ["m_columns"] [] = "updated_date";
	$proto31 ["m_columns"] [] = "StartDate";
	$proto31 ["m_columns"] [] = "EmployeeStatus";
	$proto31 ["m_columns"] [] = "Country";
	$proto31 ["m_columns"] [] = "Zip";
	$proto31 ["m_columns"] [] = "Role";
	$proto31 ["m_columns"] [] = "SupervisorID";
	$proto31 ["m_columns"] [] = "JobTitle";
	$obj = new SQLTable ( $proto31 );
	
	$proto30 ["m_table"] = $obj;
	$proto30 ["m_sql"] = "INNER JOIN employee_header ON employeeskills.EmployeeID = employee_header.EmployeeID";
	$proto30 ["m_alias"] = "";
	$proto30 ["m_srcTableName"] = "employeeskills";
	$proto32 = array ();
	$proto32 ["m_sql"] = "employeeskills.EmployeeID = employee_header.EmployeeID";
	$proto32 ["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLField ( array (
			"m_strName" => "EmployeeID",
			"m_strTable" => "employeeskills",
			"m_srcTableName" => "employeeskills" 
	) );
	
	$proto32 ["m_column"] = $obj;
	$proto32 ["m_contained"] = array ();
	$proto32 ["m_strCase"] = "= employee_header.EmployeeID";
	$proto32 ["m_havingmode"] = false;
	$proto32 ["m_inBrackets"] = false;
	$proto32 ["m_useAlias"] = false;
	$obj = new SQLLogicalExpr ( $proto32 );
	
	$proto30 ["m_joinon"] = $obj;
	$obj = new SQLFromListItem ( $proto30 );

	$proto3 ["m_fromlist"] [] = $obj;
	$proto3 ["m_groupby"] = array ();
	$proto3 ["m_orderby"] = array ();
	$proto3 ["m_srcTableName"] = "employeeskills";
	$obj = new SQLQuery ( $proto3 );
	
	return $obj;
}
$queryData_employeeskills = createSqlQuery_employeeskills ();
$tdataemployeeskills [".sqlquery"] = $queryData_employeeskills;

include_once (getabspath ( "include/employeeskills_events.php" ));
$tableEvents ["employeeskills"] = new eventclass_employeeskills ();
$tdataemployeeskills [".hasEvents"] = true;

?>