@extends('layout.adminTemplate')

@section('title', 'Edit Profile')

@section('konten')
    @parent
    <table class="table table-striped">
        <thead>
            <th>No</th>
            <th>Nama Toko</th>
            <th>Nomor Telephone</th>
            <th>Tanda Pengenal</th>
            <th>Alamat</th>
            <th>Action</th>
        </thead>
        <tbody>

        @foreach($toko as $toko)
            <tr>
                <td>{{ $loop->iteration  }}</td>
                <td> {{ $toko->nama }} </td>
                <td>{{ $toko->tlp }}</td>
                <td>{{ $toko->saldo }}</td>
                <td> {{$toko->alamat }}</td>
                <td><a class="btn btn-default" href="{{route('toko.accept',$toko->id)}}">Accept</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection