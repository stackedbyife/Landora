<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\Admin\PropertyController as AdminPropertyController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\MemberController;
use Illuminate\Support\Facades\Route;

// Home Route

Route::view('/', 'index')->name('index');

//  Pages
Route::view('/about', 'about');
Route::view('/contact', 'contact');
Route::view('/property-agent', 'property-agent');

Route::view('/property-type', 'property-type');
Route::view('/testimonial', 'testimonial');
Route::view('/404', '404');

// For users or public visitors
Route::get('/property-list', [PropertyController::class, 'userIndex'])->name('property.list');
Route::resource('properties', PropertyController::class)->middleware('auth');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Dashboard
Route::get('/dashboard', fn() => view('dashboard'))->middleware(['auth', 'verified'])->name('dashboard');

//Booking
Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store')->middleware('auth');

// Authenticated Routes
Route::middleware(['auth'])->group(function () {
    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //     // Bookings
    // Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');
});

        // Admin
    Route::get('admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.admin-login');
    Route::post('admin/login', [AdminAuthController::class, 'login']);
    Route::post('admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

    Route::middleware('auth:admin')->prefix('admin')->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.admin-index');
        })->name('admin.dashboard');
    });
        // View members
    Route::get('/members', [MemberController::class, 'index'])->name('admin.admin-users');

        // View properties
    Route::get('/admin/properties', [AdminPropertyController::class, 'index'])->name('admin.admin-properties');


        //Add Properties
    Route::middleware(['auth:admin'])->prefix('admin')->group(function () {
    Route::get('/properties/create', [AdminPropertyController::class, 'create'])->name('admin.admin-form');
    Route::post('/properties/store', [AdminPropertyController::class, 'store'])->name('admin.admin-form.store');
    });
require __DIR__.'/auth.php';
