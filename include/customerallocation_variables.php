<?php
$strTableName="customerallocation";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

if( false == is_null( $_SESSION['UserName'] ) ) {
	$userName = $_SESSION['UserName'];
}

$strOriginalTableName="customerallocation";

$gstrOrderBy="ORDER BY CustomerName";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("customerallocation");
$gQuery = $gSettings->getSQLQuery();

$eventObj = &$tableEvents["customerallocation"];

$reportCaseSensitiveGroupFields = false;

if( ! IsAdmin() ) {
	$gstrSQL = $gQuery->gSQLWhere( " RSAName = '". $userName ."'" );
} else {
	$gstrSQL = $gQuery->gSQLWhere("");
}

?>