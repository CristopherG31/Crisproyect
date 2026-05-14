<?php

use Illuminate\Support\Facades\Route;
use App\Models\Movie;
use Illuminate\Http\Request;

Route::get('/PAGINA1', function () {
    return 'Hola Mundo, Laravel esta listo';
});
// GET todos los datos 
Route::get('/movies', function () {
    return Movie::all();
});
// 🔥 GET por ID 
Route::get('/movies/{id}', function ($id) {
    return Movie::find($id);
}); 
// post
Route::post('/movies', function (Request $request) {
    return Movie::create([
        'title' => $request->title,
        'synopsis' => $request->synopsis,
        'year' => $request->year,
        'cover' => $request->cover
    ]);
});
Route::post('/movies', [MovieController::class, 'store']);

Route::get('/{any}', function () {
    return file_get_contents(public_path('index.html'));
})->where('any', '.*');