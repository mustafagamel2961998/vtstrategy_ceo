<?php

use App\Http\Controllers\Ceo\Dashboard\Home\HomeController;
use App\Http\Controllers\Ceo\Dashboard\Article\ArticleController;
use App\Http\Controllers\Ceo\Dashboard\Consaltation\ConsaltationController;
use App\Http\Controllers\Ceo\Dashboard\Service\ServiceController;
use App\Http\Controllers\Ceo\Dashboard\Contact\ContactController;
use App\Http\Controllers\Ceo\Dashboard\Setting\SettingController;
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

// home
Route::prefix('dashboard')->group(function(){
    
     
    





// contact
    Route::get('messages/readed',function(){
        return view('Dashboard.Contact.readed');
})->name('messages.readed');






//Subscribers
Route::get('Subscriber',function(){
    return view('Dashboard.Subscriber.index');
})->name('Subscriber');




//questions
Route::get('question',function(){
    return view('Dashboard.Question.index');
})->name('question');
Route::get('question/create',function(){
    return view('Dashboard.Question.create');
})->name('question.create');
Route::get('question/edit',function(){
    return view('Dashboard.Question.edit');
})->name('question.edit');




// top clients
Route::get('topclient',function(){
    return view('Dashboard.Topclient.index');
})->name('topclient');
Route::get('topclient/create',function(){
    return view('Dashboard.Topclient.create');
})->name('topclient.create');
Route::get('topclient/edit',function(){
    return view('Dashboard.Topclient.edit');
})->name('topclient.edit');




// add consaltation time
Route::get('addtime',function(){
    return view('Dashboard.Addtime.index');
})->name('addtime');
Route::get('addtime/create',function(){
    return view('Dashboard.Addtime.create');
})->name('addtime.create');


// rate
Route::get('rate',function(){
    return view('Dashboard.Rate.index');
})->name('rate');
Route::get('rate/create',function(){
    return view('Dashboard.Rate.create');
})->name('rate.create');
Route::get('rate/edit',function(){
    return view('Dashboard.Rate.edit');
})->name('rate.edit');


//السياسة والخصوصية
Route::get('Policyandprivacy',function(){
    return view('Dashboard.Policy.index');
})->name('Policyandprivacy');
//الشروط والأحكام
Route::get('TermsandConditions',function(){
    return view('Dashboard.Term.index');
})->name('TermsandConditions');
//سياسة الإسترجاع
Route::get('Returnpolicy',function(){
    return view('Dashboard.Return.index');
})->name('Returnpolicy');



// service
// Route::get('services/updatenumbers',function(){
//     return view('Dashboard.Service.updatenumbers');
// })->name('services.updatenumbers');

// Route::get('services/maininfo',function(){
//     return view('Dashboard.Service.maininfo');
// })->name('services.maininfo');





Route::resource('homes',HomeController::class);
//*******************************************************************************************/
Route::resource('messages', ContactController::class); /// == contacts 
//*******************************************************************************************/
Route::get('services/update/counter/of/numbers',[ServiceController::class,'counterOfNumbersView'])
       ->name('services.update.counter.of.numbers.view');
Route::put('services/update/counter/of/numbers/{id}',[ServiceController::class,'counterOfNumbers'])
       ->name('services.update.counter.of.numbers');
Route::resource('services', ServiceController::class); 
//*******************************************************************************************/
Route::resource('settings',SettingController::class);
//*******************************************************************************************/
Route::resource('articles', ArticleController::class);   
//*******************************************************************************************/
Route::get('consaltaions/postponed',[ConsaltationController::class,'consaltaionPostponedView'])
        ->name('consaltaions.postponed.view');
Route::put('consaltaions/postponed/{id}',[ConsaltationController::class,'consaltaionPostponed'])
        ->name('consaltaions.postponed');
        
Route::resource('consaltaions',ConsaltationController::class);
//*******************************************************************************************/

});




// consaltation
// Route::get('consaltaion',function(){
//     return view('Dashboard.Consaltation.index');
// })->name('consaltaion');
// Route::get('consaltaion/postponed',function(){
//     return view('Dashboard.Consaltation.postponed');
// })->name('consaltaion.postponed');


