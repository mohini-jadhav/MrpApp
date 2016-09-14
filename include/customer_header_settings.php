<?php
require_once (getabspath ( "classes/cipherer.php" ));

$tdatacustomer_header = array ();
$tdatacustomer_header [".truncateText"] = true;
$tdatacustomer_header [".NumberOfChars"] = 60;
$tdatacustomer_header [".ShortName"] = "customer_header";
$tdatacustomer_header [".OwnerID"] = "";
$tdatacustomer_header [".OriginalTable"] = "customer_header";

// field labels
$fieldLabelscustomer_header = array ();
$fieldToolTipscustomer_header = array ();
$pageTitlescustomer_header = array ();

if (mlang_getcurrentlang () == "English") {
	$fieldLabelscustomer_header ["English"] = array ();
	$fieldToolTipscustomer_header ["English"] = array ();
	$pageTitlescustomer_header ["English"] = array ();
	$fieldLabelscustomer_header ["English"] ["OracIeID"] = "OracleID";
	$fieldToolTipscustomer_header ["English"] ["OracIeID"] = "";
	$fieldLabelscustomer_header ["English"] ["Name"] = "Name";
	$fieldToolTipscustomer_header ["English"] ["Name"] = "";
	$fieldLabelscustomer_header ["English"] ["Size"] = "Size";
	$fieldToolTipscustomer_header ["English"] ["Size"] = "";
	$fieldLabelscustomer_header ["English"] ["Temperature"] = "Temperature";
	$fieldToolTipscustomer_header ["English"] ["Temperature"] = "";
	$fieldLabelscustomer_header ["English"] ["Contract_Start"] = "Contract Start";
	$fieldToolTipscustomer_header ["English"] ["Contract_Start"] = "";
	$fieldLabelscustomer_header ["English"] ["Contract_end"] = "Contract End";
	$fieldToolTipscustomer_header ["English"] ["Contract_end"] = "";
	$fieldLabelscustomer_header ["English"] ["Recovery_Center"] = "Rec Ctr";
	$fieldToolTipscustomer_header ["English"] ["Recovery_Center"] = "";
	$fieldLabelscustomer_header ["English"] ["Total_MRR"] = "Total \$";
	$fieldToolTipscustomer_header ["English"] ["Total_MRR"] = "";
	$fieldLabelscustomer_header ["English"] ["MRP_MRR"] = "MRP \$";
	$fieldToolTipscustomer_header ["English"] ["MRP_MRR"] = "";
	$fieldLabelscustomer_header ["English"] ["ARS_MRR"] = "ARS \$";
	$fieldToolTipscustomer_header ["English"] ["ARS_MRR"] = "";
	$fieldLabelscustomer_header ["English"] ["MS_MRR"] = "MS \$";
	$fieldToolTipscustomer_header ["English"] ["MS_MRR"] = "";
	$fieldLabelscustomer_header ["English"] ["CS_MRR"] = "CS \$";
	$fieldToolTipscustomer_header ["English"] ["CS_MRR"] = "";
	$fieldLabelscustomer_header ["English"] ["OTHER_MRR"] = "OTHER \$";
	$fieldToolTipscustomer_header ["English"] ["OTHER_MRR"] = "";
	$fieldLabelscustomer_header ["English"] ["Engagement_status"] = "Status";
	$fieldToolTipscustomer_header ["English"] ["Engagement_status"] = "";
	$fieldLabelscustomer_header ["English"] ["created_by"] = "Created By";
	$fieldToolTipscustomer_header ["English"] ["created_by"] = "";
	$fieldLabelscustomer_header ["English"] ["Created_date"] = "Created Date";
	$fieldToolTipscustomer_header ["English"] ["Created_date"] = "";
	$fieldLabelscustomer_header ["English"] ["Updated_by"] = "Updated By";
	$fieldToolTipscustomer_header ["English"] ["Updated_by"] = "";
	$fieldLabelscustomer_header ["English"] ["Updated_date"] = "Updated Date";
	$fieldToolTipscustomer_header ["English"] ["Updated_date"] = "";
	$fieldLabelscustomer_header ["English"] ["Comments"] = "Comments";
	$fieldToolTipscustomer_header ["English"] ["Comments"] = "";
	$fieldLabelscustomer_header ["English"] ["EmployeeID"] = "Employee ID";
	$fieldToolTipscustomer_header ["English"] ["EmployeeID"] = "";
	$fieldLabelscustomer_header ["English"] ["Stage"] = "Stage";
	$fieldToolTipscustomer_header ["English"] ["Stage"] = "";
	$fieldLabelscustomer_header ["English"] ["Overall_Temp"] = "Cust Temp";
	$fieldToolTipscustomer_header ["English"] ["Overall_Temp"] = "";
	$fieldLabelscustomer_header ["English"] ["Compre_String"] = "Compre String";
	$fieldToolTipscustomer_header ["English"] ["Compre_String"] = "";
	$fieldLabelscustomer_header ["English"] ["Address"] = "Cust DC Zip Code";
	$fieldToolTipscustomer_header ["English"] ["Address"] = "";
	$fieldLabelscustomer_header ["English"] ["SteadyState"] = "Steady State";
	$fieldToolTipscustomer_header ["English"] ["SteadyState"] = "";
	$fieldLabelscustomer_header ["English"] ["PrimaryTimeZone"] = "Primary Working Time Zone";
	$fieldToolTipscustomer_header ["English"] ["PrimaryTimeZone"] = "";
	$fieldLabelscustomer_header ["English"] ["Onshore_Support"] = "Onshore Support";
	$fieldToolTipscustomer_header ["English"] ["Onshore Support"] = "";
	$fieldLabelscustomer_header ["English"] ["TransStartDate"] = "Trans Start Date";
	$fieldToolTipscustomer_header ["English"] ["TransStartDate"] = "";
	$fieldLabelscustomer_header ["English"] ["TransEndDate"] = "Trans End Date";
	$fieldToolTipscustomer_header ["English"] ["TransEndDate"] = "";
	$fieldLabelscustomer_header ["English"] ["CustomerName"] = "Customer Name";
	$fieldToolTipscustomer_header ["English"] ["CustomerName"] = "";
	$fieldLabelscustomer_header ["English"] ["Contract_Status"] = "Contract Status";
	$fieldToolTipscustomer_header ["English"] ["Contract_Status"] = "";
	$fieldLabelscustomer_header ["English"] ["Supervisor"] = "Manager";
	$fieldToolTipscustomer_header ["English"] ["Supervisor"] = "";
	$fieldLabelscustomer_header ["English"] ["TAM"] = "TAM";
	$fieldToolTipscustomer_header ["English"] ["TAM"] = "";
	$fieldLabelscustomer_header ["English"] ["SME"] = "SME";
	$fieldToolTipscustomer_header ["English"] ["SME"] = "";
	$fieldLabelscustomer_header ["English"] ["RSAName"] = "Resource";
	$fieldToolTipscustomer_header ["English"] ["RSAName"] = "";
	$fieldLabelscustomer_header ["English"] ["RS_MRR"] = "RS \$";
	$fieldToolTipscustomer_header ["English"] ["RS_MRR"] = "";
	if (count ( $fieldToolTipscustomer_header ["English"] ))
		$tdatacustomer_header [".isUseToolTips"] = true;
}
if (mlang_getcurrentlang () == "") {
	$fieldLabelscustomer_header [""] = array ();
	$fieldToolTipscustomer_header [""] = array ();
	$pageTitlescustomer_header [""] = array ();
	$fieldLabelscustomer_header [""] ["OracIeID"] = "OracleID";
	$fieldToolTipscustomer_header [""] ["OracIeID"] = "";
	$fieldLabelscustomer_header [""] ["Address"] = "Address";
	$fieldToolTipscustomer_header [""] ["Address"] = "";
	$fieldLabelscustomer_header [""] ["SteadyState"] = "Steady State";
	$fieldToolTipscustomer_header [""] ["SteadyState"] = "";
	$fieldLabelscustomer_header [""] ["PrimaryTimeZone"] = "Primary Time Zone";
	$fieldToolTipscustomer_header [""] ["PrimaryTimeZone"] = "";
	$fieldLabelscustomer_header [""] ["Onshore_Support"] = "Onshore Support";
	$fieldToolTipscustomer_header [""] ["Onshore Support"] = "";
	$fieldLabelscustomer_header [""] ["TransStartDate"] = "Trans Start Date";
	$fieldToolTipscustomer_header [""] ["TransStartDate"] = "";
	$fieldLabelscustomer_header [""] ["TransEndDate"] = "Trans Enddate";
	$fieldToolTipscustomer_header [""] ["TransEndDate"] = "";
	$fieldLabelscustomer_header [""] ["Contract_Status"] = "Contract Status";
	$fieldToolTipscustomer_header [""] ["Contract_Status"] = "";
	$fieldLabelscustomer_header [""] ["Supervisor"] = "Supervisor";
	$fieldToolTipscustomer_header [""] ["Supervisor"] = "";
	$fieldLabelscustomer_header [""] ["TAM"] = "TAM";
	$fieldToolTipscustomer_header [""] ["TAM"] = "";
	$fieldLabelscustomer_header [""] ["SME"] = "SME";
	$fieldToolTipscustomer_header [""] ["SME"] = "";
	$fieldLabelscustomer_header [""] ["RSAName"] = "RSAName";
	$fieldToolTipscustomer_header [""] ["RSAName"] = "";
	$fieldLabelscustomer_header [""] ["RS_MRR"] = "RS MRR";
	$fieldToolTipscustomer_header [""] ["RS_MRR"] = "";
	if (count ( $fieldToolTipscustomer_header [""] ))
		$tdatacustomer_header [".isUseToolTips"] = true;
}

$tdatacustomer_header [".NCSearch"] = true;

if (! isMobile ())
	$tdatacustomer_header [".scrollGridBody"] = true;

$tdatacustomer_header [".shortTableName"] = "customer_header";
$tdatacustomer_header [".nSecOptions"] = 0;
$tdatacustomer_header [".recsPerRowList"] = 1;
$tdatacustomer_header [".recsPerRowPrint"] = 1;
$tdatacustomer_header [".mainTableOwnerID"] = "";
$tdatacustomer_header [".moveNext"] = 0;
$tdatacustomer_header [".entityType"] = 0;

$tdatacustomer_header [".strOriginalTableName"] = "customer_header";

$tdatacustomer_header [".showAddInPopup"] = true;

$tdatacustomer_header [".showEditInPopup"] = true;

$tdatacustomer_header [".showViewInPopup"] = false;

// page's base css files names
$popupPagesLayoutNames = array ();

;
$popupPagesLayoutNames ["add"] = "add2";

;
$popupPagesLayoutNames ["edit"] = "edit2";
$tdatacustomer_header [".popupPagesLayoutNames"] = $popupPagesLayoutNames;

$tdatacustomer_header [".fieldsForRegister"] = array ();

$tdatacustomer_header [".listAjax"] = false;

$tdatacustomer_header [".audit"] = false;

$tdatacustomer_header [".locking"] = false;

$tdatacustomer_header [".edit"] = true;
$tdatacustomer_header [".afterEditAction"] = 0;
$tdatacustomer_header [".closePopupAfterEdit"] = 1;
$tdatacustomer_header [".afterEditActionDetTable"] = "customertechnology";

$tdatacustomer_header [".add"] = true;
$tdatacustomer_header [".afterAddAction"] = 0;
$tdatacustomer_header [".closePopupAfterAdd"] = 1;
$tdatacustomer_header [".afterAddActionDetTable"] = "customertechnology";

$tdatacustomer_header [".list"] = true;

$tdatacustomer_header [".import"] = true;

$tdatacustomer_header [".exportTo"] = true;

$tdatacustomer_header [".printFriendly"] = true;

$tdatacustomer_header [".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacustomer_header [".searchSaving"] = false;
//

$tdatacustomer_header [".showSearchPanel"] = true;
$tdatacustomer_header [".flexibleSearch"] = true;

if (isMobile ())
	$tdatacustomer_header [".isUseAjaxSuggest"] = false;
else
	$tdatacustomer_header [".isUseAjaxSuggest"] = true;

$tdatacustomer_header [".rowHighlite"] = true;

$tdatacustomer_header [".addPageEvents"] = true;

// use timepicker for search panel
$tdatacustomer_header [".isUseTimeForSearch"] = false;

$tdatacustomer_header [".detailsLinksOnList"] = "1";

$tdatacustomer_header [".allSearchFields"] = array ();
$tdatacustomer_header [".filterFields"] = array ();
$tdatacustomer_header [".requiredSearchFields"] = array ();

$tdatacustomer_header [".allSearchFields"] [] = "Supervisor";
$tdatacustomer_header [".allSearchFields"] [] = "TAM";
$tdatacustomer_header [".allSearchFields"] [] = "SME";
$tdatacustomer_header [".allSearchFields"] [] = "RSAName";
$tdatacustomer_header [".allSearchFields"] [] = "OracIeID";
$tdatacustomer_header [".allSearchFields"] [] = "Name";
$tdatacustomer_header [".allSearchFields"] [] = "PrimaryTimeZone";
$tdatacustomer_header [".allSearchFields"] [] = "Size";
$tdatacustomer_header [".allSearchFields"] [] = "Onshore Support";
$tdatacustomer_header [".allSearchFields"] [] = "Stage";
$tdatacustomer_header [".allSearchFields"] [] = "Overall_Temp";
$tdatacustomer_header [".allSearchFields"] [] = "Engagement_status";
$tdatacustomer_header [".allSearchFields"] [] = "Contract_Start";
$tdatacustomer_header [".allSearchFields"] [] = "SteadyState";
$tdatacustomer_header [".allSearchFields"] [] = "Contract_end";
$tdatacustomer_header [".allSearchFields"] [] = "Recovery_Center";
$tdatacustomer_header [".allSearchFields"] [] = "Total_MRR";
$tdatacustomer_header [".allSearchFields"] [] = "MRP_MRR";
$tdatacustomer_header [".allSearchFields"] [] = "ARS_MRR";
$tdatacustomer_header [".allSearchFields"] [] = "RS_MRR";
$tdatacustomer_header [".allSearchFields"] [] = "MS_MRR";
$tdatacustomer_header [".allSearchFields"] [] = "CS_MRR";
$tdatacustomer_header [".allSearchFields"] [] = "OTHER_MRR";
$tdatacustomer_header [".allSearchFields"] [] = "TransStartDate";
$tdatacustomer_header [".allSearchFields"] [] = "TransEndDate";

$tdatacustomer_header [".googleLikeFields"] = array ();
$tdatacustomer_header [".googleLikeFields"] [] = "OracIeID";
$tdatacustomer_header [".googleLikeFields"] [] = "Name";
$tdatacustomer_header [".googleLikeFields"] [] = "Size";
$tdatacustomer_header [".googleLikeFields"] [] = "Temperature";
$tdatacustomer_header [".googleLikeFields"] [] = "Contract_Start";
$tdatacustomer_header [".googleLikeFields"] [] = "Contract_end";
$tdatacustomer_header [".googleLikeFields"] [] = "Recovery_Center";
$tdatacustomer_header [".googleLikeFields"] [] = "Total_MRR";
$tdatacustomer_header [".googleLikeFields"] [] = "MRP_MRR";
$tdatacustomer_header [".googleLikeFields"] [] = "ARS_MRR";
$tdatacustomer_header [".googleLikeFields"] [] = "RS_MRR";
$tdatacustomer_header [".googleLikeFields"] [] = "MS_MRR";
$tdatacustomer_header [".googleLikeFields"] [] = "CS_MRR";
$tdatacustomer_header [".googleLikeFields"] [] = "OTHER_MRR";
$tdatacustomer_header [".googleLikeFields"] [] = "Engagement_status";
$tdatacustomer_header [".googleLikeFields"] [] = "Stage";
$tdatacustomer_header [".googleLikeFields"] [] = "Overall_Temp";
$tdatacustomer_header [".googleLikeFields"] [] = "Address";
$tdatacustomer_header [".googleLikeFields"] [] = "SteadyState";
$tdatacustomer_header [".googleLikeFields"] [] = "PrimaryTimeZone";
$tdatacustomer_header [".googleLikeFields"] [] = "Onshore Support";
$tdatacustomer_header [".googleLikeFields"] [] = "TransStartDate";
$tdatacustomer_header [".googleLikeFields"] [] = "TransEndDate";
$tdatacustomer_header [".googleLikeFields"] [] = "Contract_Status";
$tdatacustomer_header [".googleLikeFields"] [] = "Supervisor";
$tdatacustomer_header [".googleLikeFields"] [] = "TAM";
$tdatacustomer_header [".googleLikeFields"] [] = "SME";
$tdatacustomer_header [".googleLikeFields"] [] = "RSAName";

$tdatacustomer_header [".advSearchFields"] = array ();
$tdatacustomer_header [".advSearchFields"] [] = "Supervisor";
$tdatacustomer_header [".advSearchFields"] [] = "TAM";
$tdatacustomer_header [".advSearchFields"] [] = "SME";
$tdatacustomer_header [".advSearchFields"] [] = "RSAName";
$tdatacustomer_header [".advSearchFields"] [] = "OracIeID";
$tdatacustomer_header [".advSearchFields"] [] = "Name";
$tdatacustomer_header [".advSearchFields"] [] = "PrimaryTimeZone";
$tdatacustomer_header [".advSearchFields"] [] = "Size";
$tdatacustomer_header [".advSearchFields"] [] = "Onshore Support";
$tdatacustomer_header [".advSearchFields"] [] = "Stage";
$tdatacustomer_header [".advSearchFields"] [] = "Overall_Temp";
$tdatacustomer_header [".advSearchFields"] [] = "Engagement_status";
$tdatacustomer_header [".advSearchFields"] [] = "Contract_Start";
$tdatacustomer_header [".advSearchFields"] [] = "SteadyState";
$tdatacustomer_header [".advSearchFields"] [] = "Contract_end";
$tdatacustomer_header [".advSearchFields"] [] = "Recovery_Center";
$tdatacustomer_header [".advSearchFields"] [] = "Total_MRR";
$tdatacustomer_header [".advSearchFields"] [] = "MRP_MRR";
$tdatacustomer_header [".advSearchFields"] [] = "ARS_MRR";
$tdatacustomer_header [".advSearchFields"] [] = "RS_MRR";
$tdatacustomer_header [".advSearchFields"] [] = "MS_MRR";
$tdatacustomer_header [".advSearchFields"] [] = "CS_MRR";
$tdatacustomer_header [".advSearchFields"] [] = "OTHER_MRR";
$tdatacustomer_header [".advSearchFields"] [] = "TransStartDate";
$tdatacustomer_header [".advSearchFields"] [] = "TransEndDate";

$tdatacustomer_header [".tableType"] = "list";

$tdatacustomer_header [".printerPageOrientation"] = 0;
$tdatacustomer_header [".nPrinterPageScale"] = 100;

$tdatacustomer_header [".nPrinterSplitRecords"] = 40;

$tdatacustomer_header [".nPrinterPDFSplitRecords"] = 40;

$tdatacustomer_header [".geocodingEnabled"] = false;

// view page pdf

// print page pdf

$tdatacustomer_header [".pageSize"] = 10;

$tdatacustomer_header [".warnLeavingPages"] = true;

$tstrOrderBy = "ORDER BY Name";
if (strlen ( $tstrOrderBy ) && strtolower ( substr ( $tstrOrderBy, 0, 8 ) ) != "order by")
	$tstrOrderBy = "order by " . $tstrOrderBy;
$tdatacustomer_header [".strOrderBy"] = $tstrOrderBy;

$tdatacustomer_header [".orderindexes"] = array ();
$tdatacustomer_header [".orderindexes"] [] = array (
		2,
		(1 ? "ASC" : "DESC"),
		"Name" 
);

$tdatacustomer_header [".sqlHead"] = "SELECT OracIeID,  Name,  `Size`,  Temperature,  Contract_Start,  Contract_end,  Recovery_Center,  Total_MRR,  MRP_MRR,  ARS_MRR,  RS_MRR,  MS_MRR,  CS_MRR,  OTHER_MRR,  Engagement_status,  created_by,  concat(`Size`, '-', `Stage`) AS Compre_String,  Created_date,  Updated_by,  Updated_date,  Comments,  EmployeeID,  Stage,  Overall_Temp,  Address,  SteadyState,  PrimaryTimeZone,  `Onshore Support`,  TransStartDate,  TransEndDate,  Contract_Status,  Supervisor,  TAM,  SME,  RSAName, Sales_SVP";
$tdatacustomer_header [".sqlFrom"] = "FROM customer_header";
$tdatacustomer_header [".sqlWhereExpr"] = "";
$tdatacustomer_header [".sqlTail"] = "";

// fill array of records per page for list and report without group fields
$arrRPP = array ();
$arrRPP [] = 10;
$arrRPP [] = 20;
$arrRPP [] = 30;
$arrRPP [] = 50;
$arrRPP [] = 100;
$arrRPP [] = 500;
$arrRPP [] = - 1;
$tdatacustomer_header [".arrRecsPerPage"] = $arrRPP;

// fill array of groups per page for report with group fields
$arrGPP = array ();
$arrGPP [] = 1;
$arrGPP [] = 3;
$arrGPP [] = 5;
$arrGPP [] = 10;
$arrGPP [] = 50;
$arrGPP [] = 100;
$arrGPP [] = - 1;
$tdatacustomer_header [".arrGroupsPerPage"] = $arrGPP;

$tableKeyscustomer_header = array ();
$tableKeyscustomer_header [] = "OracIeID";
$tdatacustomer_header [".Keys"] = $tableKeyscustomer_header;

$tdatacustomer_header [".listFields"] = array ();
$tdatacustomer_header [".listFields"] [] = "OracIeID";
$tdatacustomer_header [".listFields"] [] = "Name";
$tdatacustomer_header [".listFields"] [] = "Size";
$tdatacustomer_header [".listFields"] [] = "Stage";
$tdatacustomer_header [".listFields"] [] = "Overall_Temp";
$tdatacustomer_header [".listFields"] [] = "Engagement_status";
$tdatacustomer_header [".listFields"] [] = "Onshore Support";
$tdatacustomer_header [".listFields"] [] = "Contract_Start";
$tdatacustomer_header [".listFields"] [] = "SteadyState";
$tdatacustomer_header [".listFields"] [] = "Contract_end";
$tdatacustomer_header [".listFields"] [] = "Recovery_Center";
$tdatacustomer_header [".listFields"] [] = "Total_MRR";
$tdatacustomer_header [".listFields"] [] = "MRP_MRR";
$tdatacustomer_header [".listFields"] [] = "ARS_MRR";
$tdatacustomer_header [".listFields"] [] = "RS_MRR";
$tdatacustomer_header [".listFields"] [] = "MS_MRR";
$tdatacustomer_header [".listFields"] [] = "CS_MRR";
$tdatacustomer_header [".listFields"] [] = "OTHER_MRR";

$tdatacustomer_header [".hideMobileList"] = array ();

$tdatacustomer_header [".viewFields"] = array ();

$tdatacustomer_header [".addFields"] = array ();
$tdatacustomer_header [".addFields"] [] = "OracIeID";
$tdatacustomer_header [".addFields"] [] = "Name";
$tdatacustomer_header [".addFields"] [] = "PrimaryTimeZone";
$tdatacustomer_header [".addFields"] [] = "Size";
$tdatacustomer_header [".addFields"] [] = "Onshore Support";
$tdatacustomer_header [".addFields"] [] = "Stage";
$tdatacustomer_header [".addFields"] [] = "Overall_Temp";
$tdatacustomer_header [".addFields"] [] = "Engagement_status";
$tdatacustomer_header [".addFields"] [] = "Contract_Start";
$tdatacustomer_header [".addFields"] [] = "SteadyState";
$tdatacustomer_header [".addFields"] [] = "Contract_end";
$tdatacustomer_header [".addFields"] [] = "Recovery_Center";
$tdatacustomer_header [".addFields"] [] = "Total_MRR";
$tdatacustomer_header [".addFields"] [] = "MRP_MRR";
$tdatacustomer_header [".addFields"] [] = "ARS_MRR";
$tdatacustomer_header [".addFields"] [] = "RS_MRR";
$tdatacustomer_header [".addFields"] [] = "MS_MRR";
$tdatacustomer_header [".addFields"] [] = "CS_MRR";
$tdatacustomer_header [".addFields"] [] = "OTHER_MRR";
$tdatacustomer_header [".addFields"] [] = "Comments";
$tdatacustomer_header [".addFields"] [] = "Address";
$tdatacustomer_header [".addFields"] [] = "TransStartDate";
$tdatacustomer_header [".addFields"] [] = "TransEndDate";
$tdatacustomer_header [".addFields"] [] = "RSAName";
$tdatacustomer_header [".addFields"] [] = "Supervisor";
$tdatacustomer_header [".addFields"] [] = "TAM";
$tdatacustomer_header [".addFields"] [] = "SME";

$tdatacustomer_header [".masterListFields"] = array ();
$tdatacustomer_header [".masterListFields"] [] = "Supervisor";
$tdatacustomer_header [".masterListFields"] [] = "TAM";
$tdatacustomer_header [".masterListFields"] [] = "SME";
$tdatacustomer_header [".masterListFields"] [] = "RSAName";
$tdatacustomer_header [".masterListFields"] [] = "OracIeID";
$tdatacustomer_header [".masterListFields"] [] = "Name";
$tdatacustomer_header [".masterListFields"] [] = "PrimaryTimeZone";
$tdatacustomer_header [".masterListFields"] [] = "Size";
$tdatacustomer_header [".masterListFields"] [] = "Onshore Support";
$tdatacustomer_header [".masterListFields"] [] = "Stage";
$tdatacustomer_header [".masterListFields"] [] = "Overall_Temp";
$tdatacustomer_header [".masterListFields"] [] = "Temperature";
$tdatacustomer_header [".masterListFields"] [] = "Engagement_status";
$tdatacustomer_header [".masterListFields"] [] = "Contract_Start";
$tdatacustomer_header [".masterListFields"] [] = "SteadyState";
$tdatacustomer_header [".masterListFields"] [] = "Contract_end";
$tdatacustomer_header [".masterListFields"] [] = "Recovery_Center";
$tdatacustomer_header [".masterListFields"] [] = "Total_MRR";
$tdatacustomer_header [".masterListFields"] [] = "MRP_MRR";
$tdatacustomer_header [".masterListFields"] [] = "ARS_MRR";
$tdatacustomer_header [".masterListFields"] [] = "RS_MRR";
$tdatacustomer_header [".masterListFields"] [] = "MS_MRR";
$tdatacustomer_header [".masterListFields"] [] = "CS_MRR";
$tdatacustomer_header [".masterListFields"] [] = "OTHER_MRR";
$tdatacustomer_header [".masterListFields"] [] = "Comments";
$tdatacustomer_header [".masterListFields"] [] = "TransStartDate";
$tdatacustomer_header [".masterListFields"] [] = "TransEndDate";

$tdatacustomer_header [".inlineAddFields"] = array ();

$tdatacustomer_header [".editFields"] = array ();
$tdatacustomer_header [".editFields"] [] = "OracIeID";
$tdatacustomer_header [".editFields"] [] = "Name";
$tdatacustomer_header [".editFields"] [] = "PrimaryTimeZone";
$tdatacustomer_header [".editFields"] [] = "Size";
$tdatacustomer_header [".editFields"] [] = "Onshore Support";
$tdatacustomer_header [".editFields"] [] = "Stage";
$tdatacustomer_header [".editFields"] [] = "Overall_Temp";
$tdatacustomer_header [".editFields"] [] = "Engagement_status";
$tdatacustomer_header [".editFields"] [] = "Contract_Start";
$tdatacustomer_header [".editFields"] [] = "SteadyState";
$tdatacustomer_header [".editFields"] [] = "Contract_end";
$tdatacustomer_header [".editFields"] [] = "Recovery_Center";
$tdatacustomer_header [".editFields"] [] = "Total_MRR";
$tdatacustomer_header [".editFields"] [] = "MRP_MRR";
$tdatacustomer_header [".editFields"] [] = "ARS_MRR";
$tdatacustomer_header [".editFields"] [] = "RS_MRR";
$tdatacustomer_header [".editFields"] [] = "MS_MRR";
$tdatacustomer_header [".editFields"] [] = "CS_MRR";
$tdatacustomer_header [".editFields"] [] = "OTHER_MRR";
$tdatacustomer_header [".editFields"] [] = "Comments";
$tdatacustomer_header [".editFields"] [] = "Address";
$tdatacustomer_header [".editFields"] [] = "TransStartDate";
$tdatacustomer_header [".editFields"] [] = "TransEndDate";
$tdatacustomer_header [".editFields"] [] = "RSAName";
$tdatacustomer_header [".editFields"] [] = "Supervisor";
$tdatacustomer_header [".editFields"] [] = "TAM";
$tdatacustomer_header [".editFields"] [] = "SME";

$tdatacustomer_header [".inlineEditFields"] = array ();

$tdatacustomer_header [".exportFields"] = array ();
$tdatacustomer_header [".exportFields"] [] = "Supervisor";
$tdatacustomer_header [".exportFields"] [] = "TAM";
$tdatacustomer_header [".exportFields"] [] = "SME";
$tdatacustomer_header [".exportFields"] [] = "RSAName";
$tdatacustomer_header [".exportFields"] [] = "OracIeID";
$tdatacustomer_header [".exportFields"] [] = "Name";
$tdatacustomer_header [".exportFields"] [] = "PrimaryTimeZone";
$tdatacustomer_header [".exportFields"] [] = "Size";
$tdatacustomer_header [".exportFields"] [] = "Onshore Support";
$tdatacustomer_header [".exportFields"] [] = "Stage";
$tdatacustomer_header [".exportFields"] [] = "Overall_Temp";
$tdatacustomer_header [".exportFields"] [] = "Engagement_status";
$tdatacustomer_header [".exportFields"] [] = "Contract_Start";
$tdatacustomer_header [".exportFields"] [] = "SteadyState";
$tdatacustomer_header [".exportFields"] [] = "Contract_end";
$tdatacustomer_header [".exportFields"] [] = "Recovery_Center";
$tdatacustomer_header [".exportFields"] [] = "Total_MRR";
$tdatacustomer_header [".exportFields"] [] = "MRP_MRR";
$tdatacustomer_header [".exportFields"] [] = "ARS_MRR";
$tdatacustomer_header [".exportFields"] [] = "RS_MRR";
$tdatacustomer_header [".exportFields"] [] = "MS_MRR";
$tdatacustomer_header [".exportFields"] [] = "CS_MRR";
$tdatacustomer_header [".exportFields"] [] = "OTHER_MRR";
$tdatacustomer_header [".exportFields"] [] = "Comments";
$tdatacustomer_header [".exportFields"] [] = "TransStartDate";
$tdatacustomer_header [".exportFields"] [] = "TransEndDate";

$tdatacustomer_header [".importFields"] = array ();

$tdatacustomer_header [".importFields"] [] = "OracIeID";
$tdatacustomer_header [".importFields"] [] = "Name";
$tdatacustomer_header [".importFields"] [] = "Contract_Status";
$tdatacustomer_header [".importFields"] [] = "Size";
$tdatacustomer_header [".importFields"] [] = "Stage";
$tdatacustomer_header [".importFields"] [] = "Temperature";
$tdatacustomer_header [".importFields"] [] = "Sales_SVP";
$tdatacustomer_header [".importFields"] [] = "Contract_Start";
$tdatacustomer_header [".importFields"] [] = "SteadyState";
$tdatacustomer_header [".importFields"] [] = "Contract_end";
$tdatacustomer_header [".importFields"] [] = "Recovery_Center";
$tdatacustomer_header [".importFields"] [] = "Total_MRR";
$tdatacustomer_header [".importFields"] [] = "MRP_MRR";
$tdatacustomer_header [".importFields"] [] = "ARS_MRR";
$tdatacustomer_header [".importFields"] [] = "RS_MRR";
$tdatacustomer_header [".importFields"] [] = "MS_MRR";
$tdatacustomer_header [".importFields"] [] = "CS_MRR";
$tdatacustomer_header [".importFields"] [] = "OTHER_MRR";
$tdatacustomer_header [".importFields"] [] = "SME";
$tdatacustomer_header [".importFields"] [] = "RSAName";
$tdatacustomer_header [".importFields"] [] = "Overall_Temp";
$tdatacustomer_header [".importFields"] [] = "Engagement_status";
$tdatacustomer_header [".importFields"] [] = "Comments";
$tdatacustomer_header [".importFields"] [] = "PrimaryTimeZone";
$tdatacustomer_header [".importFields"] [] = "Onshore Support";
$tdatacustomer_header [".importFields"] [] = "TransStartDate";
$tdatacustomer_header [".importFields"] [] = "TransEndDate";
$tdatacustomer_header [".importFields"] [] = "Supervisor";
$tdatacustomer_header [".importFields"] [] = "TAM";

$tdatacustomer_header [".printFields"] = array ();
$tdatacustomer_header [".printFields"] [] = "EmployeeID";
$tdatacustomer_header [".printFields"] [] = "OracIeID";
$tdatacustomer_header [".printFields"] [] = "Compre_String";
$tdatacustomer_header [".printFields"] [] = "Name";
$tdatacustomer_header [".printFields"] [] = "PrimaryTimeZone";
$tdatacustomer_header [".printFields"] [] = "Size";
$tdatacustomer_header [".printFields"] [] = "Onshore Support";
$tdatacustomer_header [".printFields"] [] = "Stage";
$tdatacustomer_header [".printFields"] [] = "Overall_Temp";
$tdatacustomer_header [".printFields"] [] = "Temperature";
$tdatacustomer_header [".printFields"] [] = "Engagement_status";
$tdatacustomer_header [".printFields"] [] = "Contract_Start";
$tdatacustomer_header [".printFields"] [] = "SteadyState";
$tdatacustomer_header [".printFields"] [] = "Contract_end";
$tdatacustomer_header [".printFields"] [] = "Recovery_Center";
$tdatacustomer_header [".printFields"] [] = "Total_MRR";
$tdatacustomer_header [".printFields"] [] = "MRP_MRR";
$tdatacustomer_header [".printFields"] [] = "ARS_MRR";
$tdatacustomer_header [".printFields"] [] = "RS_MRR";
$tdatacustomer_header [".printFields"] [] = "MS_MRR";
$tdatacustomer_header [".printFields"] [] = "CS_MRR";
$tdatacustomer_header [".printFields"] [] = "OTHER_MRR";
$tdatacustomer_header [".printFields"] [] = "Created_date";
$tdatacustomer_header [".printFields"] [] = "Comments";
$tdatacustomer_header [".printFields"] [] = "created_by";
$tdatacustomer_header [".printFields"] [] = "Updated_by";
$tdatacustomer_header [".printFields"] [] = "Updated_date";
$tdatacustomer_header [".printFields"] [] = "Address";
$tdatacustomer_header [".printFields"] [] = "TransStartDate";
$tdatacustomer_header [".printFields"] [] = "TransEndDate";

// OracIeID
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 1;
$fdata ["strName"] = "OracIeID";
$fdata ["GoodName"] = "OracIeID";
$fdata ["ownerTable"] = "customer_header";
$fdata ["Label"] = GetFieldLabel ( "customer_header", "OracIeID" );
$fdata ["FieldType"] = 3;
$fdata ["bListPage"] = true;
$fdata ["bAddPage"] = true;
$fdata ["bEditPage"] = true;
$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;
$fdata ["strField"] = "OracIeID";
$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "OracIeID";
$fdata ["FieldPermissions"] = true;
$fdata ["UploadFolder"] = "files";

// Begin View Formats
$fdata ["ViewFormats"] = array ();
$vdata = array (
		"ViewFormat" => "" 
);
$vdata ["NeedEncode"] = true;
$fdata ["ViewFormats"] ["view"] = $vdata;
$vdata = array (
		"ViewFormat" => "" 
);
$vdata ["NeedEncode"] = true;
$fdata ["ViewFormats"] ["list"] = $vdata;
$vdata = array (
		"ViewFormat" => "" 
);
$vdata ["NeedEncode"] = true;
$fdata ["ViewFormats"] ["print"] = $vdata;
$vdata = array (
		"ViewFormat" => "" 
);
$vdata ["NeedEncode"] = true;
$fdata ["ViewFormats"] ["export"] = $vdata;
$vdata = array (
		"ViewFormat" => "" 
);
$vdata ["NeedEncode"] = true;
$fdata ["ViewFormats"] ["masterprint"] = $vdata;
// End View Formats
// Begin Edit Formats
$fdata ["EditFormats"] = array ();
$edata = array (
		"EditFormat" => "Readonly" 
);
$edata ["IsRequired"] = true;
$edata ["acceptFileTypes"] = ".+$";
$edata ["maxNumberOfFiles"] = 1;
$edata ["controlWidth"] = 143;
// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
// End validation
$fdata ["EditFormats"] ["edit"] = $edata;
$edata = array (
		"EditFormat" => "Readonly" 
);
$edata ["IsRequired"] = true;
$edata ["acceptFileTypes"] = ".+$";
$edata ["maxNumberOfFiles"] = 1;
$edata ["controlWidth"] = 143;
// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
// End validation
$fdata ["EditFormats"] ["register"] = $edata;
$edata = array (
		"EditFormat" => "Text field" 
);
$edata ["IsRequired"] = true;
$edata ["acceptFileTypes"] = ".+$";
$edata ["maxNumberOfFiles"] = 1;
$edata ["HTML5InuptType"] = "text";
$edata ["EditParams"] = "";
$edata ["EditParams"] .= " maxlength=9";
$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = getJsValidatorName ( "Number" );
$edata ["validateAs"] ["basicValidate"] [] = "IsRequired";
$edata ["validateAs"] ["basicValidate"] [] = "DenyDuplicated";
$edata ["validateAs"] ["customMessages"] ["DenyDuplicated"] = array (
		"message" => "Value %value% Oracle ID already exists",
		"messageType" => "Text" 
);
// End validation
$edata ["denyDuplicates"] = true;
$fdata ["EditFormats"] ["add"] = $edata;
$edata = array (
		"EditFormat" => "Text field" 
);
$edata ["acceptFileTypes"] = ".+$";
$edata ["maxNumberOfFiles"] = 1;
$edata ["HTML5InuptType"] = "text";
$edata ["EditParams"] = "";
$edata ["EditParams"] .= " maxlength=6";
$edata ["controlWidth"] = 143;
// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = getJsValidatorName ( "Number" );
// End validation
$fdata ["EditFormats"] ["search"] = $edata;
// End Edit Formats
$fdata ["isSeparate"] = true;
// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";
// the end of search options settings
$tdatacustomer_header ["OracIeID"] = $fdata;
// Name
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 2;
$fdata ["strName"] = "Name";
$fdata ["GoodName"] = "Name";
$fdata ["ownerTable"] = "customer_header";
$fdata ["Label"] = GetFieldLabel ( "customer_header", "Name" );
$fdata ["FieldType"] = 200;
$fdata ["bListPage"] = true;
$fdata ["bAddPage"] = true;
$fdata ["bEditPage"] = true;
$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;
$fdata ["strField"] = "Name";
$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Name";
$fdata ["FieldPermissions"] = true;
$fdata ["UploadFolder"] = "files";

// Begin View Formats
$fdata ["ViewFormats"] = array ();
$vdata = array (
		"ViewFormat" => "" 
);
$vdata ["NeedEncode"] = true;
$fdata ["ViewFormats"] ["view"] = $vdata;
$vdata = array (
		"ViewFormat" => "" 
);
$vdata ["NeedEncode"] = true;
$fdata ["ViewFormats"] ["list"] = $vdata;
$vdata = array (
		"ViewFormat" => "" 
);
$vdata ["NeedEncode"] = true;
$fdata ["ViewFormats"] ["print"] = $vdata;
$vdata = array (
		"ViewFormat" => "" 
);
$vdata ["NeedEncode"] = true;
$fdata ["ViewFormats"] ["export"] = $vdata;
$vdata = array (
		"ViewFormat" => "" 
);
$vdata ["NeedEncode"] = true;
$fdata ["ViewFormats"] ["masterprint"] = $vdata;
// End View Formats

// Begin Edit Formats
$fdata ["EditFormats"] = array ();
$edata = array (
		"EditFormat" => "Readonly" 
);
$edata ["acceptFileTypes"] = ".+$";
$edata ["maxNumberOfFiles"] = 1;
$edata ["controlWidth"] = 513;
// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
// End validation
$fdata ["EditFormats"] ["edit"] = $edata;
$edata = array (
		"EditFormat" => "Text field" 
);
$edata ["acceptFileTypes"] = ".+$";
$edata ["maxNumberOfFiles"] = 1;
$edata ["HTML5InuptType"] = "text";
$edata ["EditParams"] = "";
$edata ["EditParams"] .= " maxlength=100";
$edata ["controlWidth"] = 513;
$edata ["IsRequired"] = true;
// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = "IsRequired";
$edata ["validateAs"] ["customMessages"] = array ();
// End validation
$fdata ["EditFormats"] ["register"] = $edata;
$edata = array (
		"EditFormat" => "Text field" 
);
$edata ["acceptFileTypes"] = ".+$";
$edata ["maxNumberOfFiles"] = 1;
$edata ["HTML5InuptType"] = "text";
$edata ["EditParams"] = "";
$edata ["EditParams"] .= " maxlength=100";
$edata ["controlWidth"] = 460;
$edata ["IsRequired"] = true;
// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = "IsRequired";
$edata ["validateAs"] ["customMessages"] = array ();
// End validation
$fdata ["EditFormats"] ["add"] = $edata;
$edata = array (
		"EditFormat" => "Text field" 
);
$edata ["acceptFileTypes"] = ".+$";
$edata ["maxNumberOfFiles"] = 1;
$edata ["HTML5InuptType"] = "text";
$edata ["EditParams"] = "";
$edata ["EditParams"] .= " maxlength=100";
$edata ["controlWidth"] = 513;
// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
// End validation
$fdata ["EditFormats"] ["search"] = $edata;
// End Edit Formats
$fdata ["isSeparate"] = true;
// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";
// the end of search options settings
$tdatacustomer_header ["Name"] = $fdata;
// Size
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 3;
$fdata ["strName"] = "Size";
$fdata ["GoodName"] = "Size";
$fdata ["ownerTable"] = "customer_header";
$fdata ["Label"] = GetFieldLabel ( "customer_header", "Size" );
$fdata ["FieldType"] = 200;
$fdata ["bListPage"] = true;
$fdata ["bAddPage"] = true;
$fdata ["bEditPage"] = true;
$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;
$fdata ["strField"] = "Size";
$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "`Size`";
$fdata ["FieldPermissions"] = true;
$fdata ["UploadFolder"] = "files";
// Begin View Formats
$fdata ["ViewFormats"] = array ();
$vdata = array (
		"ViewFormat" => "" 
);
$vdata ["NeedEncode"] = true;
$fdata ["ViewFormats"] ["view"] = $vdata;
$vdata = array (
		"ViewFormat" => "" 
);
$vdata ["NeedEncode"] = true;
$fdata ["ViewFormats"] ["list"] = $vdata;
$vdata = array (
		"ViewFormat" => "" 
);
$vdata ["NeedEncode"] = true;
$fdata ["ViewFormats"] ["print"] = $vdata;
$vdata = array (
		"ViewFormat" => "" 
);
$vdata ["NeedEncode"] = true;
$fdata ["ViewFormats"] ["export"] = $vdata;
$vdata = array (
		"ViewFormat" => "" 
);
$vdata ["NeedEncode"] = true;
$fdata ["ViewFormats"] ["masterprint"] = $vdata;
// End View Formats

// Begin Edit Formats
$fdata ["EditFormats"] = array ();
$edata = array (
		"EditFormat" => "Lookup wizard" 
);
// Begin Lookup settings
$edata ["LookupType"] = 2;
$edata ["LookupTable"] = "size";
$edata ["autoCompleteFieldsOnEdit"] = 0;
$edata ["autoCompleteFields"] = array ();
$edata ["LCType"] = 0;
$edata ["LinkField"] = "SizeID";
$edata ["LinkFieldType"] = 3;
$edata ["DisplayField"] = "Size";
$edata ["LookupOrderBy"] = "SizeID";
$edata ["SimpleAdd"] = true;
$edata ["SelectSize"] = 1;
// End Lookup Settings
$edata ["acceptFileTypes"] = ".+$";
$edata ["maxNumberOfFiles"] = 1;
$edata ["controlWidth"] = 143;
// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
// End validation

$fdata ["EditFormats"] ["add"] = $edata;

$edata = array (
		"EditFormat" => "Lookup wizard"
);
// Begin Lookup settings
$edata ["LookupType"] = 2;
$edata ["LookupTable"] = "size";
$edata ["autoCompleteFieldsOnEdit"] = 0;
$edata ["autoCompleteFields"] = array ();
$edata ["LCType"] = 0;
$edata ["LinkField"] = "SizeID";
$edata ["LinkFieldType"] = 3;
$edata ["DisplayField"] = "Size";
$edata ["LookupOrderBy"] = "SizeID";
$edata ["SimpleAdd"] = true;
$edata ["SelectSize"] = 1;
// End Lookup Settings
$edata ["acceptFileTypes"] = ".+$";
$edata ["maxNumberOfFiles"] = 1;
$edata ["controlWidth"] = 143;
// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
// End validation

$fdata ["EditFormats"] ["edit"] = $edata;

$edata = array (
		"EditFormat" => "Lookup wizard" 
);
// Begin Lookup settings
$edata ["LookupType"] = 2;
$edata ["LookupTable"] = "size";
$edata ["autoCompleteFieldsOnEdit"] = 0;
$edata ["autoCompleteFields"] = array ();
$edata ["LCType"] = 0;
$edata ["LinkField"] = "SizeID";
$edata ["LinkFieldType"] = 3;
$edata ["DisplayField"] = "Size";
$edata ["LookupOrderBy"] = "SizeID";
$edata ["SimpleAdd"] = true;
$edata ["SelectSize"] = 1;
// End Lookup Settings
$edata ["acceptFileTypes"] = ".+$";
$edata ["maxNumberOfFiles"] = 1;
$edata ["controlWidth"] = 143;
// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
// End validation
$fdata ["EditFormats"] ["search"] = $edata;
// End Edit Formats
$fdata ["isSeparate"] = true;
// the field's search options settings
// the end of search options settings
$tdatacustomer_header ["Size"] = $fdata;
// Temperature
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 4;
$fdata ["strName"] = "Temperature";
$fdata ["GoodName"] = "Temperature";
$fdata ["ownerTable"] = "customer_header";
$fdata ["Label"] = GetFieldLabel ( "customer_header", "Temperature" );
$fdata ["FieldType"] = 200;

$fdata ["bPrinterPage"] = true;

$fdata ["strField"] = "Temperature";
$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Temperature";
$fdata ["UploadFolder"] = "files";
// Begin View Formats
$fdata ["ViewFormats"] = array ();
$vdata = array (
		"ViewFormat" => "Custom" 
);
$fdata ["ViewFormats"] ["view"] = $vdata;
$vdata = array (
		"ViewFormat" => "Custom" 
);

$fdata ["ViewFormats"] ["list"] = $vdata;
$vdata = array (
		"ViewFormat" => "Custom" 
);

$fdata ["ViewFormats"] ["print"] = $vdata;
$vdata = array (
		"ViewFormat" => "Custom" 
);

$fdata ["ViewFormats"] ["export"] = $vdata;
$vdata = array (
		"ViewFormat" => "Custom" 
);

$fdata ["ViewFormats"] ["masterprint"] = $vdata;
// End View Formats

// Begin Edit Formats
$fdata ["EditFormats"] = array ();

$edata = array (
		"EditFormat" => "Readonly" 
);

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
$edata = array (
		"EditFormat" => "Readonly" 
);

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

// End validation

$fdata ["EditFormats"] ["register"] = $edata;
$edata = array (
		"EditFormat" => "Lookup wizard" 
);

// Begin Lookup settings
$edata ["LookupType"] = 2;
$edata ["LookupTable"] = "color";
$edata ["autoCompleteFieldsOnEdit"] = 0;
$edata ["autoCompleteFields"] = array ();
$edata ["LCType"] = 0;

$edata ["LinkField"] = "Color";
$edata ["LinkFieldType"] = 200;
$edata ["DisplayField"] = "Color";

$edata ["LookupOrderBy"] = "";

$edata ["SelectSize"] = 1;

// End Lookup Settings
$edata ["acceptFileTypes"] = ".+$";
$edata ["maxNumberOfFiles"] = 1;
$edata ["controlWidth"] = 143;
// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
// End validation

$fdata ["EditFormats"] ["add"] = $edata;
$edata = array (
		"EditFormat" => "Readonly" 
);

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

// End validation

$fdata ["EditFormats"] ["search"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = true;

$tdatacustomer_header ["Temperature"] = $fdata;
// Contract_Start
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 5;
$fdata ["strName"] = "Contract_Start";
$fdata ["GoodName"] = "Contract_Start";
$fdata ["ownerTable"] = "customer_header";
$fdata ["Label"] = GetFieldLabel ( "customer_header", "Contract_Start" );
$fdata ["FieldType"] = 7;
$fdata ["bListPage"] = true;
$fdata ["bAddPage"] = true;
$fdata ["bEditPage"] = true;
$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;
$fdata ["strField"] = "Contract_Start";
$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Contract_Start";
$fdata ["FieldPermissions"] = true;
$fdata ["UploadFolder"] = "files";
// Begin View Formats
$fdata ["ViewFormats"] = array ();
$vdata = array (
		"ViewFormat" => "Short Date" 
);
$vdata ["NeedEncode"] = true;
$fdata ["ViewFormats"] ["view"] = $vdata;
$vdata = array (
		"ViewFormat" => "Short Date" 
);
$vdata ["NeedEncode"] = true;
$fdata ["ViewFormats"] ["list"] = $vdata;
$vdata = array (
		"ViewFormat" => "Short Date" 
);
$vdata ["NeedEncode"] = true;
$fdata ["ViewFormats"] ["print"] = $vdata;
$vdata = array (
		"ViewFormat" => "Short Date" 
);
$vdata ["NeedEncode"] = true;
$fdata ["ViewFormats"] ["export"] = $vdata;
$vdata = array (
		"ViewFormat" => "Short Date" 
);
$vdata ["NeedEncode"] = true;
$fdata ["ViewFormats"] ["masterprint"] = $vdata;
// End View Formats
// Begin Edit Formats
$fdata ["EditFormats"] = array ();
$edata = array (
		"EditFormat" => "Readonly" 
);
$edata ["acceptFileTypes"] = ".+$";
$edata ["maxNumberOfFiles"] = 1;
$edata ["controlWidth"] = 143;
// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
// End validation
$fdata ["EditFormats"] ["edit"] = $edata;
$edata = array (
		"EditFormat" => "Date" 
);
$edata ["acceptFileTypes"] = ".+$";
$edata ["maxNumberOfFiles"] = 1;

$edata ["DateEditType"] = 11;
$edata ["InitialYearFactor"] = 100;
$edata ["LastYearFactor"] = 10;

$edata ["controlWidth"] = 143;
// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = "IsRequired";
// End validation
$fdata ["EditFormats"] ["add"] = $edata;
$edata = array (
		"EditFormat" => "Date" 
);
$edata ["acceptFileTypes"] = ".+$";
$edata ["maxNumberOfFiles"] = 1;
$edata ["DateEditType"] = 11;
$edata ["InitialYearFactor"] = 100;
$edata ["LastYearFactor"] = 10;
$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
// End validation
$fdata ["EditFormats"] ["search"] = $edata;
// End Edit Formats
$fdata ["isSeparate"] = true;
// the field's search options settings
// the end of search options settings
$tdatacustomer_header ["Contract_Start"] = $fdata;
// Contract_end
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 6;
$fdata ["strName"] = "Contract_end";
$fdata ["GoodName"] = "Contract_end";
$fdata ["ownerTable"] = "customer_header";
$fdata ["Label"] = GetFieldLabel ( "customer_header", "Contract_end" );
$fdata ["FieldType"] = 7;
$fdata ["bListPage"] = true;
$fdata ["bAddPage"] = true;
$fdata ["bEditPage"] = true;
$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;
$fdata ["strField"] = "Contract_end";
$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Contract_end";
$fdata ["FieldPermissions"] = true;
$fdata ["UploadFolder"] = "files";
// Begin View Formats
$fdata ["ViewFormats"] = array ();
$vdata = array (
		"ViewFormat" => "Short Date" 
);
$vdata ["NeedEncode"] = true;
$fdata ["ViewFormats"] ["view"] = $vdata;
$vdata = array (
		"ViewFormat" => "Short Date" 
);
$vdata ["NeedEncode"] = true;
$fdata ["ViewFormats"] ["list"] = $vdata;
$vdata = array (
		"ViewFormat" => "Short Date" 
);
$vdata ["NeedEncode"] = true;
$fdata ["ViewFormats"] ["print"] = $vdata;
$vdata = array (
		"ViewFormat" => "Short Date" 
);
$vdata ["NeedEncode"] = true;
$fdata ["ViewFormats"] ["export"] = $vdata;
$vdata = array (
		"ViewFormat" => "Short Date" 
);
$vdata ["NeedEncode"] = true;
$fdata ["ViewFormats"] ["masterprint"] = $vdata;
// End View Formats
// Begin Edit Formats
$fdata ["EditFormats"] = array ();
$edata = array (
		"EditFormat" => "Readonly" 
);
$edata ["acceptFileTypes"] = ".+$";
$edata ["maxNumberOfFiles"] = 1;
$edata ["controlWidth"] = 143;
// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
// End validation
$fdata ["EditFormats"] ["edit"] = $edata;
$edata = array (
		"EditFormat" => "Date" 
);
$edata ["acceptFileTypes"] = ".+$";
$edata ["maxNumberOfFiles"] = 1;

$edata ["DateEditType"] = 11;
$edata ["InitialYearFactor"] = 100;
$edata ["LastYearFactor"] = 10;

$edata ["controlWidth"] = 143;
// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = "IsRequired";
// End validation
$fdata ["EditFormats"] ["add"] = $edata;
$edata = array (
		"EditFormat" => "Date" 
);
$edata ["acceptFileTypes"] = ".+$";
$edata ["maxNumberOfFiles"] = 1;
$edata ["DateEditType"] = 11;
$edata ["InitialYearFactor"] = 100;
$edata ["LastYearFactor"] = 10;
$edata ["controlWidth"] = 143;
// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
// End validation
$fdata ["EditFormats"] ["search"] = $edata;
// End Edit Formats
$fdata ["isSeparate"] = true;
// the field's search options settings
// the end of search options settings
$tdatacustomer_header ["Contract_end"] = $fdata;
// Recovery_Center
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 7;
$fdata ["strName"] = "Recovery_Center";
$fdata ["GoodName"] = "Recovery_Center";
$fdata ["ownerTable"] = "customer_header";
$fdata ["Label"] = GetFieldLabel ( "customer_header", "Recovery_Center" );
$fdata ["FieldType"] = 200;
$fdata ["bListPage"] = true;
$fdata ["bAddPage"] = true;
$fdata ["bEditPage"] = true;
$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;
$fdata ["strField"] = "Recovery_Center";
$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Recovery_Center";
$fdata ["FieldPermissions"] = true;
$fdata ["UploadFolder"] = "files";
// Begin View Formats
$fdata ["ViewFormats"] = array ();
$vdata = array (
		"ViewFormat" => "" 
);
$vdata ["NeedEncode"] = true;
$fdata ["ViewFormats"] ["view"] = $vdata;
$vdata = array (
		"ViewFormat" => "" 
);
$vdata ["NeedEncode"] = true;
$fdata ["ViewFormats"] ["list"] = $vdata;
$vdata = array (
		"ViewFormat" => "" 
);
$vdata ["NeedEncode"] = true;
$fdata ["ViewFormats"] ["print"] = $vdata;
$vdata = array (
		"ViewFormat" => "" 
);
$vdata ["NeedEncode"] = true;
$fdata ["ViewFormats"] ["export"] = $vdata;
$vdata = array (
		"ViewFormat" => "" 
);
$vdata ["NeedEncode"] = true;
$fdata ["ViewFormats"] ["masterprint"] = $vdata;
// End View Formats

// Begin Edit Formats
$fdata ["EditFormats"] = array ();
$edata = array (
		"EditFormat" => "Lookup wizard" 
);

// Begin Lookup settings
$edata ["LookupType"] = 2;
$edata ["LookupTable"] = "tbl_test center";
$edata ["autoCompleteFieldsOnEdit"] = 0;
$edata ["autoCompleteFields"] = array ();
$edata ["LCType"] = 0;

$edata ["LinkField"] = "LocationName";
$edata ["LinkFieldType"] = 200;
$edata ["DisplayField"] = "LocationName";

$edata ["LookupOrderBy"] = "LocationName";

$edata ["SelectSize"] = 1;

// End Lookup Settings

$edata ["acceptFileTypes"] = ".+$";
$edata ["maxNumberOfFiles"] = 1;
$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
// End validation
$fdata ["EditFormats"] ["edit"] = $edata;
$edata = array (
		"EditFormat" => "Readonly" 
);
$edata ["acceptFileTypes"] = ".+$";
$edata ["maxNumberOfFiles"] = 1;
$edata ["controlWidth"] = 143;
// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
// End validation
$fdata ["EditFormats"] ["register"] = $edata;
$edata = array (
		"EditFormat" => "Lookup wizard" 
);

// Begin Lookup settings
$edata ["LookupType"] = 2;
$edata ["LookupTable"] = "tbl_test center";
$edata ["autoCompleteFieldsOnEdit"] = 0;
$edata ["autoCompleteFields"] = array ();
$edata ["LCType"] = 0;

$edata ["LinkField"] = "LocationName";
$edata ["LinkFieldType"] = 200;
$edata ["DisplayField"] = "LocationName";

$edata ["LookupOrderBy"] = "LocationName";

$edata ["SelectSize"] = 1;

// End Lookup Settings

$edata ["acceptFileTypes"] = ".+$";
$edata ["maxNumberOfFiles"] = 1;
$edata ["controlWidth"] = 143;
// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = "IsRequired";
$edata ["validateAs"] ["customMessages"] = array ();
// End validation
$fdata ["EditFormats"] ["add"] = $edata;
$edata = array (
		"EditFormat" => "Lookup wizard" 
);
// Begin Lookup settings
$edata ["LookupType"] = 2;
$edata ["LookupTable"] = "tbl_test center";
$edata ["autoCompleteFieldsOnEdit"] = 0;
$edata ["autoCompleteFields"] = array ();
$edata ["LCType"] = 0;
$edata ["LinkField"] = "LocationName";
$edata ["LinkFieldType"] = 200;
$edata ["DisplayField"] = "LocationName";
$edata ["LookupOrderBy"] = "LocationName";
$edata ["SelectSize"] = 1;
// End Lookup Settings
$edata ["acceptFileTypes"] = ".+$";
$edata ["maxNumberOfFiles"] = 1;
$edata ["controlWidth"] = 143;
// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
// End validation
$fdata ["EditFormats"] ["search"] = $edata;
// End Edit Formats
$fdata ["isSeparate"] = true;
// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";
// the end of search options settings
$tdatacustomer_header ["Recovery_Center"] = $fdata;
// Total_MRR
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 8;
$fdata ["strName"] = "Total_MRR";
$fdata ["GoodName"] = "Total_MRR";
$fdata ["ownerTable"] = "customer_header";
$fdata ["Label"] = GetFieldLabel ( "customer_header", "Total_MRR" );
$fdata ["FieldType"] = 200;
$fdata ["bListPage"] = true;
$fdata ["bAddPage"] = true;
$fdata ["bEditPage"] = true;
$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;
$fdata ["strField"] = "Total_MRR";
$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Total_MRR";
$fdata ["FieldPermissions"] = true;
$fdata ["UploadFolder"] = "files";
// Begin View Formats
$fdata ["ViewFormats"] = array ();
$vdata = array (
		"ViewFormat" => "Currency" 
);
$vdata ["NeedEncode"] = true;
$fdata ["ViewFormats"] ["view"] = $vdata;
$vdata = array (
		"ViewFormat" => "Currency" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["list"] = $vdata;
$vdata = array (
		"ViewFormat" => "Currency" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["print"] = $vdata;
$vdata = array (
		"ViewFormat" => "Currency" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["export"] = $vdata;
$vdata = array (
		"ViewFormat" => "Currency" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["masterprint"] = $vdata;
// End View Formats
// Begin Edit Formats
$fdata ["EditFormats"] = array ();
$edata = array (
		"EditFormat" => "Readonly" 
);
$edata ["acceptFileTypes"] = ".+$";
$edata ["maxNumberOfFiles"] = 1;
$edata ["controlWidth"] = 143;
// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
// End validation
$fdata ["EditFormats"] ["edit"] = $edata;
$edata = array (
		"EditFormat" => "Readonly" 
);

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["HTML5InuptType"] = "number";

$edata ["EditParams"] = "";

$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = getJsValidatorName ( "Number" );

// End validation

$fdata ["EditFormats"] ["add"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = true;

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";
// the end of search options settings
$tdatacustomer_header ["Total_MRR"] = $fdata;
// MRP_MRR
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 9;
$fdata ["strName"] = "MRP_MRR";
$fdata ["GoodName"] = "MRP_MRR";
$fdata ["ownerTable"] = "customer_header";
$fdata ["Label"] = GetFieldLabel ( "customer_header", "MRP_MRR" );
$fdata ["FieldType"] = 200;
$fdata ["bListPage"] = true;
$fdata ["bAddPage"] = true;
$fdata ["bEditPage"] = true;
$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;
$fdata ["strField"] = "MRP_MRR";
$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "MRP_MRR";
$fdata ["FieldPermissions"] = true;
$fdata ["UploadFolder"] = "files";
// Begin View Formats
$fdata ["ViewFormats"] = array ();
$vdata = array (
		"ViewFormat" => "Currency" 
);
$vdata ["NeedEncode"] = true;
$fdata ["ViewFormats"] ["view"] = $vdata;
$vdata = array (
		"ViewFormat" => "Currency" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["list"] = $vdata;
$vdata = array (
		"ViewFormat" => "Currency" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["print"] = $vdata;
$vdata = array (
		"ViewFormat" => "Currency" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["export"] = $vdata;
$vdata = array (
		"ViewFormat" => "Currency" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["masterprint"] = $vdata;
// End View Formats
// Begin Edit Formats
$fdata ["EditFormats"] = array ();
$edata = array (
		"EditFormat" => "Readonly" 
);
$edata ["acceptFileTypes"] = ".+$";
$edata ["maxNumberOfFiles"] = 1;
$edata ["controlWidth"] = 143;
// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
// End validation
$fdata ["EditFormats"] ["edit"] = $edata;
$edata = array (
		"EditFormat" => "Text field" 
);

$edata ["acceptFileTypes"] = ".+$";
$edata ["maxNumberOfFiles"] = 1;

$edata ["HTML5InuptType"] = "number";

$edata ["EditParams"] = "";

$edata ["controlWidth"] = 143;
// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = getJsValidatorName ( "Number" );

// End validation

$fdata ["EditFormats"] ["add"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = true;

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

// the end of search options settings

$tdatacustomer_header ["MRP_MRR"] = $fdata;
// ARS_MRR
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 10;
$fdata ["strName"] = "ARS_MRR";
$fdata ["GoodName"] = "ARS_MRR";
$fdata ["ownerTable"] = "customer_header";
$fdata ["Label"] = GetFieldLabel ( "customer_header", "ARS_MRR" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;
$fdata ["bAddPage"] = true;
$fdata ["bEditPage"] = true;
$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "ARS_MRR";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "ARS_MRR";

$fdata ["FieldPermissions"] = true;
$fdata ["UploadFolder"] = "files";
// Begin View Formats
$fdata ["ViewFormats"] = array ();
$vdata = array (
		"ViewFormat" => "Currency" 
);
$vdata ["NeedEncode"] = true;
$fdata ["ViewFormats"] ["view"] = $vdata;
$vdata = array (
		"ViewFormat" => "Currency" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["list"] = $vdata;
$vdata = array (
		"ViewFormat" => "Currency" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["print"] = $vdata;
$vdata = array (
		"ViewFormat" => "Currency" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["export"] = $vdata;
$vdata = array (
		"ViewFormat" => "Currency" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["masterprint"] = $vdata;
// End View Formats

// Begin Edit Formats
$fdata ["EditFormats"] = array ();
$edata = array (
		"EditFormat" => "Readonly" 
);
$edata ["acceptFileTypes"] = ".+$";
$edata ["maxNumberOfFiles"] = 1;
$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
// End validation
$fdata ["EditFormats"] ["edit"] = $edata;
$edata = array (
		"EditFormat" => "Text field" 
);

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["HTML5InuptType"] = "number";

$edata ["EditParams"] = "";

$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = getJsValidatorName ( "Number" );

// End validation

$fdata ["EditFormats"] ["add"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = true;

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

// the end of search options settings

$tdatacustomer_header ["ARS_MRR"] = $fdata;
// RS_MRR
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 11;
$fdata ["strName"] = "RS_MRR";
$fdata ["GoodName"] = "RS_MRR";
$fdata ["ownerTable"] = "customer_header";
$fdata ["Label"] = GetFieldLabel ( "customer_header", "RS_MRR" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "RS_MRR";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "RS_MRR";

$fdata ["FieldPermissions"] = true;

$fdata ["UploadFolder"] = "files";

// Begin View Formats
$fdata ["ViewFormats"] = array ();

$vdata = array (
		"ViewFormat" => "Currency" 
);
$vdata ["NeedEncode"] = true;
$fdata ["ViewFormats"] ["view"] = $vdata;
$vdata = array (
		"ViewFormat" => "Currency" 
);

$vdata ["NeedEncode"] = true;
$fdata ["ViewFormats"] ["list"] = $vdata;
$vdata = array (
		"ViewFormat" => "Currency" 
);
$vdata ["NeedEncode"] = true;
$fdata ["ViewFormats"] ["print"] = $vdata;
$vdata = array (
		"ViewFormat" => "Currency" 
);
$vdata ["NeedEncode"] = true;
$fdata ["ViewFormats"] ["export"] = $vdata;
$vdata = array (
		"ViewFormat" => "Currency" 
);
$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["masterprint"] = $vdata;
// End View Formats
// Begin Edit Formats
$fdata ["EditFormats"] = array ();
$edata = array (
		"EditFormat" => "Readonly" 
);
$edata ["acceptFileTypes"] = ".+$";
$edata ["maxNumberOfFiles"] = 1;
$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
// End validation
$fdata ["EditFormats"] ["edit"] = $edata;
$edata = array (
		"EditFormat" => "Text field" 
);

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["HTML5InuptType"] = "number";

$edata ["EditParams"] = "";

$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = getJsValidatorName ( "Number" );

// End validation

$fdata ["EditFormats"] ["add"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = true;

// the field's search options settings

// the default search options list
$fdata ["searchOptionsList"] = array (
		"Contains",
		"Equals",
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdatacustomer_header ["RS_MRR"] = $fdata;
// MS_MRR
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 12;
$fdata ["strName"] = "MS_MRR";
$fdata ["GoodName"] = "MS_MRR";
$fdata ["ownerTable"] = "customer_header";
$fdata ["Label"] = GetFieldLabel ( "customer_header", "MS_MRR" );
$fdata ["FieldType"] = 200;
$fdata ["bListPage"] = true;
$fdata ["bAddPage"] = true;
$fdata ["bEditPage"] = true;
$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;
$fdata ["strField"] = "MS_MRR";
$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "MS_MRR";
$fdata ["FieldPermissions"] = true;
$fdata ["UploadFolder"] = "files";

// Begin View Formats
$fdata ["ViewFormats"] = array ();
$vdata = array (
		"ViewFormat" => "Currency" 
);
$vdata ["NeedEncode"] = true;
$fdata ["ViewFormats"] ["view"] = $vdata;
$vdata = array (
		"ViewFormat" => "Currency" 
);

$vdata ["NeedEncode"] = true;
$fdata ["ViewFormats"] ["list"] = $vdata;
$vdata = array (
		"ViewFormat" => "Currency" 
);
$vdata ["NeedEncode"] = true;
$fdata ["ViewFormats"] ["print"] = $vdata;
$vdata = array (
		"ViewFormat" => "Currency" 
);
$vdata ["NeedEncode"] = true;
$fdata ["ViewFormats"] ["export"] = $vdata;
$vdata = array (
		"ViewFormat" => "Currency" 
);
$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["masterprint"] = $vdata;
// End View Formats

// Begin Edit Formats
$fdata ["EditFormats"] = array ();
$edata = array (
		"EditFormat" => "Readonly" 
);
$edata ["acceptFileTypes"] = ".+$";
$edata ["maxNumberOfFiles"] = 1;
$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
// End validation
$fdata ["EditFormats"] ["edit"] = $edata;
$edata = array (
		"EditFormat" => "Text field" 
);

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["HTML5InuptType"] = "number";

$edata ["EditParams"] = "";

$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = getJsValidatorName ( "Number" );

// End validation

$fdata ["EditFormats"] ["add"] = $edata;

// End Edit Formats
$fdata ["isSeparate"] = true;
// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";
// the end of search options settings
$tdatacustomer_header ["MS_MRR"] = $fdata;
// CS_MRR
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 13;
$fdata ["strName"] = "CS_MRR";
$fdata ["GoodName"] = "CS_MRR";
$fdata ["ownerTable"] = "customer_header";
$fdata ["Label"] = GetFieldLabel ( "customer_header", "CS_MRR" );
$fdata ["FieldType"] = 200;
$fdata ["bListPage"] = true;
$fdata ["bAddPage"] = true;
$fdata ["bEditPage"] = true;
$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;
$fdata ["strField"] = "CS_MRR";
$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "CS_MRR";
$fdata ["FieldPermissions"] = true;
$fdata ["UploadFolder"] = "files";
// Begin View Formats
$fdata ["ViewFormats"] = array ();
$vdata = array (
		"ViewFormat" => "Currency" 
);
$vdata ["NeedEncode"] = true;
$fdata ["ViewFormats"] ["view"] = $vdata;
$vdata = array (
		"ViewFormat" => "Currency" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["list"] = $vdata;
$vdata = array (
		"ViewFormat" => "Currency" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["print"] = $vdata;
$vdata = array (
		"ViewFormat" => "Currency" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["export"] = $vdata;
$vdata = array (
		"ViewFormat" => "Currency" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["masterprint"] = $vdata;
// End View Formats

// Begin Edit Formats
$fdata ["EditFormats"] = array ();
$edata = array (
		"EditFormat" => "Readonly" 
);
$edata ["acceptFileTypes"] = ".+$";
$edata ["maxNumberOfFiles"] = 1;
$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
// End validation
$fdata ["EditFormats"] ["edit"] = $edata;
$edata = array (
		"EditFormat" => "Text field" 
);
$edata ["acceptFileTypes"] = ".+$";
$edata ["maxNumberOfFiles"] = 1;
$edata ["HTML5InuptType"] = "number";
$edata ["EditParams"] = "";
$edata ["controlWidth"] = 143;
// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = getJsValidatorName ( "Number" );
// End validation
$fdata ["EditFormats"] ["add"] = $edata;
// End Edit Formats
$fdata ["isSeparate"] = true;
// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";
// the end of search options settings
$tdatacustomer_header ["CS_MRR"] = $fdata;
// OTHER_MRR
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 14;
$fdata ["strName"] = "OTHER_MRR";
$fdata ["GoodName"] = "OTHER_MRR";
$fdata ["ownerTable"] = "customer_header";
$fdata ["Label"] = GetFieldLabel ( "customer_header", "OTHER_MRR" );
$fdata ["FieldType"] = 200;
$fdata ["bListPage"] = true;
$fdata ["bAddPage"] = true;
$fdata ["bEditPage"] = true;
$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;
$fdata ["strField"] = "OTHER_MRR";
$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "OTHER_MRR";
$fdata ["FieldPermissions"] = true;
$fdata ["UploadFolder"] = "files";

// Begin View Formats
$fdata ["ViewFormats"] = array ();
$vdata = array (
		"ViewFormat" => "Currency" 
);
$vdata ["NeedEncode"] = true;
$fdata ["ViewFormats"] ["view"] = $vdata;
$vdata = array (
		"ViewFormat" => "Currency" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["list"] = $vdata;
$vdata = array (
		"ViewFormat" => "Currency" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["print"] = $vdata;
$vdata = array (
		"ViewFormat" => "Currency" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["export"] = $vdata;
$vdata = array (
		"ViewFormat" => "Currency" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["masterprint"] = $vdata;
// End View Formats
// Begin Edit Formats
$fdata ["EditFormats"] = array ();
$edata = array (
		"EditFormat" => "Readonly" 
);
$edata ["acceptFileTypes"] = ".+$";
$edata ["maxNumberOfFiles"] = 1;
$edata ["controlWidth"] = 143;
// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
// End validation
$fdata ["EditFormats"] ["edit"] = $edata;
$edata = array (
		"EditFormat" => "Text field" 
);
$edata ["acceptFileTypes"] = ".+$";
$edata ["maxNumberOfFiles"] = 1;
$edata ["HTML5InuptType"] = "number";
$edata ["EditParams"] = "";
$edata ["controlWidth"] = 143;
// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = getJsValidatorName ( "Number" );
// End validation
$fdata ["EditFormats"] ["add"] = $edata;
// End Edit Formats
$fdata ["isSeparate"] = true;
// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";
// the end of search options settings
$tdatacustomer_header ["OTHER_MRR"] = $fdata;
// Engagement_status
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 15;
$fdata ["strName"] = "Engagement_status";
$fdata ["GoodName"] = "Engagement_status";
$fdata ["ownerTable"] = "customer_header";
$fdata ["Label"] = GetFieldLabel ( "customer_header", "Engagement_status" );
$fdata ["FieldType"] = 200;
$fdata ["bListPage"] = true;
$fdata ["bAddPage"] = true;
$fdata ["bEditPage"] = true;
$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;
$fdata ["strField"] = "Engagement_status";
$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Engagement_status";
$fdata ["FieldPermissions"] = true;
$fdata ["UploadFolder"] = "files";
// Begin View Formats
$fdata ["ViewFormats"] = array ();
$vdata = array (
		"ViewFormat" => "" 
);
$vdata ["NeedEncode"] = true;
$fdata ["ViewFormats"] ["view"] = $vdata;
$vdata = array (
		"ViewFormat" => "" 
);
$vdata ["NeedEncode"] = true;
$fdata ["ViewFormats"] ["list"] = $vdata;
$vdata = array (
		"ViewFormat" => "" 
);
$vdata ["NeedEncode"] = true;
$fdata ["ViewFormats"] ["print"] = $vdata;
$vdata = array (
		"ViewFormat" => "" 
);
$vdata ["NeedEncode"] = true;
$fdata ["ViewFormats"] ["export"] = $vdata;
$vdata = array (
		"ViewFormat" => "" 
);
$vdata ["NeedEncode"] = true;
$fdata ["ViewFormats"] ["masterprint"] = $vdata;
// End View Formats

// Begin Edit Formats
$fdata ["EditFormats"] = array ();

$edata = array (
		"EditFormat" => "Lookup wizard" 
);

// Begin Lookup settings
$edata ["LookupType"] = 1;
$edata ["LookupTable"] = "engagementstat";
$edata ["LookupConnId"] = "Tables";
$edata ["autoCompleteFieldsOnEdit"] = 0;
$edata ["autoCompleteFields"] = array ();
$edata ["LCType"] = 0;

$edata ["LinkField"] = "EngagementStatus";
$edata ["LinkFieldType"] = 200;
$edata ["DisplayField"] = "EngagementStatus";

$edata ["LookupOrderBy"] = "EngagementStatus";

$edata ["SimpleAdd"] = true;

$edata ["SelectSize"] = 1;

// End Lookup Settings

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
$edata = array (
		"EditFormat" => "Lookup wizard" 
);

// Begin Lookup settings
$edata ["LookupType"] = 1;
$edata ["LookupTable"] = "engagementstat";
$edata ["LookupConnId"] = "Tables";
$edata ["autoCompleteFieldsOnEdit"] = 0;
$edata ["autoCompleteFields"] = array ();
$edata ["LCType"] = 0;

$edata ["LinkField"] = "EngagementStatus";
$edata ["LinkFieldType"] = 200;
$edata ["DisplayField"] = "EngagementStatus";

$edata ["LookupOrderBy"] = "EngagementStatus";

$edata ["SimpleAdd"] = true;

$edata ["SelectSize"] = 1;

// End Lookup Settings

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

// End validation

$fdata ["EditFormats"] ["register"] = $edata;
$edata = array (
		"EditFormat" => "Readonly" 
);

// Begin Lookup settings
$edata ["LookupType"] = 1;
$edata ["LookupTable"] = "engagementstat";
$edata ["LookupConnId"] = "Tables";
$edata ["autoCompleteFieldsOnEdit"] = 0;
$edata ["autoCompleteFields"] = array ();
$edata ["LCType"] = 0;

$edata ["LinkField"] = "EngagementStatus";
$edata ["LinkFieldType"] = 200;
$edata ["DisplayField"] = "EngagementStatus";

$edata ["LookupOrderBy"] = "EngagementStatus";

$edata ["SimpleAdd"] = true;

$edata ["SelectSize"] = 1;

// End Lookup Settings

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

// End validation

$fdata ["EditFormats"] ["add"] = $edata;
$edata = array (
		"EditFormat" => "Lookup wizard" 
);

// Begin Lookup settings
$edata ["LookupType"] = 1;
$edata ["LookupTable"] = "engagementstat";
$edata ["LookupConnId"] = "Tables";
$edata ["autoCompleteFieldsOnEdit"] = 0;
$edata ["autoCompleteFields"] = array ();
$edata ["LCType"] = 0;

$edata ["LinkField"] = "EngagementStatus";
$edata ["LinkFieldType"] = 200;
$edata ["DisplayField"] = "EngagementStatus";

$edata ["LookupOrderBy"] = "EngagementStatus";

$edata ["SimpleAdd"] = true;

$edata ["SelectSize"] = 1;

// End Lookup Settings

$edata ["acceptFileTypes"] = ".+$";
$edata ["maxNumberOfFiles"] = 1;
$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
// End validation

$fdata ["EditFormats"] ["register"] = $edata;
$edata = array (
		"EditFormat" => "Readonly" 
);

// Begin Lookup settings
$edata ["LookupType"] = 1;
$edata ["LookupTable"] = "engagementstat";
$edata ["LookupConnId"] = "Tables";
$edata ["autoCompleteFieldsOnEdit"] = 0;
$edata ["autoCompleteFields"] = array ();
$edata ["LCType"] = 0;

$edata ["LinkField"] = "EngagementStatus";
$edata ["LinkFieldType"] = 200;
$edata ["DisplayField"] = "EngagementStatus";

$edata ["LookupOrderBy"] = "EngagementStatus";

$edata ["SimpleAdd"] = true;

$edata ["SelectSize"] = 1;

// End Lookup Settings

$edata ["acceptFileTypes"] = ".+$";
$edata ["maxNumberOfFiles"] = 1;
$edata ["controlWidth"] = 143;
// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
// End validation

$fdata ["EditFormats"] ["add"] = $edata;
$edata = array (
		"EditFormat" => "Lookup wizard" 
);

// Begin Lookup settings
$edata ["LookupType"] = 1;
$edata ["LookupTable"] = "engagementstat";
$edata ["LookupConnId"] = "Tables";
$edata ["autoCompleteFieldsOnEdit"] = 0;
$edata ["autoCompleteFields"] = array ();
$edata ["LCType"] = 0;

$edata ["LinkField"] = "EngagementStatus";
$edata ["LinkFieldType"] = 200;
$edata ["DisplayField"] = "EngagementStatus";

$edata ["LookupOrderBy"] = "EngagementStatus";

$edata ["SimpleAdd"] = true;

$edata ["SelectSize"] = 1;

// End Lookup Settings

$edata ["acceptFileTypes"] = ".+$";
$edata ["maxNumberOfFiles"] = 1;
$edata ["controlWidth"] = 143;
// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
// End validation

$fdata ["EditFormats"] ["search"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = true;

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";
// the end of search options settings
$tdatacustomer_header ["Engagement_status"] = $fdata;
// created_by
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 16;
$fdata ["strName"] = "created_by";
$fdata ["GoodName"] = "created_by";
$fdata ["ownerTable"] = "customer_header";
$fdata ["Label"] = GetFieldLabel ( "customer_header", "created_by" );
$fdata ["FieldType"] = 200;

$fdata ["bPrinterPage"] = true;

$fdata ["strField"] = "created_by";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "created_by";

$fdata ["FieldPermissions"] = true;

$fdata ["UploadFolder"] = "files";

// Begin View Formats
$fdata ["ViewFormats"] = array ();

$vdata = array (
		"ViewFormat" => "" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["view"] = $vdata;
$vdata = array (
		"ViewFormat" => "" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["list"] = $vdata;
$vdata = array (
		"ViewFormat" => "" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["print"] = $vdata;
$vdata = array (
		"ViewFormat" => "" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["export"] = $vdata;
$vdata = array (
		"ViewFormat" => "" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["masterprint"] = $vdata;
// End View Formats

// Begin Edit Formats
$fdata ["EditFormats"] = array ();

$edata = array (
		"EditFormat" => "Readonly" 
);

$edata ["acceptFileTypes"] = ".+$";
$edata ["maxNumberOfFiles"] = 1;
$edata ["controlWidth"] = 143;
// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
$edata = array (
		"EditFormat" => "Readonly" 
);

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

// End validation

$fdata ["EditFormats"] ["register"] = $edata;
$edata = array (
		"EditFormat" => "Readonly" 
);

$edata ["acceptFileTypes"] = ".+$";
$edata ["maxNumberOfFiles"] = 1;
$edata ["controlWidth"] = 143;
// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
// End validation

$fdata ["EditFormats"] ["add"] = $edata;
$edata = array (
		"EditFormat" => "Readonly" 
);
$edata ["acceptFileTypes"] = ".+$";
$edata ["maxNumberOfFiles"] = 1;
$edata ["controlWidth"] = 143;
// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
// End validation

$fdata ["EditFormats"] ["search"] = $edata;
// End Edit Formats
$fdata ["isSeparate"] = false;
$tdatacustomer_header ["created_by"] = $fdata;
// Compre_String
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 17;
$fdata ["strName"] = "Compre_String";
$fdata ["GoodName"] = "Compre_String";
$fdata ["ownerTable"] = "";
$fdata ["Label"] = GetFieldLabel ( "customer_header", "Compre_String" );
$fdata ["FieldType"] = 200;

$fdata ["bPrinterPage"] = true;

$fdata ["strField"] = "Compre_String";
$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "concat(`Size`, '-', `Stage`)";

$fdata ["FieldPermissions"] = true;

$fdata ["UploadFolder"] = "files";
// Begin View Formats
$fdata ["ViewFormats"] = array ();
$vdata = array (
		"ViewFormat" => "" 
);
$vdata ["NeedEncode"] = true;
$fdata ["ViewFormats"] ["view"] = $vdata;
// End View Formats
// Begin Edit Formats
$fdata ["EditFormats"] = array ();
$edata = array (
		"EditFormat" => "Text field" 
);
$edata ["acceptFileTypes"] = ".+$";
$edata ["maxNumberOfFiles"] = 1;
$edata ["HTML5InuptType"] = "text";
$edata ["EditParams"] = "";
$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
// End validation
$fdata ["EditFormats"] ["edit"] = $edata;
// End Edit Formats
$fdata ["isSeparate"] = false;
$tdatacustomer_header ["Compre_String"] = $fdata;
// Created_date
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 18;
$fdata ["strName"] = "Created_date";
$fdata ["GoodName"] = "Created_date";
$fdata ["ownerTable"] = "customer_header";
$fdata ["Label"] = GetFieldLabel ( "customer_header", "Created_date" );
$fdata ["FieldType"] = 135;

$fdata ["bPrinterPage"] = true;

$fdata ["strField"] = "Created_date";
$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Created_date";

$fdata ["FieldPermissions"] = true;

$fdata ["UploadFolder"] = "files";
// Begin View Formats
$fdata ["ViewFormats"] = array ();
$vdata = array (
		"ViewFormat" => "Datetime" 
);
$vdata ["NeedEncode"] = true;
$fdata ["ViewFormats"] ["view"] = $vdata;
$vdata = array (
		"ViewFormat" => "Datetime" 
);
$vdata ["NeedEncode"] = true;
$fdata ["ViewFormats"] ["list"] = $vdata;
$vdata = array (
		"ViewFormat" => "Datetime" 
);
$vdata ["NeedEncode"] = true;
$fdata ["ViewFormats"] ["print"] = $vdata;
$vdata = array (
		"ViewFormat" => "Datetime" 
);
$vdata ["NeedEncode"] = true;
$fdata ["ViewFormats"] ["export"] = $vdata;
// End View Formats
// Begin Edit Formats
$fdata ["EditFormats"] = array ();
$edata = array (
		"EditFormat" => "Readonly" 
);
$edata ["acceptFileTypes"] = ".+$";
$edata ["maxNumberOfFiles"] = 1;
$edata ["controlWidth"] = 143;
// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
// End validation
$fdata ["EditFormats"] ["edit"] = $edata;
$edata = array (
		"EditFormat" => "Readonly" 
);
$edata ["acceptFileTypes"] = ".+$";
$edata ["maxNumberOfFiles"] = 1;
$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
// End validation
$fdata ["EditFormats"] ["register"] = $edata;
$edata = array (
		"EditFormat" => "Readonly" 
);
$edata ["acceptFileTypes"] = ".+$";
$edata ["maxNumberOfFiles"] = 1;
$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
// End validation
$fdata ["EditFormats"] ["add"] = $edata;
$edata = array (
		"EditFormat" => "Readonly" 
);
$edata ["acceptFileTypes"] = ".+$";
$edata ["maxNumberOfFiles"] = 1;
$edata ["controlWidth"] = 143;
// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
// End validation
$fdata ["EditFormats"] ["search"] = $edata;
// End Edit Formats
$fdata ["isSeparate"] = true;
$tdatacustomer_header ["Created_date"] = $fdata;
// Updated_by
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 19;
$fdata ["strName"] = "Updated_by";
$fdata ["GoodName"] = "Updated_by";
$fdata ["ownerTable"] = "customer_header";
$fdata ["Label"] = GetFieldLabel ( "customer_header", "Updated_by" );
$fdata ["FieldType"] = 200;

$fdata ["bPrinterPage"] = true;

$fdata ["strField"] = "Updated_by";
$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Updated_by";

$fdata ["FieldPermissions"] = true;

$fdata ["UploadFolder"] = "files";
// Begin View Formats
$fdata ["ViewFormats"] = array ();
$vdata = array (
		"ViewFormat" => "" 
);
$vdata ["NeedEncode"] = true;
$fdata ["ViewFormats"] ["view"] = $vdata;
$vdata = array (
		"ViewFormat" => "" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["list"] = $vdata;
$vdata = array (
		"ViewFormat" => "" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["print"] = $vdata;
$vdata = array (
		"ViewFormat" => "" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["export"] = $vdata;
$vdata = array (
		"ViewFormat" => "" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["masterprint"] = $vdata;
// End View Formats

// Begin Edit Formats
$fdata ["EditFormats"] = array ();
$edata = array (
		"EditFormat" => "Readonly" 
);
$edata ["acceptFileTypes"] = ".+$";
$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

$edata ["autoUpdatable"] = true;

// End validation
$fdata ["EditFormats"] ["edit"] = $edata;
$edata = array (
		"EditFormat" => "Readonly" 
);

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

$edata ["autoUpdatable"] = true;

// End validation

$fdata ["EditFormats"] ["register"] = $edata;
$edata = array (
		"EditFormat" => "Readonly" 
);

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

$edata ["autoUpdatable"] = true;

// End validation

$fdata ["EditFormats"] ["add"] = $edata;
$edata = array (
		"EditFormat" => "Readonly" 
);

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

$edata ["autoUpdatable"] = true;

// End validation

$fdata ["EditFormats"] ["search"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = true;

$tdatacustomer_header ["Updated_by"] = $fdata;
// Updated_date
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 20;
$fdata ["strName"] = "Updated_date";
$fdata ["GoodName"] = "Updated_date";
$fdata ["ownerTable"] = "customer_header";
$fdata ["Label"] = GetFieldLabel ( "customer_header", "Updated_date" );
$fdata ["FieldType"] = 135;

$fdata ["bPrinterPage"] = true;

$fdata ["strField"] = "Updated_date";
$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Updated_date";

$fdata ["FieldPermissions"] = true;

$fdata ["UploadFolder"] = "files";

// Begin View Formats
$fdata ["ViewFormats"] = array ();
$vdata = array (
		"ViewFormat" => "Datetime" 
);
$vdata ["NeedEncode"] = true;
$fdata ["ViewFormats"] ["view"] = $vdata;
$vdata = array (
		"ViewFormat" => "Datetime" 
);
$vdata ["NeedEncode"] = true;
$fdata ["ViewFormats"] ["list"] = $vdata;
$vdata = array (
		"ViewFormat" => "Datetime" 
);
$vdata ["NeedEncode"] = true;
$fdata ["ViewFormats"] ["print"] = $vdata;
$vdata = array (
		"ViewFormat" => "Datetime" 
);
$vdata ["NeedEncode"] = true;
$fdata ["ViewFormats"] ["export"] = $vdata;
// End View Formats

// Begin Edit Formats
$fdata ["EditFormats"] = array ();
$edata = array (
		"EditFormat" => "Readonly" 
);
$edata ["acceptFileTypes"] = ".+$";
$edata ["maxNumberOfFiles"] = 1;
$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

$edata ["autoUpdatable"] = true;

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
$edata = array (
		"EditFormat" => "Readonly" 
);
$edata ["acceptFileTypes"] = ".+$";
$edata ["maxNumberOfFiles"] = 1;
$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
// End validation
$fdata ["EditFormats"] ["register"] = $edata;
$edata = array (
		"EditFormat" => "Readonly" 
);
$edata ["acceptFileTypes"] = ".+$";
$edata ["maxNumberOfFiles"] = 1;
$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
// End validation
$fdata ["EditFormats"] ["add"] = $edata;
$edata = array (
		"EditFormat" => "Readonly" 
);
$edata ["acceptFileTypes"] = ".+$";
$edata ["maxNumberOfFiles"] = 1;
$edata ["controlWidth"] = 143;
// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
// End validation
$fdata ["EditFormats"] ["search"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = true;

$tdatacustomer_header ["Updated_date"] = $fdata;
// Comments
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 21;
$fdata ["strName"] = "Comments";
$fdata ["GoodName"] = "Comments";
$fdata ["ownerTable"] = "customer_header";
$fdata ["Label"] = GetFieldLabel ( "customer_header", "Comments" );
$fdata ["FieldType"] = 200;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Comments";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Comments";

$fdata ["FieldPermissions"] = true;

$fdata ["UploadFolder"] = "files";

// Begin View Formats
$fdata ["ViewFormats"] = array ();

$vdata = array (
		"ViewFormat" => "HTML" 
);

$fdata ["ViewFormats"] ["view"] = $vdata;
// End View Formats

// Begin Edit Formats
$fdata ["EditFormats"] = array ();

$edata = array (
		"EditFormat" => "Text area" 
);

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["nRows"] = 157;
$edata ["nCols"] = 520;

$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = false;

$tdatacustomer_header ["Comments"] = $fdata;
// EmployeeID
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 22;
$fdata ["strName"] = "EmployeeID";
$fdata ["GoodName"] = "EmployeeID";
$fdata ["ownerTable"] = "customer_header";
$fdata ["Label"] = GetFieldLabel ( "customer_header", "EmployeeID" );
$fdata ["FieldType"] = 3;

$fdata ["bPrinterPage"] = true;

$fdata ["strField"] = "EmployeeID";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "EmployeeID";

$fdata ["FieldPermissions"] = true;

$fdata ["UploadFolder"] = "files";

// Begin View Formats
$fdata ["ViewFormats"] = array ();

$vdata = array (
		"ViewFormat" => "" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["view"] = $vdata;
// End View Formats

// Begin Edit Formats
$fdata ["EditFormats"] = array ();

$edata = array (
		"EditFormat" => "Text field" 
);

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["HTML5InuptType"] = "text";

$edata ["EditParams"] = "";

$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = getJsValidatorName ( "Number" );

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = false;

$tdatacustomer_header ["EmployeeID"] = $fdata;
// Stage
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 23;
$fdata ["strName"] = "Stage";
$fdata ["GoodName"] = "Stage";
$fdata ["ownerTable"] = "customer_header";
$fdata ["Label"] = GetFieldLabel ( "customer_header", "Stage" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Stage";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Stage";

$fdata ["FieldPermissions"] = true;

$fdata ["UploadFolder"] = "files";

// Begin View Formats
$fdata ["ViewFormats"] = array ();

$vdata = array (
		"ViewFormat" => "" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["view"] = $vdata;
$vdata = array (
		"ViewFormat" => "" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["list"] = $vdata;
$vdata = array (
		"ViewFormat" => "" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["print"] = $vdata;
$vdata = array (
		"ViewFormat" => "" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["export"] = $vdata;
$vdata = array (
		"ViewFormat" => "" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["masterprint"] = $vdata;
// End View Formats

// Begin Edit Formats
$fdata ["EditFormats"] = array ();

$edata = array (
		"EditFormat" => "Lookup wizard" 
);

// Begin Lookup settings
$edata ["LookupType"] = 2;
$edata ["LookupTable"] = "stage";
$edata ["autoCompleteFieldsOnEdit"] = 0;
$edata ["autoCompleteFields"] = array ();
$edata ["LCType"] = 0;

$edata ["LookupUnique"] = true;

$edata ["LinkField"] = "AutstageID";
$edata ["LinkFieldType"] = 0;
$edata ["DisplayField"] = "Stage";

$edata ["LookupOrderBy"] = "Stage";

$edata ["SelectSize"] = 1;

// End Lookup Settings

$edata ["IsRequired"] = true;

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = "IsRequired";

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
$edata = array (
		"EditFormat" => "Lookup wizard" 
);

// Begin Lookup settings
$edata ["LookupType"] = 2;
$edata ["LookupTable"] = "stage";
$edata ["autoCompleteFieldsOnEdit"] = 0;
$edata ["autoCompleteFields"] = array ();
$edata ["LCType"] = 0;

$edata ["LookupUnique"] = true;

$edata ["LinkField"] = "AutstageID";
$edata ["LinkFieldType"] = 0;
$edata ["DisplayField"] = "Stage";

$edata ["LookupOrderBy"] = "Stage";

$edata ["SelectSize"] = 1;

// End Lookup Settings

$edata ["IsRequired"] = true;

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = "IsRequired";

// End validation

$fdata ["EditFormats"] ["register"] = $edata;
$edata = array (
		"EditFormat" => "Readonly" 
);

// Begin Lookup settings
$edata ["LookupType"] = 2;
$edata ["LookupTable"] = "stage";
$edata ["autoCompleteFieldsOnEdit"] = 0;
$edata ["autoCompleteFields"] = array ();
$edata ["LCType"] = 0;

$edata ["LookupUnique"] = true;

$edata ["LinkField"] = "AutstageID";
$edata ["LinkFieldType"] = 0;
$edata ["DisplayField"] = "Stage";

$edata ["LookupOrderBy"] = "Stage";

$edata ["SelectSize"] = 1;

// End Lookup Settings

$edata ["IsRequired"] = true;

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = "IsRequired";

// End validation

$fdata ["EditFormats"] ["add"] = $edata;
$edata = array (
		"EditFormat" => "Lookup wizard" 
);

// Begin Lookup settings
$edata ["LookupType"] = 2;
$edata ["LookupTable"] = "stage";
$edata ["autoCompleteFieldsOnEdit"] = 0;
$edata ["autoCompleteFields"] = array ();
$edata ["LCType"] = 0;

$edata ["LookupUnique"] = true;

$edata ["LinkField"] = "AutstageID";
$edata ["LinkFieldType"] = 0;
$edata ["DisplayField"] = "Stage";

$edata ["LookupOrderBy"] = "Stage";

$edata ["SelectSize"] = 1;

// End Lookup Settings

$edata ["IsRequired"] = true;

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = "IsRequired";

// End validation

$fdata ["EditFormats"] ["search"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = true;

// the field's search options settings

// the end of search options settings

$tdatacustomer_header ["Stage"] = $fdata;
// Overall_Temp
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 24;
$fdata ["strName"] = "Overall_Temp";
$fdata ["GoodName"] = "Overall_Temp";
$fdata ["ownerTable"] = "customer_header";
$fdata ["Label"] = GetFieldLabel ( "customer_header", "Overall_Temp" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Overall_Temp";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Overall_Temp";

$fdata ["FieldPermissions"] = true;

$fdata ["UploadFolder"] = "files";

// Begin View Formats
$fdata ["ViewFormats"] = array ();

$vdata = array (
		"ViewFormat" => "Custom" 
);

$fdata ["ViewFormats"] ["view"] = $vdata;
$vdata = array (
		"ViewFormat" => "Custom" 
);

$fdata ["ViewFormats"] ["list"] = $vdata;
$vdata = array (
		"ViewFormat" => "Custom" 
);

$fdata ["ViewFormats"] ["print"] = $vdata;
$vdata = array (
		"ViewFormat" => "Custom" 
);

$fdata ["ViewFormats"] ["export"] = $vdata;
$vdata = array (
		"ViewFormat" => "Custom" 
);

$fdata ["ViewFormats"] ["masterprint"] = $vdata;
// End View Formats

// Begin Edit Formats
$fdata ["EditFormats"] = array ();

$edata = array (
		"EditFormat" => "Readonly" 
);

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
$edata = array (
		"EditFormat" => "Lookup wizard" 
);

// Begin Lookup settings
$edata ["LookupType"] = 1;
$edata ["LookupTable"] = "color";
$edata ["LookupConnId"] = "Tables";
$edata ["autoCompleteFieldsOnEdit"] = 0;
$edata ["autoCompleteFields"] = array ();
$edata ["LCType"] = 0;

$edata ["LinkField"] = "Color";
$edata ["LinkFieldType"] = 200;
$edata ["DisplayField"] = "Color";

$edata ["LookupOrderBy"] = "";

$edata ["SimpleAdd"] = true;

$edata ["SelectSize"] = 1;

// End Lookup Settings

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

// End validation

$fdata ["EditFormats"] ["register"] = $edata;
$edata = array (
		"EditFormat" => "Readonly" 
);

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

// End validation

$fdata ["EditFormats"] ["add"] = $edata;
$edata = array (
		"EditFormat" => "Lookup wizard" 
);

// Begin Lookup settings
$edata ["LookupType"] = 1;
$edata ["LookupTable"] = "color";
$edata ["LookupConnId"] = "Tables";
$edata ["autoCompleteFieldsOnEdit"] = 0;
$edata ["autoCompleteFields"] = array ();
$edata ["LCType"] = 0;

$edata ["LinkField"] = "Color";
$edata ["LinkFieldType"] = 200;
$edata ["DisplayField"] = "Color";

$edata ["LookupOrderBy"] = "";

$edata ["SimpleAdd"] = true;

$edata ["SelectSize"] = 1;

// End Lookup Settings

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

// End validation

$fdata ["EditFormats"] ["search"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = true;

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

// the end of search options settings

$tdatacustomer_header ["Overall_Temp"] = $fdata;
// Address
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 25;
$fdata ["strName"] = "Address";
$fdata ["GoodName"] = "Address";
$fdata ["ownerTable"] = "customer_header";
$fdata ["Label"] = GetFieldLabel ( "customer_header", "Address" );
$fdata ["FieldType"] = 200;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["strField"] = "Address";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Address";

$fdata ["FieldPermissions"] = true;

$fdata ["UploadFolder"] = "files";

// Begin View Formats
$fdata ["ViewFormats"] = array ();

$vdata = array (
		"ViewFormat" => "" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["view"] = $vdata;
// End View Formats

// Begin Edit Formats
$fdata ["EditFormats"] = array ();

$edata = array (
		"EditFormat" => "Text field" 
);

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["HTML5InuptType"] = "text";

$edata ["EditParams"] = "";
$edata ["EditParams"] .= " maxlength=200";

$edata ["controlWidth"] = 150;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = false;

$tdatacustomer_header ["Address"] = $fdata;
// SteadyState
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 26;
$fdata ["strName"] = "SteadyState";
$fdata ["GoodName"] = "SteadyState";
$fdata ["ownerTable"] = "customer_header";
$fdata ["Label"] = GetFieldLabel ( "customer_header", "SteadyState" );
$fdata ["FieldType"] = 7;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "SteadyState";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "SteadyState";

$fdata ["FieldPermissions"] = true;

$fdata ["UploadFolder"] = "files";

// Begin View Formats
$fdata ["ViewFormats"] = array ();

$vdata = array (
		"ViewFormat" => "Short Date" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["view"] = $vdata;
// End View Formats

// Begin Edit Formats
$fdata ["EditFormats"] = array ();

$edata = array (
		"EditFormat" => "Readonly" 
);

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 140;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = false;

// the field's search options settings

// the default search options list
$fdata ["searchOptionsList"] = array (
		"Equals",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdatacustomer_header ["SteadyState"] = $fdata;
// PrimaryTimeZone
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 27;
$fdata ["strName"] = "PrimaryTimeZone";
$fdata ["GoodName"] = "PrimaryTimeZone";
$fdata ["ownerTable"] = "customer_header";
$fdata ["Label"] = GetFieldLabel ( "customer_header", "PrimaryTimeZone" );
$fdata ["FieldType"] = 200;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "PrimaryTimeZone";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "PrimaryTimeZone";

$fdata ["FieldPermissions"] = true;

$fdata ["UploadFolder"] = "files";

// Begin View Formats
$fdata ["ViewFormats"] = array ();

$vdata = array (
		"ViewFormat" => "" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["view"] = $vdata;
$vdata = array (
		"ViewFormat" => "" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["list"] = $vdata;
$vdata = array (
		"ViewFormat" => "" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["print"] = $vdata;
$vdata = array (
		"ViewFormat" => "" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["export"] = $vdata;
$vdata = array (
		"ViewFormat" => "" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["masterprint"] = $vdata;
// End View Formats

// Begin Edit Formats
$fdata ["EditFormats"] = array ();

$edata = array (
		"EditFormat" => "Lookup wizard" 
);

// Begin Lookup settings
$edata ["LookupType"] = 1;
$edata ["LookupTable"] = "timezone";
$edata ["LookupConnId"] = "Tables";
$edata ["autoCompleteFieldsOnEdit"] = 0;
$edata ["autoCompleteFields"] = array ();
$edata ["LCType"] = 0;

$edata ["LinkField"] = "TimeZone";
$edata ["LinkFieldType"] = 200;
$edata ["DisplayField"] = "TimeZone";

$edata ["LookupOrderBy"] = "AutTimeID";

$edata ["SimpleAdd"] = true;

$edata ["SelectSize"] = 1;

// End Lookup Settings

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 110;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = false;

// the field's search options settings

// the default search options list
$fdata ["searchOptionsList"] = array (
		"Contains",
		"Equals",
		"Empty" 
);
// the end of search options settings

$tdatacustomer_header ["PrimaryTimeZone"] = $fdata;
// Onshore Support
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 28;
$fdata ["strName"] = "Onshore Support";
$fdata ["GoodName"] = "Onshore_Support";
$fdata ["ownerTable"] = "customer_header";
$fdata ["Label"] = GetFieldLabel ( "customer_header", "Onshore_Support" );
$fdata ["FieldType"] = 16;
$fdata ["bListPage"] = true;
$fdata ["bAddPage"] = true;
$fdata ["bEditPage"] = true;
$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;
$fdata ["strField"] = "Onshore Support";
$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "`Onshore Support`";
$fdata ["FieldPermissions"] = true;
$fdata ["UploadFolder"] = "files";
// Begin View Formats
$fdata ["ViewFormats"] = array ();
$vdata = array (
		"ViewFormat" => "Checkbox" 
);

$fdata ["ViewFormats"] ["view"] = $vdata;
$vdata = array (
		"ViewFormat" => "Checkbox" 
);

$fdata ["ViewFormats"] ["list"] = $vdata;
$vdata = array (
		"ViewFormat" => "Checkbox" 
);

$fdata ["ViewFormats"] ["print"] = $vdata;
// End View Formats

// Begin Edit Formats
$fdata ["EditFormats"] = array ();

$edata = array (
		"EditFormat" => "Checkbox" 
);

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 150;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = false;

// the field's search options settings

// the default search options list
$fdata ["searchOptionsList"] = array (
		"Equals",
		"More than",
		"Less than",
		"Between" 
);
// the end of search options settings

$tdatacustomer_header ["Onshore Support"] = $fdata;
// TransStartDate
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 29;
$fdata ["strName"] = "TransStartDate";
$fdata ["GoodName"] = "TransStartDate";
$fdata ["ownerTable"] = "customer_header";
$fdata ["Label"] = GetFieldLabel ( "customer_header", "TransStartDate" );
$fdata ["FieldType"] = 7;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "TransStartDate";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "TransStartDate";

$fdata ["FieldPermissions"] = true;

$fdata ["UploadFolder"] = "files";

// Begin View Formats
$fdata ["ViewFormats"] = array ();

$vdata = array (
		"ViewFormat" => "Short Date" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["view"] = $vdata;
// End View Formats

// Begin Edit Formats
$fdata ["EditFormats"] = array ();

$edata = array (
		"EditFormat" => "Date" 
);

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["DateEditType"] = 11;
$edata ["InitialYearFactor"] = 100;
$edata ["LastYearFactor"] = 10;

$edata ["controlWidth"] = 100;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = false;

// the field's search options settings

// the default search options list
$fdata ["searchOptionsList"] = array (
		"Equals",
		"More than",
		"Less than",
		"Between" 
);
// the end of search options settings

$tdatacustomer_header ["TransStartDate"] = $fdata;
// TransEndDate
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 30;
$fdata ["strName"] = "TransEndDate";
$fdata ["GoodName"] = "TransEndDate";
$fdata ["ownerTable"] = "customer_header";
$fdata ["Label"] = GetFieldLabel ( "customer_header", "TransEndDate" );
$fdata ["FieldType"] = 7;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "TransEndDate";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "TransEndDate";

$fdata ["FieldPermissions"] = true;

$fdata ["UploadFolder"] = "files";

// Begin View Formats
$fdata ["ViewFormats"] = array ();

$vdata = array (
		"ViewFormat" => "Short Date" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["view"] = $vdata;
$vdata = array (
		"ViewFormat" => "Short Date" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["list"] = $vdata;
$vdata = array (
		"ViewFormat" => "Short Date" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["print"] = $vdata;
$vdata = array (
		"ViewFormat" => "Short Date" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["export"] = $vdata;
$vdata = array (
		"ViewFormat" => "Short Date" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["masterprint"] = $vdata;
// End View Formats

// Begin Edit Formats
$fdata ["EditFormats"] = array ();

$edata = array (
		"EditFormat" => "Date" 
);

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["DateEditType"] = 11;
$edata ["InitialYearFactor"] = 100;
$edata ["LastYearFactor"] = 10;

$edata ["controlWidth"] = 120;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = false;

// the field's search options settings

// the default search options list
$fdata ["searchOptionsList"] = array (
		"Equals",
		"More than",
		"Less than",
		"Between" 
);
// the end of search options settings

$tdatacustomer_header ["TransEndDate"] = $fdata;
// Contract_Status
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 31;
$fdata ["strName"] = "Contract_Status";
$fdata ["GoodName"] = "Contract_Status";
$fdata ["ownerTable"] = "customer_header";
$fdata ["Label"] = GetFieldLabel ( "customer_header", "Contract_Status" );
$fdata ["FieldType"] = 200;

$fdata ["strField"] = "Contract_Status";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Contract_Status";

$fdata ["UploadFolder"] = "files";

// Begin View Formats
$fdata ["ViewFormats"] = array ();

$vdata = array (
		"ViewFormat" => "" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["view"] = $vdata;
// End View Formats

// Begin Edit Formats
$fdata ["EditFormats"] = array ();

$edata = array (
		"EditFormat" => "Lookup wizard" 
);

// Begin Lookup settings
$edata ["LookupType"] = 1;
$edata ["LookupTable"] = "contractstat";
$edata ["LookupConnId"] = "Tables";
$edata ["autoCompleteFieldsOnEdit"] = 0;
$edata ["autoCompleteFields"] = array ();
$edata ["LCType"] = 0;

$edata ["LinkField"] = "ContractStatus";
$edata ["LinkFieldType"] = 200;
$edata ["DisplayField"] = "ContractStatus";

$edata ["LookupOrderBy"] = "ContractStatus";

$edata ["SimpleAdd"] = true;

$edata ["SelectSize"] = 1;

// End Lookup Settings

$edata ["IsRequired"] = true;

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = "IsRequired";

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = false;

$tdatacustomer_header ["Contract_Status"] = $fdata;
// Supervisor
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 32;
$fdata ["strName"] = "Supervisor";
$fdata ["GoodName"] = "Supervisor";
$fdata ["ownerTable"] = "customer_header";
$fdata ["Label"] = GetFieldLabel ( "customer_header", "Supervisor" );
$fdata ["FieldType"] = 200;


$fdata ["bAdvancedSearch"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Supervisor";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Supervisor";

$fdata ["FieldPermissions"] = true;

$fdata ["UploadFolder"] = "files";

// Begin View Formats
$fdata ["ViewFormats"] = array ();

$vdata = array (
		"ViewFormat" => "" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["view"] = $vdata;
// End View Formats

// Begin Edit Formats
$fdata ["EditFormats"] = array ();

$edata = array (
		"EditFormat" => "Lookup wizard" 
);

// Begin Lookup settings
$edata ["LookupType"] = 2;
$edata ["LookupTable"] = "tbl_director";
$edata ["autoCompleteFieldsOnEdit"] = 0;
$edata ["autoCompleteFields"] = array ();
$edata ["LCType"] = 0;

$edata ["LinkField"] = "SupervisorID";
$edata ["LinkFieldType"] = 3;
$edata ["DisplayField"] = "FullName";

$edata ["LookupOrderBy"] = "FullName";

// dependent dropdowns
$edata ["DependentLookups"] = array ();
$edata ["DependentLookups"] [] = "TAM";
// dependent dropdowns
$edata ["DependentLookups"] = array ();
$edata ["DependentLookups"] [] = "RSAName";

$edata ["SelectSize"] = 1;

// End Lookup Settings

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 130;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = false;

// the field's search options settings

// the default search options list
$fdata ["searchOptionsList"] = array (
		"Contains",
		"Equals",
		"Empty" 
);
// the end of search options settings

$tdatacustomer_header ["Supervisor"] = $fdata;
// TAM
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 33;
$fdata ["strName"] = "TAM";
$fdata ["GoodName"] = "TAM";
$fdata ["ownerTable"] = "customer_header";
$fdata ["Label"] = GetFieldLabel ( "customer_header", "TAM" );
$fdata ["FieldType"] = 200;


$fdata ["bAdvancedSearch"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "TAM";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "TAM";

$fdata ["FieldPermissions"] = true;

$fdata ["UploadFolder"] = "files";

// Begin View Formats
$fdata ["ViewFormats"] = array ();

$vdata = array (
		"ViewFormat" => "" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["view"] = $vdata;
// End View Formats

// Begin Edit Formats
$fdata ["EditFormats"] = array ();

$edata = array (
		"EditFormat" => "Lookup wizard" 
);

// Begin Lookup settings
$edata ["LookupType"] = 2;
$edata ["LookupTable"] = "employee_header";
$edata ["autoCompleteFieldsOnEdit"] = 0;
$edata ["autoCompleteFields"] = array ();
$edata ["LCType"] = 0;

$edata ["LinkField"] = "FirstName";
$edata ["LinkFieldType"] = 0;
$edata ["DisplayField"] = "concat(FirstName,' ',LastName)";

$edata ["CustomDisplay"] = "true";

$edata ["LookupOrderBy"] = "FirstName";

$edata ["UseCategory"] = true;
$edata ["categoryFields"] = array ();
$edata ["categoryFields"] [] = array (
		"main" => "Supervisor",
		"lookup" => "SupervisorID" 
);

$edata ["SelectSize"] = 1;

// End Lookup Settings

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 200;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = false;

// the field's search options settings

// the default search options list
$fdata ["searchOptionsList"] = array (
		"Contains",
		"Equals",
		"Empty" 
);
// the end of search options settings

$tdatacustomer_header ["TAM"] = $fdata;
// SME
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 34;
$fdata ["strName"] = "SME";
$fdata ["GoodName"] = "SME";
$fdata ["ownerTable"] = "customer_header";
$fdata ["Label"] = GetFieldLabel ( "customer_header", "SME" );
$fdata ["FieldType"] = 200;


$fdata ["bAdvancedSearch"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "SME";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "SME";

$fdata ["FieldPermissions"] = true;

$fdata ["UploadFolder"] = "files";

// Begin View Formats
$fdata ["ViewFormats"] = array ();

$vdata = array (
		"ViewFormat" => "" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["view"] = $vdata;
// End View Formats

// Begin Edit Formats
$fdata ["EditFormats"] = array ();

$edata = array (
		"EditFormat" => "Lookup wizard" 
);

// Begin Lookup settings
$edata ["LookupType"] = 2;
$edata ["LookupTable"] = "tbl_sme";
$edata ["autoCompleteFieldsOnEdit"] = 0;
$edata ["autoCompleteFields"] = array ();
$edata ["LCType"] = 0;

$edata ["LinkField"] = "FullName";
$edata ["LinkFieldType"] = 0;
$edata ["DisplayField"] = "FullName";

$edata ["LookupOrderBy"] = "FirstName";

$edata ["SelectSize"] = 1;

// End Lookup Settings

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 200;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = false;

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

// the default search options list
$fdata ["searchOptionsList"] = array (
		"Contains",
		"Equals",
		"Empty" 
);
// the end of search options settings

$tdatacustomer_header ["SME"] = $fdata;
// RSAName
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 35;
$fdata ["strName"] = "RSAName";
$fdata ["GoodName"] = "RSAName";
$fdata ["ownerTable"] = "customer_header";
$fdata ["Label"] = GetFieldLabel ( "customer_header", "RSAName" );
$fdata ["FieldType"] = 200;
$fdata ["bAdvancedSearch"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "RSAName";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "RSAName";

$fdata ["FieldPermissions"] = true;

$fdata ["UploadFolder"] = "files";

// Begin View Formats
$fdata ["ViewFormats"] = array ();

$vdata = array (
		"ViewFormat" => "" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["view"] = $vdata;
// End View Formats

// Begin Edit Formats
$fdata ["EditFormats"] = array ();

$edata = array (
		"EditFormat" => "Lookup wizard" 
);

// Begin Lookup settings
$edata ["LookupType"] = 2;
$edata ["LookupTable"] = "employee_header";
$edata ["autoCompleteFieldsOnEdit"] = 0;
$edata ["autoCompleteFields"] = array ();
$edata ["LCType"] = 0;

$edata ["LinkField"] = "FullName";
$edata ["LinkFieldType"] = 0;
$edata ["DisplayField"] = "FullName";

$edata ["LookupOrderBy"] = "";

$edata ["UseCategory"] = true;
$edata ["categoryFields"] = array ();
$edata ["categoryFields"] [] = array (
		"main" => "Supervisor",
		"lookup" => "SupervisorID" 
);

$edata ["SelectSize"] = 1;

// End Lookup Settings

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 200;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = false;

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

// the default search options list
$fdata ["searchOptionsList"] = array (
		"Contains",
		"Equals",
		"Empty" 
);
// the end of search options settings

$tdatacustomer_header ["RSAName"] = $fdata;

$tables_data ["customer_header"] = &$tdatacustomer_header;
$field_labels ["customer_header"] = &$fieldLabelscustomer_header;
$fieldToolTips ["customer_header"] = &$fieldToolTipscustomer_header;
$page_titles ["customer_header"] = &$pageTitlescustomer_header;

// -----------------start prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData ["customer_header"] = array ();
// customertechnology

$dIndex = 0;
$detailsParam = array ();
$detailsParam ["dDataSourceTable"] = "customertechnology";
$detailsParam ["dOriginalTable"] = "customertechnology";
$detailsParam ["dType"] = PAGE_LIST;
$detailsParam ["dShortTable"] = "customertechnology";
$detailsParam ["dCaptionTable"] = GetTableCaption ( "customertechnology" );
$detailsParam ["masterKeys"] = array ();
$detailsParam ["detailKeys"] = array ();
$detailsParam ["dispChildCount"] = "1";
$detailsParam ["hideChild"] = true;
$detailsParam ["previewOnList"] = "0";
$detailsParam ["previewOnAdd"] = 1;
$detailsParam ["previewOnEdit"] = 1;
$detailsParam ["previewOnView"] = 1;

$detailsTablesData ["customer_header"] [$dIndex] = $detailsParam;

$detailsTablesData ["customer_header"] [$dIndex] ["masterKeys"] = array ();

$detailsTablesData ["customer_header"] [$dIndex] ["masterKeys"] [] = "OracIeID";

$detailsTablesData ["customer_header"] [$dIndex] ["detailKeys"] = array ();

$detailsTablesData ["customer_header"] [$dIndex] ["detailKeys"] [] = "CategoryID";
// customerallocation1

$dIndex = 1;
$detailsParam = array ();
$detailsParam ["dDataSourceTable"] = "customerallocation1";
$detailsParam ["dOriginalTable"] = "customerallocation";
$detailsParam ["dType"] = PAGE_LIST;
$detailsParam ["dShortTable"] = "customerallocation1";
$detailsParam ["dCaptionTable"] = GetTableCaption ( "customerallocation1" );
$detailsParam ["masterKeys"] = array ();
$detailsParam ["detailKeys"] = array ();
$detailsParam ["dispChildCount"] = "1";
$detailsParam ["hideChild"] = false;
$detailsParam ["previewOnList"] = "0";
$detailsParam ["previewOnAdd"] = 0;
$detailsParam ["previewOnEdit"] = 0;
$detailsParam ["previewOnView"] = 1;

$detailsTablesData ["customer_header"] [$dIndex] = $detailsParam;

$detailsTablesData ["customer_header"] [$dIndex] ["masterKeys"] = array ();

$detailsTablesData ["customer_header"] [$dIndex] ["masterKeys"] [] = "OracIeID";

$detailsTablesData ["customer_header"] [$dIndex] ["detailKeys"] = array ();

$detailsTablesData ["customer_header"] [$dIndex] ["detailKeys"] [] = "OracleID";

// tables which are master tables for current table (detail)
$masterTablesData ["customer_header"] = array ();

// -----------------end prepare master-details data arrays ------------------------------//

require_once (getabspath ( "classes/sql.php" ));
function createSqlQuery_customer_header() {
	if( false == is_null( $_SESSION['UserName'] ) ) {
		$userName = $_SESSION['UserName'];
	}

	if( false == is_null( $_SESSION['UserID']) ) {
		$userID = $_SESSION["UserID"];
		$groupID = $_SESSION["UserRights"][$userID][".Groups"][0];
	}

	$proto2 = array ();
	$proto2 ["m_strHead"] = "SELECT";
	$proto2 ["m_strFieldList"] = "customer_header.OracIeID,  customer_header.Name, customer_header.`Size`,  customer_header.Temperature,  customer_header.Contract_Start,  customer_header.Contract_end,  customer_header.Recovery_Center,  customer_header.Total_MRR,  customer_header.MRP_MRR,  customer_header.ARS_MRR,  customer_header.RS_MRR,  customer_header.MS_MRR,  customer_header.CS_MRR,  customer_header.OTHER_MRR,  customer_header.Engagement_status,  customer_header.created_by,  concat(customer_header.`Size`, '-', customer_header.`Stage`) AS Compre_String,  customer_header.Created_date,  customer_header.Updated_by,  customer_header.Updated_date,  customer_header.Comments,  customer_header.EmployeeID,  customer_header.Stage,  customer_header.Overall_Temp,  customer_header.Address,  customer_header.SteadyState,  customer_header.PrimaryTimeZone,  customer_header.`Onshore Support`,  customer_header.TransStartDate,  customer_header.TransEndDate,  customer_header.Contract_Status,  customer_header.Supervisor,  customer_header.TAM,  customer_header.SME,  customer_header.RSAName";
	$proto2 ["m_strFrom"] = "FROM customer_header";
	$proto2 ["m_strWhere"] = "customer_header.Engagement_status <> 'Terminated'";
	$proto2 ["m_strOrderBy"] = "ORDER BY customer_header.Name";
	$proto2 ["m_strTail"] = "";
	$proto2 ["cipherer"] = null;
	$proto3 = array ();
	if( !IsAdmin() && ( '5' == $groupID || '7' == $groupID )) {
		$proto3 ["m_sql"] = "customer_header.Engagement_status <> 'Terminated'";
		$proto3 ["m_uniontype"] = "SQLL_AND";
		$obj = new SQLNonParsed ( array (
				"m_sql" => "customer_header.Engagement_status <> 'Terminated'"
		) );
	} elseif( !IsAdmin() && '6' == $groupID  ) {
		global $conn;
		$strSQL = "SELECT DISTINCT td.SupervisorID, td.FullName FROM customer_header ch JOIN tbl_director td ON( ch.Supervisor = td.SupervisorID ) WHERE td.FullName = '" . $userName . "'";
		$rs = db_query($strSQL,$conn);
		while ($data = db_fetch_array($rs))
		$supervisorID = $data['SupervisorID'];
		$proto3 ["m_sql"] = "customer_header.Engagement_status <> 'Terminated' AND customer_header.Supervisor = " . $supervisorID;
		$proto3 ["m_uniontype"] = "SQLL_AND";
		$obj = new SQLNonParsed ( array (
				"m_sql" => "customer_header.Engagement_status <> 'Terminated' AND customer_header.Supervisor = '" . $supervisorID . "'"
		) );
	} elseif( !IsAdmin() && '1' == $groupID ) {
		$proto3 ["m_sql"] = "customer_header.Engagement_status <> 'Terminated' AND customerallocation.RSAName = '" . $userName . "'";
		$proto3 ["m_uniontype"] = "SQLL_AND";
		$obj = new SQLNonParsed ( array (
				"m_sql" => "customer_header.Engagement_status <> 'Terminated' AND customerallocation.RSAName = '" . $userName . "'"
		) );
	} else {
		$proto3 ["m_sql"] = "customer_header.Engagement_status <> 'Terminated'";
		$proto3 ["m_uniontype"] = "SQLL_AND";
		$obj = new SQLNonParsed ( array (
				"m_sql" => "customer_header.Engagement_status <> 'Terminated'"
		) );
	}

	$proto3 ["m_column"] = $obj;
	$proto3 ["m_contained"] = array ();
	$proto3 ["m_strCase"] = "";
	$proto3 ["m_havingmode"] = false;
	$proto3 ["m_inBrackets"] = false;
	$proto3 ["m_useAlias"] = false;
	$obj = new SQLLogicalExpr ( $proto3 );
	
	$proto2 ["m_where"] = $obj;
	$proto5 = array ();
	$proto5 ["m_sql"] = "";
	$proto5 ["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed ( array (
			"m_sql" => "" 
	) );
	
	$proto5 ["m_column"] = $obj;
	$proto5 ["m_contained"] = array ();
	$proto5 ["m_strCase"] = "";
	$proto5 ["m_havingmode"] = false;
	$proto5 ["m_inBrackets"] = false;
	$proto5 ["m_useAlias"] = false;
	$obj = new SQLLogicalExpr ( $proto5 );
	
	$proto2 ["m_having"] = $obj;
	$proto2 ["m_fieldlist"] = array ();
	$proto7 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "OracIeID",
			"m_strTable" => "customer_header",
			"m_srcTableName" => "customer_header" 
	) );
	
	$proto7 ["m_sql"] = "OracIeID";
	$proto7 ["m_srcTableName"] = "customer_header";
	$proto7 ["m_expr"] = $obj;
	$proto7 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto7 );
	
	$proto2 ["m_fieldlist"] [] = $obj;
	$proto9 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Name",
			"m_strTable" => "customer_header",
			"m_srcTableName" => "customer_header" 
	) );
	
	$proto9 ["m_sql"] = "Name";
	$proto9 ["m_srcTableName"] = "customer_header";
	$proto9 ["m_expr"] = $obj;
	$proto9 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto9 );
	
	$proto2 ["m_fieldlist"] [] = $obj;
	$proto11 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Size",
			"m_strTable" => "customer_header",
			"m_srcTableName" => "customer_header" 
	) );
	
	$proto11 ["m_sql"] = "customer_header.`Size`";
	$proto11 ["m_srcTableName"] = "customer_header";
	$proto11 ["m_expr"] = $obj;
	$proto11 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto11 );
	
	$proto2 ["m_fieldlist"] [] = $obj;
	$proto13 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Temperature",
			"m_strTable" => "customer_header",
			"m_srcTableName" => "customer_header" 
	) );
	
	$proto13 ["m_sql"] = "Temperature";
	$proto13 ["m_srcTableName"] = "customer_header";
	$proto13 ["m_expr"] = $obj;
	$proto13 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto13 );
	
	$proto2 ["m_fieldlist"] [] = $obj;
	$proto15 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Contract_Start",
			"m_strTable" => "customer_header",
			"m_srcTableName" => "customer_header" 
	) );
	
	$proto15 ["m_sql"] = "Contract_Start";
	$proto15 ["m_srcTableName"] = "customer_header";
	$proto15 ["m_expr"] = $obj;
	$proto15 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto15 );
	
	$proto2 ["m_fieldlist"] [] = $obj;
	$proto17 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Contract_end",
			"m_strTable" => "customer_header",
			"m_srcTableName" => "customer_header" 
	) );
	
	$proto17 ["m_sql"] = "Contract_end";
	$proto17 ["m_srcTableName"] = "customer_header";
	$proto17 ["m_expr"] = $obj;
	$proto17 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto17 );
	
	$proto2 ["m_fieldlist"] [] = $obj;
	$proto19 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Recovery_Center",
			"m_strTable" => "customer_header",
			"m_srcTableName" => "customer_header" 
	) );
	
	$proto19 ["m_sql"] = "Recovery_Center";
	$proto19 ["m_srcTableName"] = "customer_header";
	$proto19 ["m_expr"] = $obj;
	$proto19 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto19 );
	
	$proto2 ["m_fieldlist"] [] = $obj;
	$proto21 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Total_MRR",
			"m_strTable" => "customer_header",
			"m_srcTableName" => "customer_header" 
	) );
	
	$proto21 ["m_sql"] = "Total_MRR";
	$proto21 ["m_srcTableName"] = "customer_header";
	$proto21 ["m_expr"] = $obj;
	$proto21 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto21 );
	
	$proto2 ["m_fieldlist"] [] = $obj;
	$proto23 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "MRP_MRR",
			"m_strTable" => "customer_header",
			"m_srcTableName" => "customer_header" 
	) );
	
	$proto23 ["m_sql"] = "MRP_MRR";
	$proto23 ["m_srcTableName"] = "customer_header";
	$proto23 ["m_expr"] = $obj;
	$proto23 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto23 );
	
	$proto2 ["m_fieldlist"] [] = $obj;
	$proto25 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "ARS_MRR",
			"m_strTable" => "customer_header",
			"m_srcTableName" => "customer_header" 
	) );
	
	$proto25 ["m_sql"] = "ARS_MRR";
	$proto25 ["m_srcTableName"] = "customer_header";
	$proto25 ["m_expr"] = $obj;
	$proto25 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto25 );
	
	$proto2 ["m_fieldlist"] [] = $obj;
	$proto27 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "RS_MRR",
			"m_strTable" => "customer_header",
			"m_srcTableName" => "customer_header" 
	) );
	
	$proto27 ["m_sql"] = "RS_MRR";
	$proto27 ["m_srcTableName"] = "customer_header";
	$proto27 ["m_expr"] = $obj;
	$proto27 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto27 );
	
	$proto2 ["m_fieldlist"] [] = $obj;
	$proto29 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "MS_MRR",
			"m_strTable" => "customer_header",
			"m_srcTableName" => "customer_header" 
	) );
	
	$proto29 ["m_sql"] = "MS_MRR";
	$proto29 ["m_srcTableName"] = "customer_header";
	$proto29 ["m_expr"] = $obj;
	$proto29 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto29 );
	
	$proto2 ["m_fieldlist"] [] = $obj;
	$proto31 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "CS_MRR",
			"m_strTable" => "customer_header",
			"m_srcTableName" => "customer_header" 
	) );
	
	$proto31 ["m_sql"] = "CS_MRR";
	$proto31 ["m_srcTableName"] = "customer_header";
	$proto31 ["m_expr"] = $obj;
	$proto31 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto31 );
	
	$proto2 ["m_fieldlist"] [] = $obj;
	$proto33 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "OTHER_MRR",
			"m_strTable" => "customer_header",
			"m_srcTableName" => "customer_header" 
	) );
	
	$proto33 ["m_sql"] = "OTHER_MRR";
	$proto33 ["m_srcTableName"] = "customer_header";
	$proto33 ["m_expr"] = $obj;
	$proto33 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto33 );
	
	$proto2 ["m_fieldlist"] [] = $obj;
	$proto35 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Engagement_status",
			"m_strTable" => "customer_header",
			"m_srcTableName" => "customer_header" 
	) );
	
	$proto35 ["m_sql"] = "Engagement_status";
	$proto35 ["m_srcTableName"] = "customer_header";
	$proto35 ["m_expr"] = $obj;
	$proto35 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto35 );
	
	$proto2 ["m_fieldlist"] [] = $obj;
	$proto37 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "created_by",
			"m_strTable" => "customer_header",
			"m_srcTableName" => "customer_header" 
	) );
	
	$proto37 ["m_sql"] = "created_by";
	$proto37 ["m_srcTableName"] = "customer_header";
	$proto37 ["m_expr"] = $obj;
	$proto37 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto37 );
	
	$proto2 ["m_fieldlist"] [] = $obj;
	$proto39 = array ();
	$proto40 = array ();
	$proto40 ["m_functiontype"] = "SQLF_CUSTOM";
	$proto40 ["m_arguments"] = array ();
	$obj = new SQLNonParsed ( array (
			"m_sql" => "customer_header.`Size`" 
	) );
	
	$proto40 ["m_arguments"] [] = $obj;
	$obj = new SQLNonParsed ( array (
			"m_sql" => "'-'" 
	) );
	
	$proto40 ["m_arguments"] [] = $obj;
	$obj = new SQLNonParsed ( array (
			"m_sql" => "customer_header.`Stage`" 
	) );
	
	$proto40 ["m_arguments"] [] = $obj;
	$proto40 ["m_strFunctionName"] = "concat";
	$obj = new SQLFunctionCall ( $proto40 );
	
	$proto39 ["m_sql"] = "concat(customer_header.`Size`, '-', customer_header.`Stage`)";
	$proto39 ["m_srcTableName"] = "customer_header";
	$proto39 ["m_expr"] = $obj;
	$proto39 ["m_alias"] = "Compre_String";
	$obj = new SQLFieldListItem ( $proto39 );
	
	$proto2 ["m_fieldlist"] [] = $obj;
	$proto44 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Created_date",
			"m_strTable" => "customer_header",
			"m_srcTableName" => "customer_header" 
	) );
	
	$proto44 ["m_sql"] = "Created_date";
	$proto44 ["m_srcTableName"] = "customer_header";
	$proto44 ["m_expr"] = $obj;
	$proto44 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto44 );
	
	$proto2 ["m_fieldlist"] [] = $obj;
	$proto46 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Updated_by",
			"m_strTable" => "customer_header",
			"m_srcTableName" => "customer_header" 
	) );
	
	$proto46 ["m_sql"] = "Updated_by";
	$proto46 ["m_srcTableName"] = "customer_header";
	$proto46 ["m_expr"] = $obj;
	$proto46 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto46 );
	
	$proto2 ["m_fieldlist"] [] = $obj;
	$proto48 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Updated_date",
			"m_strTable" => "customer_header",
			"m_srcTableName" => "customer_header" 
	) );
	
	$proto48 ["m_sql"] = "Updated_date";
	$proto48 ["m_srcTableName"] = "customer_header";
	$proto48 ["m_expr"] = $obj;
	$proto48 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto48 );
	
	$proto2 ["m_fieldlist"] [] = $obj;
	$proto50 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Comments",
			"m_strTable" => "customer_header",
			"m_srcTableName" => "customer_header" 
	) );
	
	$proto50 ["m_sql"] = "Comments";
	$proto50 ["m_srcTableName"] = "customer_header";
	$proto50 ["m_expr"] = $obj;
	$proto50 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto50 );
	
	$proto2 ["m_fieldlist"] [] = $obj;
	$proto52 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "EmployeeID",
			"m_strTable" => "customer_header",
			"m_srcTableName" => "customer_header" 
	) );
	
	$proto52 ["m_sql"] = "EmployeeID";
	$proto52 ["m_srcTableName"] = "customer_header";
	$proto52 ["m_expr"] = $obj;
	$proto52 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto52 );
	
	$proto2 ["m_fieldlist"] [] = $obj;
	$proto54 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Stage",
			"m_strTable" => "customer_header",
			"m_srcTableName" => "customer_header" 
	) );
	
	$proto54 ["m_sql"] = "customer_header.Stage";
	$proto54 ["m_srcTableName"] = "customer_header";
	$proto54 ["m_expr"] = $obj;
	$proto54 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto54 );
	
	$proto2 ["m_fieldlist"] [] = $obj;
	$proto56 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Overall_Temp",
			"m_strTable" => "customer_header",
			"m_srcTableName" => "customer_header" 
	) );
	
	$proto56 ["m_sql"] = "Overall_Temp";
	$proto56 ["m_srcTableName"] = "customer_header";
	$proto56 ["m_expr"] = $obj;
	$proto56 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto56 );
	
	$proto2 ["m_fieldlist"] [] = $obj;
	$proto58 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Address",
			"m_strTable" => "customer_header",
			"m_srcTableName" => "customer_header" 
	) );
	
	$proto58 ["m_sql"] = "Address";
	$proto58 ["m_srcTableName"] = "customer_header";
	$proto58 ["m_expr"] = $obj;
	$proto58 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto58 );
	
	$proto2 ["m_fieldlist"] [] = $obj;
	$proto60 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "SteadyState",
			"m_strTable" => "customer_header",
			"m_srcTableName" => "customer_header" 
	) );
	
	$proto60 ["m_sql"] = "SteadyState";
	$proto60 ["m_srcTableName"] = "customer_header";
	$proto60 ["m_expr"] = $obj;
	$proto60 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto60 );
	
	$proto2 ["m_fieldlist"] [] = $obj;
	$proto62 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "PrimaryTimeZone",
			"m_strTable" => "customer_header",
			"m_srcTableName" => "customer_header" 
	) );
	
	$proto62 ["m_sql"] = "PrimaryTimeZone";
	$proto62 ["m_srcTableName"] = "customer_header";
	$proto62 ["m_expr"] = $obj;
	$proto62 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto62 );
	
	$proto2 ["m_fieldlist"] [] = $obj;
	$proto64 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Onshore Support",
			"m_strTable" => "customer_header",
			"m_srcTableName" => "customer_header" 
	) );
	
	$proto64 ["m_sql"] = "`Onshore Support`";
	$proto64 ["m_srcTableName"] = "customer_header";
	$proto64 ["m_expr"] = $obj;
	$proto64 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto64 );
	
	$proto2 ["m_fieldlist"] [] = $obj;
	$proto66 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "TransStartDate",
			"m_strTable" => "customer_header",
			"m_srcTableName" => "customer_header" 
	) );
	
	$proto66 ["m_sql"] = "TransStartDate";
	$proto66 ["m_srcTableName"] = "customer_header";
	$proto66 ["m_expr"] = $obj;
	$proto66 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto66 );
	
	$proto2 ["m_fieldlist"] [] = $obj;
	$proto68 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "TransEndDate",
			"m_strTable" => "customer_header",
			"m_srcTableName" => "customer_header" 
	) );
	
	$proto68 ["m_sql"] = "TransEndDate";
	$proto68 ["m_srcTableName"] = "customer_header";
	$proto68 ["m_expr"] = $obj;
	$proto68 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto68 );
	
	$proto2 ["m_fieldlist"] [] = $obj;
	$proto70 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Contract_Status",
			"m_strTable" => "customer_header",
			"m_srcTableName" => "customer_header" 
	) );
	
	$proto70 ["m_sql"] = "Contract_Status";
	$proto70 ["m_srcTableName"] = "customer_header";
	$proto70 ["m_expr"] = $obj;
	$proto70 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto70 );
	
	$proto2 ["m_fieldlist"] [] = $obj;
	$proto72 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Supervisor",
			"m_strTable" => "customer_header",
			"m_srcTableName" => "customer_header" 
	) );
	
	$proto72 ["m_sql"] = "Supervisor";
	$proto72 ["m_srcTableName"] = "customer_header";
	$proto72 ["m_expr"] = $obj;
	$proto72 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto72 );
	
	$proto2 ["m_fieldlist"] [] = $obj;
	$proto74 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "TAM",
			"m_strTable" => "customer_header",
			"m_srcTableName" => "customer_header" 
	) );
	
	$proto74 ["m_sql"] = "TAM";
	$proto74 ["m_srcTableName"] = "customer_header";
	$proto74 ["m_expr"] = $obj;
	$proto74 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto74 );
	
	$proto2 ["m_fieldlist"] [] = $obj;
	$proto76 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "SME",
			"m_strTable" => "customer_header",
			"m_srcTableName" => "customer_header" 
	) );
	
	$proto76 ["m_sql"] = "SME";
	$proto76 ["m_srcTableName"] = "customer_header";
	$proto76 ["m_expr"] = $obj;
	$proto76 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto76 );
	
	$proto2 ["m_fieldlist"] [] = $obj;
	$proto78 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "RSAName",
			"m_strTable" => "customer_header",
			"m_srcTableName" => "customer_header" 
	) );
	
	$proto78 ["m_sql"] = "RSAName";
	$proto78 ["m_srcTableName"] = "customer_header";
	$proto78 ["m_expr"] = $obj;
	$proto78 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto78 );
	
	$proto2 ["m_fieldlist"] [] = $obj;
	$proto2 ["m_fromlist"] = array ();

	$proto80 = array ();
	$proto80 ["m_link"] = "SQLL_MAIN";
	$proto81 = array ();
	$proto81 ["m_strName"] = "customer_header";
	$proto81 ["m_srcTableName"] = "customer_header";
	$proto81 ["m_columns"] = array ();
	$proto81 ["m_columns"] [] = "OracIeID";
	$proto81 ["m_columns"] [] = "Name";
	$proto81 ["m_columns"] [] = "Contract_Status";
	$proto81 ["m_columns"] [] = "Size";
	$proto81 ["m_columns"] [] = "Stage";
	$proto81 ["m_columns"] [] = "Temperature";
	$proto81 ["m_columns"] [] = "Sales_SVP";
	$proto81 ["m_columns"] [] = "Contract_Start";
	$proto81 ["m_columns"] [] = "SteadyState";
	$proto81 ["m_columns"] [] = "Contract_end";
	$proto81 ["m_columns"] [] = "Recovery_Center";
	$proto81 ["m_columns"] [] = "Total_MRR";
	$proto81 ["m_columns"] [] = "MRP_MRR";
	$proto81 ["m_columns"] [] = "ARS_MRR";
	$proto81 ["m_columns"] [] = "RS_MRR";
	$proto81 ["m_columns"] [] = "MS_MRR";
	$proto81 ["m_columns"] [] = "CS_MRR";
	$proto81 ["m_columns"] [] = "OTHER_MRR";
	$proto81 ["m_columns"] [] = "SME";
	$proto81 ["m_columns"] [] = "RSAName";
	$proto81 ["m_columns"] [] = "Overall_Temp";
	$proto81 ["m_columns"] [] = "Engagement_status";
	$proto81 ["m_columns"] [] = "created_by";
	$proto81 ["m_columns"] [] = "Created_date";
	$proto81 ["m_columns"] [] = "Updated_by";
	$proto81 ["m_columns"] [] = "Updated_date";
	$proto81 ["m_columns"] [] = "Comments";
	$proto81 ["m_columns"] [] = "EmployeeID";
	$proto81 ["m_columns"] [] = "Compre_String";
	$proto81 ["m_columns"] [] = "Address";
	$proto81 ["m_columns"] [] = "PrimaryTimeZone";
	$proto81 ["m_columns"] [] = "Onshore Support";
	$proto81 ["m_columns"] [] = "TransStartDate";
	$proto81 ["m_columns"] [] = "TransEndDate";
	$proto81 ["m_columns"] [] = "Supervisor";
	$proto81 ["m_columns"] [] = "TAM";
	$obj = new SQLTable ( $proto81 );
	
	$proto80 ["m_table"] = $obj;
	$proto80 ["m_sql"] = "customer_header";
	$proto80 ["m_alias"] = "";
	$proto80 ["m_srcTableName"] = "customer_header";
	$proto82 = array ();
	$proto82 ["m_sql"] = "";
	$proto82 ["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed ( array (
			"m_sql" => "" 
	) );
	
	$proto82 ["m_column"] = $obj;
	$proto82 ["m_contained"] = array ();
	$proto82 ["m_strCase"] = "";
	$proto82 ["m_havingmode"] = false;
	$proto82 ["m_inBrackets"] = false;
	$proto82 ["m_useAlias"] = false;
	$obj = new SQLLogicalExpr ( $proto82 );
	
	$proto80 ["m_joinon"] = $obj;
	$obj = new SQLFromListItem ( $proto80 );
	$proto2 ["m_fromlist"] [] = $obj;

	if( !IsAdmin() && ( '5' == $groupID || '6' == $groupID || '7' == $groupID ) ) {
		$proto2 ["m_groupby"] = array ();
		$proto2 ["m_orderby"] = array ();
		$proto84 = array ();
		$obj = new SQLField ( array (
				"m_strName" => "Name",
				"m_strTable" => "customer_header",
				"m_srcTableName" => "customer_header"
		) );
		
		$proto84 ["m_column"] = $obj;
		$proto84 ["m_bAsc"] = 1;
		$proto84 ["m_nColumn"] = 0;
		$obj = new SQLOrderByItem ( $proto84 );
	} elseif( !IsAdmin() && '1' == $groupID ) {
		$proto84 = array ();
		$proto84 ["m_link"] = "SQLL_LEFTJOIN";
		$proto85 = array ();
		$proto85 ["m_strName"] = "customerallocation";
		$proto85 ["m_srcTableName"] = "customer_header";
		$proto85 ["m_columns"] = array ();
		$proto85 ["m_columns"] [] = "AutCustID";
		$proto85 ["m_columns"] [] = "OracleID";
		$proto85 ["m_columns"] [] = "CustomerName";
		$proto85 ["m_columns"] [] = "Stage";
		$proto85 ["m_columns"] [] = "RSAName";
		$proto85 ["m_columns"] [] = "Location";
		$proto85 ["m_columns"] [] = "Supervisor";
		$proto85 ["m_columns"] [] = "StartDate";
		$proto85 ["m_columns"] [] = "EndDate";
		$proto85 ["m_columns"] [] = "Allocation";
		$proto85 ["m_columns"] [] = "Override";
		$proto85 ["m_columns"] [] = "Compre_String";
		$proto85 ["m_columns"] [] = "Temp";
		$proto85 ["m_columns"] [] = "Size";
		$proto85 ["m_columns"] [] = "Contract_Start";
		$proto85 ["m_columns"] [] = "SteadyStateDate";
		$proto85 ["m_columns"] [] = "Contract_End";
		$proto85 ["m_columns"] [] = "OnshoreSupportOnly";
		$proto85 ["m_columns"] [] = "Role";
		$proto85 ["m_columns"] [] = "PlatformType";
		$proto85 ["m_columns"] [] = "PlatformName";
		$proto85 ["m_columns"] [] = "TimeZone";
		$proto85 ["m_columns"] [] = "Project";
		$obj = new SQLTable ( $proto85 );
		
		$proto84 ["m_table"] = $obj;
		$proto84 ["m_sql"] = "LEFT JOIN customerallocation ON customer_header.OracIeID = customerallocation.OracleID";
		$proto84 ["m_alias"] = "";
		$proto84 ["m_srcTableName"] = "customer_header";
		$proto86 = array ();
		$proto86 ["m_sql"] = "customer_header.OracIeID = customerallocation.OracleID";
		$proto86 ["m_uniontype"] = "SQLL_UNKNOWN";
		$obj = new SQLField ( array (
				"m_strName" => "OracIeID",
				"m_strTable" => "customer_header",
				"m_srcTableName" => "customer_header"
		) );
		
		$proto86 ["m_column"] = $obj;
		$proto86 ["m_contained"] = array ();
		$proto86 ["m_strCase"] = "= customerallocation.OracleID";
		$proto86 ["m_havingmode"] = false;
		$proto86 ["m_inBrackets"] = false;
		$proto86 ["m_useAlias"] = false;
		$obj = new SQLLogicalExpr ( $proto86 );
		
		$proto84 ["m_joinon"] = $obj;
		$obj = new SQLFromListItem ( $proto84 );
		
		$proto2 ["m_fromlist"] [] = $obj;
		$proto2 ["m_groupby"] = array ();
		$proto2 ["m_orderby"] = array ();
		$proto88 = array ();
		$obj = new SQLField ( array (
				"m_strName" => "Name",
				"m_strTable" => "customer_header",
				"m_srcTableName" => "customer_header" 
		) );
		
		$proto88 ["m_column"] = $obj;
		$proto88 ["m_bAsc"] = 1;
		$proto88 ["m_nColumn"] = 0;
		$obj = new SQLOrderByItem ( $proto88 );
	} else {
		$proto2 ["m_fromlist"] [] = $obj;
		$proto2 ["m_groupby"] = array ();
		$proto2 ["m_orderby"] = array ();
		$proto84 = array ();
		$obj = new SQLField ( array (
				"m_strName" => "Name",
				"m_strTable" => "customer_header",
				"m_srcTableName" => "customer_header"
		) );
		
		$proto84 ["m_column"] = $obj;
		$proto84 ["m_bAsc"] = 1;
		$proto84 ["m_nColumn"] = 0;
		$obj = new SQLOrderByItem ( $proto84 );
	}

	$proto2 ["m_orderby"] [] = $obj;
	$proto2 ["m_srcTableName"] = "customer_header";
	$obj = new SQLQuery ( $proto2 );
	
	return $obj;
}
$queryData_customer_header = createSqlQuery_customer_header ();

$tdatacustomer_header [".sqlquery"] = $queryData_customer_header;

include_once (getabspath ( "include/customer_header_events.php" ));
$tableEvents ["customer_header"] = new eventclass_customer_header ();
$tdatacustomer_header [".hasEvents"] = true;

?>