<?php
$servername="localhost";
$username="root";
$password="";
$dbname="idcard";
$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
	if(isset($_POST['submit']))
	{
$roll=$_POST['roll'];
$name=$_POST['name'];
$dob=$_POST['dob'];
$addr=$_POST['address'];
$phone=$_POST['phone'];
$course=$_POST['course'];
$batch=$_POST['batch'];
// $file=$_POST['file'];
  $file = $_FILES['photo']['name'];
  $file_type = $_FILES['photo']['type'];
  $file_size = $_FILES['photo']['size'];
  $file_tem_loc = $_FILES['photo']['tmp_name'];
  $file_store = "photo/".$file;

  move_uploaded_file($file_tem_loc, $file_store);

$sql="insert into student(roll,name,dob,address,phone,course,batch,photo) values('$roll','$name','$dob','$addr','$phone','$course','$batch','$file')";

$res=mysqli_query($conn,$sql);
if($res)
{
  header("refresh: 3; url=student_form.php");
  echo "<p align=center>RECORD INSERTED SUCCESSFULLY!!l!!</p> ";
}
else
{ 
  header("refresh: 3; url=student_form.php");
echo " something went wrong !! Must be a server issue";

}
  }
}
?>