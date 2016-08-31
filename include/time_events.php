<?php 
class eventclass_time  extends eventsBase
{ 
	function eventclass_time()
	{
	// fill list of events
		$this->events["BeforeMoveNextList"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: After record processed
function BeforeMoveNextList(&$data, &$row, &$record, &$pageObject)
{

		if ($data["WK-1"]<=50)
if ($data["WK-1"]>0)
$record["WK-1_style"]='style="background:Green"';

if ($data["WK-2"]>=51)
if ($data["WK-2"]<=60)
$record["WK-2_style"]='style="background:Orange"';

if ($data["EmployeeStatus"]=="No")
$record["EmployeeStatus_style"]='style="background:Red"';

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeMoveNextList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		
//	onscreen events

} 
?>
