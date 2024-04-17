<?php

use App\Http\Controllers\Apps\PermissionManagementController;
use App\Http\Controllers\Apps\RoleManagementController;
use App\Http\Controllers\Apps\UserManagementController;
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\ImageUpload;
use App\Http\Controllers\DashboardController;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Apps\Admin\MenuController;
use App\Http\Controllers\Apps\Admin\CategoryController;
use App\Http\Controllers\Apps\Admin\ProductController;
use App\Http\Controllers\Apps\Admin\EventController;
use App\Http\Controllers\Apps\Admin\SpecialProductController;
use App\Http\Controllers\Webs\HomeController;

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

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/upload-image', [DashboardController::class, 'uploadImage'])->name('upload.image');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::name('user-management.')->group(function () {
        Route::resource('/user-management/users', UserManagementController::class);
        Route::resource('/user-management/roles', RoleManagementController::class);
        Route::resource('/user-management/permissions', PermissionManagementController::class);
    });
    Route::name('product-management.')->group(function () {
        Route::resource('/menu', MenuController::class);
        Route::get('menu-change-status', [MenuController::class,'change_status'])->name('menu.change.status');

        Route::resource('/category', CategoryController::class);
        Route::get('category-change-status', [CategoryController::class,'change_status'])->name('category.change.status');

        Route::resource('/product', ProductController::class);
        Route::get('product-change-status', [ProductController::class,'change_status'])->name('product.change.status');

        Route::resource('/events', EventController::class);
        Route::get('events-change-status', [EventController::class,'change_status'])->name('events.change.status');

        Route::resource('/special-products', SpecialProductController::class);
        Route::get('special-products-change-status', [SpecialProductController::class,'change_status'])->name('special-products.change.status');
    });



    Route::resource('image/upload', ImageUpload::class);


        // Route::resource('vendor/product', ProductController::class);



});

Route::get('/error', function () {
    abort(500);
});

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('menus', 'product')->name('website.menus');
    Route::get('cart', 'cart')->name('website.cart');
    Route::get('order_summary', 'createSummary')->name('website.order_summary');
    Route::POST('mailing-list', 'saveIntoMailingList')->name('website.mailing-list');

});
Route::get('/auth/redirect/{provider}', [SocialiteController::class, 'redirect']);

require __DIR__ . '/auth.php';
