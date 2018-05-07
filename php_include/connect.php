<!-- Local Access -->
<?php
	include $_SERVER['DOCUMENT_ROOT'].'/keyboard/dbconfig.php';
	$servername = DB_HOST;
	$dbname = DB_DATABASE;
	$username = DB_USER;
	$password = DB_PASSWORD;

		try {
		    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		    // set the PDO error mode to exception
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e) {
			// Alert users if database does not connect
		    echo "<script type='text/javascript'>alert('Connection failed');</script>";
		}
?>

<!-- Centaurus Access -->
<!-- <?php
$servername = "matt-smith-v4.ics.uci.edu";
$username = "inf124db023";
$password = "pristine";

	try {
	    $conn = new PDO("mysql:host=$servername;dbname=inf124db023", $username, $password);
	    // set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    echo "Connected successfully"; 
	    }
	catch(PDOException $e)
	    {
	    echo "Connection failed: " . $e->getMessage();
	    }
?> -->