<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\ExpenseController;

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

// Route::get('/', [IncomeController::class, 'index'])
//     ->name('index');

Route::get('/incomes', [IncomeController::class, 'index'])
    ->name('incomes.index');

Route::get('/expenses', [ExpenseController::class, 'index'])
    ->name('expenses.index');

Route::get('/incomes/create', [IncomeController::class, 'create'])
    ->name('incomes.create');
Route::post('/incomes/store', [IncomeController::class, 'store'])
    ->name('incomes.store');

Route::get('/expenses/create', [ExpenseController::class, 'create'])
    ->name('expenses.create');
Route::post('/expenses/store', [ExpenseController::class, 'store'])
    ->name('expenses.store');

Route::get('/incomes/{income}', [IncomeController::class, 'edit'])
    ->name('incomes.edit')
    ->where('income', '[0-9]+');
Route::patch('/incomes/{income}/update', [IncomeController::class, 'update'])
    ->name('incomes.update')
    ->where('income', '[0-9]+');

Route::get('/expenses/{expense}', [ExpenseController::class, 'edit'])
    ->name('expenses.edit')
    ->where('expense', '[0-9]+');
Route::patch('/expenses/{expense}/update', [ExpenseController::class, 'update'])
    ->name('expenses.update')
    ->where('expense', '[0-9]+');

Route::delete('/incomes/{income}/destroy', [IncomeController::class, 'destroy'])
    ->name('incomes.destroy')
    ->where('income', '[0-9]+');

Route::delete('/expenses/{expense}/destroy', [ExpenseController::class, 'destroy'])
    ->name('expenses.destroy')
    ->where('expense', '[0-9]+');
