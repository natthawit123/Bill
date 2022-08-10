<?php
include('condb.php');
$query = "SELECT COUNT(*) FROM `bill_tbl` ORDER BY `id` DESC ";
$qresult = mysqli_query($con, $query);
$showmember = mysqli_fetch_assoc($qresult);
$count = $showmember["COUNT(*)"];

echo $count

?>