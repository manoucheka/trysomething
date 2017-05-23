@extends('layouts.admin')

@section('page')

    <section class="content">
          <div class="row">
          
   <h2 style="padding-left:40px;; color:green"> Create a Patient</h2>
   <div class="col-md-6">


              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"> </h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                
                    {{HTML::ul($errors->all())}}

                  {{ Form::open(array('url' => 'patients', 'role'=>'form','files'=> true)) }}

                <!--<form role="form"> -->
                  <div class="box-body">
                    
                    
                  
                  <!--  <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label> 
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>  -->

                     <div class="form-group" >
                          {{ Form::label('code') }}                        
                        {{ Form::text('code', Input::old('code'),  array('placeholder'=>'code', 'disabled'=>'true', 'class'=>'form-control', 'id'=>'exampleInputEmail1')) }}
 
                     </div>



                     <div class="form-group" >
                          {{ Form::label('firstname') }}                        
                        {{ Form::text('firstname', Input::old('firstname'),  array('placeholder'=>'firstname', 'class'=>'form-control', 'id'=>'exampleInputEmail1')) }}
 
                     </div>


    

                     <div class="form-group" >
                          {{ Form::label('lastname') }}                        
                        {{ Form::text('lastname', Input::old('lastname'),  array('placeholder'=>'lastname', 'class'=>'form-control', 'id'=>'exampleInputEmail1')) }}
 
                     </div>


                     <div class="form-group" >
                          {{ Form::label('phone') }}                        
                        {{ Form::text('phone', Input::old('phone'),  array('placeholder'=>'phone', 'class'=>'form-control', 'id'=>'exampleInputEmail1')) }}
 
                     </div>
                       

                       <div class="form-group" >
                          {{ Form::label('mobile') }}                        
                        {{ Form::text('mobile', Input::old('mobile'),  array('placeholder'=>'mobile', 'class'=>'form-control', 'id'=>'exampleInputEmail1')) }}
 
                     </div>



                       <div class="form-group">
                        {{ Form::label('Blood Group') }} 
    
                         <input type="radio" name="bloodgroup" value="male" checked> O+
                         <input type="radio" name="bloodgroup" value="female">A+
                         <input type="radio" name="bloodgroup" value="other"> Other

                         </div>


                        <div class="form-group">
                       {{ Form::label('sexe') }} 
    
                        <input type="radio" name="sexe" value="male" checked> Male
                        <input type="radio" name="sexe" value="female"> Female
                        <input type="radio" name="sexe" value="other"> Other

                        </div>

                       <div class="form-group">
                        {{ Form::label('Birth Day') }}  

                       <input type="date" name="birthday"> 
  
                       </div>




                       <div class="form-group" >
                          {{ Form::label('email') }}                        
                        {{ Form::text('email', Input::old('email'),  array('placeholder'=>'email', 'class'=>'form-control', 'id'=>'exampleInputEmail1')) }}
 
                     </div>




                       <div class="form-group" >
                          {{ Form::label('address') }}                        
                        {{ Form::textarea('address', Input::old('address'),  array('placeholder'=>'address', 'class'=>'form-control', 'id'=>'exampleInputEmail1')) }}
 
                     </div>



                    
                       <div class="form-group" >
                          {{ Form::label('image') }}                        
                        {{ Form::file('image', Input::old('image'),  array('placeholder'=>'image', 'class'=>'form-control', 'id'=>'exampleInputEmail1')) }}
 
                     </div>
                    

                  </div><!-- /.box-body -->

                  <div class="box-footer">
                     <!--<button type="submit" class="btn btn-primary">Submit</button> -->

                    {{ Form::submit('Create Patient!', array('class'=>'btn btn-primary')) }}
                  </div>
                <!--</form> -->
                {{ Form::close() }}
              </div><!-- /.box -->


        </div>
    </div>
  </section>

@stop