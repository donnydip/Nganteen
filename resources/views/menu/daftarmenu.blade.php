@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card-header text-center py-5">
        <img src="/./logo/Logo.svg"
        style="width: 185px;" alt="logo">
        <br>
        <span style="font-weight: 600; font-size:1.4rem">Kini Ngantin Lebih Terjamin</span>
    </div>
    <div class="overflow-auto p-3 mb-3 mb-md-0 mr-md-3 bg-light" style="max-width: 400px; max-height: 500px;">
            <table class="table table-striped caption-top">
                <caption class="text-center" style="font-weight: 600; font-size:1rem; color:black">Daftar Makanan</caption>
                    <thead class="table">
                        <tr>
                        <th scope="col">NO</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($shows as $numb => $show)
                            <tr>
                            <th scope="row">{{$numb + 1}}</th>
                            <td>{{$show->nama_menu}}</td>
                            <td>{{$show->harga_menu}}</td>
                            </tr>
                        @endforeach
                    </tbody>
            </table>
    </div>
    <div class="justify-content-center">
        <a href="{{route('pilihmenu')}}" class="btn btn-success" style="text-align:center;display:block;">Pesan Sekarang</a>
    </div>
</div>

@endsection
