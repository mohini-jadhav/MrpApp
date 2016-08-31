<?php
require_once (getabspath ( "classes/cipherer.php" ));

$tdataAllocation_Dashboard = array ();
$tdataAllocation_Dashboard [".ShortName"] = "Allocation_Dashboard";

// field labels
$fieldLabelsAllocation_Dashboard = array ();
$pageTitlesAllocation_Dashboard = array ();

if (mlang_getcurrentlang () == "English") {
	$fieldLabelsAllocation_Dashboard ["English"] = array ();
	$fieldLabelsAllocation_Dashboard ["English"] ["customerallocation_OracleID"] = "Oracle ID";
	$fieldLabelsAllocation_Dashboard ["English"] ["customerallocation_CustomerName"] = "Customer Name";
	$fieldLabelsAllocation_Dashboard ["English"] ["customerallocation_StartDate"] = "Start Date";
	$fieldLabelsAllocation_Dashboard ["English"] ["customerallocation_EndDate"] = "End Date";
	$fieldLabelsAllocation_Dashboard ["English"] ["customerallocation_Size"] = "Size";
	$fieldLabelsAllocation_Dashboard ["English"] ["customerallocation_Contract_Start"] = "Contract Start";
	$fieldLabelsAllocation_Dashboard ["English"] ["customerallocation_SteadyStateDate"] = "Steady State Date";
	$fieldLabelsAllocation_Dashboard ["English"] ["customerallocation_Contract_End"] = "Contract End";
	$fieldLabelsAllocation_Dashboard ["English"] ["customerallocation_OnshoreSupportOnly"] = "Onshore Only";
	$fieldLabelsAllocation_Dashboard ["English"] ["customerallocation_PlatformName"] = "Platform Name";
	$fieldLabelsAllocation_Dashboard ["English"] ["customerallocation_TimeZone"] = "Primary Working Time Zone";
	$fieldLabelsAllocation_Dashboard ["English"] ["customerallocation_Project"] = "Project";
}
if (mlang_getcurrentlang () == "") {
	$fieldLabelsAllocation_Dashboard [""] = array ();
}

// search fields
$tdataAllocation_Dashboard [".searchFields"] = array ();

// all search fields
$tdataAllocation_Dashboard [".allSearchFields"] = array ();

// good like search fields
$tdataAllocation_Dashboard [".googleLikeFields"] = array ();

$tdataAllocation_Dashboard [".dashElements"] = array ();

$tdataAllocation_Dashboard [".shortTableName"] = "Allocation_Dashboard";
$tdataAllocation_Dashboard [".entityType"] = 4;

$tableEvents ["Allocation_Dashboard"] = new eventsBase ();
$tdataAllocation_Dashboard [".hasEvents"] = false;

$tdataAllocation_Dashboard [".tableType"] = "dashboard";

$tdataAllocation_Dashboard [".addPageEvents"] = false;

$tables_data ["Allocation_Dashboard"] = &$tdataAllocation_Dashboard;
$field_labels ["Allocation_Dashboard"] = &$fieldLabelsAllocation_Dashboard;
$page_titles ["Allocation_Dashboard"] = &$pageTitlesAllocation_Dashboard;

?>