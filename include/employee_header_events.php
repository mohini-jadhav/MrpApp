<?php 
class eventclass_employee_header  extends eventsBase
{ 
	function eventclass_employee_header() {
		// fill list of events
		$this->events["AfterEdit"]=true;
		$this->events["BeforeAdd"]=true;
		$this->events["BeforeEdit"] = true;
		$this->events["BeforeMoveNextList"]=true;
		//	onscreen events
		$this->events["employee_header_snippet2"] = true;
		$this->events["employee_header_snippet"] = true;
		$this->events["employee_header_snippet1"] = true;

	}
	//	handlers
	// After record updated
	function AfterEdit(&$values, $where, &$oldvalues, &$keys, $inline, &$pageObject) {
	
		//How to write names to the database in proper case
		$arr = explode(" ",$values["FirstName"]);
		for ($i=0; $i < count($arr); $i++)
		$arr[$i] = ucfirst($arr[$i]);
		$values["FirstName"]=implode(" ",$arr);
		
		$arr = explode(" ",$values["LastName"]);
		for ($i=0; $i < count($arr); $i++)
		$arr[$i] = ucfirst($arr[$i]);
		$values["LastName"]=implode(" ",$arr);
		
		
		// Place event code here.
		// Use "Add Action" button to add code snippets.
		;		
	} // function AfterEdit
	// Before record added
	function BeforeAdd(&$values, &$message, $inline, &$pageObject) {
	
		//How to write names to the database in proper case
		$arr = explode(" ",$values["FirstName"]);
		for ($i=0; $i < count($arr); $i++)
		$arr[$i] = ucfirst($arr[$i]);
		$values["FirstName"]=implode(" ",$arr);
		
		$arr = explode(" ",$values["LastName"]);
		for ($i=0; $i < count($arr); $i++)
		$arr[$i] = ucfirst($arr[$i]);
		$values["LastName"]=implode(" ",$arr);	
		$values ["created_date"] = now ();
		$values ["created_by"] = $_SESSION ["UserID"];
		$values ["updated_date"] = now ();
		$values ["updated_by"] = $_SESSION ["UserID"];
		// Place event code here.
		// Use "Add Action" button to add code snippets.
		
		return true;
		;		
	} // function BeforeAdd
	
	// Before record updated
	function BeforeEdit(&$values, $where, &$oldvalues, &$keys, &$message, $inline, &$pageObject) {
		$values ["updated_date"] = now ();
		$values ["updated_by"] = $_SESSION ["UserID"];
	
		// Place event code here.
		// Use "Add Action" button to add code snippets.
	
		return true;
		;
	} // function BeforeEdit
 
	// List page: After record processed
	function BeforeMoveNextList(&$data, &$row, &$record, &$pageObject) {
	
		if ($data["EmployeeStatus"]=="Terminated")
		$record["EmployeeStatus_style"]='style="background:Red"';
		
		if ($data["EmployeeStatus"]=="No")
		$record["EmployeeStatus_style"]='style="background:Red"';
		//$record["EmployeeStatus_value"]="<span style=\"width:55px;font-size:16px;background:red;color:white\">".$record["EmployeeStatus_value"]."</span>";
		
		// Place event code here.
		// Use "Add Action" button to add code snippets.
		;		
	} // function BeforeMoveNextList
		
	//	onscreen events
	function employee_header_snippet2(&$params)	{
		
		if( false == is_null( $_SESSION['UserName'] ) ) {
			$userName = $_SESSION['UserName'];
		}
		
		if( false == is_null( $_SESSION['UserID']) ) {
			$userID = $_SESSION["UserID"];
			$groupID = $_SESSION["UserRights"][$userID][".Groups"][0];
		}
		
		$str= "<select onchange=\"window.location.href=this.options[this."."selectedIndex].value;\"><option value=\"\">Please select</option>"; 
		
		//select values from database 
		
		global $conn;
		
		if( !IsAdmin() && '5' == $groupID) {
			$strSQL = "select DISTINCT SupervisorName from employee_header order by SupervisorName";
		} elseif( !IsAdmin() && ( '6' == $groupID || '7' == $groupID ) ) {
			$strSQL = "select DISTINCT SupervisorName from employee_header where concat(`FirstName`, ' ', `LastName`) = '" . $userName . "' OR SupervisorName = '" . $userName . "' order by SupervisorName";
		} elseif( !IsAdmin() && '1' == $groupID ) {
			$strSQL = "select DISTINCT SupervisorName from employee_header where concat(`FirstName`, ' ', `LastName`) = '" . $userName . "' order by SupervisorName";
		} else {
			$strSQL = "select DISTINCT SupervisorName from employee_header order by SupervisorName";
		}
		
		$rs = db_query($strSQL,$conn);
		
		while ($data = db_fetch_array($rs))
		
		$str.="<option value='employee_header_list.php?q=(SupervisorName~equals~". 
		
		$data["SupervisorName"].")'>".$data["SupervisorName"]."</option>"; 
		
		$str.="</select>"; 
		
		echo $str;
		
		// Place event code here.
		// Use "Add Action" button to add code snippets.
		
		
		;
	}

	function employee_header_snippet(&$params) {
		$str= "<select onchange=\"window.location.href=this.options[this."."selectedIndex].value;\"><option value=\"\">Please select</option>"; 
		
		//select values from database 
		
		global $conn;
		
		$strSQL = "select DISTINCT EmployeeStatus from employee_header order by EmployeeStatus";
		
		$rs = db_query($strSQL,$conn);
		
		while ($data = db_fetch_array($rs))
		
		$str.="<option value='employee_header_list.php?q=(EmployeeStatus~equals~".$data["EmployeeStatus"].")'>".$data["EmployeeStatus"]."</option>"; 
		
		$str.="</select>"; 
		
		echo $str;
		
		// Place event code here.
		// Use "Add Action" button to add code snippets.
		;
	}

	function employee_header_snippet1(&$params) {
		$str= "<select onchange=\"window.location.href=this.options[this."."selectedIndex].value;\"><option value=\"\">Please select</option>"; 
		
		//select values from database 
		
		global $conn;
		
		$strSQL = "select DISTINCT Role from employee_header order by role";
		
		$rs = db_query($strSQL,$conn);
		
		while ($data = db_fetch_array($rs))
		
		$str.="<option value='employee_header_list.php?q=(Role~equals~".$data["Role"].")'>".$data["Role"]."</option>"; 
		
		$str.="</select>"; 
		
		echo $str;
		
		// Place event code here.
		// Use "Add Action" button to add code snippets.
		;
	}

} 
?>
