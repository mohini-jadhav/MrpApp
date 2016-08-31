<?php
@ini_set ( "display_errors", "1" );
@ini_set ( "display_startup_errors", "1" );

require_once ("include/dbcommon.php");
header ( "Expires: Thu, 01 Jan 1970 00:00:01 GMT" );

require_once ("include/admin_rights_variables.php");

if (! Security::processAdminPageSecurity ( false ))
	return;

$tables = array ();
$pageMask = array ();
$table = "customer_header";
$mask = "";
$mask .= "A";
$mask .= "E";
$mask .= "D";
$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask [$table] = $mask;
$tables [$table] = array (
		"customer_header",
		" " . "Customer Profile" 
);
$table = "customer_platform";
$mask = "";
$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask [$table] = $mask;
$tables [$table] = array (
		"customer_platform",
		" " . "Customer Platform" 
);
$table = "customer_stage";
$mask = "";
$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask [$table] = $mask;
$tables [$table] = array (
		"customer_stage",
		" " . "Customer Stage" 
);
$table = "customer_resource_allocation";
$mask = "";
$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask [$table] = $mask;
$tables [$table] = array (
		"customer_resource_allocation",
		" " . "Customer Resource Allocation" 
);
$table = "employee_auth";
$mask = "";
$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask [$table] = $mask;
$tables [$table] = array (
		"employee_auth",
		" " . "Employee Auth" 
);
$table = "employee_header";
$mask = "";
$mask .= "A";
$mask .= "E";
$mask .= "D";
$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask [$table] = $mask;
$tables [$table] = array (
		"employee_header",
		" " . "Employee Profile" 
);
$table = "lookup";
$mask = "";
$mask .= "A";
$mask .= "E";
$mask .= "D";
$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask [$table] = $mask;
$tables [$table] = array (
		"lookup",
		" " . "Lookup" 
);
$table = "users";
$mask = "";

$pageMask [$table] = $mask;
$tables [$table] = array (
		"users",
		" " . "Users" 
);
$table = "customerallocation";
$mask = "";
$mask .= "A";
$mask .= "E";
$mask .= "S";
$mask .= "P";

$pageMask [$table] = $mask;
$tables [$table] = array (
		"customerallocation",
		" " . "Resource Allocation" 
);
$table = "backup";
$mask = "";
$mask .= "A";

$pageMask [$table] = $mask;
$tables [$table] = array (
		"backup",
		" " . "Backup" 
);
$table = "database";
$mask = "";
$mask .= "A";

$pageMask [$table] = $mask;
$tables [$table] = array (
		"database",
		" " . "Database" 
);
$table = "application";
$mask = "";
$mask .= "A";

$pageMask [$table] = $mask;
$tables [$table] = array (
		"application",
		" " . "Application" 
);
$table = "stage";
$mask = "";
$mask .= "A";
$mask .= "E";
$mask .= "D";
$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask [$table] = $mask;
$tables [$table] = array (
		"stage",
		" " . "Stage" 
);
$table = "CUST_ALLOC";
$mask = "";
$mask .= "A";
$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask [$table] = $mask;
$tables [$table] = array (
		"CUST_ALLOC",
		" " . "CUST ALLOC" 
);
$table = "calandar";
$mask = "";
$mask .= "A";
$mask .= "E";
$mask .= "D";
$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask [$table] = $mask;
$tables [$table] = array (
		"calandar",
		" " . "Calandar" 
);
$table = "MRP Dashboard";
$mask = "";
$mask .= "S";

$pageMask [$table] = $mask;
$tables [$table] = array (
		"MRP_Dashboard",
		" " . "MRP Dashboard" 
);
$table = "allocation";
$mask = "";
$mask .= "A";
$mask .= "E";
$mask .= "D";
$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask [$table] = $mask;
$tables [$table] = array (
		"allocation",
		" " . "Allocation" 
);
$table = "View";
$mask = "";
$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask [$table] = $mask;
$tables [$table] = array (
		"View",
		" " . "View" 
);
$table = "skillstable";
$mask = "";
$mask .= "A";
$mask .= "E";
$mask .= "D";
$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask [$table] = $mask;
$tables [$table] = array (
		"skillstable",
		" " . "Skillstable" 
);
$table = "employeeskills";
$mask = "";
$mask .= "A";
$mask .= "E";
$mask .= "D";
$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask [$table] = $mask;
$tables [$table] = array (
		"employeeskills",
		" " . "Employee Skills" 
);
$table = "skilllevel";
$mask = "";
$mask .= "A";
$mask .= "E";
$mask .= "D";
$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask [$table] = $mask;
$tables [$table] = array (
		"skilllevel",
		" " . "Skilllevel" 
);
$table = "category";
$mask = "";
$mask .= "A";

$pageMask [$table] = $mask;
$tables [$table] = array (
		"category",
		" " . "Category" 
);
$table = "customer_Geotag";
$mask = "";
$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask [$table] = $mask;
$tables [$table] = array (
		"customer_Geotag",
		" " . "Customer Geotag" 
);
$table = "tbl_test center";
$mask = "";
$mask .= "A";
$mask .= "E";
$mask .= "D";
$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask [$table] = $mask;
$tables [$table] = array (
		"tbl_test_center",
		" " . "Tbl Test Center" 
);
$table = "tbl_director";
$mask = "";
$mask .= "A";
$mask .= "E";
$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask [$table] = $mask;
$tables [$table] = array (
		"tbl_director",
		" " . "Tbl Director" 
);
$table = "stage2";
$mask = "";
$mask .= "A";
$mask .= "E";
$mask .= "D";
$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask [$table] = $mask;
$tables [$table] = array (
		"stage2",
		" " . "Stage2" 
);
$table = "tbl_categorytechnology";
$mask = "";
$mask .= "A";
$mask .= "E";
$mask .= "D";
$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask [$table] = $mask;
$tables [$table] = array (
		"tbl_categorytechnology",
		" " . "Tbl Categorytechnology" 
);
$table = "tbl_technologycustomer";
$mask = "";
$mask .= "A";
$mask .= "E";
$mask .= "D";
$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask [$table] = $mask;
$tables [$table] = array (
		"tbl_technologycustomer",
		" " . "Tbl Technologycustomer" 
);
$table = "customertechnology";
$mask = "";
$mask .= "A";
$mask .= "E";
$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask [$table] = $mask;
$tables [$table] = array (
		"customertechnology",
		" " . "Customertechnology" 
);
$table = "tbl_role";
$mask = "";
$mask .= "A";
$mask .= "E";
$mask .= "D";
$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask [$table] = $mask;
$tables [$table] = array (
		"tbl_role",
		" " . "Tbl Role" 
);
$table = "sizecategory";
$mask = "";
$mask .= "A";
$mask .= "E";
$mask .= "D";
$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask [$table] = $mask;
$tables [$table] = array (
		"sizecategory",
		" " . "Sizecategory" 
);
$table = "Workload";
$mask = "";
$mask .= "S";

$pageMask [$table] = $mask;
$tables [$table] = array (
		"Workload",
		" " . "Workload" 
);
$table = "time";
$mask = "";
$mask .= "A";
$mask .= "E";
$mask .= "D";
$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask [$table] = $mask;
$tables [$table] = array (
		"time",
		" " . "Time" 
);
$table = "tbl_sme";
$mask = "";
$mask .= "A";
$mask .= "E";
$mask .= "D";
$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask [$table] = $mask;
$tables [$table] = array (
		"tbl_sme",
		" " . "Tbl Sme" 
);
$table = "emptime";
$mask = "";
$mask .= "A";
$mask .= "E";
$mask .= "D";
$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask [$table] = $mask;
$tables [$table] = array (
		"emptime",
		" " . "Emptime" 
);
$table = "timezone";
$mask = "";

$pageMask [$table] = $mask;
$tables [$table] = array (
		"timezone",
		" " . "Timezone" 
);
$table = "color";
$mask = "";

$pageMask [$table] = $mask;
$tables [$table] = array (
		"color",
		" " . "Color" 
);
$table = "tbl_director1";
$mask = "";
$mask .= "A";
$mask .= "E";
$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask [$table] = $mask;
$tables [$table] = array (
		"tbl_director1",
		" " . "Tbl Director1" 
);
$table = "tbl_director3";
$mask = "";
$mask .= "A";
$mask .= "E";
$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask [$table] = $mask;
$tables [$table] = array (
		"tbl_director3",
		" " . "" 
);
$table = "size";
$mask = "";

$pageMask [$table] = $mask;
$tables [$table] = array (
		"size",
		" " . "Size" 
);
$table = "tbl_resource_allocation";
$mask = "";
$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask [$table] = $mask;
$tables [$table] = array (
		"tbl_resource_allocation",
		" " . "Tbl Resource Allocation" 
);

$layout = new TLayout ( "ug_rights2", "FusionAqua", "MobileAqua" );
$layout->version = 2;
$layout->blocks ["center"] = array ();
$layout->containers ["ugcontrols"] = array ();
$layout->container_properties ["ugcontrols"] = array ();
$layout->containers ["ugcontrols"] [] = array (
		"name" => "ugbuttons",
		"block" => "savebuttons_block",
		"substyle" => 1 
);

$layout->containers ["ugcontrols"] [] = array (
		"name" => "ugrightbuttons",
		"block" => "savebuttons_block",
		"substyle" => 1 
);

$layout->skins ["ugcontrols"] = "1";

$layout->blocks ["center"] [] = "ugcontrols";
$layout->containers ["message"] = array ();
$layout->container_properties ["message"] = array ();
$layout->containers ["message"] [] = array (
		"name" => "message",
		"block" => "message_block",
		"substyle" => 1 
);

$layout->skins ["message"] = "1";

$layout->blocks ["center"] [] = "message";
$layout->containers ["grid"] = array ();
$layout->container_properties ["grid"] = array ();
$layout->containers ["grid"] [] = array (
		"name" => "ugrightsblock",
		"block" => "rights_block",
		"substyle" => 1 
);

$layout->skins ["grid"] = "grid";

$layout->blocks ["center"] [] = "grid";
$layout->containers ["pagination"] = array ();
$layout->container_properties ["pagination"] = array ();
$layout->containers ["pagination"] [] = array (
		"name" => "pagination",
		"block" => "pagination_block",
		"substyle" => 1 
);

$layout->skins ["pagination"] = "2";

$layout->blocks ["center"] [] = "pagination";
$layout->blocks ["left"] = array ();
$layout->containers ["left"] = array ();
$layout->container_properties ["left"] = array ();
$layout->containers ["left"] [] = array (
		"name" => "loggedas",
		"block" => "security_block",
		"substyle" => 1 
);

$layout->skins ["left"] = "menu";

$layout->blocks ["left"] [] = "left";
$layout->containers ["uggroup"] = array ();
$layout->container_properties ["uggroup"] = array ();
$layout->containers ["uggroup"] [] = array (
		"name" => "ugrightsgroup",
		"block" => "",
		"substyle" => 1 
);

$layout->skins ["uggroup"] = "1";

$layout->blocks ["left"] [] = "uggroup";
$layout->blocks ["top"] = array ();
$layout->skins ["master"] = "empty";

$layout->blocks ["top"] [] = "master";
$layout->skins ["toplinks"] = "2";

$layout->blocks ["top"] [] = "toplinks";
$layout->containers ["hmenu"] = array ();
$layout->container_properties ["hmenu"] = array ();
$layout->containers ["hmenu"] [] = array (
		"name" => "hmenu",
		"block" => "menu_block",
		"substyle" => 1 
);

$layout->skins ["hmenu"] = "hmenu";

$layout->blocks ["top"] [] = "hmenu";
$page_layouts ["admin_rights_list"] = $layout;

$layout->skinsparams = array ();
$layout->skinsparams ["empty"] = array (
		"button" => "button2" 
);
$layout->skinsparams ["menu"] = array (
		"button" => "button1" 
);
$layout->skinsparams ["hmenu"] = array (
		"button" => "button1" 
);
$layout->skinsparams ["undermenu"] = array (
		"button" => "button1" 
);
$layout->skinsparams ["fields"] = array (
		"button" => "button1" 
);
$layout->skinsparams ["form"] = array (
		"button" => "button1" 
);
$layout->skinsparams ["1"] = array (
		"button" => "button1" 
);
$layout->skinsparams ["2"] = array (
		"button" => "button1" 
);
$layout->skinsparams ["3"] = array (
		"button" => "button1" 
);

require_once ('include/xtempl.php');
require_once ('classes/listpage.php');
require_once ('classes/rightspage.php');

$xt = new Xtempl ();

$options = array ();
$options ["pageType"] = PAGE_LIST;
$options ["id"] = postvalue ( "id" ) ? postvalue ( "id" ) : 1;
$options ["mode"] = RIGHTS_PAGE;
$options ['xt'] = &$xt;

$options ["tables"] = $tables;
$options ["pageMasks"] = $pageMask;

$pageObject = ListPage::createListPage ( $strTableName, $options );

if (postvalue ( "a" ) == "saveRights") {
	$modifiedRights = my_json_decode ( postvalue ( 'values' ) );
	$pageObject->saveRights ( $modifiedRights );
	return;
}

// add buttons if exist

// prepare code for build page
$pageObject->prepareForBuildPage ();

// show page depends of mode
$pageObject->showPage ();

?>
