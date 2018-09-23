@extends('main')

@section('title', '| All Experts')

@section('content')

    <div class="row">
        
        <div class="col-md-10">
            <br>
            <h1>All Experts</h1>
        </div>
        
        <div class="col-md-2"> 
            <br>
            <a href="{{route('experts.create')}}" class="btn btn-lg btn-block btn-primary btn-h1-spacing" >Add Expert</a> 
        </div>

        <div class="col-md-12">
            <hr>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <th>#</th>
                    <th>name</th>
                    <th>expertise</th>
                    <th>mobile number</th>
                    <th>description</th>
                    <th>created_at</th>
                    <th>actions</th>
                </thead>

                <tbody>
                    @foreach($expert as $prof)
                        <tr>
                        <th>{{ $prof->id }}</th>
                        <td>{{ $prof->name }}</td>
                        <td>{{ $prof->expertise }}</td>
                        <td>{{ $prof->mobile_number }}</td>
                        <td>{{ substr($prof->description,0,50) }}{{ strlen($prof->description) > 50 ? "..." : "" }}</td>
                        <td>{{ date('M j, Y', strtotime($prof->created_at)) }}</td>                        
                        <td><a href="{{ route('experts.show', $prof->id)}}" class="btn btn-seconadry btn-sm">View</a></td>
                        </tr>
                    @endforeach 
                </tbody>
            </table>

            <div class=" container text-center">
                {!! $expert->links(); !!}
            </div>
        </div>
    </div>

@stop