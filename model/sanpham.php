<?php 
    function insert_sanpham($name,$price,$img,$mota,$idDm){
        $sql = "INSERT INTO sanpham(name,price,img,mota,idDm) VALUES ('$name','$price','$img','$mota','$idDm') ";
        pdo_execute($sql);
    }


    function delete_sanpham($id){
        $sql = "DELETE   FROM sanpham  WHERE idSp =".$id;
        pdo_execute($sql);  
    }
    function loadAll_sanpham_home_traicay(){
        $sql = " SELECT * FROM sanpham where idDm=3 order by idSp desc limit 0,4 ";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    function loadAll_sanpham_home_chebien(){
        $sql = "SELECT * FROM sanpham where idDm=8 order by idSp desc limit 0,4 ";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    function loadAll_sanpham_home_rau(){
        $sql = "SELECT * FROM sanpham where idDm=5 order by idSp desc limit 0,4 ";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    function loadAll_sanpham_home_sptop4(){
        $sql = "SELECT * FROM sanpham where 1 order by luotxem desc limit 0,4 ";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    function loadAll_sanpham_home_sptop8(){
        $sql = "SELECT * FROM sanpham where 1 order by luotxem  desc limit 5,4 ";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    function loadAll_sanpham_spchitiet1($iddm){
        $sql = " SELECT * FROM sanpham where idDm ='".$iddm."' order by idSp desc limit 0,4 ";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    function loadAll_sanpham_spchitiet2($iddm){
        $sql = " SELECT * FROM sanpham where idDm ='".$iddm."' order by idSp desc limit 5,4 ";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }

    function load_ten_dm($iddm){
        if($iddm>0){
            $sql="select * from danhmuc where idDm=".$iddm;
            $dm=pdo_query_one($sql);
            extract($dm);
            return $name;
        }else{
            return "";
        }
    }

    function loadAll_sanpham($iddm=0,$kyw=""){
        $sql = "SELECT * FROM sanpham where 1"; 
        if($kyw!=""){
            $sql.=" and name like '%".$kyw."%'";
        }
        if($iddm>0){
            $sql.=" and idDm ='".$iddm."'";
        }
        $sql.=" order by idSp desc";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }

    function loadOne_sanpham($id){
        $sql = "select * from sanpham where idSP=".$id;
        $sp = pdo_query_one($sql);
        return $sp;
    }
    function update_sanpham1($id,$name,$price,$img,$mota,$view,$idDm){
        if(isset($img)&&($img!="")){
        $sql = "update sanpham set name='".$name."' ,price='".$price."' ,img='".$img."' , mota='".$mota."' , luotxem ='".$view."',idDm='".$idDm."' where idSp=".$id;
        pdo_execute($sql);

    }
        else {
            $sql = "update  sanpham set name='".$name."' ,price='".$price."' , mota='".$mota."', luotxem ='".$view."' ,idDm='".$idDm."' where idSp=".$id;
            pdo_execute($sql);
        }

        
    }

    function update_sanpham($id,$name,$price,$img,$mota,$idDm){
        if(isset($img)&&($img!="")){
        $sql = "update sanpham set name='".$name."' ,price='".$price."' ,img='".$img."' , mota='".$mota."' ,idDm='".$idDm."' where idSp=".$id;
        pdo_execute($sql);

    }
        else {
            $sql = "update  sanpham set name='".$name."' ,price='".$price."' , mota='".$mota."' ,idDm='".$idDm."' where idSp=".$id;
            pdo_execute($sql);
        }

        
    }
    function loadAll_sanpham_home_spmoi(){
        $sql = "SELECT * FROM sanpham where 1 order by idSp desc limit 0,1";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
    function loadAll_sanpham_home_spxemnhieu(){
        $sql = "SELECT * FROM sanpham where 1 order by luotxem desc limit 0,1 ";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
?>