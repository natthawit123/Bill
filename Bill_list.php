<?php include('condb.php');
      include('tes.php');
$query = "SELECT COUNT(*) FROM `bill_tbl` ORDER BY `id` DESC ";
$qresult = mysqli_query($con, $query);
$showmember = mysqli_fetch_assoc($qresult);
$count = $showmember["COUNT(*)"];
$perpage = 5;
 if (isset($_GET['page'])) {
 $page = $_GET['page'];
 } else {
 $page = 1;
 }
 
 $start = ($page - 1) * $perpage;
 
 $sql = "SELECT * FROM bill_tbl limit {$start} , {$perpage} ";
 $query = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | General Form Elements</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <!-- <form action="power-of-attorney-add.html" method="POST" class="form-horizontal" enctype="multipart/form-data"></form> -->
  <div class="wrapper">
    <header class="main-header"></header>
    <!-- Left side column. contains the logo and sidebar -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>Document </h1>
       
      </section>
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <!-- left column -->
          <div class="col-md-9">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header with-border"> <i class="ion ion-clipboard"></i>
                <h3 class="box-title">Billing Note/Invoice&nbsp;<font color="#777777"><span style="font-size: 11.7px;">List</span></font>
                </h3>
               <a href="Bill_add.php"> <button type="submit" class="btn btn-primary pull-right btn-show"><i class="fa fa-plus"></i>&nbsp;&nbsp;สร้างเอกสารข้อมูล</button></a>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <?php         
					        while ($showmember = mysqli_fetch_assoc($query)) { ?>
                  <!-- start list-->
                  <div class="box box-default collapsed-box box-solid">
                    <div class="box-header with-border">
                      <div class="col-md-10"> <i class="fa fa-file-text-o"></i>&nbsp;&nbsp; <em style="font-size: 14px;">"<?php echo $showmember['projact_bill']; ?>"</em> <span>&nbsp;&nbsp;ออกเมื่อวันที่ &nbsp;&nbsp;<?php echo $showmember['date_bill']; ?></span> </div>
                      <div>
                        <button type="button" class=" btn btn-box-tool pull-right" data-widget="collapse"><i class="fa fa-plus "></i> </button>
                      </div>
                    </div>
                    <div class="box-body" style="">
                      <div class="col-md-6"> <span class="margin">
                          <label>ชื่อลูกค้า :</label> &nbsp;&nbsp;<?php echo $showmember['namecus_bill']; ?> </span><br>
                        <span class="margin">
                          <label>ที่อยู่ :</label> &nbsp;&nbsp;<?php echo $showmember['address_bill']; ?> </span><br>
                          <span class="margin">
                          <label>เลขประจำตัวผู้เสียภาษี :</label> &nbsp;&nbsp;<?php echo $showmember['idtax_bill']; ?> </span> </div>
                    <div class="col-md-6"> <span class="margin">
                          <label>เลขที่ / No :</label> &nbsp;&nbsp;<?php echo $showmember['no_bill']; ?> </span><br>
                        <span class="margin">
                          <label>วันที่ / Date :</label> &nbsp;&nbsp; <?php echo $showmember['date_bill']; ?></span><br></div>
                      <div class="col-md-6"> <span class="margin">
                          <label> DownLoad Document <label></label>
                          </label>
                        </span><br>
                        <a href="pdf2.php?id=<?php echo  $showmember['projact_bill'];?>"><span class="margin" style="color:#DD0003;"><i class="fa fa-download"></i>&nbsp;&nbsp;File Document</span></a></div>
                        <div class="box-body">
              <table class="table no-bordered">
               <tbody>
                <tr class="bg-gray">
                      <th class="col-md-1">ลำดับ</th>
                      <th class="col-md-2">รายการ</th>
                      <th class="col-md-2">วันที่ใบแจ้งหนี้/<br>ใบกำกับภาษี</th>
                      <th class="col-md-2">กำหนดชำระ</th>
                      <th class="col-md-2">จำนวนก่อน<br>ภาษีมูลค่าเพิ่ม</th>
                      <th class="col-md-2">ภาษีมูลค่าเพิ่ม</th>
                      <th class="col-md-2">จำนวนเงินรวม</th>
                      <th class="col-md-2">หมายเหตุ</th>
                </tr> 
                <?php
                    $query1 = "SELECT * FROM `add` WHERE projact_bill = '$showmember[projact_bill]' ";
                   $qresult1 = mysqli_query($con, $query1);
                   while ($showmember1 = mysqli_fetch_assoc($qresult1)) { ?>
                    <tr id='row'>
                    <td class='col-md-1'><?php echo $showmember1['item_bill']; ?></td> 
                    <td class='col-md-2'><?php echo $showmember1['list_bill']; ?></td> 
                    <td class='col-md-2'><?php echo $showmember1['bill_date']; ?></td> 
                    <td class='col-md-2'><?php echo $showmember1['payment_due']; ?></td> 
                    <td class='col-md-2'><?php echo $showmember1['vat_bill']; ?></td>
                    <td class='col-md-2'><?php echo $showmember1['vat_amount']; ?></td> 
                    <td class='col-md-2'><?php echo $showmember1['total_amount']; ?></td>
                    <td class='col-md-2'><?php echo $showmember1['note']; ?></td>
                   
                    </tr>
                   
                   
        
                    <?php }
                         
                         ?>
                 
                    
                 
              
               
                
				</tbody>
              </table>

              <table class="table no-bordered">
                <thead>
                <tr class="bg-gray">
                <th class="col-md-1"></th>
                  <th class="col-md-2"></th>
                  <th class="col-md-1"></th>
                </tr>
                </thead>
                <tbody>
                        <tr>
                        <td>
                            <label>ยอดรวมทั้งสิ้น (บาท)</label><br></td>
                            <?php
                        
                        $query1 = "SELECT * FROM `bill_total` WHERE `projact_bill`='$showmember[projact_bill]'";
                        $qresult1 = mysqli_query($con, $query1);
                        while ($showmember1 = mysqli_fetch_assoc($qresult1)){ ?>
                             <td><label><?php echo $showmember1['total_bill']; ?></label><br><br>
                        </td>
                        </tr>

                        <tr>
                        <td colspan="3"><label>ยอดรวมทั้งสิ้น(ตัวอักษร)&nbsp;&nbsp;(<?php echo  Convert($showmember1['total_bill']) ?>)</label><br></td>
                        </tr>
                        <?php }
                         
                         ?>
				</tbody>
              </table>

            </div>
                      <div class="box-footer bg-info col-md-12"> <a class="btn btn-primary  btn-xs" href="Bill_edit.php?id=<?php echo  $showmember['id'];?>"><i class="fa fa-gear">&nbsp;&nbsp;</i>แก้ไขข้อมูลเอกสาร</a> <a class="btn btn-primary  btn-xs" href="delete_form.php?id=<?php echo  $showmember['id'];?>&projact_bill=<?php echo  $showmember['projact_bill'];?>"><i class="fa  fa-trash-o" onclick="return confirm('Confirm Delete')">&nbsp;&nbsp;ลบเอกสาร</i></a> </div>
                    </div>
                  </div>
                  <?php }
                         
                         ?>
                        <div class="box-footer"> <span class="margin">
                                   <i class="fa fa-file-text-o"></i>&nbsp;&nbsp;<font color="#777777">Total Document&nbsp;<?php echo $count; ?> </font></span>
                <font color="#777777"> <span>
                  </span> </font>
              </div>
              <?php
                                $sql2 = "SELECT * FROM bill_tbl ";
                                $query2 = mysqli_query($con, $sql2);
                                $total_record = mysqli_num_rows($query2);
                                $total_page = ceil($total_record / $perpage);
                                ?>
                                
                                <nav>
                                <ul class="pagination" style="">
                                <li>
                                <a href="Bill_list.php?page=1" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                </a>
                                </li>
                                <?php for($i=1;$i<=$total_page;$i++){ ?>
                                <li><a href="Bill_list.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                                <?php } ?>
                                <li>
                                <a href="Bill_list.php?page=<?php echo $total_page;?>" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                </a>
                                </li>
                                </ul>
                                </nav>
              </div>
              <font color="#777777"> </font>
            </div>
            <font color="#777777"> </font>
          </div>
          <font color="#777777">
            <b><b>
                <!--/.col (left) -->
                <!-- right column -->
                <!--/.col (right) -->
              </b></b>
          </font>
        </div>
        <font color="#777777"><b><b>
              <!-- /.row -->
            </b></b> </font>
      </section>
      <font color="#777777"><b><b>
            <!-- /.content -->
          </b></b> </font>
    </div>
    
          <div class="control-sidebar-bg"></div>
        </b></b> </font>
  </div>
  <font color="#777777"><b><b>
        <!-- ./wrapper -->
        <!-- jQuery 3 -->
        <script src="bower_components/jquery/dist/jquery.min.js" style=""></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- FastClick -->
        <script src="bower_components/fastclick/lib/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="dist/js/demo.js"></script>
      </b></b> </font>
</body>

</html>