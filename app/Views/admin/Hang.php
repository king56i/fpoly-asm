<div class="container">
    <h2 class="py-2 text-center h2 mt-3">QUẢN LÝ HÃNG</h2>
    <table class="table table-hover table-bordered">
    <thead  style="background-color: #43dd8b;color:white" >
        <tr>
            <th>Tên Hãng</th>
            <th>Hình Ảnh</th>
            <th>Ẩn Hiện</th>
            <th>Mô Tả</th>
            <th>Url</th>
            <th>Người Tạo</th>
            <th colspan="2">
            <a class="btn btn-success" href="<?=URLROOT?>/admin/HangForm">Thêm Mới</a>
            </th>            
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($data['brandProducts'] as $sanpham) {
                echo "<tr>
                        <td>$sanpham[TenHang]</td>
                        <td><img src='".URLROOT."/img/$sanpham[HinhAnh]' style='width:150px;margin:0 auto'/></td>
                        <td>$sanpham[AnHien]</td>
                        <td>$sanpham[MoTa]</td>
                        <td>$sanpham[Urlhang]</td>
                        <td>$sanpham[Uid]</td>
                        <td style=\"width:60px\"><a href='".URLROOT."/admin/HangForm/".$sanpham['id_Hang']."'><button class=\"btn btn-success\"><i class='bx bx-edit-alt'></i></button></a></td>
                        <td style=\"width:60px\"><button class=\"btn btn-success\" onclick='deleteHSP($sanpham[id_Hang])'><i class='bx bx-trash'></i></button></td>
                    </tr>";
            }
        ?>
    </tbody>
</table>
</div>
<script>
     deleteHSP=(id)=>{
         let check=confirm("Bạn có chắc chắn xóa không ??")
         console.log(id);
       if(check){
         $.post("<?=URLROOT?>/admin/xoaHSP", {'id_Hang':id}, (data)=>{
            if(data== 0) location.reload();          
            else console.log(data);    
         })
       }
     }
 </script>