<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CreateProjectController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CreateServicesController;
use App\Http\Controllers\CreateTeamController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\DashboardController;
use App\Http\Requests\DashboardLoginRequest;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AboutUsController;
use App\Models\About;
use App\Models\Service;
use App\Models\Team;
use Illuminate\Support\Facades\DB;
use App\Models\Project;
use App\Http\Controllers\MessageController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/loginform', 'App\Http\Controllers\LoginController@show')->name('login');
Route::post('/login', 'App\Http\Controllers\LoginController@login');
Route::get('/logout', 'App\Http\Controllers\LoginController@logout')->name('logout');


Route::middleware('auth')->group(function () {
    Route::get('/admindashboard', 'App\Http\Controllers\DashboardController@__invoke')->name('dashboard');
    Route::resource('projects', CreateProjectController::class);
    Route::resource('aboutus', AboutUsController::class);
    Route::resource('services', CreateServicesController::class);
    Route::resource('teams', CreateTeamController::class);
    Route::resource('messages', MessageController::class);
});



Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/contactus', function () {
    return view('contactus');
})->name('contactus');

Route::get('/about', function () {
    $aboutus = About::all();
    return view('aboutus', compact('aboutus'));
})->name('about');

Route::get('/team', function () {
    $teams = Team::all();
    return view('ourteam', compact('teams'));
})->name('team');

Route::get('/project', function () {
    $projects = Project::all();
    return view('projects', compact('projects'));
})->name('project');

Route::get('/service', function () {
    $services = Service::all();
    return view('services', compact('services'));
})->name('service');
