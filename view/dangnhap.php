<section class="login">
            <article>
                <img src="view/img_sp/logo-footer.webp" alt="">
            </article>
            <form action="index.php?act=dangnhap" method="post">
                <h1>Đăng Nhập Tài Khoản</h1>
                <input type="text" name="username" placeholder="Nhập tên tài khoản">
                <input type="text" name="password" placeholder="Mật Khẩu">
                <a href="index.php?act=quenmk">Quên mật khẩu?</a>
                <input type="submit" name="dangnhap" value="Đăng Nhập" class="dangky">
                <p>Bạn chưa có tài khoản? <a href="index.php?act=dangky">Đăng kí</a></p>
                 
            </form>
            <?php 
                      if(isset(($thongbao))&&($thongbao!="")) {echo $thongbao;}
                    ?>
</section>