@extends('layouts.app')

@section('content')



    <h1 class="display-4 text-center mt-15 mb-15">Edit your Qr Code</h1>


    <div class="container-fluid" >
        <div class="container d-flex justify-content-center  " >

            <div class="qr-container d-flex justify-content-evenly align-items-center flex-lg-row flex-sm-column bg-light w-75 py-15 " >

                <div class="qr-elements py-10 px-20">
                    <div class="qr-type d-flex justify-content-between mt-5 mb-10">
                        <a class="active" href="#" id="url" >URL</a>
                        <a href="#">AUTRE TYPES</a>
                    </div>



                    <form  method="post" action="{{route('myspace.update', $qrcode->id)}}">
                        @method("PUT")
                        @csrf
                        <div class="form-group">
                            <label for="name">Nom</label>
                            <input type="text" class="form-control mb-8 " size="35" name ='name' placeholder="ex: le nom de votre société" value="{{$qrcode->name}}" >
                            @error('name')
                            {{$message}}
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="name">URL</label>
                            <input type="text" class="form-control mb-8 " size="35" name ='url' placeholder="https//" value="{{$qrcode->url}}" >
                            @error('url')
                            {{$message}}
                            @enderror
                        </div>


                        <button class="btn btn-success" type="submit"> Save the changes </button>
                    </form>
                </div>


                <div class="qr-code  ">
                    {!! QrCode::size(200)->generate('https://preview.keenthemes.com/metronic8/demo1/widgets/tables.html') !!}
                </div>

            </div>


        </div>
    </div>



    <script>
        $(document).ready(function(){
            $('a').on('click', function (){
                $(this).siblings().removeClass('active');
                $(this).addClass('active');
            })

        })
    </script>



@endsection
