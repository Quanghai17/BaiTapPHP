<?php
include('../lib/function.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhập câu hỏi</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" href="../assets/img/Huy_Hiệu_Đoàn.png" type="image/gif" sizes="16x16">
</head>

<body>
    <div class="container" style="text-align: center;">
        <br>
        <h2>Add user</h2>
        <br>
        <hr>

        <form action="add-infor.php" method="post">
            <input type="hidden" name="id" value="0">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Đơn vị</label>
                        <input required type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập họ tên" name="ds_name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Họ tên</label>
                        <input required name="ds_address" type="texted" class="form-control" id="exampleInputPassword1" placeholder="Nhập đơn vị">
                    </div>
                    <div class="form-group" style="text-align: center;">
                        <button style="text-align: center;" type="return" class="btn btn-primary">Gửi câu h?i</button>
                        <a style="text-align: center;" href="list.php" class="btn btn-primary">Danh s?ch câu h?i</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-check">
                        <label class="form-check-label" for="examplelyCheck1">Câu TL</label><br>
                        <textarea required name="ds_descation" id="examplelyCheck1" cols="70" rows="6"></textarea>
                    </div>
                </div>
        </form>
    </div>
    </div>
</body>

</html>