<?php
require_once (getabspath ( "classes/cipherer.php" ));

$tdatausers = array ();
$tdatausers [".truncateText"] = true;
$tdatausers [".NumberOfChars"] = 60;
$tdatausers [".ShortName"] = "users";
$tdatausers [".OwnerID"] = "";
$tdatausers [".OriginalTable"] = "users";

// field labels
$fieldLabelsusers = array ();
$fieldToolTipsusers = array ();
$pageTitlesusers = array ();

if (mlang_getcurrentlang () == "English") {
	$fieldLabelsusers ["English"] = array ();
	$fieldToolTipsusers ["English"] = array ();
	$pageTitlesusers ["English"] = array ();
	$fieldLabelsusers ["English"] ["AutUserID"] = "Aut User ID";
	$fieldToolTipsusers ["English"] ["AutUserID"] = "";
	$fieldLabelsusers ["English"] ["UserName"] = "User Name";
	$fieldToolTipsusers ["English"] ["UserName"] = "";
	$fieldLabelsusers ["English"] ["Password"] = "Password";
	$fieldToolTipsusers ["English"] ["Password"] = "";
	$fieldLabelsusers ["English"] ["Email"] = "Email";
	$fieldToolTipsusers ["English"] ["Email"] = "";
	$fieldLabelsusers ["English"] ["GroupName"] = "Group Name";
	$fieldToolTipsusers ["English"] ["GroupName"] = "";
	$fieldLabelsusers ["English"] ["Active"] = "Active";
	$fieldToolTipsusers ["English"] ["Active"] = "";
	$fieldLabelsusers ["English"] ["Logo"] = "Logo";
	$fieldToolTipsusers ["English"] ["Logo"] = "";
	$fieldLabelsusers ["English"] ["FullName"] = "Full Name";
	$fieldToolTipsusers ["English"] ["FullName"] = "";
	if (count ( $fieldToolTipsusers ["English"] ))
		$tdatausers [".isUseToolTips"] = true;
}
if (mlang_getcurrentlang () == "") {
	$fieldLabelsusers [""] = array ();
	$fieldToolTipsusers [""] = array ();
	$pageTitlesusers [""] = array ();
	if (count ( $fieldToolTipsusers [""] ))
		$tdatausers [".isUseToolTips"] = true;
}

$tdatausers [".NCSearch"] = true;

$tdatausers [".shortTableName"] = "users";
$tdatausers [".nSecOptions"] = 0;
$tdatausers [".recsPerRowList"] = 1;
$tdatausers [".recsPerRowPrint"] = 1;
$tdatausers [".mainTableOwnerID"] = "";
$tdatausers [".moveNext"] = 0;
$tdatausers [".entityType"] = 0;

$tdatausers [".strOriginalTableName"] = "users";

$tdatausers [".showAddInPopup"] = false;

$tdatausers [".showEditInPopup"] = false;

$tdatausers [".showViewInPopup"] = false;

// page's base css files names
$popupPagesLayoutNames = array ();
$tdatausers [".popupPagesLayoutNames"] = $popupPagesLayoutNames;

$tdatausers [".fieldsForRegister"] = array ();
// Begin register settings
$tdatausers [".fieldsForRegister"] = array ();
$tdatausers [".fieldsForRegister"] [] = "UserName";
$tdatausers [".fieldsForRegister"] [] = "Password";
$tdatausers [".fieldsForRegister"] [] = "Email";
$tdatausers [".fieldsForRegister"] [] = "FullName";
/*
 * $tdatausers[".PasswordField"] = "Password";
 * $tdatausers[".UserNameField"] = "UserName";
 */
// End register settings

$tdatausers [".listAjax"] = false;

$tdatausers [".audit"] = false;

$tdatausers [".locking"] = false;

$tdatausers [".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatausers [".searchSaving"] = false;
//

$tdatausers [".showSearchPanel"] = true;
$tdatausers [".flexibleSearch"] = true;

if (isMobile ())
	$tdatausers [".isUseAjaxSuggest"] = false;
else
	$tdatausers [".isUseAjaxSuggest"] = true;

$tdatausers [".rowHighlite"] = true;

$tdatausers [".addPageEvents"] = false;

// use timepicker for search panel
$tdatausers [".isUseTimeForSearch"] = false;

$tdatausers [".allSearchFields"] = array ();
$tdatausers [".filterFields"] = array ();
$tdatausers [".requiredSearchFields"] = array ();

$tdatausers [".googleLikeFields"] = array ();
$tdatausers [".googleLikeFields"] [] = "AutUserID";
$tdatausers [".googleLikeFields"] [] = "UserName";
$tdatausers [".googleLikeFields"] [] = "Password";
$tdatausers [".googleLikeFields"] [] = "Email";
$tdatausers [".googleLikeFields"] [] = "GroupName";
$tdatausers [".googleLikeFields"] [] = "Active";
$tdatausers [".googleLikeFields"] [] = "Logo";
$tdatausers [".googleLikeFields"] [] = "FullName";

$tdatausers [".advSearchFields"] = array ();
$tdatausers [".advSearchFields"] [] = "AutUserID";
$tdatausers [".advSearchFields"] [] = "UserName";
$tdatausers [".advSearchFields"] [] = "Password";
$tdatausers [".advSearchFields"] [] = "Email";
$tdatausers [".advSearchFields"] [] = "GroupName";
$tdatausers [".advSearchFields"] [] = "Active";
$tdatausers [".advSearchFields"] [] = "Logo";
$tdatausers [".advSearchFields"] [] = "FullName";

$tdatausers [".tableType"] = "list";

$tdatausers [".printerPageOrientation"] = 0;
$tdatausers [".nPrinterPageScale"] = 100;

$tdatausers [".nPrinterSplitRecords"] = 40;

$tdatausers [".nPrinterPDFSplitRecords"] = 40;

$tdatausers [".geocodingEnabled"] = false;

// view page pdf

// print page pdf

$tdatausers [".pageSize"] = 10;

$tdatausers [".warnLeavingPages"] = true;

$tstrOrderBy = "";
if (strlen ( $tstrOrderBy ) && strtolower ( substr ( $tstrOrderBy, 0, 8 ) ) != "order by")
	$tstrOrderBy = "order by " . $tstrOrderBy;
$tdatausers [".strOrderBy"] = $tstrOrderBy;

$tdatausers [".orderindexes"] = array ();

$tdatausers [".sqlHead"] = "SELECT AutUserID,  	UserName,  	Password,  	Email,  	GroupName,  	Active,  	Logo,  	FullName";
$tdatausers [".sqlFrom"] = "FROM users";
$tdatausers [".sqlWhereExpr"] = "";
$tdatausers [".sqlTail"] = "";

// fill array of records per page for list and report without group fields
$arrRPP = array ();
$arrRPP [] = 10;
$arrRPP [] = 20;
$arrRPP [] = 30;
$arrRPP [] = 50;
$arrRPP [] = 100;
$arrRPP [] = 500;
$arrRPP [] = - 1;
$tdatausers [".arrRecsPerPage"] = $arrRPP;

// fill array of groups per page for report with group fields
$arrGPP = array ();
$arrGPP [] = 1;
$arrGPP [] = 3;
$arrGPP [] = 5;
$arrGPP [] = 10;
$arrGPP [] = 50;
$arrGPP [] = 100;
$arrGPP [] = - 1;
$tdatausers [".arrGroupsPerPage"] = $arrGPP;

$tableKeysusers = array ();
$tableKeysusers [] = "AutUserID";
$tdatausers [".Keys"] = $tableKeysusers;

$tdatausers [".listFields"] = array ();

$tdatausers [".hideMobileList"] = array ();

$tdatausers [".viewFields"] = array ();

$tdatausers [".addFields"] = array ();

$tdatausers [".masterListFields"] = array ();
$tdatausers [".masterListFields"] [] = "AutUserID";
$tdatausers [".masterListFields"] [] = "UserName";
$tdatausers [".masterListFields"] [] = "Password";
$tdatausers [".masterListFields"] [] = "Email";
$tdatausers [".masterListFields"] [] = "GroupName";
$tdatausers [".masterListFields"] [] = "Active";
$tdatausers [".masterListFields"] [] = "Logo";
$tdatausers [".masterListFields"] [] = "FullName";

$tdatausers [".inlineAddFields"] = array ();

$tdatausers [".editFields"] = array ();

$tdatausers [".inlineEditFields"] = array ();

$tdatausers [".exportFields"] = array ();

$tdatausers [".importFields"] = array ();
$tdatausers [".importFields"] [] = "AutUserID";
$tdatausers [".importFields"] [] = "UserName";
$tdatausers [".importFields"] [] = "Password";
$tdatausers [".importFields"] [] = "Email";
$tdatausers [".importFields"] [] = "GroupName";
$tdatausers [".importFields"] [] = "Active";
$tdatausers [".importFields"] [] = "Logo";
$tdatausers [".importFields"] [] = "FullName";

$tdatausers [".printFields"] = array ();

// AutUserID
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 1;
$fdata ["strName"] = "AutUserID";
$fdata ["GoodName"] = "AutUserID";
$fdata ["ownerTable"] = "users";
$fdata ["Label"] = GetFieldLabel ( "users", "AutUserID" );
$fdata ["FieldType"] = 3;

$fdata ["AutoInc"] = true;

$fdata ["strField"] = "AutUserID";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "AutUserID";

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

$tdatausers ["AutUserID"] = $fdata;
// UserName
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 2;
$fdata ["strName"] = "UserName";
$fdata ["GoodName"] = "UserName";
$fdata ["ownerTable"] = "users";
$fdata ["Label"] = GetFieldLabel ( "users", "UserName" );
$fdata ["FieldType"] = 200;

$fdata ["strField"] = "UserName";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "UserName";

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

if (count ( $edata ["validateAs"] ) && ! in_array ( 'IsRequired', $edata ["validateAs"] ['basicValidate'] ))
	$edata ["validateAs"] ['basicValidate'] [] = 'IsRequired';
	// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = false;

$tdatausers ["UserName"] = $fdata;
// Password
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 3;
$fdata ["strName"] = "Password";
$fdata ["GoodName"] = "Password";
$fdata ["ownerTable"] = "users";
$fdata ["Label"] = GetFieldLabel ( "users", "Password" );
$fdata ["FieldType"] = 200;

$fdata ["strField"] = "Password";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Password";

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
		"EditFormat" => "Password" 
);

$edata ["acceptFileTypes"] = ".+$";

$edata ["maxNumberOfFiles"] = 1;

$edata ["EditParams"] = "";
$edata ["EditParams"] .= " maxlength=50";

$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();

if (count ( $edata ["validateAs"] ) && ! in_array ( 'IsRequired', $edata ["validateAs"] ['basicValidate'] ))
	$edata ["validateAs"] ['basicValidate'] [] = 'IsRequired';
	// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = false;

$tdatausers ["Password"] = $fdata;
// Email
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 4;
$fdata ["strName"] = "Email";
$fdata ["GoodName"] = "Email";
$fdata ["ownerTable"] = "users";
$fdata ["Label"] = GetFieldLabel ( "users", "Email" );
$fdata ["FieldType"] = 200;

$fdata ["strField"] = "Email";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Email";

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

if (count ( $edata ["validateAs"] ) && ! in_array ( 'IsEmail', $edata ["validateAs"] ['basicValidate'] ))
	$edata ["validateAs"] ['basicValidate'] [] = 'IsEmail';
	// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = false;

$tdatausers ["Email"] = $fdata;
// GroupName
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 5;
$fdata ["strName"] = "GroupName";
$fdata ["GoodName"] = "GroupName";
$fdata ["ownerTable"] = "users";
$fdata ["Label"] = GetFieldLabel ( "users", "GroupName" );
$fdata ["FieldType"] = 200;

$fdata ["strField"] = "GroupName";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "GroupName";

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

$tdatausers ["GroupName"] = $fdata;
// Active
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 6;
$fdata ["strName"] = "Active";
$fdata ["GoodName"] = "Active";
$fdata ["ownerTable"] = "users";
$fdata ["Label"] = GetFieldLabel ( "users", "Active" );
$fdata ["FieldType"] = 3;

$fdata ["strField"] = "Active";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Active";

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

$edata ["controlWidth"] = 143;

// Begin validation
$edata ["validateAs"] = array ();
$edata ["validateAs"] ["basicValidate"] = array ();
$edata ["validateAs"] ["customMessages"] = array ();
$edata ["validateAs"] ["basicValidate"] [] = getJsValidatorName ( "Number" );

// End validation

$fdata ["EditFormats"] ["edit"] = $edata;
// End Edit Formats

$fdata ["isSeparate"] = false;

$tdatausers ["Active"] = $fdata;
// Logo
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 7;
$fdata ["strName"] = "Logo";
$fdata ["GoodName"] = "Logo";
$fdata ["ownerTable"] = "users";
$fdata ["Label"] = GetFieldLabel ( "users", "Logo" );
$fdata ["FieldType"] = 200;

$fdata ["strField"] = "Logo";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "Logo";

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

$tdatausers ["Logo"] = $fdata;
// FullName
// Custom field settings
$fdata = array ();
$fdata ["Index"] = 8;
$fdata ["strName"] = "FullName";
$fdata ["GoodName"] = "FullName";
$fdata ["ownerTable"] = "users";
$fdata ["Label"] = GetFieldLabel ( "users", "FullName" );
$fdata ["FieldType"] = 200;

$fdata ["strField"] = "FullName";

$fdata ["isSQLExpression"] = true;
$fdata ["FullName"] = "FullName";

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

$tdatausers ["FullName"] = $fdata;

$tables_data ["users"] = &$tdatausers;
$field_labels ["users"] = &$fieldLabelsusers;
$fieldToolTips ["users"] = &$fieldToolTipsusers;
$page_titles ["users"] = &$pageTitlesusers;

// -----------------start prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData ["users"] = array ();

// tables which are master tables for current table (detail)
$masterTablesData ["users"] = array ();

// -----------------end prepare master-details data arrays ------------------------------//

require_once (getabspath ( "classes/sql.php" ));
function createSqlQuery_users() {
	$proto0 = array ();
	$proto0 ["m_strHead"] = "SELECT";
	$proto0 ["m_strFieldList"] = "AutUserID,  	UserName,  	Password,  	Email,  	GroupName,  	Active,  	Logo,  	FullName";
	$proto0 ["m_strFrom"] = "FROM users";
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
			"m_strName" => "AutUserID",
			"m_strTable" => "users",
			"m_srcTableName" => "users" 
	) );
	
	$proto5 ["m_sql"] = "AutUserID";
	$proto5 ["m_srcTableName"] = "users";
	$proto5 ["m_expr"] = $obj;
	$proto5 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto5 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto7 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "UserName",
			"m_strTable" => "users",
			"m_srcTableName" => "users" 
	) );
	
	$proto7 ["m_sql"] = "UserName";
	$proto7 ["m_srcTableName"] = "users";
	$proto7 ["m_expr"] = $obj;
	$proto7 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto7 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto9 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Password",
			"m_strTable" => "users",
			"m_srcTableName" => "users" 
	) );
	
	$proto9 ["m_sql"] = "Password";
	$proto9 ["m_srcTableName"] = "users";
	$proto9 ["m_expr"] = $obj;
	$proto9 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto9 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto11 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Email",
			"m_strTable" => "users",
			"m_srcTableName" => "users" 
	) );
	
	$proto11 ["m_sql"] = "Email";
	$proto11 ["m_srcTableName"] = "users";
	$proto11 ["m_expr"] = $obj;
	$proto11 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto11 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto13 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "GroupName",
			"m_strTable" => "users",
			"m_srcTableName" => "users" 
	) );
	
	$proto13 ["m_sql"] = "GroupName";
	$proto13 ["m_srcTableName"] = "users";
	$proto13 ["m_expr"] = $obj;
	$proto13 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto13 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto15 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Active",
			"m_strTable" => "users",
			"m_srcTableName" => "users" 
	) );
	
	$proto15 ["m_sql"] = "Active";
	$proto15 ["m_srcTableName"] = "users";
	$proto15 ["m_expr"] = $obj;
	$proto15 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto15 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto17 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "Logo",
			"m_strTable" => "users",
			"m_srcTableName" => "users" 
	) );
	
	$proto17 ["m_sql"] = "Logo";
	$proto17 ["m_srcTableName"] = "users";
	$proto17 ["m_expr"] = $obj;
	$proto17 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto17 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto19 = array ();
	$obj = new SQLField ( array (
			"m_strName" => "FullName",
			"m_strTable" => "users",
			"m_srcTableName" => "users" 
	) );
	
	$proto19 ["m_sql"] = "FullName";
	$proto19 ["m_srcTableName"] = "users";
	$proto19 ["m_expr"] = $obj;
	$proto19 ["m_alias"] = "";
	$obj = new SQLFieldListItem ( $proto19 );
	
	$proto0 ["m_fieldlist"] [] = $obj;
	$proto0 ["m_fromlist"] = array ();
	$proto21 = array ();
	$proto21 ["m_link"] = "SQLL_MAIN";
	$proto22 = array ();
	$proto22 ["m_strName"] = "users";
	$proto22 ["m_srcTableName"] = "users";
	$proto22 ["m_columns"] = array ();
	$proto22 ["m_columns"] [] = "AutUserID";
	$proto22 ["m_columns"] [] = "UserName";
	$proto22 ["m_columns"] [] = "Password";
	$proto22 ["m_columns"] [] = "Email";
	$proto22 ["m_columns"] [] = "GroupName";
	$proto22 ["m_columns"] [] = "Active";
	$proto22 ["m_columns"] [] = "Logo";
	$proto22 ["m_columns"] [] = "FullName";
	$obj = new SQLTable ( $proto22 );
	
	$proto21 ["m_table"] = $obj;
	$proto21 ["m_sql"] = "users";
	$proto21 ["m_alias"] = "";
	$proto21 ["m_srcTableName"] = "users";
	$proto23 = array ();
	$proto23 ["m_sql"] = "";
	$proto23 ["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed ( array (
			"m_sql" => "" 
	) );
	
	$proto23 ["m_column"] = $obj;
	$proto23 ["m_contained"] = array ();
	$proto23 ["m_strCase"] = "";
	$proto23 ["m_havingmode"] = false;
	$proto23 ["m_inBrackets"] = false;
	$proto23 ["m_useAlias"] = false;
	$obj = new SQLLogicalExpr ( $proto23 );
	
	$proto21 ["m_joinon"] = $obj;
	$obj = new SQLFromListItem ( $proto21 );
	
	$proto0 ["m_fromlist"] [] = $obj;
	$proto0 ["m_groupby"] = array ();
	$proto0 ["m_orderby"] = array ();
	$proto0 ["m_srcTableName"] = "users";
	$obj = new SQLQuery ( $proto0 );
	
	return $obj;
}
$queryData_users = createSqlQuery_users ();

$tdatausers [".sqlquery"] = $queryData_users;

$tableEvents ["users"] = new eventsBase ();
$tdatausers [".hasEvents"] = false;

?>