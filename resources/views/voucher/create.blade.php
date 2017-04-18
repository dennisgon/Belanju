@extends('layout.adminTemplate')

@section('title', 'create voucher')

@section('konten')
    @parent
    <form action="{{route('voucher.store')}}" method="POST" files="true" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="nama">Nama Voucher</label>
            <input type="text" name="nama" class="form-control" id="nama" placeholder="nama Voucher">
        </div>
        <div class="form-group">
            <label for="nama">nominal</label>
            <input type="text" name="nominal" class="form-control" id="nominal" placeholder="nama Nominal Voucher">
        </div>
        <div class="form-group">
            <label for="nama">kode Voucher</label>
            <input type="text" name="kode" class="form-control" id="kode" placeholder="kode Voucher">
        </div>
        <div class="form-group">
            <label for="nama">tanggal aktif</label>
            <input type="date" name="aktif" class="form-control" id="aktif" placeholder="tanggal aktif">
        </div>
        <div class="form-group">
            <label for="nama">tanggal berakhir</label>
            <input type="date" name="berakhir" class="form-control" id="berakhir" placeholder="tanggal berakhir">
        </div>
        <div class="form-group">
            <label for="nama">max potongan</label>
            <input type="text" name="potongan" class="form-control" id="potongan" placeholder="maximum potongan">
        </div>
        <div class="form-group">
            <label for="nama">kuota</label>
            <input type="text" name="kuota" class="form-control" id="kuota" placeholder="kuota">
        </div>
        <input type="submit"/>

    </form>
@endsection