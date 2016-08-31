<?php
$dalTabletime = array();
$dalTabletime["AutTimeID"] = array("type"=>3,"varname"=>"AutTimeID");
$dalTabletime["WK-1"] = array("type"=>200,"varname"=>"WK_1");
$dalTabletime["WK-2"] = array("type"=>200,"varname"=>"WK_2");
$dalTabletime["WK-3"] = array("type"=>200,"varname"=>"WK_3");
$dalTabletime["WK-4"] = array("type"=>200,"varname"=>"WK_4");
$dalTabletime["EmployeeID"] = array("type"=>3,"varname"=>"EmployeeID");
	$dalTabletime["AutTimeID"]["key"]=true;

$dal_info["Tables__time"] = &$dalTabletime;
?>