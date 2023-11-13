<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb ">

            <div class="boxtitle">CẬP NHẬT TÀI KHOẢN</div>
            <div class="row boxcontent formtaikhoan">
                <?php 
                    if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                        extract($_SESSION['user']);
                    }
                ?>
                <form action="index.php?act=edit_taikhoan" method="post">
                <div class="row mb10">
                        NAME
                        <input type="text" name="name" value=<?= $name?>>
                    </div>
                    <div class="row mb10">
                        EMAIL
                        <input type="email" name="email" value=<?= $email?>>
                    </div>
                    <div class="row mb10">
                        TÊN ĐĂNG NHẬP
                        <input type="text" name="user" value=<?= $user?>>
                    </div>
                    <div class="row mb10">
                        MẬT KHẨU
                        <input type="password" name="pass" value=<?= $pass?>>
                    </div>
                    <div class="row mb10">
                        ĐỊA CHỈ
                        <input type="text" name="address" value=<?= $address?>>
                    </div>
                    <div class="row mb10">
                        ĐIỆN THOẠI
                        <input type="text" name="tel" value=<?= $tel?>>
                    </div>
                    <div>
                        VAI TRÒ
                        <input type="text" name="rolo" value=<?= $rolo?>>
                    </div>
                    <br>
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?= $id?>">
                        <input type="submit" value="Cập Nhật" name="capnhat">
                        <input type="reset" value="Nhập Lại">
                    </div>

                </form>
                <h2 class="thongbao">

                <?php                 
                    if(isset($thongbao)&&($thongbao!="")){
                        echo $thongbao;
                    }
                ?>
                </h2>    
                            
            </div>
        </div>


    </div>
    <div class="boxphai">
        <?php
        include "view/boxright.php";
        ?>
    </div>
</div>