<?php
   session_start();
   include "view/header.php";
   include "./model/taikhoan.php";
   include "./model/danhmuc.php";
   include "./model/cart.php";

   include "./model/sanpham.php";
   include "./model/pdo.php";

   if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];

   $sanphammoitraicay=loadAll_sanpham_home_traicay();
   $sanphammoichebien=loadAll_sanpham_home_chebien();
   $sanphammoirau=loadAll_sanpham_home_rau();
   $sanphammoitop4=loadAll_sanpham_home_sptop4();
   $sanphammoitop8=loadAll_sanpham_home_sptop8();
   $danhmuc=loadAll_danhmuc();
   if(isset($_GET['act'])){
      $act=$_GET['act'];

      switch ($act){
         // xuất thông tin sản phẩm chi tiết và sản phẩm liên quan
         case 'sanphamct':
            if(isset($_GET['idsp'])&&($_GET['idsp']>0)){
               $view=$_GET['view'];
               $id=$_GET['idsp'];
               $onesp=loadOne_sanpham($id);
               extract($onesp);
               $view=$luotxem;
               if(isset($_GET['view'])&&($_GET['view']>=0)){
                  $view++;
                  update_sanpham1($id,$name,$price,$img,$mota,$view,$idDm);
               }
               $iddm=$_GET['iddm'];
               $cacspct1=loadAll_sanpham_spchitiet1($iddm);
               $cacspct2=loadAll_sanpham_spchitiet2($iddm);
              include "./view/spchitiet.php";
            }
            else {
               include "./view/home.php";
            }
            break; 
            
           // tìm kiếm sản phẩm và cập danh mục con cho lên trang chủ
         case 'danhmucct':
            if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
                 $kyw= $_POST['kyw'];         
            }
            else{
               $kyw="";
            }
            if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
               $iddm=$_GET['iddm'];
            }
            else{
               $iddm=0;
            }
               $cacspdm=loadAll_sanpham($iddm,$kyw); 
               $tendm=load_ten_dm($iddm);
            include "./view/trangdanhmuc.php";
            break; 


         // đăng kí và đăng nhập tài khoản user với admin 
         case 'dangky':
            if(isset($_POST['dangky'])&&($_POST['dangky'])){
               $user=$_POST['username'];
               $pass=$_POST['password'];
               $email=$_POST['email'];
               $sdt=$_POST['sdt'];
               $address=$_POST['address'];
               insert_taikhoan($user,$pass,$email,$sdt,$address);
               $thongbao="Đã đăng kí thành công. Vui long đăng nhập";
            }
            include "view/dangki.php";
            break;
         case 'dangnhap':
            if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
               $user=$_POST['username'];
               $pass=$_POST['password'];
               $checkuser=loadOne_checkuser($user,$pass);
               extract($checkuser);
            if(is_array($checkuser)){   
                        $_SESSION['user']=$checkuser;                   
                        header('location:index.php');
                        if($role==1){
                           header('location:admin/index.php');   
                        } 
                  }
                   
            else{
               $thongbao="Tài khoản không tồn tại. Vui lòng kiểm tra hoặc đăng ký!";
               }
               }
               include "view/dangnhap.php";
               break;
            
         // quên tài khoản
         case 'quenmk':
            include "view/quentaikhoan.php";
            break;
         case 'dangxuat': 
            session_unset();
            header('location:index.php');                
            break;
         // check thông tin tài khoản và sửa tài khoản
         case 'xuatthongtintk':
            if(isset($_GET['idUser'])&&($_GET['idUser']>0)){
               $idUser=$_GET['idUser'];
               $showtk=loadAllone_taikhoan($idUser);
            }
               include "view/thongtintk.php";
               break;
         case 'updatetk':
            if(isset($_POST['capnhap'])&&($_POST['capnhap'])){
               $user=$_POST['tentk'];
               $idUser==$_POST['id'];
               $pass=$_POST['pass'];
               $email=$_POST['email'];
               $sdt=$_POST['sdt'];          
               $address=$_POST['address'];
               
               update_taikhoan($user,$pass,$email,$sdt,$address,$idUser);
                
               $thongbao="Cập nhập thành công";
               }
               $showtk=loadAllone_taikhoan($idUser);
               include "view/thongtintk.php";
               break;  

         // Thêm giỏ hàng
         case 'addcart':
            if(isset($_POST['themgiohang'])&&($_POST['themgiohang'])){
               $id=$_POST['id'];
               $sanpham=loadOne_sanpham($id);
               extract($sanpham);
               $soluong=$_POST['soluong'];
               $ttien=$soluong * $price;
               $spadd=[$idSp,$name,$price,$img,$soluong,$ttien] ;
               array_push($_SESSION['mycart'],$spadd);
               
            }
            include "view/cart/viewcart.php";
            break;
         case 'giohang':
            include "view/cart/viewcart.php";
            break;  
         case 'delcart':
            
            if(isset($_GET['idcart'])){
               array_splice($_SESSION['mycart'],$_GET['idcart'],1);
            }
            else {
               $_SESSION['mycart']=[];
            }
            header('location:index.php?act=giohang');
            break; 
         // thanh toán đơn hàng 
         case 'bill':
            include "./view/cart/bill.php";
            break;
         case 'billcomfirm':
            if(isset($_POST['dongydathang'])&&($_POST['dongydathang'])){
              $name=$_POST['tentk'];
              $email=$_POST['email'];
              $tel=$_POST['sdt'];
              $pttt=$_POST['pttt'];
              $address=$_POST['address'];
              $ngaydathang=date('h:i:sa d/m/Y');
              $tongdonhang=tongdonhang();
              
              $idbill=insert_bill($_SESSION['user']['idUser'],$name,$email,$tel,$address,$pttt,$ngaydathang,$tongdonhang);
              foreach ( $_SESSION['mycart'] as $cart){
                 insert_cart($_SESSION['user']['idUser'],$cart[0],$cart[3],$cart[1],$cart[2],$cart[4],$cart[5],$idbill);
              }
              $_SESSION['mycart']=[];
            }
            $bill=loadOne_bill($idbill);
            $billct=loadAll_cart($idbill);
            include "./view/cart/billcomfirm.php";
            break;
         case 'gioithieu':
            include "./view/gioithieu.php";
            break;
         case 'mybill':
            if(isset($_SESSION['user'])) $iduser=$_SESSION['user']['idUser'];
            else $iduser=0;
            $listbill=loadAll_bill($iduser);
            include "./view/cart/mybill.php";
            break;
         case 'lienhe':
            include "./view/gioithieu.php";
            break;
         case 'trahang':
            include "./view/trahang.php";
            break;
         case 'hoidap':
            include "./view/hoidap.php";
            break;

         case 'adddm':
            break;
         default:
            include "./view/home.php";
            break;
         } }
      else {
         include "./view/home.php";
      }
      include "./view/footer.php";
?>