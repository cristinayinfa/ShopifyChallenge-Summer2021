<?php

$validation = true;
$error = array();

$name = $_POST['name'];
$price = $_POST['price'];
$discount = $_POST['discount'];
$file = $_FILES['file'];
$fileName = $_FILES['file']['name'];
$filetemp = $_FILES['file']['tmp_name'];
$fileErr = $_FILES['file']['error'];
$fileType = $_FILES['file']['type'];
$fileDestination = 'submissions/'.$fileName;
$allowedTypes = array('image/jpg', 'image/jpeg', 'image/gif', 'image/png');

//Function to calculate final price with discount (if any)
function calculatePrice($price, $discount){
	$DollarsOFF = $price * ($discount/100);
	$finalPrice = $price - $DollarsOFF;
	return $finalPrice;
}

//Checks if name input was given
if(empty($name)){
	$validation = false;
	$error['name'] = "*Please enter name";
}

//Checks if price input was given
if(empty($price)){
	$validation = false;
	$error['price'] = "*Please enter price";
}

//Checks if price input given is a number
if(!empty($price) && !is_numeric($price)){
		$validation = false;
		$error['NotANum'] ="*Price has to be a number";
}

//Checks if file input was attached
if(empty($fileName)){
	$validation = false;
	$error['nofile'] = "*Please choose an image to submit";
}

//Checks if file input is a photo
if(!empty($fileName) && !in_array($fileType, $allowedTypes)){
		$validation = false;
		$error['wrongType'] = "*File type not allowed";
}

//If all input fields are correct let user know picture was uploaded successfully
if($validation){
	move_uploaded_file($filetemp, $fileDestination);
	$finalPrice = calculatePrice($price,$discount);
	echo '<div id=uploaded>';
	echo '<link rel="stylesheet" href="style.css">';
	echo '<h2> Uploaded successfully! </h2>';
	echo "Name: " .$name . "<br>";
	echo "Full price: $".$price . "<br>";
	echo "Discount: ".$discount . "%" . "<br>";
	echo "Final price: $".$finalPrice . "<br>";
	echo '<a href="gallery.php"> <button> Photo Gallery </button></a>';
	echo '<a href="submit.html"> <button> Submit more photos </button></a>';
	echo '</div>';
}

if(!$validation){
	include('submit.html');
}

?>

