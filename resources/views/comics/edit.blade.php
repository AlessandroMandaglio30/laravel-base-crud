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
        <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo"value=""{{old("title") ? old("title") :$comic->title}}">
         @error('title')
            <div class="alert alert-danger">
                <div>{{$message}}</div>
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="series">Serie</label>
        <input type="text" class="form-control" id="series" name="series" placeholder="Inserisci la saga"{{old("sereis") ? old("series") :$comic->series}}">
        @error('series')
            <div class="alert alert-danger">
                <div>{{$message}}</div>
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="type">Tipo fumetto</label>
        <input type="text" class="form-control" class="type" id="type" name="type" placeholder="Inserisci tipologia"value="{{old("type") ? old("type") :$comic->type}}">
        @error('type')
            <div class="alert alert-danger">
                <div>{{$message}}</div>
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="price">Prezzo</label>
        <input type="number" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo"value="{{old("price") ? old("price") :$comic->price}}">
        @error('price')
            <div class="alert alert-danger">
                <div>{{$message}}</div>
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="sale_date">Data di pubblicazione</label>
        <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="Inserisci la data di pubblicazione"value="{{old("sale_data") ? old("sale_data") :$comic->sale_date}}">
        @error('sale_date')
            <div class="alert alert-danger">
                <div>{{$message}}</div>
            </div>
        @enderror
    </div>
       <div class="form-group">
        <label for="image">Immagine</label>
        <input type="text" class="form-control" id="image" name="image" placeholder="Inserisci l'URL dell'immagine" value="{{old("image") ? old("image") :$comic->image}}">
        @error('image')
            <div class="alert alert-danger">
                <div>{{$message}}</div>
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="description">Descrizione</label>
        <textarea name="description"class="form-control" id="description" cols="30" rows="10" placeholder="Trama">{{old("description") ? old("description") :$comic->description}}</textarea>
        @error('description')
            <div class="alert alert-danger">
                <div>{{$message}}</div>
            </div>
        @enderror
    </div>
    <a href="{{route('comics.index')}}"><button type="button" class="btn btn-primary">Torna indietro</button></a>
    <button type="submit" class="btn btn-primary">Aggiungi fumetto</button>
</form>
@endsection