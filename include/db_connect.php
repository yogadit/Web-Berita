<?php

$host = "localhost";

$username = "root";

$dbname = "news";

$password = "";

$base_url = "http://localhost/umn/Pem%20Web/UTS/Final-Product";

if (!isset($_SESSION)) { 
    session_start();
}

$db = new PDO("mysql:host=$host;dbname=$dbname; port=3306", $username, $password);