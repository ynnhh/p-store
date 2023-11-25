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
            include_once 'view/page_product_list.php';
            //include_once 'view/template_footer.php';
        break;

        case 'add':
            $dsdm=category_list();
            if(isset($addProduct_submit)) {
                product_add($name,  $price, $sale, $category, $description, $_FILES['image']['name'], $quantity, $hot, $status);
                move_uploaded_file($_FILES['image']['tmp_name'], '../content/img/' . $_FILES['image']['name']);
                header('location: ?mod=product&act=list');
            }
            include_once 'view/template_header.php';
            include_once 'view/page_product_add.php';
            //include_once 'view/template_footer.php';
        break;

        case 'delete': 
            product_delete($id);
            header('location: ?mod=product&act=list');
        break;

        case 'edit': 
            $sp=product_one($id);
            $dsdm=category_list();
            if(isset($editProduct_submit)) {
                if($_FILES['image']['name']!=null){
                    product_edit($id ,$name,  $price, $sale, $category, $description, $_FILES['image']['name'], $quantity, $hot, $status);
                    move_uploaded_file($_FILES['image']['tmp_name'], '../content/img/' . $_FILES['image']['name']);
                    header('location: ?mod=product&act=list');
                }else {
                    product_edit($id ,$name,  $price, $sale, $category, $description, $sp['HinhAnh'], $quantity, $hot, $status);
                    header('location: ?mod=product&act=list');
                }
                
            }
            include_once 'view/template_header.php';
            include_once 'view/page_product_edit.php';
            include_once 'view/template_footer.php';
        break;
    }
}