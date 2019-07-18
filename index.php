<!DOCTYPE html>
<html>
<head>
	<title>Credit Management</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body>

	<div class="row no-gutters">
			<div class="col-md-6 no-gutters">
				
				<div class="left">
					<div>
						<h3 class="text-center bg-dark text-white">Users</h1>
						<br>
						<button id="displaydata" class="btn btn-danger">Show Users</button>
						<button id="data" class="btn btn-primary">Show Transfers</button>
						<br><br>
						<table class="table table-striped table-bordered text-center">
							<thead>
								<th>Name</th>
								<th>Email</th>
								<th>Credits</th>
							</thead>

							<tbody id="response">
								

							</tbody>
							
						</table>

					</div>

					
				</div>
			</div>

			
			
			<div class="col-md-6 no-gutters">
				<div class="right">
						<h3 class="text-center bg-light">Transfer Credits</h3>
						<div class="my">
							<div class="container mt-2">
								<div class="row">
									<div class="col-md-6 offset-md-4">
										<div class="card card-body">
											<form action="update.php" method="post">
												<div class="form-group">
													<label for="exampleInputEmail1">Email address</label>
													<input type="text" class="form-control" placeholder="Enter your email id" required name="e1">
												</div>
												<div class="form-group">
													<label for="exampleInputEmail1">Receiver's Email address</label>
													<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter receiver's email" required name="e2">
												</div>
												<div class="form-group">
													<label>Enter Credits</label>
													<input type="text" class="form-control" placeholder="Enter Credits" required name="fund">
												</div><br>
												<div class="form-group">
													<button id="displaydata" class="btn btn-primary" style="background: green;">Transfer</button>
												</div>
											</form>

										</div>
									</div>
								</div>
							</div>
						</div>
				</div>
			</div>

	</div>



	<script type="text/javascript">
				$(document).ready(function(){
				$('#displaydata').click(function(){
					$.ajax({
						url:'display.php',
						type:'post',
						success : function(responsedata){
							$('#response').html(responsedata);
						}

					});

				});
			});
	</script>
	<script type="text/javascript">
				$(document).ready(function(){
				$('#data').click(function(){
					$.ajax({
						url:'transfer.php',
						type:'post',
						success : function(responsedata){
							$('#response').html(responsedata);
						}

					});

				});
			});
	</script>


</body>
</html>