<div class="row">
           <div class="row mb">
           <div class="boxtrai mr">
            <div class="row mb">
                <div class="boxtitle"> CÁM ƠN</div>
                <div class="row boxcontent" style="text-align:center">
                    <h2>Cảm ơn quý khách đã đặt hàng!</h2>
                </div>
            </div>
            <?php 
                if(isset($bill)&&(is_array($bill))){
                    extract($bill);
                }
            ?>
            <div class="row mb">
                <div class="boxtitle"> MÃ ĐƠN HÀNG</div>
                <div class="row boxcontent" style="text-align:center">
                    <li>-DAM:<?= $bill['id'];?></li>
                    <li>-Ngày đặt hàng:<?= $bill['ngaydathang'];?></li>
                    <li>-Tổng đơn hàng:<?= $bill['total'];?></li> 
                    <li>-Phương thức thành toán:<?= $bill['bill_pttt'];?></li> 
                </div>
            </div>
            <div class="row mb">
                <div class="boxtitle"> THÔNG TIN ĐẶT HÀNG</div>
                <div class="row boxcontent " style="text-align:center">
                        <table>
                            <tr>
                                <td>Người đặt hàng</td>
                                <td><?= $bill['bill_name'];?></td>
                            </tr>
                            <tr>
                                <td>Địa chỉ</td>
                                <td><?= $bill['bill_address'];?></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><?= $bill['bill_email'];?></td>
                            </tr>
                            <tr>
                                <td>Điện thoại</td>
                                <td><?= $bill['bill_tel'];?></td>
                            </tr>
                        </table>
                </div>
            </div>
            <div class="row mb">
                <div class="boxtitle"> THÔNG TIN GIỎ HÀNG</div>
                <div class="row boxcontent cart">
                    <table>
                        <?php 
                            bill_chi_tiet($billct);
                        ?>
                        
                    </table>
                </div>
            </div>
          
      </div> 
      <div class="boxphai">
                    <?php include "view/boxright.php";?>
                </div>
     </div>
               
</div>
