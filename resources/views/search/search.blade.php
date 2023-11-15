@extends('layouts.app')

@section('content')

<h2>Resultados de la búsqueda para "{{ $query }}"</h2>

@if(count($games) > 0)
    <ul>
        @foreach($games as $game)
            <li>{{ $game->title }}</li>
            

            
            
            
        @endforeach
    </ul>
@else
    <p>No se encontraron juegos que coincidan con la búsqueda.</p>
@endif