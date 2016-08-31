<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");


require_once("include/dbcommon.php");


if(!isLogged())
{
	HeaderRedirect("login");
	return;
}

if (($_SESSION["MyURL"] == "") || (!isLoggedAsGuest())) {
	Security::saveRedirectURL();
}




$layout = new TLayout("menu2", "FusionAqua", "MobileAqua");
$layout->version = 2;
$layout->blocks["top"] = array();
$layout->containers["menu"] = array();
$layout->container_properties["menu"] = array(  );
$layout->containers["menu"][] = array("name"=>"login_menu", 
	"block"=>"loggedas_block", "substyle"=>2  );

$layout->containers["menu"][] = array("name"=>"vmenu", 
	"block"=>"menu_block", "substyle"=>1  );

$layout->skins["menu"] = "1";

$layout->blocks["top"][] = "menu";
$page_layouts["menu"] = $layout;

$layout->skinsparams = array();
$layout->skinsparams["empty"] = array("button"=>"button2");
$layout->skinsparams["menu"] = array("button"=>"button1");
$layout->skinsparams["hmenu"] = array("button"=>"button1");
$layout->skinsparams["undermenu"] = array("button"=>"button1");
$layout->skinsparams["fields"] = array("button"=>"button1");
$layout->skinsparams["form"] = array("button"=>"button1");
$layout->skinsparams["1"] = array("button"=>"button1");
$layout->skinsparams["2"] = array("button"=>"button1");
$layout->skinsparams["3"] = array("button"=>"button1");



require_once('include/xtempl.php');
require_once(getabspath("classes/cipherer.php"));

include_once(getabspath("include/customer_header_events.php"));
$tableEvents["customer_header"] = new eventclass_customer_header;
include_once(getabspath("include/employee_header_events.php"));
$tableEvents["employee_header"] = new eventclass_employee_header;
include_once(getabspath("include/customerallocation_events.php"));
$tableEvents["customerallocation"] = new eventclass_customerallocation;
include_once(getabspath("include/CUST_ALLOC_events.php"));
$tableEvents["CUST_ALLOC"] = new eventclass_CUST_ALLOC;
include_once(getabspath("include/tbl_resource_allocation_events.php"));
$tableEvents["tbl_resource_allocation"] = new eventclass_tbl_resource_allocation;
include_once(getabspath("include/View_events.php"));
$tableEvents["View"] = new eventclass_View;
include_once(getabspath("include/employeeskills_events.php"));
$tableEvents["employeeskills"] = new eventclass_employeeskills;
include_once(getabspath("include/customer_Geotag_events.php"));
$tableEvents["customer_Geotag"] = new eventclass_customer_Geotag;
include_once(getabspath("include/stage2_events.php"));
$tableEvents["stage2"] = new eventclass_stage2;
include_once(getabspath("include/customertechnology_events.php"));
$tableEvents["customertechnology"] = new eventclass_customertechnology;
include_once(getabspath("include/time_events.php"));
$tableEvents["time"] = new eventclass_time;
include_once(getabspath("include/emptime_events.php"));
$tableEvents["emptime"] = new eventclass_emptime;
include_once(getabspath("include/tbl_allocation_input_events.php"));
$tableEvents["tbl_allocation_input"] = new eventclass_tbl_allocation_input;
include_once(getabspath("include/Allocation_Dashboard_New_events.php"));
$tableEvents["Allocation Dashboard New"] = new eventclass_Allocation_Dashboard_New;

$xt = new Xtempl();

$id = postvalue("id")!=="" ? postvalue("id") : 1;

//array of params for classes
$params = array();
$params["id"] = $id; 
$params["xt"] = &$xt;
$params["tName"] = NOT_TABLE_BASED_TNAME;
$params["pageType"] = PAGE_MENU;
$params["templatefile"] = "menu.htm";
$params["isGroupSecurity"] = $isGroupSecurity;
$params["needSearchClauseObj"] = false;
$pageObject = new RunnerPage($params);
$pageObject->init();

// button handlers file names

//	Before Process event
if($globalEvents->exists("BeforeProcessMenu"))
	$globalEvents->BeforeProcessMenu( $pageObject );

$pageObject->body["begin"] .= GetBaseScriptsForPage(false);

$pageObject->addCommonJs();

//fill jsSettings and ControlsHTMLMap
$pageObject->fillSetCntrlMaps();
$pageObject->body['end'] .= '<script>';
$pageObject->body['end'] .= "window.controlsMap = ".my_json_encode($pageObject->controlsHTMLMap).";";
$pageObject->body['end'] .= "window.viewControlsMap = ".my_json_encode($pageObject->viewControlsHTMLMap).";";
$pageObject->body['end'] .= "window.settings = ".my_json_encode($pageObject->jsSettings).";</script>";
$pageObject->body["end"] .= "<script type=\"text/javascript\" src=\"".GetRootPathForResources("include/runnerJS/RunnerAll.js")."\"></script>";
$pageObject->body["end"] .= '<script>'.$pageObject->PrepareJS()."</script>";
$xt->assignbyref("body",$pageObject->body);

// The user might rewrite $_SESSION["UserName"] value with HTML code in an event, so no encoding will be performed while printing this value.
$xt->assign("username", $_SESSION["UserName"]);
$xt->assign("changepwd_link",$_SESSION["AccessLevel"] != ACCESS_LEVEL_GUEST && $_SESSION["fromFacebook"] == false);
$xt->assign("changepwdlink_attrs","onclick=\"window.location.href='".GetTableLink("changepwd")."';return false;\"");

$xt->assign("logoutlink_attrs","onclick=\"window.location.href='".GetTableLink("login", "", "a=logout")."';return false;\"");

$xt->assign("guestloginlink_attrs","onclick=\"window.location.href='".GetTableLink("login")."';return false;\"");

$xt->assign("loggedas_block", !isLoggedAsGuest());
$xt->assign("loggedas_message", !isLoggedAsGuest());

$xt->assign("logout_link", true);
$xt->assign("guestloginbutton", isLoggedAsGuest());
$xt->assign("logoutbutton", isSingleSign() && !isLoggedAsGuest());

if( IsAdmin() )
	$xt->assign("adminarea_link", true);

// get redirect location for menu page
$redirect = $pageObject->getRedirectForMenuPage();
if($redirect)
{
	header("Location: ".$redirect); 
	exit();
}

$xt->assign("menu_block",true);
if($globalEvents->exists("BeforeShowMenu"))
	$globalEvents->BeforeShowMenu($xt, $pageObject->templatefile, $pageObject);

$pageObject->display($pageObject->templatefile);
?>