@extends('layouts.admin')

@section('page')
    <header class="section-header">
                <div class="tbl">
                    <div class="tbl-row">
                        <div class="tbl-cell">
                            <h2>patients management</h2>
                            
                            <div class="subtitle">here you can create , update , read and edit patient</div>
                        
                          <a href="{{url('patients/create')}}" class="btn btn-success">Create Patient</a>
                          
                        </div>

                    </div>
                </div>
            </header>
            <section class="card">
                <div class="card-block">
                    <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th> FirstName</th>
                            <th>lastname</th>
                            <th>Creation Date</th>
                            <th>Photo</th>
                            <th>Actions</th>
                            



                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>FirstName</th>
                            <th>Lastname</th>
                            <th>Creation Date</th>
                            <th>Photo</th>
                            <th>Actions</th>
                            
                        </tr>
                        </tfoot>
                        



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
                    

<div class="pagination">
       {!! $patients->links(); !!}

 </div>

                </div>
            </section>




@stop