<?php
include('condb.php');
$id = $_GET[ 'id' ];
$projact_bill = $_GET[ 'projact_bill' ];

foreach($_POST['item_bill']  as $item=>$value){
    $sql = "UPDATE `add` SET `item_bill`='$value' WHERE id=$item";
    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($sql));
    //แสดงผลลัพธ์การอัพเดท
    echo $sql;
    echo '<hr>';
    }
foreach($_POST['list_bill']  as $item=>$value){
        $sql = "UPDATE `add` SET `list_bill`='$value' WHERE id=$item";
        $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($sql));
        //แสดงผลลัพธ์การอัพเดท
        echo $sql;
        echo '<hr>';
        }
foreach($_POST['bill_date']  as $item=>$value){
            $sql = "UPDATE `add` SET `bill_date`='$value' WHERE id=$item";
            $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($sql));
            //แสดงผลลัพธ์การอัพเดท
            echo $sql;
            echo '<hr>';
            }
foreach($_POST['payment_due']  as $item=>$value){
                $sql = "UPDATE `add` SET `payment_due`='$value' WHERE id=$item";
                $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($sql));
                //แสดงผลลัพธ์การอัพเดท
                echo $sql;
                echo '<hr>';
                }
foreach($_POST['vat_bill']  as $item=>$value){
                    $sql = "UPDATE `add` SET `vat_bill`='$value' WHERE id=$item";
                    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($sql));
                    //แสดงผลลัพธ์การอัพเดท
                    echo $sql;
                    echo '<hr>';
                    }
foreach($_POST['vat_amount']  as $item=>$value){
                    $sql = "UPDATE `add` SET `vat_amount`='$value' WHERE id=$item";
                    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($sql));
                    //แสดงผลลัพธ์การอัพเดท
                    echo $sql;
                    echo '<hr>';
                    }
foreach($_POST['total_amount']  as $item=>$value){
                    $sql = "UPDATE `add` SET `total_amount`='$value' WHERE id=$item";
                    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($sql));
                    //แสดงผลลัพธ์การอัพเดท
                    echo $sql;
                    echo '<hr>';
                    }
foreach($_POST['note']  as $item=>$value){
                    $sql = "UPDATE `add` SET `note`='$value' WHERE id=$item";
                    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($sql));
                    //แสดงผลลัพธ์การอัพเดท
                    echo $sql;
                    echo '<hr>';
                    }
        
    

$result = mysqli_query($con,$sql) or die("Error in sql : $sql". mysqli_error($con));

if ( $result){
    echo "<script type='text/javascript'>";
        echo "window.location='updatekuntest.php?projact_bill=$projact_bill'";
    echo "</script>";
    }else{
        echo "<script type='text/javascript'>";
            echo "alert('Error');";
        echo "</script>";
        }


?>