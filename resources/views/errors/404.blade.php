@extends('layout.app')

@section('title', 'Edit Profile')

@section('konten')
    @parent
    <section id="aa-error">
        <div class="container" style="    margin-bottom: 30px;">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-error-area">
                        <h2>404</h2>
                        <span>Sorry! Page Not Found</span>
                        <p>Sorry this content has been moved Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, amet perferendis, nemo facere excepturi quis.</p>
                        <a href="{{route('home')}}"> Go to Homepage</a>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection