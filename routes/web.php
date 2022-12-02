<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPeopleController;
use App\Http\Controllers\BannerControler;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TentangController;

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

Route::post('/logout',[LogoutController::class,'logout']);
// Route::post('/',[LogoutController::class,'authenticate']);

Route::get('/dashboard/admin', function () {
    return view('admin.dashboard.index');
})->name('admin.dashboard.index');

Route::get('/navbar', function () {
    return view('admin.navbar');
})->name('admin.navbar');

Route::get('/sidebar', function () {
    return view('admin.sidebar');
})->name('admin.sidebar');

Route::get('/viewprofil', function () {
    return view('admin.viewprofil');
})->name('admin.viewprofil');

Route::get('/dashboard/users', function () {
    return view('users.dashboard.index');
})->name('users.dashboard.index');

Route::get('/tree', function () {
    return view('admin.tree.index');
})->name('admin.tree.index');

Route::get('/login' , [LoginController::class, 'index'])->name('login');
Route::post('/login' , [LoginController::class, 'auth'])->name('loginauth');

Route::delete('/admin/people/{uuid}/delete', [AdminPeopleController::class, 'destroy'])->name('admin.people.deletePenggunaUtama');
Route::get('/admin/people/{uuid}/edit', [AdminPeopleController::class, 'edit'])->name('admin.people.editPenggunaUtama'); //menampilkan data edit
Route::patch('/admin/people/{uuid}/update', [AdminPeopleController::class, 'update'])->name('admin.people.updatePenggunaUtama'); //proses update edit

Route::get('/admin/people/create', [AdminPeopleController::class, 'create'])->name('admin.people.tambahPenggunaUtama'); //menampilka
Route::post('/admin/people/store', [AdminPeopleController::class, 'store'])->name('admin.people.storePenggunaUtama'); //proses simpan data

Route::get('/admin/people', [AdminPeopleController::class, 'index'])->name('admin.people.kelolaPenggunaUtama');


Route::get('/landingpage',[LandingPageController::class,'index'])->name('landingpage');

Route::get('/', function () {
    return view('admin.dashboard.index');
})->name('admin.dashboard.index');

Route::get('/navbar', function () {
    return view('admin.navbar');
})->name('admin.navbar');

Route::get('/sidebar', function () {
    return view('admin.sidebar');
})->name('admin.sidebar');

Route::get('/tree', function () {
    return view('admin.tree.index');
})->name('admin.tree.index');

Route::get('/index', function () {
    return view('submenu.index');
})->name('submenu.index');

Route::get('/keloladata', [AdminPeopleController::class, 'indexNasab'])->name('user_nasab.kelolaData');

Route::get('/tambahnasab', function () {
    return view('user_nasab.tambahNasab');
})->name('user_nasab.tambahNasab');

Route::get('/editData', function () {
    return view('user_nasab.editData');
})->name('user_nasab.editData');

Route::resource('/banner',BannerControler::class);
Route::resource('/info', InfoController::class);
Route::resource('/kontak', KontakController::class);
Route::resource('/tentang', TentangController::class);

Route::get('/users/profile/view', [PeopleController::class, 'viewProfile'])->name('users.profile.view'); //menampilkan

Route::get('/admin/profile', [AdminProfileController::class, 'index'])->name('admin.profile.index');

Route::get('/admin/profile/edit', [AdminProfileController::class, 'edit'])->name('admin.profile.edit');
Route::patch('/admin/profile/update', [AdminProfileController::class, 'update'])->name('admin.profile.update'); //proses update edit
