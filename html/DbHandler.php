<?php

require_once 'Db.php';

$myDB = new Db();

$pnterm = trim($_GET['PN1']);
$adterm = trim($_GET['AD1']);
$cnterm = trim($_GET['CN1']);
$snterm = trim($_GET['SN1']);
$pcterm = trim($_GET['PC1']);
$spterm = trim($_GET['SP1']);
$rpterm = trim($_GET['RP1']);
$pdterm = trim($_GET['PD1']);
$ppterm = trim($_GET['PP1']);

$myDB->insertProperty($pnterm, $adterm, $cnterm, $snterm,$pcterm,$spterm,$rpterm, $pdterm, $ppterm);
