@extends('layouts.admin')

@section('page')
    <header class="section-header">
                <div class="tbl">
                    <div class="tbl-row">
                        <div class="tbl-cell">
                            <h2>Nurses management</h2>
                            
                            <div class="subtitle">here you can create , update , read and edit Nurse</div>
                        
                          <a href="{{url('nurses/create')}}" class="btn btn-success">Create Nurse</a>
                          
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
                        
                        @foreach ($nurses as $nurse)
         <tr>
             <td>{{ $nurse->name }}</td>
             <td>{{ $nurse->email }}</td>
             <td>{{ $nurse->address }}</td>
  
             <td><img src="{{asset($nurse->image)}}" height="35" width="30"></td>
             <td><a href="{{url('nurses',$nurse->id)}}" class="btn btn-primary">Read</a></td>
             <td><a href="{{route('nurses.edit',$nurse->id)}}" class="btn btn-warning">Update</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['nurses.destroy', $nurse->id]]) !!}
             
               

             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!} 
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach


                        </tbody>
                    </table>
                    

<div class="pagination">
       {!! $nurses->links(); !!}

 </div>

                </div>
            </section>




@stop