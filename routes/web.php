<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NegocioController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
*/
/*
Route::get('/', function () {
    return view('auth.login');
});
*/
Route::get('/',[App\Http\Controllers\ConsultaController::class, 'index']);

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

/*
Route::get('/negocios', function () {
    return view('negocio_admin.listaNegocio'); //mostrar la vista de forma directa
});

Route::get('/negocios/create',[NegocioController::class,'create']); //acceder al create por medio del controlador 
*/

Route::resource('/negocios', App\Http\Controllers\NegocioController::class);

Route::resource('negocios', NegocioController::class)->middleware('auth');
Auth::routes(['register'=>false,'reset'=>false]);

Route::get('/home', [NegocioController::class, 'index'])->name('home');


/*
Route::group(['middleware' => 'auth'], function() {
    Route::get('/', [NegocioController::class, 'index'])->name('home');
});*/