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

// Route::get('/patriotik2023', \App\Http\Livewire\Patriotik\Index::class)->name('patriotik');
Route::get('/patriotik2023/berjaya', \App\Http\Livewire\Patriotik\Success::class)->name('patriotik.berjaya');
Route::get('/patriotik2023', \App\Http\Livewire\Patriotik\Keputusan::class)->name('patriotik');

Route::get('/pancing2023', \App\Http\Livewire\Pancing\Borang::class)->name('pancing');

Route::get('/angsi2023/daftar', \App\Http\Livewire\Angsi\Borang::class)->name('angsi.borang');
Route::view('/angsi2023', 'angsi2023')->name('angsi2023');

Route::get('/ksrarena2023', \App\Http\Livewire\KSRArena\Borang::class)->name('ksrarena');
Route::get('/ksrarena2023/bolajaring', \App\Http\Livewire\KSRArena\Netball\Index::class)->name('ksrarena.bolajaring');
Route::get('/ksrarena2023/bolatampar', \App\Http\Livewire\KSRArena\Volleyball\Index::class)->name('ksrarena.bolatampar');

Route::middleware('auth')->group(function () {

    Route::get('/ksrarena2023/senarai', \App\Http\Livewire\KSRArena\Index::class)->name('ksrarena.index');
    Route::get('/ksrarena2023/pasukan', \App\Http\Livewire\KSRArena\Teams::class)->name('ksrarena.teams');
    Route::get('/ksrarena2023/kumpulan', \App\Http\Livewire\KSRArena\Groups::class)->name('ksrarena.groups');
    Route::get('/ksrarena2023/bolajaring/perlawanan', \App\Http\Livewire\KSRArena\Netball\Games::class)->name('ksrarena.netball.games');
    Route::get('/ksrarena2023/bolatampar/perlawanan', \App\Http\Livewire\KSRArena\Volleyball\Games::class)->name('ksrarena.volleyball.games');

    Route::get('/pdf/patriotik2023/{id}', [App\Http\Controllers\PDFController::class, 'patriotik'])->name('pdf.patriotik');

    Route::get('/patriotik2023/permohonan/lihat', \App\Http\Livewire\Patriotik\Application::class)->name('patriotik.lihat');
    
    Route::get('/pancing2023/permohonan', \App\Http\Livewire\Pancing\Senarai::class)->name('pancing.lihat');

    Route::get('export/pancing', [App\Http\Controllers\ExportExcelController::class, 'pancing'])->name('export.pancing');


    Route::get('/yuran/gabungan', \App\Http\Livewire\Fees\Federations\Show::class)->name('fees.federations.show');

    Route::get('/dokumen', [App\Http\Controllers\HomeController::class, 'dokumen'])->name('dokumen');

    Route::get('/tetapan', \App\Http\Livewire\Settings\Index::class)->name('settings');
    Route::get('/keahlian', \App\Http\Livewire\Members::class)->name('members');
    Route::get('/yuran/bahagian', \App\Http\Livewire\Fees\Departments::class)->name('fees.departments');
    Route::get('/yuran/bahagian/{department}', \App\Http\Livewire\Fees\Departments\Show::class)->name('fees.departments.show');
    // Route::get('/yuran/gabungan', \App\Http\Livewire\Fees\Federations::class)->name('fees.federations');
   
    Route::get('/yuran/serahan', \App\Http\Livewire\Fees\Submission\Index::class)->name('fees.submission');
    Route::get('/yuran/serahan/cipta', \App\Http\Livewire\Fees\Submission\Create::class)->name('fees.create');


    Route::get('/resit', \App\Http\Livewire\Receipt\Index::class)->name('resit');
    Route::get('/resit/cetak/{receipt}', \App\Http\Livewire\Receipt\Cetak::class)->name('resit.cetak');
    Route::get('/resit/cipta', \App\Http\Livewire\Receipt\Cipta::class)->name('resit.cipta');




    Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');

//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

//loker
Route::get('/loker', \App\Http\Livewire\Locker\Index::class)->name('locker');
Route::get('/loker/dashboard', \App\Http\Livewire\Locker\Dashboard::class)->name('locker.dashboard');

//jelajah angsi 2023
Route::get('/angsi2023/permohonan', \App\Http\Livewire\Angsi\Permohonan::class)->name('angsi.permohonan');


});