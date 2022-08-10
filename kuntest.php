<?php

include('condb.php');
$projact_bill = $_GET["projact_bill"];
                   $query1 = "SELECT * FROM `add` WHERE projact_bill = '$projact_bill' ";
                   $qresult1 = mysqli_query($con, $query1);
                   while ($showmember1 = mysqli_fetch_assoc($qresult1)) {
                    $vat_amount1 = ($showmember1['vat_amount']);
                    $vat_amount = ($showmember1['vat_bill']*7)/100;
                    $total_amount1 = ($showmember1['total_amount']);
                    $total_amount = $showmember1['vat_amount']+$showmember1['vat_bill'];
                   
                    echo" 
                    <tr id='row'>
                    <td class='col-md-2'>$showmember1[id]</td> 
                    <td class='col-md-2'>$showmember1[item_bill]</td> 
                    <td class='col-md-2'>$showmember1[list_bill]</td> 
                    <td class='col-md-2'>$showmember1[bill_date]</td> 
                    <td class='col-md-2'>$showmember1[payment_due]</td> 
                    <td class='col-md-2'>$showmember1[vat_bill]</td> 
                    <td class='col-md-2'><input class='form-control' name='vat_amount[$showmember1[id]]' value='$vat_amount' ></td> 
                    <td class='col-md-2'><input class='form-control' name='total_amount[$showmember1[id]]' value='$total_amount' ></td>  
                    <td class='col-md-2'>$showmember1[note]</td>   
                    </tr>
                    <br/>";
                        $sql = "UPDATE `add` SET `vat_amount`='$vat_amount',`total_amount`='$total_amount' WHERE id=$showmember1[id]";
                        $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($sql));
                        }
                        if ($result){
                            echo "<script type='text/javascript'>";
                                echo "window.location='kuntest1.php?projact_bill=$projact_bill'";
                            echo "</script>";
                            }else{
                                echo "<script type='text/javascript'>";
                                    echo "alert('Error');";
                                echo "</script>";
                                }

                    ?>

