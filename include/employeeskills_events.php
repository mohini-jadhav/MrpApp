<?php
class eventclass_employeeskills extends eventsBase {
	function eventclass_employeeskills() {
		// fill list of events
		$this->events["BeforeAdd"]=true;
		$this->events["BeforeEdit"] = true;
		// onscreen events
	}
	
	// handlers
	// Before record added
	function BeforeAdd(&$values, &$message, $inline, &$pageObject) {
		// Place event code here.
		// Use "Add Action" button to add code snippets.
		if( !IsAdmin() ) {
			if( false == is_null( $_SESSION['UserName'] ) ) {
				$strUserName = $_SESSION['UserName'];
			}
			
			$pieces = explode(" ", $strUserName);
			$strFirstName = $pieces[0];
			$strLastName = $pieces[1];

			global $conn;
			$sql = 'select EmployeeID from employee_header where `FirstName` = "'.$strFirstName.'" AND `LastName` = "' . $strLastName .'"';
			$rs = db_query($sql,$conn);
			while ($data = db_fetch_array($rs))
			$strUserID = $data['EmployeeID'];
			$values['EmployeeID'] = $strUserID;
		}
		 
		return true;
		;
	} // function BeforeAdd
	
	// Before record updated
	function BeforeEdit(&$values, $where, &$oldvalues, &$keys, &$message, $inline, &$pageObject) {
		if( !IsAdmin() ) {
			if( false == is_null( $_SESSION['UserName'] ) ) {
				$strUserName = $_SESSION['UserName'];
			}
			
			$pieces = explode(" ", $strUserName);
			$strFirstName = $pieces[0];
			$strLastName = $pieces[1];

			global $conn;
			$sql = 'select EmployeeID from employee_header where `FirstName` = "'.$strFirstName.'" AND `LastName` = "' . $strLastName .'"';
			$rs = db_query($sql,$conn);
			while ($data = db_fetch_array($rs))
			$strUserID = $data['EmployeeID'];
			$values['EmployeeID'] = $strUserID;
		}
	
		// Place event code here.
		// Use "Add Action" button to add code snippets.
	
		return true;
		;
	} // function BeforeEdit
	// onscreen events
}
?>
