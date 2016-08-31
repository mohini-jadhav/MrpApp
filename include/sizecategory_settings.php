<?php
require_once (getabspath ( "classes/cipherer.php" ));

$tdatasizecategory = array ();
$tdatasizecategory [".truncateText"] = true;
$tdatasizecategory [".NumberOfChars"] = 60;
$tdatasizecategory [".ShortName"] = "sizecategory";
$tdatasizecategory [".OwnerID"] = "";
$tdatasizecategory [".OriginalTable"] = "sizecategory";

// field labels
$fieldLabelssizecategory = array ();
$fieldToolTipssizecategory = array ();
$pageTitlessizecategory = array ();

if (mlang_getcurrentlang () == "English") {
	$fieldLabelssizecategory ["English"] = array ();
	$fieldToolTipssizecategory ["English"] = array ();
	$pageTitlessizecategory ["English"] = array ();
	$fieldLabelssizecategory ["English"] ["StagecatID"] = "Stagecat ID";
	$fieldToolTipssizecategory ["English"] ["StagecatID"] = "";
	$fieldLabelssizecategory ["English"] ["CategoryName"] = "Category Name";
	$fieldToolTipssizecategory ["English"] ["CategoryName"] = "";
	if (count ( $fieldToolTipssizecategory ["English"] ))
		$tdatasizecategory [".isUseToolTips"] = true;
}
if (mlang_getcurrentlang () == "") {
	$fieldLabelssizecategory [""] = array ();
	$fieldToolTipssizecategory [""] = array ();
	$pageTitlessizecategory [""] = array ();
	if (count ( $fieldToolTipssizecategory [""] ))
		$tdatasizecategory [".isUseToolTips"] = true;
}

$tdatasizecategory [".NCSearch"] = true;

$tdatasizecategory [".shortTableName"] = "sizecategory";
$tdatasizecategory [".nSecOptions"] = 0;
$tdatasizecategory [".recsPerRowList"] = 1;
$tdatasizecategory [".recsPerRowPrint"] = 1;
$tdatasizecategory [".mainTableOwnerID"] = "";
$tdatasizecategory [".moveNext"] = 0;
$tdatasizecategory [".entityType"] = 0;

$tdatasizecategory [".strOriginalTableName"] = "sizecategory";

$tdatasizecategory [".showAddInPopup"] = false;

$tdatasizecategory [".showEditInPopup"] = false;

$tdatasizecategory [".showViewInPopup"] = false;

// page's base css files names
$popupPagesLayoutNames = array ();
$tdatasizecategory [".popupPagesLayoutNames"] = $popupPagesLayoutNames;

$tdatasizecategory [".fieldsForRegister"] = array ();

$tdatasizecategory [".listAjax"] = false;

$tdatasizecategory [".audit"] = false;

$tdatasizecategory [".locking"] = false;

$tdatasizecategory [".edit"] = true;
$tdatasizecategory [".afterEditAction"] = 1;
$tdatasizecategory [".closePopupAfterEdit"] = 1;
$tdatasizecategory [".afterEditActionDetTable"] = "";

$tdatasizecategory [".add"] = true;
$tdatasizecategory [".afterAddAction"] = 1;
$tdatasizecategory [".closePopupAfterAdd"] = 1;
$tdatasizecategory [".afterAddActionDetTable"] = "";

$tdatasizecategory [".list"] = true;

$tdatasizecategory [".inlineEdit"] = true;
$tdatasizecategory [".inlineAdd"] = true;
$tdatasizecategory [".view"] = true;

$tdatasizecategory [".import"] = true;

$tdatasizecategory [".exportTo"] = true;

$tdatasizecategory [".printFriendly"] = true;

$tdatasizecategory [".delete"] = true;

$tdatasizecategory [".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatasizecategory [".searchSaving"] = false;
//

$tdatasizecategory [".showSearchPanel"] = true;
$tdatasizecategory [".flexibleSearch"] = true;

if (isMobile ())
	$tdatasizecategory [".isUseAjaxSuggest"] = false;
else
	$tdatasizecategory [".isUseAjaxSuggest"] = true;

$tdatasizecategory [".rowHighlite"] = true;

$tdatasizecategory [".addPageEvents"] = false;

// use timepicker for search panel
$tdatasizecategory [".isUseTimeForSearch"] = false;

$tdatasizecategory [".allSearchFields"] = array ();
$tdatasizecategory [".filterFields"] = array ();
$tdatasizecategory [".requiredSearchFields"] = array ();

$tdatasizecategory [".allSearchFields"] [] = "StagecatID";
$tdatasizecategory [".allSearchFields"] [] = "CategoryName";

$tdatasizecategory [".googleLikeFields"] = array ();
$tdatasizecategory [".googleLikeFields"] [] = "StagecatID";
$tdatasizecategory [".googleLikeFields"] [] = "CategoryName";

$tdatasizecategory [".advSearchFields"] = array ();
$tdatasizecategory [".advSearchFields"] [] = "StagecatID";
$tdatasizecategory [".advSearchFields"] [] = "CategoryName";

$tdatasizecategory [".tableType"] = "list";

$tdatasizecategory [".printerPageOrientation"] = 0;
$tdatasizecategory [".nPrinterPageScale"] = 100;

$tdatasizecategory [".nPrinterSplitRecords"] = 40;

$tdatasizecategory [".nPrinterPDFSplitRecords"] = 40;

$tdatasizecategory [".geocodingEnabled"] = false;

// view page pdf

// print page pdf

$tdatasizecategory [".pageSize"] = 10;

$tdatasizecategory [".warnLeavingPages"] = true;

$tstrOrderBy = "";
if (strlen ( $tstrOrderBy ) && strtolower ( substr ( $tstrOrderBy, 0, 8 ) ) != "order by")
	$tstrOrderBy = "order by " . $tstrOrderBy;
$tdatasizecategory [".strOrderBy"] = $tstrOrderBy;

$tdatasizecategory [".orderindexes"] = array ();

$tdatasizecategory [".sqlHead"] = "SELECT StagecatID,  	CategoryName";
$tdatasizecategory [".sqlFrom"] = "FROM sizecategory";
$tdatasizecategory [".sqlWhereExpr"] = "";
$tdatasizecategory [".sqlTail"] = "";

// fill array of records per page for list and report without group fields
$arrRPP = array ();
$arrRPP [] = 10;
$arrRPP [] = 20;
$arrRPP [] = 30;
$arrRPP [] = 50;
$arrRPP [] = 100;
$arrRPP [] = 500;
$arrRPP [] = - 1;
$tdatasizecategory [".arrRecsPerPage"] = $arrRPP;

// fill array of groups per page for report with group fields
$arrGPP = array ();
$arrGPP [] = 1;
$arrGPP [] = 3;
$arrGPP [] = 5;
$arrGPP [] = 10;
$arrGPP [] = 50;
$arrGPP [] = 100;
$arrGPP [] = - 1;
$tdatasizecategory [".arrGroupsPerPage"] = $arrGPP;

$tableKeyssizecategory = array ();
$tableKeyssizecategory [] = "StagecatID";
$tdatasizecategory [".Keys"] = $tableKeyssizecategory;

$tdatasizecategory [".listFields"] = array ();
$tdatasizecategory [".listFields"] [] = "StagecatID";
$tdatasizecategory [".listFields"] [] = "CategoryName";

$tdatasizecategory [".hideMobileList"] = array ();

$tdatasizecategory [".viewFields"] = array ();
$tdatasizecategory [".viewFields"] [] = "StagecatID";
$tdatasizecategory [".viewFields"] [] = "CategoryName";

$tdatasizecategory [".addFields"] = array ();
$tdatasizecategory [".addFields"] [] = "CategoryName";

$tdatasizecategory [".masterListFields"] = array ();
$tdatasizecategory [".masterListFields"] [] = "StagecatID";
$tdatasizecategory [".masterListFields"] [] = "CategoryName";

$tdatasizecategory [".inlineAddFields"] = array ();
$tdatasizecategory [".inlineAddFields"] [] = "CategoryName";

$tdatasizecategory [".editFields"] = array ();
$tdatasizecategory [".editFields"] [] = "CategoryName";

$tdatasizecategory [".inlineEditFields"] = array ();
$tdatasizecategory [".inlineEditFields"] [] = "CategoryName";

$tdatasizecategory [".exportFields"] = array ();
$tdatasizecategory [".exportFields"] [] = "StagecatID";
$tdatasizecategory [".exportFields"] [] = "CategoryName";

$tdatasizecategory [".importFields"] = array ();
$tdatasizecategory [".importFields"] [] = "StagecatID";
$tdatasizecategory [".importFields"] [] = "CategoryName";

$tdatasizecategory [".printFields"] = array ();
$tdatasizecategory [".printFields"] [] = "StagecatID";
$tdatasizecategory [".printFields"] [] = "CategoryName";

// StagecatID
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 1;
$fdata ["strName"] = "StagecatID";
$fdata ["GoodName"] = "StagecatID";
$fdata ["ownerTable"] = "sizecategory";
$fdata ["Label"] = GetFieldLabel ( "sizecategory", "StagecatID" );
$fdata ["FieldType"] = 3;

$fdata ["AutoInc"] = true;

$fdata ["bListPage"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "StagecatID";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "StagecatID";

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

$tdatasizecategory ["StagecatID"] = $fdata;
// CategoryName
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 2;
$fdata ["strName"] = "CategoryName";
$fdata ["GoodName"] = "CategoryName";
$fdata ["ownerTable"] = "sizecategory";
$fdata ["Label"] = GetFieldLabel ( "sizecategory", "CategoryName" );
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

$fdata ["strField"] = "CategoryName";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "CategoryName";

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

$tdatasizecategory ["CategoryName"] = $fdata;

$tables_data ["sizecategory"] = &$tdatasizecategory;
$field_labels ["sizecategory"] = &$fieldLabelssizecategory;
$fieldToolTips ["sizecategory"] = &$fieldToolTipssizecategory;
$page_titles ["sizecategory"] = &$pageTitlessizecategory;

// -----------------start prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData ["sizecategory"] = array ();

// tables which are master tables for current table (detail)
$masterTablesData ["sizecategory"] = array ();

// -----------------end prepare master-details data arrays ------------------------------//

require_once (getabspath ( "classes/sql.php" ));
function createSqlQuery_sizecategory() {
	$proto0 = array ();
	$proto0 ["m_strHead"] = "SELECT";
	$proto0 ["m_strFieldList"] = "StagecatID,  	CategoryName";
	$proto0 ["m_strFrom"] = "FROM sizecategory";
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
			"m_strName" => "StagecatID",
			"m_strTable" => "sizecategory",
			"m_srcTableName" => "sizecategory" 
	) );
	
	$proto5 ["m_sql"] = "StagecatID";
	$proto5 ["m_srcTableName"] = "sizecategory";
	$proto5 ["m_expr"] = $obj;
	$proto5 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto5 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto7 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "CategoryName",
			"m_strTable" => "sizecategory",
			"m_srcTableName" => "sizecategory" 
	) );
	
	$proto7 ["m_sql"] = "CategoryName";
	$proto7 ["m_srcTableName"] = "sizecategory";
	$proto7 ["m_expr"] = $obj;
	$proto7 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto7 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto0 ["m_fromlist"] = array ();
	$proto9 = array ();
	$proto9 ["m_link"] = "SQLL_MAIN";
	$proto10 = array ();
	$proto10 ["m_strName"] = "sizecategory";
	$proto10 ["m_srcTableName"] = "sizecategory";
	$proto10 ["m_columns"] = array ();
	$proto10 ["m_columns"] [] = "StagecatID";
	$proto10 ["m_columns"] [] = "CategoryName";
	$obj = new SQLTable ( $proto10 );
	
	$proto9 ["m_table"] = $obj;
	$proto9 ["m_sql"] = "sizecategory";
	$proto9 ["m_alias"] = "";
	$proto9 ["m_srcTableName"] = "sizecategory";
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
	$proto0 ["m_srcTableName"] = "sizecategory";
	$obj = new SQLQuery ( $proto0 );
	
	return $obj;
}
$queryData_sizecategory = createSqlQuery_sizecategory ();

$tdatasizecategory [".sqlquery"] = $queryData_sizecategory;

$tableEvents ["sizecategory"] = new eventsBase ();
$tdatasizecategory [".hasEvents"] = false;

?>