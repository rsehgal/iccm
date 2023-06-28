<?php

require_once "globals.php";
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

class DB{
private $sname;
private $uname;
private $passwd;
private $dbname;
private $tablename;
private $conn;

function __construct() {
  //echo "Constructor called...........<br/>";
  $this->sname='localhost';//$DBADDRESS;
  $this->uname='carbonindiaiccm_sympadmin';
  $this->passwd='sympadmin@123';//$DBPASSWD;
  $this->dbname='carbonindiaiccm_symposia'; 
  //$this->Connect();  
}

public function Set($servName,$userName,$passWord,$databaseName){
	//echo "Reached Set";
	$this->sname=$servName;
	$this->uname=$userName;
	$this->passwd=$passWord;
	$this->dbname=$databaseName;
	//echo "Exiting SEt function...<br/>"; 
}

public function Connect(){
	//echo "$this->sname : $this->uname : $this->passwd : $this->dbname <br/>";
	$this->conn = new mysqli($this->sname, $this->uname, $this->passwd, $this->dbname);
	// Check for connection errors
	if ($this->conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	//echo "Connection Established...<br/>";
}

public function GetFieldNames($tableName){
	//echo "GetFieldName called.... <br/>";
	$query = "SELECT * FROM $tableName LIMIT 1";
	$result = $this->GetQueryResult($query);// $this->conn->query($query);
	if ($result->num_rows > 0) {
	    $fieldNames = [];
	        $row = $result->fetch_assoc();
	    foreach ($row as $fieldName => $value) {
		    //echo $fieldName;
			        $fieldNames[] = $fieldName;
	    }
	return $fieldNames;
	}
}

public function GetAssociativeArray($tablename){
	$fieldNames = $this->GetFieldNames($tablename);
	$assArr = array();
	for($i=0; $i<count($fieldNames) ; $i++){
		$assArr[$fieldNames[$i]] = $this->GetColumnArray($tablename,$fieldNames[$i]);
	}
	return $assArr;
}

public function GetColumnArray($tablename,$colname){
	$valArray=[];
	$query = "select $colname from $tablename";
	
	$result = $this->GetQueryResult($query);
	$topicName="";
	$i=0;
        while ($row = $result->fetch_assoc()) {
		$valArray[$i]=$row[$colname];
		$topicName = $row[$colname];
		$i++;
	}
	//return $topicName;
	return $valArray;

}

public function GetParameter($volume,$fieldName){
	$query = "select $fieldName from symposium where volume=".$volume;
	//return $query;
	$result = $this->GetQueryResult($query);
	$row = $result->fetch_assoc();
	return $row[$fieldName];
}

public function GetQueryResult($query){

$this->Connect();  
$result = $this->conn->query($query);
$this->conn->close();
return $result;
}

public function MakeTableRow($row){
	$tabrow="<tr>";
	$fieldNames = GetFieldNames($tablename);
	for($i=0;$i<sizeof($fieldNames);$i++){
	$rowData = "<td>Hello</td>";
	$tabrow.=$rowData;
	}
	echo $tabrow;
	return $tabrow."</tr>";
}

/*public function GetCounter($tablename){
        session_start();
        $query = "select * from ".$tablename." where uname='".$_SESSION["username"]."'";
        $result = $this->GetQueryResult($query);
        return mysqli_num_rows($result);
        //return $result->num_rows;
}*/

public function GetCounter($tablename,$uname=""){
        session_start();
        $query="";
        if($uname === "")
        $query = "select * from ".$tablename." where uname='".$_SESSION["username"]."'";
        else
        $query = "select * from ".$tablename." where uname='".$uname."'";
        $result = $this->GetQueryResult($query);
        return mysqli_num_rows($result);
        //return $result->num_rows;
}

public function GetTableData($tableName,$showUname=0,$allowDeletion=0){
	$table="<table border='1' class='table table-striped'>";
	$columnNames = $this->GetFieldNames($tableName);
	$query = "SELECT * FROM $tableName";
	//$result = $this->conn->query($query);
	$result = $this->GetQueryResult($query);
	//echo
	$table.="<tr class='table-warning'>";
	        foreach ($columnNames as $columnName) {
	//echo
		if($columnName=='uname'){
		if($showUname==1){
		$table.="<th >" . $columnName . "</th>";
		}
		}else{
		$table.="<th >" . $columnName . "</th>";
		}
		}
		if($allowDeletion==1)
		$table.="<td>Update</td>";
	//echo
	       $table.="</tr>";
	while ($row = $result->fetch_assoc()) {
		//echo 
		$table.= "<tr>";
		foreach ($columnNames as $columnName) {
			//echo

			 if($columnName=='uname'){
			if($showUname==1)
				$table.="<td>" . $row[$columnName] . "</td>";
			}else{
				$table.="<td>" . $row[$columnName] . "</td>";
			}
		}
		if($allowDeletion==1)
		$table.="<td><input type='button' class='deleteEntry' oftable='".$tableName."' id='".$row['uname']."' value='Delete'></input></td>";
		//echo 
		$table.="</tr>";
	}
			//echo
	/*if($showUname==1)
	$table.="</table><br/>"."ShowUname set <br/>";
	else
	$table.="</table><br/>"."ShowUname NOT set <br/>";*/
	return $table;
}

}

?>
