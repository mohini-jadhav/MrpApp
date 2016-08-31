<?php
$dalTableemployeeskills = array();
$dalTableemployeeskills["AutEskillID"] = array("type"=>3,"varname"=>"AutEskillID");
$dalTableemployeeskills["EmployeeName"] = array("type"=>200,"varname"=>"EmployeeName");
$dalTableemployeeskills["PlatformType"] = array("type"=>200,"varname"=>"PlatformType");
$dalTableemployeeskills["PlatformName"] = array("type"=>200,"varname"=>"PlatformName");
$dalTableemployeeskills["SkillLevel"] = array("type"=>200,"varname"=>"SkillLevel");
$dalTableemployeeskills["Certificate"] = array("type"=>201,"varname"=>"Certificate");
$dalTableemployeeskills["Comments"] = array("type"=>201,"varname"=>"Comments");
$dalTableemployeeskills["CategoryID"] = array("type"=>3,"varname"=>"CategoryID");
$dalTableemployeeskills["EmployeeID"] = array("type"=>200,"varname"=>"EmployeeID");
	$dalTableemployeeskills["AutEskillID"]["key"]=true;

$dal_info["Tables__employeeskills"] = &$dalTableemployeeskills;
?>