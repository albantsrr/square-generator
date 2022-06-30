

@extends('layouts.app')




@section('content')

        <h1 class="display-4 text-center mt-15 mb-4 "> QR Code generator</h1>

        <ul class="d-flex justify-content-center mb-20 w-100">

            <li class="mx-5  d-flex  "> <img class="w-15px h-15px   my-auto" src="{{asset('img/smiley.png')}}"> <p class="h4 my-auto mx-3">free use </p></li>
            <li class="mx-5  d-flex  "> <img class="w-15px h-15px  my-auto" src="{{asset('img/edit.png')}}"> <p class="h4 my-auto mx-3">customizable</p></li>
            <li class="mx-5  d-flex  "> <img class="w-15px h-15px  my-auto" src="{{asset('img/clock.png')}}"> <p class="h4 my-auto mx-3">unlimited</p></li>

        </ul>

        <div class="container-fluid" >
            <div class="container d-flex justify-content-center align-center " >

                    <div class="qr-container row bg-light w-75 py-10 d-lg-flex justify-content-evenly align-items-center  " >

                        <div class="qr-elements  py-5 col-lg-6  px-10">
                            <div class="qr-type d-flex justify-content-between mt-5 mb-10">
                                <a class="active" href="#" id="url" >URL</a>
                                <a href="#">OTHER TYPES</a>
                            </div>

                            <form  method="post">
                                @csrf
                                <input type="text" class="form-control mb-8 px-40 " name ='url' placeholder="https//" value="{{$link}}" >
                                <button class="btn btn-darkblue " type="submit"> Validate </button>
                            </form>
                        </div>


                        <div class="qr-code w-auto h-auto  col-lg-6 py-10 ">
                            {!! QrCode::size(220)->color(34, 39, 71)->generate($link) !!}
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



