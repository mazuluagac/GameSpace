<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GamesControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::all();
        return view('games.index', compact('games'));
       // return response()->json($games);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('games.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validación para la imagen
            'fecha_lanzamiento' => 'required',
            'genero' => 'required',
            'tamaño' => 'required',
            'calificacion' => 'required|numeric',
        ]);

        $game = new Game;
        $game->nombre = $request->input('nombre');
        $game->descripcion = $request->input('descripcion');
        $game->fecha_lanzamiento = $request->input('fecha_lanzamiento');
        $game->genero = $request->input('genero');
        $game->tamaño = $request->input('tamaño');
        $game->calificacion = $request->input('calificacion');

        if ($request->hasFile('imagen')) {
            $image = $request->file('imagen');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public', $imageName);
            $game->imagen = $imageName;
        }
        $game->save();

        return redirect()->route('games.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $game = Game::find($id);
        return view('games.show', compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $game = Game::find($id);
        if ($game) {
            return view('games.edit', compact('game'));
        } else {
            // Manejar el caso en el que el juego no se encuentra
            return redirect()->route('games.index')->with('error', 'El juego no se encuentra.');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
       // Validar los datos ingresados en el formulario
    $request->validate([
        'nombre' => 'required|string',
        'descripcion' => 'required|string',
        'genero' => 'required|string',
        'fecha_lanzamiento' => 'required|date',
        'tamaño' => 'required|string',
        'calificacion' => 'required|numeric',
        'imagen' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validar la imagen (opcional)
    ]);

    $game = Game::find($id);
    $game->nombre = $request->nombre;
    $game->descripcion = $request->descripcion;
    $game->genero = $request->genero;
    $game->fecha_lanzamiento = $request->fecha_lanzamiento;
    $game->tamaño = $request->tamaño;
    $game->calificacion = $request->calificacion;

    // Manejo de la imagen si se proporciona
    if ($request->hasFile('imagen')) {
        $imagenPath = $request->file('imagen')->store('imagenes', 'public');
        $game->imagen = $imagenPath;
    }

    $game->save();

    return redirect()->route('games.index')->with('success', 'El juego se ha actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $game = Game::find($id);
        $game->delete();

        return redirect()->route('games.index');
    }
}
