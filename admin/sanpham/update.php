<?php
  if(is_array($sanpham)){
    extract($sanpham);
  }

    $hinhpath="../uploads/".$img;
    if(is_file($hinhpath)){
      $hinh="<img src='".$hinhpath."' height='80'>";
    }
    else{
      $hinh="no photo";}
  
?>
<section class="row">
                <h1>CẬP NHẬP SẢN PHẨM</h1>
                <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                    <div class="row_content">Tên sản phẩm <br><input type="text" name="tensp" value="<?php if(isset($name)&&($name!="")) echo $name; ?>"></div>
                    <div class="row_content">Giá <br><input type="text" name="giasp" value="<?php if(isset($price)&&($price!="")) echo $price; ?>"></div>
                    <div class="row_content">Hình <br> <?=$hinh?> <br><input type="file" name="hinh" id=""></div>
                    <div class="row_content">Mô tả <br><textarea name="mota" id="" value="" cols="30" rows="10" ><?php if(isset($mota)&&($mota!="")) echo $mota; ?></textarea></div>
                    <div class="row_content">Danh mục <br>
                        <select name="iddm" id="">
                          <option value="0">Chon loại</option>
                          <?php
                            extract($listsanpham);
                            $iddm=$idDm;
                            
                          foreach ($listDM as $danhmuc){
                            extract($danhmuc);
                            if($iddm==$idDm){
                            echo '<option value="'.$idDm.'" selected >'.$name.'</option>';}
                            else {
                              echo '<option value="'.$idDm.'" >'.$name.'</option>';

                            }
                          } ?>
                          
                        </select>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $idSp; ?>">
                    <input type="submit" name="capnhap" value="CẬP NHẬP" >
                    <input type="reset" value="NHẬP LOẠI">
                    <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH"></a>
                    <?php 
                      if(isset(($thongbao))&&($thongbao!="")) {echo $thongbao;}
                    ?>
                </form>

        </section>