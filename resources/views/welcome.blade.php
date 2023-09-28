@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="card-header text-center py-5">
        <img src="./logo/Logo.svg"
        style="width: 185px;" alt="logo">
        <br>
        <span style="font-weight: 600; font-size:1.4rem">Kini Ngantin Lebih Terjamin</span>
    </div>
        <div class="row text-center mx-2">

            <div class="col-md-6 col-sm-6 col-6">
                <div class="card mt-3" style="width: 150px;">
                    <img src="./logo/w1.jpg" alt="" style="border-radius: 5px 5px ">
                    <div class="card-body">
                        <h5 class="card-text" style="font-weight: 600">Warung 1</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-6">
                <div class="card mt-3" style="width: 150px;">
                    <img src="./logo/w2.png" alt="" style="border-radius: 5px">
                    <div class="card-body">
                        <h5 class="card-text" style="font-weight: 600">Warung 2</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-6">
                <div class="card mt-3" style="width: 150px;">
                    <img src="./logo/w1.jpg" alt="" style="border-radius: 5px">
                    <div class="card-body">
                        <h5 class="card-text" style="font-weight: 600">Warung 3</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-6">
                <div class="card mt-3" style="width: 150px;">
                    <img src="./logo/w2.png" alt="" style="border-radius: 5px">
                    <div class="card-body">
                        <h5 class="card-text" style="font-weight: 600">Warung 4</h5>
                    </div>
                </div>
            </div>
        </div>

</div>

@endsection
