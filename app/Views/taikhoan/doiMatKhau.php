<?php require APPROOT.'/views/inc/header.php'?>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@500&family=Open+Sans:wght@500&family=Poppins:wght@500;600;700;800;900&display=swap');
      </style>
    <div class="register login-">
        <div class="login-ppp" style="height:300px;">
            <div class="tt1-pp tt-hh">Đổi Mật Khẩu</div>
            <form action="<?=URLROOT?>/users/doiMatKhau/<?=$data['token']?>" id="myForm" method="post">
                <div class="khung-qmk-xn">
                    <label for="matKhauMoi">Mật Khẩu Mới:</label>
                    <input type="password" name="matKhauMoi" placeholder="Nhập Mật Khẩu Mới">
                </div>
                <div class="khung-qmk-xn">
                    <label for="xacNhanMatKhauMoi">Xác Nhận Mật Khẩu Mới:</label>
                    <input type="password" name="xacNhanMatKhauMoi" placeholder="Xác Nhận Mật Khẩu Mới">
                </div>
                <div id="submit_register" class="tt1-pp">
                    <input type="submit" name="xacNhan-btn" value="Xác Nhận" id="button_re">
                </div>
            </form>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<?php require APPROOT.'/views/inc/footer.php'?>
