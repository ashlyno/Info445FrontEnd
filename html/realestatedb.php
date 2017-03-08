
<?php
// Server in the this format: <computer>\<instance name> or 
// <server>,<port> when using a non default port number
$server = 'IS-HAY04.iSchool.uw.edu';

// Connect to MSSQL
$link = mssql_connect($server, 'INFO445', 'GoHuskies!');

if (!$link) {
    die('Something went wrong while connecting to MSSQL');
}
?>