<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Loans\LoanRequestsController as LoanRequestsController;
use App\Http\Controllers\Loans\LoanStatisticsController as LoanStatisticsController;
use App\Http\Controllers\Loans\LoanHistoryController as LoanHistoryController;
use App\Http\Controllers\Loans\LoanReportsController as LoanReportsController;
use App\Http\Controllers\PaymentsController as PaymentsController;
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


Route::get('/', function () {
    return view('loan-form');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('dashboard', [LoanStatisticsController::class,'index'])->name('dashboard');
    Route::get('loan-requests', [LoanRequestsController::class, 'index'])->name('requests.loan-requests');
    Route::get('show-loan-requests', [LoanRequestsController::class, 'show'])->name('requests.show-loan-requests');
    Route::get('loan-history', [LoanHistoryController::class, 'index'])->name('history.loan-history');
    Route::get('show-loan-history', [LoanHistoryController::class, 'show'])->name('history.show-loan-history');
    Route::get('reports', [LoanReportsController::class, 'index'])->name('reports.index');
    Route::get('payments', [PaymentsController::class, 'index'])->name('payments.index');
    
});

require __DIR__.'/auth.php';
