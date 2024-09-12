<section class="row">
                <h1>ĐƠN HÀNG CỦA BẠN</h1>
                    <div class="row_loai">
                         <table>
                            <tr>                             
                                <th>MÃ ĐƠN HÀNG</th>
                                <th>NGÀY ĐẶT HÀNG</th>
                                <th>SỐ LƯỢNG MẶT HÀNG</th>
                                <th>TỔNG GIÁ TRỊ ĐƠN HÀNG</th>
                                <th>TRẠNG THÁI ĐƠN HÀNG</th>
                            </tr>
                            <?php 
                                if(is_array($listbill)){
                                    foreach ($listbill as $bill){
                                        extract($bill);
                                        $count=loadAll_cart_count($bill['id']);
                                        $ttdh=get_ttdh($bill['bill_status']);
                                        echo '
                                        <tr>          
                                            <td>DAM-'.$bill['id'].'</td>
                                            <td>'.$bill['ngaydathang'].'</td>
                                            <td>'.$count.'</td>
                                            <td>'.$bill['total'].' VND</td>
                                            <td>'.$ttdh.'</td> 			
                                        </tr>';
                                    }
                                }
                            ?>
                         </table>
                    </div>                   
</section>