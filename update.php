<?php

 
$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "test"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
$admno="admno";
$image="image name";
if(isset($_POST['but_fetch'])){
$admno=$_POST['admno'];
$sql = "select * from images where id=$admno";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
$admno=$row['id'];
$image = $row['name'];
}

if(isset($_POST['but_upload'])){
$admnou=$_POST['admnou'];
$nameu=$_POST['nameu'];
$query = "update images set id='".$admnou."',name='".$nameu."' where id=$admnou";
mysqli_query($con,$query);
}
?>
<form method='post'>
	<input type='NUMBER' name='admno'>
	<input type='submit' name='but_fetch'>
</form>


<form method="post" >
	<input type="text" value=<?php echo $admno;?> name="admnou">
	<input type="text" value=<?php echo $image;?> name="nameu">
	<input type='submit' value='Save name' name='but_upload'>
</form>
