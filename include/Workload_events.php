<?php 
class eventclass_Workload  extends eventsBase
{ 
	function eventclass_Workload()
	{
	// fill list of events

//	onscreen events
		$this->events["Workload_snippet"] = true;


	}
// Captchas functions	

//	handlers
//	onscreen events
function Workload_snippet(&$params)
{
$str= "<select onchange=\"window.location.href=this.options[this.".

"selectedIndex].value;\"><option value=\"\">Please select</option>"; 

//select values from database 

global $conn;

$strSQL = "select DISTINCT FullName from tbl_director order by FullName";

$rs = db_query($strSQL,$conn);

while ($data = db_fetch_array($rs))

$str.="<option value='Workload_chart.php?q=(FullName~equals~". 

$data["FullName"].")'>".$data["FullName"]."</option>"; 

$str.="</select>"; 

echo $str;

;
}

} 
?>
