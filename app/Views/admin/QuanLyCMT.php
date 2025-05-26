<div class="container">
    <h2 class="py-2 text-center h2 mt-3">BÌNH LUẬN</h2>
    <table class="table table-hover table-bordered">
    <thead  style="background-color: #43dd8b;color:white" >
        <tr>
            <th>Người Bình Luận:</th>
            <th>Nội Dung:</th>
            <th>Ngày Tạo:</th>           
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($data['Comments'] as $sanpham) {
                echo "<tr>
                        <td>$sanpham[Uid]</td>
                        <td>$sanpham[NoiDung]</td>
                        <td>$sanpham[NgayTao]</td>
                    </tr>";
            }
        ?>
    </tbody>
    </table>
</div>