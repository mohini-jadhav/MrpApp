<?php
require_once (getabspath ( "classes/cipherer.php" ));

$tdatabackup = array ();
$tdatabackup [".truncateText"] = true;
$tdatabackup [".NumberOfChars"] = 60;
$tdatabackup [".ShortName"] = "backup";
$tdatabackup [".OwnerID"] = "";
$tdatabackup [".OriginalTable"] = "backup";

// field labels
$fieldLabelsbackup = array ();
$fieldToolTipsbackup = array ();
$pageTitlesbackup = array ();

if (mlang_getcurrentlang () == "English") {
	$fieldLabelsbackup ["English"] = array ();
	$fieldToolTipsbackup ["English"] = array ();
	$pageTitlesbackup ["English"] = array ();
	$fieldLabelsbackup ["English"] ["AutbakupID"] = "Autbakup ID";
	$fieldToolTipsbackup ["English"] ["AutbakupID"] = "";
	$fieldLabelsbackup ["English"] ["Backup_Solutions"] = "Backup Solutions";
	$fieldToolTipsbackup ["English"] ["Backup Solutions"] = "";
	if (count ( $fieldToolTipsbackup ["English"] ))
		$tdatabackup [".isUseToolTips"] = true;
}
if (mlang_getcurrentlang () == "") {
	$fieldLabelsbackup [""] = array ();
	$fieldToolTipsbackup [""] = array ();
	$pageTitlesbackup [""] = array ();
	if (count ( $fieldToolTipsbackup [""] ))
		$tdatabackup [".isUseToolTips"] = true;
}

$tdatabackup [".NCSearch"] = true;

$tdatabackup [".shortTableName"] = "backup";
$tdatabackup [".nSecOptions"] = 0;
$tdatabackup [".recsPerRowList"] = 1;
$tdatabackup [".recsPerRowPrint"] = 1;
$tdatabackup [".mainTableOwnerID"] = "";
$tdatabackup [".moveNext"] = 0;
$tdatabackup [".entityType"] = 0;

$tdatabackup [".strOriginalTableName"] = "backup";

$tdatabackup [".showAddInPopup"] = false;

$tdatabackup [".showEditInPopup"] = false;

$tdatabackup [".showViewInPopup"] = false;

// page's base css files names
$popupPagesLayoutNames = array ();
$tdatabackup [".popupPagesLayoutNames"] = $popupPagesLayoutNames;

$tdatabackup [".fieldsForRegister"] = array ();

$tdatabackup [".listAjax"] = false;

$tdatabackup [".audit"] = false;

$tdatabackup [".locking"] = false;

$tdatabackup [".add"] = true;
$tdatabackup [".afterAddAction"] = 1;
$tdatabackup [".closePopupAfterAdd"] = 1;
$tdatabackup [".afterAddActionDetTable"] = "";

$tdatabackup [".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatabackup [".searchSaving"] = false;
//

$tdatabackup [".showSearchPanel"] = true;
$tdatabackup [".flexibleSearch"] = true;

if (isMobile ())
	$tdatabackup [".isUseAjaxSuggest"] = false;
else
	$tdatabackup [".isUseAjaxSuggest"] = true;

$tdatabackup [".rowHighlite"] = true;

$tdatabackup [".addPageEvents"] = false;

// use timepicker for search panel
$tdatabackup [".isUseTimeForSearch"] = false;

$tdatabackup [".allSearchFields"] = array ();
$tdatabackup [".filterFields"] = array ();
$tdatabackup [".requiredSearchFields"] = array ();

$tdatabackup [".googleLikeFields"] = array ();
$tdatabackup [".googleLikeFields"] [] = "AutbakupID";
$tdatabackup [".googleLikeFields"] [] = "Backup Solutions";

$tdatabackup [".advSearchFields"] = array ();
$tdatabackup [".advSearchFields"] [] = "AutbakupID";
$tdatabackup [".advSearchFields"] [] = "Backup Solutions";

$tdatabackup [".tableType"] = "list";

$tdatabackup [".printerPageOrientation"] = 0;
$tdatabackup [".nPrinterPageScale"] = 100;

$tdatabackup [".nPrinterSplitRecords"] = 40;

$tdatabackup [".nPrinterPDFSplitRecords"] = 40;

$tdatabackup [".geocodingEnabled"] = false;

// view page pdf

// print page pdf

$tdatabackup [".pageSize"] = 10;

$tdatabackup [".warnLeavingPages"] = true;

$tstrOrderBy = "";
if (strlen ( $tstrOrderBy ) && strtolower ( substr ( $tstrOrderBy, 0, 8 ) ) != "order by")
	$tstrOrderBy = "order by " . $tstrOrderBy;
$tdatabackup [".strOrderBy"] = $tstrOrderBy;

$tdatabackup [".orderindexes"] = array ();

$tdatabackup [".sqlHead"] = "SELECT AutbakupID,  	`Backup Solutions`";
$tdatabackup [".sqlFrom"] = "FROM `backup`";
$tdatabackup [".sqlWhereExpr"] = "";
$tdatabackup [".sqlTail"] = "";

// fill array of records per page for list and report without group fields
$arrRPP = array ();
$arrRPP [] = 10;
$arrRPP [] = 20;
$arrRPP [] = 30;
$arrRPP [] = 50;
$arrRPP [] = 100;
$arrRPP [] = 500;
$arrRPP [] = - 1;
$tdatabackup [".arrRecsPerPage"] = $arrRPP;

// fill array of groups per page for report with group fields
$arrGPP = array ();
$arrGPP [] = 1;
$arrGPP [] = 3;
$arrGPP [] = 5;
$arrGPP [] = 10;
$arrGPP [] = 50;
$arrGPP [] = 100;
$arrGPP [] = - 1;
$tdatabackup [".arrGroupsPerPage"] = $arrGPP;

$tableKeysbackup = array ();
$tableKeysbackup [] = "AutbakupID";
$tdatabackup [".Keys"] = $tableKeysbackup;

$tdatabackup [".listFields"] = array ();

$tdatabackup [".hideMobileList"] = array ();

$tdatabackup [".viewFields"] = array ();

$tdatabackup [".addFields"] = array ();
$tdatabackup [".addFields"] [] = "Backup Solutions";

$tdatabackup [".masterListFields"] = array ();
$tdatabackup [".masterListFields"] [] = "AutbakupID";
$tdatabackup [".masterListFields"] [] = "Backup Solutions";

$tdatabackup [".inlineAddFields"] = array ();

$tdatabackup [".editFields"] = array ();

$tdatabackup [".inlineEditFields"] = array ();

$tdatabackup [".exportFields"] = array ();

$tdatabackup [".importFields"] = array ();
$tdatabackup [".importFields"] [] = "AutbakupID";
$tdatabackup [".importFields"] [] = "Backup Solutions";

$tdatabackup [".printFields"] = array ();

// AutbakupID
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 1;
$fdata ["strName"] = "AutbakupID";
$fdata ["GoodName"] = "AutbakupID";
$fdata ["ownerTable"] = "backup";
$fdata ["Label"] = GetFieldLabel ( "backup", "AutbakupID" );
$fdata ["FieldType"] = 3;

$fdata ["AutoInc"] = true;

$fdata ["strField"] = "AutbakupID";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "AutbakupID";

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

$tdatabackup ["AutbakupID"] = $fdata;
// Backup Solutions
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 2;
$fdata ["strName"] = "Backup Solutions";
$fdata ["GoodName"] = "Backup_Solutions";
$fdata ["ownerTable"] = "backup";
$fdata ["Label"] = GetFieldLabel ( "backup", "Backup_Solutions" );
$fdata ["FieldType"] = 200;

$fdata ["bAddPage"] = true;

$fdata ["strField"] = "Backup Solutions";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "`Backup Solutions`";

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

$tdatabackup ["Backup Solutions"] = $fdata;

$tables_data ["backup"] = &$tdatabackup;
$field_labels ["backup"] = &$fieldLabelsbackup;
$fieldToolTips ["backup"] = &$fieldToolTipsbackup;
$page_titles ["backup"] = &$pageTitlesbackup;

// -----------------start prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData ["backup"] = array ();

// tables which are master tables for current table (detail)
$masterTablesData ["backup"] = array ();

// -----------------end prepare master-details data arrays ------------------------------//

require_once (getabspath ( "classes/sql.php" ));
function createSqlQuery_backup() {
	$proto0 = array ();
	$proto0 ["m_strHead"] = "SELECT";
	$proto0 ["m_strFieldList"] = "AutbakupID,  	`Backup Solutions`";
	$proto0 ["m_strFrom"] = "FROM `backup`";
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
			"m_strName" => "AutbakupID",
			"m_strTable" => "backup",
			"m_srcTableName" => "backup" 
	) );
	
	$proto5 ["m_sql"] = "AutbakupID";
	$proto5 ["m_srcTableName"] = "backup";
	$proto5 ["m_expr"] = $obj;
	$proto5 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto5 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto7 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Backup Solutions",
			"m_strTable" => "backup",
			"m_srcTableName" => "backup" 
	) );
	
	$proto7 ["m_sql"] = "`Backup Solutions`";
	$proto7 ["m_srcTableName"] = "backup";
	$proto7 ["m_expr"] = $obj;
	$proto7 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto7 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto0 ["m_fromlist"] = array ();
	$proto9 = array ();
	$proto9 ["m_link"] = "SQLL_MAIN";
	$proto10 = array ();
	$proto10 ["m_strName"] = "backup";
	$proto10 ["m_srcTableName"] = "backup";
	$proto10 ["m_columns"] = array ();
	$proto10 ["m_columns"] [] = "AutbakupID";
	$proto10 ["m_columns"] [] = "Backup Solutions";
	$obj = new SQLTable ( $proto10 );
	
	$proto9 ["m_table"] = $obj;
	$proto9 ["m_sql"] = "`backup`";
	$proto9 ["m_alias"] = "";
	$proto9 ["m_srcTableName"] = "backup";
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
	$proto0 ["m_srcTableName"] = "backup";
	$obj = new SQLQuery ( $proto0 );
	
	return $obj;
}
$queryData_backup = createSqlQuery_backup ();

$tdatabackup [".sqlquery"] = $queryData_backup;

$tableEvents ["backup"] = new eventsBase ();
$tdatabackup [".hasEvents"] = false;

?>