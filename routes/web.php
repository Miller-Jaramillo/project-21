<?php

use App\Http\Controllers\CustomRegisteredUserController;
use App\Http\Controllers\SpectatorController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\UsersTable;
use App\Mail\UsersCredentials;
use Illuminate\Support\Facades\Mail;
use App\Http\Livewire\PropuestasParticipante;
use App\Http\Livewire\FormPropuestaNueva;
use App\Http\Livewire\FormPropuestasAprobadas;
use App\Http\Livewire\FormPropuestasEnviadas;



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



// Ruta para procesar la solicitud de registro de participantes
Route::get('/register-spectator', [SpectatorController::class, 'create'])->name('register-spectator.create');
Route::post('/register-spectator', [SpectatorController::class, 'store'])->name('register-spectator.store');

Route::get('/register', [CustomRegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [CustomRegisteredUserController::class, 'store']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/users', UsersTable::class)->name('users');  // --> Navegation users - table
    Route::post('/cambiar-rol', [UsersTable::class, 'submitFormParticipate'])->name('cambiar-rol');
    Route::get('/propuestas-participante', PropuestasParticipante::class)->name('propuestas-participante');
    Route::get('/propuestas-enviadas', FormPropuestasEnviadas::class)->name('propuestas-enviadas');
    Route::get('/propuestas-aprobadas', FormPropuestasAprobadas::class)->name('propuestas-aprobadas');
    Route::get('/propuesta-nueva', FormPropuestaNueva::class)->name('propuesta-nueva');
});


