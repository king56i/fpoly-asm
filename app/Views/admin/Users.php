<div class="container">
    <h2 class="py-2 text-center h2 mt-3">DANH SÁCH NGƯỜI DÙNG</h2>
    <table class="table table-hover table-bordered">
    <thead style="background-color: #43dd8b;color:white" >
        <tr>
            <th>Tên:</th>
            <th>Email:</th>
            <th>Số Điện Thoại:</th>
            <th>Mật Khẩu:</th>
            <th colspan="2">
            <a class="btn btn-success" href="<?=URLROOT?>/admin/UsersForm">Thêm Mới</a>
            </th>            
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($data['Users'] as $sanpham) {
                echo "<tr>
                        <td>$sanpham[HoTen]</td>
                        <td>$sanpham[Email]</td>
                        <td>$sanpham[SoDienThoai]</td>
                        <td>$sanpham[MatKhau]</td>
                        <td style=\"width:60px\"><a href=\"#?idTL=$sanpham[Uid]\"><button class=\"btn btn-success\"><i class='bx bx-edit-alt'></i></button></a></td>
                        <td style=\"width:60px\"><button class=\"btn btn-success\"><i class='bx bx-trash'></i></button></td>
                    </tr>";
            }
        ?>
    </tbody>
</table>
</div>