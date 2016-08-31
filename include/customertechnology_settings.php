<?php
require_once (getabspath ( "classes/cipherer.php" ));

$tdatacustomertechnology = array ();
$tdatacustomertechnology [".truncateText"] = true;
$tdatacustomertechnology [".NumberOfChars"] = 60;
$tdatacustomertechnology [".ShortName"] = "customertechnology";
$tdatacustomertechnology [".OwnerID"] = "";
$tdatacustomertechnology [".OriginalTable"] = "customertechnology";

// field labels
$fieldLabelscustomertechnology = array ();
$fieldToolTipscustomertechnology = array ();
$pageTitlescustomertechnology = array ();

if (mlang_getcurrentlang () == "English") {
	$fieldLabelscustomertechnology ["English"] = array ();
	$fieldToolTipscustomertechnology ["English"] = array ();
	$pageTitlescustomertechnology ["English"] = array ();
	$fieldLabelscustomertechnology ["English"] ["AutCusTechID"] = "Aut Cus Tech ID";
	$fieldToolTipscustomertechnology ["English"] ["AutCusTechID"] = "";
	$fieldLabelscustomertechnology ["English"] ["Category"] = "Category";
	$fieldToolTipscustomertechnology ["English"] ["Category"] = "";
	$fieldLabelscustomertechnology ["English"] ["Quantity"] = "# of Devices";
	$fieldToolTipscustomertechnology ["English"] ["Quantity"] = "";
	$fieldLabelscustomertechnology ["English"] ["Platform"] = "Platform";
	$fieldToolTipscustomertechnology ["English"] ["Platform"] = "";
	$fieldLabelscustomertechnology ["English"] ["CategoryID"] = "Category ID";
	$fieldToolTipscustomertechnology ["English"] ["CategoryID"] = "";
	$fieldLabelscustomertechnology ["English"] ["Comment"] = "Comment";
	$fieldToolTipscustomertechnology ["English"] ["Comment"] = "";
	$fieldLabelscustomertechnology ["English"] ["Name"] = "Name";
	$fieldToolTipscustomertechnology ["English"] ["Name"] = "";
	if (count ( $fieldToolTipscustomertechnology ["English"] ))
		$tdatacustomertechnology [".isUseToolTips"] = true;
}
if (mlang_getcurrentlang () == "") {
	$fieldLabelscustomertechnology [""] = array ();
	$fieldToolTipscustomertechnology [""] = array ();
	$pageTitlescustomertechnology [""] = array ();
	$fieldLabelscustomertechnology [""] ["AutCusTechID"] = "Aut Cus Tech ID";
	$fieldToolTipscustomertechnology [""] ["AutCusTechID"] = "";
	if (count ( $fieldToolTipscustomertechnology [""] ))
		$tdatacustomertechnology [".isUseToolTips"] = true;
}

$tdatacustomertechnology [".NCSearch"] = true;

$tdatacustomertechnology [".shortTableName"] = "customertechnology";
$tdatacustomertechnology [".nSecOptions"] = 0;
$tdatacustomertechnology [".recsPerRowList"] = 1;
$tdatacustomertechnology [".recsPerRowPrint"] = 1;
$tdatacustomertechnology [".mainTableOwnerID"] = "";
$tdatacustomertechnology [".moveNext"] = 0;
$tdatacustomertechnology [".entityType"] = 0;

$tdatacustomertechnology [".strOriginalTableName"] = "customertechnology";

$tdatacustomertechnology [".showAddInPopup"] = true;

$tdatacustomertechnology [".showEditInPopup"] = true;

$tdatacustomertechnology [".showViewInPopup"] = true;

// page's base css files names
$popupPagesLayoutNames = array ();

;
$popupPagesLayoutNames ["view"] = "view2";
$tdatacustomertechnology [".popupPagesLayoutNames"] = $popupPagesLayoutNames;

$tdatacustomertechnology [".fieldsForRegister"] = array ();

if (! isMobile ())
	$tdatacustomertechnology [".listAjax"] = true;
else
	$tdatacustomertechnology [".listAjax"] = false;

$tdatacustomertechnology [".audit"] = false;

$tdatacustomertechnology [".locking"] = false;

$tdatacustomertechnology [".list"] = true;

$tdatacustomertechnology [".inlineEdit"] = true;
$tdatacustomertechnology [".inlineAdd"] = true;
$tdatacustomertechnology [".view"] = true;

$tdatacustomertechnology [".import"] = true;

$tdatacustomertechnology [".exportTo"] = true;

$tdatacustomertechnology [".printFriendly"] = true;

$tdatacustomertechnology [".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacustomertechnology [".searchSaving"] = false;
//

$tdatacustomertechnology [".showSearchPanel"] = true;
$tdatacustomertechnology [".flexibleSearch"] = true;

if (isMobile ())
	$tdatacustomertechnology [".isUseAjaxSuggest"] = false;
else
	$tdatacustomertechnology [".isUseAjaxSuggest"] = true;

$tdatacustomertechnology [".rowHighlite"] = true;

$tdatacustomertechnology [".addPageEvents"] = true;

// use timepicker for search panel
$tdatacustomertechnology [".isUseTimeForSearch"] = false;

$tdatacustomertechnology [".allSearchFields"] = array ();
$tdatacustomertechnology [".filterFields"] = array ();
$tdatacustomertechnology [".requiredSearchFields"] = array ();

$tdatacustomertechnology [".allSearchFields"] [] = "Name";
$tdatacustomertechnology [".allSearchFields"] [] = "Category";
$tdatacustomertechnology [".allSearchFields"] [] = "Platform";
$tdatacustomertechnology [".allSearchFields"] [] = "Quantity";
$tdatacustomertechnology [".allSearchFields"] [] = "Comment";

$tdatacustomertechnology [".googleLikeFields"] = array ();
$tdatacustomertechnology [".googleLikeFields"] [] = "AutCusTechID";
$tdatacustomertechnology [".googleLikeFields"] [] = "Category";
$tdatacustomertechnology [".googleLikeFields"] [] = "Platform";
$tdatacustomertechnology [".googleLikeFields"] [] = "Quantity";
$tdatacustomertechnology [".googleLikeFields"] [] = "CategoryID";
$tdatacustomertechnology [".googleLikeFields"] [] = "Comment";
$tdatacustomertechnology [".googleLikeFields"] [] = "Name";

$tdatacustomertechnology [".advSearchFields"] = array ();
$tdatacustomertechnology [".advSearchFields"] [] = "Name";
$tdatacustomertechnology [".advSearchFields"] [] = "Category";
$tdatacustomertechnology [".advSearchFields"] [] = "Platform";
$tdatacustomertechnology [".advSearchFields"] [] = "Quantity";
$tdatacustomertechnology [".advSearchFields"] [] = "Comment";

$tdatacustomertechnology [".tableType"] = "list";

$tdatacustomertechnology [".printerPageOrientation"] = 0;
$tdatacustomertechnology [".nPrinterPageScale"] = 100;

$tdatacustomertechnology [".nPrinterSplitRecords"] = 40;

$tdatacustomertechnology [".nPrinterPDFSplitRecords"] = 40;

$tdatacustomertechnology [".geocodingEnabled"] = false;

// view page pdf

// print page pdf

$tdatacustomertechnology [".pageSize"] = 10;

$tdatacustomertechnology [".warnLeavingPages"] = true;

$tstrOrderBy = "ORDER BY customer_header.Name";
if (strlen ( $tstrOrderBy ) && strtolower ( substr ( $tstrOrderBy, 0, 8 ) ) != "order by")
	$tstrOrderBy = "order by " . $tstrOrderBy;
$tdatacustomertechnology [".strOrderBy"] = $tstrOrderBy;

$tdatacustomertechnology [".orderindexes"] = array ();
$tdatacustomertechnology [".orderindexes"] [] = array (
		7,
		(1 ? "ASC" : "DESC"),
		"customer_header.Name" 
);

$tdatacustomertechnology [".sqlHead"] = "SELECT customertechnology.AutCusTechID,  customertechnology.Category,  customertechnology.Platform,  customertechnology.Quantity,  customertechnology.CategoryID,  customertechnology.`Comment`,  customer_header.Name";
$tdatacustomertechnology [".sqlFrom"] = "FROM customertechnology  INNER JOIN customer_header ON customertechnology.CategoryID = customer_header.OracIeID";
$tdatacustomertechnology [".sqlWhereExpr"] = "";
$tdatacustomertechnology [".sqlTail"] = "";

// fill array of records per page for list and report without group fields
$arrRPP = array ();
$arrRPP [] = 10;
$arrRPP [] = 20;
$arrRPP [] = 30;
$arrRPP [] = 50;
$arrRPP [] = 100;
$arrRPP [] = 500;
$arrRPP [] = - 1;
$tdatacustomertechnology [".arrRecsPerPage"] = $arrRPP;

// fill array of groups per page for report with group fields
$arrGPP = array ();
$arrGPP [] = 1;
$arrGPP [] = 3;
$arrGPP [] = 5;
$arrGPP [] = 10;
$arrGPP [] = 50;
$arrGPP [] = 100;
$arrGPP [] = - 1;
$tdatacustomertechnology [".arrGroupsPerPage"] = $arrGPP;

$tableKeyscustomertechnology = array ();
$tableKeyscustomertechnology [] = "AutCusTechID";
$tdatacustomertechnology [".Keys"] = $tableKeyscustomertechnology;

$tdatacustomertechnology [".listFields"] = array ();
$tdatacustomertechnology [".listFields"] [] = "Name";
$tdatacustomertechnology [".listFields"] [] = "Category";
$tdatacustomertechnology [".listFields"] [] = "Platform";
$tdatacustomertechnology [".listFields"] [] = "Quantity";
$tdatacustomertechnology [".listFields"] [] = "Comment";

$tdatacustomertechnology [".hideMobileList"] = array ();

$tdatacustomertechnology [".viewFields"] = array ();
$tdatacustomertechnology [".viewFields"] [] = "Name";
$tdatacustomertechnology [".viewFields"] [] = "Category";
$tdatacustomertechnology [".viewFields"] [] = "Platform";
$tdatacustomertechnology [".viewFields"] [] = "Quantity";
$tdatacustomertechnology [".viewFields"] [] = "Comment";

$tdatacustomertechnology [".addFields"] = array ();

$tdatacustomertechnology [".masterListFields"] = array ();
$tdatacustomertechnology [".masterListFields"] [] = "Name";
$tdatacustomertechnology [".masterListFields"] [] = "AutCusTechID";
$tdatacustomertechnology [".masterListFields"] [] = "Category";
$tdatacustomertechnology [".masterListFields"] [] = "Platform";
$tdatacustomertechnology [".masterListFields"] [] = "Quantity";
$tdatacustomertechnology [".masterListFields"] [] = "Comment";
$tdatacustomertechnology [".masterListFields"] [] = "CategoryID";

$tdatacustomertechnology [".inlineAddFields"] = array ();
//$tdatacustomertechnology [".inlineAddFields"] [] = "Name";
$tdatacustomertechnology [".inlineAddFields"] [] = "Category";
$tdatacustomertechnology [".inlineAddFields"] [] = "Platform";
$tdatacustomertechnology [".inlineAddFields"] [] = "Quantity";
$tdatacustomertechnology [".inlineAddFields"] [] = "Comment";
$tdatacustomertechnology [".inlineAddFields"] [] = "CategoryID";
$tdatacustomertechnology [".editFields"] = array ();

$tdatacustomertechnology [".inlineEditFields"] = array ();
$tdatacustomertechnology [".inlineEditFields"] [] = "Category";
$tdatacustomertechnology [".inlineEditFields"] [] = "Platform";
$tdatacustomertechnology [".inlineEditFields"] [] = "Quantity";
$tdatacustomertechnology [".inlineEditFields"] [] = "Comment";

$tdatacustomertechnology [".exportFields"] = array ();
$tdatacustomertechnology [".exportFields"] [] = "Name";
$tdatacustomertechnology [".exportFields"] [] = "Category";
$tdatacustomertechnology [".exportFields"] [] = "Platform";
$tdatacustomertechnology [".exportFields"] [] = "Quantity";
$tdatacustomertechnology [".exportFields"] [] = "Comment";
$tdatacustomertechnology [".exportFields"] [] = "CategoryID";

$tdatacustomertechnology [".importFields"] = array ();
$tdatacustomertechnology [".importFields"] [] = "Category";
$tdatacustomertechnology [".importFields"] [] = "Platform";
$tdatacustomertechnology [".importFields"] [] = "Quantity";
$tdatacustomertechnology [".importFields"] [] = "Comment";
$tdatacustomertechnology [".importFields"] [] = "Name";
$tdatacustomertechnology [".importFields"] [] = "CategoryID";

$tdatacustomertechnology [".printFields"] = array ();
$tdatacustomertechnology [".printFields"] [] = "Name";
$tdatacustomertechnology [".printFields"] [] = "Category";
$tdatacustomertechnology [".printFields"] [] = "Platform";
$tdatacustomertechnology [".printFields"] [] = "Quantity";
$tdatacustomertechnology [".printFields"] [] = "Comment";

// AutCusTechID
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 1;
$fdata ["strName"] = "AutCusTechID";
$fdata ["GoodName"] = "AutCusTechID";
$fdata ["ownerTable"] = "customertechnology";
$fdata ["Label"] = GetFieldLabel ( "customertechnology", "AutCusTechID" );
$fdata ["FieldType"] = 3;

$fdata ["AutoInc"] = true;

$fdata ["strField"] = "AutCusTechID";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "customertechnology.AutCusTechID";

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

$edata ["controlWidth"] = 180;

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

$tdatacustomertechnology ["AutCusTechID"] = $fdata;
// Category
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 2;
$fdata ["strName"] = "Category";
$fdata ["GoodName"] = "Category";
$fdata ["ownerTable"] = "customertechnology";
$fdata ["Label"] = GetFieldLabel ( "customertechnology", "Category" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Category";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "customertechnology.Category";

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
$edata ["LookupTable"] = "tbl_categorytechnology";
$edata ["autoCompleteFieldsOnEdit"] = 0;
$edata ["autoCompleteFields"] = array ();
$edata ["LCType"] = 0;

$edata ["LinkField"] = "TechnologyCategoryID";
$edata ["LinkFieldType"] = 0;
$edata ["DisplayField"] = "TechnologyCategotyName";

$edata ["LookupOrderBy"] = "TechnologyCategoryID";

// dependent dropdowns
$edata ["DependentLookups"] = array ();
$edata ["DependentLookups"] [] = "Platform";

$edata ["SelectSize"] = 1;

// End Lookup Settings

$edata ["IsRequired"] = true;

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 150;

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

$tdatacustomertechnology ["Category"] = $fdata;
// Platform
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 3;
$fdata ["strName"] = "Platform";
$fdata ["GoodName"] = "Platform";
$fdata ["ownerTable"] = "customertechnology";
$fdata ["Label"] = GetFieldLabel ( "customertechnology", "Platform" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Platform";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "customertechnology.Platform";

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
$edata ["LookupTable"] = "tbl_technologycustomer";
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
		"main" => "Category",
		"lookup" => "CategoryID" 
);

$edata ["SelectSize"] = 1;

// End Lookup Settings

$edata ["IsRequired"] = true;

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 150;

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

$tdatacustomertechnology ["Platform"] = $fdata;
// Quantity
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 4;
$fdata ["strName"] = "Quantity";
$fdata ["GoodName"] = "Quantity";
$fdata ["ownerTable"] = "customertechnology";
$fdata ["Label"] = GetFieldLabel ( "customertechnology", "Quantity" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Quantity";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "customertechnology.Quantity";

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
$edata ["EditParams"] .= " maxlength=50";

$edata ["controlWidth"] = 40;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = getJsValidatorName ( "Number" );
//$edata ["validateAs"] ["basicValidate"] [] = "IsRequired";

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

$tdatacustomertechnology ["Quantity"] = $fdata;
// CategoryID
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 5;
$fdata ["strName"] = "CategoryID";
$fdata ["GoodName"] = "CategoryID";
$fdata ["ownerTable"] = "customertechnology";
$fdata ["Label"] = GetFieldLabel ( "customertechnology", "CategoryID" );
$fdata ["FieldType"] = 3;

$fdata ["strField"] = "CategoryID";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "customertechnology.CategoryID";

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

$tdatacustomertechnology ["CategoryID"] = $fdata;
// Comment
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 6;
$fdata ["strName"] = "Comment";
$fdata ["GoodName"] = "Comment";
$fdata ["ownerTable"] = "customertechnology";
$fdata ["Label"] = GetFieldLabel ( "customertechnology", "Comment" );
$fdata ["FieldType"] = 201;

$fdata ["bListPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Comment";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "customertechnology.`Comment`";

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
		"EditFormat" => "Text area" 
);

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["nRows"] = 100;
$edata ["nCols"] = 300;

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

$tdatacustomertechnology ["Comment"] = $fdata;
// Name
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 7;
$fdata ["strName"] = "Name";
$fdata ["GoodName"] = "Name";
$fdata ["ownerTable"] = "customer_header";
$fdata ["Label"] = GetFieldLabel ( "customertechnology", "Name" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Name";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "customer_header.Name";

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

$tdatacustomertechnology ["Name"] = $fdata;

$tables_data ["customertechnology"] = &$tdatacustomertechnology;
$field_labels ["customertechnology"] = &$fieldLabelscustomertechnology;
$fieldToolTips ["customertechnology"] = &$fieldToolTipscustomertechnology;
$page_titles ["customertechnology"] = &$pageTitlescustomertechnology;

// -----------------start prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData ["customertechnology"] = array ();

// tables which are master tables for current table (detail)
$masterTablesData ["customertechnology"] = array ();

$strOriginalDetailsTable = "customer_header";
$masterParams = array ();
$masterParams ["mDataSourceTable"] = "customer_header";
$masterParams ["mOriginalTable"] = $strOriginalDetailsTable;
$masterParams ["mShortTable"] = "customer_header";
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
$masterTablesData ["customertechnology"] [0] = $masterParams;
$masterTablesData ["customertechnology"] [0] ["masterKeys"] = array ();
$masterTablesData ["customertechnology"] [0] ["masterKeys"] [] = "OracIeID";
$masterTablesData ["customertechnology"] [0] ["detailKeys"] = array ();
$masterTablesData ["customertechnology"] [0] ["detailKeys"] [] = "CategoryID";

// -----------------end prepare master-details data arrays ------------------------------//

require_once (getabspath ( "classes/sql.php" ));
function createSqlQuery_customertechnology() {
	if( false == is_null( $_SESSION['UserName'] ) ) {
		$userName = $_SESSION['UserName'];
	}
	
	if( false == is_null( $_SESSION['UserID']) ) {
		$userID = $_SESSION["UserID"];
		$groupID = $_SESSION["UserRights"][$userID][".Groups"][0];
	}
	
	$proto1 = array ();
	$proto1 ["m_strHead"] = "SELECT";
	$proto1 ["m_strFieldList"] = "customertechnology.AutCusTechID,  customertechnology.Category,  customertechnology.Platform,  customertechnology.Quantity,  customertechnology.CategoryID,  customertechnology.`Comment`,  customer_header.Name";
	$proto1 ["m_strFrom"] = "FROM customertechnology  INNER JOIN customer_header ON customertechnology.CategoryID = customer_header.OracIeID";
	$proto1 ["m_strWhere"] = "";
	$proto1 ["m_strOrderBy"] = "ORDER BY customer_header.Name";
	$proto1 ["m_strTail"] = "";
	$proto1 ["cipherer"] = null;
	$proto2 = array ();
	if( !IsAdmin() && ( '5' == $groupID || '7' == $groupID ) ) {
		$proto2 ["m_sql"] = "";
		$proto2 ["m_uniontype"] = "SQLL_UNKNOWN";
		$obj = new SQLNonParsed ( array (
				"m_sql" => ""
		) );
	} elseif( !IsAdmin() && '6' == $groupID ) {
		global $conn;
		$strSQL = "SELECT DISTINCT td.SupervisorID, td.FullName FROM customer_header ch JOIN tbl_director td ON( ch.Supervisor = td.SupervisorID ) WHERE td.FullName = '" . $userName . "'";
		$rs = db_query($strSQL,$conn);
		while ($data = db_fetch_array($rs))
		$supervisorID = $data['SupervisorID'];
		$proto2 ["m_sql"] = "customer_header.Supervisor = " . $supervisorID;
		$proto2 ["m_uniontype"] = "SQLL_AND";
		$obj = new SQLNonParsed ( array (
				"m_sql" => "customer_header.Supervisor = '" . $supervisorID . "'"
		) );
		
	} elseif( !IsAdmin() && '1' == $groupID ) {
		$proto2 ["m_sql"] = " customer_header.RSAName = '" . $userName . "' ";
		$proto2 ["m_uniontype"] = "SQLL_UNKNOWN";
		$obj = new SQLNonParsed ( array (
				"m_sql" => " customer_header.RSAName = '" . $userName . "' "
		) );
	} else {
		$proto2 ["m_sql"] = "";
		$proto2 ["m_uniontype"] = "SQLL_UNKNOWN";
		$obj = new SQLNonParsed ( array (
				"m_sql" => ""
		) );
	}
	
	$proto2 ["m_column"] = $obj;
	$proto2 ["m_contained"] = array ();
	$proto2 ["m_strCase"] = "";
	$proto2 ["m_havingmode"] = false;
	$proto2 ["m_inBrackets"] = false;
	$proto2 ["m_useAlias"] = false;
	$obj = new SQLLogicalExpr ( $proto2 );
	
	$proto1 ["m_where"] = $obj;
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
	
	$proto1 ["m_having"] = $obj;
	$proto1 ["m_fieldlist"] = array ();
	$proto6 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "AutCusTechID",
			"m_strTable" => "customertechnology",
			"m_srcTableName" => "customertechnology" 
	) );
	
	$proto6 ["m_sql"] = "customertechnology.AutCusTechID";
	$proto6 ["m_srcTableName"] = "customertechnology";
	$proto6 ["m_expr"] = $obj;
	$proto6 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto6 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto8 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Category",
			"m_strTable" => "customertechnology",
			"m_srcTableName" => "customertechnology" 
	) );
	
	$proto8 ["m_sql"] = "customertechnology.Category";
	$proto8 ["m_srcTableName"] = "customertechnology";
	$proto8 ["m_expr"] = $obj;
	$proto8 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto8 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto10 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Platform",
			"m_strTable" => "customertechnology",
			"m_srcTableName" => "customertechnology" 
	) );
	
	$proto10 ["m_sql"] = "customertechnology.Platform";
	$proto10 ["m_srcTableName"] = "customertechnology";
	$proto10 ["m_expr"] = $obj;
	$proto10 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto10 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto12 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Quantity",
			"m_strTable" => "customertechnology",
			"m_srcTableName" => "customertechnology" 
	) );
	
	$proto12 ["m_sql"] = "customertechnology.Quantity";
	$proto12 ["m_srcTableName"] = "customertechnology";
	$proto12 ["m_expr"] = $obj;
	$proto12 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto12 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto14 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "CategoryID",
			"m_strTable" => "customertechnology",
			"m_srcTableName" => "customertechnology" 
	) );
	
	$proto14 ["m_sql"] = "customertechnology.CategoryID";
	$proto14 ["m_srcTableName"] = "customertechnology";
	$proto14 ["m_expr"] = $obj;
	$proto14 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto14 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto16 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Comment",
			"m_strTable" => "customertechnology",
			"m_srcTableName" => "customertechnology" 
	) );
	
	$proto16 ["m_sql"] = "customertechnology.`Comment`";
	$proto16 ["m_srcTableName"] = "customertechnology";
	$proto16 ["m_expr"] = $obj;
	$proto16 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto16 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto18 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Name",
			"m_strTable" => "customer_header",
			"m_srcTableName" => "customertechnology" 
	) );
	
	$proto18 ["m_sql"] = "customer_header.Name";
	$proto18 ["m_srcTableName"] = "customertechnology";
	$proto18 ["m_expr"] = $obj;
	$proto18 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto18 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto1 ["m_fromlist"] = array ();
	$proto20 = array ();
	$proto20 ["m_link"] = "SQLL_MAIN";
	$proto21 = array ();
	$proto21 ["m_strName"] = "customertechnology";
	$proto21 ["m_srcTableName"] = "customertechnology";
	$proto21 ["m_columns"] = array ();
	$proto21 ["m_columns"] [] = "AutCusTechID";
	$proto21 ["m_columns"] [] = "CustomerName";
	$proto21 ["m_columns"] [] = "Category";
	$proto21 ["m_columns"] [] = "Platform";
	$proto21 ["m_columns"] [] = "Quantity";
	$proto21 ["m_columns"] [] = "CategoryID";
	$proto21 ["m_columns"] [] = "Comment";
	$obj = new SQLTable ( $proto21 );
	
	$proto20 ["m_table"] = $obj;
	$proto20 ["m_sql"] = "customertechnology";
	$proto20 ["m_alias"] = "";
	$proto20 ["m_srcTableName"] = "customertechnology";
	$proto22 = array ();
	$proto22 ["m_sql"] = "";
	$proto22 ["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed ( array (
			"m_sql" => "" 
	) );
	
	$proto22 ["m_column"] = $obj;
	$proto22 ["m_contained"] = array ();
	$proto22 ["m_strCase"] = "";
	$proto22 ["m_havingmode"] = false;
	$proto22 ["m_inBrackets"] = false;
	$proto22 ["m_useAlias"] = false;
	$obj = new SQLLogicalExpr ( $proto22 );
	
	$proto20 ["m_joinon"] = $obj;
	$obj = new SQLFromListItem ( $proto20 );
	
	$proto1 ["m_fromlist"] [] = $obj;
	$proto24 = array ();
	$proto24 ["m_link"] = "SQLL_INNERJOIN";
	$proto25 = array ();
	$proto25 ["m_strName"] = "customer_header";
	$proto25 ["m_srcTableName"] = "customertechnology";
	$proto25 ["m_columns"] = array ();
	$proto25 ["m_columns"] [] = "OracIeID";
	$proto25 ["m_columns"] [] = "Name";
	$proto25 ["m_columns"] [] = "Contract_Status";
	$proto25 ["m_columns"] [] = "Size";
	$proto25 ["m_columns"] [] = "Stage";
	$proto25 ["m_columns"] [] = "Temperature";
	$proto25 ["m_columns"] [] = "Sales_SVP";
	$proto25 ["m_columns"] [] = "Contract_Start";
	$proto25 ["m_columns"] [] = "SteadyState";
	$proto25 ["m_columns"] [] = "Contract_end";
	$proto25 ["m_columns"] [] = "Recovery_Center";
	$proto25 ["m_columns"] [] = "Total_MRR";
	$proto25 ["m_columns"] [] = "MRP_MRR";
	$proto25 ["m_columns"] [] = "ARS_MRR";
	$proto25 ["m_columns"] [] = "MS_MRR";
	$proto25 ["m_columns"] [] = "CS_MRR";
	$proto25 ["m_columns"] [] = "OTHER_MRR";
	$proto25 ["m_columns"] [] = "SME";
	$proto25 ["m_columns"] [] = "RSAName";
	$proto25 ["m_columns"] [] = "Overall_Temp";
	$proto25 ["m_columns"] [] = "Engagement_status";
	$proto25 ["m_columns"] [] = "created_by";
	$proto25 ["m_columns"] [] = "Created_date";
	$proto25 ["m_columns"] [] = "Updated_by";
	$proto25 ["m_columns"] [] = "Updated_date";
	$proto25 ["m_columns"] [] = "Comments";
	$proto25 ["m_columns"] [] = "EmployeeID";
	$proto25 ["m_columns"] [] = "Compre_String";
	$proto25 ["m_columns"] [] = "Address";
	$proto25 ["m_columns"] [] = "PrimaryTimeZone";
	$proto25 ["m_columns"] [] = "Onshore Support";
	$proto25 ["m_columns"] [] = "TransStartDate";
	$proto25 ["m_columns"] [] = "TransEndDate";
	$proto25 ["m_columns"] [] = "Supervisor";
	$proto25 ["m_columns"] [] = "TAM";
	$obj = new SQLTable ( $proto25 );
	
	$proto24 ["m_table"] = $obj;
	$proto24 ["m_sql"] = "INNER JOIN customer_header ON customertechnology.CategoryID = customer_header.OracIeID";
	$proto24 ["m_alias"] = "";
	$proto24 ["m_srcTableName"] = "customertechnology";
	$proto26 = array ();
	$proto26 ["m_sql"] = "customertechnology.CategoryID = customer_header.OracIeID";
	$proto26 ["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLField ( array (
			"m_strName" => "CategoryID",
			"m_strTable" => "customertechnology",
			"m_srcTableName" => "customertechnology" 
	) );
	
	$proto26 ["m_column"] = $obj;
	$proto26 ["m_contained"] = array ();
	$proto26 ["m_strCase"] = "= customer_header.OracIeID";
	$proto26 ["m_havingmode"] = false;
	$proto26 ["m_inBrackets"] = false;
	$proto26 ["m_useAlias"] = false;
	$obj = new SQLLogicalExpr ( $proto26 );
	
	$proto24 ["m_joinon"] = $obj;
	$obj = new SQLFromListItem ( $proto24 );
	$proto1 ["m_fromlist"] [] = $obj;
	$proto1 ["m_groupby"] = array ();
	$proto1 ["m_orderby"] = array ();
	$proto28 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Name",
			"m_strTable" => "customer_header",
			"m_srcTableName" => "customertechnology" 
	) );
	
	$proto28 ["m_column"] = $obj;
	$proto28 ["m_bAsc"] = 1;
	$proto28 ["m_nColumn"] = 0;
	$obj = new SQLOrderByItem ( $proto28 );
	
	$proto1 ["m_orderby"] [] = $obj;
	$proto1 ["m_srcTableName"] = "customertechnology";
	$obj = new SQLQuery ( $proto1 );
	
	return $obj;
}
$queryData_customertechnology = createSqlQuery_customertechnology ();

$tdatacustomertechnology [".sqlquery"] = $queryData_customertechnology;

include_once (getabspath ( "include/customertechnology_events.php" ));
$tableEvents ["customertechnology"] = new eventclass_customertechnology ();
$tdatacustomertechnology [".hasEvents"] = true;

?>