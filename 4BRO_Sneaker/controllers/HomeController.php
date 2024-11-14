<?php

class HomeController
{
    public $modelSanPham;
    public function __construct()
    {
        $this->modelSanPham = new SanPham();
    }
    public function home()
    {
        echo 'day la home';
        echo 'tooi laf khansh chos';
    }
    public function trangChu()
    {
        echo 'dday la trang chu';
    }
    public function danhsachSanPham()
    {
        echo 'dday la danh sach san pham';
        $danhsachSanPham = $this->modelSanPham->getAllProduct();
        // var_dump($danhsachSanPham);
        // die();
        require_once './views/danhsachSanPham.php';
    }
}
