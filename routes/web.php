<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('mystore');
});

Route::get('wfp/{kelas?}', function ($kelas = "Z") {
    //apabila kelas bukan C maka munculkan "bukan kelas saya"
    //apabila kelas c maka keluarkan wfp kelas saya
    if($kelas == "C")
    {
        return "WFP Kelas saya";
    }
    else
    {
        return "Bukan kelas saya";
    }
});

Route::view('/welcome','welcome');

Route::get('Ashley', function () {
    return "Hello WFP C";
});

Route::get('greeting', function () {
    return view('welcome',['name' => 'Ashley']);
});

Route::resource('obat','MedicineController');
Route::resource('kategori_obat','CategoryController');
Route::resource('transaksi','TransactionController');

Route::resource('supplier','SupplierController')
    ->middleware('auth');

Route::post('transactions/showDataAjax/','TransactionController@showAjax')->name('transaction.showAjax');

Route::post('/supplier/getEditForm','SupplierController@getEditForm')
        ->name('supplier.getEditForm')
        ->middleware('auth');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'MedicineController@front_index');
Route::get('cart', 'MedicineController@cart');
Route::get('add-to-cart/{id}', 'MedicineController@addToCart');

Route::get('/checkout','TransactionController@form_submit_front')->middleware(['auth']);
Route::get('/submit_checkout','TransactionController@submit_front')->name('submitcheckout')->middleware(['auth']);
