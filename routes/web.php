<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CitizenController;
use App\Http\Controllers\ReportCitizenController;
use App\Http\Controllers\viewgroupcontroller;
use App\Http\Controllers\dashboardcontroller;
use App\Http\Controllers\ReportGroupcontroller;
use App\Http\Controllers\ExportController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [dashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::resource('citizens', CitizenController::class);
    Route::resource('cities', CityController::class);
});

route::middleware('auth')->group(function () {
    Route::resource(('citizens'), CitizenController::class);
    Route::resource(('cities'), CityController::class);
    Route::get('report', [ReportCitizenController::class, 'send_report'])->name('reports');
    Route::get('viewgroup', [viewgroupcontroller::class, 'index'])->name('viewgroup');
    Route::get('reportgroup', [ReportGroupcontroller::class, 'send_report'])->name('reportgroup');
    Route::get('/export/ciudades-ciudadanos', [ReporterGroupcontroller::class, 'citiesExport']);
    Route::get('/export/xls', [ExportController::class, 'exportXLS']);
    Route::get('/export/csv', [ExportController::class, 'exportCSV']);

});

// Route::get('/cities', [CityController::class, 'index'])->name('cities.index');
// Route::get('/cities/create', [CityController::class, 'create'])->name('cities.create');
// Route::post('/cities', [CityController::class, 'store'])->name('cities.store');
// Route::get('/cities/{city}', [CityController::class, 'show'])->name('cities.show');
// Route::get('/cities/{city}/edit', [CityController::class, 'edit'])->name('cities.edit');
// Route::put('/cities/{city}', [CityController::class, 'update'])->name('cities.update');
// Route::delete('/cities/{city}', [CityController::class, 'destroy'])->name('cities.destroy');



require __DIR__ . '/auth.php';
