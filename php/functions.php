<?php 

require_once "c.php";

function get_all_table_data($table) {
    global $database;
    $data = $database->select($table, '*');    
    if ($data) {
        return $data;    
    } else {
        var_dump($database->error());
    }
}

function loginAdmin($username, $password)
{
    global $database;
    $a   = $database->select("SELECT * FROM user WHERE uid = ? AND pwd = ? AND status = 1");
    $r   = $a->execute(array(
        $username,
        $password
    ));
    $obj = $a->fetchObject();
    if ($obj) {
        // checkHost('admin/');
        $_SESSION['login'] = $_POST['uid'];
        die();
    }
    header("Location:http://" . HOST);
}
