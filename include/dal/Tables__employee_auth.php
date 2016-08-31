<?php
$dalTableemployee_auth = array();
$dalTableemployee_auth["Created_By"] = array("type"=>200,"varname"=>"Created_By");
$dalTableemployee_auth["Created_date"] = array("type"=>135,"varname"=>"Created_date");
$dalTableemployee_auth["Updated_by"] = array("type"=>200,"varname"=>"Updated_by");
$dalTableemployee_auth["updated_date"] = array("type"=>135,"varname"=>"updated_date");
$dalTableemployee_auth["Remarks"] = array("type"=>200,"varname"=>"Remarks");
$dalTableemployee_auth["employee_id"] = array("type"=>200,"varname"=>"employee_id");
$dalTableemployee_auth["Password_encrypted"] = array("type"=>200,"varname"=>"Password_encrypted");
$dalTableemployee_auth["roles_allowed"] = array("type"=>200,"varname"=>"roles_allowed");
$dalTableemployee_auth["password_last_changed"] = array("type"=>135,"varname"=>"password_last_changed");
$dalTableemployee_auth["password_expiry_date"] = array("type"=>135,"varname"=>"password_expiry_date");

$dal_info["Tables__employee_auth"] = &$dalTableemployee_auth;
?>