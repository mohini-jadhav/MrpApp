<?php 
class eventclass_customerallocation1  extends eventsBase
{ 
	function eventclass_customerallocation1()
	{
	// fill list of events
		$this->events["BeforeMoveNextList"]=true;

		$this->events["BeforeEdit"]=true;

		$this->events["BeforeAdd"]=true;



		$this->events["BeforeProcessRowList"]=true;

		$this->events["BeforeShowAdd"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: After record processed
function BeforeMoveNextList(&$data, &$row, &$record, &$pageObject)
{

		if ($data["EndDate"]<= Now())
$record["EndDate_style"]='style="background:orange"';

if ($data["StartDate"]>= Now())
$record["StartDate_style"]='style="background:#CFFFCF"';

if ($data["Override"]>"0")
$record["Override_style"]='style="background:Red"';
//$record["Override_value"]="<span style=\"width:55px;font-size:16px;background:red;color:white\">".$record["Override_value"]."</span>";





// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeMoveNextList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record updated
function BeforeEdit(&$values, $where, &$oldvalues, &$keys, &$message, $inline, &$pageObject)
{

		if ($values["Override"]>.0)
$values["Allocation"]=$values["Override"];

if (toPHPTime($values["EndDate"]) > toPHPTime($values["Contract_End"]))
{
  $message = "End date can not exceed the Contract End Date.";
  return false;
}
else
{
  return true;
}





if (toPHPTime($values["StartDate"]) > toPHPTime($values["EndDate"]))
{
  $message = "Start date can not be later than End date.";
  return false;
}
else
{
  return true;
}


// Place event code here.
// Use "Add Action" button to add code snippets.

return true;

;		
} // function BeforeEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, &$pageObject)
{

		
if (toPHPTime($values["EndDate"]) > toPHPTime($values["Contract_End"]))
{
  $message = "End date can not exceed the Contract End Date.";
  return false;
}
else
{
  return true;
}
// Place event code here.
// Use "Add Action" button to add code snippets.
if (toPHPTime($values["StartDate"]) > toPHPTime($values["EndDate"]))
{
  $message = "Start date can not be later than End date.";
  return false;
}
else
{
  return true;
}


;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: Before record processed
function BeforeProcessRowList(&$data, &$pageObject)
{

		if ($data["Override"]>"0%")
$record["Override_style"]='style="background:Red"';

// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;		
} // function BeforeProcessRowList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowAdd(&$xt, &$templatefile, &$pageObject)
{

		$values["Allocation"]=$values["Override"];

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeShowAdd

		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		
//	onscreen events

} 
?>
