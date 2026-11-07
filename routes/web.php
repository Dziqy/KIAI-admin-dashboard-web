<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KelolaUsersController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\KelolaMajelisController;
use App\Http\Controllers\KelolaRegisterController;
use App\Http\Controllers\DashboardAjukanController;
use App\Http\Controllers\DashboardKajianController;
use App\Http\Controllers\DashboardProfilController;
use App\Http\Controllers\DashboardPengajuanController;
use App\Http\Controllers\KelolaPengajuanController;
use App\Http\Controllers\KelolaAsatidzController;

use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/tes', [RegisterController::class, 'tes']);

Route::get('/', function () {
    return view('index');
});


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);



Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/dashboard/user', [DashboardUserController::class, 'index'])->middleware('auth');
Route::get('/dashboard/user/edit', [DashboardUserController::class, 'edit'])->middleware('auth');
Route::post('/dashboard/user', [DashboardUserController::class, 'update']);

Route::resource('/dashboard/kajian', DashboardKajianController::class);
Route::post('/ada/{kajian}', [DashboardKajianController::class, 'ada']);
Route::post('/libur/{kajian}', [DashboardKajianController::class, 'libur']);
// Route::resource('/dashboard/ajukan', DashboardAjukanController::class)->except(['edit', 'update', 'destroy'])->middleware('auth');

Route::get('/dashboard/profil', [DashboardProfilController::class, 'index']);
Route::post('/dashboard/profil', [DashboardProfilController::class, 'update']);

Route::resource('/dashboard/asatidz/ajukan', DashboardAjukanController::class);
Route::get('/dashboard/asatidz/form_pengajuan', [DashboardPengajuanController::class,'index']);
Route::post('/dashboard/asatidz/form_pengajuan', [DashboardPengajuanController::class,'store']);



Route::resource('/dashboard/kelola_register', KelolaRegisterController::class);
Route::post('/aktif_status_register/{user}', [KelolaRegisterController::class, 'aktif']);

Route::resource('/dashboard/kelola_majelis', KelolaMajelisController::class);
Route::post('/nonAktif_status_majelis/{user}', [KelolaMajelisController::class, 'nonAktif']);

Route::resource('/dashboard/kelola_users', KelolaUsersController::class);
Route::post('/aktif_status_user/{user}', [KelolaUsersController::class, 'aktif']);
Route::post('/nonAktif_status_user/{user}', [KelolaUsersController::class, 'nonAktif']);
Route::post('/role_admin/{user}', [KelolaUsersController::class, 'admin']);
Route::post('/role_takmir/{user}', [KelolaUsersController::class, 'takmir']);

Route::get('/dashboard/kelola_pengajuan', [KelolaPengajuanController::class, 'index']);
Route::post('/terima/{pengajuan}', [KelolaPengajuanController::class, 'terima']);
Route::post('/tolak/{pengajuan}', [KelolaPengajuanController::class, 'tolak']);

Route::resource('/dashboard/kelola_asatidz', KelolaAsatidzController::class);
// Route::post('/unactivated/{asatidz}', [KelolaAsatidzController::class, 'unActivated']);


Route::post('/getkabupaten', [RegisterController::class, 'getkabupaten'])->name('getkabupaten');
Route::post('/getkecamatan', [RegisterController::class, 'getkecamatan'])->name('getkecamatan');
Route::post('/getdesa', [RegisterController::class, 'getdesa'])->name('getdesa');