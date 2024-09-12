<section class="row">
                <h1>GIỎ HÀNG</h1>
                    <div class="row_loai">
                         <table>
                            <tr> 
                                <!-- <th>STT</th> -->
                                <th>MÃ SẢN PHẨM</th>
                                <th>TÊN SẢN PHẨM</th>
                                <th>GIÁ</th>
                                <th>HÌNH</th>
                                <th>SỐ LƯỢNG</th>
                                <th>THÀNH TIỀN</th>
                                <th></th>
                            </tr>
                            <?php 
                                $i=0;
                                $tong=0;
                                foreach ($_SESSION['mycart'] as $cart){
                                
                                $ttien=$cart[2]*$cart[4];
                                $tong+=$ttien;
                                $hinh="./uploads/".$cart[3];
                  
                                $xoasp='<a href="index.php?act=delcart&idcart='.$i.'"><input type="button" value="Xóa" style="padding: 5px; padding-left:10px ;padding-right:10px ; border-radius: 10px;">';

                            echo '                     
                            <tr> 
                                
                                <td>'.$cart[0].'</td>
                                <td>'.$cart[1].'</td>
                                <td>'.$cart[2].'</td>
                                <td><img src="'.$hinh.'" alt="" height="50px"></td>
                                <td>'.$cart[4].'</td>
                                <td>'.$ttien.'</td> 			
                                <td>'.$xoasp.'</td>
                            </tr>';
                            $i+=1;
                            }
                            
                            echo '                     
                            <tr>

                            <td colspan="5" >Tổng đơn hàng</td>
                                <td>'.$tong.'</td>
                            </tr>';
                            ?>
                         </table>
                    </div>                   
                    <a href="index.php?act=bill"><input type="button" value="ĐẶT HÀNG" style="padding: 5px; padding-left:10px;padding-right:10px; border-radius: 10px;"></a>
                    <a href="index.php?act=delcart"><input type="button" value="XÓA GIỎ HÀNG" style="padding: 5px; padding-left:10px;padding-right:10px; border-radius: 10px;"></a>    
        </section>