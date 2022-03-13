<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IssueController;

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

Route::get('/issues', [IssueController::class, 'index']);

Route::get('/issues/create', [IssueController::class, 'create']);

Route::post('/issues', [IssueController::class, 'store']);

// Route::get('/issues/{id}', [IssueController::class, 'show']);

Route::get('/issues/{id}', [IssueController::class, 'edit']);

Route::post('/issues/{id}', [IssueController::class, 'update']);

Route::delete('/issues/{id}', [IssueController::class, 'destroy']);







