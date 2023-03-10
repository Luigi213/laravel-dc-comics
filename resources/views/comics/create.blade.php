@extends('layouts.app')
@section('title', 'Comic-forms')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 py-4">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{route('comic.store')}}" method="POST">
                    @csrf 
                    
                    <div class="form-group my-2">
                        <label for="titolo" class="text-white fs-4 my-2">Titolo</label>
                        <input  class="form-control" type="text" name="title" id="titolo" placeholder="Inserisci titolo">
                        @error('title')
                            <div class="mt-2 alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="descrizione" class="text-white fs-4 my-2">Descrizione</label>
                        <textarea  class="form-control" type="text" name="description" id="descrizione" rows="4" placeholder="Inserisci descrizione"></textarea>
                        @error('description')
                            <div class="mt-2 alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="immagine" class="text-white fs-4 my-2">Immagine</label>
                        <input  class="form-control" type="text" name="thumb" id="immagine"  placeholder="Inserisci immagine">
                        @error('thumb')
                            <div class="mt-2 alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="prezzo" class="text-white fs-4 my-2" >Prezzo</label>
                        <input  class="form-control" type="text" name="price" id="prezzo" placeholder="Inserisci prezzo">
                        @error('price')
                            <div class="mt-2 alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="serie" class="text-white fs-4 my-2">Serie</label>
                        <input  class="form-control" type="text" name="series" id="serie" placeholder="Inserisci serie">
                        @error('series')
                            <div class="mt-2 alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="data" class="text-white fs-4 my-2">Data</label>
                        <input  class="form-control" type="text" name="sale_date" id="data" placeholder="Inserisci data">
                        @error('sale_date')
                            <div class="mt-2 alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="tipo" class="text-white fs-4 my-2">Tipo</label>
                        <input  class="form-control" type="text" name="type" id="tipo" placeholder="Inserisci tipo">
                        @error('type')
                            <div class="mt-2 alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="sumbit" class="btn btn-primary my-3">Invia</button>
                </form>
                <a href="{{route('comic.index')}}">Torna indietro</a>
            </div>
        </div>
    </div>
@endsection
