<?php
$dalTableemployee_header = array();
$dalTableemployee_header["EmployeeID"] = array("type"=>3,"varname"=>"EmployeeID");
$dalTableemployee_header["FirstName"] = array("type"=>200,"varname"=>"FirstName");
$dalTableemployee_header["LastName"] = array("type"=>200,"varname"=>"LastName");
$dalTableemployee_header["emailID"] = array("type"=>200,"varname"=>"emailID");
$dalTableemployee_header["Type"] = array("type"=>200,"varname"=>"Type");
$dalTableemployee_header["SupervisorTitle"] = array("type"=>200,"varname"=>"SupervisorTitle");
$dalTableemployee_header["Location"] = array("type"=>200,"varname"=>"Location");
$dalTableemployee_header["SupervisorName"] = array("type"=>200,"varname"=>"SupervisorName");
$dalTableemployee_header["InactiveDate"] = array("type"=>7,"varname"=>"InactiveDate");
$dalTableemployee_header["created_by"] = array("type"=>200,"varname"=>"created_by");
$dalTableemployee_header["updated_by"] = array("type"=>200,"varname"=>"updated_by");
$dalTableemployee_header["created_date"] = array("type"=>135,"varname"=>"created_date");
$dalTableemployee_header["updated_date"] = array("type"=>135,"varname"=>"updated_date");
$dalTableemployee_header["StartDate"] = array("type"=>7,"varname"=>"StartDate");
$dalTableemployee_header["EmployeeStatus"] = array("type"=>200,"varname"=>"EmployeeStatus");
$dalTableemployee_header["Country"] = array("type"=>200,"varname"=>"Country");
$dalTableemployee_header["Zip"] = array("type"=>200,"varname"=>"Zip");
$dalTableemployee_header["Role"] = array("type"=>200,"varname"=>"Role");
$dalTableemployee_header["SupervisorID"] = array("type"=>200,"varname"=>"SupervisorID");
$dalTableemployee_header["JobTitle"] = array("type"=>200,"varname"=>"JobTitle");
	$dalTableemployee_header["EmployeeID"]["key"]=true;

$dal_info["Tables__employee_header"] = &$dalTableemployee_header;
?>