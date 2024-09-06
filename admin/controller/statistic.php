<?php
    include '../model_DAO/product.php';
    include '../model_DAO/category.php';
    extract($_REQUEST);
if(isset($act)) {
    switch($act) {
        case 'list':
            $a=1;
            $count_product=count_product();  //đếm số lượng sản phẩm
            //print_r($count_product);
            $number_page=ceil($count_product/5); //số lượng trang (ceil làm tròn số trang)
            if(!isset($page)) $page=1;
            $product_page=product_page($page); //lấy giá trị page
            /* echo "<prev>" ;
            print_r($product_page);
            echo "</prev>" ; */
            $dssp=product_list();
        
            include_once 'view/template_header.php';
            include_once 'view/page_statistic_list.php';
            //include_once 'view/template_footer.php';
        break;
    }
}