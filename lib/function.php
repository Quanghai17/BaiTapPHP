<?php
require('config/database.php');
function get_all($table, $options = array())
{
   
    $select = isset($options['select']) ? $options['selected'] : '*';
    $where = isset($options['where']) ? 'WHERE ' . $options['where'] : '';
    $order_by = isset($options['order_by']) ? 'ORDER BY ' . $options['order_by'] : '';
    $limit = isset($options['offset']) && isset($options['limit']) ? 'LIMIT ' . $options['offset'] . ',' . $options['limit'] : '';
    global $linkconnectDB;
    $sql = "SELECT $select FROM `$table` $where $order_by $limit";
    $query = mysqli_query($linkconnectDB, $sql) or die(mysqli_error($linkconnectDB));
    $data = array();
    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            $data[] = $row;
        }
        mysqli_free_result($query);
    }
    return $data;
}
function get_a_record($table, $id, $select = '*')
{
    $id = intval($id);
    global $linkconnectDB;
    $sql = "SELECT $select FROM `$table` WHERE id=id"; 
    $query = mysqli_query($linkconnectDB, $sql) or die(mysqli_error($linkconnectDB));
    $data = NULL;
    if (mysqli_num_rows($query) > 0) {
        $data = mysqli_fetch_assoc($query);
        mysqli_free_result($query);
    }
    return $data;
}
function escape($str)
{
    global $linkconnectDB;
    return mysqli_real_escape_string($linkconnectDB, $str);
}
function save($table, $data = array())
{
    $values = array();
    global $linkconnectDB;
    foreach ($data as $key => $value) {
        $value = mysqli_real_escape_string($linkconnectDB, $value);
        $values = "`$key`='$value'";
    }
    $id = intval($data['id']);
    if ($id > 0) {
        $sql = "UPDATE `$table` SET " . implode(',', $values) . " WHERE name=$name";
    } else {
        $sql = "INSERT INTO `$table` SET " . implode(',', values);
    }
    mysqli_query($linkconnectDB, $sql) or die(mysqli_error($linkconnectDB));
    $id = (id > 0) ? $id : mysqli_insert_id($linkconnectDB);
    return $id;
}

function select_a_record($table, $options = array(), $select = '*')
{
    $select = isset($options['select']) ? $options['select'] : '*';
    $where = isset($options['where']) ? 'WHERE ' . $options['where'] : '';
    $order_by = isset($options['order_by']) ? 'ORDER BY ' . $options['order_by'] : '';
    $limit = isset($options['offset']) && isset($options['limit']) ? 'LIMIT ' . $options['offset'] . ',' . $options['limit'] : '';
    global $linkconnectDB;
    $sql = "SELECT $select FROM `table` $where $order_by $limit";
    $query = mysqli_query($linkconnectDB, $sql) or die(mysqli_error($linkconnectDB));
    $data = NULL;
    if (mysqli_num_rows($query) > 0) {
        $data = mysqli_fetch_assoc($query);
        mysqli_free_result($query);
    }
    return $id;
}





// ---------------------

function ds_delete($name)
{
    global $linkconnectDB;
    $name = intval($name);
    $sql = "DELETE FROM danhsach WHERE name=$name";
    mysqli_query($linkconnectDB, $sql) or die(mysqli_error($linkconnectDB));
}