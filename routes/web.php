<?php

use Illuminate\Support\Facades\Route;

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
    return response()->json([
       'founders' => \App\Models\Founder::all()
    ]);
});

Route::get('/delete', function () {
    $founders = \App\Models\Founder::all();
    foreach($founders as $founder) {
        $founder->destroy($founder->id);
    }
    return response()->json([
        'founders' => \App\Models\Founder::all()
    ]);
});
