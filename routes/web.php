<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ChefController;
use App\Http\Controllers\Admin\ComplianController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\ItemController;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SpecialCategoryController;
use App\Http\Controllers\Admin\SpecialItemController;
use App\Http\Controllers\Admin\SpecialtyController;
use App\Http\Controllers\Admin\TestimonialsController;
use App\Http\Controllers\Admin\TopContentController;
use App\Http\Controllers\Admin\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [HomeController::class, 'Home']);
Route::post('/booking', [HomeController::class, 'bookings'])->name('booking.bookings');
Route::post('/complian', [HomeController::class, 'complians'])->name('complian.complians');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');




Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function(){

    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('Banner', BannerController::class);
    Route::resource('Topcontent', TopContentController::class); 
    Route::resource('Welcome', WelcomeController::class);
    Route::resource('Specialty', SpecialtyController::class);
    Route::resource('Slider', SliderController::class);
    Route::resource('Category', CategoryController::class);
    Route::resource('Item', ItemController::class);
    Route::resource('Booking', BookingController::class);
    Route::resource('Testimonials', TestimonialsController::class);
    Route::resource('Gallery', GalleryController::class);
    Route::resource('Special_category', SpecialCategoryController::class);
    Route::resource('Special_item', SpecialItemController::class);
    Route::resource('Chef', ChefController::class);
    Route::resource('Location', LocationController::class);
    Route::resource('Complian', ComplianController::class);

});  


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
