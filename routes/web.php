<?php

use App\Livewire\LivewireRoute;
use App\Livewire\NestedComponent\Users;
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
    return view('welcome');
});

Route::view('/search', 'user-search');

Route::view('/data-sharing', 'data-share');

//Livewire Route
// Route::livewire('livewire-route', 'LivewireRoute'); //  Livewire V2/V3. In this version, Route::livewire()has been removed.
Route::get('/livewire-route', [LivewireRoute::class, 'name']);

// Route::get('/nested-component', [Users::class, 'name']);
Route::view('/nested-component', 'nested-component');
