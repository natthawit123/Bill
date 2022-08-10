<?php
include('condb.php');

$projact_bill = $_GET["projact_bill"];
$query1 = "SELECT * FROM `add` WHERE `projact_bill`='$projact_bill'";
$qresult1 = mysqli_query($con, $query1);
while ($showmember1 = mysqli_fetch_assoc($qresult1)){
   
    $total += (int)$showmember1['total_amount'];
}

echo $total;



$sql = " INSERT INTO bill_total (projact_bill,total_bill) VALUES('$projact_bill','$total')";

$result = mysqli_query($con,$sql) or die("Error in sql : $sql". mysqli_error($con));

if ( $result){
    echo "<script type='text/javascript'>";
        echo "window.location='Bill_list.php'";
    echo "</script>";
    }else{
        echo "<script type='text/javascript'>";
            echo "alert('Error');";
        echo "</script>";
        }



?>