<section class="banner">
    <article class="banner_1"><img src="./view/img_sp/banner_1.jpg" alt=""></article>
    <aside class="banner_2">
        <div class="banner_2_con"><img src="./view/img_sp/banner_2.jpg" alt=""></div>
        <div class="banner_2_con"><img src="./view/img_sp/banner_3.jpg" alt=""></div>
    </aside>
    
</section>
        <main class="top_sp">
            <h1>Danh Mục</h1>      
        <section class="danh_muc_banner_buttom2">     
            <?php
               foreach ($danhmuc as $dm){
                extract($dm);
                echo '<a href="index.php?act=danhmucct&iddm='.$idDm.'"><img src="./uploads/'.$img.'" alt=""> <p>'.$name.'</p></a>';
               }
            ?>
        </section>
        </main>
        <h1 style=" margin-left: 50px;font-size: 20px;margin-top: 20px;">SẢN PHẨM YÊU THÍCH</h1> 
        <section class="all_san_pham">
            <h1></h1>
        <main class="san_pham">
            <?php
               foreach ($sanphammoitop4 as $sp){
                extract($sp);
                echo '<section class="san_pham_con">
                <a href="index.php?act=sanphamct&idsp='.$idSp.'&iddm='.$idDm.'&view='.$luotxem.'">
                <article><img src="./uploads/'.$img.'" alt=""></article>
                <article class="content_san_pham">
                    <p>Xanhsam | '.$name.'</p>
                    <div class="gia_vs_dvt"> <p>ĐVT: 1KG</p> <p style="color: #08672A;">'.$price.' VNĐ</p></div>
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
               foreach ($sanphammoitop8 as $sp){
                extract($sp);
                echo '<section class="san_pham_con">
                <a href="index.php?act=sanphamct&idsp='.$idSp.'&iddm='.$idDm.'&view='.$luotxem.'">
                <article><img src="./uploads/'.$img.'" alt=""></article>
                <article class="content_san_pham">
                    <p>Xanhsam | '.$name.'</p>
                    <div class="gia_vs_dvt"> <p>ĐVT: 1KG</p> <p style="color: #08672A;">'.$price.' VNĐ</p></div>
                    <div class="danhGia_soLuongBan"> <div><i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div><p>|</p><p>view '.$luotxem.'</p></div>
                </article>
                </a>
            </section>';
               }
            ?>
        </main>
        </section>
        <section class="section_hot_banner"> <img src="./view/img_sp/section_hot_banner.webp" alt=""> </section>
        <h1 style=" margin-left: 50px;font-size: 20px;margin-top: 20px;">SẢN PHẨM CÁC LOẠI</h1> 
        <section class="all_san_pham">
            <h1>THỊT BÒ</h1>
        <main class="san_pham">
            <?php
               foreach ($sanphammoitraicay as $sp){
                extract($sp);
                echo '<section class="san_pham_con">
                <a href="index.php?act=sanphamct&idsp='.$idSp.'&iddm='.$idDm.'&view='.$luotxem.'">
                <article><img src="./uploads/'.$img.'" alt=""></article>
                <article class="content_san_pham">
                    <p>Xanhsam | '.$name.'</p>
                    <div class="gia_vs_dvt"> <p>ĐVT: 1KG</p> <p style="color: #08672A;">'.$price.' VNĐ</p></div>
                    <div class="danhGia_soLuongBan"> <div><i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div><p>|</p><p>view '.$luotxem.'</p></div>
                </article>
                </a>
            </section>';
               }
            ?>
        </main>
        </section>
        <section class="all_san_pham">
            <h1>Thực Phẩm Chế Biến Sẵn</h1>
         <main class="san_pham">
         <?php
               foreach ($sanphammoichebien as $sp){
                extract($sp);
                echo '<section class="san_pham_con">
                <a href="index.php?act=sanphamct&idsp='.$idSp.'&iddm='.$idDm.'&view='.$luotxem.'">
                <article><img src="./uploads/'.$img.'" alt=""></article>
                <article class="content_san_pham">
                    <p>Xanhsam | '.$name.'</p>
                    <div class="gia_vs_dvt"> <p>ĐVT: 1KG</p> <p style="color: #08672A;">'.$price.' VNĐ</p></div>
                    <div class="danhGia_soLuongBan"> <div><i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div><p>|</p><p>view '.$luotxem.'</p></div>
                </article>
                </a>
            </section>';
               }
            ?>
        </main>
        </section>
        <section class="all_san_pham">
            <h1>Hoa Quả & Nước</h1>
        <main class="san_pham">
        <?php
               foreach ($sanphammoirau as $sp){
                extract($sp);
                echo '<section class="san_pham_con">
                <a href="index.php?act=sanphamct&idsp='.$idSp.'&iddm='.$idDm.'&view='.$luotxem.'">
                <article><img src="./uploads/'.$img.'" alt=""></article>
                <article class="content_san_pham">
                    <p>Xanhsam | '.$name.'</p>
                    <div class="gia_vs_dvt"> <p>ĐVT: 1KG</p> <p style="color: #08672A;">'.$price.' VNĐ</p></div>
                    <div class="danhGia_soLuongBan"> <div><i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div><p>|</p><p>view '.$luotxem.'</p></div>
                </article>
                </a>
            </section>';
               }
            ?>
        </main>
        </section>
        <section class="section2_hot_banner">
            <article><img src="./view/img_sp/banner_coll_1.webp" alt=""></article>
            <article><img src="./view/img_sp/banner_coll_2.webp" alt=""></article>
            <article><img src="./view/img_sp/banner_coll_3.webp" alt=""></article>
        </section>
        <main class="thuongHieu">
            <h1>THƯƠNG HIỆU NỔI TIẾNG</h1>
        <section class="img_thuongHieu">
            <article><img src="./view/img_sp/brand_1.webp" alt=""></article>
            <article><img src="./view/img_sp/brand_2.webp" alt=""></article>
            <article><img src="./view/img_sp/brand_3.webp" alt=""></article>
            <article><img src="./view/img_sp/brand_4.webp" alt=""></article>
            <article><img src="./view/img_sp/brand_5.webp" alt=""></article>
            <article><img src="./view/img_sp/brand_6.webp" alt=""></article>
        </section>
        </main>
        <main class="tintuc">
            <h1>SỐNG XANH - ĂN SẠCH - LÒNG THƯ THÁI</h1>
            <section class="new">
                <a href="#">
                <article class="new_con">
                    <img src="./view/img_sp/tintuc_1.webp" alt="">
                    <h1>Chứng Nhận USDA Organic là gì?</h1>
                    <span><strong>Nguyen Diep</strong> 20/9/2023</span>
                    <p class="content">Đây là phần thứ ba của loạt bài viết khám phá các khía cạnh khác nhau của quy định hữu cơ của USDA. Giữa các thông tin...</p>
                    <p class="docthem">Đọc tiếp...</p>
                </article>
                </a>
                <a href="#">
                    <article class="new_con">
                        <img src="./view/img_sp/tintuc_2.webp" alt="">
                        <h1>Chứng Nhận USDA Organic là gì?</h1>
                        <span><strong>Nguyen Diep</strong> 20/9/2023</span>
                        <p class="content">Đây là phần thứ ba của loạt bài viết khám phá các khía cạnh khác nhau của quy định hữu cơ của USDA. Giữa các thông tin...</p>
                        <p class="docthem">Đọc tiếp...</p>
                    </article>
                    </a>
                <a href="#">
                    <article class="new_con">
                        <img src="./view/img_sp/tintuc_3.webp" alt="">
                        <h1>Chứng Nhận USDA Organic là gì?</h1>
                        <span><strong>Nguyen Diep</strong> 20/9/2023</span>
                        <p class="content">Đây là phần thứ ba của loạt bài viết khám phá các khía cạnh khác nhau của quy định hữu cơ của USDA. Giữa các thông tin...</p>
                        <p class="docthem">Đọc tiếp...</p>
                    </article>    
                </a>    
                <a href="#">
                <article class="new_con">
                    <img src="./view/img_sp/tintuc_4.webp" alt="">
                    <h1>Chứng Nhận USDA Organic là gì?</h1>
                    <span><strong>Nguyen Diep</strong> 20/9/2023</span>
                    <p class="content">Đây là phần thứ ba của loạt bài viết khám phá các khía cạnh khác nhau của quy định hữu cơ của USDA. Giữa các thông tin...</p>
                    <p class="docthem">Đọc tiếp...</p>
                </article>
                </a>
            </section>
        </main>