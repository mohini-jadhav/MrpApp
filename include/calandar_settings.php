<?php
require_once (getabspath ( "classes/cipherer.php" ));

$tdatacalandar = array ();
$tdatacalandar [".truncateText"] = true;
$tdatacalandar [".NumberOfChars"] = 60;
$tdatacalandar [".ShortName"] = "calandar";
$tdatacalandar [".OwnerID"] = "";
$tdatacalandar [".OriginalTable"] = "calandar";

// field labels
$fieldLabelscalandar = array ();
$fieldToolTipscalandar = array ();
$pageTitlescalandar = array ();

if (mlang_getcurrentlang () == "English") {
	$fieldLabelscalandar ["English"] = array ();
	$fieldToolTipscalandar ["English"] = array ();
	$pageTitlescalandar ["English"] = array ();
	$fieldLabelscalandar ["English"] ["Jul_2_WK_27"] = "Jul-2 WK-27";
	$fieldToolTipscalandar ["English"] ["Jul-2 WK-27"] = "";
	$fieldLabelscalandar ["English"] ["Jul_9_WK_28"] = "Jul-9 WK-28";
	$fieldToolTipscalandar ["English"] ["Jul-9 WK-28"] = "";
	$fieldLabelscalandar ["English"] ["Jul_16_WK_29"] = "Jul-16 WK-29";
	$fieldToolTipscalandar ["English"] ["Jul-16 WK-29"] = "";
	$fieldLabelscalandar ["English"] ["Jul_23_WK_30"] = "Jul-23 WK-30";
	$fieldToolTipscalandar ["English"] ["Jul-23 WK-30"] = "";
	$fieldLabelscalandar ["English"] ["AutCalID"] = "Aut Cal ID";
	$fieldToolTipscalandar ["English"] ["AutCalID"] = "";
	$fieldLabelscalandar ["English"] ["Aug_6_WK_32"] = "Aug-6 WK-32";
	$fieldToolTipscalandar ["English"] ["Aug-6 WK-32"] = "";
	$fieldLabelscalandar ["English"] ["Aug_13_WK_33"] = "Aug-13 WK-33";
	$fieldToolTipscalandar ["English"] ["Aug-13 WK-33"] = "";
	$fieldLabelscalandar ["English"] ["Aug_20_WK_34"] = "Aug-20 WK-34";
	$fieldToolTipscalandar ["English"] ["Aug-20 WK-34"] = "";
	$fieldLabelscalandar ["English"] ["Aug_27_WK_35"] = "Aug-27 WK-35";
	$fieldToolTipscalandar ["English"] ["Aug-27 WK-35"] = "";
	$fieldLabelscalandar ["English"] ["Sep_3_WK_36"] = "Sep-3 WK-36";
	$fieldToolTipscalandar ["English"] ["Sep-3 WK-36"] = "";
	$fieldLabelscalandar ["English"] ["Sep_10_WK_37"] = "Sep-10 WK-37";
	$fieldToolTipscalandar ["English"] ["Sep-10 WK-37"] = "";
	$fieldLabelscalandar ["English"] ["Sep_17_WK_38"] = "Sep-17 WK-38";
	$fieldToolTipscalandar ["English"] ["Sep-17 WK-38"] = "";
	$fieldLabelscalandar ["English"] ["Sep_24_WK_39"] = "Sep-24 WK-39";
	$fieldToolTipscalandar ["English"] ["Sep-24 WK-39"] = "";
	$fieldLabelscalandar ["English"] ["Oct_1_WK_40"] = "Oct-1 WK-40";
	$fieldToolTipscalandar ["English"] ["Oct-1 WK-40"] = "";
	$fieldLabelscalandar ["English"] ["Oct_8_WK_41"] = "Oct-8 WK-41";
	$fieldToolTipscalandar ["English"] ["Oct-8 WK-41"] = "";
	$fieldLabelscalandar ["English"] ["Oct_15_WK_42"] = "Oct-15 WK-42";
	$fieldToolTipscalandar ["English"] ["Oct-15 WK-42"] = "";
	$fieldLabelscalandar ["English"] ["Oct_22_WK_43"] = "Oct-22 WK-43";
	$fieldToolTipscalandar ["English"] ["Oct-22 WK-43"] = "";
	$fieldLabelscalandar ["English"] ["Oct_29_WK_44"] = "Oct-29 WK-44";
	$fieldToolTipscalandar ["English"] ["Oct-29 WK-44"] = "";
	$fieldLabelscalandar ["English"] ["Nov_5_WK_45"] = "Nov-5 WK-45";
	$fieldToolTipscalandar ["English"] ["Nov-5 WK-45"] = "";
	$fieldLabelscalandar ["English"] ["Nov_12_WK_46"] = "Nov-12 WK-46";
	$fieldToolTipscalandar ["English"] ["Nov-12 WK-46"] = "";
	$fieldLabelscalandar ["English"] ["Nov_19_WK_47"] = "Nov-19 WK-47";
	$fieldToolTipscalandar ["English"] ["Nov-19 WK-47"] = "";
	$fieldLabelscalandar ["English"] ["Nov_26_WK_48"] = "Nov-26 WK-48";
	$fieldToolTipscalandar ["English"] ["Nov-26 WK-48"] = "";
	$fieldLabelscalandar ["English"] ["Dec_3_WK_49"] = "Dec-3 WK-49";
	$fieldToolTipscalandar ["English"] ["Dec-3 WK-49"] = "";
	$fieldLabelscalandar ["English"] ["Dec_10_WK_50"] = "Dec-10 WK-50";
	$fieldToolTipscalandar ["English"] ["Dec-10 WK-50"] = "";
	$fieldLabelscalandar ["English"] ["Dec_17_WK_51"] = "Dec-17 WK-51";
	$fieldToolTipscalandar ["English"] ["Dec-17 WK-51"] = "";
	$fieldLabelscalandar ["English"] ["Dec_24_WK_52"] = "Dec-24 WK-52";
	$fieldToolTipscalandar ["English"] ["Dec-24 WK-52"] = "";
	$fieldLabelscalandar ["English"] ["Dec_31_WK_53"] = "Dec-31 WK-53";
	$fieldToolTipscalandar ["English"] ["Dec-31 WK-53"] = "";
	$fieldLabelscalandar ["English"] ["Jul_30_WK_31"] = "Jul-30 WK-31";
	$fieldToolTipscalandar ["English"] ["Jul-30 WK-31"] = "";
	if (count ( $fieldToolTipscalandar ["English"] ))
		$tdatacalandar [".isUseToolTips"] = true;
}
if (mlang_getcurrentlang () == "") {
	$fieldLabelscalandar [""] = array ();
	$fieldToolTipscalandar [""] = array ();
	$pageTitlescalandar [""] = array ();
	if (count ( $fieldToolTipscalandar [""] ))
		$tdatacalandar [".isUseToolTips"] = true;
}

$tdatacalandar [".NCSearch"] = true;

$tdatacalandar [".shortTableName"] = "calandar";
$tdatacalandar [".nSecOptions"] = 0;
$tdatacalandar [".recsPerRowList"] = 1;
$tdatacalandar [".recsPerRowPrint"] = 1;
$tdatacalandar [".mainTableOwnerID"] = "";
$tdatacalandar [".moveNext"] = 0;
$tdatacalandar [".entityType"] = 0;

$tdatacalandar [".strOriginalTableName"] = "calandar";

$tdatacalandar [".showAddInPopup"] = false;

$tdatacalandar [".showEditInPopup"] = false;

$tdatacalandar [".showViewInPopup"] = false;

// page's base css files names
$popupPagesLayoutNames = array ();
$tdatacalandar [".popupPagesLayoutNames"] = $popupPagesLayoutNames;

$tdatacalandar [".fieldsForRegister"] = array ();

$tdatacalandar [".listAjax"] = false;

$tdatacalandar [".audit"] = false;

$tdatacalandar [".locking"] = false;

$tdatacalandar [".edit"] = true;
$tdatacalandar [".afterEditAction"] = 1;
$tdatacalandar [".closePopupAfterEdit"] = 1;
$tdatacalandar [".afterEditActionDetTable"] = "";

$tdatacalandar [".add"] = true;
$tdatacalandar [".afterAddAction"] = 1;
$tdatacalandar [".closePopupAfterAdd"] = 1;
$tdatacalandar [".afterAddActionDetTable"] = "";

$tdatacalandar [".list"] = true;

$tdatacalandar [".inlineEdit"] = true;
$tdatacalandar [".inlineAdd"] = true;
$tdatacalandar [".view"] = true;

$tdatacalandar [".import"] = true;

$tdatacalandar [".exportTo"] = true;

$tdatacalandar [".printFriendly"] = true;

$tdatacalandar [".delete"] = true;

$tdatacalandar [".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacalandar [".searchSaving"] = false;
//

$tdatacalandar [".showSearchPanel"] = true;
$tdatacalandar [".flexibleSearch"] = true;

if (isMobile ())
	$tdatacalandar [".isUseAjaxSuggest"] = false;
else
	$tdatacalandar [".isUseAjaxSuggest"] = true;

$tdatacalandar [".rowHighlite"] = true;

$tdatacalandar [".addPageEvents"] = false;

// use timepicker for search panel
$tdatacalandar [".isUseTimeForSearch"] = false;

$tdatacalandar [".allSearchFields"] = array ();
$tdatacalandar [".filterFields"] = array ();
$tdatacalandar [".requiredSearchFields"] = array ();

$tdatacalandar [".allSearchFields"] [] = "Jul-2 WK-27";
$tdatacalandar [".allSearchFields"] [] = "Jul-9 WK-28";
$tdatacalandar [".allSearchFields"] [] = "Jul-16 WK-29";
$tdatacalandar [".allSearchFields"] [] = "Jul-23 WK-30";
$tdatacalandar [".allSearchFields"] [] = "AutCalID";
$tdatacalandar [".allSearchFields"] [] = "Aug-6 WK-32";
$tdatacalandar [".allSearchFields"] [] = "Aug-13 WK-33";
$tdatacalandar [".allSearchFields"] [] = "Aug-20 WK-34";
$tdatacalandar [".allSearchFields"] [] = "Aug-27 WK-35";
$tdatacalandar [".allSearchFields"] [] = "Sep-3 WK-36";
$tdatacalandar [".allSearchFields"] [] = "Sep-10 WK-37";
$tdatacalandar [".allSearchFields"] [] = "Sep-17 WK-38";
$tdatacalandar [".allSearchFields"] [] = "Sep-24 WK-39";
$tdatacalandar [".allSearchFields"] [] = "Oct-1 WK-40";
$tdatacalandar [".allSearchFields"] [] = "Oct-8 WK-41";
$tdatacalandar [".allSearchFields"] [] = "Oct-15 WK-42";
$tdatacalandar [".allSearchFields"] [] = "Oct-22 WK-43";
$tdatacalandar [".allSearchFields"] [] = "Oct-29 WK-44";
$tdatacalandar [".allSearchFields"] [] = "Nov-5 WK-45";
$tdatacalandar [".allSearchFields"] [] = "Nov-12 WK-46";
$tdatacalandar [".allSearchFields"] [] = "Nov-19 WK-47";
$tdatacalandar [".allSearchFields"] [] = "Nov-26 WK-48";
$tdatacalandar [".allSearchFields"] [] = "Dec-3 WK-49";
$tdatacalandar [".allSearchFields"] [] = "Dec-10 WK-50";
$tdatacalandar [".allSearchFields"] [] = "Dec-17 WK-51";
$tdatacalandar [".allSearchFields"] [] = "Dec-24 WK-52";
$tdatacalandar [".allSearchFields"] [] = "Dec-31 WK-53";
$tdatacalandar [".allSearchFields"] [] = "Jul-30 WK-31";

$tdatacalandar [".googleLikeFields"] = array ();
$tdatacalandar [".googleLikeFields"] [] = "Jul-2 WK-27";
$tdatacalandar [".googleLikeFields"] [] = "Jul-9 WK-28";
$tdatacalandar [".googleLikeFields"] [] = "Jul-16 WK-29";
$tdatacalandar [".googleLikeFields"] [] = "Jul-23 WK-30";
$tdatacalandar [".googleLikeFields"] [] = "AutCalID";
$tdatacalandar [".googleLikeFields"] [] = "Aug-6 WK-32";
$tdatacalandar [".googleLikeFields"] [] = "Aug-13 WK-33";
$tdatacalandar [".googleLikeFields"] [] = "Aug-20 WK-34";
$tdatacalandar [".googleLikeFields"] [] = "Aug-27 WK-35";
$tdatacalandar [".googleLikeFields"] [] = "Sep-3 WK-36";
$tdatacalandar [".googleLikeFields"] [] = "Sep-10 WK-37";
$tdatacalandar [".googleLikeFields"] [] = "Sep-17 WK-38";
$tdatacalandar [".googleLikeFields"] [] = "Sep-24 WK-39";
$tdatacalandar [".googleLikeFields"] [] = "Oct-1 WK-40";
$tdatacalandar [".googleLikeFields"] [] = "Oct-8 WK-41";
$tdatacalandar [".googleLikeFields"] [] = "Oct-15 WK-42";
$tdatacalandar [".googleLikeFields"] [] = "Oct-22 WK-43";
$tdatacalandar [".googleLikeFields"] [] = "Oct-29 WK-44";
$tdatacalandar [".googleLikeFields"] [] = "Nov-5 WK-45";
$tdatacalandar [".googleLikeFields"] [] = "Nov-12 WK-46";
$tdatacalandar [".googleLikeFields"] [] = "Nov-19 WK-47";
$tdatacalandar [".googleLikeFields"] [] = "Nov-26 WK-48";
$tdatacalandar [".googleLikeFields"] [] = "Dec-3 WK-49";
$tdatacalandar [".googleLikeFields"] [] = "Dec-10 WK-50";
$tdatacalandar [".googleLikeFields"] [] = "Dec-17 WK-51";
$tdatacalandar [".googleLikeFields"] [] = "Dec-24 WK-52";
$tdatacalandar [".googleLikeFields"] [] = "Dec-31 WK-53";
$tdatacalandar [".googleLikeFields"] [] = "Jul-30 WK-31";

$tdatacalandar [".advSearchFields"] = array ();
$tdatacalandar [".advSearchFields"] [] = "Jul-2 WK-27";
$tdatacalandar [".advSearchFields"] [] = "Jul-9 WK-28";
$tdatacalandar [".advSearchFields"] [] = "Jul-16 WK-29";
$tdatacalandar [".advSearchFields"] [] = "Jul-23 WK-30";
$tdatacalandar [".advSearchFields"] [] = "AutCalID";
$tdatacalandar [".advSearchFields"] [] = "Aug-6 WK-32";
$tdatacalandar [".advSearchFields"] [] = "Aug-13 WK-33";
$tdatacalandar [".advSearchFields"] [] = "Aug-20 WK-34";
$tdatacalandar [".advSearchFields"] [] = "Aug-27 WK-35";
$tdatacalandar [".advSearchFields"] [] = "Sep-3 WK-36";
$tdatacalandar [".advSearchFields"] [] = "Sep-10 WK-37";
$tdatacalandar [".advSearchFields"] [] = "Sep-17 WK-38";
$tdatacalandar [".advSearchFields"] [] = "Sep-24 WK-39";
$tdatacalandar [".advSearchFields"] [] = "Oct-1 WK-40";
$tdatacalandar [".advSearchFields"] [] = "Oct-8 WK-41";
$tdatacalandar [".advSearchFields"] [] = "Oct-15 WK-42";
$tdatacalandar [".advSearchFields"] [] = "Oct-22 WK-43";
$tdatacalandar [".advSearchFields"] [] = "Oct-29 WK-44";
$tdatacalandar [".advSearchFields"] [] = "Nov-5 WK-45";
$tdatacalandar [".advSearchFields"] [] = "Nov-12 WK-46";
$tdatacalandar [".advSearchFields"] [] = "Nov-19 WK-47";
$tdatacalandar [".advSearchFields"] [] = "Nov-26 WK-48";
$tdatacalandar [".advSearchFields"] [] = "Dec-3 WK-49";
$tdatacalandar [".advSearchFields"] [] = "Dec-10 WK-50";
$tdatacalandar [".advSearchFields"] [] = "Dec-17 WK-51";
$tdatacalandar [".advSearchFields"] [] = "Dec-24 WK-52";
$tdatacalandar [".advSearchFields"] [] = "Dec-31 WK-53";
$tdatacalandar [".advSearchFields"] [] = "Jul-30 WK-31";

$tdatacalandar [".tableType"] = "list";

$tdatacalandar [".printerPageOrientation"] = 0;
$tdatacalandar [".nPrinterPageScale"] = 100;

$tdatacalandar [".nPrinterSplitRecords"] = 40;

$tdatacalandar [".nPrinterPDFSplitRecords"] = 40;

$tdatacalandar [".geocodingEnabled"] = false;

// view page pdf

// print page pdf

$tdatacalandar [".pageSize"] = 10;

$tdatacalandar [".warnLeavingPages"] = true;

$tstrOrderBy = "";
if (strlen ( $tstrOrderBy ) && strtolower ( substr ( $tstrOrderBy, 0, 8 ) ) != "order by")
	$tstrOrderBy = "order by " . $tstrOrderBy;
$tdatacalandar [".strOrderBy"] = $tstrOrderBy;

$tdatacalandar [".orderindexes"] = array ();

$tdatacalandar [".sqlHead"] = "SELECT `Jul-2 WK-27`,  	`Jul-9 WK-28`,  	`Jul-16 WK-29`,  	`Jul-23 WK-30`,  	AutCalID,  	`Aug-6 WK-32`,  	`Aug-13 WK-33`,  	`Aug-20 WK-34`,  	`Aug-27 WK-35`,  	`Sep-3 WK-36`,  	`Sep-10 WK-37`,  	`Sep-17 WK-38`,  	`Sep-24 WK-39`,  	`Oct-1 WK-40`,  	`Oct-8 WK-41`,  	`Oct-15 WK-42`,  	`Oct-22 WK-43`,  	`Oct-29 WK-44`,  	`Nov-5 WK-45`,  	`Nov-12 WK-46`,  	`Nov-19 WK-47`,  	`Nov-26 WK-48`,  	`Dec-3 WK-49`,  	`Dec-10 WK-50`,  	`Dec-17 WK-51`,  	`Dec-24 WK-52`,  	`Dec-31 WK-53`,  	`Jul-30 WK-31`";
$tdatacalandar [".sqlFrom"] = "FROM calandar";
$tdatacalandar [".sqlWhereExpr"] = "";
$tdatacalandar [".sqlTail"] = "";

// fill array of records per page for list and report without group fields
$arrRPP = array ();
$arrRPP [] = 10;
$arrRPP [] = 20;
$arrRPP [] = 30;
$arrRPP [] = 50;
$arrRPP [] = 100;
$arrRPP [] = 500;
$arrRPP [] = - 1;
$tdatacalandar [".arrRecsPerPage"] = $arrRPP;

// fill array of groups per page for report with group fields
$arrGPP = array ();
$arrGPP [] = 1;
$arrGPP [] = 3;
$arrGPP [] = 5;
$arrGPP [] = 10;
$arrGPP [] = 50;
$arrGPP [] = 100;
$arrGPP [] = - 1;
$tdatacalandar [".arrGroupsPerPage"] = $arrGPP;

$tableKeyscalandar = array ();
$tableKeyscalandar [] = "AutCalID";
$tdatacalandar [".Keys"] = $tableKeyscalandar;

$tdatacalandar [".listFields"] = array ();
$tdatacalandar [".listFields"] [] = "Jul-2 WK-27";
$tdatacalandar [".listFields"] [] = "Jul-9 WK-28";
$tdatacalandar [".listFields"] [] = "Jul-16 WK-29";
$tdatacalandar [".listFields"] [] = "Jul-23 WK-30";
$tdatacalandar [".listFields"] [] = "AutCalID";
$tdatacalandar [".listFields"] [] = "Aug-6 WK-32";
$tdatacalandar [".listFields"] [] = "Aug-13 WK-33";
$tdatacalandar [".listFields"] [] = "Aug-20 WK-34";
$tdatacalandar [".listFields"] [] = "Aug-27 WK-35";
$tdatacalandar [".listFields"] [] = "Sep-3 WK-36";
$tdatacalandar [".listFields"] [] = "Sep-10 WK-37";
$tdatacalandar [".listFields"] [] = "Sep-17 WK-38";
$tdatacalandar [".listFields"] [] = "Sep-24 WK-39";
$tdatacalandar [".listFields"] [] = "Oct-1 WK-40";
$tdatacalandar [".listFields"] [] = "Oct-8 WK-41";
$tdatacalandar [".listFields"] [] = "Oct-15 WK-42";
$tdatacalandar [".listFields"] [] = "Oct-22 WK-43";
$tdatacalandar [".listFields"] [] = "Oct-29 WK-44";
$tdatacalandar [".listFields"] [] = "Nov-5 WK-45";
$tdatacalandar [".listFields"] [] = "Nov-12 WK-46";
$tdatacalandar [".listFields"] [] = "Nov-19 WK-47";
$tdatacalandar [".listFields"] [] = "Nov-26 WK-48";
$tdatacalandar [".listFields"] [] = "Dec-3 WK-49";
$tdatacalandar [".listFields"] [] = "Dec-10 WK-50";
$tdatacalandar [".listFields"] [] = "Dec-17 WK-51";
$tdatacalandar [".listFields"] [] = "Dec-24 WK-52";
$tdatacalandar [".listFields"] [] = "Dec-31 WK-53";
$tdatacalandar [".listFields"] [] = "Jul-30 WK-31";

$tdatacalandar [".hideMobileList"] = array ();

$tdatacalandar [".viewFields"] = array ();
$tdatacalandar [".viewFields"] [] = "Jul-2 WK-27";
$tdatacalandar [".viewFields"] [] = "Jul-9 WK-28";
$tdatacalandar [".viewFields"] [] = "Jul-16 WK-29";
$tdatacalandar [".viewFields"] [] = "Jul-23 WK-30";
$tdatacalandar [".viewFields"] [] = "AutCalID";
$tdatacalandar [".viewFields"] [] = "Aug-6 WK-32";
$tdatacalandar [".viewFields"] [] = "Aug-13 WK-33";
$tdatacalandar [".viewFields"] [] = "Aug-20 WK-34";
$tdatacalandar [".viewFields"] [] = "Aug-27 WK-35";
$tdatacalandar [".viewFields"] [] = "Sep-3 WK-36";
$tdatacalandar [".viewFields"] [] = "Sep-10 WK-37";
$tdatacalandar [".viewFields"] [] = "Sep-17 WK-38";
$tdatacalandar [".viewFields"] [] = "Sep-24 WK-39";
$tdatacalandar [".viewFields"] [] = "Oct-1 WK-40";
$tdatacalandar [".viewFields"] [] = "Oct-8 WK-41";
$tdatacalandar [".viewFields"] [] = "Oct-15 WK-42";
$tdatacalandar [".viewFields"] [] = "Oct-22 WK-43";
$tdatacalandar [".viewFields"] [] = "Oct-29 WK-44";
$tdatacalandar [".viewFields"] [] = "Nov-5 WK-45";
$tdatacalandar [".viewFields"] [] = "Nov-12 WK-46";
$tdatacalandar [".viewFields"] [] = "Nov-19 WK-47";
$tdatacalandar [".viewFields"] [] = "Nov-26 WK-48";
$tdatacalandar [".viewFields"] [] = "Dec-3 WK-49";
$tdatacalandar [".viewFields"] [] = "Dec-10 WK-50";
$tdatacalandar [".viewFields"] [] = "Dec-17 WK-51";
$tdatacalandar [".viewFields"] [] = "Dec-24 WK-52";
$tdatacalandar [".viewFields"] [] = "Dec-31 WK-53";
$tdatacalandar [".viewFields"] [] = "Jul-30 WK-31";

$tdatacalandar [".addFields"] = array ();
$tdatacalandar [".addFields"] [] = "Jul-2 WK-27";
$tdatacalandar [".addFields"] [] = "Jul-9 WK-28";
$tdatacalandar [".addFields"] [] = "Jul-16 WK-29";
$tdatacalandar [".addFields"] [] = "Jul-23 WK-30";
$tdatacalandar [".addFields"] [] = "Aug-6 WK-32";
$tdatacalandar [".addFields"] [] = "Aug-13 WK-33";
$tdatacalandar [".addFields"] [] = "Aug-20 WK-34";
$tdatacalandar [".addFields"] [] = "Aug-27 WK-35";
$tdatacalandar [".addFields"] [] = "Sep-3 WK-36";
$tdatacalandar [".addFields"] [] = "Sep-10 WK-37";
$tdatacalandar [".addFields"] [] = "Sep-17 WK-38";
$tdatacalandar [".addFields"] [] = "Sep-24 WK-39";
$tdatacalandar [".addFields"] [] = "Oct-1 WK-40";
$tdatacalandar [".addFields"] [] = "Oct-8 WK-41";
$tdatacalandar [".addFields"] [] = "Oct-15 WK-42";
$tdatacalandar [".addFields"] [] = "Oct-22 WK-43";
$tdatacalandar [".addFields"] [] = "Oct-29 WK-44";
$tdatacalandar [".addFields"] [] = "Nov-5 WK-45";
$tdatacalandar [".addFields"] [] = "Nov-12 WK-46";
$tdatacalandar [".addFields"] [] = "Nov-19 WK-47";
$tdatacalandar [".addFields"] [] = "Nov-26 WK-48";
$tdatacalandar [".addFields"] [] = "Dec-3 WK-49";
$tdatacalandar [".addFields"] [] = "Dec-10 WK-50";
$tdatacalandar [".addFields"] [] = "Dec-17 WK-51";
$tdatacalandar [".addFields"] [] = "Dec-24 WK-52";
$tdatacalandar [".addFields"] [] = "Dec-31 WK-53";
$tdatacalandar [".addFields"] [] = "Jul-30 WK-31";

$tdatacalandar [".masterListFields"] = array ();
$tdatacalandar [".masterListFields"] [] = "Jul-2 WK-27";
$tdatacalandar [".masterListFields"] [] = "Jul-9 WK-28";
$tdatacalandar [".masterListFields"] [] = "Jul-16 WK-29";
$tdatacalandar [".masterListFields"] [] = "Jul-23 WK-30";
$tdatacalandar [".masterListFields"] [] = "AutCalID";
$tdatacalandar [".masterListFields"] [] = "Aug-6 WK-32";
$tdatacalandar [".masterListFields"] [] = "Aug-13 WK-33";
$tdatacalandar [".masterListFields"] [] = "Aug-20 WK-34";
$tdatacalandar [".masterListFields"] [] = "Aug-27 WK-35";
$tdatacalandar [".masterListFields"] [] = "Sep-3 WK-36";
$tdatacalandar [".masterListFields"] [] = "Sep-10 WK-37";
$tdatacalandar [".masterListFields"] [] = "Sep-17 WK-38";
$tdatacalandar [".masterListFields"] [] = "Sep-24 WK-39";
$tdatacalandar [".masterListFields"] [] = "Oct-1 WK-40";
$tdatacalandar [".masterListFields"] [] = "Oct-8 WK-41";
$tdatacalandar [".masterListFields"] [] = "Oct-15 WK-42";
$tdatacalandar [".masterListFields"] [] = "Oct-22 WK-43";
$tdatacalandar [".masterListFields"] [] = "Oct-29 WK-44";
$tdatacalandar [".masterListFields"] [] = "Nov-5 WK-45";
$tdatacalandar [".masterListFields"] [] = "Nov-12 WK-46";
$tdatacalandar [".masterListFields"] [] = "Nov-19 WK-47";
$tdatacalandar [".masterListFields"] [] = "Nov-26 WK-48";
$tdatacalandar [".masterListFields"] [] = "Dec-3 WK-49";
$tdatacalandar [".masterListFields"] [] = "Dec-10 WK-50";
$tdatacalandar [".masterListFields"] [] = "Dec-17 WK-51";
$tdatacalandar [".masterListFields"] [] = "Dec-24 WK-52";
$tdatacalandar [".masterListFields"] [] = "Dec-31 WK-53";
$tdatacalandar [".masterListFields"] [] = "Jul-30 WK-31";

$tdatacalandar [".inlineAddFields"] = array ();
$tdatacalandar [".inlineAddFields"] [] = "Jul-2 WK-27";
$tdatacalandar [".inlineAddFields"] [] = "Jul-9 WK-28";
$tdatacalandar [".inlineAddFields"] [] = "Jul-16 WK-29";
$tdatacalandar [".inlineAddFields"] [] = "Jul-23 WK-30";
$tdatacalandar [".inlineAddFields"] [] = "Aug-6 WK-32";
$tdatacalandar [".inlineAddFields"] [] = "Aug-13 WK-33";
$tdatacalandar [".inlineAddFields"] [] = "Aug-20 WK-34";
$tdatacalandar [".inlineAddFields"] [] = "Aug-27 WK-35";
$tdatacalandar [".inlineAddFields"] [] = "Sep-3 WK-36";
$tdatacalandar [".inlineAddFields"] [] = "Sep-10 WK-37";
$tdatacalandar [".inlineAddFields"] [] = "Sep-17 WK-38";
$tdatacalandar [".inlineAddFields"] [] = "Sep-24 WK-39";
$tdatacalandar [".inlineAddFields"] [] = "Oct-1 WK-40";
$tdatacalandar [".inlineAddFields"] [] = "Oct-8 WK-41";
$tdatacalandar [".inlineAddFields"] [] = "Oct-15 WK-42";
$tdatacalandar [".inlineAddFields"] [] = "Oct-22 WK-43";
$tdatacalandar [".inlineAddFields"] [] = "Oct-29 WK-44";
$tdatacalandar [".inlineAddFields"] [] = "Nov-5 WK-45";
$tdatacalandar [".inlineAddFields"] [] = "Nov-12 WK-46";
$tdatacalandar [".inlineAddFields"] [] = "Nov-19 WK-47";
$tdatacalandar [".inlineAddFields"] [] = "Nov-26 WK-48";
$tdatacalandar [".inlineAddFields"] [] = "Dec-3 WK-49";
$tdatacalandar [".inlineAddFields"] [] = "Dec-10 WK-50";
$tdatacalandar [".inlineAddFields"] [] = "Dec-17 WK-51";
$tdatacalandar [".inlineAddFields"] [] = "Dec-24 WK-52";
$tdatacalandar [".inlineAddFields"] [] = "Dec-31 WK-53";
$tdatacalandar [".inlineAddFields"] [] = "Jul-30 WK-31";

$tdatacalandar [".editFields"] = array ();
$tdatacalandar [".editFields"] [] = "Jul-2 WK-27";
$tdatacalandar [".editFields"] [] = "Jul-9 WK-28";
$tdatacalandar [".editFields"] [] = "Jul-16 WK-29";
$tdatacalandar [".editFields"] [] = "Jul-23 WK-30";
$tdatacalandar [".editFields"] [] = "Aug-6 WK-32";
$tdatacalandar [".editFields"] [] = "Aug-13 WK-33";
$tdatacalandar [".editFields"] [] = "Aug-20 WK-34";
$tdatacalandar [".editFields"] [] = "Aug-27 WK-35";
$tdatacalandar [".editFields"] [] = "Sep-3 WK-36";
$tdatacalandar [".editFields"] [] = "Sep-10 WK-37";
$tdatacalandar [".editFields"] [] = "Sep-17 WK-38";
$tdatacalandar [".editFields"] [] = "Sep-24 WK-39";
$tdatacalandar [".editFields"] [] = "Oct-1 WK-40";
$tdatacalandar [".editFields"] [] = "Oct-8 WK-41";
$tdatacalandar [".editFields"] [] = "Oct-15 WK-42";
$tdatacalandar [".editFields"] [] = "Oct-22 WK-43";
$tdatacalandar [".editFields"] [] = "Oct-29 WK-44";
$tdatacalandar [".editFields"] [] = "Nov-5 WK-45";
$tdatacalandar [".editFields"] [] = "Nov-12 WK-46";
$tdatacalandar [".editFields"] [] = "Nov-19 WK-47";
$tdatacalandar [".editFields"] [] = "Nov-26 WK-48";
$tdatacalandar [".editFields"] [] = "Dec-3 WK-49";
$tdatacalandar [".editFields"] [] = "Dec-10 WK-50";
$tdatacalandar [".editFields"] [] = "Dec-17 WK-51";
$tdatacalandar [".editFields"] [] = "Dec-24 WK-52";
$tdatacalandar [".editFields"] [] = "Dec-31 WK-53";
$tdatacalandar [".editFields"] [] = "Jul-30 WK-31";

$tdatacalandar [".inlineEditFields"] = array ();
$tdatacalandar [".inlineEditFields"] [] = "Jul-2 WK-27";
$tdatacalandar [".inlineEditFields"] [] = "Jul-9 WK-28";
$tdatacalandar [".inlineEditFields"] [] = "Jul-16 WK-29";
$tdatacalandar [".inlineEditFields"] [] = "Jul-23 WK-30";
$tdatacalandar [".inlineEditFields"] [] = "Aug-6 WK-32";
$tdatacalandar [".inlineEditFields"] [] = "Aug-13 WK-33";
$tdatacalandar [".inlineEditFields"] [] = "Aug-20 WK-34";
$tdatacalandar [".inlineEditFields"] [] = "Aug-27 WK-35";
$tdatacalandar [".inlineEditFields"] [] = "Sep-3 WK-36";
$tdatacalandar [".inlineEditFields"] [] = "Sep-10 WK-37";
$tdatacalandar [".inlineEditFields"] [] = "Sep-17 WK-38";
$tdatacalandar [".inlineEditFields"] [] = "Sep-24 WK-39";
$tdatacalandar [".inlineEditFields"] [] = "Oct-1 WK-40";
$tdatacalandar [".inlineEditFields"] [] = "Oct-8 WK-41";
$tdatacalandar [".inlineEditFields"] [] = "Oct-15 WK-42";
$tdatacalandar [".inlineEditFields"] [] = "Oct-22 WK-43";
$tdatacalandar [".inlineEditFields"] [] = "Oct-29 WK-44";
$tdatacalandar [".inlineEditFields"] [] = "Nov-5 WK-45";
$tdatacalandar [".inlineEditFields"] [] = "Nov-12 WK-46";
$tdatacalandar [".inlineEditFields"] [] = "Nov-19 WK-47";
$tdatacalandar [".inlineEditFields"] [] = "Nov-26 WK-48";
$tdatacalandar [".inlineEditFields"] [] = "Dec-3 WK-49";
$tdatacalandar [".inlineEditFields"] [] = "Dec-10 WK-50";
$tdatacalandar [".inlineEditFields"] [] = "Dec-17 WK-51";
$tdatacalandar [".inlineEditFields"] [] = "Dec-24 WK-52";
$tdatacalandar [".inlineEditFields"] [] = "Dec-31 WK-53";
$tdatacalandar [".inlineEditFields"] [] = "Jul-30 WK-31";

$tdatacalandar [".exportFields"] = array ();
$tdatacalandar [".exportFields"] [] = "Jul-2 WK-27";
$tdatacalandar [".exportFields"] [] = "Jul-9 WK-28";
$tdatacalandar [".exportFields"] [] = "Jul-16 WK-29";
$tdatacalandar [".exportFields"] [] = "Jul-23 WK-30";
$tdatacalandar [".exportFields"] [] = "AutCalID";
$tdatacalandar [".exportFields"] [] = "Aug-6 WK-32";
$tdatacalandar [".exportFields"] [] = "Aug-13 WK-33";
$tdatacalandar [".exportFields"] [] = "Aug-20 WK-34";
$tdatacalandar [".exportFields"] [] = "Aug-27 WK-35";
$tdatacalandar [".exportFields"] [] = "Sep-3 WK-36";
$tdatacalandar [".exportFields"] [] = "Sep-10 WK-37";
$tdatacalandar [".exportFields"] [] = "Sep-17 WK-38";
$tdatacalandar [".exportFields"] [] = "Sep-24 WK-39";
$tdatacalandar [".exportFields"] [] = "Oct-1 WK-40";
$tdatacalandar [".exportFields"] [] = "Oct-8 WK-41";
$tdatacalandar [".exportFields"] [] = "Oct-15 WK-42";
$tdatacalandar [".exportFields"] [] = "Oct-22 WK-43";
$tdatacalandar [".exportFields"] [] = "Oct-29 WK-44";
$tdatacalandar [".exportFields"] [] = "Nov-5 WK-45";
$tdatacalandar [".exportFields"] [] = "Nov-12 WK-46";
$tdatacalandar [".exportFields"] [] = "Nov-19 WK-47";
$tdatacalandar [".exportFields"] [] = "Nov-26 WK-48";
$tdatacalandar [".exportFields"] [] = "Dec-3 WK-49";
$tdatacalandar [".exportFields"] [] = "Dec-10 WK-50";
$tdatacalandar [".exportFields"] [] = "Dec-17 WK-51";
$tdatacalandar [".exportFields"] [] = "Dec-24 WK-52";
$tdatacalandar [".exportFields"] [] = "Dec-31 WK-53";
$tdatacalandar [".exportFields"] [] = "Jul-30 WK-31";

$tdatacalandar [".importFields"] = array ();
$tdatacalandar [".importFields"] [] = "Jul-2 WK-27";
$tdatacalandar [".importFields"] [] = "Jul-9 WK-28";
$tdatacalandar [".importFields"] [] = "Jul-16 WK-29";
$tdatacalandar [".importFields"] [] = "Jul-23 WK-30";
$tdatacalandar [".importFields"] [] = "AutCalID";
$tdatacalandar [".importFields"] [] = "Aug-6 WK-32";
$tdatacalandar [".importFields"] [] = "Aug-13 WK-33";
$tdatacalandar [".importFields"] [] = "Aug-20 WK-34";
$tdatacalandar [".importFields"] [] = "Aug-27 WK-35";
$tdatacalandar [".importFields"] [] = "Sep-3 WK-36";
$tdatacalandar [".importFields"] [] = "Sep-10 WK-37";
$tdatacalandar [".importFields"] [] = "Sep-17 WK-38";
$tdatacalandar [".importFields"] [] = "Sep-24 WK-39";
$tdatacalandar [".importFields"] [] = "Oct-1 WK-40";
$tdatacalandar [".importFields"] [] = "Oct-8 WK-41";
$tdatacalandar [".importFields"] [] = "Oct-15 WK-42";
$tdatacalandar [".importFields"] [] = "Oct-22 WK-43";
$tdatacalandar [".importFields"] [] = "Oct-29 WK-44";
$tdatacalandar [".importFields"] [] = "Nov-5 WK-45";
$tdatacalandar [".importFields"] [] = "Nov-12 WK-46";
$tdatacalandar [".importFields"] [] = "Nov-19 WK-47";
$tdatacalandar [".importFields"] [] = "Nov-26 WK-48";
$tdatacalandar [".importFields"] [] = "Dec-3 WK-49";
$tdatacalandar [".importFields"] [] = "Dec-10 WK-50";
$tdatacalandar [".importFields"] [] = "Dec-17 WK-51";
$tdatacalandar [".importFields"] [] = "Dec-24 WK-52";
$tdatacalandar [".importFields"] [] = "Dec-31 WK-53";
$tdatacalandar [".importFields"] [] = "Jul-30 WK-31";

$tdatacalandar [".printFields"] = array ();
$tdatacalandar [".printFields"] [] = "Jul-2 WK-27";
$tdatacalandar [".printFields"] [] = "Jul-9 WK-28";
$tdatacalandar [".printFields"] [] = "Jul-16 WK-29";
$tdatacalandar [".printFields"] [] = "Jul-23 WK-30";
$tdatacalandar [".printFields"] [] = "AutCalID";
$tdatacalandar [".printFields"] [] = "Aug-6 WK-32";
$tdatacalandar [".printFields"] [] = "Aug-13 WK-33";
$tdatacalandar [".printFields"] [] = "Aug-20 WK-34";
$tdatacalandar [".printFields"] [] = "Aug-27 WK-35";
$tdatacalandar [".printFields"] [] = "Sep-3 WK-36";
$tdatacalandar [".printFields"] [] = "Sep-10 WK-37";
$tdatacalandar [".printFields"] [] = "Sep-17 WK-38";
$tdatacalandar [".printFields"] [] = "Sep-24 WK-39";
$tdatacalandar [".printFields"] [] = "Oct-1 WK-40";
$tdatacalandar [".printFields"] [] = "Oct-8 WK-41";
$tdatacalandar [".printFields"] [] = "Oct-15 WK-42";
$tdatacalandar [".printFields"] [] = "Oct-22 WK-43";
$tdatacalandar [".printFields"] [] = "Oct-29 WK-44";
$tdatacalandar [".printFields"] [] = "Nov-5 WK-45";
$tdatacalandar [".printFields"] [] = "Nov-12 WK-46";
$tdatacalandar [".printFields"] [] = "Nov-19 WK-47";
$tdatacalandar [".printFields"] [] = "Nov-26 WK-48";
$tdatacalandar [".printFields"] [] = "Dec-3 WK-49";
$tdatacalandar [".printFields"] [] = "Dec-10 WK-50";
$tdatacalandar [".printFields"] [] = "Dec-17 WK-51";
$tdatacalandar [".printFields"] [] = "Dec-24 WK-52";
$tdatacalandar [".printFields"] [] = "Dec-31 WK-53";
$tdatacalandar [".printFields"] [] = "Jul-30 WK-31";

// Jul-2 WK-27
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 1;
$fdata ["strName"] = "Jul-2 WK-27";
$fdata ["GoodName"] = "Jul_2_WK_27";
$fdata ["ownerTable"] = "calandar";
$fdata ["Label"] = GetFieldLabel ( "calandar", "Jul_2_WK_27" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Jul-2 WK-27";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "`Jul-2 WK-27`";

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
$edata ["EditParams"] .= " maxlength=10";

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

$tdatacalandar ["Jul-2 WK-27"] = $fdata;
// Jul-9 WK-28
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 2;
$fdata ["strName"] = "Jul-9 WK-28";
$fdata ["GoodName"] = "Jul_9_WK_28";
$fdata ["ownerTable"] = "calandar";
$fdata ["Label"] = GetFieldLabel ( "calandar", "Jul_9_WK_28" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Jul-9 WK-28";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "`Jul-9 WK-28`";

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
$edata ["EditParams"] .= " maxlength=10";

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

$tdatacalandar ["Jul-9 WK-28"] = $fdata;
// Jul-16 WK-29
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 3;
$fdata ["strName"] = "Jul-16 WK-29";
$fdata ["GoodName"] = "Jul_16_WK_29";
$fdata ["ownerTable"] = "calandar";
$fdata ["Label"] = GetFieldLabel ( "calandar", "Jul_16_WK_29" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Jul-16 WK-29";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "`Jul-16 WK-29`";

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
$edata ["EditParams"] .= " maxlength=12";

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

$tdatacalandar ["Jul-16 WK-29"] = $fdata;
// Jul-23 WK-30
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 4;
$fdata ["strName"] = "Jul-23 WK-30";
$fdata ["GoodName"] = "Jul_23_WK_30";
$fdata ["ownerTable"] = "calandar";
$fdata ["Label"] = GetFieldLabel ( "calandar", "Jul_23_WK_30" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Jul-23 WK-30";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "`Jul-23 WK-30`";

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
$edata ["EditParams"] .= " maxlength=10";

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

$tdatacalandar ["Jul-23 WK-30"] = $fdata;
// AutCalID
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 5;
$fdata ["strName"] = "AutCalID";
$fdata ["GoodName"] = "AutCalID";
$fdata ["ownerTable"] = "calandar";
$fdata ["Label"] = GetFieldLabel ( "calandar", "AutCalID" );
$fdata ["FieldType"] = 3;

$fdata ["AutoInc"] = true;

$fdata ["bListPage"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "AutCalID";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "AutCalID";

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

$edata ["IsRequired"] = true;

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
$edata ["validateAs"] ["basicValidate"] [] = "IsRequired";

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = false;

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

// the end of search options settings

$tdatacalandar ["AutCalID"] = $fdata;
// Aug-6 WK-32
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 6;
$fdata ["strName"] = "Aug-6 WK-32";
$fdata ["GoodName"] = "Aug_6_WK_32";
$fdata ["ownerTable"] = "calandar";
$fdata ["Label"] = GetFieldLabel ( "calandar", "Aug_6_WK_32" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Aug-6 WK-32";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "`Aug-6 WK-32`";

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
$edata ["EditParams"] .= " maxlength=10";

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

$tdatacalandar ["Aug-6 WK-32"] = $fdata;
// Aug-13 WK-33
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 7;
$fdata ["strName"] = "Aug-13 WK-33";
$fdata ["GoodName"] = "Aug_13_WK_33";
$fdata ["ownerTable"] = "calandar";
$fdata ["Label"] = GetFieldLabel ( "calandar", "Aug_13_WK_33" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Aug-13 WK-33";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "`Aug-13 WK-33`";

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
$edata ["EditParams"] .= " maxlength=10";

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

$tdatacalandar ["Aug-13 WK-33"] = $fdata;
// Aug-20 WK-34
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 8;
$fdata ["strName"] = "Aug-20 WK-34";
$fdata ["GoodName"] = "Aug_20_WK_34";
$fdata ["ownerTable"] = "calandar";
$fdata ["Label"] = GetFieldLabel ( "calandar", "Aug_20_WK_34" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Aug-20 WK-34";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "`Aug-20 WK-34`";

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
$edata ["EditParams"] .= " maxlength=10";

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

$tdatacalandar ["Aug-20 WK-34"] = $fdata;
// Aug-27 WK-35
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 9;
$fdata ["strName"] = "Aug-27 WK-35";
$fdata ["GoodName"] = "Aug_27_WK_35";
$fdata ["ownerTable"] = "calandar";
$fdata ["Label"] = GetFieldLabel ( "calandar", "Aug_27_WK_35" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Aug-27 WK-35";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "`Aug-27 WK-35`";

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
$edata ["EditParams"] .= " maxlength=10";

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

$tdatacalandar ["Aug-27 WK-35"] = $fdata;
// Sep-3 WK-36
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 10;
$fdata ["strName"] = "Sep-3 WK-36";
$fdata ["GoodName"] = "Sep_3_WK_36";
$fdata ["ownerTable"] = "calandar";
$fdata ["Label"] = GetFieldLabel ( "calandar", "Sep_3_WK_36" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Sep-3 WK-36";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "`Sep-3 WK-36`";

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
$edata ["EditParams"] .= " maxlength=10";

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

$tdatacalandar ["Sep-3 WK-36"] = $fdata;
// Sep-10 WK-37
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 11;
$fdata ["strName"] = "Sep-10 WK-37";
$fdata ["GoodName"] = "Sep_10_WK_37";
$fdata ["ownerTable"] = "calandar";
$fdata ["Label"] = GetFieldLabel ( "calandar", "Sep_10_WK_37" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Sep-10 WK-37";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "`Sep-10 WK-37`";

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
$edata ["EditParams"] .= " maxlength=10";

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

$tdatacalandar ["Sep-10 WK-37"] = $fdata;
// Sep-17 WK-38
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 12;
$fdata ["strName"] = "Sep-17 WK-38";
$fdata ["GoodName"] = "Sep_17_WK_38";
$fdata ["ownerTable"] = "calandar";
$fdata ["Label"] = GetFieldLabel ( "calandar", "Sep_17_WK_38" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Sep-17 WK-38";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "`Sep-17 WK-38`";

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
$edata ["EditParams"] .= " maxlength=10";

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

$tdatacalandar ["Sep-17 WK-38"] = $fdata;
// Sep-24 WK-39
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 13;
$fdata ["strName"] = "Sep-24 WK-39";
$fdata ["GoodName"] = "Sep_24_WK_39";
$fdata ["ownerTable"] = "calandar";
$fdata ["Label"] = GetFieldLabel ( "calandar", "Sep_24_WK_39" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Sep-24 WK-39";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "`Sep-24 WK-39`";

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
$edata ["EditParams"] .= " maxlength=10";

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

$tdatacalandar ["Sep-24 WK-39"] = $fdata;
// Oct-1 WK-40
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 14;
$fdata ["strName"] = "Oct-1 WK-40";
$fdata ["GoodName"] = "Oct_1_WK_40";
$fdata ["ownerTable"] = "calandar";
$fdata ["Label"] = GetFieldLabel ( "calandar", "Oct_1_WK_40" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Oct-1 WK-40";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "`Oct-1 WK-40`";

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
$edata ["EditParams"] .= " maxlength=10";

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

$tdatacalandar ["Oct-1 WK-40"] = $fdata;
// Oct-8 WK-41
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 15;
$fdata ["strName"] = "Oct-8 WK-41";
$fdata ["GoodName"] = "Oct_8_WK_41";
$fdata ["ownerTable"] = "calandar";
$fdata ["Label"] = GetFieldLabel ( "calandar", "Oct_8_WK_41" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Oct-8 WK-41";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "`Oct-8 WK-41`";

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
$edata ["EditParams"] .= " maxlength=10";

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

$tdatacalandar ["Oct-8 WK-41"] = $fdata;
// Oct-15 WK-42
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 16;
$fdata ["strName"] = "Oct-15 WK-42";
$fdata ["GoodName"] = "Oct_15_WK_42";
$fdata ["ownerTable"] = "calandar";
$fdata ["Label"] = GetFieldLabel ( "calandar", "Oct_15_WK_42" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Oct-15 WK-42";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "`Oct-15 WK-42`";

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
$edata ["EditParams"] .= " maxlength=10";

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

$tdatacalandar ["Oct-15 WK-42"] = $fdata;
// Oct-22 WK-43
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 17;
$fdata ["strName"] = "Oct-22 WK-43";
$fdata ["GoodName"] = "Oct_22_WK_43";
$fdata ["ownerTable"] = "calandar";
$fdata ["Label"] = GetFieldLabel ( "calandar", "Oct_22_WK_43" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Oct-22 WK-43";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "`Oct-22 WK-43`";

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
$edata ["EditParams"] .= " maxlength=10";

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

$tdatacalandar ["Oct-22 WK-43"] = $fdata;
// Oct-29 WK-44
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 18;
$fdata ["strName"] = "Oct-29 WK-44";
$fdata ["GoodName"] = "Oct_29_WK_44";
$fdata ["ownerTable"] = "calandar";
$fdata ["Label"] = GetFieldLabel ( "calandar", "Oct_29_WK_44" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Oct-29 WK-44";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "`Oct-29 WK-44`";

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
$edata ["EditParams"] .= " maxlength=10";

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

$tdatacalandar ["Oct-29 WK-44"] = $fdata;
// Nov-5 WK-45
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 19;
$fdata ["strName"] = "Nov-5 WK-45";
$fdata ["GoodName"] = "Nov_5_WK_45";
$fdata ["ownerTable"] = "calandar";
$fdata ["Label"] = GetFieldLabel ( "calandar", "Nov_5_WK_45" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Nov-5 WK-45";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "`Nov-5 WK-45`";

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
$edata ["EditParams"] .= " maxlength=10";

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

$tdatacalandar ["Nov-5 WK-45"] = $fdata;
// Nov-12 WK-46
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 20;
$fdata ["strName"] = "Nov-12 WK-46";
$fdata ["GoodName"] = "Nov_12_WK_46";
$fdata ["ownerTable"] = "calandar";
$fdata ["Label"] = GetFieldLabel ( "calandar", "Nov_12_WK_46" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Nov-12 WK-46";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "`Nov-12 WK-46`";

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
$edata ["EditParams"] .= " maxlength=10";

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

$tdatacalandar ["Nov-12 WK-46"] = $fdata;
// Nov-19 WK-47
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 21;
$fdata ["strName"] = "Nov-19 WK-47";
$fdata ["GoodName"] = "Nov_19_WK_47";
$fdata ["ownerTable"] = "calandar";
$fdata ["Label"] = GetFieldLabel ( "calandar", "Nov_19_WK_47" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Nov-19 WK-47";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "`Nov-19 WK-47`";

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
$edata ["EditParams"] .= " maxlength=10";

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

$tdatacalandar ["Nov-19 WK-47"] = $fdata;
// Nov-26 WK-48
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 22;
$fdata ["strName"] = "Nov-26 WK-48";
$fdata ["GoodName"] = "Nov_26_WK_48";
$fdata ["ownerTable"] = "calandar";
$fdata ["Label"] = GetFieldLabel ( "calandar", "Nov_26_WK_48" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Nov-26 WK-48";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "`Nov-26 WK-48`";

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
$edata ["EditParams"] .= " maxlength=10";

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

$tdatacalandar ["Nov-26 WK-48"] = $fdata;
// Dec-3 WK-49
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 23;
$fdata ["strName"] = "Dec-3 WK-49";
$fdata ["GoodName"] = "Dec_3_WK_49";
$fdata ["ownerTable"] = "calandar";
$fdata ["Label"] = GetFieldLabel ( "calandar", "Dec_3_WK_49" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Dec-3 WK-49";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "`Dec-3 WK-49`";

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
$edata ["EditParams"] .= " maxlength=10";

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

$tdatacalandar ["Dec-3 WK-49"] = $fdata;
// Dec-10 WK-50
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 24;
$fdata ["strName"] = "Dec-10 WK-50";
$fdata ["GoodName"] = "Dec_10_WK_50";
$fdata ["ownerTable"] = "calandar";
$fdata ["Label"] = GetFieldLabel ( "calandar", "Dec_10_WK_50" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Dec-10 WK-50";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "`Dec-10 WK-50`";

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
$edata ["EditParams"] .= " maxlength=10";

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

$tdatacalandar ["Dec-10 WK-50"] = $fdata;
// Dec-17 WK-51
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 25;
$fdata ["strName"] = "Dec-17 WK-51";
$fdata ["GoodName"] = "Dec_17_WK_51";
$fdata ["ownerTable"] = "calandar";
$fdata ["Label"] = GetFieldLabel ( "calandar", "Dec_17_WK_51" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Dec-17 WK-51";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "`Dec-17 WK-51`";

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
$edata ["EditParams"] .= " maxlength=10";

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

$tdatacalandar ["Dec-17 WK-51"] = $fdata;
// Dec-24 WK-52
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 26;
$fdata ["strName"] = "Dec-24 WK-52";
$fdata ["GoodName"] = "Dec_24_WK_52";
$fdata ["ownerTable"] = "calandar";
$fdata ["Label"] = GetFieldLabel ( "calandar", "Dec_24_WK_52" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Dec-24 WK-52";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "`Dec-24 WK-52`";

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
$edata ["EditParams"] .= " maxlength=10";

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

$tdatacalandar ["Dec-24 WK-52"] = $fdata;
// Dec-31 WK-53
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 27;
$fdata ["strName"] = "Dec-31 WK-53";
$fdata ["GoodName"] = "Dec_31_WK_53";
$fdata ["ownerTable"] = "calandar";
$fdata ["Label"] = GetFieldLabel ( "calandar", "Dec_31_WK_53" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Dec-31 WK-53";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "`Dec-31 WK-53`";

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
$edata ["EditParams"] .= " maxlength=10";

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

$tdatacalandar ["Dec-31 WK-53"] = $fdata;
// Jul-30 WK-31
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 28;
$fdata ["strName"] = "Jul-30 WK-31";
$fdata ["GoodName"] = "Jul_30_WK_31";
$fdata ["ownerTable"] = "calandar";
$fdata ["Label"] = GetFieldLabel ( "calandar", "Jul_30_WK_31" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Jul-30 WK-31";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "`Jul-30 WK-31`";

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
$edata ["EditParams"] .= " maxlength=10";

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

$tdatacalandar ["Jul-30 WK-31"] = $fdata;

$tables_data ["calandar"] = &$tdatacalandar;
$field_labels ["calandar"] = &$fieldLabelscalandar;
$fieldToolTips ["calandar"] = &$fieldToolTipscalandar;
$page_titles ["calandar"] = &$pageTitlescalandar;

// -----------------start prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData ["calandar"] = array ();

// tables which are master tables for current table (detail)
$masterTablesData ["calandar"] = array ();

// -----------------end prepare master-details data arrays ------------------------------//

require_once (getabspath ( "classes/sql.php" ));
function createSqlQuery_calandar() {
	$proto0 = array ();
	$proto0 ["m_strHead"] = "SELECT";
	$proto0 ["m_strFieldList"] = "`Jul-2 WK-27`,  	`Jul-9 WK-28`,  	`Jul-16 WK-29`,  	`Jul-23 WK-30`,  	AutCalID,  	`Aug-6 WK-32`,  	`Aug-13 WK-33`,  	`Aug-20 WK-34`,  	`Aug-27 WK-35`,  	`Sep-3 WK-36`,  	`Sep-10 WK-37`,  	`Sep-17 WK-38`,  	`Sep-24 WK-39`,  	`Oct-1 WK-40`,  	`Oct-8 WK-41`,  	`Oct-15 WK-42`,  	`Oct-22 WK-43`,  	`Oct-29 WK-44`,  	`Nov-5 WK-45`,  	`Nov-12 WK-46`,  	`Nov-19 WK-47`,  	`Nov-26 WK-48`,  	`Dec-3 WK-49`,  	`Dec-10 WK-50`,  	`Dec-17 WK-51`,  	`Dec-24 WK-52`,  	`Dec-31 WK-53`,  	`Jul-30 WK-31`";
	$proto0 ["m_strFrom"] = "FROM calandar";
	$proto0 ["m_strWhere"] = "";
	$proto0 ["m_strOrderBy"] = "";
	$proto0 ["m_strTail"] = "";
	$proto0 ["cipherer"] = null;
	$proto1 = array ();
	$proto1 ["m_sql"] = "";
	$proto1 ["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed ( array (
			"m_sql" => "" 
	) );
	
	$proto1 ["m_column"] = $obj;
	$proto1 ["m_contained"] = array ();
	$proto1 ["m_strCase"] = "";
	$proto1 ["m_havingmode"] = false;
	$proto1 ["m_inBrackets"] = false;
	$proto1 ["m_useAlias"] = false;
	$obj = new SQLLogicalExpr ( $proto1 );
	
	$proto0 ["m_where"] = $obj;
	$proto3 = array ();
	$proto3 ["m_sql"] = "";
	$proto3 ["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed ( array (
			"m_sql" => "" 
	) );
	
	$proto3 ["m_column"] = $obj;
	$proto3 ["m_contained"] = array ();
	$proto3 ["m_strCase"] = "";
	$proto3 ["m_havingmode"] = false;
	$proto3 ["m_inBrackets"] = false;
	$proto3 ["m_useAlias"] = false;
	$obj = new SQLLogicalExpr ( $proto3 );
	
	$proto0 ["m_having"] = $obj;
	$proto0 ["m_fieldlist"] = array ();
	$proto5 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Jul-2 WK-27",
			"m_strTable" => "calandar",
			"m_srcTableName" => "calandar" 
	) );
	
	$proto5 ["m_sql"] = "`Jul-2 WK-27`";
	$proto5 ["m_srcTableName"] = "calandar";
	$proto5 ["m_expr"] = $obj;
	$proto5 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto5 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto7 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Jul-9 WK-28",
			"m_strTable" => "calandar",
			"m_srcTableName" => "calandar" 
	) );
	
	$proto7 ["m_sql"] = "`Jul-9 WK-28`";
	$proto7 ["m_srcTableName"] = "calandar";
	$proto7 ["m_expr"] = $obj;
	$proto7 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto7 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto9 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Jul-16 WK-29",
			"m_strTable" => "calandar",
			"m_srcTableName" => "calandar" 
	) );
	
	$proto9 ["m_sql"] = "`Jul-16 WK-29`";
	$proto9 ["m_srcTableName"] = "calandar";
	$proto9 ["m_expr"] = $obj;
	$proto9 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto9 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto11 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Jul-23 WK-30",
			"m_strTable" => "calandar",
			"m_srcTableName" => "calandar" 
	) );
	
	$proto11 ["m_sql"] = "`Jul-23 WK-30`";
	$proto11 ["m_srcTableName"] = "calandar";
	$proto11 ["m_expr"] = $obj;
	$proto11 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto11 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto13 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "AutCalID",
			"m_strTable" => "calandar",
			"m_srcTableName" => "calandar" 
	) );
	
	$proto13 ["m_sql"] = "AutCalID";
	$proto13 ["m_srcTableName"] = "calandar";
	$proto13 ["m_expr"] = $obj;
	$proto13 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto13 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto15 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Aug-6 WK-32",
			"m_strTable" => "calandar",
			"m_srcTableName" => "calandar" 
	) );
	
	$proto15 ["m_sql"] = "`Aug-6 WK-32`";
	$proto15 ["m_srcTableName"] = "calandar";
	$proto15 ["m_expr"] = $obj;
	$proto15 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto15 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto17 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Aug-13 WK-33",
			"m_strTable" => "calandar",
			"m_srcTableName" => "calandar" 
	) );
	
	$proto17 ["m_sql"] = "`Aug-13 WK-33`";
	$proto17 ["m_srcTableName"] = "calandar";
	$proto17 ["m_expr"] = $obj;
	$proto17 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto17 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto19 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Aug-20 WK-34",
			"m_strTable" => "calandar",
			"m_srcTableName" => "calandar" 
	) );
	
	$proto19 ["m_sql"] = "`Aug-20 WK-34`";
	$proto19 ["m_srcTableName"] = "calandar";
	$proto19 ["m_expr"] = $obj;
	$proto19 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto19 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto21 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Aug-27 WK-35",
			"m_strTable" => "calandar",
			"m_srcTableName" => "calandar" 
	) );
	
	$proto21 ["m_sql"] = "`Aug-27 WK-35`";
	$proto21 ["m_srcTableName"] = "calandar";
	$proto21 ["m_expr"] = $obj;
	$proto21 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto21 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto23 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Sep-3 WK-36",
			"m_strTable" => "calandar",
			"m_srcTableName" => "calandar" 
	) );
	
	$proto23 ["m_sql"] = "`Sep-3 WK-36`";
	$proto23 ["m_srcTableName"] = "calandar";
	$proto23 ["m_expr"] = $obj;
	$proto23 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto23 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto25 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Sep-10 WK-37",
			"m_strTable" => "calandar",
			"m_srcTableName" => "calandar" 
	) );
	
	$proto25 ["m_sql"] = "`Sep-10 WK-37`";
	$proto25 ["m_srcTableName"] = "calandar";
	$proto25 ["m_expr"] = $obj;
	$proto25 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto25 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto27 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Sep-17 WK-38",
			"m_strTable" => "calandar",
			"m_srcTableName" => "calandar" 
	) );
	
	$proto27 ["m_sql"] = "`Sep-17 WK-38`";
	$proto27 ["m_srcTableName"] = "calandar";
	$proto27 ["m_expr"] = $obj;
	$proto27 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto27 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto29 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Sep-24 WK-39",
			"m_strTable" => "calandar",
			"m_srcTableName" => "calandar" 
	) );
	
	$proto29 ["m_sql"] = "`Sep-24 WK-39`";
	$proto29 ["m_srcTableName"] = "calandar";
	$proto29 ["m_expr"] = $obj;
	$proto29 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto29 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto31 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Oct-1 WK-40",
			"m_strTable" => "calandar",
			"m_srcTableName" => "calandar" 
	) );
	
	$proto31 ["m_sql"] = "`Oct-1 WK-40`";
	$proto31 ["m_srcTableName"] = "calandar";
	$proto31 ["m_expr"] = $obj;
	$proto31 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto31 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto33 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Oct-8 WK-41",
			"m_strTable" => "calandar",
			"m_srcTableName" => "calandar" 
	) );
	
	$proto33 ["m_sql"] = "`Oct-8 WK-41`";
	$proto33 ["m_srcTableName"] = "calandar";
	$proto33 ["m_expr"] = $obj;
	$proto33 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto33 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto35 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Oct-15 WK-42",
			"m_strTable" => "calandar",
			"m_srcTableName" => "calandar" 
	) );
	
	$proto35 ["m_sql"] = "`Oct-15 WK-42`";
	$proto35 ["m_srcTableName"] = "calandar";
	$proto35 ["m_expr"] = $obj;
	$proto35 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto35 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto37 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Oct-22 WK-43",
			"m_strTable" => "calandar",
			"m_srcTableName" => "calandar" 
	) );
	
	$proto37 ["m_sql"] = "`Oct-22 WK-43`";
	$proto37 ["m_srcTableName"] = "calandar";
	$proto37 ["m_expr"] = $obj;
	$proto37 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto37 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto39 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Oct-29 WK-44",
			"m_strTable" => "calandar",
			"m_srcTableName" => "calandar" 
	) );
	
	$proto39 ["m_sql"] = "`Oct-29 WK-44`";
	$proto39 ["m_srcTableName"] = "calandar";
	$proto39 ["m_expr"] = $obj;
	$proto39 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto39 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto41 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Nov-5 WK-45",
			"m_strTable" => "calandar",
			"m_srcTableName" => "calandar" 
	) );
	
	$proto41 ["m_sql"] = "`Nov-5 WK-45`";
	$proto41 ["m_srcTableName"] = "calandar";
	$proto41 ["m_expr"] = $obj;
	$proto41 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto41 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto43 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Nov-12 WK-46",
			"m_strTable" => "calandar",
			"m_srcTableName" => "calandar" 
	) );
	
	$proto43 ["m_sql"] = "`Nov-12 WK-46`";
	$proto43 ["m_srcTableName"] = "calandar";
	$proto43 ["m_expr"] = $obj;
	$proto43 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto43 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto45 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Nov-19 WK-47",
			"m_strTable" => "calandar",
			"m_srcTableName" => "calandar" 
	) );
	
	$proto45 ["m_sql"] = "`Nov-19 WK-47`";
	$proto45 ["m_srcTableName"] = "calandar";
	$proto45 ["m_expr"] = $obj;
	$proto45 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto45 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto47 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Nov-26 WK-48",
			"m_strTable" => "calandar",
			"m_srcTableName" => "calandar" 
	) );
	
	$proto47 ["m_sql"] = "`Nov-26 WK-48`";
	$proto47 ["m_srcTableName"] = "calandar";
	$proto47 ["m_expr"] = $obj;
	$proto47 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto47 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto49 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Dec-3 WK-49",
			"m_strTable" => "calandar",
			"m_srcTableName" => "calandar" 
	) );
	
	$proto49 ["m_sql"] = "`Dec-3 WK-49`";
	$proto49 ["m_srcTableName"] = "calandar";
	$proto49 ["m_expr"] = $obj;
	$proto49 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto49 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto51 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Dec-10 WK-50",
			"m_strTable" => "calandar",
			"m_srcTableName" => "calandar" 
	) );
	
	$proto51 ["m_sql"] = "`Dec-10 WK-50`";
	$proto51 ["m_srcTableName"] = "calandar";
	$proto51 ["m_expr"] = $obj;
	$proto51 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto51 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto53 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Dec-17 WK-51",
			"m_strTable" => "calandar",
			"m_srcTableName" => "calandar" 
	) );
	
	$proto53 ["m_sql"] = "`Dec-17 WK-51`";
	$proto53 ["m_srcTableName"] = "calandar";
	$proto53 ["m_expr"] = $obj;
	$proto53 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto53 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto55 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Dec-24 WK-52",
			"m_strTable" => "calandar",
			"m_srcTableName" => "calandar" 
	) );
	
	$proto55 ["m_sql"] = "`Dec-24 WK-52`";
	$proto55 ["m_srcTableName"] = "calandar";
	$proto55 ["m_expr"] = $obj;
	$proto55 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto55 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto57 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Dec-31 WK-53",
			"m_strTable" => "calandar",
			"m_srcTableName" => "calandar" 
	) );
	
	$proto57 ["m_sql"] = "`Dec-31 WK-53`";
	$proto57 ["m_srcTableName"] = "calandar";
	$proto57 ["m_expr"] = $obj;
	$proto57 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto57 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto59 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Jul-30 WK-31",
			"m_strTable" => "calandar",
			"m_srcTableName" => "calandar" 
	) );
	
	$proto59 ["m_sql"] = "`Jul-30 WK-31`";
	$proto59 ["m_srcTableName"] = "calandar";
	$proto59 ["m_expr"] = $obj;
	$proto59 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto59 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto0 ["m_fromlist"] = array ();
	$proto61 = array ();
	$proto61 ["m_link"] = "SQLL_MAIN";
	$proto62 = array ();
	$proto62 ["m_strName"] = "calandar";
	$proto62 ["m_srcTableName"] = "calandar";
	$proto62 ["m_columns"] = array ();
	$proto62 ["m_columns"] [] = "Jul-2 WK-27";
	$proto62 ["m_columns"] [] = "Jul-9 WK-28";
	$proto62 ["m_columns"] [] = "Jul-16 WK-29";
	$proto62 ["m_columns"] [] = "Jul-23 WK-30";
	$proto62 ["m_columns"] [] = "AutCalID";
	$proto62 ["m_columns"] [] = "Aug-6 WK-32";
	$proto62 ["m_columns"] [] = "Aug-13 WK-33";
	$proto62 ["m_columns"] [] = "Aug-20 WK-34";
	$proto62 ["m_columns"] [] = "Aug-27 WK-35";
	$proto62 ["m_columns"] [] = "Sep-3 WK-36";
	$proto62 ["m_columns"] [] = "Sep-10 WK-37";
	$proto62 ["m_columns"] [] = "Sep-17 WK-38";
	$proto62 ["m_columns"] [] = "Sep-24 WK-39";
	$proto62 ["m_columns"] [] = "Oct-1 WK-40";
	$proto62 ["m_columns"] [] = "Oct-8 WK-41";
	$proto62 ["m_columns"] [] = "Oct-15 WK-42";
	$proto62 ["m_columns"] [] = "Oct-22 WK-43";
	$proto62 ["m_columns"] [] = "Oct-29 WK-44";
	$proto62 ["m_columns"] [] = "Nov-5 WK-45";
	$proto62 ["m_columns"] [] = "Nov-12 WK-46";
	$proto62 ["m_columns"] [] = "Nov-19 WK-47";
	$proto62 ["m_columns"] [] = "Nov-26 WK-48";
	$proto62 ["m_columns"] [] = "Dec-3 WK-49";
	$proto62 ["m_columns"] [] = "Dec-10 WK-50";
	$proto62 ["m_columns"] [] = "Dec-17 WK-51";
	$proto62 ["m_columns"] [] = "Dec-24 WK-52";
	$proto62 ["m_columns"] [] = "Dec-31 WK-53";
	$proto62 ["m_columns"] [] = "Jul-30 WK-31";
	$obj = new SQLTable ( $proto62 );
	
	$proto61 ["m_table"] = $obj;
	$proto61 ["m_sql"] = "calandar";
	$proto61 ["m_alias"] = "";
	$proto61 ["m_srcTableName"] = "calandar";
	$proto63 = array ();
	$proto63 ["m_sql"] = "";
	$proto63 ["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed ( array (
			"m_sql" => "" 
	) );
	
	$proto63 ["m_column"] = $obj;
	$proto63 ["m_contained"] = array ();
	$proto63 ["m_strCase"] = "";
	$proto63 ["m_havingmode"] = false;
	$proto63 ["m_inBrackets"] = false;
	$proto63 ["m_useAlias"] = false;
	$obj = new SQLLogicalExpr ( $proto63 );
	
	$proto61 ["m_joinon"] = $obj;
	$obj = new SQLFromListItem ( $proto61 );
	
	$proto0 ["m_fromlist"] [] = $obj;
	$proto0 ["m_groupby"] = array ();
	$proto0 ["m_orderby"] = array ();
	$proto0 ["m_srcTableName"] = "calandar";
	$obj = new SQLQuery ( $proto0 );
	
	return $obj;
}
$queryData_calandar = createSqlQuery_calandar ();

$tdatacalandar [".sqlquery"] = $queryData_calandar;

$tableEvents ["calandar"] = new eventsBase ();
$tdatacalandar [".hasEvents"] = false;

?>