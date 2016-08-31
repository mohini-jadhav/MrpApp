<?php
require_once (getabspath ( "classes/cipherer.php" ));

$tdataemployee_header = array ();
$tdataemployee_header [".truncateText"] = true;
$tdataemployee_header [".NumberOfChars"] = 60;
$tdataemployee_header [".ShortName"] = "employee_header";
$tdataemployee_header [".OwnerID"] = "";
$tdataemployee_header [".OriginalTable"] = "employee_header";

// field labels
$fieldLabelsemployee_header = array ();
$fieldToolTipsemployee_header = array ();
$pageTitlesemployee_header = array ();

if (mlang_getcurrentlang () == "English") {
	$fieldLabelsemployee_header ["English"] = array ();
	$fieldToolTipsemployee_header ["English"] = array ();
	$pageTitlesemployee_header ["English"] = array ();
	$fieldLabelsemployee_header ["English"] ["EmployeeID"] = "Emp ID";
	$fieldToolTipsemployee_header ["English"] ["EmployeeID"] = "";
	$fieldLabelsemployee_header ["English"] ["FirstName"] = "First Name";
	$fieldToolTipsemployee_header ["English"] ["FirstName"] = "";
	$fieldLabelsemployee_header ["English"] ["LastName"] = "Last Name";
	$fieldToolTipsemployee_header ["English"] ["LastName"] = "";
	$fieldLabelsemployee_header ["English"] ["emailID"] = "Email";
	$fieldToolTipsemployee_header ["English"] ["emailID"] = "";
	$fieldLabelsemployee_header ["English"] ["Type"] = "Contractor";
	$fieldToolTipsemployee_header ["English"] ["Type"] = "";
	$fieldLabelsemployee_header ["English"] ["Location"] = "Emp Geo";
	$fieldToolTipsemployee_header ["English"] ["Location"] = "";
	$fieldLabelsemployee_header ["English"] ["InactiveDate"] = "Termination Date";
	$fieldToolTipsemployee_header ["English"] ["InactiveDate"] = "";
	$fieldLabelsemployee_header ["English"] ["created_by"] = "Created By";
	$fieldToolTipsemployee_header ["English"] ["created_by"] = "";
	$fieldLabelsemployee_header ["English"] ["updated_by"] = "Updated By";
	$fieldToolTipsemployee_header ["English"] ["updated_by"] = "";
	$fieldLabelsemployee_header ["English"] ["created_date"] = "Created Date";
	$fieldToolTipsemployee_header ["English"] ["created_date"] = "";
	$fieldLabelsemployee_header ["English"] ["updated_date"] = "Updated Date";
	$fieldToolTipsemployee_header ["English"] ["updated_date"] = "";
	$fieldLabelsemployee_header ["English"] ["FullName"] = "Full Name";
	$fieldToolTipsemployee_header ["English"] ["FullName"] = "";
	$fieldLabelsemployee_header ["English"] ["StartDate"] = "Start Date";
	$fieldToolTipsemployee_header ["English"] ["StartDate"] = "";
	$fieldLabelsemployee_header ["English"] ["EmployeeStatus"] = "Emp Active";
	$fieldToolTipsemployee_header ["English"] ["EmployeeStatus"] = "";
	$fieldLabelsemployee_header ["English"] ["Country"] = "Country";
	$fieldToolTipsemployee_header ["English"] ["Country"] = "";
	$fieldLabelsemployee_header ["English"] ["SupervisorTitle"] = "Supervisor";
	$fieldToolTipsemployee_header ["English"] ["SupervisorTitle"] = "";
	$fieldLabelsemployee_header ["English"] ["Role"] = "Role";
	$fieldToolTipsemployee_header ["English"] ["Role"] = "";
	$fieldLabelsemployee_header ["English"] ["SupervisorName"] = "Manager";
	$fieldToolTipsemployee_header ["English"] ["SupervisorName"] = "";
	$fieldLabelsemployee_header ["English"] ["SupervisorID"] = "Supervisor ID";
	$fieldToolTipsemployee_header ["English"] ["SupervisorID"] = "";
	$fieldLabelsemployee_header ["English"] ["JobTitle"] = "Job Title";
	$fieldToolTipsemployee_header ["English"] ["JobTitle"] = "";
	$fieldLabelsemployee_header ["English"] ["Address"] = "Zip";
	$fieldToolTipsemployee_header ["English"] ["Address"] = "";
	if (count ( $fieldToolTipsemployee_header ["English"] ))
		$tdataemployee_header [".isUseToolTips"] = true;
}
if (mlang_getcurrentlang () == "") {
	$fieldLabelsemployee_header [""] = array ();
	$fieldToolTipsemployee_header [""] = array ();
	$pageTitlesemployee_header [""] = array ();
	$fieldLabelsemployee_header [""] ["EmployeeID"] = "Employee ID";
	$fieldToolTipsemployee_header [""] ["EmployeeID"] = "";
	if (count ( $fieldToolTipsemployee_header [""] ))
		$tdataemployee_header [".isUseToolTips"] = true;
}

$tdataemployee_header [".NCSearch"] = true;

if (! isMobile ())
	$tdataemployee_header [".scrollGridBody"] = true;

$tdataemployee_header [".shortTableName"] = "employee_header";
$tdataemployee_header [".nSecOptions"] = 0;
$tdataemployee_header [".recsPerRowList"] = 1;
$tdataemployee_header [".recsPerRowPrint"] = 1;
$tdataemployee_header [".mainTableOwnerID"] = "";
$tdataemployee_header [".moveNext"] = 0;
$tdataemployee_header [".entityType"] = 0;

$tdataemployee_header [".strOriginalTableName"] = "employee_header";

$tdataemployee_header [".showAddInPopup"] = true;

$tdataemployee_header [".showEditInPopup"] = true;

$tdataemployee_header [".showViewInPopup"] = false;

// page's base css files names
$popupPagesLayoutNames = array ();

;
$popupPagesLayoutNames ["edit"] = "edit2";
$tdataemployee_header [".popupPagesLayoutNames"] = $popupPagesLayoutNames;

$tdataemployee_header [".fieldsForRegister"] = array ();

$tdataemployee_header [".listAjax"] = false;

$tdataemployee_header [".audit"] = false;

$tdataemployee_header [".locking"] = false;

$tdataemployee_header [".edit"] = true;
$tdataemployee_header [".afterEditAction"] = 1;
$tdataemployee_header [".closePopupAfterEdit"] = 1;
$tdataemployee_header [".afterEditActionDetTable"] = "employeeskills";

$tdataemployee_header [".add"] = true;
$tdataemployee_header [".afterAddAction"] = 1;
$tdataemployee_header [".closePopupAfterAdd"] = 1;
$tdataemployee_header [".afterAddActionDetTable"] = "";

$tdataemployee_header [".list"] = true;

$tdataemployee_header [".import"] = true;

$tdataemployee_header [".exportTo"] = true;

$tdataemployee_header [".delete"] = true;

$tdataemployee_header [".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataemployee_header [".searchSaving"] = false;
//

$tdataemployee_header [".showSearchPanel"] = true;
$tdataemployee_header [".flexibleSearch"] = true;

if (isMobile ())
	$tdataemployee_header [".isUseAjaxSuggest"] = false;
else
	$tdataemployee_header [".isUseAjaxSuggest"] = true;

$tdataemployee_header [".rowHighlite"] = true;

$tdataemployee_header [".addPageEvents"] = true;

// use timepicker for search panel
$tdataemployee_header [".isUseTimeForSearch"] = false;

//$tdataemployee_header [".isUseMainMaps"] = false;

$tdataemployee_header [".detailsLinksOnList"] = "1";

$tdataemployee_header [".allSearchFields"] = array ();
$tdataemployee_header [".filterFields"] = array ();
$tdataemployee_header [".requiredSearchFields"] = array ();

$tdataemployee_header [".allSearchFields"] [] = "Address";
$tdataemployee_header [".allSearchFields"] [] = "EmployeeID";
$tdataemployee_header [".allSearchFields"] [] = "FirstName";
$tdataemployee_header [".allSearchFields"] [] = "LastName";
$tdataemployee_header [".allSearchFields"] [] = "SupervisorTitle";
$tdataemployee_header [".allSearchFields"] [] = "emailID";
$tdataemployee_header [".allSearchFields"] [] = "Role";
$tdataemployee_header [".allSearchFields"] [] = "Type";
$tdataemployee_header [".allSearchFields"] [] = "Location";
$tdataemployee_header [".allSearchFields"] [] = "SupervisorName";
$tdataemployee_header [".allSearchFields"] [] = "InactiveDate";
$tdataemployee_header [".allSearchFields"] [] = "StartDate";
$tdataemployee_header [".allSearchFields"] [] = "EmployeeStatus";
$tdataemployee_header [".allSearchFields"] [] = "Country";
$tdataemployee_header [".allSearchFields"] [] = "JobTitle";

$tdataemployee_header [".googleLikeFields"] = array ();
$tdataemployee_header [".googleLikeFields"] [] = "EmployeeID";
$tdataemployee_header [".googleLikeFields"] [] = "FirstName";
$tdataemployee_header [".googleLikeFields"] [] = "LastName";
$tdataemployee_header [".googleLikeFields"] [] = "emailID";
$tdataemployee_header [".googleLikeFields"] [] = "Type";
$tdataemployee_header [".googleLikeFields"] [] = "SupervisorTitle";
$tdataemployee_header [".googleLikeFields"] [] = "Location";
$tdataemployee_header [".googleLikeFields"] [] = "SupervisorName";
$tdataemployee_header [".googleLikeFields"] [] = "InactiveDate";
$tdataemployee_header [".googleLikeFields"] [] = "StartDate";
$tdataemployee_header [".googleLikeFields"] [] = "EmployeeStatus";
$tdataemployee_header [".googleLikeFields"] [] = "Country";
$tdataemployee_header [".googleLikeFields"] [] = "Address";
$tdataemployee_header [".googleLikeFields"] [] = "Role";
$tdataemployee_header [".googleLikeFields"] [] = "JobTitle";

$tdataemployee_header [".advSearchFields"] = array ();
$tdataemployee_header [".advSearchFields"] [] = "Address";
$tdataemployee_header [".advSearchFields"] [] = "EmployeeID";
$tdataemployee_header [".advSearchFields"] [] = "FirstName";
$tdataemployee_header [".advSearchFields"] [] = "LastName";
$tdataemployee_header [".advSearchFields"] [] = "SupervisorTitle";
$tdataemployee_header [".advSearchFields"] [] = "emailID";
$tdataemployee_header [".advSearchFields"] [] = "Role";
$tdataemployee_header [".advSearchFields"] [] = "Type";
$tdataemployee_header [".advSearchFields"] [] = "Location";
$tdataemployee_header [".advSearchFields"] [] = "SupervisorName";
$tdataemployee_header [".advSearchFields"] [] = "InactiveDate";
$tdataemployee_header [".advSearchFields"] [] = "StartDate";
$tdataemployee_header [".advSearchFields"] [] = "EmployeeStatus";
$tdataemployee_header [".advSearchFields"] [] = "Country";
$tdataemployee_header [".advSearchFields"] [] = "JobTitle";

$tdataemployee_header [".tableType"] = "list";

$tdataemployee_header [".printerPageOrientation"] = 0;
$tdataemployee_header [".nPrinterPageScale"] = 100;

$tdataemployee_header [".nPrinterSplitRecords"] = 40;

$tdataemployee_header [".nPrinterPDFSplitRecords"] = 40;

$tdataemployee_header [".geocodingEnabled"] = false;

// view page pdf

// print page pdf

$tdataemployee_header [".pageSize"] = 10;

$tdataemployee_header [".warnLeavingPages"] = true;

$tstrOrderBy = "ORDER BY FirstName";
if (strlen ( $tstrOrderBy ) && strtolower ( substr ( $tstrOrderBy, 0, 8 ) ) != "order by")
	$tstrOrderBy = "order by " . $tstrOrderBy;
$tdataemployee_header [".strOrderBy"] = $tstrOrderBy;

$tdataemployee_header [".orderindexes"] = array ();
$tdataemployee_header [".orderindexes"] [] = array (
		2,
		(1 ? "ASC" : "DESC"),
		"FirstName" 
);

$tdataemployee_header [".sqlHead"] = "SELECT EmployeeID,  FirstName,  LastName,  concat(`FirstName`, ' ', `LastName`) AS FullName,  emailID,  `Type`,  SupervisorTitle,  Location,  SupervisorName,  InactiveDate,  created_by,  updated_by,  created_date,  updated_date,  StartDate,  EmployeeStatus,  Country,  Zip AS Address,  `Role`,  SupervisorID,  JobTitle";
$tdataemployee_header [".sqlFrom"] = "FROM employee_header";
$tdataemployee_header [".sqlWhereExpr"] = "";
$tdataemployee_header [".sqlTail"] = "";

// fill array of records per page for list and report without group fields
$arrRPP = array ();
$arrRPP [] = 10;
$arrRPP [] = 20;
$arrRPP [] = 30;
$arrRPP [] = 50;
$arrRPP [] = 100;
$arrRPP [] = 500;
$arrRPP [] = - 1;
$tdataemployee_header [".arrRecsPerPage"] = $arrRPP;

// fill array of groups per page for report with group fields
$arrGPP = array ();
$arrGPP [] = 1;
$arrGPP [] = 3;
$arrGPP [] = 5;
$arrGPP [] = 10;
$arrGPP [] = 50;
$arrGPP [] = 100;
$arrGPP [] = - 1;
$tdataemployee_header [".arrGroupsPerPage"] = $arrGPP;

$tableKeysemployee_header = array ();
$tableKeysemployee_header [] = "EmployeeID";
$tdataemployee_header [".Keys"] = $tableKeysemployee_header;

$tdataemployee_header [".listFields"] = array ();
$tdataemployee_header [".listFields"] [] = "EmployeeID";
$tdataemployee_header [".listFields"] [] = "FirstName";
$tdataemployee_header [".listFields"] [] = "LastName";
$tdataemployee_header [".listFields"] [] = "SupervisorTitle";
$tdataemployee_header [".listFields"] [] = "emailID";
$tdataemployee_header [".listFields"] [] = "Role";
$tdataemployee_header [".listFields"] [] = "Type";
$tdataemployee_header [".listFields"] [] = "Location";
$tdataemployee_header [".listFields"] [] = "SupervisorName";
$tdataemployee_header [".listFields"] [] = "InactiveDate";
$tdataemployee_header [".listFields"] [] = "StartDate";
$tdataemployee_header [".listFields"] [] = "EmployeeStatus";
$tdataemployee_header [".listFields"] [] = "JobTitle";

$tdataemployee_header [".hideMobileList"] = array ();

$tdataemployee_header [".viewFields"] = array ();

$tdataemployee_header [".addFields"] = array ();
$tdataemployee_header [".addFields"] [] = "EmployeeID";
$tdataemployee_header [".addFields"] [] = "FirstName";
$tdataemployee_header [".addFields"] [] = "LastName";
$tdataemployee_header [".addFields"] [] = "SupervisorTitle";
$tdataemployee_header [".addFields"] [] = "emailID";
$tdataemployee_header [".addFields"] [] = "Role";
$tdataemployee_header [".addFields"] [] = "Type";
$tdataemployee_header [".addFields"] [] = "Location";
$tdataemployee_header [".addFields"] [] = "SupervisorName";
$tdataemployee_header [".addFields"] [] = "StartDate";
$tdataemployee_header [".addFields"] [] = "EmployeeStatus";
$tdataemployee_header [".addFields"] [] = "Country";
$tdataemployee_header [".addFields"] [] = "JobTitle";
$tdataemployee_header [".addFields"] [] = "Address";

$tdataemployee_header [".masterListFields"] = array ();
$tdataemployee_header [".masterListFields"] [] = "Address";
$tdataemployee_header [".masterListFields"] [] = "FullName";
$tdataemployee_header [".masterListFields"] [] = "EmployeeID";
$tdataemployee_header [".masterListFields"] [] = "FirstName";
$tdataemployee_header [".masterListFields"] [] = "LastName";
$tdataemployee_header [".masterListFields"] [] = "SupervisorTitle";
$tdataemployee_header [".masterListFields"] [] = "emailID";
$tdataemployee_header [".masterListFields"] [] = "Role";
$tdataemployee_header [".masterListFields"] [] = "Type";
$tdataemployee_header [".masterListFields"] [] = "Location";
$tdataemployee_header [".masterListFields"] [] = "SupervisorName";
$tdataemployee_header [".masterListFields"] [] = "InactiveDate";
$tdataemployee_header [".masterListFields"] [] = "StartDate";
$tdataemployee_header [".masterListFields"] [] = "EmployeeStatus";
$tdataemployee_header [".masterListFields"] [] = "Country";
$tdataemployee_header [".masterListFields"] [] = "JobTitle";
$tdataemployee_header [".masterListFields"] [] = "created_by";
$tdataemployee_header [".masterListFields"] [] = "updated_by";
$tdataemployee_header [".masterListFields"] [] = "created_date";
$tdataemployee_header [".masterListFields"] [] = "updated_date";

$tdataemployee_header [".inlineAddFields"] = array ();

$tdataemployee_header [".editFields"] = array ();
$tdataemployee_header [".editFields"] [] = "EmployeeID";
$tdataemployee_header [".editFields"] [] = "FirstName";
$tdataemployee_header [".editFields"] [] = "LastName";
$tdataemployee_header [".editFields"] [] = "SupervisorTitle";
$tdataemployee_header [".editFields"] [] = "emailID";
$tdataemployee_header [".editFields"] [] = "Role";
$tdataemployee_header [".editFields"] [] = "Type";
$tdataemployee_header [".editFields"] [] = "Location";
$tdataemployee_header [".editFields"] [] = "SupervisorName";
$tdataemployee_header [".editFields"] [] = "InactiveDate";
$tdataemployee_header [".editFields"] [] = "StartDate";
$tdataemployee_header [".editFields"] [] = "EmployeeStatus";
$tdataemployee_header [".editFields"] [] = "Country";
$tdataemployee_header [".editFields"] [] = "JobTitle";
$tdataemployee_header [".editFields"] [] = "Address";

$tdataemployee_header [".inlineEditFields"] = array ();

$tdataemployee_header [".exportFields"] = array ();
$tdataemployee_header [".exportFields"] [] = "Address";
$tdataemployee_header [".exportFields"] [] = "EmployeeID";
$tdataemployee_header [".exportFields"] [] = "FirstName";
$tdataemployee_header [".exportFields"] [] = "LastName";
$tdataemployee_header [".exportFields"] [] = "SupervisorTitle";
$tdataemployee_header [".exportFields"] [] = "emailID";
$tdataemployee_header [".exportFields"] [] = "Role";
$tdataemployee_header [".exportFields"] [] = "Type";
$tdataemployee_header [".exportFields"] [] = "Location";
$tdataemployee_header [".exportFields"] [] = "SupervisorName";
$tdataemployee_header [".exportFields"] [] = "InactiveDate";
$tdataemployee_header [".exportFields"] [] = "StartDate";
$tdataemployee_header [".exportFields"] [] = "EmployeeStatus";
$tdataemployee_header [".exportFields"] [] = "Country";
$tdataemployee_header [".exportFields"] [] = "JobTitle";

$tdataemployee_header [".importFields"] = array ();
$tdataemployee_header [".importFields"] [] = "Address";

$tdataemployee_header [".printFields"] = array ();

// EmployeeID
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 1;
$fdata ["strName"] = "EmployeeID";
$fdata ["GoodName"] = "EmployeeID";
$fdata ["ownerTable"] = "employee_header";
$fdata ["Label"] = GetFieldLabel ( "employee_header", "EmployeeID" );
$fdata ["FieldType"] = 200;

$fdata ["AutoInc"] = true;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "EmployeeID";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "EmployeeID";

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
$vdata = array (
		"ViewFormat" => "" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["masterprint"] = $vdata;
// End View Formats

// Begin Edit Formats
$fdata ["EditFormats"] = array ();

$edata = array (
		"EditFormat" => "Readonly" 
);

$edata ["IsRequired"] = true;

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
$edata = array (
		"EditFormat" => "Readonly" 
);

$edata ["IsRequired"] = true;

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
		"EditFormat" => "Text field" 
);

$edata ["IsRequired"] = true;

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["HTML5InuptType"] = "text";

$edata ["EditParams"] = "";
$edata ["EditParams"] .= " maxlength=9";

$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = "IsRequired";

// End validation

$fdata ["EditFormats"] ["add"] = $edata;
$edata = array (
		"EditFormat" => "Readonly" 
);

$edata ["IsRequired"] = true;

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

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

// the end of search options settings

$tdataemployee_header ["EmployeeID"] = $fdata;
// FirstName
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 2;
$fdata ["strName"] = "FirstName";
$fdata ["GoodName"] = "FirstName";
$fdata ["ownerTable"] = "employee_header";
$fdata ["Label"] = GetFieldLabel ( "employee_header", "FirstName" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "FirstName";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "FirstName";

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
$edata ["validateAs"] ["basicValidate"] [] = "IsRequired";

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = false;

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

// the end of search options settings

$tdataemployee_header ["FirstName"] = $fdata;
// LastName
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 3;
$fdata ["strName"] = "LastName";
$fdata ["GoodName"] = "LastName";
$fdata ["ownerTable"] = "employee_header";
$fdata ["Label"] = GetFieldLabel ( "employee_header", "LastName" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "LastName";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "LastName";

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
$edata ["validateAs"] ["basicValidate"] [] = "IsRequired";

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = false;

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

// the end of search options settings

$tdataemployee_header ["LastName"] = $fdata;
// FullName
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 4;
$fdata ["strName"] = "FullName";
$fdata ["GoodName"] = "FullName";
$fdata ["ownerTable"] = "";
$fdata ["Label"] = GetFieldLabel ( "employee_header", "FullName" );
$fdata ["FieldType"] = 200;

$fdata ["strField"] = "FullName";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "concat(`FirstName`, ' ', `LastName`)";

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

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = false;

$tdataemployee_header ["FullName"] = $fdata;
// emailID
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 5;
$fdata ["strName"] = "emailID";
$fdata ["GoodName"] = "emailID";
$fdata ["ownerTable"] = "employee_header";
$fdata ["Label"] = GetFieldLabel ( "employee_header", "emailID" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "emailID";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "emailID";

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
$vdata = array (
		"ViewFormat" => "" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["masterprint"] = $vdata;
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

$edata ["controlWidth"] = 200;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = getJsValidatorName ( "Email" );
$edata ["validateAs"] ["basicValidate"] [] = "IsRequired";

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
$edata = array (
		"EditFormat" => "Text field" 
);

$edata ["IsRequired"] = true;

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["HTML5InuptType"] = "text";

$edata ["EditParams"] = "";

$edata ["controlWidth"] = 200;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = getJsValidatorName ( "Email" );
$edata ["validateAs"] ["basicValidate"] [] = "IsRequired";

// End validation

$fdata ["EditFormats"] ["register"] = $edata;
$edata = array (
		"EditFormat" => "Text field" 
);

$edata ["IsRequired"] = true;

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["HTML5InuptType"] = "text";

$edata ["EditParams"] = "";

$edata ["controlWidth"] = 200;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = getJsValidatorName ( "Email" );
$edata ["validateAs"] ["basicValidate"] [] = "IsRequired";

// End validation

$fdata ["EditFormats"] ["add"] = $edata;
$edata = array (
		"EditFormat" => "Text field" 
);

$edata ["IsRequired"] = true;

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["HTML5InuptType"] = "text";

$edata ["EditParams"] = "";

$edata ["controlWidth"] = 200;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = getJsValidatorName ( "Email" );
$edata ["validateAs"] ["basicValidate"] [] = "IsRequired";

// End validation

$fdata ["EditFormats"] ["search"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = true;

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

// the end of search options settings

$tdataemployee_header ["emailID"] = $fdata;
// Type
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 6;
$fdata ["strName"] = "Type";
$fdata ["GoodName"] = "Type";
$fdata ["ownerTable"] = "employee_header";
$fdata ["Label"] = GetFieldLabel ( "employee_header", "Type" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Type";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "`Type`";

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
$edata ["LookupType"] = 1;
$edata ["LookupTable"] = "yesno";
$edata ["LookupConnId"] = "Tables";
$edata ["autoCompleteFieldsOnEdit"] = 0;
$edata ["autoCompleteFields"] = array ();
$edata ["LCType"] = 4;

$edata ["HorizontalLookup"] = true;

$edata ["LinkField"] = "Answer";
$edata ["LinkFieldType"] = 200;
$edata ["DisplayField"] = "Answer";

$edata ["LookupOrderBy"] = "Answer";

$edata ["LookupDesc"] = true;

$edata ["SimpleAdd"] = true;

// End Lookup Settings

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 80;

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

$tdataemployee_header ["Type"] = $fdata;
// SupervisorTitle
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 7;
$fdata ["strName"] = "SupervisorTitle";
$fdata ["GoodName"] = "SupervisorTitle";
$fdata ["ownerTable"] = "employee_header";
$fdata ["Label"] = GetFieldLabel ( "employee_header", "SupervisorTitle" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "SupervisorTitle";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "SupervisorTitle";

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
$vdata = array (
		"ViewFormat" => "" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["masterprint"] = $vdata;
// End View Formats

// Begin Edit Formats
$fdata ["EditFormats"] = array ();

$edata = array (
		"EditFormat" => "Lookup wizard" 
);

// Begin Lookup settings
$edata ["LookupType"] = 1;
$edata ["LookupTable"] = "yesno";
$edata ["LookupConnId"] = "Tables";
$edata ["autoCompleteFieldsOnEdit"] = 0;
$edata ["autoCompleteFields"] = array ();
$edata ["LCType"] = 4;

$edata ["HorizontalLookup"] = true;

$edata ["LinkField"] = "Answer";
$edata ["LinkFieldType"] = 200;
$edata ["DisplayField"] = "Answer";

$edata ["LookupOrderBy"] = "Answer";

$edata ["LookupDesc"] = true;

$edata ["SimpleAdd"] = true;

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
$edata = array (
		"EditFormat" => "Lookup wizard" 
);

// Begin Lookup settings
$edata ["LookupType"] = 1;
$edata ["LookupTable"] = "yesno";
$edata ["LookupConnId"] = "Tables";
$edata ["autoCompleteFieldsOnEdit"] = 0;
$edata ["autoCompleteFields"] = array ();
$edata ["LCType"] = 4;

$edata ["HorizontalLookup"] = true;

$edata ["LinkField"] = "Answer";
$edata ["LinkFieldType"] = 200;
$edata ["DisplayField"] = "Answer";

$edata ["LookupOrderBy"] = "Answer";

$edata ["LookupDesc"] = true;

$edata ["SimpleAdd"] = true;

// End Lookup Settings

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
		"EditFormat" => "Lookup wizard" 
);

// Begin Lookup settings
$edata ["LookupType"] = 1;
$edata ["LookupTable"] = "yesno";
$edata ["LookupConnId"] = "Tables";
$edata ["autoCompleteFieldsOnEdit"] = 0;
$edata ["autoCompleteFields"] = array ();
$edata ["LCType"] = 4;

$edata ["HorizontalLookup"] = true;

$edata ["LinkField"] = "Answer";
$edata ["LinkFieldType"] = 200;
$edata ["DisplayField"] = "Answer";

$edata ["LookupOrderBy"] = "Answer";

$edata ["LookupDesc"] = true;

$edata ["SimpleAdd"] = true;

// End Lookup Settings

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
		"EditFormat" => "Lookup wizard" 
);

// Begin Lookup settings
$edata ["LookupType"] = 1;
$edata ["LookupTable"] = "yesno";
$edata ["LookupConnId"] = "Tables";
$edata ["autoCompleteFieldsOnEdit"] = 0;
$edata ["autoCompleteFields"] = array ();
$edata ["LCType"] = 4;

$edata ["HorizontalLookup"] = true;

$edata ["LinkField"] = "Answer";
$edata ["LinkFieldType"] = 200;
$edata ["DisplayField"] = "Answer";

$edata ["LookupOrderBy"] = "Answer";

$edata ["LookupDesc"] = true;

$edata ["SimpleAdd"] = true;

// End Lookup Settings

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

$tdataemployee_header ["SupervisorTitle"] = $fdata;
// Location
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 8;
$fdata ["strName"] = "Location";
$fdata ["GoodName"] = "Location";
$fdata ["ownerTable"] = "employee_header";
$fdata ["Label"] = GetFieldLabel ( "employee_header", "Location" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bAdvancedSearch"] = true;

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
		"EditFormat" => "Lookup wizard" 
);

// Begin Lookup settings
$edata ["LookupType"] = 1;
$edata ["LookupTable"] = "location";
$edata ["LookupConnId"] = "Tables";
$edata ["autoCompleteFieldsOnEdit"] = 0;
$edata ["autoCompleteFields"] = array ();
$edata ["LCType"] = 0;

$edata ["LinkField"] = "Location";
$edata ["LinkFieldType"] = 200;
$edata ["DisplayField"] = "Location";

$edata ["LookupOrderBy"] = "Location";

$edata ["SimpleAdd"] = true;

$edata ["SelectSize"] = 1;

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
$fdata ["defaultSearchOption"] = "Equals";

// the end of search options settings

$tdataemployee_header ["Location"] = $fdata;
// SupervisorName
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 9;
$fdata ["strName"] = "SupervisorName";
$fdata ["GoodName"] = "SupervisorName";
$fdata ["ownerTable"] = "employee_header";
$fdata ["Label"] = GetFieldLabel ( "employee_header", "SupervisorName" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "SupervisorName";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "SupervisorName";

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

$edata ["LinkField"] = "FullName";
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

$tdataemployee_header ["SupervisorName"] = $fdata;
// InactiveDate
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 10;
$fdata ["strName"] = "InactiveDate";
$fdata ["GoodName"] = "InactiveDate";
$fdata ["ownerTable"] = "employee_header";
$fdata ["Label"] = GetFieldLabel ( "employee_header", "InactiveDate" );
$fdata ["FieldType"] = 7;

$fdata ["bListPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "InactiveDate";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "InactiveDate";

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

$edata ["DateEditType"] = 11;
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

$tdataemployee_header ["InactiveDate"] = $fdata;
// created_by
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 11;
$fdata ["strName"] = "created_by";
$fdata ["GoodName"] = "created_by";
$fdata ["ownerTable"] = "employee_header";
$fdata ["Label"] = GetFieldLabel ( "employee_header", "created_by" );
$fdata ["FieldType"] = 200;

$fdata ["strField"] = "created_by";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "created_by";

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

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = false;

$tdataemployee_header ["created_by"] = $fdata;
// updated_by
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 12;
$fdata ["strName"] = "updated_by";
$fdata ["GoodName"] = "updated_by";
$fdata ["ownerTable"] = "employee_header";
$fdata ["Label"] = GetFieldLabel ( "employee_header", "updated_by" );
$fdata ["FieldType"] = 200;

$fdata ["strField"] = "updated_by";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "updated_by";

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

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = false;

$tdataemployee_header ["updated_by"] = $fdata;
// created_date
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 13;
$fdata ["strName"] = "created_date";
$fdata ["GoodName"] = "created_date";
$fdata ["ownerTable"] = "employee_header";
$fdata ["Label"] = GetFieldLabel ( "employee_header", "created_date" );
$fdata ["FieldType"] = 135;

$fdata ["strField"] = "created_date";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "created_date";

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

$tdataemployee_header ["created_date"] = $fdata;
// updated_date
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 14;
$fdata ["strName"] = "updated_date";
$fdata ["GoodName"] = "updated_date";
$fdata ["ownerTable"] = "employee_header";
$fdata ["Label"] = GetFieldLabel ( "employee_header", "updated_date" );
$fdata ["FieldType"] = 135;

$fdata ["strField"] = "updated_date";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "updated_date";

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

$tdataemployee_header ["updated_date"] = $fdata;
// StartDate
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 15;
$fdata ["strName"] = "StartDate";
$fdata ["GoodName"] = "StartDate";
$fdata ["ownerTable"] = "employee_header";
$fdata ["Label"] = GetFieldLabel ( "employee_header", "StartDate" );
$fdata ["FieldType"] = 7;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bAdvancedSearch"] = true;

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
$vdata = array (
		"ViewFormat" => "Short Date" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["export"] = $vdata;
$vdata = array (
		"ViewFormat" => "Short Date" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["masterprint"] = $vdata;
// End View Formats

// Begin Edit Formats
$fdata ["EditFormats"] = array ();

$edata = array (
		"EditFormat" => "Readonly" 
);

$edata ["IsRequired"] = true;

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

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

$edata ["controlWidth"] = 143;

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

$edata ["controlWidth"] = 143;

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

$tdataemployee_header ["StartDate"] = $fdata;
// EmployeeStatus
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 16;
$fdata ["strName"] = "EmployeeStatus";
$fdata ["GoodName"] = "EmployeeStatus";
$fdata ["ownerTable"] = "employee_header";
$fdata ["Label"] = GetFieldLabel ( "employee_header", "EmployeeStatus" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "EmployeeStatus";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "EmployeeStatus";

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
		"EditFormat" => "Lookup wizard" 
);

// Begin Lookup settings
$edata ["LookupType"] = 1;
$edata ["LookupTable"] = "yesno";
$edata ["LookupConnId"] = "Tables";
$edata ["autoCompleteFieldsOnEdit"] = 0;
$edata ["autoCompleteFields"] = array ();
$edata ["LCType"] = 4;

$edata ["HorizontalLookup"] = true;

$edata ["LinkField"] = "Answer";
$edata ["LinkFieldType"] = 200;
$edata ["DisplayField"] = "Answer";

$edata ["LookupOrderBy"] = "Answer";

$edata ["LookupDesc"] = true;

$edata ["SimpleAdd"] = true;

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
$edata = array (
		"EditFormat" => "Lookup wizard" 
);

// Begin Lookup settings
$edata ["LookupType"] = 1;
$edata ["LookupTable"] = "contractstat";
$edata ["LookupConnId"] = "Tables";
$edata ["autoCompleteFieldsOnEdit"] = 0;
$edata ["autoCompleteFields"] = array ();
$edata ["LCType"] = 0;

$edata ["LinkField"] = "ContractStatus";
$edata ["LinkFieldType"] = 200;
$edata ["DisplayField"] = "ContractStatus";

$edata ["LookupOrderBy"] = "ContractStatus";

$edata ["SimpleAdd"] = true;

$edata ["SelectSize"] = 1;

// End Lookup Settings

$edata ["IsRequired"] = true;

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = "IsRequired";

// End validation

$fdata ["EditFormats"] ["register"] = $edata;
$edata = array (
		"EditFormat" => "Lookup wizard" 
);

// Begin Lookup settings
$edata ["LookupType"] = 1;
$edata ["LookupTable"] = "yesno";
$edata ["LookupConnId"] = "Tables";
$edata ["autoCompleteFieldsOnEdit"] = 0;
$edata ["autoCompleteFields"] = array ();
$edata ["LCType"] = 4;

$edata ["HorizontalLookup"] = true;

$edata ["LinkField"] = "Answer";
$edata ["LinkFieldType"] = 200;
$edata ["DisplayField"] = "Answer";

$edata ["LookupOrderBy"] = "Answer";

$edata ["LookupDesc"] = true;

$edata ["SimpleAdd"] = true;

// End Lookup Settings

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 110;

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
$edata ["LookupType"] = 1;
$edata ["LookupTable"] = "contractstat";
$edata ["LookupConnId"] = "Tables";
$edata ["autoCompleteFieldsOnEdit"] = 0;
$edata ["autoCompleteFields"] = array ();
$edata ["LCType"] = 0;

$edata ["LinkField"] = "ContractStatus";
$edata ["LinkFieldType"] = 200;
$edata ["DisplayField"] = "ContractStatus";

$edata ["LookupOrderBy"] = "ContractStatus";

$edata ["SimpleAdd"] = true;

$edata ["SelectSize"] = 1;

// End Lookup Settings

$edata ["IsRequired"] = true;

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 143;

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

$tdataemployee_header ["EmployeeStatus"] = $fdata;
// Country
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 17;
$fdata ["strName"] = "Country";
$fdata ["GoodName"] = "Country";
$fdata ["ownerTable"] = "employee_header";
$fdata ["Label"] = GetFieldLabel ( "employee_header", "Country" );
$fdata ["FieldType"] = 200;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Country";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Country";

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
$edata ["LookupType"] = 1;
$edata ["LookupTable"] = "tbl_countries";
$edata ["LookupConnId"] = "Tables";
$edata ["autoCompleteFieldsOnEdit"] = 0;
$edata ["autoCompleteFields"] = array ();
$edata ["LCType"] = 0;

$edata ["LinkField"] = "Countries";
$edata ["LinkFieldType"] = 200;
$edata ["DisplayField"] = "Countries";

$edata ["LookupOrderBy"] = "Countries";

$edata ["SimpleAdd"] = true;

$edata ["SelectSize"] = 1;

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

$tdataemployee_header ["Country"] = $fdata;
// Address
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 18;
$fdata ["strName"] = "Address";
$fdata ["GoodName"] = "Address";
$fdata ["ownerTable"] = "employee_header";
$fdata ["Label"] = GetFieldLabel ( "employee_header", "Address" );
$fdata ["FieldType"] = 200;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Zip";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Zip";

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

$tdataemployee_header ["Address"] = $fdata;
// Role
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 19;
$fdata ["strName"] = "Role";
$fdata ["GoodName"] = "Role";
$fdata ["ownerTable"] = "employee_header";
$fdata ["Label"] = GetFieldLabel ( "employee_header", "Role" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bAdvancedSearch"] = true;

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
$vdata = array (
		"ViewFormat" => "" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["masterprint"] = $vdata;
// End View Formats

// Begin Edit Formats
$fdata ["EditFormats"] = array ();

$edata = array (
		"EditFormat" => "Lookup wizard" 
);

// Begin Lookup settings
$edata ["LookupType"] = 2;
$edata ["LookupTable"] = "tbl_role";
$edata ["autoCompleteFieldsOnEdit"] = 0;
$edata ["autoCompleteFields"] = array ();
$edata ["LCType"] = 0;

$edata ["LookupUnique"] = true;

$edata ["LinkField"] = "Role";
$edata ["LinkFieldType"] = 200;
$edata ["DisplayField"] = "Role";

$edata ["LookupOrderBy"] = "Role";

$edata ["SelectSize"] = 1;

// End Lookup Settings

$edata ["IsRequired"] = true;

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = "IsRequired";

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
$edata = array (
		"EditFormat" => "Lookup wizard" 
);

// Begin Lookup settings
$edata ["LookupType"] = 2;
$edata ["LookupTable"] = "tbl_role";
$edata ["autoCompleteFieldsOnEdit"] = 0;
$edata ["autoCompleteFields"] = array ();
$edata ["LCType"] = 0;

$edata ["LookupUnique"] = true;

$edata ["LinkField"] = "Role";
$edata ["LinkFieldType"] = 200;
$edata ["DisplayField"] = "Role";

$edata ["LookupOrderBy"] = "Role";

$edata ["SelectSize"] = 1;

// End Lookup Settings

$edata ["IsRequired"] = true;

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = "IsRequired";

// End validation

$fdata ["EditFormats"] ["register"] = $edata;
$edata = array (
		"EditFormat" => "Lookup wizard" 
);

// Begin Lookup settings
$edata ["LookupType"] = 2;
$edata ["LookupTable"] = "tbl_role";
$edata ["autoCompleteFieldsOnEdit"] = 0;
$edata ["autoCompleteFields"] = array ();
$edata ["LCType"] = 0;

$edata ["LookupUnique"] = true;

$edata ["LinkField"] = "Role";
$edata ["LinkFieldType"] = 200;
$edata ["DisplayField"] = "Role";

$edata ["LookupOrderBy"] = "Role";

$edata ["SelectSize"] = 1;

// End Lookup Settings

$edata ["IsRequired"] = true;

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = "IsRequired";

// End validation

$fdata ["EditFormats"] ["add"] = $edata;
$edata = array (
		"EditFormat" => "Lookup wizard" 
);

// Begin Lookup settings
$edata ["LookupType"] = 2;
$edata ["LookupTable"] = "tbl_role";
$edata ["autoCompleteFieldsOnEdit"] = 0;
$edata ["autoCompleteFields"] = array ();
$edata ["LCType"] = 0;

$edata ["LookupUnique"] = true;

$edata ["LinkField"] = "Role";
$edata ["LinkFieldType"] = 200;
$edata ["DisplayField"] = "Role";

$edata ["LookupOrderBy"] = "Role";

$edata ["SelectSize"] = 1;

// End Lookup Settings

$edata ["IsRequired"] = true;

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 143;

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

$tdataemployee_header ["Role"] = $fdata;
// SupervisorID
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 20;
$fdata ["strName"] = "SupervisorID";
$fdata ["GoodName"] = "SupervisorID";
$fdata ["ownerTable"] = "employee_header";
$fdata ["Label"] = GetFieldLabel ( "employee_header", "SupervisorID" );
$fdata ["FieldType"] = 200;

$fdata ["strField"] = "SupervisorID";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "SupervisorID";

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

$tdataemployee_header ["SupervisorID"] = $fdata;
// JobTitle
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 21;
$fdata ["strName"] = "JobTitle";
$fdata ["GoodName"] = "JobTitle";
$fdata ["ownerTable"] = "employee_header";
$fdata ["Label"] = GetFieldLabel ( "employee_header", "JobTitle" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "JobTitle";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "JobTitle";

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
$edata ["EditParams"] .= " maxlength=100";

$edata ["controlWidth"] = 380;

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

$tdataemployee_header ["JobTitle"] = $fdata;

$tables_data ["employee_header"] = &$tdataemployee_header;
$field_labels ["employee_header"] = &$fieldLabelsemployee_header;
$fieldToolTips ["employee_header"] = &$fieldToolTipsemployee_header;
$page_titles ["employee_header"] = &$pageTitlesemployee_header;

// -----------------start prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData ["employee_header"] = array ();
// employeeskills

$dIndex = 0;
$detailsParam = array ();
$detailsParam ["dDataSourceTable"] = "employeeskills";
$detailsParam ["dOriginalTable"] = "employeeskills";
$detailsParam ["dType"] = PAGE_LIST;
$detailsParam ["dShortTable"] = "employeeskills";
$detailsParam ["dCaptionTable"] = GetTableCaption ( "employeeskills" );
$detailsParam ["masterKeys"] = array ();
$detailsParam ["detailKeys"] = array ();
$detailsParam ["dispChildCount"] = "1";
$detailsParam ["hideChild"] = true;
$detailsParam ["previewOnList"] = "0";
$detailsParam ["previewOnAdd"] = 1;
$detailsParam ["previewOnEdit"] = 1;
$detailsParam ["previewOnView"] = 1;

$detailsTablesData ["employee_header"] [$dIndex] = $detailsParam;

$detailsTablesData ["employee_header"] [$dIndex] ["masterKeys"] = array ();

$detailsTablesData ["employee_header"] [$dIndex] ["masterKeys"] [] = "EmployeeID";

$detailsTablesData ["employee_header"] [$dIndex] ["detailKeys"] = array ();

$detailsTablesData ["employee_header"] [$dIndex] ["detailKeys"] [] = "EmployeeID";

// tables which are master tables for current table (detail)
$masterTablesData ["employee_header"] = array ();

// -----------------end prepare master-details data arrays ------------------------------//

require_once (getabspath ( "classes/sql.php" ));
function createSqlQuery_employee_header() {
	
	if( false == is_null( $_SESSION['UserName'] ) ) {
		$userName = $_SESSION['UserName'];
	}
	
	if( false == is_null( $_SESSION['UserID']) ) {
		$userID = $_SESSION["UserID"];
		$groupID = $_SESSION["UserRights"][$userID][".Groups"][0];
	}

	$proto1 = array ();
	$proto1 ["m_strHead"] = "SELECT";
	$proto1 ["m_strFieldList"] = "employee_header.EmployeeID, FirstName,  LastName,  concat(employee_header.`FirstName`, ' ', employee_header.`LastName`) AS FullName,  employee_header.emailID,  employee_header.`Type`,  employee_header.SupervisorTitle,  employee_header.Location,  employee_header.SupervisorName,  employee_header.InactiveDate,  employee_header.created_by,  updated_by,  created_date,  updated_date,  StartDate,  EmployeeStatus,  Country,  Zip AS Address,  `Role`,  SupervisorID,  JobTitle";
	$proto1 ["m_strFrom"] = "FROM employee_header";
	$proto1 ["m_strWhere"] = "";	
	$proto1 ["m_strOrderBy"] = "ORDER BY FirstName";
	$proto1 ["m_strTail"] = "";
	$proto1 ["cipherer"] = null;
	$proto2 = array ();
	if( !IsAdmin() && '5' == $groupID ) {
		$proto2 ["m_sql"] = "";
		$proto2 ["m_uniontype"] = "SQLL_UNKNOWN";
		$obj = new SQLNonParsed ( array (
				"m_sql" => ""
		) );
	} elseif( !IsAdmin() && ( '6' == $groupID || '7' == $groupID ) ) {
		$proto2 ["m_sql"] = "concat(employee_header.`FirstName`, ' ', employee_header.`LastName`) = '" . $userName ."' OR employee_header.SupervisorName = '" . $userName . "'";
		$proto2 ["m_uniontype"] = "SQLL_OR";
		$obj = new SQLNonParsed ( array (
				"m_sql" => "concat(employee_header.`FirstName`, ' ', employee_header.`LastName`) = '" . $userName ."' OR employee_header.SupervisorName = '" . $userName . "'"
		) );
	} elseif( !IsAdmin() && '1' == $groupID ) {
		$proto2 ["m_sql"] = "concat(employee_header.`FirstName`, ' ', employee_header.`LastName`) = '" . $userName ."'";
		$proto2 ["m_uniontype"] = "SQLL_AND";
		$obj = new SQLNonParsed ( array (
				"m_sql" => "concat(employee_header.`FirstName`, ' ', employee_header.`LastName`) = '" . $userName ."'"
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
			"m_strName" => "EmployeeID",
			"m_strTable" => "employee_header",
			"m_srcTableName" => "employee_header" 
	) );
	
	$proto6 ["m_sql"] = "employee_header.EmployeeID";
	$proto6 ["m_srcTableName"] = "employee_header";
	$proto6 ["m_expr"] = $obj;
	$proto6 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto6 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto8 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "FirstName",
			"m_strTable" => "employee_header",
			"m_srcTableName" => "employee_header" 
	) );
	
	$proto8 ["m_sql"] = "FirstName";
	$proto8 ["m_srcTableName"] = "employee_header";
	$proto8 ["m_expr"] = $obj;
	$proto8 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto8 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto10 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "LastName",
			"m_strTable" => "employee_header",
			"m_srcTableName" => "employee_header" 
	) );
	
	$proto10 ["m_sql"] = "LastName";
	$proto10 ["m_srcTableName"] = "employee_header";
	$proto10 ["m_expr"] = $obj;
	$proto10 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto10 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto12 = array ();
	$proto13 = array ();
	$proto13 ["m_functiontype"] = "SQLF_CUSTOM";
	$proto13 ["m_arguments"] = array ();
	$obj = new SQLNonParsed ( array (
			"m_sql" => "`FirstName`" 
	) );
	
	$proto13 ["m_arguments"] [] = $obj;
	$obj = new SQLNonParsed ( array (
			"m_sql" => "' '" 
	) );
	
	$proto13 ["m_arguments"] [] = $obj;
	$obj = new SQLNonParsed ( array (
			"m_sql" => "`LastName`" 
	) );
	
	$proto13 ["m_arguments"] [] = $obj;
	$proto13 ["m_strFunctionName"] = "concat";
	$obj = new SQLFunctionCall ( $proto13 );
	
	$proto12 ["m_sql"] = "concat(`FirstName`, ' ', `LastName`)";
	$proto12 ["m_srcTableName"] = "employee_header";
	$proto12 ["m_expr"] = $obj;
	$proto12 ["m_alias"] = "FullName";
	$obj = new SQLFieldListItem ( $proto12 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto17 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "emailID",
			"m_strTable" => "employee_header",
			"m_srcTableName" => "employee_header" 
	) );
	
	$proto17 ["m_sql"] = "emailID";
	$proto17 ["m_srcTableName"] = "employee_header";
	$proto17 ["m_expr"] = $obj;
	$proto17 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto17 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto19 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Type",
			"m_strTable" => "employee_header",
			"m_srcTableName" => "employee_header" 
	) );
	
	$proto19 ["m_sql"] = "`Type`";
	$proto19 ["m_srcTableName"] = "employee_header";
	$proto19 ["m_expr"] = $obj;
	$proto19 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto19 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto21 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "SupervisorTitle",
			"m_strTable" => "employee_header",
			"m_srcTableName" => "employee_header" 
	) );
	
	$proto21 ["m_sql"] = "SupervisorTitle";
	$proto21 ["m_srcTableName"] = "employee_header";
	$proto21 ["m_expr"] = $obj;
	$proto21 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto21 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto23 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Location",
			"m_strTable" => "employee_header",
			"m_srcTableName" => "employee_header" 
	) );
	
	$proto23 ["m_sql"] = "Location";
	$proto23 ["m_srcTableName"] = "employee_header";
	$proto23 ["m_expr"] = $obj;
	$proto23 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto23 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto25 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "SupervisorName",
			"m_strTable" => "employee_header",
			"m_srcTableName" => "employee_header" 
	) );
	
	$proto25 ["m_sql"] = "SupervisorName";
	$proto25 ["m_srcTableName"] = "employee_header";
	$proto25 ["m_expr"] = $obj;
	$proto25 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto25 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto27 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "InactiveDate",
			"m_strTable" => "employee_header",
			"m_srcTableName" => "employee_header" 
	) );
	
	$proto27 ["m_sql"] = "InactiveDate";
	$proto27 ["m_srcTableName"] = "employee_header";
	$proto27 ["m_expr"] = $obj;
	$proto27 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto27 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto29 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "created_by",
			"m_strTable" => "employee_header",
			"m_srcTableName" => "employee_header" 
	) );
	
	$proto29 ["m_sql"] = "created_by";
	$proto29 ["m_srcTableName"] = "employee_header";
	$proto29 ["m_expr"] = $obj;
	$proto29 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto29 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto31 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "updated_by",
			"m_strTable" => "employee_header",
			"m_srcTableName" => "employee_header" 
	) );
	
	$proto31 ["m_sql"] = "updated_by";
	$proto31 ["m_srcTableName"] = "employee_header";
	$proto31 ["m_expr"] = $obj;
	$proto31 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto31 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto33 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "created_date",
			"m_strTable" => "employee_header",
			"m_srcTableName" => "employee_header" 
	) );
	
	$proto33 ["m_sql"] = "created_date";
	$proto33 ["m_srcTableName"] = "employee_header";
	$proto33 ["m_expr"] = $obj;
	$proto33 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto33 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto35 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "updated_date",
			"m_strTable" => "employee_header",
			"m_srcTableName" => "employee_header" 
	) );
	
	$proto35 ["m_sql"] = "updated_date";
	$proto35 ["m_srcTableName"] = "employee_header";
	$proto35 ["m_expr"] = $obj;
	$proto35 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto35 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto37 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "StartDate",
			"m_strTable" => "employee_header",
			"m_srcTableName" => "employee_header" 
	) );
	
	$proto37 ["m_sql"] = "StartDate";
	$proto37 ["m_srcTableName"] = "employee_header";
	$proto37 ["m_expr"] = $obj;
	$proto37 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto37 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto39 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "EmployeeStatus",
			"m_strTable" => "employee_header",
			"m_srcTableName" => "employee_header" 
	) );
	
	$proto39 ["m_sql"] = "EmployeeStatus";
	$proto39 ["m_srcTableName"] = "employee_header";
	$proto39 ["m_expr"] = $obj;
	$proto39 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto39 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto41 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Country",
			"m_strTable" => "employee_header",
			"m_srcTableName" => "employee_header" 
	) );
	
	$proto41 ["m_sql"] = "Country";
	$proto41 ["m_srcTableName"] = "employee_header";
	$proto41 ["m_expr"] = $obj;
	$proto41 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto41 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto43 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Zip",
			"m_strTable" => "employee_header",
			"m_srcTableName" => "employee_header" 
	) );
	
	$proto43 ["m_sql"] = "Zip";
	$proto43 ["m_srcTableName"] = "employee_header";
	$proto43 ["m_expr"] = $obj;
	$proto43 ["m_alias"] = "Address";
	$obj = new SQLFieldListItem ( $proto43 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto45 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Role",
			"m_strTable" => "employee_header",
			"m_srcTableName" => "employee_header" 
	) );
	
	$proto45 ["m_sql"] = "`Role`";
	$proto45 ["m_srcTableName"] = "employee_header";
	$proto45 ["m_expr"] = $obj;
	$proto45 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto45 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto47 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "SupervisorID",
			"m_strTable" => "employee_header",
			"m_srcTableName" => "employee_header" 
	) );
	
	$proto47 ["m_sql"] = "SupervisorID";
	$proto47 ["m_srcTableName"] = "employee_header";
	$proto47 ["m_expr"] = $obj;
	$proto47 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto47 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto49 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "JobTitle",
			"m_strTable" => "employee_header",
			"m_srcTableName" => "employee_header" 
	) );
	
	$proto49 ["m_sql"] = "JobTitle";
	$proto49 ["m_srcTableName"] = "employee_header";
	$proto49 ["m_expr"] = $obj;
	$proto49 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto49 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto1 ["m_fromlist"] = array ();
	$proto51 = array ();
	$proto51 ["m_link"] = "SQLL_MAIN";
	$proto52 = array ();
	$proto52 ["m_strName"] = "employee_header";
	$proto52 ["m_srcTableName"] = "employee_header";
	$proto52 ["m_columns"] = array ();
	$proto52 ["m_columns"] [] = "EmployeeID";
	$proto52 ["m_columns"] [] = "FirstName";
	$proto52 ["m_columns"] [] = "LastName";
	$proto52 ["m_columns"] [] = "emailID";
	$proto52 ["m_columns"] [] = "Type";
	$proto52 ["m_columns"] [] = "SupervisorTitle";
	$proto52 ["m_columns"] [] = "Location";
	$proto52 ["m_columns"] [] = "SupervisorName";
	$proto52 ["m_columns"] [] = "InactiveDate";
	$proto52 ["m_columns"] [] = "created_by";
	$proto52 ["m_columns"] [] = "updated_by";
	$proto52 ["m_columns"] [] = "created_date";
	$proto52 ["m_columns"] [] = "updated_date";
	$proto52 ["m_columns"] [] = "StartDate";
	$proto52 ["m_columns"] [] = "EmployeeStatus";
	$proto52 ["m_columns"] [] = "Country";
	$proto52 ["m_columns"] [] = "Zip";
	$proto52 ["m_columns"] [] = "Role";
	$proto52 ["m_columns"] [] = "SupervisorID";
	$proto52 ["m_columns"] [] = "JobTitle";
	$obj = new SQLTable ( $proto52 );
	
	$proto51 ["m_table"] = $obj;
	$proto51 ["m_sql"] = "employee_header";
	$proto51 ["m_alias"] = "";
	$proto51 ["m_srcTableName"] = "employee_header";
	$proto53 = array ();
	$proto53 ["m_sql"] = "";
	$proto53 ["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed ( array (
			"m_sql" => "" 
	) );
	
	$proto53 ["m_column"] = $obj;
	$proto53 ["m_contained"] = array ();
	$proto53 ["m_strCase"] = "";
	$proto53 ["m_havingmode"] = false;
	$proto53 ["m_inBrackets"] = false;
	$proto53 ["m_useAlias"] = false;
	$obj = new SQLLogicalExpr ( $proto53 );
	
	$proto51 ["m_joinon"] = $obj;
	$obj = new SQLFromListItem ( $proto51 );
	
	$proto1 ["m_fromlist"] [] = $obj;
	$proto1 ["m_groupby"] = array ();
	$proto1 ["m_orderby"] = array ();
	$proto55 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "FirstName",
			"m_strTable" => "employee_header",
			"m_srcTableName" => "employee_header" 
	) );
	
	$proto55 ["m_column"] = $obj;
	$proto55 ["m_bAsc"] = 1;
	$proto55 ["m_nColumn"] = 0;
	$obj = new SQLOrderByItem ( $proto55 );
	
	$proto1 ["m_orderby"] [] = $obj;
	$proto1 ["m_srcTableName"] = "employee_header";
	$obj = new SQLQuery ( $proto1 );
	
	return $obj;
}
$queryData_employee_header = createSqlQuery_employee_header ();

$tdataemployee_header [".sqlquery"] = $queryData_employee_header;

include_once (getabspath ( "include/employee_header_events.php" ));
$tableEvents ["employee_header"] = new eventclass_employee_header ();
$tdataemployee_header [".hasEvents"] = true;

?>