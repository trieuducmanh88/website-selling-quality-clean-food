<?php 
    function insert_danhmuc($tenloai,$img){
        $sql = "INSERT INTO danhmuc(name,img) VALUES ('$tenloai','$img') ";
        pdo_execute($sql);
    };


    function delete_danhmuc($id){
        $sql = "DELETE   FROM danhmuc  WHERE idDm =".$id;
        pdo_execute($sql);  
    }

    function loadAll_danhmuc(){
        $sql = "SELECT * FROM danhmuc   order by idDm desc";
        $listDM = pdo_query($sql);
        return $listDM;
    }
    function loadOne_danhmuc($id){
        $sql = "select * from danhmuc where idDm=".$id;
        $dm = pdo_query_one($sql);
        return $dm;
    }

    function update_danhmuc($id,$tenloai,$img){
        if(isset($img)&&($img!="")){
        $sql = "update danhmuc set name='".$tenloai."',img='".$img."' where idDm=".$id;
        pdo_execute($sql);
        }
            else {
                $sql = "update danhmuc set name='".$tenloai."' where idDm=".$id;
                pdo_execute($sql);
            }
    }

?>