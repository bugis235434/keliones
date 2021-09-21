<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PagesController;

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

Route::get('/', [PagesController::class, 'welcome']);

Route::get('/about', [PagesController::class, 'about']);
Route::get('/rules', [PagesController::class, 'rules']);

git remote add origin https://bugis235434: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@github.com/bugis235434/keliones.git
