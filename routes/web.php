<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Auth::routes(['register' => false]);
//Language Translation

Route::get('/landing', function () {
    return view('landing');
});

Route::get('/patriotik2023', \App\Http\Livewire\Patriotik\Index::class)->name('patriotik');
Route::get('/patriotik2023/berjaya', \App\Http\Livewire\Patriotik\Success::class)->name('patriotik.berjaya');



Route::middleware('auth')->group(function () {
    
    Route::get('/yuran/gabungan', \App\Http\Livewire\Fees\Federations\Show::class)->name('fees.federations.show');

    Route::get('/dokumen', [App\Http\Controllers\HomeController::class, 'dokumen'])->name('dokumen');

    Route::get('/tetapan', \App\Http\Livewire\Settings\Index::class)->name('settings');
    Route::get('/keahlian', \App\Http\Livewire\Members::class)->name('members');
    Route::get('/yuran/bahagian', \App\Http\Livewire\Fees\Departments::class)->name('fees.departments');
    Route::get('/yuran/bahagian/{department}', \App\Http\Livewire\Fees\Departments\Show::class)->name('fees.departments.show');
    // Route::get('/yuran/gabungan', \App\Http\Livewire\Fees\Federations::class)->name('fees.federations');
   
    Route::get('/yuran/serahan', \App\Http\Livewire\Fees\Submission\Index::class)->name('fees.submission');
    Route::get('/yuran/serahan/cipta', \App\Http\Livewire\Fees\Submission\Create::class)->name('fees.create');

    Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');

//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('index');


});