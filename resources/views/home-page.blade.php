@extends('layout.layout-base')

@section('content')

  <h3><a href="{{Route('create.post')}}">Crea nuovo post</a></h3>

  @foreach ($posts as $post)

    <div class="box">
      <h3>{{$post -> title}}</h3>
      <p>{!!$post -> text!!}</p>
    </div>

  @endforeach

@endsection
