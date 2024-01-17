<?php 
$conn=mysqli_connect('localhost','root','','gourab_sir') OR die(mysqli_error($conn));

if ($conn) {
	echo "database is connected";
}
	else{
		echo "database is not connected";


}
 ?>