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


Route::get('/',\App\Http\Controllers\AdminController::class . '@index');
Route::post('/log_admin',\App\Http\Controllers\AdminController::class . '@log_admin');
Route::post('/insererArticle',\App\Http\Controllers\AdminController::class . '@insererArticle');
Route::get('/lister',\App\Http\Controllers\AdminController::class . '@lister');
Route::get('/Versupdate/{id}',\App\Http\Controllers\AdminController::class . '@VersupdateAll');
Route::post('/update',\App\Http\Controllers\AdminController::class . '@updateAll');
Route::get('/delete/{idarticle}',\App\Http\Controllers\AdminController::class . '@delete');
Route::post('/recherche',\App\Http\Controllers\AdminController::class . '@recherche');
Route::get('/pagination/{numero}',\App\Http\Controllers\AdminController::class . '@pagination');
Route::get('/log_out',\App\Http\Controllers\AdminController::class . '@log_out');



Route::get('/front',\App\Http\Controllers\UserController::class . '@index');
Route::post('/log_user',\App\Http\Controllers\UserController::class . '@log_user');
Route::get('/liste',\App\Http\Controllers\UserController::class . '@liste');
Route::get('/article/{id}',\App\Http\Controllers\UserController::class . '@fiche');
Route::post('/searchFront',\App\Http\Controllers\UserController::class . '@searchFront');