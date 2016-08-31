<?php
require_once (getabspath ( "classes/cipherer.php" ));

$tdataskillstable = array ();
$tdataskillstable [".truncateText"] = true;
$tdataskillstable [".NumberOfChars"] = 80;
$tdataskillstable [".ShortName"] = "skillstable";
$tdataskillstable [".OwnerID"] = "";
$tdataskillstable [".OriginalTable"] = "skillstable";

// field labels
$fieldLabelsskillstable = array ();
$fieldToolTipsskillstable = array ();
$pageTitlesskillstable = array ();

if (mlang_getcurrentlang () == "English") {
	$fieldLabelsskillstable ["English"] = array ();
	$fieldToolTipsskillstable ["English"] = array ();
	$pageTitlesskillstable ["English"] = array ();
	$fieldLabelsskillstable ["English"] ["PlatformID"] = "Platform ID";
	$fieldToolTipsskillstable ["English"] ["PlatformID"] = "";
	$fieldLabelsskillstable ["English"] ["PlatformName"] = "Platform Name";
	$fieldToolTipsskillstable ["English"] ["PlatformName"] = "";
	$fieldLabelsskillstable ["English"] ["PlatformType"] = "Platform Type";
	$fieldToolTipsskillstable ["English"] ["PlatformType"] = "";
	$fieldLabelsskillstable ["English"] ["CategoryID"] = "Category ID";
	$fieldToolTipsskillstable ["English"] ["CategoryID"] = "";
	if (count ( $fieldToolTipsskillstable ["English"] ))
		$tdataskillstable [".isUseToolTips"] = true;
}
if (mlang_getcurrentlang () == "") {
	$fieldLabelsskillstable [""] = array ();
	$fieldToolTipsskillstable [""] = array ();
	$pageTitlesskillstable [""] = array ();
	$fieldLabelsskillstable [""] ["PlatformID"] = "Platform ID";
	$fieldToolTipsskillstable [""] ["PlatformID"] = "";
	if (count ( $fieldToolTipsskillstable [""] ))
		$tdataskillstable [".isUseToolTips"] = true;
}

$tdataskillstable [".NCSearch"] = true;

$tdataskillstable [".shortTableName"] = "skillstable";
$tdataskillstable [".nSecOptions"] = 0;
$tdataskillstable [".recsPerRowList"] = 1;
$tdataskillstable [".recsPerRowPrint"] = 1;
$tdataskillstable [".mainTableOwnerID"] = "";
$tdataskillstable [".moveNext"] = 0;
$tdataskillstable [".entityType"] = 0;

$tdataskillstable [".strOriginalTableName"] = "skillstable";

$tdataskillstable [".showAddInPopup"] = true;

$tdataskillstable [".showEditInPopup"] = true;

$tdataskillstable [".showViewInPopup"] = true;

// page's base css files names
$popupPagesLayoutNames = array ();

;
$popupPagesLayoutNames ["add"] = "add2";

;
$popupPagesLayoutNames ["edit"] = "edit2";

;
$popupPagesLayoutNames ["view"] = "view2";
$tdataskillstable [".popupPagesLayoutNames"] = $popupPagesLayoutNames;

$tdataskillstable [".fieldsForRegister"] = array ();

$tdataskillstable [".listAjax"] = false;

$tdataskillstable [".audit"] = false;

$tdataskillstable [".locking"] = false;

$tdataskillstable [".edit"] = true;
$tdataskillstable [".afterEditAction"] = 1;
$tdataskillstable [".closePopupAfterEdit"] = 1;
$tdataskillstable [".afterEditActionDetTable"] = "";

$tdataskillstable [".add"] = true;
$tdataskillstable [".afterAddAction"] = 1;
$tdataskillstable [".closePopupAfterAdd"] = 1;
$tdataskillstable [".afterAddActionDetTable"] = "";

$tdataskillstable [".list"] = true;

$tdataskillstable [".view"] = true;

$tdataskillstable [".import"] = true;

$tdataskillstable [".exportTo"] = true;

$tdataskillstable [".printFriendly"] = true;

$tdataskillstable [".delete"] = true;

$tdataskillstable [".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataskillstable [".searchSaving"] = false;
//

$tdataskillstable [".showSearchPanel"] = true;
$tdataskillstable [".flexibleSearch"] = true;

if (isMobile ())
	$tdataskillstable [".isUseAjaxSuggest"] = false;
else
	$tdataskillstable [".isUseAjaxSuggest"] = true;

$tdataskillstable [".rowHighlite"] = true;

$tdataskillstable [".addPageEvents"] = true;


// use timepicker for search panel
$tdataskillstable [".isUseTimeForSearch"] = false;

$tdataskillstable [".allSearchFields"] = array ();
$tdataskillstable [".filterFields"] = array ();
$tdataskillstable [".requiredSearchFields"] = array ();

$tdataskillstable [".allSearchFields"] [] = "PlatformType";
$tdataskillstable [".allSearchFields"] [] = "CategoryID";
$tdataskillstable [".allSearchFields"] [] = "PlatformName";
$tdataskillstable [".allSearchFields"] [] = "PlatformID";

$tdataskillstable [".googleLikeFields"] = array ();
$tdataskillstable [".googleLikeFields"] [] = "PlatformID";
$tdataskillstable [".googleLikeFields"] [] = "PlatformName";
$tdataskillstable [".googleLikeFields"] [] = "PlatformType";
$tdataskillstable [".googleLikeFields"] [] = "CategoryID";

$tdataskillstable [".advSearchFields"] = array ();
$tdataskillstable [".advSearchFields"] [] = "PlatformType";
$tdataskillstable [".advSearchFields"] [] = "CategoryID";
$tdataskillstable [".advSearchFields"] [] = "PlatformName";
$tdataskillstable [".advSearchFields"] [] = "PlatformID";

$tdataskillstable [".tableType"] = "list";

$tdataskillstable [".printerPageOrientation"] = 0;
$tdataskillstable [".nPrinterPageScale"] = 100;

$tdataskillstable [".nPrinterSplitRecords"] = 40;

$tdataskillstable [".nPrinterPDFSplitRecords"] = 40;

$tdataskillstable [".geocodingEnabled"] = false;

// view page pdf

// print page pdf

$tdataskillstable [".pageSize"] = 20;

$tdataskillstable [".warnLeavingPages"] = true;

$tstrOrderBy = "";
if (strlen ( $tstrOrderBy ) && strtolower ( substr ( $tstrOrderBy, 0, 8 ) ) != "order by")
	$tstrOrderBy = "order by " . $tstrOrderBy;
$tdataskillstable [".strOrderBy"] = $tstrOrderBy;

$tdataskillstable [".orderindexes"] = array ();

$tdataskillstable [".sqlHead"] = "SELECT PlatformID,  	PlatformName,  	PlatformType,  	CategoryID";
$tdataskillstable [".sqlFrom"] = "FROM skillstable";
$tdataskillstable [".sqlWhereExpr"] = "";
$tdataskillstable [".sqlTail"] = "";

// fill array of records per page for list and report without group fields
$arrRPP = array ();
$arrRPP [] = 10;
$arrRPP [] = 20;
$arrRPP [] = 30;
$arrRPP [] = 50;
$arrRPP [] = 100;
$arrRPP [] = 500;
$arrRPP [] = - 1;
$tdataskillstable [".arrRecsPerPage"] = $arrRPP;

// fill array of groups per page for report with group fields
$arrGPP = array ();
$arrGPP [] = 1;
$arrGPP [] = 3;
$arrGPP [] = 5;
$arrGPP [] = 10;
$arrGPP [] = 50;
$arrGPP [] = 100;
$arrGPP [] = - 1;
$tdataskillstable [".arrGroupsPerPage"] = $arrGPP;

$tableKeysskillstable = array ();
$tableKeysskillstable [] = "PlatformID";
$tdataskillstable [".Keys"] = $tableKeysskillstable;

$tdataskillstable [".listFields"] = array ();
$tdataskillstable [".listFields"] [] = "PlatformType";
$tdataskillstable [".listFields"] [] = "CategoryID";
$tdataskillstable [".listFields"] [] = "PlatformName";
$tdataskillstable [".listFields"] [] = "PlatformID";

$tdataskillstable [".hideMobileList"] = array ();

$tdataskillstable [".viewFields"] = array ();
$tdataskillstable [".viewFields"] [] = "PlatformType";
$tdataskillstable [".viewFields"] [] = "CategoryID";
$tdataskillstable [".viewFields"] [] = "PlatformName";
$tdataskillstable [".viewFields"] [] = "PlatformID";

$tdataskillstable [".addFields"] = array ();
$tdataskillstable [".addFields"] [] = "PlatformType";
$tdataskillstable [".addFields"] [] = "CategoryID";
$tdataskillstable [".addFields"] [] = "PlatformName";

$tdataskillstable [".masterListFields"] = array ();
$tdataskillstable [".masterListFields"] [] = "PlatformType";
$tdataskillstable [".masterListFields"] [] = "CategoryID";
$tdataskillstable [".masterListFields"] [] = "PlatformName";
$tdataskillstable [".masterListFields"] [] = "PlatformID";

$tdataskillstable [".inlineAddFields"] = array ();

$tdataskillstable [".editFields"] = array ();
$tdataskillstable [".editFields"] [] = "PlatformType";
$tdataskillstable [".editFields"] [] = "CategoryID";
$tdataskillstable [".editFields"] [] = "PlatformName";

$tdataskillstable [".inlineEditFields"] = array ();

$tdataskillstable [".exportFields"] = array ();
$tdataskillstable [".exportFields"] [] = "PlatformType";
$tdataskillstable [".exportFields"] [] = "CategoryID";
$tdataskillstable [".exportFields"] [] = "PlatformName";
$tdataskillstable [".exportFields"] [] = "PlatformID";

$tdataskillstable [".importFields"] = array ();
$tdataskillstable [".importFields"] [] = "PlatformID";
$tdataskillstable [".importFields"] [] = "PlatformName";
$tdataskillstable [".importFields"] [] = "PlatformType";
$tdataskillstable [".importFields"] [] = "CategoryID";

$tdataskillstable [".printFields"] = array ();
$tdataskillstable [".printFields"] [] = "PlatformType";
$tdataskillstable [".printFields"] [] = "CategoryID";
$tdataskillstable [".printFields"] [] = "PlatformName";
$tdataskillstable [".printFields"] [] = "PlatformID";

// PlatformID
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 1;
$fdata ["strName"] = "PlatformID";
$fdata ["GoodName"] = "PlatformID";
$fdata ["ownerTable"] = "skillstable";
$fdata ["Label"] = GetFieldLabel ( "skillstable", "PlatformID" );
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

$tdataskillstable ["PlatformID"] = $fdata;
// PlatformName
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 2;
$fdata ["strName"] = "PlatformName";
$fdata ["GoodName"] = "PlatformName";
$fdata ["ownerTable"] = "skillstable";
$fdata ["Label"] = GetFieldLabel ( "skillstable", "PlatformName" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

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

$tdataskillstable ["PlatformName"] = $fdata;
// PlatformType
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 3;
$fdata ["strName"] = "PlatformType";
$fdata ["GoodName"] = "PlatformType";
$fdata ["ownerTable"] = "skillstable";
$fdata ["Label"] = GetFieldLabel ( "skillstable", "PlatformType" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bAddPage"] = true;

$fdata ["bEditPage"] = true;

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
		"EditFormat" => "Lookup wizard" 
);

// Begin Lookup settings
$edata ["LookupType"] = 2;
$edata ["LookupTable"] = "category";
$edata ["autoCompleteFieldsOnEdit"] = 0;
$edata ["autoCompleteFields"] = array ();
$edata ["LCType"] = 0;

$edata ["LinkField"] = "CategotyName";
$edata ["LinkFieldType"] = 0;
$edata ["DisplayField"] = "CategotyName";

$edata ["LookupOrderBy"] = "CategotyName";

$edata ["SelectSize"] = 1;

// End Lookup Settings

$edata ["IsRequired"] = true;

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["controlWidth"] = 200;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = "IsRequired";

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = false;

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

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

$tdataskillstable ["PlatformType"] = $fdata;
// CategoryID
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 4;
$fdata ["strName"] = "CategoryID";
$fdata ["GoodName"] = "CategoryID";
$fdata ["ownerTable"] = "skillstable";
$fdata ["Label"] = GetFieldLabel ( "skillstable", "CategoryID" );
$fdata ["FieldType"] = 3;

$fdata ["bListPage"] = true;
$fdata ["bAddPage"] = true;
$fdata ["bEditPage"] = true;

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
$vdata = array (
		"ViewFormat" => "" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["list"] = $vdata;
$vdata = array (
		"ViewFormat" => "" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["print"] = $vdata;
$vdata = array (
		"ViewFormat" => "" 
);

$vdata ["NeedEncode"] = true;

$fdata ["ViewFormats"] ["export"] = $vdata;
// End View Formats

// Begin Edit Formats
$fdata ["EditFormats"] = array ();
$edata = array (
		"EditFormat" => "Readonly"
);
/* $edata = array (
		"EditFormat" => "Lookup wizard" 
);

// Begin Lookup settings
$edata ["LookupType"] = 2;
$edata ["LookupTable"] = "category";
$edata ["autoCompleteFieldsOnEdit"] = 0;
$edata ["autoCompleteFields"] = array ();
$edata ["LCType"] = 0;
$edata ["LinkField"] = "CategoryID";
$edata ["LinkFieldType"] = 3;
$edata ["DisplayField"] = "CategotyName";
$edata ["LookupOrderBy"] = "CategoryID";
$edata ["SimpleAdd"] = true;
$edata ["SelectSize"] = 1;
// End Lookup Settings */
$edata ["IsRequired"] = true;

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

/* $edata ["HTML5InuptType"] = "number";

$edata ["EditParams"] = "";
 */
$edata ["controlWidth"] = 200;
// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = getJsValidatorName ( "Number" );
$edata ["validateAs"] ["basicValidate"] [] = "IsRequired";

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
$edata = array (
		"EditFormat" => "Readonly" 
);

$edata ["IsRequired"] = true;

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

/* $edata ["HTML5InuptType"] = "number";

$edata ["EditParams"] = ""; */

$edata ["controlWidth"] = 200;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = getJsValidatorName ( "Number" );
$edata ["validateAs"] ["basicValidate"] [] = "IsRequired";

// End validation

$fdata ["EditFormats"] ["register"] = $edata;
$edata = array (
		"EditFormat" => "Readonly" 
);

$edata ["IsRequired"] = true;

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

/* $edata ["HTML5InuptType"] = "number";
$edata ["EditParams"] = ""; */
$edata ["controlWidth"] = 200;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = getJsValidatorName ( "Number" );
$edata ["validateAs"] ["basicValidate"] [] = "IsRequired";

// End validation

$fdata ["EditFormats"] ["add"] = $edata;
$edata = array (
		"EditFormat" => "Readonly" 
);

$edata ["IsRequired"] = true;

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

/* $edata ["HTML5InuptType"] = "number";

$edata ["EditParams"] = ""; */

$edata ["controlWidth"] = 200;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = getJsValidatorName ( "Number" );
$edata ["validateAs"] ["basicValidate"] [] = "IsRequired";

// End validation

$fdata ["EditFormats"] ["search"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = true;

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

$tdataskillstable ["CategoryID"] = $fdata;

$tables_data ["skillstable"] = &$tdataskillstable;
$field_labels ["skillstable"] = &$fieldLabelsskillstable;
$fieldToolTips ["skillstable"] = &$fieldToolTipsskillstable;
$page_titles ["skillstable"] = &$pageTitlesskillstable;

// -----------------start prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData ["skillstable"] = array ();

// tables which are master tables for current table (detail)
$masterTablesData ["skillstable"] = array ();

// -----------------end prepare master-details data arrays ------------------------------//

require_once (getabspath ( "classes/sql.php" ));
function createSqlQuery_skillstable() {
	$proto3 = array ();
	$proto3 ["m_strHead"] = "SELECT";
	$proto3 ["m_strFieldList"] = "PlatformID,  	PlatformName,  	PlatformType,  	CategoryID";
	$proto3 ["m_strFrom"] = "FROM skillstable";
	$proto3 ["m_strWhere"] = "";
	$proto3 ["m_strOrderBy"] = "";
	$proto3 ["m_strTail"] = "";
	$proto3 ["cipherer"] = null;
	$proto4 = array ();
	$proto4 ["m_sql"] = "";
	$proto4 ["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed ( array (
			"m_sql" => "" 
	) );
	
	$proto4 ["m_column"] = $obj;
	$proto4 ["m_contained"] = array ();
	$proto4 ["m_strCase"] = "";
	$proto4 ["m_havingmode"] = false;
	$proto4 ["m_inBrackets"] = false;
	$proto4 ["m_useAlias"] = false;
	$obj = new SQLLogicalExpr ( $proto4 );
	
	$proto3 ["m_where"] = $obj;
	$proto6 = array ();
	$proto6 ["m_sql"] = "";
	$proto6 ["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed ( array (
			"m_sql" => "" 
	) );
	
	$proto6 ["m_column"] = $obj;
	$proto6 ["m_contained"] = array ();
	$proto6 ["m_strCase"] = "";
	$proto6 ["m_havingmode"] = false;
	$proto6 ["m_inBrackets"] = false;
	$proto6 ["m_useAlias"] = false;
	$obj = new SQLLogicalExpr ( $proto6 );
	
	$proto3 ["m_having"] = $obj;
	$proto3 ["m_fieldlist"] = array ();
	$proto8 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "PlatformID",
			"m_strTable" => "skillstable",
			"m_srcTableName" => "skillstable" 
	) );
	
	$proto8 ["m_sql"] = "PlatformID";
	$proto8 ["m_srcTableName"] = "skillstable";
	$proto8 ["m_expr"] = $obj;
	$proto8 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto8 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto10 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "PlatformName",
			"m_strTable" => "skillstable",
			"m_srcTableName" => "skillstable" 
	) );
	
	$proto10 ["m_sql"] = "PlatformName";
	$proto10 ["m_srcTableName"] = "skillstable";
	$proto10 ["m_expr"] = $obj;
	$proto10 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto10 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto12 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "PlatformType",
			"m_strTable" => "skillstable",
			"m_srcTableName" => "skillstable" 
	) );
	
	$proto12 ["m_sql"] = "PlatformType";
	$proto12 ["m_srcTableName"] = "skillstable";
	$proto12 ["m_expr"] = $obj;
	$proto12 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto12 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto14 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "CategoryID",
			"m_strTable" => "skillstable",
			"m_srcTableName" => "skillstable" 
	) );
	
	$proto14 ["m_sql"] = "CategoryID";
	$proto14 ["m_srcTableName"] = "skillstable";
	$proto14 ["m_expr"] = $obj;
	$proto14 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto14 );
	
	$proto3 ["m_fieldlist"] [] = $obj;
	$proto3 ["m_fromlist"] = array ();
	$proto16 = array ();
	$proto16 ["m_link"] = "SQLL_MAIN";
	$proto17 = array ();
	$proto17 ["m_strName"] = "skillstable";
	$proto17 ["m_srcTableName"] = "skillstable";
	$proto17 ["m_columns"] = array ();
	$proto17 ["m_columns"] [] = "PlatformID";
	$proto17 ["m_columns"] [] = "PlatformName";
	$proto17 ["m_columns"] [] = "PlatformType";
	$proto17 ["m_columns"] [] = "CategoryID";
	$obj = new SQLTable ( $proto17 );
	
	$proto16 ["m_table"] = $obj;
	$proto16 ["m_sql"] = "skillstable";
	$proto16 ["m_alias"] = "";
	$proto16 ["m_srcTableName"] = "skillstable";
	$proto18 = array ();
	$proto18 ["m_sql"] = "";
	$proto18 ["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed ( array (
			"m_sql" => "" 
	) );
	
	$proto18 ["m_column"] = $obj;
	$proto18 ["m_contained"] = array ();
	$proto18 ["m_strCase"] = "";
	$proto18 ["m_havingmode"] = false;
	$proto18 ["m_inBrackets"] = false;
	$proto18 ["m_useAlias"] = false;
	$obj = new SQLLogicalExpr ( $proto18 );
	
	$proto16 ["m_joinon"] = $obj;
	$obj = new SQLFromListItem ( $proto16 );
	
	$proto3 ["m_fromlist"] [] = $obj;
	$proto3 ["m_groupby"] = array ();
	$proto3 ["m_orderby"] = array ();
	$proto3 ["m_srcTableName"] = "skillstable";
	$obj = new SQLQuery ( $proto3 );
	
	return $obj;
}
$queryData_skillstable = createSqlQuery_skillstable ();

$tdataskillstable [".sqlquery"] = $queryData_skillstable;

$tableEvents ["skillstable"] = new eventsBase ();
$tdataskillstable [".hasEvents"] = false;

?>