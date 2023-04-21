<?php
include "util.php";

function checkpass($login, $pass){
    global $sql;
    $hash = password_hash($pass , PASSWORD_DEFAULT);
    $q = "SELECT * FROM TABLE users WHERE login='$login' AND hash='$hash';";
    $res = $sql->query($q);
    return $res->num_rows > 0;
}
?>