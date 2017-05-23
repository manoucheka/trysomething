@extends('layouts.admin')

@section('page')
 <h1>Patient Management</h1>
 <a href="{{url('patients/create')}}" class="btn btn-success">Create Patient</a>
 <hr>
 <table class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>First Name</th>
         <th>Last Name</th>
         <th>Creation Date</th>
         <th>Photo</th>
         
   
         <th colspan="3">Actions</th>
     </tr>
     </thead>
     <tbody>
     @foreach ($patients as $patient)
         <tr>
             <td>{{ $patient->firstname }}</td>
             <td>{{ $patient->lastname }}</td>
             <td>{{ $patient->birthday }}</td>
  
             <td><img src="{{asset($patient->image)}}" height="35" width="30"></td>
             <td><a href="{{url('patients',$patient->id)}}" class="btn btn-primary">Read</a></td>
             <td><a href="{{route('patients.edit',$patient->id)}}" class="btn btn-warning">Update</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['patients.destroy', $patient->id]]) !!}
             
               

             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!} 
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach

     </tbody>

 </table>





@stop