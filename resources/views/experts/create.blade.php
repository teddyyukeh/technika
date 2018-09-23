@extends('main')

@section('title',  '| Create New Expert')

@section ('stylesheet')
    {!! Html::style('css/parsley.css')!!}
@endsection

@section('content')

    <div class="row">
        <div class="col-md-6 offset-md-3">
            <br>
            <h1 class="text-center">Create New Post</h1>

                <hr>
                {!! Form::open(['route' => 'experts.store', 'data-parsley-validate'=>'']) !!}
                    {{Form::label('name','Name:')}}
                    {{Form::text('name',null,array('class' => 'form-control','required'=> ''))}}

                    {{Form::label('slug','Slug :')}}
                    {{Form::text('slug',null,array('class' => 'form-control','required'=>'', 'minlength'=>'5','maxlength'=>'255'))}}

                    {{Form::label('expertise','Expertise:')}}
                    {{Form::text('expertise',null,array('class' => 'form-control','required'=>''))}}

                    {{Form::label('mobile_number','Mobile Number:')}}
                    {{Form::tel('mobile_number',null,array('class' => 'form-control','required'=>''))}}

                    {{Form::label('description','Description :')}}
                    {{Form::textarea('description',null,array('class' => 'form-control','required'=>'','maxlength="255"'))}}


                    {{Form::submit('Submit', array('class' => 'btn btn-success btn-lg btn-block', 'style'=> 'margin-top: 10px;'))}}
                {!! Form::close() !!}            
                <hr>
        </div>
    </div>

@endsection

@section('scripts')
    {!! Html::script('js/parsley.min.js')!!}
@endsection
 

