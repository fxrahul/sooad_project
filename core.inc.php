<?php
//SE Experiment 
require 'connect.inc.php';
ob_start();
session_start();
$current_file = $_SERVER['SCRIPT_NAME'];

if(isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER']))
{
	$http_referer = $_SERVER['HTTP_REFERER'];
}
function loggedin()
{
	if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']))
	{
		return true;
	}
	else
	{
		return false;
	}
}

function getuserfield($field)
{
	global $mysql_connect;
	$query = "SELECT ".$field." FROM users WHERE id='".$_SESSION['user_id']."'";
	if($query_run = mysqli_query($mysql_connect, $query))
	{
		$query_run = mysqli_query($mysql_connect, $query);
		$query_row = mysqli_fetch_assoc($query_run);
		$return_field = $query_row[$field];
		return $return_field;

	}
}
function getcompanyfield($field){
    global $mysql_connect;
    $query="SELECT company_name  FROM companydetails WHERE company_name LIKE '$field'";
    if($query_run=mysqli_query($mysql_connect, $query))
    {
        $query_run=mysqli_query($mysql_connect, $query);
        $query_row = mysqli_fetch_assoc($query_run);
		$return_field = $query_row['company_name'];
		return $return_field;

    }
}
function getcompanyfielddetails($field){
    global $mysql_connect;
    $query="SELECT company_details FROM companydetails WHERE company_name LIKE '$field'";
    if($query_run=mysqli_query($mysql_connect, $query))
    {
        $query_run=mysqli_query($mysql_connect, $query);
        $query_row = mysqli_fetch_assoc($query_run);
		$return_field = $query_row['company_details'];
		return $return_field;

    }
}
function getcompanyid($field){
     global $mysql_connect;
    $query="SELECT register_id FROM companydetails WHERE company_name LIKE '$field'";
    if($query_run=mysqli_query($mysql_connect, $query))
    {
        $query_run=mysqli_query($mysql_connect, $query);
        $query_row = mysqli_fetch_assoc($query_run);
		$return_field = $query_row['register_id'];
		return $return_field;

    }
}

function getadharid($field){
     global $mysql_connect;
    $query="SELECT adhar_id FROM companydetails WHERE company_name LIKE '$field'";
    if($query_run=mysqli_query($mysql_connect, $query))
    {
        $query_run=mysqli_query($mysql_connect, $query);
        $query_row = mysqli_fetch_assoc($query_run);
		$return_field = $query_row['adhar_id'];
		return $return_field;

    }
}
?>
