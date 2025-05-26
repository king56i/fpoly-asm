<?php

class Users extends Controller{
    private $userModel;
    public function __construct(){
        $this->userModel = $this->model('User');
    }
    public function login(){
        if(isset($_POST['submit'])){
            $Email = $_POST['Email']??"";
            $MatKhau = $_POST['MatKhau']??"";
            $user = $this->userModel->getUserByEmail($Email);
            if($user && $MatKhau == $user->MatKhau){
                $_SESSION['Uid'] = $user->Uid;
                $_SESSION['username'] = $user->HoTen;
                header("Location: ".URLROOT);
            }    
        }
        $data=[];
        $this->view('taikhoan/login',$data);
    }
    public function register(){
        if(isset($_POST['submit'])){
            $HoTen = $_POST['HoTen']??"";
            $Email = $_POST['Email']??"";
            $SoDienThoai = $_POST['SoDienThoai']??"";
            $MatKhau = $_POST['MatKhau']??"";
            $confirm_password = $_POST['confirm_password']??"";
            // var_dump($HoTen);
            if($MatKhau==$confirm_password){
                $this->userModel->addUser($HoTen,$Email,$SoDienThoai,$MatKhau);
                header("Location: ".URLROOT."/users/login");
            }
        }
        $data = [];
        $this->view('taikhoan/register',$data);
    }
    public function thoat(){
        session_destroy();
        header('Location: ' . URLROOT); 
    }
    public function quenMatKhau(){
        $users = $this->userModel->getUsers();
        if(isset($_POST['quenMatKhau'])){
            $Email = $_POST['Email']??'';
            foreach($users as $user){
                if($Email == $user['Email']){
                    $Uid = $user['Uid'];
                    $token = $this->userModel->generateToken();
                    $this->userModel->uidToken($Uid,$token);
                    $this->userModel->xacNhanEmail($Email,$token);
                }else{
                    $error_email = 'Bạn Chưa Đăng Ký Bằng Tài Khoản Này!';
                }
            }
        }
        $data=[
            'title'=>"Quên Mật Khẩu",
            'error_email' => $error_email??null
        ];
        $this->view('taikhoan/quenMatKhau',$data);
    }
    public function doiMatKhau($token = null){
        if(isset($_POST['xacNhan-btn'])){
            $matKhauMoi = $_POST['matKhauMoi']??'';
            $xacNhanMatKhauMoi = $_POST['xacNhanMatKhauMoi']??'';
            if($matKhauMoi == $xacNhanMatKhauMoi){
                $this->userModel->doiMatKhau($matKhauMoi,$token);
                header('Location:'.URLROOT.'/users/login');
            }
        }
        $data=[
            'title'=>"Xác Nhận Email",
            'token'=> $token,
        ];
        $this->view('taikhoan/doiMatKhau',$data);
    }
}
?>