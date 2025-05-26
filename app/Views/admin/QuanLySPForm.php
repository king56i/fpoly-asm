<?php require_once __DIR__.'/inc/header.php';?>
<div class="container position-static" style="height:80vh;margin-top:20%">
<!-- Tab panes -->
 <div class="tab-content">
   <div class="tab-pane active" id="">  
   &nbsp;       
   <div class="container col-8 m-auto">
   <h2 class="py-2 text-center h4 ">Form</h2>
   <form action="<?=URLROOT?>/admin/QuanLySPForm/<?=$data['id_SP']?>" method="post" enctype="multipart/form-data">
      <div class="form-line active">
            <label for="name">Tên Sản Phẩm:</label>
            <input type="text" name="name" value="<?=$data['TenSP']??""?>" class="form-control">
      </div>
      <div class="form-line">
            <label style="min-width:10px" for="HinhAnh">Hình Ảnh:</label>
            <input type="file" name="HinhAnh" value="<?=$data['HinhAnh']?>"> 
      </div>
      <div class="form-line">
               <label for="id_Loai">Trong loại sản phẩm:</label>
               <select name="id_Loai" class="form-control bg-light my-2">
                  <option value="0">--Chọn loại sản phẩm--</option>
                  <?php
                  foreach ($data['listLSP'] as $sanpham) {
                     if ($sanpham['id_Loai'] == $data['LoaiSP'])
                     echo "<option selected value='$sanpham[id_Loai]' > $sanpham[TenLoai] </option>";
                     else
                     echo "<option value='$sanpham[id_Loai]' > $sanpham[TenLoai] </option>";
                  }
                  ?>
               </select>
               <label for="id_Hang">Trong hãng sản phẩm:</label>
               <select name="id_Hang"class="form-control bg-light my-2">
                  <option value="0">--Chọn hãng sản phẩm--</option>
                  <?php
                  foreach ($data['listHSP'] as $sanpham) {
                     if ($sanpham['id_Hang'] == $data['HangSP'])
                     echo "<option selected value='$sanpham[id_Hang]' > $sanpham[TenHang] </option>";
                     else
                     echo "<option value='$sanpham[id_Hang]'> $sanpham[TenHang] </option>";
                  }
                  ?>
               </select>
            </div>
      <div class="form-line">
            <label for="Gia">Giá:</label>
            <input type="text" name="Gia" value="<?=$data['Gia']??""?>" class="form-control">
      </div>
      <div class="form-line">
            <label for="GiaGoc">Giá Gốc:</label>
            <input type="text" name="GiaGoc" value="<?=$data['GiaGoc']??""?>" class="form-control">
      </div>
      <div class="form-line">
            <label for="MoTa">Mô Tả:</label>
            <input type="text" name="MoTa" value="<?=$data['MoTa']??""?>" class="form-control">
      </div>
      <button class="btn btn-success px-3 mt-3" name="submit">Lưu</button>
   </form>
   </div>
   </div> <!-- tab-pane-->
 </div>
</div>
<?php require_once __DIR__.'/inc/footer.php';?>

   <!-- Nav tabs -->