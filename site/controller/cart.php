<?php
    include_once '../model_DAO/product.php';
    extract($_REQUEST);
    if (isset($act)) {
        switch ($act) {
            //thêm giỏ hàng
            case 'add':
                $sp=product_one($id);
                //print_r($sp);
                if(isset($_SESSION['cart'][$id]['sl'])) {
                    $_SESSION['cart'][$id]['sl']+=1;
                }else {
                    // lưu cục bộ
                $_SESSION['cart'][$id]=array(
                    'MaSanPham'=>$sp['MaSanPham'],
                    'TenSanPham'=>$sp['TenSanPham'],
                    'HinhAnh'=>$sp['HinhAnh'],
                    'GiaKhuyenMai'=>$sp['GiaKhuyenMai'],
                    'Gia'=>$sp['Gia'],
                    'sl'=>1
                );
                }
                   
                /* echo '<prev>';
                print_r($_SESSION['cart']);
                echo '</prev>'; */
                //unset($_SESSION['cart']);  xóa session cũ
                include_once 'view/template_header.php';
                include_once 'view/page_cart.php';
                include_once 'view/template_footer.php';
            break;

            case 'list':
                include_once 'view/template_header.php';
                include_once 'view/page_cart.php';
                include_once 'view/template_footer.php';
            break;

            case 'delete':
                unset($_SESSION['cart'][$id]);
                header ('location: ?mod=cart&act=list');
            break;

            case 'increase':
                $_SESSION['cart'][$id]['sl']+=1;
                header ('location: ?mod=cart&act=list');
            break;

            case 'decrease':
                if($_SESSION['cart'][$id]['sl']>1) {
                    $_SESSION['cart'][$id]['sl']-=1;
                }else {
                    unset($_SESSION['cart'][$id]);
                }
                
                header ('location: ?mod=cart&act=list');
            break;
        }
    }