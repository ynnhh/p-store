<?php
    include_once 'pdo.php';
    function product_hot() {
        $sql="SELECT * FROM SanPham WHERE Hot=1 Limit 0,8";
        return pdo_query($sql);
    }

    function product_category_limit($id) {
        $sql="SELECT * FROM SanPham WHERE MaDanhMuc=? Limit 0,8";
        return pdo_query($sql,$id);
    }

    function product_search($keyword) {
        $sql="SELECT * FROM SanPham WHERE TenSanPham LIKE '%$keyword%' ";
        return pdo_query($sql);
    }

    //lấy sp của 1 danh mục
    function product_category_order_filter($id,$min_price,$max_price,$filter_order){
        $sql="SELECT * FROM SanPham WHERE MaDanhMuc=? AND GiaKhuyenMai>? 
        AND GiaKhuyenMai<? ORDER BY GiaKhuyenMai $filter_order";
        return pdo_query($sql,$id,$min_price,$max_price);
    }

    function product_one($id) {
        $sql="SELECT * FROM SanPham WHERE MaSanPham=?";
        return pdo_query_one($sql,$id);
    }

    function count_product() {
        $sql="SELECT COUNT(*) FROM SanPham";
        return pdo_query_value($sql);
    }

    function product_page($page) {
        $start=($page-1)*5; //(*)
        $sql="SELECT sp.*, dm.TenDanhMuc FROM SanPham sp 
        INNER JOIN DanhMuc dm ON sp.MaDanhMuc=dm.MaDanhMuc LIMIT $start,5";  //lấy 5 phần tử cho mỗi trang
        return pdo_query($sql);
    }
    /* (*)
    page 1: 0---4;
    page 2: 4---9;
    page 3: 10---14; */

    function product_list() {
        $sql="SELECT * FROM SanPham";
        return pdo_query($sql);
    }

    /* function product_add($name, $price, $sale, $description, $image, $quantity, $hot, $status, $category) {
        $sql = "INSERT INTO SanPham (TenSanPham, Gia, GiaKhuyenMai, MoTa, HinhAnh, SoLuong, Hot, TrangThai, MaDanhMuc)
                
                SELECT ?, ?, ?, ?, ?, ?, ?, ?, MaDanhMuc
                FROM DanhMuc
                WHERE TenDanhMuc = ?";             
        return pdo_execute($sql, $name, $price, $sale, $description, $image, $quantity, $hot, $status, $category);
    } */

    function product_add($name,  $price, $sale, $category, $description, $image, $quantity, $hot, $status) {
        $sql = "INSERT INTO SanPham (TenSanPham, Gia, GiaKhuyenMai, MaDanhMuc, MoTa, HinhAnh, SoLuong, Hot, TrangThai)
                VALUES(?,?,?,?,?,?,?,?,?)";          
        return pdo_execute($sql, $name,  $price, $sale, $category, $description, $image, $quantity, $hot, $status);
    }
    
    function product_delete($id) {
        $sql="DELETE FROM SanPham WHERE MaSanPham=?";
        return pdo_execute($sql, $id);
    }

    function product_edit($id, $name,  $price, $sale, $category, $description, $image, $quantity, $hot, $status) {
        $sql="UPDATE SanPham SET TenSanPham=?, Gia=?, GiaKhuyenMai=?, MaDanhMuc=?, MoTa=?, HinhAnh=?, SoLuong=?, Hot=?, TrangThai=? 
        WHERE MaSanPham=?";
        return pdo_execute($sql,$name,  $price, $sale, $category, $description, $image, $quantity, $hot, $status, $id);
    }