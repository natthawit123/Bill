<?php
include('condb.php');
$id = $_GET[ 'id' ];
$projact_bill22 = $_GET[ 'projact_bill' ];

$projact_bill=$_POST["projact_bill"];
$no_bill=$_POST["no_bill"];
$date_bill=$_POST["date_bill"];
$namecus_bill=$_POST["namecus_bill"];
$address_bill=$_POST["address_bill"];
$idtax_bill=$_POST["idtax_bill"];

$sql = "UPDATE  bill_tbl SET 
        projact_bill='$projact_bill',
        no_bill='$no_bill',
        date_bill='$date_bill',
        namecus_bill='$namecus_bill',
        address_bill='$address_bill',
        idtax_bill='$idtax_bill'
        WHERE id=$id";
$result = mysqli_query($con,$sql) or die("Error in sql : $sql". mysqli_error($con));

$sql1 = "UPDATE  `add` SET 
projact_bill='$projact_bill'
WHERE projact_bill='$projact_bill22'";

$result1 = mysqli_query($con,$sql1) or die("Error in sql : $sql1". mysqli_error($con));

$sql2 = "UPDATE  bill_total SET 
projact_bill='$projact_bill'
WHERE projact_bill='$projact_bill22'";

$result1 = mysqli_query($con,$sql2) or die("Error in sql : $sql2". mysqli_error($con));

if ( $result1){
    echo "<script type='text/javascript'>";
        echo "window.location='Bill_editnemu.php?projact_bill=$projact_bill'";
    echo "</script>";
    }else{
        echo "<script type='text/javascript'>";
            echo "alert('Error');";
        echo "</script>";
        }


?>