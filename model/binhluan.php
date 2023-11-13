<?php 
function insert_binhluan($iduser, $idpro, $noidung,$ngaybinhluan){
    $sql = "INSERT INTO binhluan(iduser,idpro,noidung,ngaybinhluan) values('$iduser','$idpro','$noidung','$ngaybinhluan')";
    pdo_execute($sql);
}
function loadall_binhluan($idpro){
    $sql = "SELECT * FROM binhluan WHERE 1";
    if($idpro>0)
    $sql.= " AND idpro ='".$idpro."'";
    $sql.= "  order by id desc";
    $listbinhluan = pdo_query($sql);
    return $listbinhluan;
}
function delete_binhluan($id){
    $sql = "DELETE FROM binhluan WHERE id=" .$id;
    pdo_execute($sql);
}
?>