<?php
include('config.php');
if(isset($_POST["submit"])){
$sql = mysqli_query ($conn,'INSERT INTO register (sellername,vehicle,firstname,lastname,number,email,city,address) VALUES ("'.$_POST["sellername"].'","'.$_POST["vehicle"].'","'.$_POST["fname"].'","'.$_POST["lname"].'","'.$_POST["cno"].'","'.$_POST["email"].'","'.$_POST["city"].'","'.$_POST["address"].'")');
echo "Successfully Inserted";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>GreatDeal/Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div class="row">
    <a href="index.php"><button class="btn btn-primary">Home</button></a>
    <h2 align="center">Great Deals</h2>
    <div class="col-sm-12" style="padding-bottom:50px; padding-top:50px;">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">	
		<form method="post">
             <p>
				Car Name
				<br>
				<input type="text" name="sellername" class="form-control"></p>
             <p>
				First Name 
				<br>
				<input type="text" name="fname" class="form-control" required>
            </p>
			
            <p>
				Last Name 
				<br>
				<input type="text" name="lname" class="form-control" required>
            </p>
            <p>
				Vehicle Model
				<br>
				<input type="text" name="vehicle" class="form-control" required>
			</p>
             <p>
				Contact Number 
				<br>
				<input type="tel" pattern="^\d{3}-\d{3}-\d{4}$" name="cno" class="form-control" title ="Format 222-222-2222" required>
            </p>
             <p>
				Email 
				<br>
				<input type="email" name="email" class="form-control" required>
            </p>
            <p>
				City
				<br>
				<input type="text" name="city" class="form-control" required>
            </p>
             <p>
				Address
				<br>
				<textarea name="address" class="form-control" required>
                </textarea>
            </p>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
		</form>
    </div>
    <div class="col-sm-2"></div>
    </div>
    </div>
 </div>
</body>
</html>
