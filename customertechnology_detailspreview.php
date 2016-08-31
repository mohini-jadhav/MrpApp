<?php
@ini_set ( "display_errors", "1" );
@ini_set ( "display_startup_errors", "1" );

require_once ("include/dbcommon.php");
header ( "Expires: Thu, 01 Jan 1970 00:00:01 GMT" );

require_once ("include/customertechnology_variables.php");

$mode = postvalue ( "mode" );

if (! isLogged ()) {
	return;
}
if (! CheckSecurity ( @$_SESSION ["_" . $strTableName . "_OwnerID"], "Search" )) {
	return;
}

require_once ("classes/searchclause.php");

$cipherer = new RunnerCipherer ( $strTableName );

require_once ('include/xtempl.php');
$xt = new Xtempl ();

$layout = new TLayout ( "detailspreview", "FusionAqua", "MobileAqua" );
$layout->version = 2;
$layout->blocks ["bare"] = array ();
$layout->containers ["dcount"] = array ();
$layout->container_properties ["dcount"] = array ();
$layout->containers ["dcount"] [] = array (
		"name" => "detailspreviewheader",
		"block" => "",
		"substyle" => 1 
);

$layout->containers ["dcount"] [] = array (
		"name" => "detailspreviewdetailsfount",
		"block" => "",
		"substyle" => 1 
);

$layout->containers ["dcount"] [] = array (
		"name" => "detailspreviewdispfirst",
		"block" => "display_first",
		"substyle" => 1 
);

$layout->skins ["dcount"] = "empty";

$layout->blocks ["bare"] [] = "dcount";
$layout->containers ["detailspreviewgrid"] = array ();
$layout->container_properties ["detailspreviewgrid"] = array ();
$layout->containers ["detailspreviewgrid"] [] = array (
		"name" => "detailspreviewfields",
		"block" => "details_data",
		"substyle" => 1 
);

$layout->skins ["detailspreviewgrid"] = "grid";

$layout->blocks ["bare"] [] = "detailspreviewgrid";
$page_layouts ["customertechnology_detailspreview"] = $layout;

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

$recordsCounter = 0;

// process masterkey value
$mastertable = postvalue ( "mastertable" );
$masterKeys = my_json_decode ( postvalue ( "masterKeys" ) );
$sessionPrefix = "_detailsPreview";
if ($mastertable != "") {
	$_SESSION [$sessionPrefix . "_mastertable"] = $mastertable;
	// copy keys to session
	$i = 1;
	if (is_array ( $masterKeys ) && count ( $masterKeys ) > 0) {
		while ( array_key_exists ( "masterkey" . $i, $masterKeys ) ) {
			$_SESSION [$sessionPrefix . "_masterkey" . $i] = $masterKeys ["masterkey" . $i];
			$i ++;
		}
	}
	if (isset ( $_SESSION [$sessionPrefix . "_masterkey" . $i] ))
		unset ( $_SESSION [$sessionPrefix . "_masterkey" . $i] );
} else
	$mastertable = $_SESSION [$sessionPrefix . "_mastertable"];

$params = array ();
$params ['id'] = 1;
$params ['xt'] = &$xt;
$params ['tName'] = $strTableName;
$params ['pageType'] = "detailspreview";
$pageObject = new DetailsPreview ( $params );

if ($mastertable == "customer_header") {
	$where = "";
	$formattedValue = make_db_value ( "CategoryID", $_SESSION [$sessionPrefix . "_masterkey1"] );
	if ($formattedValue == "null")
		$where .= $pageObject->getFieldSQLDecrypt ( "CategoryID" ) . " is null";
	else
		$where .= $pageObject->getFieldSQLDecrypt ( "CategoryID" ) . "=" . $formattedValue;
}

$str = SecuritySQL ( "Search", $strTableName );

if (strlen ( $str ))
	$where .= " and " . $str;
$strSQL = $gQuery->gSQLWhere ( $where );
$strSQL .= " " . $gstrOrderBy;

$rowcount = $gQuery->gSQLRowCount ( $where, $pageObject->connection );
$xt->assign ( "row_count", $rowcount );
if ($rowcount) {
	$xt->assign ( "details_data", true );
	
	$display_count = 10;
	if ($mode == "inline")
		$display_count *= 2;
	
	if ($rowcount > $display_count + 2) {
		$xt->assign ( "display_first", true );
		$xt->assign ( "display_count", $display_count );
	} else
		$display_count = $rowcount;
	
	$rowinfo = array ();
	
	require_once getabspath ( 'classes/controls/ViewControlsContainer.php' );
	$pSet = new ProjectSettings ( $strTableName, PAGE_LIST );
	$viewContainer = new ViewControlsContainer ( $pSet, PAGE_LIST );
	$viewContainer->isDetailsPreview = true;
	
	$b = true;
	$qResult = $pageObject->connection->query ( $strSQL );
	$data = $cipherer->DecryptFetchedArray ( $qResult->fetchAssoc () );
	while ( $data && $recordsCounter < $display_count ) {
		$recordsCounter ++;
		$row = array ();
		$keylink = "";
		$keylink .= "&key1=" . runner_htmlspecialchars ( rawurlencode ( @$data ["AutCusTechID"] ) );
		
		// Category -
		$viewContainer->recId = $recordsCounter;
		$value = $viewContainer->showDBValue ( "Category", $data, $keylink );
		$row ["Category_value"] = $value;
		$format = $pSet->getViewFormat ( "Category" );
		$class = "rnr-field-text";
		if ($format == FORMAT_FILE)
			$class = ' rnr-field-file';
		if ($format == FORMAT_AUDIO)
			$class = ' rnr-field-audio';
		if ($format == FORMAT_CHECKBOX)
			$class = ' rnr-field-checkbox';
		if ($format == FORMAT_NUMBER || IsNumberType ( $pSet->getFieldType ( "Category" ) ))
			$class = ' rnr-field-number';
		$row ["Category_class"] = $class;
		// Platform -
		$viewContainer->recId = $recordsCounter;
		$value = $viewContainer->showDBValue ( "Platform", $data, $keylink );
		$row ["Platform_value"] = $value;
		$format = $pSet->getViewFormat ( "Platform" );
		$class = "rnr-field-text";
		if ($format == FORMAT_FILE)
			$class = ' rnr-field-file';
		if ($format == FORMAT_AUDIO)
			$class = ' rnr-field-audio';
		if ($format == FORMAT_CHECKBOX)
			$class = ' rnr-field-checkbox';
		if ($format == FORMAT_NUMBER || IsNumberType ( $pSet->getFieldType ( "Platform" ) ))
			$class = ' rnr-field-number';
		$row ["Platform_class"] = $class;
		// Quantity -
		$viewContainer->recId = $recordsCounter;
		$value = $viewContainer->showDBValue ( "Quantity", $data, $keylink );
		$row ["Quantity_value"] = $value;
		$format = $pSet->getViewFormat ( "Quantity" );
		$class = "rnr-field-text";
		if ($format == FORMAT_FILE)
			$class = ' rnr-field-file';
		if ($format == FORMAT_AUDIO)
			$class = ' rnr-field-audio';
		if ($format == FORMAT_CHECKBOX)
			$class = ' rnr-field-checkbox';
		if ($format == FORMAT_NUMBER || IsNumberType ( $pSet->getFieldType ( "Quantity" ) ))
			$class = ' rnr-field-number';
		$row ["Quantity_class"] = $class;
		// Comment -
		$viewContainer->recId = $recordsCounter;
		$value = $viewContainer->showDBValue ( "Comment", $data, $keylink );
		$row ["Comment_value"] = $value;
		$format = $pSet->getViewFormat ( "Comment" );
		$class = "rnr-field-text";
		if ($format == FORMAT_FILE)
			$class = ' rnr-field-file';
		if ($format == FORMAT_AUDIO)
			$class = ' rnr-field-audio';
		if ($format == FORMAT_CHECKBOX)
			$class = ' rnr-field-checkbox';
		if ($format == FORMAT_NUMBER || IsNumberType ( $pSet->getFieldType ( "Comment" ) ))
			$class = ' rnr-field-number';
		$row ["Comment_class"] = $class;
		// Name -
		$viewContainer->recId = $recordsCounter;
		$value = $viewContainer->showDBValue ( "Name", $data, $keylink );
		$row ["Name_value"] = $value;
		$format = $pSet->getViewFormat ( "Name" );
		$class = "rnr-field-text";
		if ($format == FORMAT_FILE)
			$class = ' rnr-field-file';
		if ($format == FORMAT_AUDIO)
			$class = ' rnr-field-audio';
		if ($format == FORMAT_CHECKBOX)
			$class = ' rnr-field-checkbox';
		if ($format == FORMAT_NUMBER || IsNumberType ( $pSet->getFieldType ( "Name" ) ))
			$class = ' rnr-field-number';
		$row ["Name_class"] = $class;
		$rowinfo [] = $row;
		if ($b) {
			$rowinfo2 [] = $row;
			$b = false;
		}
		$data = $cipherer->DecryptFetchedArray ( $qResult->fetchAssoc () );
	}
	$xt->assign_loopsection ( "details_row", $rowinfo );
	$xt->assign_loopsection ( "details_row_header", $rowinfo2 ); // assign class for header
}
$returnJSON = array (
		"success" => true 
);
$xt->load_template ( GetTemplateName ( "customertechnology", "detailspreview" ) );
$returnJSON ["body"] = $xt->fetch_loaded ();

if ($mode != "inline") {
	$returnJSON ["counter"] = postvalue ( "counter" );
	$layout = GetPageLayout ( GoodFieldName ( $strTableName ), 'detailspreview' );
	if ($layout) {
		foreach ( $layout->getCSSFiles ( isRTL (), isMobile () ) as $css ) {
			$returnJSON ['CSSFiles'] [] = $css;
		}
	}
}

echo printJSON ( $returnJSON );
exit ();
?>