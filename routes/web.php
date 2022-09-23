<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PermissionController;
use Illuminate\Support\Facades\Auth;
use Dompdf\dompdf;
use App\Http\Controllers\StripeController;

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

Route::get('/welcome', function () {

    
    return view('welcome');
});
Route::get('/roles', [PermissionController::class,'Permission']);

 

// stripe payment routes


Route::get('stripe', [StripeController::class, 'stripe'])->name('stripe');
Route::post('stripe', [StripeController::class, 'stripePost'])->name('stripe.post');
 
// ROUTES FOR FRONTEND

Route::get('/',[WebController::class,'index'])->name('index');
Route::get('/blog',[WebController::class,'blog'])->name('blog');
Route::get('/contact',[WebController::class,'contact'])->name('contact');
Route::get('/help',[WebController::class,'help'])->name('help');
Route::get('/404',[WebController::class,'error'])->name('error');
Route::get('/confirm',[WebController::class,'confirm'])->name('confirm');  
Route::get('/order',[WebController::class,'order'])->name('order');
Route::get('/blog_post',[WebController::class,'blog_post'])->name('blog_post');
Route::get('/order_collection',[WebController::class,'order_collection'])->name('order_collection');
Route::get('/delivery_order',[WebController::class,'delivery_order'])->name('delivery_order');
Route::get('/register',[WebController::class,'register'])->name('register');
Route::get('/table_service',[WebController::class,'table_service'])->name('table_service');
///  ROUTES FOR CART
Route::get('/cart',[CartController::class,'cart'])->name('cart');
Route::get('/add-delivery-to-cart/{id}',[CartController::class,'add_to_Cart_delivery'])->name('add.delivery.cart');
Route::get('/add-collection-to-cart/{id}',[CartController::class,'add_to_Cart_collection'])->name('add.collection.cart');
Route::get('/add-table-service-to-cart/{id}',[CartController::class,'add_to_Cart_table'])->name('add.table.cart');
Route::patch('update-cart', [CartController::class, 'update'])->name('update.cart');
Route::get('/remove-from-cart/{id}', [CartController::class, 'remove'])->name('remove.cart');
Route::post('/checkout', [CartController::class, 'store'])->name('checkout');
Route::get('/print-invoice/{id}', [MainController::class, 'pdf_download'])->name('print.invoice');
// Route::get('generate-invoice-pdf/{id}', array('as'=> 'generate.invoice.pdf', 'uses' => 'MainController@pdf_download'));
// ROUTES FOR BACKEND



Route::middleware(['auth','super'])->group(function (){
    
    Route::get('/add_new_admin',[MainController::class,'add_new_admin'])->name('add_new_admin');
    Route::get('/admin_backend',[MainController::class,'admin_backend'])->name('admin_backend');
 });
Route::middleware(['auth','super','admin'])->group(function (){
    Route::get('/delivery_management',[MainController::class,'delivery_management'])->name('delivery_management');
    Route::get('/payment_marchant',[MainController::class,'payment_marchant'])->name('payment_marchant');
    // CMS PAGES ROUTES    
    Route::get('/cms_home',[MainController::class,'cms_home'])->name('cms_home');
    Route::get('/help_cms',[MainController::class,'help_cms'])->name('help_cms');
    Route::get('/help_card',[MainController::class,'help_card'])->name('help_card');
});
Route::middleware(['auth', 'manager', 'super','admin'])->group(function (){
    Route::get('/add_category',[MainController::class,'add_category'])->name('add_category');
    Route::get('/add_menu_item',[MainController::class,'add_menu_item'])->name('add_menu_item');
});

Route::middleware(['auth'])->group(function (){
    Route::get('/dashboard',[MainController::class,'dashboard'])->name('dashboard');
    Route::get('/category',[MainController::class,'category'])->name('category');
    Route::post('/update_order_status_pending/{id}',[MainController::class,'update_order_status_pending'])->name('update_order_status_pending');
    Route::post('/update_order_status_cancel/{id}',[MainController::class,'update_order_status_cancel'])->name('update_order_status_cancel');
    Route::post('/update_order_status',[MainController::class,'update_order_status'])->name('update_order_status');
    Route::get('/user_profile',[MainController::class,'user_profile'])->name('user_profile');



    //Add Admin & User 

    Route::get('/user_management',[MainController::class,'user_management'])->name('user_management');
    Route::post('/add_user',[MainController::class,'add_user'])->name('add_user');




    Route::get('/business_information',[MainController::class,'business_information'])->name('business_information');
    Route::get('edit_order/{id}',[MainController::class,'edit_order'])->name('edit.order');
    Route::get('/invoice',[MainController::class,'invoice'])->name('invoice');
    Route::get('/menu_items',[MainController::class,'menu_items'])->name('menu_management');
    Route::get('/order_management',[MainController::class,'order_management'])->name('order_management');

    // Route::get('/store_management',[MainController::class,'store_management'])->name('store_management');


    Route::get('email',[Maincontroller::class,'email'])->name('email');
    // ROUTE FOR CRUD
    // update route for home page
    Route::post('/update/{id}',[MainController::class,'update'])->name('update');
    // update route for help page
    route::post('/update2/{id}',[MainController::class,'update2'])->name('update2');

    // Route for help_card (CRUD)
    Route::post('/add_card',[MainController::class,'add_card'])->name('add_card');
    Route::get('/edit/{id}',[MainController::class,'edit'])->name('edit');
    Route::post('/update_card/{id}',[MainController::class,'update_card'])->name('update_card');
    Route::get('/delete/{id}',[MainController::class,'delete'])->name('delete');
    // CRAD ROUTE FOR CARD INFO
    Route::get('/card_info/{id}',[MainController::class,'card_info'])->name('card_info');
    // CRUD ROUTES FOR ADD CAEGORY
    Route::post('/add_categories',[MainController::class,'add_categories'])->name('add_categories');
    Route::get('/edit_category/{id}',[MainController::class,'edit_category'])->name('edit_category');
    Route::post('/update_category/{id}',[MainController::class,'update_category'])->name('update_category');
    Route::get('/delete_category/{id}',[MainController::class,'delete_category'])->name('delete_categoryss');
    // CRUD ROUTES FOR ADD ITEMS
    Route::post('/add_item',[MainController::class,'add_item'])->name('add_item');
    Route::post('/add_ingredients',[MainController::class,'add_ingredients'])->name('add_ingredients');
    // ROUTE FOR UPDATE USERS
    Route::post('/update_user/{id}',[MainController::class,'update_user'])->name('update_user');
    Route::post('/update_password',[MainController::class,'update_password'])->name('update_password');
    Route::post('/update_email',[MainController::class,'update_email'])->name('update_email');
    // CRUD ROUTES FOR MENU MANAGEMENT
    Route::post('/display_menu',[MainController::class,'display_menu'])->name('display_menu');
    Route::get('/edit_menu/{id}',[MainController::class,'edit_menu'])->name('edit_menu');
    Route::post('/update_menu/{id}',[MainController::class,'update_menu'])->name('update_menu');
    Route::get('/delete_menu/{id}',[MainController::class,'delete_menu'])->name('delete_menu');
    // CRUD ROUTES FOR ADD NEW ADMIN
    Route::post('/add_admin',[MainController::class,'add_admin'])->name('add_admin');
    Route::post('/display_admin',[MainController::class,'display_admin'])->name('display_admin');
    Route::get('/edit_admin/{id}',[MainController::class,'edit_admin'])->name('edit_admin');
    Route::post('/update_admin/{id}',[MainController::class,'update_admin'])->name('update_admin');
    Route::get('/delete_admin/{id}',[MainController::class,'delete_admin'])->name('delete_admin');
    // CRUD ROUTES FOR Payment Merchant
    Route::post('/update_payment/{id}',[MainController::class,'update_payment'])->name('update_payment');
    // ROUTE FOR UPDATE EMAIl SETTINGS
    Route::post('/update_email_settings/{id}',[MainController::class,'update_email_settings'])->name('update_email_settings');
    // CRUD ROUTES FOR ADD Order Management
    Route::post('/add_order',[MainController::class,'add_order'])->name('add_order');
    Route::get('/edit_order/{id}',[MainController::class,'edit_order'])->name('edit_order.id');
    Route::post('/update_order/{id}',[MainController::class,'update_order'])->name('update_order');
    Route::get('/delete_order/{id}',[MainController::class,'delete_order'])->name('delete_order');
});
    // Route::get('users', 'Maincontroller@index');
// Route::get('changeStatus', 'Maincontroller@ChangeUserStatus');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
