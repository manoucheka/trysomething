@extends('layouts.admin')

@section('page')
    <header class="section-header">
                <div class="tbl">
                    <div class="tbl-row">
                        <div class="tbl-cell">
                            <h2>Receptionists management</h2>
                            
                            <div class="subtitle">here you can create , update , read and edit Receptionist</div>
                        
                          <a href="{{url('receptionists/create')}}" class="btn btn-success">Create Receptionist</a>
                          
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
                            <th>Email</th>
                            <th>Address</th>
                            <th>Photo</th>
                            <th>Actions</th>
                            


                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Photo</th>
                            <th>Actions</th>
                            
                        </tr>
                        </tfoot>
                        



                        <tbody>
                        
                        @foreach ($receptionists as $receptionist)
         <tr>
             <td>{{ $receptionist->name }}</td>
             <td>{{ $receptionist->email }}</td>
             <td>{{ $receptionist->address }}</td>
  
             <td><img src="{{asset($receptionist->image)}}" height="35" width="30"></td>
             <td><a href="{{url('receptionists',$receptionist->id)}}" class="btn btn-primary">Read</a></td>
             <td><a href="{{route('receptionists.edit',$receptionist->id)}}" class="btn btn-warning">Update</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['receptionists.destroy', $receptionist->id]]) !!}
             
               

             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!} 
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach


                        </tbody>
                    </table>
                    

<div class="pagination">
       {!! $receptionists->links(); !!}

 </div>

                </div>
            </section>




@stop