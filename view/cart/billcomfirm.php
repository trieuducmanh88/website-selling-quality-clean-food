<?php
  if(isset($bill)&&(is_array($bill))){
    extract($bill);
  }


?>
<section class="billcomfirm">
    <section class="content">
    <h1>CẢM ƠN</h1>
    <p>Cảm ơn quý khách đã đặt hàng</p>
    </section>
    <section class="content">
    <h1>MÃ ĐƠN HÀNG</h1>
    <p>Mã đơn hàng: DAM-<?=$bill['id']?></p>
    <p>Ngày đặt hàng: <?=$bill['ngaydathang']?></p>
    </section>
    <section class="content">
    <h1>THÔNG TIN ĐẶT HÀNG</h1>
    <div>
    <p>Người đặt hàng : <br>
       Địa chỉ : <br>
       Email : <br>
       Điện thoại :</p>
    <P><?=$bill['bill_name']?> <br>
    <?=$bill['bill_address']?> <br>
    <?=$bill['bill_email']?> <br>
    <?=$bill['bill_tel']?></P>
        </div>
    </section>
    <section class="content">
    <h1>PHƯƠNG THỨC ĐẶT HÀNG</h1>
    <p><?php if($bill['bill_pttt']==1){
        echo 'Trả tiền khi nhận hàng';
    } elseif($bill['bill_pttt']==2){
        echo 'chuyển khoản ngân hàng';
    }
    else{
        echo 'Thanh toán online';

    }
    
    ?></p>
    </section>
    <form action="" method="post"></form>
    <section class="row">
                <h1>THÔNG TIN GIỎ HÀNG</h1>
                    <div class="row_loai">
                         <table>
                            <tr>       
                                <th>MÃ SẢN PHẨM</th>
                                <th>TÊN SẢN PHẨM</th>
                                <th>GIÁ</th>
                                <th>HÌNH</th>
                                <th>SỐ LƯỢNG</th>
                                <th>THÀNH TIỀN</th>

                            </tr>
                            <?php 
                                $tong=0;
                                foreach ($billct as $cart){
                                $tong=$cart['thanhtien']+$tong;

                            echo '                     
                            <tr> 
                                
                                <td>'.$cart['idpro'].'</td>
                                <td>'.$cart['name'].'</td>
                                <td>'.$cart['price'].'</td>
                                <td><img src="uploads/'.$cart['img'].'" alt="" height="50px"></td>
                                <td>'.$cart['soluong'].'</td>
                                <td>'.$cart['thanhtien'].'</td> 			
                            </tr>';
                                }
                            echo '                     
                            <tr>
                                <td colspan="5" >Tổng đơn hàng</td>
                                <td>'.$tong.'</td>
                            
                            </tr>';
                            ?>
                         </table>
                    </div>                   
                <a href="index.php"><input type="submit" value="ĐỒNG Ý ĐẶT HÀNG" name="" style="padding: 5px; padding-left:10px;padding-right:10px; border-radius: 10px;"></a>
    </section>
</section>