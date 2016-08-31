<?php
include_once(getabspath("classes/printpage.php"));

function DisplayMasterTableInfoForPrint_customer_header($params)
{
	global $cman;
	
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	
	$xt = new Xtempl();
	
	$tName = "customer_header";
	$xt->eventsObject = getEventObject($tName);
	
	$mParams  = array();
	$mParams["xt"] = &$xt;
	$mParams["pageType"] = PAGE_PRINT;
	$mParams["tName"] = $tName;
	$masterPage = new PrintPage($mParams);
	
	$cipherer = new RunnerCipherer( $tName );
	$settings = new ProjectSettings($tName, PAGE_PRINT);
	$connection = $cman->byTable( $tName );
	
	$masterQuery = $settings->getSQLQuery();
	$viewControls = new ViewControlsContainer($settings, PAGE_PRINT, $masterPage);
	
	$where = "";
	$keysAssoc = array();
	$showKeys = "";

	if( $detailtable == "customertechnology" )
	{
		$keysAssoc["OracIeID"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("OracIeID", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("OracIeID", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("OracIeID", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("customer_header","OracIeID").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "customerallocation1" )
	{
		$keysAssoc["OracIeID"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("OracIeID", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("OracIeID", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("OracIeID", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("customer_header","OracIeID").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}
	
	if( !$where )
		return;
	
	$str = SecuritySQL("Export", $tName );
	if( strlen($str) )
		$where.= " and ".$str;
	
	$strWhere = whereAdd( $masterQuery->m_where->toSql($masterQuery), $where );
	if( strlen($strWhere) )
		$strWhere= " where ".$strWhere." ";
		
	$strSQL = $masterQuery->HeadToSql().' '.$masterQuery->FromToSql().$strWhere.$masterQuery->TailToSql();
	LogInfo($strSQL);
	
	$data = $cipherer->DecryptFetchedArray( $connection->query( $strSQL )->fetchAssoc() );
	if( !$data )
		return;
	
	// reassign pagetitlelabel function adding extra params
	$xt->assign_function("pagetitlelabel", "xt_pagetitlelabel", array("record" => $data, "settings" => $settings));	
	
	$keylink = "";
	$keylink.= "&key1=".runner_htmlspecialchars(rawurlencode(@$data["OracIeID"]));
	
	$xt->assign("OracIeID_mastervalue", $viewControls->showDBValue("OracIeID", $data, $keylink));
	$format = $settings->getViewFormat("OracIeID");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("OracIeID")))
		$class = ' rnr-field-number';
		
	$xt->assign("OracIeID_class", $class); // add class for field header as field value
	$xt->assign("Name_mastervalue", $viewControls->showDBValue("Name", $data, $keylink));
	$format = $settings->getViewFormat("Name");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Name")))
		$class = ' rnr-field-number';
		
	$xt->assign("Name_class", $class); // add class for field header as field value
	$xt->assign("Size_mastervalue", $viewControls->showDBValue("Size", $data, $keylink));
	$format = $settings->getViewFormat("Size");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Size")))
		$class = ' rnr-field-number';
		
	$xt->assign("Size_class", $class); // add class for field header as field value
	$xt->assign("Temperature_mastervalue", $viewControls->showDBValue("Temperature", $data, $keylink));
	$format = $settings->getViewFormat("Temperature");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Temperature")))
		$class = ' rnr-field-number';
		
	$xt->assign("Temperature_class", $class); // add class for field header as field value
	$xt->assign("Contract_Start_mastervalue", $viewControls->showDBValue("Contract_Start", $data, $keylink));
	$format = $settings->getViewFormat("Contract_Start");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Contract_Start")))
		$class = ' rnr-field-number';
		
	$xt->assign("Contract_Start_class", $class); // add class for field header as field value
	$xt->assign("Contract_end_mastervalue", $viewControls->showDBValue("Contract_end", $data, $keylink));
	$format = $settings->getViewFormat("Contract_end");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Contract_end")))
		$class = ' rnr-field-number';
		
	$xt->assign("Contract_end_class", $class); // add class for field header as field value
	$xt->assign("Recovery_Center_mastervalue", $viewControls->showDBValue("Recovery_Center", $data, $keylink));
	$format = $settings->getViewFormat("Recovery_Center");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Recovery_Center")))
		$class = ' rnr-field-number';
		
	$xt->assign("Recovery_Center_class", $class); // add class for field header as field value
	$xt->assign("Total_MRR_mastervalue", $viewControls->showDBValue("Total_MRR", $data, $keylink));
	$format = $settings->getViewFormat("Total_MRR");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Total_MRR")))
		$class = ' rnr-field-number';
		
	$xt->assign("Total_MRR_class", $class); // add class for field header as field value
	$xt->assign("MRP_MRR_mastervalue", $viewControls->showDBValue("MRP_MRR", $data, $keylink));
	$format = $settings->getViewFormat("MRP_MRR");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("MRP_MRR")))
		$class = ' rnr-field-number';
		
	$xt->assign("MRP_MRR_class", $class); // add class for field header as field value
	$xt->assign("ARS_MRR_mastervalue", $viewControls->showDBValue("ARS_MRR", $data, $keylink));
	$format = $settings->getViewFormat("ARS_MRR");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("ARS_MRR")))
		$class = ' rnr-field-number';
		
	$xt->assign("ARS_MRR_class", $class); // add class for field header as field value
	$xt->assign("MS_MRR_mastervalue", $viewControls->showDBValue("MS_MRR", $data, $keylink));
	$format = $settings->getViewFormat("MS_MRR");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("MS_MRR")))
		$class = ' rnr-field-number';
		
	$xt->assign("MS_MRR_class", $class); // add class for field header as field value
	$xt->assign("CS_MRR_mastervalue", $viewControls->showDBValue("CS_MRR", $data, $keylink));
	$format = $settings->getViewFormat("CS_MRR");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("CS_MRR")))
		$class = ' rnr-field-number';
		
	$xt->assign("CS_MRR_class", $class); // add class for field header as field value
	$xt->assign("OTHER_MRR_mastervalue", $viewControls->showDBValue("OTHER_MRR", $data, $keylink));
	$format = $settings->getViewFormat("OTHER_MRR");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("OTHER_MRR")))
		$class = ' rnr-field-number';
		
	$xt->assign("OTHER_MRR_class", $class); // add class for field header as field value
	$xt->assign("Engagement_status_mastervalue", $viewControls->showDBValue("Engagement_status", $data, $keylink));
	$format = $settings->getViewFormat("Engagement_status");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Engagement_status")))
		$class = ' rnr-field-number';
		
	$xt->assign("Engagement_status_class", $class); // add class for field header as field value
	$xt->assign("Comments_mastervalue", $viewControls->showDBValue("Comments", $data, $keylink));
	$format = $settings->getViewFormat("Comments");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Comments")))
		$class = ' rnr-field-number';
		
	$xt->assign("Comments_class", $class); // add class for field header as field value
	$xt->assign("Stage_mastervalue", $viewControls->showDBValue("Stage", $data, $keylink));
	$format = $settings->getViewFormat("Stage");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Stage")))
		$class = ' rnr-field-number';
		
	$xt->assign("Stage_class", $class); // add class for field header as field value
	$xt->assign("Overall_Temp_mastervalue", $viewControls->showDBValue("Overall_Temp", $data, $keylink));
	$format = $settings->getViewFormat("Overall_Temp");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Overall_Temp")))
		$class = ' rnr-field-number';
		
	$xt->assign("Overall_Temp_class", $class); // add class for field header as field value
	$xt->assign("SteadyState_mastervalue", $viewControls->showDBValue("SteadyState", $data, $keylink));
	$format = $settings->getViewFormat("SteadyState");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("SteadyState")))
		$class = ' rnr-field-number';
		
	$xt->assign("SteadyState_class", $class); // add class for field header as field value
	$xt->assign("PrimaryTimeZone_mastervalue", $viewControls->showDBValue("PrimaryTimeZone", $data, $keylink));
	$format = $settings->getViewFormat("PrimaryTimeZone");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("PrimaryTimeZone")))
		$class = ' rnr-field-number';
		
	$xt->assign("PrimaryTimeZone_class", $class); // add class for field header as field value
	$xt->assign("Onshore_Support_mastervalue", $viewControls->showDBValue("Onshore Support", $data, $keylink));
	$format = $settings->getViewFormat("Onshore Support");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Onshore Support")))
		$class = ' rnr-field-number';
		
	$xt->assign("Onshore_Support_class", $class); // add class for field header as field value
	$xt->assign("TransStartDate_mastervalue", $viewControls->showDBValue("TransStartDate", $data, $keylink));
	$format = $settings->getViewFormat("TransStartDate");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("TransStartDate")))
		$class = ' rnr-field-number';
		
	$xt->assign("TransStartDate_class", $class); // add class for field header as field value
	$xt->assign("TransEndDate_mastervalue", $viewControls->showDBValue("TransEndDate", $data, $keylink));
	$format = $settings->getViewFormat("TransEndDate");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("TransEndDate")))
		$class = ' rnr-field-number';
		
	$xt->assign("TransEndDate_class", $class); // add class for field header as field value
	$xt->assign("Supervisor_mastervalue", $viewControls->showDBValue("Supervisor", $data, $keylink));
	$format = $settings->getViewFormat("Supervisor");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Supervisor")))
		$class = ' rnr-field-number';
		
	$xt->assign("Supervisor_class", $class); // add class for field header as field value
	$xt->assign("TAM_mastervalue", $viewControls->showDBValue("TAM", $data, $keylink));
	$format = $settings->getViewFormat("TAM");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("TAM")))
		$class = ' rnr-field-number';
		
	$xt->assign("TAM_class", $class); // add class for field header as field value
	$xt->assign("SME_mastervalue", $viewControls->showDBValue("SME", $data, $keylink));
	$format = $settings->getViewFormat("SME");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("SME")))
		$class = ' rnr-field-number';
		
	$xt->assign("SME_class", $class); // add class for field header as field value
	$xt->assign("RSAName_mastervalue", $viewControls->showDBValue("RSAName", $data, $keylink));
	$format = $settings->getViewFormat("RSAName");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("RSAName")))
		$class = ' rnr-field-number';
		
	$xt->assign("RSAName_class", $class); // add class for field header as field value

	$layout = GetPageLayout("customer_header", 'masterprint');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');

	$xt->displayPartial(GetTemplateName("customer_header", "masterprint"));
}

?>