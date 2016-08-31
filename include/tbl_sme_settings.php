<?php
require_once (getabspath ( "classes/cipherer.php" ));

$tdatatbl_sme = array ();
$tdatatbl_sme [".truncateText"] = true;
$tdatatbl_sme [".NumberOfChars"] = 60;
$tdatatbl_sme [".ShortName"] = "tbl_sme";
$tdatatbl_sme [".OwnerID"] = "";
$tdatatbl_sme [".OriginalTable"] = "tbl_sme";

// field labels
$fieldLabelstbl_sme = array ();
$fieldToolTipstbl_sme = array ();
$pageTitlestbl_sme = array ();

if (mlang_getcurrentlang () == "English") {
	$fieldLabelstbl_sme ["English"] = array ();
	$fieldToolTipstbl_sme ["English"] = array ();
	$pageTitlestbl_sme ["English"] = array ();
	$fieldLabelstbl_sme ["English"] ["AutSMEid"] = "Aut SMEid";
	$fieldToolTipstbl_sme ["English"] ["AutSMEid"] = "";
	$fieldLabelstbl_sme ["English"] ["FirstName"] = "First Name";
	$fieldToolTipstbl_sme ["English"] ["FirstName"] = "";
	$fieldLabelstbl_sme ["English"] ["LastName"] = "Last Name";
	$fieldToolTipstbl_sme ["English"] ["LastName"] = "";
	$fieldLabelstbl_sme ["English"] ["FullName"] = "Full Name";
	$fieldToolTipstbl_sme ["English"] ["FullName"] = "";
	if (count ( $fieldToolTipstbl_sme ["English"] ))
		$tdatatbl_sme [".isUseToolTips"] = true;
}
if (mlang_getcurrentlang () == "") {
	$fieldLabelstbl_sme [""] = array ();
	$fieldToolTipstbl_sme [""] = array ();
	$pageTitlestbl_sme [""] = array ();
	if (count ( $fieldToolTipstbl_sme [""] ))
		$tdatatbl_sme [".isUseToolTips"] = true;
}

$tdatatbl_sme [".NCSearch"] = true;

$tdatatbl_sme [".shortTableName"] = "tbl_sme";
$tdatatbl_sme [".nSecOptions"] = 0;
$tdatatbl_sme [".recsPerRowList"] = 1;
$tdatatbl_sme [".recsPerRowPrint"] = 1;
$tdatatbl_sme [".mainTableOwnerID"] = "";
$tdatatbl_sme [".moveNext"] = 0;
$tdatatbl_sme [".entityType"] = 0;

$tdatatbl_sme [".strOriginalTableName"] = "tbl_sme";

$tdatatbl_sme [".showAddInPopup"] = false;

$tdatatbl_sme [".showEditInPopup"] = false;

$tdatatbl_sme [".showViewInPopup"] = false;

// page's base css files names
$popupPagesLayoutNames = array ();
$tdatatbl_sme [".popupPagesLayoutNames"] = $popupPagesLayoutNames;

$tdatatbl_sme [".fieldsForRegister"] = array ();

$tdatatbl_sme [".listAjax"] = false;

$tdatatbl_sme [".audit"] = false;

$tdatatbl_sme [".locking"] = false;

$tdatatbl_sme [".edit"] = true;
$tdatatbl_sme [".afterEditAction"] = 1;
$tdatatbl_sme [".closePopupAfterEdit"] = 1;
$tdatatbl_sme [".afterEditActionDetTable"] = "";

$tdatatbl_sme [".add"] = true;
$tdatatbl_sme [".afterAddAction"] = 1;
$tdatatbl_sme [".closePopupAfterAdd"] = 1;
$tdatatbl_sme [".afterAddActionDetTable"] = "";

$tdatatbl_sme [".list"] = true;

$tdatatbl_sme [".inlineEdit"] = true;
$tdatatbl_sme [".inlineAdd"] = true;
$tdatatbl_sme [".view"] = true;

$tdatatbl_sme [".import"] = true;

$tdatatbl_sme [".exportTo"] = true;

$tdatatbl_sme [".printFriendly"] = true;

$tdatatbl_sme [".delete"] = true;

$tdatatbl_sme [".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatatbl_sme [".searchSaving"] = false;
//

$tdatatbl_sme [".showSearchPanel"] = true;
$tdatatbl_sme [".flexibleSearch"] = true;

if (isMobile ())
	$tdatatbl_sme [".isUseAjaxSuggest"] = false;
else
	$tdatatbl_sme [".isUseAjaxSuggest"] = true;

$tdatatbl_sme [".rowHighlite"] = true;

$tdatatbl_sme [".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_sme [".isUseTimeForSearch"] = false;

$tdatatbl_sme [".allSearchFields"] = array ();
$tdatatbl_sme [".filterFields"] = array ();
$tdatatbl_sme [".requiredSearchFields"] = array ();

$tdatatbl_sme [".allSearchFields"] [] = "AutSMEid";
$tdatatbl_sme [".allSearchFields"] [] = "FirstName";
$tdatatbl_sme [".allSearchFields"] [] = "LastName";
$tdatatbl_sme [".allSearchFields"] [] = "FullName";

$tdatatbl_sme [".googleLikeFields"] = array ();
$tdatatbl_sme [".googleLikeFields"] [] = "AutSMEid";
$tdatatbl_sme [".googleLikeFields"] [] = "FirstName";
$tdatatbl_sme [".googleLikeFields"] [] = "LastName";
$tdatatbl_sme [".googleLikeFields"] [] = "FullName";

$tdatatbl_sme [".advSearchFields"] = array ();
$tdatatbl_sme [".advSearchFields"] [] = "AutSMEid";
$tdatatbl_sme [".advSearchFields"] [] = "FirstName";
$tdatatbl_sme [".advSearchFields"] [] = "LastName";
$tdatatbl_sme [".advSearchFields"] [] = "FullName";

$tdatatbl_sme [".tableType"] = "list";

$tdatatbl_sme [".printerPageOrientation"] = 0;
$tdatatbl_sme [".nPrinterPageScale"] = 100;

$tdatatbl_sme [".nPrinterSplitRecords"] = 40;

$tdatatbl_sme [".nPrinterPDFSplitRecords"] = 40;

$tdatatbl_sme [".geocodingEnabled"] = false;

// view page pdf

// print page pdf

$tdatatbl_sme [".pageSize"] = 10;

$tdatatbl_sme [".warnLeavingPages"] = true;

$tstrOrderBy = "";
if (strlen ( $tstrOrderBy ) && strtolower ( substr ( $tstrOrderBy, 0, 8 ) ) != "order by")
	$tstrOrderBy = "order by " . $tstrOrderBy;
$tdatatbl_sme [".strOrderBy"] = $tstrOrderBy;

$tdatatbl_sme [".orderindexes"] = array ();

$tdatatbl_sme [".sqlHead"] = "SELECT AutSMEid,  	FirstName,  	LastName,  	FullName";
$tdatatbl_sme [".sqlFrom"] = "FROM tbl_sme";
$tdatatbl_sme [".sqlWhereExpr"] = "";
$tdatatbl_sme [".sqlTail"] = "";

// fill array of records per page for list and report without group fields
$arrRPP = array ();
$arrRPP [] = 10;
$arrRPP [] = 20;
$arrRPP [] = 30;
$arrRPP [] = 50;
$arrRPP [] = 100;
$arrRPP [] = 500;
$arrRPP [] = - 1;
$tdatatbl_sme [".arrRecsPerPage"] = $arrRPP;

// fill array of groups per page for report with group fields
$arrGPP = array ();
$arrGPP [] = 1;
$arrGPP [] = 3;
$arrGPP [] = 5;
$arrGPP [] = 10;
$arrGPP [] = 50;
$arrGPP [] = 100;
$arrGPP [] = - 1;
$tdatatbl_sme [".arrGroupsPerPage"] = $arrGPP;

$tableKeystbl_sme = array ();
$tableKeystbl_sme [] = "AutSMEid";
$tdatatbl_sme [".Keys"] = $tableKeystbl_sme;

$tdatatbl_sme [".listFields"] = array ();
$tdatatbl_sme [".listFields"] [] = "AutSMEid";
$tdatatbl_sme [".listFields"] [] = "FirstName";
$tdatatbl_sme [".listFields"] [] = "LastName";
$tdatatbl_sme [".listFields"] [] = "FullName";

$tdatatbl_sme [".hideMobileList"] = array ();

$tdatatbl_sme [".viewFields"] = array ();
$tdatatbl_sme [".viewFields"] [] = "AutSMEid";
$tdatatbl_sme [".viewFields"] [] = "FirstName";
$tdatatbl_sme [".viewFields"] [] = "LastName";
$tdatatbl_sme [".viewFields"] [] = "FullName";

$tdatatbl_sme [".addFields"] = array ();
$tdatatbl_sme [".addFields"] [] = "FirstName";
$tdatatbl_sme [".addFields"] [] = "LastName";
$tdatatbl_sme [".addFields"] [] = "FullName";

$tdatatbl_sme [".masterListFields"] = array ();
$tdatatbl_sme [".masterListFields"] [] = "AutSMEid";
$tdatatbl_sme [".masterListFields"] [] = "FirstName";
$tdatatbl_sme [".masterListFields"] [] = "LastName";
$tdatatbl_sme [".masterListFields"] [] = "FullName";

$tdatatbl_sme [".inlineAddFields"] = array ();
$tdatatbl_sme [".inlineAddFields"] [] = "FirstName";
$tdatatbl_sme [".inlineAddFields"] [] = "LastName";
$tdatatbl_sme [".inlineAddFields"] [] = "FullName";

$tdatatbl_sme [".editFields"] = array ();
$tdatatbl_sme [".editFields"] [] = "FirstName";
$tdatatbl_sme [".editFields"] [] = "LastName";
$tdatatbl_sme [".editFields"] [] = "FullName";

$tdatatbl_sme [".inlineEditFields"] = array ();
$tdatatbl_sme [".inlineEditFields"] [] = "FirstName";
$tdatatbl_sme [".inlineEditFields"] [] = "LastName";
$tdatatbl_sme [".inlineEditFields"] [] = "FullName";

$tdatatbl_sme [".exportFields"] = array ();
$tdatatbl_sme [".exportFields"] [] = "AutSMEid";
$tdatatbl_sme [".exportFields"] [] = "FirstName";
$tdatatbl_sme [".exportFields"] [] = "LastName";
$tdatatbl_sme [".exportFields"] [] = "FullName";

$tdatatbl_sme [".importFields"] = array ();
$tdatatbl_sme [".importFields"] [] = "AutSMEid";
$tdatatbl_sme [".importFields"] [] = "FirstName";
$tdatatbl_sme [".importFields"] [] = "LastName";
$tdatatbl_sme [".importFields"] [] = "FullName";

$tdatatbl_sme [".printFields"] = array ();
$tdatatbl_sme [".printFields"] [] = "AutSMEid";
$tdatatbl_sme [".printFields"] [] = "FirstName";
$tdatatbl_sme [".printFields"] [] = "LastName";
$tdatatbl_sme [".printFields"] [] = "FullName";

// AutSMEid
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 1;
$fdata ["strName"] = "AutSMEid";
$fdata ["GoodName"] = "AutSMEid";
$fdata ["ownerTable"] = "tbl_sme";
$fdata ["Label"] = GetFieldLabel ( "tbl_sme", "AutSMEid" );
$fdata ["FieldType"] = 3;

$fdata ["AutoInc"] = true;

$fdata ["bListPage"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "AutSMEid";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "AutSMEid";

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

$tdatatbl_sme ["AutSMEid"] = $fdata;
// FirstName
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 2;
$fdata ["strName"] = "FirstName";
$fdata ["GoodName"] = "FirstName";
$fdata ["ownerTable"] = "tbl_sme";
$fdata ["Label"] = GetFieldLabel ( "tbl_sme", "FirstName" );
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
$edata ["EditParams"] .= " maxlength=9";

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

$tdatatbl_sme ["FirstName"] = $fdata;
// LastName
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 3;
$fdata ["strName"] = "LastName";
$fdata ["GoodName"] = "LastName";
$fdata ["ownerTable"] = "tbl_sme";
$fdata ["Label"] = GetFieldLabel ( "tbl_sme", "LastName" );
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
$edata ["EditParams"] .= " maxlength=10";

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

$tdatatbl_sme ["LastName"] = $fdata;
// FullName
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 4;
$fdata ["strName"] = "FullName";
$fdata ["GoodName"] = "FullName";
$fdata ["ownerTable"] = "tbl_sme";
$fdata ["Label"] = GetFieldLabel ( "tbl_sme", "FullName" );
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
$edata ["EditParams"] .= " maxlength=17";

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

$tdatatbl_sme ["FullName"] = $fdata;

$tables_data ["tbl_sme"] = &$tdatatbl_sme;
$field_labels ["tbl_sme"] = &$fieldLabelstbl_sme;
$fieldToolTips ["tbl_sme"] = &$fieldToolTipstbl_sme;
$page_titles ["tbl_sme"] = &$pageTitlestbl_sme;

// -----------------start prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData ["tbl_sme"] = array ();

// tables which are master tables for current table (detail)
$masterTablesData ["tbl_sme"] = array ();

// -----------------end prepare master-details data arrays ------------------------------//

require_once (getabspath ( "classes/sql.php" ));
function createSqlQuery_tbl_sme() {
	$proto0 = array ();
	$proto0 ["m_strHead"] = "SELECT";
	$proto0 ["m_strFieldList"] = "AutSMEid,  	FirstName,  	LastName,  	FullName";
	$proto0 ["m_strFrom"] = "FROM tbl_sme";
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
			"m_strName" => "AutSMEid",
			"m_strTable" => "tbl_sme",
			"m_srcTableName" => "tbl_sme" 
	) );
	
	$proto5 ["m_sql"] = "AutSMEid";
	$proto5 ["m_srcTableName"] = "tbl_sme";
	$proto5 ["m_expr"] = $obj;
	$proto5 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto5 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto7 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "FirstName",
			"m_strTable" => "tbl_sme",
			"m_srcTableName" => "tbl_sme" 
	) );
	
	$proto7 ["m_sql"] = "FirstName";
	$proto7 ["m_srcTableName"] = "tbl_sme";
	$proto7 ["m_expr"] = $obj;
	$proto7 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto7 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto9 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "LastName",
			"m_strTable" => "tbl_sme",
			"m_srcTableName" => "tbl_sme" 
	) );
	
	$proto9 ["m_sql"] = "LastName";
	$proto9 ["m_srcTableName"] = "tbl_sme";
	$proto9 ["m_expr"] = $obj;
	$proto9 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto9 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto11 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "FullName",
			"m_strTable" => "tbl_sme",
			"m_srcTableName" => "tbl_sme" 
	) );
	
	$proto11 ["m_sql"] = "FullName";
	$proto11 ["m_srcTableName"] = "tbl_sme";
	$proto11 ["m_expr"] = $obj;
	$proto11 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto11 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto0 ["m_fromlist"] = array ();
	$proto13 = array ();
	$proto13 ["m_link"] = "SQLL_MAIN";
	$proto14 = array ();
	$proto14 ["m_strName"] = "tbl_sme";
	$proto14 ["m_srcTableName"] = "tbl_sme";
	$proto14 ["m_columns"] = array ();
	$proto14 ["m_columns"] [] = "AutSMEid";
	$proto14 ["m_columns"] [] = "FirstName";
	$proto14 ["m_columns"] [] = "LastName";
	$proto14 ["m_columns"] [] = "FullName";
	$obj = new SQLTable ( $proto14 );
	
	$proto13 ["m_table"] = $obj;
	$proto13 ["m_sql"] = "tbl_sme";
	$proto13 ["m_alias"] = "";
	$proto13 ["m_srcTableName"] = "tbl_sme";
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
	$proto0 ["m_srcTableName"] = "tbl_sme";
	$obj = new SQLQuery ( $proto0 );
	
	return $obj;
}
$queryData_tbl_sme = createSqlQuery_tbl_sme ();

$tdatatbl_sme [".sqlquery"] = $queryData_tbl_sme;

$tableEvents ["tbl_sme"] = new eventsBase ();
$tdatatbl_sme [".hasEvents"] = false;

?>