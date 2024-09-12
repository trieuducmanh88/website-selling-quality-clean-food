<?php
  include "../../model/binhluan.php";
  include "../../model/pdo.php";

  session_start();
  $idpro=$_REQUEST['idpro'];
  $dsbl=loadall_binhluan($idpro);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="view/css/binhluan1.css">
    <style>

    </style>
</head>
<body>
    
   <div class="row_binhluan">

    <div class="tieude">BÌNH LUẬN</div>
    <div class="noidung">
        <table>
            <?php
            foreach ($dsbl as $bl){
                extract($bl);
                echo '
                <tr>
                <td>'.$noidung.'</td>
                <td>'.$user.'</td>
                <td>'.$ngaybinhluan.'</td>
                <td>'.$idpro.'</td>

               </tr>
            ';
            }
 
            
            ?>
        </table>
    </div>
    <div class="searbor">
      <?php if(isset($_SESSION['user'])){
        echo '<form action="'.$_SERVER['PHP_SELF'].'" method="post">
            <input type="hidden" name="idpro" id="" value="'.$idpro.'">
            <input type="text" name="noidung" id="" width: 500px;>
            <input type="submit" name="guibinhluan" id="" value="Gửi bình luận" >
            </form>
        ';
      }
      else{
        echo '<a href="index.php?act=dangnhap"><input type="button" value="ĐĂNG NHẬP ĐỂ BÌNH LUẬN" width: 100%;></a>';
       }      
        ?>
        
        
    </div>
    </div>
    <?php
    if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
        $idpro=$_POST['idpro'];
        $ngaybinhluan=date('h:i:sa d/m/Y');
        $iduser=$_SESSION['user']['idUser'];
        $noidung=$_POST['noidung'];
        insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan);
        header("location: ".$_SERVER['HTTP_REFERER']);
    }

    ?>
</body>
</html>