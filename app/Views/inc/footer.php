<footer style="margin-top:auto">
        <div class="boxfooter">
            <div class="footer-content">
            <img src="<?=URLROOT?>/img/logo_kasio1.jpg" alt="">
                <hr>
                <ul>
                    <li><a href="#">Tuyển dụng</a></li>
                    <li><a href="#">App OneLife</a></li>
                    <li><a href="#">Thẻ OneLife</a></li>
                    <li><a href="#">Chương trình</a></li>
                    <li><a href="#">Thành viên KFruit</a></li>
                    <li><a href="#">Tạp chí</a></li>
                </ul>
                <hr>
                <div class="center">
                    <div class="adress">
                        <p><strong>CÔNG TY CỔ PHẦN KING FOOD MARKET</strong></p>
                        <e><strong>Địa chỉ: </strong>571 Huỳnh Tấn Phát, Tân Thuận Đông, Quận 7, Thành phố Hồ Chí Minh
                        </e><br>

                        <e><strong>GPĐKKD:</strong> 0313403198 do sở KH & ĐT TP.HCM cấp ngày 17/08/2015. <br>
                            Giấy phép bán lẻ rượu số 299/GP-PKT do Phòng Kinh Tế Quận 7 cấp ngày 06/04/2020.</e>
                    </div>

                    <div class="adress ppc">
                        `<p><strong>Liên hệ chăm sóc khách hàng</strong></p>
                        <e><strong>Tổng đài miễn phí: </strong>1800 6804(7:00 - 21:00 hàng ngày)</e>
                        <e><strong>Email:</strong>hotro@kingfoodmart.com</e>
                    </div>
                    <div class="adress">
                        <img src="<?=URLROOT?>/images/ic_bct.png" alt="">
                    </div>
                </div>
                <p class="hh-1">Chính sách bảo mật - Chính sách giao hàng - Chính sách thanh toán - Chính sách đổi trả -
                    Hướng dẫn mua hàng</p>
            </div>

        </div>
    </footer>


<script>
Array.from(document.querySelectorAll('.Gia'), element =>{ 
    element.textContent = parseFloat(element.textContent.slice(0, -1)).toLocaleString('vi-VN', { style: 'currency', currency: 'VND' })
});
    Array.from(document.querySelectorAll('.add-to-cart-btn'), element => element.addEventListener('click',function(event){
        event.preventDefault();
        let id_SP = this.getAttribute('data-product-id');
        let xhr = new XMLHttpRequest();
        xhr.open('POST', '<?=URLROOT?>/Pages/Cart', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {
            if (xhr.status >= 200 && xhr.status < 300) {
                alert('Sản phẩm đã được thêm vào giỏ hàng thành công!');
            } else {
                alert('Đã xảy ra lỗi khi thêm sản phẩm vào giỏ hàng.');
            }
        };
        xhr.onerror = function() {
            alert('Đã xảy ra lỗi khi thực hiện yêu cầu.');
        };
        xhr.send('id_SP='+id_SP);
    }))
</script>
    <script script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"> </script>
    <script script nomodule src="https://unpkg .com/ionicons@7.1.0/dist/ionicons/ionicons.js">s</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="<?=URLROOT?>/js/js.js"></script>
    <script src="<?=URLROOT?>/js/main.js"></script>
</body>
</html>