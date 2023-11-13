<?php
// thêm sản phẩm
function insert_sanpham($tensp, $giasp, $hinh, $mota, $luotxem, $iddm)
{
    $sql = "insert into sanpham(name,price,img,mota,luotxem,iddm) values('$tensp','$giasp','$hinh','$mota','$luotxem','$iddm')";
    pdo_execute($sql);
}
// Xóa sản phẩm
function delete_sanpham($id)
{
    $sql = "delete from sanpham where id=" . $id;
    pdo_execute($sql);
}
// Load sản phẩm lên trang chủ
function loadall_sanpham_home()
{
    $sql = "select * from sanpham where 1 order by id desc limit 0,9";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
// Load sản phẩm lên top 10 sản phẩm
function loadall_sanpham_top10()
{
    $sql = "select * from sanpham where 1 order by luotxem desc limit 0,10";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
// Load sản phẩm theo danh mục
function loadall_sanpham($kyw = "", $iddm = 0)
{
    $sql = "select * from sanpham where 1";
    if ($kyw != "") {
        $sql .= " and name like '%" . $kyw . "%' ";
    }
    if ($iddm > 0) {
        $sql .= " and iddm = '" . $iddm . "'";
    }

    $sql .= " order by id desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
// Load tên danh mục theo sản phẩm
function load_tendanhmuc($iddm){
    if($iddm>0){
        $sql = "select * from danhmuc where id=" . $iddm;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $name;
    }else{
        return "";
    }
}
function loadone_sanpham($id)
{
    $sql = "select * from sanpham where id=" . $id;
    $sp = pdo_query_one($sql);
    return $sp;
}
function load_sanpham_cungloai($id,$iddm)
{
    $sql = "select * from sanpham where iddm=".$iddm." and id <> " . $id;
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function update_sanpham($id, $iddm, $tensp, $giasp, $mota, $luotxem, $hinh)
{
    if ($hinh != "")
        $sql = "update  sanpham set iddm='" . $iddm . "',name='" . $tensp . "', price='" . $giasp . "', mota='" . $mota . "', luotxem='" . $luotxem . "', img='" . $hinh . "' WHERE id=" . $id;
    else
        $sql = "update  sanpham set iddm='" . $iddm . "',name='" . $tensp . "', price='" . $giasp . "', mota='" . $mota . "', luotxem='" . $luotxem . "'  WHERE id=" . $id;
    pdo_execute($sql);
}
?>