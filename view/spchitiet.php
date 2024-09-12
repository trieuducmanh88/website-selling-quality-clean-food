<?php 
   extract($onesp);
?>
<section class="san_pham_chinh">
            <section class="left_sp">
                <img src="./uploads/<?php echo $img ?>" alt="">
                <article class="content_san_pham">
                    <div class="danhGia_soLuongBan"> <div><i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div> <p>|</p> <p>view <?php echo $luotxem ?> </p> <p>|</p><p>Còn hàng</p></div>
                </article>
            </section>
            <section class="right_sp">
                <h2>XanhSam | <?php echo $name ?></h2>
                <article class="dvt_gia"> 
                    <p>ĐVT: 1Kg</p>
                    <p class="gia"><?php echo $price ?> vnđ</p>
                </article>
                <p>
                </p>
                <form action="index.php?act=addcart" method="post">
                <article class="soLuong">Số lượng<input type="number" name="soluong" id="" value="1" ></article>
                <article class="nut_sp">
                <input type="hidden" name="id" value="<?=$idSp ?>">
                <input type="submit" name="themgiohang" value="Thêm giỏ hàng" >
                <input type="submit" name="mua" value="Mua hàng" style="background-color:  #08672A; color: white;">
                </article>
                </form>
            </section>
            
        </section>
        <section class="chiTietSP">
            <h1>CHI TIẾT SẢN PHẨM</h1>
            <p><?php echo $mota ?></p>
        
        </section>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
            $("#binhluan").load("view/binhluan/binhluanform.php", {idpro: <?=$idSp?>});
            });
        </script>
        <section class="binhluan" id="binhluan">

        </section>
        <section class="goi_y_sp">
            <article></article>
            <p>GỢI Ý SẢN PHẨM</p>
            <article></article>
        </section>
        <section class="all_san_pham">
            <h1></h1>
        <main class="san_pham">
            <?php
               foreach ($cacspct1 as $sp){
                extract($sp);
                echo '<section class="san_pham_con">
                <a href="index.php?act=sanphamct&idsp='.$idSp.'&iddm='.$idDm.'&view='.$luotxem.'">
                <article><img src="./uploads/'.$img.'" alt=""></article>
                <article class="content_san_pham">
                    <p>Xanhsam | '.$name.'</p>
                    <div class="gia_vs_dvt"> <p>ĐVT: 1KG</p> <p style="color: #08672A;">'.$price.'  VNĐ</p></div>
                    <div class="danhGia_soLuongBan"> <div><i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div><p>|</p><p>view '.$luotxem.'</p></div>
                </article>
                </a>
            </section>';
               }
            ?>
        </main>
        </section>
        <section class="all_san_pham">
            <h1></h1>
        <main class="san_pham">
            <?php
               foreach ($cacspct2 as $sp){
                extract($sp);
                echo '<section class="san_pham_con">
                <a href="index.php?act=sanphamct&idsp='.$idSp.'&iddm='.$idDm.'&view='.$luotxem.'">
                <article><img src="./uploads/'.$img.'" alt=""></article>
                <article class="content_san_pham">
                    <p>Xanhsam | '.$name.'</p>
                    <div class="gia_vs_dvt"> <p>ĐVT: 1KG</p> <p style="color: #08672A;">'.$price.'  VNĐ</p></div>
                    <div class="danhGia_soLuongBan"> <div><i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div><p>|</p><p>view '.$luotxem.'</p></div>
                </article>
                </a>
            </section>';
               }
            ?>
        </main>
        </section>