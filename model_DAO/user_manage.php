<?php
    include_once 'pdo.php';

    function user_list() {
        $sql="SELECT * FROM KhachHang";
        return pdo_query($sql);
    }

    function count_user() {
        $sql="SELECT COUNT(*) FROM KhachHang";
        return pdo_query_value($sql);
    }

    function user_page($page) {
        $start=($page-1)*5; //(*)
        $sql="SELECT * FROM KhachHang LIMIT $start,5";  //lấy 5 phần tử cho mỗi trang
        return pdo_query_value($sql);
    }

    function user_delete($id) {
        $sql="DELETE FROM KhachHang WHERE MaKhachHang=?";
        return pdo_execute($sql, $id);
    }
    
    function user_edit_manage($id ,$name,  $pass, $image, $status, $power) {
        $sql="UPDATE KhachHang SET HoTen=?, MatKhau=?, Anh=?, TrangThai=?, Admin=?
        WHERE MaKhachHang=?";
        return pdo_execute($sql,$name, $pass, $image, $status,$power,$id);
    }

function user_one_manage($id) {
        $sql="SELECT * FROM KhachHang WHERE MaKhachHang=?";
        return pdo_query_one($sql, $id);
    }