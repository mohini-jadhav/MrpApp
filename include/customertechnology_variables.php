<?php
$strTableName="customertechnology";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="customertechnology";

$gstrOrderBy="ORDER BY customer_header.Name";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("customertechnology");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["customertechnology"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>