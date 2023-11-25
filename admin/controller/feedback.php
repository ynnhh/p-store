<?php
    include '../model_DAO/feedback.php';
    extract($_REQUEST);
    if(isset($act)) {
        switch($act) {
            case 'list':
                $count_feedback=count_feedback();  //đếm số lượng sản phẩm
                //rint_r($count_feedback);
                $number_page=ceil($count_feedback/7); //số lượng trang (ceil làm tròn số trang)
                if(!isset($page)) $page=1;
                $feedback_page=feedback_page($page); //lấy giá trị page
                /* echo "<prev>" ;
                print_r($feedback_page);
                echo "</prev>" ; */
                $dsfb=feedback_list_show();

                include_once 'view/template_header.php';
                include_once 'view/page_feedback_list.php';
                break;

            case 'delete': 
                feedback_delete($id);
                header('location: ?mod=feedback&act=list');
                break;
        }
    }