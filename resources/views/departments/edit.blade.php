@extends('layouts.admin')

@section('page')
    <h1>Update Department</h1>
    {!! Form::model($department,['method' => 'PATCH','route'=>['departments.update',$department->id]]) !!}
    
    <div class="form-group">
        {!! Form::label('Department', 'department:') !!}
        {!! Form::text('department',null,['class'=>'form-control']) !!}
    </div>


<div class="form-group">
        {!! Form::label('description', 'Description:') !!}
        {!! Form::text('description',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    
    <a href="{{ url('admin/departments')}}" class="btn btn-primary">Back</a>
    </div>
    {!! Form::close() !!}
@stop