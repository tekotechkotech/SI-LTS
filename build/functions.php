<?php 
	// koneksi php
    $host = "localhost";
	$user = "root";
	$pass = "";
	$db = "lts";

	$conn = mysqli_connect($host, $user, $pass, $db);

	if(!$conn) {
		die("Koneksi gagal : ".mysqli_connect_error());
	}
    // koneksi php //

    // function read($query)
    // {
    //     global $conn;
    // $result = mysqli_query($conn,$query);
    // }

    // READ
function query($query)
{
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
    // READ //



?>