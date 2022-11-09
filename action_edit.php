<?php
include("config.php");
include("firebaseRDB.php");

$db = new firebaseRDB($databaseURL);
$id = $_POST['id'];
$update = $db->update("tabledata", $id, [
   "title"     => $_POST['title'],
   // "thumbnail" => $_POST['thumbnail'],
   "money"      => $_POST['money'],
   "remark"    => $_POST['remark']
]);

if ($update){
   echo '<script>
               setTimeout(function() {
                swal({
                    title: "ແກ້ໄຂຂໍ້ມູນສຳເລັດ",
                    type: "success",
                    showConfirmButton: false,
                    timer: 1350
                }, function() {
                    window.location = "index.php";
                });
              }, 1350);
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
                               window.location = "edit.php";
                           });
                         }, 1350);
                     </script>';
                        }