<?php



include('condb.php');

$projact_bill1 = $_GET["projact_bill"];
$query1 = "SELECT * FROM `add` WHERE `projact_bill`='$projact_bill1'";
$qresult1 = mysqli_query($con, $query1);
while ($showmember1 = mysqli_fetch_assoc($qresult1)){
   
    $total += (int)$showmember1['total_amount'];
}

echo $total;




$sql = " UPDATE  bill_total SET
 total_bill='$total'
 WHERE projact_bill='$projact_bill1'";

$result = mysqli_query($con,$sql) or die("Error in sql : $sql". mysqli_error($con));

if ( $result){
    echo "<script type='text/javascript'>";
        echo "window.location='kun.php?projact_bill=$projact_bill1'";
    echo "</script>";
    }else{
        echo "<script type='text/javascript'>";
            echo "alert('Error');";
        echo "</script>";
        }


// include('condb.php');

// $projact_bill1 = $_GET["projact_bill"];
// $query1 = "SELECT * FROM `add` WHERE `projact_bill`='$projact_bill1'";
// $qresult1 = mysqli_query($con, $query1);
// while ($showmember1 = mysqli_fetch_assoc($qresult1)){
   
//     $total += (int)$showmember1['total_amount'];
// }

// echo $total;


// $sql = " UPDATE  bill_total SET
// total_bill='$total'
// WHERE projact_bill='$projact_bill1'";

// $result = mysqli_query($con,$sql) or die("Error in sql : $sql". mysqli_error($con));

// if ( $result){
//     echo "<script type='text/javascript'>";
//         echo "window.location='Bill_editnemu.php?projact_bill=$projact_bill1";
//     echo "</script>";
//     }else{
//         echo "<script type='text/javascript'>";
//             echo "alert('Error');";
//         echo "</script>";
//         }



?>