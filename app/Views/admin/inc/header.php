<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="<?=URLROOT?>/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@500&family=Open+Sans:wght@500&family=Poppins:wght@500;600;700;800;900&display=swap"
        rel="stylesheet">
    <title><?=SITEADMIN?></title>
</head>

<body>
<header id="header" class="position-sticky">
        <button class="menu11"><ion-icon name="menu-outline"></ion-icon></button>
        <a href="<?=URLROOT?>" class="logo"><img src="<?=URLROOT?>/img/logo_kasio.jpg" alt=""></a>
        <form action="search_result.php" method="GET" id="form-">
            <div class="search">
                <img src="<?=URLROOT?>/img/loupe (2).png" alt="">
                <input type="text" placeholder=" Tìm kiếm sản phẩm trong KFRUIT" class="search-input" name="keyword">
                <button type="submit" class="button_hidden"></button>
            </div>
        </form>
        <nav class="navigation">
            <a href="#" id="home">Tạp chí</a>
            <a href="#" id="About">Siêu thị</a>
            <a href="<?=URLROOT?>/pages/SanPham">Sản Phẩm</a>
            <a href="#">Thẻ OneLife</a>
            <a>|</a>
            <?php if ( isset($_SESSION['username']) || isset($_SESSION["Uid"]) ) { ?>
                <a class='btn py-1 px-2' href="<?=URLROOT?>/pages/thongtinuser">Chào <?= $data['username'] ?? "" ?></a> &nbsp; 
                <a class="btn ml-3 py-1 px-3" href="<?=URLROOT?>/users/thoat">Thoát</a>
            <?php } ?>   
            <?php if ( !isset($_SESSION['username']) && !isset($_SESSION["Uid"]) ) { ?>
            <a href="<?=URLROOT?>/users/login">
                <div class="mr-"><ion-icon name="person-circle-outline"></ion-icon></div>
                <div class="contai">

                    <div class="login acc">
                        Đăng nhập
                    </div>
                    <div class="account acc">
                        Tài khoản
                    </div>
                </div>
            </a>
            <?php }  ?>
            <a href="#">
                <div class="mr-"><ion-icon name="reader"></ion-icon></div>
                <div class="contai">
                    <div class="login acc">
                        Đặt lại
                    </div>
                    <div class="account acc">
                        Đơn hàng
                    </div>
                </div>
            </a>
            <a href="<?=URLROOT?>/pages/Cart">
                <div class="mr-"><ion-icon name="bag-handle"></ion-icon></div>
                <div class="contai">
                    <div class="account acc">
                        Giỏ hàng
                    </div>
                </div>
                <?php if(isset($_SESSION['Uid'])) { 
                        if(!isset($_SESSION['Cart']) || count($_SESSION['Cart']) < 1){
                            echo '';
                        }else{
                            echo '<div class="SoLuong">'.count($_SESSION['Cart']).'</div>';
                        }
                    }
                ?>
            </a>
            </a>
        </nav>
        <div class="address py-3">
            <div class="dres">Chọn địa chỉ nhận hàng</div>
            <div class="dres mt-3">
                <p><strong>Thẻ OneLife</strong><br/>
                    Đăng nhập để xem số dư</p>
            </div>
        </div>
    </header>
