@extends('layouts.app')
@section('content')

<div class="container">
    <div class="card-header text-center mt-5 mb-3">
        <img src="./logo/Logo.svg"
        style="width: 185px;" alt="logo">
        <br>
        <span style="font-weight: 600; font-size:1.4rem">Kini Ngantin Lebih Terjamin</span>
    </div>
    <div class="w-100 p-4 pb-4 rounded-3" style="background-color: #FFFFFF">
        <div class="row">
            <form method="POST" action="{{ route('simpanmenu') }}">
                @csrf
                <!-- Name input -->
                <div class="form-outline mb-4">
                  <input type="text" id="form5Example1" placeholder="Menu" class="form-control" name="nama_menu"/>
                </div>
                <input type="hidden" value="{{Auth::user()->id_warung}}" name="id_warung">

                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="number" id="form5Example2" placeholder="Harga" class="form-control" name="harga_menu" />
                </div>

                <!-- Submit button -->
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary btn-block mb-4">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
