@extends('layouts.admin')

@section('page')
    <header class="section-header">
                <div class="tbl">
                    <div class="tbl-row">
                        <div class="tbl-cell">
                            <h2>Accountants management</h2>
                            
                            <div class="subtitle">here you can create , update , read and edit accountant</div>
                        
                          <a href="{{url('accountants/create')}}" class="btn btn-success">Create Accountant</a>
                          
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
                        
                        @foreach ($accountants as $accountant)
         <tr>
             <td>{{ $accountant->name }}</td>
             <td>{{ $accountant->email }}</td>
             <td>{{ $accountant->address }}</td>
  
             <td><img src="{{asset($accountant->image)}}" height="35" width="30"></td>
             <td><a href="{{url('accountants',$accountant->id)}}" class="btn btn-primary">Read</a></td>
             <td><a href="{{route('accountants.edit',$accountant->id)}}" class="btn btn-warning">Update</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['accountants.destroy', $accountant->id]]) !!}
             
               

             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!} 
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach


                        </tbody>
                    </table>
                    

<div class="pagination">
       {!! $accountants->links(); !!}

 </div>

                </div>
            </section>




@stop