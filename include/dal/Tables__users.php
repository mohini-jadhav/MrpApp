<?php
$dalTableusers = array();
$dalTableusers["AutUserID"] = array("type"=>3,"varname"=>"AutUserID");
$dalTableusers["UserName"] = array("type"=>200,"varname"=>"UserName");
$dalTableusers["Password"] = array("type"=>200,"varname"=>"Password");
$dalTableusers["Email"] = array("type"=>200,"varname"=>"Email");
$dalTableusers["GroupName"] = array("type"=>200,"varname"=>"GroupName");
$dalTableusers["Active"] = array("type"=>3,"varname"=>"Active");
$dalTableusers["Logo"] = array("type"=>200,"varname"=>"Logo");
$dalTableusers["FullName"] = array("type"=>200,"varname"=>"FullName");
	$dalTableusers["AutUserID"]["key"]=true;

$dal_info["Tables__users"] = &$dalTableusers;
?>