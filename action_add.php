<?php

include("config.php");
include("firebaseRDB.php");
echo '
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';

$db = new firebaseRDB($databaseURL);

$insert = $db->insert("tabledata", [
   "title"     => $_POST['title'],
   // "thumbnail" => $_POST['thumbnail'],
   "money"      => $_POST['money'],
   "remark"    => $_POST['remark']
]);
if ($insert){
echo '<script>
            setTimeout(function() {
             swal({
                 title: "ເພີ່ມຂໍ້ມູນສຳເລັດ",
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
                            window.location = "add.php";
                        });
                      });
                  </script>';
                     }
