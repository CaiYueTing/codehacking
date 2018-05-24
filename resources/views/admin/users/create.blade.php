@extends('layouts.admin')


@section('content')


    <h1>create</h1>

    
    {!! Form::open(['method'=>'POST', 'action'=> 'AdminUserController@store']) !!}
    
    <div class="form-group">
        
        {!! Form::label('title', 'Title:') !!}
        
        {!! Form::text('title', null, ['class'=>'form-control']) !!}

    </div>

    <div class="form-group">
        
        {!! Form::submit('Create Post', ['class'=>'btn btn-primay']) !!}
        
    </div>

    
    {!! Form::close() !!}
    


@stop