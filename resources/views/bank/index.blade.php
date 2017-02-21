@extends('layout.adminTemplate')

@section('title', 'Edit Profile')

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
        <th>Logo</th>
        </thead>
        <tbody>

        @foreach($bank as $bank)
            <tr>
                <td>{{ $loop->iteration  }}</td>
                <td> {{ $bank->namaBank }} </td>
                <td><img src="{{ URL::asset($bank->logo) }}" alt="" width="200px" height="200px"></td>
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