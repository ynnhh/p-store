<?php
    include_once 'pdo.php';
    
    function check_login($email, $pass) {
        $sql="SELECT * FROM KhachHang WHERE Email=? AND MatKhau=?";
        return pdo_query_one($sql, $email, $pass);
    }
    
    function user_one($id) {
        $sql="SELECT * FROM KhachHang WHERE MaKhachHang=?";
        return pdo_query_one($sql, $id);
    }

    function user_register($name,$email,$pass,$phone,$address,$image){
        $sql="INSERT INTO KhachHang(HoTen,Email,MatKhau,SDT,DiaChi,Anh) 
        VALUES(?,?,?,?,?,?)";
        return pdo_execute($sql,$name,$email,$pass,$phone,$address,$image);
    }

    function user_edit($id,$name,$email,$address,$phone,$image){
        $sql="UPDATE KhachHang SET HoTen=?, Email=?, DiaChi=?, SDT=?, Anh=?
        WHERE MaKhachHang=?";
        return pdo_execute($sql,$name,$email,$address,$phone,$image,$id);
    }
    function user_change_pass($id, $new_pass) {
        $sql = "UPDATE KhachHang SET MatKhau = :new_pass WHERE MaKhachHang = :id";
        $params = array(':new_pass' => $new_pass, ':id' => $id);
        return pdo_executed($sql, $params);
    }

    

    