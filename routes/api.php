<?php

use App\Http\Controllers\API\CollectionController;
use App\Http\Controllers\API\CustomersController;
use App\Http\Controllers\API\InvoiceItemController;
use App\Http\Controllers\API\ItemController;
use App\Http\Controllers\API\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// login
Route::post('/login', [LoginController::class, 'login']);

// customer
Route::post('/add_customer', [CustomersController::class, 'store']);

// collection
Route::post('/add_collection', [CollectionController::class, 'store']);

// items
Route::get('/getall_item', [ItemController::class, 'index']);


// delivery
Route::post('/invoice_item', [InvoiceItemController::class, 'index']);


