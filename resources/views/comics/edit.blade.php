@extends('layout.base')
@section('h1')
Modifica il fumetto: {{$comic->title}}
@endsection
@section('pageContent')

<form action="{{route("comics.update", $comic->id)}}" method="POST">
    @csrf
    @method("PUT")
    <form class="container py-2">
   <div class="form-group">
        <label for="title">Titolo</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo"value="{{$comic->title}}">
    </div>
    <div class="form-group">
        <label for="series">Serie</label>
        <input type="text" class="form-control" id="series" name="series" placeholder="Inserisci la saga"value="{{$comic->series}}">
    </div>
    <div class="form-group">
        <label for="type">Tipo fumetto</label>
        <input type="text" class="form-control" class="type" id="type" name="type" placeholder="Inserisci tipologia"value="{{$comic->type}}">
    </div>
    <div class="form-group">
        <label for="price">Prezzo</label>
        <input type="number" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo"value="{{$comic->price}}">
    </div>
    <div class="form-group">
        <label for="sale_date">Data di pubblicazione</label>
        <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="Inserisci la data di pubblicazione"value="{{$comic->sale_date}}">
    </div>
       <div class="form-group">
        <label for="image">Immagine</label>
        <input type="text" class="form-control" id="image" name="image" placeholder="Inserisci l'URL dell'immagine" value="{{$comic->thumb}}">
    </div>
    <div class="form-group">
        <label for="description">Descrizione</label>
        <textarea name="description"class="form-control" id="description" cols="30" rows="10" placeholder="Trama">{{$comic->description}}</textarea>
    </div>
    <a href="{{route('comics.index')}}"><button type="button" class="btn btn-primary">Torna indietro</button></a>
    <button type="submit" class="btn btn-primary">Aggiungi fumetto</button>
</form>
@endsection