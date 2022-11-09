<?php
include("config.php");
include("firebaseRDB.php");
echo '
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';

$db = new firebaseRDB($databaseURL);
$id = $_GET['id'];
if($id != ""){
   $delete = $db->delete("tabledata", $id);
      echo '<script>
                  setTimeout(function() {
                   swal({
                       title: "ລົບຂໍ້ມູນສຳເລັດ",
                       type: "success",
                       showConfirmButton: false,
                       timer: 1350
                   }, function() {
                       window.location = "index.php";
                   });
                 });
             </script>';
               }else{ 
      
               echo '<script>
                             setTimeout(function() {
                              swal({
                                  title: "ເກີດຂໍ້ຜິດພາດ",
                                  showConfirmButton: true,
                                  timer: 1350,
                                   text: "ກະລຸນາ ລອງໃໝ່",
                                  type: "warning"
                              }, function() {
                                  window.location = "delete.php";
                              });
                            });
                        </script>';
                           
}
