<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('component.front end.main');
// });

Route::get('/', [App\Http\Controllers\CategoriesController::class, 'getsingers'])->name('cat.singers');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





// Route::get('/', function () {
//     return view('component.front end.homepage');
// });





Route::get('/home', function () {
    return view('component.includs.index');
});

Route::get('/ticket', [App\Http\Controllers\EventController::class, 'reserve'])->name('ticket');


// group categorise
Route::get('/cate', [App\Http\Controllers\CategoriesController::class, 'index'])->name('cate.index');
Route::get('/cate/create', [App\Http\Controllers\CategoriesController::class, 'create'])->name('cate.create');
Route::post('/cate/store', [App\Http\Controllers\CategoriesController::class, 'store'])->name('cate.store');
Route::get('/cate/edit{id}', [App\Http\Controllers\CategoriesController::class, 'edit'])->name('cate.edit');
Route::put('/cate/update{id}', [App\Http\Controllers\CategoriesController::class, 'update'])->name('cate.update');
Route::delete('/cate/delet{id}', [App\Http\Controllers\CategoriesController::class, 'destroy'])->name('cate.destroy');

// group event

Route::get('/evant', [App\Http\Controllers\EventController::class, 'index'])->name('evant.index');
Route::get('/evant/create', [App\Http\Controllers\EventController::class, 'create'])->name('evant.create');
Route::post('/evant/store', [App\Http\Controllers\EventController::class, 'store'])->name('evant.store');
Route::get('/evant/edit{id}', [App\Http\Controllers\EventController::class, 'edit'])->name('evant.edit');
Route::put('/evant/update{id}', [App\Http\Controllers\EventController::class, 'update'])->name('evant.update');
Route::delete('/evant/delet{id}', [App\Http\Controllers\EventController::class, 'destroy'])->name('evant.destroy');

// group reserve

 Route::get('/reserve/event', [App\Http\Controllers\ReservationController::class, 'index'])->name('reserve.index');

Route::post('/reserve/store', [App\Http\Controllers\ReservationController::class, 'store'])->name('reserve.store');
Route::put('/reserve/update{id}', [App\Http\Controllers\ReservationController::class, 'update'])->name('reserve.update');







