<?php
/* Verbindung zur Datenbank */
$Server = 'localhost:3306';
$user = 'root';
$pwd = 'admin';
$db = 'legoverwaltung';

try{
    $con = new PDO('mysql:host='.$Server.';dbname='.$db.';charset=utf8',$user,$pwd);

    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(Exception $e)
{
    echo 'Error - Verbindung: '.$e->getCode().': '.$e->getMessage().'<br>';
}