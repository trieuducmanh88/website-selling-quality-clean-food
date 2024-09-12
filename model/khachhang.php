<?php
    function loadAll_khachhang(){
        $sql = "select * from user";
        $sp = pdo_query($sql);
        return $sp;
    }
    function delete_khachhang($id){
        $sql = "DELETE   FROM user  WHERE idUser =".$id;
        pdo_execute($sql);  
    }
    function update_themadmin($iduser){
        $sql = "update user set role=1 where idUser=".$iduser;
        pdo_execute($sql);

    }
?>