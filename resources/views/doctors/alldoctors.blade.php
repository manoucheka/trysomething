@extends('layouts.admin')

@section('page')
         <header class="section-header">
                <div class="tbl">
                    <div class="tbl-row">
                        <div class="tbl-cell">
                            <h2>Doctors Management</h2>
                            
                            <div class="subtitle">here you can create , update , read and edit Doctor</div>
                        
                          <a href="{{url('doctors/create')}}" class="btn btn-success">Create Doctor</a>
                          
                        </div>

                    </div>
                </div>
            </header>
            <section class="card">
                <div class="card-block">
                    <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                               <th>Name</th>
                            <th>email</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Departement</th>
                            <th>Sexe</th>
                            <th>Photo</th>
                            <th>Actions</th>
                            



                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>email</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Departement</th>
                            <th>Sexe</th>
                            <th>Photo</th>
                            <th>Actions</th>
                            
                        </tr>
                        </tfoot>
                        



                        <tbody>
                        
                        @foreach ($doctors as $doctor)
         <tr>
             <td>{{ $doctor->name }}</td>
             <td>{{ $doctor->email }}</td>
             <td>{{ $doctor->address }}</td>

               <td>{{ $doctor->phone }}</td>
                 <td>{{ $doctor->department_id }}</td>
                   <td>{{ $doctor->sexe }}</td>


  
             <td><img src="{{asset($doctor->image)}}" height="35" width="30"></td>
             <td><a href="{{url('doctors',$doctor->id)}}" class="btn btn-primary">Read</a></td>
             <td><a href="{{route('doctors.edit',$doctor->id)}}" class="btn btn-warning">Update</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['doctors.destroy', $doctor->id]]) !!}
             
               

             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!} 
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach

                      </tbody>
                    </table>
                    

<div class="pagination">
       {!! $doctors->links(); !!}

 </div>

                </div>
            </section>




@stop