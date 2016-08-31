<?php
require_once (getabspath ( "classes/cipherer.php" ));

$tdatatbl_test_center = array ();
$tdatatbl_test_center [".truncateText"] = true;
$tdatatbl_test_center [".NumberOfChars"] = 60;
$tdatatbl_test_center [".ShortName"] = "tbl_test_center";
$tdatatbl_test_center [".OwnerID"] = "";
$tdatatbl_test_center [".OriginalTable"] = "tbl_test center";

// field labels
$fieldLabelstbl_test_center = array ();
$fieldToolTipstbl_test_center = array ();
$pageTitlestbl_test_center = array ();

if (mlang_getcurrentlang () == "English") {
	$fieldLabelstbl_test_center ["English"] = array ();
	$fieldToolTipstbl_test_center ["English"] = array ();
	$pageTitlestbl_test_center ["English"] = array ();
	$fieldLabelstbl_test_center ["English"] ["AutCenterID"] = "Aut Center ID";
	$fieldToolTipstbl_test_center ["English"] ["AutCenterID"] = "";
	$fieldLabelstbl_test_center ["English"] ["LocationName"] = "Location Name";
	$fieldToolTipstbl_test_center ["English"] ["LocationName"] = "";
	if (count ( $fieldToolTipstbl_test_center ["English"] ))
		$tdatatbl_test_center [".isUseToolTips"] = true;
}
if (mlang_getcurrentlang () == "") {
	$fieldLabelstbl_test_center [""] = array ();
	$fieldToolTipstbl_test_center [""] = array ();
	$pageTitlestbl_test_center [""] = array ();
	if (count ( $fieldToolTipstbl_test_center [""] ))
		$tdatatbl_test_center [".isUseToolTips"] = true;
}

$tdatatbl_test_center [".NCSearch"] = true;

$tdatatbl_test_center [".shortTableName"] = "tbl_test_center";
$tdatatbl_test_center [".nSecOptions"] = 0;
$tdatatbl_test_center [".recsPerRowList"] = 1;
$tdatatbl_test_center [".recsPerRowPrint"] = 1;
$tdatatbl_test_center [".mainTableOwnerID"] = "";
$tdatatbl_test_center [".moveNext"] = 0;
$tdatatbl_test_center [".entityType"] = 0;

$tdatatbl_test_center [".strOriginalTableName"] = "tbl_test center";

$tdatatbl_test_center [".showAddInPopup"] = false;

$tdatatbl_test_center [".showEditInPopup"] = false;

$tdatatbl_test_center [".showViewInPopup"] = false;

// page's base css files names
$popupPagesLayoutNames = array ();
$tdatatbl_test_center [".popupPagesLayoutNames"] = $popupPagesLayoutNames;

$tdatatbl_test_center [".fieldsForRegister"] = array ();

$tdatatbl_test_center [".listAjax"] = false;

$tdatatbl_test_center [".audit"] = false;

$tdatatbl_test_center [".locking"] = false;

$tdatatbl_test_center [".edit"] = true;
$tdatatbl_test_center [".afterEditAction"] = 1;
$tdatatbl_test_center [".closePopupAfterEdit"] = 1;
$tdatatbl_test_center [".afterEditActionDetTable"] = "";

$tdatatbl_test_center [".add"] = true;
$tdatatbl_test_center [".afterAddAction"] = 1;
$tdatatbl_test_center [".closePopupAfterAdd"] = 1;
$tdatatbl_test_center [".afterAddActionDetTable"] = "";

$tdatatbl_test_center [".list"] = true;

$tdatatbl_test_center [".view"] = true;

$tdatatbl_test_center [".import"] = true;

$tdatatbl_test_center [".exportTo"] = true;

$tdatatbl_test_center [".printFriendly"] = true;

$tdatatbl_test_center [".delete"] = true;

$tdatatbl_test_center [".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatatbl_test_center [".searchSaving"] = false;
//

$tdatatbl_test_center [".showSearchPanel"] = true;
$tdatatbl_test_center [".flexibleSearch"] = true;

if (isMobile ())
	$tdatatbl_test_center [".isUseAjaxSuggest"] = false;
else
	$tdatatbl_test_center [".isUseAjaxSuggest"] = true;

$tdatatbl_test_center [".rowHighlite"] = true;

$tdatatbl_test_center [".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_test_center [".isUseTimeForSearch"] = false;

$tdatatbl_test_center [".allSearchFields"] = array ();
$tdatatbl_test_center [".filterFields"] = array ();
$tdatatbl_test_center [".requiredSearchFields"] = array ();

$tdatatbl_test_center [".allSearchFields"] [] = "LocationName";

$tdatatbl_test_center [".googleLikeFields"] = array ();
$tdatatbl_test_center [".googleLikeFields"] [] = "AutCenterID";
$tdatatbl_test_center [".googleLikeFields"] [] = "LocationName";

$tdatatbl_test_center [".advSearchFields"] = array ();
$tdatatbl_test_center [".advSearchFields"] [] = "LocationName";

$tdatatbl_test_center [".tableType"] = "list";

$tdatatbl_test_center [".printerPageOrientation"] = 0;
$tdatatbl_test_center [".nPrinterPageScale"] = 100;

$tdatatbl_test_center [".nPrinterSplitRecords"] = 40;

$tdatatbl_test_center [".nPrinterPDFSplitRecords"] = 40;

$tdatatbl_test_center [".geocodingEnabled"] = false;

// view page pdf

// print page pdf

$tdatatbl_test_center [".pageSize"] = 10;

$tdatatbl_test_center [".warnLeavingPages"] = true;

$tstrOrderBy = "";
if (strlen ( $tstrOrderBy ) && strtolower ( substr ( $tstrOrderBy, 0, 8 ) ) != "order by")
	$tstrOrderBy = "order by " . $tstrOrderBy;
$tdatatbl_test_center [".strOrderBy"] = $tstrOrderBy;

$tdatatbl_test_center [".orderindexes"] = array ();

$tdatatbl_test_center [".sqlHead"] = "SELECT AutCenterID,  	LocationName";
$tdatatbl_test_center [".sqlFrom"] = "FROM `tbl_test center`";
$tdatatbl_test_center [".sqlWhereExpr"] = "";
$tdatatbl_test_center [".sqlTail"] = "";

// fill array of records per page for list and report without group fields
$arrRPP = array ();
$arrRPP [] = 10;
$arrRPP [] = 20;
$arrRPP [] = 30;
$arrRPP [] = 50;
$arrRPP [] = 100;
$arrRPP [] = 500;
$arrRPP [] = - 1;
$tdatatbl_test_center [".arrRecsPerPage"] = $arrRPP;

// fill array of groups per page for report with group fields
$arrGPP = array ();
$arrGPP [] = 1;
$arrGPP [] = 3;
$arrGPP [] = 5;
$arrGPP [] = 10;
$arrGPP [] = 50;
$arrGPP [] = 100;
$arrGPP [] = - 1;
$tdatatbl_test_center [".arrGroupsPerPage"] = $arrGPP;

$tableKeystbl_test_center = array ();
$tableKeystbl_test_center [] = "AutCenterID";
$tdatatbl_test_center [".Keys"] = $tableKeystbl_test_center;

$tdatatbl_test_center [".listFields"] = array ();
$tdatatbl_test_center [".listFields"] [] = "LocationName";

$tdatatbl_test_center [".hideMobileList"] = array ();

$tdatatbl_test_center [".viewFields"] = array ();
$tdatatbl_test_center [".viewFields"] [] = "LocationName";

$tdatatbl_test_center [".addFields"] = array ();
$tdatatbl_test_center [".addFields"] [] = "LocationName";

$tdatatbl_test_center [".masterListFields"] = array ();
$tdatatbl_test_center [".masterListFields"] [] = "AutCenterID";
$tdatatbl_test_center [".masterListFields"] [] = "LocationName";

$tdatatbl_test_center [".inlineAddFields"] = array ();

$tdatatbl_test_center [".editFields"] = array ();
$tdatatbl_test_center [".editFields"] [] = "LocationName";

$tdatatbl_test_center [".inlineEditFields"] = array ();

$tdatatbl_test_center [".exportFields"] = array ();
$tdatatbl_test_center [".exportFields"] [] = "LocationName";

$tdatatbl_test_center [".importFields"] = array ();
$tdatatbl_test_center [".importFields"] [] = "LocationName";

$tdatatbl_test_center [".printFields"] = array ();
$tdatatbl_test_center [".printFields"] [] = "LocationName";

// AutCenterID
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 1;
$fdata ["strName"] = "AutCenterID";
$fdata ["GoodName"] = "AutCenterID";
$fdata ["ownerTable"] = "tbl_test center";
$fdata ["Label"] = GetFieldLabel ( "tbl_test_center", "AutCenterID" );
$fdata ["FieldType"] = 3;

$fdata ["AutoInc"] = true;

$fdata ["strField"] = "AutCenterID";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "AutCenterID";

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

$tdatatbl_test_center ["AutCenterID"] = $fdata;
// LocationName
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 2;
$fdata ["strName"] = "LocationName";
$fdata ["GoodName"] = "LocationName";
$fdata ["ownerTable"] = "tbl_test center";
$fdata ["Label"] = GetFieldLabel ( "tbl_test_center", "LocationName" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "LocationName";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "LocationName";

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

$tdatatbl_test_center ["LocationName"] = $fdata;

$tables_data ["tbl_test center"] = &$tdatatbl_test_center;
$field_labels ["tbl_test_center"] = &$fieldLabelstbl_test_center;
$fieldToolTips ["tbl_test center"] = &$fieldToolTipstbl_test_center;
$page_titles ["tbl_test_center"] = &$pageTitlestbl_test_center;

// -----------------start prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData ["tbl_test center"] = array ();

// tables which are master tables for current table (detail)
$masterTablesData ["tbl_test center"] = array ();

// -----------------end prepare master-details data arrays ------------------------------//

require_once (getabspath ( "classes/sql.php" ));
function createSqlQuery_tbl_test_center() {
	$proto0 = array ();
	$proto0 ["m_strHead"] = "SELECT";
	$proto0 ["m_strFieldList"] = "AutCenterID,  	LocationName";
	$proto0 ["m_strFrom"] = "FROM `tbl_test center`";
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
			"m_strName" => "AutCenterID",
			"m_strTable" => "tbl_test center",
			"m_srcTableName" => "tbl_test center" 
	) );
	
	$proto5 ["m_sql"] = "AutCenterID";
	$proto5 ["m_srcTableName"] = "tbl_test center";
	$proto5 ["m_expr"] = $obj;
	$proto5 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto5 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto7 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "LocationName",
			"m_strTable" => "tbl_test center",
			"m_srcTableName" => "tbl_test center" 
	) );
	
	$proto7 ["m_sql"] = "LocationName";
	$proto7 ["m_srcTableName"] = "tbl_test center";
	$proto7 ["m_expr"] = $obj;
	$proto7 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto7 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto0 ["m_fromlist"] = array ();
	$proto9 = array ();
	$proto9 ["m_link"] = "SQLL_MAIN";
	$proto10 = array ();
	$proto10 ["m_strName"] = "tbl_test center";
	$proto10 ["m_srcTableName"] = "tbl_test center";
	$proto10 ["m_columns"] = array ();
	$proto10 ["m_columns"] [] = "AutCenterID";
	$proto10 ["m_columns"] [] = "LocationName";
	$obj = new SQLTable ( $proto10 );
	
	$proto9 ["m_table"] = $obj;
	$proto9 ["m_sql"] = "`tbl_test center`";
	$proto9 ["m_alias"] = "";
	$proto9 ["m_srcTableName"] = "tbl_test center";
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
	$proto0 ["m_srcTableName"] = "tbl_test center";
	$obj = new SQLQuery ( $proto0 );
	
	return $obj;
}
$queryData_tbl_test_center = createSqlQuery_tbl_test_center ();

$tdatatbl_test_center [".sqlquery"] = $queryData_tbl_test_center;

$tableEvents ["tbl_test center"] = new eventsBase ();
$tdatatbl_test_center [".hasEvents"] = false;

?>