<?php
require_once (getabspath ( "classes/cipherer.php" ));

$tdatacolor = array ();
$tdatacolor [".truncateText"] = true;
$tdatacolor [".NumberOfChars"] = 60;
$tdatacolor [".ShortName"] = "color";
$tdatacolor [".OwnerID"] = "";
$tdatacolor [".OriginalTable"] = "color";

// field labels
$fieldLabelscolor = array ();
$fieldToolTipscolor = array ();
$pageTitlescolor = array ();

if (mlang_getcurrentlang () == "English") {
	$fieldLabelscolor ["English"] = array ();
	$fieldToolTipscolor ["English"] = array ();
	$pageTitlescolor ["English"] = array ();
	$fieldLabelscolor ["English"] ["AutcolID"] = "Autcol ID";
	$fieldToolTipscolor ["English"] ["AutcolID"] = "";
	$fieldLabelscolor ["English"] ["Color"] = "Color";
	$fieldToolTipscolor ["English"] ["Color"] = "";
	if (count ( $fieldToolTipscolor ["English"] ))
		$tdatacolor [".isUseToolTips"] = true;
}
if (mlang_getcurrentlang () == "") {
	$fieldLabelscolor [""] = array ();
	$fieldToolTipscolor [""] = array ();
	$pageTitlescolor [""] = array ();
	$fieldLabelscolor [""] ["AutcolID"] = "Autcol ID";
	$fieldToolTipscolor [""] ["AutcolID"] = "";
	$fieldLabelscolor [""] ["Color"] = "Color";
	$fieldToolTipscolor [""] ["Color"] = "";
	if (count ( $fieldToolTipscolor [""] ))
		$tdatacolor [".isUseToolTips"] = true;
}

$tdatacolor [".NCSearch"] = true;

$tdatacolor [".shortTableName"] = "color";
$tdatacolor [".nSecOptions"] = 0;
$tdatacolor [".recsPerRowList"] = 1;
$tdatacolor [".recsPerRowPrint"] = 1;
$tdatacolor [".mainTableOwnerID"] = "";
$tdatacolor [".moveNext"] = 0;
$tdatacolor [".entityType"] = 0;

$tdatacolor [".strOriginalTableName"] = "color";

$tdatacolor [".showAddInPopup"] = false;

$tdatacolor [".showEditInPopup"] = false;

$tdatacolor [".showViewInPopup"] = false;

// page's base css files names
$popupPagesLayoutNames = array ();
$tdatacolor [".popupPagesLayoutNames"] = $popupPagesLayoutNames;

$tdatacolor [".fieldsForRegister"] = array ();

$tdatacolor [".listAjax"] = false;

$tdatacolor [".audit"] = false;

$tdatacolor [".locking"] = false;

$tdatacolor [".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacolor [".searchSaving"] = false;
//

$tdatacolor [".showSearchPanel"] = true;
$tdatacolor [".flexibleSearch"] = true;

if (isMobile ())
	$tdatacolor [".isUseAjaxSuggest"] = false;
else
	$tdatacolor [".isUseAjaxSuggest"] = true;

$tdatacolor [".rowHighlite"] = true;

$tdatacolor [".addPageEvents"] = false;

// use timepicker for search panel
$tdatacolor [".isUseTimeForSearch"] = false;

$tdatacolor [".allSearchFields"] = array ();
$tdatacolor [".filterFields"] = array ();
$tdatacolor [".requiredSearchFields"] = array ();

$tdatacolor [".googleLikeFields"] = array ();
$tdatacolor [".googleLikeFields"] [] = "AutcolID";
$tdatacolor [".googleLikeFields"] [] = "Color";

$tdatacolor [".advSearchFields"] = array ();
$tdatacolor [".advSearchFields"] [] = "AutcolID";
$tdatacolor [".advSearchFields"] [] = "Color";

$tdatacolor [".tableType"] = "list";

$tdatacolor [".printerPageOrientation"] = 0;
$tdatacolor [".nPrinterPageScale"] = 100;

$tdatacolor [".nPrinterSplitRecords"] = 40;

$tdatacolor [".nPrinterPDFSplitRecords"] = 40;

$tdatacolor [".geocodingEnabled"] = false;

// view page pdf

// print page pdf

$tdatacolor [".pageSize"] = 10;

$tdatacolor [".warnLeavingPages"] = true;

$tstrOrderBy = "";
if (strlen ( $tstrOrderBy ) && strtolower ( substr ( $tstrOrderBy, 0, 8 ) ) != "order by")
	$tstrOrderBy = "order by " . $tstrOrderBy;
$tdatacolor [".strOrderBy"] = $tstrOrderBy;

$tdatacolor [".orderindexes"] = array ();

$tdatacolor [".sqlHead"] = "SELECT AutcolID,  	Color";
$tdatacolor [".sqlFrom"] = "FROM color";
$tdatacolor [".sqlWhereExpr"] = "";
$tdatacolor [".sqlTail"] = "";

// fill array of records per page for list and report without group fields
$arrRPP = array ();
$arrRPP [] = 10;
$arrRPP [] = 20;
$arrRPP [] = 30;
$arrRPP [] = 50;
$arrRPP [] = 100;
$arrRPP [] = 500;
$arrRPP [] = - 1;
$tdatacolor [".arrRecsPerPage"] = $arrRPP;

// fill array of groups per page for report with group fields
$arrGPP = array ();
$arrGPP [] = 1;
$arrGPP [] = 3;
$arrGPP [] = 5;
$arrGPP [] = 10;
$arrGPP [] = 50;
$arrGPP [] = 100;
$arrGPP [] = - 1;
$tdatacolor [".arrGroupsPerPage"] = $arrGPP;

$tableKeyscolor = array ();
$tableKeyscolor [] = "AutcolID";
$tdatacolor [".Keys"] = $tableKeyscolor;

$tdatacolor [".listFields"] = array ();
$tdatacolor [".listFields"] [] = "AutcolID";
$tdatacolor [".listFields"] [] = "Color";

$tdatacolor [".hideMobileList"] = array ();

$tdatacolor [".viewFields"] = array ();
$tdatacolor [".viewFields"] [] = "AutcolID";
$tdatacolor [".viewFields"] [] = "Color";

$tdatacolor [".addFields"] = array ();
$tdatacolor [".addFields"] [] = "Color";

$tdatacolor [".masterListFields"] = array ();
$tdatacolor [".masterListFields"] [] = "AutcolID";
$tdatacolor [".masterListFields"] [] = "Color";

$tdatacolor [".inlineAddFields"] = array ();
$tdatacolor [".inlineAddFields"] [] = "Color";

$tdatacolor [".editFields"] = array ();
$tdatacolor [".editFields"] [] = "Color";

$tdatacolor [".inlineEditFields"] = array ();
$tdatacolor [".inlineEditFields"] [] = "Color";

$tdatacolor [".exportFields"] = array ();
$tdatacolor [".exportFields"] [] = "AutcolID";
$tdatacolor [".exportFields"] [] = "Color";

$tdatacolor [".importFields"] = array ();
$tdatacolor [".importFields"] [] = "AutcolID";
$tdatacolor [".importFields"] [] = "Color";

$tdatacolor [".printFields"] = array ();
$tdatacolor [".printFields"] [] = "AutcolID";
$tdatacolor [".printFields"] [] = "Color";

// AutcolID
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 1;
$fdata ["strName"] = "AutcolID";
$fdata ["GoodName"] = "AutcolID";
$fdata ["ownerTable"] = "color";
$fdata ["Label"] = GetFieldLabel ( "color", "AutcolID" );
$fdata ["FieldType"] = 3;

$fdata ["AutoInc"] = true;

$fdata ["bListPage"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "AutcolID";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "AutcolID";

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

$tdatacolor ["AutcolID"] = $fdata;
// Color
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 2;
$fdata ["strName"] = "Color";
$fdata ["GoodName"] = "Color";
$fdata ["ownerTable"] = "color";
$fdata ["Label"] = GetFieldLabel ( "color", "Color" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Color";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Color";

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

$tdatacolor ["Color"] = $fdata;

$tables_data ["color"] = &$tdatacolor;
$field_labels ["color"] = &$fieldLabelscolor;
$fieldToolTips ["color"] = &$fieldToolTipscolor;
$page_titles ["color"] = &$pageTitlescolor;

// -----------------start prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData ["color"] = array ();

// tables which are master tables for current table (detail)
$masterTablesData ["color"] = array ();

// -----------------end prepare master-details data arrays ------------------------------//

require_once (getabspath ( "classes/sql.php" ));
function createSqlQuery_color() {
	$proto0 = array ();
	$proto0 ["m_strHead"] = "SELECT";
	$proto0 ["m_strFieldList"] = "AutcolID,  	Color";
	$proto0 ["m_strFrom"] = "FROM color";
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
			"m_strName" => "AutcolID",
			"m_strTable" => "color",
			"m_srcTableName" => "color" 
	) );
	
	$proto5 ["m_sql"] = "AutcolID";
	$proto5 ["m_srcTableName"] = "color";
	$proto5 ["m_expr"] = $obj;
	$proto5 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto5 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto7 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Color",
			"m_strTable" => "color",
			"m_srcTableName" => "color" 
	) );
	
	$proto7 ["m_sql"] = "Color";
	$proto7 ["m_srcTableName"] = "color";
	$proto7 ["m_expr"] = $obj;
	$proto7 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto7 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto0 ["m_fromlist"] = array ();
	$proto9 = array ();
	$proto9 ["m_link"] = "SQLL_MAIN";
	$proto10 = array ();
	$proto10 ["m_strName"] = "color";
	$proto10 ["m_srcTableName"] = "color";
	$proto10 ["m_columns"] = array ();
	$proto10 ["m_columns"] [] = "AutcolID";
	$proto10 ["m_columns"] [] = "Color";
	$obj = new SQLTable ( $proto10 );
	
	$proto9 ["m_table"] = $obj;
	$proto9 ["m_sql"] = "color";
	$proto9 ["m_alias"] = "";
	$proto9 ["m_srcTableName"] = "color";
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
	$proto0 ["m_srcTableName"] = "color";
	$obj = new SQLQuery ( $proto0 );
	
	return $obj;
}
$queryData_color = createSqlQuery_color ();

$tdatacolor [".sqlquery"] = $queryData_color;

$tableEvents ["color"] = new eventsBase ();
$tdatacolor [".hasEvents"] = false;

?>