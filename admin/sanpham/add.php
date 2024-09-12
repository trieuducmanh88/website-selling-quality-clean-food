
<section class="row">
                <h1>THÊM MỚI SẢN PHẨM</h1>
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                    <div class="row_content">Mã sản phẩm <br> <input type="text" name="masp" disabled></div>
                    <div class="row_content">Tên sản phẩm <br><input type="text" name="tensp"></div>
                    <div class="row_content">Giá <br><input type="text" name="gia"></div>
                    <div class="row_content">Hình <br><input type="file" name="hinh" id=""></div>
                    <div class="row_content">Mô tả <br><textarea name="mota" id="" cols="30" rows="10" ></textarea></div>
                    <div class="row_content">Danh mục <br>
                        <select name="iddm" id="">
                          <option value="0">Chon loại</option>
                          <?php
                          foreach ($listDM as $danhmuc){
                            extract($danhmuc);
                            echo '<option value="'.$idDm.'">'.$name.'</option>';
                          } ?>
                          
                        </select>
                    </div>
                    <input type="submit" name="themmoi" value="THÊM MỚI" >
                    <input type="reset" value="NHẬP LOẠI">
                    <a href="index.php?act=listsp"><input type="button" value="SẢN PHẨM"></a>
                    <?php 
                      if(isset(($thongbao))&&($thongbao!="")) {echo $thongbao;}
                    ?>
                </form>

        </section>