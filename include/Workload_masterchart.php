<?php
function DisplayMasterTableInfo_Workload($params)
{
	$keys = $params["keys"];
	$detailtable = $params["detailtable"];
	
	$xt = new Xtempl();
	$tName = "Workload";
	$xt->eventsObject = getEventObject($tName);
	
	$settings = new ProjectSettings($tName, PAGE_CHART);
	$viewControls = new ViewControlsContainer($settings, PAGE_CHART);

	$showKeys = array();
	$keysAssoc = array();


	if( $detailtable == "customerallocation" )
	{
		$keysAssoc["RSAName"] = $keys[1 - 1];
		$keyValue = $viewControls->showDBValue("RSAName", $keysAssoc);
		$showKeys[] = GetFieldLabel("Workload","RSAName").": ".$keyValue;

		$xt->assign('showKeys', implode(", ", $showKeys));
	}
	
	$xt->assign("chart_block", true);
	//set params for the 'xt_showchart' method showing the chart
	$chartXtParams = array(
		"chartname" => "Workload",
		"table" => "Workload",
		"ctype" => "2DColumn", 
		"showDetails" => false,
		"chartPreview" => true,
		"resize" => false, 
		"id" => "1"
	);
	$xt->assign_function("Workload_chart", "xt_showchart", $chartXtParams);
	
	$layout = GetPageLayout("Workload", "masterchart");
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
	
	$xt->displayPartial(GetTemplateName("Workload", "masterchart"));
}
?>