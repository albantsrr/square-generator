@extends('layouts.app')

@section('content')



    <h1 class="display-4 text-center mt-15 mb-15">Edit your Qr Code</h1>


    <div class="container-fluid" >
        <div class="container d-flex justify-content-center  " >

            <div class="qr-container row bg-light w-75 py-10 d-lg-flex justify-content-evenly align-items-center " >

                <div class="qr-elements py-5 col-lg-6  px-10">
                    <div class="qr-type d-flex justify-content-between mt-3 mb-10">
                        <a class="active" href="#" id="url" >URL</a>
                        <a href="#">AUTRE TYPES</a>
                    </div>



                    <form  method="post" action="{{route('myspace.update', $qrcode->id)}}">
                        @method("PUT")
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
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


                        <button class="btn btn-darkblue" type="submit"> Save the changes </button>
                    </form>
                </div>


                <div class="qr-code w-auto h-auto  col-lg-6 py-10 ">
                    {!! QrCode::size(220)->color(34, 39, 71)->generate("https://laracasts.com/discuss/channels/laravel/laravel-asset-helper-function-not-working-on-live-server?page=1&replyId=437135") !!}
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
