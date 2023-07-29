<html>
<body>
<?php
$conn = mysqli_connect("localhost","root","", "university");
$ID=$_REQUEST["ID"];
$Name=$_REQUEST["Name"];
$Email=$_REQUEST["Email"];
$Password=$_REQUEST["Password"];
if(!$conn)
{
die("connection failed!!");
}
$sql="INSERT INTO students(ID,Name,Email,Password)VALUES(' ".$ID." ',' ".$Name." ',' ".$Email." ',' " .$Password." ')";
  
if($conn->query($sql) === TRUE)
{
echo"success";
}else
{
echo"error";
}
?>
</body>
</html>