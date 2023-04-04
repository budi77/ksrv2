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


Route::middleware('auth')->group(function () {

    // Route::get('/member/import',[MemberController::class,'importView'])->name('member.import');
    // Route::post('/import',[MemberController::class,'import'])->name('import');
    // Route::get('/downloadfile',[MemberController::class,'downloadfile'])->name('member.download');
    
    // Route::get('/print/department/{id}',[PrintController::class,'department'])->name('print.department');
    // Route::get('/print/department/{id}/year/{year}',[PrintController::class,'payment'])->name('print.payment');
    

    Route::get('/tetapan', \App\Http\Livewire\Settings\Index::class)->name('settings');
    Route::get('/keahlian', \App\Http\Livewire\Members::class)->name('members');
    Route::get('/yuran/bahagian', \App\Http\Livewire\Fees\Departments::class)->name('fees.departments');
    Route::get('/yuran/bahagian/{department}', \App\Http\Livewire\Fees\Departments\Show::class)->name('fees.departments.show');
    Route::get('/yuran/gabungan', \App\Http\Livewire\Fees\Federations::class)->name('fees.federations');
    Route::get('/yuran/gabungan/{federation}', \App\Http\Livewire\Fees\Federations\Show::class)->name('fees.federations.show');
    
    // Route::get('/members', \App\Http\Livewire\Members\Index::class)->name('members');
    // Route::get('/payments', \App\Http\Livewire\Payments\Index::class)->name('payments');
    // Route::get('/payments/departments', \App\Http\Livewire\Payments\Bydepartment::class)->name('payments.departments');
    // Route::get('/payments/department/{department}', \App\Http\Livewire\Payments\BydepartmentDetails::class)->name('payments.departments.details');
    // Route::get('/payments/unions', \App\Http\Livewire\Payments\Union::class)->name('payments.unions');
    // Route::get('/agm', \App\Http\Livewire\GeneralMeeting\Index::class)->name('agm');
    // Route::get('/agm/create', \App\Http\Livewire\GeneralMeeting\Create::class)->name('agm.create');
    // Route::get('/agm/attendance/{id}', \App\Http\Livewire\GeneralMeeting\Attendance\Index::class)->name('agm.attendance');
    // Route::get('/attendance/register/{id}', \App\Http\Livewire\Attendance\Register::class)->name('attendance.register');


    // Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

    // Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');

    // //Update User Details
    // Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
    // Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

    // Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

    Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');

//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');


});