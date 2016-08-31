<?php

/**
 * getLookupMainTableSettings - tests whether the lookup link exists between the tables
 *
 *  returns array with ProjectSettings class for main table if the link exists in project settings.
 *  returns NULL otherwise
 */
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "") {
	global $lookupTableLinks;
	if (! isset ( $lookupTableLinks [$lookupTable] ))
		return null;
	if (! isset ( $lookupTableLinks [$lookupTable] [$mainTableShortName . "." . $mainField] ))
		return null;
	$arr = &$lookupTableLinks [$lookupTable] [$mainTableShortName . "." . $mainField];
	$effectivePage = $desiredPage;
	if (! isset ( $arr [$effectivePage] )) {
		$effectivePage = PAGE_EDIT;
		if (! isset ( $arr [$effectivePage] )) {
			if ($desiredPage == "" && 0 < count ( $arr )) {
				$effectivePage = $arr [0];
			} else
				return null;
		}
	}
	return new ProjectSettings ( $arr [$effectivePage] ["table"], $effectivePage );
}

/**
 * $lookupTableLinks array stores all lookup links between tables in the project
 */
function InitLookupLinks() {
	global $lookupTableLinks;
	
	$lookupTableLinks = array ();
	
	$lookupTableLinks ["size"] ["customer_header.Size"] ["edit"] = array (
			"table" => "customer_header",
			"field" => "Size",
			"page" => "edit" 
	);
	$lookupTableLinks ["size"] ["customer_header.Size"] ["register"] = array (
			"table" => "customer_header",
			"field" => "Size",
			"page" => "register" 
	);
	$lookupTableLinks ["size"] ["customer_header.Size"] ["add"] = array (
			"table" => "customer_header",
			"field" => "Size",
			"page" => "add" 
	);
	$lookupTableLinks ["size"] ["customer_header.Size"] ["search"] = array (
			"table" => "customer_header",
			"field" => "Size",
			"page" => "search" 
	);
	$lookupTableLinks ["tbl_test center"] ["customer_header.Recovery_Center"] ["search"] = array (
			"table" => "customer_header",
			"field" => "Recovery_Center",
			"page" => "search" 
	);
	$lookupTableLinks ["color"] ["customer_header.Temperature"] ["add"] = array (
			"table" => "customer_header",
			"field" => "Temperature",
			"page" => "add" 
	);
	$lookupTableLinks ["engagementstat"] ["customer_header.Engagement_status"] ["edit"] = array (
			"table" => "customer_header",
			"field" => "Engagement_status",
			"page" => "edit" 
	);
	$lookupTableLinks ["engagementstat"] ["customer_header.Engagement_status"] ["register"] = array (
			"table" => "customer_header",
			"field" => "Engagement_status",
			"page" => "register" 
	);
	$lookupTableLinks ["engagementstat"] ["customer_header.Engagement_status"] ["add"] = array (
			"table" => "customer_header",
			"field" => "Engagement_status",
			"page" => "add" 
	);
	$lookupTableLinks ["engagementstat"] ["customer_header.Engagement_status"] ["search"] = array (
			"table" => "customer_header",
			"field" => "Engagement_status",
			"page" => "search" 
	);
	$lookupTableLinks ["stage"] ["customer_header.Stage"] ["edit"] = array (
			"table" => "customer_header",
			"field" => "Stage",
			"page" => "edit" 
	);
	$lookupTableLinks ["stage"] ["customer_header.Stage"] ["register"] = array (
			"table" => "customer_header",
			"field" => "Stage",
			"page" => "register" 
	);
	$lookupTableLinks ["stage"] ["customer_header.Stage"] ["add"] = array (
			"table" => "customer_header",
			"field" => "Stage",
			"page" => "add" 
	);
	$lookupTableLinks ["stage"] ["customer_header.Stage"] ["search"] = array (
			"table" => "customer_header",
			"field" => "Stage",
			"page" => "search" 
	);
	$lookupTableLinks ["color"] ["customer_header.Overall_Temp"] ["register"] = array (
			"table" => "customer_header",
			"field" => "Overall_Temp",
			"page" => "register" 
	);
	$lookupTableLinks ["color"] ["customer_header.Overall_Temp"] ["search"] = array (
			"table" => "customer_header",
			"field" => "Overall_Temp",
			"page" => "search" 
	);
	$lookupTableLinks ["timezone"] ["customer_header.PrimaryTimeZone"] ["add"] = array (
			"table" => "customer_header",
			"field" => "PrimaryTimeZone",
			"page" => "add" 
	);
	$lookupTableLinks ["contractstat"] ["customer_header.Contract_Status"] ["edit"] = array (
			"table" => "customer_header",
			"field" => "Contract_Status",
			"page" => "edit" 
	);
	$lookupTableLinks ["tbl_director"] ["customer_header.Supervisor"] ["edit"] = array (
			"table" => "customer_header",
			"field" => "Supervisor",
			"page" => "edit" 
	);
	$lookupTableLinks ["employee_header"] ["customer_header.TAM"] ["edit"] = array (
			"table" => "customer_header",
			"field" => "TAM",
			"page" => "edit" 
	);
	$lookupTableLinks ["tbl_sme"] ["customer_header.SME"] ["edit"] = array (
			"table" => "customer_header",
			"field" => "SME",
			"page" => "edit" 
	);
	$lookupTableLinks ["employee_header"] ["customer_header.RSAName"] ["edit"] = array (
			"table" => "customer_header",
			"field" => "RSAName",
			"page" => "edit" 
	);
	$lookupTableLinks ["yesno"] ["employee_header.Type"] ["edit"] = array (
			"table" => "employee_header",
			"field" => "Type",
			"page" => "edit" 
	);
	$lookupTableLinks ["yesno"] ["employee_header.SupervisorTitle"] ["edit"] = array (
			"table" => "employee_header",
			"field" => "SupervisorTitle",
			"page" => "edit" 
	);
	$lookupTableLinks ["yesno"] ["employee_header.SupervisorTitle"] ["register"] = array (
			"table" => "employee_header",
			"field" => "SupervisorTitle",
			"page" => "register" 
	);
	$lookupTableLinks ["yesno"] ["employee_header.SupervisorTitle"] ["add"] = array (
			"table" => "employee_header",
			"field" => "SupervisorTitle",
			"page" => "add" 
	);
	$lookupTableLinks ["yesno"] ["employee_header.SupervisorTitle"] ["search"] = array (
			"table" => "employee_header",
			"field" => "SupervisorTitle",
			"page" => "search" 
	);
	$lookupTableLinks ["location"] ["employee_header.Location"] ["edit"] = array (
			"table" => "employee_header",
			"field" => "Location",
			"page" => "edit" 
	);
	$lookupTableLinks ["tbl_director"] ["employee_header.SupervisorName"] ["edit"] = array (
			"table" => "employee_header",
			"field" => "SupervisorName",
			"page" => "edit" 
	);
	$lookupTableLinks ["yesno"] ["employee_header.EmployeeStatus"] ["edit"] = array (
			"table" => "employee_header",
			"field" => "EmployeeStatus",
			"page" => "edit" 
	);
	$lookupTableLinks ["contractstat"] ["employee_header.EmployeeStatus"] ["register"] = array (
			"table" => "employee_header",
			"field" => "EmployeeStatus",
			"page" => "register" 
	);
	$lookupTableLinks ["yesno"] ["employee_header.EmployeeStatus"] ["add"] = array (
			"table" => "employee_header",
			"field" => "EmployeeStatus",
			"page" => "add" 
	);
	$lookupTableLinks ["contractstat"] ["employee_header.EmployeeStatus"] ["search"] = array (
			"table" => "employee_header",
			"field" => "EmployeeStatus",
			"page" => "search" 
	);
	$lookupTableLinks ["tbl_countries"] ["employee_header.Country"] ["edit"] = array (
			"table" => "employee_header",
			"field" => "Country",
			"page" => "edit" 
	);
	$lookupTableLinks ["tbl_role"] ["employee_header.Role"] ["edit"] = array (
			"table" => "employee_header",
			"field" => "Role",
			"page" => "edit" 
	);
	$lookupTableLinks ["tbl_role"] ["employee_header.Role"] ["register"] = array (
			"table" => "employee_header",
			"field" => "Role",
			"page" => "register" 
	);
	$lookupTableLinks ["tbl_role"] ["employee_header.Role"] ["add"] = array (
			"table" => "employee_header",
			"field" => "Role",
			"page" => "add" 
	);
	$lookupTableLinks ["tbl_role"] ["employee_header.Role"] ["search"] = array (
			"table" => "employee_header",
			"field" => "Role",
			"page" => "search" 
	);
	$lookupTableLinks ["customer_header"] ["customerallocation.CustomerName"] ["register"] = array (
			"table" => "customerallocation",
			"field" => "CustomerName",
			"page" => "register" 
	);
	$lookupTableLinks ["customer_header"] ["customerallocation.CustomerName"] ["add"] = array (
			"table" => "customerallocation",
			"field" => "CustomerName",
			"page" => "add" 
	);
	$lookupTableLinks ["customer_header"] ["customerallocation.CustomerName"] ["search"] = array (
			"table" => "customerallocation",
			"field" => "CustomerName",
			"page" => "search" 
	);
	$lookupTableLinks ["employee_header"] ["customerallocation.RSAName"] ["edit"] = array (
			"table" => "customerallocation",
			"field" => "RSAName",
			"page" => "edit" 
	);
	$lookupTableLinks ["employee_header"] ["customerallocation.RSAName"] ["register"] = array (
			"table" => "customerallocation",
			"field" => "RSAName",
			"page" => "register" 
	);
	$lookupTableLinks ["employee_header"] ["customerallocation.RSAName"] ["add"] = array (
			"table" => "customerallocation",
			"field" => "RSAName",
			"page" => "add" 
	);
	$lookupTableLinks ["employee_header"] ["customerallocation.RSAName"] ["search"] = array (
			"table" => "customerallocation",
			"field" => "RSAName",
			"page" => "search" 
	);
	$lookupTableLinks ["tbl_director"] ["customerallocation.Supervisor"] ["edit"] = array (
			"table" => "customerallocation",
			"field" => "Supervisor",
			"page" => "edit" 
	);
	$lookupTableLinks ["sizecategory"] ["customerallocation.Size"] ["edit"] = array (
			"table" => "customerallocation",
			"field" => "Size",
			"page" => "edit" 
	);
	$lookupTableLinks ["category"] ["customerallocation.PlatformType"] ["edit"] = array (
			"table" => "customerallocation",
			"field" => "PlatformType",
			"page" => "edit" 
	);
	$lookupTableLinks ["skillstable"] ["customerallocation.PlatformName"] ["edit"] = array (
			"table" => "customerallocation",
			"field" => "PlatformName",
			"page" => "edit" 
	);
	$lookupTableLinks ["tbl_role"] ["customerallocation.Role"] ["edit"] = array (
			"table" => "customerallocation",
			"field" => "Role",
			"page" => "edit" 
	);
	$lookupTableLinks ["stage2"] ["customerallocation.Stage"] ["edit"] = array (
			"table" => "customerallocation",
			"field" => "Stage",
			"page" => "edit" 
	);
	$lookupTableLinks ["employee_header"] ["CUST_ALLOC.RSAName"] ["edit"] = array (
			"table" => "CUST_ALLOC",
			"field" => "RSAName",
			"page" => "edit" 
	);
	$lookupTableLinks ["employee_header"] ["View.RSAName"] ["edit"] = array (
			"table" => "View",
			"field" => "RSAName",
			"page" => "edit" 
	);
	$lookupTableLinks ["tbl_director"] ["View.Supervisor"] ["edit"] = array (
			"table" => "View",
			"field" => "Supervisor",
			"page" => "edit" 
	);
	$lookupTableLinks ["category"] ["skillstable.PlatformType"] ["edit"] = array (
			"table" => "skillstable",
			"field" => "PlatformType",
			"page" => "edit" 
	);
	$lookupTableLinks ["category"] ["employeeskills.PlatformType"] ["edit"] = array (
			"table" => "employeeskills",
			"field" => "PlatformType",
			"page" => "edit" 
	);
	$lookupTableLinks ["skillstable"] ["employeeskills.PlatformName"] ["edit"] = array (
			"table" => "employeeskills",
			"field" => "PlatformName",
			"page" => "edit" 
	);
	$lookupTableLinks ["skilllevel"] ["employeeskills.SkillLevel"] ["edit"] = array (
			"table" => "employeeskills",
			"field" => "SkillLevel",
			"page" => "edit" 
	);
	$lookupTableLinks ["tbl_test center"] ["customer_Geotag.Recovery_Center"] ["edit"] = array (
			"table" => "customer_Geotag",
			"field" => "Recovery_Center",
			"page" => "edit" 
	);
	$lookupTableLinks ["tbl_categorytechnology"] ["customertechnology.Category"] ["edit"] = array (
			"table" => "customertechnology",
			"field" => "Category",
			"page" => "edit" 
	);
	$lookupTableLinks ["tbl_technologycustomer"] ["customertechnology.Platform"] ["edit"] = array (
			"table" => "customertechnology",
			"field" => "Platform",
			"page" => "edit" 
	);
	$lookupTableLinks ["employee_header"] ["Workload.RSAName"] ["search"] = array (
			"table" => "Workload",
			"field" => "RSAName",
			"page" => "search" 
	);
	$lookupTableLinks ["tbl_director"] ["Workload.Supervisor"] ["search"] = array (
			"table" => "Workload",
			"field" => "Supervisor",
			"page" => "search" 
	);
	$lookupTableLinks ["tbl_director1"] ["tbl_resource_allocation.Supervisor"] ["edit"] = array (
			"table" => "tbl_resource_allocation",
			"field" => "Supervisor",
			"page" => "edit" 
	);

	$lookupTableLinks ["customer_header"] ["customerallocation1.CustomerName"] ["register"] = array (
			"table" => "customerallocation1",
			"field" => "CustomerName",
			"page" => "register" 
	);
	$lookupTableLinks ["customer_header"] ["customerallocation1.CustomerName"] ["add"] = array (
			"table" => "customerallocation1",
			"field" => "CustomerName",
			"page" => "add" 
	);
	$lookupTableLinks ["customer_header"] ["customerallocation1.CustomerName"] ["search"] = array (
			"table" => "customerallocation1",
			"field" => "CustomerName",
			"page" => "search" 
	);
	$lookupTableLinks ["employee_header"] ["customerallocation1.RSAName"] ["register"] = array (
			"table" => "customerallocation1",
			"field" => "RSAName",
			"page" => "register" 
	);
	$lookupTableLinks ["employee_header"] ["customerallocation1.RSAName"] ["search"] = array (
			"table" => "customerallocation1",
			"field" => "RSAName",
			"page" => "search" 
	);
	$lookupTableLinks ["tbl_director"] ["customerallocation1.Supervisor"] ["edit"] = array (
			"table" => "customerallocation1",
			"field" => "Supervisor",
			"page" => "edit" 
	);
	$lookupTableLinks ["skillstable"] ["customerallocation1.PlatformName"] ["edit"] = array (
			"table" => "customerallocation1",
			"field" => "PlatformName",
			"page" => "edit" 
	);
	$lookupTableLinks ["tbl_role"] ["customerallocation1.Role"] ["edit"] = array (
			"table" => "customerallocation1",
			"field" => "Role",
			"page" => "edit" 
	);
}

?>