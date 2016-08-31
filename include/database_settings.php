<?php
require_once (getabspath ( "classes/cipherer.php" ));

$tdatadatabase = array ();
$tdatadatabase [".truncateText"] = true;
$tdatadatabase [".NumberOfChars"] = 60;
$tdatadatabase [".ShortName"] = "database";
$tdatadatabase [".OwnerID"] = "";
$tdatadatabase [".OriginalTable"] = "database";

// field labels
$fieldLabelsdatabase = array ();
$fieldToolTipsdatabase = array ();
$pageTitlesdatabase = array ();

if (mlang_getcurrentlang () == "English") {
	$fieldLabelsdatabase ["English"] = array ();
	$fieldToolTipsdatabase ["English"] = array ();
	$pageTitlesdatabase ["English"] = array ();
	$fieldLabelsdatabase ["English"] ["AutDatabaseID"] = "Aut Database ID";
	$fieldToolTipsdatabase ["English"] ["AutDatabaseID"] = "";
	$fieldLabelsdatabase ["English"] ["Database"] = "Database";
	$fieldToolTipsdatabase ["English"] ["Database"] = "";
	if (count ( $fieldToolTipsdatabase ["English"] ))
		$tdatadatabase [".isUseToolTips"] = true;
}
if (mlang_getcurrentlang () == "") {
	$fieldLabelsdatabase [""] = array ();
	$fieldToolTipsdatabase [""] = array ();
	$pageTitlesdatabase [""] = array ();
	if (count ( $fieldToolTipsdatabase [""] ))
		$tdatadatabase [".isUseToolTips"] = true;
}

$tdatadatabase [".NCSearch"] = true;

$tdatadatabase [".shortTableName"] = "database";
$tdatadatabase [".nSecOptions"] = 0;
$tdatadatabase [".recsPerRowList"] = 1;
$tdatadatabase [".recsPerRowPrint"] = 1;
$tdatadatabase [".mainTableOwnerID"] = "";
$tdatadatabase [".moveNext"] = 1;
$tdatadatabase [".entityType"] = 0;

$tdatadatabase [".strOriginalTableName"] = "database";

$tdatadatabase [".showAddInPopup"] = false;

$tdatadatabase [".showEditInPopup"] = false;

$tdatadatabase [".showViewInPopup"] = false;

// page's base css files names
$popupPagesLayoutNames = array ();
$tdatadatabase [".popupPagesLayoutNames"] = $popupPagesLayoutNames;

$tdatadatabase [".fieldsForRegister"] = array ();

$tdatadatabase [".listAjax"] = false;

$tdatadatabase [".audit"] = false;

$tdatadatabase [".locking"] = false;

$tdatadatabase [".add"] = true;
$tdatadatabase [".afterAddAction"] = 1;
$tdatadatabase [".closePopupAfterAdd"] = 1;
$tdatadatabase [".afterAddActionDetTable"] = "";

$tdatadatabase [".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatadatabase [".searchSaving"] = false;
//

$tdatadatabase [".showSearchPanel"] = true;
$tdatadatabase [".flexibleSearch"] = true;

if (isMobile ())
	$tdatadatabase [".isUseAjaxSuggest"] = false;
else
	$tdatadatabase [".isUseAjaxSuggest"] = true;

$tdatadatabase [".rowHighlite"] = true;

$tdatadatabase [".addPageEvents"] = false;

// use timepicker for search panel
$tdatadatabase [".isUseTimeForSearch"] = false;

$tdatadatabase [".allSearchFields"] = array ();
$tdatadatabase [".filterFields"] = array ();
$tdatadatabase [".requiredSearchFields"] = array ();

$tdatadatabase [".googleLikeFields"] = array ();
$tdatadatabase [".googleLikeFields"] [] = "AutDatabaseID";
$tdatadatabase [".googleLikeFields"] [] = "Database";

$tdatadatabase [".advSearchFields"] = array ();
$tdatadatabase [".advSearchFields"] [] = "AutDatabaseID";
$tdatadatabase [".advSearchFields"] [] = "Database";

$tdatadatabase [".tableType"] = "list";

$tdatadatabase [".printerPageOrientation"] = 0;
$tdatadatabase [".nPrinterPageScale"] = 100;

$tdatadatabase [".nPrinterSplitRecords"] = 40;

$tdatadatabase [".nPrinterPDFSplitRecords"] = 40;

$tdatadatabase [".geocodingEnabled"] = false;

$tdatadatabase [".isDisplayLoading"] = true;

// view page pdf

// print page pdf

$tdatadatabase [".pageSize"] = 10;

$tdatadatabase [".warnLeavingPages"] = true;

$tstrOrderBy = "";
if (strlen ( $tstrOrderBy ) && strtolower ( substr ( $tstrOrderBy, 0, 8 ) ) != "order by")
	$tstrOrderBy = "order by " . $tstrOrderBy;
$tdatadatabase [".strOrderBy"] = $tstrOrderBy;

$tdatadatabase [".orderindexes"] = array ();

$tdatadatabase [".sqlHead"] = "SELECT AutDatabaseID,  	`Database`";
$tdatadatabase [".sqlFrom"] = "FROM `database`";
$tdatadatabase [".sqlWhereExpr"] = "";
$tdatadatabase [".sqlTail"] = "";

// fill array of records per page for list and report without group fields
$arrRPP = array ();
$arrRPP [] = 10;
$arrRPP [] = 20;
$arrRPP [] = 30;
$arrRPP [] = 50;
$arrRPP [] = 100;
$arrRPP [] = 500;
$arrRPP [] = - 1;
$tdatadatabase [".arrRecsPerPage"] = $arrRPP;

// fill array of groups per page for report with group fields
$arrGPP = array ();
$arrGPP [] = 1;
$arrGPP [] = 3;
$arrGPP [] = 5;
$arrGPP [] = 10;
$arrGPP [] = 50;
$arrGPP [] = 100;
$arrGPP [] = - 1;
$tdatadatabase [".arrGroupsPerPage"] = $arrGPP;

$tableKeysdatabase = array ();
$tableKeysdatabase [] = "AutDatabaseID";
$tdatadatabase [".Keys"] = $tableKeysdatabase;

$tdatadatabase [".listFields"] = array ();

$tdatadatabase [".hideMobileList"] = array ();

$tdatadatabase [".viewFields"] = array ();

$tdatadatabase [".addFields"] = array ();
$tdatadatabase [".addFields"] [] = "Database";

$tdatadatabase [".masterListFields"] = array ();
$tdatadatabase [".masterListFields"] [] = "AutDatabaseID";
$tdatadatabase [".masterListFields"] [] = "Database";

$tdatadatabase [".inlineAddFields"] = array ();

$tdatadatabase [".editFields"] = array ();

$tdatadatabase [".inlineEditFields"] = array ();

$tdatadatabase [".exportFields"] = array ();

$tdatadatabase [".importFields"] = array ();

$tdatadatabase [".printFields"] = array ();

// AutDatabaseID
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 1;
$fdata ["strName"] = "AutDatabaseID";
$fdata ["GoodName"] = "AutDatabaseID";
$fdata ["ownerTable"] = "database";
$fdata ["Label"] = GetFieldLabel ( "database", "AutDatabaseID" );
$fdata ["FieldType"] = 3;

$fdata ["AutoInc"] = true;

$fdata ["strField"] = "AutDatabaseID";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "AutDatabaseID";

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

$tdatadatabase ["AutDatabaseID"] = $fdata;
// Database
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 2;
$fdata ["strName"] = "Database";
$fdata ["GoodName"] = "Database";
$fdata ["ownerTable"] = "database";
$fdata ["Label"] = GetFieldLabel ( "database", "Database" );
$fdata ["FieldType"] = 200;

$fdata ["bAddPage"] = true;

$fdata ["strField"] = "Database";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "`Database`";

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
$edata ["EditParams"] .= " maxlength=100";

$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = false;

$tdatadatabase ["Database"] = $fdata;

$tables_data ["database"] = &$tdatadatabase;
$field_labels ["database"] = &$fieldLabelsdatabase;
$fieldToolTips ["database"] = &$fieldToolTipsdatabase;
$page_titles ["database"] = &$pageTitlesdatabase;

// -----------------start prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData ["database"] = array ();

// tables which are master tables for current table (detail)
$masterTablesData ["database"] = array ();

// -----------------end prepare master-details data arrays ------------------------------//

require_once (getabspath ( "classes/sql.php" ));
function createSqlQuery_database() {
	$proto0 = array ();
	$proto0 ["m_strHead"] = "SELECT";
	$proto0 ["m_strFieldList"] = "AutDatabaseID,  	`Database`";
	$proto0 ["m_strFrom"] = "FROM `database`";
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
			"m_strName" => "AutDatabaseID",
			"m_strTable" => "database",
			"m_srcTableName" => "database" 
	) );
	
	$proto5 ["m_sql"] = "AutDatabaseID";
	$proto5 ["m_srcTableName"] = "database";
	$proto5 ["m_expr"] = $obj;
	$proto5 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto5 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto7 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Database",
			"m_strTable" => "database",
			"m_srcTableName" => "database" 
	) );
	
	$proto7 ["m_sql"] = "`Database`";
	$proto7 ["m_srcTableName"] = "database";
	$proto7 ["m_expr"] = $obj;
	$proto7 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto7 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto0 ["m_fromlist"] = array ();
	$proto9 = array ();
	$proto9 ["m_link"] = "SQLL_MAIN";
	$proto10 = array ();
	$proto10 ["m_strName"] = "database";
	$proto10 ["m_srcTableName"] = "database";
	$proto10 ["m_columns"] = array ();
	$proto10 ["m_columns"] [] = "AutDatabaseID";
	$proto10 ["m_columns"] [] = "Database";
	$obj = new SQLTable ( $proto10 );
	
	$proto9 ["m_table"] = $obj;
	$proto9 ["m_sql"] = "`database`";
	$proto9 ["m_alias"] = "";
	$proto9 ["m_srcTableName"] = "database";
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
	$proto0 ["m_srcTableName"] = "database";
	$obj = new SQLQuery ( $proto0 );
	
	return $obj;
}
$queryData_database = createSqlQuery_database ();

$tdatadatabase [".sqlquery"] = $queryData_database;

$tableEvents ["database"] = new eventsBase ();
$tdatadatabase [".hasEvents"] = false;

?>