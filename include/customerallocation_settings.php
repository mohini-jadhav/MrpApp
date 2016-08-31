<?php
require_once (getabspath ( "classes/cipherer.php" ));

$tdatacustomerallocation = array ();
$tdatacustomerallocation [".truncateText"] = true;
$tdatacustomerallocation [".NumberOfChars"] = 60;
$tdatacustomerallocation [".ShortName"] = "customerallocation";
$tdatacustomerallocation [".OwnerID"] = "";
$tdatacustomerallocation [".OriginalTable"] = "customerallocation";

// field labels
$fieldLabelscustomerallocation = array ();
$fieldToolTipscustomerallocation = array ();
$pageTitlescustomerallocation = array ();

if (mlang_getcurrentlang () == "English") {
	$fieldLabelscustomerallocation ["English"] = array ();
	$fieldToolTipscustomerallocation ["English"] = array ();
	$pageTitlescustomerallocation ["English"] = array ();
	$fieldLabelscustomerallocation ["English"] ["AutCustID"] = "Aut Cust ID";
	$fieldToolTipscustomerallocation ["English"] ["AutCustID"] = "";
	$fieldLabelscustomerallocation ["English"] ["OracleID"] = "Oracle ID";
	$fieldToolTipscustomerallocation ["English"] ["OracleID"] = "";
	$fieldLabelscustomerallocation ["English"] ["CustomerName"] = "Customer Name";
	$fieldToolTipscustomerallocation ["English"] ["CustomerName"] = "";
	$fieldLabelscustomerallocation ["English"] ["RSAName"] = "Resource";
	$fieldToolTipscustomerallocation ["English"] ["RSAName"] = "";
	$fieldLabelscustomerallocation ["English"] ["Location"] = "Region";
	$fieldToolTipscustomerallocation ["English"] ["Location"] = "";
	$fieldLabelscustomerallocation ["English"] ["StartDate"] = "Start Date";
	$fieldToolTipscustomerallocation ["English"] ["StartDate"] = "";
	$fieldLabelscustomerallocation ["English"] ["EndDate"] = "End Date";
	$fieldToolTipscustomerallocation ["English"] ["EndDate"] = "";
	$fieldLabelscustomerallocation ["English"] ["Supervisor"] = "Manager";
	$fieldToolTipscustomerallocation ["English"] ["Supervisor"] = "";
	$fieldLabelscustomerallocation ["English"] ["Allocation"] = "Model Alloc";
	$fieldToolTipscustomerallocation ["English"] ["Allocation"] = "";
	$fieldLabelscustomerallocation ["English"] ["Override"] = "Actual Alloc";
	$fieldToolTipscustomerallocation ["English"] ["Override"] = "";
	$fieldLabelscustomerallocation ["English"] ["Size"] = "Size";
	$fieldToolTipscustomerallocation ["English"] ["Size"] = "";
	$fieldLabelscustomerallocation ["English"] ["Contract_Start"] = "Contract Start";
	$fieldToolTipscustomerallocation ["English"] ["Contract_Start"] = "";
	$fieldLabelscustomerallocation ["English"] ["SteadyStateDate"] = "Steady State";
	$fieldToolTipscustomerallocation ["English"] ["SteadyStateDate"] = "";
	$fieldLabelscustomerallocation ["English"] ["Contract_End"] = "Contract End";
	$fieldToolTipscustomerallocation ["English"] ["Contract_End"] = "";
	$fieldLabelscustomerallocation ["English"] ["OnshoreSupportOnly"] = "Onshore Only";
	$fieldToolTipscustomerallocation ["English"] ["OnshoreSupportOnly"] = "";
	$fieldLabelscustomerallocation ["English"] ["PlatformType"] = "Platform Type";
	$fieldToolTipscustomerallocation ["English"] ["PlatformType"] = "";
	$fieldLabelscustomerallocation ["English"] ["PlatformName"] = "Platform";
	$fieldToolTipscustomerallocation ["English"] ["PlatformName"] = "";
	$fieldLabelscustomerallocation ["English"] ["Role"] = "Engag Role";
	$fieldToolTipscustomerallocation ["English"] ["Role"] = "";
	$fieldLabelscustomerallocation ["English"] ["TimeZone"] = "Primary Working Time Zone";
	$fieldToolTipscustomerallocation ["English"] ["TimeZone"] = "";
	$fieldLabelscustomerallocation ["English"] ["Stage"] = "Stage";
	$fieldToolTipscustomerallocation ["English"] ["Stage"] = "";
	$fieldLabelscustomerallocation ["English"] ["Project"] = "Project";
	$fieldToolTipscustomerallocation ["English"] ["Project"] = "";
	if (count ( $fieldToolTipscustomerallocation ["English"] ))
		$tdatacustomerallocation [".isUseToolTips"] = true;
}
if (mlang_getcurrentlang () == "") {
	$fieldLabelscustomerallocation [""] = array ();
	$fieldToolTipscustomerallocation [""] = array ();
	$pageTitlescustomerallocation [""] = array ();
	$fieldLabelscustomerallocation [""] ["AutCustID"] = "Aut Cust ID";
	$fieldToolTipscustomerallocation [""] ["AutCustID"] = "";
	if (count ( $fieldToolTipscustomerallocation [""] ))
		$tdatacustomerallocation [".isUseToolTips"] = true;
}

$tdatacustomerallocation [".NCSearch"] = true;

if (! isMobile ())
	$tdatacustomerallocation [".scrollGridBody"] = true;

$tdatacustomerallocation [".shortTableName"] = "customerallocation";
$tdatacustomerallocation [".nSecOptions"] = 0;
$tdatacustomerallocation [".recsPerRowList"] = 1;
$tdatacustomerallocation [".recsPerRowPrint"] = 1;
$tdatacustomerallocation [".mainTableOwnerID"] = "";
$tdatacustomerallocation [".moveNext"] = 0;
$tdatacustomerallocation [".entityType"] = 0;

$tdatacustomerallocation [".strOriginalTableName"] = "customerallocation";

$tdatacustomerallocation [".showAddInPopup"] = true;

$tdatacustomerallocation [".showEditInPopup"] = true;

$tdatacustomerallocation [".showViewInPopup"] = true;

// page's base css files names
$popupPagesLayoutNames = array ();

;
$popupPagesLayoutNames ["add"] = "add2";

;
$popupPagesLayoutNames ["edit"] = "edit2";

;
$popupPagesLayoutNames ["view"] = "view2";
$tdatacustomerallocation [".popupPagesLayoutNames"] = $popupPagesLayoutNames;

$tdatacustomerallocation [".fieldsForRegister"] = array ();

$tdatacustomerallocation [".listAjax"] = false;

$tdatacustomerallocation [".audit"] = false;

$tdatacustomerallocation [".locking"] = false;

$tdatacustomerallocation [".edit"] = true;
$tdatacustomerallocation [".afterEditAction"] = 1;
$tdatacustomerallocation [".closePopupAfterEdit"] = 1;
$tdatacustomerallocation [".afterEditActionDetTable"] = "";

$tdatacustomerallocation [".add"] = true;
$tdatacustomerallocation [".afterAddAction"] = 1;
$tdatacustomerallocation [".closePopupAfterAdd"] = 1;
$tdatacustomerallocation [".afterAddActionDetTable"] = "";

$tdatacustomerallocation [".list"] = true;

$tdatacustomerallocation [".view"] = true;
$tdatacustomerallocation [".import"] = true;
$tdatacustomerallocation [".exportTo"] = true;

$tdatacustomerallocation [".printFriendly"] = true;

$tdatacustomerallocation [".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacustomerallocation [".searchSaving"] = false;
//

$tdatacustomerallocation [".showSearchPanel"] = true;
$tdatacustomerallocation [".flexibleSearch"] = true;

if (isMobile ())
	$tdatacustomerallocation [".isUseAjaxSuggest"] = false;
else
	$tdatacustomerallocation [".isUseAjaxSuggest"] = true;

$tdatacustomerallocation [".rowHighlite"] = true;

$tdatacustomerallocation [".addPageEvents"] = true;

// use timepicker for search panel
$tdatacustomerallocation [".isUseTimeForSearch"] = false;
$tdatacustomerallocation [".allSearchFields"] = array ();
$tdatacustomerallocation [".filterFields"] = array ();
$tdatacustomerallocation [".requiredSearchFields"] = array ();

$tdatacustomerallocation [".allSearchFields"] [] = "Allocation";
$tdatacustomerallocation [".allSearchFields"] [] = "OracleID";
$tdatacustomerallocation [".allSearchFields"] [] = "CustomerName";
$tdatacustomerallocation [".allSearchFields"] [] = "TimeZone";
$tdatacustomerallocation [".allSearchFields"] [] = "Stage";
$tdatacustomerallocation [".allSearchFields"] [] = "Size";
$tdatacustomerallocation [".allSearchFields"] [] = "Contract_Start";
$tdatacustomerallocation [".allSearchFields"] [] = "SteadyStateDate";
$tdatacustomerallocation [".allSearchFields"] [] = "Contract_End";
$tdatacustomerallocation [".allSearchFields"] [] = "OnshoreSupportOnly";
$tdatacustomerallocation [".allSearchFields"] [] = "Supervisor";
$tdatacustomerallocation [".allSearchFields"] [] = "RSAName";
$tdatacustomerallocation [".allSearchFields"] [] = "Role";
$tdatacustomerallocation [".allSearchFields"] [] = "PlatformName";
$tdatacustomerallocation [".allSearchFields"] [] = "StartDate";
$tdatacustomerallocation [".allSearchFields"] [] = "EndDate";
$tdatacustomerallocation [".allSearchFields"] [] = "Override";

$tdatacustomerallocation [".googleLikeFields"] = array ();
$tdatacustomerallocation [".googleLikeFields"] [] = "OracleID";
$tdatacustomerallocation [".googleLikeFields"] [] = "CustomerName";
$tdatacustomerallocation [".googleLikeFields"] [] = "RSAName";
$tdatacustomerallocation [".googleLikeFields"] [] = "Supervisor";
$tdatacustomerallocation [".googleLikeFields"] [] = "StartDate";
$tdatacustomerallocation [".googleLikeFields"] [] = "EndDate";
$tdatacustomerallocation [".googleLikeFields"] [] = "Allocation";
$tdatacustomerallocation [".googleLikeFields"] [] = "Override";
$tdatacustomerallocation [".googleLikeFields"] [] = "Size";
$tdatacustomerallocation [".googleLikeFields"] [] = "Contract_Start";
$tdatacustomerallocation [".googleLikeFields"] [] = "SteadyStateDate";
$tdatacustomerallocation [".googleLikeFields"] [] = "Contract_End";
$tdatacustomerallocation [".googleLikeFields"] [] = "OnshoreSupportOnly";
$tdatacustomerallocation [".googleLikeFields"] [] = "PlatformType";
$tdatacustomerallocation [".googleLikeFields"] [] = "PlatformName";
$tdatacustomerallocation [".googleLikeFields"] [] = "Role";
$tdatacustomerallocation [".googleLikeFields"] [] = "TimeZone";
$tdatacustomerallocation [".googleLikeFields"] [] = "Project";
$tdatacustomerallocation [".googleLikeFields"] [] = "Stage";

$tdatacustomerallocation [".advSearchFields"] = array ();
$tdatacustomerallocation [".advSearchFields"] [] = "Allocation";
$tdatacustomerallocation [".advSearchFields"] [] = "OracleID";
$tdatacustomerallocation [".advSearchFields"] [] = "CustomerName";
$tdatacustomerallocation [".advSearchFields"] [] = "TimeZone";
$tdatacustomerallocation [".advSearchFields"] [] = "Stage";
$tdatacustomerallocation [".advSearchFields"] [] = "Size";
$tdatacustomerallocation [".advSearchFields"] [] = "Contract_Start";
$tdatacustomerallocation [".advSearchFields"] [] = "SteadyStateDate";
$tdatacustomerallocation [".advSearchFields"] [] = "Contract_End";
$tdatacustomerallocation [".advSearchFields"] [] = "OnshoreSupportOnly";
$tdatacustomerallocation [".advSearchFields"] [] = "Supervisor";
$tdatacustomerallocation [".advSearchFields"] [] = "RSAName";
$tdatacustomerallocation [".advSearchFields"] [] = "Role";
$tdatacustomerallocation [".advSearchFields"] [] = "PlatformName";
$tdatacustomerallocation [".advSearchFields"] [] = "StartDate";
$tdatacustomerallocation [".advSearchFields"] [] = "EndDate";
$tdatacustomerallocation [".advSearchFields"] [] = "Override";

$tdatacustomerallocation [".tableType"] = "list";

$tdatacustomerallocation [".printerPageOrientation"] = 0;
$tdatacustomerallocation [".nPrinterPageScale"] = 100;

$tdatacustomerallocation [".nPrinterSplitRecords"] = 40;

$tdatacustomerallocation [".nPrinterPDFSplitRecords"] = 40;
$tdatacustomerallocation [".geocodingEnabled"] = false;

$tdatacustomerallocation [".isDisplayLoading"] = true;

$tdatacustomerallocation [".isResizeColumns"] = false;

// view page pdf

// print page pdf
if( false == is_null( $_SESSION['UserID']) ) {
	$userID = $_SESSION["UserID"];
	$groupID = $_SESSION["UserRights"][$userID][".Groups"][0];
}

if( IsAdmin() || '1' != $groupID ) {
	$tdatacustomerallocation [".totalsFields"] = array ();
	$tdatacustomerallocation [".totalsFields"] [] = array (
			"fName" => "Allocation",
			"numRows" => 0,
			"totalsType" => "TOTAL",
			"viewFormat" => 'Percent' 
	);
}

$tdatacustomerallocation [".pageSize"] = 10;

$tdatacustomerallocation [".warnLeavingPages"] = true;

$tdatacustomerallocation [".hideEmptyFieldsOnView"] = true;

$tstrOrderBy = "ORDER BY CustomerName";
if (strlen ( $tstrOrderBy ) && strtolower ( substr ( $tstrOrderBy, 0, 8 ) ) != "order by")
	$tstrOrderBy = "order by " . $tstrOrderBy;
$tdatacustomerallocation [".strOrderBy"] = $tstrOrderBy;

$tdatacustomerallocation [".orderindexes"] = array ();
$tdatacustomerallocation [".orderindexes"] [] = array (
		3,
		(1 ? "ASC" : "DESC"),
		"CustomerName" 
);

$tdatacustomerallocation [".sqlHead"] = "SELECT ca.AutCustID,  ca.OracleID,  ca.CustomerName,  ca.RSAName,  ca.Location,  ca.Supervisor,  ca.StartDate,  ca.EndDate,  ca.Allocation,  ca.Override,  ca.`Size`,  ch.Contract_Start,  ch.SteadyState as SteadyStateDate,  ch.Contract_end as Contract_End,  ca.OnshoreSupportOnly,  ca.PlatformType,  ca.PlatformName,  ca.`Role`,  ca.TimeZone, ca.Project,  ca.Stage";
$tdatacustomerallocation [".sqlFrom"] = "FROM customerallocation ca LEFT JOIN customer_header ch ON( ca.OracleID = ch.OracIeID)";
$tdatacustomerallocation [".sqlWhereExpr"] = "";
$tdatacustomerallocation [".sqlTail"] = "";

// fill array of records per page for list and report without group fields
$arrRPP = array ();
$arrRPP [] = 10;
$arrRPP [] = 20;
$arrRPP [] = 30;
$arrRPP [] = 50;
$arrRPP [] = 100;
$arrRPP [] = 500;
$arrRPP [] = - 1;
$tdatacustomerallocation [".arrRecsPerPage"] = $arrRPP;

// fill array of groups per page for report with group fields
$arrGPP = array ();
$arrGPP [] = 1;
$arrGPP [] = 3;
$arrGPP [] = 5;
$arrGPP [] = 10;
$arrGPP [] = 50;
$arrGPP [] = 100;
$arrGPP [] = - 1;
$tdatacustomerallocation [".arrGroupsPerPage"] = $arrGPP;

$tableKeyscustomerallocation = array ();
$tableKeyscustomerallocation [] = "AutCustID";
$tdatacustomerallocation [".Keys"] = $tableKeyscustomerallocation;

$tdatacustomerallocation [".listFields"] = array ();
$tdatacustomerallocation [".listFields"] [] = "OracleID";
$tdatacustomerallocation [".listFields"] [] = "CustomerName";
$tdatacustomerallocation [".listFields"] [] = "Stage";
$tdatacustomerallocation [".listFields"] [] = "Size";
//$tdatacustomerallocation [".listFields"] [] = "Contract_Start";
//$tdatacustomerallocation [".listFields"] [] = "SteadyStateDate";
//$tdatacustomerallocation [".listFields"] [] = "Contract_End";
if( IsAdmin() || '1' != $groupID ) {
	$tdatacustomerallocation [".listFields"] [] = "Supervisor";
	$tdatacustomerallocation [".listFields"] [] = "OnshoreSupportOnly";
	$tdatacustomerallocation [".listFields"] [] = "RSAName";
	$tdatacustomerallocation [".listFields"] [] = "Allocation";
	$tdatacustomerallocation [".listFields"] [] = "Override";
}

$tdatacustomerallocation [".listFields"] [] = "Role";
$tdatacustomerallocation [".listFields"] [] = "PlatformName";
$tdatacustomerallocation [".listFields"] [] = "StartDate";
$tdatacustomerallocation [".listFields"] [] = "EndDate";


$tdatacustomerallocation [".hideMobileList"] = array ();

$tdatacustomerallocation [".viewFields"] = array ();
$tdatacustomerallocation [".viewFields"] [] = "Allocation";
$tdatacustomerallocation [".viewFields"] [] = "OracleID";
$tdatacustomerallocation [".viewFields"] [] = "CustomerName";
$tdatacustomerallocation [".viewFields"] [] = "TimeZone";
$tdatacustomerallocation [".viewFields"] [] = "Stage";
$tdatacustomerallocation [".viewFields"] [] = "Size";
$tdatacustomerallocation [".viewFields"] [] = "Contract_Start";
$tdatacustomerallocation [".viewFields"] [] = "SteadyStateDate";
$tdatacustomerallocation [".viewFields"] [] = "Contract_End";
$tdatacustomerallocation [".viewFields"] [] = "OnshoreSupportOnly";
$tdatacustomerallocation [".viewFields"] [] = "Supervisor";
$tdatacustomerallocation [".viewFields"] [] = "RSAName";
$tdatacustomerallocation [".viewFields"] [] = "Role";
$tdatacustomerallocation [".viewFields"] [] = "PlatformName";
$tdatacustomerallocation [".viewFields"] [] = "StartDate";
$tdatacustomerallocation [".viewFields"] [] = "EndDate";
$tdatacustomerallocation [".viewFields"] [] = "Override";
$tdatacustomerallocation [".viewFields"] [] = "Project";

$tdatacustomerallocation [".addFields"] = array ();
$tdatacustomerallocation [".addFields"] [] = "Allocation";
$tdatacustomerallocation [".addFields"] [] = "OracleID";
$tdatacustomerallocation [".addFields"] [] = "CustomerName";
$tdatacustomerallocation [".addFields"] [] = "TimeZone";
$tdatacustomerallocation [".addFields"] [] = "Stage";
$tdatacustomerallocation [".addFields"] [] = "Size";
$tdatacustomerallocation [".addFields"] [] = "Contract_Start";
$tdatacustomerallocation [".addFields"] [] = "SteadyStateDate";
$tdatacustomerallocation [".addFields"] [] = "Contract_End";
$tdatacustomerallocation [".addFields"] [] = "OnshoreSupportOnly";
$tdatacustomerallocation [".addFields"] [] = "Location";
$tdatacustomerallocation [".addFields"] [] = "Supervisor";
$tdatacustomerallocation [".addFields"] [] = "RSAName";
$tdatacustomerallocation [".addFields"] [] = "Role";
$tdatacustomerallocation [".addFields"] [] = "PlatformName";
$tdatacustomerallocation [".addFields"] [] = "StartDate";
$tdatacustomerallocation [".addFields"] [] = "EndDate";
$tdatacustomerallocation [".addFields"] [] = "Override";
//$tdatacustomerallocation [".addFields"] [] = "Project";

$tdatacustomerallocation [".masterListFields"] = array ();
$tdatacustomerallocation [".masterListFields"] [] = "Allocation";
$tdatacustomerallocation [".masterListFields"] [] = "AutCustID";
$tdatacustomerallocation [".masterListFields"] [] = "OracleID";
$tdatacustomerallocation [".masterListFields"] [] = "CustomerName";
$tdatacustomerallocation [".masterListFields"] [] = "TimeZone";
$tdatacustomerallocation [".masterListFields"] [] = "Stage";
$tdatacustomerallocation [".masterListFields"] [] = "Size";
$tdatacustomerallocation [".masterListFields"] [] = "Contract_Start";
$tdatacustomerallocation [".masterListFields"] [] = "SteadyStateDate";
$tdatacustomerallocation [".masterListFields"] [] = "Contract_End";
$tdatacustomerallocation [".masterListFields"] [] = "OnshoreSupportOnly";
$tdatacustomerallocation [".masterListFields"] [] = "Supervisor";
$tdatacustomerallocation [".masterListFields"] [] = "Location";
$tdatacustomerallocation [".masterListFields"] [] = "RSAName";
$tdatacustomerallocation [".masterListFields"] [] = "Role";
$tdatacustomerallocation [".masterListFields"] [] = "PlatformType";
$tdatacustomerallocation [".masterListFields"] [] = "PlatformName";
$tdatacustomerallocation [".masterListFields"] [] = "StartDate";
$tdatacustomerallocation [".masterListFields"] [] = "EndDate";
$tdatacustomerallocation [".masterListFields"] [] = "Override";
$tdatacustomerallocation [".masterListFields"] [] = "Project";

$tdatacustomerallocation [".inlineAddFields"] = array ();

$tdatacustomerallocation [".editFields"] = array ();
$tdatacustomerallocation [".editFields"] [] = "Allocation";
$tdatacustomerallocation [".editFields"] [] = "OracleID";
$tdatacustomerallocation [".editFields"] [] = "CustomerName";
$tdatacustomerallocation [".editFields"] [] = "TimeZone";
$tdatacustomerallocation [".editFields"] [] = "Stage";
$tdatacustomerallocation [".editFields"] [] = "Size";
$tdatacustomerallocation [".editFields"] [] = "Contract_Start";
$tdatacustomerallocation [".editFields"] [] = "SteadyStateDate";
$tdatacustomerallocation [".editFields"] [] = "Contract_End";
$tdatacustomerallocation [".editFields"] [] = "OnshoreSupportOnly";
$tdatacustomerallocation [".editFields"] [] = "Location";
$tdatacustomerallocation [".editFields"] [] = "Supervisor";
$tdatacustomerallocation [".editFields"] [] = "RSAName";
$tdatacustomerallocation [".editFields"] [] = "Role";
$tdatacustomerallocation [".editFields"] [] = "PlatformName";
$tdatacustomerallocation [".editFields"] [] = "StartDate";
$tdatacustomerallocation [".editFields"] [] = "EndDate";
$tdatacustomerallocation [".editFields"] [] = "Override";
//$tdatacustomerallocation [".editFields"] [] = "Project";

$tdatacustomerallocation [".inlineEditFields"] = array ();

$tdatacustomerallocation [".exportFields"] = array ();
$tdatacustomerallocation [".exportFields"] [] = "AutCustID";
$tdatacustomerallocation [".exportFields"] [] = "Allocation";
$tdatacustomerallocation [".exportFields"] [] = "OracleID";
$tdatacustomerallocation [".exportFields"] [] = "CustomerName";
$tdatacustomerallocation [".exportFields"] [] = "TimeZone";
$tdatacustomerallocation [".exportFields"] [] = "Stage";
$tdatacustomerallocation [".exportFields"] [] = "Size";
$tdatacustomerallocation [".exportFields"] [] = "Contract_Start";
$tdatacustomerallocation [".exportFields"] [] = "SteadyStateDate";
$tdatacustomerallocation [".exportFields"] [] = "Contract_End";
$tdatacustomerallocation [".exportFields"] [] = "OnshoreSupportOnly";
$tdatacustomerallocation [".exportFields"] [] = "Supervisor";
$tdatacustomerallocation [".exportFields"] [] = "RSAName";
$tdatacustomerallocation [".exportFields"] [] = "Role";
$tdatacustomerallocation [".exportFields"] [] = "PlatformName";
$tdatacustomerallocation [".exportFields"] [] = "StartDate";
$tdatacustomerallocation [".exportFields"] [] = "EndDate";
$tdatacustomerallocation [".exportFields"] [] = "Override";

$tdatacustomerallocation [".importFields"] = array ();
$tdatacustomerallocation [".importFields"] [] = "AutCustID";
$tdatacustomerallocation [".importFields"] [] = "OracleID";
$tdatacustomerallocation [".importFields"] [] = "CustomerName";
$tdatacustomerallocation [".importFields"] [] = "TimeZone";
$tdatacustomerallocation [".importFields"] [] = "Stage";
$tdatacustomerallocation [".importFields"] [] = "Size";
$tdatacustomerallocation [".importFields"] [] = "Contract_Start";
$tdatacustomerallocation [".importFields"] [] = "SteadyStateDate";
$tdatacustomerallocation [".importFields"] [] = "Contract_End";
$tdatacustomerallocation [".importFields"] [] = "OnshoreSupportOnly";
$tdatacustomerallocation [".importFields"] [] = "Location";
$tdatacustomerallocation [".importFields"] [] = "Supervisor";
$tdatacustomerallocation [".importFields"] [] = "RSAName";
$tdatacustomerallocation [".importFields"] [] = "Role";
$tdatacustomerallocation [".importFields"] [] = "PlatformName";
$tdatacustomerallocation [".importFields"] [] = "StartDate";
$tdatacustomerallocation [".importFields"] [] = "EndDate";
$tdatacustomerallocation [".importFields"] [] = "Allocation";
$tdatacustomerallocation [".importFields"] [] = "Override";
$tdatacustomerallocation [".importFields"] [] = "Project";

$tdatacustomerallocation [".printFields"] = array ();

// AutCustID
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 1;
$fdata ["strName"] = "AutCustID";
$fdata ["GoodName"] = "AutCustID";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "customerallocation", "AutCustID" );
$fdata ["FieldType"] = 3;
$fdata ["AutoInc"] = true;
$fdata ["strField"] = "AutCustID";
$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "AutCustID";
$fdata ["UploadFolder"] = "files";
$fdata ["bExportPage"] = true;
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
$tdatacustomerallocation ["AutCustID"] = $fdata;
// OracleID
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 2;
$fdata ["strName"] = "OracleID";
$fdata ["GoodName"] = "OracleID";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "customerallocation", "OracleID" );
$fdata ["FieldType"] = 200;
$fdata ["bListPage"] = true;
$fdata ["bAddPage"] = true;
$fdata ["bEditPage"] = true;
$fdata ["bViewPage"] = true;
$fdata ["bAdvancedSearch"] = true;
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
// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";
// the end of search options settings
$tdatacustomerallocation ["OracleID"] = $fdata;
// CustomerName
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 3;
$fdata ["strName"] = "CustomerName";
$fdata ["GoodName"] = "CustomerName";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "customerallocation", "CustomerName" );
$fdata ["FieldType"] = 200;
$fdata ["bListPage"] = true;
$fdata ["bAddPage"] = true;
$fdata ["bEditPage"] = true;
$fdata ["bViewPage"] = true;
$fdata ["bAdvancedSearch"] = true;
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

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

// the end of search options settings

$tdatacustomerallocation ["CustomerName"] = $fdata;
// RSAName
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 4;
$fdata ["strName"] = "RSAName";
$fdata ["GoodName"] = "RSAName";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "customerallocation", "RSAName" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;
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
$edata ["LCType"] = 0;

$edata ["LinkField"] = "FullName";
$edata ["LinkFieldType"] = 3;
$edata ["DisplayField"] = "FullName";

$edata ["LookupOrderBy"] = "FirstName";

$edata ["UseCategory"] = true;
$edata ["categoryFields"] = array ();
$edata ["categoryFields"] [] = array (
		"main" => "Supervisor",
		"lookup" => "SupervisorID" 
);

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
$edata ["LCType"] = 0;

$edata ["LinkField"] = "FullName";
$edata ["LinkFieldType"] = 3;
$edata ["DisplayField"] = "FullName";

$edata ["LookupOrderBy"] = "FullName";

$edata ["UseCategory"] = true;
$edata ["categoryFields"] = array ();
$edata ["categoryFields"] [] = array (
		"main" => "Supervisor",
		"lookup" => "SupervisorID" 
);

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

$tdatacustomerallocation ["RSAName"] = $fdata;
// Location
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 5;
$fdata ["strName"] = "Location";
$fdata ["GoodName"] = "Location";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "customerallocation", "Location" );
$fdata ["FieldType"] = 200;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

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

$tdatacustomerallocation ["Location"] = $fdata;
// Supervisor
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 6;
$fdata ["strName"] = "Supervisor";
$fdata ["GoodName"] = "Supervisor";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "customerallocation", "Supervisor" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

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

// dependent dropdowns
$edata ["DependentLookups"] = array ();
$edata ["DependentLookups"] [] = "RSAName";
$edata ["DependentLookups"] [] = "RSAName";

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

$tdatacustomerallocation ["Supervisor"] = $fdata;
// StartDate
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 7;
$fdata ["strName"] = "StartDate";
$fdata ["GoodName"] = "StartDate";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "customerallocation", "StartDate" );
$fdata ["FieldType"] = 7;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bViewPage"] = true;

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

$tdatacustomerallocation ["StartDate"] = $fdata;
// EndDate
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 8;
$fdata ["strName"] = "EndDate";
$fdata ["GoodName"] = "EndDate";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "customerallocation", "EndDate" );
$fdata ["FieldType"] = 7;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

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

$tdatacustomerallocation ["EndDate"] = $fdata;
// Allocation
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 9;
$fdata ["strName"] = "Allocation";
$fdata ["GoodName"] = "Allocation";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "customerallocation", "Allocation" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Allocation";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Allocation";

$fdata ["FieldPermissions"] = true;

$fdata ["UploadFolder"] = "files";

// Begin View Formats
$fdata ["ViewFormats"] = array ();

$vdata = array (
		"ViewFormat" => "Percent" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["view"] = $vdata;
$vdata = array (
		"ViewFormat" => "Percent" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["list"] = $vdata;
$vdata = array (
		"ViewFormat" => "Percent" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["print"] = $vdata;
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
$edata = array (
		"EditFormat" => "Text field" 
);

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["HTML5InuptType"] = "text";

$edata ["EditParams"] = "";
$edata ["EditParams"] .= " maxlength=50";

$edata ["controlWidth"] = 130;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = getJsValidatorName ( "Number" );

// End validation

$fdata ["EditFormats"] ["register"] = $edata;
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

$fdata ["EditFormats"] ["add"] = $edata;
$edata = array (
		"EditFormat" => "Text field" 
);

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["HTML5InuptType"] = "text";

$edata ["EditParams"] = "";
$edata ["EditParams"] .= " maxlength=50";

$edata ["controlWidth"] = 130;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = getJsValidatorName ( "Number" );

// End validation

$fdata ["EditFormats"] ["search"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = true;

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

// the end of search options settings

$tdatacustomerallocation ["Allocation"] = $fdata;
// Override
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 10;
$fdata ["strName"] = "Override";
$fdata ["GoodName"] = "Override";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "customerallocation", "Override" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Override";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Override";

$fdata ["FieldPermissions"] = true;

$fdata ["UploadFolder"] = "files";

// Begin View Formats
$fdata ["ViewFormats"] = array ();

$vdata = array (
		"ViewFormat" => "Percent" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["view"] = $vdata;
$vdata = array (
		"ViewFormat" => "Percent" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["list"] = $vdata;
$vdata = array (
		"ViewFormat" => "Percent" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["print"] = $vdata;
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

$edata ["controlWidth"] = 110;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = getJsValidatorName ( "Number" );

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
$edata = array (
		"EditFormat" => "Text field" 
);

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["HTML5InuptType"] = "text";

$edata ["EditParams"] = "";
$edata ["EditParams"] .= " maxlength=50";

$edata ["controlWidth"] = 110;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

// End validation

$fdata ["EditFormats"] ["register"] = $edata;
$edata = array (
		"EditFormat" => "Text field" 
);

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["HTML5InuptType"] = "text";

$edata ["EditParams"] = "";
$edata ["EditParams"] .= " maxlength=50";

$edata ["controlWidth"] = 110;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = getJsValidatorName ( "Number" );

// End validation

$fdata ["EditFormats"] ["add"] = $edata;
$edata = array (
		"EditFormat" => "Text field" 
);

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["HTML5InuptType"] = "text";

$edata ["EditParams"] = "";
$edata ["EditParams"] .= " maxlength=50";

$edata ["controlWidth"] = 110;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

// End validation

$fdata ["EditFormats"] ["search"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = true;

// the field's search options settings

// the end of search options settings

$tdatacustomerallocation ["Override"] = $fdata;
// Size
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 11;
$fdata ["strName"] = "Size";
$fdata ["GoodName"] = "Size";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "customerallocation", "Size" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Size";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "`Size`";

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
$edata ["LookupTable"] = "sizecategory";
$edata ["autoCompleteFieldsOnEdit"] = 0;
$edata ["autoCompleteFields"] = array ();

$edata ["LCType"] = 0;

$edata ["LinkField"] = "StagecatID";
$edata ["LinkFieldType"] = 3;
$edata ["DisplayField"] = "CategoryName";
$edata ["LookupOrderBy"] = "";
// dependent dropdowns
$edata ["DependentLookups"] = array ();
$edata ["DependentLookups"] [] = "Stage";

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

$tdatacustomerallocation ["Size"] = $fdata;
// Contract_Start
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 12;
$fdata ["strName"] = "Contract_Start";
$fdata ["GoodName"] = "Contract_Start";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "customerallocation", "Contract_Start" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Contract_Start";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Contract_Start";

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

$fdata ["EditFormats"] ["register"] = $edata;
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

$fdata ["EditFormats"] ["add"] = $edata;
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

$tdatacustomerallocation ["Contract_Start"] = $fdata;
// SteadyStateDate
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 13;
$fdata ["strName"] = "SteadyStateDate";
$fdata ["GoodName"] = "SteadyStateDate";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "customerallocation", "SteadyStateDate" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "SteadyStateDate";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "SteadyStateDate";

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
		"EditFormat" => "Readonly" 
);

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

$tdatacustomerallocation ["SteadyStateDate"] = $fdata;
// Contract_End
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 14;
$fdata ["strName"] = "Contract_End";
$fdata ["GoodName"] = "Contract_End";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "customerallocation", "Contract_End" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Contract_End";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Contract_End";

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
		"EditFormat" => "Readonly" 
);

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 90;

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

$tdatacustomerallocation ["Contract_End"] = $fdata;
// OnshoreSupportOnly
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 15;
$fdata ["strName"] = "OnshoreSupportOnly";
$fdata ["GoodName"] = "OnshoreSupportOnly";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "customerallocation", "OnshoreSupportOnly" );
$fdata ["FieldType"] = 16;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "OnshoreSupportOnly";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "OnshoreSupportOnly";

$fdata ["FieldPermissions"] = true;

$fdata ["UploadFolder"] = "files";

// Begin View Formats
$fdata ["ViewFormats"] = array ();

$vdata = array (
		"ViewFormat" => "Checkbox" 
);

$fdata ["ViewFormats"] ["view"] = $vdata;
$vdata = array (
		"ViewFormat" => "Checkbox" 
);

$fdata ["ViewFormats"] ["list"] = $vdata;
$vdata = array (
		"ViewFormat" => "Checkbox" 
);

$fdata ["ViewFormats"] ["print"] = $vdata;
// End View Formats

// Begin Edit Formats
$fdata ["EditFormats"] = array ();

$edata = array (
		"EditFormat" => "Readonly" 
);

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 50;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
$edata = array (
		"EditFormat" => "Checkbox" 
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

$edata ["controlWidth"] = 60;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

// End validation

$fdata ["EditFormats"] ["add"] = $edata;
$edata = array (
		"EditFormat" => "Checkbox" 
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

$tdatacustomerallocation ["OnshoreSupportOnly"] = $fdata;
// PlatformType
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 16;
$fdata ["strName"] = "PlatformType";
$fdata ["GoodName"] = "PlatformType";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "customerallocation", "PlatformType" );
$fdata ["FieldType"] = 200;

$fdata ["strField"] = "PlatformType";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "PlatformType";

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
$edata ["LinkFieldType"] = 0;
$edata ["DisplayField"] = "CategotyName";

$edata ["LookupOrderBy"] = "CategotyName";

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

$tdatacustomerallocation ["PlatformType"] = $fdata;
// PlatformName
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 17;
$fdata ["strName"] = "PlatformName";
$fdata ["GoodName"] = "PlatformName";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "customerallocation", "PlatformName" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

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

$tdatacustomerallocation ["PlatformName"] = $fdata;
// Role
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 18;
$fdata ["strName"] = "Role";
$fdata ["GoodName"] = "Role";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "customerallocation", "Role" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bViewPage"] = true;

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

$edata ["UseCategory"] = true;
$edata ["categoryFields"] = array ();
$edata ["categoryFields"] [] = array (
		"main" => "Stage",
		"lookup" => "Stage" 
);

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

$tdatacustomerallocation ["Role"] = $fdata;
// TimeZone
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 19;
$fdata ["strName"] = "TimeZone";
$fdata ["GoodName"] = "TimeZone";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "customerallocation", "TimeZone" );
$fdata ["FieldType"] = 200;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "TimeZone";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "TimeZone";

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

$edata ["controlWidth"] = 90;

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

$tdatacustomerallocation ["TimeZone"] = $fdata;
// Project
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 20;
$fdata ["strName"] = "Project";
$fdata ["GoodName"] = "Project";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "customerallocation", "Project" );
$fdata ["FieldType"] = 16;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bViewPage"] = true;

$fdata ["strField"] = "Project";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Project";

$fdata ["FieldPermissions"] = true;

$fdata ["UploadFolder"] = "files";

// Begin View Formats
$fdata ["ViewFormats"] = array ();

$vdata = array (
		"ViewFormat" => "Checkbox" 
);

$fdata ["ViewFormats"] ["view"] = $vdata;
$vdata = array (
		"ViewFormat" => "Checkbox" 
);

$fdata ["ViewFormats"] ["list"] = $vdata;
$vdata = array (
		"ViewFormat" => "Checkbox" 
);

$fdata ["ViewFormats"] ["print"] = $vdata;
// End View Formats

// Begin Edit Formats
$fdata ["EditFormats"] = array ();

$edata = array (
		"EditFormat" => "Readonly" 
);

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 40;

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

$edata ["controlWidth"] = 40;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

// End validation

$fdata ["EditFormats"] ["register"] = $edata;
$edata = array (
		"EditFormat" => "Checkbox" 
);

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 40;

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

$edata ["controlWidth"] = 40;

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

$tdatacustomerallocation ["Project"] = $fdata;
// Stage
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 21;
$fdata ["strName"] = "Stage";
$fdata ["GoodName"] = "Stage";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "customerallocation", "Stage" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Stage";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Stage";

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
$edata ["LookupTable"] = "stage2";
$edata ["autoCompleteFieldsOnEdit"] = 1;
$edata ["autoCompleteFields"] = array ();
$edata ["LCType"] = 0;

$edata ["LinkField"] = "PK1";
$edata ["LinkFieldType"] = 0;
$edata ["DisplayField"] = "Activity";

$edata ["LookupOrderBy"] = "";

$edata ["UseCategory"] = true;
$edata ["categoryFields"] = array ();
$edata ["categoryFields"] [] = array (
		"main" => "Size",
		"lookup" => "CategoryID" 
);

// dependent dropdowns
$edata ["DependentLookups"] = array ();
$edata ["DependentLookups"] [] = "Role";

$edata ["SelectSize"] = 1;

// End Lookup Settings

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 110;

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

$tdatacustomerallocation ["Stage"] = $fdata;

$tables_data ["customerallocation"] = &$tdatacustomerallocation;
$field_labels ["customerallocation"] = &$fieldLabelscustomerallocation;
$fieldToolTips ["customerallocation"] = &$fieldToolTipscustomerallocation;
$page_titles ["customerallocation"] = &$pageTitlescustomerallocation;

// -----------------start prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData ["customerallocation"] = array ();

// tables which are master tables for current table (detail)
$masterTablesData ["customerallocation"] = array ();

$strOriginalDetailsTable = "customerallocation";
$masterParams = array ();
$masterParams ["mDataSourceTable"] = "Workload";
$masterParams ["mOriginalTable"] = $strOriginalDetailsTable;
$masterParams ["mShortTable"] = "Workload";
$masterParams ["masterKeys"] = array ();
$masterParams ["detailKeys"] = array ();
$masterParams ["dispChildCount"] = "1";
$masterParams ["hideChild"] = "1";
$masterParams ["dispInfo"] = "1";
$masterParams ["previewOnList"] = 1;
$masterParams ["previewOnAdd"] = 0;
$masterParams ["previewOnEdit"] = 0;
$masterParams ["previewOnView"] = 0;
$masterParams ["proceedLink"] = 1;

$masterParams ["type"] = PAGE_LIST;
$masterParams ["type"] = PAGE_CHART;
$masterTablesData ["customerallocation"] [0] = $masterParams;
$masterTablesData ["customerallocation"] [0] ["masterKeys"] = array ();
$masterTablesData ["customerallocation"] [0] ["masterKeys"] [] = "RSAName";
$masterTablesData ["customerallocation"] [0] ["detailKeys"] = array ();
$masterTablesData ["customerallocation"] [0] ["detailKeys"] [] = "RSAName";

// -----------------end prepare master-details data arrays ------------------------------//

require_once (getabspath ( "classes/sql.php" ));
function createSqlQuery_customerallocation() {
	
	if( false == is_null( $_SESSION['UserName'] ) ) {
		$userName = $_SESSION['UserName'];
	}
	
	if( false == is_null( $_SESSION['UserID']) ) {
		$userID = $_SESSION["UserID"];
		$groupID = $_SESSION["UserRights"][$userID][".Groups"][0];
	}

	$proto3 = array ();
	$proto3 ["m_strHead"] = "SELECT ";
	$proto3 ["m_strFieldList"] = "ca.AutCustID,  ca.OracleID,  ca.CustomerName,  ca.RSAName,  ca.Location,  ca.Supervisor,  ca.StartDate,  ca.EndDate,  ca.Allocation,  ca.Override,  ca.`Size`,  ch.Contract_Start,  ch.SteadyState as SteadyStateDate,  ch.Contract_end as Contract_End,  ca.OnshoreSupportOnly,  ca.PlatformType,  ca.PlatformName,  ca.`Role`,  ca.TimeZone, ca.Project,  ca.Stage";
	$proto3 ["m_strFrom"] = "FROM customerallocation ca LEFT JOIN customer_header ch ON(ca.OracleID = ch.OracIeID)";
	$proto3 ["m_strWhere"] = "";
	$proto3 ["m_strOrderBy"] = "ORDER BY CustomerName";
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
		global $conn;
		$strSQL = "SELECT DISTINCT td.SupervisorID, td.FullName FROM customerallocation ca JOIN tbl_director td ON( ca.Supervisor = td.SupervisorID ) WHERE td.FullName = '" . $userName . "'";
		$rs = db_query($strSQL,$conn);
		while ($data = db_fetch_array($rs))
			$supervisorID = $data['SupervisorID'];
		$proto4 ["m_sql"] = "RSAName = '". $userName ."' OR Supervisor = '" . $supervisorID . "'";
		$proto4 ["m_uniontype"] = "SQLL_UNKNOWN";
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
			"m_srcTableName" => "customerallocation" 
	) );
	
	$proto8 ["m_sql"] = "AutCustID";
	$proto8 ["m_srcTableName"] = "customerallocation";
	$proto8 ["m_expr"] = $obj;
	$proto8 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto8 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto10 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "OracleID",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "customerallocation" 
	) );
	
	$proto10 ["m_sql"] = "OracleID";
	$proto10 ["m_srcTableName"] = "customerallocation";
	$proto10 ["m_expr"] = $obj;
	$proto10 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto10 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto12 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "CustomerName",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "customerallocation" 
	) );
	
	$proto12 ["m_sql"] = "CustomerName";
	$proto12 ["m_srcTableName"] = "customerallocation";
	$proto12 ["m_expr"] = $obj;
	$proto12 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto12 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto14 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "RSAName",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "customerallocation" 
	) );
	
	$proto14 ["m_sql"] = "RSAName";
	$proto14 ["m_srcTableName"] = "customerallocation";
	$proto14 ["m_expr"] = $obj;
	$proto14 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto14 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto16 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Location",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "customerallocation" 
	) );
	
	$proto16 ["m_sql"] = "Location";
	$proto16 ["m_srcTableName"] = "customerallocation";
	$proto16 ["m_expr"] = $obj;
	$proto16 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto16 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto18 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Supervisor",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "customerallocation" 
	) );
	
	$proto18 ["m_sql"] = "Supervisor";
	$proto18 ["m_srcTableName"] = "customerallocation";
	$proto18 ["m_expr"] = $obj;
	$proto18 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto18 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto20 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "StartDate",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "customerallocation" 
	) );
	
	$proto20 ["m_sql"] = "StartDate";
	$proto20 ["m_srcTableName"] = "customerallocation";
	$proto20 ["m_expr"] = $obj;
	$proto20 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto20 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto22 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "EndDate",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "customerallocation" 
	) );
	
	$proto22 ["m_sql"] = "EndDate";
	$proto22 ["m_srcTableName"] = "customerallocation";
	$proto22 ["m_expr"] = $obj;
	$proto22 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto22 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto24 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Allocation",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "customerallocation" 
	) );
	
	$proto24 ["m_sql"] = "Allocation";
	$proto24 ["m_srcTableName"] = "customerallocation";
	$proto24 ["m_expr"] = $obj;
	$proto24 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto24 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto26 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Override",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "customerallocation" 
	) );
	
	$proto26 ["m_sql"] = "Override";
	$proto26 ["m_srcTableName"] = "customerallocation";
	$proto26 ["m_expr"] = $obj;
	$proto26 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto26 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto28 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Size",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "customerallocation" 
	) );
	
	$proto28 ["m_sql"] = "`Size`";
	$proto28 ["m_srcTableName"] = "customerallocation";
	$proto28 ["m_expr"] = $obj;
	$proto28 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto28 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto30 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Contract_Start",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "customerallocation" 
	) );
	
	$proto30 ["m_sql"] = "Contract_Start";
	$proto30 ["m_srcTableName"] = "customerallocation";
	$proto30 ["m_expr"] = $obj;
	$proto30 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto30 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto32 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "SteadyStateDate",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "customerallocation" 
	) );
	
	$proto32 ["m_sql"] = "SteadyStateDate";
	$proto32 ["m_srcTableName"] = "customerallocation";
	$proto32 ["m_expr"] = $obj;
	$proto32 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto32 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto34 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Contract_End",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "customerallocation" 
	) );
	
	$proto34 ["m_sql"] = "Contract_End";
	$proto34 ["m_srcTableName"] = "customerallocation";
	$proto34 ["m_expr"] = $obj;
	$proto34 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto34 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto36 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "OnshoreSupportOnly",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "customerallocation" 
	) );
	
	$proto36 ["m_sql"] = "OnshoreSupportOnly";
	$proto36 ["m_srcTableName"] = "customerallocation";
	$proto36 ["m_expr"] = $obj;
	$proto36 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto36 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto38 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "PlatformType",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "customerallocation" 
	) );
	
	$proto38 ["m_sql"] = "PlatformType";
	$proto38 ["m_srcTableName"] = "customerallocation";
	$proto38 ["m_expr"] = $obj;
	$proto38 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto38 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto40 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "PlatformName",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "customerallocation" 
	) );
	
	$proto40 ["m_sql"] = "PlatformName";
	$proto40 ["m_srcTableName"] = "customerallocation";
	$proto40 ["m_expr"] = $obj;
	$proto40 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto40 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto42 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Role",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "customerallocation" 
	) );
	
	$proto42 ["m_sql"] = "`Role`";
	$proto42 ["m_srcTableName"] = "customerallocation";
	$proto42 ["m_expr"] = $obj;
	$proto42 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto42 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto44 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "TimeZone",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "customerallocation" 
	) );
	
	$proto44 ["m_sql"] = "TimeZone";
	$proto44 ["m_srcTableName"] = "customerallocation";
	$proto44 ["m_expr"] = $obj;
	$proto44 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto44 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto46 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Project",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "customerallocation" 
	) );
	
	$proto46 ["m_sql"] = "Project";
	$proto46 ["m_srcTableName"] = "customerallocation";
	$proto46 ["m_expr"] = $obj;
	$proto46 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto46 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto48 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Stage",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "customerallocation" 
	) );
	
	$proto48 ["m_sql"] = "Stage";
	$proto48 ["m_srcTableName"] = "customerallocation";
	$proto48 ["m_expr"] = $obj;
	$proto48 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto48 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto3 ["m_fromlist"] = array ();
	$proto50 = array ();
	$proto50 ["m_link"] = "SQLL_MAIN";
	$proto51 = array ();
	$proto51 ["m_strName"] = "customerallocation";
	$proto51 ["m_srcTableName"] = "customerallocation";
	$proto51 ["m_columns"] = array ();
	$proto51 ["m_columns"] [] = "AutCustID";
	$proto51 ["m_columns"] [] = "OracleID";
	$proto51 ["m_columns"] [] = "CustomerName";
	$proto51 ["m_columns"] [] = "Stage";
	$proto51 ["m_columns"] [] = "RSAName";
	$proto51 ["m_columns"] [] = "Location";
	$proto51 ["m_columns"] [] = "Supervisor";
	$proto51 ["m_columns"] [] = "StartDate";
	$proto51 ["m_columns"] [] = "EndDate";
	$proto51 ["m_columns"] [] = "Allocation";
	$proto51 ["m_columns"] [] = "Override";
	$proto51 ["m_columns"] [] = "Compre_String";
	$proto51 ["m_columns"] [] = "Temp";
	$proto51 ["m_columns"] [] = "Size";
	$proto51 ["m_columns"] [] = "Contract_Start";
	$proto51 ["m_columns"] [] = "SteadyStateDate";
	$proto51 ["m_columns"] [] = "Contract_End";
	$proto51 ["m_columns"] [] = "OnshoreSupportOnly";
	$proto51 ["m_columns"] [] = "Role";
	$proto51 ["m_columns"] [] = "PlatformType";
	$proto51 ["m_columns"] [] = "PlatformName";
	$proto51 ["m_columns"] [] = "TimeZone";
	$proto51 ["m_columns"] [] = "Project";
	$obj = new SQLTable ( $proto51 );
	
	$proto50 ["m_table"] = $obj;
	$proto50 ["m_sql"] = "customerallocation";
	$proto50 ["m_alias"] = "";
	$proto50 ["m_srcTableName"] = "customerallocation";
	$proto52 = array ();
	$proto52 ["m_sql"] = "";
	$proto52 ["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed ( array (
			"m_sql" => "" 
	) );
	
	$proto52 ["m_column"] = $obj;
	$proto52 ["m_contained"] = array ();
	$proto52 ["m_strCase"] = "";
	$proto52 ["m_havingmode"] = false;
	$proto52 ["m_inBrackets"] = false;
	$proto52 ["m_useAlias"] = false;
	$obj = new SQLLogicalExpr ( $proto52 );
	
	$proto50 ["m_joinon"] = $obj;
	$obj = new SQLFromListItem ( $proto50 );
	
	$proto3 ["m_fromlist"] [] = $obj;
	$proto3 ["m_groupby"] = array ();
	$proto3 ["m_orderby"] = array ();
	$proto54 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "CustomerName",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "customerallocation" 
	) );
	
	$proto54 ["m_column"] = $obj;
	$proto54 ["m_bAsc"] = 1;
	$proto54 ["m_nColumn"] = 0;
	$obj = new SQLOrderByItem ( $proto54 );
	
	$proto3 ["m_orderby"] [] = $obj;
	$proto3 ["m_srcTableName"] = "customerallocation";
	$obj = new SQLQuery ( $proto3 );
	
	return $obj;
}
$queryData_customerallocation = createSqlQuery_customerallocation();

$tdatacustomerallocation [".sqlquery"] = $queryData_customerallocation;

include_once (getabspath ( "include/customerallocation_events.php" ));
$tableEvents ["customerallocation"] = new eventclass_customerallocation ();
$tdatacustomerallocation [".hasEvents"] = true;

?>