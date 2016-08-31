<?php
class eventclass_customer_header extends eventsBase {
	function eventclass_customer_header() {
		// fill list of events
		$this->events ["BeforeMoveNextList"] = true;
		
		$this->events ["BeforeAdd"] = true;
		
		$this->events ["BeforeEdit"] = true;
		
		// onscreen events
		$this->events ["customer_header_snippet1"] = true;
		$this->events ["customer_header_snippet"] = true;
	}
	
	// handlers
	
	// List page: After record processed
	function BeforeMoveNextList(&$data, &$row, &$record, &$pageObject) {
		// Place event code here.
		// Use "Add Action" button to add code snippets.
		if ($data["Temperature"]=="Green")
		$record["Temperature_style"]='style="background:green"';
		
		if ($data["Temperature"]=="Yellow")
		$record["Temperature_style"]='style="background:Yellow"';
		
		if ($data["Temperature"]=="Red")
		$record["Temperature_style"]='style="background:Red"';
		
		if ($data["Temperature"]=="Black")
		$record["Temperature_style"]='style="background:Black"';
		
		if ($data["Contract_Status"]=="Terminated")
		$row["rowstyle"]='style="background:lightblue"';
		
		if ($data["PlaybookVersion"]=="")
		$record["PlaybookVersion_style"]='style="background:yellow"';
		
		if ($data["Platforms"]=="")
		$record["Platforms_style"]='style="background:yellow"';
		
		if ($data["Hosts"]=="")
		$record["Hosts_style"]='style="background:yellow"';
		
		if ($data["backup"]=="")
		$record["backup_style"]='style="background:yellow"';
		
		if ($data["Database"]=="")
		$record["Database_style"]='style="background:yellow"';
		
		if ($data["Apps"]=="")
		$record["Apps_style"]='style="background:yellow"';
		
		if ($data["Overall_Temp"]=="Yellow")
		$record["Overall_Temp_style"]='style="background:yellow"';
		
		if ($data["Overall_Temp"]=="Green")
		$record["Overall_Temp_style"]='style="background:Green"';
		
		if ($data["Overall_Temp"]=="Red")
		$record["Overall_Temp_style"]='style="background:Red"';
		
		if ($data["Overall_Temp"]=="Black")
		$record["Overall_Temp_style"]='style="background:Black"';
		
		if ($data["Overall_Temp"]=="Orange")
		$record["Overall_Temp_style"]='style="background:Orange"';
			
		if ($data["Contract_end"]<= Now() && $data["Contract_end"] != NULL )
		$record["Contract_end_style"]='style="background:orange"';
		;		
	} 
	// function BeforeMoveNextList
	// Before record added
	function BeforeAdd(&$values, &$message, $inline, &$pageObject) {
		//var_dump($values); exit;
		// adding 14 days to the contract start date to get the trans start date
		 $arr = db2time($values["Contract_Start"]);
		 // construct time
		 $t = mktime($arr[3],$arr[4],$arr[5],$arr[1],$arr[2],$arr[0]);
		 // construct new date
		 $values["TransStartDate"] = date("Y-m-d",$t + 60*60*24*14);
		// adding 1 days after the trans end date is reach for Steady State
		 $arr = db2time($values["TransEndDate"]);
		 // construct time
		 $t = mktime($arr[3],$arr[4],$arr[5],$arr[1],$arr[2],$arr[0]);
		 // construct new date
		$values["SteadyState"] = date("Y-m-d",$t + 60*60*24*1);
		$values ["Created_date"] = now ();
		$values ["created_by"] = $_SESSION ["UserID"];
		$values ["Updated_date"] = now ();
		$values ["Updated_by"] = $_SESSION ["UserID"];
		// Place event code here.
		// Use "Add Action" button to add code snippets.
		return true;
		;		
	} // function BeforeAdd
	// Before record updated
	function BeforeEdit(&$values, $where, &$oldvalues, &$keys, &$message, $inline, &$pageObject) {		
		// adding 14 days to the contract start date to get the trans start date
		 $arr = db2time($values["Contract_Start"]);
		 // construct time
		 $t = mktime($arr[3],$arr[4],$arr[5],$arr[1],$arr[2],$arr[0]);
		 // construct new date
		 $values["TransStartDate"] = date("Y-m-d",$t + 60*60*24*14);
		// adding 1 days after the trans end date is reach for Steady State 
		$values ["SteadyState"] = date ( "Y-m-d", strtotime ( $values ["TransEndDate"] . ' +1 Weekday' ) );
		$values ["Updated_date"] = now ();
		$values ["Updated_by"] = $_SESSION ["UserID"];
		
		// adding 1 days after the trans end date is reach for Steady State
		//$arr = db2time($values["TransEndDate"]);
		// construct time
		//$t = mktime($arr[3],$arr[4],$arr[5],$arr[1],$arr[2],$arr[0]);
		// construct new date
		//$values["SteadyState"] = date("Y-m-d",$t . ' +2 Weekday');
	
		// Place event code here.
		// Use "Add Action" button to add code snippets.
		return true;
		;		
	} // function BeforeEdit

	//	onscreen events
	function customer_header_snippet1(&$params)	{
	
		$str= "<select onchange=\"window.location.href=this.options[this."."selectedIndex].value;\"><option value=\"\">Please select</option>"; 
		
		//select values from database 
		
		global $conn;
		
		$strSQL = "select DISTINCT Engagement_status from customer_header order by Engagement_status";
		
		$rs = db_query($strSQL,$conn);
		
		while ($data = db_fetch_array($rs))
		
		$str.="<option value='customer_header_list.php?q=(Engagement_status~equals~". 
		
		$data["Engagement_status"].")'>".$data["Engagement_status"]."</option>"; 
		
		$str.="</select>"; 
		
		echo $str;
		
		// Place event code here.
		// Use "Add Action" button to add code snippets.
		;
	}

	function customer_header_snippet(&$params) {
		
		if( false == is_null( $_SESSION['UserName'] ) ) {
			$userName = $_SESSION['UserName'];
		}
		
		if( false == is_null( $_SESSION['UserID']) ) {
			$userID = $_SESSION["UserID"];
			$groupID = $_SESSION["UserRights"][$userID][".Groups"][0];
		}
		
		$str= "<select onchange=\"window.location.href=this.options[this." . "selectedIndex].value;\"><option value=\"\">Please select</option>"; 
		
		//select values from database 
		
		global $conn;
		$strSQL1 = "SELECT DISTINCT td.SupervisorID, td.FullName FROM customerallocation ca JOIN tbl_director td ON( ca.Supervisor = td.SupervisorID ) WHERE td.FullName = '" . $userName . "'";
		$rs = db_query($strSQL1,$conn);
		while ($data = db_fetch_array($rs))
			$supervisorID = $data['SupervisorID'];
		
		if( !IsAdmin() && '5' == $groupID) {
			$strSQL = "select DISTINCT td.SupervisorID, td.FullName from customer_header ch LEFT JOIN tbl_director td ON( ch.Supervisor = td.SupervisorID ) order by Supervisor";
		} elseif( !IsAdmin() && ( '6' == $groupID || '7' == $groupID ) ) {
			$strSQL = "select DISTINCT td.SupervisorID, td.FullName from customer_header ch LEFT JOIN tbl_director td ON( ch.Supervisor = td.SupervisorID ) where ch.RSAName = '" . $userName . "' OR ch.Supervisor = '" . $supervisorID . "' order by Supervisor";
		} elseif( !IsAdmin() && '1' == $groupID) {
			$strSQL = "select DISTINCT td.SupervisorID, td.FullName from customer_header ch LEFT JOIN tbl_director td ON( ch.Supervisor = td.SupervisorID ) where ch.RSAName = '" . $userName . "' order by Supervisor";
		} else {
			$strSQL = "select DISTINCT td.SupervisorID, td.FullName from customer_header ch LEFT JOIN tbl_director td ON( ch.Supervisor = td.SupervisorID ) order by Supervisor";
		}
		
		//$strSQL = "select DISTINCT td.SupervisorID, td.FullName from customer_header ch LEFT JOIN tbl_director td ON( ch.Supervisor = td.SupervisorID ) order by Supervisor";

		$rs = db_query($strSQL,$conn);
		
		while ($data = db_fetch_array($rs))
		
		
		$str.="<option value='customer_header_list.php?q=(Supervisor~equals~". 
		
		$data["SupervisorID"].")'>".$data["FullName"]."</option>"; 
		
		$str.="</select>"; 
		
		echo $str;
		
		// Place event code here.
		// Use "Add Action" button to add code snippets.
		
		;
	}
}
?>