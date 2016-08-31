<?php
function DisplayMasterTableInfo_employee_header($params)
{
	$keys = $params["keys"];
	$detailtable = $params["detailtable"];
	$data = $params["masterRecordData"];
	
	$xt = new Xtempl();
	$tName = "employee_header";
	$xt->eventsObject = getEventObject($tName);
	
	include_once(getabspath('classes/listpage.php'));
	include_once(getabspath('classes/listpage_simple.php'));
	$mParams  = array();
	$mParams["xt"] = &$xt;
	$mParams["mode"] = LIST_MASTER;
	$mParams["pageType"] = PAGE_LIST;
	$mParams["flyId"] = $params["recId"];
	$masterPage = ListPage::createListPage($tName, $mParams);
	
	$settings = $masterPage->pSet;
	$viewControls = new ViewControlsContainer($settings, PAGE_LIST, $masterPage);
	
	$keysAssoc = array();
	$showKeys = "";	

	if($detailtable == "employeeskills")
	{
		$keysAssoc["EmployeeID"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("EmployeeID", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("employee_header","EmployeeID").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if( !$data || !count($data) )
		return;
	
	// reassign pagetitlelabel function adding extra params
	$xt->assign_function("pagetitlelabel", "xt_pagetitlelabel", array("record" => $data, "settings" => $settings));
	
	$keylink = "";
	$keylink.= "&key1=".runner_htmlspecialchars(rawurlencode(@$data["EmployeeID"]));
	
	$xt->assign("EmployeeID_mastervalue", $viewControls->showDBValue("EmployeeID", $data, $keylink));
	$format = $settings->getViewFormat("EmployeeID");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("EmployeeID")))
		$class = ' rnr-field-number';
		
	$xt->assign("EmployeeID_class", $class); // add class for field header as field value
	$xt->assign("FirstName_mastervalue", $viewControls->showDBValue("FirstName", $data, $keylink));
	$format = $settings->getViewFormat("FirstName");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("FirstName")))
		$class = ' rnr-field-number';
		
	$xt->assign("FirstName_class", $class); // add class for field header as field value
	$xt->assign("LastName_mastervalue", $viewControls->showDBValue("LastName", $data, $keylink));
	$format = $settings->getViewFormat("LastName");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("LastName")))
		$class = ' rnr-field-number';
		
	$xt->assign("LastName_class", $class); // add class for field header as field value
	$xt->assign("FullName_mastervalue", $viewControls->showDBValue("FullName", $data, $keylink));
	$format = $settings->getViewFormat("FullName");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("FullName")))
		$class = ' rnr-field-number';
		
	$xt->assign("FullName_class", $class); // add class for field header as field value
	$xt->assign("emailID_mastervalue", $viewControls->showDBValue("emailID", $data, $keylink));
	$format = $settings->getViewFormat("emailID");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("emailID")))
		$class = ' rnr-field-number';
		
	$xt->assign("emailID_class", $class); // add class for field header as field value
	$xt->assign("Type_mastervalue", $viewControls->showDBValue("Type", $data, $keylink));
	$format = $settings->getViewFormat("Type");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Type")))
		$class = ' rnr-field-number';
		
	$xt->assign("Type_class", $class); // add class for field header as field value
	$xt->assign("SupervisorTitle_mastervalue", $viewControls->showDBValue("SupervisorTitle", $data, $keylink));
	$format = $settings->getViewFormat("SupervisorTitle");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("SupervisorTitle")))
		$class = ' rnr-field-number';
		
	$xt->assign("SupervisorTitle_class", $class); // add class for field header as field value
	$xt->assign("Location_mastervalue", $viewControls->showDBValue("Location", $data, $keylink));
	$format = $settings->getViewFormat("Location");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Location")))
		$class = ' rnr-field-number';
		
	$xt->assign("Location_class", $class); // add class for field header as field value
	$xt->assign("SupervisorName_mastervalue", $viewControls->showDBValue("SupervisorName", $data, $keylink));
	$format = $settings->getViewFormat("SupervisorName");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("SupervisorName")))
		$class = ' rnr-field-number';
		
	$xt->assign("SupervisorName_class", $class); // add class for field header as field value
	$xt->assign("InactiveDate_mastervalue", $viewControls->showDBValue("InactiveDate", $data, $keylink));
	$format = $settings->getViewFormat("InactiveDate");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("InactiveDate")))
		$class = ' rnr-field-number';
		
	$xt->assign("InactiveDate_class", $class); // add class for field header as field value
	$xt->assign("created_by_mastervalue", $viewControls->showDBValue("created_by", $data, $keylink));
	$format = $settings->getViewFormat("created_by");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("created_by")))
		$class = ' rnr-field-number';
		
	$xt->assign("created_by_class", $class); // add class for field header as field value
	$xt->assign("updated_by_mastervalue", $viewControls->showDBValue("updated_by", $data, $keylink));
	$format = $settings->getViewFormat("updated_by");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("updated_by")))
		$class = ' rnr-field-number';
		
	$xt->assign("updated_by_class", $class); // add class for field header as field value
	$xt->assign("created_date_mastervalue", $viewControls->showDBValue("created_date", $data, $keylink));
	$format = $settings->getViewFormat("created_date");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("created_date")))
		$class = ' rnr-field-number';
		
	$xt->assign("created_date_class", $class); // add class for field header as field value
	$xt->assign("updated_date_mastervalue", $viewControls->showDBValue("updated_date", $data, $keylink));
	$format = $settings->getViewFormat("updated_date");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("updated_date")))
		$class = ' rnr-field-number';
		
	$xt->assign("updated_date_class", $class); // add class for field header as field value
	$xt->assign("StartDate_mastervalue", $viewControls->showDBValue("StartDate", $data, $keylink));
	$format = $settings->getViewFormat("StartDate");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("StartDate")))
		$class = ' rnr-field-number';
		
	$xt->assign("StartDate_class", $class); // add class for field header as field value
	$xt->assign("EmployeeStatus_mastervalue", $viewControls->showDBValue("EmployeeStatus", $data, $keylink));
	$format = $settings->getViewFormat("EmployeeStatus");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("EmployeeStatus")))
		$class = ' rnr-field-number';
		
	$xt->assign("EmployeeStatus_class", $class); // add class for field header as field value
	$xt->assign("Country_mastervalue", $viewControls->showDBValue("Country", $data, $keylink));
	$format = $settings->getViewFormat("Country");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Country")))
		$class = ' rnr-field-number';
		
	$xt->assign("Country_class", $class); // add class for field header as field value
	$xt->assign("Address_mastervalue", $viewControls->showDBValue("Address", $data, $keylink));
	$format = $settings->getViewFormat("Address");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Address")))
		$class = ' rnr-field-number';
		
	$xt->assign("Address_class", $class); // add class for field header as field value
	$xt->assign("Role_mastervalue", $viewControls->showDBValue("Role", $data, $keylink));
	$format = $settings->getViewFormat("Role");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Role")))
		$class = ' rnr-field-number';
		
	$xt->assign("Role_class", $class); // add class for field header as field value
	$xt->assign("JobTitle_mastervalue", $viewControls->showDBValue("JobTitle", $data, $keylink));
	$format = $settings->getViewFormat("JobTitle");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("JobTitle")))
		$class = ' rnr-field-number';
		
	$xt->assign("JobTitle_class", $class); // add class for field header as field value

	$layout = GetPageLayout("employee_header", 'masterlist');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
	
	$xt->displayPartial(GetTemplateName("employee_header", "masterlist"));
}

?>