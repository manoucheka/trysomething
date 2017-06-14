@extends('layouts.admin')

@section('page')
    <h1>Update Patient</h1>
    {!! Form::model($patient,['method' => 'PATCH','route'=>['patients.update',$patient->id]]) !!}
    
    <div class="form-group">
        {!! Form::label('Firstname', 'Firstname:') !!}
        {!! Form::text('firstname',null,['class'=>'form-control']) !!}
    </div>


<div class="form-group">
        {!! Form::label('Lastname', 'Lastname:') !!}
        {!! Form::text('lastname',null,['class'=>'form-control']) !!}
    </div>

<div class="form-group">
        {!! Form::label('Phone', 'Phone:') !!}
        {!! Form::text('phone',null,['class'=>'form-control']) !!}
    </div>

<div class="form-group">
        {!! Form::label('Mobile', 'Mobile:') !!}
        {!! Form::text('mobile',null,['class'=>'form-control']) !!}
    </div>

    
                     <div class="form-group">
                        {!! Form::label('Blood Group') !!} 
    
                         <input type="radio" name="bloodgroup" value="male" checked> O+
                         <input type="radio" name="bloodgroup" value="female">A+
                         <input type="radio" name="bloodgroup" value="other"> Other

                         </div>


                        <div class="form-group">
                       {!! Form::label('sexe') !!} 
    
                        <input type="radio" name="sexe" value="male" checked> Male
                        <input type="radio" name="sexe" value="female"> Female
                        <input type="radio" name="sexe" value="other"> Other

                        </div>

                       <div class="form-group">
                        {!! Form::label('Birth Day') !!}  

                       <input type="date" name="birthday"> 
  
                       </div>



    <div class="form-group">
        {!! Form::label('Image', 'Image:') !!}
        {!! Form::file('image',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    
    <a href="{{ url('admin/patients')}}" class="btn btn-primary">Back</a>
    </div>
    {!! Form::close() !!}
@stop