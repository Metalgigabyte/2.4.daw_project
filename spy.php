<?php
// Server SIDE
if ($_REQUEST) {
							//servidor, user, pass, db, port
	$link = mysqli_connect ( "sql5.freesqldatabase.com", "sql554986", "vZ4*hA4*", "sql554986", "3306" );
	
	if (!$link) {
		echo "<h2>Cannot connect to mysql</h2>";
		die ();
	}

	$url_d = $_REQUEST ["url"]; // name sent by the user login
	$url_s = $_SERVER ["HTTP_REFERER"]; // pwd sent by the pwd login

	$query = "INSERT INTO spy(url_s, url_d) VALUES ('$url_s','$url_d')"; // caregul whit the quotations

	$result = mysqli_query ( $link, $query ); // We send the query and get a result

	header("Location: $url_d");
	
}