<?php
include("config.php");
include("firebaseRDB.php");

$db = new firebaseRDB($databaseURL);
$id = $_GET['id'];
$retrieve = $db->retrieve("tabledata/$id");
$data = json_decode($retrieve, 1);

?>


<style>
      html,body,h1,h2,h3,h4,h5,p,a,div,button{
      font-family: 'Noto Sans Lao', sans-serif;
   }
h1{
   width: 100%;
   text-align:center;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

</style>
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>ບັນທຶກທຸລະກຳ </title>
</head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Lao&display=swap" rel="stylesheet">
    <!-- bootstrap css cdn -->
    <link rel="stylesheet" type="text/css" media="screen" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" />

<div class="container">
        <div class="row">
            <div class="col-12"></br></br></br>
               <h1>ເພີ່ມຂໍ້ມູນ</h1>
                <div class="data_table">
                <form method="post" action="action_edit.php">
                    <table class="table table-striped">
                           <label for="fname"><i class="fa fa-user"></i> ຫົວຂໍ້</label></br>
                           <input type="text" name="title" value="<?php echo $data['title']?>"></br>
                           <label for="email"><i class="fa fa-envelope"></i> ຈຳນວນ</label></br>
                           <input type="text" name="money" value="<?php echo $data['money']?>"></br>
                           <label for="adr"><i class="fa fa-address-card-o"></i> ເຫດຜົນ</label></br>
                           <input type="text" name="remark" value="<?php echo $data['remark']?>"></br>
                           <input type="hidden" name="id" value="<?php echo $id?>">
                           <button class='btn btn-success'type="submit" value="SAVE">ແກ້ໄຂ</button>
                    </table>
                </div>
            </div>
        </div>
    </div>