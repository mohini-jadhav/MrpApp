<?php
require_once (getabspath ( "classes/cipherer.php" ));

$tdataMRP_Dashboard = array ();
$tdataMRP_Dashboard [".ShortName"] = "MRP_Dashboard";

// field labels
$fieldLabelsMRP_Dashboard = array ();
$pageTitlesMRP_Dashboard = array ();

if (mlang_getcurrentlang () == "English") {
	$fieldLabelsMRP_Dashboard ["English"] = array ();
	$fieldLabelsMRP_Dashboard ["English"] ["customerallocation_OracleID"] = "Customerallocation OracleID";
	$fieldLabelsMRP_Dashboard ["English"] ["customerallocation_CustomerName"] = "Customerallocation CustomerName";
	$fieldLabelsMRP_Dashboard ["English"] ["customerallocation_RSAName"] = "Customerallocation RSAName";
	$fieldLabelsMRP_Dashboard ["English"] ["customerallocation_Supervisor"] = "Customerallocation Supervisor";
	$fieldLabelsMRP_Dashboard ["English"] ["customerallocation_StartDate"] = "Customerallocation StartDate";
	$fieldLabelsMRP_Dashboard ["English"] ["customerallocation_EndDate"] = "Customerallocation EndDate";
	$fieldLabelsMRP_Dashboard ["English"] ["customerallocation_Allocation"] = "Customerallocation Allocation";
	$fieldLabelsMRP_Dashboard ["English"] ["customerallocation_Override"] = "Customerallocation Override";
	$fieldLabelsMRP_Dashboard ["English"] ["customerallocation_Size"] = "Customerallocation Size";
	$fieldLabelsMRP_Dashboard ["English"] ["customerallocation_Contract_Start"] = "Customerallocation Contract Start";
	$fieldLabelsMRP_Dashboard ["English"] ["customerallocation_SteadyStateDate"] = "Customerallocation SteadyStateDate";
	$fieldLabelsMRP_Dashboard ["English"] ["customerallocation_Contract_End"] = "Customerallocation Contract End";
	$fieldLabelsMRP_Dashboard ["English"] ["customerallocation_OnshoreSupportOnly"] = "Customerallocation OnshoreSupportOnly";
	$fieldLabelsMRP_Dashboard ["English"] ["customerallocation_PlatformType"] = "Customerallocation PlatformType";
	$fieldLabelsMRP_Dashboard ["English"] ["customerallocation_PlatformName"] = "Customerallocation PlatformName";
	$fieldLabelsMRP_Dashboard ["English"] ["customerallocation_Role"] = "Customerallocation Role";
	$fieldLabelsMRP_Dashboard ["English"] ["customerallocation_TimeZone"] = "Customerallocation TimeZone";
	$fieldLabelsMRP_Dashboard ["English"] ["customerallocation_Project"] = "Customerallocation Project";
	$fieldLabelsMRP_Dashboard ["English"] ["customerallocation_Stage"] = "Customerallocation Stage";
}
if (mlang_getcurrentlang () == "") {
	$fieldLabelsMRP_Dashboard [""] = array ();
}

// search fields
$tdataMRP_Dashboard [".searchFields"] = array ();
$dashField = array ();
$dashField [] = array (
		"table" => "customerallocation",
		"field" => "OracleID" 
);
$tdataMRP_Dashboard [".searchFields"] ["customerallocation_OracleID"] = $dashField;
$dashField = array ();
$dashField [] = array (
		"table" => "customerallocation",
		"field" => "CustomerName" 
);
$tdataMRP_Dashboard [".searchFields"] ["customerallocation_CustomerName"] = $dashField;
$dashField = array ();
$dashField [] = array (
		"table" => "customerallocation",
		"field" => "RSAName" 
);
$tdataMRP_Dashboard [".searchFields"] ["customerallocation_RSAName"] = $dashField;
$dashField = array ();
$dashField [] = array (
		"table" => "customerallocation",
		"field" => "Supervisor" 
);
$tdataMRP_Dashboard [".searchFields"] ["customerallocation_Supervisor"] = $dashField;
$dashField = array ();
$dashField [] = array (
		"table" => "customerallocation",
		"field" => "StartDate" 
);
$tdataMRP_Dashboard [".searchFields"] ["customerallocation_StartDate"] = $dashField;
$dashField = array ();
$dashField [] = array (
		"table" => "customerallocation",
		"field" => "EndDate" 
);
$tdataMRP_Dashboard [".searchFields"] ["customerallocation_EndDate"] = $dashField;
$dashField = array ();
$dashField [] = array (
		"table" => "customerallocation",
		"field" => "Allocation" 
);
$tdataMRP_Dashboard [".searchFields"] ["customerallocation_Allocation"] = $dashField;
$dashField = array ();
$dashField [] = array (
		"table" => "customerallocation",
		"field" => "Override" 
);
$tdataMRP_Dashboard [".searchFields"] ["customerallocation_Override"] = $dashField;
$dashField = array ();
$dashField [] = array (
		"table" => "customerallocation",
		"field" => "Size" 
);
$tdataMRP_Dashboard [".searchFields"] ["customerallocation_Size"] = $dashField;
$dashField = array ();
$dashField [] = array (
		"table" => "customerallocation",
		"field" => "Contract_Start" 
);
$tdataMRP_Dashboard [".searchFields"] ["customerallocation_Contract_Start"] = $dashField;
$dashField = array ();
$dashField [] = array (
		"table" => "customerallocation",
		"field" => "SteadyStateDate" 
);
$tdataMRP_Dashboard [".searchFields"] ["customerallocation_SteadyStateDate"] = $dashField;
$dashField = array ();
$dashField [] = array (
		"table" => "customerallocation",
		"field" => "Contract_End" 
);
$tdataMRP_Dashboard [".searchFields"] ["customerallocation_Contract_End"] = $dashField;
$dashField = array ();
$dashField [] = array (
		"table" => "customerallocation",
		"field" => "OnshoreSupportOnly" 
);
$tdataMRP_Dashboard [".searchFields"] ["customerallocation_OnshoreSupportOnly"] = $dashField;
$dashField = array ();
$dashField [] = array (
		"table" => "customerallocation",
		"field" => "PlatformName" 
);
$tdataMRP_Dashboard [".searchFields"] ["customerallocation_PlatformName"] = $dashField;
$dashField = array ();
$dashField [] = array (
		"table" => "customerallocation",
		"field" => "Role" 
);
$tdataMRP_Dashboard [".searchFields"] ["customerallocation_Role"] = $dashField;
$dashField = array ();
$dashField [] = array (
		"table" => "customerallocation",
		"field" => "TimeZone" 
);
$tdataMRP_Dashboard [".searchFields"] ["customerallocation_TimeZone"] = $dashField;
$dashField = array ();
$dashField [] = array (
		"table" => "customerallocation",
		"field" => "Project" 
);
$tdataMRP_Dashboard [".searchFields"] ["customerallocation_Project"] = $dashField;
$dashField = array ();
$dashField [] = array (
		"table" => "customerallocation",
		"field" => "Stage" 
);
$tdataMRP_Dashboard [".searchFields"] ["customerallocation_Stage"] = $dashField;

// all search fields
$tdataMRP_Dashboard [".allSearchFields"] = array ();
$tdataMRP_Dashboard [".allSearchFields"] [] = "customerallocation_OracleID";
$tdataMRP_Dashboard [".allSearchFields"] [] = "customerallocation_CustomerName";
$tdataMRP_Dashboard [".allSearchFields"] [] = "customerallocation_RSAName";
$tdataMRP_Dashboard [".allSearchFields"] [] = "customerallocation_Supervisor";
$tdataMRP_Dashboard [".allSearchFields"] [] = "customerallocation_StartDate";
$tdataMRP_Dashboard [".allSearchFields"] [] = "customerallocation_EndDate";
$tdataMRP_Dashboard [".allSearchFields"] [] = "customerallocation_Allocation";
$tdataMRP_Dashboard [".allSearchFields"] [] = "customerallocation_Override";
$tdataMRP_Dashboard [".allSearchFields"] [] = "customerallocation_Size";
$tdataMRP_Dashboard [".allSearchFields"] [] = "customerallocation_Contract_Start";
$tdataMRP_Dashboard [".allSearchFields"] [] = "customerallocation_SteadyStateDate";
$tdataMRP_Dashboard [".allSearchFields"] [] = "customerallocation_Contract_End";
$tdataMRP_Dashboard [".allSearchFields"] [] = "customerallocation_OnshoreSupportOnly";
$tdataMRP_Dashboard [".allSearchFields"] [] = "customerallocation_PlatformName";
$tdataMRP_Dashboard [".allSearchFields"] [] = "customerallocation_Role";
$tdataMRP_Dashboard [".allSearchFields"] [] = "customerallocation_TimeZone";
$tdataMRP_Dashboard [".allSearchFields"] [] = "customerallocation_Project";
$tdataMRP_Dashboard [".allSearchFields"] [] = "customerallocation_Stage";

// good like search fields
$tdataMRP_Dashboard [".googleLikeFields"] = array ();
$tdataMRP_Dashboard [".googleLikeFields"] [] = "customerallocation_OracleID";
$tdataMRP_Dashboard [".googleLikeFields"] [] = "customerallocation_CustomerName";
$tdataMRP_Dashboard [".googleLikeFields"] [] = "customerallocation_RSAName";
$tdataMRP_Dashboard [".googleLikeFields"] [] = "customerallocation_Supervisor";
$tdataMRP_Dashboard [".googleLikeFields"] [] = "customerallocation_StartDate";
$tdataMRP_Dashboard [".googleLikeFields"] [] = "customerallocation_EndDate";
$tdataMRP_Dashboard [".googleLikeFields"] [] = "customerallocation_Allocation";
$tdataMRP_Dashboard [".googleLikeFields"] [] = "customerallocation_Override";
$tdataMRP_Dashboard [".googleLikeFields"] [] = "customerallocation_Size";
$tdataMRP_Dashboard [".googleLikeFields"] [] = "customerallocation_Contract_Start";
$tdataMRP_Dashboard [".googleLikeFields"] [] = "customerallocation_SteadyStateDate";
$tdataMRP_Dashboard [".googleLikeFields"] [] = "customerallocation_Contract_End";
$tdataMRP_Dashboard [".googleLikeFields"] [] = "customerallocation_OnshoreSupportOnly";
$tdataMRP_Dashboard [".googleLikeFields"] [] = "customerallocation_PlatformName";
$tdataMRP_Dashboard [".googleLikeFields"] [] = "customerallocation_Role";
$tdataMRP_Dashboard [".googleLikeFields"] [] = "customerallocation_TimeZone";
$tdataMRP_Dashboard [".googleLikeFields"] [] = "customerallocation_Project";
$tdataMRP_Dashboard [".googleLikeFields"] [] = "customerallocation_Stage";

$tdataMRP_Dashboard [".dashElements"] = array ();

$dbelement = array (
		"elementName" => "customerallocation_record",
		"table" => "customerallocation",
		"type" => 3 
);
$dbelement ["cellName"] = "cell_0_0";

$dbelement ["reload"] = 60;
$dbelement ["tabsPageTypes"] = array ();
$dbelement ["tabsPageTypes"] [] = PAGE_VIEW;
$dbelement ["initialTabPageType"] = PAGE_VIEW;

$tdataMRP_Dashboard [".dashElements"] [] = $dbelement;
$dbelement = array (
		"elementName" => "View_list",
		"table" => "View",
		"type" => 0 
);
$dbelement ["cellName"] = "cell_0_1";

$dbelement ["reload"] = 60;

$tdataMRP_Dashboard [".dashElements"] [] = $dbelement;

$tdataMRP_Dashboard [".shortTableName"] = "MRP_Dashboard";
$tdataMRP_Dashboard [".entityType"] = 4;

$tableEvents ["MRP Dashboard"] = new eventsBase ();
$tdataMRP_Dashboard [".hasEvents"] = false;

$tdataMRP_Dashboard [".tableType"] = "dashboard";

$tdataMRP_Dashboard [".addPageEvents"] = false;

$tables_data ["MRP Dashboard"] = &$tdataMRP_Dashboard;
$field_labels ["MRP_Dashboard"] = &$fieldLabelsMRP_Dashboard;
$page_titles ["MRP_Dashboard"] = &$pageTitlesMRP_Dashboard;

?>