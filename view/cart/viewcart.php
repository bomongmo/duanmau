<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb ">

        <div class="boxtitle">GIỎ HÀNG</div>
            <div class="row boxcontent cart">
                <table>
                 
                    <?php 
                        viewcart(1);
                    ?>
                    <!-- <tr>
                        <td>1</td>
                        <td><img src="images/1.jpg" alt="" height="80px"></td>
                        <td>ĐỒNG HỒ</td>
                        <td>50</td>
                        <td>2</td>
                        <td>1000 VNĐ</td>
                        <td><input type="button" value="XÓA"></td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td><img src="images/2.jpg" alt="" height="80px"></td>
                        <td>NÓN</td>
                        <td>110</td>
                        <td>3</td>
                        <td>2000 VNĐ</td>
                        <td><input type="button" value="XÓA"></td>
                    </tr> -->
                </table>
            </div>
        </div>
        <div class="row mb ">
        <a href="index.php?act=bill"><input type="button" value="TIẾP TỤC ĐẶT HÀNG"></a> <a href="index.php?act=delcart"> <input type="button" value="XÓA GIỎ HÀNG"></a>
        </div>

   </div>
   <div class="boxphai">
            <?php
            include "view/boxright.php";
            ?>
        </div>
</div>