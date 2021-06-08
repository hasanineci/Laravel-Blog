<?php

use App\Http\Controllers\admin\AdminIndexController;
use App\Http\Controllers\admin\NewPostController;
use App\Http\Controllers\admin\PostCategoriesController;
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
Route::get('new-post', [NewPostController::class, 'new_post_Get']);
Route::get('posts', [PostCategoriesController::class, 'postCategories_Get']);