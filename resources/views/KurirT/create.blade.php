@extends('layout.app')

@section('title', 'Page Title')

@section('konten')
    @parent
    <style>
        .check
        {
            opacity:0.5;
            color:#996;

        }

    </style>
    <div class="container">
        <div class="row">
            <h1 style="text-align: center">Pilih Jasa Pengiriman</h1>
            <form method="POST" action="{{route('SettingKurir.store')}}">
                {{ csrf_field() }}
                <div class="form-group">
                    @foreach($pengiriman as $a)
                    <div class="col-md-6">
                        <h1>{{$a->nama}}</h1>
                        <label class="btn btn-primary">
                            <img src="{{asset($a->logo)}}" alt="..." class="img-thumbnail img-check" height="160px" width="100px">
                            <input type="checkbox" name="pengiriman[]" id="item4" value="{{$a->id}}" class="hidden" autocomplete="off"></label>
                    </div>
                    @endforeach
                </div>

                <input type="submit" value="Pilih" class="btn btn-success btn-block">

            </form>
        </div>
    </div>
    <script>
        $(document).ready(function(e){
            $(".img-check").click(function(){
                $(this).toggleClass("check");
            });
        });
    </script>
@endsection