@extends('layouts.admin')

@section('page')
    <header class="section-header">
                <div class="tbl">
                    <div class="tbl-row">
                        <div class="tbl-cell">
                            <h2>Laboratorists management</h2>
                            
                            <div class="subtitle">here you can create , update , read and edit laboratorist</div>
                        
                          <a href="{{url('laboratorists/create')}}" class="btn btn-success">Create Laboratorist</a>
                          
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
                        
                        @foreach ($laboratorists as $laboratorist)
         <tr>
             <td>{{ $laboratorist->name }}</td>
             <td>{{ $laboratorist->email }}</td>
             <td>{{ $laboratorist->address }}</td>
  
             <td><img src="{{asset($laboratorist->image)}}" height="35" width="30"></td>
             <td><a href="{{url('laboratorists',$laboratorist->id)}}" class="btn btn-primary">Read</a></td>
             <td><a href="{{route('laboratorists.edit',$laboratorist->id)}}" class="btn btn-warning">Update</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['laboratorists.destroy', $laboratorist->id]]) !!}
             
               

             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!} 
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach


                        </tbody>
                    </table>
                    

<div class="pagination">
       {!! $laboratorists->links(); !!}

 </div>

                </div>
            </section>




@stop