<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\QuotationController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

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

//Homeowner

Route::get('/', function () {
    return view('homepage');
});

//Manage Booking

Route::get('/tempahanServis', [BookingController::class, 'create'])->name('booking.create');
Route::get('/senaraiTempahan', [BookingController::class, 'index'])->name('booking.index');
Route::get('/paparTempahan', [BookingController::class, 'show'])->name('booking.show');
Route::get('/kemaskiniTempahan', [BookingController::class, 'edit'])->name('booking.edit');
Route::get('/sebutHarga', [QuotationController::class, 'show'])->name('quotation.show');

//Manage Payment

Route::get('/bayaran', [PaymentController::class, 'upload'])->name('payment.upload');
Route::get('/paparInvois', [InvoiceController::class, 'show'])->name('invoice.show');


//Administrator

Route::get('/admin', function () {
    return view('Admin/homepage');
});

//Manage Service
Route::get('/senaraiServis', [ServiceController::class, 'index'])->name('service.index');
Route::get('/tambahServis', [ServiceController::class, 'create'])->name('service.create');
Route::get('/paparServis', [ServiceController::class, 'show'])->name('service.show');
Route::get('/kemaskiniServis', [ServiceController::class, 'edit'])->name('service.edit');

//Manage Booking
Route::get('/senaraiSebutHarga', [QuotationController::class, 'index'])->name('quotation.index');
Route::get('/paparSebutHarga', [QuotationController::class, 'notify'])->name('quotation.notify');

//Manage Payment
Route::get('/senaraiBayaran', [PaymentController::class, 'index'])->name('payment.index');
Route::get('/pengesahanBayaran', [PaymentController::class, 'verify'])->name('payment.verify');
Route::get('/invois', [InvoiceController::class, 'index'])->name('invoice.index');
Route::get('/invoisPapar', [InvoiceController::class, 'view'])->name('invoice.view');
Route::get('/menjanaInvois', [InvoiceController::class, 'create'])->name('invoice.create');

//Manage Schedule
Route::get('/jadualKerja', [ScheduleController::class, 'index'])->name('schedule.index');
// Route::get('/paparJadualKerja', [ScheduleController::class, 'show'])->name('schedule.show');

//Administrator

Route::get('/serviceProvider', function () {
    return view('ServiceProvider/homepage');
});

//Manage Booking
Route::get('/tempahServis', [BookingController::class, 'list'])->name('booking.list');
Route::get('/paparTempahServis', [BookingController::class, 'view'])->name('booking.view');
Route::get('/sebutHargaList', [QuotationController::class, 'list'])->name('quotation.list');
Route::get('/viewSebutHarga', [QuotationController::class, 'view'])->name('quotation.view');
Route::get('/menjanaSebutHarga', [QuotationController::class, 'create'])->name('quotation.create');
Route::get('/kemaskiniSebutHarga', [QuotationController::class, 'edit'])->name('quotation.edit');


//Manage Schedule
Route::get('/senaraiJadualKerja', [ScheduleController::class, 'list'])->name('schedule.list');
Route::get('/paparJadualKerja', [ScheduleController::class, 'show'])->name('schedule.show');