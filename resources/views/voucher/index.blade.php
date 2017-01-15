@extends('layout.adminTemplate')

@section('title', 'voucher list')

@section('konten')
    @parent
    <style>
        #page-wrapper > div > div.blank > div > table > tbody > tr > td > form{
            display:inline-block;
        }
    </style>
    <table class="table table-striped">
        <thead>
        <th>No</th>
        <th>Nama </th>
        <th>kode voucher</th>
        <th>nominal</th>
        <th>potongan maximum</th>
        <th>tanggal aktif</th>
        <th>tanggal berakhir</th>
        <th>kuota tersedia</th>
        </thead>
        <tbody>
        @foreach($voucher as $voucher)
            <tr>
                <td>{{ $loop->iteration  }}</td>
                <td> {{ $voucher->nama }} </td>
                <td>{{ $voucher->kodeVoucher }}</td>
                <td>{{ $voucher->nominal}}</td>
                <td> {{ $voucher->maxPotongan }}</td>
                <td>{{ $voucher->tanggalAktif }}</td>
                <td>{{$voucher->tanggalBerakhir}}</td>
                <td>{{ $voucher->kuota }}</td>
                <td>
                    {{--<a class="btn btn-default" href="{{route('toko.accept',$toko->id)}}">Accept</a>--}}
                    {{--{{ Form::open(['method' => 'DELETE', 'route' => ['toko.destroy',$toko->id]]) }}--}}
                    {{--<button type="submit" title="menghapus alamat" class="btn btn-danger">--}}
                    {{--Reject--}}
                    {{--</button>--}}
                    {{--{{ Form::close() }}--}}
                </td>
                <td></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection