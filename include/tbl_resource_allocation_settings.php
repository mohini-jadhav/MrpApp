<?php
require_once (getabspath ( "classes/cipherer.php" ));

$tdatatbl_resource_allocation = array ();
$tdatatbl_resource_allocation [".truncateText"] = true;
$tdatatbl_resource_allocation [".NumberOfChars"] = 60;
$tdatatbl_resource_allocation [".ShortName"] = "tbl_resource_allocation";
$tdatatbl_resource_allocation [".OwnerID"] = "";
$tdatatbl_resource_allocation [".OriginalTable"] = "tbl_resource_allocation";

// field labels
$fieldLabelstbl_resource_allocation = array ();
$fieldToolTipstbl_resource_allocation = array ();
$pageTitlestbl_resource_allocation = array ();

if (mlang_getcurrentlang () == "English") {
	$fieldLabelstbl_resource_allocation ["English"] = array ();
	$fieldToolTipstbl_resource_allocation ["English"] = array ();
	$pageTitlestbl_resource_allocation ["English"] = array ();
	$fieldLabelstbl_resource_allocation ["English"] ["Location"] = "Location";
	$fieldToolTipstbl_resource_allocation ["English"] ["Location"] = "";
	$fieldLabelstbl_resource_allocation ["English"] ["Supervisor"] = "Manager";
	$fieldToolTipstbl_resource_allocation ["English"] ["Supervisor"] = "";
	$fieldLabelstbl_resource_allocation ["English"] ["Alloc"] = "Alloc";
	$fieldToolTipstbl_resource_allocation ["English"] ["Alloc"] = "";
	$fieldLabelstbl_resource_allocation ["English"] ["Start1"] = "Start1";
	$fieldToolTipstbl_resource_allocation ["English"] ["Start1"] = "";
	$fieldLabelstbl_resource_allocation ["English"] ["End1"] = "End1";
	$fieldToolTipstbl_resource_allocation ["English"] ["End1"] = "";
	$fieldLabelstbl_resource_allocation ["English"] ["AutCustID"] = "Aut Cust ID";
	$fieldToolTipstbl_resource_allocation ["English"] ["AutCustID"] = "";
	$fieldLabelstbl_resource_allocation ["English"] ["RSA"] = "Resource";
	$fieldToolTipstbl_resource_allocation ["English"] ["RSA"] = "";
	if (count ( $fieldToolTipstbl_resource_allocation ["English"] ))
		$tdatatbl_resource_allocation [".isUseToolTips"] = true;
}
if (mlang_getcurrentlang () == "") {
	$fieldLabelstbl_resource_allocation [""] = array ();
	$fieldToolTipstbl_resource_allocation [""] = array ();
	$pageTitlestbl_resource_allocation [""] = array ();
	$fieldLabelstbl_resource_allocation [""] ["Location"] = "Location";
	$fieldToolTipstbl_resource_allocation [""] ["Location"] = "";
	$fieldLabelstbl_resource_allocation [""] ["Supervisor"] = "Supervisor";
	$fieldToolTipstbl_resource_allocation [""] ["Supervisor"] = "";
	$fieldLabelstbl_resource_allocation [""] ["Alloc"] = "Alloc";
	$fieldToolTipstbl_resource_allocation [""] ["Alloc"] = "";
	$fieldLabelstbl_resource_allocation [""] ["Start1"] = "Start1";
	$fieldToolTipstbl_resource_allocation [""] ["Start1"] = "";
	$fieldLabelstbl_resource_allocation [""] ["End1"] = "End1";
	$fieldToolTipstbl_resource_allocation [""] ["End1"] = "";
	$fieldLabelstbl_resource_allocation [""] ["AutCustID"] = "Aut Cust ID";
	$fieldToolTipstbl_resource_allocation [""] ["AutCustID"] = "";
	$fieldLabelstbl_resource_allocation [""] ["RSA"] = "RSA";
	$fieldToolTipstbl_resource_allocation [""] ["RSA"] = "";
	if (count ( $fieldToolTipstbl_resource_allocation [""] ))
		$tdatatbl_resource_allocation [".isUseToolTips"] = true;
}

$tdatatbl_resource_allocation [".NCSearch"] = true;

if (! isMobile ())
	$tdatatbl_resource_allocation [".scrollGridBody"] = true;

$tdatatbl_resource_allocation [".shortTableName"] = "tbl_resource_allocation";
$tdatatbl_resource_allocation [".nSecOptions"] = 0;
$tdatatbl_resource_allocation [".recsPerRowList"] = 1;
$tdatatbl_resource_allocation [".recsPerRowPrint"] = 1;
$tdatatbl_resource_allocation [".mainTableOwnerID"] = "";
$tdatatbl_resource_allocation [".moveNext"] = 0;
$tdatatbl_resource_allocation [".entityType"] = 0;

$tdatatbl_resource_allocation [".strOriginalTableName"] = "tbl_resource_allocation";

$tdatatbl_resource_allocation [".showAddInPopup"] = false;

$tdatatbl_resource_allocation [".showEditInPopup"] = false;

$tdatatbl_resource_allocation [".showViewInPopup"] = true;

// page's base css files names
$popupPagesLayoutNames = array ();
;
$popupPagesLayoutNames ["view"] = "view2";
$tdatatbl_resource_allocation [".popupPagesLayoutNames"] = $popupPagesLayoutNames;

$tdatatbl_resource_allocation [".fieldsForRegister"] = array ();

$tdatatbl_resource_allocation [".listAjax"] = false;

$tdatatbl_resource_allocation [".audit"] = false;

$tdatatbl_resource_allocation [".locking"] = false;

$tdatatbl_resource_allocation [".list"] = true;

$tdatatbl_resource_allocation [".import"] = true;

$tdatatbl_resource_allocation [".exportTo"] = true;

$tdatatbl_resource_allocation [".printFriendly"] = true;

$tdatatbl_resource_allocation [".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatatbl_resource_allocation [".searchSaving"] = false;
//

$tdatatbl_resource_allocation [".showSearchPanel"] = true;
$tdatatbl_resource_allocation [".flexibleSearch"] = true;

if (isMobile ())
	$tdatatbl_resource_allocation [".isUseAjaxSuggest"] = false;
else
	$tdatatbl_resource_allocation [".isUseAjaxSuggest"] = true;

$tdatatbl_resource_allocation [".rowHighlite"] = true;

$tdatatbl_resource_allocation [".isUsebuttonHandlers"] = true;

$tdatatbl_resource_allocation [".addPageEvents"] = true;

// use timepicker for search panel
$tdatatbl_resource_allocation [".isUseTimeForSearch"] = false;

$tdatatbl_resource_allocation [".allSearchFields"] = array ();
$tdatatbl_resource_allocation [".filterFields"] = array ();
$tdatatbl_resource_allocation [".requiredSearchFields"] = array ();

$tdatatbl_resource_allocation [".allSearchFields"] [] = "RSA";
$tdatatbl_resource_allocation [".allSearchFields"] [] = "Location";
$tdatatbl_resource_allocation [".allSearchFields"] [] = "Supervisor";
$tdatatbl_resource_allocation [".allSearchFields"] [] = "Alloc";
$tdatatbl_resource_allocation [".allSearchFields"] [] = "Start1";
$tdatatbl_resource_allocation [".allSearchFields"] [] = "End1";

$tdatatbl_resource_allocation [".googleLikeFields"] = array ();
$tdatatbl_resource_allocation [".googleLikeFields"] [] = "RSA";
$tdatatbl_resource_allocation [".googleLikeFields"] [] = "Location";
$tdatatbl_resource_allocation [".googleLikeFields"] [] = "Supervisor";
$tdatatbl_resource_allocation [".googleLikeFields"] [] = "Alloc";
$tdatatbl_resource_allocation [".googleLikeFields"] [] = "Start1";
$tdatatbl_resource_allocation [".googleLikeFields"] [] = "End1";
$tdatatbl_resource_allocation [".googleLikeFields"] [] = "AutCustID";

$tdatatbl_resource_allocation [".advSearchFields"] = array ();
$tdatatbl_resource_allocation [".advSearchFields"] [] = "RSA";
$tdatatbl_resource_allocation [".advSearchFields"] [] = "Location";
$tdatatbl_resource_allocation [".advSearchFields"] [] = "Supervisor";
$tdatatbl_resource_allocation [".advSearchFields"] [] = "Alloc";
$tdatatbl_resource_allocation [".advSearchFields"] [] = "Start1";
$tdatatbl_resource_allocation [".advSearchFields"] [] = "End1";

$tdatatbl_resource_allocation [".tableType"] = "list";

$tdatatbl_resource_allocation [".printerPageOrientation"] = 0;
$tdatatbl_resource_allocation [".nPrinterPageScale"] = 100;

$tdatatbl_resource_allocation [".nPrinterSplitRecords"] = 40;

$tdatatbl_resource_allocation [".nPrinterPDFSplitRecords"] = 40;

$tdatatbl_resource_allocation [".geocodingEnabled"] = false;

// view page pdf

// print page pdf

$tdatatbl_resource_allocation [".pageSize"] = 10;

$tdatatbl_resource_allocation [".warnLeavingPages"] = true;

$tstrOrderBy = "ORDER BY RSA";
if (strlen ( $tstrOrderBy ) && strtolower ( substr ( $tstrOrderBy, 0, 8 ) ) != "order by")
	$tstrOrderBy = "order by " . $tstrOrderBy;
$tdatatbl_resource_allocation [".strOrderBy"] = $tstrOrderBy;

$tdatatbl_resource_allocation [".orderindexes"] = array ();

$tdatatbl_resource_allocation [".sqlHead"] = "SELECT  Distinct (RSAName) AS RSA,  Location,  Supervisor,  SUM(Allocation) AS Alloc,  StartDate AS Start1,  EndDate AS End1,  AutCustID";
$tdatatbl_resource_allocation [".sqlFrom"] = "FROM customerallocation";
$tdatatbl_resource_allocation [".sqlWhereExpr"] = "(StartDate <Now()) AND (EndDate >Now())";
$tdatatbl_resource_allocation [".sqlTail"] = "";

// fill array of records per page for list and report without group fields
$arrRPP = array ();
$arrRPP [] = 10;
$arrRPP [] = 20;
$arrRPP [] = 30;
$arrRPP [] = 50;
$arrRPP [] = 100;
$arrRPP [] = 500;
$arrRPP [] = - 1;
$tdatatbl_resource_allocation [".arrRecsPerPage"] = $arrRPP;

// fill array of groups per page for report with group fields
$arrGPP = array ();
$arrGPP [] = 1;
$arrGPP [] = 3;
$arrGPP [] = 5;
$arrGPP [] = 10;
$arrGPP [] = 50;
$arrGPP [] = 100;
$arrGPP [] = - 1;
$tdatatbl_resource_allocation [".arrGroupsPerPage"] = $arrGPP;

$tableKeystbl_resource_allocation = array ();
$tdatatbl_resource_allocation [".Keys"] = $tableKeystbl_resource_allocation;

$tdatatbl_resource_allocation [".listFields"] = array ();
$tdatatbl_resource_allocation [".listFields"] [] = "RSA";
$tdatatbl_resource_allocation [".listFields"] [] = "Location";
$tdatatbl_resource_allocation [".listFields"] [] = "Supervisor";
$tdatatbl_resource_allocation [".listFields"] [] = "Alloc";
$tdatatbl_resource_allocation [".listFields"] [] = "Start1";

$tdatatbl_resource_allocation [".hideMobileList"] = array ();

$tdatatbl_resource_allocation [".viewFields"] = array ();

$tdatatbl_resource_allocation [".addFields"] = array ();

$tdatatbl_resource_allocation [".masterListFields"] = array ();
$tdatatbl_resource_allocation [".masterListFields"] [] = "RSA";
$tdatatbl_resource_allocation [".masterListFields"] [] = "Location";
$tdatatbl_resource_allocation [".masterListFields"] [] = "Supervisor";
$tdatatbl_resource_allocation [".masterListFields"] [] = "Alloc";
$tdatatbl_resource_allocation [".masterListFields"] [] = "Start1";
$tdatatbl_resource_allocation [".masterListFields"] [] = "End1";
$tdatatbl_resource_allocation [".masterListFields"] [] = "AutCustID";

$tdatatbl_resource_allocation [".inlineAddFields"] = array ();

$tdatatbl_resource_allocation [".editFields"] = array ();

$tdatatbl_resource_allocation [".inlineEditFields"] = array ();

$tdatatbl_resource_allocation [".exportFields"] = array ();
$tdatatbl_resource_allocation [".exportFields"] [] = "AutCustID";
$tdatatbl_resource_allocation [".exportFields"] [] = "RSA";
$tdatatbl_resource_allocation [".exportFields"] [] = "Location";
$tdatatbl_resource_allocation [".exportFields"] [] = "Supervisor";
$tdatatbl_resource_allocation [".exportFields"] [] = "Alloc";
$tdatatbl_resource_allocation [".exportFields"] [] = "Start1";
$tdatatbl_resource_allocation [".exportFields"] [] = "End1";

$tdatatbl_resource_allocation [".importFields"] = array ();
$tdatatbl_resource_allocation [".importFields"] [] = "RSA";
$tdatatbl_resource_allocation [".importFields"] [] = "Location";
$tdatatbl_resource_allocation [".importFields"] [] = "Supervisor";
$tdatatbl_resource_allocation [".importFields"] [] = "Alloc";
$tdatatbl_resource_allocation [".importFields"] [] = "Start1";
$tdatatbl_resource_allocation [".importFields"] [] = "End1";
$tdatatbl_resource_allocation [".importFields"] [] = "AutCustID";

$tdatatbl_resource_allocation [".printFields"] = array ();
$tdatatbl_resource_allocation [".printFields"] [] = "RSA";
$tdatatbl_resource_allocation [".printFields"] [] = "AutCustID";
$tdatatbl_resource_allocation [".printFields"] [] = "Location";
$tdatatbl_resource_allocation [".printFields"] [] = "Supervisor";
$tdatatbl_resource_allocation [".printFields"] [] = "Alloc";
$tdatatbl_resource_allocation [".printFields"] [] = "Start1";
$tdatatbl_resource_allocation [".printFields"] [] = "End1";

// RSA
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 1;
$fdata ["strName"] = "RSA";
$fdata ["GoodName"] = "RSA";
$fdata ["ownerTable"] = "";
$fdata ["Label"] = GetFieldLabel ( "tbl_resource_allocation", "RSA" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "RSA";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "(RSAName)";

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

$tdatatbl_resource_allocation ["RSA"] = $fdata;
// Location
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 2;
$fdata ["strName"] = "Location";
$fdata ["GoodName"] = "Location";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "tbl_resource_allocation", "Location" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Location";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Location";

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

$tdatatbl_resource_allocation ["Location"] = $fdata;
// Supervisor
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 3;
$fdata ["strName"] = "Supervisor";
$fdata ["GoodName"] = "Supervisor";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "tbl_resource_allocation", "Supervisor" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

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

$fdata ["ViewFormats"] ["view"] = $vdata;
// End View Formats

// Begin Edit Formats
$fdata ["EditFormats"] = array ();

$edata = array (
		"EditFormat" => "Lookup wizard" 
);

// Begin Lookup settings
$edata ["LookupType"] = 2;
$edata ["LookupTable"] = "tbl_director1";
$edata ["autoCompleteFieldsOnEdit"] = 0;
$edata ["autoCompleteFields"] = array ();
$edata ["LCType"] = 0;

$edata ["LinkField"] = "SupervisorID";
$edata ["LinkFieldType"] = 0;
$edata ["DisplayField"] = "FullName";

$edata ["LookupOrderBy"] = "";

$edata ["SelectSize"] = 1;

// End Lookup Settings

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

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

$tdatatbl_resource_allocation ["Supervisor"] = $fdata;
// Alloc
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 4;
$fdata ["strName"] = "Alloc";
$fdata ["GoodName"] = "Alloc";
$fdata ["ownerTable"] = "";
$fdata ["Label"] = GetFieldLabel ( "tbl_resource_allocation", "Alloc" );
$fdata ["FieldType"] = 5;

$fdata ["bListPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Alloc";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "SUM(Allocation)";

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

$tdatatbl_resource_allocation ["Alloc"] = $fdata;
// Start1
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 5;
$fdata ["strName"] = "Start1";
$fdata ["GoodName"] = "Start1";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "tbl_resource_allocation", "Start1" );
$fdata ["FieldType"] = 7;

$fdata ["bListPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "StartDate";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "StartDate";

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

$edata ["IsRequired"] = true;

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
$edata ["validateAs"] ["basicValidate"] [] = "IsRequired";

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = false;

// the field's search options settings

// the default search options list
$fdata ["searchOptionsList"] = array (
		"Equals",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdatatbl_resource_allocation ["Start1"] = $fdata;
// End1
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 6;
$fdata ["strName"] = "End1";
$fdata ["GoodName"] = "End1";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "tbl_resource_allocation", "End1" );
$fdata ["FieldType"] = 7;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "EndDate";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "EndDate";

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

$edata ["IsRequired"] = true;

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
$edata ["validateAs"] ["basicValidate"] [] = "IsRequired";

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = false;

// the field's search options settings

// the default search options list
$fdata ["searchOptionsList"] = array (
		"Equals",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdatatbl_resource_allocation ["End1"] = $fdata;
// AutCustID
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 7;
$fdata ["strName"] = "AutCustID";
$fdata ["GoodName"] = "AutCustID";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "tbl_resource_allocation", "AutCustID" );
$fdata ["FieldType"] = 3;

$fdata ["AutoInc"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "AutCustID";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "AutCustID";

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

$tdatatbl_resource_allocation ["AutCustID"] = $fdata;

$tables_data ["tbl_resource_allocation"] = &$tdatatbl_resource_allocation;
$field_labels ["tbl_resource_allocation"] = &$fieldLabelstbl_resource_allocation;
$fieldToolTips ["tbl_resource_allocation"] = &$fieldToolTipstbl_resource_allocation;
$page_titles ["tbl_resource_allocation"] = &$pageTitlestbl_resource_allocation;

// -----------------start prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData ["tbl_resource_allocation"] = array ();

// tables which are master tables for current table (detail)
$masterTablesData ["tbl_resource_allocation"] = array ();

// -----------------end prepare master-details data arrays ------------------------------//

require_once (getabspath ( "classes/sql.php" ));
function createSqlQuery_tbl_resource_allocation() {
	$proto1 = array ();
	$proto1 ["m_strHead"] = "SELECT ";
	$proto1 ["m_strFieldList"] = "RSA,  Location,  ACEManager,  Alloc,  StartDate,  EndDate,  AutCustID";
	$proto1 ["m_strFrom"] = "FROM customerallocation";
	$proto1 ["m_strWhere"] = "(StartDate <Now()) AND (EndDate >Now())";
	$proto1 ["m_strOrderBy"] = "ORDER BY RSA";
	$proto1 ["m_strTail"] = "";
	$proto1 ["cipherer"] = null;
	$proto2 = array ();
	$proto2 ["m_sql"] = "(StartDate <Now()) AND (EndDate >Now())";
	$proto2 ["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed ( array (
			"m_sql" => "(StartDate <Now()) AND (EndDate >Now())" 
	) );
	
	$proto2 ["m_column"] = $obj;
	$proto2 ["m_contained"] = array ();
	$proto4 = array ();
	$proto4 ["m_sql"] = "StartDate <Now()";
	$proto4 ["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLField ( array (
			"m_strName" => "StartDate",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "tbl_resource_allocation" 
	) );
	
	$proto4 ["m_column"] = $obj;
	$proto4 ["m_contained"] = array ();
	$proto4 ["m_strCase"] = "<Now()";
	$proto4 ["m_havingmode"] = false;
	$proto4 ["m_inBrackets"] = true;
	$proto4 ["m_useAlias"] = false;
	$obj = new SQLLogicalExpr ( $proto4 );
	
	$proto2 ["m_contained"] [] = $obj;
	$proto6 = array ();
	$proto6 ["m_sql"] = "EndDate >Now()";
	$proto6 ["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLField ( array (
			"m_strName" => "EndDate",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "tbl_resource_allocation" 
	) );
	
	$proto6 ["m_column"] = $obj;
	$proto6 ["m_contained"] = array ();
	$proto6 ["m_strCase"] = ">Now()";
	$proto6 ["m_havingmode"] = false;
	$proto6 ["m_inBrackets"] = true;
	$proto6 ["m_useAlias"] = false;
	$obj = new SQLLogicalExpr ( $proto6 );
	
	$proto2 ["m_contained"] [] = $obj;
	$proto2 ["m_strCase"] = "";
	$proto2 ["m_havingmode"] = false;
	$proto2 ["m_inBrackets"] = false;
	$proto2 ["m_useAlias"] = false;
	$obj = new SQLLogicalExpr ( $proto2 );
	
	$proto1 ["m_where"] = $obj;
	$proto8 = array ();
	$proto8 ["m_sql"] = "";
	$proto8 ["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed ( array (
			"m_sql" => "" 
	) );
	
	$proto8 ["m_column"] = $obj;
	$proto8 ["m_contained"] = array ();
	$proto8 ["m_strCase"] = "";
	$proto8 ["m_havingmode"] = false;
	$proto8 ["m_inBrackets"] = false;
	$proto8 ["m_useAlias"] = false;
	$obj = new SQLLogicalExpr ( $proto8 );
	
	$proto1 ["m_having"] = $obj;
	$proto1 ["m_fieldlist"] = array ();
	$proto10 = array ();
	$obj = new SQLNonParsed ( array (
			"m_sql" => "(RSAName)" 
	) );
	
	$proto10 ["m_sql"] = "(RSAName)";
	$proto10 ["m_srcTableName"] = "tbl_resource_allocation";
	$proto10 ["m_expr"] = $obj;
	$proto10 ["m_alias"] = "RSA";
	$obj = new SQLFieldListItem ( $proto10 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto12 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Location",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "tbl_resource_allocation" 
	) );
	
	$proto12 ["m_sql"] = "Location";
	$proto12 ["m_srcTableName"] = "tbl_resource_allocation";
	$proto12 ["m_expr"] = $obj;
	$proto12 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto12 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto14 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Supervisor",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "tbl_resource_allocation" 
	) );
	
	$proto14 ["m_sql"] = "Supervisor";
	$proto14 ["m_srcTableName"] = "tbl_resource_allocation";
	$proto14 ["m_expr"] = $obj;
	$proto14 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto14 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto16 = array ();
	$proto17 = array ();
	$proto17 ["m_functiontype"] = "SQLF_SUM";
	$proto17 ["m_arguments"] = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Allocation",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "tbl_resource_allocation" 
	) );
	
	$proto17 ["m_arguments"] [] = $obj;
	$proto17 ["m_strFunctionName"] = "SUM";
	$obj = new SQLFunctionCall ( $proto17 );
	
	$proto16 ["m_sql"] = "SUM(Allocation)";
	$proto16 ["m_srcTableName"] = "tbl_resource_allocation";
	$proto16 ["m_expr"] = $obj;
	$proto16 ["m_alias"] = "Alloc";
	$obj = new SQLFieldListItem ( $proto16 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto19 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "StartDate",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "tbl_resource_allocation" 
	) );
	
	$proto19 ["m_sql"] = "StartDate";
	$proto19 ["m_srcTableName"] = "tbl_resource_allocation";
	$proto19 ["m_expr"] = $obj;
	$proto19 ["m_alias"] = "Start1";
	$obj = new SQLFieldListItem ( $proto19 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto21 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "EndDate",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "tbl_resource_allocation" 
	) );
	
	$proto21 ["m_sql"] = "EndDate";
	$proto21 ["m_srcTableName"] = "tbl_resource_allocation";
	$proto21 ["m_expr"] = $obj;
	$proto21 ["m_alias"] = "End1";
	$obj = new SQLFieldListItem ( $proto21 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto23 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "AutCustID",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "tbl_resource_allocation" 
	) );
	
	$proto23 ["m_sql"] = "AutCustID";
	$proto23 ["m_srcTableName"] = "tbl_resource_allocation";
	$proto23 ["m_expr"] = $obj;
	$proto23 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto23 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto1 ["m_fromlist"] = array ();
	$proto25 = array ();
	$proto25 ["m_link"] = "SQLL_MAIN";
	$proto26 = array ();
	$proto26 ["m_strName"] = "customerallocation";
	$proto26 ["m_srcTableName"] = "tbl_resource_allocation";
	$proto26 ["m_columns"] = array ();
	$proto26 ["m_columns"] [] = "AutCustID";
	$proto26 ["m_columns"] [] = "OracleID";
	$proto26 ["m_columns"] [] = "CustomerName";
	$proto26 ["m_columns"] [] = "Stage";
	$proto26 ["m_columns"] [] = "RSAName";
	$proto26 ["m_columns"] [] = "Location";
	$proto26 ["m_columns"] [] = "Supervisor";
	$proto26 ["m_columns"] [] = "StartDate";
	$proto26 ["m_columns"] [] = "EndDate";
	$proto26 ["m_columns"] [] = "Allocation";
	$proto26 ["m_columns"] [] = "Override";
	$proto26 ["m_columns"] [] = "Compre_String";
	$proto26 ["m_columns"] [] = "Temp";
	$proto26 ["m_columns"] [] = "Size";
	$proto26 ["m_columns"] [] = "Contract_Start";
	$proto26 ["m_columns"] [] = "SteadyStateDate";
	$proto26 ["m_columns"] [] = "Contract_End";
	$proto26 ["m_columns"] [] = "OnshoreSupportOnly";
	$proto26 ["m_columns"] [] = "Role";
	$proto26 ["m_columns"] [] = "PlatformType";
	$proto26 ["m_columns"] [] = "PlatformName";
	$proto26 ["m_columns"] [] = "TimeZone";
	$proto26 ["m_columns"] [] = "Project";
	$obj = new SQLTable ( $proto26 );
	
	$proto25 ["m_table"] = $obj;
	$proto25 ["m_sql"] = "customerallocation";
	$proto25 ["m_alias"] = "";
	$proto25 ["m_srcTableName"] = "tbl_resource_allocation";
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
	
	$proto1 ["m_fromlist"] [] = $obj;
	$proto1 ["m_groupby"] = array ();
	$proto29 = array ();
	$obj = new SQLNonParsed ( array (
			"m_sql" => "RSA" 
	) );
	
	$proto29 ["m_column"] = $obj;
	$obj = new SQLGroupByItem ( $proto29 );
	
	$proto1 ["m_groupby"] [] = $obj;
	$proto1 ["m_orderby"] = array ();
	$proto31 = array ();
	$obj = new SQLNonParsed ( array (
			"m_sql" => "RSA" 
	) );
	
	$proto31 ["m_column"] = $obj;
	$proto31 ["m_bAsc"] = 1;
	$proto31 ["m_nColumn"] = 0;
	$obj = new SQLOrderByItem ( $proto31 );
	
	$proto1 ["m_orderby"] [] = $obj;
	$proto1 ["m_srcTableName"] = "tbl_resource_allocation";
	$obj = new SQLQuery ( $proto1 );
	
	return $obj;
}
$queryData_tbl_resource_allocation = createSqlQuery_tbl_resource_allocation ();

$tdatatbl_resource_allocation [".sqlquery"] = $queryData_tbl_resource_allocation;

include_once (getabspath ( "include/tbl_resource_allocation_events.php" ));
$tableEvents ["tbl_resource_allocation"] = new eventclass_tbl_resource_allocation ();
$tdatatbl_resource_allocation [".hasEvents"] = true;

?>