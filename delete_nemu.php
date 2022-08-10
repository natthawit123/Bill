<?php 
	include('condb.php');
	$id  = $_GET["id"];
	$projact_bill  = $_GET["projact_bill"];


	



	$sql = "DELETE FROM `add` WHERE id = '$id'";
	$check = mysqli_query($con,$sql) or die("Error in sql : $sql". mysqli_error($sql));



	

if($check){
echo "<script type='text/javascript'>";
echo "alert('ลบข้อมูลสำเร็จ');";
echo "window.location = 'Bill_editnemu.php?projact_bill=$projact_bill'; ";
echo "</script>";
}else{
echo "<script type='text/javascript'>";
echo "window.location = '.php'; ";
echo "</script>";
}
?>