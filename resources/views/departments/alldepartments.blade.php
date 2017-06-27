@extends('layouts.admin')

@section('page')
    <header class="section-header">
                <div class="tbl">
                    <div class="tbl-row">
                        <div class="tbl-cell">
                            <h2>Departements management</h2>
                            
                            <div class="subtitle">here you can create , update , read and edit department</div>
                        
                          <a href="{{url('departments/create')}}" class="btn btn-success">Create Departement</a>
                          
                        </div>

                    </div>
                </div>
            </header>
            <section class="card">
                <div class="card-block">
                    <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th> Department</th>
                            <th>Description</th>
                            

                            <th>Actions</th>
                            



                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Department</th>
                            <th>Description</th>
                          
                            <th>Actions</th>
                            
                        </tr>
                        </tfoot>
                        



                        <tbody>
                        
                        @foreach ($departments as $department)
         <tr>
             <td>{{ $department->department }}</td>
             <td>{{ $department->description }}</td>
             
  
           
             <td><a href="{{url('departments',$department->id)}}" class="btn btn-primary">Read</a></td>
             <td><a href="{{route('departments.edit',$department->id)}}" class="btn btn-warning">Update</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['departments.destroy', $department->id]]) !!}
             
               

             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!} 
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach


                        </tbody>
                    </table>
                    

<div class="pagination">
       {!! $departments->links(); !!}

 </div>

                </div>
            </section>




@stop