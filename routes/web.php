<?php

use App\Http\Controllers\admin\AdminAboutController;
use App\Http\Controllers\admin\AdminIndexController;
use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\admin\AdminNewController;
use App\Http\Controllers\admin\AdminRegisterController;
use App\Http\Controllers\admin\BlogSettingsController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ContactController as AdminContactController;
use App\Http\Controllers\admin\NewPostController;
use App\Http\Controllers\admin\NewUserController;
use App\Http\Controllers\admin\PostCategoriesController;
use App\Http\Controllers\admin\ProfilController;
use App\Http\Controllers\admin\UsersController;
use App\Http\Controllers\front\AboutController;
use App\Http\Controllers\front\ContactController;
use App\Http\Controllers\front\IndexController;
use App\Http\Controllers\front\PostController;
use Illuminate\Support\Facades\Route;

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

/**
 * Front Routes
 */

Route::get('/', [IndexController::class, 'index']);
Route::get('hakkimizda', [AboutController::class, 'about_Get']);
Route::get('iletisim', [ContactController::class, 'contact_Get']);
Route::get('blog', [PostController::class, 'post_Get']);


/**
 * Admin Routes
 */

    
//login
Route::get('login', [AdminLoginController::class, 'admin_login_GET'] )->name('login');
Route::post('login', [AdminLoginController::class, 'admin_login_POST'] );
Route::middleware(['auth'])->group(function () {

    Route::get('/admin', [AdminIndexController::class, 'index']);
    
    //post
    Route::get('admin/new-post', [NewPostController::class, 'new_post_Get']);
    Route::post('admin/new-post', [NewPostController::class, 'new_POST']);
    Route::get('admin/posts', [PostCategoriesController::class, 'postCategories_Get']);
    Route::get('admin/posts/detail/{id?}', [PostCategoriesController::class, 'post_detail_GET']);
    Route::post('admin/posts/detail/{id?}', [PostCategoriesController::class, 'post_detail_POST']);
    
    //profil
    Route::get('admin/profil',[ProfilController::class, 'profil_GET']);
    
    //kategoriler
    Route::get('admin/kategoriler',[CategoryController::class, 'category_GET']);
    Route::get('admin/yeni-kategori', [AdminNewController::class, 'admin_new_kategori_GET']);
    
    //Kullanıcılar
    Route::get('admin/kullanicilar',[UsersController::class, 'users_GET']);
    Route::get('admin/yeni-Kullanici',[NewUserController::class, 'new_user_GET']);
    
    //blog ayarları
    Route::get('admin/blog-ayarlari',[BlogSettingsController::class, 'blog_settings_GET']);
    
    //iletişim
    Route::get('admin/iletisim', [AdminContactController::class, 'contact_GET']);
    Route::post('admin/iletisim', [AdminContactController::class, 'contact_POST']);
    
    //hakkımızda
    Route::get('admin/hakkimizda', [AdminAboutController::class, 'admin_about_GET']);
    Route::post('admin/hakkimizda', [AdminAboutController::class, 'admin_about_POST']);

    Route::get('logout', [AdminLoginController::class, 'logout']);
});