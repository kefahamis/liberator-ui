<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AchievementController;
use App\Http\Controllers\CPDController;
use App\Http\Controllers\HumanResourceController;
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

Auth::routes();
// Route::get('/profile', [DashboardController::class, 'profile'])->name('profile')->middleware('auth');
Route::get('/learn', [DashboardController::class, 'learn'])->name('learn');
Route::get('/book', [DashboardController::class, 'book'])->name('book');
Route::get('/explore', [DashboardController::class, 'explore'])->name('explore');
Route::get('/auth', [DashboardController::class, 'auth'])->name('auth');

Route::group(['namespace' => 'staff', 'prefix' => 'staff','middleware' => 'staff'], function () {
    Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');
    Route::get('/learn', [DashboardController::class, 'learn'])->name('learn');
    Route::get('/downloads', [DashboardController::class, 'download'])->name('download');
    Route::get('/view-profile', [UserController::class, 'index'])->name('profile');
    Route::get('/achievements', [AchievementController::class, 'index'])->name('achievements');
    Route::get('/cpd', [CPDController::class, 'index']);
    Route::get('/certificate',[CPDController::class, 'certificate']);
    Route::get('/settings',[DashboardController::class, 'settings']);
    Route::get('/program',[DashboardController::class, 'program']);
});
Route::group(['namespace' => 'hr', 'prefix' => 'hr','middleware' => 'hr'], function () {
    Route::get('/training-programs', [HumanResourceController::class, 'index']);
    Route::get('/enroll', [HumanResourceController::class, 'enroll']);
    Route::get('/download', [HumanResourceController::class, 'download']);
    Route::get('/profile', [HumanResourceController::class, 'profile']);
    Route::get('/onboard', [HumanResourceController::class, 'team']);
    Route::get('/team', [HumanResourceController::class, 'list']);
    Route::get('/rate', [CPDController::class, 'rate']);
    Route::get('/program', [HumanResourceController::class, 'program']);
    Route::get('/employee-selection', [HumanResourceController::class, 'employee_selection']);
    Route::get('/employee-profile', [HumanResourceController::class, 'employee_profile']);
    Route::get('/confirmation', [HumanResourceController::class, 'confirmation']);
    Route::get('/payment', [HumanResourceController::class, 'payment']);
    Route::get('/license', [HumanResourceController::class, 'license']);
    Route::get('/license-details', [HumanResourceController::class, 'license_details']);
});
Route::get('admin', function () {
    return view('admin');
})->name('admin')->middleware('admin');
Route::get('hr', function () {
    return view('hr');
})->name('hr')->middleware('hr');
Route::get('staff', function () {
    return view('staff');
})->name('staff')->middleware('staff');

Route::get('/subscriptions', function () {
    return view('inc.contents.subscriptions');
});

Route::get('/dashboard', function () {
    return view('inc.contents.dashboard');
});

Route::get('/courses', function () {
    return view('inc.contents.courses');
});
Route::get('/achievements', [App\Http\Controllers\AchievementController::class, 'index'])->middleware('auth');

// Route::post('/data', function () {
//     $resource = $_POST['resource'];
//     if ($resource) {
//         return view("inc.contents.$resource");
//     } else {
//         return view("inc.contents.dashboard");
//     }
// });