@extends('layouts.app')
@section('content')

<div class="container">
    <div class="card-header text-center mt-5 mb-3">
        <img src="./logo/Logo.svg"
        style="width: 185px;" alt="logo">
        <br>
        <span style="font-weight: 600; font-size:1.4rem">Kini Ngantin Lebih Terjamin</span>
    </div>
    <a href="/tambahmenu" class="btn btn-primary">Tambah Menu Makanan</a>
    <div class="w-100 p-4 pb-4 rounded-3" style="background-color: #FFFFFF">
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-12 col-12 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex w-80 justify-content-between">
                            <div class="ms-2">
                                <h5 class="fw-bold mb-0">Afrizal</h5>
                                <p class="mb-0" style="font-weight: 600">Meja 15</p>
                            </div>
                            <div class="item-right">
                                <h5 class="fw-bold">
                                    <span class="dot" style="background-color: blue">
                                    </span>
                                    Diproses
                                </h5>
                            </div>
                        </div>
                        <a href="/detailorder" class="stretched-link"></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12 col-12 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex w-80 justify-content-between">
                            <div class="ms-2">
                                <h5 class="fw-bold mb-0">Afrizal</h5>
                                <p class="mb-0" style="font-weight: 600">Meja 15</p>
                            </div>
                            <div class="item-right">
                                <h5 class="fw-bold">
                                    <span class="dot" style="background-color: blue">
                                    </span>
                                    Diproses
                                </h5>
                            </div>
                        </div>
                        <a href="/detailorder" class="stretched-link"></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12 col-12 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex w-80 justify-content-between">
                            <div class="ms-2">
                                <h5 class="fw-bold mb-0">Afrizal</h5>
                                <p class="mb-0" style="font-weight: 600">Meja 15</p>
                            </div>
                            <div class="item-right">
                                <h5 class="fw-bold">
                                    <span class="dot" style="background-color: red">
                                    </span>
                                    Baru
                                </h5>
                            </div>
                        </div>
                        <a href="/detailorder" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
