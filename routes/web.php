<?php
 
 use App\Http\Controllers\ChirpController;
 use App\Http\Controllers\ProfileController;
 use Illuminate\Support\Facades\Route;
  
 Route::get('/', function () {
     return view('welcome');
 });
  
 Route::get('/dashboard', function () {
     return view('dashboard');
 })->middleware(['auth', 'verified'])->name('dashboard');

 Route::get('/livewire-count', function() {
    return view('livewire.count');
})->middleware(['auth','verified'])->name('livewire-count');
  
 Route::middleware('auth')->group(function () {
     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
 });
  
 Route::resource('chirps', ChirpController::class)
     ->only(['index', 'store', 'edit', 'update','destroy'])
     ->middleware(['auth', 'verified']);
  
 require __DIR__.'/auth.php';