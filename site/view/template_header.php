<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- icon boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../content/css/layout.css">
    <link rel="stylesheet" href="../content/css/style.css">
    <link rel="stylesheet" href="../content/css/product_detail.css">
    <script src="../content/js/countdown.js"></script>
</head>
<body>
    <!-- Header -->
    <header class="sticky-top bg-white border pt-0">
        <!-- row-top -->
        <!-- <div class="bg-danger">  
            <div class="container text-white">
                <div class="row">
                    <div class="col-md-6 pt-3">
                        <p class="text-white fs-6"><img src="https://file.hstatic.net/1000402464/file/output-onlinegiftools_9bbbf15c266044699bca3a5635e05246.gif" width="30px" alt=""> MIỄN PHÍ GIAO HÀNG TOÀN QUỐC VỚI ĐƠN HÀNG TRÊN 500K</p>
                    </div>
                    <div class="col-md-6 pt-3 d-flex align-items-end justify-content-end">
                        <p><i class="bi bi-telephone-fill me"></i> HOTLINE: 0987654321 </p>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- menu -->
        <div class="container">
            <nav class="navbar navbar-expand-lg  ">
                <div class="container px-0 mx-0">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse " id="navbarTogglerDemo01">
                    <a class="logo navbar-brand text-center" style="width: 250px" href="index.php"><img src="../content/img/logo1.png" alt="" width="50%"></a>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-uppercase">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="?mod=page&act=home">TRANG CHỦ</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-black" href="?mod=page&act=category&id=1">SẢN PHẨM</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-black" href="?mod=page&act=category&id=2">chăm sóc cá nhân</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-black" href="?mod=page&act=category&id=3">blog</a>
                      </li>
                    </ul>
                    <form method='post' action='?mod=page&act=search' class="d-flex" role="search">
                      <input class="form-control me-2" type="search" placeholder="Nhập tên sản phẩm" name="search">
                      <input class="btn btn-outline-success" type="submit" value="Tìm" >
                    </form>
                    <div class="d-flex align-items-center ms-5">
                        <div id="cart" class="position-relative d-flex justify-content-center align-items-center rounded-circle bg-black bg-opacity-10 px-2 py-1 ">
                            <a href="?mod=cart&act=list">
                                <i class="fa-solid fa-bag-shopping fw-bolder  text-dark fs-4"></i>
                            </a>
                            <div class="">
                                <span id="amount-cart" class="text-white position-absolute top-0 start-75 translate-middle bg-main px-2 rounded-circle">
                                   <?php
                                   // đếm số lượng sản phẩm trong session
                                    if (isset($_SESSION['cart'])) {
                                      echo count($_SESSION['cart']); 
                                    } else echo '0'; 
                                   ?>
                                </span>
                            </div>
                        </div>
                        <div id="account" class="d-flex justify-content-center align-items-center rounded-circle bg-black bg-opacity-10  mx-2 px-2 py-1">
                            <?php if(isset($_SESSION['user'])): ?>
                            <a class="text-decoration-none text-white" href="?mod=user&act=info" >
                                <img class="rounded rounded-5" src="../content/img/<?=$_SESSION['user']['Anh']?>" height=30px width=25px alt=""></a>
                            <?php else: ?>
                            <a class="text-decoration-none text-white" href="?mod=user&act=login" >
                                <i class="bi bi-person-circle fw-bolder fs-5 text-secondary"></i></a>
                            <?php endif; ?>
                        </div>
                     </div>
                  </div>
                </div>
              </nav>
        </div>
    </header>
    <!-- Banner -->
    <div class="row">
        <div class="col-md-9 m-0 p-0">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="../content/img/banner0.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="../content/img/banner1.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="../content/img/banner0.png" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
        <div class="col-md-3 m-0">
            <img class="img-fluid" src="../content/img/banner2.jpg" alt="">
            <img class="img-fluid" src="../content/img/banner3.jpg" alt="">
        </div>
    </div>