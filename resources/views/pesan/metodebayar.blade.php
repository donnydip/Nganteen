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
          Metode Pembayaran
        </div>
        <div class="card-body">
          <select class="form-select my-3" aria-label="Default select example">
            <option selected>Silahkan Memilih Metode Pembayaran</option>
            <option value="1">Transfer E-Wallet</option>
            <option value="2">Scan QRIS</option>
            <option value="3">TUNAI</option>
          </select>
          <button type="button" class="btn btn-danger">Konfirmasi</button>
        </div>
      </div>
</div>

@endsection
