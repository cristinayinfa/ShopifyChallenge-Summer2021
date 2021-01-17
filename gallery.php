<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.css">
<body>
<h2>Image Gallery</h2>

<!-- First div to contain pictures -->
<div class="flex-container">

<?php
//Set variable to store picture folder path
$path ="submissions/";

//Set variable to store all photos in folder
//We don't make sure they are pictures since submit.php validates every file that goes into the folder
$images = glob($path. "*.*");

//Counter variable to keep track of the number of pictures per flex-container div
$counter = 0;

//Iterate through all images in the folder
foreach($images as $image){
	echo '<div>';
	echo '<img src="'.$image.'"><br/>';
	echo '</div>';
	$counter++;

	//Once we reach 4 pictures we close current div and start another one
	if($counter%4 ==0){
	echo '</div>';
	echo '<div class="flex-container">';
}
}
?>
</div>
<!-- Button to allow user to go back to submit.html -->
<a href="submit.html"> <button> Submit more photos </button></a>

</body>

</html>
