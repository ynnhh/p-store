<?php
    require_once '../model_DAO/user_manage.php';
    //include_once '../model_DAO/user.php';
    extract($_REQUEST);
    if(isset($act)) {
        switch ($act) {
            case 'list':
                $i=1;

                $count_user=count_user();  //đếm số lượng sản phẩm
                //print_r($count_user);
                $number_page=ceil($count_user/5); //số lượng trang (ceil làm tròn số trang)
                //print_r($number_page);
                if(!isset($page)) $page=1;
                $user_page=user_page($page); //lấy giá trị page
                //print_r($user_page);
                $dsuser=user_list();
                include_once 'view/template_header.php';
                include_once 'view/page_user_list.php';
                //include_once 'view/template_footer.php';
                break;
            
            case 'delete': 
                user_delete($id);
                header('location: ?mod=user&act=list');
                break;
            
            case 'logout':
                unset($_SESSION['user']);
                header('location: ../?mod=page&act=home');

            case 'edit':
                $user=user_one_manage($id);
                if(isset($editUser_submit)) {
                    if($_FILES['image']['name']!=null){
                        user_edit_manage($id ,$name,  $pass, $_FILES['image']['name'], $status,$power);
                        move_uploaded_file($_FILES['image']['tmp_name'], '../content/img/' . $_FILES['image']['name']);
                        header('location: ?mod=user&act=list');
                    }else {
                        user_edit_manage($id ,$name,  $pass, $user['Anh'], $status, $power);
                        header('location: ?mod=user&act=list');
                    }
                    
                }

                include_once 'view/template_header.php';
                include_once 'view/page_user_edit.php';
                //include_once 'view/template_footer.php';
                break;
            /* case 'login':
                if (isset($login_submit)) {
                    $data=check_login($email,$pass);
                        //print_r($data);
                    if ($data) {
                        $_SESSION['user']=$data;
                        header('location: ?mod=page&act=home');
                    }else {
                        $data='Đăng nhập thất bại';
                    }
                }
                include_once 'view/template_header.php';
                include_once 'view/page_login.php';
                include_once 'view/template_footer.php';
            break;
            
            case 'info':
                $id=$_SESSION['user']['MaKhachHang'];
                $user=user_one($id);
                include_once 'view/template_header.php';
                include_once 'view/page_info.php';
                include_once 'view/template_footer.php';
            break;

            case 'logout':
                unset($_SESSION['user']);
                header('location: ?mod=page&act=home');
            break; */

        }
    }