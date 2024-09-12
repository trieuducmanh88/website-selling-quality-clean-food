
<section class="thongtintk">
<h1>Quên Mật Khẩu</h1>
                <form action="index.php?act=quenmk" method="post" >
                     <?php 
                           if(isset($_POST['gui'])&&($_POST['gui'])){
                            $email=$_POST['email'];
                            $checkemail=loadAllone_checkemail($email);
          
                         
                                       if(is_array($checkemail)){
                                        extract ($checkemail);
                                        echo ' <div class="row_content">Tên tài khoản <br><input type="text" name="tentk" value="'.$user.'"></div>
                                        <div class="row_content">Password <br><input type="text" name="pass" value="'.$pass.'"></div>';
                                    }
                                }
                                
                     ?>
                    <div class="row_content">Email <br><input type="text" name="email" value="<?php if(isset($email)&&($email!="")) echo $email; ?>"></div>
                    <div class="nuttk">
                      
                    <input type="submit" name="gui" value="Gửi" >
                    <input type="reset" value="Nhập lại">
                    <a href="index.php"><input type="button" value="Thoát"></a>
                    </div>
                </form>
</section>
