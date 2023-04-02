<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PlayersController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Admin dashboard.......
Route::get('/admin',[ AdminController::class,"index"]);

Route::post('admin/auth',[ AdminController::class,"auth"])->name("auth");

//Route::group(['middleware'=>'admin_middleware'],function(){
       Route::get('admin/dashboard',[Admincontroller::class,"dashboard"])->name('dashboard');
     // Route::get('admin/updatepassword',[Admincontroller::class,"updatepassword"])->name('updatepassword');
   Route::get('/admin/logout', function () {
            session()->forget('ADMIN_LOGIN');
            session()->forget('ADMIN_ID');
            session()->flash('error','Logout Successfully');
            return redirect('admin/login');
   });
//});


//frontend template..
Route::get('/temp',[PlayersController::class,"index1"]);

//players dashboard.............
Route::get('/users',[ PlayersController::class,"index"])->name("index");
Route::post('users/auth',[ PlayersController::class,"auth"])->name("auth");

Route::group(['middleware'=>'players_middleware'],function(){
       Route::get('users/userdashboard',[PlayersController::class,"dashboard"])->name("dashboard");
      //Route::get('users/updatepassword',[PlayersController::class,"updatepassword"])->name('updatepassword');
   Route::get('/users/logout', function () {
            session()->forget('USER_LOGIN');
            session()->forget('USER_ID');
            session()->flash('error','Logout Successfully');
            return redirect('users/login');
   });
});

//bashi.............


//Admin Team Part

Route::get('/',[AdminController::class,"Dashboard"])->name("Dashboard");

Route::get('/match',[AdminController::class,"matches"])->name("matches");

Route::get('/practice',[AdminController::class,"practices"])->name("practices");

Route::get('/attend',[AdminController::class,"attendence_status"])->name("attendence_status");

Route::get('/team',[TeamController::class,"team"])->name("team");

Route::get('/team_add',[TeamController::class,"Add_team"])->name('Add_team');

Route::post('/store', [TeamController::class,'store'])->name('store');

Route::get('/edit/{id}', [TeamController::class,'edit'])->name('edit');

Route::post('/update/{id}', [TeamController::class,'update'])->name('update');

Route::get('/delete/{id}', [TeamController::class,'delete'])->name('delete');


// Admin Player Part

Route::get('/player',[PlayersController::class,"players"])->name("players");

Route::get('/add_player',[PlayersController::class,"Add_players"])->name("Add_players");

Route::post('/create',[PlayersController::class,"store_players"])->name("store_players");

Route::get('/delete_player/{id}', [PlayersController::class,'delete'])->name('delete');



?>