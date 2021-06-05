<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller0211;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('barang0211', [Controller0211::class,'barang']);
Route::get('pelanggan0211', [Controller0211::class,'pelanggan']);
Route::get('pelanggan0211/cari', [Controller0211::class,'cari']);
Route::get('transaksi0211', [Controller0211::class,'transaksi']);
Route::get('home0211', [Controller0211::class,'home']);
