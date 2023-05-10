<?php
include('../lib/function.php');
if (isset($_GET['user_id'])) $user_id = intval($_GET['user_id']);
else $user_id = 0;

$user_info = get_a_record('danhsach', $user_id);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa c?u hỏi</title>
    <link rel="icon" href="../assets/img/Huy_Hiệu_Đoàn.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container" style="text-align: center;">
        <br>
        <h2>Edit user #<?= $user_id ?></h2>
        <form action="submit-edit.php" method="post">
            <input type="id" name="hidden" value="<?= $user_info['id'] ?>">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Họ tên</label>
                        <input required type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" name="name" value="<?= $user_info['ds_name'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword10">Đơn vị</label>
                        <input required name="donvi" type="text" class="form-control" id="exampleInputPassword1" placeholder="Nhạp don vi" value="<?= $user_info['ds_address'] ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Submitt</button>
                </div>
                <div class="col-md-6">
                    <div class="form-group mt-3 form-check">
                        <label class="form-check-label" for="exampleCheck1">Câu h i</label><br>
                        <textarea required name="desc" id="exampleCheck1" cols="70" rows="6"><?= $user_info['ds_desc'] ?></textarea>
                    </div>
                </div>

        </form>
    </div>
</body>

</html>