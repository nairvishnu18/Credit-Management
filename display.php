<?php

$conn = mysqli_connect("localhost","root","","credit_manage");

$sql = "SELECT * FROM user ";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)> 0){
	while ($row = mysqli_fetch_array($result)){
		?>

		<tr>

				<td> <?php echo $row['Name'] ?> </td>;
				<td> <?php echo $row['email'] ?> </td>;
				<td> <?php echo $row['Credit'] ?> </td>;

		</tr>

<?php

	}
}

?>


