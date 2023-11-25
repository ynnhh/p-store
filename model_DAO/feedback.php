<?php
    include_once 'pdo.php';

    function feedback_add($feedback,$idUser,$id) {
        $sql="INSERT INTO BinhLuan(NoiDung,MaKhachHang,MaSanPham) 
        VALUES (?,?,?)";
        return pdo_execute($sql,$feedback,$idUser,$id);
    }

    function feedback_list($id) {
        $sql="SELECT bl.*, kh.* FROM BinhLuan bl INNER JOIN KhachHang kh 
        ON bl.MaKhachHang=kh.MaKhachHang WHERE MaSanPham=?";
        return pdo_query($sql,$id);
    }

    function feedback_list_show() {
        $sql="SELECT * FROM BinhLuan";
        return pdo_query($sql);
    }

    function count_feedback() {
        $sql="SELECT COUNT(*) FROM BinhLuan";
        return pdo_query_value($sql);
    }

    function feedback_page($page) {
        $start=($page-1)*5; //(*)
        $sql="SELECT * FROM BinhLuan LIMIT $start,5";  //lấy 5 phần tử cho mỗi trang
        return pdo_query_value($sql);
    }

    function feedback_delete($id) {
        $sql="DELETE FROM BinhLuan WHERE MaBinhLuan=?";
        return pdo_execute($sql, $id);
    }

    