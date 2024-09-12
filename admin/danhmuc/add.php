<section class="row">
                <h1>THÊM MỚI LOẠI HÀNG HÓA</h1>
                <form action="index.php?act=adddm" method="post" enctype="multipart/form-data">
                    <div class="row_content">Mã loại <br> <input type="text" name="maloai"></div>
                    <div class="row_content">Tên loại <br><input type="text" name="tenloai"></div>
                    <div class="row_content">Hình <br><input type="file" name="hinh" id=""></div>
                    <input type="submit" name="themmoi" value="THÊM MỚI" >
                    <input type="reset" value="NHẬP LOẠI">
                    <a href="index.php?act=listdm"><input type="button" value="DANH MỤC"></a>
                    <?php 
                      if(isset(($thongbao))&&($thongbao!="")) {echo $thongbao;}
                    ?>
                </form>

        </section>