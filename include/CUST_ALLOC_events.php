<?php 
class eventclass_CUST_ALLOC  extends eventsBase
{ 
	function eventclass_CUST_ALLOC()
	{
	// fill list of events
		$this->events["BeforeMoveNextList"]=true;

		$this->events["BeforeEdit"]=true;

		$this->events["BeforeAdd"]=true;


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

if ($data["Override"]>"0%")
$record["Override_style"]='style="background:Red"';
//$record["Override_value"]="<span style=\"width:55px;font-size:16px;background:red;color:white\">".$record["Override_value"]."</span>";



if ($data["Compre_String"]=="Large-RLCM")
$record["Compre_String_style"]='style="background:Green"';

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeMoveNextList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record updated
function BeforeEdit(&$values, $where, &$oldvalues, &$keys, &$message, $inline, &$pageObject)
{

		if ($values["Size"]=="Small-GC")
$values["Allocation"]="0.18";

if ($values["Size"]=="Medium-GC")
$values["Allocation"]="0.32";

if ($values["Size"]=="Large-GC")
$values["Allocation"]="0.4";

if ($values["Size"]=="XL-GC")
$values["Allocation"]="0.8";

if ($values["Size"]=="Small-Trans 2.0")
$values["Allocation"]="0.16";

if ($values["Size"]=="Medium-Trans 2.0")
$values["Allocation"]="0.27";

if ($values["Size"]=="Large-Trans 2.0")
$values["Allocation"]="0.3";

if ($values["Size"]=="XL-Trans 2.0")
$values["Allocation"]="0.8";

if ($values["Size"]=="Small-RLCM")
$values["Allocation"]="0.1";

if ($values["Size"]=="Medium-RLCM")
$values["Allocation"]="0.13";

if ($values["Size"]=="Large-RLCM")
$values["Allocation"]="0.2";

if ($values["Size"]=="XL-RLCM")
$values["Allocation"]="0.5";



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

		if ($values["Size"]=="Small-GC")
$values["Allocation"]="0.18";

if ($values["Size"]=="Medium-GC")
$values["Allocation"]="0.32";

if ($values["Size"]=="Large-GC")
$values["Allocation"]="0.4";

if ($values["Size"]=="XL-GC")
$values["Allocation"]="0.8";

if ($values["Size"]=="Small-Trans 2.0")
$values["Allocation"]="0.16";

if ($values["Size"]=="Medium-Trans 2.0")
$values["Allocation"]="0.27";

if ($values["Size"]=="Large-Trans 2.0")
$values["Allocation"]="0.3";

if ($values["Size"]=="XL-Trans 2.0")
$values["Allocation"]="0.8";

if ($values["Size"]=="Small-RLCM")
$values["Allocation"]="0.1";

if ($values["Size"]=="Medium-RLCM")
$values["Allocation"]="0.13";

if ($values["Size"]=="Large-RLCM")
$values["Allocation"]="0.2";

if ($values["Size"]=="XL-RLCM")
$values["Allocation"]="0.5";

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

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		
//	onscreen events

} 
?>
