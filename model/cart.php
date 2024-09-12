<?php
 function tongdonhang(){  
   $tong=0;
   foreach ($_SESSION['mycart'] as $cart){
   
   $ttien=$cart[2]*$cart[4];
   $tong+=$ttien;
   }
    return $tong;

 }
 function insert_bill($iduser,$name,$email,$tel,$address,$pttt,$ngaydathang,$tongdonhang){
   $sql = "INSERT INTO bill(iduser,bill_name,bill_email,bill_address,bill_tel,bill_pttt,ngaydathang,total) VALUES ('$iduser','$name','$email','$address','$tel','$pttt','$ngaydathang','$tongdonhang') ";
   return pdo_execute_return_lastInsertId($sql);
}
function insert_cart($iduser,$idpro,$img,$name,$price,$soluong,$thanhtien,$idbill){
  $sql = "INSERT INTO cart(id_user,idpro,img,name,price,soluong,thanhtien,idbill) VALUES ('$iduser','$idpro','$img','$name','$price','$soluong','$thanhtien','$idbill') ";
  return pdo_execute($sql);
}
function loadOne_bill($idbill){
  $sql = "select * from bill where id=".$idbill;
  $bill = pdo_query_one($sql);
  return $bill;
}
function loadAll_cart($idbill){
  $sql = "select * from cart where idbill=".$idbill;
  $bill = pdo_query($sql);
  return $bill;
}
function loadAll_bill($iduser){
  if($iduser>0){
    $sql = "select * from bill where iduser=".$iduser;
    $listbill = pdo_query($sql);
    return $listbill;
  }

}
function loadAll_cart_count($idbill){
  $sql = "select * from cart where idbill=".$idbill;
  $bill = pdo_query($sql);
  return sizeof($bill);
}
function get_ttdh($n){
  switch ($n){
    case '0':
      $tt="đơn hàng mới";
      break;
    case '1':
      $tt="đang xử lý";
      break;
    case '2':
      $tt="đang giao hàng";
      break;      
    case '3':
      $tt="hoàn tất";
      break;
    default:
      $tt="đơn hàng mới";
      break;
  }
  return $tt;
}
?>