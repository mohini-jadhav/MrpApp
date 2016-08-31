<?php
require_once (getabspath ( "classes/cipherer.php" ));

$tdatatbl_allocation_input = array ();
$tdatatbl_allocation_input [".truncateText"] = true;
$tdatatbl_allocation_input [".NumberOfChars"] = 60;
$tdatatbl_allocation_input [".ShortName"] = "tbl_allocation_input";
$tdatatbl_allocation_input [".OwnerID"] = "";
$tdatatbl_allocation_input [".OriginalTable"] = "tbl_allocation_input";

// field labels
$fieldLabelstbl_allocation_input = array ();
$fieldToolTipstbl_allocation_input = array ();
$pageTitlestbl_allocation_input = array ();

if (mlang_getcurrentlang () == "English") {
	$fieldLabelstbl_allocation_input ["English"] = array ();
	$fieldToolTipstbl_allocation_input ["English"] = array ();
	$pageTitlestbl_allocation_input ["English"] = array ();
	$fieldLabelstbl_allocation_input ["English"] ["ID0"] = "ID0";
	$fieldToolTipstbl_allocation_input ["English"] ["ID0"] = "";
	$fieldLabelstbl_allocation_input ["English"] ["Start_Date"] = "Start Date";
	$fieldToolTipstbl_allocation_input ["English"] ["Start Date"] = "";
	$fieldLabelstbl_allocation_input ["English"] ["Weeks_Interval"] = "Weeks Interval";
	$fieldToolTipstbl_allocation_input ["English"] ["Weeks Interval"] = "";
	if (count ( $fieldToolTipstbl_allocation_input ["English"] ))
		$tdatatbl_allocation_input [".isUseToolTips"] = true;
}
if (mlang_getcurrentlang () == "") {
	$fieldLabelstbl_allocation_input [""] = array ();
	$fieldToolTipstbl_allocation_input [""] = array ();
	$pageTitlestbl_allocation_input [""] = array ();
	$fieldLabelstbl_allocation_input [""] ["ID0"] = "ID0";
	$fieldToolTipstbl_allocation_input [""] ["ID0"] = "";
	$fieldLabelstbl_allocation_input [""] ["Start_Date"] = "Start Date";
	$fieldToolTipstbl_allocation_input [""] ["Start Date"] = "";
	$fieldLabelstbl_allocation_input [""] ["Weeks_Interval"] = "Weeks Interval";
	$fieldToolTipstbl_allocation_input [""] ["Weeks Interval"] = "";
	if (count ( $fieldToolTipstbl_allocation_input [""] ))
		$tdatatbl_allocation_input [".isUseToolTips"] = true;
}

$tdatatbl_allocation_input [".NCSearch"] = true;

$tdatatbl_allocation_input [".shortTableName"] = "tbl_allocation_input";
$tdatatbl_allocation_input [".nSecOptions"] = 0;
$tdatatbl_allocation_input [".recsPerRowList"] = 1;
$tdatatbl_allocation_input [".recsPerRowPrint"] = 1;
$tdatatbl_allocation_input [".mainTableOwnerID"] = "";
$tdatatbl_allocation_input [".moveNext"] = 0;
$tdatatbl_allocation_input [".entityType"] = 0;

$tdatatbl_allocation_input [".strOriginalTableName"] = "tbl_allocation_input";

$tdatatbl_allocation_input [".showAddInPopup"] = true;

$tdatatbl_allocation_input [".showEditInPopup"] = true;

$tdatatbl_allocation_input [".showViewInPopup"] = true;

// page's base css files names
$popupPagesLayoutNames = array ();

;
$popupPagesLayoutNames ["add"] = "add2";

;
$popupPagesLayoutNames ["edit"] = "edit2";

;
$popupPagesLayoutNames ["view"] = "view2";
$tdatatbl_allocation_input [".popupPagesLayoutNames"] = $popupPagesLayoutNames;

$tdatatbl_allocation_input [".fieldsForRegister"] = array ();

if (! isMobile ())
	$tdatatbl_allocation_input [".listAjax"] = true;
else
	$tdatatbl_allocation_input [".listAjax"] = false;

$tdatatbl_allocation_input [".audit"] = false;

$tdatatbl_allocation_input [".locking"] = false;

$tdatatbl_allocation_input [".edit"] = true;
$tdatatbl_allocation_input [".afterEditAction"] = 1;
$tdatatbl_allocation_input [".closePopupAfterEdit"] = 1;
$tdatatbl_allocation_input [".afterEditActionDetTable"] = "";

$tdatatbl_allocation_input [".add"] = true;
$tdatatbl_allocation_input [".afterAddAction"] = 0;
$tdatatbl_allocation_input [".closePopupAfterAdd"] = 1;
$tdatatbl_allocation_input [".afterAddActionDetTable"] = "Detail tables not found!";

$tdatatbl_allocation_input [".list"] = true;

$tdatatbl_allocation_input [".view"] = true;

$tdatatbl_allocation_input [".import"] = true;

$tdatatbl_allocation_input [".exportTo"] = true;

$tdatatbl_allocation_input [".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatatbl_allocation_input [".searchSaving"] = false;
//

$tdatatbl_allocation_input [".showSearchPanel"] = true;
$tdatatbl_allocation_input [".flexibleSearch"] = true;

if (isMobile ())
	$tdatatbl_allocation_input [".isUseAjaxSuggest"] = false;
else
	$tdatatbl_allocation_input [".isUseAjaxSuggest"] = true;

$tdatatbl_allocation_input [".rowHighlite"] = true;

$tdatatbl_allocation_input [".isUsebuttonHandlers"] = true;

$tdatatbl_allocation_input [".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_allocation_input [".isUseTimeForSearch"] = false;

$tdatatbl_allocation_input [".allSearchFields"] = array ();
$tdatatbl_allocation_input [".filterFields"] = array ();
$tdatatbl_allocation_input [".requiredSearchFields"] = array ();

$tdatatbl_allocation_input [".googleLikeFields"] = array ();
$tdatatbl_allocation_input [".googleLikeFields"] [] = "Start Date";
$tdatatbl_allocation_input [".googleLikeFields"] [] = "Weeks Interval";
$tdatatbl_allocation_input [".googleLikeFields"] [] = "ID0";

$tdatatbl_allocation_input [".tableType"] = "list";

$tdatatbl_allocation_input [".printerPageOrientation"] = 0;
$tdatatbl_allocation_input [".nPrinterPageScale"] = 100;

$tdatatbl_allocation_input [".nPrinterSplitRecords"] = 40;

$tdatatbl_allocation_input [".nPrinterPDFSplitRecords"] = 40;

$tdatatbl_allocation_input [".geocodingEnabled"] = false;

// view page pdf

// print page pdf

$tdatatbl_allocation_input [".pageSize"] = 10;

$tdatatbl_allocation_input [".warnLeavingPages"] = true;

$tstrOrderBy = "";
if (strlen ( $tstrOrderBy ) && strtolower ( substr ( $tstrOrderBy, 0, 8 ) ) != "order by")
	$tstrOrderBy = "order by " . $tstrOrderBy;
$tdatatbl_allocation_input [".strOrderBy"] = $tstrOrderBy;

$tdatatbl_allocation_input [".orderindexes"] = array ();

$tdatatbl_allocation_input [".sqlHead"] = "SELECT `Start Date`,  `Weeks Interval`,  ID0";
$tdatatbl_allocation_input [".sqlFrom"] = "FROM tbl_allocation_input";
$tdatatbl_allocation_input [".sqlWhereExpr"] = "";
$tdatatbl_allocation_input [".sqlTail"] = "";

// fill array of records per page for list and report without group fields
$arrRPP = array ();
$arrRPP [] = 10;
$arrRPP [] = 20;
$arrRPP [] = 30;
$arrRPP [] = 50;
$arrRPP [] = 100;
$arrRPP [] = 500;
$arrRPP [] = - 1;
$tdatatbl_allocation_input [".arrRecsPerPage"] = $arrRPP;

// fill array of groups per page for report with group fields
$arrGPP = array ();
$arrGPP [] = 1;
$arrGPP [] = 3;
$arrGPP [] = 5;
$arrGPP [] = 10;
$arrGPP [] = 50;
$arrGPP [] = 100;
$arrGPP [] = - 1;
$tdatatbl_allocation_input [".arrGroupsPerPage"] = $arrGPP;

$tableKeystbl_allocation_input = array ();
$tableKeystbl_allocation_input [] = "ID0";
$tdatatbl_allocation_input [".Keys"] = $tableKeystbl_allocation_input;

$tdatatbl_allocation_input [".listFields"] = array ();
$tdatatbl_allocation_input [".listFields"] [] = "Start Date";
$tdatatbl_allocation_input [".listFields"] [] = "Weeks Interval";

$tdatatbl_allocation_input [".hideMobileList"] = array ();

$tdatatbl_allocation_input [".viewFields"] = array ();
$tdatatbl_allocation_input [".viewFields"] [] = "Start Date";
$tdatatbl_allocation_input [".viewFields"] [] = "Weeks Interval";

$tdatatbl_allocation_input [".addFields"] = array ();
$tdatatbl_allocation_input [".addFields"] [] = "Start Date";
$tdatatbl_allocation_input [".addFields"] [] = "Weeks Interval";

$tdatatbl_allocation_input [".masterListFields"] = array ();
$tdatatbl_allocation_input [".masterListFields"] [] = "Start Date";
$tdatatbl_allocation_input [".masterListFields"] [] = "Weeks Interval";
$tdatatbl_allocation_input [".masterListFields"] [] = "ID0";

$tdatatbl_allocation_input [".inlineAddFields"] = array ();

$tdatatbl_allocation_input [".editFields"] = array ();

$tdatatbl_allocation_input [".inlineEditFields"] = array ();

$tdatatbl_allocation_input [".exportFields"] = array ();
$tdatatbl_allocation_input [".exportFields"] [] = "Start Date";
$tdatatbl_allocation_input [".exportFields"] [] = "Weeks Interval";

$tdatatbl_allocation_input [".importFields"] = array ();
$tdatatbl_allocation_input [".importFields"] [] = "Start Date";
$tdatatbl_allocation_input [".importFields"] [] = "Weeks Interval";

$tdatatbl_allocation_input [".printFields"] = array ();

// Start Date
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 1;
$fdata ["strName"] = "Start Date";
$fdata ["GoodName"] = "Start_Date";
$fdata ["ownerTable"] = "tbl_allocation_input";
$fdata ["Label"] = GetFieldLabel ( "tbl_allocation_input", "Start_Date" );
$fdata ["FieldType"] = 7;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Start Date";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "`Start Date`";

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

$edata ["DateEditType"] = 5;
$edata ["InitialYearFactor"] = 100;
$edata ["LastYearFactor"] = 10;

$edata ["controlWidth"] = 200;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = false;

$tdatatbl_allocation_input ["Start Date"] = $fdata;
// Weeks Interval
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 2;
$fdata ["strName"] = "Weeks Interval";
$fdata ["GoodName"] = "Weeks_Interval";
$fdata ["ownerTable"] = "tbl_allocation_input";
$fdata ["Label"] = GetFieldLabel ( "tbl_allocation_input", "Weeks_Interval" );
$fdata ["FieldType"] = 3;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Weeks Interval";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "`Weeks Interval`";

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

$tdatatbl_allocation_input ["Weeks Interval"] = $fdata;
// ID0
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 3;
$fdata ["strName"] = "ID0";
$fdata ["GoodName"] = "ID0";
$fdata ["ownerTable"] = "tbl_allocation_input";
$fdata ["Label"] = GetFieldLabel ( "tbl_allocation_input", "ID0" );
$fdata ["FieldType"] = 3;

$fdata ["AutoInc"] = true;

$fdata ["strField"] = "ID0";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "ID0";

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

$tdatatbl_allocation_input ["ID0"] = $fdata;

$tables_data ["tbl_allocation_input"] = &$tdatatbl_allocation_input;
$field_labels ["tbl_allocation_input"] = &$fieldLabelstbl_allocation_input;
$fieldToolTips ["tbl_allocation_input"] = &$fieldToolTipstbl_allocation_input;
$page_titles ["tbl_allocation_input"] = &$pageTitlestbl_allocation_input;

// -----------------start prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData ["tbl_allocation_input"] = array ();

// tables which are master tables for current table (detail)
$masterTablesData ["tbl_allocation_input"] = array ();

// -----------------end prepare master-details data arrays ------------------------------//

require_once (getabspath ( "classes/sql.php" ));
function createSqlQuery_tbl_allocation_input() {
	$proto3 = array ();
	$proto3 ["m_strHead"] = "SELECT";
	$proto3 ["m_strFieldList"] = "`Start Date`,  `Weeks Interval`,  ID0";
	$proto3 ["m_strFrom"] = "FROM tbl_allocation_input";
	$proto3 ["m_strWhere"] = "";
	$proto3 ["m_strOrderBy"] = "";
	$proto3 ["m_strTail"] = "";
	$proto3 ["cipherer"] = null;
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
			"m_strName" => "Start Date",
			"m_strTable" => "tbl_allocation_input",
			"m_srcTableName" => "tbl_allocation_input" 
	) );
	
	$proto8 ["m_sql"] = "`Start Date`";
	$proto8 ["m_srcTableName"] = "tbl_allocation_input";
	$proto8 ["m_expr"] = $obj;
	$proto8 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto8 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto10 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Weeks Interval",
			"m_strTable" => "tbl_allocation_input",
			"m_srcTableName" => "tbl_allocation_input" 
	) );
	
	$proto10 ["m_sql"] = "`Weeks Interval`";
	$proto10 ["m_srcTableName"] = "tbl_allocation_input";
	$proto10 ["m_expr"] = $obj;
	$proto10 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto10 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto12 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "ID0",
			"m_strTable" => "tbl_allocation_input",
			"m_srcTableName" => "tbl_allocation_input" 
	) );
	
	$proto12 ["m_sql"] = "ID0";
	$proto12 ["m_srcTableName"] = "tbl_allocation_input";
	$proto12 ["m_expr"] = $obj;
	$proto12 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto12 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto3 ["m_fromlist"] = array ();
	$proto14 = array ();
	$proto14 ["m_link"] = "SQLL_MAIN";
	$proto15 = array ();
	$proto15 ["m_strName"] = "tbl_allocation_input";
	$proto15 ["m_srcTableName"] = "tbl_allocation_input";
	$proto15 ["m_columns"] = array ();
	$proto15 ["m_columns"] [] = "ID0";
	$proto15 ["m_columns"] [] = "Id";
	$proto15 ["m_columns"] [] = "Start Date";
	$proto15 ["m_columns"] [] = "Weeks Interval";
	$obj = new SQLTable ( $proto15 );
	
	$proto14 ["m_table"] = $obj;
	$proto14 ["m_sql"] = "tbl_allocation_input";
	$proto14 ["m_alias"] = "";
	$proto14 ["m_srcTableName"] = "tbl_allocation_input";
	$proto16 = array ();
	$proto16 ["m_sql"] = "";
	$proto16 ["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed ( array (
			"m_sql" => "" 
	) );
	
	$proto16 ["m_column"] = $obj;
	$proto16 ["m_contained"] = array ();
	$proto16 ["m_strCase"] = "";
	$proto16 ["m_havingmode"] = false;
	$proto16 ["m_inBrackets"] = false;
	$proto16 ["m_useAlias"] = false;
	$obj = new SQLLogicalExpr ( $proto16 );
	
	$proto14 ["m_joinon"] = $obj;
	$obj = new SQLFromListItem ( $proto14 );
	
	$proto3 ["m_fromlist"] [] = $obj;
	$proto3 ["m_groupby"] = array ();
	$proto3 ["m_orderby"] = array ();
	$proto3 ["m_srcTableName"] = "tbl_allocation_input";
	$obj = new SQLQuery ( $proto3 );
	
	return $obj;
}
$queryData_tbl_allocation_input = createSqlQuery_tbl_allocation_input ();

$tdatatbl_allocation_input [".sqlquery"] = $queryData_tbl_allocation_input;

include_once (getabspath ( "include/tbl_allocation_input_events.php" ));
$tableEvents ["tbl_allocation_input"] = new eventclass_tbl_allocation_input ();
$tdatatbl_allocation_input [".hasEvents"] = true;

?>