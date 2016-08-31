<?php
class eventclass_skillstable extends eventsBase {
	function eventclass_skillstable() {
		// fill list of events
		$this->events["BeforeAdd"]=true;
		$this->events["BeforeEdit"]=true;
		// onscreen events
	}
	
	// handlers
	function BeforeAdd(&$values, &$message, $inline, &$pageObject) {
		
	}
	
	function BeforeEdit(&$values, $where, &$oldvalues, &$keys, &$message, $inline, &$pageObject) {
		
	}
	// onscreen events
}
?>

