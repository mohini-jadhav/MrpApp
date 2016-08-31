<?php

$dal_info = array();

/**
 * User API function
 * @param String sql
 */
function UsersTableName()
{
	global $cman;
	$connection = $cman->getForLogin();
	return $connection->addTableWrappers("users");
}

/**
 * User API function
 * It uses the default db connection
 * @param String dalSQL
 */
function CustomQuery($dalSQL)
{
	$connection = getDefaultConnection();
	$result = $connection->query( $dalSQL );
	if($result)
		return $result;
}

/**
 * User API function
 * It uses the default db connection 
 * @param String sql
 */
function DBLookup($sql)
{
	$connection = getDefaultConnection();
	mysqli_free_result($connection);
	$data = $connection->query( $sql );

	while( $data2 = $data->fetchAssoc()) {
		$data1[] = $data2;
		mysqli_free_result($data2);
	}

	if( $data1 )
		return ($data1);
	  
	return null;
}

/**
  * Data Access Layer.
  */
class tDAL
{
	var $tblTables__allocation;
	var $tblTables__application;
	var $tblTables__backup;
	var $tblTables__calandar;
	var $tblTables__category;
	var $tblTables__codis_uggroups;
	var $tblTables__codis_ugmembers;
	var $tblTables__codis_ugrights;
	var $tblTables__color;
	var $tblTables__contractstat;
	var $tblTables__customer_header;
	var $tblTables__customer_platform;
	var $tblTables__customer_resource_allocation;
	var $tblTables__customer_stage;
	var $tblTables__customerallocation;
	var $tblTables__customertechnology;
	var $tblTables__database;
	var $tblTables__employee_auth;
	var $tblTables__employee_header;
	var $tblTables__employeeskills;
	var $tblTables__emptime;
	var $tblTables__location;
	var $tblTables__lookup;
	var $tblTables__size;
	var $tblTables__sizecategory;
	var $tblTables__skilllevel;
	var $tblTables__skillstable;
	var $tblTables__stage;
	var $tblTables__stage2;
	var $tblTables__tbl_allocation_input;
	var $tblTables__tbl_categorytechnology;
	var $tblTables__tbl_countries;
	var $tblTables__tbl_director;
	var $tblTables__tbl_resource_allocation;
	var $tblTables__tbl_role;
	var $tblTables__tbl_sme;
	var $tblTables__tbl_technologycustomer;
	var $tblTables__tbl_test_center;
	var $tblTables__time;
	var $tblTables__timezone;
	var $tblTables__users;
	var $tblTables__yesno;
	var $lstTables;
	var $Table = array();

	function FillTablesList()
	{
		if($this->lstTables)
			return;
		$this->lstTables[] = array("name" => "allocation", "varname" => "Tables__allocation", "altvarname" => "allocation", "connId" => "Tables", "schema" => "", "connName" => "mydb at localhost");
		$this->lstTables[] = array("name" => "application", "varname" => "Tables__application", "altvarname" => "application", "connId" => "Tables", "schema" => "", "connName" => "mydb at localhost");
		$this->lstTables[] = array("name" => "backup", "varname" => "Tables__backup", "altvarname" => "backup", "connId" => "Tables", "schema" => "", "connName" => "mydb at localhost");
		$this->lstTables[] = array("name" => "calandar", "varname" => "Tables__calandar", "altvarname" => "calandar", "connId" => "Tables", "schema" => "", "connName" => "mydb at localhost");
		$this->lstTables[] = array("name" => "category", "varname" => "Tables__category", "altvarname" => "category", "connId" => "Tables", "schema" => "", "connName" => "mydb at localhost");
		$this->lstTables[] = array("name" => "codis_uggroups", "varname" => "Tables__codis_uggroups", "altvarname" => "codis_uggroups", "connId" => "Tables", "schema" => "", "connName" => "mydb at localhost");
		$this->lstTables[] = array("name" => "codis_ugmembers", "varname" => "Tables__codis_ugmembers", "altvarname" => "codis_ugmembers", "connId" => "Tables", "schema" => "", "connName" => "mydb at localhost");
		$this->lstTables[] = array("name" => "codis_ugrights", "varname" => "Tables__codis_ugrights", "altvarname" => "codis_ugrights", "connId" => "Tables", "schema" => "", "connName" => "mydb at localhost");
		$this->lstTables[] = array("name" => "color", "varname" => "Tables__color", "altvarname" => "color", "connId" => "Tables", "schema" => "", "connName" => "mydb at localhost");
		$this->lstTables[] = array("name" => "contractstat", "varname" => "Tables__contractstat", "altvarname" => "contractstat", "connId" => "Tables", "schema" => "", "connName" => "mydb at localhost");
		$this->lstTables[] = array("name" => "customer_header", "varname" => "Tables__customer_header", "altvarname" => "customer_header", "connId" => "Tables", "schema" => "", "connName" => "mydb at localhost");
		$this->lstTables[] = array("name" => "customer_platform", "varname" => "Tables__customer_platform", "altvarname" => "customer_platform", "connId" => "Tables", "schema" => "", "connName" => "mydb at localhost");
		$this->lstTables[] = array("name" => "customer_resource_allocation", "varname" => "Tables__customer_resource_allocation", "altvarname" => "customer_resource_allocation", "connId" => "Tables", "schema" => "", "connName" => "mydb at localhost");
		$this->lstTables[] = array("name" => "customer_stage", "varname" => "Tables__customer_stage", "altvarname" => "customer_stage", "connId" => "Tables", "schema" => "", "connName" => "mydb at localhost");
		$this->lstTables[] = array("name" => "customerallocation", "varname" => "Tables__customerallocation", "altvarname" => "customerallocation", "connId" => "Tables", "schema" => "", "connName" => "mydb at localhost");
		$this->lstTables[] = array("name" => "customertechnology", "varname" => "Tables__customertechnology", "altvarname" => "customertechnology", "connId" => "Tables", "schema" => "", "connName" => "mydb at localhost");
		$this->lstTables[] = array("name" => "database", "varname" => "Tables__database", "altvarname" => "database", "connId" => "Tables", "schema" => "", "connName" => "mydb at localhost");
		$this->lstTables[] = array("name" => "employee_auth", "varname" => "Tables__employee_auth", "altvarname" => "employee_auth", "connId" => "Tables", "schema" => "", "connName" => "mydb at localhost");
		$this->lstTables[] = array("name" => "employee_header", "varname" => "Tables__employee_header", "altvarname" => "employee_header", "connId" => "Tables", "schema" => "", "connName" => "mydb at localhost");
		$this->lstTables[] = array("name" => "employeeskills", "varname" => "Tables__employeeskills", "altvarname" => "employeeskills", "connId" => "Tables", "schema" => "", "connName" => "mydb at localhost");
		$this->lstTables[] = array("name" => "emptime", "varname" => "Tables__emptime", "altvarname" => "emptime", "connId" => "Tables", "schema" => "", "connName" => "mydb at localhost");
		$this->lstTables[] = array("name" => "location", "varname" => "Tables__location", "altvarname" => "location", "connId" => "Tables", "schema" => "", "connName" => "mydb at localhost");
		$this->lstTables[] = array("name" => "lookup", "varname" => "Tables__lookup", "altvarname" => "lookup", "connId" => "Tables", "schema" => "", "connName" => "mydb at localhost");
		$this->lstTables[] = array("name" => "size", "varname" => "Tables__size", "altvarname" => "size", "connId" => "Tables", "schema" => "", "connName" => "mydb at localhost");
		$this->lstTables[] = array("name" => "sizecategory", "varname" => "Tables__sizecategory", "altvarname" => "sizecategory", "connId" => "Tables", "schema" => "", "connName" => "mydb at localhost");
		$this->lstTables[] = array("name" => "skilllevel", "varname" => "Tables__skilllevel", "altvarname" => "skilllevel", "connId" => "Tables", "schema" => "", "connName" => "mydb at localhost");
		$this->lstTables[] = array("name" => "skillstable", "varname" => "Tables__skillstable", "altvarname" => "skillstable", "connId" => "Tables", "schema" => "", "connName" => "mydb at localhost");
		$this->lstTables[] = array("name" => "stage", "varname" => "Tables__stage", "altvarname" => "stage", "connId" => "Tables", "schema" => "", "connName" => "mydb at localhost");
		$this->lstTables[] = array("name" => "stage2", "varname" => "Tables__stage2", "altvarname" => "stage2", "connId" => "Tables", "schema" => "", "connName" => "mydb at localhost");
		$this->lstTables[] = array("name" => "tbl_allocation_input", "varname" => "Tables__tbl_allocation_input", "altvarname" => "tbl_allocation_input", "connId" => "Tables", "schema" => "", "connName" => "mydb at localhost");
		$this->lstTables[] = array("name" => "tbl_categorytechnology", "varname" => "Tables__tbl_categorytechnology", "altvarname" => "tbl_categorytechnology", "connId" => "Tables", "schema" => "", "connName" => "mydb at localhost");
		$this->lstTables[] = array("name" => "tbl_countries", "varname" => "Tables__tbl_countries", "altvarname" => "tbl_countries", "connId" => "Tables", "schema" => "", "connName" => "mydb at localhost");
		$this->lstTables[] = array("name" => "tbl_director", "varname" => "Tables__tbl_director", "altvarname" => "tbl_director", "connId" => "Tables", "schema" => "", "connName" => "mydb at localhost");
		$this->lstTables[] = array("name" => "tbl_resource_allocation", "varname" => "Tables__tbl_resource_allocation", "altvarname" => "tbl_resource_allocation", "connId" => "Tables", "schema" => "", "connName" => "mydb at localhost");
		$this->lstTables[] = array("name" => "tbl_role", "varname" => "Tables__tbl_role", "altvarname" => "tbl_role", "connId" => "Tables", "schema" => "", "connName" => "mydb at localhost");
		$this->lstTables[] = array("name" => "tbl_sme", "varname" => "Tables__tbl_sme", "altvarname" => "tbl_sme", "connId" => "Tables", "schema" => "", "connName" => "mydb at localhost");
		$this->lstTables[] = array("name" => "tbl_technologycustomer", "varname" => "Tables__tbl_technologycustomer", "altvarname" => "tbl_technologycustomer", "connId" => "Tables", "schema" => "", "connName" => "mydb at localhost");
		$this->lstTables[] = array("name" => "tbl_test center", "varname" => "Tables__tbl_test_center", "altvarname" => "tbl_test_center", "connId" => "Tables", "schema" => "", "connName" => "mydb at localhost");
		$this->lstTables[] = array("name" => "time", "varname" => "Tables__time", "altvarname" => "time", "connId" => "Tables", "schema" => "", "connName" => "mydb at localhost");
		$this->lstTables[] = array("name" => "timezone", "varname" => "Tables__timezone", "altvarname" => "timezone", "connId" => "Tables", "schema" => "", "connName" => "mydb at localhost");
		$this->lstTables[] = array("name" => "users", "varname" => "Tables__users", "altvarname" => "users", "connId" => "Tables", "schema" => "", "connName" => "mydb at localhost");
		$this->lstTables[] = array("name" => "yesno", "varname" => "Tables__yesno", "altvarname" => "yesno", "connId" => "Tables", "schema" => "", "connName" => "mydb at localhost");
	}

	/**
      * Returns table object by table name.
      * @intellisense
      */
	function & Table($strTable, $schema = "", $connName = "")
	{
		$this->FillTablesList();
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper($strTable)==strtoupper($tbl["name"]) &&
				( schema == "" || strtoupper($schema) == strtoupper($tbl["schema"]) ) &&
				($connName == "" || strtoupper($connName) == strtoupper($tbl["connName"]) ) )
			{
				$this->CreateClass($tbl);
				return $this->{"tbl".$tbl["varname"]};
			}
		}
//	check table names without dbo. and other prefixes
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper(cutprefix($strTable))==strtoupper(cutprefix($tbl["name"])))
			{
				$this->CreateClass($tbl);
				return $this->{"tbl".$tbl["varname"]};
			}
		}
		$dummy=null;
		return $dummy;
	}
	
	function CreateClass(&$tbl)
	{
		if($this->{"tbl".$tbl["varname"]})
			return;
//	load table info
		global $dal_info;
		include(getabspath("include/dal/".($tbl["varname"]).".php"));
//	create class and object

		$classname="class_".$tbl["varname"];
		$str = "class ".$classname." extends tDALTable  {";
		foreach($dal_info[$tbl["varname"]] as $fld)
		{
			$str.=' var $'.$fld["varname"].'; ';
		}
		
		$tableName = $tbl["name"];
		if( $tbl["schema"] )
			$tableName = $tbl["schema"] . "." . $tbl["name"];
		$str.=' function '.$classname.'()
			{
				$this->m_TableName = \''.escapesq( $tableName ).'\';
				$this->infoKey = \'' . $tbl["varname"] . '\';
				$this->setConnection('. $tbl["connId"] .');
			}
		};';
		eval($str);
		$this->{"tbl".$tbl["varname"]} = new $classname;
		$this->{$tbl["altvarname"]} = $this->{"tbl".$tbl["varname"]};
		$this->Table[$tbl["name"]]=&$this->{"tbl".$tbl["varname"]};
	}
	
	/**
      * Returns list of table names.
      * @intellisense
      */
	function GetTablesList()
	{
		$this->FillTablesList();
		$res=array();
		foreach($this->lstTables as $tbl)
			$res[]=$tbl["name"];
		return $res;
	}
	
	/**
      * Get list of table fields by table name.
      * @intellisense
      */
	function GetFieldsList($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldsList();
	}
	
	/**
      * Get field type by table name and field name.
      * @intellisense
      */
	function GetFieldType($table,$field)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldType($field);
	}

	/**
      * Get table key fields by table name.
      * @intellisense
      */
	function GetDBTableKeys($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetDBTableKeys();
	}
}

$dal = new tDAL;

/**
 * Data Access Layer table class.
 */ 
class tDALTable
{
	var $m_TableName;
	var $infoKey;
	var $Param = array();
	var $Value = array();
	/**
	 * @type Connection
	 */
	var $_connection;
	
	/**
	 * Set the connection property
	 * @param String connId
	 */
	function setConnection( $connId )
	{
		global $cman;
		$this->_connection = $cman->byId( $connId );
	}
	
	/**
      * Get table key fields.
      * @intellisense
      */
	function GetDBTableKeys()
	{
		global $dal_info;
		if( !array_key_exists($this->infoKey, $dal_info) || !is_array($dal_info[ $this->infoKey ]) )
			return array();
		
		$ret = array();
		foreach($dal_info[ $this->infoKey ] as $fname=>$f)
		{
			if( @$f["key"] )
				$ret[] = $fname;
		}
		return $ret;
	}
	
	/**
      * Get list of table fields.
      * @intellisense
      */
	function GetFieldsList()
	{
		global $dal_info;
		return array_keys( $dal_info[ $this->infoKey ] );
	}

	/**
      * Get field type.
      * @intellisense
      */
	function GetFieldType($field)
	{
		global $dal_info;
		
		if( !array_key_exists(GoodFieldName($field), $dal_info[ $this->infoKey ]) )
			return 200;
			
		return $dal_info[ $this->infoKey ][ GoodFieldName($field) ]["type"];
	}
	
	/**
	 *
	 */
	function PrepareValue($value, $type)
	{
		if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
		{
			if( IsBinaryType($type) )
			{
				if( $this->_connection->dbType == nDATABASE_Oracle )
					return "EMPTY_BLOB()";
					
				return "?";
			}
			
			if( $this->_connection->dbType == nDATABASE_Informix  && IsTextType($type) )
				return "?";
		}
	
		if( IsDateFieldType($type) )
		{
			if( !$value )
				return "null";
			else
				$this->_connection->addDateQuotes( $value );
		}
		
		if( NeedQuotes($type) )
			return $this->_connection->prepareString( $value );

		return 0 + $value;
	}
	
	/**
      * Get table name.
      * @intellisense
      */
	function TableName()
	{
		return $this->_connection->addTableWrappers( $this->m_TableName );
	} 

	/**
	 * @param Array blobs
	 * @param String dalSQL
	 * @param Array tableinfo
	 */
	protected function Execute_Query($blobs, $dalSQL, $tableinfo)
	{		
		$blobTypes = array();
		if( $this->_connection->dbType == nDATABASE_Informix )
		{		
			foreach( $blobs as $fname => $fvalue )
			{
				$blobTypes[ $fname ] = $tableinfo[ $fname ]["type"];
			}
		}

		$this->_connection->execWithBlobProcessing( $dalSQL, $blobs, $blobTypes );
	}

	/**
      * Add new record to the table.
      * @intellisense
      */
	function Add() 
	{
		global $dal_info;
		
		$insertFields = "";
		$insertValues = "";
		$tableinfo = &$dal_info[ $this->infoKey ];
		$blobs = array();
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			if( isset($this->{$fld['varname']}) )
			{
				$this->Value[ $fieldname ] = $this->{$fld['varname']};
			}
			
			foreach($this->Value as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$insertFields.= $this->_connection->addFieldWrappers( $fieldname ).",";
				$insertValues.= $this->PrepareValue($value,$fld["type"]) . ",";
				
				if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
				{
					if( IsBinaryType( $fld["type"] ) )
						$blobs[ $fieldname ] = $value;
						
					if( $this->_connection->dbType == nDATABASE_Informix && IsTextType( $fld["type"] ) )
						$blobs[ $fieldname ] = $value;
				}
				break;
			}
		}
		//	prepare and exec SQL
		if( $insertFields != "" && $insertValues != "" )		
		{
			$insertFields = substr($insertFields, 0, -1);
			$insertValues = substr($insertValues, 0, -1);
			$dalSQL = "insert into ".$this->_connection->addTableWrappers( $this->m_TableName )." (".$insertFields.") values (".$insertValues.")";
			$this->Execute_Query($blobs, $dalSQL, $tableinfo);
		}
		//	cleanup		
	    $this->Reset();
	}

	/**
      * Query all records from the table.
      * @intellisense
      */
	function QueryAll()
	{
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName );
		return $this->_connection->query( $dalSQL );
	}

	/**
      * Do a custom query on the table.
      * @intellisense
      */
	function Query($swhere = "", $orderby = "")
	{
		if ($swhere)
			$swhere = " where ".$swhere;
			
		if ($orderby)
			$orderby = " order by ".$orderby;
			
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName ).$swhere.$orderby;
		return $this->_connection->query( $dalSQL );
	}

	/**
      * Delete a record from the table.
      * @intellisense
      */
	function Delete()
	{
		global $dal_info;
		
		$deleteFields = "";
		$tableinfo = &$dal_info[ $this->infoKey ];
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			if( isset($this->{$fld['varname']}) )
			{
				$this->Param[ $fieldname ] = $this->{$fld['varname']};
			}
			
			foreach($this->Param as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$deleteFields.= $this->_connection->addFieldWrappers( $fieldname )."=". $this->PrepareValue($value, $fld["type"]) . " and ";
				break;
			}
		}
		//	do delete
		if ($deleteFields)
		{
			$deleteFields = substr($deleteFields, 0, -5);
			$dalSQL = "delete from ".$this->_connection->addTableWrappers( $this->m_TableName )." where ".$deleteFields;
			$this->_connection->exec( $dalSQL );
		}
	
		//	cleanup
	    $this->Reset();
	}

	/**
      * Reset table object.
      * @intellisense
      */
	function Reset()
	{
		global $dal_info;
		
		$this->Value = array();
		$this->Param = array();
		
		$tableinfo = &$dal_info[ $this->infoKey ];
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			unset($this->{$fld["varname"]});
		}
	}	

	/**
      * Update record in the table.
      * @intellisense
      */
	function Update()
	{
		global $dal_info;
		
		$tableinfo = &$dal_info[ $this->infoKey ];
		$updateParam = "";
		$updateValue = "";
		$blobs = array();

		foreach($tableinfo as $fieldname => $fld)
		{
			$command = 'if(isset($this->'.$fld['varname'].')) { ';
			if( $fld["key"] )
				$command.= '$this->Param[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			else
				$command.= '$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.= ' }';
			
			eval($command);
			
			if( !$fld["key"] && !array_key_exists( strtoupper($fieldname), array_change_key_case($this->Param, CASE_UPPER) ) )
			{
				foreach($this->Value as $field => $value)
				{
					if( strtoupper($field) != strtoupper($fieldname) )
						continue;
						
					$updateValue.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . ", ";
					
					if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
					{
						if( IsBinaryType( $fld["type"] ) )
							$blobs[ $fieldname ] = $value;
							
						if( $this->_connection->dbType == nDATABASE_Informix && IsTextType( $fld["type"] ) )	
							$blobs[ $fieldname ] = $value;		
					}
					break;
				}
			}
			else
			{
				foreach($this->Param as $field=>$value)
				{
					if( strtoupper($field) != strtoupper($fieldname) )
						continue;
						
					$updateParam.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . " and ";
					break;
				}
			}
		}

		//	construct SQL and do update	
		if ($updateParam)
			$updateParam = substr($updateParam, 0, -5);
		if ($updateValue)
			$updateValue = substr($updateValue, 0, -2);
			
		if ($updateValue && $updateParam)
		{
			$dalSQL = "update ".$this->_connection->addTableWrappers( $this->m_TableName )." set ".$updateValue." where ".$updateParam;
			$this->Execute_Query($blobs, $dalSQL, $tableinfo);
		}

		//	cleanup
		$this->Reset();
	}
	
	/**
	 * Select one or more records matching the condition
	 */
	function FetchByID()
	{
		global $dal_info;
		$tableinfo = &$dal_info[ $this->infoKey ];

		$dal_where = "";
		foreach($tableinfo as $fieldname => $fld)
		{
			$command = 'if(isset($this->'.$fld['varname'].')) { ';
			$command.= '$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.= ' }';
			
			eval($command);
			
			foreach($this->Param as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$dal_where.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . " and ";
				break;
			}
		}
		// cleanup
		$this->Reset();
		// construct and run SQL
		if ($dal_where)
			$dal_where = " where ".substr($dal_where, 0, -5);
			
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName ).$dal_where;
		return $this->_connection->query( $dalSQL );
	}
}

function cutprefix($table)
{
	$pos = strpos($table,".");
	if( $pos === false )
		return $table;
		
	return substr($table, $pos + 1);
}

function escapesq($str)
{
	return str_replace(array("\\","'"),array("\\\\","\\'"),$str);
}

?>