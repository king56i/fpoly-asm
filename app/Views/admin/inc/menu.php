<div class="container position-fixed" style="left:0;top:30%;width:248px">
    <div width="100%">
        <div>
            <ul class="nav flex-column nav-pills">
                <li class="nav-item">
                    <a class="nav-link <?php if($data['page']=='QuanLySP'??'') echo 'custom-active'  ?>" data-toggle="pill" href="<?=URLROOT?>/Admin/QuanLySP">Quản lý Sản Phẩm</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($data['page']=='LoaiSP'??'') echo 'custom-active'  ?>" data-toggle="pill" href="<?=URLROOT?>/Admin/LoaiSP">Danh mục thể loại</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($data['page']=='Hang'??'') echo 'custom-active'  ?>" data-toggle="pill" href="<?=URLROOT?>/Admin/Hang">Hãng</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($data['page']=='Users'??'') echo 'custom-active'  ?>" data-toggle="pill" href="<?=URLROOT?>/Admin/Users">Danh sách người dùng</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($data['page']=='DonHang'??'') echo 'custom-active'  ?>" data-toggle="pill" href="<?=URLROOT?>/Admin/DonHang">Đơn Hàng</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="#">Chào <?=$_SESSION['un']??''?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=URLROOT?>" target="public">Public</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=URLROOT?>/users/thoat">Thoát</a>
                </li>
            </ul>
        </div>
    </div>
</div>