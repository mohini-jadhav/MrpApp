<?php
require_once (getabspath ( "classes/cipherer.php" ));

$tdatastage = array ();
$tdatastage [".truncateText"] = true;
$tdatastage [".NumberOfChars"] = 60;
$tdatastage [".ShortName"] = "stage";
$tdatastage [".OwnerID"] = "";
$tdatastage [".OriginalTable"] = "stage";

// field labels
$fieldLabelsstage = array ();
$fieldToolTipsstage = array ();
$pageTitlesstage = array ();

if (mlang_getcurrentlang () == "English") {
	$fieldLabelsstage ["English"] = array ();
	$fieldToolTipsstage ["English"] = array ();
	$pageTitlesstage ["English"] = array ();
	$fieldLabelsstage ["English"] ["AutstageID"] = "Autstage ID";
	$fieldToolTipsstage ["English"] ["AutstageID"] = "";
	$fieldLabelsstage ["English"] ["Stage"] = "Stage";
	$fieldToolTipsstage ["English"] ["Stage"] = "";
	if (count ( $fieldToolTipsstage ["English"] ))
		$tdatastage [".isUseToolTips"] = true;
}
if (mlang_getcurrentlang () == "") {
	$fieldLabelsstage [""] = array ();
	$fieldToolTipsstage [""] = array ();
	$pageTitlesstage [""] = array ();
	if (count ( $fieldToolTipsstage [""] ))
		$tdatastage [".isUseToolTips"] = true;
}

$tdatastage [".NCSearch"] = true;

$tdatastage [".shortTableName"] = "stage";
$tdatastage [".nSecOptions"] = 0;
$tdatastage [".recsPerRowList"] = 1;
$tdatastage [".recsPerRowPrint"] = 1;
$tdatastage [".mainTableOwnerID"] = "";
$tdatastage [".moveNext"] = 0;
$tdatastage [".entityType"] = 0;

$tdatastage [".strOriginalTableName"] = "stage";

$tdatastage [".showAddInPopup"] = false;

$tdatastage [".showEditInPopup"] = false;

$tdatastage [".showViewInPopup"] = false;

// page's base css files names
$popupPagesLayoutNames = array ();
$tdatastage [".popupPagesLayoutNames"] = $popupPagesLayoutNames;

$tdatastage [".fieldsForRegister"] = array ();

$tdatastage [".listAjax"] = false;

$tdatastage [".audit"] = false;

$tdatastage [".locking"] = false;

$tdatastage [".edit"] = true;
$tdatastage [".afterEditAction"] = 1;
$tdatastage [".closePopupAfterEdit"] = 1;
$tdatastage [".afterEditActionDetTable"] = "";

$tdatastage [".add"] = true;
$tdatastage [".afterAddAction"] = 1;
$tdatastage [".closePopupAfterAdd"] = 1;
$tdatastage [".afterAddActionDetTable"] = "";

$tdatastage [".list"] = true;

$tdatastage [".inlineEdit"] = true;
$tdatastage [".inlineAdd"] = true;
$tdatastage [".view"] = true;

$tdatastage [".import"] = true;

$tdatastage [".exportTo"] = true;

$tdatastage [".printFriendly"] = true;

$tdatastage [".delete"] = true;

$tdatastage [".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatastage [".searchSaving"] = false;
//

$tdatastage [".showSearchPanel"] = true;
$tdatastage [".flexibleSearch"] = true;

if (isMobile ())
	$tdatastage [".isUseAjaxSuggest"] = false;
else
	$tdatastage [".isUseAjaxSuggest"] = true;

$tdatastage [".rowHighlite"] = true;

$tdatastage [".addPageEvents"] = false;

// use timepicker for search panel
$tdatastage [".isUseTimeForSearch"] = false;

$tdatastage [".allSearchFields"] = array ();
$tdatastage [".filterFields"] = array ();
$tdatastage [".requiredSearchFields"] = array ();

$tdatastage [".allSearchFields"] [] = "Stage";

$tdatastage [".googleLikeFields"] = array ();
$tdatastage [".googleLikeFields"] [] = "AutstageID";
$tdatastage [".googleLikeFields"] [] = "Stage";

$tdatastage [".advSearchFields"] = array ();
$tdatastage [".advSearchFields"] [] = "Stage";

$tdatastage [".tableType"] = "list";

$tdatastage [".printerPageOrientation"] = 0;
$tdatastage [".nPrinterPageScale"] = 100;

$tdatastage [".nPrinterSplitRecords"] = 40;

$tdatastage [".nPrinterPDFSplitRecords"] = 40;

$tdatastage [".geocodingEnabled"] = false;

// view page pdf

// print page pdf

$tdatastage [".pageSize"] = 10;

$tdatastage [".warnLeavingPages"] = true;

$tstrOrderBy = "";
if (strlen ( $tstrOrderBy ) && strtolower ( substr ( $tstrOrderBy, 0, 8 ) ) != "order by")
	$tstrOrderBy = "order by " . $tstrOrderBy;
$tdatastage [".strOrderBy"] = $tstrOrderBy;

$tdatastage [".orderindexes"] = array ();

$tdatastage [".sqlHead"] = "SELECT AutstageID,  	Stage";
$tdatastage [".sqlFrom"] = "FROM stage";
$tdatastage [".sqlWhereExpr"] = "";
$tdatastage [".sqlTail"] = "";

// fill array of records per page for list and report without group fields
$arrRPP = array ();
$arrRPP [] = 10;
$arrRPP [] = 20;
$arrRPP [] = 30;
$arrRPP [] = 50;
$arrRPP [] = 100;
$arrRPP [] = 500;
$arrRPP [] = - 1;
$tdatastage [".arrRecsPerPage"] = $arrRPP;

// fill array of groups per page for report with group fields
$arrGPP = array ();
$arrGPP [] = 1;
$arrGPP [] = 3;
$arrGPP [] = 5;
$arrGPP [] = 10;
$arrGPP [] = 50;
$arrGPP [] = 100;
$arrGPP [] = - 1;
$tdatastage [".arrGroupsPerPage"] = $arrGPP;

$tableKeysstage = array ();
$tableKeysstage [] = "AutstageID";
$tdatastage [".Keys"] = $tableKeysstage;

$tdatastage [".listFields"] = array ();
$tdatastage [".listFields"] [] = "Stage";

$tdatastage [".hideMobileList"] = array ();

$tdatastage [".viewFields"] = array ();
$tdatastage [".viewFields"] [] = "Stage";

$tdatastage [".addFields"] = array ();
$tdatastage [".addFields"] [] = "Stage";

$tdatastage [".masterListFields"] = array ();
$tdatastage [".masterListFields"] [] = "AutstageID";
$tdatastage [".masterListFields"] [] = "Stage";

$tdatastage [".inlineAddFields"] = array ();
$tdatastage [".inlineAddFields"] [] = "Stage";

$tdatastage [".editFields"] = array ();
$tdatastage [".editFields"] [] = "Stage";

$tdatastage [".inlineEditFields"] = array ();
$tdatastage [".inlineEditFields"] [] = "Stage";

$tdatastage [".exportFields"] = array ();
$tdatastage [".exportFields"] [] = "Stage";

$tdatastage [".importFields"] = array ();
$tdatastage [".importFields"] [] = "Stage";

$tdatastage [".printFields"] = array ();
$tdatastage [".printFields"] [] = "Stage";

// AutstageID
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 1;
$fdata ["strName"] = "AutstageID";
$fdata ["GoodName"] = "AutstageID";
$fdata ["ownerTable"] = "stage";
$fdata ["Label"] = GetFieldLabel ( "stage", "AutstageID" );
$fdata ["FieldType"] = 3;

$fdata ["AutoInc"] = true;

$fdata ["strField"] = "AutstageID";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "AutstageID";

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

$tdatastage ["AutstageID"] = $fdata;
// Stage
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 2;
$fdata ["strName"] = "Stage";
$fdata ["GoodName"] = "Stage";
$fdata ["ownerTable"] = "stage";
$fdata ["Label"] = GetFieldLabel ( "stage", "Stage" );
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

$fdata ["strField"] = "Stage";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Stage";

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

$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = false;

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

// the end of search options settings

$tdatastage ["Stage"] = $fdata;

$tables_data ["stage"] = &$tdatastage;
$field_labels ["stage"] = &$fieldLabelsstage;
$fieldToolTips ["stage"] = &$fieldToolTipsstage;
$page_titles ["stage"] = &$pageTitlesstage;

// -----------------start prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData ["stage"] = array ();

// tables which are master tables for current table (detail)
$masterTablesData ["stage"] = array ();

// -----------------end prepare master-details data arrays ------------------------------//

require_once (getabspath ( "classes/sql.php" ));
function createSqlQuery_stage() {
	$proto0 = array ();
	$proto0 ["m_strHead"] = "SELECT";
	$proto0 ["m_strFieldList"] = "AutstageID,  	Stage";
	$proto0 ["m_strFrom"] = "FROM stage";
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
			"m_strName" => "AutstageID",
			"m_strTable" => "stage",
			"m_srcTableName" => "stage" 
	) );
	
	$proto5 ["m_sql"] = "AutstageID";
	$proto5 ["m_srcTableName"] = "stage";
	$proto5 ["m_expr"] = $obj;
	$proto5 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto5 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto7 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Stage",
			"m_strTable" => "stage",
			"m_srcTableName" => "stage" 
	) );
	
	$proto7 ["m_sql"] = "Stage";
	$proto7 ["m_srcTableName"] = "stage";
	$proto7 ["m_expr"] = $obj;
	$proto7 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto7 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto0 ["m_fromlist"] = array ();
	$proto9 = array ();
	$proto9 ["m_link"] = "SQLL_MAIN";
	$proto10 = array ();
	$proto10 ["m_strName"] = "stage";
	$proto10 ["m_srcTableName"] = "stage";
	$proto10 ["m_columns"] = array ();
	$proto10 ["m_columns"] [] = "AutstageID";
	$proto10 ["m_columns"] [] = "Stage";
	$obj = new SQLTable ( $proto10 );
	
	$proto9 ["m_table"] = $obj;
	$proto9 ["m_sql"] = "stage";
	$proto9 ["m_alias"] = "";
	$proto9 ["m_srcTableName"] = "stage";
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
	$proto0 ["m_srcTableName"] = "stage";
	$obj = new SQLQuery ( $proto0 );
	
	return $obj;
}
$queryData_stage = createSqlQuery_stage ();

$tdatastage [".sqlquery"] = $queryData_stage;

$tableEvents ["stage"] = new eventsBase ();
$tdatastage [".hasEvents"] = false;

?>