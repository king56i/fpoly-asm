<?php
class Pages extends Controller{
    private $userModel;
    private $productModel;
    private $orderModel;
    private $cartModel;
    public function __construct(){
        $this->userModel = $this->model('User');
        $this->productModel = $this->model('Product');
        $this->orderModel = $this->model('DonHang');
        $this->cartModel = $this->model('Cart');
    }
    public function index(){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Lấy ID sản phẩm từ dữ liệu gửi đi
            $id_SP=$_POST['id_SP'];
        
            // Thêm sản phẩm vào giỏ hàng (đoạn mã xử lý giỏ hàng của bạn ở đây)
            // Ví dụ: 
            // addToCart($product_id);
        
            // Phản hồi về cho máy khách
            echo 'Sản phẩm có ID ' . $id_SP . ' đã được thêm vào giỏ hàng.';
        }
        $typeProducts = $this->productModel->typeProducts();
        $productsBrandType = $this->productModel->productsBrandType();
        if(isset($_SESSION['Uid'])){
            $user = $this->userModel->getUser($_SESSION['Uid']);
        }
        $data = [
            'group_id'=>$user->group_id??'',
            'username'=>$user->HoTen??'',
            'products'=>$productsBrandType,
            'typeProducts'=>$typeProducts,
            'anh'=>'trai-buoi.jpg',
            'TenSP'=>'Trái Bưởi',
            'LoaiSP'=>'Trái Cây',
            'Gia'=>'100.000 d'
        ];
        $this->view('pages/index',$data);
    }
    public function Product($id_SP=null){
        $product = $this->productModel->productBrandType($id_SP);
        if(isset($_SESSION['Uid'])){
            $user = $this->userModel->getUser($_SESSION['Uid']);
        }
        $data = [
            'group_id'=>$user->group_id??'',
            'username'=>$user->HoTen??'',
            'anh'=>$product->HinhAnh,
            'TenSP'=>$product->TenSP??'',
            'LoaiSP'=>$product->TenLoai??'',
            'HangSP'=>$product->TenHang??'',
            'Gia'=>$product->Gia??'',
            'GiaGoc'=>$product->GiaGoc??'',
            'MoTa'=>$product->MoTa??''
        ];
        $this->view('pages/thongtinsp',$data);
    }
    public function TapChi(){
        if(isset($_SESSION['Uid'])){
            $user = $this->userModel->getUser($_SESSION['Uid']);
        }
        $this->view('pages/TapChi');
    }
    public function SanPham(){
        $typeProducts = $this->productModel->typeProducts();
        $products =  $this->productModel->getProducts();
        if(isset($_SESSION['Uid'])){
            $user = $this->userModel->getUser($_SESSION['Uid']);
        }
        $data =[
            'group_id'=>$user->group_id??'',
            'username'=>$user->HoTen??'',
            'products'=>$products,
            'typeProducts'=>$typeProducts
        ];
        $this->view('pages/SanPham',$data);
    }
    public function danhmuc($id_Loai=null){
        $typeProducts = $this->productModel->typeProducts();
        $Types = $this->productModel->typesBrandProduct($id_Loai);
        $Type = $this->productModel->typeProduct($id_Loai);
        if(isset($_SESSION['Uid'])){
            $user = $this->userModel->getUser($_SESSION['Uid']);
        }
        $data = [
            'group_id'=>$user->group_id??'',
            'username'=>$user->HoTen??'',
            'tendanhmuc'=>'Danh mục '.$Type->TenLoai,
            'typeProducts'=>$typeProducts,
            'danhmuc'=>$Types,
        ];
        $this->view('pages/danhmuc',$data);
    }
    public function thongtinuser(){
        if(isset($_SESSION['Uid'])){
            $user = $this->userModel->getUser($_SESSION['Uid']);
        }
        $data = [
            'username'=>$user->HoTen??'',
            'Email'=>$user->Email??'',
            'group_id'=>$user->group_id??'',
            'SoDienThoai'=>$user->SoDienThoai??'',
            'VaiTro'=>$user->group_id ?? 0,
            'HinhAnh'=>$user->HinhAnh,
        ];
        $this->view('pages/thongtinuser',$data);
    }
    public function Cart($xoa=null){
        $products=[];
        if(isset($_SESSION['Uid'])) $user = $this->userModel->getUser($_SESSION['Uid']);
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $_SESSION['id_SP']=$_POST['id_SP'];
            if (isset($_SESSION['id_SP'])) $this->cartModel->addToCart($_SESSION['id_SP'],1);
        }
        if(isset($_SESSION['Cart'])){
            if(isset($_GET['cong'])){
                $this->cartModel->tangSoLuong($_GET['cong']);
            }else if(isset($_GET['tru'])){
                $this->cartModel->giamSoLuong($_GET['tru']);
                if($_SESSION['Cart'][$_GET['tru']] == 0){
                    $this->cartModel->removeFromCart($_GET['tru']);
                    unset($_SESSION['Cart']);
                } 
            }else if(isset($xoa)){
                $this->cartModel->removeFromCart($xoa);                
            }
            foreach ($_SESSION['Cart'] as $id_SP => $SoLuong) {
                $product=$this->productModel->getProduct($id_SP);
                $product->SoLuong = $SoLuong??0;
                array_push($products, $product);
            }
        }
        $data=[
            'group_id'=>$user->group_id??'',
            'username'=>$user->HoTen??'',
            'products'=>$products
        ];
            unset($_SESSION['id_SP']);
        $this->view('pages/Cart',$data);
    }
    public function DatHang(){
        $products=[];
        if(isset($_SESSION['Uid'])) $user = $this->userModel->getUser($_SESSION['Uid']);
        if(isset($_SESSION['Cart'])){
            foreach ($_SESSION['Cart'] as $id_SP => $SoLuong) {
                $product=$this->productModel->getProduct($id_SP);
                $product->SoLuong = $SoLuong??0;
                array_push($products, $product);
            }
        }
        
        if(isset($_POST['btn-dat-hang'])){
            $DiaChi = $_POST['DiaChi']??'';
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $status=0;        
                if(isset($_SESSION['Uid'])){
                    $id_DonHang = $this->orderModel->addOrder($_SESSION['Uid'],count($_SESSION['Cart']),$status,$DiaChi);
                    foreach ($_SESSION['Cart'] as $id_SP => $SoLuong) {
                        $product=$this->productModel->getProduct($id_SP);
                        $this->orderModel->addOrderDetail($id_DonHang,$id_SP,$SoLuong,$product->Gia,$product->Gia * $SoLuong);
                    }
                    $orderDetails = $this->orderModel->getOrderDetails($id_DonHang);
                    $totalPrice = 0;
                    foreach ($orderDetails as $detail) {
                        $totalPrice += $detail['TongSoTien'];
                    }
                    $this->orderModel->updateTotalPrice($id_DonHang, $totalPrice);
                    $datHangThanhCong = "Đặt Hàng Thành Công";
                    unset($_SESSION['Cart']);
                }else header('Location:'.URLROOT.'/users/login');
            }
        }
        $data=[
            'group_id'=>$user->group_id??'',
            'username'=>$user->HoTen??'',
            'SoDienThoai'=>$user->SoDienThoai??'',
            'Email'=>$user->Email??'',
            'products'=>$products,
            'datHangThanhCong'=>$datHangThanhCong??null
        ];
        $this->view('pages/DatHang',$data);
    }
}