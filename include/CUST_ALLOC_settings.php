<?php
require_once (getabspath ( "classes/cipherer.php" ));

$tdataCUST_ALLOC = array ();
$tdataCUST_ALLOC [".truncateText"] = true;
$tdataCUST_ALLOC [".NumberOfChars"] = 60;
$tdataCUST_ALLOC [".ShortName"] = "CUST_ALLOC";
$tdataCUST_ALLOC [".OwnerID"] = "";
$tdataCUST_ALLOC [".OriginalTable"] = "customerallocation";

// field labels
$fieldLabelsCUST_ALLOC = array ();
$fieldToolTipsCUST_ALLOC = array ();
$pageTitlesCUST_ALLOC = array ();

if (mlang_getcurrentlang () == "English") {
	$fieldLabelsCUST_ALLOC ["English"] = array ();
	$fieldToolTipsCUST_ALLOC ["English"] = array ();
	$pageTitlesCUST_ALLOC ["English"] = array ();
	$fieldLabelsCUST_ALLOC ["English"] ["RSAName"] = "Resource";
	$fieldToolTipsCUST_ALLOC ["English"] ["RSAName"] = "";
	$fieldLabelsCUST_ALLOC ["English"] ["Location"] = "Location";
	$fieldToolTipsCUST_ALLOC ["English"] ["Location"] = "";
	$fieldLabelsCUST_ALLOC ["English"] ["Supervisor"] = "Manager";
	$fieldToolTipsCUST_ALLOC ["English"] ["Supervisor"] = "";
	$fieldLabelsCUST_ALLOC ["English"] ["AutCalID"] = "Aut Cal ID";
	$fieldToolTipsCUST_ALLOC ["English"] ["AutCalID"] = "";
	$fieldLabelsCUST_ALLOC ["English"] ["Jul_2_WK_27"] = "Jul-2 WK-27";
	$fieldToolTipsCUST_ALLOC ["English"] ["Jul-2 WK-27"] = "";
	$fieldLabelsCUST_ALLOC ["English"] ["Jul_9_WK_28"] = "Jul-9 WK-28";
	$fieldToolTipsCUST_ALLOC ["English"] ["Jul-9 WK-28"] = "";
	$fieldLabelsCUST_ALLOC ["English"] ["Jul_16_WK_29"] = "Jul-16 WK-29";
	$fieldToolTipsCUST_ALLOC ["English"] ["Jul-16 WK-29"] = "";
	$fieldLabelsCUST_ALLOC ["English"] ["Jul_23_WK_30"] = "Jul-23 WK-30";
	$fieldToolTipsCUST_ALLOC ["English"] ["Jul-23 WK-30"] = "";
	$fieldLabelsCUST_ALLOC ["English"] ["Aug_6_WK_32"] = "Aug-6 WK-32";
	$fieldToolTipsCUST_ALLOC ["English"] ["Aug-6 WK-32"] = "";
	$fieldLabelsCUST_ALLOC ["English"] ["Aug_13_WK_33"] = "Aug-13 WK-33";
	$fieldToolTipsCUST_ALLOC ["English"] ["Aug-13 WK-33"] = "";
	$fieldLabelsCUST_ALLOC ["English"] ["Aug_20_WK_34"] = "Aug-20 WK-34";
	$fieldToolTipsCUST_ALLOC ["English"] ["Aug-20 WK-34"] = "";
	$fieldLabelsCUST_ALLOC ["English"] ["Aug_27_WK_35"] = "Aug-27 WK-35";
	$fieldToolTipsCUST_ALLOC ["English"] ["Aug-27 WK-35"] = "";
	$fieldLabelsCUST_ALLOC ["English"] ["Sep_3_WK_36"] = "Sep-3 WK-36";
	$fieldToolTipsCUST_ALLOC ["English"] ["Sep-3 WK-36"] = "";
	$fieldLabelsCUST_ALLOC ["English"] ["Sep_10_WK_37"] = "Sep-10 WK-37";
	$fieldToolTipsCUST_ALLOC ["English"] ["Sep-10 WK-37"] = "";
	$fieldLabelsCUST_ALLOC ["English"] ["Sep_17_WK_38"] = "Sep-17 WK-38";
	$fieldToolTipsCUST_ALLOC ["English"] ["Sep-17 WK-38"] = "";
	$fieldLabelsCUST_ALLOC ["English"] ["Sep_24_WK_39"] = "Sep-24 WK-39";
	$fieldToolTipsCUST_ALLOC ["English"] ["Sep-24 WK-39"] = "";
	$fieldLabelsCUST_ALLOC ["English"] ["Oct_1_WK_40"] = "Oct-1 WK-40";
	$fieldToolTipsCUST_ALLOC ["English"] ["Oct-1 WK-40"] = "";
	$fieldLabelsCUST_ALLOC ["English"] ["Oct_8_WK_41"] = "Oct-8 WK-41";
	$fieldToolTipsCUST_ALLOC ["English"] ["Oct-8 WK-41"] = "";
	$fieldLabelsCUST_ALLOC ["English"] ["Oct_15_WK_42"] = "Oct-15 WK-42";
	$fieldToolTipsCUST_ALLOC ["English"] ["Oct-15 WK-42"] = "";
	$fieldLabelsCUST_ALLOC ["English"] ["Oct_22_WK_43"] = "Oct-22 WK-43";
	$fieldToolTipsCUST_ALLOC ["English"] ["Oct-22 WK-43"] = "";
	$fieldLabelsCUST_ALLOC ["English"] ["Oct_29_WK_44"] = "Oct-29 WK-44";
	$fieldToolTipsCUST_ALLOC ["English"] ["Oct-29 WK-44"] = "";
	$fieldLabelsCUST_ALLOC ["English"] ["Nov_5_WK_45"] = "Nov-5 WK-45";
	$fieldToolTipsCUST_ALLOC ["English"] ["Nov-5 WK-45"] = "";
	$fieldLabelsCUST_ALLOC ["English"] ["Nov_12_WK_46"] = "Nov-12 WK-46";
	$fieldToolTipsCUST_ALLOC ["English"] ["Nov-12 WK-46"] = "";
	$fieldLabelsCUST_ALLOC ["English"] ["Nov_19_WK_47"] = "Nov-19 WK-47";
	$fieldToolTipsCUST_ALLOC ["English"] ["Nov-19 WK-47"] = "";
	$fieldLabelsCUST_ALLOC ["English"] ["Nov_26_WK_48"] = "Nov-26 WK-48";
	$fieldToolTipsCUST_ALLOC ["English"] ["Nov-26 WK-48"] = "";
	$fieldLabelsCUST_ALLOC ["English"] ["Dec_3_WK_49"] = "Dec-3 WK-49";
	$fieldToolTipsCUST_ALLOC ["English"] ["Dec-3 WK-49"] = "";
	$fieldLabelsCUST_ALLOC ["English"] ["Dec_10_WK_50"] = "Dec-10 WK-50";
	$fieldToolTipsCUST_ALLOC ["English"] ["Dec-10 WK-50"] = "";
	$fieldLabelsCUST_ALLOC ["English"] ["Dec_17_WK_51"] = "Dec-17 WK-51";
	$fieldToolTipsCUST_ALLOC ["English"] ["Dec-17 WK-51"] = "";
	$fieldLabelsCUST_ALLOC ["English"] ["Dec_24_WK_52"] = "Dec-24 WK-52";
	$fieldToolTipsCUST_ALLOC ["English"] ["Dec-24 WK-52"] = "";
	$fieldLabelsCUST_ALLOC ["English"] ["Dec_31_WK_53"] = "Dec-31 WK-53";
	$fieldToolTipsCUST_ALLOC ["English"] ["Dec-31 WK-53"] = "";
	$fieldLabelsCUST_ALLOC ["English"] ["Jul_30_WK_31"] = "Jul-30 WK-31";
	$fieldToolTipsCUST_ALLOC ["English"] ["Jul-30 WK-31"] = "";
	if (count ( $fieldToolTipsCUST_ALLOC ["English"] ))
		$tdataCUST_ALLOC [".isUseToolTips"] = true;
}
if (mlang_getcurrentlang () == "") {
	$fieldLabelsCUST_ALLOC [""] = array ();
	$fieldToolTipsCUST_ALLOC [""] = array ();
	$pageTitlesCUST_ALLOC [""] = array ();
	if (count ( $fieldToolTipsCUST_ALLOC [""] ))
		$tdataCUST_ALLOC [".isUseToolTips"] = true;
}

$tdataCUST_ALLOC [".NCSearch"] = true;

if (! isMobile ())
	$tdataCUST_ALLOC [".scrollGridBody"] = true;

$tdataCUST_ALLOC [".shortTableName"] = "CUST_ALLOC";
$tdataCUST_ALLOC [".nSecOptions"] = 0;
$tdataCUST_ALLOC [".recsPerRowList"] = 1;
$tdataCUST_ALLOC [".recsPerRowPrint"] = 1;
$tdataCUST_ALLOC [".mainTableOwnerID"] = "";
$tdataCUST_ALLOC [".moveNext"] = 0;
$tdataCUST_ALLOC [".entityType"] = 1;

$tdataCUST_ALLOC [".strOriginalTableName"] = "customerallocation";

$tdataCUST_ALLOC [".showAddInPopup"] = true;

$tdataCUST_ALLOC [".showEditInPopup"] = false;

$tdataCUST_ALLOC [".showViewInPopup"] = false;

// page's base css files names
$popupPagesLayoutNames = array ();

;
$popupPagesLayoutNames ["add"] = "add2";
$tdataCUST_ALLOC [".popupPagesLayoutNames"] = $popupPagesLayoutNames;

$tdataCUST_ALLOC [".fieldsForRegister"] = array ();

$tdataCUST_ALLOC [".listAjax"] = false;

$tdataCUST_ALLOC [".audit"] = false;

$tdataCUST_ALLOC [".locking"] = false;

$tdataCUST_ALLOC [".add"] = true;
$tdataCUST_ALLOC [".afterAddAction"] = 1;
$tdataCUST_ALLOC [".closePopupAfterAdd"] = 1;
$tdataCUST_ALLOC [".afterAddActionDetTable"] = "";

$tdataCUST_ALLOC [".list"] = true;

$tdataCUST_ALLOC [".import"] = true;

$tdataCUST_ALLOC [".exportTo"] = true;

$tdataCUST_ALLOC [".printFriendly"] = true;

$tdataCUST_ALLOC [".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataCUST_ALLOC [".searchSaving"] = false;
//

$tdataCUST_ALLOC [".showSearchPanel"] = true;
$tdataCUST_ALLOC [".flexibleSearch"] = true;

if (isMobile ())
	$tdataCUST_ALLOC [".isUseAjaxSuggest"] = false;
else
	$tdataCUST_ALLOC [".isUseAjaxSuggest"] = true;

$tdataCUST_ALLOC [".rowHighlite"] = true;

$tdataCUST_ALLOC [".addPageEvents"] = false;

// use timepicker for search panel
$tdataCUST_ALLOC [".isUseTimeForSearch"] = false;

$tdataCUST_ALLOC [".allSearchFields"] = array ();
$tdataCUST_ALLOC [".filterFields"] = array ();
$tdataCUST_ALLOC [".requiredSearchFields"] = array ();

$tdataCUST_ALLOC [".allSearchFields"] [] = "RSAName";
$tdataCUST_ALLOC [".allSearchFields"] [] = "Location";
$tdataCUST_ALLOC [".allSearchFields"] [] = "Supervisor";
$tdataCUST_ALLOC [".allSearchFields"] [] = "Jul-2 WK-27";
$tdataCUST_ALLOC [".allSearchFields"] [] = "Jul-9 WK-28";
$tdataCUST_ALLOC [".allSearchFields"] [] = "Jul-16 WK-29";
$tdataCUST_ALLOC [".allSearchFields"] [] = "Jul-23 WK-30";
$tdataCUST_ALLOC [".allSearchFields"] [] = "Jul-30 WK-31";
$tdataCUST_ALLOC [".allSearchFields"] [] = "Aug-6 WK-32";
$tdataCUST_ALLOC [".allSearchFields"] [] = "Aug-13 WK-33";
$tdataCUST_ALLOC [".allSearchFields"] [] = "Aug-20 WK-34";
$tdataCUST_ALLOC [".allSearchFields"] [] = "Aug-27 WK-35";
$tdataCUST_ALLOC [".allSearchFields"] [] = "Sep-3 WK-36";
$tdataCUST_ALLOC [".allSearchFields"] [] = "Sep-10 WK-37";
$tdataCUST_ALLOC [".allSearchFields"] [] = "Sep-17 WK-38";
$tdataCUST_ALLOC [".allSearchFields"] [] = "Sep-24 WK-39";
$tdataCUST_ALLOC [".allSearchFields"] [] = "Oct-1 WK-40";
$tdataCUST_ALLOC [".allSearchFields"] [] = "Oct-8 WK-41";
$tdataCUST_ALLOC [".allSearchFields"] [] = "Oct-15 WK-42";
$tdataCUST_ALLOC [".allSearchFields"] [] = "Oct-22 WK-43";
$tdataCUST_ALLOC [".allSearchFields"] [] = "Oct-29 WK-44";
$tdataCUST_ALLOC [".allSearchFields"] [] = "Nov-5 WK-45";
$tdataCUST_ALLOC [".allSearchFields"] [] = "Nov-12 WK-46";
$tdataCUST_ALLOC [".allSearchFields"] [] = "Nov-19 WK-47";
$tdataCUST_ALLOC [".allSearchFields"] [] = "Nov-26 WK-48";
$tdataCUST_ALLOC [".allSearchFields"] [] = "Dec-3 WK-49";
$tdataCUST_ALLOC [".allSearchFields"] [] = "Dec-10 WK-50";
$tdataCUST_ALLOC [".allSearchFields"] [] = "Dec-17 WK-51";
$tdataCUST_ALLOC [".allSearchFields"] [] = "Dec-24 WK-52";
$tdataCUST_ALLOC [".allSearchFields"] [] = "Dec-31 WK-53";

$tdataCUST_ALLOC [".googleLikeFields"] = array ();
$tdataCUST_ALLOC [".googleLikeFields"] [] = "RSAName";
$tdataCUST_ALLOC [".googleLikeFields"] [] = "Location";
$tdataCUST_ALLOC [".googleLikeFields"] [] = "Supervisor";
$tdataCUST_ALLOC [".googleLikeFields"] [] = "AutCalID";
$tdataCUST_ALLOC [".googleLikeFields"] [] = "Jul-2 WK-27";
$tdataCUST_ALLOC [".googleLikeFields"] [] = "Jul-9 WK-28";
$tdataCUST_ALLOC [".googleLikeFields"] [] = "Jul-16 WK-29";
$tdataCUST_ALLOC [".googleLikeFields"] [] = "Jul-23 WK-30";
$tdataCUST_ALLOC [".googleLikeFields"] [] = "Aug-6 WK-32";
$tdataCUST_ALLOC [".googleLikeFields"] [] = "Aug-13 WK-33";
$tdataCUST_ALLOC [".googleLikeFields"] [] = "Aug-20 WK-34";
$tdataCUST_ALLOC [".googleLikeFields"] [] = "Aug-27 WK-35";
$tdataCUST_ALLOC [".googleLikeFields"] [] = "Sep-3 WK-36";
$tdataCUST_ALLOC [".googleLikeFields"] [] = "Sep-10 WK-37";
$tdataCUST_ALLOC [".googleLikeFields"] [] = "Sep-17 WK-38";
$tdataCUST_ALLOC [".googleLikeFields"] [] = "Sep-24 WK-39";
$tdataCUST_ALLOC [".googleLikeFields"] [] = "Oct-1 WK-40";
$tdataCUST_ALLOC [".googleLikeFields"] [] = "Oct-8 WK-41";
$tdataCUST_ALLOC [".googleLikeFields"] [] = "Oct-15 WK-42";
$tdataCUST_ALLOC [".googleLikeFields"] [] = "Oct-22 WK-43";
$tdataCUST_ALLOC [".googleLikeFields"] [] = "Oct-29 WK-44";
$tdataCUST_ALLOC [".googleLikeFields"] [] = "Nov-5 WK-45";
$tdataCUST_ALLOC [".googleLikeFields"] [] = "Nov-12 WK-46";
$tdataCUST_ALLOC [".googleLikeFields"] [] = "Nov-19 WK-47";
$tdataCUST_ALLOC [".googleLikeFields"] [] = "Nov-26 WK-48";
$tdataCUST_ALLOC [".googleLikeFields"] [] = "Dec-3 WK-49";
$tdataCUST_ALLOC [".googleLikeFields"] [] = "Dec-10 WK-50";
$tdataCUST_ALLOC [".googleLikeFields"] [] = "Dec-17 WK-51";
$tdataCUST_ALLOC [".googleLikeFields"] [] = "Dec-24 WK-52";
$tdataCUST_ALLOC [".googleLikeFields"] [] = "Dec-31 WK-53";
$tdataCUST_ALLOC [".googleLikeFields"] [] = "Jul-30 WK-31";

$tdataCUST_ALLOC [".advSearchFields"] = array ();
$tdataCUST_ALLOC [".advSearchFields"] [] = "RSAName";
$tdataCUST_ALLOC [".advSearchFields"] [] = "Location";
$tdataCUST_ALLOC [".advSearchFields"] [] = "Supervisor";
$tdataCUST_ALLOC [".advSearchFields"] [] = "Jul-2 WK-27";
$tdataCUST_ALLOC [".advSearchFields"] [] = "Jul-9 WK-28";
$tdataCUST_ALLOC [".advSearchFields"] [] = "Jul-16 WK-29";
$tdataCUST_ALLOC [".advSearchFields"] [] = "Jul-23 WK-30";
$tdataCUST_ALLOC [".advSearchFields"] [] = "Jul-30 WK-31";
$tdataCUST_ALLOC [".advSearchFields"] [] = "Aug-6 WK-32";
$tdataCUST_ALLOC [".advSearchFields"] [] = "Aug-13 WK-33";
$tdataCUST_ALLOC [".advSearchFields"] [] = "Aug-20 WK-34";
$tdataCUST_ALLOC [".advSearchFields"] [] = "Aug-27 WK-35";
$tdataCUST_ALLOC [".advSearchFields"] [] = "Sep-3 WK-36";
$tdataCUST_ALLOC [".advSearchFields"] [] = "Sep-10 WK-37";
$tdataCUST_ALLOC [".advSearchFields"] [] = "Sep-17 WK-38";
$tdataCUST_ALLOC [".advSearchFields"] [] = "Sep-24 WK-39";
$tdataCUST_ALLOC [".advSearchFields"] [] = "Oct-1 WK-40";
$tdataCUST_ALLOC [".advSearchFields"] [] = "Oct-8 WK-41";
$tdataCUST_ALLOC [".advSearchFields"] [] = "Oct-15 WK-42";
$tdataCUST_ALLOC [".advSearchFields"] [] = "Oct-22 WK-43";
$tdataCUST_ALLOC [".advSearchFields"] [] = "Oct-29 WK-44";
$tdataCUST_ALLOC [".advSearchFields"] [] = "Nov-5 WK-45";
$tdataCUST_ALLOC [".advSearchFields"] [] = "Nov-12 WK-46";
$tdataCUST_ALLOC [".advSearchFields"] [] = "Nov-19 WK-47";
$tdataCUST_ALLOC [".advSearchFields"] [] = "Nov-26 WK-48";
$tdataCUST_ALLOC [".advSearchFields"] [] = "Dec-3 WK-49";
$tdataCUST_ALLOC [".advSearchFields"] [] = "Dec-10 WK-50";
$tdataCUST_ALLOC [".advSearchFields"] [] = "Dec-17 WK-51";
$tdataCUST_ALLOC [".advSearchFields"] [] = "Dec-24 WK-52";
$tdataCUST_ALLOC [".advSearchFields"] [] = "Dec-31 WK-53";

$tdataCUST_ALLOC [".tableType"] = "list";

$tdataCUST_ALLOC [".printerPageOrientation"] = 0;
$tdataCUST_ALLOC [".nPrinterPageScale"] = 100;

$tdataCUST_ALLOC [".nPrinterSplitRecords"] = 40;

$tdataCUST_ALLOC [".nPrinterPDFSplitRecords"] = 40;

$tdataCUST_ALLOC [".geocodingEnabled"] = false;

// view page pdf

// print page pdf

$tdataCUST_ALLOC [".pageSize"] = 10;

$tdataCUST_ALLOC [".warnLeavingPages"] = true;

$tstrOrderBy = "";
if (strlen ( $tstrOrderBy ) && strtolower ( substr ( $tstrOrderBy, 0, 8 ) ) != "order by")
	$tstrOrderBy = "order by " . $tstrOrderBy;
$tdataCUST_ALLOC [".strOrderBy"] = $tstrOrderBy;

$tdataCUST_ALLOC [".orderindexes"] = array ();

$tdataCUST_ALLOC [".sqlHead"] = "SELECT  Distinct customerallocation.RSAName,  customerallocation.Location,  customerallocation.Supervisor,  calandar.AutCalID,  calandar.`Jul-2 WK-27`,  calandar.`Jul-9 WK-28`,  calandar.`Jul-16 WK-29`,  calandar.`Jul-23 WK-30`,  calandar.`Aug-6 WK-32`,  calandar.`Aug-13 WK-33`,  calandar.`Aug-20 WK-34`,  calandar.`Aug-27 WK-35`,  calandar.`Sep-3 WK-36`,  calandar.`Sep-10 WK-37`,  calandar.`Sep-17 WK-38`,  calandar.`Sep-24 WK-39`,  calandar.`Oct-1 WK-40`,  calandar.`Oct-8 WK-41`,  calandar.`Oct-15 WK-42`,  calandar.`Oct-22 WK-43`,  calandar.`Oct-29 WK-44`,  calandar.`Nov-5 WK-45`,  calandar.`Nov-12 WK-46`,  calandar.`Nov-19 WK-47`,  calandar.`Nov-26 WK-48`,  calandar.`Dec-3 WK-49`,  calandar.`Dec-10 WK-50`,  calandar.`Dec-17 WK-51`,  calandar.`Dec-24 WK-52`,  calandar.`Dec-31 WK-53`,  calandar.`Jul-30 WK-31`";
$tdataCUST_ALLOC [".sqlFrom"] = "FROM customerallocation  LEFT OUTER JOIN calandar ON customerallocation.AutCustID = calandar.AutCalID";
$tdataCUST_ALLOC [".sqlWhereExpr"] = "";
$tdataCUST_ALLOC [".sqlTail"] = "";

// fill array of records per page for list and report without group fields
$arrRPP = array ();
$arrRPP [] = 10;
$arrRPP [] = 20;
$arrRPP [] = 30;
$arrRPP [] = 50;
$arrRPP [] = 100;
$arrRPP [] = 500;
$arrRPP [] = - 1;
$tdataCUST_ALLOC [".arrRecsPerPage"] = $arrRPP;

// fill array of groups per page for report with group fields
$arrGPP = array ();
$arrGPP [] = 1;
$arrGPP [] = 3;
$arrGPP [] = 5;
$arrGPP [] = 10;
$arrGPP [] = 50;
$arrGPP [] = 100;
$arrGPP [] = - 1;
$tdataCUST_ALLOC [".arrGroupsPerPage"] = $arrGPP;

$tableKeysCUST_ALLOC = array ();
$tdataCUST_ALLOC [".Keys"] = $tableKeysCUST_ALLOC;

$tdataCUST_ALLOC [".listFields"] = array ();
$tdataCUST_ALLOC [".listFields"] [] = "RSAName";
$tdataCUST_ALLOC [".listFields"] [] = "Location";
$tdataCUST_ALLOC [".listFields"] [] = "Supervisor";
$tdataCUST_ALLOC [".listFields"] [] = "Jul-2 WK-27";
$tdataCUST_ALLOC [".listFields"] [] = "Jul-9 WK-28";
$tdataCUST_ALLOC [".listFields"] [] = "Jul-16 WK-29";
$tdataCUST_ALLOC [".listFields"] [] = "Jul-23 WK-30";
$tdataCUST_ALLOC [".listFields"] [] = "Jul-30 WK-31";
$tdataCUST_ALLOC [".listFields"] [] = "Aug-6 WK-32";
$tdataCUST_ALLOC [".listFields"] [] = "Aug-13 WK-33";
$tdataCUST_ALLOC [".listFields"] [] = "Aug-20 WK-34";
$tdataCUST_ALLOC [".listFields"] [] = "Aug-27 WK-35";
$tdataCUST_ALLOC [".listFields"] [] = "Sep-3 WK-36";
$tdataCUST_ALLOC [".listFields"] [] = "Sep-10 WK-37";
$tdataCUST_ALLOC [".listFields"] [] = "Sep-17 WK-38";
$tdataCUST_ALLOC [".listFields"] [] = "Sep-24 WK-39";
$tdataCUST_ALLOC [".listFields"] [] = "Oct-1 WK-40";
$tdataCUST_ALLOC [".listFields"] [] = "Oct-8 WK-41";
$tdataCUST_ALLOC [".listFields"] [] = "Oct-15 WK-42";
$tdataCUST_ALLOC [".listFields"] [] = "Oct-22 WK-43";
$tdataCUST_ALLOC [".listFields"] [] = "Oct-29 WK-44";
$tdataCUST_ALLOC [".listFields"] [] = "Nov-5 WK-45";
$tdataCUST_ALLOC [".listFields"] [] = "Nov-12 WK-46";
$tdataCUST_ALLOC [".listFields"] [] = "Nov-19 WK-47";
$tdataCUST_ALLOC [".listFields"] [] = "Nov-26 WK-48";
$tdataCUST_ALLOC [".listFields"] [] = "Dec-3 WK-49";
$tdataCUST_ALLOC [".listFields"] [] = "Dec-10 WK-50";
$tdataCUST_ALLOC [".listFields"] [] = "Dec-17 WK-51";
$tdataCUST_ALLOC [".listFields"] [] = "Dec-24 WK-52";
$tdataCUST_ALLOC [".listFields"] [] = "Dec-31 WK-53";

$tdataCUST_ALLOC [".hideMobileList"] = array ();

$tdataCUST_ALLOC [".viewFields"] = array ();

$tdataCUST_ALLOC [".addFields"] = array ();
$tdataCUST_ALLOC [".addFields"] [] = "RSAName";
$tdataCUST_ALLOC [".addFields"] [] = "Location";
$tdataCUST_ALLOC [".addFields"] [] = "Supervisor";

$tdataCUST_ALLOC [".masterListFields"] = array ();
$tdataCUST_ALLOC [".masterListFields"] [] = "RSAName";
$tdataCUST_ALLOC [".masterListFields"] [] = "Location";
$tdataCUST_ALLOC [".masterListFields"] [] = "Supervisor";
$tdataCUST_ALLOC [".masterListFields"] [] = "AutCalID";
$tdataCUST_ALLOC [".masterListFields"] [] = "Jul-2 WK-27";
$tdataCUST_ALLOC [".masterListFields"] [] = "Jul-9 WK-28";
$tdataCUST_ALLOC [".masterListFields"] [] = "Jul-16 WK-29";
$tdataCUST_ALLOC [".masterListFields"] [] = "Jul-23 WK-30";
$tdataCUST_ALLOC [".masterListFields"] [] = "Jul-30 WK-31";
$tdataCUST_ALLOC [".masterListFields"] [] = "Aug-6 WK-32";
$tdataCUST_ALLOC [".masterListFields"] [] = "Aug-13 WK-33";
$tdataCUST_ALLOC [".masterListFields"] [] = "Aug-20 WK-34";
$tdataCUST_ALLOC [".masterListFields"] [] = "Aug-27 WK-35";
$tdataCUST_ALLOC [".masterListFields"] [] = "Sep-3 WK-36";
$tdataCUST_ALLOC [".masterListFields"] [] = "Sep-10 WK-37";
$tdataCUST_ALLOC [".masterListFields"] [] = "Sep-17 WK-38";
$tdataCUST_ALLOC [".masterListFields"] [] = "Sep-24 WK-39";
$tdataCUST_ALLOC [".masterListFields"] [] = "Oct-1 WK-40";
$tdataCUST_ALLOC [".masterListFields"] [] = "Oct-8 WK-41";
$tdataCUST_ALLOC [".masterListFields"] [] = "Oct-15 WK-42";
$tdataCUST_ALLOC [".masterListFields"] [] = "Oct-22 WK-43";
$tdataCUST_ALLOC [".masterListFields"] [] = "Oct-29 WK-44";
$tdataCUST_ALLOC [".masterListFields"] [] = "Nov-5 WK-45";
$tdataCUST_ALLOC [".masterListFields"] [] = "Nov-12 WK-46";
$tdataCUST_ALLOC [".masterListFields"] [] = "Nov-19 WK-47";
$tdataCUST_ALLOC [".masterListFields"] [] = "Nov-26 WK-48";
$tdataCUST_ALLOC [".masterListFields"] [] = "Dec-3 WK-49";
$tdataCUST_ALLOC [".masterListFields"] [] = "Dec-10 WK-50";
$tdataCUST_ALLOC [".masterListFields"] [] = "Dec-17 WK-51";
$tdataCUST_ALLOC [".masterListFields"] [] = "Dec-24 WK-52";
$tdataCUST_ALLOC [".masterListFields"] [] = "Dec-31 WK-53";

$tdataCUST_ALLOC [".inlineAddFields"] = array ();

$tdataCUST_ALLOC [".editFields"] = array ();

$tdataCUST_ALLOC [".inlineEditFields"] = array ();

$tdataCUST_ALLOC [".exportFields"] = array ();
$tdataCUST_ALLOC [".exportFields"] [] = "RSAName";
$tdataCUST_ALLOC [".exportFields"] [] = "Location";
$tdataCUST_ALLOC [".exportFields"] [] = "Supervisor";
$tdataCUST_ALLOC [".exportFields"] [] = "Jul-2 WK-27";
$tdataCUST_ALLOC [".exportFields"] [] = "Jul-9 WK-28";
$tdataCUST_ALLOC [".exportFields"] [] = "Jul-16 WK-29";
$tdataCUST_ALLOC [".exportFields"] [] = "Jul-23 WK-30";
$tdataCUST_ALLOC [".exportFields"] [] = "Jul-30 WK-31";
$tdataCUST_ALLOC [".exportFields"] [] = "Aug-6 WK-32";
$tdataCUST_ALLOC [".exportFields"] [] = "Aug-13 WK-33";
$tdataCUST_ALLOC [".exportFields"] [] = "Aug-20 WK-34";
$tdataCUST_ALLOC [".exportFields"] [] = "Aug-27 WK-35";
$tdataCUST_ALLOC [".exportFields"] [] = "Sep-3 WK-36";
$tdataCUST_ALLOC [".exportFields"] [] = "Sep-10 WK-37";
$tdataCUST_ALLOC [".exportFields"] [] = "Sep-17 WK-38";
$tdataCUST_ALLOC [".exportFields"] [] = "Sep-24 WK-39";
$tdataCUST_ALLOC [".exportFields"] [] = "Oct-1 WK-40";
$tdataCUST_ALLOC [".exportFields"] [] = "Oct-8 WK-41";
$tdataCUST_ALLOC [".exportFields"] [] = "Oct-15 WK-42";
$tdataCUST_ALLOC [".exportFields"] [] = "Oct-22 WK-43";
$tdataCUST_ALLOC [".exportFields"] [] = "Oct-29 WK-44";
$tdataCUST_ALLOC [".exportFields"] [] = "Nov-5 WK-45";
$tdataCUST_ALLOC [".exportFields"] [] = "Nov-12 WK-46";
$tdataCUST_ALLOC [".exportFields"] [] = "Nov-19 WK-47";
$tdataCUST_ALLOC [".exportFields"] [] = "Nov-26 WK-48";
$tdataCUST_ALLOC [".exportFields"] [] = "Dec-3 WK-49";
$tdataCUST_ALLOC [".exportFields"] [] = "Dec-10 WK-50";
$tdataCUST_ALLOC [".exportFields"] [] = "Dec-17 WK-51";
$tdataCUST_ALLOC [".exportFields"] [] = "Dec-24 WK-52";
$tdataCUST_ALLOC [".exportFields"] [] = "Dec-31 WK-53";

$tdataCUST_ALLOC [".importFields"] = array ();
$tdataCUST_ALLOC [".importFields"] [] = "RSAName";
$tdataCUST_ALLOC [".importFields"] [] = "Location";
$tdataCUST_ALLOC [".importFields"] [] = "Supervisor";
$tdataCUST_ALLOC [".importFields"] [] = "AutCalID";
$tdataCUST_ALLOC [".importFields"] [] = "Jul-2 WK-27";
$tdataCUST_ALLOC [".importFields"] [] = "Jul-9 WK-28";
$tdataCUST_ALLOC [".importFields"] [] = "Jul-16 WK-29";
$tdataCUST_ALLOC [".importFields"] [] = "Jul-23 WK-30";
$tdataCUST_ALLOC [".importFields"] [] = "Aug-6 WK-32";
$tdataCUST_ALLOC [".importFields"] [] = "Aug-13 WK-33";
$tdataCUST_ALLOC [".importFields"] [] = "Aug-20 WK-34";
$tdataCUST_ALLOC [".importFields"] [] = "Aug-27 WK-35";
$tdataCUST_ALLOC [".importFields"] [] = "Sep-3 WK-36";
$tdataCUST_ALLOC [".importFields"] [] = "Sep-10 WK-37";
$tdataCUST_ALLOC [".importFields"] [] = "Sep-17 WK-38";
$tdataCUST_ALLOC [".importFields"] [] = "Sep-24 WK-39";
$tdataCUST_ALLOC [".importFields"] [] = "Oct-1 WK-40";
$tdataCUST_ALLOC [".importFields"] [] = "Oct-8 WK-41";
$tdataCUST_ALLOC [".importFields"] [] = "Oct-15 WK-42";
$tdataCUST_ALLOC [".importFields"] [] = "Oct-22 WK-43";
$tdataCUST_ALLOC [".importFields"] [] = "Oct-29 WK-44";
$tdataCUST_ALLOC [".importFields"] [] = "Nov-5 WK-45";
$tdataCUST_ALLOC [".importFields"] [] = "Nov-12 WK-46";
$tdataCUST_ALLOC [".importFields"] [] = "Nov-19 WK-47";
$tdataCUST_ALLOC [".importFields"] [] = "Nov-26 WK-48";
$tdataCUST_ALLOC [".importFields"] [] = "Dec-3 WK-49";
$tdataCUST_ALLOC [".importFields"] [] = "Dec-10 WK-50";
$tdataCUST_ALLOC [".importFields"] [] = "Dec-17 WK-51";
$tdataCUST_ALLOC [".importFields"] [] = "Dec-24 WK-52";
$tdataCUST_ALLOC [".importFields"] [] = "Dec-31 WK-53";
$tdataCUST_ALLOC [".importFields"] [] = "Jul-30 WK-31";

$tdataCUST_ALLOC [".printFields"] = array ();
$tdataCUST_ALLOC [".printFields"] [] = "RSAName";
$tdataCUST_ALLOC [".printFields"] [] = "Location";
$tdataCUST_ALLOC [".printFields"] [] = "Supervisor";
$tdataCUST_ALLOC [".printFields"] [] = "Jul-2 WK-27";
$tdataCUST_ALLOC [".printFields"] [] = "Jul-9 WK-28";
$tdataCUST_ALLOC [".printFields"] [] = "Jul-16 WK-29";
$tdataCUST_ALLOC [".printFields"] [] = "Jul-23 WK-30";
$tdataCUST_ALLOC [".printFields"] [] = "Jul-30 WK-31";
$tdataCUST_ALLOC [".printFields"] [] = "Aug-6 WK-32";
$tdataCUST_ALLOC [".printFields"] [] = "Aug-13 WK-33";
$tdataCUST_ALLOC [".printFields"] [] = "Aug-20 WK-34";
$tdataCUST_ALLOC [".printFields"] [] = "Aug-27 WK-35";
$tdataCUST_ALLOC [".printFields"] [] = "Sep-3 WK-36";
$tdataCUST_ALLOC [".printFields"] [] = "Sep-10 WK-37";
$tdataCUST_ALLOC [".printFields"] [] = "Sep-17 WK-38";
$tdataCUST_ALLOC [".printFields"] [] = "Sep-24 WK-39";
$tdataCUST_ALLOC [".printFields"] [] = "Oct-1 WK-40";
$tdataCUST_ALLOC [".printFields"] [] = "Oct-8 WK-41";
$tdataCUST_ALLOC [".printFields"] [] = "Oct-15 WK-42";
$tdataCUST_ALLOC [".printFields"] [] = "Oct-22 WK-43";
$tdataCUST_ALLOC [".printFields"] [] = "Oct-29 WK-44";
$tdataCUST_ALLOC [".printFields"] [] = "Nov-5 WK-45";
$tdataCUST_ALLOC [".printFields"] [] = "Nov-12 WK-46";
$tdataCUST_ALLOC [".printFields"] [] = "Nov-19 WK-47";
$tdataCUST_ALLOC [".printFields"] [] = "Nov-26 WK-48";
$tdataCUST_ALLOC [".printFields"] [] = "Dec-3 WK-49";
$tdataCUST_ALLOC [".printFields"] [] = "Dec-10 WK-50";
$tdataCUST_ALLOC [".printFields"] [] = "Dec-17 WK-51";
$tdataCUST_ALLOC [".printFields"] [] = "Dec-24 WK-52";
$tdataCUST_ALLOC [".printFields"] [] = "Dec-31 WK-53";

// RSAName
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 1;
$fdata ["strName"] = "RSAName";
$fdata ["GoodName"] = "RSAName";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "CUST_ALLOC", "RSAName" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "RSAName";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "customerallocation.RSAName";

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
$edata ["autoCompleteFieldsOnEdit"] = 1;
$edata ["autoCompleteFields"] = array ();
$edata ["autoCompleteFields"] [] = array (
		'masterF' => "Location",
		'lookupF' => "Location" 
);
$edata ["autoCompleteFields"] [] = array (
		'masterF' => "Supervisor",
		'lookupF' => "Supervisor" 
);
$edata ["LCType"] = 0;

$edata ["LinkField"] = "FullName";
$edata ["LinkFieldType"] = 3;
$edata ["DisplayField"] = "FullName";

$edata ["LookupOrderBy"] = "FirstName";

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
// End Edit Formats

$fdata ["isSeparate"] = false;

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

// the end of search options settings

$tdataCUST_ALLOC ["RSAName"] = $fdata;
// Location
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 2;
$fdata ["strName"] = "Location";
$fdata ["GoodName"] = "Location";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "CUST_ALLOC", "Location" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Location";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "customerallocation.Location";

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
// End Edit Formats

$fdata ["isSeparate"] = false;

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

// the end of search options settings

$tdataCUST_ALLOC ["Location"] = $fdata;
// Supervisor
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 3;
$fdata ["strName"] = "Supervisor";
$fdata ["GoodName"] = "Supervisor";
$fdata ["ownerTable"] = "customerallocation";
$fdata ["Label"] = GetFieldLabel ( "CUST_ALLOC", "Supervisor" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Supervisor";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "customerallocation.Supervisor";

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

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

// the end of search options settings

$tdataCUST_ALLOC ["Supervisor"] = $fdata;
// AutCalID
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 4;
$fdata ["strName"] = "AutCalID";
$fdata ["GoodName"] = "AutCalID";
$fdata ["ownerTable"] = "calandar";
$fdata ["Label"] = GetFieldLabel ( "CUST_ALLOC", "AutCalID" );
$fdata ["FieldType"] = 3;

$fdata ["AutoInc"] = true;

$fdata ["strField"] = "AutCalID";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "calandar.AutCalID";

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

$tdataCUST_ALLOC ["AutCalID"] = $fdata;
// Jul-2 WK-27
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 5;
$fdata ["strName"] = "Jul-2 WK-27";
$fdata ["GoodName"] = "Jul_2_WK_27";
$fdata ["ownerTable"] = "calandar";
$fdata ["Label"] = GetFieldLabel ( "CUST_ALLOC", "Jul_2_WK_27" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Jul-2 WK-27";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "calandar.`Jul-2 WK-27`";

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

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

// the end of search options settings

$tdataCUST_ALLOC ["Jul-2 WK-27"] = $fdata;
// Jul-9 WK-28
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 6;
$fdata ["strName"] = "Jul-9 WK-28";
$fdata ["GoodName"] = "Jul_9_WK_28";
$fdata ["ownerTable"] = "calandar";
$fdata ["Label"] = GetFieldLabel ( "CUST_ALLOC", "Jul_9_WK_28" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Jul-9 WK-28";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "calandar.`Jul-9 WK-28`";

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

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

// the end of search options settings

$tdataCUST_ALLOC ["Jul-9 WK-28"] = $fdata;
// Jul-16 WK-29
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 7;
$fdata ["strName"] = "Jul-16 WK-29";
$fdata ["GoodName"] = "Jul_16_WK_29";
$fdata ["ownerTable"] = "calandar";
$fdata ["Label"] = GetFieldLabel ( "CUST_ALLOC", "Jul_16_WK_29" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Jul-16 WK-29";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "calandar.`Jul-16 WK-29`";

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

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

// the end of search options settings

$tdataCUST_ALLOC ["Jul-16 WK-29"] = $fdata;
// Jul-23 WK-30
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 8;
$fdata ["strName"] = "Jul-23 WK-30";
$fdata ["GoodName"] = "Jul_23_WK_30";
$fdata ["ownerTable"] = "calandar";
$fdata ["Label"] = GetFieldLabel ( "CUST_ALLOC", "Jul_23_WK_30" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Jul-23 WK-30";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "calandar.`Jul-23 WK-30`";

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

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

// the end of search options settings

$tdataCUST_ALLOC ["Jul-23 WK-30"] = $fdata;
// Aug-6 WK-32
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 9;
$fdata ["strName"] = "Aug-6 WK-32";
$fdata ["GoodName"] = "Aug_6_WK_32";
$fdata ["ownerTable"] = "calandar";
$fdata ["Label"] = GetFieldLabel ( "CUST_ALLOC", "Aug_6_WK_32" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Aug-6 WK-32";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "calandar.`Aug-6 WK-32`";

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

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

// the end of search options settings

$tdataCUST_ALLOC ["Aug-6 WK-32"] = $fdata;
// Aug-13 WK-33
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 10;
$fdata ["strName"] = "Aug-13 WK-33";
$fdata ["GoodName"] = "Aug_13_WK_33";
$fdata ["ownerTable"] = "calandar";
$fdata ["Label"] = GetFieldLabel ( "CUST_ALLOC", "Aug_13_WK_33" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Aug-13 WK-33";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "calandar.`Aug-13 WK-33`";

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

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

// the end of search options settings

$tdataCUST_ALLOC ["Aug-13 WK-33"] = $fdata;
// Aug-20 WK-34
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 11;
$fdata ["strName"] = "Aug-20 WK-34";
$fdata ["GoodName"] = "Aug_20_WK_34";
$fdata ["ownerTable"] = "calandar";
$fdata ["Label"] = GetFieldLabel ( "CUST_ALLOC", "Aug_20_WK_34" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Aug-20 WK-34";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "calandar.`Aug-20 WK-34`";

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

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

// the end of search options settings

$tdataCUST_ALLOC ["Aug-20 WK-34"] = $fdata;
// Aug-27 WK-35
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 12;
$fdata ["strName"] = "Aug-27 WK-35";
$fdata ["GoodName"] = "Aug_27_WK_35";
$fdata ["ownerTable"] = "calandar";
$fdata ["Label"] = GetFieldLabel ( "CUST_ALLOC", "Aug_27_WK_35" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Aug-27 WK-35";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "calandar.`Aug-27 WK-35`";

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

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

// the end of search options settings

$tdataCUST_ALLOC ["Aug-27 WK-35"] = $fdata;
// Sep-3 WK-36
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 13;
$fdata ["strName"] = "Sep-3 WK-36";
$fdata ["GoodName"] = "Sep_3_WK_36";
$fdata ["ownerTable"] = "calandar";
$fdata ["Label"] = GetFieldLabel ( "CUST_ALLOC", "Sep_3_WK_36" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Sep-3 WK-36";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "calandar.`Sep-3 WK-36`";

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

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

// the end of search options settings

$tdataCUST_ALLOC ["Sep-3 WK-36"] = $fdata;
// Sep-10 WK-37
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 14;
$fdata ["strName"] = "Sep-10 WK-37";
$fdata ["GoodName"] = "Sep_10_WK_37";
$fdata ["ownerTable"] = "calandar";
$fdata ["Label"] = GetFieldLabel ( "CUST_ALLOC", "Sep_10_WK_37" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Sep-10 WK-37";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "calandar.`Sep-10 WK-37`";

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

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

// the end of search options settings

$tdataCUST_ALLOC ["Sep-10 WK-37"] = $fdata;
// Sep-17 WK-38
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 15;
$fdata ["strName"] = "Sep-17 WK-38";
$fdata ["GoodName"] = "Sep_17_WK_38";
$fdata ["ownerTable"] = "calandar";
$fdata ["Label"] = GetFieldLabel ( "CUST_ALLOC", "Sep_17_WK_38" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Sep-17 WK-38";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "calandar.`Sep-17 WK-38`";

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

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

// the end of search options settings

$tdataCUST_ALLOC ["Sep-17 WK-38"] = $fdata;
// Sep-24 WK-39
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 16;
$fdata ["strName"] = "Sep-24 WK-39";
$fdata ["GoodName"] = "Sep_24_WK_39";
$fdata ["ownerTable"] = "calandar";
$fdata ["Label"] = GetFieldLabel ( "CUST_ALLOC", "Sep_24_WK_39" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Sep-24 WK-39";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "calandar.`Sep-24 WK-39`";

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

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

// the end of search options settings

$tdataCUST_ALLOC ["Sep-24 WK-39"] = $fdata;
// Oct-1 WK-40
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 17;
$fdata ["strName"] = "Oct-1 WK-40";
$fdata ["GoodName"] = "Oct_1_WK_40";
$fdata ["ownerTable"] = "calandar";
$fdata ["Label"] = GetFieldLabel ( "CUST_ALLOC", "Oct_1_WK_40" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Oct-1 WK-40";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "calandar.`Oct-1 WK-40`";

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

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

// the end of search options settings

$tdataCUST_ALLOC ["Oct-1 WK-40"] = $fdata;
// Oct-8 WK-41
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 18;
$fdata ["strName"] = "Oct-8 WK-41";
$fdata ["GoodName"] = "Oct_8_WK_41";
$fdata ["ownerTable"] = "calandar";
$fdata ["Label"] = GetFieldLabel ( "CUST_ALLOC", "Oct_8_WK_41" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Oct-8 WK-41";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "calandar.`Oct-8 WK-41`";

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

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

// the end of search options settings

$tdataCUST_ALLOC ["Oct-8 WK-41"] = $fdata;
// Oct-15 WK-42
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 19;
$fdata ["strName"] = "Oct-15 WK-42";
$fdata ["GoodName"] = "Oct_15_WK_42";
$fdata ["ownerTable"] = "calandar";
$fdata ["Label"] = GetFieldLabel ( "CUST_ALLOC", "Oct_15_WK_42" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Oct-15 WK-42";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "calandar.`Oct-15 WK-42`";

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

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

// the end of search options settings

$tdataCUST_ALLOC ["Oct-15 WK-42"] = $fdata;
// Oct-22 WK-43
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 20;
$fdata ["strName"] = "Oct-22 WK-43";
$fdata ["GoodName"] = "Oct_22_WK_43";
$fdata ["ownerTable"] = "calandar";
$fdata ["Label"] = GetFieldLabel ( "CUST_ALLOC", "Oct_22_WK_43" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Oct-22 WK-43";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "calandar.`Oct-22 WK-43`";

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

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

// the end of search options settings

$tdataCUST_ALLOC ["Oct-22 WK-43"] = $fdata;
// Oct-29 WK-44
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 21;
$fdata ["strName"] = "Oct-29 WK-44";
$fdata ["GoodName"] = "Oct_29_WK_44";
$fdata ["ownerTable"] = "calandar";
$fdata ["Label"] = GetFieldLabel ( "CUST_ALLOC", "Oct_29_WK_44" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Oct-29 WK-44";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "calandar.`Oct-29 WK-44`";

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

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

// the end of search options settings

$tdataCUST_ALLOC ["Oct-29 WK-44"] = $fdata;
// Nov-5 WK-45
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 22;
$fdata ["strName"] = "Nov-5 WK-45";
$fdata ["GoodName"] = "Nov_5_WK_45";
$fdata ["ownerTable"] = "calandar";
$fdata ["Label"] = GetFieldLabel ( "CUST_ALLOC", "Nov_5_WK_45" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Nov-5 WK-45";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "calandar.`Nov-5 WK-45`";

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

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

// the end of search options settings

$tdataCUST_ALLOC ["Nov-5 WK-45"] = $fdata;
// Nov-12 WK-46
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 23;
$fdata ["strName"] = "Nov-12 WK-46";
$fdata ["GoodName"] = "Nov_12_WK_46";
$fdata ["ownerTable"] = "calandar";
$fdata ["Label"] = GetFieldLabel ( "CUST_ALLOC", "Nov_12_WK_46" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Nov-12 WK-46";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "calandar.`Nov-12 WK-46`";

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

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

// the end of search options settings

$tdataCUST_ALLOC ["Nov-12 WK-46"] = $fdata;
// Nov-19 WK-47
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 24;
$fdata ["strName"] = "Nov-19 WK-47";
$fdata ["GoodName"] = "Nov_19_WK_47";
$fdata ["ownerTable"] = "calandar";
$fdata ["Label"] = GetFieldLabel ( "CUST_ALLOC", "Nov_19_WK_47" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Nov-19 WK-47";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "calandar.`Nov-19 WK-47`";

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

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

// the end of search options settings

$tdataCUST_ALLOC ["Nov-19 WK-47"] = $fdata;
// Nov-26 WK-48
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 25;
$fdata ["strName"] = "Nov-26 WK-48";
$fdata ["GoodName"] = "Nov_26_WK_48";
$fdata ["ownerTable"] = "calandar";
$fdata ["Label"] = GetFieldLabel ( "CUST_ALLOC", "Nov_26_WK_48" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Nov-26 WK-48";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "calandar.`Nov-26 WK-48`";

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

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

// the end of search options settings

$tdataCUST_ALLOC ["Nov-26 WK-48"] = $fdata;
// Dec-3 WK-49
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 26;
$fdata ["strName"] = "Dec-3 WK-49";
$fdata ["GoodName"] = "Dec_3_WK_49";
$fdata ["ownerTable"] = "calandar";
$fdata ["Label"] = GetFieldLabel ( "CUST_ALLOC", "Dec_3_WK_49" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Dec-3 WK-49";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "calandar.`Dec-3 WK-49`";

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

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

// the end of search options settings

$tdataCUST_ALLOC ["Dec-3 WK-49"] = $fdata;
// Dec-10 WK-50
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 27;
$fdata ["strName"] = "Dec-10 WK-50";
$fdata ["GoodName"] = "Dec_10_WK_50";
$fdata ["ownerTable"] = "calandar";
$fdata ["Label"] = GetFieldLabel ( "CUST_ALLOC", "Dec_10_WK_50" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Dec-10 WK-50";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "calandar.`Dec-10 WK-50`";

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

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

// the end of search options settings

$tdataCUST_ALLOC ["Dec-10 WK-50"] = $fdata;
// Dec-17 WK-51
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 28;
$fdata ["strName"] = "Dec-17 WK-51";
$fdata ["GoodName"] = "Dec_17_WK_51";
$fdata ["ownerTable"] = "calandar";
$fdata ["Label"] = GetFieldLabel ( "CUST_ALLOC", "Dec_17_WK_51" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Dec-17 WK-51";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "calandar.`Dec-17 WK-51`";

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

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

// the end of search options settings

$tdataCUST_ALLOC ["Dec-17 WK-51"] = $fdata;
// Dec-24 WK-52
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 29;
$fdata ["strName"] = "Dec-24 WK-52";
$fdata ["GoodName"] = "Dec_24_WK_52";
$fdata ["ownerTable"] = "calandar";
$fdata ["Label"] = GetFieldLabel ( "CUST_ALLOC", "Dec_24_WK_52" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Dec-24 WK-52";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "calandar.`Dec-24 WK-52`";

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

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

// the end of search options settings

$tdataCUST_ALLOC ["Dec-24 WK-52"] = $fdata;
// Dec-31 WK-53
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 30;
$fdata ["strName"] = "Dec-31 WK-53";
$fdata ["GoodName"] = "Dec_31_WK_53";
$fdata ["ownerTable"] = "calandar";
$fdata ["Label"] = GetFieldLabel ( "CUST_ALLOC", "Dec_31_WK_53" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Dec-31 WK-53";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "calandar.`Dec-31 WK-53`";

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

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

// the end of search options settings

$tdataCUST_ALLOC ["Dec-31 WK-53"] = $fdata;
// Jul-30 WK-31
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 31;
$fdata ["strName"] = "Jul-30 WK-31";
$fdata ["GoodName"] = "Jul_30_WK_31";
$fdata ["ownerTable"] = "calandar";
$fdata ["Label"] = GetFieldLabel ( "CUST_ALLOC", "Jul_30_WK_31" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Jul-30 WK-31";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "calandar.`Jul-30 WK-31`";

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

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

// the end of search options settings

$tdataCUST_ALLOC ["Jul-30 WK-31"] = $fdata;

$tables_data ["CUST_ALLOC"] = &$tdataCUST_ALLOC;
$field_labels ["CUST_ALLOC"] = &$fieldLabelsCUST_ALLOC;
$fieldToolTips ["CUST_ALLOC"] = &$fieldToolTipsCUST_ALLOC;
$page_titles ["CUST_ALLOC"] = &$pageTitlesCUST_ALLOC;

// -----------------start prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData ["CUST_ALLOC"] = array ();

// tables which are master tables for current table (detail)
$masterTablesData ["CUST_ALLOC"] = array ();

// -----------------end prepare master-details data arrays ------------------------------//

require_once (getabspath ( "classes/sql.php" ));
function createSqlQuery_CUST_ALLOC() {
	$proto1 = array ();
	$proto1 ["m_strHead"] = "SELECT  Distinct";
	$proto1 ["m_strFieldList"] = "customerallocation.RSAName,  customerallocation.Location,  customerallocation.Supervisor,  calandar.AutCalID,  calandar.`Jul-2 WK-27`,  calandar.`Jul-9 WK-28`,  calandar.`Jul-16 WK-29`,  calandar.`Jul-23 WK-30`,  calandar.`Aug-6 WK-32`,  calandar.`Aug-13 WK-33`,  calandar.`Aug-20 WK-34`,  calandar.`Aug-27 WK-35`,  calandar.`Sep-3 WK-36`,  calandar.`Sep-10 WK-37`,  calandar.`Sep-17 WK-38`,  calandar.`Sep-24 WK-39`,  calandar.`Oct-1 WK-40`,  calandar.`Oct-8 WK-41`,  calandar.`Oct-15 WK-42`,  calandar.`Oct-22 WK-43`,  calandar.`Oct-29 WK-44`,  calandar.`Nov-5 WK-45`,  calandar.`Nov-12 WK-46`,  calandar.`Nov-19 WK-47`,  calandar.`Nov-26 WK-48`,  calandar.`Dec-3 WK-49`,  calandar.`Dec-10 WK-50`,  calandar.`Dec-17 WK-51`,  calandar.`Dec-24 WK-52`,  calandar.`Dec-31 WK-53`,  calandar.`Jul-30 WK-31`";
	$proto1 ["m_strFrom"] = "FROM customerallocation  LEFT OUTER JOIN calandar ON customerallocation.AutCustID = calandar.AutCalID";
	$proto1 ["m_strWhere"] = "";
	$proto1 ["m_strOrderBy"] = "";
	$proto1 ["m_strTail"] = "";
	$proto1 ["cipherer"] = null;
	$proto2 = array ();
	$proto2 ["m_sql"] = "";
	$proto2 ["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed ( array (
			"m_sql" => "" 
	) );
	
	$proto2 ["m_column"] = $obj;
	$proto2 ["m_contained"] = array ();
	$proto2 ["m_strCase"] = "";
	$proto2 ["m_havingmode"] = false;
	$proto2 ["m_inBrackets"] = false;
	$proto2 ["m_useAlias"] = false;
	$obj = new SQLLogicalExpr ( $proto2 );
	
	$proto1 ["m_where"] = $obj;
	$proto4 = array ();
	$proto4 ["m_sql"] = "";
	$proto4 ["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed ( array (
			"m_sql" => "" 
	) );
	
	$proto4 ["m_column"] = $obj;
	$proto4 ["m_contained"] = array ();
	$proto4 ["m_strCase"] = "";
	$proto4 ["m_havingmode"] = false;
	$proto4 ["m_inBrackets"] = false;
	$proto4 ["m_useAlias"] = false;
	$obj = new SQLLogicalExpr ( $proto4 );
	
	$proto1 ["m_having"] = $obj;
	$proto1 ["m_fieldlist"] = array ();
	$proto6 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "RSAName",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "CUST_ALLOC" 
	) );
	
	$proto6 ["m_sql"] = "customerallocation.RSAName";
	$proto6 ["m_srcTableName"] = "CUST_ALLOC";
	$proto6 ["m_expr"] = $obj;
	$proto6 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto6 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto8 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Location",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "CUST_ALLOC" 
	) );
	
	$proto8 ["m_sql"] = "customerallocation.Location";
	$proto8 ["m_srcTableName"] = "CUST_ALLOC";
	$proto8 ["m_expr"] = $obj;
	$proto8 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto8 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto10 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Supervisor",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "CUST_ALLOC" 
	) );
	
	$proto10 ["m_sql"] = "customerallocation.Supervisor";
	$proto10 ["m_srcTableName"] = "CUST_ALLOC";
	$proto10 ["m_expr"] = $obj;
	$proto10 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto10 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto12 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "AutCalID",
			"m_strTable" => "calandar",
			"m_srcTableName" => "CUST_ALLOC" 
	) );
	
	$proto12 ["m_sql"] = "calandar.AutCalID";
	$proto12 ["m_srcTableName"] = "CUST_ALLOC";
	$proto12 ["m_expr"] = $obj;
	$proto12 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto12 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto14 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Jul-2 WK-27",
			"m_strTable" => "calandar",
			"m_srcTableName" => "CUST_ALLOC" 
	) );
	
	$proto14 ["m_sql"] = "calandar.`Jul-2 WK-27`";
	$proto14 ["m_srcTableName"] = "CUST_ALLOC";
	$proto14 ["m_expr"] = $obj;
	$proto14 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto14 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto16 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Jul-9 WK-28",
			"m_strTable" => "calandar",
			"m_srcTableName" => "CUST_ALLOC" 
	) );
	
	$proto16 ["m_sql"] = "calandar.`Jul-9 WK-28`";
	$proto16 ["m_srcTableName"] = "CUST_ALLOC";
	$proto16 ["m_expr"] = $obj;
	$proto16 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto16 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto18 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Jul-16 WK-29",
			"m_strTable" => "calandar",
			"m_srcTableName" => "CUST_ALLOC" 
	) );
	
	$proto18 ["m_sql"] = "calandar.`Jul-16 WK-29`";
	$proto18 ["m_srcTableName"] = "CUST_ALLOC";
	$proto18 ["m_expr"] = $obj;
	$proto18 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto18 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto20 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Jul-23 WK-30",
			"m_strTable" => "calandar",
			"m_srcTableName" => "CUST_ALLOC" 
	) );
	
	$proto20 ["m_sql"] = "calandar.`Jul-23 WK-30`";
	$proto20 ["m_srcTableName"] = "CUST_ALLOC";
	$proto20 ["m_expr"] = $obj;
	$proto20 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto20 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto22 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Aug-6 WK-32",
			"m_strTable" => "calandar",
			"m_srcTableName" => "CUST_ALLOC" 
	) );
	
	$proto22 ["m_sql"] = "calandar.`Aug-6 WK-32`";
	$proto22 ["m_srcTableName"] = "CUST_ALLOC";
	$proto22 ["m_expr"] = $obj;
	$proto22 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto22 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto24 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Aug-13 WK-33",
			"m_strTable" => "calandar",
			"m_srcTableName" => "CUST_ALLOC" 
	) );
	
	$proto24 ["m_sql"] = "calandar.`Aug-13 WK-33`";
	$proto24 ["m_srcTableName"] = "CUST_ALLOC";
	$proto24 ["m_expr"] = $obj;
	$proto24 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto24 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto26 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Aug-20 WK-34",
			"m_strTable" => "calandar",
			"m_srcTableName" => "CUST_ALLOC" 
	) );
	
	$proto26 ["m_sql"] = "calandar.`Aug-20 WK-34`";
	$proto26 ["m_srcTableName"] = "CUST_ALLOC";
	$proto26 ["m_expr"] = $obj;
	$proto26 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto26 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto28 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Aug-27 WK-35",
			"m_strTable" => "calandar",
			"m_srcTableName" => "CUST_ALLOC" 
	) );
	
	$proto28 ["m_sql"] = "calandar.`Aug-27 WK-35`";
	$proto28 ["m_srcTableName"] = "CUST_ALLOC";
	$proto28 ["m_expr"] = $obj;
	$proto28 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto28 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto30 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Sep-3 WK-36",
			"m_strTable" => "calandar",
			"m_srcTableName" => "CUST_ALLOC" 
	) );
	
	$proto30 ["m_sql"] = "calandar.`Sep-3 WK-36`";
	$proto30 ["m_srcTableName"] = "CUST_ALLOC";
	$proto30 ["m_expr"] = $obj;
	$proto30 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto30 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto32 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Sep-10 WK-37",
			"m_strTable" => "calandar",
			"m_srcTableName" => "CUST_ALLOC" 
	) );
	
	$proto32 ["m_sql"] = "calandar.`Sep-10 WK-37`";
	$proto32 ["m_srcTableName"] = "CUST_ALLOC";
	$proto32 ["m_expr"] = $obj;
	$proto32 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto32 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto34 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Sep-17 WK-38",
			"m_strTable" => "calandar",
			"m_srcTableName" => "CUST_ALLOC" 
	) );
	
	$proto34 ["m_sql"] = "calandar.`Sep-17 WK-38`";
	$proto34 ["m_srcTableName"] = "CUST_ALLOC";
	$proto34 ["m_expr"] = $obj;
	$proto34 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto34 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto36 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Sep-24 WK-39",
			"m_strTable" => "calandar",
			"m_srcTableName" => "CUST_ALLOC" 
	) );
	
	$proto36 ["m_sql"] = "calandar.`Sep-24 WK-39`";
	$proto36 ["m_srcTableName"] = "CUST_ALLOC";
	$proto36 ["m_expr"] = $obj;
	$proto36 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto36 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto38 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Oct-1 WK-40",
			"m_strTable" => "calandar",
			"m_srcTableName" => "CUST_ALLOC" 
	) );
	
	$proto38 ["m_sql"] = "calandar.`Oct-1 WK-40`";
	$proto38 ["m_srcTableName"] = "CUST_ALLOC";
	$proto38 ["m_expr"] = $obj;
	$proto38 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto38 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto40 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Oct-8 WK-41",
			"m_strTable" => "calandar",
			"m_srcTableName" => "CUST_ALLOC" 
	) );
	
	$proto40 ["m_sql"] = "calandar.`Oct-8 WK-41`";
	$proto40 ["m_srcTableName"] = "CUST_ALLOC";
	$proto40 ["m_expr"] = $obj;
	$proto40 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto40 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto42 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Oct-15 WK-42",
			"m_strTable" => "calandar",
			"m_srcTableName" => "CUST_ALLOC" 
	) );
	
	$proto42 ["m_sql"] = "calandar.`Oct-15 WK-42`";
	$proto42 ["m_srcTableName"] = "CUST_ALLOC";
	$proto42 ["m_expr"] = $obj;
	$proto42 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto42 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto44 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Oct-22 WK-43",
			"m_strTable" => "calandar",
			"m_srcTableName" => "CUST_ALLOC" 
	) );
	
	$proto44 ["m_sql"] = "calandar.`Oct-22 WK-43`";
	$proto44 ["m_srcTableName"] = "CUST_ALLOC";
	$proto44 ["m_expr"] = $obj;
	$proto44 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto44 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto46 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Oct-29 WK-44",
			"m_strTable" => "calandar",
			"m_srcTableName" => "CUST_ALLOC" 
	) );
	
	$proto46 ["m_sql"] = "calandar.`Oct-29 WK-44`";
	$proto46 ["m_srcTableName"] = "CUST_ALLOC";
	$proto46 ["m_expr"] = $obj;
	$proto46 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto46 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto48 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Nov-5 WK-45",
			"m_strTable" => "calandar",
			"m_srcTableName" => "CUST_ALLOC" 
	) );
	
	$proto48 ["m_sql"] = "calandar.`Nov-5 WK-45`";
	$proto48 ["m_srcTableName"] = "CUST_ALLOC";
	$proto48 ["m_expr"] = $obj;
	$proto48 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto48 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto50 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Nov-12 WK-46",
			"m_strTable" => "calandar",
			"m_srcTableName" => "CUST_ALLOC" 
	) );
	
	$proto50 ["m_sql"] = "calandar.`Nov-12 WK-46`";
	$proto50 ["m_srcTableName"] = "CUST_ALLOC";
	$proto50 ["m_expr"] = $obj;
	$proto50 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto50 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto52 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Nov-19 WK-47",
			"m_strTable" => "calandar",
			"m_srcTableName" => "CUST_ALLOC" 
	) );
	
	$proto52 ["m_sql"] = "calandar.`Nov-19 WK-47`";
	$proto52 ["m_srcTableName"] = "CUST_ALLOC";
	$proto52 ["m_expr"] = $obj;
	$proto52 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto52 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto54 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Nov-26 WK-48",
			"m_strTable" => "calandar",
			"m_srcTableName" => "CUST_ALLOC" 
	) );
	
	$proto54 ["m_sql"] = "calandar.`Nov-26 WK-48`";
	$proto54 ["m_srcTableName"] = "CUST_ALLOC";
	$proto54 ["m_expr"] = $obj;
	$proto54 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto54 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto56 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Dec-3 WK-49",
			"m_strTable" => "calandar",
			"m_srcTableName" => "CUST_ALLOC" 
	) );
	
	$proto56 ["m_sql"] = "calandar.`Dec-3 WK-49`";
	$proto56 ["m_srcTableName"] = "CUST_ALLOC";
	$proto56 ["m_expr"] = $obj;
	$proto56 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto56 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto58 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Dec-10 WK-50",
			"m_strTable" => "calandar",
			"m_srcTableName" => "CUST_ALLOC" 
	) );
	
	$proto58 ["m_sql"] = "calandar.`Dec-10 WK-50`";
	$proto58 ["m_srcTableName"] = "CUST_ALLOC";
	$proto58 ["m_expr"] = $obj;
	$proto58 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto58 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto60 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Dec-17 WK-51",
			"m_strTable" => "calandar",
			"m_srcTableName" => "CUST_ALLOC" 
	) );
	
	$proto60 ["m_sql"] = "calandar.`Dec-17 WK-51`";
	$proto60 ["m_srcTableName"] = "CUST_ALLOC";
	$proto60 ["m_expr"] = $obj;
	$proto60 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto60 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto62 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Dec-24 WK-52",
			"m_strTable" => "calandar",
			"m_srcTableName" => "CUST_ALLOC" 
	) );
	
	$proto62 ["m_sql"] = "calandar.`Dec-24 WK-52`";
	$proto62 ["m_srcTableName"] = "CUST_ALLOC";
	$proto62 ["m_expr"] = $obj;
	$proto62 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto62 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto64 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Dec-31 WK-53",
			"m_strTable" => "calandar",
			"m_srcTableName" => "CUST_ALLOC" 
	) );
	
	$proto64 ["m_sql"] = "calandar.`Dec-31 WK-53`";
	$proto64 ["m_srcTableName"] = "CUST_ALLOC";
	$proto64 ["m_expr"] = $obj;
	$proto64 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto64 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto66 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Jul-30 WK-31",
			"m_strTable" => "calandar",
			"m_srcTableName" => "CUST_ALLOC" 
	) );
	
	$proto66 ["m_sql"] = "calandar.`Jul-30 WK-31`";
	$proto66 ["m_srcTableName"] = "CUST_ALLOC";
	$proto66 ["m_expr"] = $obj;
	$proto66 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto66 );
	
	$proto1 ["m_fieldlist"] [] = $obj;
	$proto1 ["m_fromlist"] = array ();
	$proto68 = array ();
	$proto68 ["m_link"] = "SQLL_MAIN";
	$proto69 = array ();
	$proto69 ["m_strName"] = "customerallocation";
	$proto69 ["m_srcTableName"] = "CUST_ALLOC";
	$proto69 ["m_columns"] = array ();
	$proto69 ["m_columns"] [] = "AutCustID";
	$proto69 ["m_columns"] [] = "OracleID";
	$proto69 ["m_columns"] [] = "CustomerName";
	$proto69 ["m_columns"] [] = "Stage";
	$proto69 ["m_columns"] [] = "RSAName";
	$proto69 ["m_columns"] [] = "Location";
	$proto69 ["m_columns"] [] = "Supervisor";
	$proto69 ["m_columns"] [] = "StartDate";
	$proto69 ["m_columns"] [] = "EndDate";
	$proto69 ["m_columns"] [] = "Allocation";
	$proto69 ["m_columns"] [] = "Override";
	$proto69 ["m_columns"] [] = "Compre_String";
	$proto69 ["m_columns"] [] = "Temp";
	$proto69 ["m_columns"] [] = "Size";
	$proto69 ["m_columns"] [] = "Contract_Start";
	$proto69 ["m_columns"] [] = "SteadyStateDate";
	$proto69 ["m_columns"] [] = "Contract_End";
	$proto69 ["m_columns"] [] = "OnshoreSupportOnly";
	$proto69 ["m_columns"] [] = "Role";
	$proto69 ["m_columns"] [] = "PlatformType";
	$proto69 ["m_columns"] [] = "PlatformName";
	$proto69 ["m_columns"] [] = "TimeZone";
	$proto69 ["m_columns"] [] = "Project";
	$obj = new SQLTable ( $proto69 );
	
	$proto68 ["m_table"] = $obj;
	$proto68 ["m_sql"] = "customerallocation";
	$proto68 ["m_alias"] = "";
	$proto68 ["m_srcTableName"] = "CUST_ALLOC";
	$proto70 = array ();
	$proto70 ["m_sql"] = "";
	$proto70 ["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed ( array (
			"m_sql" => "" 
	) );
	
	$proto70 ["m_column"] = $obj;
	$proto70 ["m_contained"] = array ();
	$proto70 ["m_strCase"] = "";
	$proto70 ["m_havingmode"] = false;
	$proto70 ["m_inBrackets"] = false;
	$proto70 ["m_useAlias"] = false;
	$obj = new SQLLogicalExpr ( $proto70 );
	
	$proto68 ["m_joinon"] = $obj;
	$obj = new SQLFromListItem ( $proto68 );
	
	$proto1 ["m_fromlist"] [] = $obj;
	$proto72 = array ();
	$proto72 ["m_link"] = "SQLL_LEFTJOIN";
	$proto73 = array ();
	$proto73 ["m_strName"] = "calandar";
	$proto73 ["m_srcTableName"] = "CUST_ALLOC";
	$proto73 ["m_columns"] = array ();
	$proto73 ["m_columns"] [] = "Jul-2 WK-27";
	$proto73 ["m_columns"] [] = "Jul-9 WK-28";
	$proto73 ["m_columns"] [] = "Jul-16 WK-29";
	$proto73 ["m_columns"] [] = "Jul-23 WK-30";
	$proto73 ["m_columns"] [] = "AutCalID";
	$proto73 ["m_columns"] [] = "Aug-6 WK-32";
	$proto73 ["m_columns"] [] = "Aug-13 WK-33";
	$proto73 ["m_columns"] [] = "Aug-20 WK-34";
	$proto73 ["m_columns"] [] = "Aug-27 WK-35";
	$proto73 ["m_columns"] [] = "Sep-3 WK-36";
	$proto73 ["m_columns"] [] = "Sep-10 WK-37";
	$proto73 ["m_columns"] [] = "Sep-17 WK-38";
	$proto73 ["m_columns"] [] = "Sep-24 WK-39";
	$proto73 ["m_columns"] [] = "Oct-1 WK-40";
	$proto73 ["m_columns"] [] = "Oct-8 WK-41";
	$proto73 ["m_columns"] [] = "Oct-15 WK-42";
	$proto73 ["m_columns"] [] = "Oct-22 WK-43";
	$proto73 ["m_columns"] [] = "Oct-29 WK-44";
	$proto73 ["m_columns"] [] = "Nov-5 WK-45";
	$proto73 ["m_columns"] [] = "Nov-12 WK-46";
	$proto73 ["m_columns"] [] = "Nov-19 WK-47";
	$proto73 ["m_columns"] [] = "Nov-26 WK-48";
	$proto73 ["m_columns"] [] = "Dec-3 WK-49";
	$proto73 ["m_columns"] [] = "Dec-10 WK-50";
	$proto73 ["m_columns"] [] = "Dec-17 WK-51";
	$proto73 ["m_columns"] [] = "Dec-24 WK-52";
	$proto73 ["m_columns"] [] = "Dec-31 WK-53";
	$proto73 ["m_columns"] [] = "Jul-30 WK-31";
	$obj = new SQLTable ( $proto73 );
	
	$proto72 ["m_table"] = $obj;
	$proto72 ["m_sql"] = "LEFT OUTER JOIN calandar ON customerallocation.AutCustID = calandar.AutCalID";
	$proto72 ["m_alias"] = "";
	$proto72 ["m_srcTableName"] = "CUST_ALLOC";
	$proto74 = array ();
	$proto74 ["m_sql"] = "customerallocation.AutCustID = calandar.AutCalID";
	$proto74 ["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLField ( array (
			"m_strName" => "AutCustID",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "CUST_ALLOC" 
	) );
	
	$proto74 ["m_column"] = $obj;
	$proto74 ["m_contained"] = array ();
	$proto74 ["m_strCase"] = "= calandar.AutCalID";
	$proto74 ["m_havingmode"] = false;
	$proto74 ["m_inBrackets"] = false;
	$proto74 ["m_useAlias"] = false;
	$obj = new SQLLogicalExpr ( $proto74 );
	
	$proto72 ["m_joinon"] = $obj;
	$obj = new SQLFromListItem ( $proto72 );
	
	$proto1 ["m_fromlist"] [] = $obj;
	$proto1 ["m_groupby"] = array ();
	$proto76 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "RSAName",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "CUST_ALLOC" 
	) );
	
	$proto76 ["m_column"] = $obj;
	$obj = new SQLGroupByItem ( $proto76 );
	
	$proto1 ["m_groupby"] [] = $obj;
	$proto78 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Location",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "CUST_ALLOC" 
	) );
	
	$proto78 ["m_column"] = $obj;
	$obj = new SQLGroupByItem ( $proto78 );
	
	$proto1 ["m_groupby"] [] = $obj;
	$proto80 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Supervisor",
			"m_strTable" => "customerallocation",
			"m_srcTableName" => "CUST_ALLOC" 
	) );
	
	$proto80 ["m_column"] = $obj;
	$obj = new SQLGroupByItem ( $proto80 );
	
	$proto1 ["m_groupby"] [] = $obj;
	$proto1 ["m_orderby"] = array ();
	$proto1 ["m_srcTableName"] = "CUST_ALLOC";
	$obj = new SQLQuery ( $proto1 );
	
	return $obj;
}
$queryData_CUST_ALLOC = createSqlQuery_CUST_ALLOC ();

$tdataCUST_ALLOC [".sqlquery"] = $queryData_CUST_ALLOC;

include_once (getabspath ( "include/CUST_ALLOC_events.php" ));
$tableEvents ["CUST_ALLOC"] = new eventclass_CUST_ALLOC ();
$tdataCUST_ALLOC [".hasEvents"] = true;

?>