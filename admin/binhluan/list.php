<section class="row">
                <h1>DANH SÁCH BINH LUẬN</h1>
                    <div class="row_loai">
                         <table>
                            <tr>
                                <th></th>
                                <th>ID</th>
                                <th>NỘI DUNG</th>
                                <th>IDUSER</th>
                                <th>IDPRO</th>
                                <th>NGÀY BÌNH</th>
                                <th></th>
                            </tr>
                            <?php 
                                foreach ( $listbinhluan as $bl){
                                extract($bl);
                                $xoabl="index.php?act=xoabl&id=".$id; 
                                    echo'                     
                                    <tr>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>'.$id.'</td>
                                        <td>'.$noidung.'</td>
                                        <td>'.$iduser.'</td>
                                        <td>'.$idpro.'</td>
                                        <td>'.$ngaybinhluan.'</td>
                                        <td><a href="'.$xoabl.'"><input type="button" value="Xóa"></a></td>
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