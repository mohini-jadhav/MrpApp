<?php
require_once (getabspath ( "classes/cipherer.php" ));

$tdatatbl_director1 = array ();
$tdatatbl_director1 [".truncateText"] = true;
$tdatatbl_director1 [".NumberOfChars"] = 60;
$tdatatbl_director1 [".ShortName"] = "tbl_director1";
$tdatatbl_director1 [".OwnerID"] = "";
$tdatatbl_director1 [".OriginalTable"] = "tbl_director";

// field labels
$fieldLabelstbl_director1 = array ();
$fieldToolTipstbl_director1 = array ();
$pageTitlestbl_director1 = array ();

if (mlang_getcurrentlang () == "English") {
	$fieldLabelstbl_director1 ["English"] = array ();
	$fieldToolTipstbl_director1 ["English"] = array ();
	$pageTitlestbl_director1 ["English"] = array ();
	$fieldLabelstbl_director1 ["English"] ["FullName"] = "Full Name";
	$fieldToolTipstbl_director1 ["English"] ["FullName"] = "";
	$fieldLabelstbl_director1 ["English"] ["SupervisorID"] = "Supervisor ID";
	$fieldToolTipstbl_director1 ["English"] ["SupervisorID"] = "";
	$fieldLabelstbl_director1 ["English"] ["FirstName"] = "First Name";
	$fieldToolTipstbl_director1 ["English"] ["FirstName"] = "";
	$fieldLabelstbl_director1 ["English"] ["LastName"] = "Last Name";
	$fieldToolTipstbl_director1 ["English"] ["LastName"] = "";
	if (count ( $fieldToolTipstbl_director1 ["English"] ))
		$tdatatbl_director1 [".isUseToolTips"] = true;
}
if (mlang_getcurrentlang () == "") {
	$fieldLabelstbl_director1 [""] = array ();
	$fieldToolTipstbl_director1 [""] = array ();
	$pageTitlestbl_director1 [""] = array ();
	if (count ( $fieldToolTipstbl_director1 [""] ))
		$tdatatbl_director1 [".isUseToolTips"] = true;
}

$tdatatbl_director1 [".NCSearch"] = true;

$tdatatbl_director1 [".shortTableName"] = "tbl_director1";
$tdatatbl_director1 [".nSecOptions"] = 0;
$tdatatbl_director1 [".recsPerRowList"] = 1;
$tdatatbl_director1 [".recsPerRowPrint"] = 1;
$tdatatbl_director1 [".mainTableOwnerID"] = "";
$tdatatbl_director1 [".moveNext"] = 0;
$tdatatbl_director1 [".entityType"] = 1;

$tdatatbl_director1 [".strOriginalTableName"] = "tbl_director";

$tdatatbl_director1 [".showAddInPopup"] = false;

$tdatatbl_director1 [".showEditInPopup"] = false;

$tdatatbl_director1 [".showViewInPopup"] = false;

// page's base css files names
$popupPagesLayoutNames = array ();
$tdatatbl_director1 [".popupPagesLayoutNames"] = $popupPagesLayoutNames;

$tdatatbl_director1 [".fieldsForRegister"] = array ();

$tdatatbl_director1 [".listAjax"] = false;

$tdatatbl_director1 [".audit"] = false;

$tdatatbl_director1 [".locking"] = false;

$tdatatbl_director1 [".edit"] = true;
$tdatatbl_director1 [".afterEditAction"] = 1;
$tdatatbl_director1 [".closePopupAfterEdit"] = 1;
$tdatatbl_director1 [".afterEditActionDetTable"] = "";

$tdatatbl_director1 [".add"] = true;
$tdatatbl_director1 [".afterAddAction"] = 1;
$tdatatbl_director1 [".closePopupAfterAdd"] = 1;
$tdatatbl_director1 [".afterAddActionDetTable"] = "";

$tdatatbl_director1 [".list"] = true;

$tdatatbl_director1 [".import"] = true;

$tdatatbl_director1 [".exportTo"] = true;

$tdatatbl_director1 [".printFriendly"] = true;

$tdatatbl_director1 [".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatatbl_director1 [".searchSaving"] = false;
//

$tdatatbl_director1 [".showSearchPanel"] = true;
$tdatatbl_director1 [".flexibleSearch"] = true;

if (isMobile ())
	$tdatatbl_director1 [".isUseAjaxSuggest"] = false;
else
	$tdatatbl_director1 [".isUseAjaxSuggest"] = true;

$tdatatbl_director1 [".rowHighlite"] = true;

$tdatatbl_director1 [".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_director1 [".isUseTimeForSearch"] = false;

$tdatatbl_director1 [".allSearchFields"] = array ();
$tdatatbl_director1 [".filterFields"] = array ();
$tdatatbl_director1 [".requiredSearchFields"] = array ();

$tdatatbl_director1 [".allSearchFields"] [] = "LastName";
$tdatatbl_director1 [".allSearchFields"] [] = "FirstName";
$tdatatbl_director1 [".allSearchFields"] [] = "SupervisorID";
$tdatatbl_director1 [".allSearchFields"] [] = "FullName";

$tdatatbl_director1 [".googleLikeFields"] = array ();
$tdatatbl_director1 [".googleLikeFields"] [] = "SupervisorID";
$tdatatbl_director1 [".googleLikeFields"] [] = "FullName";
$tdatatbl_director1 [".googleLikeFields"] [] = "FirstName";
$tdatatbl_director1 [".googleLikeFields"] [] = "LastName";

$tdatatbl_director1 [".advSearchFields"] = array ();
$tdatatbl_director1 [".advSearchFields"] [] = "LastName";
$tdatatbl_director1 [".advSearchFields"] [] = "FirstName";
$tdatatbl_director1 [".advSearchFields"] [] = "SupervisorID";
$tdatatbl_director1 [".advSearchFields"] [] = "FullName";

$tdatatbl_director1 [".tableType"] = "list";

$tdatatbl_director1 [".printerPageOrientation"] = 0;
$tdatatbl_director1 [".nPrinterPageScale"] = 100;

$tdatatbl_director1 [".nPrinterSplitRecords"] = 40;

$tdatatbl_director1 [".nPrinterPDFSplitRecords"] = 40;

$tdatatbl_director1 [".geocodingEnabled"] = false;

// view page pdf

// print page pdf

$tdatatbl_director1 [".pageSize"] = 10;

$tdatatbl_director1 [".warnLeavingPages"] = true;

$tstrOrderBy = "";
if (strlen ( $tstrOrderBy ) && strtolower ( substr ( $tstrOrderBy, 0, 8 ) ) != "order by")
	$tstrOrderBy = "order by " . $tstrOrderBy;
$tdatatbl_director1 [".strOrderBy"] = $tstrOrderBy;

$tdatatbl_director1 [".orderindexes"] = array ();

$tdatatbl_director1 [".sqlHead"] = "SELECT SupervisorID,  FullName,  FirstName,  LastName";
$tdatatbl_director1 [".sqlFrom"] = "FROM tbl_director";
$tdatatbl_director1 [".sqlWhereExpr"] = "";
$tdatatbl_director1 [".sqlTail"] = "";

// fill array of records per page for list and report without group fields
$arrRPP = array ();
$arrRPP [] = 10;
$arrRPP [] = 20;
$arrRPP [] = 30;
$arrRPP [] = 50;
$arrRPP [] = 100;
$arrRPP [] = 500;
$arrRPP [] = - 1;
$tdatatbl_director1 [".arrRecsPerPage"] = $arrRPP;

// fill array of groups per page for report with group fields
$arrGPP = array ();
$arrGPP [] = 1;
$arrGPP [] = 3;
$arrGPP [] = 5;
$arrGPP [] = 10;
$arrGPP [] = 50;
$arrGPP [] = 100;
$arrGPP [] = - 1;
$tdatatbl_director1 [".arrGroupsPerPage"] = $arrGPP;

$tableKeystbl_director1 = array ();
$tableKeystbl_director1 [] = "SupervisorID";
$tdatatbl_director1 [".Keys"] = $tableKeystbl_director1;

$tdatatbl_director1 [".listFields"] = array ();
$tdatatbl_director1 [".listFields"] [] = "LastName";
$tdatatbl_director1 [".listFields"] [] = "FirstName";
$tdatatbl_director1 [".listFields"] [] = "SupervisorID";
$tdatatbl_director1 [".listFields"] [] = "FullName";

$tdatatbl_director1 [".hideMobileList"] = array ();

$tdatatbl_director1 [".viewFields"] = array ();

$tdatatbl_director1 [".addFields"] = array ();
$tdatatbl_director1 [".addFields"] [] = "LastName";
$tdatatbl_director1 [".addFields"] [] = "FirstName";
$tdatatbl_director1 [".addFields"] [] = "SupervisorID";
$tdatatbl_director1 [".addFields"] [] = "FullName";

$tdatatbl_director1 [".masterListFields"] = array ();
$tdatatbl_director1 [".masterListFields"] [] = "SupervisorID";
$tdatatbl_director1 [".masterListFields"] [] = "FullName";
$tdatatbl_director1 [".masterListFields"] [] = "FirstName";
$tdatatbl_director1 [".masterListFields"] [] = "LastName";

$tdatatbl_director1 [".inlineAddFields"] = array ();

$tdatatbl_director1 [".editFields"] = array ();
$tdatatbl_director1 [".editFields"] [] = "LastName";
$tdatatbl_director1 [".editFields"] [] = "FirstName";
$tdatatbl_director1 [".editFields"] [] = "SupervisorID";
$tdatatbl_director1 [".editFields"] [] = "FullName";

$tdatatbl_director1 [".inlineEditFields"] = array ();

$tdatatbl_director1 [".exportFields"] = array ();
$tdatatbl_director1 [".exportFields"] [] = "LastName";
$tdatatbl_director1 [".exportFields"] [] = "FirstName";
$tdatatbl_director1 [".exportFields"] [] = "SupervisorID";
$tdatatbl_director1 [".exportFields"] [] = "FullName";

$tdatatbl_director1 [".importFields"] = array ();
$tdatatbl_director1 [".importFields"] [] = "SupervisorID";
$tdatatbl_director1 [".importFields"] [] = "FullName";
$tdatatbl_director1 [".importFields"] [] = "FirstName";
$tdatatbl_director1 [".importFields"] [] = "LastName";

$tdatatbl_director1 [".printFields"] = array ();
$tdatatbl_director1 [".printFields"] [] = "LastName";
$tdatatbl_director1 [".printFields"] [] = "FirstName";
$tdatatbl_director1 [".printFields"] [] = "SupervisorID";
$tdatatbl_director1 [".printFields"] [] = "FullName";

// SupervisorID
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 1;
$fdata ["strName"] = "SupervisorID";
$fdata ["GoodName"] = "SupervisorID";
$fdata ["ownerTable"] = "tbl_director";
$fdata ["Label"] = GetFieldLabel ( "tbl_director1", "SupervisorID" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "SupervisorID";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "SupervisorID";

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
$edata ["EditParams"] .= " maxlength=11";

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

$tdatatbl_director1 ["SupervisorID"] = $fdata;
// FullName
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 2;
$fdata ["strName"] = "FullName";
$fdata ["GoodName"] = "FullName";
$fdata ["ownerTable"] = "tbl_director";
$fdata ["Label"] = GetFieldLabel ( "tbl_director1", "FullName" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "FullName";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "FullName";

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
$edata ["EditParams"] .= " maxlength=100";

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

$tdatatbl_director1 ["FullName"] = $fdata;
// FirstName
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 3;
$fdata ["strName"] = "FirstName";
$fdata ["GoodName"] = "FirstName";
$fdata ["ownerTable"] = "tbl_director";
$fdata ["Label"] = GetFieldLabel ( "tbl_director1", "FirstName" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "FirstName";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "FirstName";

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

$tdatatbl_director1 ["FirstName"] = $fdata;
// LastName
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 4;
$fdata ["strName"] = "LastName";
$fdata ["GoodName"] = "LastName";
$fdata ["ownerTable"] = "tbl_director";
$fdata ["Label"] = GetFieldLabel ( "tbl_director1", "LastName" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "LastName";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "LastName";

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

$tdatatbl_director1 ["LastName"] = $fdata;

$tables_data ["tbl_director1"] = &$tdatatbl_director1;
$field_labels ["tbl_director1"] = &$fieldLabelstbl_director1;
$fieldToolTips ["tbl_director1"] = &$fieldToolTipstbl_director1;
$page_titles ["tbl_director1"] = &$pageTitlestbl_director1;

// -----------------start prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData ["tbl_director1"] = array ();

// tables which are master tables for current table (detail)
$masterTablesData ["tbl_director1"] = array ();

// -----------------end prepare master-details data arrays ------------------------------//

require_once (getabspath ( "classes/sql.php" ));
function createSqlQuery_tbl_director1() {
	$proto0 = array ();
	$proto0 ["m_strHead"] = "SELECT";
	$proto0 ["m_strFieldList"] = "SupervisorID,  FullName,  FirstName,  LastName";
	$proto0 ["m_strFrom"] = "FROM tbl_director";
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
			"m_strName" => "SupervisorID",
			"m_strTable" => "tbl_director",
			"m_srcTableName" => "tbl_director1" 
	) );
	
	$proto5 ["m_sql"] = "SupervisorID";
	$proto5 ["m_srcTableName"] = "tbl_director1";
	$proto5 ["m_expr"] = $obj;
	$proto5 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto5 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto7 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "FullName",
			"m_strTable" => "tbl_director",
			"m_srcTableName" => "tbl_director1" 
	) );
	
	$proto7 ["m_sql"] = "FullName";
	$proto7 ["m_srcTableName"] = "tbl_director1";
	$proto7 ["m_expr"] = $obj;
	$proto7 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto7 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto9 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "FirstName",
			"m_strTable" => "tbl_director",
			"m_srcTableName" => "tbl_director1" 
	) );
	
	$proto9 ["m_sql"] = "FirstName";
	$proto9 ["m_srcTableName"] = "tbl_director1";
	$proto9 ["m_expr"] = $obj;
	$proto9 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto9 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto11 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "LastName",
			"m_strTable" => "tbl_director",
			"m_srcTableName" => "tbl_director1" 
	) );
	
	$proto11 ["m_sql"] = "LastName";
	$proto11 ["m_srcTableName"] = "tbl_director1";
	$proto11 ["m_expr"] = $obj;
	$proto11 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto11 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto0 ["m_fromlist"] = array ();
	$proto13 = array ();
	$proto13 ["m_link"] = "SQLL_MAIN";
	$proto14 = array ();
	$proto14 ["m_strName"] = "tbl_director";
	$proto14 ["m_srcTableName"] = "tbl_director1";
	$proto14 ["m_columns"] = array ();
	$proto14 ["m_columns"] [] = "SupervisorID";
	$proto14 ["m_columns"] [] = "FirstName";
	$proto14 ["m_columns"] [] = "LastName";
	$proto14 ["m_columns"] [] = "FullName";
	$obj = new SQLTable ( $proto14 );
	
	$proto13 ["m_table"] = $obj;
	$proto13 ["m_sql"] = "tbl_director";
	$proto13 ["m_alias"] = "";
	$proto13 ["m_srcTableName"] = "tbl_director1";
	$proto15 = array ();
	$proto15 ["m_sql"] = "";
	$proto15 ["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed ( array (
			"m_sql" => "" 
	) );
	
	$proto15 ["m_column"] = $obj;
	$proto15 ["m_contained"] = array ();
	$proto15 ["m_strCase"] = "";
	$proto15 ["m_havingmode"] = false;
	$proto15 ["m_inBrackets"] = false;
	$proto15 ["m_useAlias"] = false;
	$obj = new SQLLogicalExpr ( $proto15 );
	
	$proto13 ["m_joinon"] = $obj;
	$obj = new SQLFromListItem ( $proto13 );
	
	$proto0 ["m_fromlist"] [] = $obj;
	$proto0 ["m_groupby"] = array ();
	$proto0 ["m_orderby"] = array ();
	$proto0 ["m_srcTableName"] = "tbl_director1";
	$obj = new SQLQuery ( $proto0 );
	
	return $obj;
}
$queryData_tbl_director1 = createSqlQuery_tbl_director1 ();

$tdatatbl_director1 [".sqlquery"] = $queryData_tbl_director1;

$tableEvents ["tbl_director1"] = new eventsBase ();
$tdatatbl_director1 [".hasEvents"] = false;

?>