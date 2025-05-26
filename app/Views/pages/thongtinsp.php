<?php require APPROOT.'/views/inc/header.php'?>
    <div class="san-pham khung-sp-ct" style="margin-top:200px">
        <img src="<?=URLROOT."/img/". $data['anh']?>" alt="">
        <div class="thong-tin-sp">
            <span>Tên Sản Phẩm:<?=$data['TenSP']?></span>
            <span>Loại Sản Phẩm:<?=$data['LoaiSP']?></span>
            <span>Hãng Sản Phẩm:<?=$data['HangSP']?></span>
            <span>
                Mô tả: 
            </span>

            <p style="color:darkgray;font-weight:light"><?=$data['MoTa']?></p>
            <p>Giá: <span class="Gia"> <?=$data['Gia']?>đ</span></p>
            <?=$data['GiaGoc'] > 0 ? '<p>Giá Gốc: <span class="Gia"> '.$data['GiaGoc'].' đ</span></p>':''?>
            <div class="m-g-hang">
                <button>Mua Hàng</button>
                <button>THÊM Giỏ Hàng</button>
            </div>
        </div>
    </div>
    <div class="thong-tin-sp-ct khung-sp-ct" h>
        <span>Thông Tin Chi Tiết</span>
        <spans style="background-color:rgb(202, 202, 202);display:block;width:200px;height:1px"></spans>
    </div>
    <div class="binh-luan khung-sp-ct">
        <span>Bình Luận Về Sản Phẩm</span>
        <spans style="background-color:rgb(202, 202, 202);display:block;width:200px;height:1px;"></spans>
        <input type="textarea" style="width:70%;height:100px;margin-top:10px;border-radius:10px;border:1px solid" name="binh-luan">
    </div>
<?php require APPROOT.'/views/inc/footer.php'?>
