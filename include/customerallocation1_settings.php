<?php
require_once (getabspath ( "classes/cipherer.php" ));

$tdatacustomerallocation1 = array ();
$tdatacustomerallocation1 [".truncateText"] = true;
$tdatacustomerallocation1 [".NumberOfChars"] = 60;
$tdatacustomerallocation1 [".ShortName"] = "customerallocation1";
$tdatacustomerallocation1 [".OwnerID"] = "";
$tdatacustomerallocation1 [".OriginalTable"] = "customerallocation";

// field labels
$fieldLabelscustomerallocation1 = array ();
$fieldToolTipscustomerallocation1 = array ();
$pageTitlescustomerallocation1 = array ();

if (mlang_getcurrentlang () == "English") {
	$fieldLabelscustomerallocation1 ["English"] = array ();
	$fieldToolTipscustomerallocation1 ["English"] = array ();
	$pageTitlescustomerallocation1 ["English"] = array ();
	$fieldLabelscustomerallocation1 ["English"] ["AutCustID"] = "Aut Cust ID";
	$fieldToolTipscustomerallocation1 ["English"] ["AutCustID"] = "";
	$fieldLabelscustomerallocation1 ["English"] ["OracleID"] = "Oracle ID";
	$fieldToolTipscustomerallocation1 ["English"] ["OracleID"] = "";
	$fieldLabelscustomerallocation1 ["English"] ["CustomerName"] = "Customer Name";
	$fieldToolTipscustomerallocation1 ["English"] ["CustomerName"] = "";
	$fieldLabelscustomerallocation1 ["English"] ["RSAName"] = "Resource";
	$fieldToolTipscustomerallocation1 ["English"] ["RSAName"] = "";
	$fieldLabelscustomerallocation1 ["English"] ["Location"] = "Location";
	$fieldToolTipscustomerallocation1 ["English"] ["Location"] = "";
	$fieldLabelscustomerallocation1 ["English"] ["StartDate"] = "Start Date";
	$fieldToolTipscustomerallocation1 ["English"] ["StartDate"] = "";
	$fieldLabelscustomerallocation1 ["English"] ["EndDate"] = "End Date";
	$fieldToolTipscustomerallocation1 ["English"] ["EndDate"] = "";
	$fieldLabelscustomerallocation1 ["English"] ["Supervisor"] = "Manager";
	$fieldToolTipscustomerallocation1 ["English"] ["Supervisor"] = "";
	$fieldLabelscustomerallocation1 ["English"] ["PlatformName"] = "Platform";
	$fieldToolTipscustomerallocation1 ["English"] ["PlatformName"] = "";
	$fieldLabelscustomerallocation1 ["English"] ["Role"] = "Role";
	$fieldToolTipscustomerallocation1 ["English"] ["Role"] = "";
	if (count ( $fieldToolTipscustomerallocation1 ["English"] ))
		$tdatacustomerallocation1 [".isUseToolTips"] = true;
}
if (mlang_getcurrentlang () == "") {
	$fieldLabelscustomerallocation1 [""] = array ();
	$fieldToolTipscustomerallocation1 [""] = array ();
	$pageTitlescustomerallocation1 [""] = array ();
	$fieldLabelscustomerallocation1 [""] ["AutCustID"] = "Aut Cust ID";
	$fieldToolTipscustomerallocation1 [""] ["AutCustID"] = "";
	if (count ( $fieldToolTipscustomerallocation1 [""] ))
		$tdatacustomerallocation1 [".isUseToolTips"] = true;
}

$tdatacustomerallocation1 [".NCSearch"] = true;

$tdatacustomerallocation1 [".shortTableName"] = "customerallocation1";
$tdatacustomerallocation1 [".nSecOptions"] = 0;
$tdatacustomerallocation1 [".recsPerRowList"] = 1;
$tdatacustomerallocation1 [".recsPerRowPrint"] = 1;
$tdatacustomerallocation1 [".mainTableOwnerID"] = "";
$tdatacustomerallocation1 [".moveNext"] = 0;
$tdatacustomerallocation1 [".entityType"] = 1;
$tdatacustomerallocation1 [".strOriginalTableName"] = "customerallocation";
$tdatacustomerallocation1 [".showAddInPopup"] = true;
$tdatacustomerallocation1 [".showEditInPopup"] = true;
$tdatacustomerallocation1 [".showViewInPopup"] = true;
// page's base css files names
$popupPagesLayoutNames = array ();
;
$popupPagesLayoutNames ["add"] = "add";
;
$popupPagesLayoutNames ["edit"] = "add";
;
$popupPagesLayoutNames ["view"] = "view2";
$tdatacustomerallocation1 [".popupPagesLayoutNames"] = $popupPagesLayoutNames;
$tdatacustomerallocation1 [".fieldsForRegister"] = array ();
if (! isMobile ())
	$tdatacustomerallocation1 [".listAjax"] = true;
else
	$tdatacustomerallocation1 [".listAjax"] = false;

$tdatacustomerallocation1 [".audit"] = false;
$tdatacustomerallocation1 [".locking"] = false;
$tdatacustomerallocation1 [".list"] = true;
$tdatacustomerallocation1 [".view"] = true;
$tdatacustomerallocation1 [".exportTo"] = true;
$tdatacustomerallocation1 [".printFriendly"] = true;
$tdatacustomerallocation1 [".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacustomerallocation1 [".searchSaving"] = false;
//

$tdatacustomerallocation1 [".showSearchPanel"] = true;
$tdatacustomerallocation1 [".flexibleSearch"] = true;

if (isMobile ())
	$tdatacustomerallocation1 [".isUseAjaxSuggest"] = false;
else
	$tdatacustomerallocation1 [".isUseAjaxSuggest"] = true;

$tdatacustomerallocation1 [".rowHighlite"] = true;

$tdatacustomerallocation1 [".addPageEvents"] = true;

// use timepicker for search panel
$tdatacustomerallocation1 [".isUseTimeForSearch"] = false;

$tdatacustomerallocation1 [".allSearchFields"] = array ();
$tdatacustomerallocation1 [".filterFields"] = array ();
$tdatacustomerallocation1 [".requiredSearchFields"] = array ();

$tdatacustomerallocation1 [".allSearchFields"] [] = "Supervisor";
$tdatacustomerallocation1 [".allSearchFields"] [] = "RSAName";
$tdatacustomerallocation1 [".allSearchFields"] [] = "Role";
$tdatacustomerallocation1 [".allSearchFields"] [] = "PlatformName";
$tdatacustomerallocation1 [".allSearchFields"] [] = "StartDate";
$tdatacustomerallocation1 [".allSearchFields"] [] = "EndDate";

$tdatacustomerallocation1 [".googleLikeFields"] = array ();
$tdatacustomerallocation1 [".googleLikeFields"] [] = "OracleID";
$tdatacustomerallocation1 [".googleLikeFields"] [] = "CustomerName";
$tdatacustomerallocation1 [".googleLikeFields"] [] = "RSAName";
$tdatacustomerallocation1 [".googleLikeFields"] [] = "Supervisor";
$tdatacustomerallocation1 [".googleLikeFields"] [] = "PlatformName";
$tdatacustomerallocation1 [".googleLikeFields"] [] = "Role";
$tdatacustomerallocation1 [".googleLikeFields"] [] = "StartDate";
$tdatacustomerallocation1 [".googleLikeFields"] [] = "EndDate";

$tdatacustomerallocation1 [".advSearchFields"] = array ();
$tdatacustomerallocation1 [".advSearchFields"] [] = "Supervisor";
$tdatacustomerallocation1 [".advSearchFields"] [] = "RSAName";
$tdatacustomerallocation1 [".advSearchFields"] [] = "Role";
$tdatacustomerallocation1 [".advSearchFields"] [] = "PlatformName";
$tdatacustomerallocation1 [".advSearchFields"] [] = "StartDate";
$tdatacustomerallocation1 [".advSearchFields"] [] = "EndDate";

$tdatacustomerallocation1 [".tableType"] = "list";

$tdatacustomerallocation1 [".printerPageOrientation"] = 0;
$tdatacustomerallocation1 [".nPrinterPageScale"] = 100;

$tdatacustomerallocation1 [".nPrinterSplitRecords"] = 40;

$tdatacustomerallocation1 [".nPrinterPDFSplitRecords"] = 40;

$tdatacustomerallocation1 [".geocodingEnabled"] = false;

// view page pdf

// print page pdf

$tdatacustomerallocation1 [".pageSize"] = 10;

$tdatacustomerallocation1 [".warnLeavingPages"] = true;

$tdatacustomerallocation1 [".hideEmptyFieldsOnView"] = true;

$tstrOrderBy = "ORDER BY CustomerName";
if (strlen ( $tstrOrderBy ) && strtolower ( substr ( $tstrOrderBy, 0, 8 ) ) != "order by")
	$tstrOrderBy = "order by " . $tstrOrderBy;
$tdatacustomerallocation1 [".strOrderBy"] = $tstrOrderBy;

$tdatacustomerallocation1 [".orderindexes"] = array ();
$tdatacustomerallocation1 [".orderindexes"] [] = array (
		3,
		(1 ? "ASC" : "DESC"),
		"RSAName" 
);

$tdatacustomerallocation1 [".sqlHead"] = "SELECT AutCustID,  OracleID,  CustomerName,  RSAName,  Location,  Supervisor,  PlatformName,  `Role`,  Stage,  StartDate,  EndDate";
$tdatacustomerallocation1 [".sqlFrom"] = "FROM customerallocation";
$tdatacustomerallocation1 [".sqlWhereExpr"] = "";
$tdatacustomerallocation1 [".sqlTail"] = "";

// fill array of records per page for list and report without group fields
$arrRPP = array ();
$arrRPP [] = 10;
$arrRPP [] = 20;
$arrRPP [] = 30;
$arrRPP [] = 50;
$arrRPP [] = 100;
$arrRPP [] = 500;
$arrRPP [] = - 1;
$tdatacustomerallocation1 [".arrRecsPerPage"] = $arrRPP;

// fill array of groups per page for report with group fields
$arrGPP = array ();
$arrGPP [] = 1;
$arrGPP [] = 3;
$arrGPP [] = 5;
$arrGPP [] = 10;
$arrGPP [] = 50;
$arrGPP [] = 100;
$arrGPP [] = - 1;
$tdatacustomerallocation1 [".arrGroupsPerPage"] = $arrGPP;

$tableKeyscustomerallocation1 = array ();
$tableKeyscustomerallocation1 [] = "OracleID";
$tdatacustomerallocation1 [".Keys"] = $tableKeyscustomerallocation1;

$tdatacustomerallocation1 [".listFields"] = array ();
$tdatacustomerallocation1 [".listFields"] [] = "Supervisor";
$tdatacustomerallocation1 [".listFields"] [] = "RSAName";
$tdatacustomerallocation1 [".listFields"] [] = "Role";
$tdatacustomerallocation1 [".listFields"] [] = "PlatformName";
$tdatacustomerallocation1 [".listFields"] [] = "StartDate";
$tdatacustomerallocation1 [".listFields"] [] = "EndDate";

$tdatacustomerallocation1 [".hideMobileList"] = array ();

$tdatacustomerallocation1 [".viewFields"] = array ();
$tdatacustomerallocation1 [".viewFields"] [] = "Supervisor";
$tdatacustomerallocation1 [".viewFields"] [] = "RSAName";
$tdatacustomerallocation1 [".viewFields"] [] = "Role";
$tdatacustomerallocation1 [".viewFields"] [] = "PlatformName";
$tdatacustomerallocation1 [".viewFields"] [] = "StartDate";
$tdatacustomerallocation1 [".viewFields"] [] = "EndDate";

$tdatacustomerallocation1 [".addFields"] = array ();

$tdatacustomerallocation1 [".masterListFields"] = array ();
$tdatacustomerallocation1 [".masterListFields"] [] = "AutCustID";
$tdatacustomerallocation1 [".masterListFields"] [] = "OracleID";
$tdatacustomerallocation1 [".masterListFields"] [] = "CustomerName";
$tdatacustomerallocation1 [".masterListFields"] [] = "Supervisor";
$tdatacustomerallocation1 [".masterListFields"] [] = "Location";
$tdatacustomerallocation1 [".masterListFields"] [] = "RSAName";
$tdatacustomerallocation1 [".masterListFields"] [] = "Role";
$tdatacustomerallocation1 [".masterListFields"] [] = "PlatformName";
$tdatacustomerallocation1 [".masterListFields"] [] = "StartDate";
$tdatacustomerallocation1 [".masterListFields"] [] = "EndDate";

$tdatacustomerallocation1 [".inlineAddFields"] = array ();

$tdatacustomerallocation1 [".editFields"] = array ();

$tdatacustomerallocation1 [".inlineEditFields"] = array ();

$tdatacustomerallocation1 [".exportFields"] = array ();
$tdatacustomerallocation1 [".exportFields"] [] = "AutCustID";
$tdatacustomerallocation1 [".exportFields"] [] = "OracleID";
$tdatacustomerallocation1 [".exportFields"] [] = "CustomerName";
$tdatacustomerallocation1 [".exportFields"] [] = "Supervisor";
$tdatacustomerallocation1 [".exportFields"] [] = "Location";
$tdatacustomerallocation1 [".exportFields"] [] = "RSAName";
$tdatacustomerallocation1 [".exportFields"] [] = "Role";
$tdatacustomerallocation1 [".exportFields"] [] = "PlatformName";
$tdatacustomerallocation1 [".exportFields"] [] = "StartDate";
$tdatacustomerallocation1 [".exportFields"] [] = "EndDate";

$tdatacustomerallocation1 [".importFields"] = array ();

$tdatacustomerallocation1 [".printFields"] = array ();
$tdatacustomerallocation1 [".printFields"] [] = "AutCustID";
$tdatacustomerallocation1 [".printFields"] [] = "OracleID";
$tdatacustomerallocation1 [".printFields"] [] = "CustomerName";
$tdatacustomerallocation1 [".printFields"] [] = "Supervisor";
$tdatacustomerallocation1 [".printFields"] [] = "Location";
$tdatacustomerallocation1 [".printFields"] [] = "RSAName";
$tdatacustomerallocation1 [".printFields"] [] = "Role";
$tdatacustomerallocation1 [".printFields"] [] = "PlatformName";
$tdatacustomerallocation1 [".printFields"] [] = "StartDate";
$tdatacustomerallocation1 [".printFields"] [] = "EndDate";

// AutCustID
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 1;
$fdata ["strName"] = "AutCustID";
$fdata ["GoodName"] = "AutCustID";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "customerallocation1", "AutCustID" );
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

$tdatacustomerallocation1 ["AutCustID"] = $fdata;
// OracleID
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 2;
$fdata ["strName"] = "OracleID";
$fdata ["GoodName"] = "OracleID";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "customerallocation1", "OracleID" );
$fdata ["FieldType"] = 200;

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
		"EditFormat" => "Readonly" 
);

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 100;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = false;

$tdatacustomerallocation1 ["OracleID"] = $fdata;
// CustomerName
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 3;
$fdata ["strName"] = "CustomerName";
$fdata ["GoodName"] = "CustomerName";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "customerallocation1", "CustomerName" );
$fdata ["FieldType"] = 200;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "CustomerName";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "CustomerName";

$fdata ["FieldPermissions"] = true;

$fdata ["UploadFolder"] = "files";

// Begin View Formats
$fdata ["ViewFormats"] = array ();

$vdata = array (
		"ViewFormat" => "" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["view"] = $vdata;
$vdata = array (
		"ViewFormat" => "" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["list"] = $vdata;
$vdata = array (
		"ViewFormat" => "" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["print"] = $vdata;
$vdata = array (
		"ViewFormat" => "" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["export"] = $vdata;
// End View Formats

// Begin Edit Formats
$fdata ["EditFormats"] = array ();

$edata = array (
		"EditFormat" => "Readonly" 
);

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 280;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
$edata = array (
		"EditFormat" => "Lookup wizard" 
);

// Begin Lookup settings
$edata ["LookupType"] = 2;
$edata ["LookupTable"] = "customer_header";
$edata ["autoCompleteFieldsOnEdit"] = 0;
$edata ["autoCompleteFields"] = array ();
$edata ["autoCompleteFields"] [] = array (
		'masterF' => "OracleID",
		'lookupF' => "OracIeID" 
);
$edata ["autoCompleteFields"] [] = array (
		'masterF' => "Stage",
		'lookupF' => "Stage" 
);
$edata ["autoCompleteFields"] [] = array (
		'masterF' => "Size",
		'lookupF' => "Size" 
);
$edata ["LCType"] = 0;

$edata ["LinkField"] = "Name";
$edata ["LinkFieldType"] = 200;
$edata ["DisplayField"] = "Name";

$edata ["LookupOrderBy"] = "Name";

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

$fdata ["EditFormats"] ["register"] = $edata;
$edata = array (
		"EditFormat" => "Lookup wizard" 
);

// Begin Lookup settings
$edata ["LookupType"] = 2;
$edata ["LookupTable"] = "customer_header";
$edata ["autoCompleteFieldsOnEdit"] = 0;
$edata ["autoCompleteFields"] = array ();
$edata ["autoCompleteFields"] [] = array (
		'masterF' => "OracleID",
		'lookupF' => "OracIeID" 
);
$edata ["autoCompleteFields"] [] = array (
		'masterF' => "Stage",
		'lookupF' => "Stage" 
);
$edata ["autoCompleteFields"] [] = array (
		'masterF' => "Size",
		'lookupF' => "Size" 
);
$edata ["autoCompleteFields"] [] = array (
		'masterF' => "Contract_Start",
		'lookupF' => "Contract_Start" 
);
$edata ["autoCompleteFields"] [] = array (
		'masterF' => "SteadyStateDate",
		'lookupF' => "SteadyState" 
);
$edata ["autoCompleteFields"] [] = array (
		'masterF' => "Contract_End",
		'lookupF' => "Contract_end" 
);
$edata ["autoCompleteFields"] [] = array (
		'masterF' => "OnshoreSupportOnly",
		'lookupF' => "Onshore Support" 
);
$edata ["autoCompleteFields"] [] = array (
		'masterF' => "TimeZone",
		'lookupF' => "PrimaryTimeZone" 
);
$edata ["LCType"] = 0;

$edata ["LinkField"] = "Name";
$edata ["LinkFieldType"] = 200;
$edata ["DisplayField"] = "Name";

$edata ["LookupOrderBy"] = "Name";

$edata ["SelectSize"] = 1;

// End Lookup Settings

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 350;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

// End validation

$fdata ["EditFormats"] ["add"] = $edata;
$edata = array (
		"EditFormat" => "Lookup wizard" 
);

// Begin Lookup settings
$edata ["LookupType"] = 2;
$edata ["LookupTable"] = "customer_header";
$edata ["autoCompleteFieldsOnEdit"] = 0;
$edata ["autoCompleteFields"] = array ();
$edata ["autoCompleteFields"] [] = array (
		'masterF' => "OracleID",
		'lookupF' => "OracIeID" 
);
$edata ["autoCompleteFields"] [] = array (
		'masterF' => "Stage",
		'lookupF' => "Stage" 
);
$edata ["autoCompleteFields"] [] = array (
		'masterF' => "Size",
		'lookupF' => "Size" 
);
$edata ["LCType"] = 0;

$edata ["LinkField"] = "Name";
$edata ["LinkFieldType"] = 200;
$edata ["DisplayField"] = "Name";

$edata ["LookupOrderBy"] = "Name";

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

$fdata ["EditFormats"] ["search"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = true;

$tdatacustomerallocation1 ["CustomerName"] = $fdata;
// RSAName
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 4;
$fdata ["strName"] = "RSAName";
$fdata ["GoodName"] = "RSAName";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "customerallocation1", "RSAName" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

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
$vdata = array (
		"ViewFormat" => "" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["list"] = $vdata;
$vdata = array (
		"ViewFormat" => "" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["print"] = $vdata;
// End View Formats

// Begin Edit Formats
$fdata ["EditFormats"] = array ();

$edata = array (
		"EditFormat" => "Readonly" 
);

$edata ["IsRequired"] = true;

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 130;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
$edata = array (
		"EditFormat" => "Lookup wizard" 
);

// Begin Lookup settings
$edata ["LookupType"] = 2;
$edata ["LookupTable"] = "employee_header";
$edata ["autoCompleteFieldsOnEdit"] = 1;
$edata ["autoCompleteFields"] = array ();
$edata ["LCType"] = 0;

$edata ["LinkField"] = "EmployeeID";
$edata ["LinkFieldType"] = 3;
$edata ["DisplayField"] = "FullName";

$edata ["LookupOrderBy"] = "FirstName";

$edata ["SelectSize"] = 1;

// End Lookup Settings

$edata ["IsRequired"] = true;

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 130;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = "IsRequired";

// End validation

$fdata ["EditFormats"] ["register"] = $edata;
$edata = array (
		"EditFormat" => "Readonly" 
);

$edata ["IsRequired"] = true;

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 130;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

// End validation

$fdata ["EditFormats"] ["add"] = $edata;
$edata = array (
		"EditFormat" => "Lookup wizard" 
);

// Begin Lookup settings
$edata ["LookupType"] = 2;
$edata ["LookupTable"] = "employee_header";
$edata ["autoCompleteFieldsOnEdit"] = 1;
$edata ["autoCompleteFields"] = array ();
$edata ["LCType"] = 0;

$edata ["LinkField"] = "FullName";
$edata ["LinkFieldType"] = 3;
$edata ["DisplayField"] = "FullName";

$edata ["LookupOrderBy"] = "FullName";

$edata ["SelectSize"] = 1;

// End Lookup Settings

$edata ["IsRequired"] = true;

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 130;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = "IsRequired";

// End validation

$fdata ["EditFormats"] ["search"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = true;

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

// the end of search options settings

$tdatacustomerallocation1 ["RSAName"] = $fdata;
// Location
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 5;
$fdata ["strName"] = "Location";
$fdata ["GoodName"] = "Location";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "customerallocation1", "Location" );
$fdata ["FieldType"] = 200;

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
		"EditFormat" => "Readonly" 
);

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 130;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = false;

$tdatacustomerallocation1 ["Location"] = $fdata;
// Supervisor
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 6;
$fdata ["strName"] = "Supervisor";
$fdata ["GoodName"] = "Supervisor";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "customerallocation1", "Supervisor" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bViewPage"] = true;

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
$edata ["LookupTable"] = "tbl_director";
$edata ["autoCompleteFieldsOnEdit"] = 0;
$edata ["autoCompleteFields"] = array ();
$edata ["LCType"] = 0;

$edata ["LinkField"] = "SupervisorID";
$edata ["LinkFieldType"] = 3;
$edata ["DisplayField"] = "FullName";

$edata ["LookupOrderBy"] = "FullName";

$edata ["SelectSize"] = 1;

// End Lookup Settings

$edata ["IsRequired"] = true;

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 130;

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

// the end of search options settings

$tdatacustomerallocation1 ["Supervisor"] = $fdata;
// PlatformName
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 7;
$fdata ["strName"] = "PlatformName";
$fdata ["GoodName"] = "PlatformName";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "customerallocation1", "PlatformName" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

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

$edata ["Multiselect"] = true;

$edata ["SelectSize"] = 5;

// End Lookup Settings

$edata ["IsRequired"] = true;

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 110;

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

$tdatacustomerallocation1 ["PlatformName"] = $fdata;
// Role
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 8;
$fdata ["strName"] = "Role";
$fdata ["GoodName"] = "Role";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "customerallocation1", "Role" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Role";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "`Role`";

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
$edata ["LookupTable"] = "tbl_role";
$edata ["autoCompleteFieldsOnEdit"] = 1;
$edata ["autoCompleteFields"] = array ();
$edata ["autoCompleteFields"] [] = array (
		'masterF' => "Allocation",
		'lookupF' => "Allocation" 
);
$edata ["LCType"] = 0;

$edata ["LinkField"] = "AutRoleID";
$edata ["LinkFieldType"] = 0;
$edata ["DisplayField"] = "Role";

$edata ["LookupOrderBy"] = "Role";

$edata ["SelectSize"] = 1;

// End Lookup Settings

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 130;

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

$tdatacustomerallocation1 ["Role"] = $fdata;
// StartDate
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 9;
$fdata ["strName"] = "StartDate";
$fdata ["GoodName"] = "StartDate";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "customerallocation1", "StartDate" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bViewPage"] = true;

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
$vdata = array (
		"ViewFormat" => "Short Date" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["list"] = $vdata;
$vdata = array (
		"ViewFormat" => "Short Date" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["print"] = $vdata;
// End View Formats

// Begin Edit Formats
$fdata ["EditFormats"] = array ();

$edata = array (
		"EditFormat" => "Date" 
);

$edata ["IsRequired"] = true;

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["DateEditType"] = 11;
$edata ["InitialYearFactor"] = 100;
$edata ["LastYearFactor"] = 10;

$edata ["controlWidth"] = 110;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = "IsRequired";

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
$edata = array (
		"EditFormat" => "Date" 
);

$edata ["IsRequired"] = true;

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["DateEditType"] = 11;
$edata ["InitialYearFactor"] = 100;
$edata ["LastYearFactor"] = 10;

$edata ["controlWidth"] = 110;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = "IsRequired";

// End validation

$fdata ["EditFormats"] ["register"] = $edata;
$edata = array (
		"EditFormat" => "Date" 
);

$edata ["IsRequired"] = true;

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["DateEditType"] = 11;
$edata ["InitialYearFactor"] = 100;
$edata ["LastYearFactor"] = 10;

$edata ["controlWidth"] = 110;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = "IsRequired";

// End validation

$fdata ["EditFormats"] ["add"] = $edata;
$edata = array (
		"EditFormat" => "Date" 
);

$edata ["IsRequired"] = true;

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["DateEditType"] = 11;
$edata ["InitialYearFactor"] = 100;
$edata ["LastYearFactor"] = 10;

$edata ["controlWidth"] = 110;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = "IsRequired";

// End validation

$fdata ["EditFormats"] ["search"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = true;

// the field's search options settings
$fdata ["defaultSearchOption"] = "Less than";

// the end of search options settings

$tdatacustomerallocation1 ["StartDate"] = $fdata;
// EndDate
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 10;
$fdata ["strName"] = "EndDate";
$fdata ["GoodName"] = "EndDate";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "customerallocation1", "EndDate" );
$fdata ["FieldType"] = 7;

$fdata ["bListPage"] = true;

$fdata ["bViewPage"] = true;

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
$vdata = array (
		"ViewFormat" => "Short Date" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["list"] = $vdata;
$vdata = array (
		"ViewFormat" => "Short Date" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["print"] = $vdata;
// End View Formats

// Begin Edit Formats
$fdata ["EditFormats"] = array ();

$edata = array (
		"EditFormat" => "Date" 
);

$edata ["IsRequired"] = true;

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["DateEditType"] = 11;
$edata ["InitialYearFactor"] = 100;
$edata ["LastYearFactor"] = 10;

$edata ["controlWidth"] = 80;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = "IsRequired";

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
$edata = array (
		"EditFormat" => "Date" 
);

$edata ["IsRequired"] = true;

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["DateEditType"] = 11;
$edata ["InitialYearFactor"] = 100;
$edata ["LastYearFactor"] = 10;

$edata ["controlWidth"] = 80;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = "IsRequired";

// End validation

$fdata ["EditFormats"] ["register"] = $edata;
$edata = array (
		"EditFormat" => "Date" 
);

$edata ["IsRequired"] = true;

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["DateEditType"] = 11;
$edata ["InitialYearFactor"] = 100;
$edata ["LastYearFactor"] = 10;

$edata ["controlWidth"] = 80;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = "IsRequired";

// End validation

$fdata ["EditFormats"] ["add"] = $edata;
$edata = array (
		"EditFormat" => "Date" 
);

$edata ["IsRequired"] = true;

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["DateEditType"] = 11;
$edata ["InitialYearFactor"] = 100;
$edata ["LastYearFactor"] = 10;

$edata ["controlWidth"] = 80;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = "IsRequired";

// End validation

$fdata ["EditFormats"] ["search"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = true;

// the field's search options settings
$fdata ["defaultSearchOption"] = "More than";

// the end of search options settings

$tdatacustomerallocation1 ["EndDate"] = $fdata;

$tables_data ["customerallocation1"] = &$tdatacustomerallocation1;
$field_labels ["customerallocation1"] = &$fieldLabelscustomerallocation1;
$fieldToolTips ["customerallocation1"] = &$fieldToolTipscustomerallocation1;
$page_titles ["customerallocation1"] = &$pageTitlescustomerallocation1;

// -----------------start prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData ["customerallocation1"] = array ();

// tables which are master tables for current table (detail)
$masterTablesData ["customerallocation1"] = array ();

$strOriginalDetailsTable = "customer_header";
$masterParams = array ();
$masterParams ["mDataSourceTable"] = "customer_header";
$masterParams ["mOriginalTable"] = $strOriginalDetailsTable;
$masterParams ["mShortTable"] = "customer_header";
$masterParams ["masterKeys"] = array ();
$masterParams ["detailKeys"] = array ();
$masterParams ["dispChildCount"] = "1";
$masterParams ["hideChild"] = "0";
$masterParams ["dispInfo"] = "1";
$masterParams ["previewOnList"] = 0;
$masterParams ["previewOnAdd"] = 0;
$masterParams ["previewOnEdit"] = 0;
$masterParams ["previewOnView"] = 1;
$masterParams ["proceedLink"] = 1;

$masterParams ["type"] = PAGE_LIST;
$masterTablesData ["customerallocation1"] [0] = $masterParams;
$masterTablesData ["customerallocation1"] [0] ["masterKeys"] = array ();
$masterTablesData ["customerallocation1"] [0] ["masterKeys"] [] = "OracIeID";
$masterTablesData ["customerallocation1"] [0] ["detailKeys"] = array ();
$masterTablesData ["customerallocation1"] [0] ["detailKeys"] [] = "OracleID";

// -----------------end prepare master-details data arrays ------------------------------//

require_once (getabspath ( "classes/sql.php" ));
function createSqlQuery_customerallocation1() {
	
	if( false == is_null( $_SESSION['UserName'] ) ) {
		$userName = $_SESSION['UserName'];
	}
	
	if( false == is_null( $_SESSION['UserID']) ) {
		$userID = $_SESSION["UserID"];
		$groupID = $_SESSION["UserRights"][$userID][".Groups"][0];
	}
	$proto3 = array ();
	$proto3 ["m_strHead"] = "SELECT";
	$proto3 ["m_strFieldList"] = "AutCustID,  OracleID,  CustomerName,  RSAName,  Location,  Supervisor,  PlatformName,  `Role`,  Stage,  StartDate,  EndDate";
	$proto3 ["m_strFrom"] = "FROM customerallocation";
	$proto3 ["m_strWhere"] = "";
	$proto3 ["m_strOrderBy"] = "ORDER BY RSAName";
	$proto3 ["m_strTail"] = "";
	$proto3 ["cipherer"] = null;
	$proto4 = array ();
	/* if( !IsAdmin() && '5' == $groupID ) {
		$proto4 ["m_sql"] = "";
		$proto4 ["m_uniontype"] = "SQLL_UNKNOWN";
		$obj = new SQLNonParsed ( array (
				"m_sql" => ""
		) );
	} elseif( !IsAdmin() && ( '6' == $groupID || '7' == $groupID ) ) {
		global $conn;
		$strSQL = "SELECT DISTINCT td.SupervisorID, td.FullName FROM customerallocation ca JOIN tbl_director td ON( ca.Supervisor = td.SupervisorID ) WHERE td.FullName = '" . $userName . "'";
		$rs = db_query($strSQL,$conn);
		while ($data = db_fetch_array($rs))
			$supervisorID = $data['SupervisorID'];
			$proto4 ["m_sql"] = "RSAName = '". $userName ."' OR Supervisor = '" . $supervisorID . "'";
			$proto4 ["m_uniontype"] = "SQLL_OR";
			$obj = new SQLNonParsed ( array (
					"m_sql" => "RSAName = '". $userName ."' OR Supervisor = '" . $supervisorID . "'"
			) );
	} elseif( !IsAdmin() ) {
		$proto4 ["m_sql"] = "RSAName = '". $userName ."'";
		$proto4 ["m_uniontype"] = "SQLL_UNKNOWN";
		$obj = new SQLNonParsed ( array (
				"m_sql" => "RSAName = '". $userName ."'"
		) );
	} else {
		$proto4 ["m_sql"] = "";
		$proto4 ["m_uniontype"] = "SQLL_UNKNOWN";
		$obj = new SQLNonParsed ( array (
				"m_sql" => ""
		) );
	}
	 */
		
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
			"m_strName" => "AutCustID",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "customerallocation1" 
	) );
	
	$proto8 ["m_sql"] = "AutCustID";
	$proto8 ["m_srcTableName"] = "customerallocation1";
	$proto8 ["m_expr"] = $obj;
	$proto8 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto8 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto10 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "OracleID",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "customerallocation1" 
	) );
	
	$proto10 ["m_sql"] = "OracleID";
	$proto10 ["m_srcTableName"] = "customerallocation1";
	$proto10 ["m_expr"] = $obj;
	$proto10 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto10 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto12 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "CustomerName",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "customerallocation1" 
	) );
	
	$proto12 ["m_sql"] = "CustomerName";
	$proto12 ["m_srcTableName"] = "customerallocation1";
	$proto12 ["m_expr"] = $obj;
	$proto12 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto12 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto14 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "RSAName",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "customerallocation1" 
	) );
	
	$proto14 ["m_sql"] = "RSAName";
	$proto14 ["m_srcTableName"] = "customerallocation1";
	$proto14 ["m_expr"] = $obj;
	$proto14 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto14 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto16 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Location",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "customerallocation1" 
	) );
	
	$proto16 ["m_sql"] = "Location";
	$proto16 ["m_srcTableName"] = "customerallocation1";
	$proto16 ["m_expr"] = $obj;
	$proto16 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto16 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto18 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Supervisor",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "customerallocation1" 
	) );
	
	$proto18 ["m_sql"] = "Supervisor";
	$proto18 ["m_srcTableName"] = "customerallocation1";
	$proto18 ["m_expr"] = $obj;
	$proto18 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto18 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto20 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "PlatformName",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "customerallocation1" 
	) );
	
	$proto20 ["m_sql"] = "PlatformName";
	$proto20 ["m_srcTableName"] = "customerallocation1";
	$proto20 ["m_expr"] = $obj;
	$proto20 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto20 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto22 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Role",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "customerallocation1" 
	) );
	
	$proto22 ["m_sql"] = "`Role`";
	$proto22 ["m_srcTableName"] = "customerallocation1";
	$proto22 ["m_expr"] = $obj;
	$proto22 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto22 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto22 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Stage",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "customerallocation1"
	) );
	
	$proto22 ["m_sql"] = "Stage";
	$proto22 ["m_srcTableName"] = "customerallocation1";
	$proto22 ["m_expr"] = $obj;
	$proto22 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto22 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto24 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "StartDate",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "customerallocation1" 
	) );
	
	$proto24 ["m_sql"] = "StartDate";
	$proto24 ["m_srcTableName"] = "customerallocation1";
	$proto24 ["m_expr"] = $obj;
	$proto24 ["m_alias"] = "StartDate";
	$obj = new SQLFieldListItem ( $proto24 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto26 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "EndDate",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "customerallocation1" 
	) );
	
	$proto26 ["m_sql"] = "EndDate";
	$proto26 ["m_srcTableName"] = "customerallocation1";
	$proto26 ["m_expr"] = $obj;
	$proto26 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto26 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto3 ["m_fromlist"] = array ();
	$proto28 = array ();
	$proto28 ["m_link"] = "SQLL_MAIN";
	$proto29 = array ();
	$proto29 ["m_strName"] = "customerallocation";
	$proto29 ["m_srcTableName"] = "customerallocation1";
	$proto29 ["m_columns"] = array ();
	$proto29 ["m_columns"] [] = "AutCustID";
	$proto29 ["m_columns"] [] = "OracleID";
	$proto29 ["m_columns"] [] = "CustomerName";
	$proto29 ["m_columns"] [] = "Stage";
	$proto29 ["m_columns"] [] = "RSAName";
	$proto29 ["m_columns"] [] = "Location";
	$proto29 ["m_columns"] [] = "Supervisor";
	$proto29 ["m_columns"] [] = "StartDate";
	$proto29 ["m_columns"] [] = "EndDate";
	$proto29 ["m_columns"] [] = "Allocation";
	$proto29 ["m_columns"] [] = "Override";
	$proto29 ["m_columns"] [] = "Compre_String";
	$proto29 ["m_columns"] [] = "Temp";
	$proto29 ["m_columns"] [] = "Size";
	$proto29 ["m_columns"] [] = "Contract_Start";
	$proto29 ["m_columns"] [] = "SteadyStateDate";
	$proto29 ["m_columns"] [] = "Contract_End";
	$proto29 ["m_columns"] [] = "OnshoreSupportOnly";
	$proto29 ["m_columns"] [] = "Role";
	$proto29 ["m_columns"] [] = "PlatformType";
	$proto29 ["m_columns"] [] = "PlatformName";
	$proto29 ["m_columns"] [] = "TimeZone";
	$proto29 ["m_columns"] [] = "Project";
	$obj = new SQLTable ( $proto29 );
	
	$proto28 ["m_table"] = $obj;
	$proto28 ["m_sql"] = "customerallocation";
	$proto28 ["m_alias"] = "";
	$proto28 ["m_srcTableName"] = "customerallocation1";
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
			"m_strName" => "CustomerName",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "customerallocation1" 
	) );
	
	$proto32 ["m_column"] = $obj;
	$proto32 ["m_bAsc"] = 1;
	$proto32 ["m_nColumn"] = 0;
	$obj = new SQLOrderByItem ( $proto32 );
	
	$proto3 ["m_orderby"] [] = $obj;
	$proto3 ["m_srcTableName"] = "customerallocation1";
	$obj = new SQLQuery ( $proto3 );
	
	return $obj;
}
$queryData_customerallocation1 = createSqlQuery_customerallocation1 ();

$tdatacustomerallocation1 [".sqlquery"] = $queryData_customerallocation1;

include_once (getabspath ( "include/customerallocation1_events.php" ));
$tableEvents ["customerallocation1"] = new eventclass_customerallocation1 ();
$tdatacustomerallocation1 [".hasEvents"] = true;

?>