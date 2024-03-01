<?php

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
    $plans = ['Plane One', 'Plan Two', 'Plan Three', 'Plan Four', 'Plan Five'];
    $locations = array (
      (object)[
        'title' => 'Sampoerna',
        'value' => 'GoWork Strategic Sampoerna'
      ],
      (object)[
        'title' => 'GoWork Pondok Indah',
        'value' => 'GoWork Pondok Indah'
      ],
    );
    return view('index', compact('plans', 'locations'));
});
