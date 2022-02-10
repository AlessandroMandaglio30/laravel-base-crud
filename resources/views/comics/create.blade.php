@extends('layout.base')

@section('h1')
Aggiungi un nuovo fumetto
@endsection

@section('pageContent')
<form action="{{route('comics.store')}}" method="POST" class="container py-2">
   @csrf
    <div class="form-group">
        <label for="title">Titolo</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo">
    </div>
    <div class="form-group">
        <label for="series">Serie</label>
        <input type="text" class="form-control" id="series" name="series" placeholder="Inserisci la saga" >
    </div>
    <div class="form-group">
        <label for="type">Tipo fumetto</label>
        <input type="text" class="form-control" class="type" id="type" name="type" placeholder="Inserisci tipologia">
    </div>
    <div class="form-group">
        <label for="price">Prezzo</label>
        <input type="number" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo">
    </div>
    <div class="form-group">
        <label for="sale_date">Data di pubblicazione</label>
        <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="Inserisci la data di pubblicazione">
    </div>
    <div class="form-group">
        <label for="image">Immagine</label>
        <input type="text" class="form-control" id="image" name="image" placeholder="Inserisci l'URL dell'immagine">
    </div>
    <div class="form-group">
        <label for="description">Descrizione</label>
        <textarea name="description"class="form-control" id="description" cols="30" rows="10" placeholder="Trama"></textarea>
    </div>
    <a href="{{route('comics.index')}}"><button type="button" class="btn btn-primary">Torna indietro</button></a>
    <button type="submit" class="btn btn-primary">Aggiungi fumetto</button>
</form>
@endsection