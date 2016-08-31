<?php
require_once (getabspath ( "classes/cipherer.php" ));

$tdatatbl_director = array ();
$tdatatbl_director [".truncateText"] = true;
$tdatatbl_director [".NumberOfChars"] = 60;
$tdatatbl_director [".ShortName"] = "tbl_director";
$tdatatbl_director [".OwnerID"] = "";
$tdatatbl_director [".OriginalTable"] = "tbl_director";

// field labels
$fieldLabelstbl_director = array ();
$fieldToolTipstbl_director = array ();
$pageTitlestbl_director = array ();

if (mlang_getcurrentlang () == "English") {
	$fieldLabelstbl_director ["English"] = array ();
	$fieldToolTipstbl_director ["English"] = array ();
	$pageTitlestbl_director ["English"] = array ();
	$fieldLabelstbl_director ["English"] ["FullName"] = "Full Name";
	$fieldToolTipstbl_director ["English"] ["FullName"] = "";
	$fieldLabelstbl_director ["English"] ["SupervisorID"] = "Supervisor ID";
	$fieldToolTipstbl_director ["English"] ["SupervisorID"] = "";
	$fieldLabelstbl_director ["English"] ["FirstName"] = "First Name";
	$fieldToolTipstbl_director ["English"] ["FirstName"] = "";
	$fieldLabelstbl_director ["English"] ["LastName"] = "Last Name";
	$fieldToolTipstbl_director ["English"] ["LastName"] = "";
	if (count ( $fieldToolTipstbl_director ["English"] ))
		$tdatatbl_director [".isUseToolTips"] = true;
}
if (mlang_getcurrentlang () == "") {
	$fieldLabelstbl_director [""] = array ();
	$fieldToolTipstbl_director [""] = array ();
	$pageTitlestbl_director [""] = array ();
	if (count ( $fieldToolTipstbl_director [""] ))
		$tdatatbl_director [".isUseToolTips"] = true;
}

$tdatatbl_director [".NCSearch"] = true;

$tdatatbl_director [".shortTableName"] = "tbl_director";
$tdatatbl_director [".nSecOptions"] = 0;
$tdatatbl_director [".recsPerRowList"] = 1;
$tdatatbl_director [".recsPerRowPrint"] = 1;
$tdatatbl_director [".mainTableOwnerID"] = "";
$tdatatbl_director [".moveNext"] = 0;
$tdatatbl_director [".entityType"] = 0;

$tdatatbl_director [".strOriginalTableName"] = "tbl_director";

$tdatatbl_director [".showAddInPopup"] = false;

$tdatatbl_director [".showEditInPopup"] = false;

$tdatatbl_director [".showViewInPopup"] = false;

// page's base css files names
$popupPagesLayoutNames = array ();
$tdatatbl_director [".popupPagesLayoutNames"] = $popupPagesLayoutNames;

$tdatatbl_director [".fieldsForRegister"] = array ();

$tdatatbl_director [".listAjax"] = false;

$tdatatbl_director [".audit"] = false;

$tdatatbl_director [".locking"] = false;

$tdatatbl_director [".edit"] = true;
$tdatatbl_director [".afterEditAction"] = 1;
$tdatatbl_director [".closePopupAfterEdit"] = 1;
$tdatatbl_director [".afterEditActionDetTable"] = "";

$tdatatbl_director [".add"] = true;
$tdatatbl_director [".afterAddAction"] = 1;
$tdatatbl_director [".closePopupAfterAdd"] = 1;
$tdatatbl_director [".afterAddActionDetTable"] = "";

$tdatatbl_director [".list"] = true;

$tdatatbl_director [".import"] = true;

$tdatatbl_director [".exportTo"] = true;

$tdatatbl_director [".printFriendly"] = true;

$tdatatbl_director [".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatatbl_director [".searchSaving"] = false;
//

$tdatatbl_director [".showSearchPanel"] = true;
$tdatatbl_director [".flexibleSearch"] = true;

if (isMobile ())
	$tdatatbl_director [".isUseAjaxSuggest"] = false;
else
	$tdatatbl_director [".isUseAjaxSuggest"] = true;

$tdatatbl_director [".rowHighlite"] = true;

$tdatatbl_director [".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_director [".isUseTimeForSearch"] = false;

$tdatatbl_director [".allSearchFields"] = array ();
$tdatatbl_director [".filterFields"] = array ();
$tdatatbl_director [".requiredSearchFields"] = array ();

$tdatatbl_director [".allSearchFields"] [] = "LastName";
$tdatatbl_director [".allSearchFields"] [] = "FirstName";
$tdatatbl_director [".allSearchFields"] [] = "SupervisorID";
$tdatatbl_director [".allSearchFields"] [] = "FullName";

$tdatatbl_director [".googleLikeFields"] = array ();
$tdatatbl_director [".googleLikeFields"] [] = "SupervisorID";
$tdatatbl_director [".googleLikeFields"] [] = "FullName";
$tdatatbl_director [".googleLikeFields"] [] = "FirstName";
$tdatatbl_director [".googleLikeFields"] [] = "LastName";

$tdatatbl_director [".advSearchFields"] = array ();
$tdatatbl_director [".advSearchFields"] [] = "LastName";
$tdatatbl_director [".advSearchFields"] [] = "FirstName";
$tdatatbl_director [".advSearchFields"] [] = "SupervisorID";
$tdatatbl_director [".advSearchFields"] [] = "FullName";

$tdatatbl_director [".tableType"] = "list";

$tdatatbl_director [".printerPageOrientation"] = 0;
$tdatatbl_director [".nPrinterPageScale"] = 100;

$tdatatbl_director [".nPrinterSplitRecords"] = 40;

$tdatatbl_director [".nPrinterPDFSplitRecords"] = 40;

$tdatatbl_director [".geocodingEnabled"] = false;

// view page pdf

// print page pdf

$tdatatbl_director [".pageSize"] = 10;

$tdatatbl_director [".warnLeavingPages"] = true;

$tstrOrderBy = "";
if (strlen ( $tstrOrderBy ) && strtolower ( substr ( $tstrOrderBy, 0, 8 ) ) != "order by")
	$tstrOrderBy = "order by " . $tstrOrderBy;
$tdatatbl_director [".strOrderBy"] = $tstrOrderBy;

$tdatatbl_director [".orderindexes"] = array ();

$tdatatbl_director [".sqlHead"] = "SELECT SupervisorID,  FullName,  FirstName,  LastName";
$tdatatbl_director [".sqlFrom"] = "FROM tbl_director";
$tdatatbl_director [".sqlWhereExpr"] = "";
$tdatatbl_director [".sqlTail"] = "";

// fill array of records per page for list and report without group fields
$arrRPP = array ();
$arrRPP [] = 10;
$arrRPP [] = 20;
$arrRPP [] = 30;
$arrRPP [] = 50;
$arrRPP [] = 100;
$arrRPP [] = 500;
$arrRPP [] = - 1;
$tdatatbl_director [".arrRecsPerPage"] = $arrRPP;

// fill array of groups per page for report with group fields
$arrGPP = array ();
$arrGPP [] = 1;
$arrGPP [] = 3;
$arrGPP [] = 5;
$arrGPP [] = 10;
$arrGPP [] = 50;
$arrGPP [] = 100;
$arrGPP [] = - 1;
$tdatatbl_director [".arrGroupsPerPage"] = $arrGPP;

$tableKeystbl_director = array ();
$tableKeystbl_director [] = "SupervisorID";
$tdatatbl_director [".Keys"] = $tableKeystbl_director;

$tdatatbl_director [".listFields"] = array ();
$tdatatbl_director [".listFields"] [] = "LastName";
$tdatatbl_director [".listFields"] [] = "FirstName";
$tdatatbl_director [".listFields"] [] = "SupervisorID";
$tdatatbl_director [".listFields"] [] = "FullName";

$tdatatbl_director [".hideMobileList"] = array ();

$tdatatbl_director [".viewFields"] = array ();

$tdatatbl_director [".addFields"] = array ();
$tdatatbl_director [".addFields"] [] = "LastName";
$tdatatbl_director [".addFields"] [] = "FirstName";
$tdatatbl_director [".addFields"] [] = "SupervisorID";
$tdatatbl_director [".addFields"] [] = "FullName";

$tdatatbl_director [".masterListFields"] = array ();
$tdatatbl_director [".masterListFields"] [] = "SupervisorID";
$tdatatbl_director [".masterListFields"] [] = "FullName";
$tdatatbl_director [".masterListFields"] [] = "FirstName";
$tdatatbl_director [".masterListFields"] [] = "LastName";

$tdatatbl_director [".inlineAddFields"] = array ();

$tdatatbl_director [".editFields"] = array ();
$tdatatbl_director [".editFields"] [] = "LastName";
$tdatatbl_director [".editFields"] [] = "FirstName";
$tdatatbl_director [".editFields"] [] = "SupervisorID";
$tdatatbl_director [".editFields"] [] = "FullName";

$tdatatbl_director [".inlineEditFields"] = array ();

$tdatatbl_director [".exportFields"] = array ();
$tdatatbl_director [".exportFields"] [] = "LastName";
$tdatatbl_director [".exportFields"] [] = "FirstName";
$tdatatbl_director [".exportFields"] [] = "SupervisorID";
$tdatatbl_director [".exportFields"] [] = "FullName";

$tdatatbl_director [".importFields"] = array ();
$tdatatbl_director [".importFields"] [] = "SupervisorID";
$tdatatbl_director [".importFields"] [] = "FullName";
$tdatatbl_director [".importFields"] [] = "FirstName";
$tdatatbl_director [".importFields"] [] = "LastName";

$tdatatbl_director [".printFields"] = array ();
$tdatatbl_director [".printFields"] [] = "LastName";
$tdatatbl_director [".printFields"] [] = "FirstName";
$tdatatbl_director [".printFields"] [] = "SupervisorID";
$tdatatbl_director [".printFields"] [] = "FullName";

// SupervisorID
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 1;
$fdata ["strName"] = "SupervisorID";
$fdata ["GoodName"] = "SupervisorID";
$fdata ["ownerTable"] = "tbl_director";
$fdata ["Label"] = GetFieldLabel ( "tbl_director", "SupervisorID" );
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

$tdatatbl_director ["SupervisorID"] = $fdata;
// FullName
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 2;
$fdata ["strName"] = "FullName";
$fdata ["GoodName"] = "FullName";
$fdata ["ownerTable"] = "tbl_director";
$fdata ["Label"] = GetFieldLabel ( "tbl_director", "FullName" );
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

$tdatatbl_director ["FullName"] = $fdata;
// FirstName
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 3;
$fdata ["strName"] = "FirstName";
$fdata ["GoodName"] = "FirstName";
$fdata ["ownerTable"] = "tbl_director";
$fdata ["Label"] = GetFieldLabel ( "tbl_director", "FirstName" );
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

$tdatatbl_director ["FirstName"] = $fdata;
// LastName
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 4;
$fdata ["strName"] = "LastName";
$fdata ["GoodName"] = "LastName";
$fdata ["ownerTable"] = "tbl_director";
$fdata ["Label"] = GetFieldLabel ( "tbl_director", "LastName" );
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

$tdatatbl_director ["LastName"] = $fdata;

$tables_data ["tbl_director"] = &$tdatatbl_director;
$field_labels ["tbl_director"] = &$fieldLabelstbl_director;
$fieldToolTips ["tbl_director"] = &$fieldToolTipstbl_director;
$page_titles ["tbl_director"] = &$pageTitlestbl_director;

// -----------------start prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData ["tbl_director"] = array ();

// tables which are master tables for current table (detail)
$masterTablesData ["tbl_director"] = array ();

// -----------------end prepare master-details data arrays ------------------------------//

require_once (getabspath ( "classes/sql.php" ));
function createSqlQuery_tbl_director() {
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
			"m_srcTableName" => "tbl_director" 
	) );
	
	$proto5 ["m_sql"] = "SupervisorID";
	$proto5 ["m_srcTableName"] = "tbl_director";
	$proto5 ["m_expr"] = $obj;
	$proto5 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto5 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto7 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "FullName",
			"m_strTable" => "tbl_director",
			"m_srcTableName" => "tbl_director" 
	) );
	
	$proto7 ["m_sql"] = "FullName";
	$proto7 ["m_srcTableName"] = "tbl_director";
	$proto7 ["m_expr"] = $obj;
	$proto7 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto7 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto9 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "FirstName",
			"m_strTable" => "tbl_director",
			"m_srcTableName" => "tbl_director" 
	) );
	
	$proto9 ["m_sql"] = "FirstName";
	$proto9 ["m_srcTableName"] = "tbl_director";
	$proto9 ["m_expr"] = $obj;
	$proto9 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto9 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto11 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "LastName",
			"m_strTable" => "tbl_director",
			"m_srcTableName" => "tbl_director" 
	) );
	
	$proto11 ["m_sql"] = "LastName";
	$proto11 ["m_srcTableName"] = "tbl_director";
	$proto11 ["m_expr"] = $obj;
	$proto11 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto11 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto0 ["m_fromlist"] = array ();
	$proto13 = array ();
	$proto13 ["m_link"] = "SQLL_MAIN";
	$proto14 = array ();
	$proto14 ["m_strName"] = "tbl_director";
	$proto14 ["m_srcTableName"] = "tbl_director";
	$proto14 ["m_columns"] = array ();
	$proto14 ["m_columns"] [] = "SupervisorID";
	$proto14 ["m_columns"] [] = "FirstName";
	$proto14 ["m_columns"] [] = "LastName";
	$proto14 ["m_columns"] [] = "FullName";
	$obj = new SQLTable ( $proto14 );
	
	$proto13 ["m_table"] = $obj;
	$proto13 ["m_sql"] = "tbl_director";
	$proto13 ["m_alias"] = "";
	$proto13 ["m_srcTableName"] = "tbl_director";
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
	$proto0 ["m_srcTableName"] = "tbl_director";
	$obj = new SQLQuery ( $proto0 );
	
	return $obj;
}
$queryData_tbl_director = createSqlQuery_tbl_director ();

$tdatatbl_director [".sqlquery"] = $queryData_tbl_director;

$tableEvents ["tbl_director"] = new eventsBase ();
$tdatatbl_director [".hasEvents"] = false;

?>