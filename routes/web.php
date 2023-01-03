<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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

//Listing of all jobs
Route::get('/', [ListingController::class, 'index']);


//Show Create Form for posting a job offer

Route::get('/listings/create',[ListingController::class,'create']);

//Store Listing Data/Job data
Route:: post('/listings', [ListingController::class, 'store']);



//Show Single Listing/One job offer

Route:: get('/listings/{listing}', [ListingController::class, 'show']);

