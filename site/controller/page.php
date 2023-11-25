<?php
    include_once '../model_DAO/category.php';
    include_once '../model_DAO/product.php';
    extract($_REQUEST);
    if(isset($act)) {
        switch($act) {
            case 'home':
                $dsdm=category_list();
                //print_r($dsdm);
                $sp_hot=product_hot();
                //print_r($sp_hot);
                $sp_nu=product_category_limit(1);  //sp trong danh muc có giới hạn
                //print_r($sp_hot);
                $sp_nam=product_category_limit(2);
                $sp_treem=product_category_limit(3);

                include_once 'view/template_header.php';
                include_once 'view/page_home.php';
                include_once 'view/template_footer.php';
            break;
            case 'search':
                $timkiem=product_search($search);
                //print_r($timkiem);
                
                include_once 'view/template_header.php';
                include_once 'view/page_search.php';
                include_once 'view/template_footer.php';
            break;

            case 'category':
                if(!isset($id)) $id=0;
                if(!isset($min_price)) $min_price=0; // định nghĩa min price
                if(!isset($max_price)) $max_price=99999999;  // định nghĩa max price
                if(!isset($filter_order)) $filter_order="ASC";  // định nghĩa filter order
                $sp_dm=product_category_order_filter($id,$min_price,$max_price,$filter_order);
                //print_r($sp_dm);
                include_once 'view/template_header.php';
                include_once 'view/page_category.php';
                include_once 'view/template_footer.php';
            break;

            case '':
            break;

    }
    }
?>