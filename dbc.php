<?php
//database connection
try {
$dbc = new PDO('mysql:host=localhost; dbname=u413525836_kannadatimes', 'u413525836_kannadauser', '1P_kannadauser');
$dbc->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
} catch(PDOException $e) {
	echo "Error: " . $e->getMessage();
}
