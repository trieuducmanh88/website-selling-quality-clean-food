<?php 
    function insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan){
        $sql = "INSERT INTO binhluan(noidung,iduser,idpro,ngaybinhluan) VALUES ('$noidung','$iduser','$idpro','$ngaybinhluan') ";
        pdo_execute($sql);
    };
    function loadall_binhluan($idpro){
        if($idpro>0){
            $sql = "select * from binhluan as a inner join user as b ON a.iduser=b.idUser where idpro ='".$idpro."' order by id desc" ;
            $listbinhluan = pdo_query($sql);
        }
        else {
            $sql = "select * from binhluan order by id desc" ;
            $listbinhluan = pdo_query($sql);
        }
        return $listbinhluan;
    }
    function delete_binhluan($id){
        $sql = "DELETE   FROM binhluan  WHERE id =".$id;
        pdo_execute($sql);  
    }
    function loadall_blmoi(){
            $sql = "select * from binhluan as a inner join user as b ON a.iduser=b.idUser where 1 order by id desc limit 0,1" ;
            $listbinhluan = pdo_query($sql);
        return $listbinhluan;
    }
?>