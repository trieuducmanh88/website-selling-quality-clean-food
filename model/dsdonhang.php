<?php
    function loadAll_dsdonhang($iduser){
        $sql = "SELECT * FROM bill "; 
        if($iduser>0){
            $sql.=" where 1 and iduser ='".$iduser."'";
        }
        if($iduser=""){
            $sql.="";
        }
        $sql.=" order by id desc";
        $listbill = pdo_query($sql);
        return $listbill;
    }
    function delete_dsdonhang($id){
        $sql = "DELETE   FROM bill  WHERE id =".$id;
        pdo_execute($sql);  
    }
    function loadAll_cart_count($idbill){
        $sql = "select * from cart where idbill=".$idbill;
        $bill = pdo_query($sql);
        return sizeof($bill);
    }
    function update_bill($id,$iduser,$bill_status){
        $sql = "update bill set id='".$id."',iduser='".$iduser."',bill_status='".$bill_status."' where id=".$id;
        pdo_execute($sql);
    }
    function loadOne_bill($id){
        $sql = "select * from bill as a inner join user as b ON a.iduser=b.idUser where id=".$id;
        $bill = pdo_query_one($sql);
        return $bill;
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
    function loadAll_dhmoi(){
        $sql = "SELECT * FROM bill where 1 order by id desc limit 0,1 "; 
        $listbill = pdo_query($sql);
        return $listbill;
    }
?>