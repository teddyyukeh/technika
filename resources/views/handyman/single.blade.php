@extends('main')

@section('title', "| $expert->name")

@section('content')

<hr>
<div class="container justify-content-center">
    <div class="row ">
        <div class="col-md-8 offset-md-2">
            <h1 class="lead">{{$expert->name}}</h1>
            <p class="cart-subtitle text-muted">{{$expert->expertise}}</h3>
            <p class="card-text">0{{$expert->mobile_number}}</h4>
            <p class="card-text">{{$expert->description}}</p>
            <div class="card-footer">
            <p class="card-text">Created at: {{ $expert->created_at }} </p>
            </div>
        </div>
    </div>
</div>


@stop