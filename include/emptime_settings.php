<?php
require_once (getabspath ( "classes/cipherer.php" ));

$tdataemptime = array ();
$tdataemptime [".truncateText"] = true;
$tdataemptime [".NumberOfChars"] = 60;
$tdataemptime [".ShortName"] = "emptime";
$tdataemptime [".OwnerID"] = "";
$tdataemptime [".OriginalTable"] = "emptime";

// field labels
$fieldLabelsemptime = array ();
$fieldToolTipsemptime = array ();
$pageTitlesemptime = array ();

if (mlang_getcurrentlang () == "English") {
	$fieldLabelsemptime ["English"] = array ();
	$fieldToolTipsemptime ["English"] = array ();
	$pageTitlesemptime ["English"] = array ();
	$fieldLabelsemptime ["English"] ["AUTimeid"] = "AUTimeid";
	$fieldToolTipsemptime ["English"] ["AUTimeid"] = "";
	$fieldLabelsemptime ["English"] ["EmployeeID"] = "Employee ID";
	$fieldToolTipsemptime ["English"] ["EmployeeID"] = "";
	$fieldLabelsemptime ["English"] ["FirstName"] = "First Name";
	$fieldToolTipsemptime ["English"] ["FirstName"] = "";
	$fieldLabelsemptime ["English"] ["LastName"] = "Last Name";
	$fieldToolTipsemptime ["English"] ["LastName"] = "";
	$fieldLabelsemptime ["English"] ["SupervisorName"] = "Supervisor Name";
	$fieldToolTipsemptime ["English"] ["SupervisorName"] = "";
	$fieldLabelsemptime ["English"] ["EmployeeStatus"] = "Employee Status";
	$fieldToolTipsemptime ["English"] ["EmployeeStatus"] = "";
	$fieldLabelsemptime ["English"] ["Date1"] = "1/3/2016 WK-1";
	$fieldToolTipsemptime ["English"] ["Date1"] = "";
	$fieldLabelsemptime ["English"] ["Date2"] = "1/10/2016 WK-2";
	$fieldToolTipsemptime ["English"] ["Date2"] = "";
	$fieldLabelsemptime ["English"] ["Date3"] = "1/17/2016 WK-3";
	$fieldToolTipsemptime ["English"] ["Date3"] = "";
	$fieldLabelsemptime ["English"] ["Date4"] = "1/24/2016 WK-4";
	$fieldToolTipsemptime ["English"] ["Date4"] = "";
	$fieldLabelsemptime ["English"] ["Date5"] = "1/24/2016 WK-5";
	$fieldToolTipsemptime ["English"] ["Date5"] = "";
	$fieldLabelsemptime ["English"] ["Date6"] = "2/7/2016 WK-6";
	$fieldToolTipsemptime ["English"] ["Date6"] = "";
	$fieldLabelsemptime ["English"] ["Date7"] = "2/14/2016 WK-7";
	$fieldToolTipsemptime ["English"] ["Date7"] = "";
	$fieldLabelsemptime ["English"] ["Date8"] = "2/21/2016 WK-8";
	$fieldToolTipsemptime ["English"] ["Date8"] = "";
	$fieldLabelsemptime ["English"] ["Date9"] = "2/28/2016 WK-9";
	$fieldToolTipsemptime ["English"] ["Date9"] = "";
	$fieldLabelsemptime ["English"] ["Date10"] = "3/6/2016 WK-10";
	$fieldToolTipsemptime ["English"] ["Date10"] = "";
	$fieldLabelsemptime ["English"] ["Date11"] = "3/13/2016 WK-11";
	$fieldToolTipsemptime ["English"] ["Date11"] = "";
	$fieldLabelsemptime ["English"] ["Date12"] = "3/20/2016 WK-12";
	$fieldToolTipsemptime ["English"] ["Date12"] = "";
	$fieldLabelsemptime ["English"] ["Date13"] = "3/27/2016 WK-13";
	$fieldToolTipsemptime ["English"] ["Date13"] = "";
	$fieldLabelsemptime ["English"] ["Date14"] = "4/3/2016 WK-14";
	$fieldToolTipsemptime ["English"] ["Date14"] = "";
	$fieldLabelsemptime ["English"] ["Date15"] = "4/10/2016 WK-15";
	$fieldToolTipsemptime ["English"] ["Date15"] = "";
	$fieldLabelsemptime ["English"] ["Date16"] = "4/17/2016 WK-16";
	$fieldToolTipsemptime ["English"] ["Date16"] = "";
	$fieldLabelsemptime ["English"] ["Date17"] = "4/24/2016 WK-17";
	$fieldToolTipsemptime ["English"] ["Date17"] = "";
	$fieldLabelsemptime ["English"] ["Date18"] = "5/1/2016 WK-18";
	$fieldToolTipsemptime ["English"] ["Date18"] = "";
	$fieldLabelsemptime ["English"] ["Date19"] = "5/8/2016 WK-29";
	$fieldToolTipsemptime ["English"] ["Date19"] = "";
	$fieldLabelsemptime ["English"] ["Date20"] = "5/15/2016 WK-20";
	$fieldToolTipsemptime ["English"] ["Date20"] = "";
	$fieldLabelsemptime ["English"] ["Date21"] = "5/22/2016 WK-21";
	$fieldToolTipsemptime ["English"] ["Date21"] = "";
	$fieldLabelsemptime ["English"] ["Date22"] = "5/29/2016 WK-22";
	$fieldToolTipsemptime ["English"] ["Date22"] = "";
	$fieldLabelsemptime ["English"] ["Date23"] = "6/5/2016 WK-23";
	$fieldToolTipsemptime ["English"] ["Date23"] = "";
	$fieldLabelsemptime ["English"] ["Date24"] = "6/12/2016 WK-24";
	$fieldToolTipsemptime ["English"] ["Date24"] = "";
	$fieldLabelsemptime ["English"] ["Date25"] = "6/19/2016 WK-25";
	$fieldToolTipsemptime ["English"] ["Date25"] = "";
	$fieldLabelsemptime ["English"] ["Date26"] = "6/26/2016 WK-26";
	$fieldToolTipsemptime ["English"] ["Date26"] = "";
	$fieldLabelsemptime ["English"] ["Date27"] = "7/3/2016 WK-27";
	$fieldToolTipsemptime ["English"] ["Date27"] = "";
	$fieldLabelsemptime ["English"] ["Date28"] = "7/10/2016 WK-28";
	$fieldToolTipsemptime ["English"] ["Date28"] = "";
	$fieldLabelsemptime ["English"] ["Date29"] = "7/17/2016 WK-29";
	$fieldToolTipsemptime ["English"] ["Date29"] = "";
	$fieldLabelsemptime ["English"] ["Date30"] = "7/24/2016 WK-30";
	$fieldToolTipsemptime ["English"] ["Date30"] = "";
	$fieldLabelsemptime ["English"] ["Date31"] = "7/31/2016 WK-31";
	$fieldToolTipsemptime ["English"] ["Date31"] = "";
	$fieldLabelsemptime ["English"] ["Date32"] = "8/7/2016 WK-32";
	$fieldToolTipsemptime ["English"] ["Date32"] = "";
	$fieldLabelsemptime ["English"] ["Date33"] = "8/14/2016 WK-33";
	$fieldToolTipsemptime ["English"] ["Date33"] = "";
	$fieldLabelsemptime ["English"] ["Date34"] = "8/21/2016 WK-34";
	$fieldToolTipsemptime ["English"] ["Date34"] = "";
	$fieldLabelsemptime ["English"] ["Date35"] = "8/28/2016 WK-35";
	$fieldToolTipsemptime ["English"] ["Date35"] = "";
	$fieldLabelsemptime ["English"] ["Date36"] = "9/4/2016 WK-36";
	$fieldToolTipsemptime ["English"] ["Date36"] = "";
	$fieldLabelsemptime ["English"] ["Date37"] = "9/11/2016 WK-37";
	$fieldToolTipsemptime ["English"] ["Date37"] = "";
	$fieldLabelsemptime ["English"] ["Date38"] = "9/18/2016 WK-38";
	$fieldToolTipsemptime ["English"] ["Date38"] = "";
	$fieldLabelsemptime ["English"] ["Date39"] = "9/25/2016 WK-39";
	$fieldToolTipsemptime ["English"] ["Date39"] = "";
	$fieldLabelsemptime ["English"] ["Date40"] = "10/2/2016 WK-40";
	$fieldToolTipsemptime ["English"] ["Date40"] = "";
	$fieldLabelsemptime ["English"] ["Date41"] = "10/9/2016 WK-41";
	$fieldToolTipsemptime ["English"] ["Date41"] = "";
	$fieldLabelsemptime ["English"] ["Date42"] = "10/16/2016 WK-42";
	$fieldToolTipsemptime ["English"] ["Date42"] = "";
	$fieldLabelsemptime ["English"] ["Date43"] = "10/23/2016 WK-43";
	$fieldToolTipsemptime ["English"] ["Date43"] = "";
	$fieldLabelsemptime ["English"] ["Date44"] = "10/30/2016 WK-44";
	$fieldToolTipsemptime ["English"] ["Date44"] = "";
	$fieldLabelsemptime ["English"] ["Date45"] = "11/6/2016 WK-45";
	$fieldToolTipsemptime ["English"] ["Date45"] = "";
	$fieldLabelsemptime ["English"] ["Date46"] = "11/13/2016 WK-46";
	$fieldToolTipsemptime ["English"] ["Date46"] = "";
	$fieldLabelsemptime ["English"] ["Date47"] = "11/20/2016 WK-47";
	$fieldToolTipsemptime ["English"] ["Date47"] = "";
	$fieldLabelsemptime ["English"] ["Date48"] = "11/27/2016 WK-48";
	$fieldToolTipsemptime ["English"] ["Date48"] = "";
	$fieldLabelsemptime ["English"] ["Date49"] = "12/4/2016 WK-49";
	$fieldToolTipsemptime ["English"] ["Date49"] = "";
	$fieldLabelsemptime ["English"] ["Date50"] = "12/11/2016 WK-50";
	$fieldToolTipsemptime ["English"] ["Date50"] = "";
	$fieldLabelsemptime ["English"] ["Date51"] = "12/18/2016 WK-51";
	$fieldToolTipsemptime ["English"] ["Date51"] = "";
	$fieldLabelsemptime ["English"] ["Date52"] = "12/25/2016 WK-52";
	$fieldToolTipsemptime ["English"] ["Date52"] = "";
	$fieldLabelsemptime ["English"] ["Date53"] = "1/1/2017 WK-1";
	$fieldToolTipsemptime ["English"] ["Date53"] = "";
	if (count ( $fieldToolTipsemptime ["English"] ))
		$tdataemptime [".isUseToolTips"] = true;
}
if (mlang_getcurrentlang () == "") {
	$fieldLabelsemptime [""] = array ();
	$fieldToolTipsemptime [""] = array ();
	$pageTitlesemptime [""] = array ();
	$fieldLabelsemptime [""] ["AUTimeid"] = "AUTimeid";
	$fieldToolTipsemptime [""] ["AUTimeid"] = "";
	if (count ( $fieldToolTipsemptime [""] ))
		$tdataemptime [".isUseToolTips"] = true;
}

$tdataemptime [".NCSearch"] = true;

if (! isMobile ())
	$tdataemptime [".scrollGridBody"] = true;

$tdataemptime [".shortTableName"] = "emptime";
$tdataemptime [".nSecOptions"] = 0;
$tdataemptime [".recsPerRowList"] = 1;
$tdataemptime [".recsPerRowPrint"] = 1;
$tdataemptime [".mainTableOwnerID"] = "";
$tdataemptime [".moveNext"] = 0;
$tdataemptime [".entityType"] = 0;

$tdataemptime [".strOriginalTableName"] = "emptime";

$tdataemptime [".showAddInPopup"] = true;

$tdataemptime [".showEditInPopup"] = true;

$tdataemptime [".showViewInPopup"] = true;

// page's base css files names
$popupPagesLayoutNames = array ();

;
$popupPagesLayoutNames ["add"] = "add2";

;
$popupPagesLayoutNames ["edit"] = "edit2";
;
$popupPagesLayoutNames ["view"] = "edit2";
$tdataemptime [".popupPagesLayoutNames"] = $popupPagesLayoutNames;

$tdataemptime [".fieldsForRegister"] = array ();

$tdataemptime [".listAjax"] = false;

$tdataemptime [".audit"] = false;

$tdataemptime [".locking"] = false;

$tdataemptime [".edit"] = true;
$tdataemptime [".afterEditAction"] = 1;
$tdataemptime [".closePopupAfterEdit"] = 1;
$tdataemptime [".afterEditActionDetTable"] = "";

$tdataemptime [".add"] = true;
$tdataemptime [".afterAddAction"] = 1;
$tdataemptime [".closePopupAfterAdd"] = 1;
$tdataemptime [".afterAddActionDetTable"] = "Detail tables not found!";

$tdataemptime [".list"] = true;

$tdataemptime [".inlineEdit"] = true;

$tdataemptime [".import"] = true;

$tdataemptime [".exportTo"] = true;

$tdataemptime [".printFriendly"] = true;

$tdataemptime [".delete"] = true;

$tdataemptime [".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataemptime [".searchSaving"] = false;
//

$tdataemptime [".showSearchPanel"] = true;
$tdataemptime [".flexibleSearch"] = true;

if (isMobile ())
	$tdataemptime [".isUseAjaxSuggest"] = false;
else
	$tdataemptime [".isUseAjaxSuggest"] = true;

$tdataemptime [".rowHighlite"] = true;

$tdataemptime [".addPageEvents"] = true;

// use timepicker for search panel
$tdataemptime [".isUseTimeForSearch"] = false;

$tdataemptime [".allSearchFields"] = array ();
$tdataemptime [".filterFields"] = array ();
$tdataemptime [".requiredSearchFields"] = array ();

$tdataemptime [".allSearchFields"] [] = "FirstName";
$tdataemptime [".allSearchFields"] [] = "LastName";
$tdataemptime [".allSearchFields"] [] = "SupervisorName";
$tdataemptime [".allSearchFields"] [] = "EmployeeStatus";
$tdataemptime [".allSearchFields"] [] = "Date1";
$tdataemptime [".allSearchFields"] [] = "Date2";
$tdataemptime [".allSearchFields"] [] = "Date3";
$tdataemptime [".allSearchFields"] [] = "Date4";
$tdataemptime [".allSearchFields"] [] = "Date5";
$tdataemptime [".allSearchFields"] [] = "Date6";
$tdataemptime [".allSearchFields"] [] = "Date7";
$tdataemptime [".allSearchFields"] [] = "Date8";
$tdataemptime [".allSearchFields"] [] = "Date9";
$tdataemptime [".allSearchFields"] [] = "Date10";
$tdataemptime [".allSearchFields"] [] = "Date11";
$tdataemptime [".allSearchFields"] [] = "Date12";
$tdataemptime [".allSearchFields"] [] = "Date13";
$tdataemptime [".allSearchFields"] [] = "Date14";
$tdataemptime [".allSearchFields"] [] = "Date15";
$tdataemptime [".allSearchFields"] [] = "Date16";
$tdataemptime [".allSearchFields"] [] = "Date17";
$tdataemptime [".allSearchFields"] [] = "Date18";
$tdataemptime [".allSearchFields"] [] = "Date19";
$tdataemptime [".allSearchFields"] [] = "Date20";
$tdataemptime [".allSearchFields"] [] = "Date21";
$tdataemptime [".allSearchFields"] [] = "Date22";
$tdataemptime [".allSearchFields"] [] = "Date23";
$tdataemptime [".allSearchFields"] [] = "Date24";
$tdataemptime [".allSearchFields"] [] = "Date25";
$tdataemptime [".allSearchFields"] [] = "Date26";
$tdataemptime [".allSearchFields"] [] = "Date27";
$tdataemptime [".allSearchFields"] [] = "Date28";
$tdataemptime [".allSearchFields"] [] = "Date29";
$tdataemptime [".allSearchFields"] [] = "Date30";
$tdataemptime [".allSearchFields"] [] = "Date31";
$tdataemptime [".allSearchFields"] [] = "Date32";
$tdataemptime [".allSearchFields"] [] = "Date33";
$tdataemptime [".allSearchFields"] [] = "Date34";
$tdataemptime [".allSearchFields"] [] = "Date35";
$tdataemptime [".allSearchFields"] [] = "Date36";
$tdataemptime [".allSearchFields"] [] = "Date37";
$tdataemptime [".allSearchFields"] [] = "Date38";
$tdataemptime [".allSearchFields"] [] = "Date39";
$tdataemptime [".allSearchFields"] [] = "Date40";
$tdataemptime [".allSearchFields"] [] = "Date41";
$tdataemptime [".allSearchFields"] [] = "Date42";
$tdataemptime [".allSearchFields"] [] = "Date43";
$tdataemptime [".allSearchFields"] [] = "Date44";
$tdataemptime [".allSearchFields"] [] = "Date45";
$tdataemptime [".allSearchFields"] [] = "Date46";
$tdataemptime [".allSearchFields"] [] = "Date47";
$tdataemptime [".allSearchFields"] [] = "Date48";
$tdataemptime [".allSearchFields"] [] = "Date49";
$tdataemptime [".allSearchFields"] [] = "Date50";
$tdataemptime [".allSearchFields"] [] = "Date51";
$tdataemptime [".allSearchFields"] [] = "Date52";
$tdataemptime [".allSearchFields"] [] = "Date53";

$tdataemptime [".googleLikeFields"] = array ();
$tdataemptime [".googleLikeFields"] [] = "FirstName";
$tdataemptime [".googleLikeFields"] [] = "LastName";
$tdataemptime [".googleLikeFields"] [] = "SupervisorName";
$tdataemptime [".googleLikeFields"] [] = "EmployeeStatus";
$tdataemptime [".googleLikeFields"] [] = "AUTimeid";
$tdataemptime [".googleLikeFields"] [] = "EmployeeID";
$tdataemptime [".googleLikeFields"] [] = "Date1";
$tdataemptime [".googleLikeFields"] [] = "Date2";
$tdataemptime [".googleLikeFields"] [] = "Date3";
$tdataemptime [".googleLikeFields"] [] = "Date4";
$tdataemptime [".googleLikeFields"] [] = "Date5";
$tdataemptime [".googleLikeFields"] [] = "Date6";
$tdataemptime [".googleLikeFields"] [] = "Date7";
$tdataemptime [".googleLikeFields"] [] = "Date8";
$tdataemptime [".googleLikeFields"] [] = "Date9";
$tdataemptime [".googleLikeFields"] [] = "Date10";
$tdataemptime [".googleLikeFields"] [] = "Date11";
$tdataemptime [".googleLikeFields"] [] = "Date12";
$tdataemptime [".googleLikeFields"] [] = "Date13";
$tdataemptime [".googleLikeFields"] [] = "Date14";
$tdataemptime [".googleLikeFields"] [] = "Date15";
$tdataemptime [".googleLikeFields"] [] = "Date16";
$tdataemptime [".googleLikeFields"] [] = "Date17";
$tdataemptime [".googleLikeFields"] [] = "Date18";
$tdataemptime [".googleLikeFields"] [] = "Date19";
$tdataemptime [".googleLikeFields"] [] = "Date20";
$tdataemptime [".googleLikeFields"] [] = "Date21";
$tdataemptime [".googleLikeFields"] [] = "Date22";
$tdataemptime [".googleLikeFields"] [] = "Date23";
$tdataemptime [".googleLikeFields"] [] = "Date24";
$tdataemptime [".googleLikeFields"] [] = "Date25";
$tdataemptime [".googleLikeFields"] [] = "Date26";
$tdataemptime [".googleLikeFields"] [] = "Date27";
$tdataemptime [".googleLikeFields"] [] = "Date28";
$tdataemptime [".googleLikeFields"] [] = "Date29";
$tdataemptime [".googleLikeFields"] [] = "Date30";
$tdataemptime [".googleLikeFields"] [] = "Date31";
$tdataemptime [".googleLikeFields"] [] = "Date32";
$tdataemptime [".googleLikeFields"] [] = "Date33";
$tdataemptime [".googleLikeFields"] [] = "Date34";
$tdataemptime [".googleLikeFields"] [] = "Date35";
$tdataemptime [".googleLikeFields"] [] = "Date36";
$tdataemptime [".googleLikeFields"] [] = "Date37";
$tdataemptime [".googleLikeFields"] [] = "Date38";
$tdataemptime [".googleLikeFields"] [] = "Date39";
$tdataemptime [".googleLikeFields"] [] = "Date40";
$tdataemptime [".googleLikeFields"] [] = "Date41";
$tdataemptime [".googleLikeFields"] [] = "Date42";
$tdataemptime [".googleLikeFields"] [] = "Date43";
$tdataemptime [".googleLikeFields"] [] = "Date44";
$tdataemptime [".googleLikeFields"] [] = "Date45";
$tdataemptime [".googleLikeFields"] [] = "Date46";
$tdataemptime [".googleLikeFields"] [] = "Date47";
$tdataemptime [".googleLikeFields"] [] = "Date48";
$tdataemptime [".googleLikeFields"] [] = "Date49";
$tdataemptime [".googleLikeFields"] [] = "Date50";
$tdataemptime [".googleLikeFields"] [] = "Date51";
$tdataemptime [".googleLikeFields"] [] = "Date52";
$tdataemptime [".googleLikeFields"] [] = "Date53";

$tdataemptime [".advSearchFields"] = array ();
$tdataemptime [".advSearchFields"] [] = "FirstName";
$tdataemptime [".advSearchFields"] [] = "LastName";
$tdataemptime [".advSearchFields"] [] = "SupervisorName";
$tdataemptime [".advSearchFields"] [] = "EmployeeStatus";
$tdataemptime [".advSearchFields"] [] = "Date1";
$tdataemptime [".advSearchFields"] [] = "Date2";
$tdataemptime [".advSearchFields"] [] = "Date3";
$tdataemptime [".advSearchFields"] [] = "Date4";
$tdataemptime [".advSearchFields"] [] = "Date5";
$tdataemptime [".advSearchFields"] [] = "Date6";
$tdataemptime [".advSearchFields"] [] = "Date7";
$tdataemptime [".advSearchFields"] [] = "Date8";
$tdataemptime [".advSearchFields"] [] = "Date9";
$tdataemptime [".advSearchFields"] [] = "Date10";
$tdataemptime [".advSearchFields"] [] = "Date11";
$tdataemptime [".advSearchFields"] [] = "Date12";
$tdataemptime [".advSearchFields"] [] = "Date13";
$tdataemptime [".advSearchFields"] [] = "Date14";
$tdataemptime [".advSearchFields"] [] = "Date15";
$tdataemptime [".advSearchFields"] [] = "Date16";
$tdataemptime [".advSearchFields"] [] = "Date17";
$tdataemptime [".advSearchFields"] [] = "Date18";
$tdataemptime [".advSearchFields"] [] = "Date19";
$tdataemptime [".advSearchFields"] [] = "Date20";
$tdataemptime [".advSearchFields"] [] = "Date21";
$tdataemptime [".advSearchFields"] [] = "Date22";
$tdataemptime [".advSearchFields"] [] = "Date23";
$tdataemptime [".advSearchFields"] [] = "Date24";
$tdataemptime [".advSearchFields"] [] = "Date25";
$tdataemptime [".advSearchFields"] [] = "Date26";
$tdataemptime [".advSearchFields"] [] = "Date27";
$tdataemptime [".advSearchFields"] [] = "Date28";
$tdataemptime [".advSearchFields"] [] = "Date29";
$tdataemptime [".advSearchFields"] [] = "Date30";
$tdataemptime [".advSearchFields"] [] = "Date31";
$tdataemptime [".advSearchFields"] [] = "Date32";
$tdataemptime [".advSearchFields"] [] = "Date33";
$tdataemptime [".advSearchFields"] [] = "Date34";
$tdataemptime [".advSearchFields"] [] = "Date35";
$tdataemptime [".advSearchFields"] [] = "Date36";
$tdataemptime [".advSearchFields"] [] = "Date37";
$tdataemptime [".advSearchFields"] [] = "Date38";
$tdataemptime [".advSearchFields"] [] = "Date39";
$tdataemptime [".advSearchFields"] [] = "Date40";
$tdataemptime [".advSearchFields"] [] = "Date41";
$tdataemptime [".advSearchFields"] [] = "Date42";
$tdataemptime [".advSearchFields"] [] = "Date43";
$tdataemptime [".advSearchFields"] [] = "Date44";
$tdataemptime [".advSearchFields"] [] = "Date45";
$tdataemptime [".advSearchFields"] [] = "Date46";
$tdataemptime [".advSearchFields"] [] = "Date47";
$tdataemptime [".advSearchFields"] [] = "Date48";
$tdataemptime [".advSearchFields"] [] = "Date49";
$tdataemptime [".advSearchFields"] [] = "Date50";
$tdataemptime [".advSearchFields"] [] = "Date51";
$tdataemptime [".advSearchFields"] [] = "Date52";
$tdataemptime [".advSearchFields"] [] = "Date53";

$tdataemptime [".tableType"] = "list";

$tdataemptime [".printerPageOrientation"] = 0;
$tdataemptime [".nPrinterPageScale"] = 100;

$tdataemptime [".nPrinterSplitRecords"] = 40;

$tdataemptime [".nPrinterPDFSplitRecords"] = 40;

$tdataemptime [".geocodingEnabled"] = false;

// view page pdf

// print page pdf

$tdataemptime [".pageSize"] = 10;

$tdataemptime [".warnLeavingPages"] = true;

$tstrOrderBy = "ORDER BY emptime.`12/11/2016 WK-50` DESC, employee_header.FirstName";
if (strlen ( $tstrOrderBy ) && strtolower ( substr ( $tstrOrderBy, 0, 8 ) ) != "order by")
	$tstrOrderBy = "order by " . $tstrOrderBy;
$tdataemptime [".strOrderBy"] = $tstrOrderBy;

$tdataemptime [".orderindexes"] = array ();
$tdataemptime [".orderindexes"] [] = array (
		56,
		(0 ? "ASC" : "DESC"),
		"emptime.`12/11/2016 WK-50`" 
);
$tdataemptime [".orderindexes"] [] = array (
		1,
		(1 ? "ASC" : "DESC"),
		"employee_header.FirstName" 
);

$tdataemptime [".sqlHead"] = "SELECT employee_header.FirstName,  employee_header.LastName,  employee_header.SupervisorName,  employee_header.EmployeeStatus,  emptime.AUTimeid,  emptime.EmployeeID,  emptime.`1/3/2016 WK-1` AS Date1,  emptime.`1/10/2016 WK-2` AS Date2,  emptime.`1/17/2016 WK-3` AS Date3,  emptime.`1/24/2016 WK-4` AS Date4,  emptime.`1/31/2016 WK-5` AS Date5,  emptime.`2/07/2016 WK-6` AS Date6,  emptime.`2/14/2016 WK-7` AS Date7,  emptime.`2/21/2016 WK-8` AS Date8,  emptime.`2/28/2016 WK-9` AS Date9,  emptime.`3/6/2016 WK-10` AS Date10,  emptime.`3/13/2016 WK-11` AS Date11,  emptime.`3/20/2016 WK-12` AS Date12,  emptime.`3/27/2016 WK-13` AS Date13,  emptime.`4/3/2016 WK-14` AS Date14,  emptime.`4/10/2016 WK-15` AS Date15,  emptime.`4/17/2016 WK-16` AS Date16,  emptime.`4/24/2016 WK-17` AS Date17,  emptime.`5/1/2016 WK-18` AS Date18,  emptime.`5/8/2016 WK-19` AS Date19,  emptime.`5/15/2016 WK-20` AS Date20,  emptime.`5/22/2016 WK-21` AS Date21,  emptime.`5/29/2016 WK-22` AS Date22,  emptime.`6/5/2016 WK-23` AS Date23,  emptime.`6/12/2016 WK-24` AS Date24,  emptime.`6/19/2016 WK-25` AS Date25,  emptime.`6/26/2016 WK-26` AS Date26,  emptime.`7/3/2016 WK-27` AS Date27,  emptime.`7/10/2016 WK-28` AS Date28,  emptime.`7/17/2016 WK-29` AS Date29,  emptime.`7/24/2016 WK-30` AS Date30,  emptime.`7/31/2016 WK-31` AS Date31,  emptime.`8/7/2016 WK-32` AS Date32,  emptime.`8/14/2016 WK-33` AS Date33,  emptime.`8/21/2016 WK-34` AS Date34,  emptime.`8/28/2016 WK-35` AS Date35,  emptime.`9/4/2016 WK-36` AS Date36,  emptime.`9/11/2016 WK-37` AS Date37,  emptime.`9/18/2016 WK-38` AS Date38,  emptime.`9/25/2016 WK-39` AS Date39,  emptime.`10/2/2016 WK-40` AS Date40,  emptime.`10/9/2016 WK-41` AS Date41,  emptime.`10/16/2016 WK-42` AS Date42,  emptime.`10/23/2016 WK-43` AS Date43,  emptime.`10/30/2016 WK-44` AS Date44,  emptime.`11/6/2016 WK-45` AS Date45,  emptime.`11/13/2016 WK-46` AS Date46,  emptime.`11/20/2016 WK-47` AS Date47,  emptime.`11/27/2016 WK-48` AS Date48,  emptime.`12/4/2016 WK-49` AS Date49,  emptime.`12/11/2016 WK-50` AS Date50,  emptime.`12/18/2016 WK-51` AS Date51,  emptime.`12/25/2016 WK-52` AS Date52,  emptime.`1/1/2017 WK-53` AS Date53";
$tdataemptime [".sqlFrom"] = "FROM emptime  INNER JOIN employee_header ON emptime.EmployeeID = employee_header.EmployeeID";
if( !IsAdmin() ) {
	$tdataemptime [".sqlWhereExpr"] = "concat(employee_header.`FirstName`, ' ', employee_header.`LastName`) = '". $_SESSION['UserName'] ."'";
} else {
	$tdataemptime [".sqlWhereExpr"] = "";
}

$tdataemptime [".sqlTail"] = "";

// fill array of records per page for list and report without group fields
$arrRPP = array ();
$arrRPP [] = 10;
$arrRPP [] = 20;
$arrRPP [] = 30;
$arrRPP [] = 50;
$arrRPP [] = 100;
$arrRPP [] = 500;
$arrRPP [] = - 1;
$tdataemptime [".arrRecsPerPage"] = $arrRPP;

// fill array of groups per page for report with group fields
$arrGPP = array ();
$arrGPP [] = 1;
$arrGPP [] = 3;
$arrGPP [] = 5;
$arrGPP [] = 10;
$arrGPP [] = 50;
$arrGPP [] = 100;
$arrGPP [] = - 1;
$tdataemptime [".arrGroupsPerPage"] = $arrGPP;

$tableKeysemptime = array ();
$tableKeysemptime [] = "AUTimeid";
$tdataemptime [".Keys"] = $tableKeysemptime;

$tdataemptime [".listFields"] = array ();
$tdataemptime [".listFields"] [] = "FirstName";
$tdataemptime [".listFields"] [] = "LastName";
$tdataemptime [".listFields"] [] = "SupervisorName";
$tdataemptime [".listFields"] [] = "EmployeeStatus";
$tdataemptime [".listFields"] [] = "Date1";
$tdataemptime [".listFields"] [] = "Date2";
$tdataemptime [".listFields"] [] = "Date3";
$tdataemptime [".listFields"] [] = "Date4";
$tdataemptime [".listFields"] [] = "Date5";
$tdataemptime [".listFields"] [] = "Date6";
$tdataemptime [".listFields"] [] = "Date7";
$tdataemptime [".listFields"] [] = "Date8";
$tdataemptime [".listFields"] [] = "Date9";
$tdataemptime [".listFields"] [] = "Date10";
$tdataemptime [".listFields"] [] = "Date11";
$tdataemptime [".listFields"] [] = "Date12";
$tdataemptime [".listFields"] [] = "Date13";
$tdataemptime [".listFields"] [] = "Date14";
$tdataemptime [".listFields"] [] = "Date15";
$tdataemptime [".listFields"] [] = "Date16";
$tdataemptime [".listFields"] [] = "Date17";
$tdataemptime [".listFields"] [] = "Date18";
$tdataemptime [".listFields"] [] = "Date19";
$tdataemptime [".listFields"] [] = "Date20";
$tdataemptime [".listFields"] [] = "Date21";
$tdataemptime [".listFields"] [] = "Date22";
$tdataemptime [".listFields"] [] = "Date23";
$tdataemptime [".listFields"] [] = "Date24";
$tdataemptime [".listFields"] [] = "Date25";
$tdataemptime [".listFields"] [] = "Date26";
$tdataemptime [".listFields"] [] = "Date27";
$tdataemptime [".listFields"] [] = "Date28";
$tdataemptime [".listFields"] [] = "Date29";
$tdataemptime [".listFields"] [] = "Date30";
$tdataemptime [".listFields"] [] = "Date31";
$tdataemptime [".listFields"] [] = "Date32";
$tdataemptime [".listFields"] [] = "Date33";
$tdataemptime [".listFields"] [] = "Date34";
$tdataemptime [".listFields"] [] = "Date35";
$tdataemptime [".listFields"] [] = "Date36";
$tdataemptime [".listFields"] [] = "Date37";
$tdataemptime [".listFields"] [] = "Date38";
$tdataemptime [".listFields"] [] = "Date39";
$tdataemptime [".listFields"] [] = "Date40";
$tdataemptime [".listFields"] [] = "Date41";
$tdataemptime [".listFields"] [] = "Date42";
$tdataemptime [".listFields"] [] = "Date43";
$tdataemptime [".listFields"] [] = "Date44";
$tdataemptime [".listFields"] [] = "Date45";
$tdataemptime [".listFields"] [] = "Date46";
$tdataemptime [".listFields"] [] = "Date47";
$tdataemptime [".listFields"] [] = "Date48";
$tdataemptime [".listFields"] [] = "Date49";
$tdataemptime [".listFields"] [] = "Date50";
$tdataemptime [".listFields"] [] = "Date51";
$tdataemptime [".listFields"] [] = "Date52";
$tdataemptime [".listFields"] [] = "Date53";

$tdataemptime [".hideMobileList"] = array ();

$tdataemptime [".viewFields"] = array ();

$tdataemptime [".addFields"] = array ();
$tdataemptime [".addFields"] [] = "FirstName";
$tdataemptime [".addFields"] [] = "LastName";
$tdataemptime [".addFields"] [] = "SupervisorName";
$tdataemptime [".addFields"] [] = "EmployeeStatus";
$tdataemptime [".addFields"] [] = "Date1";
$tdataemptime [".addFields"] [] = "Date2";
$tdataemptime [".addFields"] [] = "Date3";
$tdataemptime [".addFields"] [] = "Date4";
$tdataemptime [".addFields"] [] = "Date5";
$tdataemptime [".addFields"] [] = "Date6";
$tdataemptime [".addFields"] [] = "Date7";
$tdataemptime [".addFields"] [] = "Date8";
$tdataemptime [".addFields"] [] = "Date9";
$tdataemptime [".addFields"] [] = "Date10";
$tdataemptime [".addFields"] [] = "Date11";
$tdataemptime [".addFields"] [] = "Date12";
$tdataemptime [".addFields"] [] = "Date13";
$tdataemptime [".addFields"] [] = "Date14";
$tdataemptime [".addFields"] [] = "Date15";
$tdataemptime [".addFields"] [] = "Date16";
$tdataemptime [".addFields"] [] = "Date17";
$tdataemptime [".addFields"] [] = "Date18";
$tdataemptime [".addFields"] [] = "Date19";
$tdataemptime [".addFields"] [] = "Date20";
$tdataemptime [".addFields"] [] = "Date21";
$tdataemptime [".addFields"] [] = "Date22";
$tdataemptime [".addFields"] [] = "Date23";
$tdataemptime [".addFields"] [] = "Date24";
$tdataemptime [".addFields"] [] = "Date25";
$tdataemptime [".addFields"] [] = "Date26";
$tdataemptime [".addFields"] [] = "Date27";
$tdataemptime [".addFields"] [] = "Date28";
$tdataemptime [".addFields"] [] = "Date29";
$tdataemptime [".addFields"] [] = "Date30";
$tdataemptime [".addFields"] [] = "Date31";
$tdataemptime [".addFields"] [] = "Date32";
$tdataemptime [".addFields"] [] = "Date33";
$tdataemptime [".addFields"] [] = "Date34";
$tdataemptime [".addFields"] [] = "Date35";
$tdataemptime [".addFields"] [] = "Date36";
$tdataemptime [".addFields"] [] = "Date37";
$tdataemptime [".addFields"] [] = "Date38";
$tdataemptime [".addFields"] [] = "Date39";
$tdataemptime [".addFields"] [] = "Date40";
$tdataemptime [".addFields"] [] = "Date41";
$tdataemptime [".addFields"] [] = "Date42";
$tdataemptime [".addFields"] [] = "Date43";
$tdataemptime [".addFields"] [] = "Date44";
$tdataemptime [".addFields"] [] = "Date45";
$tdataemptime [".addFields"] [] = "Date46";
$tdataemptime [".addFields"] [] = "Date47";
$tdataemptime [".addFields"] [] = "Date48";
$tdataemptime [".addFields"] [] = "Date49";
$tdataemptime [".addFields"] [] = "Date50";
$tdataemptime [".addFields"] [] = "Date51";
$tdataemptime [".addFields"] [] = "Date52";
$tdataemptime [".addFields"] [] = "Date53";

$tdataemptime [".masterListFields"] = array ();
$tdataemptime [".masterListFields"] [] = "FirstName";
$tdataemptime [".masterListFields"] [] = "LastName";
$tdataemptime [".masterListFields"] [] = "SupervisorName";
$tdataemptime [".masterListFields"] [] = "EmployeeStatus";
$tdataemptime [".masterListFields"] [] = "Date1";
$tdataemptime [".masterListFields"] [] = "AUTimeid";
$tdataemptime [".masterListFields"] [] = "EmployeeID";
$tdataemptime [".masterListFields"] [] = "Date2";
$tdataemptime [".masterListFields"] [] = "Date3";
$tdataemptime [".masterListFields"] [] = "Date4";
$tdataemptime [".masterListFields"] [] = "Date5";
$tdataemptime [".masterListFields"] [] = "Date6";
$tdataemptime [".masterListFields"] [] = "Date7";
$tdataemptime [".masterListFields"] [] = "Date8";
$tdataemptime [".masterListFields"] [] = "Date9";
$tdataemptime [".masterListFields"] [] = "Date10";
$tdataemptime [".masterListFields"] [] = "Date11";
$tdataemptime [".masterListFields"] [] = "Date12";
$tdataemptime [".masterListFields"] [] = "Date13";
$tdataemptime [".masterListFields"] [] = "Date14";
$tdataemptime [".masterListFields"] [] = "Date15";
$tdataemptime [".masterListFields"] [] = "Date16";
$tdataemptime [".masterListFields"] [] = "Date17";
$tdataemptime [".masterListFields"] [] = "Date18";
$tdataemptime [".masterListFields"] [] = "Date19";
$tdataemptime [".masterListFields"] [] = "Date20";
$tdataemptime [".masterListFields"] [] = "Date21";
$tdataemptime [".masterListFields"] [] = "Date22";
$tdataemptime [".masterListFields"] [] = "Date23";
$tdataemptime [".masterListFields"] [] = "Date24";
$tdataemptime [".masterListFields"] [] = "Date25";
$tdataemptime [".masterListFields"] [] = "Date26";
$tdataemptime [".masterListFields"] [] = "Date27";
$tdataemptime [".masterListFields"] [] = "Date28";
$tdataemptime [".masterListFields"] [] = "Date29";
$tdataemptime [".masterListFields"] [] = "Date30";
$tdataemptime [".masterListFields"] [] = "Date31";
$tdataemptime [".masterListFields"] [] = "Date32";
$tdataemptime [".masterListFields"] [] = "Date33";
$tdataemptime [".masterListFields"] [] = "Date34";
$tdataemptime [".masterListFields"] [] = "Date35";
$tdataemptime [".masterListFields"] [] = "Date36";
$tdataemptime [".masterListFields"] [] = "Date37";
$tdataemptime [".masterListFields"] [] = "Date38";
$tdataemptime [".masterListFields"] [] = "Date39";
$tdataemptime [".masterListFields"] [] = "Date40";
$tdataemptime [".masterListFields"] [] = "Date41";
$tdataemptime [".masterListFields"] [] = "Date42";
$tdataemptime [".masterListFields"] [] = "Date43";
$tdataemptime [".masterListFields"] [] = "Date44";
$tdataemptime [".masterListFields"] [] = "Date45";
$tdataemptime [".masterListFields"] [] = "Date46";
$tdataemptime [".masterListFields"] [] = "Date47";
$tdataemptime [".masterListFields"] [] = "Date48";
$tdataemptime [".masterListFields"] [] = "Date49";
$tdataemptime [".masterListFields"] [] = "Date50";
$tdataemptime [".masterListFields"] [] = "Date51";
$tdataemptime [".masterListFields"] [] = "Date52";
$tdataemptime [".masterListFields"] [] = "Date53";

$tdataemptime [".inlineAddFields"] = array ();

$tdataemptime [".editFields"] = array ();
$tdataemptime [".editFields"] [] = "FirstName";
$tdataemptime [".editFields"] [] = "LastName";
$tdataemptime [".editFields"] [] = "SupervisorName";
$tdataemptime [".editFields"] [] = "EmployeeStatus";
$tdataemptime [".editFields"] [] = "Date1";
$tdataemptime [".editFields"] [] = "Date2";
$tdataemptime [".editFields"] [] = "Date3";
$tdataemptime [".editFields"] [] = "Date4";
$tdataemptime [".editFields"] [] = "Date5";
$tdataemptime [".editFields"] [] = "Date6";
$tdataemptime [".editFields"] [] = "Date7";
$tdataemptime [".editFields"] [] = "Date8";
$tdataemptime [".editFields"] [] = "Date9";
$tdataemptime [".editFields"] [] = "Date10";
$tdataemptime [".editFields"] [] = "Date11";
$tdataemptime [".editFields"] [] = "Date12";
$tdataemptime [".editFields"] [] = "Date13";
$tdataemptime [".editFields"] [] = "Date14";
$tdataemptime [".editFields"] [] = "Date15";
$tdataemptime [".editFields"] [] = "Date16";
$tdataemptime [".editFields"] [] = "Date17";
$tdataemptime [".editFields"] [] = "Date18";
$tdataemptime [".editFields"] [] = "Date19";
$tdataemptime [".editFields"] [] = "Date20";
$tdataemptime [".editFields"] [] = "Date21";
$tdataemptime [".editFields"] [] = "Date22";
$tdataemptime [".editFields"] [] = "Date23";
$tdataemptime [".editFields"] [] = "Date24";
$tdataemptime [".editFields"] [] = "Date25";
$tdataemptime [".editFields"] [] = "Date26";
$tdataemptime [".editFields"] [] = "Date27";
$tdataemptime [".editFields"] [] = "Date28";
$tdataemptime [".editFields"] [] = "Date29";
$tdataemptime [".editFields"] [] = "Date30";
$tdataemptime [".editFields"] [] = "Date31";
$tdataemptime [".editFields"] [] = "Date32";
$tdataemptime [".editFields"] [] = "Date33";
$tdataemptime [".editFields"] [] = "Date34";
$tdataemptime [".editFields"] [] = "Date35";
$tdataemptime [".editFields"] [] = "Date36";
$tdataemptime [".editFields"] [] = "Date37";
$tdataemptime [".editFields"] [] = "Date38";
$tdataemptime [".editFields"] [] = "Date39";
$tdataemptime [".editFields"] [] = "Date40";
$tdataemptime [".editFields"] [] = "Date41";
$tdataemptime [".editFields"] [] = "Date42";
$tdataemptime [".editFields"] [] = "Date43";
$tdataemptime [".editFields"] [] = "Date44";
$tdataemptime [".editFields"] [] = "Date45";
$tdataemptime [".editFields"] [] = "Date46";
$tdataemptime [".editFields"] [] = "Date47";
$tdataemptime [".editFields"] [] = "Date48";
$tdataemptime [".editFields"] [] = "Date49";
$tdataemptime [".editFields"] [] = "Date50";
$tdataemptime [".editFields"] [] = "Date51";
$tdataemptime [".editFields"] [] = "Date52";
$tdataemptime [".editFields"] [] = "Date53";

$tdataemptime [".inlineEditFields"] = array ();
$tdataemptime [".inlineEditFields"] [] = "FirstName";
$tdataemptime [".inlineEditFields"] [] = "LastName";
$tdataemptime [".inlineEditFields"] [] = "SupervisorName";
$tdataemptime [".inlineEditFields"] [] = "EmployeeStatus";
$tdataemptime [".inlineEditFields"] [] = "Date1";
$tdataemptime [".inlineEditFields"] [] = "Date2";
$tdataemptime [".inlineEditFields"] [] = "Date3";
$tdataemptime [".inlineEditFields"] [] = "Date4";
$tdataemptime [".inlineEditFields"] [] = "Date5";
$tdataemptime [".inlineEditFields"] [] = "Date6";
$tdataemptime [".inlineEditFields"] [] = "Date7";
$tdataemptime [".inlineEditFields"] [] = "Date8";
$tdataemptime [".inlineEditFields"] [] = "Date9";
$tdataemptime [".inlineEditFields"] [] = "Date10";
$tdataemptime [".inlineEditFields"] [] = "Date11";
$tdataemptime [".inlineEditFields"] [] = "Date12";
$tdataemptime [".inlineEditFields"] [] = "Date13";
$tdataemptime [".inlineEditFields"] [] = "Date14";
$tdataemptime [".inlineEditFields"] [] = "Date15";
$tdataemptime [".inlineEditFields"] [] = "Date16";
$tdataemptime [".inlineEditFields"] [] = "Date17";
$tdataemptime [".inlineEditFields"] [] = "Date18";
$tdataemptime [".inlineEditFields"] [] = "Date19";
$tdataemptime [".inlineEditFields"] [] = "Date20";
$tdataemptime [".inlineEditFields"] [] = "Date21";
$tdataemptime [".inlineEditFields"] [] = "Date22";
$tdataemptime [".inlineEditFields"] [] = "Date23";
$tdataemptime [".inlineEditFields"] [] = "Date24";
$tdataemptime [".inlineEditFields"] [] = "Date25";
$tdataemptime [".inlineEditFields"] [] = "Date26";
$tdataemptime [".inlineEditFields"] [] = "Date27";
$tdataemptime [".inlineEditFields"] [] = "Date28";
$tdataemptime [".inlineEditFields"] [] = "Date29";
$tdataemptime [".inlineEditFields"] [] = "Date30";
$tdataemptime [".inlineEditFields"] [] = "Date31";
$tdataemptime [".inlineEditFields"] [] = "Date32";
$tdataemptime [".inlineEditFields"] [] = "Date33";
$tdataemptime [".inlineEditFields"] [] = "Date34";
$tdataemptime [".inlineEditFields"] [] = "Date35";
$tdataemptime [".inlineEditFields"] [] = "Date36";
$tdataemptime [".inlineEditFields"] [] = "Date37";
$tdataemptime [".inlineEditFields"] [] = "Date38";
$tdataemptime [".inlineEditFields"] [] = "Date39";
$tdataemptime [".inlineEditFields"] [] = "Date40";
$tdataemptime [".inlineEditFields"] [] = "Date41";
$tdataemptime [".inlineEditFields"] [] = "Date42";
$tdataemptime [".inlineEditFields"] [] = "Date43";
$tdataemptime [".inlineEditFields"] [] = "Date44";
$tdataemptime [".inlineEditFields"] [] = "Date45";
$tdataemptime [".inlineEditFields"] [] = "Date46";
$tdataemptime [".inlineEditFields"] [] = "Date47";
$tdataemptime [".inlineEditFields"] [] = "Date48";
$tdataemptime [".inlineEditFields"] [] = "Date49";
$tdataemptime [".inlineEditFields"] [] = "Date50";
$tdataemptime [".inlineEditFields"] [] = "Date51";
$tdataemptime [".inlineEditFields"] [] = "Date52";
$tdataemptime [".inlineEditFields"] [] = "Date53";

$tdataemptime [".exportFields"] = array ();
$tdataemptime [".exportFields"] [] = "FirstName";
$tdataemptime [".exportFields"] [] = "LastName";
$tdataemptime [".exportFields"] [] = "SupervisorName";
$tdataemptime [".exportFields"] [] = "EmployeeStatus";
$tdataemptime [".exportFields"] [] = "Date1";
$tdataemptime [".exportFields"] [] = "Date2";
$tdataemptime [".exportFields"] [] = "Date3";
$tdataemptime [".exportFields"] [] = "Date4";
$tdataemptime [".exportFields"] [] = "Date5";
$tdataemptime [".exportFields"] [] = "Date6";
$tdataemptime [".exportFields"] [] = "Date7";
$tdataemptime [".exportFields"] [] = "Date8";
$tdataemptime [".exportFields"] [] = "Date9";
$tdataemptime [".exportFields"] [] = "Date10";
$tdataemptime [".exportFields"] [] = "Date11";
$tdataemptime [".exportFields"] [] = "Date12";
$tdataemptime [".exportFields"] [] = "Date13";
$tdataemptime [".exportFields"] [] = "Date14";
$tdataemptime [".exportFields"] [] = "Date15";
$tdataemptime [".exportFields"] [] = "Date16";
$tdataemptime [".exportFields"] [] = "Date17";
$tdataemptime [".exportFields"] [] = "Date18";
$tdataemptime [".exportFields"] [] = "Date19";
$tdataemptime [".exportFields"] [] = "Date20";
$tdataemptime [".exportFields"] [] = "Date21";
$tdataemptime [".exportFields"] [] = "Date22";
$tdataemptime [".exportFields"] [] = "Date23";
$tdataemptime [".exportFields"] [] = "Date24";
$tdataemptime [".exportFields"] [] = "Date25";
$tdataemptime [".exportFields"] [] = "Date26";
$tdataemptime [".exportFields"] [] = "Date27";
$tdataemptime [".exportFields"] [] = "Date28";
$tdataemptime [".exportFields"] [] = "Date29";
$tdataemptime [".exportFields"] [] = "Date30";
$tdataemptime [".exportFields"] [] = "Date31";
$tdataemptime [".exportFields"] [] = "Date32";
$tdataemptime [".exportFields"] [] = "Date33";
$tdataemptime [".exportFields"] [] = "Date34";
$tdataemptime [".exportFields"] [] = "Date35";
$tdataemptime [".exportFields"] [] = "Date36";
$tdataemptime [".exportFields"] [] = "Date37";
$tdataemptime [".exportFields"] [] = "Date38";
$tdataemptime [".exportFields"] [] = "Date39";
$tdataemptime [".exportFields"] [] = "Date40";
$tdataemptime [".exportFields"] [] = "Date41";
$tdataemptime [".exportFields"] [] = "Date42";
$tdataemptime [".exportFields"] [] = "Date43";
$tdataemptime [".exportFields"] [] = "Date44";
$tdataemptime [".exportFields"] [] = "Date45";
$tdataemptime [".exportFields"] [] = "Date46";
$tdataemptime [".exportFields"] [] = "Date47";
$tdataemptime [".exportFields"] [] = "Date48";
$tdataemptime [".exportFields"] [] = "Date49";
$tdataemptime [".exportFields"] [] = "Date50";
$tdataemptime [".exportFields"] [] = "Date51";
$tdataemptime [".exportFields"] [] = "Date52";
$tdataemptime [".exportFields"] [] = "Date53";

$tdataemptime [".importFields"] = array ();
$tdataemptime [".importFields"] [] = "FirstName";
$tdataemptime [".importFields"] [] = "LastName";
$tdataemptime [".importFields"] [] = "SupervisorName";
$tdataemptime [".importFields"] [] = "EmployeeStatus";
$tdataemptime [".importFields"] [] = "Date1";
$tdataemptime [".importFields"] [] = "Date2";
$tdataemptime [".importFields"] [] = "Date3";
$tdataemptime [".importFields"] [] = "Date4";
$tdataemptime [".importFields"] [] = "Date5";
$tdataemptime [".importFields"] [] = "Date6";
$tdataemptime [".importFields"] [] = "Date7";
$tdataemptime [".importFields"] [] = "Date8";
$tdataemptime [".importFields"] [] = "Date9";
$tdataemptime [".importFields"] [] = "Date10";
$tdataemptime [".importFields"] [] = "Date11";
$tdataemptime [".importFields"] [] = "Date12";
$tdataemptime [".importFields"] [] = "Date13";
$tdataemptime [".importFields"] [] = "Date14";
$tdataemptime [".importFields"] [] = "Date15";
$tdataemptime [".importFields"] [] = "Date16";
$tdataemptime [".importFields"] [] = "Date17";
$tdataemptime [".importFields"] [] = "Date18";
$tdataemptime [".importFields"] [] = "Date19";
$tdataemptime [".importFields"] [] = "Date20";
$tdataemptime [".importFields"] [] = "Date21";
$tdataemptime [".importFields"] [] = "Date22";
$tdataemptime [".importFields"] [] = "Date23";
$tdataemptime [".importFields"] [] = "Date24";
$tdataemptime [".importFields"] [] = "Date25";
$tdataemptime [".importFields"] [] = "Date26";
$tdataemptime [".importFields"] [] = "Date27";
$tdataemptime [".importFields"] [] = "Date28";
$tdataemptime [".importFields"] [] = "Date29";
$tdataemptime [".importFields"] [] = "Date30";
$tdataemptime [".importFields"] [] = "Date31";
$tdataemptime [".importFields"] [] = "Date32";
$tdataemptime [".importFields"] [] = "Date33";
$tdataemptime [".importFields"] [] = "Date34";
$tdataemptime [".importFields"] [] = "Date35";
$tdataemptime [".importFields"] [] = "Date36";
$tdataemptime [".importFields"] [] = "Date37";
$tdataemptime [".importFields"] [] = "Date38";
$tdataemptime [".importFields"] [] = "Date39";
$tdataemptime [".importFields"] [] = "Date40";
$tdataemptime [".importFields"] [] = "Date41";
$tdataemptime [".importFields"] [] = "Date42";
$tdataemptime [".importFields"] [] = "Date43";
$tdataemptime [".importFields"] [] = "Date44";
$tdataemptime [".importFields"] [] = "Date45";
$tdataemptime [".importFields"] [] = "Date46";
$tdataemptime [".importFields"] [] = "Date47";
$tdataemptime [".importFields"] [] = "Date48";
$tdataemptime [".importFields"] [] = "Date49";
$tdataemptime [".importFields"] [] = "Date50";
$tdataemptime [".importFields"] [] = "Date51";
$tdataemptime [".importFields"] [] = "Date52";
$tdataemptime [".importFields"] [] = "Date53";

$tdataemptime [".printFields"] = array ();
$tdataemptime [".printFields"] [] = "FirstName";
$tdataemptime [".printFields"] [] = "LastName";
$tdataemptime [".printFields"] [] = "SupervisorName";
$tdataemptime [".printFields"] [] = "EmployeeStatus";
$tdataemptime [".printFields"] [] = "Date1";
$tdataemptime [".printFields"] [] = "Date2";
$tdataemptime [".printFields"] [] = "Date3";
$tdataemptime [".printFields"] [] = "Date4";
$tdataemptime [".printFields"] [] = "Date5";
$tdataemptime [".printFields"] [] = "Date6";
$tdataemptime [".printFields"] [] = "Date7";
$tdataemptime [".printFields"] [] = "Date8";
$tdataemptime [".printFields"] [] = "Date9";
$tdataemptime [".printFields"] [] = "Date10";
$tdataemptime [".printFields"] [] = "Date11";
$tdataemptime [".printFields"] [] = "Date12";
$tdataemptime [".printFields"] [] = "Date13";
$tdataemptime [".printFields"] [] = "Date14";
$tdataemptime [".printFields"] [] = "Date15";
$tdataemptime [".printFields"] [] = "Date16";
$tdataemptime [".printFields"] [] = "Date17";
$tdataemptime [".printFields"] [] = "Date18";
$tdataemptime [".printFields"] [] = "Date19";
$tdataemptime [".printFields"] [] = "Date20";
$tdataemptime [".printFields"] [] = "Date21";
$tdataemptime [".printFields"] [] = "Date22";
$tdataemptime [".printFields"] [] = "Date23";
$tdataemptime [".printFields"] [] = "Date24";
$tdataemptime [".printFields"] [] = "Date25";
$tdataemptime [".printFields"] [] = "Date26";
$tdataemptime [".printFields"] [] = "Date27";
$tdataemptime [".printFields"] [] = "Date28";
$tdataemptime [".printFields"] [] = "Date29";
$tdataemptime [".printFields"] [] = "Date30";
$tdataemptime [".printFields"] [] = "Date31";
$tdataemptime [".printFields"] [] = "Date32";
$tdataemptime [".printFields"] [] = "Date33";
$tdataemptime [".printFields"] [] = "Date34";
$tdataemptime [".printFields"] [] = "Date35";
$tdataemptime [".printFields"] [] = "Date36";
$tdataemptime [".printFields"] [] = "Date37";
$tdataemptime [".printFields"] [] = "Date38";
$tdataemptime [".printFields"] [] = "Date39";
$tdataemptime [".printFields"] [] = "Date40";
$tdataemptime [".printFields"] [] = "Date41";
$tdataemptime [".printFields"] [] = "Date42";
$tdataemptime [".printFields"] [] = "Date43";
$tdataemptime [".printFields"] [] = "Date44";
$tdataemptime [".printFields"] [] = "Date45";
$tdataemptime [".printFields"] [] = "Date46";
$tdataemptime [".printFields"] [] = "Date47";
$tdataemptime [".printFields"] [] = "Date48";
$tdataemptime [".printFields"] [] = "Date49";
$tdataemptime [".printFields"] [] = "Date50";
$tdataemptime [".printFields"] [] = "Date51";
$tdataemptime [".printFields"] [] = "Date52";
$tdataemptime [".printFields"] [] = "Date53";

// FirstName
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 1;
$fdata ["strName"] = "FirstName";
$fdata ["GoodName"] = "FirstName";
$fdata ["ownerTable"] = "employee_header";
$fdata ["Label"] = GetFieldLabel ( "emptime", "FirstName" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "FirstName";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "employee_header.FirstName";

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
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdataemptime ["FirstName"] = $fdata;
// LastName
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 2;
$fdata ["strName"] = "LastName";
$fdata ["GoodName"] = "LastName";
$fdata ["ownerTable"] = "employee_header";
$fdata ["Label"] = GetFieldLabel ( "emptime", "LastName" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "LastName";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "employee_header.LastName";

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
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdataemptime ["LastName"] = $fdata;
// SupervisorName
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 3;
$fdata ["strName"] = "SupervisorName";
$fdata ["GoodName"] = "SupervisorName";
$fdata ["ownerTable"] = "employee_header";
$fdata ["Label"] = GetFieldLabel ( "emptime", "SupervisorName" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "SupervisorName";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "employee_header.SupervisorName";

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
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdataemptime ["SupervisorName"] = $fdata;
// EmployeeStatus
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 4;
$fdata ["strName"] = "EmployeeStatus";
$fdata ["GoodName"] = "EmployeeStatus";
$fdata ["ownerTable"] = "employee_header";
$fdata ["Label"] = GetFieldLabel ( "emptime", "EmployeeStatus" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "EmployeeStatus";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "employee_header.EmployeeStatus";

$fdata ["FieldPermissions"] = true;

$fdata ["UploadFolder"] = "files";

// Begin View Formats
$fdata ["ViewFormats"] = array ();

$vdata = array (
		"ViewFormat" => "Custom" 
);

$fdata ["ViewFormats"] ["view"] = $vdata;
// End View Formats

// Begin Edit Formats
$fdata ["EditFormats"] = array ();

$edata = array (
		"EditFormat" => "Readonly" 
);

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
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdataemptime ["EmployeeStatus"] = $fdata;
// AUTimeid
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 5;
$fdata ["strName"] = "AUTimeid";
$fdata ["GoodName"] = "AUTimeid";
$fdata ["ownerTable"] = "emptime";
$fdata ["Label"] = GetFieldLabel ( "emptime", "AUTimeid" );
$fdata ["FieldType"] = 3;

$fdata ["AutoInc"] = true;

$fdata ["strField"] = "AUTimeid";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "emptime.AUTimeid";

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

$edata ["HTML5InuptType"] = "number";

$edata ["EditParams"] = "";
$edata ["EditParams"] .= " maxlength=10";

$edata ["controlWidth"] = 200;

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

$tdataemptime ["AUTimeid"] = $fdata;
// EmployeeID
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 6;
$fdata ["strName"] = "EmployeeID";
$fdata ["GoodName"] = "EmployeeID";
$fdata ["ownerTable"] = "emptime";
$fdata ["Label"] = GetFieldLabel ( "emptime", "EmployeeID" );
$fdata ["FieldType"] = 3;

$fdata ["strField"] = "EmployeeID";
$fdata ["bAddPage"] = true;
$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "emptime.EmployeeID";

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

$edata ["HTML5InuptType"] = "number";

$edata ["EditParams"] = "";

$edata ["controlWidth"] = 200;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = getJsValidatorName ( "Number" );

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = false;

$tdataemptime ["EmployeeID"] = $fdata;
// Date1
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 7;
$fdata ["strName"] = "Date1";
$fdata ["GoodName"] = "Date1";
$fdata ["ownerTable"] = "emptime";
$fdata ["Label"] = GetFieldLabel ( "emptime", "Date1" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "1/3/2016 WK-1";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "emptime.`1/3/2016 WK-1`";

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
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdataemptime ["Date1"] = $fdata;
// Date2
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 8;
$fdata ["strName"] = "Date2";
$fdata ["GoodName"] = "Date2";
$fdata ["ownerTable"] = "emptime";
$fdata ["Label"] = GetFieldLabel ( "emptime", "Date2" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "1/10/2016 WK-2";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "emptime.`1/10/2016 WK-2`";

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
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdataemptime ["Date2"] = $fdata;
// Date3
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 9;
$fdata ["strName"] = "Date3";
$fdata ["GoodName"] = "Date3";
$fdata ["ownerTable"] = "emptime";
$fdata ["Label"] = GetFieldLabel ( "emptime", "Date3" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "1/17/2016 WK-3";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "emptime.`1/17/2016 WK-3`";

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
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdataemptime ["Date3"] = $fdata;
// Date4
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 10;
$fdata ["strName"] = "Date4";
$fdata ["GoodName"] = "Date4";
$fdata ["ownerTable"] = "emptime";
$fdata ["Label"] = GetFieldLabel ( "emptime", "Date4" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "1/24/2016 WK-4";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "emptime.`1/24/2016 WK-4`";

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
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdataemptime ["Date4"] = $fdata;
// Date5
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 11;
$fdata ["strName"] = "Date5";
$fdata ["GoodName"] = "Date5";
$fdata ["ownerTable"] = "emptime";
$fdata ["Label"] = GetFieldLabel ( "emptime", "Date5" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "1/31/2016 WK-5";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "emptime.`1/31/2016 WK-5`";

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
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdataemptime ["Date5"] = $fdata;
// Date6
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 12;
$fdata ["strName"] = "Date6";
$fdata ["GoodName"] = "Date6";
$fdata ["ownerTable"] = "emptime";
$fdata ["Label"] = GetFieldLabel ( "emptime", "Date6" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "2/07/2016 WK-6";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "emptime.`2/07/2016 WK-6`";

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
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdataemptime ["Date6"] = $fdata;
// Date7
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 13;
$fdata ["strName"] = "Date7";
$fdata ["GoodName"] = "Date7";
$fdata ["ownerTable"] = "emptime";
$fdata ["Label"] = GetFieldLabel ( "emptime", "Date7" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "2/14/2016 WK-7";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "emptime.`2/14/2016 WK-7`";

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
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdataemptime ["Date7"] = $fdata;
// Date8
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 14;
$fdata ["strName"] = "Date8";
$fdata ["GoodName"] = "Date8";
$fdata ["ownerTable"] = "emptime";
$fdata ["Label"] = GetFieldLabel ( "emptime", "Date8" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "2/21/2016 WK-8";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "emptime.`2/21/2016 WK-8`";

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
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdataemptime ["Date8"] = $fdata;
// Date9
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 15;
$fdata ["strName"] = "Date9";
$fdata ["GoodName"] = "Date9";
$fdata ["ownerTable"] = "emptime";
$fdata ["Label"] = GetFieldLabel ( "emptime", "Date9" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "2/28/2016 WK-9";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "emptime.`2/28/2016 WK-9`";

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
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdataemptime ["Date9"] = $fdata;
// Date10
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 16;
$fdata ["strName"] = "Date10";
$fdata ["GoodName"] = "Date10";
$fdata ["ownerTable"] = "emptime";
$fdata ["Label"] = GetFieldLabel ( "emptime", "Date10" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "3/6/2016 WK-10";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "emptime.`3/6/2016 WK-10`";

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
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdataemptime ["Date10"] = $fdata;
// Date11
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 17;
$fdata ["strName"] = "Date11";
$fdata ["GoodName"] = "Date11";
$fdata ["ownerTable"] = "emptime";
$fdata ["Label"] = GetFieldLabel ( "emptime", "Date11" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "3/13/2016 WK-11";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "emptime.`3/13/2016 WK-11`";

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
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdataemptime ["Date11"] = $fdata;
// Date12
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 18;
$fdata ["strName"] = "Date12";
$fdata ["GoodName"] = "Date12";
$fdata ["ownerTable"] = "emptime";
$fdata ["Label"] = GetFieldLabel ( "emptime", "Date12" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "3/20/2016 WK-12";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "emptime.`3/20/2016 WK-12`";

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
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdataemptime ["Date12"] = $fdata;
// Date13
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 19;
$fdata ["strName"] = "Date13";
$fdata ["GoodName"] = "Date13";
$fdata ["ownerTable"] = "emptime";
$fdata ["Label"] = GetFieldLabel ( "emptime", "Date13" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "3/27/2016 WK-13";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "emptime.`3/27/2016 WK-13`";

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
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdataemptime ["Date13"] = $fdata;
// Date14
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 20;
$fdata ["strName"] = "Date14";
$fdata ["GoodName"] = "Date14";
$fdata ["ownerTable"] = "emptime";
$fdata ["Label"] = GetFieldLabel ( "emptime", "Date14" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "4/3/2016 WK-14";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "emptime.`4/3/2016 WK-14`";

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
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdataemptime ["Date14"] = $fdata;
// Date15
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 21;
$fdata ["strName"] = "Date15";
$fdata ["GoodName"] = "Date15";
$fdata ["ownerTable"] = "emptime";
$fdata ["Label"] = GetFieldLabel ( "emptime", "Date15" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "4/10/2016 WK-15";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "emptime.`4/10/2016 WK-15`";

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
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdataemptime ["Date15"] = $fdata;
// Date16
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 22;
$fdata ["strName"] = "Date16";
$fdata ["GoodName"] = "Date16";
$fdata ["ownerTable"] = "emptime";
$fdata ["Label"] = GetFieldLabel ( "emptime", "Date16" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "4/17/2016 WK-16";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "emptime.`4/17/2016 WK-16`";

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
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdataemptime ["Date16"] = $fdata;
// Date17
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 23;
$fdata ["strName"] = "Date17";
$fdata ["GoodName"] = "Date17";
$fdata ["ownerTable"] = "emptime";
$fdata ["Label"] = GetFieldLabel ( "emptime", "Date17" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "4/24/2016 WK-17";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "emptime.`4/24/2016 WK-17`";

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
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdataemptime ["Date17"] = $fdata;
// Date18
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 24;
$fdata ["strName"] = "Date18";
$fdata ["GoodName"] = "Date18";
$fdata ["ownerTable"] = "emptime";
$fdata ["Label"] = GetFieldLabel ( "emptime", "Date18" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "5/1/2016 WK-18";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "emptime.`5/1/2016 WK-18`";

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
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdataemptime ["Date18"] = $fdata;
// Date19
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 25;
$fdata ["strName"] = "Date19";
$fdata ["GoodName"] = "Date19";
$fdata ["ownerTable"] = "emptime";
$fdata ["Label"] = GetFieldLabel ( "emptime", "Date19" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "5/8/2016 WK-19";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "emptime.`5/8/2016 WK-19`";

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
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdataemptime ["Date19"] = $fdata;
// Date20
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 26;
$fdata ["strName"] = "Date20";
$fdata ["GoodName"] = "Date20";
$fdata ["ownerTable"] = "emptime";
$fdata ["Label"] = GetFieldLabel ( "emptime", "Date20" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "5/15/2016 WK-20";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "emptime.`5/15/2016 WK-20`";

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
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdataemptime ["Date20"] = $fdata;
// Date21
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 27;
$fdata ["strName"] = "Date21";
$fdata ["GoodName"] = "Date21";
$fdata ["ownerTable"] = "emptime";
$fdata ["Label"] = GetFieldLabel ( "emptime", "Date21" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "5/22/2016 WK-21";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "emptime.`5/22/2016 WK-21`";

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
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdataemptime ["Date21"] = $fdata;
// Date22
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 28;
$fdata ["strName"] = "Date22";
$fdata ["GoodName"] = "Date22";
$fdata ["ownerTable"] = "emptime";
$fdata ["Label"] = GetFieldLabel ( "emptime", "Date22" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "5/29/2016 WK-22";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "emptime.`5/29/2016 WK-22`";

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
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdataemptime ["Date22"] = $fdata;
// Date23
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 29;
$fdata ["strName"] = "Date23";
$fdata ["GoodName"] = "Date23";
$fdata ["ownerTable"] = "emptime";
$fdata ["Label"] = GetFieldLabel ( "emptime", "Date23" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "6/5/2016 WK-23";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "emptime.`6/5/2016 WK-23`";

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
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdataemptime ["Date23"] = $fdata;
// Date24
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 30;
$fdata ["strName"] = "Date24";
$fdata ["GoodName"] = "Date24";
$fdata ["ownerTable"] = "emptime";
$fdata ["Label"] = GetFieldLabel ( "emptime", "Date24" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "6/12/2016 WK-24";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "emptime.`6/12/2016 WK-24`";

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
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdataemptime ["Date24"] = $fdata;
// Date25
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 31;
$fdata ["strName"] = "Date25";
$fdata ["GoodName"] = "Date25";
$fdata ["ownerTable"] = "emptime";
$fdata ["Label"] = GetFieldLabel ( "emptime", "Date25" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "6/19/2016 WK-25";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "emptime.`6/19/2016 WK-25`";

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
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdataemptime ["Date25"] = $fdata;
// Date26
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 32;
$fdata ["strName"] = "Date26";
$fdata ["GoodName"] = "Date26";
$fdata ["ownerTable"] = "emptime";
$fdata ["Label"] = GetFieldLabel ( "emptime", "Date26" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "6/26/2016 WK-26";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "emptime.`6/26/2016 WK-26`";

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
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdataemptime ["Date26"] = $fdata;
// Date27
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 33;
$fdata ["strName"] = "Date27";
$fdata ["GoodName"] = "Date27";
$fdata ["ownerTable"] = "emptime";
$fdata ["Label"] = GetFieldLabel ( "emptime", "Date27" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "7/3/2016 WK-27";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "emptime.`7/3/2016 WK-27`";

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
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdataemptime ["Date27"] = $fdata;
// Date28
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 34;
$fdata ["strName"] = "Date28";
$fdata ["GoodName"] = "Date28";
$fdata ["ownerTable"] = "emptime";
$fdata ["Label"] = GetFieldLabel ( "emptime", "Date28" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "7/10/2016 WK-28";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "emptime.`7/10/2016 WK-28`";

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
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdataemptime ["Date28"] = $fdata;
// Date29
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 35;
$fdata ["strName"] = "Date29";
$fdata ["GoodName"] = "Date29";
$fdata ["ownerTable"] = "emptime";
$fdata ["Label"] = GetFieldLabel ( "emptime", "Date29" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "7/17/2016 WK-29";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "emptime.`7/17/2016 WK-29`";

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
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdataemptime ["Date29"] = $fdata;
// Date30
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 36;
$fdata ["strName"] = "Date30";
$fdata ["GoodName"] = "Date30";
$fdata ["ownerTable"] = "emptime";
$fdata ["Label"] = GetFieldLabel ( "emptime", "Date30" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "7/24/2016 WK-30";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "emptime.`7/24/2016 WK-30`";

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
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdataemptime ["Date30"] = $fdata;
// Date31
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 37;
$fdata ["strName"] = "Date31";
$fdata ["GoodName"] = "Date31";
$fdata ["ownerTable"] = "emptime";
$fdata ["Label"] = GetFieldLabel ( "emptime", "Date31" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "7/31/2016 WK-31";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "emptime.`7/31/2016 WK-31`";

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
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdataemptime ["Date31"] = $fdata;
// Date32
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 38;
$fdata ["strName"] = "Date32";
$fdata ["GoodName"] = "Date32";
$fdata ["ownerTable"] = "emptime";
$fdata ["Label"] = GetFieldLabel ( "emptime", "Date32" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "8/7/2016 WK-32";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "emptime.`8/7/2016 WK-32`";

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
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdataemptime ["Date32"] = $fdata;
// Date33
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 39;
$fdata ["strName"] = "Date33";
$fdata ["GoodName"] = "Date33";
$fdata ["ownerTable"] = "emptime";
$fdata ["Label"] = GetFieldLabel ( "emptime", "Date33" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "8/14/2016 WK-33";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "emptime.`8/14/2016 WK-33`";

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
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdataemptime ["Date33"] = $fdata;
// Date34
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 40;
$fdata ["strName"] = "Date34";
$fdata ["GoodName"] = "Date34";
$fdata ["ownerTable"] = "emptime";
$fdata ["Label"] = GetFieldLabel ( "emptime", "Date34" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "8/21/2016 WK-34";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "emptime.`8/21/2016 WK-34`";

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
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdataemptime ["Date34"] = $fdata;
// Date35
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 41;
$fdata ["strName"] = "Date35";
$fdata ["GoodName"] = "Date35";
$fdata ["ownerTable"] = "emptime";
$fdata ["Label"] = GetFieldLabel ( "emptime", "Date35" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "8/28/2016 WK-35";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "emptime.`8/28/2016 WK-35`";

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
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdataemptime ["Date35"] = $fdata;
// Date36
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 42;
$fdata ["strName"] = "Date36";
$fdata ["GoodName"] = "Date36";
$fdata ["ownerTable"] = "emptime";
$fdata ["Label"] = GetFieldLabel ( "emptime", "Date36" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "9/4/2016 WK-36";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "emptime.`9/4/2016 WK-36`";

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
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdataemptime ["Date36"] = $fdata;
// Date37
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 43;
$fdata ["strName"] = "Date37";
$fdata ["GoodName"] = "Date37";
$fdata ["ownerTable"] = "emptime";
$fdata ["Label"] = GetFieldLabel ( "emptime", "Date37" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "9/11/2016 WK-37";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "emptime.`9/11/2016 WK-37`";

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
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdataemptime ["Date37"] = $fdata;
// Date38
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 44;
$fdata ["strName"] = "Date38";
$fdata ["GoodName"] = "Date38";
$fdata ["ownerTable"] = "emptime";
$fdata ["Label"] = GetFieldLabel ( "emptime", "Date38" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "9/18/2016 WK-38";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "emptime.`9/18/2016 WK-38`";

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
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdataemptime ["Date38"] = $fdata;
// Date39
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 45;
$fdata ["strName"] = "Date39";
$fdata ["GoodName"] = "Date39";
$fdata ["ownerTable"] = "emptime";
$fdata ["Label"] = GetFieldLabel ( "emptime", "Date39" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "9/25/2016 WK-39";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "emptime.`9/25/2016 WK-39`";

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
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdataemptime ["Date39"] = $fdata;
// Date40
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 46;
$fdata ["strName"] = "Date40";
$fdata ["GoodName"] = "Date40";
$fdata ["ownerTable"] = "emptime";
$fdata ["Label"] = GetFieldLabel ( "emptime", "Date40" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "10/2/2016 WK-40";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "emptime.`10/2/2016 WK-40`";

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
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdataemptime ["Date40"] = $fdata;
// Date41
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 47;
$fdata ["strName"] = "Date41";
$fdata ["GoodName"] = "Date41";
$fdata ["ownerTable"] = "emptime";
$fdata ["Label"] = GetFieldLabel ( "emptime", "Date41" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "10/9/2016 WK-41";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "emptime.`10/9/2016 WK-41`";

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
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdataemptime ["Date41"] = $fdata;
// Date42
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 48;
$fdata ["strName"] = "Date42";
$fdata ["GoodName"] = "Date42";
$fdata ["ownerTable"] = "emptime";
$fdata ["Label"] = GetFieldLabel ( "emptime", "Date42" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "10/16/2016 WK-42";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "emptime.`10/16/2016 WK-42`";

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
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdataemptime ["Date42"] = $fdata;
// Date43
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 49;
$fdata ["strName"] = "Date43";
$fdata ["GoodName"] = "Date43";
$fdata ["ownerTable"] = "emptime";
$fdata ["Label"] = GetFieldLabel ( "emptime", "Date43" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "10/23/2016 WK-43";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "emptime.`10/23/2016 WK-43`";

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
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdataemptime ["Date43"] = $fdata;
// Date44
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 50;
$fdata ["strName"] = "Date44";
$fdata ["GoodName"] = "Date44";
$fdata ["ownerTable"] = "emptime";
$fdata ["Label"] = GetFieldLabel ( "emptime", "Date44" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "10/30/2016 WK-44";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "emptime.`10/30/2016 WK-44`";

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
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdataemptime ["Date44"] = $fdata;
// Date45
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 51;
$fdata ["strName"] = "Date45";
$fdata ["GoodName"] = "Date45";
$fdata ["ownerTable"] = "emptime";
$fdata ["Label"] = GetFieldLabel ( "emptime", "Date45" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "11/6/2016 WK-45";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "emptime.`11/6/2016 WK-45`";

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
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdataemptime ["Date45"] = $fdata;
// Date46
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 52;
$fdata ["strName"] = "Date46";
$fdata ["GoodName"] = "Date46";
$fdata ["ownerTable"] = "emptime";
$fdata ["Label"] = GetFieldLabel ( "emptime", "Date46" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "11/13/2016 WK-46";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "emptime.`11/13/2016 WK-46`";

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
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdataemptime ["Date46"] = $fdata;
// Date47
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 53;
$fdata ["strName"] = "Date47";
$fdata ["GoodName"] = "Date47";
$fdata ["ownerTable"] = "emptime";
$fdata ["Label"] = GetFieldLabel ( "emptime", "Date47" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "11/20/2016 WK-47";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "emptime.`11/20/2016 WK-47`";

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
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdataemptime ["Date47"] = $fdata;
// Date48
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 54;
$fdata ["strName"] = "Date48";
$fdata ["GoodName"] = "Date48";
$fdata ["ownerTable"] = "emptime";
$fdata ["Label"] = GetFieldLabel ( "emptime", "Date48" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "11/27/2016 WK-48";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "emptime.`11/27/2016 WK-48`";

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
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdataemptime ["Date48"] = $fdata;
// Date49
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 55;
$fdata ["strName"] = "Date49";
$fdata ["GoodName"] = "Date49";
$fdata ["ownerTable"] = "emptime";
$fdata ["Label"] = GetFieldLabel ( "emptime", "Date49" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "12/4/2016 WK-49";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "emptime.`12/4/2016 WK-49`";

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
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdataemptime ["Date49"] = $fdata;
// Date50
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 56;
$fdata ["strName"] = "Date50";
$fdata ["GoodName"] = "Date50";
$fdata ["ownerTable"] = "emptime";
$fdata ["Label"] = GetFieldLabel ( "emptime", "Date50" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "12/11/2016 WK-50";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "emptime.`12/11/2016 WK-50`";

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
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdataemptime ["Date50"] = $fdata;
// Date51
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 57;
$fdata ["strName"] = "Date51";
$fdata ["GoodName"] = "Date51";
$fdata ["ownerTable"] = "emptime";
$fdata ["Label"] = GetFieldLabel ( "emptime", "Date51" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "12/18/2016 WK-51";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "emptime.`12/18/2016 WK-51`";

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
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdataemptime ["Date51"] = $fdata;
// Date52
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 58;
$fdata ["strName"] = "Date52";
$fdata ["GoodName"] = "Date52";
$fdata ["ownerTable"] = "emptime";
$fdata ["Label"] = GetFieldLabel ( "emptime", "Date52" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "12/25/2016 WK-52";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "emptime.`12/25/2016 WK-52`";

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
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdataemptime ["Date52"] = $fdata;
// Date53
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 59;
$fdata ["strName"] = "Date53";
$fdata ["GoodName"] = "Date53";
$fdata ["ownerTable"] = "emptime";
$fdata ["Label"] = GetFieldLabel ( "emptime", "Date53" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "1/1/2017 WK-53";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "emptime.`1/1/2017 WK-53`";

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
		"Starts with",
		"More than",
		"Less than",
		"Between",
		"Empty" 
);
// the end of search options settings

$tdataemptime ["Date53"] = $fdata;

$tables_data ["emptime"] = &$tdataemptime;
$field_labels ["emptime"] = &$fieldLabelsemptime;
$fieldToolTips ["emptime"] = &$fieldToolTipsemptime;
$page_titles ["emptime"] = &$pageTitlesemptime;

// -----------------start prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData ["emptime"] = array ();

// tables which are master tables for current table (detail)
$masterTablesData ["emptime"] = array ();

// -----------------end prepare master-details data arrays ------------------------------//

require_once (getabspath ( "classes/sql.php" ));
function createSqlQuery_emptime() {
	$proto3 = array ();
	$proto3 ["m_strHead"] = "SELECT";
	$proto3 ["m_strFieldList"] = "employee_header.FirstName,  employee_header.LastName,  employee_header.SupervisorName,  employee_header.EmployeeStatus,  emptime.AUTimeid,  emptime.EmployeeID,  emptime.`1/3/2016 WK-1` AS Date1,  emptime.`1/10/2016 WK-2` AS Date2,  emptime.`1/17/2016 WK-3` AS Date3,  emptime.`1/24/2016 WK-4` AS Date4,  emptime.`1/31/2016 WK-5` AS Date5,  emptime.`2/07/2016 WK-6` AS Date6,  emptime.`2/14/2016 WK-7` AS Date7,  emptime.`2/21/2016 WK-8` AS Date8,  emptime.`2/28/2016 WK-9` AS Date9,  emptime.`3/6/2016 WK-10` AS Date10,  emptime.`3/13/2016 WK-11` AS Date11,  emptime.`3/20/2016 WK-12` AS Date12,  emptime.`3/27/2016 WK-13` AS Date13,  emptime.`4/3/2016 WK-14` AS Date14,  emptime.`4/10/2016 WK-15` AS Date15,  emptime.`4/17/2016 WK-16` AS Date16,  emptime.`4/24/2016 WK-17` AS Date17,  emptime.`5/1/2016 WK-18` AS Date18,  emptime.`5/8/2016 WK-19` AS Date19,  emptime.`5/15/2016 WK-20` AS Date20,  emptime.`5/22/2016 WK-21` AS Date21,  emptime.`5/29/2016 WK-22` AS Date22,  emptime.`6/5/2016 WK-23` AS Date23,  emptime.`6/12/2016 WK-24` AS Date24,  emptime.`6/19/2016 WK-25` AS Date25,  emptime.`6/26/2016 WK-26` AS Date26,  emptime.`7/3/2016 WK-27` AS Date27,  emptime.`7/10/2016 WK-28` AS Date28,  emptime.`7/17/2016 WK-29` AS Date29,  emptime.`7/24/2016 WK-30` AS Date30,  emptime.`7/31/2016 WK-31` AS Date31,  emptime.`8/7/2016 WK-32` AS Date32,  emptime.`8/14/2016 WK-33` AS Date33,  emptime.`8/21/2016 WK-34` AS Date34,  emptime.`8/28/2016 WK-35` AS Date35,  emptime.`9/4/2016 WK-36` AS Date36,  emptime.`9/11/2016 WK-37` AS Date37,  emptime.`9/18/2016 WK-38` AS Date38,  emptime.`9/25/2016 WK-39` AS Date39,  emptime.`10/2/2016 WK-40` AS Date40,  emptime.`10/9/2016 WK-41` AS Date41,  emptime.`10/16/2016 WK-42` AS Date42,  emptime.`10/23/2016 WK-43` AS Date43,  emptime.`10/30/2016 WK-44` AS Date44,  emptime.`11/6/2016 WK-45` AS Date45,  emptime.`11/13/2016 WK-46` AS Date46,  emptime.`11/20/2016 WK-47` AS Date47,  emptime.`11/27/2016 WK-48` AS Date48,  emptime.`12/4/2016 WK-49` AS Date49,  emptime.`12/11/2016 WK-50` AS Date50,  emptime.`12/18/2016 WK-51` AS Date51,  emptime.`12/25/2016 WK-52` AS Date52,  emptime.`1/1/2017 WK-53` AS Date53";
	$proto3 ["m_strFrom"] = "FROM emptime  INNER JOIN employee_header ON emptime.EmployeeID = employee_header.EmployeeID";
	if( !IsAdmin() ) {
		$proto3 ["m_strWhere"] = "concat(employee_header.`FirstName`, ' ', employee_header.`LastName`) = '". $_SESSION['UserName'] ."'";
	} else {
		$proto3 ["m_strWhere"] = "";
	}
	$proto3 ["m_strOrderBy"] = "ORDER BY emptime.`12/11/2016 WK-50` DESC, employee_header.FirstName";
	$proto3 ["m_strTail"] = "";
	$proto3 ["cipherer"] = null;
	$proto4 = array ();
	if( !IsAdmin() ) {
		$proto4 ["m_sql"] = "concat(employee_header.`FirstName`, ' ', employee_header.`LastName`) = '". $_SESSION['UserName'] ."'";
		$proto4 ["m_uniontype"] = "SQLL_UNKNOWN";
		$obj = new SQLNonParsed ( array (
				"m_sql" => "concat(employee_header.`FirstName`, ' ', employee_header.`LastName`) = '". $_SESSION['UserName'] ."'"
		) );
	} else {
		$proto4 ["m_sql"] = "";
		$proto4 ["m_uniontype"] = "SQLL_UNKNOWN";
		$obj = new SQLNonParsed ( array (
				"m_sql" => ""
		) );
	}	
	
	$proto4 ["m_column"] = $obj;
	$proto4 ["m_contained"] = array ();
	$proto4 ["m_strCase"] = "";
	$proto4 ["m_havingmode"] = false;
	$proto4 ["m_inBrackets"] = false;
	$proto4 ["m_useAlias"] = false;
	$obj = new SQLLogicalExpr ( $proto4 );
	
	$proto3 ["m_where"] = $obj;
	$proto6 = array ();
	$proto6 ["m_sql"] = "";
	$proto6 ["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed ( array (
			"m_sql" => "" 
	) );
	
	$proto6 ["m_column"] = $obj;
	$proto6 ["m_contained"] = array ();
	$proto6 ["m_strCase"] = "";
	$proto6 ["m_havingmode"] = false;
	$proto6 ["m_inBrackets"] = false;
	$proto6 ["m_useAlias"] = false;
	$obj = new SQLLogicalExpr ( $proto6 );
	
	$proto3 ["m_having"] = $obj;
	$proto3 ["m_fieldlist"] = array ();
	$proto8 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "FirstName",
			"m_strTable" => "employee_header",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto8 ["m_sql"] = "employee_header.FirstName";
	$proto8 ["m_srcTableName"] = "emptime";
	$proto8 ["m_expr"] = $obj;
	$proto8 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto8 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto10 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "LastName",
			"m_strTable" => "employee_header",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto10 ["m_sql"] = "employee_header.LastName";
	$proto10 ["m_srcTableName"] = "emptime";
	$proto10 ["m_expr"] = $obj;
	$proto10 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto10 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto12 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "SupervisorName",
			"m_strTable" => "employee_header",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto12 ["m_sql"] = "employee_header.SupervisorName";
	$proto12 ["m_srcTableName"] = "emptime";
	$proto12 ["m_expr"] = $obj;
	$proto12 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto12 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto14 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "EmployeeStatus",
			"m_strTable" => "employee_header",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto14 ["m_sql"] = "employee_header.EmployeeStatus";
	$proto14 ["m_srcTableName"] = "emptime";
	$proto14 ["m_expr"] = $obj;
	$proto14 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto14 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto16 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "AUTimeid",
			"m_strTable" => "emptime",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto16 ["m_sql"] = "emptime.AUTimeid";
	$proto16 ["m_srcTableName"] = "emptime";
	$proto16 ["m_expr"] = $obj;
	$proto16 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto16 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto18 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "EmployeeID",
			"m_strTable" => "emptime",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto18 ["m_sql"] = "emptime.EmployeeID";
	$proto18 ["m_srcTableName"] = "emptime";
	$proto18 ["m_expr"] = $obj;
	$proto18 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto18 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto20 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "1/3/2016 WK-1",
			"m_strTable" => "emptime",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto20 ["m_sql"] = "emptime.`1/3/2016 WK-1`";
	$proto20 ["m_srcTableName"] = "emptime";
	$proto20 ["m_expr"] = $obj;
	$proto20 ["m_alias"] = "Date1";
	$obj = new SQLFieldListItem ( $proto20 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto22 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "1/10/2016 WK-2",
			"m_strTable" => "emptime",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto22 ["m_sql"] = "emptime.`1/10/2016 WK-2`";
	$proto22 ["m_srcTableName"] = "emptime";
	$proto22 ["m_expr"] = $obj;
	$proto22 ["m_alias"] = "Date2";
	$obj = new SQLFieldListItem ( $proto22 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto24 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "1/17/2016 WK-3",
			"m_strTable" => "emptime",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto24 ["m_sql"] = "emptime.`1/17/2016 WK-3`";
	$proto24 ["m_srcTableName"] = "emptime";
	$proto24 ["m_expr"] = $obj;
	$proto24 ["m_alias"] = "Date3";
	$obj = new SQLFieldListItem ( $proto24 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto26 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "1/24/2016 WK-4",
			"m_strTable" => "emptime",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto26 ["m_sql"] = "emptime.`1/24/2016 WK-4`";
	$proto26 ["m_srcTableName"] = "emptime";
	$proto26 ["m_expr"] = $obj;
	$proto26 ["m_alias"] = "Date4";
	$obj = new SQLFieldListItem ( $proto26 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto28 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "1/31/2016 WK-5",
			"m_strTable" => "emptime",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto28 ["m_sql"] = "emptime.`1/31/2016 WK-5`";
	$proto28 ["m_srcTableName"] = "emptime";
	$proto28 ["m_expr"] = $obj;
	$proto28 ["m_alias"] = "Date5";
	$obj = new SQLFieldListItem ( $proto28 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto30 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "2/07/2016 WK-6",
			"m_strTable" => "emptime",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto30 ["m_sql"] = "emptime.`2/07/2016 WK-6`";
	$proto30 ["m_srcTableName"] = "emptime";
	$proto30 ["m_expr"] = $obj;
	$proto30 ["m_alias"] = "Date6";
	$obj = new SQLFieldListItem ( $proto30 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto32 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "2/14/2016 WK-7",
			"m_strTable" => "emptime",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto32 ["m_sql"] = "emptime.`2/14/2016 WK-7`";
	$proto32 ["m_srcTableName"] = "emptime";
	$proto32 ["m_expr"] = $obj;
	$proto32 ["m_alias"] = "Date7";
	$obj = new SQLFieldListItem ( $proto32 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto34 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "2/21/2016 WK-8",
			"m_strTable" => "emptime",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto34 ["m_sql"] = "emptime.`2/21/2016 WK-8`";
	$proto34 ["m_srcTableName"] = "emptime";
	$proto34 ["m_expr"] = $obj;
	$proto34 ["m_alias"] = "Date8";
	$obj = new SQLFieldListItem ( $proto34 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto36 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "2/28/2016 WK-9",
			"m_strTable" => "emptime",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto36 ["m_sql"] = "emptime.`2/28/2016 WK-9`";
	$proto36 ["m_srcTableName"] = "emptime";
	$proto36 ["m_expr"] = $obj;
	$proto36 ["m_alias"] = "Date9";
	$obj = new SQLFieldListItem ( $proto36 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto38 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "3/6/2016 WK-10",
			"m_strTable" => "emptime",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto38 ["m_sql"] = "emptime.`3/6/2016 WK-10`";
	$proto38 ["m_srcTableName"] = "emptime";
	$proto38 ["m_expr"] = $obj;
	$proto38 ["m_alias"] = "Date10";
	$obj = new SQLFieldListItem ( $proto38 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto40 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "3/13/2016 WK-11",
			"m_strTable" => "emptime",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto40 ["m_sql"] = "emptime.`3/13/2016 WK-11`";
	$proto40 ["m_srcTableName"] = "emptime";
	$proto40 ["m_expr"] = $obj;
	$proto40 ["m_alias"] = "Date11";
	$obj = new SQLFieldListItem ( $proto40 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto42 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "3/20/2016 WK-12",
			"m_strTable" => "emptime",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto42 ["m_sql"] = "emptime.`3/20/2016 WK-12`";
	$proto42 ["m_srcTableName"] = "emptime";
	$proto42 ["m_expr"] = $obj;
	$proto42 ["m_alias"] = "Date12";
	$obj = new SQLFieldListItem ( $proto42 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto44 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "3/27/2016 WK-13",
			"m_strTable" => "emptime",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto44 ["m_sql"] = "emptime.`3/27/2016 WK-13`";
	$proto44 ["m_srcTableName"] = "emptime";
	$proto44 ["m_expr"] = $obj;
	$proto44 ["m_alias"] = "Date13";
	$obj = new SQLFieldListItem ( $proto44 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto46 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "4/3/2016 WK-14",
			"m_strTable" => "emptime",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto46 ["m_sql"] = "emptime.`4/3/2016 WK-14`";
	$proto46 ["m_srcTableName"] = "emptime";
	$proto46 ["m_expr"] = $obj;
	$proto46 ["m_alias"] = "Date14";
	$obj = new SQLFieldListItem ( $proto46 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto48 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "4/10/2016 WK-15",
			"m_strTable" => "emptime",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto48 ["m_sql"] = "emptime.`4/10/2016 WK-15`";
	$proto48 ["m_srcTableName"] = "emptime";
	$proto48 ["m_expr"] = $obj;
	$proto48 ["m_alias"] = "Date15";
	$obj = new SQLFieldListItem ( $proto48 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto50 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "4/17/2016 WK-16",
			"m_strTable" => "emptime",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto50 ["m_sql"] = "emptime.`4/17/2016 WK-16`";
	$proto50 ["m_srcTableName"] = "emptime";
	$proto50 ["m_expr"] = $obj;
	$proto50 ["m_alias"] = "Date16";
	$obj = new SQLFieldListItem ( $proto50 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto52 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "4/24/2016 WK-17",
			"m_strTable" => "emptime",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto52 ["m_sql"] = "emptime.`4/24/2016 WK-17`";
	$proto52 ["m_srcTableName"] = "emptime";
	$proto52 ["m_expr"] = $obj;
	$proto52 ["m_alias"] = "Date17";
	$obj = new SQLFieldListItem ( $proto52 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto54 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "5/1/2016 WK-18",
			"m_strTable" => "emptime",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto54 ["m_sql"] = "emptime.`5/1/2016 WK-18`";
	$proto54 ["m_srcTableName"] = "emptime";
	$proto54 ["m_expr"] = $obj;
	$proto54 ["m_alias"] = "Date18";
	$obj = new SQLFieldListItem ( $proto54 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto56 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "5/8/2016 WK-19",
			"m_strTable" => "emptime",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto56 ["m_sql"] = "emptime.`5/8/2016 WK-19`";
	$proto56 ["m_srcTableName"] = "emptime";
	$proto56 ["m_expr"] = $obj;
	$proto56 ["m_alias"] = "Date19";
	$obj = new SQLFieldListItem ( $proto56 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto58 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "5/15/2016 WK-20",
			"m_strTable" => "emptime",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto58 ["m_sql"] = "emptime.`5/15/2016 WK-20`";
	$proto58 ["m_srcTableName"] = "emptime";
	$proto58 ["m_expr"] = $obj;
	$proto58 ["m_alias"] = "Date20";
	$obj = new SQLFieldListItem ( $proto58 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto60 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "5/22/2016 WK-21",
			"m_strTable" => "emptime",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto60 ["m_sql"] = "emptime.`5/22/2016 WK-21`";
	$proto60 ["m_srcTableName"] = "emptime";
	$proto60 ["m_expr"] = $obj;
	$proto60 ["m_alias"] = "Date21";
	$obj = new SQLFieldListItem ( $proto60 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto62 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "5/29/2016 WK-22",
			"m_strTable" => "emptime",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto62 ["m_sql"] = "emptime.`5/29/2016 WK-22`";
	$proto62 ["m_srcTableName"] = "emptime";
	$proto62 ["m_expr"] = $obj;
	$proto62 ["m_alias"] = "Date22";
	$obj = new SQLFieldListItem ( $proto62 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto64 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "6/5/2016 WK-23",
			"m_strTable" => "emptime",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto64 ["m_sql"] = "emptime.`6/5/2016 WK-23`";
	$proto64 ["m_srcTableName"] = "emptime";
	$proto64 ["m_expr"] = $obj;
	$proto64 ["m_alias"] = "Date23";
	$obj = new SQLFieldListItem ( $proto64 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto66 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "6/12/2016 WK-24",
			"m_strTable" => "emptime",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto66 ["m_sql"] = "emptime.`6/12/2016 WK-24`";
	$proto66 ["m_srcTableName"] = "emptime";
	$proto66 ["m_expr"] = $obj;
	$proto66 ["m_alias"] = "Date24";
	$obj = new SQLFieldListItem ( $proto66 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto68 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "6/19/2016 WK-25",
			"m_strTable" => "emptime",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto68 ["m_sql"] = "emptime.`6/19/2016 WK-25`";
	$proto68 ["m_srcTableName"] = "emptime";
	$proto68 ["m_expr"] = $obj;
	$proto68 ["m_alias"] = "Date25";
	$obj = new SQLFieldListItem ( $proto68 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto70 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "6/26/2016 WK-26",
			"m_strTable" => "emptime",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto70 ["m_sql"] = "emptime.`6/26/2016 WK-26`";
	$proto70 ["m_srcTableName"] = "emptime";
	$proto70 ["m_expr"] = $obj;
	$proto70 ["m_alias"] = "Date26";
	$obj = new SQLFieldListItem ( $proto70 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto72 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "7/3/2016 WK-27",
			"m_strTable" => "emptime",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto72 ["m_sql"] = "emptime.`7/3/2016 WK-27`";
	$proto72 ["m_srcTableName"] = "emptime";
	$proto72 ["m_expr"] = $obj;
	$proto72 ["m_alias"] = "Date27";
	$obj = new SQLFieldListItem ( $proto72 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto74 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "7/10/2016 WK-28",
			"m_strTable" => "emptime",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto74 ["m_sql"] = "emptime.`7/10/2016 WK-28`";
	$proto74 ["m_srcTableName"] = "emptime";
	$proto74 ["m_expr"] = $obj;
	$proto74 ["m_alias"] = "Date28";
	$obj = new SQLFieldListItem ( $proto74 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto76 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "7/17/2016 WK-29",
			"m_strTable" => "emptime",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto76 ["m_sql"] = "emptime.`7/17/2016 WK-29`";
	$proto76 ["m_srcTableName"] = "emptime";
	$proto76 ["m_expr"] = $obj;
	$proto76 ["m_alias"] = "Date29";
	$obj = new SQLFieldListItem ( $proto76 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto78 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "7/24/2016 WK-30",
			"m_strTable" => "emptime",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto78 ["m_sql"] = "emptime.`7/24/2016 WK-30`";
	$proto78 ["m_srcTableName"] = "emptime";
	$proto78 ["m_expr"] = $obj;
	$proto78 ["m_alias"] = "Date30";
	$obj = new SQLFieldListItem ( $proto78 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto80 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "7/31/2016 WK-31",
			"m_strTable" => "emptime",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto80 ["m_sql"] = "emptime.`7/31/2016 WK-31`";
	$proto80 ["m_srcTableName"] = "emptime";
	$proto80 ["m_expr"] = $obj;
	$proto80 ["m_alias"] = "Date31";
	$obj = new SQLFieldListItem ( $proto80 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto82 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "8/7/2016 WK-32",
			"m_strTable" => "emptime",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto82 ["m_sql"] = "emptime.`8/7/2016 WK-32`";
	$proto82 ["m_srcTableName"] = "emptime";
	$proto82 ["m_expr"] = $obj;
	$proto82 ["m_alias"] = "Date32";
	$obj = new SQLFieldListItem ( $proto82 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto84 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "8/14/2016 WK-33",
			"m_strTable" => "emptime",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto84 ["m_sql"] = "emptime.`8/14/2016 WK-33`";
	$proto84 ["m_srcTableName"] = "emptime";
	$proto84 ["m_expr"] = $obj;
	$proto84 ["m_alias"] = "Date33";
	$obj = new SQLFieldListItem ( $proto84 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto86 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "8/21/2016 WK-34",
			"m_strTable" => "emptime",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto86 ["m_sql"] = "emptime.`8/21/2016 WK-34`";
	$proto86 ["m_srcTableName"] = "emptime";
	$proto86 ["m_expr"] = $obj;
	$proto86 ["m_alias"] = "Date34";
	$obj = new SQLFieldListItem ( $proto86 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto88 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "8/28/2016 WK-35",
			"m_strTable" => "emptime",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto88 ["m_sql"] = "emptime.`8/28/2016 WK-35`";
	$proto88 ["m_srcTableName"] = "emptime";
	$proto88 ["m_expr"] = $obj;
	$proto88 ["m_alias"] = "Date35";
	$obj = new SQLFieldListItem ( $proto88 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto90 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "9/4/2016 WK-36",
			"m_strTable" => "emptime",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto90 ["m_sql"] = "emptime.`9/4/2016 WK-36`";
	$proto90 ["m_srcTableName"] = "emptime";
	$proto90 ["m_expr"] = $obj;
	$proto90 ["m_alias"] = "Date36";
	$obj = new SQLFieldListItem ( $proto90 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto92 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "9/11/2016 WK-37",
			"m_strTable" => "emptime",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto92 ["m_sql"] = "emptime.`9/11/2016 WK-37`";
	$proto92 ["m_srcTableName"] = "emptime";
	$proto92 ["m_expr"] = $obj;
	$proto92 ["m_alias"] = "Date37";
	$obj = new SQLFieldListItem ( $proto92 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto94 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "9/18/2016 WK-38",
			"m_strTable" => "emptime",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto94 ["m_sql"] = "emptime.`9/18/2016 WK-38`";
	$proto94 ["m_srcTableName"] = "emptime";
	$proto94 ["m_expr"] = $obj;
	$proto94 ["m_alias"] = "Date38";
	$obj = new SQLFieldListItem ( $proto94 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto96 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "9/25/2016 WK-39",
			"m_strTable" => "emptime",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto96 ["m_sql"] = "emptime.`9/25/2016 WK-39`";
	$proto96 ["m_srcTableName"] = "emptime";
	$proto96 ["m_expr"] = $obj;
	$proto96 ["m_alias"] = "Date39";
	$obj = new SQLFieldListItem ( $proto96 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto98 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "10/2/2016 WK-40",
			"m_strTable" => "emptime",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto98 ["m_sql"] = "emptime.`10/2/2016 WK-40`";
	$proto98 ["m_srcTableName"] = "emptime";
	$proto98 ["m_expr"] = $obj;
	$proto98 ["m_alias"] = "Date40";
	$obj = new SQLFieldListItem ( $proto98 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto100 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "10/9/2016 WK-41",
			"m_strTable" => "emptime",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto100 ["m_sql"] = "emptime.`10/9/2016 WK-41`";
	$proto100 ["m_srcTableName"] = "emptime";
	$proto100 ["m_expr"] = $obj;
	$proto100 ["m_alias"] = "Date41";
	$obj = new SQLFieldListItem ( $proto100 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto102 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "10/16/2016 WK-42",
			"m_strTable" => "emptime",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto102 ["m_sql"] = "emptime.`10/16/2016 WK-42`";
	$proto102 ["m_srcTableName"] = "emptime";
	$proto102 ["m_expr"] = $obj;
	$proto102 ["m_alias"] = "Date42";
	$obj = new SQLFieldListItem ( $proto102 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto104 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "10/23/2016 WK-43",
			"m_strTable" => "emptime",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto104 ["m_sql"] = "emptime.`10/23/2016 WK-43`";
	$proto104 ["m_srcTableName"] = "emptime";
	$proto104 ["m_expr"] = $obj;
	$proto104 ["m_alias"] = "Date43";
	$obj = new SQLFieldListItem ( $proto104 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto106 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "10/30/2016 WK-44",
			"m_strTable" => "emptime",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto106 ["m_sql"] = "emptime.`10/30/2016 WK-44`";
	$proto106 ["m_srcTableName"] = "emptime";
	$proto106 ["m_expr"] = $obj;
	$proto106 ["m_alias"] = "Date44";
	$obj = new SQLFieldListItem ( $proto106 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto108 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "11/6/2016 WK-45",
			"m_strTable" => "emptime",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto108 ["m_sql"] = "emptime.`11/6/2016 WK-45`";
	$proto108 ["m_srcTableName"] = "emptime";
	$proto108 ["m_expr"] = $obj;
	$proto108 ["m_alias"] = "Date45";
	$obj = new SQLFieldListItem ( $proto108 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto110 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "11/13/2016 WK-46",
			"m_strTable" => "emptime",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto110 ["m_sql"] = "emptime.`11/13/2016 WK-46`";
	$proto110 ["m_srcTableName"] = "emptime";
	$proto110 ["m_expr"] = $obj;
	$proto110 ["m_alias"] = "Date46";
	$obj = new SQLFieldListItem ( $proto110 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto112 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "11/20/2016 WK-47",
			"m_strTable" => "emptime",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto112 ["m_sql"] = "emptime.`11/20/2016 WK-47`";
	$proto112 ["m_srcTableName"] = "emptime";
	$proto112 ["m_expr"] = $obj;
	$proto112 ["m_alias"] = "Date47";
	$obj = new SQLFieldListItem ( $proto112 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto114 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "11/27/2016 WK-48",
			"m_strTable" => "emptime",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto114 ["m_sql"] = "emptime.`11/27/2016 WK-48`";
	$proto114 ["m_srcTableName"] = "emptime";
	$proto114 ["m_expr"] = $obj;
	$proto114 ["m_alias"] = "Date48";
	$obj = new SQLFieldListItem ( $proto114 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto116 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "12/4/2016 WK-49",
			"m_strTable" => "emptime",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto116 ["m_sql"] = "emptime.`12/4/2016 WK-49`";
	$proto116 ["m_srcTableName"] = "emptime";
	$proto116 ["m_expr"] = $obj;
	$proto116 ["m_alias"] = "Date49";
	$obj = new SQLFieldListItem ( $proto116 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto118 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "12/11/2016 WK-50",
			"m_strTable" => "emptime",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto118 ["m_sql"] = "emptime.`12/11/2016 WK-50`";
	$proto118 ["m_srcTableName"] = "emptime";
	$proto118 ["m_expr"] = $obj;
	$proto118 ["m_alias"] = "Date50";
	$obj = new SQLFieldListItem ( $proto118 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto120 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "12/18/2016 WK-51",
			"m_strTable" => "emptime",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto120 ["m_sql"] = "emptime.`12/18/2016 WK-51`";
	$proto120 ["m_srcTableName"] = "emptime";
	$proto120 ["m_expr"] = $obj;
	$proto120 ["m_alias"] = "Date51";
	$obj = new SQLFieldListItem ( $proto120 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto122 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "12/25/2016 WK-52",
			"m_strTable" => "emptime",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto122 ["m_sql"] = "emptime.`12/25/2016 WK-52`";
	$proto122 ["m_srcTableName"] = "emptime";
	$proto122 ["m_expr"] = $obj;
	$proto122 ["m_alias"] = "Date52";
	$obj = new SQLFieldListItem ( $proto122 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto124 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "1/1/2017 WK-53",
			"m_strTable" => "emptime",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto124 ["m_sql"] = "emptime.`1/1/2017 WK-53`";
	$proto124 ["m_srcTableName"] = "emptime";
	$proto124 ["m_expr"] = $obj;
	$proto124 ["m_alias"] = "Date53";
	$obj = new SQLFieldListItem ( $proto124 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto3 ["m_fromlist"] = array ();
	$proto126 = array ();
	$proto126 ["m_link"] = "SQLL_MAIN";
	$proto127 = array ();
	$proto127 ["m_strName"] = "emptime";
	$proto127 ["m_srcTableName"] = "emptime";
	$proto127 ["m_columns"] = array ();
	$proto127 ["m_columns"] [] = "AUTimeid";
	$proto127 ["m_columns"] [] = "EmployeeID";
	$proto127 ["m_columns"] [] = "1/3/2016 WK-1";
	$proto127 ["m_columns"] [] = "1/10/2016 WK-2";
	$proto127 ["m_columns"] [] = "1/17/2016 WK-3";
	$proto127 ["m_columns"] [] = "1/24/2016 WK-4";
	$proto127 ["m_columns"] [] = "1/31/2016 WK-5";
	$proto127 ["m_columns"] [] = "2/07/2016 WK-6";
	$proto127 ["m_columns"] [] = "2/14/2016 WK-7";
	$proto127 ["m_columns"] [] = "2/21/2016 WK-8";
	$proto127 ["m_columns"] [] = "2/28/2016 WK-9";
	$proto127 ["m_columns"] [] = "3/6/2016 WK-10";
	$proto127 ["m_columns"] [] = "3/13/2016 WK-11";
	$proto127 ["m_columns"] [] = "3/20/2016 WK-12";
	$proto127 ["m_columns"] [] = "3/27/2016 WK-13";
	$proto127 ["m_columns"] [] = "4/3/2016 WK-14";
	$proto127 ["m_columns"] [] = "4/10/2016 WK-15";
	$proto127 ["m_columns"] [] = "4/17/2016 WK-16";
	$proto127 ["m_columns"] [] = "4/24/2016 WK-17";
	$proto127 ["m_columns"] [] = "5/1/2016 WK-18";
	$proto127 ["m_columns"] [] = "5/8/2016 WK-19";
	$proto127 ["m_columns"] [] = "5/15/2016 WK-20";
	$proto127 ["m_columns"] [] = "5/22/2016 WK-21";
	$proto127 ["m_columns"] [] = "5/29/2016 WK-22";
	$proto127 ["m_columns"] [] = "6/5/2016 WK-23";
	$proto127 ["m_columns"] [] = "6/12/2016 WK-24";
	$proto127 ["m_columns"] [] = "6/19/2016 WK-25";
	$proto127 ["m_columns"] [] = "6/26/2016 WK-26";
	$proto127 ["m_columns"] [] = "7/3/2016 WK-27";
	$proto127 ["m_columns"] [] = "7/10/2016 WK-28";
	$proto127 ["m_columns"] [] = "7/17/2016 WK-29";
	$proto127 ["m_columns"] [] = "7/24/2016 WK-30";
	$proto127 ["m_columns"] [] = "7/31/2016 WK-31";
	$proto127 ["m_columns"] [] = "8/7/2016 WK-32";
	$proto127 ["m_columns"] [] = "8/14/2016 WK-33";
	$proto127 ["m_columns"] [] = "8/21/2016 WK-34";
	$proto127 ["m_columns"] [] = "8/28/2016 WK-35";
	$proto127 ["m_columns"] [] = "9/4/2016 WK-36";
	$proto127 ["m_columns"] [] = "9/11/2016 WK-37";
	$proto127 ["m_columns"] [] = "9/18/2016 WK-38";
	$proto127 ["m_columns"] [] = "9/25/2016 WK-39";
	$proto127 ["m_columns"] [] = "10/2/2016 WK-40";
	$proto127 ["m_columns"] [] = "10/9/2016 WK-41";
	$proto127 ["m_columns"] [] = "10/16/2016 WK-42";
	$proto127 ["m_columns"] [] = "10/23/2016 WK-43";
	$proto127 ["m_columns"] [] = "10/30/2016 WK-44";
	$proto127 ["m_columns"] [] = "11/6/2016 WK-45";
	$proto127 ["m_columns"] [] = "11/13/2016 WK-46";
	$proto127 ["m_columns"] [] = "11/20/2016 WK-47";
	$proto127 ["m_columns"] [] = "11/27/2016 WK-48";
	$proto127 ["m_columns"] [] = "12/4/2016 WK-49";
	$proto127 ["m_columns"] [] = "12/11/2016 WK-50";
	$proto127 ["m_columns"] [] = "12/18/2016 WK-51";
	$proto127 ["m_columns"] [] = "12/25/2016 WK-52";
	$proto127 ["m_columns"] [] = "1/1/2017 WK-53";
	$obj = new SQLTable ( $proto127 );
	
	$proto126 ["m_table"] = $obj;
	$proto126 ["m_sql"] = "emptime";
	$proto126 ["m_alias"] = "";
	$proto126 ["m_srcTableName"] = "emptime";
	$proto128 = array ();
	$proto128 ["m_sql"] = "";
	$proto128 ["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed ( array (
			"m_sql" => "" 
	) );
	
	$proto128 ["m_column"] = $obj;
	$proto128 ["m_contained"] = array ();
	$proto128 ["m_strCase"] = "";
	$proto128 ["m_havingmode"] = false;
	$proto128 ["m_inBrackets"] = false;
	$proto128 ["m_useAlias"] = false;
	$obj = new SQLLogicalExpr ( $proto128 );
	
	$proto126 ["m_joinon"] = $obj;
	$obj = new SQLFromListItem ( $proto126 );
	
	$proto3 ["m_fromlist"] [] = $obj;
	$proto130 = array ();
	$proto130 ["m_link"] = "SQLL_INNERJOIN";
	$proto131 = array ();
	$proto131 ["m_strName"] = "employee_header";
	$proto131 ["m_srcTableName"] = "emptime";
	$proto131 ["m_columns"] = array ();
	$proto131 ["m_columns"] [] = "EmployeeID";
	$proto131 ["m_columns"] [] = "FirstName";
	$proto131 ["m_columns"] [] = "LastName";
	$proto131 ["m_columns"] [] = "emailID";
	$proto131 ["m_columns"] [] = "Type";
	$proto131 ["m_columns"] [] = "SupervisorTitle";
	$proto131 ["m_columns"] [] = "Location";
	$proto131 ["m_columns"] [] = "SupervisorName";
	$proto131 ["m_columns"] [] = "InactiveDate";
	$proto131 ["m_columns"] [] = "created_by";
	$proto131 ["m_columns"] [] = "updated_by";
	$proto131 ["m_columns"] [] = "created_date";
	$proto131 ["m_columns"] [] = "updated_date";
	$proto131 ["m_columns"] [] = "StartDate";
	$proto131 ["m_columns"] [] = "EmployeeStatus";
	$proto131 ["m_columns"] [] = "Country";
	$proto131 ["m_columns"] [] = "Zip";
	$proto131 ["m_columns"] [] = "Role";
	$proto131 ["m_columns"] [] = "SupervisorID";
	$proto131 ["m_columns"] [] = "JobTitle";
	$obj = new SQLTable ( $proto131 );
	
	$proto130 ["m_table"] = $obj;
	$proto130 ["m_sql"] = "INNER JOIN employee_header ON emptime.EmployeeID = employee_header.EmployeeID";
	$proto130 ["m_alias"] = "";
	$proto130 ["m_srcTableName"] = "emptime";
	$proto132 = array ();
	$proto132 ["m_sql"] = "emptime.EmployeeID = employee_header.EmployeeID";
	$proto132 ["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLField ( array (
			"m_strName" => "EmployeeID",
			"m_strTable" => "emptime",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto132 ["m_column"] = $obj;
	$proto132 ["m_contained"] = array ();
	$proto132 ["m_strCase"] = "= employee_header.EmployeeID";
	$proto132 ["m_havingmode"] = false;
	$proto132 ["m_inBrackets"] = false;
	$proto132 ["m_useAlias"] = false;
	$obj = new SQLLogicalExpr ( $proto132 );
	
	$proto130 ["m_joinon"] = $obj;
	$obj = new SQLFromListItem ( $proto130 );
	
	$proto3 ["m_fromlist"] [] = $obj;
	$proto3 ["m_groupby"] = array ();
	$proto3 ["m_orderby"] = array ();
	$proto134 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "12/11/2016 WK-50",
			"m_strTable" => "emptime",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto134 ["m_column"] = $obj;
	$proto134 ["m_bAsc"] = 0;
	$proto134 ["m_nColumn"] = 0;
	$obj = new SQLOrderByItem ( $proto134 );
	
	$proto3 ["m_orderby"] [] = $obj;
	$proto136 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "FirstName",
			"m_strTable" => "employee_header",
			"m_srcTableName" => "emptime" 
	) );
	
	$proto136 ["m_column"] = $obj;
	$proto136 ["m_bAsc"] = 1;
	$proto136 ["m_nColumn"] = 0;
	$obj = new SQLOrderByItem ( $proto136 );
	
	$proto3 ["m_orderby"] [] = $obj;
	$proto3 ["m_srcTableName"] = "emptime";
	$obj = new SQLQuery ( $proto3 );
	
	return $obj;
}
$queryData_emptime = createSqlQuery_emptime ();

$tdataemptime [".sqlquery"] = $queryData_emptime;

include_once (getabspath ( "include/emptime_events.php" ));
$tableEvents ["emptime"] = new eventclass_emptime ();
$tdataemptime [".hasEvents"] = true;

?>