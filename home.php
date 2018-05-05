<!-- Connect to Databse -->
<?php include 'connect.php';?>

<!DOCTYPE html>
<html>
<head>
	<title>The Yard</title>

	<link rel="icon" href="https://cdn0.iconfinder.com/data/icons/e-commerce-and-shopping-2/512/keyboard_device_computer_modern_web_typing_keys_usability_tool_equipment_computing_flat_design_icon-512.png">
	<link rel="stylesheet" href="css/home.css">
</head>
<body>

	<!-- Header -->
	<div id="container_main" class="wrapper">
		<div id="header">
			<ul id="primary_menu">
				<li><span class="nav_title"><a href="home.php">HOME</a></span></li>
				<li><span class="nav_title"><a href="">ABOUT</a></span></li>
			</ul>

			<div id="home">
					<p id="scrap" class="logo"><a href="home.php"><span>SCRAP</span></a></p>
					<p id="yard" class="logo"><a href="home.php"><span>YARD</span></a></p>
			</div>
		</div>

		<div id="header_photo">
			<p class="phrase"><span>LOVE SUPERHEROES?</span></p>
			<p class="phrase"><span>LIKE KEYBOARDS?</span></p>
			<p class="phrase"><span>COME WASTE YOUR MONEY HERE</span></p>
		</div>
	</div>

	<?php  

	    $sql = "SELECT * FROM product_info";
		$stmt = $conn->query($sql);
		$row = $stmt->fetchObject();
		
		$id = $row->id;
		$name = $row->name;
		$category = $row->category;
		$price = $row->price;

		// All string already
		// echo $row->id;
		// echo $row->name;
		// echo $row->category;
		// echo $row->price;

		// 2nd way to print items
		// foreach ($conn->query($sql) as $row) {
		// 	print $row['name'];
		// }
		
		// Take out brackets in name
		// $new_name = str_replace(str_split("[]"), "", $row->name);
		// echo $new_name;

		// // Change everything to lowercase
		// echo strtolower($new_name);

		// // Combine two strings
		// echo "img/keyboard_" . $row->id . ".jpg"

	?>

	<?php
		// echo "<div id='container_items' class='wrapper'>";
		// function cell() {
		// 	$new_name = str_replace(str_split("[]"), "", $name);
		// 	echo "<a href='product/" . strtolower($new_name) . ".html'>";
		// 	echo "<div class='cell'>";
		// 	echo "<div class='img'><img src='img/keyboard_" . $id . ".jpg'></div>";
		// 	echo "<p class='product_name'>" . $name . "</p>"
		// 	echo "<p class='product_category'>" . $category . "</p>";
		// 	echo "<p class='product_price'>$" . $price . "</p>";
		// 	echo "</div></a>";
		// }
		// echo "</div>";
		echo "<div id='container_items' class='wrapper'>";
		$new_name = str_replace(str_split("[]"), "", $name);
		echo "<a href='product/" . strtolower($new_name) . ".html'>";
		echo "<div class='cell'>";
		echo "<div class='img'><img src='img/keyboard_" . $id . ".jpg'></div>";
		echo "<p class='product_name'>" . $name . "</p>";
		echo "<p class='product_category'>" . $category . "</p>";
		echo "<p class='product_price'>$" . $price . "</p>";
		echo "</div></a>";
		echo "</div>";

	?>

</body>
</html>

<!-- Close Connection -->
<?php include 'disconnect.php';?>