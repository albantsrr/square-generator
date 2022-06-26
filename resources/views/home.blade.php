

@extends('layouts.app')




@section('content')

        <h1 class="display-4 text-center mt-15 mb-7">Générateur de QR Code</h1>

        <div class="d-flex justify-content-center mb-13">
            <p class="mx-5">Gratuit et clé en main</p>
            <p class="mx-5">Personnalisation facile</p>
            <p class="mx-5">Utilisation illimitée</p>
        </div>

        <div class="container-fluid" >
            <div class="container d-flex justify-content-center  " >

                    <div class="qr-container d-flex justify-content-evenly align-items-center flex-lg-row flex-sm-column bg-light w-75 py-20 " >

                        <div class="qr-elements py-10 px-20">
                            <div class="qr-type d-flex justify-content-between mt-5 mb-20">
                                <a class="active" href="#" id="url" >URL</a>
                                <a href="#">AUTRE TYPES</a>
                            </div>

                            <form  method="post">
                                @csrf
                                <input type="text" class="form-control mb-8 " size="35" name ='url' placeholder="https//" value="{{$link}}" >
                                <button class="btn btn-success" type="submit"> Valider </button>
                            </form>
                        </div>


                        <div class="qr-code  ">
                            {!! QrCode::size(200)->generate($link) !!}
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



