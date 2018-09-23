@extends('main')

@section('title', '| Homepage')


@section('content')
<br>
<div class="container">
    <form class="form-group col-md-10 offset-md-1">
    <div class="form-row  justify-content-center">
        <div class="col-md-9">
            <input type="text" class="form-control" id="inlineFormInput" placeholder="Expertise">
        </div>

        <div class="col-md-3">
            <button type="submit" class="btn btn-primary btn-block  font-weight-bold"><i class="fas fa-search"> Search</i></button>
        </div>
    </div>
    </form>
    <hr class="my-4">

</div>


<!--feature-->
<div class="container ">
    <h1 class="display-4 lead text-center">Featured Experts</h1>
    <hr>
    <div class="row">

        @foreach($experts as $expert)
            <div class="col-md-4" style="margin-bottom:1rem;">
                <div class="card">
                    <div class="card-body ">
                    <h5 class="card-title">{{ $expert->name }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $expert->expertise }}</h6>
                        <p class="card-text">0{{ $expert->mobile_number }}</p>
                        <hr>
                        <p class="card-text">{{ substr($expert->description, 0, 80) }}{{ strlen($expert->description) > 80 ? "..." : "" }}</p>
                        <div class="container-fluid">
                            <div class="row text-center">
                            <a href="{{ url('handyman/'.$expert->slug)}}" class="btn btn-primary btn-lg btn-block"> Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        @endforeach

    </div>
    <br>
</div>
@endSection
