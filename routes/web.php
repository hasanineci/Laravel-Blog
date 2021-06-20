<?php

use App\Http\Controllers\admin\AdminIndexController;
use App\Http\Controllers\admin\BlogSettingsController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ContactController as AdminContactController;
use App\Http\Controllers\admin\NewPostController;
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

Route::get('/admin', [AdminIndexController::class, 'index']);
Route::get('admin/new-post', [NewPostController::class, 'new_post_Get']);
Route::get('admin/posts', [PostCategoriesController::class, 'postCategories_Get']);
Route::get('admin/profil',[ProfilController::class, 'profil_GET']);
Route::get('admin/kategoriler',[CategoryController::class, 'category_GET']);
Route::get('admin/kullanicilar',[UsersController::class, 'users_GET']);
Route::get('admin/blog-ayarlari',[BlogSettingsController::class, 'blog_settings_GET']);
Route::get('admin/iletisim', [AdminContactController::class, 'contact_GET']);