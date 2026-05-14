<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        return Movie::all();
    }

    public function show($id)
    {
        return Movie::find($id);
    }

public function store(Request $request)
{
    $movie = new Movie();

    $movie->title = $request->title;
    $movie->synopsis = $request->synopsis;
    $movie->year = $request->year;
    $movie->cover = $request->cover;

    $movie->save();

    return response()->json([
        'msg' => 'Película guardada correctamente',
        'data' => $movie
    ]);
}
    public function update(Request $request, $id)
    {
        $movie = Movie::find($id);

        if (!$movie) {
            return response()->json(['msg' => 'Película no encontrada'], 404);
        }

        $movie->title = $request->title;
        $movie->synopsis = $request->synopsis;
        $movie->year = $request->year;
        $movie->cover = $request->cover;

        $movie->save();

        return response()->json([
            'msg' => 'Película actualizada correctamente',
            'data' => $movie
        ]);
    }

    public function destroy($id)
    {
        $movie = Movie::find($id);

        if (!$movie) {
            return response()->json(['msg' => 'Película no encontrada'], 404);
        }

        $movie->delete();

        return response()->json([
            'msg' => 'Película eliminada correctamente'
        ]);
    }
}