<?php
require_once (getabspath ( "classes/cipherer.php" ));

$tdataAllocation_Dashboard_New = array ();
$tdataAllocation_Dashboard_New [".ShortName"] = "Allocation_Dashboard_New";

// field labels
$fieldLabelsAllocation_Dashboard_New = array ();
$pageTitlesAllocation_Dashboard_New = array ();

if (mlang_getcurrentlang () == "English") {
	$fieldLabelsAllocation_Dashboard_New ["English"] = array ();
	$fieldLabelsAllocation_Dashboard_New ["English"] ["customerallocation_OracleID"] = "Oracle ID";
	$fieldLabelsAllocation_Dashboard_New ["English"] ["customerallocation_CustomerName"] = "Customer Name";
	$fieldLabelsAllocation_Dashboard_New ["English"] ["customerallocation_RSAName"] = "Resource Name";
	$fieldLabelsAllocation_Dashboard_New ["English"] ["customerallocation_Supervisor"] = "Manager";
	$fieldLabelsAllocation_Dashboard_New ["English"] ["customerallocation_StartDate"] = "Start Date";
	$fieldLabelsAllocation_Dashboard_New ["English"] ["customerallocation_EndDate"] = "End Date";
	$fieldLabelsAllocation_Dashboard_New ["English"] ["customerallocation_Allocation"] = "Model Allocation";
	$fieldLabelsAllocation_Dashboard_New ["English"] ["customerallocation_Override"] = "Actual Allocation";
	$fieldLabelsAllocation_Dashboard_New ["English"] ["customerallocation_Size"] = "Size";
	$fieldLabelsAllocation_Dashboard_New ["English"] ["customerallocation_Contract_Start"] = "Contract Start";
	$fieldLabelsAllocation_Dashboard_New ["English"] ["customerallocation_SteadyStateDate"] = "Steady State Date";
	$fieldLabelsAllocation_Dashboard_New ["English"] ["customerallocation_Contract_End"] = "Contract End";
	$fieldLabelsAllocation_Dashboard_New ["English"] ["customerallocation_OnshoreSupportOnly"] = "Onshore Only";
	$fieldLabelsAllocation_Dashboard_New ["English"] ["customerallocation_PlatformName"] = "Platform Name";
	$fieldLabelsAllocation_Dashboard_New ["English"] ["customerallocation_Role"] = "Engagement Role";
	$fieldLabelsAllocation_Dashboard_New ["English"] ["customerallocation_TimeZone"] = "Primary Working Time Zone";
	$fieldLabelsAllocation_Dashboard_New ["English"] ["customerallocation_Project"] = "Project";
	$fieldLabelsAllocation_Dashboard_New ["English"] ["customerallocation_Stage"] = "Stage";
}
if (mlang_getcurrentlang () == "") {
	$fieldLabelsAllocation_Dashboard_New [""] = array ();
}

// search fields
$tdataAllocation_Dashboard_New [".searchFields"] = array ();
$dashField = array ();
$dashField [] = array (
		"table" => "customerallocation",
		"field" => "OracleID" 
);
$tdataAllocation_Dashboard_New [".searchFields"] ["customerallocation_OracleID"] = $dashField;
$dashField = array ();
$dashField [] = array (
		"table" => "customerallocation",
		"field" => "CustomerName" 
);
$tdataAllocation_Dashboard_New [".searchFields"] ["customerallocation_CustomerName"] = $dashField;
$dashField = array ();
$dashField [] = array (
		"table" => "customerallocation",
		"field" => "RSAName" 
);
$tdataAllocation_Dashboard_New [".searchFields"] ["customerallocation_RSAName"] = $dashField;
$dashField = array ();
$dashField [] = array (
		"table" => "customerallocation",
		"field" => "Supervisor" 
);
$tdataAllocation_Dashboard_New [".searchFields"] ["customerallocation_Supervisor"] = $dashField;
$dashField = array ();
$dashField [] = array (
		"table" => "customerallocation",
		"field" => "StartDate" 
);
$tdataAllocation_Dashboard_New [".searchFields"] ["customerallocation_StartDate"] = $dashField;
$dashField = array ();
$dashField [] = array (
		"table" => "customerallocation",
		"field" => "EndDate" 
);
$tdataAllocation_Dashboard_New [".searchFields"] ["customerallocation_EndDate"] = $dashField;
$dashField = array ();
$dashField [] = array (
		"table" => "customerallocation",
		"field" => "Allocation" 
);
$tdataAllocation_Dashboard_New [".searchFields"] ["customerallocation_Allocation"] = $dashField;
$dashField = array ();
$dashField [] = array (
		"table" => "customerallocation",
		"field" => "Override" 
);
$tdataAllocation_Dashboard_New [".searchFields"] ["customerallocation_Override"] = $dashField;
$dashField = array ();
$dashField [] = array (
		"table" => "customerallocation",
		"field" => "Size" 
);
$tdataAllocation_Dashboard_New [".searchFields"] ["customerallocation_Size"] = $dashField;
$dashField = array ();
$dashField [] = array (
		"table" => "customerallocation",
		"field" => "Contract_Start" 
);
$tdataAllocation_Dashboard_New [".searchFields"] ["customerallocation_Contract_Start"] = $dashField;
$dashField = array ();
$dashField [] = array (
		"table" => "customerallocation",
		"field" => "SteadyStateDate" 
);
$tdataAllocation_Dashboard_New [".searchFields"] ["customerallocation_SteadyStateDate"] = $dashField;
$dashField = array ();
$dashField [] = array (
		"table" => "customerallocation",
		"field" => "Contract_End" 
);
$tdataAllocation_Dashboard_New [".searchFields"] ["customerallocation_Contract_End"] = $dashField;
$dashField = array ();
$dashField [] = array (
		"table" => "customerallocation",
		"field" => "OnshoreSupportOnly" 
);
$tdataAllocation_Dashboard_New [".searchFields"] ["customerallocation_OnshoreSupportOnly"] = $dashField;
$dashField = array ();
$dashField [] = array (
		"table" => "customerallocation",
		"field" => "PlatformName" 
);
$tdataAllocation_Dashboard_New [".searchFields"] ["customerallocation_PlatformName"] = $dashField;
$dashField = array ();
$dashField [] = array (
		"table" => "customerallocation",
		"field" => "Role" 
);
$tdataAllocation_Dashboard_New [".searchFields"] ["customerallocation_Role"] = $dashField;
$dashField = array ();
$dashField [] = array (
		"table" => "customerallocation",
		"field" => "TimeZone" 
);
$tdataAllocation_Dashboard_New [".searchFields"] ["customerallocation_TimeZone"] = $dashField;
$dashField = array ();
$dashField [] = array (
		"table" => "customerallocation",
		"field" => "Project" 
);
$tdataAllocation_Dashboard_New [".searchFields"] ["customerallocation_Project"] = $dashField;
$dashField = array ();
$dashField [] = array (
		"table" => "customerallocation",
		"field" => "Stage" 
);
$tdataAllocation_Dashboard_New [".searchFields"] ["customerallocation_Stage"] = $dashField;

// all search fields
$tdataAllocation_Dashboard_New [".allSearchFields"] = array ();
$tdataAllocation_Dashboard_New [".allSearchFields"] [] = "customerallocation_OracleID";
$tdataAllocation_Dashboard_New [".allSearchFields"] [] = "customerallocation_CustomerName";
$tdataAllocation_Dashboard_New [".allSearchFields"] [] = "customerallocation_RSAName";
$tdataAllocation_Dashboard_New [".allSearchFields"] [] = "customerallocation_Supervisor";
$tdataAllocation_Dashboard_New [".allSearchFields"] [] = "customerallocation_StartDate";
$tdataAllocation_Dashboard_New [".allSearchFields"] [] = "customerallocation_EndDate";
$tdataAllocation_Dashboard_New [".allSearchFields"] [] = "customerallocation_Allocation";
$tdataAllocation_Dashboard_New [".allSearchFields"] [] = "customerallocation_Override";
$tdataAllocation_Dashboard_New [".allSearchFields"] [] = "customerallocation_Size";
$tdataAllocation_Dashboard_New [".allSearchFields"] [] = "customerallocation_Contract_Start";
$tdataAllocation_Dashboard_New [".allSearchFields"] [] = "customerallocation_SteadyStateDate";
$tdataAllocation_Dashboard_New [".allSearchFields"] [] = "customerallocation_Contract_End";
$tdataAllocation_Dashboard_New [".allSearchFields"] [] = "customerallocation_OnshoreSupportOnly";
$tdataAllocation_Dashboard_New [".allSearchFields"] [] = "customerallocation_PlatformName";
$tdataAllocation_Dashboard_New [".allSearchFields"] [] = "customerallocation_Role";
$tdataAllocation_Dashboard_New [".allSearchFields"] [] = "customerallocation_TimeZone";
$tdataAllocation_Dashboard_New [".allSearchFields"] [] = "customerallocation_Project";
$tdataAllocation_Dashboard_New [".allSearchFields"] [] = "customerallocation_Stage";

// good like search fields
$tdataAllocation_Dashboard_New [".googleLikeFields"] = array ();
$tdataAllocation_Dashboard_New [".googleLikeFields"] [] = "customerallocation_OracleID";
$tdataAllocation_Dashboard_New [".googleLikeFields"] [] = "customerallocation_CustomerName";
$tdataAllocation_Dashboard_New [".googleLikeFields"] [] = "customerallocation_RSAName";
$tdataAllocation_Dashboard_New [".googleLikeFields"] [] = "customerallocation_Supervisor";
$tdataAllocation_Dashboard_New [".googleLikeFields"] [] = "customerallocation_StartDate";
$tdataAllocation_Dashboard_New [".googleLikeFields"] [] = "customerallocation_EndDate";
$tdataAllocation_Dashboard_New [".googleLikeFields"] [] = "customerallocation_Allocation";
$tdataAllocation_Dashboard_New [".googleLikeFields"] [] = "customerallocation_Override";
$tdataAllocation_Dashboard_New [".googleLikeFields"] [] = "customerallocation_Size";
$tdataAllocation_Dashboard_New [".googleLikeFields"] [] = "customerallocation_Contract_Start";
$tdataAllocation_Dashboard_New [".googleLikeFields"] [] = "customerallocation_SteadyStateDate";
$tdataAllocation_Dashboard_New [".googleLikeFields"] [] = "customerallocation_Contract_End";
$tdataAllocation_Dashboard_New [".googleLikeFields"] [] = "customerallocation_OnshoreSupportOnly";
$tdataAllocation_Dashboard_New [".googleLikeFields"] [] = "customerallocation_PlatformName";
$tdataAllocation_Dashboard_New [".googleLikeFields"] [] = "customerallocation_Role";
$tdataAllocation_Dashboard_New [".googleLikeFields"] [] = "customerallocation_TimeZone";
$tdataAllocation_Dashboard_New [".googleLikeFields"] [] = "customerallocation_Project";
$tdataAllocation_Dashboard_New [".googleLikeFields"] [] = "customerallocation_Stage";

$tdataAllocation_Dashboard_New [".dashElements"] = array ();

$dbelement = array (
		"elementName" => "customerallocation_list",
		"table" => "customerallocation",
		"type" => 0 
);
$dbelement ["cellName"] = "cell_0_0";

$dbelement ["inlineAdd"] = 0 > 0;
$dbelement ["inlineEdit"] = 0 > 0;
$dbelement ["deleteRecord"] = 0 > 0;

$dbelement ["popupAdd"] = 0 > 0;
$dbelement ["popupEdit"] = 0 > 0;
$dbelement ["popupView"] = 0 > 0;

$tdataAllocation_Dashboard_New [".dashElements"] [] = $dbelement;

$tdataAllocation_Dashboard_New [".shortTableName"] = "Allocation_Dashboard_New";
$tdataAllocation_Dashboard_New [".entityType"] = 4;

include_once (getabspath ( "include/Allocation_Dashboard_New_events.php" ));
$tableEvents ["Allocation Dashboard New"] = new eventclass_Allocation_Dashboard_New ();
$tdataAllocation_Dashboard_New [".hasEvents"] = true;

$tdataAllocation_Dashboard_New [".tableType"] = "dashboard";

$tdataAllocation_Dashboard_New [".isUsebuttonHandlers"] = true;

$tdataAllocation_Dashboard_New [".addPageEvents"] = false;

$tables_data ["Allocation Dashboard New"] = &$tdataAllocation_Dashboard_New;
$field_labels ["Allocation_Dashboard_New"] = &$fieldLabelsAllocation_Dashboard_New;
$page_titles ["Allocation_Dashboard_New"] = &$pageTitlesAllocation_Dashboard_New;

?>