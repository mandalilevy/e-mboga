
<?php
$con=mysqli_connect("127.0.0.1","root","","mboga");
if (!$con) {
	echo "NOT CONNECTED TO SERVER";
}
$idn=$_POST['id'];
$nm=$_POST['name'];
$em=$_POST['email'];
$ph=$_POST['cont'];
$cate=$_POST['cat'];
$ps=$_POST['pas'];
$loca=$_POST['loc'];
$sql = "INSERT INTO `register`(`idno`, `name`, `email`, `contact`,`location`, `category`, `pass`) VALUES ('$idn', '$nm', '$em','$ph', '$loca', '$cate', '$ps')";
if(mysqli_query($con, $sql)){
echo "Message Saved";
header("Location:index.php");
} 

else{
   header("Location:signup.php?Invalid= Error!! Data not Saved");
}
 

mysqli_close($con);
 ?>