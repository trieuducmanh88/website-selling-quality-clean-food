<?php 
    if(is_array($_SESSION['user'])&&($_SESSION['user']>0)){     
        extract($_SESSION['user']);
    }
    extract($showtk);
?>
<section class="thongtintk">
<h1>Thông tin tài khoản</h1>
                <form action="index.php?act=updatetk" method="post" >
                    <div class="row_content">Tên tài khoản <br><input type="text" name="tentk" value="<?php if(isset($user)&&($user!="")) echo $user; ?>"></div>
                    <div class="row_content">Password <br><input type="text" name="pass" value="<?php if(isset($pass)&&($pass!="")) echo $pass; ?>"></div>
                    <div class="row_content">Email <br><input type="text" name="email" value="<?php if(isset($email)&&($email!="")) echo $email; ?>"></div>

                    <div class="row_content">SDT <br><input type="text" name="sdt" value="<?php if(isset($tel)&&($tel!="")) echo $tel; ?>"></div>

                    <div class="row_content">Địa chỉ<br><input type="text" name="address" value="<?php if(isset($address)&&($address!="")) echo $address; ?>"></div>
                    <div class="nuttk">
                    <input type="hidden" name="id" value="<?=$idUser; ?>">
                    <input type="submit" name="capnhap" value="CẬP NHẬP" >
                    <input type="reset" value="NHẬP LOẠI">
                    <a href="index.php"><input type="button" value="Thoát"></a>
                    </div>
                    <p><?php 
                      if(isset(($thongbao))&&($thongbao!="")) {echo $thongbao;}
                    ?></p>
                </form>
</section>
