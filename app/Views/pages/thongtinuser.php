<?php require APPROOT.'/views/inc/header.php'?>
    <div class="san-pham khung-sp-ct" id="user" style="margin-top:200px;gap:20px;padding:25px;border-radius:10%">
        <img src="<?=URLROOT."/img/". $data['HinhAnh']?>" style="border-radius:50%" width="100px" alt="">
        <input type="file" id="avatar" style="display:none">
        <div class="thong-tin-sp">
            <span>Tên Người Dùng: <?=$data['username']?></span>
            <span>Email: <?=$data['Email']?></span>
            <span>Số Điện Thoại: <?=$data['SoDienThoai']?></span>
            <span>Vai Trò: <?=$data['VaiTro'] == 0 ? 'Người Dùng':'Admin' ?></span>
        </div>
    </div>
    <script>
        document.querySelector('#user img').addEventListener('click',(e)=>{
            document.querySelector('#avatar').click();
        });
        document.querySelector('#avatar').addEventListener('change',(e)=>{
            const file = e.target.files[0];
        })
    </script>
<?php require APPROOT.'/views/inc/footer.php'?>