<?php 
	include('condb.php');
	$id  = $_GET["id"];
	$projact_bill22  = $_GET["projact_bill"];


	$sql = "DELETE FROM `bill_tbl` WHERE projact_bill = '$projact_bill22'";
	$check = mysqli_query($con,$sql) or die("Error in sql : $sql". mysqli_error($sql));
	



	$sql = "DELETE FROM `add` WHERE projact_bill = '$projact_bill22'";
	$check = mysqli_query($con,$sql) or die("Error in sql : $sql". mysqli_error($sql));


    $sql = "DELETE FROM `bill_total` WHERE projact_bill = '$projact_bill22'";
	$check = mysqli_query($con,$sql) or die("Error in sql : $sql". mysqli_error($sql));

	// $sql = "DELETE FROM invoice WHERE projact_invoice=$projact_invoice22";
	// $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($sql));	
	// mysqli_close($con);
	
	
	// $sql = "DELETE FROM add1 WHERE projact_invoice=$projact_invoice22";
	// $result1 = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($sql));	
	// mysqli_close($con);

	

if($check){
echo "<script type='text/javascript'>";
echo "alert('ลบข้อมูลสำเร็จ');";
echo "window.location = 'Bill_list.php'; ";
echo "</script>";
}else{
echo "<script type='text/javascript'>";
echo "window.location = 'Bill_list.php'; ";
echo "</script>";
}
?>