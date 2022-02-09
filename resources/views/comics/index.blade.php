@extends('layout.base')

@section('pageContent')
<h1 class="text-center py-2">Comics</h1>

<table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Price</th>
        <th scope="col">Series</th>
        <th scope="col">Sale Date</th>
        <th scope="col">Type</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($comics as $comic)
            
      <tr>
        <th scope="row">{{$comic->id}}</th>
        <td>{{$comic->title}}</td>
        <td>{{$comic->price}}</td>
        <td>{{$comic->series}}</td>
        <td>{{$comic->sale_date}}</td>
        <td>{{$comic->type}}</td>
          <td>
            <a href="{{route("comics.show", $comic->id)}}"><button type="button" class="btn btn-success">Info</button></a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="mx-4">
      <a href="{{route("comics.create")}}"><button type="button" class="btn btn-success">Nuovo Fumetto</button></a>
  </div>

@endsection