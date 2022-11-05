<?php

use App\Http\Controllers\WalletController;
use App\Models\Wallet;
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


// Route::get('/', [WalletController::class, 'list']);
//Route::post('/add', function () {
//  // dd(request()->request);
//  $attributes = request()->validate([
//    'name' => 'required',
//    'amount' => 'required'
//  ]);
//  Wallet::create($attributes);
//  return redirect("/");
//});

Route::get('/', function () {
//  return view('components.home');
    return "Hello world";
});
