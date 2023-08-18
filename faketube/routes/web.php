<?php

use App\Http\Controllers\ChannelController;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});



// Route::get('/companies', function () {
//     return view('welcome');
// });

//Route::resource("companies", CompanyController::class);
Route::get("channels",[ChannelController::class,"index"])->name("channels.index");
Route::get("channels/create", [ChannelController::class,"create"])->name("channels.create");

Route::get("channels/{ChannelID}/edit", [ChannelController::class,"edit"])->name("channels.edit");

Route::post("channels", [ChannelController::class,"store"])->name("channels.store");
Route::put("channels/{ChannelID}", [ChannelController::class,"update"])->name("channels.update");
Route::delete("channels/{ChannelID}", [ChannelController::class, "destroy"])->name("channels.destroy");

Route::get("channels/{ChannelID}/delete", [ChannelController::class,"destroy"])->name("channels.destroy"); //Tôi cần FORM

// Route::resource("posts", PostController::class);
