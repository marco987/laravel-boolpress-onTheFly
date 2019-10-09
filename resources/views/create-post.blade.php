@extends('layout.layout-base')

@section('content')

  <form action="{{Route('store.post')}}" method="post">
    @csrf
    @method('POST')

    <label for="title">Titolo</label>
    <input type="text" name="title" value="">
    <label for="text">Testo</label>
    <input type="text" name="text" value="">

    <select name="category_id">

      @foreach ($categories as $category)

        <option value="{{$category -> id}}">{{$category -> name}}</option>

      @endforeach

    </select>

    <button type="submit">SALVA</button>

  </form>

@endsection
