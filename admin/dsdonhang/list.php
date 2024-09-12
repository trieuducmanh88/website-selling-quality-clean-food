    <section class="row">
                <h1>QUẢN LÝ ĐƠN HÀNG</h1>
                <form action="index.php?act=listbill" method="post">
                    <input type="text" name="iduser" id="">
                    <input type="submit" name="listok" value="GO" id="">
                </form>
                    <div class="row_loai">
                         <table>
                            <tr>
                                <th></th>
                                <th>MÃ ĐƠN HÀNG</th>
                                <th>KHÁCH HÀNG</th>
                                <th>TÊN KHÁCH HÀNG</th>
                                <th>SỐ LƯỢNG HÀNG</th>
                                <th>GIÁ ĐƠN HÀNG</th>
                                <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                                <th>THAO TÁC</th>
                                
                            </tr>
                            <?php 
                                foreach ( $listbill as $bill){
                                extract($bill);
                                $suabill="index.php?act=suabill&idbill=".$id;
                                $xoabill="index.php?act=xoabill&idbill=".$id;    
                                $count=loadAll_cart_count($id);
                                $ttdh=get_ttdh($bill_status);
                            echo'                     
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$id.'</td>
                                <td>'.$iduser.'</td>
                                <td>'.$bill_name.'</td>
                                <td>'.$count.'</td>
                                <td>'.$total.'</td> 		
                                <td>'.$ttdh.'</td> 				
                                <td><a href="'.$suabill.'"><input type="button" value="Sửa"></a> <a href="'.$xoabill.'"><input type="button" value="Xóa"></a></td>
                            </tr>';
                            } ?>
                         </table>
                    </div>                   
                    <form action="">
                    <input type="button" value="Chọn tất cả" >
                    <input type="button" value="Bỏ chọn tất cả">
                    <input type="button" value="Xóa các mục đã chọn">
                    </form>
                    
        </section>