<?php 

function pdo_connect_mysql(){
//update login details

$DATABASE_HOST = 'localhost';
$DATABASE_USER= 'root';
$DATABASE_PASS = 'root';
$DATABASE_NAME = 'skincare';

try{
    return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
} catch (PDOException $exception){
    //if there is an error in the connection , stop script
    die('Failed to connect to database');
}


}



?>