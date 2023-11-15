<?php

use App\Http\Controllers\CustomerSatisController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReceiptMAController;
use App\Http\Controllers\TicketController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group( function() {
    Route::resource('ticket', TicketController::class);
});

// Route::middleware('auth')->group( function() {
//     Route::resource('maintenance_cost', MAController::class);
//     // Route::get('/ticket/create', [TicketController::class, 'create'])->name('ticket.create');
//     // Route::post('/ticket/create', [TicketController::class, 'store'])->name('ticket.store');
// });

Route::middleware('auth')->group( function() {
    Route::resource('receiptMAList', ReceiptMAController::class);
    Route::post('/receipts/{ticket_id}/store', [ReceiptMAController::class, 'store'])->name('receiptMAList.store');
    Route::patch('/receipts/{receiptMA_id}/update', [ReceiptMAController::class, 'update'])->name('receiptMAList.update');
});

Route::middleware('auth')->group( function() {
    Route::resource('customer_satis', CustomerSatisController::class);
});

require __DIR__.'/auth.php';
