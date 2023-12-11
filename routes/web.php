<?php

use App\Http\Controllers\cama_SensorController;
use App\Http\Controllers\CamaController;
use App\Http\Controllers\cultivocamaController;
use App\Http\Controllers\CultivoController;
use App\Http\Controllers\DispositivoController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\Histos_disps_intelsController;
use App\Http\Controllers\invernaderoController;
use App\Http\Controllers\LecturaController;
use App\Http\Controllers\SensorController;
use App\Http\Controllers\TipoController;
use App\Http\Controllers\TipodispositivoController;
use App\Http\Controllers\TiposensorController;
use App\Http\Controllers\RolController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PermissionController;


Route::get('/', function () {
    return view('welcome');
});
route::prefix('home')->group(function(){
    route::get('Login', [AuthController::class, 'login'])->name('login');
    route::post('Login', [AuthController::class, 'loginVerify'])->name('login/Verify');

    route::get('register',[AuthController::class,'register']);
    route::post('register',[AuthController::class,'registerVerify']);
    
    route::get('logout',[AuthController::class,'logout'])->name('logout');
});

//rutas protegidas
route::middleware('auth')->group(function(){
route::get('dashboard', function(){
  return  view('dashboard');
  
})->name('dashboard');
});


Route::resource('Tipocultivo', TipoController::class)->middleware('auth');
Route::resource('Cultivo', CultivoController::class)->middleware('auth');
Route::resource('invernadero', invernaderoController::class)->middleware('auth');
Route::resource('Cama', CamaController::class)->middleware('auth');
Route::resource('dispositivo', DispositivoController::class)->middleware('auth');
Route::resource('estado', EstadoController::class)->middleware('auth');
Route::resource('tipodispositivo', TipodispositivoController::class)->middleware('auth');
Route::resource('Sensor', SensorController::class)->middleware('auth');
Route::resource('Histos_disps_intels', Histos_disps_intelsController::class)->middleware('auth');
Route::resource('tiposensor', TiposensorController::class)->middleware('auth');
Route::resource('Lecturas', LecturaController::class)->middleware('auth');
Route::resource('cultivo_cama', cultivocamaController::class)->middleware('auth');
Route::resource('camaSensor', cama_SensorController::class)->middleware('auth');


Route::get('/profile',[AuthController::class, 'profile'])->name('profile');
Route::post('/updateProfile', [AuthController::class, 'updateProfile'])->name('updateProfile');

Route::resource('users', AuthController::class)->only(['index','store', 'edit', 'update', 'destroy']);


Route::resource('roles', RolController::class);
Route::resource('permissions', PermissionController::class);


Route::get('/admin' , [AuthController::class, 'admin'])
->middleware('auth.admin')
->name('admin.index');
Route::group([ 'middleware' => ['auth']], function(){
  Route::resource('roles', RolController::class);

});

    Route::resource('users', AuthController::class)->only(['index', 'store', 'edit', 'update', 'destroy']);