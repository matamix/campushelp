<?php
//Variables de connexion à la base de données
	$server		= "sql180.main-hosting.eu"; //Adresse du serveur
	$user		= "u993620326_root"; //Utilisateur du serveur
	$password	= "root12"; //Mot de passe du serveur 
	$database	= "u993620326_camp"; //Nom de la base de données
	
	$connect = mysql_connect($server, $user, $password) or die ("Koneksi gagal!");
	mysql_select_db($database) or die ("Database belum siap!");

	/* ====== UNTUK MENGGUNAKAN MYSQLI DI UNREMARK YANG INI, YANG MYSQL_CONNECT DI REMARK ======= */
	// $con = mysqli_connect($server, $user, $password, $database);
	// if (mysqli_connect_errno()) {
	// 	echo "Gagal terhubung MySQL: " . mysqli_connect_error();
	// }

?>