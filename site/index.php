<?php
    session_start();  // lưu mảng 
    extract($_REQUEST);   //-->extract($_REQUEST);
    if(isset($mod)) {
        switch($mod) {
            case 'page':
                include_once 'controller/page.php';
                break;
            
            case 'cart':
                include_once 'controller/cart.php';
                break;
            
            case 'user':
                include_once 'controller/user.php';
                break;
            
            case 'product':
                include_once 'controller/product.php';
                break;
            case 'changepass':
                include_once "controller/reset_password_process.php";
                break;
            case 'resetpass':
                include_once "view/forget-password.php";
                break;
        }
    } else {
        header('location: ?mod=page&act=home');
    }
?>