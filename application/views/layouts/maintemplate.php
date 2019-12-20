<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo $title ?> E-Parking | Politeknik Negeri Malang</title>

  <?php $this->load->view('part/'.$headers); ?>
  <style>
    body{
      background-image: url(<?php echo base_url('image/polinemos.jpg')?>);
      height: 600px;
      width: 800px;
    }
    .btn_style{
      border: 1px solid #cecece;
      border-radius: 3px;
      padding: 3px 10px;
      box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.4);
      color: white;
      background-color: purple;
    }
    .btn_style:hover{
      border: 1px solid #b1b1b1;
      box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    }
  </style>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  
      <!-- Content Wrapper -->
   

      <!-- Main Content -->
      


        <!-- Begin Page Content -->
        

          <?php $this->load->view($contents); ?>
          
        
        <!-- /.container-fluid -->

      <!-- End of Main Content -->
    
    <!-- End of Content Wrapper -->

  
  <!-- End of Page Wrapper -->

<?php $this->load->view('part/'.$footers); ?>

</body>

</html>
