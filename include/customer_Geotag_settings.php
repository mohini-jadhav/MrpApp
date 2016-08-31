<?php
require_once (getabspath ( "classes/cipherer.php" ));

$tdatacustomer_Geotag = array ();
$tdatacustomer_Geotag [".truncateText"] = true;
$tdatacustomer_Geotag [".NumberOfChars"] = 80;
$tdatacustomer_Geotag [".ShortName"] = "customer_Geotag";
$tdatacustomer_Geotag [".OwnerID"] = "";
$tdatacustomer_Geotag [".OriginalTable"] = "customer_header";

// field labels
$fieldLabelscustomer_Geotag = array ();
$fieldToolTipscustomer_Geotag = array ();
$pageTitlescustomer_Geotag = array ();

if (mlang_getcurrentlang () == "English") {
	$fieldLabelscustomer_Geotag ["English"] = array ();
	$fieldToolTipscustomer_Geotag ["English"] = array ();
	$pageTitlescustomer_Geotag ["English"] = array ();
	$fieldLabelscustomer_Geotag ["English"] ["OracIeID"] = "OracleID";
	$fieldToolTipscustomer_Geotag ["English"] ["OracIeID"] = "";
	$fieldLabelscustomer_Geotag ["English"] ["Name"] = "Name";
	$fieldToolTipscustomer_Geotag ["English"] ["Name"] = "";
	$fieldLabelscustomer_Geotag ["English"] ["Recovery_Center"] = "Recovery Center";
	$fieldToolTipscustomer_Geotag ["English"] ["Recovery_Center"] = "";
	$fieldLabelscustomer_Geotag ["English"] ["Address"] = "Address";
	$fieldToolTipscustomer_Geotag ["English"] ["Address"] = "";
	if (count ( $fieldToolTipscustomer_Geotag ["English"] ))
		$tdatacustomer_Geotag [".isUseToolTips"] = true;
}
if (mlang_getcurrentlang () == "") {
	$fieldLabelscustomer_Geotag [""] = array ();
	$fieldToolTipscustomer_Geotag [""] = array ();
	$pageTitlescustomer_Geotag [""] = array ();
	$fieldLabelscustomer_Geotag [""] ["OracIeID"] = "OracleID";
	$fieldToolTipscustomer_Geotag [""] ["OracIeID"] = "";
	$fieldLabelscustomer_Geotag [""] ["Address"] = "Address";
	$fieldToolTipscustomer_Geotag [""] ["Address"] = "";
	if (count ( $fieldToolTipscustomer_Geotag [""] ))
		$tdatacustomer_Geotag [".isUseToolTips"] = true;
}

$tdatacustomer_Geotag [".NCSearch"] = true;

if (! isMobile ())
	$tdatacustomer_Geotag [".scrollGridBody"] = true;

$tdatacustomer_Geotag [".shortTableName"] = "customer_Geotag";
$tdatacustomer_Geotag [".nSecOptions"] = 0;
$tdatacustomer_Geotag [".recsPerRowList"] = 1;
$tdatacustomer_Geotag [".recsPerRowPrint"] = 1;
$tdatacustomer_Geotag [".mainTableOwnerID"] = "";
$tdatacustomer_Geotag [".moveNext"] = 0;
$tdatacustomer_Geotag [".entityType"] = 1;

$tdatacustomer_Geotag [".strOriginalTableName"] = "customer_header";

$tdatacustomer_Geotag [".showAddInPopup"] = false;

$tdatacustomer_Geotag [".showEditInPopup"] = false;

$tdatacustomer_Geotag [".showViewInPopup"] = true;

// page's base css files names
$popupPagesLayoutNames = array ();

;
$popupPagesLayoutNames ["view"] = "view2";
$tdatacustomer_Geotag [".popupPagesLayoutNames"] = $popupPagesLayoutNames;

$tdatacustomer_Geotag [".fieldsForRegister"] = array ();

$tdatacustomer_Geotag [".listAjax"] = false;

$tdatacustomer_Geotag [".audit"] = false;

$tdatacustomer_Geotag [".locking"] = false;

$tdatacustomer_Geotag [".list"] = true;

$tdatacustomer_Geotag [".view"] = true;

$tdatacustomer_Geotag [".import"] = true;

$tdatacustomer_Geotag [".exportTo"] = true;

$tdatacustomer_Geotag [".printFriendly"] = true;

$tdatacustomer_Geotag [".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacustomer_Geotag [".searchSaving"] = false;
//

$tdatacustomer_Geotag [".showSearchPanel"] = true;
$tdatacustomer_Geotag [".flexibleSearch"] = true;

if (isMobile ())
	$tdatacustomer_Geotag [".isUseAjaxSuggest"] = false;
else
	$tdatacustomer_Geotag [".isUseAjaxSuggest"] = true;

$tdatacustomer_Geotag [".rowHighlite"] = true;

$tdatacustomer_Geotag [".addPageEvents"] = false;

// use timepicker for search panel
$tdatacustomer_Geotag [".isUseTimeForSearch"] = false;

$tdatacustomer_Geotag [".isUseMainMaps"] = true;

$tdatacustomer_Geotag [".allSearchFields"] = array ();
$tdatacustomer_Geotag [".filterFields"] = array ();
$tdatacustomer_Geotag [".requiredSearchFields"] = array ();

$tdatacustomer_Geotag [".allSearchFields"] [] = "OracIeID";
$tdatacustomer_Geotag [".allSearchFields"] [] = "Name";
$tdatacustomer_Geotag [".allSearchFields"] [] = "Recovery_Center";
$tdatacustomer_Geotag [".allSearchFields"] [] = "Address";

$tdatacustomer_Geotag [".googleLikeFields"] = array ();
$tdatacustomer_Geotag [".googleLikeFields"] [] = "OracIeID";
$tdatacustomer_Geotag [".googleLikeFields"] [] = "Name";
$tdatacustomer_Geotag [".googleLikeFields"] [] = "Recovery_Center";
$tdatacustomer_Geotag [".googleLikeFields"] [] = "Address";

$tdatacustomer_Geotag [".advSearchFields"] = array ();
$tdatacustomer_Geotag [".advSearchFields"] [] = "OracIeID";
$tdatacustomer_Geotag [".advSearchFields"] [] = "Name";
$tdatacustomer_Geotag [".advSearchFields"] [] = "Recovery_Center";
$tdatacustomer_Geotag [".advSearchFields"] [] = "Address";

$tdatacustomer_Geotag [".tableType"] = "list";

$tdatacustomer_Geotag [".printerPageOrientation"] = 0;
$tdatacustomer_Geotag [".nPrinterPageScale"] = 100;

$tdatacustomer_Geotag [".nPrinterSplitRecords"] = 40;

$tdatacustomer_Geotag [".nPrinterPDFSplitRecords"] = 40;

// view page pdf

// print page pdf

$tdatacustomer_Geotag [".pageSize"] = 20;

$tdatacustomer_Geotag [".warnLeavingPages"] = true;

$tdatacustomer_Geotag [".hideEmptyFieldsOnView"] = true;

$tstrOrderBy = "ORDER BY Name";
if (strlen ( $tstrOrderBy ) && strtolower ( substr ( $tstrOrderBy, 0, 8 ) ) != "order by")
	$tstrOrderBy = "order by " . $tstrOrderBy;
$tdatacustomer_Geotag [".strOrderBy"] = $tstrOrderBy;

$tdatacustomer_Geotag [".orderindexes"] = array ();
$tdatacustomer_Geotag [".orderindexes"] [] = array (
		2,
		(1 ? "ASC" : "DESC"),
		"Name" 
);

$tdatacustomer_Geotag [".sqlHead"] = "SELECT OracIeID,  Name,  Recovery_Center,  Address";
$tdatacustomer_Geotag [".sqlFrom"] = "FROM customer_header";
$tdatacustomer_Geotag [".sqlWhereExpr"] = "";
$tdatacustomer_Geotag [".sqlTail"] = "";

// fill array of records per page for list and report without group fields
$arrRPP = array ();
$arrRPP [] = 10;
$arrRPP [] = 20;
$arrRPP [] = 30;
$arrRPP [] = 50;
$arrRPP [] = 100;
$arrRPP [] = 500;
$arrRPP [] = - 1;
$tdatacustomer_Geotag [".arrRecsPerPage"] = $arrRPP;

// fill array of groups per page for report with group fields
$arrGPP = array ();
$arrGPP [] = 1;
$arrGPP [] = 3;
$arrGPP [] = 5;
$arrGPP [] = 10;
$arrGPP [] = 50;
$arrGPP [] = 100;
$arrGPP [] = - 1;
$tdatacustomer_Geotag [".arrGroupsPerPage"] = $arrGPP;

$tableKeyscustomer_Geotag = array ();
$tableKeyscustomer_Geotag [] = "OracIeID";
$tdatacustomer_Geotag [".Keys"] = $tableKeyscustomer_Geotag;

$tdatacustomer_Geotag [".listFields"] = array ();
$tdatacustomer_Geotag [".listFields"] [] = "OracIeID";
$tdatacustomer_Geotag [".listFields"] [] = "Name";
$tdatacustomer_Geotag [".listFields"] [] = "Recovery_Center";
$tdatacustomer_Geotag [".listFields"] [] = "Address";

$tdatacustomer_Geotag [".hideMobileList"] = array ();

$tdatacustomer_Geotag [".viewFields"] = array ();
$tdatacustomer_Geotag [".viewFields"] [] = "OracIeID";
$tdatacustomer_Geotag [".viewFields"] [] = "Name";
$tdatacustomer_Geotag [".viewFields"] [] = "Recovery_Center";
$tdatacustomer_Geotag [".viewFields"] [] = "Address";

$tdatacustomer_Geotag [".addFields"] = array ();

$tdatacustomer_Geotag [".inlineAddFields"] = array ();

$tdatacustomer_Geotag [".editFields"] = array ();

$tdatacustomer_Geotag [".inlineEditFields"] = array ();

$tdatacustomer_Geotag [".exportFields"] = array ();
$tdatacustomer_Geotag [".exportFields"] [] = "OracIeID";
$tdatacustomer_Geotag [".exportFields"] [] = "Name";
$tdatacustomer_Geotag [".exportFields"] [] = "Recovery_Center";
$tdatacustomer_Geotag [".exportFields"] [] = "Address";

$tdatacustomer_Geotag [".importFields"] = array ();
$tdatacustomer_Geotag [".importFields"] [] = "OracIeID";
$tdatacustomer_Geotag [".importFields"] [] = "Name";
$tdatacustomer_Geotag [".importFields"] [] = "Recovery_Center";
$tdatacustomer_Geotag [".importFields"] [] = "Address";

$tdatacustomer_Geotag [".printFields"] = array ();
$tdatacustomer_Geotag [".printFields"] [] = "OracIeID";
$tdatacustomer_Geotag [".printFields"] [] = "Name";
$tdatacustomer_Geotag [".printFields"] [] = "Recovery_Center";
$tdatacustomer_Geotag [".printFields"] [] = "Address";

// OracIeID
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 1;
$fdata ["strName"] = "OracIeID";
$fdata ["GoodName"] = "OracIeID";
$fdata ["ownerTable"] = "customer_header";
$fdata ["Label"] = GetFieldLabel ( "customer_Geotag", "OracIeID" );
$fdata ["FieldType"] = 3;

$fdata ["bListPage"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "OracIeID";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "OracIeID";

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

// the field's search options settings
$fdata ["defaultSearchOption"] = "Equals";

// the end of search options settings

$tdatacustomer_Geotag ["OracIeID"] = $fdata;
// Name
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 2;
$fdata ["strName"] = "Name";
$fdata ["GoodName"] = "Name";
$fdata ["ownerTable"] = "customer_header";
$fdata ["Label"] = GetFieldLabel ( "customer_Geotag", "Name" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Name";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Name";

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
$edata ["EditParams"] .= " maxlength=100";

$edata ["controlWidth"] = 513;

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

$tdatacustomer_Geotag ["Name"] = $fdata;
// Recovery_Center
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 3;
$fdata ["strName"] = "Recovery_Center";
$fdata ["GoodName"] = "Recovery_Center";
$fdata ["ownerTable"] = "customer_header";
$fdata ["Label"] = GetFieldLabel ( "customer_Geotag", "Recovery_Center" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Recovery_Center";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Recovery_Center";

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
$edata ["LookupTable"] = "tbl_test center";
$edata ["autoCompleteFieldsOnEdit"] = 0;
$edata ["autoCompleteFields"] = array ();
$edata ["LCType"] = 0;

$edata ["LinkField"] = "LocationName";
$edata ["LinkFieldType"] = 200;
$edata ["DisplayField"] = "LocationName";

$edata ["LookupOrderBy"] = "LocationName";

$edata ["SelectSize"] = 1;

// End Lookup Settings

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

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

$tdatacustomer_Geotag ["Recovery_Center"] = $fdata;
// Address
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 4;
$fdata ["strName"] = "Address";
$fdata ["GoodName"] = "Address";
$fdata ["ownerTable"] = "customer_header";
$fdata ["Label"] = GetFieldLabel ( "customer_Geotag", "Address" );
$fdata ["FieldType"] = 200;

$fdata ["bListPage"] = true;

$fdata ["bViewPage"] = true;

$fdata ["bAdvancedSearch"] = true;

$fdata ["bPrinterPage"] = true;

$fdata ["bExportPage"] = true;

$fdata ["strField"] = "Address";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Address";

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
		"EditFormat" => "Text area" 
);

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["nRows"] = 50;
$edata ["nCols"] = 200;

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
		"Empty" 
);
// the end of search options settings

$tdatacustomer_Geotag ["Address"] = $fdata;

$tables_data ["customer_Geotag"] = &$tdatacustomer_Geotag;
$field_labels ["customer_Geotag"] = &$fieldLabelscustomer_Geotag;
$fieldToolTips ["customer_Geotag"] = &$fieldToolTipscustomer_Geotag;
$page_titles ["customer_Geotag"] = &$pageTitlescustomer_Geotag;

// -----------------start prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData ["customer_Geotag"] = array ();

// tables which are master tables for current table (detail)
$masterTablesData ["customer_Geotag"] = array ();

// -----------------end prepare master-details data arrays ------------------------------//

require_once (getabspath ( "classes/sql.php" ));
function createSqlQuery_customer_Geotag() {
	$proto0 = array ();
	$proto0 ["m_strHead"] = "SELECT";
	$proto0 ["m_strFieldList"] = "OracIeID,  Name,  Recovery_Center,  Address";
	$proto0 ["m_strFrom"] = "FROM customer_header";
	$proto0 ["m_strWhere"] = "";
	$proto0 ["m_strOrderBy"] = "ORDER BY Name";
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
			"m_strName" => "OracIeID",
			"m_strTable" => "customer_header",
			"m_srcTableName" => "customer_Geotag" 
	) );
	
	$proto5 ["m_sql"] = "OracIeID";
	$proto5 ["m_srcTableName"] = "customer_Geotag";
	$proto5 ["m_expr"] = $obj;
	$proto5 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto5 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto7 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Name",
			"m_strTable" => "customer_header",
			"m_srcTableName" => "customer_Geotag" 
	) );
	
	$proto7 ["m_sql"] = "Name";
	$proto7 ["m_srcTableName"] = "customer_Geotag";
	$proto7 ["m_expr"] = $obj;
	$proto7 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto7 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto9 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Recovery_Center",
			"m_strTable" => "customer_header",
			"m_srcTableName" => "customer_Geotag" 
	) );
	
	$proto9 ["m_sql"] = "Recovery_Center";
	$proto9 ["m_srcTableName"] = "customer_Geotag";
	$proto9 ["m_expr"] = $obj;
	$proto9 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto9 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto11 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Address",
			"m_strTable" => "customer_header",
			"m_srcTableName" => "customer_Geotag" 
	) );
	
	$proto11 ["m_sql"] = "Address";
	$proto11 ["m_srcTableName"] = "customer_Geotag";
	$proto11 ["m_expr"] = $obj;
	$proto11 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto11 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto0 ["m_fromlist"] = array ();
	$proto13 = array ();
	$proto13 ["m_link"] = "SQLL_MAIN";
	$proto14 = array ();
	$proto14 ["m_strName"] = "customer_header";
	$proto14 ["m_srcTableName"] = "customer_Geotag";
	$proto14 ["m_columns"] = array ();
	$proto14 ["m_columns"] [] = "OracIeID";
	$proto14 ["m_columns"] [] = "Name";
	$proto14 ["m_columns"] [] = "Contract_Status";
	$proto14 ["m_columns"] [] = "Size";
	$proto14 ["m_columns"] [] = "Stage";
	$proto14 ["m_columns"] [] = "Temperature";
	$proto14 ["m_columns"] [] = "Sales_SVP";
	$proto14 ["m_columns"] [] = "Contract_Start";
	$proto14 ["m_columns"] [] = "SteadyState";
	$proto14 ["m_columns"] [] = "Contract_end";
	$proto14 ["m_columns"] [] = "Recovery_Center";
	$proto14 ["m_columns"] [] = "Total_MRR";
	$proto14 ["m_columns"] [] = "MRP_MRR";
	$proto14 ["m_columns"] [] = "ARS_MRR";
	$proto14 ["m_columns"] [] = "MS_MRR";
	$proto14 ["m_columns"] [] = "CS_MRR";
	$proto14 ["m_columns"] [] = "OTHER_MRR";
	$proto14 ["m_columns"] [] = "SME";
	$proto14 ["m_columns"] [] = "RSAName";
	$proto14 ["m_columns"] [] = "Overall_Temp";
	$proto14 ["m_columns"] [] = "Engagement_status";
	$proto14 ["m_columns"] [] = "created_by";
	$proto14 ["m_columns"] [] = "Created_date";
	$proto14 ["m_columns"] [] = "Updated_by";
	$proto14 ["m_columns"] [] = "Updated_date";
	$proto14 ["m_columns"] [] = "Comments";
	$proto14 ["m_columns"] [] = "EmployeeID";
	$proto14 ["m_columns"] [] = "Compre_String";
	$proto14 ["m_columns"] [] = "Address";
	$proto14 ["m_columns"] [] = "PrimaryTimeZone";
	$proto14 ["m_columns"] [] = "Onshore Support";
	$proto14 ["m_columns"] [] = "TransStartDate";
	$proto14 ["m_columns"] [] = "TransEndDate";
	$proto14 ["m_columns"] [] = "Supervisor";
	$proto14 ["m_columns"] [] = "TAM";
	$obj = new SQLTable ( $proto14 );
	
	$proto13 ["m_table"] = $obj;
	$proto13 ["m_sql"] = "customer_header";
	$proto13 ["m_alias"] = "";
	$proto13 ["m_srcTableName"] = "customer_Geotag";
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
	$proto17 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Name",
			"m_strTable" => "customer_header",
			"m_srcTableName" => "customer_Geotag" 
	) );
	
	$proto17 ["m_column"] = $obj;
	$proto17 ["m_bAsc"] = 1;
	$proto17 ["m_nColumn"] = 0;
	$obj = new SQLOrderByItem ( $proto17 );
	
	$proto0 ["m_orderby"] [] = $obj;
	$proto0 ["m_srcTableName"] = "customer_Geotag";
	$obj = new SQLQuery ( $proto0 );
	
	return $obj;
}
$queryData_customer_Geotag = createSqlQuery_customer_Geotag ();

$tdatacustomer_Geotag [".sqlquery"] = $queryData_customer_Geotag;

include_once (getabspath ( "include/customer_Geotag_events.php" ));
$tableEvents ["customer_Geotag"] = new eventclass_customer_Geotag ();
$tdatacustomer_Geotag [".hasEvents"] = true;

?>