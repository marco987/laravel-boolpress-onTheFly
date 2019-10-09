@extends('layout.layout-base')

@section('content')

  <form action="{{Route('update.post', $post -> id)}}" method="post">
    @csrf
    @method('POST')

    <label for="title">Titolo</label>
    <input type="text" name="title" value="{{$post -> title}}">
    <label for="text">Testo</label>
    <input type="text" name="text" value="{{$post -> text}}">

    <select name="category_id">

      @foreach ($categories as $category)

        <option value="{{$category -> id}}"

          @if ($post -> category -> id == $category -> id)
            selected
          @endif

          >{{$category -> name}}</option>

      @endforeach

    </select>

    <button type="submit">SALVA</button>

  </form>

@endsection
