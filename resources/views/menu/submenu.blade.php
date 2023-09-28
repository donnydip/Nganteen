@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card-header text-center py-5">
        <img src="/./logo/Logo.svg"
        style="width: 185px;" alt="logo">
        <br>
        <span style="font-weight: 600; font-size:1.4rem">Kini Ngantin Lebih Terjamin</span>
    </div>
        <div class="row justify-content-center text-center py-5">
            <div class="col-md-6 col-sm-6" style="width: 200px; height:200px;">
                <div class="card">
                    <img src="/./logo/yummy.png" alt="" style="border-radius: 5px 5px ">
                    <div class="card-body">
                        <h5 class="card-text" style="font-weight: 600">Pesan Sekarang</h5>
                        <a href="{{route('pilihmenu')}}" class="stretched-link"></a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-6" style="width: 200px; height:200px">
                <div class="card">
                    <img src="/./logo/dafmakanan.png" alt="" style="border-radius: 5px">
                    <div class="card-body">
                        <h5 class="card-text" style="font-weight: 600">Daftar Menu</h5>
                        <a href="{{url($no.'/submenu/daftarmenu')}}" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        </div>

</div>

@endsection
