<?php
require_once (getabspath ( "classes/cipherer.php" ));

$tdatatbl_technologycustomer = array ();
$tdatatbl_technologycustomer [".truncateText"] = true;
$tdatatbl_technologycustomer [".NumberOfChars"] = 60;
$tdatatbl_technologycustomer [".ShortName"] = "tbl_technologycustomer";
$tdatatbl_technologycustomer [".OwnerID"] = "";
$tdatatbl_technologycustomer [".OriginalTable"] = "tbl_technologycustomer";

// field labels
$fieldLabelstbl_technologycustomer = array ();
$fieldToolTipstbl_technologycustomer = array ();
$pageTitlestbl_technologycustomer = array ();

if (mlang_getcurrentlang () == "English") {
	$fieldLabelstbl_technologycustomer ["English"] = array ();
	$fieldToolTipstbl_technologycustomer ["English"] = array ();
	$pageTitlestbl_technologycustomer ["English"] = array ();
	$fieldLabelstbl_technologycustomer ["English"] ["PlatformID"] = "Platform ID";
	$fieldToolTipstbl_technologycustomer ["English"] ["PlatformID"] = "";
	$fieldLabelstbl_technologycustomer ["English"] ["PlatformName"] = "Platform Name";
	$fieldToolTipstbl_technologycustomer ["English"] ["PlatformName"] = "";
	$fieldLabelstbl_technologycustomer ["English"] ["PlatformType"] = "Platform Type";
	$fieldToolTipstbl_technologycustomer ["English"] ["PlatformType"] = "";
	$fieldLabelstbl_technologycustomer ["English"] ["CategoryID"] = "Category ID";
	$fieldToolTipstbl_technologycustomer ["English"] ["CategoryID"] = "";
	if (count ( $fieldToolTipstbl_technologycustomer ["English"] ))
		$tdatatbl_technologycustomer [".isUseToolTips"] = true;
}
if (mlang_getcurrentlang () == "") {
	$fieldLabelstbl_technologycustomer [""] = array ();
	$fieldToolTipstbl_technologycustomer [""] = array ();
	$pageTitlestbl_technologycustomer [""] = array ();
	if (count ( $fieldToolTipstbl_technologycustomer [""] ))
		$tdatatbl_technologycustomer [".isUseToolTips"] = true;
}

$tdatatbl_technologycustomer [".NCSearch"] = true;

$tdatatbl_technologycustomer [".shortTableName"] = "tbl_technologycustomer";
$tdatatbl_technologycustomer [".nSecOptions"] = 0;
$tdatatbl_technologycustomer [".recsPerRowList"] = 1;
$tdatatbl_technologycustomer [".recsPerRowPrint"] = 1;
$tdatatbl_technologycustomer [".mainTableOwnerID"] = "";
$tdatatbl_technologycustomer [".moveNext"] = 0;
$tdatatbl_technologycustomer [".entityType"] = 0;

$tdatatbl_technologycustomer [".strOriginalTableName"] = "tbl_technologycustomer";

$tdatatbl_technologycustomer [".showAddInPopup"] = false;

$tdatatbl_technologycustomer [".showEditInPopup"] = false;

$tdatatbl_technologycustomer [".showViewInPopup"] = false;

// page's base css files names
$popupPagesLayoutNames = array ();
$tdatatbl_technologycustomer [".popupPagesLayoutNames"] = $popupPagesLayoutNames;

$tdatatbl_technologycustomer [".fieldsForRegister"] = array ();

$tdatatbl_technologycustomer [".listAjax"] = false;

$tdatatbl_technologycustomer [".audit"] = false;

$tdatatbl_technologycustomer [".locking"] = false;

$tdatatbl_technologycustomer [".edit"] = true;
$tdatatbl_technologycustomer [".afterEditAction"] = 1;
$tdatatbl_technologycustomer [".closePopupAfterEdit"] = 1;
$tdatatbl_technologycustomer [".afterEditActionDetTable"] = "";

$tdatatbl_technologycustomer [".add"] = true;
$tdatatbl_technologycustomer [".afterAddAction"] = 1;
$tdatatbl_technologycustomer [".closePopupAfterAdd"] = 1;
$tdatatbl_technologycustomer [".afterAddActionDetTable"] = "";

$tdatatbl_technologycustomer [".list"] = true;

$tdatatbl_technologycustomer [".inlineEdit"] = true;
$tdatatbl_technologycustomer [".inlineAdd"] = true;
$tdatatbl_technologycustomer [".view"] = true;

$tdatatbl_technologycustomer [".import"] = true;

$tdatatbl_technologycustomer [".exportTo"] = true;

$tdatatbl_technologycustomer [".printFriendly"] = true;

$tdatatbl_technologycustomer [".delete"] = true;

$tdatatbl_technologycustomer [".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatatbl_technologycustomer [".searchSaving"] = false;
//

$tdatatbl_technologycustomer [".showSearchPanel"] = true;
$tdatatbl_technologycustomer [".flexibleSearch"] = true;

if (isMobile ())
	$tdatatbl_technologycustomer [".isUseAjaxSuggest"] = false;
else
	$tdatatbl_technologycustomer [".isUseAjaxSuggest"] = true;

$tdatatbl_technologycustomer [".rowHighlite"] = true;

$tdatatbl_technologycustomer [".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_technologycustomer [".isUseTimeForSearch"] = false;

$tdatatbl_technologycustomer [".allSearchFields"] = array ();
$tdatatbl_technologycustomer [".filterFields"] = array ();
$tdatatbl_technologycustomer [".requiredSearchFields"] = array ();

$tdatatbl_technologycustomer [".allSearchFields"] [] = "PlatformID";
$tdatatbl_technologycustomer [".allSearchFields"] [] = "PlatformName";
$tdatatbl_technologycustomer [".allSearchFields"] [] = "PlatformType";
$tdatatbl_technologycustomer [".allSearchFields"] [] = "CategoryID";

$tdatatbl_technologycustomer [".googleLikeFields"] = array ();
$tdatatbl_technologycustomer [".googleLikeFields"] [] = "PlatformID";
$tdatatbl_technologycustomer [".googleLikeFields"] [] = "PlatformName";
$tdatatbl_technologycustomer [".googleLikeFields"] [] = "PlatformType";
$tdatatbl_technologycustomer [".googleLikeFields"] [] = "CategoryID";

$tdatatbl_technologycustomer [".advSearchFields"] = array ();
$tdatatbl_technologycustomer [".advSearchFields"] [] = "PlatformID";
$tdatatbl_technologycustomer [".advSearchFields"] [] = "PlatformName";
$tdatatbl_technologycustomer [".advSearchFields"] [] = "PlatformType";
$tdatatbl_technologycustomer [".advSearchFields"] [] = "CategoryID";

$tdatatbl_technologycustomer [".tableType"] = "list";

$tdatatbl_technologycustomer [".printerPageOrientation"] = 0;
$tdatatbl_technologycustomer [".nPrinterPageScale"] = 100;

$tdatatbl_technologycustomer [".nPrinterSplitRecords"] = 40;

$tdatatbl_technologycustomer [".nPrinterPDFSplitRecords"] = 40;

$tdatatbl_technologycustomer [".geocodingEnabled"] = false;

// view page pdf

// print page pdf

$tdatatbl_technologycustomer [".pageSize"] = 10;

$tdatatbl_technologycustomer [".warnLeavingPages"] = true;

$tstrOrderBy = "";
if (strlen ( $tstrOrderBy ) && strtolower ( substr ( $tstrOrderBy, 0, 8 ) ) != "order by")
	$tstrOrderBy = "order by " . $tstrOrderBy;
$tdatatbl_technologycustomer [".strOrderBy"] = $tstrOrderBy;

$tdatatbl_technologycustomer [".orderindexes"] = array ();

$tdatatbl_technologycustomer [".sqlHead"] = "SELECT PlatformID,  	PlatformName,  	PlatformType,  	CategoryID";
$tdatatbl_technologycustomer [".sqlFrom"] = "FROM tbl_technologycustomer";
$tdatatbl_technologycustomer [".sqlWhereExpr"] = "";
$tdatatbl_technologycustomer [".sqlTail"] = "";

// fill array of records per page for list and report without group fields
$arrRPP = array ();
$arrRPP [] = 10;
$arrRPP [] = 20;
$arrRPP [] = 30;
$arrRPP [] = 50;
$arrRPP [] = 100;
$arrRPP [] = 500;
$arrRPP [] = - 1;
$tdatatbl_technologycustomer [".arrRecsPerPage"] = $arrRPP;

// fill array of groups per page for report with group fields
$arrGPP = array ();
$arrGPP [] = 1;
$arrGPP [] = 3;
$arrGPP [] = 5;
$arrGPP [] = 10;
$arrGPP [] = 50;
$arrGPP [] = 100;
$arrGPP [] = - 1;
$tdatatbl_technologycustomer [".arrGroupsPerPage"] = $arrGPP;

$tableKeystbl_technologycustomer = array ();
$tableKeystbl_technologycustomer [] = "PlatformID";
$tdatatbl_technologycustomer [".Keys"] = $tableKeystbl_technologycustomer;

$tdatatbl_technologycustomer [".listFields"] = array ();
$tdatatbl_technologycustomer [".listFields"] [] = "PlatformID";
$tdatatbl_technologycustomer [".listFields"] [] = "PlatformName";
$tdatatbl_technologycustomer [".listFields"] [] = "PlatformType";
$tdatatbl_technologycustomer [".listFields"] [] = "CategoryID";

$tdatatbl_technologycustomer [".hideMobileList"] = array ();

$tdatatbl_technologycustomer [".viewFields"] = array ();
$tdatatbl_technologycustomer [".viewFields"] [] = "PlatformID";
$tdatatbl_technologycustomer [".viewFields"] [] = "PlatformName";
$tdatatbl_technologycustomer [".viewFields"] [] = "PlatformType";
$tdatatbl_technologycustomer [".viewFields"] [] = "CategoryID";

$tdatatbl_technologycustomer [".addFields"] = array ();
$tdatatbl_technologycustomer [".addFields"] [] = "PlatformName";
$tdatatbl_technologycustomer [".addFields"] [] = "PlatformType";
$tdatatbl_technologycustomer [".addFields"] [] = "CategoryID";

$tdatatbl_technologycustomer [".masterListFields"] = array ();
$tdatatbl_technologycustomer [".masterListFields"] [] = "PlatformID";
$tdatatbl_technologycustomer [".masterListFields"] [] = "PlatformName";
$tdatatbl_technologycustomer [".masterListFields"] [] = "PlatformType";
$tdatatbl_technologycustomer [".masterListFields"] [] = "CategoryID";

$tdatatbl_technologycustomer [".inlineAddFields"] = array ();
$tdatatbl_technologycustomer [".inlineAddFields"] [] = "PlatformName";
$tdatatbl_technologycustomer [".inlineAddFields"] [] = "PlatformType";
$tdatatbl_technologycustomer [".inlineAddFields"] [] = "CategoryID";

$tdatatbl_technologycustomer [".editFields"] = array ();
$tdatatbl_technologycustomer [".editFields"] [] = "PlatformName";
$tdatatbl_technologycustomer [".editFields"] [] = "PlatformType";
$tdatatbl_technologycustomer [".editFields"] [] = "CategoryID";

$tdatatbl_technologycustomer [".inlineEditFields"] = array ();
$tdatatbl_technologycustomer [".inlineEditFields"] [] = "PlatformName";
$tdatatbl_technologycustomer [".inlineEditFields"] [] = "PlatformType";
$tdatatbl_technologycustomer [".inlineEditFields"] [] = "CategoryID";

$tdatatbl_technologycustomer [".exportFields"] = array ();
$tdatatbl_technologycustomer [".exportFields"] [] = "PlatformID";
$tdatatbl_technologycustomer [".exportFields"] [] = "PlatformName";
$tdatatbl_technologycustomer [".exportFields"] [] = "PlatformType";
$tdatatbl_technologycustomer [".exportFields"] [] = "CategoryID";

$tdatatbl_technologycustomer [".importFields"] = array ();
$tdatatbl_technologycustomer [".importFields"] [] = "PlatformID";
$tdatatbl_technologycustomer [".importFields"] [] = "PlatformName";
$tdatatbl_technologycustomer [".importFields"] [] = "PlatformType";
$tdatatbl_technologycustomer [".importFields"] [] = "CategoryID";

$tdatatbl_technologycustomer [".printFields"] = array ();
$tdatatbl_technologycustomer [".printFields"] [] = "PlatformID";
$tdatatbl_technologycustomer [".printFields"] [] = "PlatformName";
$tdatatbl_technologycustomer [".printFields"] [] = "PlatformType";
$tdatatbl_technologycustomer [".printFields"] [] = "CategoryID";

// PlatformID
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 1;
$fdata ["strName"] = "PlatformID";
$fdata ["GoodName"] = "PlatformID";
$fdata ["ownerTable"] = "tbl_technologycustomer";
$fdata ["Label"] = GetFieldLabel ( "tbl_technologycustomer", "PlatformID" );
$fdata ["FieldType"] = 3;

$fdata ["AutoInc"] = true;

$fdata ["bListPage"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "PlatformID";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "PlatformID";

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

$tdatatbl_technologycustomer ["PlatformID"] = $fdata;
// PlatformName
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 2;
$fdata ["strName"] = "PlatformName";
$fdata ["GoodName"] = "PlatformName";
$fdata ["ownerTable"] = "tbl_technologycustomer";
$fdata ["Label"] = GetFieldLabel ( "tbl_technologycustomer", "PlatformName" );
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

$fdata ["strField"] = "PlatformName";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "PlatformName";

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

$tdatatbl_technologycustomer ["PlatformName"] = $fdata;
// PlatformType
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 3;
$fdata ["strName"] = "PlatformType";
$fdata ["GoodName"] = "PlatformType";
$fdata ["ownerTable"] = "tbl_technologycustomer";
$fdata ["Label"] = GetFieldLabel ( "tbl_technologycustomer", "PlatformType" );
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

$fdata ["strField"] = "PlatformType";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "PlatformType";

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

$tdatatbl_technologycustomer ["PlatformType"] = $fdata;
// CategoryID
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 4;
$fdata ["strName"] = "CategoryID";
$fdata ["GoodName"] = "CategoryID";
$fdata ["ownerTable"] = "tbl_technologycustomer";
$fdata ["Label"] = GetFieldLabel ( "tbl_technologycustomer", "CategoryID" );
$fdata ["FieldType"] = 3;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bInlineAdd"] = true;

$fdata ["bEditPage"] = true;

$fdata ["bInlineEdit"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "CategoryID";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "CategoryID";

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

$tdatatbl_technologycustomer ["CategoryID"] = $fdata;

$tables_data ["tbl_technologycustomer"] = &$tdatatbl_technologycustomer;
$field_labels ["tbl_technologycustomer"] = &$fieldLabelstbl_technologycustomer;
$fieldToolTips ["tbl_technologycustomer"] = &$fieldToolTipstbl_technologycustomer;
$page_titles ["tbl_technologycustomer"] = &$pageTitlestbl_technologycustomer;

// -----------------start prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData ["tbl_technologycustomer"] = array ();

// tables which are master tables for current table (detail)
$masterTablesData ["tbl_technologycustomer"] = array ();

// -----------------end prepare master-details data arrays ------------------------------//

require_once (getabspath ( "classes/sql.php" ));
function createSqlQuery_tbl_technologycustomer() {
	$proto0 = array ();
	$proto0 ["m_strHead"] = "SELECT";
	$proto0 ["m_strFieldList"] = "PlatformID,  	PlatformName,  	PlatformType,  	CategoryID";
	$proto0 ["m_strFrom"] = "FROM tbl_technologycustomer";
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
			"m_strName" => "PlatformID",
			"m_strTable" => "tbl_technologycustomer",
			"m_srcTableName" => "tbl_technologycustomer" 
	) );
	
	$proto5 ["m_sql"] = "PlatformID";
	$proto5 ["m_srcTableName"] = "tbl_technologycustomer";
	$proto5 ["m_expr"] = $obj;
	$proto5 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto5 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto7 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "PlatformName",
			"m_strTable" => "tbl_technologycustomer",
			"m_srcTableName" => "tbl_technologycustomer" 
	) );
	
	$proto7 ["m_sql"] = "PlatformName";
	$proto7 ["m_srcTableName"] = "tbl_technologycustomer";
	$proto7 ["m_expr"] = $obj;
	$proto7 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto7 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto9 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "PlatformType",
			"m_strTable" => "tbl_technologycustomer",
			"m_srcTableName" => "tbl_technologycustomer" 
	) );
	
	$proto9 ["m_sql"] = "PlatformType";
	$proto9 ["m_srcTableName"] = "tbl_technologycustomer";
	$proto9 ["m_expr"] = $obj;
	$proto9 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto9 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto11 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "CategoryID",
			"m_strTable" => "tbl_technologycustomer",
			"m_srcTableName" => "tbl_technologycustomer" 
	) );
	
	$proto11 ["m_sql"] = "CategoryID";
	$proto11 ["m_srcTableName"] = "tbl_technologycustomer";
	$proto11 ["m_expr"] = $obj;
	$proto11 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto11 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto0 ["m_fromlist"] = array ();
	$proto13 = array ();
	$proto13 ["m_link"] = "SQLL_MAIN";
	$proto14 = array ();
	$proto14 ["m_strName"] = "tbl_technologycustomer";
	$proto14 ["m_srcTableName"] = "tbl_technologycustomer";
	$proto14 ["m_columns"] = array ();
	$proto14 ["m_columns"] [] = "PlatformID";
	$proto14 ["m_columns"] [] = "PlatformName";
	$proto14 ["m_columns"] [] = "PlatformType";
	$proto14 ["m_columns"] [] = "CategoryID";
	$obj = new SQLTable ( $proto14 );
	
	$proto13 ["m_table"] = $obj;
	$proto13 ["m_sql"] = "tbl_technologycustomer";
	$proto13 ["m_alias"] = "";
	$proto13 ["m_srcTableName"] = "tbl_technologycustomer";
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
	$proto0 ["m_srcTableName"] = "tbl_technologycustomer";
	$obj = new SQLQuery ( $proto0 );
	
	return $obj;
}
$queryData_tbl_technologycustomer = createSqlQuery_tbl_technologycustomer ();

$tdatatbl_technologycustomer [".sqlquery"] = $queryData_tbl_technologycustomer;

$tableEvents ["tbl_technologycustomer"] = new eventsBase ();
$tdatatbl_technologycustomer [".hasEvents"] = false;

?>