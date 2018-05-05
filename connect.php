<!-- Local Access -->
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";

		try {
		    $conn = new PDO("mysql:host=$servername;dbname=keyboarddb", $username, $password);
		    // set the PDO error mode to exception
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			echo "<script type='text/javascript'>alert('Connected successfully');</script>";
		} catch(PDOException $e) {
		    echo "<script type='text/javascript'>alert('Connection failed');</script>";
		}
?>


<?php  

 	// $sql = "SELECT name FROM product_info";
	// $stmt = $conn->query($sql);
	// $row = $stmt->fetchObject();
	// echo $row->name;

	// foreach ($conn->query($sql) as $row) {
	// 	print $row['name'];
	// }

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