<?php
require_once (getabspath ( "classes/cipherer.php" ));

$tdataskilllevel = array ();
$tdataskilllevel [".truncateText"] = true;
$tdataskilllevel [".NumberOfChars"] = 60;
$tdataskilllevel [".ShortName"] = "skilllevel";
$tdataskilllevel [".OwnerID"] = "";
$tdataskilllevel [".OriginalTable"] = "skilllevel";

// field labels
$fieldLabelsskilllevel = array ();
$fieldToolTipsskilllevel = array ();
$pageTitlesskilllevel = array ();

if (mlang_getcurrentlang () == "English") {
	$fieldLabelsskilllevel ["English"] = array ();
	$fieldToolTipsskilllevel ["English"] = array ();
	$pageTitlesskilllevel ["English"] = array ();
	$fieldLabelsskilllevel ["English"] ["AutSkillId"] = "Aut Skill Id";
	$fieldToolTipsskilllevel ["English"] ["AutSkillId"] = "";
	$fieldLabelsskilllevel ["English"] ["SkillLevel"] = "Skill Level";
	$fieldToolTipsskilllevel ["English"] ["SkillLevel"] = "";
	if (count ( $fieldToolTipsskilllevel ["English"] ))
		$tdataskilllevel [".isUseToolTips"] = true;
}
if (mlang_getcurrentlang () == "") {
	$fieldLabelsskilllevel [""] = array ();
	$fieldToolTipsskilllevel [""] = array ();
	$pageTitlesskilllevel [""] = array ();
	if (count ( $fieldToolTipsskilllevel [""] ))
		$tdataskilllevel [".isUseToolTips"] = true;
}

$tdataskilllevel [".NCSearch"] = true;

$tdataskilllevel [".shortTableName"] = "skilllevel";
$tdataskilllevel [".nSecOptions"] = 0;
$tdataskilllevel [".recsPerRowList"] = 1;
$tdataskilllevel [".recsPerRowPrint"] = 1;
$tdataskilllevel [".mainTableOwnerID"] = "";
$tdataskilllevel [".moveNext"] = 0;
$tdataskilllevel [".entityType"] = 0;

$tdataskilllevel [".strOriginalTableName"] = "skilllevel";

$tdataskilllevel [".showAddInPopup"] = false;

$tdataskilllevel [".showEditInPopup"] = false;

$tdataskilllevel [".showViewInPopup"] = false;

// page's base css files names
$popupPagesLayoutNames = array ();
$tdataskilllevel [".popupPagesLayoutNames"] = $popupPagesLayoutNames;

$tdataskilllevel [".fieldsForRegister"] = array ();

$tdataskilllevel [".listAjax"] = false;

$tdataskilllevel [".audit"] = false;

$tdataskilllevel [".locking"] = false;

$tdataskilllevel [".edit"] = true;
$tdataskilllevel [".afterEditAction"] = 1;
$tdataskilllevel [".closePopupAfterEdit"] = 1;
$tdataskilllevel [".afterEditActionDetTable"] = "";

$tdataskilllevel [".add"] = true;
$tdataskilllevel [".afterAddAction"] = 1;
$tdataskilllevel [".closePopupAfterAdd"] = 1;
$tdataskilllevel [".afterAddActionDetTable"] = "";

$tdataskilllevel [".list"] = true;

$tdataskilllevel [".inlineEdit"] = true;
$tdataskilllevel [".inlineAdd"] = true;
$tdataskilllevel [".view"] = true;

$tdataskilllevel [".import"] = true;

$tdataskilllevel [".exportTo"] = true;

$tdataskilllevel [".printFriendly"] = true;

$tdataskilllevel [".delete"] = true;

$tdataskilllevel [".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataskilllevel [".searchSaving"] = false;
//

$tdataskilllevel [".showSearchPanel"] = true;
$tdataskilllevel [".flexibleSearch"] = true;

if (isMobile ())
	$tdataskilllevel [".isUseAjaxSuggest"] = false;
else
	$tdataskilllevel [".isUseAjaxSuggest"] = true;

$tdataskilllevel [".rowHighlite"] = true;

$tdataskilllevel [".addPageEvents"] = false;

// use timepicker for search panel
$tdataskilllevel [".isUseTimeForSearch"] = false;

$tdataskilllevel [".allSearchFields"] = array ();
$tdataskilllevel [".filterFields"] = array ();
$tdataskilllevel [".requiredSearchFields"] = array ();

$tdataskilllevel [".allSearchFields"] [] = "AutSkillId";
$tdataskilllevel [".allSearchFields"] [] = "SkillLevel";

$tdataskilllevel [".googleLikeFields"] = array ();
$tdataskilllevel [".googleLikeFields"] [] = "AutSkillId";
$tdataskilllevel [".googleLikeFields"] [] = "SkillLevel";

$tdataskilllevel [".advSearchFields"] = array ();
$tdataskilllevel [".advSearchFields"] [] = "AutSkillId";
$tdataskilllevel [".advSearchFields"] [] = "SkillLevel";

$tdataskilllevel [".tableType"] = "list";

$tdataskilllevel [".printerPageOrientation"] = 0;
$tdataskilllevel [".nPrinterPageScale"] = 100;

$tdataskilllevel [".nPrinterSplitRecords"] = 40;

$tdataskilllevel [".nPrinterPDFSplitRecords"] = 40;

$tdataskilllevel [".geocodingEnabled"] = false;

// view page pdf

// print page pdf

$tdataskilllevel [".pageSize"] = 10;

$tdataskilllevel [".warnLeavingPages"] = true;

$tstrOrderBy = "";
if (strlen ( $tstrOrderBy ) && strtolower ( substr ( $tstrOrderBy, 0, 8 ) ) != "order by")
	$tstrOrderBy = "order by " . $tstrOrderBy;
$tdataskilllevel [".strOrderBy"] = $tstrOrderBy;

$tdataskilllevel [".orderindexes"] = array ();

$tdataskilllevel [".sqlHead"] = "SELECT AutSkillId,  	SkillLevel";
$tdataskilllevel [".sqlFrom"] = "FROM skilllevel";
$tdataskilllevel [".sqlWhereExpr"] = "";
$tdataskilllevel [".sqlTail"] = "";

// fill array of records per page for list and report without group fields
$arrRPP = array ();
$arrRPP [] = 10;
$arrRPP [] = 20;
$arrRPP [] = 30;
$arrRPP [] = 50;
$arrRPP [] = 100;
$arrRPP [] = 500;
$arrRPP [] = - 1;
$tdataskilllevel [".arrRecsPerPage"] = $arrRPP;

// fill array of groups per page for report with group fields
$arrGPP = array ();
$arrGPP [] = 1;
$arrGPP [] = 3;
$arrGPP [] = 5;
$arrGPP [] = 10;
$arrGPP [] = 50;
$arrGPP [] = 100;
$arrGPP [] = - 1;
$tdataskilllevel [".arrGroupsPerPage"] = $arrGPP;

$tableKeysskilllevel = array ();
$tableKeysskilllevel [] = "AutSkillId";
$tdataskilllevel [".Keys"] = $tableKeysskilllevel;

$tdataskilllevel [".listFields"] = array ();
$tdataskilllevel [".listFields"] [] = "AutSkillId";
$tdataskilllevel [".listFields"] [] = "SkillLevel";

$tdataskilllevel [".hideMobileList"] = array ();

$tdataskilllevel [".viewFields"] = array ();
$tdataskilllevel [".viewFields"] [] = "AutSkillId";
$tdataskilllevel [".viewFields"] [] = "SkillLevel";

$tdataskilllevel [".addFields"] = array ();
$tdataskilllevel [".addFields"] [] = "SkillLevel";

$tdataskilllevel [".masterListFields"] = array ();
$tdataskilllevel [".masterListFields"] [] = "AutSkillId";
$tdataskilllevel [".masterListFields"] [] = "SkillLevel";

$tdataskilllevel [".inlineAddFields"] = array ();
$tdataskilllevel [".inlineAddFields"] [] = "SkillLevel";

$tdataskilllevel [".editFields"] = array ();
$tdataskilllevel [".editFields"] [] = "SkillLevel";

$tdataskilllevel [".inlineEditFields"] = array ();
$tdataskilllevel [".inlineEditFields"] [] = "SkillLevel";

$tdataskilllevel [".exportFields"] = array ();
$tdataskilllevel [".exportFields"] [] = "AutSkillId";
$tdataskilllevel [".exportFields"] [] = "SkillLevel";

$tdataskilllevel [".importFields"] = array ();
$tdataskilllevel [".importFields"] [] = "AutSkillId";
$tdataskilllevel [".importFields"] [] = "SkillLevel";

$tdataskilllevel [".printFields"] = array ();
$tdataskilllevel [".printFields"] [] = "AutSkillId";
$tdataskilllevel [".printFields"] [] = "SkillLevel";

// AutSkillId
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 1;
$fdata ["strName"] = "AutSkillId";
$fdata ["GoodName"] = "AutSkillId";
$fdata ["ownerTable"] = "skilllevel";
$fdata ["Label"] = GetFieldLabel ( "skilllevel", "AutSkillId" );
$fdata ["FieldType"] = 3;

$fdata ["AutoInc"] = true;

$fdata ["bListPage"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "AutSkillId";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "AutSkillId";

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

$tdataskilllevel ["AutSkillId"] = $fdata;
// SkillLevel
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 2;
$fdata ["strName"] = "SkillLevel";
$fdata ["GoodName"] = "SkillLevel";
$fdata ["ownerTable"] = "skilllevel";
$fdata ["Label"] = GetFieldLabel ( "skilllevel", "SkillLevel" );
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

$fdata ["strField"] = "SkillLevel";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "SkillLevel";

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
$edata ["EditParams"] .= " maxlength=2";

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

$tdataskilllevel ["SkillLevel"] = $fdata;

$tables_data ["skilllevel"] = &$tdataskilllevel;
$field_labels ["skilllevel"] = &$fieldLabelsskilllevel;
$fieldToolTips ["skilllevel"] = &$fieldToolTipsskilllevel;
$page_titles ["skilllevel"] = &$pageTitlesskilllevel;

// -----------------start prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData ["skilllevel"] = array ();

// tables which are master tables for current table (detail)
$masterTablesData ["skilllevel"] = array ();

// -----------------end prepare master-details data arrays ------------------------------//

require_once (getabspath ( "classes/sql.php" ));
function createSqlQuery_skilllevel() {
	$proto0 = array ();
	$proto0 ["m_strHead"] = "SELECT";
	$proto0 ["m_strFieldList"] = "AutSkillId,  	SkillLevel";
	$proto0 ["m_strFrom"] = "FROM skilllevel";
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
			"m_strName" => "AutSkillId",
			"m_strTable" => "skilllevel",
			"m_srcTableName" => "skilllevel" 
	) );
	
	$proto5 ["m_sql"] = "AutSkillId";
	$proto5 ["m_srcTableName"] = "skilllevel";
	$proto5 ["m_expr"] = $obj;
	$proto5 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto5 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto7 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "SkillLevel",
			"m_strTable" => "skilllevel",
			"m_srcTableName" => "skilllevel" 
	) );
	
	$proto7 ["m_sql"] = "SkillLevel";
	$proto7 ["m_srcTableName"] = "skilllevel";
	$proto7 ["m_expr"] = $obj;
	$proto7 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto7 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto0 ["m_fromlist"] = array ();
	$proto9 = array ();
	$proto9 ["m_link"] = "SQLL_MAIN";
	$proto10 = array ();
	$proto10 ["m_strName"] = "skilllevel";
	$proto10 ["m_srcTableName"] = "skilllevel";
	$proto10 ["m_columns"] = array ();
	$proto10 ["m_columns"] [] = "AutSkillId";
	$proto10 ["m_columns"] [] = "SkillLevel";
	$obj = new SQLTable ( $proto10 );
	
	$proto9 ["m_table"] = $obj;
	$proto9 ["m_sql"] = "skilllevel";
	$proto9 ["m_alias"] = "";
	$proto9 ["m_srcTableName"] = "skilllevel";
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
	$proto0 ["m_srcTableName"] = "skilllevel";
	$obj = new SQLQuery ( $proto0 );
	
	return $obj;
}
$queryData_skilllevel = createSqlQuery_skilllevel ();

$tdataskilllevel [".sqlquery"] = $queryData_skilllevel;

$tableEvents ["skilllevel"] = new eventsBase ();
$tdataskilllevel [".hasEvents"] = false;

?>