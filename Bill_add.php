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
  <div class="wrapper">
    <header class="main-header"></header>
    <!-- Left side column. contains the logo and sidebar -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>Document</h1>
      </section>
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <!-- left column -->
          <div class="col-md-9">
            <!-- general form elements -->
            <div class="box box-primary collapse1" id="show_addmember">
              <div class="box-header with-border">
                <h3 class="box-title"><b>ใบเสร็จรับเงิน/ใบกำกับภาษี</b> </h3>
                <a href="Bill_list.php" type="submit" class="btn pull-right btn-show"><i class="ion ion-clipboard"></i>&nbsp;&nbsp;กลับไปหน้ารายการ</a>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form action='Bill_add_db.php' method="POST"> 
              <div class="box-body">                  
                  <div class="form-group col-md-8">
                    <label for="exampleInputEmail1">ชื่อโครงการ</label>
                    <input type="text" class="form-control"  placeholder="ชื่อโครงการ"name="projact_bill">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">เลขที่/No</label>
                    <input type="text" class="form-control"name="no_bill">
                  </div>
                      <div class="form-group col-md-5">
                    <label for="exampleInputEmail1">ลูกค้า/หน่วยงาน</label>
                    <input type="text" class="form-control"  placeholder="ชื่อลูกค้า/หน่วยงาน"name="namecus_bill">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="exampleInputEmail1">วันที่/Date</label>
                    <input type="date" class="form-control"  placeholder="12/12/2020" name="date_bill">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">เลขประจำตัวผู้เสียภาษี</label>
                    <input type="text" class="form-control"  placeholder="" name="idtax_bill">
                  </div>
                  <div class="form-group col-md-12">
                  <label>ที่อยู่</label>
                  <textarea class="textarea form-group"  name="address_bill" placeholder="ที่อยู่ลูกค้า" style="width: 100%; height: 100px;border: 1px solid #dddddd;"></textarea>
                   </div>    
              <div class="box-footer">
                 <input type="hidden" name="id" value="">
                 <button type="submit" name="submit" href="Bill_addmenu.php?projact_bill=<?php echo $showmember['projact_bill']; ?>" class="btn btn-outline-primary margin pull-right">บันทึก</button>
                <!-- <a href="Invoice-addnemu.php" type="submit" name="submit"  class="btn btn-outline-primary margin pull-right">ดำเนินการต่อ</a> -->
             </div>
            </form>           
          </div>
        </div>
      </div>
    </section>
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