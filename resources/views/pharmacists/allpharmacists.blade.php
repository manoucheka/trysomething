@extends('layouts.admin')

@section('page')
    <header class="section-header">
                <div class="tbl">
                    <div class="tbl-row">
                        <div class="tbl-cell">
                            <h2>Pharmacists management</h2>
                            
                            <div class="subtitle">here you can create , update , read and edit Pharmacist</div>
                        
                          <a href="{{url('pharmacists/create')}}" class="btn btn-success">Create Pharmacist</a>
                          
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
                        
                        @foreach ($pharmacists as $pharmacist)
         <tr>
             <td>{{ $pharmacist->name }}</td>
             <td>{{ $pharmacist->email }}</td>
             <td>{{ $pharmacist->address }}</td>
  
             <td><img src="{{asset($pharmacist->image)}}" height="35" width="30"></td>
             <td><a href="{{url('pharmacists',$pharmacist->id)}}" class="btn btn-primary">Read</a></td>
             <td><a href="{{route('pharmacists.edit',$pharmacist->id)}}" class="btn btn-warning">Update</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['pharmacists.destroy', $pharmacist->id]]) !!}
             
               

             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!} 
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach


                        </tbody>
                    </table>
                    

<div class="pagination">
       {!! $pharmacists->links(); !!}

 </div>

                </div>
            </section>




@stop