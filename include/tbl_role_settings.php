<?php
require_once (getabspath ( "classes/cipherer.php" ));

$tdatatbl_role = array ();
$tdatatbl_role [".truncateText"] = true;
$tdatatbl_role [".NumberOfChars"] = 60;
$tdatatbl_role [".ShortName"] = "tbl_role";
$tdatatbl_role [".OwnerID"] = "";
$tdatatbl_role [".OriginalTable"] = "tbl_role";

// field labels
$fieldLabelstbl_role = array ();
$fieldToolTipstbl_role = array ();
$pageTitlestbl_role = array ();

if (mlang_getcurrentlang () == "English") {
	$fieldLabelstbl_role ["English"] = array ();
	$fieldToolTipstbl_role ["English"] = array ();
	$pageTitlestbl_role ["English"] = array ();
	$fieldLabelstbl_role ["English"] ["AutRoleID"] = "Aut Role ID";
	$fieldToolTipstbl_role ["English"] ["AutRoleID"] = "";
	$fieldLabelstbl_role ["English"] ["Role"] = "Role";
	$fieldToolTipstbl_role ["English"] ["Role"] = "";
	$fieldLabelstbl_role ["English"] ["Stage"] = "Stage";
	$fieldToolTipstbl_role ["English"] ["Stage"] = "";
	$fieldLabelstbl_role ["English"] ["Allocation"] = "Allocation";
	$fieldToolTipstbl_role ["English"] ["Allocation"] = "";
	if (count ( $fieldToolTipstbl_role ["English"] ))
		$tdatatbl_role [".isUseToolTips"] = true;
}
if (mlang_getcurrentlang () == "") {
	$fieldLabelstbl_role [""] = array ();
	$fieldToolTipstbl_role [""] = array ();
	$pageTitlestbl_role [""] = array ();
	if (count ( $fieldToolTipstbl_role [""] ))
		$tdatatbl_role [".isUseToolTips"] = true;
}

$tdatatbl_role [".NCSearch"] = true;

$tdatatbl_role [".shortTableName"] = "tbl_role";
$tdatatbl_role [".nSecOptions"] = 0;
$tdatatbl_role [".recsPerRowList"] = 1;
$tdatatbl_role [".recsPerRowPrint"] = 1;
$tdatatbl_role [".mainTableOwnerID"] = "";
$tdatatbl_role [".moveNext"] = 0;
$tdatatbl_role [".entityType"] = 0;

$tdatatbl_role [".strOriginalTableName"] = "tbl_role";

$tdatatbl_role [".showAddInPopup"] = false;

$tdatatbl_role [".showEditInPopup"] = false;

$tdatatbl_role [".showViewInPopup"] = false;

// page's base css files names
$popupPagesLayoutNames = array ();
$tdatatbl_role [".popupPagesLayoutNames"] = $popupPagesLayoutNames;

$tdatatbl_role [".fieldsForRegister"] = array ();

$tdatatbl_role [".listAjax"] = false;

$tdatatbl_role [".audit"] = false;

$tdatatbl_role [".locking"] = false;

$tdatatbl_role [".edit"] = true;
$tdatatbl_role [".afterEditAction"] = 1;
$tdatatbl_role [".closePopupAfterEdit"] = 1;
$tdatatbl_role [".afterEditActionDetTable"] = "";

$tdatatbl_role [".add"] = true;
$tdatatbl_role [".afterAddAction"] = 1;
$tdatatbl_role [".closePopupAfterAdd"] = 1;
$tdatatbl_role [".afterAddActionDetTable"] = "";

$tdatatbl_role [".list"] = true;

$tdatatbl_role [".inlineEdit"] = true;
$tdatatbl_role [".inlineAdd"] = true;
$tdatatbl_role [".view"] = true;

$tdatatbl_role [".import"] = true;

$tdatatbl_role [".exportTo"] = true;

$tdatatbl_role [".printFriendly"] = true;

$tdatatbl_role [".delete"] = true;

$tdatatbl_role [".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatatbl_role [".searchSaving"] = false;
//

$tdatatbl_role [".showSearchPanel"] = true;
$tdatatbl_role [".flexibleSearch"] = true;

if (isMobile ())
	$tdatatbl_role [".isUseAjaxSuggest"] = false;
else
	$tdatatbl_role [".isUseAjaxSuggest"] = true;

$tdatatbl_role [".rowHighlite"] = true;

$tdatatbl_role [".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_role [".isUseTimeForSearch"] = false;

$tdatatbl_role [".allSearchFields"] = array ();
$tdatatbl_role [".filterFields"] = array ();
$tdatatbl_role [".requiredSearchFields"] = array ();

$tdatatbl_role [".allSearchFields"] [] = "AutRoleID";
$tdatatbl_role [".allSearchFields"] [] = "Role";
$tdatatbl_role [".allSearchFields"] [] = "Stage";
$tdatatbl_role [".allSearchFields"] [] = "Allocation";

$tdatatbl_role [".googleLikeFields"] = array ();
$tdatatbl_role [".googleLikeFields"] [] = "AutRoleID";
$tdatatbl_role [".googleLikeFields"] [] = "Role";
$tdatatbl_role [".googleLikeFields"] [] = "Stage";
$tdatatbl_role [".googleLikeFields"] [] = "Allocation";

$tdatatbl_role [".advSearchFields"] = array ();
$tdatatbl_role [".advSearchFields"] [] = "AutRoleID";
$tdatatbl_role [".advSearchFields"] [] = "Role";
$tdatatbl_role [".advSearchFields"] [] = "Stage";
$tdatatbl_role [".advSearchFields"] [] = "Allocation";

$tdatatbl_role [".tableType"] = "list";

$tdatatbl_role [".printerPageOrientation"] = 0;
$tdatatbl_role [".nPrinterPageScale"] = 100;

$tdatatbl_role [".nPrinterSplitRecords"] = 40;

$tdatatbl_role [".nPrinterPDFSplitRecords"] = 40;

$tdatatbl_role [".geocodingEnabled"] = false;

// view page pdf

// print page pdf

$tdatatbl_role [".pageSize"] = 10;

$tdatatbl_role [".warnLeavingPages"] = true;

$tstrOrderBy = "";
if (strlen ( $tstrOrderBy ) && strtolower ( substr ( $tstrOrderBy, 0, 8 ) ) != "order by")
	$tstrOrderBy = "order by " . $tstrOrderBy;
$tdatatbl_role [".strOrderBy"] = $tstrOrderBy;

$tdatatbl_role [".orderindexes"] = array ();

$tdatatbl_role [".sqlHead"] = "SELECT AutRoleID,  	`Role`,  	Stage,  	Allocation";
$tdatatbl_role [".sqlFrom"] = "FROM tbl_role";
$tdatatbl_role [".sqlWhereExpr"] = "";
$tdatatbl_role [".sqlTail"] = "";

// fill array of records per page for list and report without group fields
$arrRPP = array ();
$arrRPP [] = 10;
$arrRPP [] = 20;
$arrRPP [] = 30;
$arrRPP [] = 50;
$arrRPP [] = 100;
$arrRPP [] = 500;
$arrRPP [] = - 1;
$tdatatbl_role [".arrRecsPerPage"] = $arrRPP;

// fill array of groups per page for report with group fields
$arrGPP = array ();
$arrGPP [] = 1;
$arrGPP [] = 3;
$arrGPP [] = 5;
$arrGPP [] = 10;
$arrGPP [] = 50;
$arrGPP [] = 100;
$arrGPP [] = - 1;
$tdatatbl_role [".arrGroupsPerPage"] = $arrGPP;

$tableKeystbl_role = array ();
$tableKeystbl_role [] = "AutRoleID";
$tdatatbl_role [".Keys"] = $tableKeystbl_role;

$tdatatbl_role [".listFields"] = array ();
$tdatatbl_role [".listFields"] [] = "AutRoleID";
$tdatatbl_role [".listFields"] [] = "Role";
$tdatatbl_role [".listFields"] [] = "Stage";
$tdatatbl_role [".listFields"] [] = "Allocation";

$tdatatbl_role [".hideMobileList"] = array ();

$tdatatbl_role [".viewFields"] = array ();
$tdatatbl_role [".viewFields"] [] = "AutRoleID";
$tdatatbl_role [".viewFields"] [] = "Role";
$tdatatbl_role [".viewFields"] [] = "Stage";
$tdatatbl_role [".viewFields"] [] = "Allocation";

$tdatatbl_role [".addFields"] = array ();
$tdatatbl_role [".addFields"] [] = "Role";
$tdatatbl_role [".addFields"] [] = "Stage";
$tdatatbl_role [".addFields"] [] = "Allocation";

$tdatatbl_role [".masterListFields"] = array ();
$tdatatbl_role [".masterListFields"] [] = "AutRoleID";
$tdatatbl_role [".masterListFields"] [] = "Role";
$tdatatbl_role [".masterListFields"] [] = "Stage";
$tdatatbl_role [".masterListFields"] [] = "Allocation";

$tdatatbl_role [".inlineAddFields"] = array ();
$tdatatbl_role [".inlineAddFields"] [] = "Role";
$tdatatbl_role [".inlineAddFields"] [] = "Stage";
$tdatatbl_role [".inlineAddFields"] [] = "Allocation";

$tdatatbl_role [".editFields"] = array ();
$tdatatbl_role [".editFields"] [] = "Role";
$tdatatbl_role [".editFields"] [] = "Stage";
$tdatatbl_role [".editFields"] [] = "Allocation";

$tdatatbl_role [".inlineEditFields"] = array ();
$tdatatbl_role [".inlineEditFields"] [] = "Role";
$tdatatbl_role [".inlineEditFields"] [] = "Stage";
$tdatatbl_role [".inlineEditFields"] [] = "Allocation";

$tdatatbl_role [".exportFields"] = array ();
$tdatatbl_role [".exportFields"] [] = "AutRoleID";
$tdatatbl_role [".exportFields"] [] = "Role";
$tdatatbl_role [".exportFields"] [] = "Stage";
$tdatatbl_role [".exportFields"] [] = "Allocation";

$tdatatbl_role [".importFields"] = array ();
$tdatatbl_role [".importFields"] [] = "AutRoleID";
$tdatatbl_role [".importFields"] [] = "Role";
$tdatatbl_role [".importFields"] [] = "Stage";
$tdatatbl_role [".importFields"] [] = "Allocation";

$tdatatbl_role [".printFields"] = array ();
$tdatatbl_role [".printFields"] [] = "AutRoleID";
$tdatatbl_role [".printFields"] [] = "Role";
$tdatatbl_role [".printFields"] [] = "Stage";
$tdatatbl_role [".printFields"] [] = "Allocation";

// AutRoleID
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 1;
$fdata ["strName"] = "AutRoleID";
$fdata ["GoodName"] = "AutRoleID";
$fdata ["ownerTable"] = "tbl_role";
$fdata ["Label"] = GetFieldLabel ( "tbl_role", "AutRoleID" );
$fdata ["FieldType"] = 3;

$fdata ["AutoInc"] = true;

$fdata ["bListPage"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "AutRoleID";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "AutRoleID";

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

$tdatatbl_role ["AutRoleID"] = $fdata;
// Role
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 2;
$fdata ["strName"] = "Role";
$fdata ["GoodName"] = "Role";
$fdata ["ownerTable"] = "tbl_role";
$fdata ["Label"] = GetFieldLabel ( "tbl_role", "Role" );
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

$fdata ["strField"] = "Role";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "`Role`";

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

$tdatatbl_role ["Role"] = $fdata;
// Stage
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 3;
$fdata ["strName"] = "Stage";
$fdata ["GoodName"] = "Stage";
$fdata ["ownerTable"] = "tbl_role";
$fdata ["Label"] = GetFieldLabel ( "tbl_role", "Stage" );
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

$tdatatbl_role ["Stage"] = $fdata;
// Allocation
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 4;
$fdata ["strName"] = "Allocation";
$fdata ["GoodName"] = "Allocation";
$fdata ["ownerTable"] = "tbl_role";
$fdata ["Label"] = GetFieldLabel ( "tbl_role", "Allocation" );
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
$edata ["EditParams"] .= " maxlength=4";

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

$tdatatbl_role ["Allocation"] = $fdata;

$tables_data ["tbl_role"] = &$tdatatbl_role;
$field_labels ["tbl_role"] = &$fieldLabelstbl_role;
$fieldToolTips ["tbl_role"] = &$fieldToolTipstbl_role;
$page_titles ["tbl_role"] = &$pageTitlestbl_role;

// -----------------start prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData ["tbl_role"] = array ();

// tables which are master tables for current table (detail)
$masterTablesData ["tbl_role"] = array ();

// -----------------end prepare master-details data arrays ------------------------------//

require_once (getabspath ( "classes/sql.php" ));
function createSqlQuery_tbl_role() {
	$proto0 = array ();
	$proto0 ["m_strHead"] = "SELECT";
	$proto0 ["m_strFieldList"] = "AutRoleID,  	`Role`,  	Stage,  	Allocation";
	$proto0 ["m_strFrom"] = "FROM tbl_role";
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
			"m_strName" => "AutRoleID",
			"m_strTable" => "tbl_role",
			"m_srcTableName" => "tbl_role" 
	) );
	
	$proto5 ["m_sql"] = "AutRoleID";
	$proto5 ["m_srcTableName"] = "tbl_role";
	$proto5 ["m_expr"] = $obj;
	$proto5 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto5 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto7 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Role",
			"m_strTable" => "tbl_role",
			"m_srcTableName" => "tbl_role" 
	) );
	
	$proto7 ["m_sql"] = "`Role`";
	$proto7 ["m_srcTableName"] = "tbl_role";
	$proto7 ["m_expr"] = $obj;
	$proto7 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto7 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto9 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Stage",
			"m_strTable" => "tbl_role",
			"m_srcTableName" => "tbl_role" 
	) );
	
	$proto9 ["m_sql"] = "Stage";
	$proto9 ["m_srcTableName"] = "tbl_role";
	$proto9 ["m_expr"] = $obj;
	$proto9 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto9 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto11 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Allocation",
			"m_strTable" => "tbl_role",
			"m_srcTableName" => "tbl_role" 
	) );
	
	$proto11 ["m_sql"] = "Allocation";
	$proto11 ["m_srcTableName"] = "tbl_role";
	$proto11 ["m_expr"] = $obj;
	$proto11 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto11 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto0 ["m_fromlist"] = array ();
	$proto13 = array ();
	$proto13 ["m_link"] = "SQLL_MAIN";
	$proto14 = array ();
	$proto14 ["m_strName"] = "tbl_role";
	$proto14 ["m_srcTableName"] = "tbl_role";
	$proto14 ["m_columns"] = array ();
	$proto14 ["m_columns"] [] = "AutRoleID";
	$proto14 ["m_columns"] [] = "Role";
	$proto14 ["m_columns"] [] = "Stage";
	$proto14 ["m_columns"] [] = "Allocation";
	$obj = new SQLTable ( $proto14 );
	
	$proto13 ["m_table"] = $obj;
	$proto13 ["m_sql"] = "tbl_role";
	$proto13 ["m_alias"] = "";
	$proto13 ["m_srcTableName"] = "tbl_role";
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
	$proto0 ["m_srcTableName"] = "tbl_role";
	$obj = new SQLQuery ( $proto0 );
	
	return $obj;
}
$queryData_tbl_role = createSqlQuery_tbl_role ();

$tdatatbl_role [".sqlquery"] = $queryData_tbl_role;

$tableEvents ["tbl_role"] = new eventsBase ();
$tdatatbl_role [".hasEvents"] = false;

?>