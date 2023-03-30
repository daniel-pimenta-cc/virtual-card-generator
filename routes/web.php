<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VirtualCardController;
use App\Models\VirtualCard;


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

// Home page route
// Select all users from the database and pass them to the view
Route::get('/', function () {
    $cards = VirtualCard::all();
    return view('index', ['cards' => $cards]);
});

// Route that returns all users in JSON format
Route::get('/cards', function () {
    return VirtualCard::all();
});

// Route for the virtual card creation form view
Route::get('/generate', [VirtualCardController::class, 'create'])->name('virtual_card.create');

// Route for the virtual card creation form submission
Route::post('/card', [VirtualCardController::class, 'store'])->name('virtual_card.store');

// Route for viewing a virtual card of a specific user by slug
Route::get('/{userSlug}', function ($userSlug) {
    $user = VirtualCard::where('slug', $userSlug)->firstOrFail();
    return view('virtual_card.view', ['user' => $user]);
});

// Route for viewing the QR code for the virtual card of a specific user 
Route::get('qr/{userSlug}', function ($userSlug) {
    $user = VirtualCard::where('slug', $userSlug)->firstOrFail();
    return view('qr', ['user' => $user]);
});


