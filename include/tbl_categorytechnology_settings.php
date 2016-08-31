<?php
require_once (getabspath ( "classes/cipherer.php" ));

$tdatatbl_categorytechnology = array ();
$tdatatbl_categorytechnology [".truncateText"] = true;
$tdatatbl_categorytechnology [".NumberOfChars"] = 60;
$tdatatbl_categorytechnology [".ShortName"] = "tbl_categorytechnology";
$tdatatbl_categorytechnology [".OwnerID"] = "";
$tdatatbl_categorytechnology [".OriginalTable"] = "tbl_categorytechnology";

// field labels
$fieldLabelstbl_categorytechnology = array ();
$fieldToolTipstbl_categorytechnology = array ();
$pageTitlestbl_categorytechnology = array ();

if (mlang_getcurrentlang () == "English") {
	$fieldLabelstbl_categorytechnology ["English"] = array ();
	$fieldToolTipstbl_categorytechnology ["English"] = array ();
	$pageTitlestbl_categorytechnology ["English"] = array ();
	$fieldLabelstbl_categorytechnology ["English"] ["TechnologyCategoryID"] = "Technology Category ID";
	$fieldToolTipstbl_categorytechnology ["English"] ["TechnologyCategoryID"] = "";
	$fieldLabelstbl_categorytechnology ["English"] ["TechnologyCategotyName"] = "Technology Categoty Name";
	$fieldToolTipstbl_categorytechnology ["English"] ["TechnologyCategotyName"] = "";
	if (count ( $fieldToolTipstbl_categorytechnology ["English"] ))
		$tdatatbl_categorytechnology [".isUseToolTips"] = true;
}
if (mlang_getcurrentlang () == "") {
	$fieldLabelstbl_categorytechnology [""] = array ();
	$fieldToolTipstbl_categorytechnology [""] = array ();
	$pageTitlestbl_categorytechnology [""] = array ();
	if (count ( $fieldToolTipstbl_categorytechnology [""] ))
		$tdatatbl_categorytechnology [".isUseToolTips"] = true;
}

$tdatatbl_categorytechnology [".NCSearch"] = true;

$tdatatbl_categorytechnology [".shortTableName"] = "tbl_categorytechnology";
$tdatatbl_categorytechnology [".nSecOptions"] = 0;
$tdatatbl_categorytechnology [".recsPerRowList"] = 1;
$tdatatbl_categorytechnology [".recsPerRowPrint"] = 1;
$tdatatbl_categorytechnology [".mainTableOwnerID"] = "";
$tdatatbl_categorytechnology [".moveNext"] = 0;
$tdatatbl_categorytechnology [".entityType"] = 0;

$tdatatbl_categorytechnology [".strOriginalTableName"] = "tbl_categorytechnology";

$tdatatbl_categorytechnology [".showAddInPopup"] = false;

$tdatatbl_categorytechnology [".showEditInPopup"] = false;

$tdatatbl_categorytechnology [".showViewInPopup"] = false;

// page's base css files names
$popupPagesLayoutNames = array ();
$tdatatbl_categorytechnology [".popupPagesLayoutNames"] = $popupPagesLayoutNames;

$tdatatbl_categorytechnology [".fieldsForRegister"] = array ();

$tdatatbl_categorytechnology [".listAjax"] = false;

$tdatatbl_categorytechnology [".audit"] = false;

$tdatatbl_categorytechnology [".locking"] = false;

$tdatatbl_categorytechnology [".edit"] = true;
$tdatatbl_categorytechnology [".afterEditAction"] = 1;
$tdatatbl_categorytechnology [".closePopupAfterEdit"] = 1;
$tdatatbl_categorytechnology [".afterEditActionDetTable"] = "";

$tdatatbl_categorytechnology [".add"] = true;
$tdatatbl_categorytechnology [".afterAddAction"] = 1;
$tdatatbl_categorytechnology [".closePopupAfterAdd"] = 1;
$tdatatbl_categorytechnology [".afterAddActionDetTable"] = "";

$tdatatbl_categorytechnology [".list"] = true;

$tdatatbl_categorytechnology [".inlineEdit"] = true;
$tdatatbl_categorytechnology [".inlineAdd"] = true;
$tdatatbl_categorytechnology [".view"] = true;

$tdatatbl_categorytechnology [".import"] = true;

$tdatatbl_categorytechnology [".exportTo"] = true;

$tdatatbl_categorytechnology [".printFriendly"] = true;

$tdatatbl_categorytechnology [".delete"] = true;

$tdatatbl_categorytechnology [".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatatbl_categorytechnology [".searchSaving"] = false;
//

$tdatatbl_categorytechnology [".showSearchPanel"] = true;
$tdatatbl_categorytechnology [".flexibleSearch"] = true;

if (isMobile ())
	$tdatatbl_categorytechnology [".isUseAjaxSuggest"] = false;
else
	$tdatatbl_categorytechnology [".isUseAjaxSuggest"] = true;

$tdatatbl_categorytechnology [".rowHighlite"] = true;

$tdatatbl_categorytechnology [".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_categorytechnology [".isUseTimeForSearch"] = false;

$tdatatbl_categorytechnology [".allSearchFields"] = array ();
$tdatatbl_categorytechnology [".filterFields"] = array ();
$tdatatbl_categorytechnology [".requiredSearchFields"] = array ();

$tdatatbl_categorytechnology [".allSearchFields"] [] = "TechnologyCategoryID";
$tdatatbl_categorytechnology [".allSearchFields"] [] = "TechnologyCategotyName";

$tdatatbl_categorytechnology [".googleLikeFields"] = array ();
$tdatatbl_categorytechnology [".googleLikeFields"] [] = "TechnologyCategoryID";
$tdatatbl_categorytechnology [".googleLikeFields"] [] = "TechnologyCategotyName";

$tdatatbl_categorytechnology [".advSearchFields"] = array ();
$tdatatbl_categorytechnology [".advSearchFields"] [] = "TechnologyCategoryID";
$tdatatbl_categorytechnology [".advSearchFields"] [] = "TechnologyCategotyName";

$tdatatbl_categorytechnology [".tableType"] = "list";

$tdatatbl_categorytechnology [".printerPageOrientation"] = 0;
$tdatatbl_categorytechnology [".nPrinterPageScale"] = 100;

$tdatatbl_categorytechnology [".nPrinterSplitRecords"] = 40;

$tdatatbl_categorytechnology [".nPrinterPDFSplitRecords"] = 40;

$tdatatbl_categorytechnology [".geocodingEnabled"] = false;

// view page pdf

// print page pdf

$tdatatbl_categorytechnology [".pageSize"] = 10;

$tdatatbl_categorytechnology [".warnLeavingPages"] = true;

$tstrOrderBy = "";
if (strlen ( $tstrOrderBy ) && strtolower ( substr ( $tstrOrderBy, 0, 8 ) ) != "order by")
	$tstrOrderBy = "order by " . $tstrOrderBy;
$tdatatbl_categorytechnology [".strOrderBy"] = $tstrOrderBy;

$tdatatbl_categorytechnology [".orderindexes"] = array ();

$tdatatbl_categorytechnology [".sqlHead"] = "SELECT TechnologyCategoryID,  	TechnologyCategotyName";
$tdatatbl_categorytechnology [".sqlFrom"] = "FROM tbl_categorytechnology";
$tdatatbl_categorytechnology [".sqlWhereExpr"] = "";
$tdatatbl_categorytechnology [".sqlTail"] = "";

// fill array of records per page for list and report without group fields
$arrRPP = array ();
$arrRPP [] = 10;
$arrRPP [] = 20;
$arrRPP [] = 30;
$arrRPP [] = 50;
$arrRPP [] = 100;
$arrRPP [] = 500;
$arrRPP [] = - 1;
$tdatatbl_categorytechnology [".arrRecsPerPage"] = $arrRPP;

// fill array of groups per page for report with group fields
$arrGPP = array ();
$arrGPP [] = 1;
$arrGPP [] = 3;
$arrGPP [] = 5;
$arrGPP [] = 10;
$arrGPP [] = 50;
$arrGPP [] = 100;
$arrGPP [] = - 1;
$tdatatbl_categorytechnology [".arrGroupsPerPage"] = $arrGPP;

$tableKeystbl_categorytechnology = array ();
$tableKeystbl_categorytechnology [] = "TechnologyCategoryID";
$tdatatbl_categorytechnology [".Keys"] = $tableKeystbl_categorytechnology;

$tdatatbl_categorytechnology [".listFields"] = array ();
$tdatatbl_categorytechnology [".listFields"] [] = "TechnologyCategoryID";
$tdatatbl_categorytechnology [".listFields"] [] = "TechnologyCategotyName";

$tdatatbl_categorytechnology [".hideMobileList"] = array ();

$tdatatbl_categorytechnology [".viewFields"] = array ();
$tdatatbl_categorytechnology [".viewFields"] [] = "TechnologyCategoryID";
$tdatatbl_categorytechnology [".viewFields"] [] = "TechnologyCategotyName";

$tdatatbl_categorytechnology [".addFields"] = array ();
$tdatatbl_categorytechnology [".addFields"] [] = "TechnologyCategotyName";

$tdatatbl_categorytechnology [".masterListFields"] = array ();
$tdatatbl_categorytechnology [".masterListFields"] [] = "TechnologyCategoryID";
$tdatatbl_categorytechnology [".masterListFields"] [] = "TechnologyCategotyName";

$tdatatbl_categorytechnology [".inlineAddFields"] = array ();
$tdatatbl_categorytechnology [".inlineAddFields"] [] = "TechnologyCategotyName";

$tdatatbl_categorytechnology [".editFields"] = array ();
$tdatatbl_categorytechnology [".editFields"] [] = "TechnologyCategotyName";

$tdatatbl_categorytechnology [".inlineEditFields"] = array ();
$tdatatbl_categorytechnology [".inlineEditFields"] [] = "TechnologyCategotyName";

$tdatatbl_categorytechnology [".exportFields"] = array ();
$tdatatbl_categorytechnology [".exportFields"] [] = "TechnologyCategoryID";
$tdatatbl_categorytechnology [".exportFields"] [] = "TechnologyCategotyName";

$tdatatbl_categorytechnology [".importFields"] = array ();
$tdatatbl_categorytechnology [".importFields"] [] = "TechnologyCategoryID";
$tdatatbl_categorytechnology [".importFields"] [] = "TechnologyCategotyName";

$tdatatbl_categorytechnology [".printFields"] = array ();
$tdatatbl_categorytechnology [".printFields"] [] = "TechnologyCategoryID";
$tdatatbl_categorytechnology [".printFields"] [] = "TechnologyCategotyName";

// TechnologyCategoryID
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 1;
$fdata ["strName"] = "TechnologyCategoryID";
$fdata ["GoodName"] = "TechnologyCategoryID";
$fdata ["ownerTable"] = "tbl_categorytechnology";
$fdata ["Label"] = GetFieldLabel ( "tbl_categorytechnology", "TechnologyCategoryID" );
$fdata ["FieldType"] = 3;

$fdata ["AutoInc"] = true;

$fdata ["bListPage"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "TechnologyCategoryID";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "TechnologyCategoryID";

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

$tdatatbl_categorytechnology ["TechnologyCategoryID"] = $fdata;
// TechnologyCategotyName
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 2;
$fdata ["strName"] = "TechnologyCategotyName";
$fdata ["GoodName"] = "TechnologyCategotyName";
$fdata ["ownerTable"] = "tbl_categorytechnology";
$fdata ["Label"] = GetFieldLabel ( "tbl_categorytechnology", "TechnologyCategotyName" );
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

$fdata ["strField"] = "TechnologyCategotyName";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "TechnologyCategotyName";

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

$tdatatbl_categorytechnology ["TechnologyCategotyName"] = $fdata;

$tables_data ["tbl_categorytechnology"] = &$tdatatbl_categorytechnology;
$field_labels ["tbl_categorytechnology"] = &$fieldLabelstbl_categorytechnology;
$fieldToolTips ["tbl_categorytechnology"] = &$fieldToolTipstbl_categorytechnology;
$page_titles ["tbl_categorytechnology"] = &$pageTitlestbl_categorytechnology;

// -----------------start prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData ["tbl_categorytechnology"] = array ();

// tables which are master tables for current table (detail)
$masterTablesData ["tbl_categorytechnology"] = array ();

// -----------------end prepare master-details data arrays ------------------------------//

require_once (getabspath ( "classes/sql.php" ));
function createSqlQuery_tbl_categorytechnology() {
	$proto0 = array ();
	$proto0 ["m_strHead"] = "SELECT";
	$proto0 ["m_strFieldList"] = "TechnologyCategoryID,  	TechnologyCategotyName";
	$proto0 ["m_strFrom"] = "FROM tbl_categorytechnology";
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
			"m_strName" => "TechnologyCategoryID",
			"m_strTable" => "tbl_categorytechnology",
			"m_srcTableName" => "tbl_categorytechnology" 
	) );
	
	$proto5 ["m_sql"] = "TechnologyCategoryID";
	$proto5 ["m_srcTableName"] = "tbl_categorytechnology";
	$proto5 ["m_expr"] = $obj;
	$proto5 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto5 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto7 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "TechnologyCategotyName",
			"m_strTable" => "tbl_categorytechnology",
			"m_srcTableName" => "tbl_categorytechnology" 
	) );
	
	$proto7 ["m_sql"] = "TechnologyCategotyName";
	$proto7 ["m_srcTableName"] = "tbl_categorytechnology";
	$proto7 ["m_expr"] = $obj;
	$proto7 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto7 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto0 ["m_fromlist"] = array ();
	$proto9 = array ();
	$proto9 ["m_link"] = "SQLL_MAIN";
	$proto10 = array ();
	$proto10 ["m_strName"] = "tbl_categorytechnology";
	$proto10 ["m_srcTableName"] = "tbl_categorytechnology";
	$proto10 ["m_columns"] = array ();
	$proto10 ["m_columns"] [] = "TechnologyCategoryID";
	$proto10 ["m_columns"] [] = "TechnologyCategotyName";
	$obj = new SQLTable ( $proto10 );
	
	$proto9 ["m_table"] = $obj;
	$proto9 ["m_sql"] = "tbl_categorytechnology";
	$proto9 ["m_alias"] = "";
	$proto9 ["m_srcTableName"] = "tbl_categorytechnology";
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
	$proto0 ["m_srcTableName"] = "tbl_categorytechnology";
	$obj = new SQLQuery ( $proto0 );
	
	return $obj;
}
$queryData_tbl_categorytechnology = createSqlQuery_tbl_categorytechnology ();

$tdatatbl_categorytechnology [".sqlquery"] = $queryData_tbl_categorytechnology;

$tableEvents ["tbl_categorytechnology"] = new eventsBase ();
$tdatatbl_categorytechnology [".hasEvents"] = false;

?>