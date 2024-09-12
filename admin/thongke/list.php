    <section class="row">
                <h1>THỐNG KÊ SẢN PHẨM THEO LOẠI </h1>
                    <div class="row_loai">
                         <table>
                            <tr>
                                <th>MÃ DANH MỤC</th>
                                <th>TÊN DANH MỤC</th>
                                <th>SỐ LƯỢNG</th>
                                <th>GIÁ CAO NHẤT</th>
                                <th>GIÁ THẤP NHẤT</th>
                                <th>GIÁ TRUNG BÌNH</th>                               
                            </tr>
                            <?php 
                                foreach ( $listtk as $tk){
                                extract($tk);
                            echo'                     
                            <tr>
                                <td>'.$iddm.'</td>
                                <td>'.$tendm.'</td>
                                <td>'.$countsp.'</td>
                                <td>'.$maxprice.'</td>
                                <td>'.$minprice.'</td>
                                <td>'.$avgprice.'</td> 		
                            </tr>';
                            } ?>
                         </table>
                    </div>                   
                    <form action="">
                    <a href="index.php?act=bieudo"><input type="button" value="Biều đồ" ></a>
                    </form>
        </section>