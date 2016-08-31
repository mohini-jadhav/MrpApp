<?php
class eventclass_View extends eventsBase {
	function eventclass_View() {
		// fill list of events
		$this->events ["BeforeMoveNextList"] = true;
		
		$this->events ["BeforeEdit"] = true;
		
		$this->events ["BeforeAdd"] = true;
		
		// onscreen events
	}
	
	// handlers
	
	// List page: After record processed
	function BeforeMoveNextList(&$data, &$row, &$record, &$pageObject) {
		if ($data ["EndDate"] <= Now ())
			$record ["EndDate_style"] = 'style="background:orange"';
		
		if ($data ["StartDate"] >= Now ())
			$record ["StartDate_style"] = 'style="background:#CFFFCF"';
		
		if ($data ["Alloc"] > "1.00")
			$record ["Alloc_style"] = 'style="background:Red"';
		
		if ($data ["Alloc1"] > "1.00")
			$record ["Alloc1_style"] = 'style="background:Red"';
		
		if ($data ["Alloc"] > "0.79")
			if ($data ["Alloc"] < "1.00")
				$record ["Alloc_style"] = 'style="background:Orange"';
		
		if ($data ["Alloc1"] > "0.79")
			if ($data ["Alloc1"] < "1.00")
				$record ["Alloc1_style"] = 'style="background:Orange"';
		
		if ($data ["Alloc"] < "0.79")
			$record ["Alloc_style"] = 'style="background:Green"';
		
		if ($data ["Alloc1"] < "0.79")
			$record ["Alloc1_style"] = 'style="background:Green"';
		
		if ($data ["Alloc2"] > "1.00")
			$record ["Alloc2_style"] = 'style="background:Red"';
		
		if ($data ["Alloc2"] > "0.79")
			if ($data ["Alloc2"] < "1.00")
				$record ["Alloc2_style"] = 'style="background:Orange"';
		
		if ($data ["Alloc2"] < "0.79")
			$record ["Alloc2_style"] = 'style="background:Green"';
		
		if ($data ["Alloc3"] > "1.00")
			$record ["Alloc3_style"] = 'style="background:Red"';
		
		if ($data ["Alloc3"] > "0.79")
			if ($data ["Alloc3"] < "1.00")
				$record ["Alloc3_style"] = 'style="background:Orange"';
		
		if ($data ["Alloc3"] < "0.79")
			$record ["Alloc3_style"] = 'style="background:Green"';
			
			// Place event code here.
			// Use "Add Action" button to add code snippets.
		;
	} // function BeforeMoveNextList
	  
	// Before record updated
	function BeforeEdit(&$values, $where, &$oldvalues, &$keys, &$message, $inline, &$pageObject) {
		if ($values ["Size"] == "Small-GC")
			$values ["Allocation"] = "0.18";
		
		if ($values ["Size"] == "Medium-GC")
			$values ["Allocation"] = "0.32";
		
		if ($values ["Size"] == "Large-GC")
			$values ["Allocation"] = "0.4";
		
		if ($values ["Size"] == "XL-GC")
			$values ["Allocation"] = "0.8";
		
		if ($values ["Size"] == "Small-Trans 2.0")
			$values ["Allocation"] = "0.16";
		
		if ($values ["Size"] == "Medium-Trans 2.0")
			$values ["Allocation"] = "0.27";
		
		if ($values ["Size"] == "Large-Trans 2.0")
			$values ["Allocation"] = "0.3";
		
		if ($values ["Size"] == "XL-Trans 2.0")
			$values ["Allocation"] = "0.8";
		
		if ($values ["Size"] == "Small-RLCM")
			$values ["Allocation"] = "0.1";
		
		if ($values ["Size"] == "Medium-RLCM")
			$values ["Allocation"] = "0.13";
		
		if ($values ["Size"] == "Large-RLCM")
			$values ["Allocation"] = "0.2";
		
		if ($values ["Size"] == "XL-RLCM")
			$values ["Allocation"] = "0.5";
		
		if (toPHPTime ( $values ["StartDate"] ) > toPHPTime ( $values ["EndDate"] )) {
			$message = "Start date can not be later than End date.";
			return false;
		} else {
			return true;
		}
		
		// Place event code here.
		// Use "Add Action" button to add code snippets.
		
		return true;
		;
	} // function BeforeEdit
	  
	// Before record added
	function BeforeAdd(&$values, &$message, $inline, &$pageObject) {
		if ($values ["Size"] == "Small-GC")
			$values ["Allocation"] = "0.18";
		
		if ($values ["Size"] == "Medium-GC")
			$values ["Allocation"] = "0.32";
		
		if ($values ["Size"] == "Large-GC")
			$values ["Allocation"] = "0.4";
		
		if ($values ["Size"] == "XL-GC")
			$values ["Allocation"] = "0.8";
		
		if ($values ["Size"] == "Small-Trans 2.0")
			$values ["Allocation"] = "0.16";
		
		if ($values ["Size"] == "Medium-Trans 2.0")
			$values ["Allocation"] = "0.27";
		
		if ($values ["Size"] == "Large-Trans 2.0")
			$values ["Allocation"] = "0.3";
		
		if ($values ["Size"] == "XL-Trans 2.0")
			$values ["Allocation"] = "0.8";
		
		if ($values ["Size"] == "Small-RLCM")
			$values ["Allocation"] = "0.1";
		
		if ($values ["Size"] == "Medium-RLCM")
			$values ["Allocation"] = "0.13";
		
		if ($values ["Size"] == "Large-RLCM")
			$values ["Allocation"] = "0.2";
		
		if ($values ["Size"] == "XL-RLCM")
			$values ["Allocation"] = "0.5";
			
			// Place event code here.
			// Use "Add Action" button to add code snippets.
		if (toPHPTime ( $values ["StartDate"] ) > toPHPTime ( $values ["EndDate"] )) {
			$message = "Start date can not be later than End date.";
			return false;
		} else {
			return true;
		}
		
		;
	} // function BeforeAdd
		  
	// onscreen events
}
?>
