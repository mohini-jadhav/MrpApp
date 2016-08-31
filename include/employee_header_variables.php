<?php
$strTableName="employee_header";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];
if( false == is_null( $_SESSION['UserName'] ) ) {
	$userName = $_SESSION['UserName'];
}
$strOriginalTableName="employee_header";

$gstrOrderBy="ORDER BY FirstName";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("employee_header");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["employee_header"];

$reportCaseSensitiveGroupFields = false;

if( !IsAdmin() ) {
	$gstrSQL = $gQuery->gSQLWhere(" concat(`FirstName`, ' ', `LastName`) = '" . $userName ."'");
} else {
	$gstrSQL = $gQuery->gSQLWhere("");
}


?>