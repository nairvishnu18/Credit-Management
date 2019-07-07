<?php

$conn = mysqli_connect("localhost","root","","credit_manage");
$mail1 = $_POST['e1'];
$mail2 = $_POST['e2'];
$cr = $_POST['fund'];

if(!is_numeric($cr) || strpos($cr, '-')!==false)
{
		echo " <script>alert('Invalid Credit to Tranfer');window.location='users.php';</script> ";
}
else
{


		$sql = "SELECT Name, email,Credit from user where email='".$mail1."' ";
		$res = mysqli_query($conn,$sql);
		if(mysqli_num_rows($res))
		{
			$query = " SELECT Name,email, Credit from user where email='".$mail2."' ";
			$q = mysqli_query($conn,$query);
			if(mysqli_num_rows($q))
			{
				while ($row=mysqli_fetch_assoc($q))
				{
					$S_upd = "UPDATE user SET Credit=Credit + ' ".$cr."' where email= '".$mail2."'  ";
					$exe = mysqli_query($conn,$S_upd);
					$R_upd = "UPDATE user SET Credit=Credit - ' ".$cr."' where email= '".$mail1."'  ";
					$run = mysqli_query($conn,$R_upd);
					$transfer = "INSERT INTO transfers VALUES ('".$mail1."','".$mail2."','".$cr."') ";
					$t_upd= mysqli_query($conn,$transfer);
					echo"
					<script>
					alert('Credited Successfully !!! Tranfer Recorded');
					window.location='users.php';
					</script>";

						
			?>

					
		<?php
				}
			}
			else 
				echo "<script>alert('Credit Unsuccessful!!! User Does not Exist !!');window.location='users.php';   ";
			
		}
		else
			echo "<script> alert('Invalid User id or email !!!');window.location='users.php';</script>";
		
}

?>