<?php
$strTableName="tbl_resource_allocation";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="customerallocation";

$gstrOrderBy="ORDER BY RSA";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("tbl_resource_allocation");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["tbl_resource_allocation"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere(" StartDate >= NOW() AND  EndDate <= NOW() ");

?>