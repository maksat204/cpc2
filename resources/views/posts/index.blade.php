
@extends('layouts.app')

@section('title', 'INDEX PAGE')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <a class="btn btn-outline-primary" href="{{route('posts.create')}}">Go to Create Page</a>
                @foreach( $myposts as $post)
                    <div class="col-sm-6">
                <div class="card">
                        <img src="https://avatars.mds.yandex.net/get-autoru-vos/2134119/c249134973d265a8b742308026080779/1200x900n" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$post->title}}</h5>
                        <p class="card-text">{{$post->content}}</p>
                        <a href="{{route('posts.show', $post->id)}}" class="btn btn-primary">Read more</a>
                        <form action="{{route('posts.destroy', $post->id)}}"method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </div>
                </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection





