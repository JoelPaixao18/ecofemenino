<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\ModelsController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\FuelController;
use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\SupplierController;
use App\Model\Models;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\DriverController;
use App\Models\Brand;
use App\Http\Controllers\Admin\ReserveController; 



/*-------------------------------------------------------
                    Site routes
-------------------------------------------------------*/

Route::get('/', [HomeController::class, 'index'])->name('site.home');
Route::get('/contact', [HomeController::class, 'contact'])->name('site.contact');
Route::get('/about', [HomeController::class, 'about'])->name('site.about');
Route::get('/news', [HomeController::class, 'news'])->name('site.news');
Route::get('/news/profile', [HomeController::class, 'newsProfile'])->name('site.news.profile');
Route::get('/news/notice', [HomeController::class, 'newsNotice'])->name('site.news.notice');
Route::get('/news/event', [HomeController::class, 'newsEvent'])->name('site.news.event');
/* {{-- This Route need id event --}} */
Route::get('/news/event/detail', [HomeController::class, 'newsEventDetail'])->name('site.news.event.detail');
Route::get('/news/article', [HomeController::class, 'newsArticle'])->name('site.news.article');
Route::get('/multimedia', [HomeController::class, 'multimedia'])->name('site.multimedia');
Route::get('/youth', [HomeController::class, 'youth'])->name('site.youth');


/*-------------------------------------------------------
                    Dashboard routes
-------------------------------------------------------*/

Route::get('/admin', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/admin/analytics', [DashboardController::class, 'analytics'])->name('analytics');

/*-------------------------------------------------------
                    color routes
-------------------------------------------------------*/

Route::prefix('/admin/colors')->name('colors.')->group(function () {
    Route::get('/', [ColorController::class, 'index'])->name('index');
    Route::get('/create', [ColorController::class, 'create'])->name('create');
    Route::post('/', [ColorController::class, 'store'])->name('store');
    Route::get('colorView/{color}', [ColorController::class, 'show'])->name('show');
    Route::get('colorEdit/{color}/edit', [ColorController::class, 'edit'])->name('edit');
    Route::put('/{color}', [ColorController::class, 'update'])->name('update');
    Route::get('/{color}', [ColorController::class, 'destroy'])->name('destroy');
    Route::get('/trashed', [ColorController::class, 'trashed'])->name('trashed');
    Route::post('/{color}/restore', [ColorController::class, 'restore'])->name('restore');
});

/*-------------------------------------------------------
                    modelos routes
-------------------------------------------------------*/

Route::prefix('/admin/models')->name('models.')->group(function () {
    Route::get('/', [ModelsController::class, 'index'])->name('index');
    Route::get('/create', [ModelsController::class, 'create'])->name('create');
    Route::post('/', [ModelsController::class, 'store'])->name('store');
    Route::get('modelView/{models}', [ModelsController::class, 'show'])->name('show');
    Route::get('modelEdit/{models}/edit', [ModelsController::class, 'edit'])->name('edit');
    Route::put('/{models}', [ModelsController::class, 'update'])->name('update');
    Route::get('/{models}', [ModelsController::class, 'destroy'])->name('destroy');
    Route::get('/trashed', [ModelsController::class, 'trashed'])->name('trashed');
    Route::post('/{models}/restore', [ModelsController::class, 'restore'])->name('restore');
});

/*-------------------------------------------------------
                    brand routes
-------------------------------------------------------*/

Route::prefix('/admin/brands')->name('brands.')->group(function () {
    Route::get('/', [BrandController::class, 'index'])->name('index');
    Route::get('/create', [BrandController::class, 'create'])->name('create');
    Route::post('/', [BrandController::class, 'store'])->name('store');
    Route::get('brandView/{brand}', [BrandController::class, 'show'])->name('show');
    Route::get('brandEdit/{brand}/edit', [BrandController::class, 'edit'])->name('edit');
    Route::put('/{brand}', [BrandController::class, 'update'])->name('update');
    Route::get('/{brand}', [BrandController::class, 'destroy'])->name('destroy');
    Route::get('/trashed', [BrandController::class, 'trashed'])->name('trashed');
    Route::post('/{brand}/restore', [BrandController::class, 'restore'])->name('restore');
});

/*-------------------------------------------------------
                    fuel routes
-------------------------------------------------------*/

Route::prefix('/admin/fuels')->name('fuels.')->group(function () {
    Route::get('/', [FuelController::class, 'index'])->name('index');
    Route::get('/create', [FuelController::class, 'create'])->name('create');
    Route::post('/', [FuelController::class, 'store'])->name('store');
    Route::get('fuelView/{fuel}', [FuelController::class, 'show'])->name('show');
    Route::get('fuelEdit/{fuel}/edit', [FuelController::class, 'edit'])->name('edit');
    Route::put('/{fuel}', [FuelController::class, 'update'])->name('update');
    Route::get('/{fuel}', [FuelController::class, 'destroy'])->name('destroy');
    Route::get('/trashed', [FuelController::class, 'trashed'])->name('trashed');
    Route::post('/{fuel}/restore', [FuelController::class, 'restore'])->name('restore');
});

/*-------------------------------------------------------
                    car routes
-------------------------------------------------------*/

Route::prefix('/admin/cars')->name('cars.')->group(function () {
    Route::get('/', [CarController::class, 'index'])->name('index');
    Route::get('/create', [CarController::class, 'create'])->name('create');
    Route::post('/', [CarController::class, 'store'])->name('store');
    Route::get('carView/{car}', [CarController::class, 'show'])->name('show');
    Route::get('carEdit/{car}/edit', [CarController::class, 'edit'])->name('edit');
    Route::put('/{car}', [CarController::class, 'update'])->name('update');
    Route::get('/{car}', [CarController::class, 'destroy'])->name('destroy');
});

Route::get('/get-models-by-brand/{brandId}', [ModelsController::class, 'getModelsByBrand']);

/*-------------------------------------------------------
                    supplier routes
-------------------------------------------------------*/

Route::prefix('/admin/suppliers')->name('suppliers.')->group(function () {
    Route::get('/', [SupplierController::class, 'index'])->name('index');
    Route::get('/create', [SupplierController::class, 'create'])->name('create');
    Route::post('/', [SupplierController::class, 'store'])->name('store');
    Route::get('supplierView/{supplier}', [SupplierController::class, 'show'])->name('show');
    Route::get('supplierEdit/{supplier}/edit', [SupplierController::class, 'edit'])->name('edit');
    Route::put('/{supplier}', [SupplierController::class, 'update'])->name('update');
    Route::delete('/{supplier}', [SupplierController::class, 'destroy'])->name('destroy');
});

/*-------------------------------------------------------
                    client routes
-------------------------------------------------------*/

Route::prefix('/admin/clients')->name('clients.')->group(function () {
    Route::get('/', [ClientController::class, 'index'])->name('index');
    Route::get('/create', [ClientController::class, 'create'])->name('create');
    Route::post('/', [ClientController::class, 'store'])->name('store');
    Route::get('clientView/{client}', [ClientController::class, 'show'])->name('show');
    Route::get('clientEdit/{client}/edit', [ClientController::class, 'edit'])->name('edit');
    Route::put('/{client}', [ClientController::class, 'update'])->name('update');
    Route::delete('/{client}', [ClientController::class, 'destroy'])->name('destroy');
});

Route::prefix('/admin/drivers')->name('drivers.')->group(function () {
    Route::get('/', [DriverController::class, 'index'])->name('index');
    Route::get('/create', [DriverController::class, 'create'])->name('create');
    Route::post('/', [DriverController::class, 'store'])->name('store');
    Route::get('driverView/{driver}', [DriverController::class, 'show'])->name('show');
    Route::get('driverEdit/{driver}/edit', [DriverController::class, 'edit'])->name('edit');
    Route::put('/{driver}', [DriverController::class, 'update'])->name('update');
    Route::delete('/{driver}', [DriverController::class, 'destroy'])->name('destroy');
});

Route::prefix('/admin/reserves')->name('reserves.')->group(function () {
    Route::get('/', [ReserveController::class, 'index'])->name('index');
    Route::get('/create', [ReserveController::class, 'create'])->name('create');
    Route::post('/', [ReserveController::class, 'store'])->name('store');
    Route::get('reserveView/{id}', [ReserveController::class, 'show'])->name('show');
    Route::get('reserveEdit/{id}/edit', [ReserveController::class, 'edit'])->name('edit');
    Route::put('/{id}', [ReserveController::class, 'update'])->name('update');
    Route::delete('/{id}', [ReserveController::class, 'destroy'])->name('destroy');
});