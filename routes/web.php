<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\Auth\UserAuthController;
use App\Http\Controllers\Auth\FranchiseAuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductcategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\front\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\user\UserOrderController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\backend\UserController;
use App\Models\User;
use App\Models\order;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', [HomeController::class, 'index']);
Route::get('product-details/{id}', [HomeController::class, 'productDetail'])->name('product-details');

Route::get('contact', function () {
    return view('contact');
});
// Route::get('product-detail', function () {
//     return view('product-detail');
// });
Route::get('flashsale', function () {

    return view('flash-sale');
});
Route::get('shop', function () {
    return view('shop');
});




// Admin Routes
Route::get('/admin/register', [AdminAuthController::class, 'showRegisterForm'])->name('admin.register');
Route::post('/admin/register', [AdminAuthController::class, 'register']);
Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login']);
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
Route::get('/admin/dashboard', function () {
    $userCount = User::count();
    $newOrder = order::where('status', 'Pending')->count(); // Count all users
    $Order = order::count(); // Count all users
    return view('admin.dashboard', compact('userCount', 'newOrder', 'Order'));
})->middleware('auth:admin')->name('admin.dashboard');
Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware('auth:admin')->group(function () {
        Route::resource('category', CategoryController::class);
        Route::resource('productcategory', ProductcategoryController::class);
        Route::resource('product', ProductController::class);
        Route::resource('settings', SettingController::class);
        Route::get('/users', [UserController::class, 'index'])->name('users.index');
    });
});
// Vendor Routes
Route::get('/user/register', [UserAuthController::class, 'showRegisterForm'])->name('user.register');
Route::post('/user/register', [UserAuthController::class, 'register'])->name('user.insert');
Route::get('/user/login', [UserAuthController::class, 'showLoginForm'])->name('user.login');
Route::post('/user/login', [UserAuthController::class, 'login'])->name('login');
Route::post('/user/logout', [UserAuthController::class, 'logout'])->name('user.logout');
Route::get('/user/dashboard', function () {
    return view('user.dashboard');
})->middleware('auth:web')->name('user.dashboard');

Route::middleware('auth:web')->group(function () {
    Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
    Route::get('/cart', [CartController::class, 'viewCart'])->name('cart.view');
    Route::post('/cart/remove', [CartController::class, 'removeFromCart'])->name('cart.remove');
    Route::post('/cart/update', [CartController::class, 'updateCart'])->name('cart.update');

    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
    Route::post('/place-order', [OrderController::class, 'placeOrder'])->name('order.place');
    Route::get('/orders', [OrderController::class, 'viewOrders'])->name('orders.view');
    Route::get('/orders/details/{id}', [OrderController::class, 'viewOrdersDetails'])->name('orders.details');


    Route::get('/invoice/download/{id}', [InvoiceController::class, 'downloadInvoice'])->name('invoice.download');
});




Route::get('/franchise/register', [FranchiseAuthController::class, 'showRegisterForm'])->name('franchise.register');
Route::post('/franchise/register', [FranchiseAuthController::class, 'register']);
Route::get('/franchise/login', [FranchiseAuthController::class, 'showLoginForm'])->name('franchise.login');
Route::post('/franchise/login', [FranchiseAuthController::class, 'login']);
Route::post('/franchise/logout', [FranchiseAuthController::class, 'logout'])->name('franchise.logout');
Route::get('/franchise/dashboard', function () {
    return view('franchise.dashboard');
})->middleware('auth:franchise')->name('franchise.dashboard');
