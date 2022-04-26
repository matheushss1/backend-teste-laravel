<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingInfosController;
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

Route::get('/landing_infos', [LandingInfosController::class, 'list']);

Route::get('/generate_landing_infos', [LandingInfosController::class, 'gen_data']);
