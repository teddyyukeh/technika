
@if(session()->has('success'))
    <div class="alert alert-success" role="alert">
        <strong>Success</strong> {{ session()->get('success')}}
    </div>
@endif

@if(count($errors))
    <div class="alert alert-success" role="alert">  
        <strong>Errors:</strong>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif