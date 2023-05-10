<?php
include('../lib/function.php');

$add_data = array(
    'id' => intval($_POST['id']),
    'ds_name' => escape($_POST['name']),
    'ds_address' => escape($_POST['donvi']),
    'ds_desc' => escape($_POST['desc'])
);
save('danhsach', $add_data);

header('location:list.php');
