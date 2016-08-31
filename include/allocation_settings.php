<?php
require_once (getabspath ( "classes/cipherer.php" ));

$tdataallocation = array ();
$tdataallocation [".truncateText"] = true;
$tdataallocation [".NumberOfChars"] = 60;
$tdataallocation [".ShortName"] = "allocation";
$tdataallocation [".OwnerID"] = "";
$tdataallocation [".OriginalTable"] = "allocation";

// field labels
$fieldLabelsallocation = array ();
$fieldToolTipsallocation = array ();
$pageTitlesallocation = array ();

if (mlang_getcurrentlang () == "English") {
	$fieldLabelsallocation ["English"] = array ();
	$fieldToolTipsallocation ["English"] = array ();
	$pageTitlesallocation ["English"] = array ();
	$fieldLabelsallocation ["English"] ["AutallocID"] = "Autalloc ID";
	$fieldToolTipsallocation ["English"] ["AutallocID"] = "";
	$fieldLabelsallocation ["English"] ["Allocation"] = "Allocation";
	$fieldToolTipsallocation ["English"] ["Allocation"] = "";
	$fieldLabelsallocation ["English"] ["Percent"] = "Percent";
	$fieldToolTipsallocation ["English"] ["Percent"] = "";
	if (count ( $fieldToolTipsallocation ["English"] ))
		$tdataallocation [".isUseToolTips"] = true;
}
if (mlang_getcurrentlang () == "") {
	$fieldLabelsallocation [""] = array ();
	$fieldToolTipsallocation [""] = array ();
	$pageTitlesallocation [""] = array ();
	if (count ( $fieldToolTipsallocation [""] ))
		$tdataallocation [".isUseToolTips"] = true;
}

$tdataallocation [".NCSearch"] = true;

$tdataallocation [".shortTableName"] = "allocation";
$tdataallocation [".nSecOptions"] = 0;
$tdataallocation [".recsPerRowList"] = 1;
$tdataallocation [".recsPerRowPrint"] = 1;
$tdataallocation [".mainTableOwnerID"] = "";
$tdataallocation [".moveNext"] = 0;
$tdataallocation [".entityType"] = 0;

$tdataallocation [".strOriginalTableName"] = "allocation";

$tdataallocation [".showAddInPopup"] = false;

$tdataallocation [".showEditInPopup"] = false;

$tdataallocation [".showViewInPopup"] = false;

// page's base css files names
$popupPagesLayoutNames = array ();
$tdataallocation [".popupPagesLayoutNames"] = $popupPagesLayoutNames;

$tdataallocation [".fieldsForRegister"] = array ();

$tdataallocation [".listAjax"] = false;

$tdataallocation [".audit"] = false;

$tdataallocation [".locking"] = false;

$tdataallocation [".edit"] = true;
$tdataallocation [".afterEditAction"] = 1;
$tdataallocation [".closePopupAfterEdit"] = 1;
$tdataallocation [".afterEditActionDetTable"] = "";

$tdataallocation [".add"] = true;
$tdataallocation [".afterAddAction"] = 1;
$tdataallocation [".closePopupAfterAdd"] = 1;
$tdataallocation [".afterAddActionDetTable"] = "";

$tdataallocation [".list"] = true;

$tdataallocation [".inlineEdit"] = true;
$tdataallocation [".inlineAdd"] = true;
$tdataallocation [".view"] = true;

$tdataallocation [".import"] = true;

$tdataallocation [".exportTo"] = true;

$tdataallocation [".printFriendly"] = true;

$tdataallocation [".delete"] = true;

$tdataallocation [".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataallocation [".searchSaving"] = false;
//

$tdataallocation [".showSearchPanel"] = true;
$tdataallocation [".flexibleSearch"] = true;

if (isMobile ())
	$tdataallocation [".isUseAjaxSuggest"] = false;
else
	$tdataallocation [".isUseAjaxSuggest"] = true;

$tdataallocation [".rowHighlite"] = true;

$tdataallocation [".addPageEvents"] = false;

// use timepicker for search panel
$tdataallocation [".isUseTimeForSearch"] = false;

$tdataallocation [".allSearchFields"] = array ();
$tdataallocation [".filterFields"] = array ();
$tdataallocation [".requiredSearchFields"] = array ();

$tdataallocation [".allSearchFields"] [] = "AutallocID";
$tdataallocation [".allSearchFields"] [] = "Allocation";
$tdataallocation [".allSearchFields"] [] = "Percent";

$tdataallocation [".googleLikeFields"] = array ();
$tdataallocation [".googleLikeFields"] [] = "AutallocID";
$tdataallocation [".googleLikeFields"] [] = "Allocation";
$tdataallocation [".googleLikeFields"] [] = "Percent";

$tdataallocation [".advSearchFields"] = array ();
$tdataallocation [".advSearchFields"] [] = "AutallocID";
$tdataallocation [".advSearchFields"] [] = "Allocation";
$tdataallocation [".advSearchFields"] [] = "Percent";

$tdataallocation [".tableType"] = "list";

$tdataallocation [".printerPageOrientation"] = 0;
$tdataallocation [".nPrinterPageScale"] = 100;

$tdataallocation [".nPrinterSplitRecords"] = 40;

$tdataallocation [".nPrinterPDFSplitRecords"] = 40;

$tdataallocation [".geocodingEnabled"] = false;

// view page pdf

// print page pdf

$tdataallocation [".pageSize"] = 10;

$tdataallocation [".warnLeavingPages"] = true;

$tstrOrderBy = "";
if (strlen ( $tstrOrderBy ) && strtolower ( substr ( $tstrOrderBy, 0, 8 ) ) != "order by")
	$tstrOrderBy = "order by " . $tstrOrderBy;
$tdataallocation [".strOrderBy"] = $tstrOrderBy;

$tdataallocation [".orderindexes"] = array ();

$tdataallocation [".sqlHead"] = "SELECT AutallocID,  	Allocation,  	`Percent`";
$tdataallocation [".sqlFrom"] = "FROM allocation";
$tdataallocation [".sqlWhereExpr"] = "";
$tdataallocation [".sqlTail"] = "";

// fill array of records per page for list and report without group fields
$arrRPP = array ();
$arrRPP [] = 10;
$arrRPP [] = 20;
$arrRPP [] = 30;
$arrRPP [] = 50;
$arrRPP [] = 100;
$arrRPP [] = 500;
$arrRPP [] = - 1;
$tdataallocation [".arrRecsPerPage"] = $arrRPP;

// fill array of groups per page for report with group fields
$arrGPP = array ();
$arrGPP [] = 1;
$arrGPP [] = 3;
$arrGPP [] = 5;
$arrGPP [] = 10;
$arrGPP [] = 50;
$arrGPP [] = 100;
$arrGPP [] = - 1;
$tdataallocation [".arrGroupsPerPage"] = $arrGPP;

$tableKeysallocation = array ();
$tableKeysallocation [] = "AutallocID";
$tdataallocation [".Keys"] = $tableKeysallocation;

$tdataallocation [".listFields"] = array ();
$tdataallocation [".listFields"] [] = "AutallocID";
$tdataallocation [".listFields"] [] = "Allocation";
$tdataallocation [".listFields"] [] = "Percent";

$tdataallocation [".hideMobileList"] = array ();

$tdataallocation [".viewFields"] = array ();
$tdataallocation [".viewFields"] [] = "AutallocID";
$tdataallocation [".viewFields"] [] = "Allocation";
$tdataallocation [".viewFields"] [] = "Percent";

$tdataallocation [".addFields"] = array ();
$tdataallocation [".addFields"] [] = "Allocation";
$tdataallocation [".addFields"] [] = "Percent";

$tdataallocation [".masterListFields"] = array ();
$tdataallocation [".masterListFields"] [] = "AutallocID";
$tdataallocation [".masterListFields"] [] = "Allocation";
$tdataallocation [".masterListFields"] [] = "Percent";

$tdataallocation [".inlineAddFields"] = array ();
$tdataallocation [".inlineAddFields"] [] = "Allocation";
$tdataallocation [".inlineAddFields"] [] = "Percent";

$tdataallocation [".editFields"] = array ();
$tdataallocation [".editFields"] [] = "Allocation";
$tdataallocation [".editFields"] [] = "Percent";

$tdataallocation [".inlineEditFields"] = array ();
$tdataallocation [".inlineEditFields"] [] = "Allocation";
$tdataallocation [".inlineEditFields"] [] = "Percent";

$tdataallocation [".exportFields"] = array ();
$tdataallocation [".exportFields"] [] = "AutallocID";
$tdataallocation [".exportFields"] [] = "Allocation";
$tdataallocation [".exportFields"] [] = "Percent";

$tdataallocation [".importFields"] = array ();
$tdataallocation [".importFields"] [] = "AutallocID";
$tdataallocation [".importFields"] [] = "Allocation";
$tdataallocation [".importFields"] [] = "Percent";

$tdataallocation [".printFields"] = array ();
$tdataallocation [".printFields"] [] = "AutallocID";
$tdataallocation [".printFields"] [] = "Allocation";
$tdataallocation [".printFields"] [] = "Percent";

// AutallocID
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 1;
$fdata ["strName"] = "AutallocID";
$fdata ["GoodName"] = "AutallocID";
$fdata ["ownerTable"] = "allocation";
$fdata ["Label"] = GetFieldLabel ( "allocation", "AutallocID" );
$fdata ["FieldType"] = 3;

$fdata ["AutoInc"] = true;

$fdata ["bListPage"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "AutallocID";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "AutallocID";

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

$tdataallocation ["AutallocID"] = $fdata;
// Allocation
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 2;
$fdata ["strName"] = "Allocation";
$fdata ["GoodName"] = "Allocation";
$fdata ["ownerTable"] = "allocation";
$fdata ["Label"] = GetFieldLabel ( "allocation", "Allocation" );
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

$fdata ["strField"] = "Allocation";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Allocation";

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

$tdataallocation ["Allocation"] = $fdata;
// Percent
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 3;
$fdata ["strName"] = "Percent";
$fdata ["GoodName"] = "Percent";
$fdata ["ownerTable"] = "allocation";
$fdata ["Label"] = GetFieldLabel ( "allocation", "Percent" );
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

$fdata ["strField"] = "Percent";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "`Percent`";

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
$edata ["EditParams"] .= " maxlength=5";

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

$tdataallocation ["Percent"] = $fdata;

$tables_data ["allocation"] = &$tdataallocation;
$field_labels ["allocation"] = &$fieldLabelsallocation;
$fieldToolTips ["allocation"] = &$fieldToolTipsallocation;
$page_titles ["allocation"] = &$pageTitlesallocation;

// -----------------start prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData ["allocation"] = array ();

// tables which are master tables for current table (detail)
$masterTablesData ["allocation"] = array ();

// -----------------end prepare master-details data arrays ------------------------------//

require_once (getabspath ( "classes/sql.php" ));
function createSqlQuery_allocation() {
	$proto0 = array ();
	$proto0 ["m_strHead"] = "SELECT";
	$proto0 ["m_strFieldList"] = "AutallocID,  	Allocation,  	`Percent`";
	$proto0 ["m_strFrom"] = "FROM allocation";
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
			"m_strName" => "AutallocID",
			"m_strTable" => "allocation",
			"m_srcTableName" => "allocation" 
	) );
	
	$proto5 ["m_sql"] = "AutallocID";
	$proto5 ["m_srcTableName"] = "allocation";
	$proto5 ["m_expr"] = $obj;
	$proto5 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto5 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto7 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Allocation",
			"m_strTable" => "allocation",
			"m_srcTableName" => "allocation" 
	) );
	
	$proto7 ["m_sql"] = "Allocation";
	$proto7 ["m_srcTableName"] = "allocation";
	$proto7 ["m_expr"] = $obj;
	$proto7 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto7 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto9 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Percent",
			"m_strTable" => "allocation",
			"m_srcTableName" => "allocation" 
	) );
	
	$proto9 ["m_sql"] = "`Percent`";
	$proto9 ["m_srcTableName"] = "allocation";
	$proto9 ["m_expr"] = $obj;
	$proto9 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto9 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto0 ["m_fromlist"] = array ();
	$proto11 = array ();
	$proto11 ["m_link"] = "SQLL_MAIN";
	$proto12 = array ();
	$proto12 ["m_strName"] = "allocation";
	$proto12 ["m_srcTableName"] = "allocation";
	$proto12 ["m_columns"] = array ();
	$proto12 ["m_columns"] [] = "AutallocID";
	$proto12 ["m_columns"] [] = "Allocation";
	$proto12 ["m_columns"] [] = "Percent";
	$obj = new SQLTable ( $proto12 );
	
	$proto11 ["m_table"] = $obj;
	$proto11 ["m_sql"] = "allocation";
	$proto11 ["m_alias"] = "";
	$proto11 ["m_srcTableName"] = "allocation";
	$proto13 = array ();
	$proto13 ["m_sql"] = "";
	$proto13 ["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed ( array (
			"m_sql" => "" 
	) );
	
	$proto13 ["m_column"] = $obj;
	$proto13 ["m_contained"] = array ();
	$proto13 ["m_strCase"] = "";
	$proto13 ["m_havingmode"] = false;
	$proto13 ["m_inBrackets"] = false;
	$proto13 ["m_useAlias"] = false;
	$obj = new SQLLogicalExpr ( $proto13 );
	
	$proto11 ["m_joinon"] = $obj;
	$obj = new SQLFromListItem ( $proto11 );
	
	$proto0 ["m_fromlist"] [] = $obj;
	$proto0 ["m_groupby"] = array ();
	$proto0 ["m_orderby"] = array ();
	$proto0 ["m_srcTableName"] = "allocation";
	$obj = new SQLQuery ( $proto0 );
	
	return $obj;
}
$queryData_allocation = createSqlQuery_allocation ();

$tdataallocation [".sqlquery"] = $queryData_allocation;

$tableEvents ["allocation"] = new eventsBase ();
$tdataallocation [".hasEvents"] = false;

?>