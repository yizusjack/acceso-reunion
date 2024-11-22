<?php

use Carbon\Carbon;
use App\Models\Reunion;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReunionController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        $hoy = Carbon::today();
        $reunion = Reunion::whereDate('dia', $hoy)->first();
        $asistencia = $reunion->users()->where('user_id', Auth::user()->id)->first();

        return view('dashboard', compact('reunion', 'asistencia'));
    })->name('dashboard');
});

Route::resource('reunion', ReunionController::class)->middleware('auth');
Route::get('reunion/{reunion}/user/{user}', [ReunionController::class, 'asignar'])->name('asignar')->middleware('auth');
