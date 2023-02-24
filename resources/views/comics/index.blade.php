@extends('layouts.app')
@section('title', 'Comics')

@section('content')
<div class="jumbotron bg-danger">
    <div class="container">
        <div class="Series">
            <h1>CURRENT SERIES</h1>
        </div>
    </div>            
</div>
<div class="container">
    <div class="mb-t mt-2">
        @foreach ($comics as $key => $comic)
            <div class="card-sp-main">
                <a class="text-white" href="{{route('comic.show' , ['comic' => $comic])}}">
                    <div class="card-image-sp-main position-relative">
                        <img src="{{  $comic->thumb }}" alt="{{  $comic->series }}">     
                    </div>
                    {{ strtoupper($comic->series)}}
                </a>
                <div class="edit d-flex">
                    <a class="btn btn-warning mx-2" href="{{route('comic.edit', ['comic' =>  $comic])}}"><i class="fa-solid fa-pen-to-square"></i></a> 
                    <form action="{{route('comic.destroy', ['comic' =>  $comic->id])}}" method="POST">
                    @csrf

                    @method('DELETE')
                        <button type="sumbit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>                            
                    </form>                           
                </div>   
            </div>            
        @endforeach                        
    </div>
    <div class="btn-s">  
        <button class="mx-2">LOAD MORE</button>
        <a class="mx-2" href="{{route('comic.create')}}">AGGIUNGI SERIE</a>
    </div>
</div>
@endsection
