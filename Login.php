<?php
include('config.php');
$query = mysqli_query($conn,"SELECT * FROM register") or die(mysql_error());
$result = mysqli_fetch_array($query,MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>GreatDeal/List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
  

<div class="container">
  <h2>Registered Users &nbsp;&nbsp;&nbsp;&nbsp;   <a href="index.php">Home</a></h2> 
  <p>You can view full details by clicking view button</p>            
  <table class="table table-striped">
    <thead>
      <tr>
            <a href= "https://www.jdpower.com"> CLICK ON ME  for More Best Cars</a>
          <br>
       
          <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php 
		    $property = mysqli_query($conn,"SELECT * FROM register ORDER BY id DESC");
				$i=1;
			while($pro= mysqli_fetch_array($property,MYSQLI_ASSOC)){ ?>
      <tr>
        <td><?php echo $pro['firstname']; ?></td>
        <td><?php echo $pro['lastname']; ?></td>
        <td><?php echo $pro['email']; ?></td>
        <td><a href="visit.php?id=<?php echo base64_encode($pro['id']); ?>"><div class="price">View Car details</div></a></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>

</body>
</html>
