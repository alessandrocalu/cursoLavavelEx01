@extends('template')

@section('content')

    <h1>Posts</h1>

    @foreach( $posts as $post)
        <p>
            <h2>{{ $post['titulo'] }}</h2>
            <h3>{{ $post['conteudo'] }}</h3>
        </p>
    @endforeach

@stop