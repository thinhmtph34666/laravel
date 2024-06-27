<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SinhVienController;
/* 
- Method http
    GET, POST, PUT, PATCH, DELETE
- Base URL
    http://127.0.0.1:8000/
*/

Route:: get('/test', function(){
    echo 'Hello Word';
});

// Trang chủ
Route:: get('/', function(){
    echo 'Đây là trang chủ';
});

// list-product
Route:: get('/list-product', [ProductController::class, 'showProduct']);

// Slug
// http://127.0.0.1:8000/get-product/1/
Route:: get('/get-product/{id}', [ProductController::class, 'getProduct']);

// Parama
// http://127.0.0.1:8000/update-product?id=1&name=Thinh
Route:: get('/update-product', [ProductController::class, 'updateProduct']);

// list-sinhvien
Route:: get('/list-sinhvien', [SinhVienController::class, 'showSinhVien']);