<?php

ob_start(); //container, sends lot of requests to php  whn using redirection 

session_start(); //A session is a way to store information (in variables) to be used across multiple pages.


defined("DS") ? null : define("DS",DIRECTORY_SEPARATOR);

defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT", __DIR__ . DS . "templates/front");

defined("TEMPLATE_BACK") ? null : define("TEMPLATE_BACK", __DIR__ . DS . "templates/back");


defined("DB_HOST") ? null : define ("DB_HOST" , "localhost");
defined("DB_USER") ? null : define("DB_USER" , "root");
defined("DB_PASS") ? null : define("DB_PASS" , "");
defined("DB_NAME") ? null : define("DB_NAME" ,  "ecom_db");

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME); //connecting to the database

require_once("functions.php"); //requiring the files needed







?>