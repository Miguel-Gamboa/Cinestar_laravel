@extends('home')

@section('contenido_interno')
@foreach($pelicula as $movie)
    <div class="contenido-pelicula">
        <div class="datos-pelicula">
            <h2>{{ $movie->Titulo }}</h2>
            <p>{{ $movie->Sinopsis }}</p>
            <br/>
            <div class="tabla">
                <div class="fila">
                    <div class="celda-titulo">Título Original :</div>
                    <div class="celda">{{ $movie->Titulo }}</div>
                </div>
                <div class="fila">
                    <div class="celda-titulo">Estreno :</div>
                    <div class="celda">{{ $movie->FechaEstreno }}</div>
                </div>
                <div class="fila">
                    <div class="celda-titulo">Género :</div>
                    <div class="celda">{{ $movie->Geneross }}</div>
                </div>
                <div class="fila">
                    <div class="celda-titulo">Director :</div>
                    <div class="celda">{{ $movie->Director }}</div>
                </div>
                <div class="fila">
                    <div class="celda-titulo">Reparto :</div>
                    <div class="celda">{{ $movie->Reparto }}</div>
                </div>
            </div>
        </div>
        <img src="{{ asset('img/pelicula/' . $movie->id . '.jpg') }}" width="160" height="226"><br/><br/>
    </div>
    <div class="pelicula-video">
        <embed src="https://www.youtube.com/v/{{ $movie->Link }}" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="580" height="400">
    </div>
@endforeach
@endsection