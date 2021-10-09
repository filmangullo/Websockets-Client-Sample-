<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoubleRangeSlider;

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
    return view('welcome');
});

Route::match(array('GET','POST'), '/double-range-slider' , [ DoubleRangeSlider::class, 'index' ])->name('drs.index');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/event', function () {
    return event(new App\Events\NewsBroadcastEvent('News'));
    // return event(new App\Events\NotificationsEvent(1));
});
