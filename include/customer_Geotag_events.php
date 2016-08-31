<?php
class eventclass_customer_Geotag extends eventsBase {
	function eventclass_customer_Geotag() {
		// fill list of events
		$this->events ["BeforeMoveNextList"] = true;
		
		// onscreen events
		
		$this->maps ["list"] = array (
				"strName" => "customer_header_map2" 
		);
	}
	// Captchas functions
	
	// handlers
	
	// List page: After record processed
	function BeforeMoveNextList(&$data, &$row, &$record, &$pageObject) {
		
		// Place event code here.
		// Use "Add Action" button to add code snippets.
		if ($data ["Temperature"] == "Green")
			$record ["Temperature_style"] = 'style="background:green"';
		
		if ($data ["Temperature"] == "Yellow")
			$record ["Temperature_style"] = 'style="background:Yellow"';
		
		if ($data ["Temperature"] == "Red")
			$record ["Temperature_style"] = 'style="background:Red"';
		
		if ($data ["Temperature"] == "Black")
			$record ["Temperature_style"] = 'style="background:Black"';
		
		if ($data ["Contract_Status"] == "Terminated")
			$row ["rowstyle"] = 'style="background:lightblue"';
		
		if ($data ["PlaybookVersion"] == "")
			$record ["PlaybookVersion_style"] = 'style="background:yellow"';
		
		if ($data ["Platforms"] == "")
			$record ["Platforms_style"] = 'style="background:yellow"';
		
		if ($data ["Hosts"] == "")
			$record ["Hosts_style"] = 'style="background:yellow"';
		
		if ($data ["backup"] == "")
			$record ["backup_style"] = 'style="background:yellow"';
		
		if ($data ["Database"] == "")
			$record ["Database_style"] = 'style="background:yellow"';
		
		if ($data ["Apps"] == "")
			$record ["Apps_style"] = 'style="background:yellow"';
		
		if ($data ["Overall_Temp"] == "Yellow")
			$record ["Overall_Temp_style"] = 'style="background:yellow"';
		
		if ($data ["Overall_Temp"] == "Green")
			$record ["Overall_Temp_style"] = 'style="background:Green"';
		
		if ($data ["Overall_Temp"] == "Red")
			$record ["Overall_Temp_style"] = 'style="background:Red"';
		
		if ($data ["Overall_Temp"] == "Black")
			$record ["Overall_Temp_style"] = 'style="background:Black"';
		
		if ($data ["Overall_Temp"] == "Orange")
			$record ["Overall_Temp_style"] = 'style="background:Orange"';
		
		if ($data ["Contract_end"] <= Now ())
			$record ["Contract_end_style"] = 'style="background:orange"';
		
		;
	} // function BeforeMoveNextList
		  
	// onscreen events
}
?>
