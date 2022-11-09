<?php
include("config.php");
include("firebaseRDB.php");

$db = new firebaseRDB($databaseURL);
?>

<!DOCTYPE html>
<html lang="en">
<style>
   html,body,h1,h2,h3,h4,h5,p,a,div,button{
      font-family: 'Noto Sans Lao', sans-serif;
   }
</style>
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>ບັນທຶກທຸລະກຳ </title>
     <link rel="stylesheet" href="assets/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="assets/css/datatables.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
        <!-- font  -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Lao&display=swap" rel="stylesheet">
    <!-- bootstrap css cdn -->
    <link rel="stylesheet" type="text/css" media="screen" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" />
    <!-- MDB css cdn -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.14/css/mdb.min.css" rel="stylesheet">
    <!-- sweetalert css cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.11/dist/sweetalert2.min.css">

</head>
<!-- =============== Design & Develop By = bieboy  ====================== -->
<body>
    <header class="header_part">
        <!-- <img src="assets/images/logo.png" alt="" class="img-fluid"> -->
        <h4>ລະບົບເກັບຂໍ້ມູນ</h4>
    </header>
    <!-- =======  Data-Table  = Start  ========================== -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="data_table">
                    <table id="example" class="table table-striped">
                    <a href="add.php"><button class='btn btn-success' style="color:#fff;">ເພີ່ມຂໍ້ມູນ</button></a><br><br>
                        <thead class="table-white">
                           <tr>
                              <!-- <td>Thumbnail</td> -->
                              <td>ຫົວຂໍ້</td>
                              <td>ຈຳນວນເງິນ</td>
                              <td>ເຫດຜົນ</td>
                              <td colspan="2">Action</td>
                           </tr>
   <?php
   $data = $db->retrieve("tabledata");
   $data = json_decode($data, 1);
   
   if(is_array($data)){
      foreach($data as $id => $tabledata){
         echo "<tr>
        
         <td>{$tabledata['title']}</td>
         <td>{$tabledata['money']}</td>
         <td>{$tabledata['remark']}</td>
         <td><button class='btn btn-success'>
         <a href='edit.php?id=$id'>ແກ້ໄຂ</a></button>
         <button class='btn btn-danger'>
         <a href='delete.php?id=$id'>ລົບຂໍ້ມູນ</a></button></td>
      </tr>";
      }
   }
   ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- =======  Data-Table  = End  ===================== -->
    <!-- ============ Java Script Files  ================== -->
    <Script>
      $(document).ready(function () {
    $('#example').DataTable();
});
    </Script>


    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <!-- <script src="assets/js/datatables.min.js"></script>  -->
    <script src="assets/js/pdfmake.min.js"></script>
    <script src="assets/js/vfs_fonts.js"></script>
    <script src="assets/js/custom.js"></script>
    




</body>

</html>
