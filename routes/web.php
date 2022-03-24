<?php

use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\manufacturerController;
use App\Http\Controllers\UserinfoController;

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

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/manufacturers', function () {
    return view('manufacturers');
});

Route::get('/equipments', function () {
    return view('equipments');
});

Route::get('/userinfos', function () {
    return view('userinfos');
});
Route::get('/hardwares', function () {
    return view('hardwares');
});
//test
Route::get('/db-test', function(){
    /* try{
         \DB::connection()->getPDO();
         $db_name = \DB::connection()->getDatabaseName();
         echo 'Database Connected: '.$db_name;
     } catch(\Exception $e) {
         echo 'None';
     }
     */
     try {         
         echo \DB::connection()->getDatabaseName();     
    } catch (\Exception $e) {
          echo 'None';
    }
 });
 
Route::get('/db-migrate', function() {
    Artisan::call('migrate');
    echo Artisan::output();
});

Route::resource('/manufacturers', ManufacturerController::class);
Route::resource('/equipments', EquipmentController::class);
Route::resource('/userinfos', UserinfoController::class);

 Route::fallback(function(){
    return view('fallback');
});