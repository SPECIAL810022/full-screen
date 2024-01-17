<?php
include 'new_connection.php';

$sql=mysqli_query($conn,"SELECT * FROM engineer");

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>



<div align="right"><a href="new_form.php">New User</a></div>


<center>
	<table border="1">
		<tr>
		<th>sl no.</th>
		<th>User Id</th>
		<th>First Name</th>
		<th>Middle Name</th>
		<th>Last Name</th>
		<th>Number</th>
		<th>Alternat Number</th>
		<th>Any Friend's Number</th>
		<th>Password</th>
		<th>Re Enter Password</th>
		<th>Confirm Password</th>
		<th>Gmail</th>
		<th>Microsoft Account</th>
		<th>Instagram Id</th>
		<th>Country</th>
		<th>State</th>
		<th>District</th>
		<th>Gender</th>
		<th>Bank</th>
		<th>IFSC Code</th>
		<th>Cualification</th>
		<th>Address</th>
		<th>Police Station</th>
		<th>Language</th>
		<th>Railway Station</th>
		<th>Post Office</th>

      </tr>
			<?php
	$sl = 1;
	while($sql_fetch = mysqli_fetch_assoc($sql)) {
		?>
		<tr>
			<td><?php echo $sl+1; $sl++ ?></td>

			<td><?php echo $sql_fetch['id']?></td>
			<td><?php echo $sql_fetch['first name']?></td>
			<td><?php echo $sql_fetch['middle name']?></td>
			<td><?php echo $sql_fetch['last name']?></td>
			<td><?php echo $sql_fetch['number']?></td>
			<td><?php echo $sql_fetch['alternat number']?></td>
			<td><?php echo $sql_fetch["any friend's number"]?></td>
			<td><?php echo $sql_fetch['password']?></td>
			<td><?php echo $sql_fetch['re enter password']?></td>
			<td><?php echo $sql_fetch['confirm password']?></td>
			<td><?php echo $sql_fetch['gmail']?></td>
			<td><?php echo $sql_fetch['microsoft account']?></td>
			<td><?php echo $sql_fetch['instagram id']?></td>
			<td><?php echo $sql_fetch['country']?></td>
			<td><?php echo $sql_fetch['state']?></td>
			<td><?php echo $sql_fetch['district']?></td>
			<td><?php echo $sql_fetch['gender']?></td>
			<td><?php echo $sql_fetch['bank']?></td>
			<td><?php echo $sql_fetch['ifsc code']?></td>
			<td><?php echo $sql_fetch['cualification']?></td>
			<td><?php echo $sql_fetch['address']?></td>
			<td><?php echo $sql_fetch['police station']?></td>
			<td><?php echo $sql_fetch['language']?></td>
			<td><?php echo $sql_fetch['railway station']?></td>
			<td><?php echo $sql_fetch['post office']?></td>
			<!-- <td id="Action"><a href="edit_profile.php?key=<?php echo $sql_fetch['id'] ?>">edit</a>
            <td id="delete"><a href="delete.php?del=<?php echo $sql_fetch['id'] ?>">delete</a> -->

		</tr>
	<?php } ?>
	</table>
</center>
</body>
</html>