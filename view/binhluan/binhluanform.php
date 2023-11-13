<?php 
        session_start();
        include "../../model/pdo.php";
        include "../../model/binhluan.php";
        $idpro=$_REQUEST['idpro'];
        $dsbl=loadall_binhluan($idpro);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="row mb ">

        
        <div class="boxtitle">BÌNH LUẬN</div>
       <div class="boxcontent2 binhluan ">
        <table>
                            <?php   
                                foreach($dsbl as $binhluan){
                                extract($binhluan);
                                echo '<tr><td> '.$noidung.' </td> ';
                                echo '<td> '.$iduser.' </td> ';
                                echo '<td> '.$ngaybinhluan.' </td> </tr>';
                                }
                            ?>
        </table >         
        </div>
        <?php 
                if(!isset($_SESSION['user'])){
                    echo '<div class="binhluan1">
                    Bạn cần đăng nhập để bình luận 
                        </div>';
                }else{
                    
            
        ?>
        <div class="boxfooter ">
                        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                            <input type="hidden" name="idpro" value="<?= $idpro?>">
                            <input type="text" name="noidung" >
                            <input type="submit" name="guibinhluan" value="GỬI BÌNH LUẬN">
                        </form>
        </div>
        <?php 
                }
            ?>
         <?php 
        if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){

            $noidung=$_POST['noidung'];
            $idpro=$_POST['idpro'];
            $iduser=$_SESSION['user']['id'];
            $ngaybinhluan=date('h:i:a d/m/Y');
            insert_binhluan($iduser, $idpro, $noidung,$ngaybinhluan);
            header("Location: ../../index.php?act=sanphamct&idsp=".$idpro);
        }
         
         ?>
</div> 
</body>
</html>


