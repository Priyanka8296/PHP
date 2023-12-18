<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn)
{
    die('could not connect: '. mysql_error());
}
echo 'Connected successfully<br>';
$sql = 'CREAT Database testdb';
$retval= mysql_query($sql,$conn);
if(! $retval)
{
    die('Could not create database: ' . mysql_error());
}
echo "Database test_db created successfully<br>";
$sql = 'CREATE TABLE employee( '.
       'emp_id INT NOT NULL AUTO_INCREMENT, '.
       'emp_name VARCHAR(20) NOT NULL, '.
       'emp_address VARCHAR(20) NOT NULL, '.
       'emp_salary INT NOT NULL, '.
       'primary key(emp_id))';
mysql_select_db('testdb');
$retval = mysql_query($sql,$conn);
if(! $retval)
{
    die('Could not create table: '. mysql_error());
}
echo "Entered data successfully<br>";
mysql_close($conn);
?>
