<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 


$mainTable = postvalue('mainTable');
$pageType = postvalue('pageType');

if (!checkTableName($mainTable))
	exit(0);
require_once("include/".$mainTable."_variables.php");

$gSettings = new ProjectSettings($strTableName, $pageType);

$mainField = postvalue('mainField');
$linkFieldName = postvalue('linkField');

if( $strTableName != "users" )
{
	if(!isLogged())  
		return;	
	
	if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Edit") && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Add") && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search")) 
		return;
}
else 
{
	$checkResult = true;
	if($mainField=="UserName")
		$checkResult=false;

	if($mainField=="Password")
		$checkResult=false;

	if($mainField=="Email")
		$checkResult=false;

	if($mainField=="FullName")
		$checkResult=false;

	if($checkResult)
	{
		if(!isLogged()) 
			return;
			
		if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Edit") && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Add") && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
			return;
	}
}
$autoCompleteFields = array();

if($strTableName == "customerallocation" && $mainField == "CustomerName")
{
	$autoCompleteFields[] = array('masterF'=>"OracleID", 'lookupF'=>"OracIeID");
	$autoCompleteFields[] = array('masterF'=>"Stage", 'lookupF'=>"Stage");
	$autoCompleteFields[] = array('masterF'=>"Size", 'lookupF'=>"Size");
	$lookupTable = "customer_header";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "customerallocation" && $mainField == "CustomerName")
{
	$autoCompleteFields[] = array('masterF'=>"OracleID", 'lookupF'=>"OracIeID");
	$autoCompleteFields[] = array('masterF'=>"Stage", 'lookupF'=>"Stage");
	$autoCompleteFields[] = array('masterF'=>"Size", 'lookupF'=>"Size");
	$autoCompleteFields[] = array('masterF'=>"Contract_Start", 'lookupF'=>"Contract_Start");
	$autoCompleteFields[] = array('masterF'=>"SteadyStateDate", 'lookupF'=>"SteadyState");
	$autoCompleteFields[] = array('masterF'=>"Contract_End", 'lookupF'=>"Contract_end");
	$autoCompleteFields[] = array('masterF'=>"OnshoreSupportOnly", 'lookupF'=>"Onshore Support");
	$autoCompleteFields[] = array('masterF'=>"TimeZone", 'lookupF'=>"PrimaryTimeZone");
	$lookupTable = "customer_header";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "customerallocation" && $mainField == "CustomerName")
{
	$autoCompleteFields[] = array('masterF'=>"OracleID", 'lookupF'=>"OracIeID");
	$autoCompleteFields[] = array('masterF'=>"Stage", 'lookupF'=>"Stage");
	$autoCompleteFields[] = array('masterF'=>"Size", 'lookupF'=>"Size");
	$lookupTable = "customer_header";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "customerallocation" && $mainField == "RSAName")
{
	$autoCompleteFields[] = array('masterF'=>"Location", 'lookupF'=>"Location");
	$lookupTable = "employee_header";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "customerallocation" && $mainField == "RSAName")
{
	$autoCompleteFields[] = array('masterF'=>"Location", 'lookupF'=>"Location");
	$lookupTable = "employee_header";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "customerallocation" && $mainField == "Role")
{
	$autoCompleteFields[] = array('masterF'=>"Allocation", 'lookupF'=>"Allocation");
	$lookupTable = "tbl_role";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "CUST_ALLOC" && $mainField == "RSAName")
{
	$autoCompleteFields[] = array('masterF'=>"Location", 'lookupF'=>"Location");
	$autoCompleteFields[] = array('masterF'=>"Supervisor", 'lookupF'=>"Supervisor");
	$lookupTable = "employee_header";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if($strTableName == "View" && $mainField == "RSAName")
{
	$autoCompleteFields[] = array('masterF'=>"Location", 'lookupF'=>"Location");
	$autoCompleteFields[] = array('masterF'=>"Supervisor", 'lookupF'=>"Supervisor");
	$lookupTable = "employee_header";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}

$nLookupType = $gSettings->getLookupType($mainField);
$cipherer = new RunnerCipherer($nLookupType == LT_QUERY ? $lookupTable : $strTableName);
$linkFieldVal = postvalue('linkFieldVal');
$linkFieldVal = $cipherer->MakeDBValue($nLookupType == LT_QUERY ? $linkFieldName : $mainField, $linkFieldVal, "", true);
$strLookupWhere = GetLWWhere($mainField, $pageType, $strTableName);

if($nLookupType == LT_QUERY)
{
	$lookupSettings = new ProjectSettings($lookupTable, $pageType);
	$lookupQueryObj = $lookupSettings->getSQLQuery();
	$lookupQueryObj->ReplaceFieldsWithDummies($lookupSettings->getBinaryFieldsIndices());
	$strWhere = whereAdd($lookupQueryObj->m_where->toSql($lookupQueryObj), 
		RunnerPage::_getFieldSQLDecrypt( $linkFieldName, $lookupConnection, $lookupSettings, $cipherer ).'='.$linkFieldVal);
	$strWhere = whereAdd($strWhere, $strLookupWhere);
	$strSQL = $lookupQueryObj->toSql(whereAdd($lookupQueryObj->m_where->toSql($lookupQueryObj), $strWhere));
}
else
{
	$strSQL = 'SELECT ';
	for($i=0; $i<count($autoCompleteFields); $i++)
	{
		$strSQL .= $lookupConnection->addFieldWrappers( $autoCompleteFields[$i]['lookupF'] ).', ';
	}
	$strSQL = substr($strSQL, 0, strlen($strSQL)-2);
	
	$strSQL .= " FROM ".$lookupConnection->addTableWrappers($lookupTable);
	$linkFieldName = $cipherer->GetLookupFieldName( $lookupConnection->addFieldWrappers($linkFieldName), $mainField );
	$strWhere = $linkFieldName.'='.$linkFieldVal;
	$strWhere = whereAdd($strWhere, $strLookupWhere);
	$strSQL .= " WHERE ".$strWhere;
}

$row = $lookupConnection->query( $strSQL )->fetchAssoc();
if($nLookupType == LT_QUERY)
	$row =  $cipherer->DecryptFetchedArray( $row );

$lookupConnection->close();	
	
if( !$row )
	$row = array($mainField=>'');
	
echo printJSON(array('success'=>true, 'data'=>$row));
exit();
?>