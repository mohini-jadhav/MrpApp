<?php
require_once (getabspath ( "classes/cipherer.php" ));

$tdatacustomer_resource_allocation = array ();
$tdatacustomer_resource_allocation [".truncateText"] = true;
$tdatacustomer_resource_allocation [".NumberOfChars"] = 60;
$tdatacustomer_resource_allocation [".ShortName"] = "customer_resource_allocation";
$tdatacustomer_resource_allocation [".OwnerID"] = "";
$tdatacustomer_resource_allocation [".OriginalTable"] = "customer_resource_allocation";

// field labels
$fieldLabelscustomer_resource_allocation = array ();
$fieldToolTipscustomer_resource_allocation = array ();
$pageTitlescustomer_resource_allocation = array ();

if (mlang_getcurrentlang () == "English") {
	$fieldLabelscustomer_resource_allocation ["English"] = array ();
	$fieldToolTipscustomer_resource_allocation ["English"] = array ();
	$pageTitlescustomer_resource_allocation ["English"] = array ();
	$fieldLabelscustomer_resource_allocation ["English"] ["Created_By"] = "Created By";
	$fieldToolTipscustomer_resource_allocation ["English"] ["Created_By"] = "";
	$fieldLabelscustomer_resource_allocation ["English"] ["Created_date"] = "Created Date";
	$fieldToolTipscustomer_resource_allocation ["English"] ["Created_date"] = "";
	$fieldLabelscustomer_resource_allocation ["English"] ["Updated_by"] = "Updated By";
	$fieldToolTipscustomer_resource_allocation ["English"] ["Updated_by"] = "";
	$fieldLabelscustomer_resource_allocation ["English"] ["updated_date"] = "Updated Date";
	$fieldToolTipscustomer_resource_allocation ["English"] ["updated_date"] = "";
	$fieldLabelscustomer_resource_allocation ["English"] ["Remarks"] = "Remarks";
	$fieldToolTipscustomer_resource_allocation ["English"] ["Remarks"] = "";
	$fieldLabelscustomer_resource_allocation ["English"] ["oracle_id"] = "Oracle Id";
	$fieldToolTipscustomer_resource_allocation ["English"] ["oracle_id"] = "";
	$fieldLabelscustomer_resource_allocation ["English"] ["EmployeeID"] = "Employee ID";
	$fieldToolTipscustomer_resource_allocation ["English"] ["EmployeeID"] = "";
	$fieldLabelscustomer_resource_allocation ["English"] ["Role_lookup_id"] = "Role Lookup Id";
	$fieldToolTipscustomer_resource_allocation ["English"] ["Role_lookup_id"] = "";
	$fieldLabelscustomer_resource_allocation ["English"] ["Start_date"] = "Start Date";
	$fieldToolTipscustomer_resource_allocation ["English"] ["Start_date"] = "";
	$fieldLabelscustomer_resource_allocation ["English"] ["End_date"] = "End Date";
	$fieldToolTipscustomer_resource_allocation ["English"] ["End_date"] = "";
	$fieldLabelscustomer_resource_allocation ["English"] ["Standard_allocation"] = "Standard Allocation";
	$fieldToolTipscustomer_resource_allocation ["English"] ["Standard_allocation"] = "";
	$fieldLabelscustomer_resource_allocation ["English"] ["override_allocation"] = "Override Allocation";
	$fieldToolTipscustomer_resource_allocation ["English"] ["override_allocation"] = "";
	if (count ( $fieldToolTipscustomer_resource_allocation ["English"] ))
		$tdatacustomer_resource_allocation [".isUseToolTips"] = true;
}
if (mlang_getcurrentlang () == "") {
	$fieldLabelscustomer_resource_allocation [""] = array ();
	$fieldToolTipscustomer_resource_allocation [""] = array ();
	$pageTitlescustomer_resource_allocation [""] = array ();
	if (count ( $fieldToolTipscustomer_resource_allocation [""] ))
		$tdatacustomer_resource_allocation [".isUseToolTips"] = true;
}

$tdatacustomer_resource_allocation [".NCSearch"] = true;

$tdatacustomer_resource_allocation [".shortTableName"] = "customer_resource_allocation";
$tdatacustomer_resource_allocation [".nSecOptions"] = 0;
$tdatacustomer_resource_allocation [".recsPerRowList"] = 1;
$tdatacustomer_resource_allocation [".recsPerRowPrint"] = 1;
$tdatacustomer_resource_allocation [".mainTableOwnerID"] = "";
$tdatacustomer_resource_allocation [".moveNext"] = 0;
$tdatacustomer_resource_allocation [".entityType"] = 0;

$tdatacustomer_resource_allocation [".strOriginalTableName"] = "customer_resource_allocation";

$tdatacustomer_resource_allocation [".showAddInPopup"] = false;

$tdatacustomer_resource_allocation [".showEditInPopup"] = false;

$tdatacustomer_resource_allocation [".showViewInPopup"] = false;

// page's base css files names
$popupPagesLayoutNames = array ();
$tdatacustomer_resource_allocation [".popupPagesLayoutNames"] = $popupPagesLayoutNames;

$tdatacustomer_resource_allocation [".fieldsForRegister"] = array ();

$tdatacustomer_resource_allocation [".listAjax"] = false;

$tdatacustomer_resource_allocation [".audit"] = false;

$tdatacustomer_resource_allocation [".locking"] = false;

$tdatacustomer_resource_allocation [".list"] = true;

$tdatacustomer_resource_allocation [".import"] = true;

$tdatacustomer_resource_allocation [".exportTo"] = true;

$tdatacustomer_resource_allocation [".printFriendly"] = true;

$tdatacustomer_resource_allocation [".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacustomer_resource_allocation [".searchSaving"] = false;
//

$tdatacustomer_resource_allocation [".showSearchPanel"] = true;
$tdatacustomer_resource_allocation [".flexibleSearch"] = true;

if (isMobile ())
	$tdatacustomer_resource_allocation [".isUseAjaxSuggest"] = false;
else
	$tdatacustomer_resource_allocation [".isUseAjaxSuggest"] = true;

$tdatacustomer_resource_allocation [".rowHighlite"] = true;

$tdatacustomer_resource_allocation [".addPageEvents"] = false;

// use timepicker for search panel
$tdatacustomer_resource_allocation [".isUseTimeForSearch"] = false;

$tdatacustomer_resource_allocation [".allSearchFields"] = array ();
$tdatacustomer_resource_allocation [".filterFields"] = array ();
$tdatacustomer_resource_allocation [".requiredSearchFields"] = array ();

$tdatacustomer_resource_allocation [".allSearchFields"] [] = "Created_By";
$tdatacustomer_resource_allocation [".allSearchFields"] [] = "Created_date";
$tdatacustomer_resource_allocation [".allSearchFields"] [] = "Updated_by";
$tdatacustomer_resource_allocation [".allSearchFields"] [] = "updated_date";
$tdatacustomer_resource_allocation [".allSearchFields"] [] = "Remarks";
$tdatacustomer_resource_allocation [".allSearchFields"] [] = "oracle_id";
$tdatacustomer_resource_allocation [".allSearchFields"] [] = "EmployeeID";
$tdatacustomer_resource_allocation [".allSearchFields"] [] = "Role_lookup_id";
$tdatacustomer_resource_allocation [".allSearchFields"] [] = "Start_date";
$tdatacustomer_resource_allocation [".allSearchFields"] [] = "End_date";
$tdatacustomer_resource_allocation [".allSearchFields"] [] = "Standard_allocation";
$tdatacustomer_resource_allocation [".allSearchFields"] [] = "override_allocation";

$tdatacustomer_resource_allocation [".googleLikeFields"] = array ();
$tdatacustomer_resource_allocation [".googleLikeFields"] [] = "Created_By";
$tdatacustomer_resource_allocation [".googleLikeFields"] [] = "Created_date";
$tdatacustomer_resource_allocation [".googleLikeFields"] [] = "Updated_by";
$tdatacustomer_resource_allocation [".googleLikeFields"] [] = "updated_date";
$tdatacustomer_resource_allocation [".googleLikeFields"] [] = "Remarks";
$tdatacustomer_resource_allocation [".googleLikeFields"] [] = "oracle_id";
$tdatacustomer_resource_allocation [".googleLikeFields"] [] = "EmployeeID";
$tdatacustomer_resource_allocation [".googleLikeFields"] [] = "Role_lookup_id";
$tdatacustomer_resource_allocation [".googleLikeFields"] [] = "Start_date";
$tdatacustomer_resource_allocation [".googleLikeFields"] [] = "End_date";
$tdatacustomer_resource_allocation [".googleLikeFields"] [] = "Standard_allocation";
$tdatacustomer_resource_allocation [".googleLikeFields"] [] = "override_allocation";

$tdatacustomer_resource_allocation [".advSearchFields"] = array ();
$tdatacustomer_resource_allocation [".advSearchFields"] [] = "Created_By";
$tdatacustomer_resource_allocation [".advSearchFields"] [] = "Created_date";
$tdatacustomer_resource_allocation [".advSearchFields"] [] = "Updated_by";
$tdatacustomer_resource_allocation [".advSearchFields"] [] = "updated_date";
$tdatacustomer_resource_allocation [".advSearchFields"] [] = "Remarks";
$tdatacustomer_resource_allocation [".advSearchFields"] [] = "oracle_id";
$tdatacustomer_resource_allocation [".advSearchFields"] [] = "EmployeeID";
$tdatacustomer_resource_allocation [".advSearchFields"] [] = "Role_lookup_id";
$tdatacustomer_resource_allocation [".advSearchFields"] [] = "Start_date";
$tdatacustomer_resource_allocation [".advSearchFields"] [] = "End_date";
$tdatacustomer_resource_allocation [".advSearchFields"] [] = "Standard_allocation";
$tdatacustomer_resource_allocation [".advSearchFields"] [] = "override_allocation";

$tdatacustomer_resource_allocation [".tableType"] = "list";

$tdatacustomer_resource_allocation [".printerPageOrientation"] = 0;
$tdatacustomer_resource_allocation [".nPrinterPageScale"] = 100;

$tdatacustomer_resource_allocation [".nPrinterSplitRecords"] = 40;

$tdatacustomer_resource_allocation [".nPrinterPDFSplitRecords"] = 40;

$tdatacustomer_resource_allocation [".geocodingEnabled"] = false;

// view page pdf

// print page pdf

$tdatacustomer_resource_allocation [".pageSize"] = 10;

$tdatacustomer_resource_allocation [".warnLeavingPages"] = true;

$tstrOrderBy = "";
if (strlen ( $tstrOrderBy ) && strtolower ( substr ( $tstrOrderBy, 0, 8 ) ) != "order by")
	$tstrOrderBy = "order by " . $tstrOrderBy;
$tdatacustomer_resource_allocation [".strOrderBy"] = $tstrOrderBy;

$tdatacustomer_resource_allocation [".orderindexes"] = array ();

$tdatacustomer_resource_allocation [".sqlHead"] = "SELECT Created_By,  	Created_date,  	Updated_by,  	updated_date,  	Remarks,  	oracle_id,  	EmployeeID,  	Role_lookup_id,  	Start_date,  	End_date,  	Standard_allocation,  	override_allocation";
$tdatacustomer_resource_allocation [".sqlFrom"] = "FROM customer_resource_allocation";
$tdatacustomer_resource_allocation [".sqlWhereExpr"] = "";
$tdatacustomer_resource_allocation [".sqlTail"] = "";

// fill array of records per page for list and report without group fields
$arrRPP = array ();
$arrRPP [] = 10;
$arrRPP [] = 20;
$arrRPP [] = 30;
$arrRPP [] = 50;
$arrRPP [] = 100;
$arrRPP [] = 500;
$arrRPP [] = - 1;
$tdatacustomer_resource_allocation [".arrRecsPerPage"] = $arrRPP;

// fill array of groups per page for report with group fields
$arrGPP = array ();
$arrGPP [] = 1;
$arrGPP [] = 3;
$arrGPP [] = 5;
$arrGPP [] = 10;
$arrGPP [] = 50;
$arrGPP [] = 100;
$arrGPP [] = - 1;
$tdatacustomer_resource_allocation [".arrGroupsPerPage"] = $arrGPP;

$tableKeyscustomer_resource_allocation = array ();
$tdatacustomer_resource_allocation [".Keys"] = $tableKeyscustomer_resource_allocation;

$tdatacustomer_resource_allocation [".listFields"] = array ();
$tdatacustomer_resource_allocation [".listFields"] [] = "Created_By";
$tdatacustomer_resource_allocation [".listFields"] [] = "Created_date";
$tdatacustomer_resource_allocation [".listFields"] [] = "Updated_by";
$tdatacustomer_resource_allocation [".listFields"] [] = "updated_date";
$tdatacustomer_resource_allocation [".listFields"] [] = "Remarks";
$tdatacustomer_resource_allocation [".listFields"] [] = "oracle_id";
$tdatacustomer_resource_allocation [".listFields"] [] = "EmployeeID";
$tdatacustomer_resource_allocation [".listFields"] [] = "Role_lookup_id";
$tdatacustomer_resource_allocation [".listFields"] [] = "Start_date";
$tdatacustomer_resource_allocation [".listFields"] [] = "End_date";
$tdatacustomer_resource_allocation [".listFields"] [] = "Standard_allocation";
$tdatacustomer_resource_allocation [".listFields"] [] = "override_allocation";

$tdatacustomer_resource_allocation [".hideMobileList"] = array ();

$tdatacustomer_resource_allocation [".viewFields"] = array ();

$tdatacustomer_resource_allocation [".addFields"] = array ();

$tdatacustomer_resource_allocation [".masterListFields"] = array ();
$tdatacustomer_resource_allocation [".masterListFields"] [] = "Created_By";
$tdatacustomer_resource_allocation [".masterListFields"] [] = "Created_date";
$tdatacustomer_resource_allocation [".masterListFields"] [] = "Updated_by";
$tdatacustomer_resource_allocation [".masterListFields"] [] = "updated_date";
$tdatacustomer_resource_allocation [".masterListFields"] [] = "Remarks";
$tdatacustomer_resource_allocation [".masterListFields"] [] = "oracle_id";
$tdatacustomer_resource_allocation [".masterListFields"] [] = "EmployeeID";
$tdatacustomer_resource_allocation [".masterListFields"] [] = "Role_lookup_id";
$tdatacustomer_resource_allocation [".masterListFields"] [] = "Start_date";
$tdatacustomer_resource_allocation [".masterListFields"] [] = "End_date";
$tdatacustomer_resource_allocation [".masterListFields"] [] = "Standard_allocation";
$tdatacustomer_resource_allocation [".masterListFields"] [] = "override_allocation";

$tdatacustomer_resource_allocation [".inlineAddFields"] = array ();

$tdatacustomer_resource_allocation [".editFields"] = array ();

$tdatacustomer_resource_allocation [".inlineEditFields"] = array ();

$tdatacustomer_resource_allocation [".exportFields"] = array ();
$tdatacustomer_resource_allocation [".exportFields"] [] = "Created_By";
$tdatacustomer_resource_allocation [".exportFields"] [] = "Created_date";
$tdatacustomer_resource_allocation [".exportFields"] [] = "Updated_by";
$tdatacustomer_resource_allocation [".exportFields"] [] = "updated_date";
$tdatacustomer_resource_allocation [".exportFields"] [] = "Remarks";
$tdatacustomer_resource_allocation [".exportFields"] [] = "oracle_id";
$tdatacustomer_resource_allocation [".exportFields"] [] = "EmployeeID";
$tdatacustomer_resource_allocation [".exportFields"] [] = "Role_lookup_id";
$tdatacustomer_resource_allocation [".exportFields"] [] = "Start_date";
$tdatacustomer_resource_allocation [".exportFields"] [] = "End_date";
$tdatacustomer_resource_allocation [".exportFields"] [] = "Standard_allocation";
$tdatacustomer_resource_allocation [".exportFields"] [] = "override_allocation";

$tdatacustomer_resource_allocation [".importFields"] = array ();
$tdatacustomer_resource_allocation [".importFields"] [] = "Created_By";
$tdatacustomer_resource_allocation [".importFields"] [] = "Created_date";
$tdatacustomer_resource_allocation [".importFields"] [] = "Updated_by";
$tdatacustomer_resource_allocation [".importFields"] [] = "updated_date";
$tdatacustomer_resource_allocation [".importFields"] [] = "Remarks";
$tdatacustomer_resource_allocation [".importFields"] [] = "oracle_id";
$tdatacustomer_resource_allocation [".importFields"] [] = "EmployeeID";
$tdatacustomer_resource_allocation [".importFields"] [] = "Role_lookup_id";
$tdatacustomer_resource_allocation [".importFields"] [] = "Start_date";
$tdatacustomer_resource_allocation [".importFields"] [] = "End_date";
$tdatacustomer_resource_allocation [".importFields"] [] = "Standard_allocation";
$tdatacustomer_resource_allocation [".importFields"] [] = "override_allocation";

$tdatacustomer_resource_allocation [".printFields"] = array ();
$tdatacustomer_resource_allocation [".printFields"] [] = "Created_By";
$tdatacustomer_resource_allocation [".printFields"] [] = "Created_date";
$tdatacustomer_resource_allocation [".printFields"] [] = "Updated_by";
$tdatacustomer_resource_allocation [".printFields"] [] = "updated_date";
$tdatacustomer_resource_allocation [".printFields"] [] = "Remarks";
$tdatacustomer_resource_allocation [".printFields"] [] = "oracle_id";
$tdatacustomer_resource_allocation [".printFields"] [] = "EmployeeID";
$tdatacustomer_resource_allocation [".printFields"] [] = "Role_lookup_id";
$tdatacustomer_resource_allocation [".printFields"] [] = "Start_date";
$tdatacustomer_resource_allocation [".printFields"] [] = "End_date";
$tdatacustomer_resource_allocation [".printFields"] [] = "Standard_allocation";
$tdatacustomer_resource_allocation [".printFields"] [] = "override_allocation";

// Created_By
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 1;
$fdata ["strName"] = "Created_By";
$fdata ["GoodName"] = "Created_By";
$fdata ["ownerTable"] = "customer_resource_allocation";
$fdata ["Label"] = GetFieldLabel ( "customer_resource_allocation", "Created_By" );
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

$tdatacustomer_resource_allocation ["Created_By"] = $fdata;
// Created_date
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 2;
$fdata ["strName"] = "Created_date";
$fdata ["GoodName"] = "Created_date";
$fdata ["ownerTable"] = "customer_resource_allocation";
$fdata ["Label"] = GetFieldLabel ( "customer_resource_allocation", "Created_date" );
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

$tdatacustomer_resource_allocation ["Created_date"] = $fdata;
// Updated_by
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 3;
$fdata ["strName"] = "Updated_by";
$fdata ["GoodName"] = "Updated_by";
$fdata ["ownerTable"] = "customer_resource_allocation";
$fdata ["Label"] = GetFieldLabel ( "customer_resource_allocation", "Updated_by" );
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

$tdatacustomer_resource_allocation ["Updated_by"] = $fdata;
// updated_date
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 4;
$fdata ["strName"] = "updated_date";
$fdata ["GoodName"] = "updated_date";
$fdata ["ownerTable"] = "customer_resource_allocation";
$fdata ["Label"] = GetFieldLabel ( "customer_resource_allocation", "updated_date" );
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

$tdatacustomer_resource_allocation ["updated_date"] = $fdata;
// Remarks
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 5;
$fdata ["strName"] = "Remarks";
$fdata ["GoodName"] = "Remarks";
$fdata ["ownerTable"] = "customer_resource_allocation";
$fdata ["Label"] = GetFieldLabel ( "customer_resource_allocation", "Remarks" );
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

$tdatacustomer_resource_allocation ["Remarks"] = $fdata;
// oracle_id
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 6;
$fdata ["strName"] = "oracle_id";
$fdata ["GoodName"] = "oracle_id";
$fdata ["ownerTable"] = "customer_resource_allocation";
$fdata ["Label"] = GetFieldLabel ( "customer_resource_allocation", "oracle_id" );
$fdata ["FieldType"] = 3;

$fdata ["bListPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "oracle_id";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "oracle_id";

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

$tdatacustomer_resource_allocation ["oracle_id"] = $fdata;
// EmployeeID
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 7;
$fdata ["strName"] = "EmployeeID";
$fdata ["GoodName"] = "EmployeeID";
$fdata ["ownerTable"] = "customer_resource_allocation";
$fdata ["Label"] = GetFieldLabel ( "customer_resource_allocation", "EmployeeID" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

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

$tdatacustomer_resource_allocation ["EmployeeID"] = $fdata;
// Role_lookup_id
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 8;
$fdata ["strName"] = "Role_lookup_id";
$fdata ["GoodName"] = "Role_lookup_id";
$fdata ["ownerTable"] = "customer_resource_allocation";
$fdata ["Label"] = GetFieldLabel ( "customer_resource_allocation", "Role_lookup_id" );
$fdata ["FieldType"] = 3;

$fdata ["bListPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Role_lookup_id";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Role_lookup_id";

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

$tdatacustomer_resource_allocation ["Role_lookup_id"] = $fdata;
// Start_date
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 9;
$fdata ["strName"] = "Start_date";
$fdata ["GoodName"] = "Start_date";
$fdata ["ownerTable"] = "customer_resource_allocation";
$fdata ["Label"] = GetFieldLabel ( "customer_resource_allocation", "Start_date" );
$fdata ["FieldType"] = 7;

$fdata ["bListPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Start_date";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Start_date";

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

$tdatacustomer_resource_allocation ["Start_date"] = $fdata;
// End_date
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 10;
$fdata ["strName"] = "End_date";
$fdata ["GoodName"] = "End_date";
$fdata ["ownerTable"] = "customer_resource_allocation";
$fdata ["Label"] = GetFieldLabel ( "customer_resource_allocation", "End_date" );
$fdata ["FieldType"] = 7;

$fdata ["bListPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "End_date";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "End_date";

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

$tdatacustomer_resource_allocation ["End_date"] = $fdata;
// Standard_allocation
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 11;
$fdata ["strName"] = "Standard_allocation";
$fdata ["GoodName"] = "Standard_allocation";
$fdata ["ownerTable"] = "customer_resource_allocation";
$fdata ["Label"] = GetFieldLabel ( "customer_resource_allocation", "Standard_allocation" );
$fdata ["FieldType"] = 3;

$fdata ["bListPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Standard_allocation";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Standard_allocation";

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

$tdatacustomer_resource_allocation ["Standard_allocation"] = $fdata;
// override_allocation
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 12;
$fdata ["strName"] = "override_allocation";
$fdata ["GoodName"] = "override_allocation";
$fdata ["ownerTable"] = "customer_resource_allocation";
$fdata ["Label"] = GetFieldLabel ( "customer_resource_allocation", "override_allocation" );
$fdata ["FieldType"] = 3;

$fdata ["bListPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "override_allocation";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "override_allocation";

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

$tdatacustomer_resource_allocation ["override_allocation"] = $fdata;

$tables_data ["customer_resource_allocation"] = &$tdatacustomer_resource_allocation;
$field_labels ["customer_resource_allocation"] = &$fieldLabelscustomer_resource_allocation;
$fieldToolTips ["customer_resource_allocation"] = &$fieldToolTipscustomer_resource_allocation;
$page_titles ["customer_resource_allocation"] = &$pageTitlescustomer_resource_allocation;

// -----------------start prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData ["customer_resource_allocation"] = array ();

// tables which are master tables for current table (detail)
$masterTablesData ["customer_resource_allocation"] = array ();

// -----------------end prepare master-details data arrays ------------------------------//

require_once (getabspath ( "classes/sql.php" ));
function createSqlQuery_customer_resource_allocation() {
	$proto0 = array ();
	$proto0 ["m_strHead"] = "SELECT";
	$proto0 ["m_strFieldList"] = "Created_By,  	Created_date,  	Updated_by,  	updated_date,  	Remarks,  	oracle_id,  	EmployeeID,  	Role_lookup_id,  	Start_date,  	End_date,  	Standard_allocation,  	override_allocation";
	$proto0 ["m_strFrom"] = "FROM customer_resource_allocation";
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
			"m_strTable" => "customer_resource_allocation",
			"m_srcTableName" => "customer_resource_allocation" 
	) );
	
	$proto5 ["m_sql"] = "Created_By";
	$proto5 ["m_srcTableName"] = "customer_resource_allocation";
	$proto5 ["m_expr"] = $obj;
	$proto5 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto5 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto7 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Created_date",
			"m_strTable" => "customer_resource_allocation",
			"m_srcTableName" => "customer_resource_allocation" 
	) );
	
	$proto7 ["m_sql"] = "Created_date";
	$proto7 ["m_srcTableName"] = "customer_resource_allocation";
	$proto7 ["m_expr"] = $obj;
	$proto7 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto7 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto9 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Updated_by",
			"m_strTable" => "customer_resource_allocation",
			"m_srcTableName" => "customer_resource_allocation" 
	) );
	
	$proto9 ["m_sql"] = "Updated_by";
	$proto9 ["m_srcTableName"] = "customer_resource_allocation";
	$proto9 ["m_expr"] = $obj;
	$proto9 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto9 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto11 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "updated_date",
			"m_strTable" => "customer_resource_allocation",
			"m_srcTableName" => "customer_resource_allocation" 
	) );
	
	$proto11 ["m_sql"] = "updated_date";
	$proto11 ["m_srcTableName"] = "customer_resource_allocation";
	$proto11 ["m_expr"] = $obj;
	$proto11 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto11 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto13 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Remarks",
			"m_strTable" => "customer_resource_allocation",
			"m_srcTableName" => "customer_resource_allocation" 
	) );
	
	$proto13 ["m_sql"] = "Remarks";
	$proto13 ["m_srcTableName"] = "customer_resource_allocation";
	$proto13 ["m_expr"] = $obj;
	$proto13 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto13 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto15 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "oracle_id",
			"m_strTable" => "customer_resource_allocation",
			"m_srcTableName" => "customer_resource_allocation" 
	) );
	
	$proto15 ["m_sql"] = "oracle_id";
	$proto15 ["m_srcTableName"] = "customer_resource_allocation";
	$proto15 ["m_expr"] = $obj;
	$proto15 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto15 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto17 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "EmployeeID",
			"m_strTable" => "customer_resource_allocation",
			"m_srcTableName" => "customer_resource_allocation" 
	) );
	
	$proto17 ["m_sql"] = "EmployeeID";
	$proto17 ["m_srcTableName"] = "customer_resource_allocation";
	$proto17 ["m_expr"] = $obj;
	$proto17 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto17 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto19 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Role_lookup_id",
			"m_strTable" => "customer_resource_allocation",
			"m_srcTableName" => "customer_resource_allocation" 
	) );
	
	$proto19 ["m_sql"] = "Role_lookup_id";
	$proto19 ["m_srcTableName"] = "customer_resource_allocation";
	$proto19 ["m_expr"] = $obj;
	$proto19 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto19 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto21 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Start_date",
			"m_strTable" => "customer_resource_allocation",
			"m_srcTableName" => "customer_resource_allocation" 
	) );
	
	$proto21 ["m_sql"] = "Start_date";
	$proto21 ["m_srcTableName"] = "customer_resource_allocation";
	$proto21 ["m_expr"] = $obj;
	$proto21 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto21 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto23 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "End_date",
			"m_strTable" => "customer_resource_allocation",
			"m_srcTableName" => "customer_resource_allocation" 
	) );
	
	$proto23 ["m_sql"] = "End_date";
	$proto23 ["m_srcTableName"] = "customer_resource_allocation";
	$proto23 ["m_expr"] = $obj;
	$proto23 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto23 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto25 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Standard_allocation",
			"m_strTable" => "customer_resource_allocation",
			"m_srcTableName" => "customer_resource_allocation" 
	) );
	
	$proto25 ["m_sql"] = "Standard_allocation";
	$proto25 ["m_srcTableName"] = "customer_resource_allocation";
	$proto25 ["m_expr"] = $obj;
	$proto25 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto25 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto27 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "override_allocation",
			"m_strTable" => "customer_resource_allocation",
			"m_srcTableName" => "customer_resource_allocation" 
	) );
	
	$proto27 ["m_sql"] = "override_allocation";
	$proto27 ["m_srcTableName"] = "customer_resource_allocation";
	$proto27 ["m_expr"] = $obj;
	$proto27 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto27 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto0 ["m_fromlist"] = array ();
	$proto29 = array ();
	$proto29 ["m_link"] = "SQLL_MAIN";
	$proto30 = array ();
	$proto30 ["m_strName"] = "customer_resource_allocation";
	$proto30 ["m_srcTableName"] = "customer_resource_allocation";
	$proto30 ["m_columns"] = array ();
	$proto30 ["m_columns"] [] = "Created_By";
	$proto30 ["m_columns"] [] = "Created_date";
	$proto30 ["m_columns"] [] = "Updated_by";
	$proto30 ["m_columns"] [] = "updated_date";
	$proto30 ["m_columns"] [] = "Remarks";
	$proto30 ["m_columns"] [] = "oracle_id";
	$proto30 ["m_columns"] [] = "EmployeeID";
	$proto30 ["m_columns"] [] = "Role_lookup_id";
	$proto30 ["m_columns"] [] = "Start_date";
	$proto30 ["m_columns"] [] = "End_date";
	$proto30 ["m_columns"] [] = "Standard_allocation";
	$proto30 ["m_columns"] [] = "override_allocation";
	$obj = new SQLTable ( $proto30 );
	
	$proto29 ["m_table"] = $obj;
	$proto29 ["m_sql"] = "customer_resource_allocation";
	$proto29 ["m_alias"] = "";
	$proto29 ["m_srcTableName"] = "customer_resource_allocation";
	$proto31 = array ();
	$proto31 ["m_sql"] = "";
	$proto31 ["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed ( array (
			"m_sql" => "" 
	) );
	
	$proto31 ["m_column"] = $obj;
	$proto31 ["m_contained"] = array ();
	$proto31 ["m_strCase"] = "";
	$proto31 ["m_havingmode"] = false;
	$proto31 ["m_inBrackets"] = false;
	$proto31 ["m_useAlias"] = false;
	$obj = new SQLLogicalExpr ( $proto31 );
	
	$proto29 ["m_joinon"] = $obj;
	$obj = new SQLFromListItem ( $proto29 );
	
	$proto0 ["m_fromlist"] [] = $obj;
	$proto0 ["m_groupby"] = array ();
	$proto0 ["m_orderby"] = array ();
	$proto0 ["m_srcTableName"] = "customer_resource_allocation";
	$obj = new SQLQuery ( $proto0 );
	
	return $obj;
}
$queryData_customer_resource_allocation = createSqlQuery_customer_resource_allocation ();

$tdatacustomer_resource_allocation [".sqlquery"] = $queryData_customer_resource_allocation;

$tableEvents ["customer_resource_allocation"] = new eventsBase ();
$tdatacustomer_resource_allocation [".hasEvents"] = false;

?>