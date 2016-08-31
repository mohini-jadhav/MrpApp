<?php
require_once(getabspath("classes/cipherer.php"));




$tdataapplication = array();
	$tdataapplication[".truncateText"] = true;
	$tdataapplication[".NumberOfChars"] = 60;
	$tdataapplication[".ShortName"] = "application";
	$tdataapplication[".OwnerID"] = "";
	$tdataapplication[".OriginalTable"] = "application";

//	field labels
$fieldLabelsapplication = array();
$fieldToolTipsapplication = array();
$pageTitlesapplication = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsapplication["English"] = array();
	$fieldToolTipsapplication["English"] = array();
	$pageTitlesapplication["English"] = array();
	$fieldLabelsapplication["English"]["AutAppsID"] = "Aut Apps ID";
	$fieldToolTipsapplication["English"]["AutAppsID"] = "";
	$fieldLabelsapplication["English"]["Applications"] = "Applications";
	$fieldToolTipsapplication["English"]["Applications"] = "";
	if (count($fieldToolTipsapplication["English"]))
		$tdataapplication[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsapplication[""] = array();
	$fieldToolTipsapplication[""] = array();
	$pageTitlesapplication[""] = array();
	if (count($fieldToolTipsapplication[""]))
		$tdataapplication[".isUseToolTips"] = true;
}


	$tdataapplication[".NCSearch"] = true;



$tdataapplication[".shortTableName"] = "application";
$tdataapplication[".nSecOptions"] = 0;
$tdataapplication[".recsPerRowList"] = 1;
$tdataapplication[".recsPerRowPrint"] = 1;
$tdataapplication[".mainTableOwnerID"] = "";
$tdataapplication[".moveNext"] = 0;
$tdataapplication[".entityType"] = 0;

$tdataapplication[".strOriginalTableName"] = "application";




$tdataapplication[".showAddInPopup"] = false;

$tdataapplication[".showEditInPopup"] = false;

$tdataapplication[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataapplication[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataapplication[".fieldsForRegister"] = array();
	
$tdataapplication[".listAjax"] = false;

	$tdataapplication[".audit"] = false;

	$tdataapplication[".locking"] = false;


$tdataapplication[".add"] = true;
$tdataapplication[".afterAddAction"] = 1;
$tdataapplication[".closePopupAfterAdd"] = 1;
$tdataapplication[".afterAddActionDetTable"] = "";







$tdataapplication[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataapplication[".searchSaving"] = false;
//

$tdataapplication[".showSearchPanel"] = true;
		$tdataapplication[".flexibleSearch"] = true;

if (isMobile())
	$tdataapplication[".isUseAjaxSuggest"] = false;
else
	$tdataapplication[".isUseAjaxSuggest"] = true;

$tdataapplication[".rowHighlite"] = true;


							
$tdataapplication[".addPageEvents"] = false;

// use timepicker for search panel
$tdataapplication[".isUseTimeForSearch"] = false;





$tdataapplication[".allSearchFields"] = array();
$tdataapplication[".filterFields"] = array();
$tdataapplication[".requiredSearchFields"] = array();



$tdataapplication[".googleLikeFields"] = array();
$tdataapplication[".googleLikeFields"][] = "AutAppsID";
$tdataapplication[".googleLikeFields"][] = "Applications";


$tdataapplication[".advSearchFields"] = array();
$tdataapplication[".advSearchFields"][] = "AutAppsID";
$tdataapplication[".advSearchFields"][] = "Applications";

$tdataapplication[".tableType"] = "list";

$tdataapplication[".printerPageOrientation"] = 0;
$tdataapplication[".nPrinterPageScale"] = 100;

$tdataapplication[".nPrinterSplitRecords"] = 40;

$tdataapplication[".nPrinterPDFSplitRecords"] = 40;



$tdataapplication[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdataapplication[".pageSize"] = 10;

$tdataapplication[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataapplication[".strOrderBy"] = $tstrOrderBy;

$tdataapplication[".orderindexes"] = array();

$tdataapplication[".sqlHead"] = "SELECT AutAppsID,  	Applications";
$tdataapplication[".sqlFrom"] = "FROM application";
$tdataapplication[".sqlWhereExpr"] = "";
$tdataapplication[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataapplication[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataapplication[".arrGroupsPerPage"] = $arrGPP;


$tableKeysapplication = array();
$tableKeysapplication[] = "AutAppsID";
$tdataapplication[".Keys"] = $tableKeysapplication;

$tdataapplication[".listFields"] = array();

$tdataapplication[".hideMobileList"] = array();


$tdataapplication[".viewFields"] = array();

$tdataapplication[".addFields"] = array();
$tdataapplication[".addFields"][] = "Applications";

$tdataapplication[".masterListFields"] = array();
$tdataapplication[".masterListFields"][] = "AutAppsID";
$tdataapplication[".masterListFields"][] = "Applications";

$tdataapplication[".inlineAddFields"] = array();

$tdataapplication[".editFields"] = array();

$tdataapplication[".inlineEditFields"] = array();

$tdataapplication[".exportFields"] = array();

$tdataapplication[".importFields"] = array();
$tdataapplication[".importFields"][] = "AutAppsID";
$tdataapplication[".importFields"][] = "Applications";

$tdataapplication[".printFields"] = array();

//	AutAppsID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "AutAppsID";
	$fdata["GoodName"] = "AutAppsID";
	$fdata["ownerTable"] = "application";
	$fdata["Label"] = GetFieldLabel("application","AutAppsID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "AutAppsID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AutAppsID";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataapplication["AutAppsID"] = $fdata;
//	Applications
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Applications";
	$fdata["GoodName"] = "Applications";
	$fdata["ownerTable"] = "application";
	$fdata["Label"] = GetFieldLabel("application","Applications");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
	
	
	
	
	
	
		$fdata["strField"] = "Applications";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Applications";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataapplication["Applications"] = $fdata;


$tables_data["application"]=&$tdataapplication;
$field_labels["application"] = &$fieldLabelsapplication;
$fieldToolTips["application"] = &$fieldToolTipsapplication;
$page_titles["application"] = &$pageTitlesapplication;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["application"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["application"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_application()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "AutAppsID,  	Applications";
$proto0["m_strFrom"] = "FROM application";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
						$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto3=array();
$proto3["m_sql"] = "";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = false;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto5=array();
			$obj = new SQLField(array(
	"m_strName" => "AutAppsID",
	"m_strTable" => "application",
	"m_srcTableName" => "application"
));

$proto5["m_sql"] = "AutAppsID";
$proto5["m_srcTableName"] = "application";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Applications",
	"m_strTable" => "application",
	"m_srcTableName" => "application"
));

$proto7["m_sql"] = "Applications";
$proto7["m_srcTableName"] = "application";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "application";
$proto10["m_srcTableName"] = "application";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "AutAppsID";
$proto10["m_columns"][] = "Applications";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_sql"] = "application";
$proto9["m_alias"] = "";
$proto9["m_srcTableName"] = "application";
$proto11=array();
$proto11["m_sql"] = "";
$proto11["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto11["m_column"]=$obj;
$proto11["m_contained"] = array();
$proto11["m_strCase"] = "";
$proto11["m_havingmode"] = false;
$proto11["m_inBrackets"] = false;
$proto11["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto11);

$proto9["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto9);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="application";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_application = createSqlQuery_application();



		

$tdataapplication[".sqlquery"] = $queryData_application;

$tableEvents["application"] = new eventsBase;
$tdataapplication[".hasEvents"] = false;

?>