<?php
include('../lib/function.php');
$user_id = intval($_GET['user_id']);
global $user_nav;
ds_delete($user_id);
header('location:list.php');