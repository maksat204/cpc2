
@extends('layouts.app')

@section('title', 'SHOW PAGE')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <a class="btn btn-outline-primary" href="{{ route('posts.index') }}">Go to Index Page</a>
                    <div class="col-sm-6">
                        <div class="card">
                                <img src="https://avatars.mds.yandex.net/get-autoru-vos/2134119/c249134973d265a8b742308026080779/1200x900n" class="card-img-top" alt="...">
                                <div class="card-body">
                                <h3 class="card-title">{{ $post->title }}</h3>
                                <p class="card-text">{{ $post->content }}</p>
                                <a href="{{route('posts.edit', $post->id)}}" class="btn btn-primary">Edit</a>
                                @csrf
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection



