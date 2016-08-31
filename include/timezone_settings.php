<?php
require_once (getabspath ( "classes/cipherer.php" ));

$tdatatimezone = array ();
$tdatatimezone [".truncateText"] = true;
$tdatatimezone [".NumberOfChars"] = 60;
$tdatatimezone [".ShortName"] = "timezone";
$tdatatimezone [".OwnerID"] = "";
$tdatatimezone [".OriginalTable"] = "timezone";

// field labels
$fieldLabelstimezone = array ();
$fieldToolTipstimezone = array ();
$pageTitlestimezone = array ();

if (mlang_getcurrentlang () == "English") {
	$fieldLabelstimezone ["English"] = array ();
	$fieldToolTipstimezone ["English"] = array ();
	$pageTitlestimezone ["English"] = array ();
	$fieldLabelstimezone ["English"] ["AutTimeID"] = "Aut Time ID";
	$fieldToolTipstimezone ["English"] ["AutTimeID"] = "";
	$fieldLabelstimezone ["English"] ["TimeZone"] = "Time Zone";
	$fieldToolTipstimezone ["English"] ["TimeZone"] = "";
	if (count ( $fieldToolTipstimezone ["English"] ))
		$tdatatimezone [".isUseToolTips"] = true;
}
if (mlang_getcurrentlang () == "") {
	$fieldLabelstimezone [""] = array ();
	$fieldToolTipstimezone [""] = array ();
	$pageTitlestimezone [""] = array ();
	$fieldLabelstimezone [""] ["AutTimeID"] = "Aut Time ID";
	$fieldToolTipstimezone [""] ["AutTimeID"] = "";
	$fieldLabelstimezone [""] ["TimeZone"] = "Time Zone";
	$fieldToolTipstimezone [""] ["TimeZone"] = "";
	if (count ( $fieldToolTipstimezone [""] ))
		$tdatatimezone [".isUseToolTips"] = true;
}

$tdatatimezone [".NCSearch"] = true;

$tdatatimezone [".shortTableName"] = "timezone";
$tdatatimezone [".nSecOptions"] = 0;
$tdatatimezone [".recsPerRowList"] = 1;
$tdatatimezone [".recsPerRowPrint"] = 1;
$tdatatimezone [".mainTableOwnerID"] = "";
$tdatatimezone [".moveNext"] = 0;
$tdatatimezone [".entityType"] = 0;

$tdatatimezone [".strOriginalTableName"] = "timezone";

$tdatatimezone [".showAddInPopup"] = false;

$tdatatimezone [".showEditInPopup"] = false;

$tdatatimezone [".showViewInPopup"] = false;

// page's base css files names
$popupPagesLayoutNames = array ();
$tdatatimezone [".popupPagesLayoutNames"] = $popupPagesLayoutNames;

$tdatatimezone [".fieldsForRegister"] = array ();

$tdatatimezone [".listAjax"] = false;

$tdatatimezone [".audit"] = false;

$tdatatimezone [".locking"] = false;

$tdatatimezone [".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatatimezone [".searchSaving"] = false;
//

$tdatatimezone [".showSearchPanel"] = true;
$tdatatimezone [".flexibleSearch"] = true;

if (isMobile ())
	$tdatatimezone [".isUseAjaxSuggest"] = false;
else
	$tdatatimezone [".isUseAjaxSuggest"] = true;

$tdatatimezone [".rowHighlite"] = true;

$tdatatimezone [".addPageEvents"] = false;

// use timepicker for search panel
$tdatatimezone [".isUseTimeForSearch"] = false;

$tdatatimezone [".allSearchFields"] = array ();
$tdatatimezone [".filterFields"] = array ();
$tdatatimezone [".requiredSearchFields"] = array ();

$tdatatimezone [".googleLikeFields"] = array ();
$tdatatimezone [".googleLikeFields"] [] = "AutTimeID";
$tdatatimezone [".googleLikeFields"] [] = "TimeZone";

$tdatatimezone [".advSearchFields"] = array ();
$tdatatimezone [".advSearchFields"] [] = "AutTimeID";
$tdatatimezone [".advSearchFields"] [] = "TimeZone";

$tdatatimezone [".tableType"] = "list";

$tdatatimezone [".printerPageOrientation"] = 0;
$tdatatimezone [".nPrinterPageScale"] = 100;

$tdatatimezone [".nPrinterSplitRecords"] = 40;

$tdatatimezone [".nPrinterPDFSplitRecords"] = 40;

$tdatatimezone [".geocodingEnabled"] = false;

// view page pdf

// print page pdf

$tdatatimezone [".pageSize"] = 10;

$tdatatimezone [".warnLeavingPages"] = true;

$tstrOrderBy = "";
if (strlen ( $tstrOrderBy ) && strtolower ( substr ( $tstrOrderBy, 0, 8 ) ) != "order by")
	$tstrOrderBy = "order by " . $tstrOrderBy;
$tdatatimezone [".strOrderBy"] = $tstrOrderBy;

$tdatatimezone [".orderindexes"] = array ();

$tdatatimezone [".sqlHead"] = "SELECT AutTimeID,  	TimeZone";
$tdatatimezone [".sqlFrom"] = "FROM timezone";
$tdatatimezone [".sqlWhereExpr"] = "";
$tdatatimezone [".sqlTail"] = "";

// fill array of records per page for list and report without group fields
$arrRPP = array ();
$arrRPP [] = 10;
$arrRPP [] = 20;
$arrRPP [] = 30;
$arrRPP [] = 50;
$arrRPP [] = 100;
$arrRPP [] = 500;
$arrRPP [] = - 1;
$tdatatimezone [".arrRecsPerPage"] = $arrRPP;

// fill array of groups per page for report with group fields
$arrGPP = array ();
$arrGPP [] = 1;
$arrGPP [] = 3;
$arrGPP [] = 5;
$arrGPP [] = 10;
$arrGPP [] = 50;
$arrGPP [] = 100;
$arrGPP [] = - 1;
$tdatatimezone [".arrGroupsPerPage"] = $arrGPP;

$tableKeystimezone = array ();
$tableKeystimezone [] = "AutTimeID";
$tdatatimezone [".Keys"] = $tableKeystimezone;

$tdatatimezone [".listFields"] = array ();
$tdatatimezone [".listFields"] [] = "AutTimeID";
$tdatatimezone [".listFields"] [] = "TimeZone";

$tdatatimezone [".hideMobileList"] = array ();

$tdatatimezone [".viewFields"] = array ();
$tdatatimezone [".viewFields"] [] = "AutTimeID";
$tdatatimezone [".viewFields"] [] = "TimeZone";

$tdatatimezone [".addFields"] = array ();
$tdatatimezone [".addFields"] [] = "AutTimeID";
$tdatatimezone [".addFields"] [] = "TimeZone";

$tdatatimezone [".masterListFields"] = array ();
$tdatatimezone [".masterListFields"] [] = "AutTimeID";
$tdatatimezone [".masterListFields"] [] = "TimeZone";

$tdatatimezone [".inlineAddFields"] = array ();
$tdatatimezone [".inlineAddFields"] [] = "AutTimeID";
$tdatatimezone [".inlineAddFields"] [] = "TimeZone";

$tdatatimezone [".editFields"] = array ();
$tdatatimezone [".editFields"] [] = "AutTimeID";
$tdatatimezone [".editFields"] [] = "TimeZone";

$tdatatimezone [".inlineEditFields"] = array ();
$tdatatimezone [".inlineEditFields"] [] = "AutTimeID";
$tdatatimezone [".inlineEditFields"] [] = "TimeZone";

$tdatatimezone [".exportFields"] = array ();
$tdatatimezone [".exportFields"] [] = "AutTimeID";
$tdatatimezone [".exportFields"] [] = "TimeZone";

$tdatatimezone [".importFields"] = array ();
$tdatatimezone [".importFields"] [] = "AutTimeID";
$tdatatimezone [".importFields"] [] = "TimeZone";

$tdatatimezone [".printFields"] = array ();
$tdatatimezone [".printFields"] [] = "AutTimeID";
$tdatatimezone [".printFields"] [] = "TimeZone";

// AutTimeID
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 1;
$fdata ["strName"] = "AutTimeID";
$fdata ["GoodName"] = "AutTimeID";
$fdata ["ownerTable"] = "timezone";
$fdata ["Label"] = GetFieldLabel ( "timezone", "AutTimeID" );
$fdata ["FieldType"] = 3;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "AutTimeID";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "AutTimeID";

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

$tdatatimezone ["AutTimeID"] = $fdata;
// TimeZone
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 2;
$fdata ["strName"] = "TimeZone";
$fdata ["GoodName"] = "TimeZone";
$fdata ["ownerTable"] = "timezone";
$fdata ["Label"] = GetFieldLabel ( "timezone", "TimeZone" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "TimeZone";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "TimeZone";

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
$edata ["EditParams"] .= " maxlength=50";

$edata ["controlWidth"] = 200;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = false;

$tdatatimezone ["TimeZone"] = $fdata;

$tables_data ["timezone"] = &$tdatatimezone;
$field_labels ["timezone"] = &$fieldLabelstimezone;
$fieldToolTips ["timezone"] = &$fieldToolTipstimezone;
$page_titles ["timezone"] = &$pageTitlestimezone;

// -----------------start prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData ["timezone"] = array ();

// tables which are master tables for current table (detail)
$masterTablesData ["timezone"] = array ();

// -----------------end prepare master-details data arrays ------------------------------//

require_once (getabspath ( "classes/sql.php" ));
function createSqlQuery_timezone() {
	$proto0 = array ();
	$proto0 ["m_strHead"] = "SELECT";
	$proto0 ["m_strFieldList"] = "AutTimeID,  	TimeZone";
	$proto0 ["m_strFrom"] = "FROM timezone";
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
			"m_strName" => "AutTimeID",
			"m_strTable" => "timezone",
			"m_srcTableName" => "timezone" 
	) );
	
	$proto5 ["m_sql"] = "AutTimeID";
	$proto5 ["m_srcTableName"] = "timezone";
	$proto5 ["m_expr"] = $obj;
	$proto5 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto5 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto7 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "TimeZone",
			"m_strTable" => "timezone",
			"m_srcTableName" => "timezone" 
	) );
	
	$proto7 ["m_sql"] = "TimeZone";
	$proto7 ["m_srcTableName"] = "timezone";
	$proto7 ["m_expr"] = $obj;
	$proto7 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto7 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto0 ["m_fromlist"] = array ();
	$proto9 = array ();
	$proto9 ["m_link"] = "SQLL_MAIN";
	$proto10 = array ();
	$proto10 ["m_strName"] = "timezone";
	$proto10 ["m_srcTableName"] = "timezone";
	$proto10 ["m_columns"] = array ();
	$proto10 ["m_columns"] [] = "AutTimeID";
	$proto10 ["m_columns"] [] = "TimeZone";
	$obj = new SQLTable ( $proto10 );
	
	$proto9 ["m_table"] = $obj;
	$proto9 ["m_sql"] = "timezone";
	$proto9 ["m_alias"] = "";
	$proto9 ["m_srcTableName"] = "timezone";
	$proto11 = array ();
	$proto11 ["m_sql"] = "";
	$proto11 ["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed ( array (
			"m_sql" => "" 
	) );
	
	$proto11 ["m_column"] = $obj;
	$proto11 ["m_contained"] = array ();
	$proto11 ["m_strCase"] = "";
	$proto11 ["m_havingmode"] = false;
	$proto11 ["m_inBrackets"] = false;
	$proto11 ["m_useAlias"] = false;
	$obj = new SQLLogicalExpr ( $proto11 );
	
	$proto9 ["m_joinon"] = $obj;
	$obj = new SQLFromListItem ( $proto9 );
	
	$proto0 ["m_fromlist"] [] = $obj;
	$proto0 ["m_groupby"] = array ();
	$proto0 ["m_orderby"] = array ();
	$proto0 ["m_srcTableName"] = "timezone";
	$obj = new SQLQuery ( $proto0 );
	
	return $obj;
}
$queryData_timezone = createSqlQuery_timezone ();

$tdatatimezone [".sqlquery"] = $queryData_timezone;

$tableEvents ["timezone"] = new eventsBase ();
$tdatatimezone [".hasEvents"] = false;

?>