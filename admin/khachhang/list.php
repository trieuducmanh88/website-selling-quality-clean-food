<section class="row">
                <h1>DANH SÁCH KHÁCH HÀNG</h1>
                    <div class="row_loai">
                         <table>
                            <tr>
                                <th></th>
                                <th>MÃ TK</th>
                                <th>TÊN ĐĂNG NHẬP</th>
                                <th>MẬT KHẨU</th>
                                <th>EMAIL</th>
                                <th>ĐỊA CHỈ</th>
                                <th>VAI TRÒ</th>
                                <th></th>
                            </tr>
                            <?php 
                                foreach ( $listkhachhang as $khachhang){
                                extract($khachhang);
                                $themadmin="index.php?act=themadmin&id=".$idUser;
                                $xoakh="index.php?act=xoakh&id=".$idUser; 
                                if($role==1){
                                    echo'                     
                                    <tr>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>'.$idUser.'</td>
                                        <td>'.$user.'</td>
                                        <td>'.$pass.'</td>
                                        <td>'.$email.'</td>
                                        <td>'.$address.'</td> 			
                                        <td>Quản trị</td>
                                        <td><a href="'.$themadmin.'"><input type="button" value="Thêm Admin"></a> <a href="'.$xoakh.'"><input type="button" value="Xóa"></a></td>
                                    </tr>';
                                }
                                else {
                                    echo'                     
                                    <tr>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>'.$idUser.'</td>
                                        <td>'.$user.'</td>
                                        <td>'.$pass.'</td>
                                        <td>'.$email.'</td>
                                        <td>'.$address.'</td> 			
                                        <td>Thành viên</td>
                                        <td><a href="'.$themadmin.'"><input type="button" value="Thêm Admin"></a> <a href="'.$xoakh.'"><input type="button" value="Xóa"></a></td>
                                    </tr>';
                                }
                           
                            } ?>
                         </table>
                    </div>                   
                    <form action="">
                    <input type="button" value="Chọn tất cả" >
                    <input type="button" value="Bỏ chọn tất cả">
                    <input type="button" value="Xóa các mục đã chọn">
                    </form>
                    
        </section>