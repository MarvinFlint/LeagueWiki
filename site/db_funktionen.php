<?php

function db_connect(){
    
//Variablen
$db_server = "localhost";
$db_user = "admin";
$db_password = "1234";
$db_name = "gaestebuch";

//Verbindung zum DB-Server

$dbh =  mysql_connect($db_server, $db_user, $db_password)
        or die ("Connection error 404 brain not found");

//Verbindung zu DB aufbauen

    mysql_select_db($db_name, $dbh)
    or die("Connection error 404 brain still not found");

    return $dbh;
}

//*****************************************************************************+

function db_close(){
    mysql_close();
}

//*****************************************************************************+

//Abfrage-Funktion mit Verbindungsaufbau

function db_query($sql){
    //Verbindungsaufbau
    $dbh = db_connect();

    //SWL-Abfrage an die DB senden
    
    $result = mysql_query($sql, $dbh) or die ("Connection error 404 query malfunction");
    
    db_close();
    
    return $result;
}

?>