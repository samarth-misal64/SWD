<?php
	$con = mysqli_connect('localhost','root',"",'registration');
    if($con->connect_error){
        die("Connection Failed!".$con->connect_error);
    }
    mysqli_query($con,"SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");

mysqli_set_charset($con,'utf8');
?>