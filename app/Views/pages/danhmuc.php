<?php require APPROOT.'/views/inc/header.php'?>
<h1 style="text-align:center"><?=$data['tendanhmuc']?></h1>
<div class="danhmuc" id="sidebar">
    <div class="customm">
        <img src="<?=URLROOT?>/img/ic_brands_horz_kfm.svg" alt="">
    </div>
    <div class="kfruit">
        <div class="mr-"><img src="<?=URLROOT?>/img/iconDanhMuc.svg" alt=""></div>
        <div class="contai nvc">
            <div class="account acc ee">
                Danh mục
            </div>
            <div class="login acc pp">
                KFruit
            </div>

        </div>
    </div>
    <div class="sidebar">

        <ul>
            <?php foreach ($data['typeProducts'] as $sanpham) {?>
            <li>
                <a href="<?=URLROOT?>/pages/danhmuc/<?=$sanpham['id_Loai']?>">
                    <div class="nv-c"><img src="<?=URLROOT?>/img/<?=$sanpham['HinhAnh']?>" alt="">
                        <p class="clamp-text"><?=$sanpham['TenLoai']?></p>
                    </div>
                </a>
            </li>
            <?php } ?>
            <!-- Thêm các mục danh sách khác nếu cần -->
        </ul>

    </div>

</div>
<div class="grid-container" style="height: 100vh;">
    <?php if(!sizeof($data['danhmuc']) > 0 ){
        echo '<h2>Không có sản phẩm ở đây !!</h2>';
   }?>
    <?php  
    forEach($data['danhmuc'] as $sanpham){ ?>
    <div class="md2">
            <a href="<?=URLROOT?>/pages/Product/<?=$sanpham['id_SP']?>">
                <img src="<?=URLROOT?>/img/<?=$sanpham['HinhAnh']?>" alt="">
            </a>
            <div class="sale-tt">
                <p style="font-size:20px;line-height:20px"><?=$sanpham['TenSP']?></p>
            </div>
            <div class="sale-tt">
                <p>Giá: <span class="Gia"><?=$sanpham['Gia']?>₫</span></p>
                <button class="add-to-cart-btn" data-product-id="<?=$sanpham['id_SP']?>">Thêm Giỏ Hàng</button></a>
            </div>
            <div class="tietkiem">
                <?=$sanpham['GiaGoc'] > 0 ? '<p style="text-decoration:line-through">Giá Gốc: <span style="text-decoration:none" class="Gia">'.$sanpham['GiaGoc'].'₫</span></p>' : ''?>
                <e><?=$sanpham['MoTa']?></e>
            </div>
        </div>
    <?php } ?>

</div>
<?php require APPROOT.'/views/inc/footer.php'?>
