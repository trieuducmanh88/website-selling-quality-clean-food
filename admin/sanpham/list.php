    <section class="row">
                <h1>QUẢN LÝ SẢN PHẨM</h1>
                <form action="index.php?act=listsp" method="post">
                    <input type="text" name="kyw" id="">
                    <select name="iddm" id="">
                          <option value="0">Tất cả</option>
                          <?php
                          foreach ($listDM as $danhmuc){
                            extract($danhmuc);
                            echo '<option value="'.$idDm.'">'.$name.'</option>';
                          } ?>
                          
                        </select>
                        <input type="submit" name="listok" value="GO" id="">

                </form>
                    <div class="row_loai">
                         <table>
                            <tr>
                                <th></th>
                                <th>MÃ SẢN PHẨM</th>
                                <th>TÊN SẢN PHẨM</th>
                                <th>GIÁ</th>
                                <th>HÌNH</th>
                                <th>MÔ TẢ</th>
                                <th>Lượt xem</th>
                                <th></th>
                            </tr>
                            <?php 
                                foreach ( $listsanpham as $sanpham){
                                extract($sanpham);
                                $suasp="index.php?act=suasp&id=".$idSp;
                                $xoasp="index.php?act=xoasp&id=".$idSp; 
                                $hinhpath="../uploads/".$img;
                                
                            echo'                     
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$idSp.'</td>
                                <td>'.$name.'</td>
                                <td>'.$price.'</td>
                                <td><img src="'.$hinhpath.'" alt="" height="100px"></td>
                                <td>'.$mota.'</td> 			
                                <td>'.$luotxem.'</td>
                                <td><a href="'.$suasp.'"><input type="button" value="Sửa"></a> <a href="'.$xoasp.'"><input type="button" value="Xóa"></a></td>
                            </tr>';
                            } ?>
                         </table>
                    </div>                   
                    <form action="">
                    <input type="button" value="Chọn tất cả" >
                    <input type="button" value="Bỏ chọn tất cả">
                    <input type="button" value="Xóa các mục đã chọn">
                    <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
                    </form>
                    
        </section>