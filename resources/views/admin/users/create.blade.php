@extends('layouts.admin')


@section('content')


    <h1>create</h1>

    
    {!! Form::open(['method'=>'POST', 'action'=> 'AdminUserController@store', 'files'=>true]) !!}
    
    <div class="form-group">
        
        {!! Form::label('name', 'Name:') !!}
        
        {!! Form::text('name', null, ['class'=>'form-control']) !!}

    </div>

    <div class="form-group">
        
        {!! Form::label('email','Email:') !!}
        
        {!! Form::text('email', null, ['class'=>'form-control']) !!}
        
    </div>

    <div class="form-group">
        
        {!! Form::label('role_id','Role:') !!}
        
        {!! Form::select('role_id', [''=>'Choose Options'] + $roles, null, ['class'=>'form-control']) !!}
        
    </div>

    <div class="form-group">
        
        {!! Form::label('is_active','Status:') !!}
        
        {!! Form::select('is_active', array(1 => 'Active', 0 => 'Not Active'), 0, ['class'=>'form-control']) !!}
        
    </div>

    <div class="form-group">
        
        {!! Form::label('file','File:') !!}
        
        {!! Form::file('file', array(1 => 'Active', 0 => 'Not Active'), 0, ['class'=>'form-control']) !!}
        
    </div>    
    
    <div class="form-group">
        
        {!! Form::label('password','Password:') !!}
        
        {!! Form::text('password', null, ['class'=>'form-control']) !!}
        
    </div>

    <div class="form-group">
        
        {!! Form::submit('Create Post', ['class'=>'btn btn-primay']) !!}
        
    </div>

    
    {!! Form::close() !!}
    
    @include('includes.form_error')


    
@endsection