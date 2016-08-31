<?php
require_once (getabspath ( "classes/cipherer.php" ));

$tdatasize = array ();
$tdatasize [".truncateText"] = true;
$tdatasize [".NumberOfChars"] = 60;
$tdatasize [".ShortName"] = "size";
$tdatasize [".OwnerID"] = "";
$tdatasize [".OriginalTable"] = "size";

// field labels
$fieldLabelssize = array ();
$fieldToolTipssize = array ();
$pageTitlessize = array ();

if (mlang_getcurrentlang () == "English") {
	$fieldLabelssize ["English"] = array ();
	$fieldToolTipssize ["English"] = array ();
	$pageTitlessize ["English"] = array ();
	$fieldLabelssize ["English"] ["SizeID"] = "Size ID";
	$fieldToolTipssize ["English"] ["SizeID"] = "";
	$fieldLabelssize ["English"] ["Size"] = "Size";
	$fieldToolTipssize ["English"] ["Size"] = "";
	if (count ( $fieldToolTipssize ["English"] ))
		$tdatasize [".isUseToolTips"] = true;
}
if (mlang_getcurrentlang () == "") {
	$fieldLabelssize [""] = array ();
	$fieldToolTipssize [""] = array ();
	$pageTitlessize [""] = array ();
	$fieldLabelssize [""] ["SizeID"] = "Size ID";
	$fieldToolTipssize [""] ["SizeID"] = "";
	$fieldLabelssize [""] ["Size"] = "Size";
	$fieldToolTipssize [""] ["Size"] = "";
	if (count ( $fieldToolTipssize [""] ))
		$tdatasize [".isUseToolTips"] = true;
}

$tdatasize [".NCSearch"] = true;

$tdatasize [".shortTableName"] = "size";
$tdatasize [".nSecOptions"] = 0;
$tdatasize [".recsPerRowList"] = 1;
$tdatasize [".recsPerRowPrint"] = 1;
$tdatasize [".mainTableOwnerID"] = "";
$tdatasize [".moveNext"] = 0;
$tdatasize [".entityType"] = 0;

$tdatasize [".strOriginalTableName"] = "size";

$tdatasize [".showAddInPopup"] = false;

$tdatasize [".showEditInPopup"] = false;

$tdatasize [".showViewInPopup"] = false;

// page's base css files names
$popupPagesLayoutNames = array ();
$tdatasize [".popupPagesLayoutNames"] = $popupPagesLayoutNames;

$tdatasize [".fieldsForRegister"] = array ();

$tdatasize [".listAjax"] = false;

$tdatasize [".audit"] = false;

$tdatasize [".locking"] = false;

$tdatasize [".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatasize [".searchSaving"] = false;
//

$tdatasize [".showSearchPanel"] = true;
$tdatasize [".flexibleSearch"] = true;

if (isMobile ())
	$tdatasize [".isUseAjaxSuggest"] = false;
else
	$tdatasize [".isUseAjaxSuggest"] = true;

$tdatasize [".rowHighlite"] = true;

$tdatasize [".addPageEvents"] = false;

// use timepicker for search panel
$tdatasize [".isUseTimeForSearch"] = false;

$tdatasize [".allSearchFields"] = array ();
$tdatasize [".filterFields"] = array ();
$tdatasize [".requiredSearchFields"] = array ();

$tdatasize [".googleLikeFields"] = array ();
$tdatasize [".googleLikeFields"] [] = "SizeID";
$tdatasize [".googleLikeFields"] [] = "Size";

$tdatasize [".advSearchFields"] = array ();
$tdatasize [".advSearchFields"] [] = "SizeID";
$tdatasize [".advSearchFields"] [] = "Size";

$tdatasize [".tableType"] = "list";

$tdatasize [".printerPageOrientation"] = 0;
$tdatasize [".nPrinterPageScale"] = 100;

$tdatasize [".nPrinterSplitRecords"] = 40;

$tdatasize [".nPrinterPDFSplitRecords"] = 40;

$tdatasize [".geocodingEnabled"] = false;

// view page pdf

// print page pdf

$tdatasize [".pageSize"] = 10;

$tdatasize [".warnLeavingPages"] = true;

$tstrOrderBy = "";
if (strlen ( $tstrOrderBy ) && strtolower ( substr ( $tstrOrderBy, 0, 8 ) ) != "order by")
	$tstrOrderBy = "order by " . $tstrOrderBy;
$tdatasize [".strOrderBy"] = $tstrOrderBy;

$tdatasize [".orderindexes"] = array ();

$tdatasize [".sqlHead"] = "SELECT SizeID,  	`Size`";
$tdatasize [".sqlFrom"] = "FROM `size`";
$tdatasize [".sqlWhereExpr"] = "";
$tdatasize [".sqlTail"] = "";

// fill array of records per page for list and report without group fields
$arrRPP = array ();
$arrRPP [] = 10;
$arrRPP [] = 20;
$arrRPP [] = 30;
$arrRPP [] = 50;
$arrRPP [] = 100;
$arrRPP [] = 500;
$arrRPP [] = - 1;
$tdatasize [".arrRecsPerPage"] = $arrRPP;

// fill array of groups per page for report with group fields
$arrGPP = array ();
$arrGPP [] = 1;
$arrGPP [] = 3;
$arrGPP [] = 5;
$arrGPP [] = 10;
$arrGPP [] = 50;
$arrGPP [] = 100;
$arrGPP [] = - 1;
$tdatasize [".arrGroupsPerPage"] = $arrGPP;

$tableKeyssize = array ();
$tableKeyssize [] = "SizeID";
$tdatasize [".Keys"] = $tableKeyssize;

$tdatasize [".listFields"] = array ();
$tdatasize [".listFields"] [] = "SizeID";
$tdatasize [".listFields"] [] = "Size";

$tdatasize [".hideMobileList"] = array ();

$tdatasize [".viewFields"] = array ();
$tdatasize [".viewFields"] [] = "SizeID";
$tdatasize [".viewFields"] [] = "Size";

$tdatasize [".addFields"] = array ();
$tdatasize [".addFields"] [] = "Size";

$tdatasize [".masterListFields"] = array ();
$tdatasize [".masterListFields"] [] = "SizeID";
$tdatasize [".masterListFields"] [] = "Size";

$tdatasize [".inlineAddFields"] = array ();
$tdatasize [".inlineAddFields"] [] = "Size";

$tdatasize [".editFields"] = array ();
$tdatasize [".editFields"] [] = "Size";

$tdatasize [".inlineEditFields"] = array ();
$tdatasize [".inlineEditFields"] [] = "Size";

$tdatasize [".exportFields"] = array ();
$tdatasize [".exportFields"] [] = "SizeID";
$tdatasize [".exportFields"] [] = "Size";

$tdatasize [".importFields"] = array ();
$tdatasize [".importFields"] [] = "SizeID";
$tdatasize [".importFields"] [] = "Size";

$tdatasize [".printFields"] = array ();
$tdatasize [".printFields"] [] = "SizeID";
$tdatasize [".printFields"] [] = "Size";

// SizeID
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 1;
$fdata ["strName"] = "SizeID";
$fdata ["GoodName"] = "SizeID";
$fdata ["ownerTable"] = "size";
$fdata ["Label"] = GetFieldLabel ( "size", "SizeID" );
$fdata ["FieldType"] = 3;

$fdata ["AutoInc"] = true;

$fdata ["bListPage"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "SizeID";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "SizeID";

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

$tdatasize ["SizeID"] = $fdata;
// Size
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 2;
$fdata ["strName"] = "Size";
$fdata ["GoodName"] = "Size";
$fdata ["ownerTable"] = "size";
$fdata ["Label"] = GetFieldLabel ( "size", "Size" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Size";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "`Size`";

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

$tdatasize ["Size"] = $fdata;

$tables_data ["size"] = &$tdatasize;
$field_labels ["size"] = &$fieldLabelssize;
$fieldToolTips ["size"] = &$fieldToolTipssize;
$page_titles ["size"] = &$pageTitlessize;

// -----------------start prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData ["size"] = array ();

// tables which are master tables for current table (detail)
$masterTablesData ["size"] = array ();

// -----------------end prepare master-details data arrays ------------------------------//

require_once (getabspath ( "classes/sql.php" ));
function createSqlQuery_size() {
	$proto0 = array ();
	$proto0 ["m_strHead"] = "SELECT";
	$proto0 ["m_strFieldList"] = "SizeID,  	`Size`";
	$proto0 ["m_strFrom"] = "FROM `size`";
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
			"m_strName" => "SizeID",
			"m_strTable" => "size",
			"m_srcTableName" => "size" 
	) );
	
	$proto5 ["m_sql"] = "SizeID";
	$proto5 ["m_srcTableName"] = "size";
	$proto5 ["m_expr"] = $obj;
	$proto5 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto5 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto7 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Size",
			"m_strTable" => "size",
			"m_srcTableName" => "size" 
	) );
	
	$proto7 ["m_sql"] = "`Size`";
	$proto7 ["m_srcTableName"] = "size";
	$proto7 ["m_expr"] = $obj;
	$proto7 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto7 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto0 ["m_fromlist"] = array ();
	$proto9 = array ();
	$proto9 ["m_link"] = "SQLL_MAIN";
	$proto10 = array ();
	$proto10 ["m_strName"] = "size";
	$proto10 ["m_srcTableName"] = "size";
	$proto10 ["m_columns"] = array ();
	$proto10 ["m_columns"] [] = "SizeID";
	$proto10 ["m_columns"] [] = "Size";
	$obj = new SQLTable ( $proto10 );
	
	$proto9 ["m_table"] = $obj;
	$proto9 ["m_sql"] = "`size`";
	$proto9 ["m_alias"] = "";
	$proto9 ["m_srcTableName"] = "size";
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
	$proto0 ["m_srcTableName"] = "size";
	$obj = new SQLQuery ( $proto0 );
	
	return $obj;
}
$queryData_size = createSqlQuery_size ();

$tdatasize [".sqlquery"] = $queryData_size;

$tableEvents ["size"] = new eventsBase ();
$tdatasize [".hasEvents"] = false;

?>