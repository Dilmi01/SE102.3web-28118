html>
<body>
<?php

$fname= $_REQUEST['firstname'];
$lname= $_REQUEST['lastname'];
$uname= $_REQUEST['username'];
$pssword= $_REQUEST['password'];
$gen= $_REQUEST['gender'];
$acdyear= $_REQUEST['acedamicyear'];
$email= $_REQUEST['email'];
$phn= $_REQUEST['phone'];

?>
<table border="1">
 <tr>
<td>first name:</td>
<td><?php echo $fname ?></td>
</tr>

<tr>
<td>last name:</td>
<td><?php echo $lname ?></td>
</tr>

<tr>
<td>user name:</td>
<td><?php echo $uname ?></td>
</tr>

<tr>
<td>password:</td>
<td><?php echo $pssword ?></td>
</tr>

<tr>
<td>gender:</td>
<td><?php echo $gen ?></td>
</tr>

<tr>
<td>academicyear:</td>
<td><?php echo $acdyear ?></td>
</tr>

<tr>
<td>phoneno:</td>
<td><?php echo $phn ?></td>
</tr>


</table>

</body>
</html>