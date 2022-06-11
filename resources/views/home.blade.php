

@extends('layouts.app')




@section('content')

   <div class="card card-custom bg-light" >
       <div class="card-header">
           <h3 class="card-title">
              Générateur de Qr code
           </h3>
       </div>
       <!--begin::Form-->
       <form id="form" method="POST">
           @csrf
           <div class="card-body">
               <div class="form-group row">
                   <label for="example-url-input" class="col-2 col-form-label">URL</label>
                   <div class="col-10">
                       <input class="form-control" type="url" name="url"value="{{$link}}"  id="example-url-input"/>
                   </div>
               </div>

           </div>
           <div class="card-footer">
               <div class="row">
                   <div class="col-2">
                   </div>
                   <div class="col-10">
                       <input id= "test" type="submit" class="btn btn-success mr-2 w-250px" value="Générer un nouveau QR code">
                   </div>
               </div>
           </div>
       </form>
   </div>

   <div class="card text-center h-100 bg-light">

       <div class="card-body">
           {!! QrCode::size(250)->generate($link) !!}
       </div>

   </div>



@endsection



