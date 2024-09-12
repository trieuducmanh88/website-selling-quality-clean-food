<section class="cac_sp_danhmuc" >
<?php

               foreach ($cacspdm as $sp){
                extract($sp);
                echo '<section class="san_pham_con_danhmuc">
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
</section>