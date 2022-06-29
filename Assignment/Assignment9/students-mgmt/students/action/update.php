<?php
require_once "../../utils/db.php";
// if (!isset($_POST['id'])) {
// 	header("location:../?error=invalid id");
// }
$id = $_POST['id'];
// var_dump($_POST);
$name=$_POST['name'];
$email=$_POST['email'];
// $password=password_hash($_POST['password'] ?? '',PASSWORD_DEFAULT);
$dob=$_POST['dob'];
$favourite_color=$_POST['color'];
$weight=$_POST['weight'];
$gender=$_POST['gender'];
$hobbies=implode(",",$_POST['hobbies']);
$nationality=$_POST['nationality'];
$sql="UPDATE students SET name='$name',email='$email', dob='$dob', favourite_color='$favourite_color', weight='$weight', gender='$gender', hobbies='$hobbies', nationality='$nationality' WHERE id=$id;";
// die($sql);
if($conn->query($sql) == TRUE) {
	header("location:../?success=updated successfully");
} else {
	header("location:../?error=error occured");
}
?>