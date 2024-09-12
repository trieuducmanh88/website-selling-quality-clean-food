<section class="login">
            <article>
                <img src="view/img_sp/logo-footer.webp" alt="">
            </article>
            <form action="index.php?act=dangky" method="post">
                <h1>Đăng Kí Tài Khoản</h1>
                <input type="text" name="username" placeholder="Nhập tên tài khoản">
                <input type="text" name="password" placeholder="Mật Khẩu">
                <input type="text" name="sdt" placeholder="Số điện thoại">
                <input type="text" name="email" placeholder="Email">
                <input type="text" name="address" placeholder="Địa chỉ">
            <div>
                <input type="submit" name="dangky" value="Đăng kí" class="dangky">
                <input type="reset" name="" value="nhập lại" class="nhaplai">

                <p><?php 
                      if(isset(($thongbao))&&($thongbao!="")) {echo $thongbao;}
                    ?></p>
            </div>    
            </form>
        </section>