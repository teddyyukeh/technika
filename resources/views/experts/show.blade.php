@extends('main')

@section('title','| View Post')

@section('content')
<br>
<div class="container">
    <div class="card text-justify border-dark">
        <div class="card-header ">
            Handy man
        </div>
        <div class="card-body ">
            <h5 class="card-title">Name: {{ $expert->name}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Expertise: {{ $expert->expertise}}</h6>
            <p class="card-text">Mobile: {{ $expert->mobile_number}}</p>
            <p class="card-subtitle mb-2 text-muted">Url: <a href="{{ route('handyman.single', $expert->slug) }}"> {{ url('handyman/'.$expert->slug) }}</a></p>                   
            <hr>
            <p class="card-text">{{ $expert->description}}</p>   
        </div>
        <div class="card-footer">
            <p class="card-text"><small class="text-muted">Added: {{ date('M j, Y', strtotime($expert->created_at)) }},  Updated: {{ date('M j, Y', strtotime($expert->updated_at)) }}</small></p>
        </div>
    </div>
</div>
    
@endsection