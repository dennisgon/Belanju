@extends('layout.adminTemplate')

@section('title', 'create voucher')

@section('konten')
    @parent
    <form action="{{route('tempatPromosi.store')}}" method="POST" files="true" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="nama">Nama Tempat</label>
            <input type="text" name="nama" class="form-control" id="nama" placeholder="nama Voucher">
        </div>
        <div class="form-group">
            <label for="nama">Kuota</label>
            <input type="text" name="kuota" class="form-control" id="nominal" placeholder="nama Nominal Voucher">
        </div>
        <div class="form-group">
            <label for="nama">Harga</label>
            <input type="text" name="harga" class="form-control" id="nominal" placeholder="nama Nominal Voucher">
        </div>
        <input type="submit"/>

    </form>
@endsection