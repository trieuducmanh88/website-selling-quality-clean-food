<form action="index.php?act=billcomfirm" method="post" >
<section class="thongtintk">
<h1>Thông tin tài khoản</h1>
                    <?php 
                       if(isset($_SESSION['user'])){
                        $username=$_SESSION['user']['user'];
                        $email=$_SESSION['user']['email'];
                        $tel=$_SESSION['user']['tel'];
                        $address=$_SESSION['user']['address'];
                       }
                    ?>
                    <div class="row_content">Tên tài khoản <br><input type="text" name="tentk" value="<?php if(isset($user)&&($user!="")) echo $user; ?>"></div>
                    <div class="row_content">Email <br><input type="text" name="email" value="<?php if(isset($email)&&($email!="")) echo $email; ?>"></div>
                    <div class="row_content">SDT <br><input type="text" name="sdt" value="<?php if(isset($tel)&&($tel!="")) echo $tel; ?>"></div>
                    <div class="row_content">Địa chỉ<br><input type="text" name="address" value="<?php if(isset($address)&&($address!="")) echo $address; ?>"></div>
                    
</section>

<section class="phuongthuctt">
<h1>Phương thức thanh toán</h1>
        <div class="pttt">
                    <input type="radio" name="pttt" checked value="1">Trả tiền khi nhận hàng
                    <input type="radio" name="pttt" value="2" >chuyển khoản ngân hàng
                    <input type="radio" name="pttt" value="3" >Thanh toán online
                    </div>
</section>
<section class="row">
                <h1>Hàng thanh toán</h1>
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
                                $i=0;
                                $tong=0;
                                foreach ( $_SESSION['mycart'] as $cart){
                                
                                $ttien=$cart[2]*$cart[4];
                                $tong+=$ttien;
                                $hinh="./uploads/".$cart[3];
                                $i+=1;
                            echo '                     
                            <tr> 
                                
                                <td>'.$cart[0].'</td>
                                <td>'.$cart[1].'</td>
                                <td>'.$cart[2].'</td>
                                <td><img src="'.$hinh.'" alt="" height="50px"></td>
                                <td>'.$cart[4].'</td>
                                <td>'.$ttien.'</td> 			
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
                <input type="submit" value="ĐỒNG Ý ĐẶT HÀNG" name="dongydathang" style="padding: 5px; padding-left:10px;padding-right:10px; border-radius: 10px;">
        </section>
        </form>
