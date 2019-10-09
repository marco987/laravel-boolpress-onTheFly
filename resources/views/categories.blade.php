@extends('layout.layout-base')

@section('content')

  <h1>Nome Categoria: {{$category -> name}}</h1>

  @foreach ($category -> posts as $post)

    <div class="box">
      <h3>{{$post -> title}}</h3>
      <p>{{$post -> text}}</p>
    </div>

  @endforeach

@endsection
