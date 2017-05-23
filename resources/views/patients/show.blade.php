@extends('layouts.admin')
@section('page')


<h2>Patient Show</h2>

<style>

.form-group {
    
}

.table1 {
     display: inline-block;

        }
</style>






  <div class="col-xs-6">
      
            
              <p class="lead">Amount Due 2/22/2014</p>
              <div class="table-responsive">
                
               



                <table class="table">
                  
                     

                   
                   <tr>
                    <th><img src="{{$patient->image}}"  height="180" width="180" class="img-rounded" alt="Visa"></th>
                    
                  </tr>

                  <tr>
                    <th style="width:50%">First Name</th>
                    <td>{{$patient->firstname}}</td>
                  </tr>
                  
                  <tr>
                    <th>Last Name</th>
                    <td>{{$patient->lastname}}</td>
                  </tr>
                  
                  <tr>
                    <th>Phone</th>
                    <td>{{$patient->phone}}</td>
                  </tr>
                  
                  <tr>
                    <th>MObile</th>
                    <td>{{$patient->mobile}}</td>
                  </tr>

                  <tr>
                    <th>Blood Group</th>
                    <td>{{$patient->bloodgroup}}</td>
                  </tr>


                  <tr>
                    <th>Sexe</th>
                    <td>{{$patient->sexe}}</td>
                  </tr>


                  <tr>
                    <th>Birthday</th>
                    <td>{{$patient->birthday}}</td>
                  </tr>


                   <tr>
                    <th>Email</th>
                    <td>{{$patient->email}}</td>
                  </tr>


                  <tr>
                    <th>Address</th>
                    <td>{{$patient->address}}</td>
                  </tr>





                </table>

      <a href="{{ url('admin/patients')}}" class="btn btn-primary">Back</a>

              </div>
        
            </div><!-- /.col -->





@stop