@extends('layout.layout-base')

@section('content')

  <h1>Nome Categoria: {{$post -> category -> name}}</h1>

  <div class="box">
    <h3>{{$post -> title}}</h3>
    <p>{!!$post -> text!!}</p>
    <p><a href="{{Route('edit.post', $post -> id)}}">Modifica post</a></p>
    <p><a href="{{Route('destroy.post', $post -> id)}}">Elimina post</a></p>
  </div>

@endsection
