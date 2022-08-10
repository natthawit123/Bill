<?php
 include('condb.php');
 include('tes.php');
 $id = $_GET["id"];
$query = "SELECT COUNT(*) FROM `add` WHERE projact_bill = '$id' ORDER BY `id` DESC ";
$qresult = mysqli_query($con, $query);
$showmember = mysqli_fetch_assoc($qresult);
$count = $showmember["COUNT(*)"];

?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<style>
    .sheet {
        width: 21cm;
        min-height: 29.7cm;
        padding-top: 1.6cm;
        padding-bottom: 1.6cm;
        padding-left: 1.4cm;
        padding-right: 1.4cm;
    }
    
    .font_pdf {
        font-size: 14px;
        font-family: 'Sarabun', sans-serif;
    }
</style>

<body class=" bg-info d-flex justify-content-center font_pdf text-dark">
    <div class="sheet bg-white">
        <table class="container-fluid">
            <tbody>
            <?php
                    $query1 = "SELECT * FROM `bill_tbl` WHERE `projact_bill`='$id' ORDER BY id asc  " or die("Error:" . mysqli_error($query));
                   $qresult1 = mysqli_query($con, $query1);
                   while ($showmember1 = mysqli_fetch_assoc($qresult1)) { ?>
                <tr>
                    <td width="20%"><img src="Logo/Logoaddpay.png" width="130px" height="auto"></td>
                    <td width="80%">
                        <p class="my-2">บริษัท แอดเพย์เซอร์วิสพอยท์ จำกัด (สำนักงานใหญ่)</p>
                        <p>406 หมู่ที่ 18 ตำบลขามใหญ่ อำเภอเมืองอุบลราชธานี จังหวัดอุบลราชธานี 34000</p>
                    </td>
                </tr>
                
            </tbody>
        </table>
        <table class="container-fluid mt-2">
            <tbody>
                <tr>
                    <td width="70%">
                        <p class="my-0">โทร 045-317123 Fax. 045-317678<br> เลขประจำตัวผู้เสียภาษีอากร 0345558001370</p>
                    </td>
                    <td width="30%" align="center" class="py-3 table-bordered">
                        <p class="my-0">ใบแจ้งหนี้ / ใบกำกับภาษี</p>
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="container-fluid mt-2  table-bordered">
            <tbody>
                <tr>
                    <td width="70%" class="p-1" valign="top">
                        <p class="mt-0"><span>ชื่อลูกค้า / Customers : </span><span><?php echo $showmember1['namecus_bill']; ?></span></p>
                        <p><span>ที่อยู่ / Address : </span><span><?php echo $showmember1['address_bill']; ?></span></p>
                        <p class="mb-0"><span>เลขประจำตัวผู้เสียภาษา : </span><span><?php echo $showmember1['idtax_bill']; ?></span></p>
                    </td>
                    <td width="30%" valign="top" class="p-1">
                        <p class="mt-0"><span>เลขที่ / No. : </span><span><?php echo $showmember1['no_bill']; ?></span></p>
                        <p><span>วันที่ / Date. : </span><span><?php echo $showmember1['date_bill']; ?></span></p>
                    </td>
                </tr>
            </tbody>
        </table>
        <?php }
                         
                         ?>
        <table class="container-fluid mt-2">
            <thead>
                <tr class="table-bordered bg-light">
                    <td width="5%" valign="top" align="center" class="p-1">
                        <p class="my-0">ลำดับ</p>
                    </td>
                    <td width="30%" valign="top" align="center" class="p-1">
                        <p class="my-0">รายการ</p>
                    </td>
                    <td width="10%" valign="top" align="center" class="p-1">
                        <p class="my-0">วันที่ใบแจ้งหนี้ / ใบกำกับภาษี</p>
                    </td>
                    <td width="10%" valign="top" align="center" class="p-1">
                        <p class="my-0">กำหนดชำระ</p>
                    </td>
                    <td width="15%" valign="top" align="center" class="p-1">
                        <p class="my-0">จำนวนก่อนภาษีมูลค่าเพิ่ม</p>
                    </td>
                    <td width="15%" valign="top" align="center" class="p-1">
                        <p class="my-0">ภาษีมูลค่าเพิ่ม</p>
                    </td>
                    <td width="15%" valign="top" align="center" class="p-1">
                        <p class="my-0">จำนวนเงินรวม</p>
                    </td>
                </tr>
            </thead>
            <tbody class="border border-bottom-1">
            <?php
                    $sql = "SELECT * FROM `add` WHERE `projact_bill`='$id'";
                    $result = mysqli_query($con, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        
                        while($showmember1 = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td width="5%" align="center" class="p-1 border border-bottom-0 border-top-0">
                        <p><?php echo $showmember1['item_bill']; ?></p>
                    </td>
                    <td width="30%" align="left" class="p-1 pl-2 border border-bottom-0 border-top-0">
                        <p><?php echo $showmember1['list_bill']; ?></p>
                    </td>
                    <td width="10%" align="center" class="p-1 border border-bottom-0 border-top-0">
                        <p><?php echo $showmember1['bill_date']; ?></p>
                    </td>
                    <td width="10%" align="center" class="p-1 border border-bottom-0 border-top-0">
                        <p><?php echo $showmember1['payment_due']; ?></p>
                    </td>
                    <td width="15%" align="right" class="p-1 pr-2 border border-bottom-0 border-top-0">
                        <p><span><?php echo $showmember1['vat_bill']; ?></span><span> -</span></p>
                    </td>
                    <td width="15%" align="right" class="p-1 pr-2 border border-bottom-0 border-top-0">
                        <p><span><?php echo $showmember1['vat_amount']; ?></span><span> -</span></p>
                    </td>
                    <td width="15%" align="right" class="p-1 pr-2 border border-bottom-0 border-top-0">
                        <p><span><?php echo $showmember1['total_amount']; ?></span><span> -</span></p>
                    </td>
                </tr>

                <?php }
                    }
                         
                         ?>

                <tr class="border">

                <?php
                    $sql = "SELECT * FROM `bill_total` WHERE `projact_bill`='$id'";
                    $result = mysqli_query($con, $sql);
                    if (mysqli_num_rows($result) > 0) {
    
                        while($showmember2 = mysqli_fetch_assoc($result)) { ?>

                    <td colspan="4" valign="middle" class="p-1 border border-top-0 border-bottom-0">
                        <p class="my-0"><span>รวมจำนวน</span><span class="ml-3"><?php echo $count; ?></span><span class="ml-3">รายการ</span></p>
                    </td>
                    <td colspan="2" valign="middle" class="p-1 border border-top-0 border-bottom-0">
                        <p class="my-0">ยอดรวมทั้งสิ้น (บาท)</p>
                    </td>
                    <td valign="middle" class="p-1 border border-top-0 border-bottom-0 pr-2">
                        <p class="my-0 float-right"><span><?php echo $showmember2['total_bill']; ?></span><span> -</span></p>
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="container-fluid mt-2">
            <tbody>
                <tr>
                    <td width="10%" valign="middle" align="center">
                        <p class="my-0">ตัวอักษร</p>
                    </td>
                    <td width="90%" valign="middle" align="center" class="p-1 border">
                        <p class="my-0">( <?php echo  Convert($showmember2['total_bill']) ?> )</p>
                    </td>
                </tr>
                <?php }
                    }
                         
                         ?>
            </tbody>
        </table>
        <table class="container-fluid mt-2">
            <tfoot class="border">
                <tr>
                    <td colspan="3" align="center" class="p-1 bg-light">
                        <p class="my-0 ml-3"><span>บัญชีธนาคาร กสิกรไทย</span><span class="my-0 ml-3">บริษัทแอดเพย์ เซอร์วิสพอยท์ จำกัด</span>
                            <span class="my-0 ml-3">เลขที่ 006-1-28582-2</span></p>
                    </td>

                </tr>
            </tfoot>
        </table>
        <table class="container-fluid mt-2">
            <tbody>
                <tr class="table-bordered">
                    <td width="27%" valign="top" align="center" class="p-1 flex-center">
                        <p class="my-0">ผู้วางบิล ( Received By )</p>
                        <br>
                        <br>
                        <p class="mb-0">ลงชื่อ ( ...................................... )</p>
                    </td>
                    <td width="28%" valign="top" align="center" class="p-1 flex-center">
                        <p class="my-0">สำหรับลูกค้า ( For Customer )</p>
                        <br>
                        <br>
                        <p class="mb-0">ลงชื่อ ( ...................................... )</p>
                    </td>
                    <td width="45%" rowspan="2" align="center" valign="top" class="p-1">
                        <p class="my-0"><span>บริษัท แอดเพย์เซอร์วิสพอยท์ จำกัด</span></p>
                        <br>
                        <br>
                        <p class="mt-0 mb-1">( .................................................. )</p>
                        <p class="my-1"><span>(นายวรกฤต ศิรธนิตรา)</span><br>
                            <span>กรรมการผู้จัดการ</span></p>
                        <p class="my-1"><span>ผู้มีอำนาจลงนาม</span></p>
                    </td>
                </tr>
                <tr class="table-bordered">
                    <td colspan="2" valign="bottom" class="p-1 flex-center">
                        <p class="mt-2 mb-1">วันที่รับวางบิล ( Received ) : .............. /................ /..................</p>
                        <p class="my-2">กำหนดชำระ ( Payment Date ) : .............. /................ /..................</p>
                        <p class="mt-2 mb-1">หมายเลขติดต่อ : ..................................................................</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>