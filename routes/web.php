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
use App\Http\Controllers\Apps\Admin\OrderController;
use App\Http\Controllers\Apps\Admin\SliderController;
use App\Http\Controllers\Apps\Admin\WebsiteSettingController;
use App\Http\Controllers\Apps\Admin\AwardController;
use App\Http\Controllers\Apps\Admin\VideoController;

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
    Route::get('/my-profile', [DashboardController::class,'myProfile'])->name('profile');
    Route::get('/my-profile-update-email', [DashboardController::class,'myProfileUpdateEmail'])->name('myprofileUpdateEmail');
    Route::get('/my-profile-update-name', [DashboardController::class,'myProfileUpdateName'])->name('myprofileUpdateName');
    Route::get('/my-profile-update-password', [DashboardController::class,'myProfileUpdatePassword'])->name('myprofileUpdatePassword');
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
        Route::POST('product-import', [ProductController::class,'importProduct'])->name('product.import');

        

        Route::resource('/special-products', SpecialProductController::class);
        Route::get('special-products-change-status', [SpecialProductController::class,'change_status'])->name('special-products.change.status');

        Route::resource('/slider', SliderController::class);
        Route::get('slider-change-status', [SliderController::class,'change_status'])->name('slider.change.status');


    });

    Route::name('order-management.')->group(function () {
        Route::resource('/order', OrderController::class);
        Route::get('get-order-details', [OrderController::class,'getOrderDetails'])->name('get.order.details');
    });

    Route::name('website-management.')->group(function () {
        Route::resource('/website', WebsiteSettingController::class);
        Route::resource('/awards', AwardController::class);
        
        Route::resource('/video', VideoController::class);
        Route::get('video-change-status', [VideoController::class,'change_status'])->name('video.change.status');

        Route::resource('/events', EventController::class);
        Route::get('events-change-status', [EventController::class,'change_status'])->name('events.change.status');
        Route::resource('/slider', SliderController::class);
        Route::get('slider-change-status', [SliderController::class,'change_status'])->name('slider.change.status');
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
    Route::POST('place-order', 'placeOrder')->name('website.place-order');
});
Route::get('lang/change', [HomeController::class, 'changeLang'])->name('changeLang');
Route::get('/auth/redirect/{provider}', [SocialiteController::class, 'redirect']);

require __DIR__ . '/auth.php';
