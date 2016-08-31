<?php
require_once (getabspath ( "classes/cipherer.php" ));

$tdatacustomerallocation_Report = array ();
$tdatacustomerallocation_Report [".truncateText"] = true;
$tdatacustomerallocation_Report [".NumberOfChars"] = 80;
$tdatacustomerallocation_Report [".ShortName"] = "customerallocation_Report";
$tdatacustomerallocation_Report [".OwnerID"] = "";
$tdatacustomerallocation_Report [".OriginalTable"] = "customerallocation";

// field labels
$fieldLabelscustomerallocation_Report = array ();
$fieldToolTipscustomerallocation_Report = array ();
$pageTitlescustomerallocation_Report = array ();

if (mlang_getcurrentlang () == "English") {
	$fieldLabelscustomerallocation_Report ["English"] = array ();
	$fieldToolTipscustomerallocation_Report ["English"] = array ();
	$pageTitlescustomerallocation_Report ["English"] = array ();
	$fieldLabelscustomerallocation_Report ["English"] ["AutCustID"] = "Aut Cust ID";
	$fieldToolTipscustomerallocation_Report ["English"] ["AutCustID"] = "";
	$fieldLabelscustomerallocation_Report ["English"] ["OracleID"] = "Oracle ID";
	$fieldToolTipscustomerallocation_Report ["English"] ["OracleID"] = "";
	$fieldLabelscustomerallocation_Report ["English"] ["CustomerName"] = "Customer Name";
	$fieldToolTipscustomerallocation_Report ["English"] ["CustomerName"] = "";
	$fieldLabelscustomerallocation_Report ["English"] ["Stage"] = "Stage";
	$fieldToolTipscustomerallocation_Report ["English"] ["Stage"] = "";
	$fieldLabelscustomerallocation_Report ["English"] ["RSAName"] = "RSAName";
	$fieldToolTipscustomerallocation_Report ["English"] ["RSAName"] = "";
	$fieldLabelscustomerallocation_Report ["English"] ["Location"] = "Location";
	$fieldToolTipscustomerallocation_Report ["English"] ["Location"] = "";
	$fieldLabelscustomerallocation_Report ["English"] ["Supervisor"] = "Supervisor";
	$fieldToolTipscustomerallocation_Report ["English"] ["Supervisor"] = "";
	$fieldLabelscustomerallocation_Report ["English"] ["StartDate"] = "Start Date";
	$fieldToolTipscustomerallocation_Report ["English"] ["StartDate"] = "";
	$fieldLabelscustomerallocation_Report ["English"] ["EndDate"] = "End Date";
	$fieldToolTipscustomerallocation_Report ["English"] ["EndDate"] = "";
	$fieldLabelscustomerallocation_Report ["English"] ["Allocation"] = "Allocation";
	$fieldToolTipscustomerallocation_Report ["English"] ["Allocation"] = "";
	$fieldLabelscustomerallocation_Report ["English"] ["Override"] = "Override";
	$fieldToolTipscustomerallocation_Report ["English"] ["Override"] = "";
	$fieldLabelscustomerallocation_Report ["English"] ["Compre_String"] = "Compre String";
	$fieldToolTipscustomerallocation_Report ["English"] ["Compre_String"] = "";
	$fieldLabelscustomerallocation_Report ["English"] ["Temp"] = "Temp";
	$fieldToolTipscustomerallocation_Report ["English"] ["Temp"] = "";
	$fieldLabelscustomerallocation_Report ["English"] ["Size"] = "Size";
	$fieldToolTipscustomerallocation_Report ["English"] ["Size"] = "";
	$fieldLabelscustomerallocation_Report ["English"] ["Contract_Start"] = "Contract Start";
	$fieldToolTipscustomerallocation_Report ["English"] ["Contract_Start"] = "";
	$fieldLabelscustomerallocation_Report ["English"] ["SteadyStateDate"] = "Steady State Date";
	$fieldToolTipscustomerallocation_Report ["English"] ["SteadyStateDate"] = "";
	$fieldLabelscustomerallocation_Report ["English"] ["Contract_End"] = "Contract End";
	$fieldToolTipscustomerallocation_Report ["English"] ["Contract_End"] = "";
	$fieldLabelscustomerallocation_Report ["English"] ["OnshoreSupportOnly"] = "Onshore Support Only";
	$fieldToolTipscustomerallocation_Report ["English"] ["OnshoreSupportOnly"] = "";
	$fieldLabelscustomerallocation_Report ["English"] ["Role"] = "Role";
	$fieldToolTipscustomerallocation_Report ["English"] ["Role"] = "";
	$fieldLabelscustomerallocation_Report ["English"] ["PlatformType"] = "Platform Type";
	$fieldToolTipscustomerallocation_Report ["English"] ["PlatformType"] = "";
	$fieldLabelscustomerallocation_Report ["English"] ["PlatformName"] = "Platform Name";
	$fieldToolTipscustomerallocation_Report ["English"] ["PlatformName"] = "";
	$fieldLabelscustomerallocation_Report ["English"] ["TimeZone"] = "Time Zone";
	$fieldToolTipscustomerallocation_Report ["English"] ["TimeZone"] = "";
	$fieldLabelscustomerallocation_Report ["English"] ["Project"] = "Project";
	$fieldToolTipscustomerallocation_Report ["English"] ["Project"] = "";
	if (count ( $fieldToolTipscustomerallocation_Report ["English"] ))
		$tdatacustomerallocation_Report [".isUseToolTips"] = true;
}
if (mlang_getcurrentlang () == "") {
	$fieldLabelscustomerallocation_Report [""] = array ();
	$fieldToolTipscustomerallocation_Report [""] = array ();
	$pageTitlescustomerallocation_Report [""] = array ();
	$fieldLabelscustomerallocation_Report [""] ["AutCustID"] = "Aut Cust ID";
	$fieldToolTipscustomerallocation_Report [""] ["AutCustID"] = "";
	$fieldLabelscustomerallocation_Report [""] ["OracleID"] = "Oracle ID";
	$fieldToolTipscustomerallocation_Report [""] ["OracleID"] = "";
	$fieldLabelscustomerallocation_Report [""] ["CustomerName"] = "Customer Name";
	$fieldToolTipscustomerallocation_Report [""] ["CustomerName"] = "";
	$fieldLabelscustomerallocation_Report [""] ["Stage"] = "Stage";
	$fieldToolTipscustomerallocation_Report [""] ["Stage"] = "";
	$fieldLabelscustomerallocation_Report [""] ["RSAName"] = "RSAName";
	$fieldToolTipscustomerallocation_Report [""] ["RSAName"] = "";
	$fieldLabelscustomerallocation_Report [""] ["Location"] = "Location";
	$fieldToolTipscustomerallocation_Report [""] ["Location"] = "";
	$fieldLabelscustomerallocation_Report [""] ["Supervisor"] = "Supervisor";
	$fieldToolTipscustomerallocation_Report [""] ["Supervisor"] = "";
	$fieldLabelscustomerallocation_Report [""] ["StartDate"] = "Start Date";
	$fieldToolTipscustomerallocation_Report [""] ["StartDate"] = "";
	$fieldLabelscustomerallocation_Report [""] ["EndDate"] = "End Date";
	$fieldToolTipscustomerallocation_Report [""] ["EndDate"] = "";
	$fieldLabelscustomerallocation_Report [""] ["Allocation"] = "Allocation";
	$fieldToolTipscustomerallocation_Report [""] ["Allocation"] = "";
	$fieldLabelscustomerallocation_Report [""] ["Override"] = "Override";
	$fieldToolTipscustomerallocation_Report [""] ["Override"] = "";
	$fieldLabelscustomerallocation_Report [""] ["Compre_String"] = "Compre String";
	$fieldToolTipscustomerallocation_Report [""] ["Compre_String"] = "";
	$fieldLabelscustomerallocation_Report [""] ["Temp"] = "Temp";
	$fieldToolTipscustomerallocation_Report [""] ["Temp"] = "";
	$fieldLabelscustomerallocation_Report [""] ["Size"] = "Size";
	$fieldToolTipscustomerallocation_Report [""] ["Size"] = "";
	$fieldLabelscustomerallocation_Report [""] ["Contract_Start"] = "Contract Start";
	$fieldToolTipscustomerallocation_Report [""] ["Contract_Start"] = "";
	$fieldLabelscustomerallocation_Report [""] ["SteadyStateDate"] = "Steady State Date";
	$fieldToolTipscustomerallocation_Report [""] ["SteadyStateDate"] = "";
	$fieldLabelscustomerallocation_Report [""] ["Contract_End"] = "Contract End";
	$fieldToolTipscustomerallocation_Report [""] ["Contract_End"] = "";
	$fieldLabelscustomerallocation_Report [""] ["OnshoreSupportOnly"] = "Onshore Support Only";
	$fieldToolTipscustomerallocation_Report [""] ["OnshoreSupportOnly"] = "";
	$fieldLabelscustomerallocation_Report [""] ["Role"] = "Role";
	$fieldToolTipscustomerallocation_Report [""] ["Role"] = "";
	$fieldLabelscustomerallocation_Report [""] ["PlatformType"] = "Platform Type";
	$fieldToolTipscustomerallocation_Report [""] ["PlatformType"] = "";
	$fieldLabelscustomerallocation_Report [""] ["PlatformName"] = "Platform Name";
	$fieldToolTipscustomerallocation_Report [""] ["PlatformName"] = "";
	$fieldLabelscustomerallocation_Report [""] ["TimeZone"] = "Time Zone";
	$fieldToolTipscustomerallocation_Report [""] ["TimeZone"] = "";
	$fieldLabelscustomerallocation_Report [""] ["Project"] = "Project";
	$fieldToolTipscustomerallocation_Report [""] ["Project"] = "";
	if (count ( $fieldToolTipscustomerallocation_Report [""] ))
		$tdatacustomerallocation_Report [".isUseToolTips"] = true;
}

$tdatacustomerallocation_Report [".NCSearch"] = true;

$tdatacustomerallocation_Report [".shortTableName"] = "customerallocation_Report";
$tdatacustomerallocation_Report [".nSecOptions"] = 0;
$tdatacustomerallocation_Report [".recsPerRowList"] = 1;
$tdatacustomerallocation_Report [".recsPerRowPrint"] = 1;
$tdatacustomerallocation_Report [".mainTableOwnerID"] = "";
$tdatacustomerallocation_Report [".moveNext"] = 1;
$tdatacustomerallocation_Report [".entityType"] = 2;

$tdatacustomerallocation_Report [".strOriginalTableName"] = "customerallocation";

$tdatacustomerallocation_Report [".showAddInPopup"] = false;

$tdatacustomerallocation_Report [".showEditInPopup"] = false;

$tdatacustomerallocation_Report [".showViewInPopup"] = false;

// page's base css files names
$popupPagesLayoutNames = array ();
$tdatacustomerallocation_Report [".popupPagesLayoutNames"] = $popupPagesLayoutNames;

$tdatacustomerallocation_Report [".fieldsForRegister"] = array ();

$tdatacustomerallocation_Report [".listAjax"] = false;

$tdatacustomerallocation_Report [".audit"] = false;

$tdatacustomerallocation_Report [".locking"] = false;

$tdatacustomerallocation_Report [".edit"] = true;
$tdatacustomerallocation_Report [".afterEditAction"] = 1;
$tdatacustomerallocation_Report [".closePopupAfterEdit"] = 1;
$tdatacustomerallocation_Report [".afterEditActionDetTable"] = "";

$tdatacustomerallocation_Report [".add"] = true;
$tdatacustomerallocation_Report [".afterAddAction"] = 1;
$tdatacustomerallocation_Report [".closePopupAfterAdd"] = 1;
$tdatacustomerallocation_Report [".afterAddActionDetTable"] = "";

$tdatacustomerallocation_Report [".list"] = true;

$tdatacustomerallocation_Report [".inlineEdit"] = true;
$tdatacustomerallocation_Report [".inlineAdd"] = true;
$tdatacustomerallocation_Report [".view"] = true;

$tdatacustomerallocation_Report [".exportTo"] = true;

$tdatacustomerallocation_Report [".printFriendly"] = true;

$tdatacustomerallocation_Report [".delete"] = true;

$tdatacustomerallocation_Report [".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacustomerallocation_Report [".searchSaving"] = false;
//

$tdatacustomerallocation_Report [".showSearchPanel"] = true;
$tdatacustomerallocation_Report [".flexibleSearch"] = true;

if (isMobile ())
	$tdatacustomerallocation_Report [".isUseAjaxSuggest"] = false;
else
	$tdatacustomerallocation_Report [".isUseAjaxSuggest"] = true;

$tdatacustomerallocation_Report [".addPageEvents"] = false;

// use timepicker for search panel
$tdatacustomerallocation_Report [".isUseTimeForSearch"] = false;

$tdatacustomerallocation_Report [".allSearchFields"] = array ();
$tdatacustomerallocation_Report [".filterFields"] = array ();
$tdatacustomerallocation_Report [".requiredSearchFields"] = array ();

$tdatacustomerallocation_Report [".allSearchFields"] [] = "AutCustID";
$tdatacustomerallocation_Report [".allSearchFields"] [] = "OracleID";
$tdatacustomerallocation_Report [".allSearchFields"] [] = "CustomerName";
$tdatacustomerallocation_Report [".allSearchFields"] [] = "Stage";
$tdatacustomerallocation_Report [".allSearchFields"] [] = "RSAName";
$tdatacustomerallocation_Report [".allSearchFields"] [] = "Location";
$tdatacustomerallocation_Report [".allSearchFields"] [] = "Supervisor";
$tdatacustomerallocation_Report [".allSearchFields"] [] = "StartDate";
$tdatacustomerallocation_Report [".allSearchFields"] [] = "EndDate";
$tdatacustomerallocation_Report [".allSearchFields"] [] = "Allocation";
$tdatacustomerallocation_Report [".allSearchFields"] [] = "Override";
$tdatacustomerallocation_Report [".allSearchFields"] [] = "Compre_String";
$tdatacustomerallocation_Report [".allSearchFields"] [] = "Temp";
$tdatacustomerallocation_Report [".allSearchFields"] [] = "Size";
$tdatacustomerallocation_Report [".allSearchFields"] [] = "Contract_Start";
$tdatacustomerallocation_Report [".allSearchFields"] [] = "SteadyStateDate";
$tdatacustomerallocation_Report [".allSearchFields"] [] = "Contract_End";
$tdatacustomerallocation_Report [".allSearchFields"] [] = "OnshoreSupportOnly";
$tdatacustomerallocation_Report [".allSearchFields"] [] = "Role";
$tdatacustomerallocation_Report [".allSearchFields"] [] = "PlatformType";
$tdatacustomerallocation_Report [".allSearchFields"] [] = "PlatformName";
$tdatacustomerallocation_Report [".allSearchFields"] [] = "TimeZone";
$tdatacustomerallocation_Report [".allSearchFields"] [] = "Project";

$tdatacustomerallocation_Report [".googleLikeFields"] = array ();
$tdatacustomerallocation_Report [".googleLikeFields"] [] = "AutCustID";
$tdatacustomerallocation_Report [".googleLikeFields"] [] = "OracleID";
$tdatacustomerallocation_Report [".googleLikeFields"] [] = "CustomerName";
$tdatacustomerallocation_Report [".googleLikeFields"] [] = "Stage";
$tdatacustomerallocation_Report [".googleLikeFields"] [] = "RSAName";
$tdatacustomerallocation_Report [".googleLikeFields"] [] = "Location";
$tdatacustomerallocation_Report [".googleLikeFields"] [] = "Supervisor";
$tdatacustomerallocation_Report [".googleLikeFields"] [] = "StartDate";
$tdatacustomerallocation_Report [".googleLikeFields"] [] = "EndDate";
$tdatacustomerallocation_Report [".googleLikeFields"] [] = "Allocation";
$tdatacustomerallocation_Report [".googleLikeFields"] [] = "Override";
$tdatacustomerallocation_Report [".googleLikeFields"] [] = "Compre_String";
$tdatacustomerallocation_Report [".googleLikeFields"] [] = "Temp";
$tdatacustomerallocation_Report [".googleLikeFields"] [] = "Size";
$tdatacustomerallocation_Report [".googleLikeFields"] [] = "Contract_Start";
$tdatacustomerallocation_Report [".googleLikeFields"] [] = "SteadyStateDate";
$tdatacustomerallocation_Report [".googleLikeFields"] [] = "Contract_End";
$tdatacustomerallocation_Report [".googleLikeFields"] [] = "OnshoreSupportOnly";
$tdatacustomerallocation_Report [".googleLikeFields"] [] = "Role";
$tdatacustomerallocation_Report [".googleLikeFields"] [] = "PlatformType";
$tdatacustomerallocation_Report [".googleLikeFields"] [] = "PlatformName";
$tdatacustomerallocation_Report [".googleLikeFields"] [] = "TimeZone";
$tdatacustomerallocation_Report [".googleLikeFields"] [] = "Project";

$tdatacustomerallocation_Report [".advSearchFields"] = array ();
$tdatacustomerallocation_Report [".advSearchFields"] [] = "AutCustID";
$tdatacustomerallocation_Report [".advSearchFields"] [] = "OracleID";
$tdatacustomerallocation_Report [".advSearchFields"] [] = "CustomerName";
$tdatacustomerallocation_Report [".advSearchFields"] [] = "Stage";
$tdatacustomerallocation_Report [".advSearchFields"] [] = "RSAName";
$tdatacustomerallocation_Report [".advSearchFields"] [] = "Location";
$tdatacustomerallocation_Report [".advSearchFields"] [] = "Supervisor";
$tdatacustomerallocation_Report [".advSearchFields"] [] = "StartDate";
$tdatacustomerallocation_Report [".advSearchFields"] [] = "EndDate";
$tdatacustomerallocation_Report [".advSearchFields"] [] = "Allocation";
$tdatacustomerallocation_Report [".advSearchFields"] [] = "Override";
$tdatacustomerallocation_Report [".advSearchFields"] [] = "Compre_String";
$tdatacustomerallocation_Report [".advSearchFields"] [] = "Temp";
$tdatacustomerallocation_Report [".advSearchFields"] [] = "Size";
$tdatacustomerallocation_Report [".advSearchFields"] [] = "Contract_Start";
$tdatacustomerallocation_Report [".advSearchFields"] [] = "SteadyStateDate";
$tdatacustomerallocation_Report [".advSearchFields"] [] = "Contract_End";
$tdatacustomerallocation_Report [".advSearchFields"] [] = "OnshoreSupportOnly";
$tdatacustomerallocation_Report [".advSearchFields"] [] = "Role";
$tdatacustomerallocation_Report [".advSearchFields"] [] = "PlatformType";
$tdatacustomerallocation_Report [".advSearchFields"] [] = "PlatformName";
$tdatacustomerallocation_Report [".advSearchFields"] [] = "TimeZone";
$tdatacustomerallocation_Report [".advSearchFields"] [] = "Project";

$tdatacustomerallocation_Report [".tableType"] = "report";

$tdatacustomerallocation_Report [".printerPageOrientation"] = 0;
$tdatacustomerallocation_Report [".nPrinterPageScale"] = 100;

$tdatacustomerallocation_Report [".nPrinterSplitRecords"] = 40;

$tdatacustomerallocation_Report [".nPrinterPDFSplitRecords"] = 40;

$tdatacustomerallocation_Report [".geocodingEnabled"] = false;

// report settings

$tdatacustomerallocation_Report [".reportPrintPartitionType"] = 1;
$tdatacustomerallocation_Report [".reportPrintGroupsPerPage"] = 3;
$tdatacustomerallocation_Report [".reportPrintPDFGroupsPerPage"] = 3;
$tdatacustomerallocation_Report [".lowGroup"] = 8;

$tdatacustomerallocation_Report [".reportGroupFields"] = true;
$tdatacustomerallocation_Report [".pageSize"] = 5;
$tdatacustomerallocation_Report [".showGroupSummaryCount"] = true;
$reportGroupFields = array ();
$rgroupField = array ();
$rgroupField ['strGroupField'] = "Allocation";
$rgroupField ['groupInterval'] = 0;
$rgroupField ['groupOrder'] = 1;
$rgroupField ['showGroupSummary'] = "1";
$rgroupField ['crossTabAxis'] = "0";
$reportGroupFields [] = $rgroupField;
$rgroupField = array ();
$rgroupField ['strGroupField'] = "Supervisor";
$rgroupField ['groupInterval'] = 0;
$rgroupField ['groupOrder'] = 2;
$rgroupField ['showGroupSummary'] = "1";
$rgroupField ['crossTabAxis'] = "0";
$reportGroupFields [] = $rgroupField;
$rgroupField = array ();
$rgroupField ['strGroupField'] = "StartDate";
$rgroupField ['groupInterval'] = 0;
$rgroupField ['groupOrder'] = 3;
$rgroupField ['showGroupSummary'] = "1";
$rgroupField ['crossTabAxis'] = "0";
$reportGroupFields [] = $rgroupField;
$rgroupField = array ();
$rgroupField ['strGroupField'] = "RSAName";
$rgroupField ['groupInterval'] = 0;
$rgroupField ['groupOrder'] = 4;
$rgroupField ['showGroupSummary'] = "1";
$rgroupField ['crossTabAxis'] = "0";
$reportGroupFields [] = $rgroupField;
$rgroupField = array ();
$rgroupField ['strGroupField'] = "Role";
$rgroupField ['groupInterval'] = 0;
$rgroupField ['groupOrder'] = 5;
$rgroupField ['showGroupSummary'] = "1";
$rgroupField ['crossTabAxis'] = "0";
$reportGroupFields [] = $rgroupField;
$rgroupField = array ();
$rgroupField ['strGroupField'] = "PlatformName";
$rgroupField ['groupInterval'] = 0;
$rgroupField ['groupOrder'] = 6;
$rgroupField ['showGroupSummary'] = "1";
$rgroupField ['crossTabAxis'] = "0";
$reportGroupFields [] = $rgroupField;
$rgroupField = array ();
$rgroupField ['strGroupField'] = "Stage";
$rgroupField ['groupInterval'] = 0;
$rgroupField ['groupOrder'] = 7;
$rgroupField ['showGroupSummary'] = "1";
$rgroupField ['crossTabAxis'] = "0";
$reportGroupFields [] = $rgroupField;
$rgroupField = array ();
$rgroupField ['strGroupField'] = "Location";
$rgroupField ['groupInterval'] = 0;
$rgroupField ['groupOrder'] = 8;
$rgroupField ['showGroupSummary'] = "1";
$rgroupField ['crossTabAxis'] = "0";
$reportGroupFields [] = $rgroupField;
$tdatacustomerallocation_Report [".reportGroupFieldsData"] = $reportGroupFields;

$tdatacustomerallocation_Report [".repShowDet"] = true;

$tdatacustomerallocation_Report [".reportLayout"] = 0;

// end of report settings

// view page pdf

// print page pdf

$tstrOrderBy = "";
if (strlen ( $tstrOrderBy ) && strtolower ( substr ( $tstrOrderBy, 0, 8 ) ) != "order by")
	$tstrOrderBy = "order by " . $tstrOrderBy;
$tdatacustomerallocation_Report [".strOrderBy"] = $tstrOrderBy;

$tdatacustomerallocation_Report [".orderindexes"] = array ();

$tdatacustomerallocation_Report [".sqlHead"] = "SELECT AutCustID,  	OracleID,  	CustomerName,  	Stage,  	RSAName,  	Location,  	Supervisor,  	StartDate,  	EndDate,  	Allocation,  	Override,  	Compre_String,  	Temp,  	`Size`,  	Contract_Start,  	SteadyStateDate,  	Contract_End,  	OnshoreSupportOnly,  	`Role`,  	PlatformType,  	PlatformName,  	TimeZone,  	Project";
$tdatacustomerallocation_Report [".sqlFrom"] = "FROM customerallocation";
$tdatacustomerallocation_Report [".sqlWhereExpr"] = "";
$tdatacustomerallocation_Report [".sqlTail"] = "";

// fill array of records per page for list and report without group fields
$arrRPP = array ();
$arrRPP [] = 10;
$arrRPP [] = 20;
$arrRPP [] = 30;
$arrRPP [] = 50;
$arrRPP [] = 100;
$arrRPP [] = 500;
$arrRPP [] = - 1;
$tdatacustomerallocation_Report [".arrRecsPerPage"] = $arrRPP;

// fill array of groups per page for report with group fields
$arrGPP = array ();
$arrGPP [] = 1;
$arrGPP [] = 3;
$arrGPP [] = 5;
$arrGPP [] = 10;
$arrGPP [] = 50;
$arrGPP [] = 100;
$arrGPP [] = - 1;
$tdatacustomerallocation_Report [".arrGroupsPerPage"] = $arrGPP;

$tdatacustomerallocation_Report [".highlightSearchResults"] = true;

$tableKeyscustomerallocation_Report = array ();
$tableKeyscustomerallocation_Report [] = "AutCustID";
$tdatacustomerallocation_Report [".Keys"] = $tableKeyscustomerallocation_Report;

$tdatacustomerallocation_Report [".listFields"] = array ();
$tdatacustomerallocation_Report [".listFields"] [] = "AutCustID";
$tdatacustomerallocation_Report [".listFields"] [] = "OracleID";
$tdatacustomerallocation_Report [".listFields"] [] = "CustomerName";
$tdatacustomerallocation_Report [".listFields"] [] = "Stage";
$tdatacustomerallocation_Report [".listFields"] [] = "RSAName";
$tdatacustomerallocation_Report [".listFields"] [] = "Location";
$tdatacustomerallocation_Report [".listFields"] [] = "Supervisor";
$tdatacustomerallocation_Report [".listFields"] [] = "StartDate";
$tdatacustomerallocation_Report [".listFields"] [] = "EndDate";
$tdatacustomerallocation_Report [".listFields"] [] = "Allocation";
$tdatacustomerallocation_Report [".listFields"] [] = "Override";
$tdatacustomerallocation_Report [".listFields"] [] = "Compre_String";
$tdatacustomerallocation_Report [".listFields"] [] = "Temp";
$tdatacustomerallocation_Report [".listFields"] [] = "Size";
$tdatacustomerallocation_Report [".listFields"] [] = "Contract_Start";
$tdatacustomerallocation_Report [".listFields"] [] = "SteadyStateDate";
$tdatacustomerallocation_Report [".listFields"] [] = "Contract_End";
$tdatacustomerallocation_Report [".listFields"] [] = "OnshoreSupportOnly";
$tdatacustomerallocation_Report [".listFields"] [] = "Role";
$tdatacustomerallocation_Report [".listFields"] [] = "PlatformType";
$tdatacustomerallocation_Report [".listFields"] [] = "PlatformName";
$tdatacustomerallocation_Report [".listFields"] [] = "TimeZone";
$tdatacustomerallocation_Report [".listFields"] [] = "Project";

$tdatacustomerallocation_Report [".hideMobileList"] = array ();

$tdatacustomerallocation_Report [".viewFields"] = array ();
$tdatacustomerallocation_Report [".viewFields"] [] = "AutCustID";
$tdatacustomerallocation_Report [".viewFields"] [] = "OracleID";
$tdatacustomerallocation_Report [".viewFields"] [] = "CustomerName";
$tdatacustomerallocation_Report [".viewFields"] [] = "Stage";
$tdatacustomerallocation_Report [".viewFields"] [] = "RSAName";
$tdatacustomerallocation_Report [".viewFields"] [] = "Location";
$tdatacustomerallocation_Report [".viewFields"] [] = "Supervisor";
$tdatacustomerallocation_Report [".viewFields"] [] = "StartDate";
$tdatacustomerallocation_Report [".viewFields"] [] = "EndDate";
$tdatacustomerallocation_Report [".viewFields"] [] = "Allocation";
$tdatacustomerallocation_Report [".viewFields"] [] = "Override";
$tdatacustomerallocation_Report [".viewFields"] [] = "Compre_String";
$tdatacustomerallocation_Report [".viewFields"] [] = "Temp";
$tdatacustomerallocation_Report [".viewFields"] [] = "Size";
$tdatacustomerallocation_Report [".viewFields"] [] = "Contract_Start";
$tdatacustomerallocation_Report [".viewFields"] [] = "SteadyStateDate";
$tdatacustomerallocation_Report [".viewFields"] [] = "Contract_End";
$tdatacustomerallocation_Report [".viewFields"] [] = "OnshoreSupportOnly";
$tdatacustomerallocation_Report [".viewFields"] [] = "Role";
$tdatacustomerallocation_Report [".viewFields"] [] = "PlatformType";
$tdatacustomerallocation_Report [".viewFields"] [] = "PlatformName";
$tdatacustomerallocation_Report [".viewFields"] [] = "TimeZone";
$tdatacustomerallocation_Report [".viewFields"] [] = "Project";

$tdatacustomerallocation_Report [".addFields"] = array ();
$tdatacustomerallocation_Report [".addFields"] [] = "OracleID";
$tdatacustomerallocation_Report [".addFields"] [] = "CustomerName";
$tdatacustomerallocation_Report [".addFields"] [] = "Stage";
$tdatacustomerallocation_Report [".addFields"] [] = "RSAName";
$tdatacustomerallocation_Report [".addFields"] [] = "Location";
$tdatacustomerallocation_Report [".addFields"] [] = "Supervisor";
$tdatacustomerallocation_Report [".addFields"] [] = "StartDate";
$tdatacustomerallocation_Report [".addFields"] [] = "EndDate";
$tdatacustomerallocation_Report [".addFields"] [] = "Allocation";
$tdatacustomerallocation_Report [".addFields"] [] = "Override";
$tdatacustomerallocation_Report [".addFields"] [] = "Compre_String";
$tdatacustomerallocation_Report [".addFields"] [] = "Temp";
$tdatacustomerallocation_Report [".addFields"] [] = "Size";
$tdatacustomerallocation_Report [".addFields"] [] = "Contract_Start";
$tdatacustomerallocation_Report [".addFields"] [] = "SteadyStateDate";
$tdatacustomerallocation_Report [".addFields"] [] = "Contract_End";
$tdatacustomerallocation_Report [".addFields"] [] = "OnshoreSupportOnly";
$tdatacustomerallocation_Report [".addFields"] [] = "Role";
$tdatacustomerallocation_Report [".addFields"] [] = "PlatformType";
$tdatacustomerallocation_Report [".addFields"] [] = "PlatformName";
$tdatacustomerallocation_Report [".addFields"] [] = "TimeZone";
$tdatacustomerallocation_Report [".addFields"] [] = "Project";

$tdatacustomerallocation_Report [".masterListFields"] = array ();
$tdatacustomerallocation_Report [".masterListFields"] [] = "AutCustID";
$tdatacustomerallocation_Report [".masterListFields"] [] = "OracleID";
$tdatacustomerallocation_Report [".masterListFields"] [] = "CustomerName";
$tdatacustomerallocation_Report [".masterListFields"] [] = "Stage";
$tdatacustomerallocation_Report [".masterListFields"] [] = "RSAName";
$tdatacustomerallocation_Report [".masterListFields"] [] = "Location";
$tdatacustomerallocation_Report [".masterListFields"] [] = "Supervisor";
$tdatacustomerallocation_Report [".masterListFields"] [] = "StartDate";
$tdatacustomerallocation_Report [".masterListFields"] [] = "EndDate";
$tdatacustomerallocation_Report [".masterListFields"] [] = "Allocation";
$tdatacustomerallocation_Report [".masterListFields"] [] = "Override";
$tdatacustomerallocation_Report [".masterListFields"] [] = "Compre_String";
$tdatacustomerallocation_Report [".masterListFields"] [] = "Temp";
$tdatacustomerallocation_Report [".masterListFields"] [] = "Size";
$tdatacustomerallocation_Report [".masterListFields"] [] = "Contract_Start";
$tdatacustomerallocation_Report [".masterListFields"] [] = "SteadyStateDate";
$tdatacustomerallocation_Report [".masterListFields"] [] = "Contract_End";
$tdatacustomerallocation_Report [".masterListFields"] [] = "OnshoreSupportOnly";
$tdatacustomerallocation_Report [".masterListFields"] [] = "Role";
$tdatacustomerallocation_Report [".masterListFields"] [] = "PlatformType";
$tdatacustomerallocation_Report [".masterListFields"] [] = "PlatformName";
$tdatacustomerallocation_Report [".masterListFields"] [] = "TimeZone";
$tdatacustomerallocation_Report [".masterListFields"] [] = "Project";

$tdatacustomerallocation_Report [".inlineAddFields"] = array ();
$tdatacustomerallocation_Report [".inlineAddFields"] [] = "OracleID";
$tdatacustomerallocation_Report [".inlineAddFields"] [] = "CustomerName";
$tdatacustomerallocation_Report [".inlineAddFields"] [] = "Stage";
$tdatacustomerallocation_Report [".inlineAddFields"] [] = "RSAName";
$tdatacustomerallocation_Report [".inlineAddFields"] [] = "Location";
$tdatacustomerallocation_Report [".inlineAddFields"] [] = "Supervisor";
$tdatacustomerallocation_Report [".inlineAddFields"] [] = "StartDate";
$tdatacustomerallocation_Report [".inlineAddFields"] [] = "EndDate";
$tdatacustomerallocation_Report [".inlineAddFields"] [] = "Allocation";
$tdatacustomerallocation_Report [".inlineAddFields"] [] = "Override";
$tdatacustomerallocation_Report [".inlineAddFields"] [] = "Compre_String";
$tdatacustomerallocation_Report [".inlineAddFields"] [] = "Temp";
$tdatacustomerallocation_Report [".inlineAddFields"] [] = "Size";
$tdatacustomerallocation_Report [".inlineAddFields"] [] = "Contract_Start";
$tdatacustomerallocation_Report [".inlineAddFields"] [] = "SteadyStateDate";
$tdatacustomerallocation_Report [".inlineAddFields"] [] = "Contract_End";
$tdatacustomerallocation_Report [".inlineAddFields"] [] = "OnshoreSupportOnly";
$tdatacustomerallocation_Report [".inlineAddFields"] [] = "Role";
$tdatacustomerallocation_Report [".inlineAddFields"] [] = "PlatformType";
$tdatacustomerallocation_Report [".inlineAddFields"] [] = "PlatformName";
$tdatacustomerallocation_Report [".inlineAddFields"] [] = "TimeZone";
$tdatacustomerallocation_Report [".inlineAddFields"] [] = "Project";

$tdatacustomerallocation_Report [".editFields"] = array ();
$tdatacustomerallocation_Report [".editFields"] [] = "OracleID";
$tdatacustomerallocation_Report [".editFields"] [] = "CustomerName";
$tdatacustomerallocation_Report [".editFields"] [] = "Stage";
$tdatacustomerallocation_Report [".editFields"] [] = "RSAName";
$tdatacustomerallocation_Report [".editFields"] [] = "Location";
$tdatacustomerallocation_Report [".editFields"] [] = "Supervisor";
$tdatacustomerallocation_Report [".editFields"] [] = "StartDate";
$tdatacustomerallocation_Report [".editFields"] [] = "EndDate";
$tdatacustomerallocation_Report [".editFields"] [] = "Allocation";
$tdatacustomerallocation_Report [".editFields"] [] = "Override";
$tdatacustomerallocation_Report [".editFields"] [] = "Compre_String";
$tdatacustomerallocation_Report [".editFields"] [] = "Temp";
$tdatacustomerallocation_Report [".editFields"] [] = "Size";
$tdatacustomerallocation_Report [".editFields"] [] = "Contract_Start";
$tdatacustomerallocation_Report [".editFields"] [] = "SteadyStateDate";
$tdatacustomerallocation_Report [".editFields"] [] = "Contract_End";
$tdatacustomerallocation_Report [".editFields"] [] = "OnshoreSupportOnly";
$tdatacustomerallocation_Report [".editFields"] [] = "Role";
$tdatacustomerallocation_Report [".editFields"] [] = "PlatformType";
$tdatacustomerallocation_Report [".editFields"] [] = "PlatformName";
$tdatacustomerallocation_Report [".editFields"] [] = "TimeZone";
$tdatacustomerallocation_Report [".editFields"] [] = "Project";

$tdatacustomerallocation_Report [".inlineEditFields"] = array ();
$tdatacustomerallocation_Report [".inlineEditFields"] [] = "OracleID";
$tdatacustomerallocation_Report [".inlineEditFields"] [] = "CustomerName";
$tdatacustomerallocation_Report [".inlineEditFields"] [] = "Stage";
$tdatacustomerallocation_Report [".inlineEditFields"] [] = "RSAName";
$tdatacustomerallocation_Report [".inlineEditFields"] [] = "Location";
$tdatacustomerallocation_Report [".inlineEditFields"] [] = "Supervisor";
$tdatacustomerallocation_Report [".inlineEditFields"] [] = "StartDate";
$tdatacustomerallocation_Report [".inlineEditFields"] [] = "EndDate";
$tdatacustomerallocation_Report [".inlineEditFields"] [] = "Allocation";
$tdatacustomerallocation_Report [".inlineEditFields"] [] = "Override";
$tdatacustomerallocation_Report [".inlineEditFields"] [] = "Compre_String";
$tdatacustomerallocation_Report [".inlineEditFields"] [] = "Temp";
$tdatacustomerallocation_Report [".inlineEditFields"] [] = "Size";
$tdatacustomerallocation_Report [".inlineEditFields"] [] = "Contract_Start";
$tdatacustomerallocation_Report [".inlineEditFields"] [] = "SteadyStateDate";
$tdatacustomerallocation_Report [".inlineEditFields"] [] = "Contract_End";
$tdatacustomerallocation_Report [".inlineEditFields"] [] = "OnshoreSupportOnly";
$tdatacustomerallocation_Report [".inlineEditFields"] [] = "Role";
$tdatacustomerallocation_Report [".inlineEditFields"] [] = "PlatformType";
$tdatacustomerallocation_Report [".inlineEditFields"] [] = "PlatformName";
$tdatacustomerallocation_Report [".inlineEditFields"] [] = "TimeZone";
$tdatacustomerallocation_Report [".inlineEditFields"] [] = "Project";

$tdatacustomerallocation_Report [".exportFields"] = array ();
$tdatacustomerallocation_Report [".exportFields"] [] = "AutCustID";
$tdatacustomerallocation_Report [".exportFields"] [] = "OracleID";
$tdatacustomerallocation_Report [".exportFields"] [] = "CustomerName";
$tdatacustomerallocation_Report [".exportFields"] [] = "Stage";
$tdatacustomerallocation_Report [".exportFields"] [] = "RSAName";
$tdatacustomerallocation_Report [".exportFields"] [] = "Location";
$tdatacustomerallocation_Report [".exportFields"] [] = "Supervisor";
$tdatacustomerallocation_Report [".exportFields"] [] = "StartDate";
$tdatacustomerallocation_Report [".exportFields"] [] = "EndDate";
$tdatacustomerallocation_Report [".exportFields"] [] = "Allocation";
$tdatacustomerallocation_Report [".exportFields"] [] = "Override";
$tdatacustomerallocation_Report [".exportFields"] [] = "Compre_String";
$tdatacustomerallocation_Report [".exportFields"] [] = "Temp";
$tdatacustomerallocation_Report [".exportFields"] [] = "Size";
$tdatacustomerallocation_Report [".exportFields"] [] = "Contract_Start";
$tdatacustomerallocation_Report [".exportFields"] [] = "SteadyStateDate";
$tdatacustomerallocation_Report [".exportFields"] [] = "Contract_End";
$tdatacustomerallocation_Report [".exportFields"] [] = "OnshoreSupportOnly";
$tdatacustomerallocation_Report [".exportFields"] [] = "Role";
$tdatacustomerallocation_Report [".exportFields"] [] = "PlatformType";
$tdatacustomerallocation_Report [".exportFields"] [] = "PlatformName";
$tdatacustomerallocation_Report [".exportFields"] [] = "TimeZone";
$tdatacustomerallocation_Report [".exportFields"] [] = "Project";

$tdatacustomerallocation_Report [".importFields"] = array ();
$tdatacustomerallocation_Report [".importFields"] [] = "AutCustID";
$tdatacustomerallocation_Report [".importFields"] [] = "OracleID";
$tdatacustomerallocation_Report [".importFields"] [] = "CustomerName";
$tdatacustomerallocation_Report [".importFields"] [] = "Stage";
$tdatacustomerallocation_Report [".importFields"] [] = "RSAName";
$tdatacustomerallocation_Report [".importFields"] [] = "Location";
$tdatacustomerallocation_Report [".importFields"] [] = "Supervisor";
$tdatacustomerallocation_Report [".importFields"] [] = "StartDate";
$tdatacustomerallocation_Report [".importFields"] [] = "EndDate";
$tdatacustomerallocation_Report [".importFields"] [] = "Allocation";
$tdatacustomerallocation_Report [".importFields"] [] = "Override";
$tdatacustomerallocation_Report [".importFields"] [] = "Compre_String";
$tdatacustomerallocation_Report [".importFields"] [] = "Temp";
$tdatacustomerallocation_Report [".importFields"] [] = "Size";
$tdatacustomerallocation_Report [".importFields"] [] = "Contract_Start";
$tdatacustomerallocation_Report [".importFields"] [] = "SteadyStateDate";
$tdatacustomerallocation_Report [".importFields"] [] = "Contract_End";
$tdatacustomerallocation_Report [".importFields"] [] = "OnshoreSupportOnly";
$tdatacustomerallocation_Report [".importFields"] [] = "Role";
$tdatacustomerallocation_Report [".importFields"] [] = "PlatformType";
$tdatacustomerallocation_Report [".importFields"] [] = "PlatformName";
$tdatacustomerallocation_Report [".importFields"] [] = "TimeZone";
$tdatacustomerallocation_Report [".importFields"] [] = "Project";

$tdatacustomerallocation_Report [".printFields"] = array ();
$tdatacustomerallocation_Report [".printFields"] [] = "AutCustID";
$tdatacustomerallocation_Report [".printFields"] [] = "OracleID";
$tdatacustomerallocation_Report [".printFields"] [] = "CustomerName";
$tdatacustomerallocation_Report [".printFields"] [] = "Stage";
$tdatacustomerallocation_Report [".printFields"] [] = "RSAName";
$tdatacustomerallocation_Report [".printFields"] [] = "Location";
$tdatacustomerallocation_Report [".printFields"] [] = "Supervisor";
$tdatacustomerallocation_Report [".printFields"] [] = "StartDate";
$tdatacustomerallocation_Report [".printFields"] [] = "EndDate";
$tdatacustomerallocation_Report [".printFields"] [] = "Allocation";
$tdatacustomerallocation_Report [".printFields"] [] = "Override";
$tdatacustomerallocation_Report [".printFields"] [] = "Compre_String";
$tdatacustomerallocation_Report [".printFields"] [] = "Temp";
$tdatacustomerallocation_Report [".printFields"] [] = "Size";
$tdatacustomerallocation_Report [".printFields"] [] = "Contract_Start";
$tdatacustomerallocation_Report [".printFields"] [] = "SteadyStateDate";
$tdatacustomerallocation_Report [".printFields"] [] = "Contract_End";
$tdatacustomerallocation_Report [".printFields"] [] = "OnshoreSupportOnly";
$tdatacustomerallocation_Report [".printFields"] [] = "Role";
$tdatacustomerallocation_Report [".printFields"] [] = "PlatformType";
$tdatacustomerallocation_Report [".printFields"] [] = "PlatformName";
$tdatacustomerallocation_Report [".printFields"] [] = "TimeZone";
$tdatacustomerallocation_Report [".printFields"] [] = "Project";

// AutCustID
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 1;
$fdata ["strName"] = "AutCustID";
$fdata ["GoodName"] = "AutCustID";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "customerallocation_Report", "AutCustID" );
$fdata ["FieldType"] = 3;

// report field settings
// end of report field settings

$fdata ["AutoInc"] = true;

$fdata ["bListPage"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

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

$fdata ["ViewFormats"] ["report"] = $vdata;
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

$fdata ["EditFormats"] ["search"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = false;

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

// the end of search options settings

$tdatacustomerallocation_Report ["AutCustID"] = $fdata;
// OracleID
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 2;
$fdata ["strName"] = "OracleID";
$fdata ["GoodName"] = "OracleID";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "customerallocation_Report", "OracleID" );
$fdata ["FieldType"] = 200;

// report field settings
// end of report field settings

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

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

$fdata ["ViewFormats"] ["report"] = $vdata;
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

$fdata ["EditFormats"] ["search"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = false;

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

// the end of search options settings

$tdatacustomerallocation_Report ["OracleID"] = $fdata;
// CustomerName
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 3;
$fdata ["strName"] = "CustomerName";
$fdata ["GoodName"] = "CustomerName";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "customerallocation_Report", "CustomerName" );
$fdata ["FieldType"] = 200;

// report field settings
// end of report field settings

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

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

$fdata ["ViewFormats"] ["report"] = $vdata;
$vdata = array (
		"ViewFormat" => "" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["rprint"] = $vdata;
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
$edata ["EditParams"] .= " maxlength=100";

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

$tdatacustomerallocation_Report ["CustomerName"] = $fdata;
// Stage
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 4;
$fdata ["strName"] = "Stage";
$fdata ["GoodName"] = "Stage";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "customerallocation_Report", "Stage" );
$fdata ["FieldType"] = 200;

// report field settings
// end of report field settings

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

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

$fdata ["ViewFormats"] ["report"] = $vdata;
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

$fdata ["EditFormats"] ["search"] = $edata;
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

$tdatacustomerallocation_Report ["Stage"] = $fdata;
// RSAName
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 5;
$fdata ["strName"] = "RSAName";
$fdata ["GoodName"] = "RSAName";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "customerallocation_Report", "RSAName" );
$fdata ["FieldType"] = 200;

// report field settings
// end of report field settings

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

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

$fdata ["ViewFormats"] ["report"] = $vdata;
$vdata = array (
		"ViewFormat" => "" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["rprint"] = $vdata;
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

$fdata ["EditFormats"] ["register"] = $edata;
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

$tdatacustomerallocation_Report ["RSAName"] = $fdata;
// Location
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 6;
$fdata ["strName"] = "Location";
$fdata ["GoodName"] = "Location";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "customerallocation_Report", "Location" );
$fdata ["FieldType"] = 200;

// report field settings
// end of report field settings

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

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

$fdata ["ViewFormats"] ["report"] = $vdata;
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

$fdata ["EditFormats"] ["search"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = false;

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

// the end of search options settings

$tdatacustomerallocation_Report ["Location"] = $fdata;
// Supervisor
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 7;
$fdata ["strName"] = "Supervisor";
$fdata ["GoodName"] = "Supervisor";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "customerallocation_Report", "Supervisor" );
$fdata ["FieldType"] = 200;

// report field settings
// end of report field settings

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

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

$fdata ["ViewFormats"] ["report"] = $vdata;
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

$fdata ["EditFormats"] ["search"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = false;

// the field's search options settings

// the end of search options settings

$tdatacustomerallocation_Report ["Supervisor"] = $fdata;
// StartDate
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 8;
$fdata ["strName"] = "StartDate";
$fdata ["GoodName"] = "StartDate";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "customerallocation_Report", "StartDate" );
$fdata ["FieldType"] = 7;

// report field settings
// end of report field settings

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

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

$fdata ["ViewFormats"] ["report"] = $vdata;
$vdata = array (
		"ViewFormat" => "Short Date" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["rprint"] = $vdata;
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

$edata ["controlWidth"] = 200;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

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

$fdata ["EditFormats"] ["search"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = true;

// the field's search options settings
$fdata ["defaultSearchOption"] = "Less than";

// the end of search options settings

$tdatacustomerallocation_Report ["StartDate"] = $fdata;
// EndDate
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 9;
$fdata ["strName"] = "EndDate";
$fdata ["GoodName"] = "EndDate";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "customerallocation_Report", "EndDate" );
$fdata ["FieldType"] = 7;

// report field settings
// end of report field settings

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

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

$fdata ["ViewFormats"] ["report"] = $vdata;
$vdata = array (
		"ViewFormat" => "Short Date" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["rprint"] = $vdata;
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

$edata ["controlWidth"] = 200;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

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

$fdata ["EditFormats"] ["search"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = true;

// the field's search options settings
$fdata ["defaultSearchOption"] = "More than";

// the end of search options settings

$tdatacustomerallocation_Report ["EndDate"] = $fdata;
// Allocation
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 10;
$fdata ["strName"] = "Allocation";
$fdata ["GoodName"] = "Allocation";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "customerallocation_Report", "Allocation" );
$fdata ["FieldType"] = 200;

// report field settings
// end of report field settings

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

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

$fdata ["ViewFormats"] ["report"] = $vdata;
$vdata = array (
		"ViewFormat" => "Percent" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["rprint"] = $vdata;
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
$edata ["EditParams"] .= " maxlength=5";

$edata ["controlWidth"] = 200;

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

$tdatacustomerallocation_Report ["Allocation"] = $fdata;
// Override
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 11;
$fdata ["strName"] = "Override";
$fdata ["GoodName"] = "Override";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "customerallocation_Report", "Override" );
$fdata ["FieldType"] = 200;

// report field settings
// end of report field settings

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

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

$fdata ["ViewFormats"] ["report"] = $vdata;
$vdata = array (
		"ViewFormat" => "Percent" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["rprint"] = $vdata;
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

// End validation

$fdata ["EditFormats"] ["search"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = true;

// the field's search options settings

// the end of search options settings

$tdatacustomerallocation_Report ["Override"] = $fdata;
// Compre_String
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 12;
$fdata ["strName"] = "Compre_String";
$fdata ["GoodName"] = "Compre_String";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "customerallocation_Report", "Compre_String" );
$fdata ["FieldType"] = 200;

// report field settings
// end of report field settings

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Compre_String";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Compre_String";

$fdata ["FieldPermissions"] = true;

$fdata ["UploadFolder"] = "files";

// Begin View Formats
$fdata ["ViewFormats"] = array ();

$vdata = array (
		"ViewFormat" => "" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["report"] = $vdata;
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

$fdata ["EditFormats"] ["search"] = $edata;
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

$tdatacustomerallocation_Report ["Compre_String"] = $fdata;
// Temp
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 13;
$fdata ["strName"] = "Temp";
$fdata ["GoodName"] = "Temp";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "customerallocation_Report", "Temp" );
$fdata ["FieldType"] = 200;

// report field settings
// end of report field settings

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Temp";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Temp";

$fdata ["FieldPermissions"] = true;

$fdata ["UploadFolder"] = "files";

// Begin View Formats
$fdata ["ViewFormats"] = array ();

$vdata = array (
		"ViewFormat" => "" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["report"] = $vdata;
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

$fdata ["EditFormats"] ["search"] = $edata;
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

$tdatacustomerallocation_Report ["Temp"] = $fdata;
// Size
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 14;
$fdata ["strName"] = "Size";
$fdata ["GoodName"] = "Size";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "customerallocation_Report", "Size" );
$fdata ["FieldType"] = 200;

// report field settings
// end of report field settings

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

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

$fdata ["ViewFormats"] ["report"] = $vdata;
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

$fdata ["EditFormats"] ["search"] = $edata;
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

$tdatacustomerallocation_Report ["Size"] = $fdata;
// Contract_Start
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 15;
$fdata ["strName"] = "Contract_Start";
$fdata ["GoodName"] = "Contract_Start";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "customerallocation_Report", "Contract_Start" );
$fdata ["FieldType"] = 200;

// report field settings
// end of report field settings

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

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

$fdata ["ViewFormats"] ["report"] = $vdata;
$vdata = array (
		"ViewFormat" => "Short Date" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["rprint"] = $vdata;
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

$tdatacustomerallocation_Report ["Contract_Start"] = $fdata;
// SteadyStateDate
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 16;
$fdata ["strName"] = "SteadyStateDate";
$fdata ["GoodName"] = "SteadyStateDate";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "customerallocation_Report", "SteadyStateDate" );
$fdata ["FieldType"] = 200;

// report field settings
// end of report field settings

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

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

$fdata ["ViewFormats"] ["report"] = $vdata;
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

$fdata ["EditFormats"] ["search"] = $edata;
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

$tdatacustomerallocation_Report ["SteadyStateDate"] = $fdata;
// Contract_End
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 17;
$fdata ["strName"] = "Contract_End";
$fdata ["GoodName"] = "Contract_End";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "customerallocation_Report", "Contract_End" );
$fdata ["FieldType"] = 200;

// report field settings
// end of report field settings

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

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

$fdata ["ViewFormats"] ["report"] = $vdata;
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

$fdata ["EditFormats"] ["search"] = $edata;
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

$tdatacustomerallocation_Report ["Contract_End"] = $fdata;
// OnshoreSupportOnly
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 18;
$fdata ["strName"] = "OnshoreSupportOnly";
$fdata ["GoodName"] = "OnshoreSupportOnly";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "customerallocation_Report", "OnshoreSupportOnly" );
$fdata ["FieldType"] = 16;

// report field settings
// end of report field settings

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

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

$fdata ["ViewFormats"] ["report"] = $vdata;
$vdata = array (
		"ViewFormat" => "Checkbox" 
);

$fdata ["ViewFormats"] ["rprint"] = $vdata;
// End View Formats

// Begin Edit Formats
$fdata ["EditFormats"] = array ();

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

$tdatacustomerallocation_Report ["OnshoreSupportOnly"] = $fdata;
// Role
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 19;
$fdata ["strName"] = "Role";
$fdata ["GoodName"] = "Role";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "customerallocation_Report", "Role" );
$fdata ["FieldType"] = 200;

// report field settings
// end of report field settings

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

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

$fdata ["ViewFormats"] ["report"] = $vdata;
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

$fdata ["EditFormats"] ["search"] = $edata;
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

$tdatacustomerallocation_Report ["Role"] = $fdata;
// PlatformType
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 20;
$fdata ["strName"] = "PlatformType";
$fdata ["GoodName"] = "PlatformType";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "customerallocation_Report", "PlatformType" );
$fdata ["FieldType"] = 200;

// report field settings
// end of report field settings

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

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

$fdata ["ViewFormats"] ["report"] = $vdata;
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

$fdata ["EditFormats"] ["search"] = $edata;
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

$tdatacustomerallocation_Report ["PlatformType"] = $fdata;
// PlatformName
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 21;
$fdata ["strName"] = "PlatformName";
$fdata ["GoodName"] = "PlatformName";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "customerallocation_Report", "PlatformName" );
$fdata ["FieldType"] = 200;

// report field settings
// end of report field settings

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

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

$fdata ["ViewFormats"] ["report"] = $vdata;
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

$fdata ["EditFormats"] ["search"] = $edata;
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

$tdatacustomerallocation_Report ["PlatformName"] = $fdata;
// TimeZone
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 22;
$fdata ["strName"] = "TimeZone";
$fdata ["GoodName"] = "TimeZone";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "customerallocation_Report", "TimeZone" );
$fdata ["FieldType"] = 200;

// report field settings
// end of report field settings

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

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

$fdata ["ViewFormats"] ["report"] = $vdata;
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

$fdata ["EditFormats"] ["search"] = $edata;
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

$tdatacustomerallocation_Report ["TimeZone"] = $fdata;
// Project
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 23;
$fdata ["strName"] = "Project";
$fdata ["GoodName"] = "Project";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "customerallocation_Report", "Project" );
$fdata ["FieldType"] = 16;

// report field settings
// end of report field settings

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

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

$fdata ["ViewFormats"] ["report"] = $vdata;
$vdata = array (
		"ViewFormat" => "Checkbox" 
);

$fdata ["ViewFormats"] ["rprint"] = $vdata;
// End View Formats

// Begin Edit Formats
$fdata ["EditFormats"] = array ();

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

$tdatacustomerallocation_Report ["Project"] = $fdata;

$tables_data ["customerallocation Report"] = &$tdatacustomerallocation_Report;
$field_labels ["customerallocation_Report"] = &$fieldLabelscustomerallocation_Report;
$fieldToolTips ["customerallocation Report"] = &$fieldToolTipscustomerallocation_Report;
$page_titles ["customerallocation_Report"] = &$pageTitlescustomerallocation_Report;

// -----------------start prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData ["customerallocation Report"] = array ();

// tables which are master tables for current table (detail)
$masterTablesData ["customerallocation Report"] = array ();

// -----------------end prepare master-details data arrays ------------------------------//

require_once (getabspath ( "classes/sql.php" ));
function createSqlQuery_customerallocation_Report() {
	$proto0 = array ();
	$proto0 ["m_strHead"] = "SELECT";
	$proto0 ["m_strFieldList"] = "AutCustID,  	OracleID,  	CustomerName,  	Stage,  	RSAName,  	Location,  	Supervisor,  	StartDate,  	EndDate,  	Allocation,  	Override,  	Compre_String,  	Temp,  	`Size`,  	Contract_Start,  	SteadyStateDate,  	Contract_End,  	OnshoreSupportOnly,  	`Role`,  	PlatformType,  	PlatformName,  	TimeZone,  	Project";
	$proto0 ["m_strFrom"] = "FROM customerallocation";
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
			"m_strName" => "AutCustID",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "customerallocation Report" 
	) );
	
	$proto5 ["m_sql"] = "AutCustID";
	$proto5 ["m_srcTableName"] = "customerallocation Report";
	$proto5 ["m_expr"] = $obj;
	$proto5 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto5 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto7 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "OracleID",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "customerallocation Report" 
	) );
	
	$proto7 ["m_sql"] = "OracleID";
	$proto7 ["m_srcTableName"] = "customerallocation Report";
	$proto7 ["m_expr"] = $obj;
	$proto7 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto7 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto9 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "CustomerName",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "customerallocation Report" 
	) );
	
	$proto9 ["m_sql"] = "CustomerName";
	$proto9 ["m_srcTableName"] = "customerallocation Report";
	$proto9 ["m_expr"] = $obj;
	$proto9 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto9 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto11 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Stage",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "customerallocation Report" 
	) );
	
	$proto11 ["m_sql"] = "Stage";
	$proto11 ["m_srcTableName"] = "customerallocation Report";
	$proto11 ["m_expr"] = $obj;
	$proto11 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto11 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto13 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "RSAName",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "customerallocation Report" 
	) );
	
	$proto13 ["m_sql"] = "RSAName";
	$proto13 ["m_srcTableName"] = "customerallocation Report";
	$proto13 ["m_expr"] = $obj;
	$proto13 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto13 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto15 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Location",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "customerallocation Report" 
	) );
	
	$proto15 ["m_sql"] = "Location";
	$proto15 ["m_srcTableName"] = "customerallocation Report";
	$proto15 ["m_expr"] = $obj;
	$proto15 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto15 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto17 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Supervisor",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "customerallocation Report" 
	) );
	
	$proto17 ["m_sql"] = "Supervisor";
	$proto17 ["m_srcTableName"] = "customerallocation Report";
	$proto17 ["m_expr"] = $obj;
	$proto17 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto17 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto19 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "StartDate",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "customerallocation Report" 
	) );
	
	$proto19 ["m_sql"] = "StartDate";
	$proto19 ["m_srcTableName"] = "customerallocation Report";
	$proto19 ["m_expr"] = $obj;
	$proto19 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto19 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto21 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "EndDate",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "customerallocation Report" 
	) );
	
	$proto21 ["m_sql"] = "EndDate";
	$proto21 ["m_srcTableName"] = "customerallocation Report";
	$proto21 ["m_expr"] = $obj;
	$proto21 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto21 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto23 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Allocation",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "customerallocation Report" 
	) );
	
	$proto23 ["m_sql"] = "Allocation";
	$proto23 ["m_srcTableName"] = "customerallocation Report";
	$proto23 ["m_expr"] = $obj;
	$proto23 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto23 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto25 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Override",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "customerallocation Report" 
	) );
	
	$proto25 ["m_sql"] = "Override";
	$proto25 ["m_srcTableName"] = "customerallocation Report";
	$proto25 ["m_expr"] = $obj;
	$proto25 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto25 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto27 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Compre_String",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "customerallocation Report" 
	) );
	
	$proto27 ["m_sql"] = "Compre_String";
	$proto27 ["m_srcTableName"] = "customerallocation Report";
	$proto27 ["m_expr"] = $obj;
	$proto27 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto27 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto29 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Temp",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "customerallocation Report" 
	) );
	
	$proto29 ["m_sql"] = "Temp";
	$proto29 ["m_srcTableName"] = "customerallocation Report";
	$proto29 ["m_expr"] = $obj;
	$proto29 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto29 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto31 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Size",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "customerallocation Report" 
	) );
	
	$proto31 ["m_sql"] = "`Size`";
	$proto31 ["m_srcTableName"] = "customerallocation Report";
	$proto31 ["m_expr"] = $obj;
	$proto31 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto31 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto33 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Contract_Start",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "customerallocation Report" 
	) );
	
	$proto33 ["m_sql"] = "Contract_Start";
	$proto33 ["m_srcTableName"] = "customerallocation Report";
	$proto33 ["m_expr"] = $obj;
	$proto33 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto33 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto35 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "SteadyStateDate",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "customerallocation Report" 
	) );
	
	$proto35 ["m_sql"] = "SteadyStateDate";
	$proto35 ["m_srcTableName"] = "customerallocation Report";
	$proto35 ["m_expr"] = $obj;
	$proto35 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto35 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto37 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Contract_End",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "customerallocation Report" 
	) );
	
	$proto37 ["m_sql"] = "Contract_End";
	$proto37 ["m_srcTableName"] = "customerallocation Report";
	$proto37 ["m_expr"] = $obj;
	$proto37 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto37 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto39 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "OnshoreSupportOnly",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "customerallocation Report" 
	) );
	
	$proto39 ["m_sql"] = "OnshoreSupportOnly";
	$proto39 ["m_srcTableName"] = "customerallocation Report";
	$proto39 ["m_expr"] = $obj;
	$proto39 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto39 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto41 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Role",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "customerallocation Report" 
	) );
	
	$proto41 ["m_sql"] = "`Role`";
	$proto41 ["m_srcTableName"] = "customerallocation Report";
	$proto41 ["m_expr"] = $obj;
	$proto41 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto41 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto43 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "PlatformType",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "customerallocation Report" 
	) );
	
	$proto43 ["m_sql"] = "PlatformType";
	$proto43 ["m_srcTableName"] = "customerallocation Report";
	$proto43 ["m_expr"] = $obj;
	$proto43 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto43 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto45 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "PlatformName",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "customerallocation Report" 
	) );
	
	$proto45 ["m_sql"] = "PlatformName";
	$proto45 ["m_srcTableName"] = "customerallocation Report";
	$proto45 ["m_expr"] = $obj;
	$proto45 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto45 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto47 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "TimeZone",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "customerallocation Report" 
	) );
	
	$proto47 ["m_sql"] = "TimeZone";
	$proto47 ["m_srcTableName"] = "customerallocation Report";
	$proto47 ["m_expr"] = $obj;
	$proto47 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto47 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto49 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Project",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "customerallocation Report" 
	) );
	
	$proto49 ["m_sql"] = "Project";
	$proto49 ["m_srcTableName"] = "customerallocation Report";
	$proto49 ["m_expr"] = $obj;
	$proto49 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto49 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto0 ["m_fromlist"] = array ();
	$proto51 = array ();
	$proto51 ["m_link"] = "SQLL_MAIN";
	$proto52 = array ();
	$proto52 ["m_strName"] = "customerallocation";
	$proto52 ["m_srcTableName"] = "customerallocation Report";
	$proto52 ["m_columns"] = array ();
	$proto52 ["m_columns"] [] = "AutCustID";
	$proto52 ["m_columns"] [] = "OracleID";
	$proto52 ["m_columns"] [] = "CustomerName";
	$proto52 ["m_columns"] [] = "Stage";
	$proto52 ["m_columns"] [] = "RSAName";
	$proto52 ["m_columns"] [] = "Location";
	$proto52 ["m_columns"] [] = "Supervisor";
	$proto52 ["m_columns"] [] = "StartDate";
	$proto52 ["m_columns"] [] = "EndDate";
	$proto52 ["m_columns"] [] = "Allocation";
	$proto52 ["m_columns"] [] = "Override";
	$proto52 ["m_columns"] [] = "Compre_String";
	$proto52 ["m_columns"] [] = "Temp";
	$proto52 ["m_columns"] [] = "Size";
	$proto52 ["m_columns"] [] = "Contract_Start";
	$proto52 ["m_columns"] [] = "SteadyStateDate";
	$proto52 ["m_columns"] [] = "Contract_End";
	$proto52 ["m_columns"] [] = "OnshoreSupportOnly";
	$proto52 ["m_columns"] [] = "Role";
	$proto52 ["m_columns"] [] = "PlatformType";
	$proto52 ["m_columns"] [] = "PlatformName";
	$proto52 ["m_columns"] [] = "TimeZone";
	$proto52 ["m_columns"] [] = "Project";
	$obj = new SQLTable ( $proto52 );
	
	$proto51 ["m_table"] = $obj;
	$proto51 ["m_sql"] = "customerallocation";
	$proto51 ["m_alias"] = "";
	$proto51 ["m_srcTableName"] = "customerallocation Report";
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
	
	$proto0 ["m_fromlist"] [] = $obj;
	$proto0 ["m_groupby"] = array ();
	$proto0 ["m_orderby"] = array ();
	$proto0 ["m_srcTableName"] = "customerallocation Report";
	$obj = new SQLQuery ( $proto0 );
	
	return $obj;
}
$queryData_customerallocation_Report = createSqlQuery_customerallocation_Report ();

$tdatacustomerallocation_Report [".sqlquery"] = $queryData_customerallocation_Report;

$tableEvents ["customerallocation Report"] = new eventsBase ();
$tdatacustomerallocation_Report [".hasEvents"] = false;

?>