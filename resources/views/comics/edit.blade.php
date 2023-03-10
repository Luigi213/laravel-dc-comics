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
                <form action="{{ route('comic.update', $single->id) }}" method="POST">
                    @csrf 
                    
                    @method('PUT')
                    <div class="form-group my-2">
                        <label for="titolo" class="text-white fs-4 my-2">Titolo</label>
                        <input  class="form-control" type="text" name="title" id="titolo" value="{{ old('title') ?? $single->title}}" placeholder="Inserisci titolo">
                        @error('title')
                            <div class="mt-2 alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="descrizione" class="text-white fs-4 my-2">Descrizione</label>
                        <textarea  class="form-control" type="text" name="description" id="descrizione" rows="4" placeholder="Inserisci descrizione" value="{{ old('description') ?? $single->description}}">{{ old('description') ?? $single->description}}</textarea>
                        @error('description')
                            <div class="mt-2 alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="immagine" class="text-white fs-4 my-2">Immagine</label>
                        <input  class="form-control" type="text" name="thumb" id="immagine"  placeholder="Inserisci immagine" value="{{ old('thumb') ?? $single->thumb}}">
                        @error('thumb')
                            <div class="mt-2 alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="prezzo" class="text-white fs-4 my-2" >Prezzo</label>
                        <input  class="form-control" type="text" name="price" id="prezzo" placeholder="Inserisci prezzo" value="{{ old('price') ?? $single->price}}">
                        @error('price')
                            <div class="mt-2 alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="serie" class="text-white fs-4 my-2">Serie</label>
                        <input  class="form-control" type="text" name="series" id="serie" placeholder="Inserisci serie" value="{{ old('series') ?? $single->series}}">
                        @error('series')
                            <div class="mt-2 alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="data" class="text-white fs-4 my-2">Data</label>
                        <input  class="form-control" type="text" name="sale_date" id="data" placeholder="Inserisci data" value="{{ old('sale_date') ?? $single->sale_date}}">
                        @error('sale_date')
                            <div class="mt-2 alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="tipo" class="text-white fs-4 my-2">Tipo</label>
                        <input  class="form-control" type="text" name="type" id="tipo" placeholder="Inserisci tipo" value="{{ old('type') ?? $single->type}}"> 
                        @error('type')
                            <div class="mt-2 alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="sumbit" class="btn btn-success my-3">Salva</button>
                </form>
                <a href="{{route('comic.index')}}">Torna indietro</a>
            </div>
        </div>
    </div>
@endsection
