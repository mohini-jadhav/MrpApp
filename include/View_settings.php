<?php
require_once (getabspath ( "classes/cipherer.php" ));

$tdataView = array ();
$tdataView [".truncateText"] = true;
$tdataView [".NumberOfChars"] = 80;
$tdataView [".ShortName"] = "View";
$tdataView [".OwnerID"] = "";
$tdataView [".OriginalTable"] = "customerallocation";

// field labels
$fieldLabelsView = array ();
$fieldToolTipsView = array ();
$pageTitlesView = array ();

if (mlang_getcurrentlang () == "English") {
	$fieldLabelsView ["English"] = array ();
	$fieldToolTipsView ["English"] = array ();
	$pageTitlesView ["English"] = array ();
	$fieldLabelsView ["English"] ["RSAName"] = "Resource";
	$fieldToolTipsView ["English"] ["RSAName"] = "";
	$fieldLabelsView ["English"] ["Location"] = "Location";
	$fieldToolTipsView ["English"] ["Location"] = "";
	$fieldLabelsView ["English"] ["Supervisor"] = "Manager";
	$fieldToolTipsView ["English"] ["Supervisor"] = "";
	$fieldLabelsView ["English"] ["Alloc"] = "Alloc";
	$fieldToolTipsView ["English"] ["Alloc"] = "";
	$fieldLabelsView ["English"] ["Start1"] = "Start1";
	$fieldToolTipsView ["English"] ["Start1"] = "";
	$fieldLabelsView ["English"] ["End1"] = "End1";
	$fieldToolTipsView ["English"] ["End1"] = "";
	$fieldLabelsView ["English"] ["AutCustID"] = "Aut Cust ID";
	$fieldToolTipsView ["English"] ["AutCustID"] = "";
	$fieldLabelsView ["English"] ["Alloc1"] = "Alloc1";
	$fieldToolTipsView ["English"] ["Alloc1"] = "";
	$fieldLabelsView ["English"] ["Alloc2"] = "Alloc2";
	$fieldToolTipsView ["English"] ["Alloc2"] = "";
	$fieldLabelsView ["English"] ["Alloc3"] = "Alloc3";
	$fieldToolTipsView ["English"] ["Alloc3"] = "";
	if (count ( $fieldToolTipsView ["English"] ))
		$tdataView [".isUseToolTips"] = true;
}
if (mlang_getcurrentlang () == "") {
	$fieldLabelsView [""] = array ();
	$fieldToolTipsView [""] = array ();
	$pageTitlesView [""] = array ();
	$fieldLabelsView [""] ["Alloc"] = "Alloc";
	$fieldToolTipsView [""] ["Alloc"] = "";
	$fieldLabelsView [""] ["Start1"] = "Start1";
	$fieldToolTipsView [""] ["Start1"] = "";
	$fieldLabelsView [""] ["End1"] = "End1";
	$fieldToolTipsView [""] ["End1"] = "";
	$fieldLabelsView [""] ["AutCustID"] = "Aut Cust ID";
	$fieldToolTipsView [""] ["AutCustID"] = "";
	$fieldLabelsView [""] ["Alloc1"] = "Alloc1";
	$fieldToolTipsView [""] ["Alloc1"] = "";
	$fieldLabelsView [""] ["Alloc2"] = "Alloc2";
	$fieldToolTipsView [""] ["Alloc2"] = "";
	$fieldLabelsView [""] ["Alloc3"] = "Alloc3";
	$fieldToolTipsView [""] ["Alloc3"] = "";
	if (count ( $fieldToolTipsView [""] ))
		$tdataView [".isUseToolTips"] = true;
}

$tdataView [".NCSearch"] = true;

$tdataView [".scrollGridBody"] = true;

$tdataView [".shortTableName"] = "View";
$tdataView [".nSecOptions"] = 0;
$tdataView [".recsPerRowList"] = 1;
$tdataView [".recsPerRowPrint"] = 1;
$tdataView [".mainTableOwnerID"] = "";
$tdataView [".moveNext"] = 0;
$tdataView [".entityType"] = 1;

$tdataView [".strOriginalTableName"] = "customerallocation";

$tdataView [".showAddInPopup"] = false;

$tdataView [".showEditInPopup"] = false;

$tdataView [".showViewInPopup"] = true;

// page's base css files names
$popupPagesLayoutNames = array ();

;
$popupPagesLayoutNames ["view"] = "view2";
$tdataView [".popupPagesLayoutNames"] = $popupPagesLayoutNames;

$tdataView [".fieldsForRegister"] = array ();

if (! isMobile ())
	$tdataView [".listAjax"] = true;
else
	$tdataView [".listAjax"] = false;

$tdataView [".audit"] = false;

$tdataView [".locking"] = false;

$tdataView [".list"] = true;

$tdataView [".view"] = true;

$tdataView [".import"] = true;

$tdataView [".exportTo"] = true;

$tdataView [".printFriendly"] = true;

$tdataView [".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataView [".searchSaving"] = false;
//

$tdataView [".showSearchPanel"] = true;
$tdataView [".flexibleSearch"] = true;

if (isMobile ())
	$tdataView [".isUseAjaxSuggest"] = false;
else
	$tdataView [".isUseAjaxSuggest"] = true;

$tdataView [".rowHighlite"] = true;

$tdataView [".addPageEvents"] = true;

// use timepicker for search panel
$tdataView [".isUseTimeForSearch"] = false;

$tdataView [".allSearchFields"] = array ();
$tdataView [".filterFields"] = array ();
$tdataView [".requiredSearchFields"] = array ();

$tdataView [".allSearchFields"] [] = "Alloc1";
$tdataView [".allSearchFields"] [] = "Alloc2";
$tdataView [".allSearchFields"] [] = "Alloc3";
$tdataView [".allSearchFields"] [] = "Start1";
$tdataView [".allSearchFields"] [] = "End1";
$tdataView [".allSearchFields"] [] = "Alloc";
$tdataView [".allSearchFields"] [] = "RSAName";
$tdataView [".allSearchFields"] [] = "Location";
$tdataView [".allSearchFields"] [] = "Supervisor";

$tdataView [".googleLikeFields"] = array ();
$tdataView [".googleLikeFields"] [] = "RSAName";
$tdataView [".googleLikeFields"] [] = "Location";
$tdataView [".googleLikeFields"] [] = "Supervisor";
$tdataView [".googleLikeFields"] [] = "Alloc";
$tdataView [".googleLikeFields"] [] = "Alloc1";
$tdataView [".googleLikeFields"] [] = "Alloc2";
$tdataView [".googleLikeFields"] [] = "Alloc3";
$tdataView [".googleLikeFields"] [] = "Start1";
$tdataView [".googleLikeFields"] [] = "End1";
$tdataView [".googleLikeFields"] [] = "AutCustID";

$tdataView [".advSearchFields"] = array ();
$tdataView [".advSearchFields"] [] = "Alloc1";
$tdataView [".advSearchFields"] [] = "Alloc2";
$tdataView [".advSearchFields"] [] = "Alloc3";
$tdataView [".advSearchFields"] [] = "Start1";
$tdataView [".advSearchFields"] [] = "End1";
$tdataView [".advSearchFields"] [] = "Alloc";
$tdataView [".advSearchFields"] [] = "RSAName";
$tdataView [".advSearchFields"] [] = "Location";
$tdataView [".advSearchFields"] [] = "Supervisor";

$tdataView [".tableType"] = "list";

$tdataView [".printerPageOrientation"] = 0;
$tdataView [".nPrinterPageScale"] = 100;

$tdataView [".nPrinterSplitRecords"] = 40;

$tdataView [".nPrinterPDFSplitRecords"] = 40;

$tdataView [".geocodingEnabled"] = false;

// view page pdf

// print page pdf

$tdataView [".pageSize"] = 10;

$tdataView [".warnLeavingPages"] = true;

$tstrOrderBy = "ORDER BY RSAName";
if (strlen ( $tstrOrderBy ) && strtolower ( substr ( $tstrOrderBy, 0, 8 ) ) != "order by")
	$tstrOrderBy = "order by " . $tstrOrderBy;
$tdataView [".strOrderBy"] = $tstrOrderBy;

$tdataView [".orderindexes"] = array ();
$tdataView [".orderindexes"] [] = array (
		1,
		(1 ? "ASC" : "DESC"),
		"RSAName" 
);

$tdataView [".sqlHead"] = "SELECT  Distinct RSAName,  Location,  Supervisor,  SUM(Allocation) AS Alloc,  SUM(Allocation) AS Alloc1,  SUM(Allocation) AS Alloc2,  SUM(Allocation) AS Alloc3,  StartDate AS Start1,  EndDate AS End1,  AutCustID";
$tdataView [".sqlFrom"] = "FROM customerallocation";
$tdataView [".sqlWhereExpr"] = "(StartDate <Now()) AND (EndDate >Now())";
$tdataView [".sqlTail"] = "GROUP BY RSAName, Location, Supervisor";

// fill array of records per page for list and report without group fields
$arrRPP = array ();
$arrRPP [] = 10;
$arrRPP [] = 20;
$arrRPP [] = 30;
$arrRPP [] = 50;
$arrRPP [] = 100;
$arrRPP [] = 500;
$arrRPP [] = - 1;
$tdataView [".arrRecsPerPage"] = $arrRPP;

// fill array of groups per page for report with group fields
$arrGPP = array ();
$arrGPP [] = 1;
$arrGPP [] = 3;
$arrGPP [] = 5;
$arrGPP [] = 10;
$arrGPP [] = 50;
$arrGPP [] = 100;
$arrGPP [] = - 1;
$tdataView [".arrGroupsPerPage"] = $arrGPP;

$tableKeysView = array ();
$tableKeysView [] = "AutCustID";
$tdataView [".Keys"] = $tableKeysView;

$tdataView [".listFields"] = array ();
$tdataView [".listFields"] [] = "RSAName";
$tdataView [".listFields"] [] = "Location";
$tdataView [".listFields"] [] = "Supervisor";
$tdataView [".listFields"] [] = "Alloc";
$tdataView [".listFields"] [] = "Alloc1";
$tdataView [".listFields"] [] = "Alloc2";
$tdataView [".listFields"] [] = "Alloc3";

$tdataView [".hideMobileList"] = array ();

$tdataView [".viewFields"] = array ();

$tdataView [".addFields"] = array ();

$tdataView [".masterListFields"] = array ();
$tdataView [".masterListFields"] [] = "Alloc2";
$tdataView [".masterListFields"] [] = "End1";
$tdataView [".masterListFields"] [] = "Start1";
$tdataView [".masterListFields"] [] = "Alloc";
$tdataView [".masterListFields"] [] = "Alloc1";
$tdataView [".masterListFields"] [] = "AutCustID";
$tdataView [".masterListFields"] [] = "Alloc3";
$tdataView [".masterListFields"] [] = "RSAName";
$tdataView [".masterListFields"] [] = "Location";
$tdataView [".masterListFields"] [] = "Supervisor";

$tdataView [".inlineAddFields"] = array ();

$tdataView [".editFields"] = array ();

$tdataView [".inlineEditFields"] = array ();

$tdataView [".exportFields"] = array ();
$tdataView [".exportFields"] [] = "Alloc";
$tdataView [".exportFields"] [] = "Alloc1";
$tdataView [".exportFields"] [] = "Alloc2";
$tdataView [".exportFields"] [] = "Alloc3";

$tdataView [".importFields"] = array ();
$tdataView [".importFields"] [] = "Alloc";
$tdataView [".importFields"] [] = "Alloc1";
$tdataView [".importFields"] [] = "Alloc2";
$tdataView [".importFields"] [] = "Alloc3";

$tdataView [".printFields"] = array ();
$tdataView [".printFields"] [] = "Alloc";
$tdataView [".printFields"] [] = "Alloc1";
$tdataView [".printFields"] [] = "Alloc2";
$tdataView [".printFields"] [] = "Alloc3";

// RSAName
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 1;
$fdata ["strName"] = "RSAName";
$fdata ["GoodName"] = "RSAName";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "View", "RSAName" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["strField"] = "RSAName";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "RSAName";

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
$edata ["LookupTable"] = "employee_header";
$edata ["autoCompleteFieldsOnEdit"] = 1;
$edata ["autoCompleteFields"] = array ();
$edata ["autoCompleteFields"] [] = array (
		'masterF' => "Location",
		'lookupF' => "Location" 
);
$edata ["autoCompleteFields"] [] = array (
		'masterF' => "Supervisor",
		'lookupF' => "Supervisor" 
);
$edata ["LCType"] = 0;

$edata ["LinkField"] = "FullName";
$edata ["LinkFieldType"] = 3;
$edata ["DisplayField"] = "FullName";

$edata ["LookupOrderBy"] = "FirstName";

$edata ["SelectSize"] = 1;

// End Lookup Settings

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

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

$tdataView ["RSAName"] = $fdata;
// Location
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 2;
$fdata ["strName"] = "Location";
$fdata ["GoodName"] = "Location";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "View", "Location" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAdvancedSearch"] = true;

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
		"EditFormat" => "Readonly" 
);

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

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

$tdataView ["Location"] = $fdata;
// Supervisor
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 3;
$fdata ["strName"] = "Supervisor";
$fdata ["GoodName"] = "Supervisor";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "View", "Supervisor" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAdvancedSearch"] = true;

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
$edata ["LookupTable"] = "tbl_director";
$edata ["autoCompleteFieldsOnEdit"] = 0;
$edata ["autoCompleteFields"] = array ();
$edata ["LCType"] = 0;

$edata ["LinkField"] = "SupervisorID";
$edata ["LinkFieldType"] = 0;
$edata ["DisplayField"] = "FullName";

$edata ["LookupOrderBy"] = "FullName";

$edata ["SelectSize"] = 1;

// End Lookup Settings

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

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

$tdataView ["Supervisor"] = $fdata;
// Alloc
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 4;
$fdata ["strName"] = "Alloc";
$fdata ["GoodName"] = "Alloc";
$fdata ["ownerTable"] = "";
$fdata ["Label"] = GetFieldLabel ( "View", "Alloc" );
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
		"ViewFormat" => "Percent" 
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

$tdataView ["Alloc"] = $fdata;
// Alloc1
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 5;
$fdata ["strName"] = "Alloc1";
$fdata ["GoodName"] = "Alloc1";
$fdata ["ownerTable"] = "";
$fdata ["Label"] = GetFieldLabel ( "View", "Alloc1" );
$fdata ["FieldType"] = 5;

$fdata ["bListPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Alloc1";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "SUM(Allocation)";

$fdata ["FieldPermissions"] = true;

$fdata ["UploadFolder"] = "files";

// Begin View Formats
$fdata ["ViewFormats"] = array ();

$vdata = array (
		"ViewFormat" => "Percent" 
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

$tdataView ["Alloc1"] = $fdata;
// Alloc2
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 6;
$fdata ["strName"] = "Alloc2";
$fdata ["GoodName"] = "Alloc2";
$fdata ["ownerTable"] = "";
$fdata ["Label"] = GetFieldLabel ( "View", "Alloc2" );
$fdata ["FieldType"] = 5;

$fdata ["bListPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Alloc2";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "SUM(Allocation)";

$fdata ["FieldPermissions"] = true;

$fdata ["UploadFolder"] = "files";

// Begin View Formats
$fdata ["ViewFormats"] = array ();

$vdata = array (
		"ViewFormat" => "Percent" 
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

$tdataView ["Alloc2"] = $fdata;
// Alloc3
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 7;
$fdata ["strName"] = "Alloc3";
$fdata ["GoodName"] = "Alloc3";
$fdata ["ownerTable"] = "";
$fdata ["Label"] = GetFieldLabel ( "View", "Alloc3" );
$fdata ["FieldType"] = 5;

$fdata ["bListPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Alloc3";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "SUM(Allocation)";

$fdata ["FieldPermissions"] = true;

$fdata ["UploadFolder"] = "files";

// Begin View Formats
$fdata ["ViewFormats"] = array ();

$vdata = array (
		"ViewFormat" => "Percent" 
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

$tdataView ["Alloc3"] = $fdata;
// Start1
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 8;
$fdata ["strName"] = "Start1";
$fdata ["GoodName"] = "Start1";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "View", "Start1" );
$fdata ["FieldType"] = 7;

$fdata ["bAdvancedSearch"] = true;

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

$tdataView ["Start1"] = $fdata;
// End1
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 9;
$fdata ["strName"] = "End1";
$fdata ["GoodName"] = "End1";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "View", "End1" );
$fdata ["FieldType"] = 7;

$fdata ["bAdvancedSearch"] = true;

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

$tdataView ["End1"] = $fdata;
// AutCustID
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 10;
$fdata ["strName"] = "AutCustID";
$fdata ["GoodName"] = "AutCustID";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "View", "AutCustID" );
$fdata ["FieldType"] = 3;

$fdata ["AutoInc"] = true;

$fdata ["strField"] = "AutCustID";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "AutCustID";

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

$tdataView ["AutCustID"] = $fdata;

$tables_data ["View"] = &$tdataView;
$field_labels ["View"] = &$fieldLabelsView;
$fieldToolTips ["View"] = &$fieldToolTipsView;
$page_titles ["View"] = &$pageTitlesView;

// -----------------start prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData ["View"] = array ();

// tables which are master tables for current table (detail)
$masterTablesData ["View"] = array ();

// -----------------end prepare master-details data arrays ------------------------------//

require_once (getabspath ( "classes/sql.php" ));
function createSqlQuery_View() {
	$proto0 = array ();
	$proto0 ["m_strHead"] = "SELECT  Distinct";
	$proto0 ["m_strFieldList"] = "RSAName,  Location,  Supervisor,  SUM(Allocation) AS Alloc,  SUM(Allocation) AS Alloc1,  SUM(Allocation) AS Alloc2,  SUM(Allocation) AS Alloc3,  StartDate AS Start1,  EndDate AS End1,  AutCustID";
	$proto0 ["m_strFrom"] = "FROM customerallocation";
	$proto0 ["m_strWhere"] = "(StartDate <Now()) AND (EndDate >Now())";
	$proto0 ["m_strOrderBy"] = "ORDER BY RSAName";
	$proto0 ["m_strTail"] = "";
	$proto0 ["cipherer"] = null;
	$proto1 = array ();
	$proto1 ["m_sql"] = "(StartDate <Now()) AND (EndDate >Now())";
	$proto1 ["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed ( array (
			"m_sql" => "(StartDate <Now()) AND (EndDate >Now())" 
	) );
	
	$proto1 ["m_column"] = $obj;
	$proto1 ["m_contained"] = array ();
	$proto3 = array ();
	$proto3 ["m_sql"] = "StartDate <Now()";
	$proto3 ["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLField ( array (
			"m_strName" => "StartDate",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "View" 
	) );
	
	$proto3 ["m_column"] = $obj;
	$proto3 ["m_contained"] = array ();
	$proto3 ["m_strCase"] = "<Now()";
	$proto3 ["m_havingmode"] = false;
	$proto3 ["m_inBrackets"] = true;
	$proto3 ["m_useAlias"] = false;
	$obj = new SQLLogicalExpr ( $proto3 );
	
	$proto1 ["m_contained"] [] = $obj;
	$proto5 = array ();
	$proto5 ["m_sql"] = "EndDate >Now()";
	$proto5 ["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLField ( array (
			"m_strName" => "EndDate",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "View" 
	) );
	
	$proto5 ["m_column"] = $obj;
	$proto5 ["m_contained"] = array ();
	$proto5 ["m_strCase"] = ">Now()";
	$proto5 ["m_havingmode"] = false;
	$proto5 ["m_inBrackets"] = true;
	$proto5 ["m_useAlias"] = false;
	$obj = new SQLLogicalExpr ( $proto5 );
	
	$proto1 ["m_contained"] [] = $obj;
	$proto1 ["m_strCase"] = "";
	$proto1 ["m_havingmode"] = false;
	$proto1 ["m_inBrackets"] = false;
	$proto1 ["m_useAlias"] = false;
	$obj = new SQLLogicalExpr ( $proto1 );
	
	$proto0 ["m_where"] = $obj;
	$proto7 = array ();
	$proto7 ["m_sql"] = "";
	$proto7 ["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed ( array (
			"m_sql" => "" 
	) );
	
	$proto7 ["m_column"] = $obj;
	$proto7 ["m_contained"] = array ();
	$proto7 ["m_strCase"] = "";
	$proto7 ["m_havingmode"] = false;
	$proto7 ["m_inBrackets"] = false;
	$proto7 ["m_useAlias"] = false;
	$obj = new SQLLogicalExpr ( $proto7 );
	
	$proto0 ["m_having"] = $obj;
	$proto0 ["m_fieldlist"] = array ();
	$proto9 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "RSAName",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "View" 
	) );
	
	$proto9 ["m_sql"] = "RSAName";
	$proto9 ["m_srcTableName"] = "View";
	$proto9 ["m_expr"] = $obj;
	$proto9 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto9 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto11 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Location",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "View" 
	) );
	
	$proto11 ["m_sql"] = "Location";
	$proto11 ["m_srcTableName"] = "View";
	$proto11 ["m_expr"] = $obj;
	$proto11 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto11 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto13 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Supervisor",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "View" 
	) );
	
	$proto13 ["m_sql"] = "Supervisor";
	$proto13 ["m_srcTableName"] = "View";
	$proto13 ["m_expr"] = $obj;
	$proto13 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto13 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto15 = array ();
	$proto16 = array ();
	$proto16 ["m_functiontype"] = "SQLF_SUM";
	$proto16 ["m_arguments"] = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Allocation",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "View" 
	) );
	
	$proto16 ["m_arguments"] [] = $obj;
	$proto16 ["m_strFunctionName"] = "SUM";
	$obj = new SQLFunctionCall ( $proto16 );
	
	$proto15 ["m_sql"] = "SUM(Allocation)";
	$proto15 ["m_srcTableName"] = "View";
	$proto15 ["m_expr"] = $obj;
	$proto15 ["m_alias"] = "Alloc";
	$obj = new SQLFieldListItem ( $proto15 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto18 = array ();
	$proto19 = array ();
	$proto19 ["m_functiontype"] = "SQLF_SUM";
	$proto19 ["m_arguments"] = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Allocation",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "View" 
	) );
	
	$proto19 ["m_arguments"] [] = $obj;
	$proto19 ["m_strFunctionName"] = "SUM";
	$obj = new SQLFunctionCall ( $proto19 );
	
	$proto18 ["m_sql"] = "SUM(Allocation)";
	$proto18 ["m_srcTableName"] = "View";
	$proto18 ["m_expr"] = $obj;
	$proto18 ["m_alias"] = "Alloc1";
	$obj = new SQLFieldListItem ( $proto18 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto21 = array ();
	$proto22 = array ();
	$proto22 ["m_functiontype"] = "SQLF_SUM";
	$proto22 ["m_arguments"] = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Allocation",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "View" 
	) );
	
	$proto22 ["m_arguments"] [] = $obj;
	$proto22 ["m_strFunctionName"] = "SUM";
	$obj = new SQLFunctionCall ( $proto22 );
	
	$proto21 ["m_sql"] = "SUM(Allocation)";
	$proto21 ["m_srcTableName"] = "View";
	$proto21 ["m_expr"] = $obj;
	$proto21 ["m_alias"] = "Alloc2";
	$obj = new SQLFieldListItem ( $proto21 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto24 = array ();
	$proto25 = array ();
	$proto25 ["m_functiontype"] = "SQLF_SUM";
	$proto25 ["m_arguments"] = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Allocation",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "View" 
	) );
	
	$proto25 ["m_arguments"] [] = $obj;
	$proto25 ["m_strFunctionName"] = "SUM";
	$obj = new SQLFunctionCall ( $proto25 );
	
	$proto24 ["m_sql"] = "SUM(Allocation)";
	$proto24 ["m_srcTableName"] = "View";
	$proto24 ["m_expr"] = $obj;
	$proto24 ["m_alias"] = "Alloc3";
	$obj = new SQLFieldListItem ( $proto24 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto27 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "StartDate",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "View" 
	) );
	
	$proto27 ["m_sql"] = "StartDate";
	$proto27 ["m_srcTableName"] = "View";
	$proto27 ["m_expr"] = $obj;
	$proto27 ["m_alias"] = "Start1";
	$obj = new SQLFieldListItem ( $proto27 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto29 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "EndDate",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "View" 
	) );
	
	$proto29 ["m_sql"] = "EndDate";
	$proto29 ["m_srcTableName"] = "View";
	$proto29 ["m_expr"] = $obj;
	$proto29 ["m_alias"] = "End1";
	$obj = new SQLFieldListItem ( $proto29 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto31 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "AutCustID",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "View" 
	) );
	
	$proto31 ["m_sql"] = "AutCustID";
	$proto31 ["m_srcTableName"] = "View";
	$proto31 ["m_expr"] = $obj;
	$proto31 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto31 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto0 ["m_fromlist"] = array ();
	$proto33 = array ();
	$proto33 ["m_link"] = "SQLL_MAIN";
	$proto34 = array ();
	$proto34 ["m_strName"] = "customerallocation";
	$proto34 ["m_srcTableName"] = "View";
	$proto34 ["m_columns"] = array ();
	$proto34 ["m_columns"] [] = "AutCustID";
	$proto34 ["m_columns"] [] = "OracleID";
	$proto34 ["m_columns"] [] = "CustomerName";
	$proto34 ["m_columns"] [] = "Stage";
	$proto34 ["m_columns"] [] = "RSAName";
	$proto34 ["m_columns"] [] = "Location";
	$proto34 ["m_columns"] [] = "Supervisor";
	$proto34 ["m_columns"] [] = "StartDate";
	$proto34 ["m_columns"] [] = "EndDate";
	$proto34 ["m_columns"] [] = "Allocation";
	$proto34 ["m_columns"] [] = "Override";
	$proto34 ["m_columns"] [] = "Compre_String";
	$proto34 ["m_columns"] [] = "Temp";
	$proto34 ["m_columns"] [] = "Size";
	$proto34 ["m_columns"] [] = "Contract_Start";
	$proto34 ["m_columns"] [] = "SteadyStateDate";
	$proto34 ["m_columns"] [] = "Contract_End";
	$proto34 ["m_columns"] [] = "OnshoreSupportOnly";
	$proto34 ["m_columns"] [] = "Role";
	$proto34 ["m_columns"] [] = "PlatformType";
	$proto34 ["m_columns"] [] = "PlatformName";
	$proto34 ["m_columns"] [] = "TimeZone";
	$proto34 ["m_columns"] [] = "Project";
	$obj = new SQLTable ( $proto34 );
	
	$proto33 ["m_table"] = $obj;
	$proto33 ["m_sql"] = "customerallocation";
	$proto33 ["m_alias"] = "";
	$proto33 ["m_srcTableName"] = "View";
	$proto35 = array ();
	$proto35 ["m_sql"] = "";
	$proto35 ["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed ( array (
			"m_sql" => "" 
	) );
	
	$proto35 ["m_column"] = $obj;
	$proto35 ["m_contained"] = array ();
	$proto35 ["m_strCase"] = "";
	$proto35 ["m_havingmode"] = false;
	$proto35 ["m_inBrackets"] = false;
	$proto35 ["m_useAlias"] = false;
	$obj = new SQLLogicalExpr ( $proto35 );
	
	$proto33 ["m_joinon"] = $obj;
	$obj = new SQLFromListItem ( $proto33 );
	
	$proto0 ["m_fromlist"] [] = $obj;
	$proto0 ["m_groupby"] = array ();
	$proto37 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "RSAName",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "View" 
	) );
	
	$proto37 ["m_column"] = $obj;
	$obj = new SQLGroupByItem ( $proto37 );
	
	$proto0 ["m_groupby"] [] = $obj;
	$proto39 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Location",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "View" 
	) );
	
	$proto39 ["m_column"] = $obj;
	$obj = new SQLGroupByItem ( $proto39 );
	
	$proto0 ["m_groupby"] [] = $obj;
	$proto41 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Supervisor",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "View" 
	) );
	
	$proto41 ["m_column"] = $obj;
	$obj = new SQLGroupByItem ( $proto41 );
	
	$proto0 ["m_groupby"] [] = $obj;
	$proto0 ["m_orderby"] = array ();
	$proto43 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "RSAName",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "View" 
	) );
	
	$proto43 ["m_column"] = $obj;
	$proto43 ["m_bAsc"] = 1;
	$proto43 ["m_nColumn"] = 0;
	$obj = new SQLOrderByItem ( $proto43 );
	
	$proto0 ["m_orderby"] [] = $obj;
	$proto0 ["m_srcTableName"] = "View";
	$obj = new SQLQuery ( $proto0 );
	
	return $obj;
}
$queryData_View = createSqlQuery_View ();

$tdataView [".sqlquery"] = $queryData_View;

include_once (getabspath ( "include/View_events.php" ));
$tableEvents ["View"] = new eventclass_View ();
$tdataView [".hasEvents"] = true;

?>