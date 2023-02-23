@extends('layouts.app')
@section('title', 'Comic-detail')

@section('content')
<div class="jumbotron bg-danger">
    <div class="container">
        <div class="Serie">
            <img src="{{ $single['thumb'] }}" alt="{{ $single['title'] }}">
        </div>
    </div>            
</div>
<div class="bg-sp"></div>
<div class="bg-white">
    <div class="container py-4">
        <div class="row">
            <div class="col-9">
                <h1>{{strtoupper($single['title'])}}</h1>
                <p>{{$single['description']}}</p>
            </div>
            <div class="col-3">
                <div>
                    <h6>ADVERTISEMENT</h6>
                    <img src="../img/adv.jpg" alt="adv">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-light py-4">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h4>Talent</h4>
                <hr class="text-secondary">
                <div class="row">
                    <div class="col-4">
                        <p>Art by:</p>                    
                    </div>
                    <div class="col-8">
                        {{ $single['artists'] }}
                    </div>
                </div>
                <hr class="text-secondary">
                <div class="row">                    
                    <div class="col-4">
                        <p>Written by:</p>                    
                    </div>
                    <div class="col-8">
                        {{ $single['writers'] }}
                    </div>
                </div>
            </div>
            <div class="col-5 offset-1">
                <h4>Specs</h4>
                <hr class="text-secondary">
                <div class="row">
                    <div class="col-3">
                        <p>Series:</p>                    
                    </div>
                    <div class="col-9">
                        <a href="/">{{ strtoupper($single['series']) }}</a>
                    </div>
                </div>
                <hr class="text-secondary">
                <div class="row">
                    <div class="col-3">
                        <p>U.S. Price</p>                    
                    </div>
                    <div class="col-9">
                        <p>{{ $single['price'] }}</p>
                    </div>
                </div>
                <hr class="text-secondary">
                <div class="row">
                    <div class="col-3">
                        <p>On sale Date:</p>                    
                    </div>
                    <div class="col-9">
                        <p>{{ $single['sale_date'] }}</p>
                    </div>
                </div>
            </div>
        </div>    
    </div>
</div>
@endsection
