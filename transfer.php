<?php

$conn = mysqli_connect("localhost","root","","credit_manage");

$sql = "SELECT * FROM transfers ";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)> 0){
	while ($row = mysqli_fetch_array($result)){
		?>

		<tr>

				<td> <?php echo $row['Sender'] ?> </td>;
				<td> <?php echo $row['Receiver'] ?> </td>;
				<td> <?php echo $row['Credits'] ?> </td>;

		</tr>

<?php

	}
}

?>


