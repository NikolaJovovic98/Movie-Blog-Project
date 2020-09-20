<?php

$serverName = "localhost" ;
$dbUsername = "root";
$dbPassword= "";
$dbName= "db_filmovi_serije";

$connect = mysqli_connect($serverName,$dbUsername,$dbPassword,$dbName);

if(!$connect){

     die("Connection With Database Failed : ". mysqli_connect_error());
     exit();

}