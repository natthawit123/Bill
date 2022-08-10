<?php
include('condb.php');

$projact_bill=$_POST["projact_bill"];
$no_bill=$_POST["no_bill"];
$date_bill=$_POST["date_bill"];
$namecus_bill=$_POST["namecus_bill"];
$address_bill=$_POST["address_bill"];
$idtax_bill=$_POST["idtax_bill"];

$sql = " INSERT INTO bill_tbl (projact_bill,no_bill,date_bill,namecus_bill,address_bill,
    idtax_bill) 
    VALUES('$projact_bill','$no_bill','$date_bill','$namecus_bill','$address_bill',
    '$idtax_bill')";

$result = mysqli_query($con,$sql) or die("Error in sql : $sql". mysqli_error($con));

if ( $result){
    echo "<script type='text/javascript'>";
        echo "window.location='Bill_addmenu.php?projact_bill=$projact_bill'";
    echo "</script>";
    }else{
        echo "<script type='text/javascript'>";
            echo "alert('Error');";
        echo "</script>";
        }


?>