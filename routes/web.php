<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AssetTypeController;
use App\Http\BrandController;


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


Route::get('dashboard',[DashboardController::class, 'dashboard'])->name('admin-dashboard');

$adminPrefix = "admin";
Route::group(['prefix' => $adminPrefix], function() {

    Route::group(['prefix' => 'assets'], function() {
        Route::group(['prefix' => 'asset-type'], function() {
            Route::get('list',[AssetTypeController::class, 'list'])->name('admin.asset.asset-type.list');
            Route::get('add',[AssetTypeController::class, 'addAssest'])->name('admin.asset.asset-type.add');
            Route::post('store',[AssetTypeController::class, 'store'])->name('admin.asset.asset-type.store');
            Route::get('update/{id}',[AssetTypeController::class, 'updateAssest'])->name('admin.asset.asset-type.update');
            Route::post('update-asset-type', [AssetTypeController::class, 'update'])->name('admin.asset.asset-type.update-asset-type');

            Route::get('delete/{id}',[AssetTypeController::class, 'deleteAssest'])->name('admin.asset.asset-type.delete');

        });
    });

});
