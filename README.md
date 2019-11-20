# SENG8040FinalAssignment4

<?php
include('config.php');
$id = base64_decode($_REQUEST['id']);
$query = mysqli_query($conn,"SELECT * FROM register where id = '".$id."'") or die(mysql_error());
$result = mysqli_fetch_array($query,MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>GreatDeal/View</title>
       <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <style>
		.editPage
{
	margin: 0 auto;
	width: 960px;
	border: 2px solid #ccc;
	padding: 20px;
}

.editButton
{
	padding: 12px 20px;
	background: tomato;
}

.submitButton
{
	background: mediumseagreen;
	padding: 12px 20px;
}
		</style>
	</head>
	<body>
		<main class="editPage">
			<h2 class="welcomeMessage">Hi! Welcome back <span><?php echo $result['firstname']?> </span></h2>
            
            
			<p>Car Name : <span><?php echo $result['sellername']?></span></p>
            <p>First Name : <span><?php echo $result['firstname']?></span></p>
			<p>Last name : <span><?php echo $result['lastname']?></span></p>
			<p>Vehicle Model: <span><?php echo $result['vehicle']?></span></p>
			<p>Email ID : <span><?php echo $result['email']?></span></p>
            <p>City : <span><?php echo $result['city']?></span></p>
			<p>Address : <span><?php echo $result['address']?></span></p>
			<p>Contact Number : <span><?php echo $result['number']?></span></p>
			<a href="edit.php?id=<?php echo $result['id']; ?>"><button class="btn btn-success">Edit</button></a>
            <a href="login.php"><button class="btn btn-danger">Exit</button></a>
		</main>		
	</body>
</html>
