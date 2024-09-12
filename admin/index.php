<?php
 include "../model/pdo.php";
 include "../model/danhmuc.php";
 include "../model/khachhang.php";
 include "../model/sanpham.php";
 include "../model/binhluan.php";
 include "../model/dsdonhang.php";
 include "../model/thongke.php";
 include "header.php";
 $spxemnhieu=loadAll_sanpham_home_spxemnhieu();
 $spmoi=loadAll_sanpham_home_spmoi();
 $listtk=loadAll_thongke();
 $blmoi=loadall_blmoi();
 $dhmoi=loadAll_dhmoi();
 if(isset($_GET['act'])){
    $act=$_GET['act'];
    switch ($act){
        case 'adddm':
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                $tenloai=$_POST['tenloai'];
                $img=$_FILES['hinh']['name'];
                $dir="../uploads/";
                $upload=$dir.basename($_FILES['hinh']['name']);
                if(move_uploaded_file($_FILES['hinh']['tmp_name'],$upload)){

                }
                else {
                    
                }
                insert_danhmuc($tenloai,$img);
                $thongbao="Thêm thành công";
            }
            include "./danhmuc/add.php";
            break;
        case 'listdm':
            $listDM=loadAll_danhmuc();
            include "./danhmuc/list.php";
            break;
        case 'xoadm':
            if(isset($_GET['id']) &&(($_GET['id'])>0)){
                delete_danhmuc($_GET['id']);
            }
            $listDM=loadAll_danhmuc();
            include "./danhmuc/list.php";
            break;
        case 'suadm':
            if(isset($_GET['id']) &&(($_GET['id'])>0)){
                $dm=loadOne_danhmuc($_GET['id']);
            }    
            
            include "./danhmuc/update.php";
            break;
        case 'update':
            if(isset($_POST['capnhap'])&&($_POST['capnhap'])){
                $tenloai=$_POST['tenloai'];
                $id=$_POST['id'];
                $img=$_FILES['hinh']['name'];
                $dir="../uploads/";
                $upload=$dir.basename($_FILES['hinh']['name']);
                if(move_uploaded_file($_FILES['hinh']['tmp_name'],$upload)){

                }
                else {
                    
                }
                update_danhmuc($id,$tenloai,$img);
                $thongbao="Cập nhập thành công";
            }
                
            $listDM=loadAll_danhmuc();
            include "./danhmuc/list.php";
            break;
        
        // sản phẩm
        case 'addsp':
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                $name=$_POST['tensp'];
                $price=$_POST['gia'];
                $img=$_FILES['hinh']['name'];
                $dir="../uploads/";
                $upload=$dir.basename($_FILES['hinh']['name']);
                if(move_uploaded_file($_FILES['hinh']['tmp_name'],$upload)){

                }
                else {
                    
                }
                $mota=$_POST['mota'];
                $idDm=$_POST['iddm'];

                insert_sanpham($name,$price,$img,$mota,$idDm);
                $thongbao="Thêm thành công";
            }
            $listDM=loadAll_danhmuc();
            include "./sanpham/add.php";
            break;
        case 'listsp':
            if(isset($_POST['listok'])&&($_POST['listok'])){
                $kyw=$_POST['kyw'];
                $iddm=$_POST['iddm'];
            }
            else {
                $kyw='';
                $iddm=0;
            }
            $listDM=loadAll_danhmuc();
            $listsanpham=loadAll_sanpham($iddm,$kyw);
            include "./sanpham/list.php";
            break;
        case 'xoasp':
            if(isset($_GET['id']) &&(($_GET['id'])>0)){
                delete_sanpham($_GET['id']);
            }
            $listsanpham=loadAll_sanpham(0,"");
            include "./sanpham/list.php";
            break;
        case 'suasp':
            if(isset($_GET['id']) &&(($_GET['id'])>0)){
                $sanpham=loadOne_sanpham($_GET['id']);
            }   
            $listsanpham=loadAll_sanpham(); 
            $listDM=loadAll_danhmuc(); 
            include "./sanpham/update.php";
            break;
        case 'updatesp':
            if(isset($_POST['capnhap'])&&($_POST['capnhap'])){
                $id=$_POST['id'];
                $name=$_POST['tensp'];
                $price=$_POST['giasp'];
                $img=$_FILES['hinh']['name'];
                $dir="../uploads/";
                $upload=$dir.basename($_FILES['hinh']['name']);
                if(move_uploaded_file($_FILES['hinh']['tmp_name'],$upload)){

                }
                else {
                    
                }
                $mota=$_POST['mota'];
                $idDm=$_POST['iddm'];
                update_sanpham($id,$name,$price,$img,$mota,$idDm);
                $thongbao="Cập nhập thành công";
            }
            $listsanpham=loadAll_sanpham();     
            $listDM=loadAll_danhmuc();
            include "./sanpham/list.php";
            break;
        // khách hàng
        case 'dskh':
            $listkhachhang=loadAll_khachhang();
            include "./khachhang/list.php";
            break;
        case 'xoakh':
            if(isset($_GET['id']) &&(($_GET['id'])>0)){
                delete_khachhang($_GET['id']);
                }
            $listkhachhang=loadAll_khachhang();
            include "./khachhang/list.php";
            break;
        case 'themadmin':
            if(isset($_GET['id']) &&(($_GET['id'])>0)){
                $iduser=$_GET['id'];
                update_themadmin($iduser);
            }
            $listkhachhang=loadAll_khachhang();
            include "./khachhang/list.php";
            break;
        // bình luận
        case 'listbl':             
            $listbinhluan=loadall_binhluan(0);
            include "./binhluan/list.php";
            break;
        case 'xoabl':
            if(isset($_GET['id']) &&(($_GET['id'])>0)){
            delete_binhluan($_GET['id']);
            }
            $listbinhluan=loadall_binhluan(0);
            include "./binhluan/list.php";
            break;
        case 'listbill':
            if(isset($_POST['listok'])&&($_POST['listok'])){
                $iduser=$_POST['iduser'];
            }
            else {
                $iduser='';
            }
            
            $listbill=loadAll_dsdonhang($iduser);
            include "./dsdonhang/list.php";
            break;
        case 'xoabill':
            if(isset($_GET['idbill']) &&(($_GET['idbill'])>0)){
            delete_dsdonhang($_GET['idbill']);
            }
            $iduser="";
            $listbill=loadAll_dsdonhang($iduser);
            include "./dsdonhang/list.php";
            break;
        case 'suabill':
            if(isset($_GET['idbill']) &&(($_GET['idbill'])>0)){
                $id=$_GET['idbill'];
                $bill=loadOne_bill($id);
            }   
            $iduser="";
            $listbill=loadAll_dsdonhang($iduser);
            include "./dsdonhang/update.php";
            break;
        case 'updatebill':
            if(isset($_POST['capnhap'])&&($_POST['capnhap'])){
                $id=$_POST['idbill'];
                $iduser=$_POST['iduser'];
                $bill_status=$_POST['bill_status'];
                update_bill($id,$iduser,$bill_status);
                $thongbao="Cập nhập thành công";
                }
            $iduser="";
            $listbill=loadAll_dsdonhang($iduser);
            include "./dsdonhang/list.php";
            break;
        case 'listtk':    
            $listtk=loadAll_thongke();
            include "./thongke/list.php";
            break;
        case 'bieudo':    
            $listtk=loadAll_thongke();
            include "./thongke/bieudo.php";
            break;
        case 'home':    
            $spxemnhieu=loadAll_sanpham_home_spxemnhieu();
            $spmoi=loadAll_sanpham_home_spmoi();
            $listtk=loadAll_thongke();
            $blmoi=loadall_blmoi();
            $dhmoi=loadAll_dhmoi();
            include "home.php";
            break;
        default:
            include "home.php";
            break;
    }
 }
 else {
    include "home.php";
 }

 include "footer.php";
  
?>