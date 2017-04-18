@extends('layout.adminTemplate')

@section('title', 'create voucher')

@section('konten')
    @parent
    <form action="{{route('jenisPem.store')}}" method="POST" files="true" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="nama">Nama Pembayaraan</label>
            <input type="text" name="nama" class="form-control" id="nama" placeholder="nama Voucher">
        </div>
        <div class="form-group">
            <label for="nama">Biaya Tambahaan</label>
            <input type="text" name="nominal" class="form-control" id="nominal" placeholder="nama Nominal Voucher">
        </div>
        <input type="submit"/>

    </form>
@endsection