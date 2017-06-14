@extends('layouts.admin')
@section('page')


      <section class="card">
        <header class="card-header card-header-lg">
          Patient
        </header>
        <div class="card-block invoice">
          <div class="row">
            <div class="col-lg-6 company-info">
              


              <div class="invoice-block">
                <h2>{{$patient->firstname}}, {{$patient->lastname}}:</h2>

                
                <div>
                  <img src="{{$patient->image}}"  height="180" width="180" class="img-rounded" alt="Visa">
                 <p>Birthday: {{$patient->birthday}}</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 clearfix invoice-info">
              <!--
              <div class="text-lg-right">
                <h5>{{$patient->firstname}}, {{$patient->lastname}} # {{$patient->code}}</h5>
                <div><img src="{{$patient->image}}"  height="180" width="180" class="img-rounded" alt="Visa"></div>
                <div>Birth Date: {{$patient->birthday}}</div> 
              </div> -->

              <div class="payment-details">
                <strong>Informations'Details</strong>
               


                <table>
                  <tr>
                    <td>phone:</td>
                    <td>{{$patient->phone}}</td>
                  </tr>
                  <tr>
                    <td>Mobile:</td>
                    <td>{{$patient->mobile}}</td>
                  </tr>
                  <tr>
                    <td>Bloodgroup:</td>
                    <td>{{$patient->bloodgroup}}</td>
                  </tr>
                  <tr>
                    <td>Sexe:</td>
                    <td>{{$patient->sexe}}</td>
                  </tr>
                  <tr>
                    <td>Email:</td>
                    <td>{{$patient->email}}</td>
                  </tr>
                  <tr>
                    <td>Address:</td>
                    <td>{{$patient->address}}</td>
                  </tr>
                  

                </table>


              </div>
            </div>
          </div>




          


          
          <div class="row">
            
            <div class="col-lg-7 terms-and-conditions">
              <strong>Terms and Conditions</strong>
              Thank you for your business. We do expect payment within 21 days, so please process this invoice within that time. There will be a 1.5% interest charge per month on late invoices.
            </div>
             
            <div class="col-lg-5 clearfix">
              <div class="total-amount">
                
          
                <div class="actions">

                  <a href="{{ url('admin/patients')}}" class="btn btn-primary">Back</a>
                  <!--<button class="btn btn-rounded btn-inline">Send</button> -->
                  <button class="btn btn-inline btn-secondary btn-rounded">Print</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>



@stop