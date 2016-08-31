<?php
@ini_set ( "display_errors", "1" );
@ini_set ( "display_startup_errors", "1" );

require_once ("include/dbcommon.php");
require_once ("classes/button.php");

$params = ( array ) my_json_decode( postvalue( 'params' ) );
$buttId = $params['buttId'];

// proccess table events

if ($buttId == 'Show_Allocation3') {
	require_once ("include/tbl_resource_allocation_variables.php");
	$cipherer = new RunnerCipherer( "tbl_resource_allocation" );
	buttonHandler_Show_Allocation3( $params );
}

$stDt = postvalue('startDate');
$endDate = postvalue('endDate');
$flag1 = postvalue('onloadFunc');

if( true == isset($stDt) && true == isset($endDate) && true == isset($flag1) ) {
	echo loadAllocationData( $stDt, $endDate );
}


// proccess non table events
function loadAllocationData($startDate, $endDate) {

	$result = array();
	$connectionObj = getDefaultConnection();
	if( false == is_null( $_SESSION['UserName'] ) ) {
		$userName = $_SESSION['UserName'];
	}
	
	if( false == is_null( $_SESSION['UserID']) ) {
		$userID = $_SESSION["UserID"];
		$groupID = $_SESSION["UserRights"][$userID][".Groups"][0];
	}

	if( !IsAdmin() && ( '5' == $groupID || '6' == $groupID ) ) {
		$booIsAdmin = 1;
	} elseif(!IsAdmin() && '7' == $groupID ) {
		$booIsAdmin = 2;
	} elseif( !IsAdmin() && '1' == $groupID ) {
		$booIsAdmin = 0;
	} else {
		$booIsAdmin = 1;
	}
	
	$result = DBLookup("CALL Allocation_dashboard21('" . $startDate . "', '" . $endDate . "', " . $booIsAdmin . ", '" . $userName . "', @AllocDetails )");
	$query = "SELECT @AllocDetails;";
	$result1 = mysqli_query($connectionObj, $query);
	if( false == is_null( $result1 ) ) {
		while($row = db_fetch_array( $result1 )){
			$result[] = $row;
		}
		mysqli_free_result( $result1 );
	}
	
	;

	echo my_json_encode( $result );
	
}

// create table and non table handlers
function buttonHandler_Show_Allocation3($params) {
	global $strTableName;
	$result = array();
	
	// create new button object for get record data
	$params ["keys"] = ( array ) my_json_decode( postvalue( 'keys' ) );
	$params ["isManyKeys"] = postvalue( 'isManyKeys' );
	$params ["location"] = postvalue( 'location' );
	
	$button = new Button( $params );
	$keys = $button->getKeys();
	
	// Put your code here.

	$connectionObj = getDefaultConnection();

	if( false == is_null( $_SESSION['UserName'] ) ) {
		$userName = $_SESSION['UserName'];
	}

	if( false == is_null( $_SESSION['UserID']) ) {
		$userID = $_SESSION["UserID"];
		$groupID = $_SESSION["UserRights"][$userID][".Groups"][0];
	}

	if( !IsAdmin() && ( '5' == $groupID || '6' == $groupID ) ) {
		$booIsAdmin = 1;
	} elseif(!IsAdmin() && '7' == $groupID ) {
		$booIsAdmin = 2;
	} elseif( !IsAdmin() && '1' == $groupID ) {
		$booIsAdmin = 0;
	} else {
		$booIsAdmin = 1;
	}

	$result = DBLookup("CALL Allocation_dashboard21('" . $params["startDate"] . "', '" . $params["endDate"] . "', " . $booIsAdmin . ", '" . $userName . "', @AllocDetails )");
	$query = "SELECT @AllocDetails;";
	$result1 = mysqli_query($connectionObj, $query);

	if( false == is_null( $result1 ) ) {

		while($row = db_fetch_array( $result1 )){
			$result[] = $row;
		}
		mysqli_free_result( $result1 );
	}

	;
	echo my_json_encode( $result );
	exit;
}
?>
