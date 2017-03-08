<?php 

require_once('BBallPlayer.php');

class Db {
	private $hostname, $username, $password, $dbname, $dbh;
	
	function __construct() {
	}

	function insertProperty($pnterm, $adterm, $cnterm, $snterm,$pcterm,$spterm,$rpterm, $pdterm, $ppterm) {

		if (strlen($pnterm) >= 1 && $pnterm !== ' ') {
		
            //Declaring Credentials
            $hostname = 'IS-HAY04.ischool.uw.edu\sqlexpress';
            $dbname = 'REALESTATE_DB';
            $username = 'INFO445';
            $password = 'GoHuskies!';

            //Creating the Connection
            $connectionInfo = array( "Database"=>$dbname, "UID"=>$username, "PWD"=>$password);
            $conn = sqlsrv_connect( $serverName, $connectionInfo);

            //Writing the Query and Executing
            $sql = "INSERT INTO Table_1 (id, data) VALUES (?, ?)";
            $sql = "INSERT INTO PROPERTY(PropertyName, Address, City, State, PostalCode, SellingPrice, RentalPrice, PurchaseDate, PurchasePrice, Neighborhood, PurchaseAge) 
                    VALUES(?, ?, ?, ?, ?, ?,?, ?, ?)";
            $params = array($pnterm, $adterm, $cnterm, $snterm,$pcterm,$spterm,$rpterm, $pdterm, $ppterm);
            $stmt = sqlsrv_query( $conn, $sql, $params);

            //Getting results
            if( $stmt === false ) {
               die( print_r( sqlsrv_errors(), true));
            }   

            //Close the connection
            sqlsrv_close( $conn );
		}
	}
}