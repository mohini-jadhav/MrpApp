<?php
require_once (getabspath ( "classes/cipherer.php" ));

$tdatatime = array ();
$tdatatime [".truncateText"] = true;
$tdatatime [".NumberOfChars"] = 60;
$tdatatime [".ShortName"] = "time";
$tdatatime [".OwnerID"] = "";
$tdatatime [".OriginalTable"] = "time";

// field labels
$fieldLabelstime = array ();
$fieldToolTipstime = array ();
$pageTitlestime = array ();

if (mlang_getcurrentlang () == "English") {
	$fieldLabelstime ["English"] = array ();
	$fieldToolTipstime ["English"] = array ();
	$pageTitlestime ["English"] = array ();
	$fieldLabelstime ["English"] ["AutTimeID"] = "Aut Time ID";
	$fieldToolTipstime ["English"] ["AutTimeID"] = "";
	$fieldLabelstime ["English"] ["EmployeeID"] = "Employee ID";
	$fieldToolTipstime ["English"] ["EmployeeID"] = "";
	$fieldLabelstime ["English"] ["FirstName"] = "First Name";
	$fieldToolTipstime ["English"] ["FirstName"] = "";
	$fieldLabelstime ["English"] ["LastName"] = "Last Name";
	$fieldToolTipstime ["English"] ["LastName"] = "";
	$fieldLabelstime ["English"] ["SupervisorName"] = "Supervisor Name";
	$fieldToolTipstime ["English"] ["SupervisorName"] = "";
	$fieldLabelstime ["English"] ["WK_1"] = "WK-1";
	$fieldToolTipstime ["English"] ["WK-1"] = "";
	$fieldLabelstime ["English"] ["WK_2"] = "WK-2";
	$fieldToolTipstime ["English"] ["WK-2"] = "";
	$fieldLabelstime ["English"] ["WK_3"] = "WK-3";
	$fieldToolTipstime ["English"] ["WK-3"] = "";
	$fieldLabelstime ["English"] ["WK_4"] = "WK-4";
	$fieldToolTipstime ["English"] ["WK-4"] = "";
	$fieldLabelstime ["English"] ["EmployeeStatus"] = "Employee Status";
	$fieldToolTipstime ["English"] ["EmployeeStatus"] = "";
	if (count ( $fieldToolTipstime ["English"] ))
		$tdatatime [".isUseToolTips"] = true;
}
if (mlang_getcurrentlang () == "") {
	$fieldLabelstime [""] = array ();
	$fieldToolTipstime [""] = array ();
	$pageTitlestime [""] = array ();
	if (count ( $fieldToolTipstime [""] ))
		$tdatatime [".isUseToolTips"] = true;
}

$tdatatime [".NCSearch"] = true;

if (! isMobile ())
	$tdatatime [".scrollGridBody"] = true;

$tdatatime [".shortTableName"] = "time";
$tdatatime [".nSecOptions"] = 0;
$tdatatime [".recsPerRowList"] = 1;
$tdatatime [".recsPerRowPrint"] = 1;
$tdatatime [".mainTableOwnerID"] = "";
$tdatatime [".moveNext"] = 0;
$tdatatime [".entityType"] = 0;

$tdatatime [".strOriginalTableName"] = "time";

$tdatatime [".showAddInPopup"] = true;

$tdatatime [".showEditInPopup"] = true;

$tdatatime [".showViewInPopup"] = true;

// page's base css files names
$popupPagesLayoutNames = array ();

;
$popupPagesLayoutNames ["add"] = "add2";

;
$popupPagesLayoutNames ["edit"] = "edit2";

;
$popupPagesLayoutNames ["view"] = "view2";
$tdatatime [".popupPagesLayoutNames"] = $popupPagesLayoutNames;

$tdatatime [".fieldsForRegister"] = array ();

$tdatatime [".listAjax"] = false;

$tdatatime [".audit"] = false;

$tdatatime [".locking"] = false;

$tdatatime [".edit"] = true;
$tdatatime [".afterEditAction"] = 1;
$tdatatime [".closePopupAfterEdit"] = 1;
$tdatatime [".afterEditActionDetTable"] = "";

$tdatatime [".add"] = true;
$tdatatime [".afterAddAction"] = 1;
$tdatatime [".closePopupAfterAdd"] = 1;
$tdatatime [".afterAddActionDetTable"] = "";

$tdatatime [".list"] = true;

$tdatatime [".view"] = true;

$tdatatime [".import"] = true;

$tdatatime [".exportTo"] = true;

$tdatatime [".printFriendly"] = true;

$tdatatime [".delete"] = true;

$tdatatime [".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatatime [".searchSaving"] = false;
//

$tdatatime [".showSearchPanel"] = true;
$tdatatime [".flexibleSearch"] = true;

if (isMobile ())
	$tdatatime [".isUseAjaxSuggest"] = false;
else
	$tdatatime [".isUseAjaxSuggest"] = true;

$tdatatime [".rowHighlite"] = true;

$tdatatime [".addPageEvents"] = false;

// use timepicker for search panel
$tdatatime [".isUseTimeForSearch"] = false;

$tdatatime [".allSearchFields"] = array ();
$tdatatime [".filterFields"] = array ();
$tdatatime [".requiredSearchFields"] = array ();

$tdatatime [".allSearchFields"] [] = "FirstName";
$tdatatime [".allSearchFields"] [] = "LastName";
$tdatatime [".allSearchFields"] [] = "EmployeeStatus";
$tdatatime [".allSearchFields"] [] = "SupervisorName";
$tdatatime [".allSearchFields"] [] = "WK-1";
$tdatatime [".allSearchFields"] [] = "WK-2";
$tdatatime [".allSearchFields"] [] = "WK-3";
$tdatatime [".allSearchFields"] [] = "WK-4";

$tdatatime [".googleLikeFields"] = array ();
$tdatatime [".googleLikeFields"] [] = "AutTimeID";
$tdatatime [".googleLikeFields"] [] = "WK-1";
$tdatatime [".googleLikeFields"] [] = "WK-2";
$tdatatime [".googleLikeFields"] [] = "WK-3";
$tdatatime [".googleLikeFields"] [] = "WK-4";
$tdatatime [".googleLikeFields"] [] = "EmployeeID";
$tdatatime [".googleLikeFields"] [] = "FirstName";
$tdatatime [".googleLikeFields"] [] = "LastName";
$tdatatime [".googleLikeFields"] [] = "SupervisorName";
$tdatatime [".googleLikeFields"] [] = "EmployeeStatus";

$tdatatime [".advSearchFields"] = array ();
$tdatatime [".advSearchFields"] [] = "FirstName";
$tdatatime [".advSearchFields"] [] = "LastName";
$tdatatime [".advSearchFields"] [] = "EmployeeStatus";
$tdatatime [".advSearchFields"] [] = "SupervisorName";
$tdatatime [".advSearchFields"] [] = "WK-1";
$tdatatime [".advSearchFields"] [] = "WK-2";
$tdatatime [".advSearchFields"] [] = "WK-3";
$tdatatime [".advSearchFields"] [] = "WK-4";

$tdatatime [".tableType"] = "list";

$tdatatime [".printerPageOrientation"] = 0;
$tdatatime [".nPrinterPageScale"] = 100;

$tdatatime [".nPrinterSplitRecords"] = 40;

$tdatatime [".nPrinterPDFSplitRecords"] = 40;

$tdatatime [".geocodingEnabled"] = false;

// view page pdf

// print page pdf

$tdatatime [".pageSize"] = 10;

$tdatatime [".warnLeavingPages"] = true;

$tstrOrderBy = "ORDER BY employee_header.FirstName";
if (strlen ( $tstrOrderBy ) && strtolower ( substr ( $tstrOrderBy, 0, 8 ) ) != "order by")
	$tstrOrderBy = "order by " . $tstrOrderBy;
$tdatatime [".strOrderBy"] = $tstrOrderBy;

$tdatatime [".orderindexes"] = array ();
$tdatatime [".orderindexes"] [] = array (
		7,
		(1 ? "ASC" : "DESC"),
		"employee_header.FirstName" 
);

$tdatatime [".sqlHead"] = "SELECT `time`.AutTimeID,  `time`.`WK-1`,  `time`.`WK-2`,  `time`.`WK-3`,  `time`.`WK-4`,  `time`.EmployeeID,  employee_header.FirstName,  employee_header.LastName,  employee_header.SupervisorName,  employee_header.EmployeeStatus";
$tdatatime [".sqlFrom"] = "FROM `time`  INNER JOIN employee_header ON `time`.EmployeeID = employee_header.EmployeeID";
$tdatatime [".sqlWhereExpr"] = "";
$tdatatime [".sqlTail"] = "";

// fill array of records per page for list and report without group fields
$arrRPP = array ();
$arrRPP [] = 10;
$arrRPP [] = 20;
$arrRPP [] = 30;
$arrRPP [] = 50;
$arrRPP [] = 100;
$arrRPP [] = 500;
$arrRPP [] = - 1;
$tdatatime [".arrRecsPerPage"] = $arrRPP;

// fill array of groups per page for report with group fields
$arrGPP = array ();
$arrGPP [] = 1;
$arrGPP [] = 3;
$arrGPP [] = 5;
$arrGPP [] = 10;
$arrGPP [] = 50;
$arrGPP [] = 100;
$arrGPP [] = - 1;
$tdatatime [".arrGroupsPerPage"] = $arrGPP;

$tableKeystime = array ();
$tableKeystime [] = "AutTimeID";
$tdatatime [".Keys"] = $tableKeystime;

$tdatatime [".listFields"] = array ();
$tdatatime [".listFields"] [] = "FirstName";
$tdatatime [".listFields"] [] = "LastName";
$tdatatime [".listFields"] [] = "EmployeeStatus";
$tdatatime [".listFields"] [] = "SupervisorName";
$tdatatime [".listFields"] [] = "WK-1";
$tdatatime [".listFields"] [] = "WK-2";
$tdatatime [".listFields"] [] = "WK-3";
$tdatatime [".listFields"] [] = "WK-4";

$tdatatime [".hideMobileList"] = array ();

$tdatatime [".viewFields"] = array ();
$tdatatime [".viewFields"] [] = "FirstName";
$tdatatime [".viewFields"] [] = "LastName";
$tdatatime [".viewFields"] [] = "EmployeeStatus";
$tdatatime [".viewFields"] [] = "SupervisorName";
$tdatatime [".viewFields"] [] = "WK-1";
$tdatatime [".viewFields"] [] = "WK-2";
$tdatatime [".viewFields"] [] = "WK-3";
$tdatatime [".viewFields"] [] = "WK-4";

$tdatatime [".addFields"] = array ();

$tdatatime [".masterListFields"] = array ();
$tdatatime [".masterListFields"] [] = "AutTimeID";
$tdatatime [".masterListFields"] [] = "EmployeeID";
$tdatatime [".masterListFields"] [] = "FirstName";
$tdatatime [".masterListFields"] [] = "LastName";
$tdatatime [".masterListFields"] [] = "EmployeeStatus";
$tdatatime [".masterListFields"] [] = "SupervisorName";
$tdatatime [".masterListFields"] [] = "WK-1";
$tdatatime [".masterListFields"] [] = "WK-2";
$tdatatime [".masterListFields"] [] = "WK-3";
$tdatatime [".masterListFields"] [] = "WK-4";

$tdatatime [".inlineAddFields"] = array ();

$tdatatime [".editFields"] = array ();
$tdatatime [".editFields"] [] = "FirstName";
$tdatatime [".editFields"] [] = "LastName";
$tdatatime [".editFields"] [] = "EmployeeStatus";
$tdatatime [".editFields"] [] = "SupervisorName";
$tdatatime [".editFields"] [] = "WK-1";
$tdatatime [".editFields"] [] = "WK-2";
$tdatatime [".editFields"] [] = "WK-3";
$tdatatime [".editFields"] [] = "WK-4";

$tdatatime [".inlineEditFields"] = array ();

$tdatatime [".exportFields"] = array ();
$tdatatime [".exportFields"] [] = "FirstName";
$tdatatime [".exportFields"] [] = "LastName";
$tdatatime [".exportFields"] [] = "EmployeeStatus";
$tdatatime [".exportFields"] [] = "SupervisorName";
$tdatatime [".exportFields"] [] = "WK-1";
$tdatatime [".exportFields"] [] = "WK-2";
$tdatatime [".exportFields"] [] = "WK-3";
$tdatatime [".exportFields"] [] = "WK-4";

$tdatatime [".importFields"] = array ();
$tdatatime [".importFields"] [] = "WK-1";
$tdatatime [".importFields"] [] = "WK-2";
$tdatatime [".importFields"] [] = "WK-3";
$tdatatime [".importFields"] [] = "WK-4";
$tdatatime [".importFields"] [] = "FirstName";
$tdatatime [".importFields"] [] = "LastName";
$tdatatime [".importFields"] [] = "SupervisorName";
$tdatatime [".importFields"] [] = "EmployeeStatus";

$tdatatime [".printFields"] = array ();
$tdatatime [".printFields"] [] = "FirstName";
$tdatatime [".printFields"] [] = "LastName";
$tdatatime [".printFields"] [] = "EmployeeStatus";
$tdatatime [".printFields"] [] = "SupervisorName";
$tdatatime [".printFields"] [] = "WK-1";
$tdatatime [".printFields"] [] = "WK-2";
$tdatatime [".printFields"] [] = "WK-3";
$tdatatime [".printFields"] [] = "WK-4";

// AutTimeID
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 1;
$fdata ["strName"] = "AutTimeID";
$fdata ["GoodName"] = "AutTimeID";
$fdata ["ownerTable"] = "time";
$fdata ["Label"] = GetFieldLabel ( "time", "AutTimeID" );
$fdata ["FieldType"] = 3;

$fdata ["AutoInc"] = true;

$fdata ["strField"] = "AutTimeID";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "`time`.AutTimeID";

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

$tdatatime ["AutTimeID"] = $fdata;
// WK-1
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 2;
$fdata ["strName"] = "WK-1";
$fdata ["GoodName"] = "WK_1";
$fdata ["ownerTable"] = "time";
$fdata ["Label"] = GetFieldLabel ( "time", "WK_1" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "WK-1";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "`time`.`WK-1`";

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

$tdatatime ["WK-1"] = $fdata;
// WK-2
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 3;
$fdata ["strName"] = "WK-2";
$fdata ["GoodName"] = "WK_2";
$fdata ["ownerTable"] = "time";
$fdata ["Label"] = GetFieldLabel ( "time", "WK_2" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "WK-2";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "`time`.`WK-2`";

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

$tdatatime ["WK-2"] = $fdata;
// WK-3
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 4;
$fdata ["strName"] = "WK-3";
$fdata ["GoodName"] = "WK_3";
$fdata ["ownerTable"] = "time";
$fdata ["Label"] = GetFieldLabel ( "time", "WK_3" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "WK-3";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "`time`.`WK-3`";

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

$tdatatime ["WK-3"] = $fdata;
// WK-4
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 5;
$fdata ["strName"] = "WK-4";
$fdata ["GoodName"] = "WK_4";
$fdata ["ownerTable"] = "time";
$fdata ["Label"] = GetFieldLabel ( "time", "WK_4" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "WK-4";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "`time`.`WK-4`";

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

$tdatatime ["WK-4"] = $fdata;
// EmployeeID
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 6;
$fdata ["strName"] = "EmployeeID";
$fdata ["GoodName"] = "EmployeeID";
$fdata ["ownerTable"] = "time";
$fdata ["Label"] = GetFieldLabel ( "time", "EmployeeID" );
$fdata ["FieldType"] = 3;

$fdata ["strField"] = "EmployeeID";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "`time`.EmployeeID";

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

$tdatatime ["EmployeeID"] = $fdata;
// FirstName
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 7;
$fdata ["strName"] = "FirstName";
$fdata ["GoodName"] = "FirstName";
$fdata ["ownerTable"] = "employee_header";
$fdata ["Label"] = GetFieldLabel ( "time", "FirstName" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "FirstName";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "employee_header.FirstName";

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

$tdatatime ["FirstName"] = $fdata;
// LastName
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 8;
$fdata ["strName"] = "LastName";
$fdata ["GoodName"] = "LastName";
$fdata ["ownerTable"] = "employee_header";
$fdata ["Label"] = GetFieldLabel ( "time", "LastName" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "LastName";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "employee_header.LastName";

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

$tdatatime ["LastName"] = $fdata;
// SupervisorName
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 9;
$fdata ["strName"] = "SupervisorName";
$fdata ["GoodName"] = "SupervisorName";
$fdata ["ownerTable"] = "employee_header";
$fdata ["Label"] = GetFieldLabel ( "time", "SupervisorName" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "SupervisorName";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "employee_header.SupervisorName";

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

$tdatatime ["SupervisorName"] = $fdata;
// EmployeeStatus
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 10;
$fdata ["strName"] = "EmployeeStatus";
$fdata ["GoodName"] = "EmployeeStatus";
$fdata ["ownerTable"] = "employee_header";
$fdata ["Label"] = GetFieldLabel ( "time", "EmployeeStatus" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "EmployeeStatus";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "employee_header.EmployeeStatus";

$fdata ["FieldPermissions"] = true;

$fdata ["UploadFolder"] = "files";

// Begin View Formats
$fdata ["ViewFormats"] = array ();

$vdata = array (
		"ViewFormat" => "Custom" 
);

$fdata ["ViewFormats"] ["view"] = $vdata;
$vdata = array (
		"ViewFormat" => "Custom" 
);

$fdata ["ViewFormats"] ["list"] = $vdata;
$vdata = array (
		"ViewFormat" => "Custom" 
);

$fdata ["ViewFormats"] ["print"] = $vdata;
$vdata = array (
		"ViewFormat" => "Custom" 
);

$fdata ["ViewFormats"] ["export"] = $vdata;
// End View Formats

// Begin Edit Formats
$fdata ["EditFormats"] = array ();

$edata = array (
		"EditFormat" => "Readonly" 
);

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 200;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
$edata = array (
		"EditFormat" => "Readonly" 
);

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 200;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

// End validation

$fdata ["EditFormats"] ["register"] = $edata;
$edata = array (
		"EditFormat" => "Readonly" 
);

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 200;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

// End validation

$fdata ["EditFormats"] ["add"] = $edata;
$edata = array (
		"EditFormat" => "Readonly" 
);

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 200;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

// End validation

$fdata ["EditFormats"] ["search"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = true;

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

$tdatatime ["EmployeeStatus"] = $fdata;

$tables_data ["time"] = &$tdatatime;
$field_labels ["time"] = &$fieldLabelstime;
$fieldToolTips ["time"] = &$fieldToolTipstime;
$page_titles ["time"] = &$pageTitlestime;

// -----------------start prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData ["time"] = array ();

// tables which are master tables for current table (detail)
$masterTablesData ["time"] = array ();

// -----------------end prepare master-details data arrays ------------------------------//

require_once (getabspath ( "classes/sql.php" ));
function createSqlQuery_time() {
	$proto3 = array ();
	$proto3 ["m_strHead"] = "SELECT";
	$proto3 ["m_strFieldList"] = "`time`.AutTimeID,  `time`.`WK-1`,  `time`.`WK-2`,  `time`.`WK-3`,  `time`.`WK-4`,  `time`.EmployeeID,  employee_header.FirstName,  employee_header.LastName,  employee_header.SupervisorName,  employee_header.EmployeeStatus";
	$proto3 ["m_strFrom"] = "FROM `time`  INNER JOIN employee_header ON `time`.EmployeeID = employee_header.EmployeeID";
	$proto3 ["m_strWhere"] = "";
	$proto3 ["m_strOrderBy"] = "ORDER BY employee_header.FirstName";
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
			"m_strName" => "AutTimeID",
			"m_strTable" => "time",
			"m_srcTableName" => "time" 
	) );
	
	$proto8 ["m_sql"] = "`time`.AutTimeID";
	$proto8 ["m_srcTableName"] = "time";
	$proto8 ["m_expr"] = $obj;
	$proto8 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto8 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto10 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "WK-1",
			"m_strTable" => "time",
			"m_srcTableName" => "time" 
	) );
	
	$proto10 ["m_sql"] = "`time`.`WK-1`";
	$proto10 ["m_srcTableName"] = "time";
	$proto10 ["m_expr"] = $obj;
	$proto10 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto10 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto12 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "WK-2",
			"m_strTable" => "time",
			"m_srcTableName" => "time" 
	) );
	
	$proto12 ["m_sql"] = "`time`.`WK-2`";
	$proto12 ["m_srcTableName"] = "time";
	$proto12 ["m_expr"] = $obj;
	$proto12 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto12 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto14 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "WK-3",
			"m_strTable" => "time",
			"m_srcTableName" => "time" 
	) );
	
	$proto14 ["m_sql"] = "`time`.`WK-3`";
	$proto14 ["m_srcTableName"] = "time";
	$proto14 ["m_expr"] = $obj;
	$proto14 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto14 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto16 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "WK-4",
			"m_strTable" => "time",
			"m_srcTableName" => "time" 
	) );
	
	$proto16 ["m_sql"] = "`time`.`WK-4`";
	$proto16 ["m_srcTableName"] = "time";
	$proto16 ["m_expr"] = $obj;
	$proto16 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto16 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto18 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "EmployeeID",
			"m_strTable" => "time",
			"m_srcTableName" => "time" 
	) );
	
	$proto18 ["m_sql"] = "`time`.EmployeeID";
	$proto18 ["m_srcTableName"] = "time";
	$proto18 ["m_expr"] = $obj;
	$proto18 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto18 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto20 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "FirstName",
			"m_strTable" => "employee_header",
			"m_srcTableName" => "time" 
	) );
	
	$proto20 ["m_sql"] = "employee_header.FirstName";
	$proto20 ["m_srcTableName"] = "time";
	$proto20 ["m_expr"] = $obj;
	$proto20 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto20 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto22 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "LastName",
			"m_strTable" => "employee_header",
			"m_srcTableName" => "time" 
	) );
	
	$proto22 ["m_sql"] = "employee_header.LastName";
	$proto22 ["m_srcTableName"] = "time";
	$proto22 ["m_expr"] = $obj;
	$proto22 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto22 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto24 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "SupervisorName",
			"m_strTable" => "employee_header",
			"m_srcTableName" => "time" 
	) );
	
	$proto24 ["m_sql"] = "employee_header.SupervisorName";
	$proto24 ["m_srcTableName"] = "time";
	$proto24 ["m_expr"] = $obj;
	$proto24 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto24 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto26 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "EmployeeStatus",
			"m_strTable" => "employee_header",
			"m_srcTableName" => "time" 
	) );
	
	$proto26 ["m_sql"] = "employee_header.EmployeeStatus";
	$proto26 ["m_srcTableName"] = "time";
	$proto26 ["m_expr"] = $obj;
	$proto26 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto26 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto3 ["m_fromlist"] = array ();
	$proto28 = array ();
	$proto28 ["m_link"] = "SQLL_MAIN";
	$proto29 = array ();
	$proto29 ["m_strName"] = "time";
	$proto29 ["m_srcTableName"] = "time";
	$proto29 ["m_columns"] = array ();
	$proto29 ["m_columns"] [] = "AutTimeID";
	$proto29 ["m_columns"] [] = "WK-1";
	$proto29 ["m_columns"] [] = "WK-2";
	$proto29 ["m_columns"] [] = "WK-3";
	$proto29 ["m_columns"] [] = "WK-4";
	$proto29 ["m_columns"] [] = "EmployeeID";
	$obj = new SQLTable ( $proto29 );
	
	$proto28 ["m_table"] = $obj;
	$proto28 ["m_sql"] = "`time`";
	$proto28 ["m_alias"] = "";
	$proto28 ["m_srcTableName"] = "time";
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
	$proto32 = array ();
	$proto32 ["m_link"] = "SQLL_INNERJOIN";
	$proto33 = array ();
	$proto33 ["m_strName"] = "employee_header";
	$proto33 ["m_srcTableName"] = "time";
	$proto33 ["m_columns"] = array ();
	$proto33 ["m_columns"] [] = "EmployeeID";
	$proto33 ["m_columns"] [] = "FirstName";
	$proto33 ["m_columns"] [] = "LastName";
	$proto33 ["m_columns"] [] = "emailID";
	$proto33 ["m_columns"] [] = "Type";
	$proto33 ["m_columns"] [] = "SupervisorTitle";
	$proto33 ["m_columns"] [] = "Location";
	$proto33 ["m_columns"] [] = "SupervisorName";
	$proto33 ["m_columns"] [] = "InactiveDate";
	$proto33 ["m_columns"] [] = "created_by";
	$proto33 ["m_columns"] [] = "updated_by";
	$proto33 ["m_columns"] [] = "created_date";
	$proto33 ["m_columns"] [] = "updated_date";
	$proto33 ["m_columns"] [] = "StartDate";
	$proto33 ["m_columns"] [] = "EmployeeStatus";
	$proto33 ["m_columns"] [] = "Country";
	$proto33 ["m_columns"] [] = "Zip";
	$proto33 ["m_columns"] [] = "Role";
	$proto33 ["m_columns"] [] = "SupervisorID";
	$proto33 ["m_columns"] [] = "JobTitle";
	$obj = new SQLTable ( $proto33 );
	
	$proto32 ["m_table"] = $obj;
	$proto32 ["m_sql"] = "INNER JOIN employee_header ON `time`.EmployeeID = employee_header.EmployeeID";
	$proto32 ["m_alias"] = "";
	$proto32 ["m_srcTableName"] = "time";
	$proto34 = array ();
	$proto34 ["m_sql"] = "`time`.EmployeeID = employee_header.EmployeeID";
	$proto34 ["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLField ( array (
			"m_strName" => "EmployeeID",
			"m_strTable" => "time",
			"m_srcTableName" => "time" 
	) );
	
	$proto34 ["m_column"] = $obj;
	$proto34 ["m_contained"] = array ();
	$proto34 ["m_strCase"] = "= employee_header.EmployeeID";
	$proto34 ["m_havingmode"] = false;
	$proto34 ["m_inBrackets"] = false;
	$proto34 ["m_useAlias"] = false;
	$obj = new SQLLogicalExpr ( $proto34 );
	
	$proto32 ["m_joinon"] = $obj;
	$obj = new SQLFromListItem ( $proto32 );
	
	$proto3 ["m_fromlist"] [] = $obj;
	$proto3 ["m_groupby"] = array ();
	$proto3 ["m_orderby"] = array ();
	$proto36 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "FirstName",
			"m_strTable" => "employee_header",
			"m_srcTableName" => "time" 
	) );
	
	$proto36 ["m_column"] = $obj;
	$proto36 ["m_bAsc"] = 1;
	$proto36 ["m_nColumn"] = 0;
	$obj = new SQLOrderByItem ( $proto36 );
	
	$proto3 ["m_orderby"] [] = $obj;
	$proto3 ["m_srcTableName"] = "time";
	$obj = new SQLQuery ( $proto3 );
	
	return $obj;
}
$queryData_time = createSqlQuery_time ();

$tdatatime [".sqlquery"] = $queryData_time;

include_once (getabspath ( "include/time_events.php" ));
$tableEvents ["time"] = new eventclass_time ();
$tdatatime [".hasEvents"] = true;

?>