<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ALL ORDERS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel = "icon" href = "tmt.png" type = "image/x-icon"> 
</head>
<body class="bg-light">
	<div class="container">
	<nav class="navbar bg-success">
  <div class="container-fluid">

    <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>                      
    </button>
         
        
  <div style="float: right">
  <?php 
session_start();

if (isset($_SESSION['User'])) {
	?>
	<div class="navbar-nav mr-auto float-left" style=" color: black; text-transform: uppercase;font-weight: bold;font-family: Verdana, Geneva, Tahoma, sans-serif;font-size: 16px ">
		<?php
	echo 'VENDOR:&nbsp'.$_SESSION['User'].'&nbsp&nbsp&nbsp&nbsp&nbsp';	
	?>
	</div>	
	<?php
?>
<div style="float: right">
	<?php 
	echo "\x20\x20\x20";
    echo '<a href="vendorlogout.php?logout">SIGN OUT</a>';
	 ?>
	
</div>
 <div class="card-link align-right" style="text-transform: uppercase; float: left; padding-right: 20px; padding-left: 450px;">
	 <a href="vendor_update.php" >Update Password  </a>
	 </div>
<?php
}?>
</div>
  </div>
  </div>
  </nav>
 </div>

	<center>
<div style="font-size: 25px;font-family:  Verdana, Geneva, Tahoma, sans-serif;text-transform: uppercase;color: blue">
<caption >ALL ORDERS</caption></div>
<div class="container">
	<table align="center" class="table table-bordered">

		<tr style="font-family: times new roman; color: red;font-size: 16px;text-transform: uppercase;">
			<th scope="col">Customer Name</th>
			<th scope="col">Contacts</th>
			<th scope="col">Location</th>
			<th scope="col">Product Name</th>
			<th scope="col">Price</th>
			<th scope="col">Process</th>
		</tr>
		<?php 
$con=mysqli_connect("127.0.0.1","root","","mboga");
$query=mysqli_query($con,"SELECT  * FROM `purchase`");
while ($row=mysqli_fetch_array($query)) {
	?>
		<tr  style="font-family: Verdana, Geneva, Tahoma, sans-serif; color: black">
			<td><?=$row['cname'];?></td>
			<td><?=$row['contacts'];?></td>
			<td><?=$row['location'];?></td>
			<td><?=$row['name'];?></td>
			<td><?=$row['price'];?></td>
			<td><input type="checkbox" name="chkDelete"  ></td>
		</tr>
	<?php } ?>
	</table>
	</div>
	</center>
 <script src="jquery.js"></script>
    <script type="text/javascript">
       $('input[name="chkDelete"]').click(function () {
    $(this).closest('tr').removeClass('foo');
    if ($(this).is(':checked')) $(this).closest('tr').addClass('foo');
})
    </script>
    <style>
    	.foo {
    background: aqua;
}
    </style>
</body>

