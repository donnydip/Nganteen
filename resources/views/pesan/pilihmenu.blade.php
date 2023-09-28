@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card-header text-center mt-5 mb-3">
        <img src="./logo/Logo.svg"
        style="width: 185px;" alt="logo">
        <br>
        <span style="font-weight: 600; font-size:1.4rem">Kini Ngantin Lebih Terjamin</span>
    </div>
    <div class="text-center mb-3">
        <span style="font-weight: 600; font-size:1.2rem">Pemesanan</span>
    </div>
    <div class="row g-3 bg-light">
        <div class="col-10">
            <select class="form-select" aria-label="Default select example">
                <option selected>Silahkan Memilih Menu</option>
                @foreach ($show as $shw )
                <option value="{{ $shw->nama_menu }}">{{ $shw->nama_menu }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-2">
          <input type="number" class="form-control" placeholder="Qty" aria-label="Last name">
        </div>
        <button class="btn btn-danger lg">Konfirmasi</button>
    </div>
</div>

@endsection
