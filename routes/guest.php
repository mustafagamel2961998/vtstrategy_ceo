<?php

use App\Http\Controllers\Ceo\Guest\Article\ArticleController;
use App\Http\Controllers\Ceo\Guest\Auth\LoginController;
use App\Http\Controllers\Ceo\Guest\Auth\RegisterController;
use App\Http\Controllers\Ceo\Guest\ConsaltationController;
use App\Http\Controllers\Ceo\Guest\Contact\ContactController;
use App\Http\Controllers\Ceo\Guest\Home\HomeController;
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

Route::group(['middleware'=>'visit'],function(){
    
// Guest Route
Route::get('login',[LoginController::class,'login'])->name('login.view');
Route::post('login/method',[LoginController::class,'loginMethod'])->name('login.method');
//****************************************************************************************/
Route::get('register',[RegisterController::class,'register'])->name('register.view');
Route::post('register/store',[RegisterController::class,'registerStore'])->name('register.store');
//****************************************************************************************/
Route::get('/',[HomeController::class,'index'])->name('home.view');
//****************************************************************************************/
Route::resource('articals',ArticleController::class);
//****************************************************************************************/
Route::resource('contacts',ContactController::class);
//****************************************************************************************/
Route::resource('bookingconsaltaions',ConsaltationController::class);
//****************************************************************************************/





// Route::get('/', function () {
//     return view('Guest.Home.index');
// });

Route::get('/about', function () {
    return view('Guest.Home.aboutus');
})->name('about');

// Route::get('/contact', function () {
//     return view('Guest.Home.contact');
// })->name('contact');

Route::get('/bookconsaltation', function () {
    return view('Guest.Home.bookconsaltation');
})->name('bookconsaltation');

// Route::get('/articals', function () {
//     return view('Guest.Home.articals');
// })->name('articals');

// Route::get('/register', function () {
//     return view('Guest.auth.register');
// })->name('register');

// Route::get('/login', function () {
//     return view('Guest.auth.login');
// })->name('login');

Route::get('/OTP', function () {
    return view('Guest.auth.OTP');
})->name('OTP');

Route::get('/resetPassword', function () {
    return view('Guest.auth.resetPassword');
})->name('resetPassword');




Route::get('/policyandprivacy', function () {
    return view('Guest.policies.index');
})->name('policyandprivacy');

Route::get('/termsandconditions', function () {
    return view('Guest.terms.index');
})->name('termsandconditions');

Route::get('/returnpolicy', function () {
    return view('Guest.return.index');
})->name('returnpolicy');

});