<?php require APPROOT.'/views/inc/header.php'?>
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
<div class="contai-md" style="height: 100vh;">

        <div class="content">
            <div class="khung-slide">
                <div class="slider mpp-content">
                    <div class="list">
                        <div class="item">
                            <img src="<?=URLROOT?>/img/1.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="<?=URLROOT?>/img/2.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="<?=URLROOT?>/img/3.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="<?=URLROOT?>/img/4.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="<?=URLROOT?>/img/5.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="<?=URLROOT?>/img/6.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="<?=URLROOT?>/img/7.jpg" alt="">
                        </div>
                    </div>
    
                    <div class="buttons">
                        <button id="prev">
                            <</button>
                                <button id="next">></button>
    
                    </div>
    
                    <ul class="dots">
                        <li class="active"></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
                <div class="muc- mpp-content">
                    <div class="muc-2">
                        <div class="muc-3">
                            <div class="muc-4">
                                <div class="svc-t">
                                    <img src="<?=URLROOT?>/img/19264-icon_tcnk_1.png" alt="">
                                    <div class="muc-text clamp-text">
                                        Thế giới trái cây
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="muc-3">
                            <div class="muc-4">
                                <div class="svc-t">
                                    <img src="<?=URLROOT?>/img/5184-rau_cu_trai_cay.png" alt="">
                                    <div class="muc-text clamp-text">
                                        Rau Củ, Trái Cây
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="muc-3">
                            <div class="muc-4">
                                <div class="svc-t">
                                    <img src="<?=URLROOT?>/img/5185-thit_ca_trung_hai_san.png" alt="">
                                    <div class="muc-text clamp-text">
                                        Thịt, Cá, Trứng, Hải Sản
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="muc-3">
                            <div class="muc-4">
                                <div class="svc-t">
                                    <img src="<?=URLROOT?>/img/5198-thuc_pham_dong_mat.png" alt="">
                                    <div class="muc-text clamp-text">
                                        Thực Phẩm Đông - Mát
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="muc-3">
                            <div class="muc-4">
                                <div class="svc-t">
                                    <img src="<?=URLROOT?>/img/5187-banh_keo_ngu_coc_an_sang.png" alt="">
                                    <div class="muc-text clamp-text">
                                        Bánh Kẹo, Ngũ Cốc Ăn Sáng
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="muc-3">
                            <div class="muc-4">
                                <div class="svc-t">
                                    <img src="<?=URLROOT?>/img/5188-dau_an_nuoc_cham_gia_vi.png" alt="">
                                    <div class="muc-text clamp-text">
                                        Dầu Ăn, Nước Chấm, Gia Vị
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="muc-3">
                            <div class="muc-4">
                                <div class="svc-t">
                                    <img src="<?=URLROOT?>/img/5189-bia_ruou_tra_ca_phe_nuoc_giai_khat.png" alt="">
                                    <div class="muc-text clamp-text">
                                        Bia, Rượu, Trà, Cà Phê, Nước Giải Khát
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="muc-3">
                            <div class="muc-4">
                                <div class="svc-t">
                                    <img src="<?=URLROOT?>/img/5190-gao_dau_bot_do_kho_do_hop.png" alt="">
                                    <div class="muc-text clamp-text">
                                        Gạo, Đậu, Bột, Đồ Khô, Đồ Hộp
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Khuyến mãi hot -->
            <div class="discount muc-">

                <div class="top-p">
                    <p>Khuyến mãi HOT</p>
                    <a href="#">Xem tất cả</a>
                </div>

                <div class="md1" id="overflow">
                    <?php
                     foreach ($data['products'] as $sanpham) {
                        if($sanpham['GiaGoc'] > 0){
                        ?>
                        <div class="md2">
                            <a href="<?=URLROOT?>/pages/Product/<?=$sanpham['id_SP']?>">
                                <img src="<?=URLROOT?>/img/<?=$sanpham['HinhAnh']?>" alt="">
                            </a>
                            <div class="sale-tt">
                                <p>Giá: <span class="Gia"><?=$sanpham['Gia']?>₫</span></p>
                                <button class="add-to-cart-btn" data-product-id="<?=$sanpham['id_SP']?>">Thêm Giỏ Hàng</button></a>
                            </div>
                            <div class="tietkiem">
                                <p style="text-decoration:line-through">Giá Gốc: <span class="Gia"><?=$sanpham['GiaGoc']?></span>₫</p>
                                <e><?=$sanpham['MoTa']?></e>
                            </div>
                        </div>
                    <?php }} ?>
                    
                </div>

            </div>
        </div>
    </div>
<?php require APPROOT.'/views/inc/footer.php'?>
