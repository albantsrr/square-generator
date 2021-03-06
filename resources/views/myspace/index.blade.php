

@extends('layouts.app')


@section('header')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

@endsection


@section('content')


    <h2 class="display-4 mx-10 my-10">My QR Codes </h2>


    <div class="card w-25 mx-10 d-sm-flex justify-content-center ">
        <div class="card-body">
            <h5 class="card-title mb-10">Created Elements</h5>
            <p class="card-text">
                {{ $countqr }}
            </p>
        </div>
    </div>

    <a href="{{route('myspace.create')}}" class="btn btn-darkblue w-250px mx-10 my-5 justify-content-center" id="btn" type="submit">Create a Qr code</a>


    <!--begin::Body-->
    <div class="card-body py-3 bg-light">
        <!--begin::Table container-->
        <div class="table-responsive">
            <!--begin::Table-->
            <table class="table table-row-bordered table-row-gray-100 align-middle   gy-3 " id="example">
                <!--begin::Table head-->
                <thead>
                <tr class="fw-bolder text-muted">
                    <th class="w-25px"></th>
                    <th class="min-w-150px">Aperçu</th>
                    <th class="min-w-140px">Name</th>
                    <th class="min-w-120px">Date</th>
                    <th class="min-w-120px">Type</th>
                    <th class="min-w-120px">Destination</th>
                    <th class="min-w-100px text-end">Actions</th>
                </tr>
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody>
                @foreach($currentuser->qrcodes as $currentuser->qrcode)

                <tr>
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input widget-13-check" type="checkbox" value="1">
                        </div>
                    </td>
                    <td>
                        <a href="#" class="text-dark fw-bolder text-hover-primary fs-6"> {!! QrCode::size(50)->generate($currentuser->qrcode->url) !!}</a>
                    </td>
                    <td>
                        <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">{{$currentuser->qrcode->name}}</a>

                    </td>
                    <td>
                        <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">{{ $currentuser->qrcode->created_at->format('d M Y')}}</a>
                    </td>
                    <td>
                        <span class="badge badge-light-primary">URL</span>

                    </td>

                    <td>
                        <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">{{$currentuser->qrcode->url}}</a>
                    </td>
                    <td class="text-end">


                        <a href="{{route('myspace.download', $currentuser->qrcode->id)}}" type="submit" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                            <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                            <span class="donwload">
                                                                      <img id ="download-button" class="w-15px" src="{{asset('img/download.png')}}">
                            </span><!--end::Svg Icon-->
                        </a>

                            <a href="{{route('myspace.edit', $currentuser->qrcode->id)}}" type="submit" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                <span class="svg-icon svg-icon-3">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor"></path>
                                                                            <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor"></path>
                                                                        </svg>
                                                                    </span><!--end::Svg Icon-->
                            </a>

                        <button type="button" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm d-inline" onclick="document.getElementById('modal-open-{{$currentuser->qrcode->id}}').style.display='block'">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                            <span class="svg-icon svg-icon-3">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor"></path>
                                                                            <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor"></path>
                                                                            <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor"></path>
                                                                        </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </button>




                        <form action="{{route('myspace.delete', $currentuser->qrcode->id )}}" method="POST">
                            @csrf
                            @method("DELETE")


                            <div class="modal" tabindex="-1" role="dialog" id="modal-open-{{$currentuser->qrcode->id}}">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Be careful, deleting an item is final</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="document.getElementById('modal-open-{{$currentuser->qrcode->id}}').style.display='none'">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Are you sure you want to delete this item?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="document.getElementById('modal-open-{{$currentuser->qrcode->id}}').style.display='none'" >Close</button>
                                            <button type="submit" class="btn btn-danger">Yes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </td>
                </tr>

                @endforeach
                </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->
        </div>
        <!--end::Table container-->
    </div>
    <!--begin::Body-->


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>



<script>
    $(document).ready(function () {
        $('#example').DataTable({
            'lengthMenu': [5, 10, 20],

        });



    });
</script>

@endsection


