<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/',[HomeController::class,"index"]);



Route::get('/listing',[HomeController::class,"listing"]);
// Route::get('/{id}',[HomeController::class,"profile"]);
// Route::get('/alllisting/{type}',[HomeController::class,"alllisting"]);
Route::get('/alllisting',[HomeController::class,"alllisting"]);
Route::get('/people',[HomeController::class,"people"]);

Route::get('/birthday',[HomeController::class,"birthday"]);
Route::get('/anniversary',[HomeController::class,"anniversary"]);
Route::get('/national-day',[HomeController::class,"national"]);
Route::get('/nationaldaylisting',[HomeController::class,"nationaldaylist"]);
Route::get('/nationaldayprofile',[HomeController::class,"nationaldayprofile"]);
Route::get('/national-day/{slug}',[HomeController::class,"nationaldayprofile"]);


Route::get('/profile',[HomeController::class,"profile"]);

// -------------Footer links
// Route::get('/pages-about-us',[HomeController::class,"aboutus"]);
// Route::get('/pages-terms-and-conditions',[HomeController::class,"termsconditions"]);
// Route::get('/pages-privacy-policy',[HomeController::class,"privacy"]);
// Route::get('/pages-contact-us',[HomeController::class,"contactus"]);
// Route::get('/pages-disclaimer',[HomeController::class,"disclaimer"]);

Route::get('/{slug}',[HomeController::class,"pages"]);

//------------------ end footer link




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::group(['prefix' => 'admin','middleware' => ['admin']], function () {
    Route::get('/post/import', [PostController::class , 'excel_import_view'])->name('posts.import');
    // Route::get('/posts/import', [PostController::class, 'excel_import_view'])->name('posts.import');
    Route::post('/post/import/store', [PostController::class, 'excel_import'])->name('submit.posts.import');
    Route::get('/post/sample-file', [PostController::class, 'sample_file_download'])->name('posts.sample-file');
});

