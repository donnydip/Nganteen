@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card-header text-center py-5">
        <img src="./logo/Logo.svg"
        style="width: 185px;" alt="logo">
        <br>
        <span style="font-weight: 600; font-size:1.4rem">Kini Ngantin Lebih Terjamin</span>
    </div>
    <div class="card text-center">
        <div class="card-header"  style="font-weight: 600">
          Pilih Meja Anda
        </div>
        <div class="card-body">
          <h5 class="card-title">Berikut Adalah Meja Yang Tersedia</h5>
          <select class="form-select my-3" aria-label="Default select example">
            <option selected>Silahkan Memilih Nomor Meja</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
          <select class="form-select my-3" aria-label="Default select example">
            <option selected>Jumlah Orang</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
            <option value="3">Four</option>
          </select>
          <button type="button" class="btn btn-danger">Konfirmasi</button>
        </div>
      </div>
</div>

@endsection
