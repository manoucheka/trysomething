@extends('layouts.admin')

@section('page')

      <header class="section-header">
        <div class="tbl">
          <div class="tbl-row">
            <div class="tbl-cell">
              <!--<h3>Patients Admin Panel</h3>-->
               <h2 style="padding-left:40px;; color:green">Patients Admin Panel</h2>
              <ol class="breadcrumb breadcrumb-simple">
                <li><a href="{{ url('admin/patients')}}">View All Patients</a></li>
                <!--<li><a href="{{url('patients/create')}}">Create</a></li> -->
                
                <li class="active">Create</li>
              </ol>
            </div>
          </div>
        </div>
      </header>

      <div class="box-typical box-typical-padding">
        

        <h5 class="m-t-lg with-border">Patients Inputs</h5>

                  {!!Html::ul($errors->all())!!}         
       <!-- <form  <form method="post" action="patient" enctype="multipart/form-data"> -->
        {!! Form::open(array('url' => 'patients', 'role'=>'form','files'=> true)) !!}
                 
          <div class="form-group row">
            <label class="col-sm-2 form-control-label">code</label>
            <div class="col-sm-10">
              <p class="form-control-static"><input type="text" class="form-control"  readonly name="code" placeholder="Code Here"></p>
            </div>
          </div>
          

  <div class="form-group row">
            <label class="col-sm-2 form-control-label">firstname</label>
            <div class="col-sm-10">
              <p class="form-control-static"><input type="text" class="form-control"   name="firstname" placeholder="Firstname"></p>
            </div>
          </div>
<div class="form-group row">
            <label class="col-sm-2 form-control-label">Lastname</label>
            <div class="col-sm-10">
              <p class="form-control-static"><input type="text" class="form-control"   name="lastname" placeholder="Lastname"></p>
            </div>
          </div>
<div class="form-group row">
            <label class="col-sm-2 form-control-label">Phone</label>
            <div class="col-sm-10">
              <p class="form-control-static"><input type="text" class="form-control"   name="phone" placeholder="your telephone here"></p>
            </div>
          </div>


          

          <div class="form-group row">
            <label class="col-sm-2 form-control-label">Mobile</label>
            <div class="col-sm-10">
              <p class="form-control-static"><input type="text" class="form-control" name="mobile" placeholder="your mobile here"></p>
            </div>
          </div>


         <div class="form-group row">
            <label class="col-sm-2 form-control-label">Blood Group</label>
            <div class="col-sm-10">
              
                         <input type="radio" name="bloodgroup" value="male" checked> O+
                         <input type="radio" name="bloodgroup" value="female">A+
                         <input type="radio" name="bloodgroup" value="other"> Other
            </div>
          </div>

          
          <div class="form-group row">
            <label class="col-sm-2 form-control-label">Sexe</label>
            <div class="col-sm-10">
              
                        <input type="radio" name="sexe" value="male" checked> Male
                        <input type="radio" name="sexe" value="female"> Female
                        <input type="radio" name="sexe" value="other"> Other
            </div>
          </div>



           <div class="form-group row">
            <label class="col-sm-2 form-control-label">Birth Day</label>
            <div class="col-sm-10">
              
                         <input type="date" name="birthday"> 
            </div>
          </div>

           
       <div class="form-group row">
            <label class="col-sm-2 form-control-label">Email</label>
            <div class="col-sm-10">
              <p class="form-control-static"><input type="email" class="form-control" name="email" placeholder="your email here"></p>
            </div>
          </div>


      <div class="form-group row">
            <label for="exampleSelect" class="col-sm-2 form-control-label">Address</label>
            <div class="col-sm-10">
              <textarea rows="8" name="address" class="form-control" placeholder="Textarea"></textarea>
            </div>
      </div>



      <div class="form-group row">
            <label class="col-sm-2 form-control-label">Add your photo</label>
            <div class="col-sm-10">
              {!! Form::file('image', Input::old('image'),  array('placeholder'=>'image', 'class'=>'form-control', 'id'=>'exampleInputEmail1')) !!}
            </div>
          </div>


       <div class="box-footer">
                     <!--<button type="submit" class="btn btn-primary">Submit</button> -->

                    {!! Form::submit('Create Patient!', array('class'=>'btn btn-primary')) !!}
                  </div>
                <!--</form> -->
                {!! Form::close() !!}
</div>





----------------------------

 <div> Test Formulaire </div>
<table>
<form name="bdc" action="">
  <tr>
      <td width="200">  </td>
       <td> Qt </td>
       <td> PU </td>
       <td> Total ht </td>
  </tr>

  <tr>

       <td> Ordinateur </td>
       <td> <input name="qt1" id="qt1" type="text" size="2" value="2" /> </td>
       <td> <input name="pu1" id="qt1" type="text" size="5" value="980" /> </td>
       <td> <input name="ht1" id="ht1" type="text" size="5" /> </td>
  </tr>

   <tr>
      <td> Ecran </td>
       <td> <input name="qt2" id="qt2" type="text" size="2" value="3" /> </td>
       <td> <input name="pu2" id="pu2" type="text" size="5" value="245" /> </td>
       <td> <input name="ht2" id="ht2" type="text" size="5"  /> </td>
    </tr>


   <tr>
       <td> Imprimante</td>
       <td> <input name="qt3" id="qt3" type="text" size="2" value="1" /> </td>
       <td> <input name="pu3" id="pu3" type="text" size="5" value="1120" /> </td>
       <td> <input name="ht3" id="ht3" type="text" size="5"  /> </td>
    </tr>    

   <tr>
       <td> </td>
       <td></td>
       <td> THT</td>
       <td> <input name="tht" type="text" size="5" /> </td>
   </tr>


   <tr>
       <td> </td>
       <td></td>
       <td> TVA</td>
       <td> <input name="tva" type="text" size="5" /> </td>
   </tr>

   <tr>
      <td> <input type="button" value="Calculer" onclick="Calculer();"> </td>
      <td> <input type="submit" value="Envoyer" onclick="Calculer();"> </td>
      <td> Total TTC </td>
      <td> <input name="ttc" type="text" size="5" /> </td>
   </tr>

</form>
</table>

---------------------------------


<form action="page.php" onsubmit="return verifForm(this)">
  <p>
    Pseudo : <input type="text" name="pseudo" onblur="verifPseudo(this)" /><br />
    E-mail : <input type="text" name="email" size="30" onblur="verifMail(this)" /><br />
    Âge : <input type="text" name="age" size="2" onblur="verifAge(this)" /> ans<br />
    <input type="submit" value="Valider" />
  </p>  
</form>


--------------------------------
@stop