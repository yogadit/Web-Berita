<?php 
include "..\include\db_connect.php";
session_destroy();
header("location: $base_url/view"); ?>