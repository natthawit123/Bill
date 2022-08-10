<?php
 include('condb.php');
 include('tes.php');
 $id = $_GET["id"];
$query = "SELECT COUNT(*) FROM `add` WHERE projact_bill = '$id' ORDER BY `id` DESC ";
$qresult = mysqli_query($con, $query);
$showmember = mysqli_fetch_assoc($qresult);
$count = $showmember["COUNT(*)"];

?>
<?php

require_once __DIR__ . '/vendor/autoload.php';

//custom font
$defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
$fontDirs = $defaultConfig['fontDir'];

$defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
$fontData = $defaultFontConfig['fontdata'];

$mpdf = new \Mpdf\Mpdf([
    'fontDir' => array_merge($fontDirs, [
        __DIR__ . '/fonts',
    ]),
    'fontdata' => $fontData + [
            'sarabun' => [
                'R' => 'THSarabunNew.ttf',
                'I' => 'THSarabunNew Italic.ttf',
                'B' =>  'THSarabunNew Bold.ttf',
            ]
        ],
        'default_font' => 'sarabun'
]);
$id = $_GET["id"];
$query = "SELECT * FROM bill_tbl WHERE `projact_bill`='$id' ORDER BY id asc  " or die("Error:" . mysqli_error($query)); 
$result = mysqli_query($con, $query); 
while($showmember = mysqli_fetch_array($result)) { 
$head = '
<DD><img src="Logo/Logoaddpay.png" alt="Flowers in Chania" width="100" height="50" align="Left"></DD>
<b>บริษัท แอดเพย์ เซอร์วิสพอยท์ จำกัด (สำนักงานใหญ่)</b><br>
<b> 406 หมู่ 18 ตำบลขามใหญ่ อำเภอเมือง จังหวัดอุบลราชธานี 34000</b><br>
<b> โทร 045-317123 Fax. 045-317678</b><br>
<b> เลขประจำตัวผู้เสียภาษีอากร  0 3455 58001 37 0</b><br>
<table align = "right" style="width: 35%; border:1px solid; border-collapse: collapse; padding: 0; margin: 0;">
    <tr style="border-bottom: 1px solid;">
        <th style="border-left: 1px solid; width: 35%; height: 50px;">ใบแจ้งหนี้/ใบวางบิล</th>
    </tr>   
</table>

<b>&nbsp;&nbsp; เรียน แผนกบัญชีและการเงิน</b>

<table style="width: 100%; border:1px solid; border-collapse: collapse; padding: 0; margin: 0;">
    <tr style="border-bottom: 1px solid;">
        <th align = "left"  style="border-left: 1px solid; width: 65%;">
            <label>ชื่อลูกค้า / Customers :</label> &nbsp;&nbsp;'.$showmember['namecus_bill'].'<br>
            <label>ที่อยู่ / Address :</label> &nbsp;&nbsp;'.$showmember['address_bill'].'<br><br>
            <label>เลขประจำตัวผู้เสียภาษี :</label> &nbsp;&nbsp;'.$showmember['idtax_bill'].'
        <th VALIGN = "TOP" align = "left" style="border-left: 1px solid; width: 35%;">
            <label>เลขที่ / No.</label> &nbsp;&nbsp;'.$showmember['no_bill'].'<br>
            <label>วันที่ / Date.</label> &nbsp;&nbsp;'.$showmember['date_bill'].'</th>
    </tr>
    
    
</table>


<b>ได้รับวางบิลจาก บริษัท แอดเพย์ เซอร์วิสพอยท์ จำกัด ตามรายการต่อไปนี้</b>

<table style="width: 100%; border:1px solid; border-collapse: collapse; padding: 0; margin: 0;">
    <tr style="border:1px solid; border-collapse: collapse; padding: 0; margin: 0;">
        <th style="border-left: 1px solid; width: 10%;">ลำดับที่<br>Item</th>
        <th style="border-left: 1px solid; width: 30%;">รายการ<br>Order</th>
        <th style="border-left: 1px solid; width: 10%;">วันที่ใบแจ้งหนี้/<br>ใบกำกับภาษี<br>Invoice Date</th>
        <th style="border-left: 1px solid; width: 10%;">กำหนดชำระ<br>Due Date</th>
        <th style="border-left: 1px solid; width: 10%;">จำนวนก่อน<br>ภาษีมูลเพิ่ม<br>Amount</th>
        <th style="border-left: 1px solid; width: 10%;">ภาษีมูลค่าเพิ่ม<br>Vat</th>
        <th style="border-left: 1px solid; width: 10%;">จำนวนเงินรวม<br>Total Amount</th>
        <th style="border-left: 1px solid; width: 10%;">หมายเหตุ<br>Remark</th>
    </tr>   
    ';
}

$sql = "SELECT * FROM `add` WHERE `projact_bill`='$id'";
$result = mysqli_query($con, $sql);
$content = "";
if (mysqli_num_rows($result) > 0) {
    
    while($showmember1 = mysqli_fetch_assoc($result)) {
        $content .= ' <tr>
        <td VALIGN = "TOP" style="border-left: 1px solid;" align = "center">'.$showmember1['item_bill'].'</td>
        <td VALIGN = "TOP" style="border-left: 1px solid;">&nbsp;&nbsp;'.$showmember1['list_bill'].'</td>
        <td VALIGN = "TOP" style="border-left: 1px solid;" align = "center">'.$showmember1['bill_date'].'</td>
        <td VALIGN = "TOP" style="border-left: 1px solid;" align = "center">'.$showmember1['payment_due'].'</td>
        <td VALIGN = "TOP" style="border-left: 1px solid;" align = "center">'.$showmember1['vat_bill'].'</td>
        <td VALIGN = "TOP" style="border-left: 1px solid;" align = "center">'.$showmember1['vat_amount'].'</td>
        <td VALIGN = "TOP" style="border-left: 1px solid;" align = "center">'.$showmember1['total_amount'].'</td>
        <td VALIGN = "TOP" style="border-left: 1px solid;" align = "center">'.$showmember1['note'].'</td>
        
  </tr>';
      
    }
}

$head1 = ' ';
$sql = "SELECT * FROM `bill_total` WHERE `projact_bill`='$id'";
$result = mysqli_query($con, $sql);
$content1 = "";
if (mysqli_num_rows($result) > 0) {
    
    while($showmember2 = mysqli_fetch_assoc($result)) {

        $content1 .= ' 
        <tr>
        <td VALIGN = "TOP" style="border-left: 1px solid; height: 80px;" align = "center"></td>
        <td VALIGN = "TOP" style="border-left: 1px solid; height: 80px;" align = "center"></td>
        <td VALIGN = "TOP" style="border-left: 1px solid; height: 80px;" align = "center"></td>
        <td VALIGN = "TOP" style="border-left: 1px solid; height: 80px;" align = "center"></td>
        <td VALIGN = "TOP" style="border-left: 1px solid; height: 80px;" align = "center"></td> 
        <td VALIGN = "TOP" style="border-left: 1px solid; height: 80px;" align = "center"></td>
        <td VALIGN = "TOP" style="border-left: 1px solid; height: 80px;" align = "center"></td>
        <td VALIGN = "TOP" style="border-left: 1px solid; height: 80px;" align = "center"></td> 
        </tr>
        <tr>
        <td VALIGN = "TOP" style="border-left: 1px solid; height: 80px;" align = "center"></td>
        <td VALIGN = "TOP" style="border-left: 1px solid; height: 80px;">โดย บัญชีธนาคารไทยพาณิชย์ สาขาสุนีย์ทาวเวอร์<br>เลขที่บัญชี 917-2-15401-4</td>
        <td VALIGN = "TOP" style="border-left: 1px solid; height: 80px;" align = "center"></td>
        <td VALIGN = "TOP" style="border-left: 1px solid; height: 80px;" align = "center"></td>
        <td VALIGN = "TOP" style="border-left: 1px solid; height: 80px;" align = "center"></td>
        <td VALIGN = "TOP" style="border-left: 1px solid; height: 80px;" align = "center"></td>
        <td VALIGN = "TOP" style="border-left: 1px solid; height: 80px;" align = "center"></td>
        <td VALIGN = "TOP" style="border-left: 1px solid; height: 80px;" align = "center"></td> 
        </tr>
        <tr style="border:1px solid; border-collapse: collapse; padding: 0; margin: 0; height: 80px;">
        <td style="width: 100%; border:1px solid; border-collapse: collapse; padding: 0; margin: 0; height: 80px;" VALIGN = "TOP" ROWSPAN = "2" colspan = "4"><label>&nbsp;&nbsp;รวม</label> &nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp; '.$count.' &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<label>รายการ</label><br>
            <label>&nbsp;&nbsp;ตัวอักษร</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'. Convert($showmember2['total_bill']).'
            </td> 
        <td style="border-left: 0px solid; height: 80px;" align = "center" colspan = "2">ยอดรวมทั้งสิ้น (บาท)</td>
        <td style="border-left: 1px solid; height: 80px;" align = "center">'.$showmember2['total_bill'].'</td>

    </tr>

    </table>
    <b>ข้าพเจ้าได้รับวางบิลตามรายการข้างต้นเรียบร้อยแล้ว</b>
    
';
      
    }
}







$head2 = ' ';
$content2 = "";
        $content2 .= '
<table style="width: 100%; border:1px solid; border-collapse: collapse; padding: 0; margin: 0; ">
  <tr>
    <th align = "left" VALIGN = "TOP" style=" width: 50%; border:1px solid; border-collapse: collapse; padding: 0; margin: 0; height: 100px;">&nbsp;&nbsp;ผู้รับวางบิล (Received By)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สำหรับลูกค้า (For Customer)<br><br><br>
        &nbsp;&nbsp;(.........................................)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(...............................................)<br>
        &nbsp;&nbsp;วันที่รับวางบิล (Received Date)&nbsp;.............../.............../...............<br>
        &nbsp;&nbsp;กำหนดชำระ (Payment Date)&nbsp;&nbsp;&nbsp;.............../.............../...............<br>
        &nbsp;&nbsp;เบอร์ติดต่อ</th>
    <th  align = "left" VALIGN = "TOP" style=" width: 50%; border:1px solid; border-collapse: collapse; padding: 0; margin: 0; height: 100px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ผู้วางบิล<br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(นางสาวศิริมาเมธ์วดี ศิรธนิตรา)<br><br>
        &nbsp;&nbsp;ติดต่อเรา Tel 058-4964855 <br>
        &nbsp;&nbsp;สอบถามเพิ่มเติมเรื่องการชำระเงินกรุณาติดต่อ<br>
        &nbsp;&nbsp;เจ้าหน้าที่ : คุณจิติรัตร์ 045-317123</th>
  </tr>
  
</table>

        ';

$mpdf->WriteHTML($head);
$mpdf->WriteHTML($content);
$mpdf->WriteHTML($content1);
$mpdf->WriteHTML($content2);
$mpdf->WriteHTML($head1);
$mpdf->WriteHTML($head2);

mysqli_close($con);
$mpdf->Output();
?>