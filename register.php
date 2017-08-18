<!-- <?php 
print_r("expression");
if (isset($_POST["Token"])) {
 	$token = $_POST["Token"];
 	print_r($token);
 	$conn = mysqli_connect("localhost","root","","fcm");
 	$query = "INSERT INTO users (Token) Values ('$token') ON DUPLICATE KEY UPDATE Token = '$token' ;";
 	// if(mysqli_query($conn,$query)){
 	// 	echo "Records added successfully.";
 	// }else {
 	// 	echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
 	// }
 	mysqli_query($conn,$query);
 	mysqli_close($conn);
 } ?>  -->