<?
// Macronetic Hydra
// Common SQL Interface
// MySQLi implementation
// (c) Antradar Software 1995-2013

$SQL_ENGINE="MySQLi";

function sql_get_db($dbhost,$dbsource,$dbuser,$dbpass){
	$db=mysqli_connect($dbhost,$dbuser,$dbpass,$dbsource);
	return $db;
}

function sql_query($query,$db){
	$rs=mysqli_query($db,$query);
	if (!$rs) echo "sql_error: ".$query;
	return $rs;
}

function sql_fetch_array($rs){
	return mysqli_fetch_array($rs);

}

function sql_insert_id($db,$rs=null){

	if (!isset($rs)) return mysql_insert_id();
	return mysqli_insert_id($db);
}

function sql_affected_rows($db,$rs){
	return mysqli_affected_rows($db);
}

function sql_begin_transaction(){
	die("sql.ard: not implemented!");
}

function sql_commit(){
	die("sql.ard: not implemented!");
}

function sql_rollback(){
	die("sql.ard: not implemented!");
}

