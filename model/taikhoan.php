 <?php 
    function insert_taikhoan($user,$pass,$email,$sdt,$address){
        $sql = "INSERT INTO user(user,pass,email,tel,address) VALUES ('$user','$pass','$email','$sdt','$address') ";
        pdo_execute($sql);
    }
    function loadOne_checkuser($user,$pass){
        $sql = "select * from user where user='".$user."' and pass='".$pass."'";
        $checkuser = pdo_query_one($sql);
        return $checkuser;
    }
    function loadAllone_taikhoan($idUser){
        $sql = " SELECT * FROM user where  idUser='".$idUser."'";
        $listtk = pdo_query_one($sql);
        return $listtk;
    }
    function loadAllone_checkemail($email){
        $sql = " SELECT * FROM user where  email='".$email."'";
        $listtk = pdo_query_one($sql);
        return $listtk;
    }
    function update_taikhoan($user,$pass,$email,$sdt,$address,$iduser){
        $sql = "update user set user='".$user."',  pass='".$pass."' ,email='".$email."' ,tel='".$sdt."' ,address='".$address."'  where idUser='".$iduser."'";
        pdo_execute($sql);
        
    }
?>