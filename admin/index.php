<?php
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";
include "../model/thongke.php";
include "../model/cart.php";
include "header.php";
//contronller

if (isset($_GET['act'])) { // Kiểm tra biến trên đường dẫn act có thì kiểm tra giá trị 
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            //Kiểm tra xem người dùng có click vào nút add hay ko
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                insert_danhmuc($tenloai);
                $thongbao = "Thêm thành công";
            }
            include "danhmuc/add.php";
            break;
        case 'listdm':
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_danhmuc($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $dm = loadone_danhmuc($_GET['id']);
            }
            include "danhmuc/update.php";
            break;
        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                update_danhmuc($id, $tenloai);
                $thongbao = "Cập nhật thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
         case 'dskh':
            $listdstaikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;

        // Sản phẩm
        case 'addsp':
            //Kiểm tra xem người dùng có click vào nút add hay ko
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $luotxem = $_POST['luotxem'];
                $hinh =$_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir .basename($_FILES["hinh"]["name"]);
                if(move_uploaded_file($_FILES["hinh"]["tmp_name"],$target_file)){
                    
                }else{

                }
                insert_sanpham($tensp,$giasp,$hinh,$mota,$luotxem,$iddm);
                $thongbao = "Thêm thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/add.php";
            break;

        case 'listsp':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            }else{
                $kyw ='';   
                $iddm=0;
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham($kyw,$iddm);
            include "sanpham/list.php";
            break;

        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_sanpham($_GET['id']);
            }
            $listsanpham = loadall_sanpham();
            include "sanpham/list.php";
            break;

        case 'suasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sanpham =loadone_sanpham($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/update.php";
            break;

        case 'updatesp':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id= $_POST['id'];
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $luotxem = $_POST['luotxem'];
                $hinh =$_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir .basename($_FILES["hinh"]["name"]);
                if(move_uploaded_file($_FILES["hinh"]["tmp_name"],$target_file)){
                    
                }else{

                }
                update_sanpham($id,$iddm,$tensp,$giasp,$mota,$luotxem,$hinh);
                $thongbao = "Cập nhật thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham();
            include "sanpham/list.php";
            break;
        // Tài Khoản
        case 'suatk':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $taikhoan = loadone_taikhoan($_GET['id']);
            }
            include "taikhoan/update.php";
            break;
        case 'updatetk':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $name=$_POST['name'];
                $id = $_POST['id'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $rolo = $_POST['rolo'];
                update_taikhoan($name,$id, $user, $email, $pass, $address, $tel,$rolo);
                $thongbao = "Cập nhật thành công";
            }  
            $listdstaikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;  
        case 'listtk':
            $listdstaikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;
        case 'xoatk':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_taikhoan($_GET['id']);
            }
            $listdstaikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;   
        // BÌNH LUẬN
        case 'xoabl':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_binhluan($_GET['id']);
            }
            $listbinhluan = loadall_binhluan(0);
            include "binhluan/list.php";
            break; 
        
        case 'dsbl':
            $listbinhluan = loadall_binhluan(0);
            include "binhluan/list.php";
            break;

        // ĐƠN HÀNG
        case 'listbill':
            if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
                $kyw=$_POST['kyw'];
            }else{
                $kyw="";
            }
            $listbill=loadall_bill($kyw,0);
            include "bill/listbill.php";
            break;
        case 'xoadh':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_donhang($_GET['id']);
                }
                $listbill = loadall_bill(0);
                include "bill/listbill.php";
                break; 
        // THỐNG KÊ        
        case 'thongke':
            $listthongke=loadall_thongke();
            include "thongke/list.php";
            break; 
        case 'bieudo':
            $listthongke=loadall_thongke();
            include "thongke/bieudo.php";
            break;                          
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}



include "footer.php";


?>