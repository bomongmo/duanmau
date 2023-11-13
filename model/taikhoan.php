<?php
function insert_taikhoan($email, $user, $pass, )
{
    $sql = "insert into taikhoan(email,user,pass) values('$email','$user','$pass')";
    pdo_execute($sql);
}

function check_user($user, $pass)
{
    $sql = "select * from taikhoan where user='" . $user . "' AND pass='" . $pass . "' ";
    $sp = pdo_query_one($sql);
    return $sp;
}

function update_taikhoan($name,$id, $user, $email, $pass, $address, $tel,$rolo)
{
    $sql = "update  taikhoan set name='".$name."', user='" . $user . "', email='" . $email . "', pass='" . $pass . "', address='" . $address  . "', tel='" . $tel . "',rolo='" . $rolo . "'  WHERE id=" . $id;
    pdo_execute($sql);
}

function checkemail( $email)
{
    $sql = "select * from taikhoan where email='" . $email . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function loadall_taikhoan(){
    $sql = "SELECT * FROM taikhoan order by id desc";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}

function delete_taikhoan($id)
{
    $sql = "delete from taikhoan where id=" . $id;
    pdo_execute($sql);
}
function loadone_taikhoan($id){
    $sql = "SELECT * FROM taikhoan WHERE id=".$id; 
    $taikhoan=pdo_query_one($sql);
    return $taikhoan;
}
?>