<?php

use App\Http\Controllers\ForumController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Auth;
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
    return view('landing');
});

Route::get('/landing', function () {
    return view('homepage');
})->middleware(['auth', 'verified'])->name('landing');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::get('/homepage', function(){
    return view('frontend.landing');
})->name('homepage');

//tutorial
Route::get('/tutorial', function(){
    return view('frontend.tutorial');
});

Route::get('/java', function(){
    return view('tutorial.java');
});

Route::get('/html', function(){
    return view('tutorial.html');
});

Route::get('/python', function(){
    return view('tutorial.python');
});

Route::get('/javascript', function(){
    return view('tutorial.javascript');
});
Route::get('/css', function(){
    return view('tutorial.css');
});
Route::get('/php', function(){
    return view('tutorial.php');
});

Route::get('/webdev', function(){
    return view('frontend.webdev');
});
Route::get('/forum', function(){
    return view('frontend.forum');
})->middleware('auth');
Route::get('/kuis', function(){
    return view('frontend.kuis');
});

//admin
Route::get('/userDashboard', function(){
    return view('frontend.admin.user');
})->name('userDashboard');

Route::get('/kategoriDashboard', function(){
    return view('frontend.admin.kategori');
})->name('kategoriDashboard');

Route::get('/pertanyaanDashboard', function(){
    return view('frontend.admin.pertanyaan');
})->name('pertanyaanDashboard');

Route::get('/pertanyaanDashboard', function(){
    return view('frontend.admin.pertanyaan');
})->name('pertanyaanDashboard');

Route::get('/homepageDashboard', function(){
    return view('frontend.landing');
})->name('homepage');

//user
Route::get('user', [UserController::class, 'index'])->name('home');

Route::get('userRegistration', [UserController::class, 'create'])->name('userRegistration');

Route::post('userStore', [UserController::class, 'store'])->name('userStore');

Route::get('userView/{user}', [UserController::class, 'show'])->name('userView');

route::get('/getAllUsers', [UserController::class, 'getAllUsers'])->middleware(['auth', 'verified'])->name('getAllUsers');

Route::post('userUpdate/{id}', [UserController::class, 'update'])->name('userUpdate'); 

Route::post('userDelete/{id}', [UserController::class, 'destroy'])->name('userDelete'); 



Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');


//Quiz
Route::middleware('auth')->group(function () {
    Route::get('/kuis/{tipe}', function($tipe){
        return view('frontend.kuisapp');
    });
});
Route::get('/kuis/{category}', [KuisController::class, 'getQuestionsByCategory']);

//Forum

Route::get('adminforum', [ForumController::class, 'index'])->name('adminforum');

Route::get('forumTambah', [ForumController::class, 'create'])->name('forumTambah');

Route::post('forumStore', [ForumController::class, 'store'])->name('forumStore');

Route::get('forumView/{id}', [ForumController::class, 'show'])->name('forumView');

route::get('/getAllForums', [ForumController::class, 'getAllForums'])->middleware(['auth', 'verified'])->name('getAllForums');

Route::post('forumUpdate', [ForumController::class, 'update'])->name('forumUpdate'); 

Route::delete('forums/{id}', [ForumController::class, 'destroy'])->name('forumDelete');


// require __DIR__.'/auth.php';


Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');