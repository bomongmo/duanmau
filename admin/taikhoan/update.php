<?php 
    
    if(is_array($taikhoan)){
        extract($taikhoan);
    }
   
?>

<div class="row">
            <div class="row frmtitle">
                <h1>CẬP NHẬT TÀI KHOẢN </h1>    
            </div>
            <div class="row frmcontent">
            <form action="index.php?act=updatetk" method="post" >
                    <div class="row mb10">
                        USER NAME <br>
                        <input type="text" name="user" value="<?=$user?>">
                    </div>
                    <div class="row mb10">
                        PASS <br>
                        <input type="text" name="pass" value="<?= $pass?>">
                    </div>
                    <div class="row mb10">
                        EMAIL <br>
                        <input type="text" name="email" value="<? $email?>" >
                    </div>
                    <div class="row mb10">
                        ĐỊA CHỈ <br>
                        <input type="text" name="address" value="<? $address?>" >
                    </div>
                    <div class="row mb10">
                        Số ĐIỆN THOẠI <br>
                        <input type="text" name="tel" value="<?= $tel?>">
                    </div>
                    <div class="row mb10">
                        Vai trò <br>
                        <input type="text" name="rolo" value="<?= $rolo?>">
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?=$id?>">
                        <input type="submit" name="capnhat" value="CẬP NHẬT">
                        <input type="reset" value="NHẬP LẠI">
                        <a href="index.php?act=listtk"><input type="button" value="DANH SÁCH"></a>
                    </div>
                    <?php 
                    if(isset($thongbao)&&($thongbao!=""))
                        echo $thongbao;
                    ?>
                </form>
            </div>
        </div>
        