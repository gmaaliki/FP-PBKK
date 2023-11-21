<?php

use App\Models\Category;
use App\Models\Subcategory;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/test-relationships', function () {
    // Create a category
    $category = Category::create(['category_name' => 'Example Category']);

    // Create a subcategory and associate it with the category
    $subcategory = $category->subcategories()->create(['subcategory_name' => 'Example Subcategory']);

    // Retrieve a category with its subcategories
    $categoryWithSubcategories = Category::with('subcategories')->find($category->id);

    // Access subcategories
    $subcategories = $categoryWithSubcategories->subcategories;

    // Output the results (you can modify this part based on your needs)
    dd($category, $subcategory, $categoryWithSubcategories, $subcategories);
});


  
//Route::post('/register_user_language', [UserLanguageController::class, 'store']);

// Route::post('/register_user_skill', [UserSkillController::class, 'store']);

// Route::post('/register_user_education', [UserEducationController::class, 'store']);

// Route::post('/register_user_certification', [UserCertificationController::class, 'store']);

// Route::post('/register_user_notification', [UserNotificationController::class, 'store']);

// Route::post('/register_user_review', [UserReviewController::class, 'store']);

require __DIR__.'/auth.php';
