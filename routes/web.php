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

Auth::routes(['register' => true]);
//Language Translation

Route::get('/landing', function () {
    return view('landing');
});

// Route::get('/login', function () {
//     return view('auth/login')->name('login');
// });

// Route::get('/patriotik2023', \App\Http\Livewire\Patriotik\Index::class)->name('patriotik');
//Route::get('/patriotik2023/berjaya', \App\Http\Livewire\Patriotik\Success::class)->name('patriotik.berjaya');
//Route::get('/patriotik2023', \App\Http\Livewire\Patriotik\Keputusan::class)->name('patriotik');

Route::get('/patriotik2025', \App\Http\Livewire\Patriotik\Index::class)->name('patriotik');
Route::get('/patriotik2025/berjaya', \App\Http\Livewire\Patriotik\Success::class)->name('patriotik.berjaya');
//Route::get('/patriotik2025', \App\Http\Livewire\Patriotik\Keputusan::class)->name('patriotik');

Route::get('/semakan', \App\Http\Livewire\Member\Semakan::class)->name('semakan');

//Route::get('/pancing2023', \App\Http\Livewire\Pancing\Borang::class)->name('pancing');

//Route::get('/angsi2023/daftar', \App\Http\Livewire\Angsi\Borang::class)->name('angsi.borang');
//Route::view('/angsi2023', 'angsi2023')->name('angsi2023');

Route::get('/maccgames24', \App\Http\Livewire\KsrGames24\Portal\Index::class)->name('ksrgames24');
Route::get('/maccgames24/program', \App\Http\Livewire\KsrGames24\Portal\Program::class)->name('ksrgames24.program');
Route::get('/maccgames24/program/bs', \App\Http\Livewire\KsrGames24\Portal\Bs::class)->name('ksrgames24.bs');
Route::get('/maccgames24/program/bd', \App\Http\Livewire\KsrGames24\Portal\Bd::class)->name('ksrgames24.bd');
Route::get('/maccgames24/program/bl', \App\Http\Livewire\KsrGames24\Portal\Bl::class)->name('ksrgames24.bl');
Route::get('/maccgames24/program/tt', \App\Http\Livewire\KsrGames24\Portal\Tt::class)->name('ksrgames24.tt');
Route::get('/maccgames24/program/mk', \App\Http\Livewire\KsrGames24\Portal\Mk::class)->name('ksrgames24.mk');
Route::get('/maccgames24/program/bj', \App\Http\Livewire\KsrGames24\Portal\Bj::class)->name('ksrgames24.bj');
Route::get('/maccgames24/program/btl', \App\Http\Livewire\KsrGames24\Portal\Btl::class)->name('ksrgames24.btl');
Route::get('/maccgames24/program/btw', \App\Http\Livewire\KsrGames24\Portal\Btw::class)->name('ksrgames24.btw');
Route::get('/maccgames24/program/pp', \App\Http\Livewire\KsrGames24\Portal\Pp::class)->name('ksrgames24.pp');
Route::get('/maccgames24/program/fs', \App\Http\Livewire\KsrGames24\Portal\Fs::class)->name('ksrgames24.fs');
Route::get('/maccgames24/program/bw', \App\Http\Livewire\KsrGames24\Portal\Bw::class)->name('ksrgames24.bw');
Route::get('/maccgames24/program/st', \App\Http\Livewire\KsrGames24\Portal\St::class)->name('ksrgames24.st');
Route::get('/maccgames24/program/kr', \App\Http\Livewire\KsrGames24\Portal\Kr::class)->name('ksrgames24.kr');
Route::get('/maccgames24/program/ttl', \App\Http\Livewire\KsrGames24\Portal\Ttl::class)->name('ksrgames24.ttl');
Route::get('/maccgames24/program/ttw', \App\Http\Livewire\KsrGames24\Portal\Ttw::class)->name('ksrgames24.ttw');
Route::get('/maccgames24/program/pbn', \App\Http\Livewire\KsrGames24\Portal\Pbn::class)->name('ksrgames24.pbn');
Route::get('/maccgames24/program/ranking', \App\Http\Livewire\KsrGames24\Portal\Rangking::class)->name('ksrgames24.rangking');
// Route::get('/ksrarena2023', \App\Http\Livewire\KSRArena\Borang::class)->name('ksrarena');
// Route::get('/ksrarena2023/bolajaring', \App\Http\Livewire\KSRArena\Netball\Index::class)->name('ksrarena.bolajaring');
// Route::get('/ksrarena2023/bolatampar', \App\Http\Livewire\KSRArena\Volleyball\Index::class)->name('ksrarena.bolatampar');

Route::middleware('auth')->group(function () {

    Route::get('/ksrarena2023/senarai', \App\Http\Livewire\KSRArena\Index::class)->name('ksrarena.index');
    Route::get('/ksrarena2023/pasukan', \App\Http\Livewire\KSRArena\Teams::class)->name('ksrarena.teams');
    Route::get('/ksrarena2023/kumpulan', \App\Http\Livewire\KSRArena\Groups::class)->name('ksrarena.groups');
    Route::get('/ksrarena2023/bolajaring/perlawanan', \App\Http\Livewire\KSRArena\Netball\Games::class)->name('ksrarena.netball.games');
    Route::get('/ksrarena2023/bolatampar/perlawanan', \App\Http\Livewire\KSRArena\Volleyball\Games::class)->name('ksrarena.volleyball.games');
    
    Route::get('/ksrgames24/parameter', \App\Http\Livewire\KsrGames24\Parameter::class)->name('ksrgames24.parameter');
    Route::get('/ksrgames24/fixtures', \App\Http\Livewire\KsrGames24\Fixtures::class)->name('ksrgames24.fixtures');
    Route::get('/ksrgames24/standings', \App\Http\Livewire\KsrGames24\Standings::class)->name('ksrgames24.standings');


    Route::get('/mesyuarat', \App\Http\Livewire\Meeting\Index::class)->name('mesyuarat');

    Route::get('/pdf/patriotik2023/{id}', [App\Http\Controllers\PDFController::class, 'patriotik'])->name('pdf.patriotik');
    Route::get('/pdf/meeting', [App\Http\Controllers\PDFController::class, 'generatePDF'])->name('pdf.generatePDF');

    Route::get('/patriotik2025/permohonan/lihat', \App\Http\Livewire\Patriotik\Application::class)->name('patriotik.lihat');
    
    Route::get('/pancing2023/permohonan', \App\Http\Livewire\Pancing\Senarai::class)->name('pancing.lihat');

    Route::get('export/pancing', [App\Http\Controllers\ExportExcelController::class, 'pancing'])->name('export.pancing');
    Route::get('export/yuran/bahagian/{department_id}/tahun/{year}', [App\Http\Controllers\ExportExcelController::class, 'yuran'])->name('export.yuran');


    Route::get('/yuran/gabungan', \App\Http\Livewire\Fees\Federations\Show::class)->name('fees.federations.show');

    Route::get('/dokumen', [App\Http\Controllers\HomeController::class, 'dokumen'])->name('dokumen');

    Route::get('/tetapan', \App\Http\Livewire\Settings\Index::class)->name('settings');
    Route::get('/keahlian', \App\Http\Livewire\Members::class)->name('members');
    Route::get('/yuran/bahagian', \App\Http\Livewire\Fees\Departments::class)->name('fees.departments');
    Route::get('/yuran/bahagian/{department}', \App\Http\Livewire\Fees\Departments\Show::class)->name('fees.departments.show');
    // Route::get('/yuran/gabungan', \App\Http\Livewire\Fees\Federations::class)->name('fees.federations');
   
    Route::get('/yuran/serahan', \App\Http\Livewire\Fees\Submission\Index::class)->name('fees.submission');
    Route::get('/yuran/serahan/cipta', \App\Http\Livewire\Fees\Submission\Create::class)->name('fees.create');
    Route::get('/yuran/kemaskini', \App\Http\Livewire\Yuran\Kemaskini::class)->name('fees.edit');


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

    Route::get("/pull", [App\Http\Controllers\ProcessController::class, 'gitpull']);
    Route::get("/optimize", [App\Http\Controllers\ProcessController::class, 'optimize']);


});
