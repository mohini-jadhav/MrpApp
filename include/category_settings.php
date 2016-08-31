<?php
require_once (getabspath ( "classes/cipherer.php" ));

$tdatacategory = array ();
$tdatacategory [".truncateText"] = true;
$tdatacategory [".NumberOfChars"] = 60;
$tdatacategory [".ShortName"] = "category";
$tdatacategory [".OwnerID"] = "";
$tdatacategory [".OriginalTable"] = "category";

// field labels
$fieldLabelscategory = array ();
$fieldToolTipscategory = array ();
$pageTitlescategory = array ();

if (mlang_getcurrentlang () == "English") {
	$fieldLabelscategory ["English"] = array ();
	$fieldToolTipscategory ["English"] = array ();
	$pageTitlescategory ["English"] = array ();
	$fieldLabelscategory ["English"] ["CategoryID"] = "Category ID";
	$fieldToolTipscategory ["English"] ["CategoryID"] = "";
	$fieldLabelscategory ["English"] ["CategotyName"] = "Categoty Name";
	$fieldToolTipscategory ["English"] ["CategotyName"] = "";
	if (count ( $fieldToolTipscategory ["English"] ))
		$tdatacategory [".isUseToolTips"] = true;
}
if (mlang_getcurrentlang () == "") {
	$fieldLabelscategory [""] = array ();
	$fieldToolTipscategory [""] = array ();
	$pageTitlescategory [""] = array ();
	if (count ( $fieldToolTipscategory [""] ))
		$tdatacategory [".isUseToolTips"] = true;
}

$tdatacategory [".NCSearch"] = true;

$tdatacategory [".shortTableName"] = "category";
$tdatacategory [".nSecOptions"] = 0;
$tdatacategory [".recsPerRowList"] = 1;
$tdatacategory [".recsPerRowPrint"] = 1;
$tdatacategory [".mainTableOwnerID"] = "";
$tdatacategory [".moveNext"] = 0;
$tdatacategory [".entityType"] = 0;

$tdatacategory [".strOriginalTableName"] = "category";

$tdatacategory [".showAddInPopup"] = false;

$tdatacategory [".showEditInPopup"] = false;

$tdatacategory [".showViewInPopup"] = false;

// page's base css files names
$popupPagesLayoutNames = array ();
$tdatacategory [".popupPagesLayoutNames"] = $popupPagesLayoutNames;

$tdatacategory [".fieldsForRegister"] = array ();

$tdatacategory [".listAjax"] = false;

$tdatacategory [".audit"] = false;

$tdatacategory [".locking"] = false;

$tdatacategory [".add"] = true;
$tdatacategory [".afterAddAction"] = 1;
$tdatacategory [".closePopupAfterAdd"] = 1;
$tdatacategory [".afterAddActionDetTable"] = "";

$tdatacategory [".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacategory [".searchSaving"] = false;
//

$tdatacategory [".showSearchPanel"] = true;
$tdatacategory [".flexibleSearch"] = true;

if (isMobile ())
	$tdatacategory [".isUseAjaxSuggest"] = false;
else
	$tdatacategory [".isUseAjaxSuggest"] = true;

$tdatacategory [".rowHighlite"] = true;

$tdatacategory [".addPageEvents"] = false;

// use timepicker for search panel
$tdatacategory [".isUseTimeForSearch"] = false;

$tdatacategory [".allSearchFields"] = array ();
$tdatacategory [".filterFields"] = array ();
$tdatacategory [".requiredSearchFields"] = array ();

$tdatacategory [".googleLikeFields"] = array ();
$tdatacategory [".googleLikeFields"] [] = "CategoryID";
$tdatacategory [".googleLikeFields"] [] = "CategotyName";

$tdatacategory [".advSearchFields"] = array ();
$tdatacategory [".advSearchFields"] [] = "CategoryID";
$tdatacategory [".advSearchFields"] [] = "CategotyName";

$tdatacategory [".tableType"] = "list";

$tdatacategory [".printerPageOrientation"] = 0;
$tdatacategory [".nPrinterPageScale"] = 100;

$tdatacategory [".nPrinterSplitRecords"] = 40;

$tdatacategory [".nPrinterPDFSplitRecords"] = 40;

$tdatacategory [".geocodingEnabled"] = false;

// view page pdf

// print page pdf

$tdatacategory [".pageSize"] = 10;

$tdatacategory [".warnLeavingPages"] = true;

$tstrOrderBy = "";
if (strlen ( $tstrOrderBy ) && strtolower ( substr ( $tstrOrderBy, 0, 8 ) ) != "order by")
	$tstrOrderBy = "order by " . $tstrOrderBy;
$tdatacategory [".strOrderBy"] = $tstrOrderBy;

$tdatacategory [".orderindexes"] = array ();

$tdatacategory [".sqlHead"] = "SELECT CategoryID,  	CategotyName";
$tdatacategory [".sqlFrom"] = "FROM category";
$tdatacategory [".sqlWhereExpr"] = "";
$tdatacategory [".sqlTail"] = "";

// fill array of records per page for list and report without group fields
$arrRPP = array ();
$arrRPP [] = 10;
$arrRPP [] = 20;
$arrRPP [] = 30;
$arrRPP [] = 50;
$arrRPP [] = 100;
$arrRPP [] = 500;
$arrRPP [] = - 1;
$tdatacategory [".arrRecsPerPage"] = $arrRPP;

// fill array of groups per page for report with group fields
$arrGPP = array ();
$arrGPP [] = 1;
$arrGPP [] = 3;
$arrGPP [] = 5;
$arrGPP [] = 10;
$arrGPP [] = 50;
$arrGPP [] = 100;
$arrGPP [] = - 1;
$tdatacategory [".arrGroupsPerPage"] = $arrGPP;

$tableKeyscategory = array ();
$tableKeyscategory [] = "CategoryID";
$tdatacategory [".Keys"] = $tableKeyscategory;

$tdatacategory [".listFields"] = array ();
$tdatacategory [".listFields"] [] = "CategoryID";
$tdatacategory [".listFields"] [] = "CategotyName";

$tdatacategory [".hideMobileList"] = array ();

$tdatacategory [".viewFields"] = array ();
$tdatacategory [".viewFields"] [] = "CategoryID";
$tdatacategory [".viewFields"] [] = "CategotyName";

$tdatacategory [".addFields"] = array ();
$tdatacategory [".addFields"] [] = "CategotyName";

$tdatacategory [".masterListFields"] = array ();
$tdatacategory [".masterListFields"] [] = "CategoryID";
$tdatacategory [".masterListFields"] [] = "CategotyName";

$tdatacategory [".inlineAddFields"] = array ();
$tdatacategory [".inlineAddFields"] [] = "CategotyName";

$tdatacategory [".editFields"] = array ();
$tdatacategory [".editFields"] [] = "CategotyName";

$tdatacategory [".inlineEditFields"] = array ();
$tdatacategory [".inlineEditFields"] [] = "CategotyName";

$tdatacategory [".exportFields"] = array ();
$tdatacategory [".exportFields"] [] = "CategoryID";
$tdatacategory [".exportFields"] [] = "CategotyName";

$tdatacategory [".importFields"] = array ();
$tdatacategory [".importFields"] [] = "CategoryID";
$tdatacategory [".importFields"] [] = "CategotyName";

$tdatacategory [".printFields"] = array ();
$tdatacategory [".printFields"] [] = "CategoryID";
$tdatacategory [".printFields"] [] = "CategotyName";

// CategoryID
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 1;
$fdata ["strName"] = "CategoryID";
$fdata ["GoodName"] = "CategoryID";
$fdata ["ownerTable"] = "category";
$fdata ["Label"] = GetFieldLabel ( "category", "CategoryID" );
$fdata ["FieldType"] = 3;

$fdata ["AutoInc"] = true;

$fdata ["bListPage"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "CategoryID";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "CategoryID";

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

$tdatacategory ["CategoryID"] = $fdata;
// CategotyName
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 2;
$fdata ["strName"] = "CategotyName";
$fdata ["GoodName"] = "CategotyName";
$fdata ["ownerTable"] = "category";
$fdata ["Label"] = GetFieldLabel ( "category", "CategotyName" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "CategotyName";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "CategotyName";

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

$tdatacategory ["CategotyName"] = $fdata;

$tables_data ["category"] = &$tdatacategory;
$field_labels ["category"] = &$fieldLabelscategory;
$fieldToolTips ["category"] = &$fieldToolTipscategory;
$page_titles ["category"] = &$pageTitlescategory;

// -----------------start prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData ["category"] = array ();

// tables which are master tables for current table (detail)
$masterTablesData ["category"] = array ();

// -----------------end prepare master-details data arrays ------------------------------//

require_once (getabspath ( "classes/sql.php" ));
function createSqlQuery_category() {
	$proto0 = array ();
	$proto0 ["m_strHead"] = "SELECT";
	$proto0 ["m_strFieldList"] = "CategoryID,  	CategotyName";
	$proto0 ["m_strFrom"] = "FROM category";
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
			"m_strName" => "CategoryID",
			"m_strTable" => "category",
			"m_srcTableName" => "category" 
	) );
	
	$proto5 ["m_sql"] = "CategoryID";
	$proto5 ["m_srcTableName"] = "category";
	$proto5 ["m_expr"] = $obj;
	$proto5 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto5 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto7 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "CategotyName",
			"m_strTable" => "category",
			"m_srcTableName" => "category" 
	) );
	
	$proto7 ["m_sql"] = "CategotyName";
	$proto7 ["m_srcTableName"] = "category";
	$proto7 ["m_expr"] = $obj;
	$proto7 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto7 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto0 ["m_fromlist"] = array ();
	$proto9 = array ();
	$proto9 ["m_link"] = "SQLL_MAIN";
	$proto10 = array ();
	$proto10 ["m_strName"] = "category";
	$proto10 ["m_srcTableName"] = "category";
	$proto10 ["m_columns"] = array ();
	$proto10 ["m_columns"] [] = "CategoryID";
	$proto10 ["m_columns"] [] = "CategotyName";
	$obj = new SQLTable ( $proto10 );
	
	$proto9 ["m_table"] = $obj;
	$proto9 ["m_sql"] = "category";
	$proto9 ["m_alias"] = "";
	$proto9 ["m_srcTableName"] = "category";
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
	$proto0 ["m_srcTableName"] = "category";
	$obj = new SQLQuery ( $proto0 );
	
	return $obj;
}
$queryData_category = createSqlQuery_category ();

$tdatacategory [".sqlquery"] = $queryData_category;

$tableEvents ["category"] = new eventsBase ();
$tdatacategory [".hasEvents"] = false;

?>