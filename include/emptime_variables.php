<?php
$strTableName="emptime";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="emptime";

$gstrOrderBy="ORDER BY emptime.`12/11/2016 WK-50` DESC, employee_header.FirstName";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("emptime");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["emptime"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>