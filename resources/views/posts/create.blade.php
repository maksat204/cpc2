@extends('layouts.app')

@section('title', 'CREATE PAGE')

@section('content')
    <div class="container">

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="row justify-content-center">
            <div class="col-md-10">

    <a href="{{ route('posts.index') }}" class="btn btn-outline-primary">Go to Index Page</a>


    <form action="{{route('posts.store')}}" method="post">
        @csrf


        <div class="form-group">
            <label for="titleInput">Title</label>
            <input type="text" class="form-control" id="titleInput" name="title" placeholder="Enter title ">
            <div class="invalid-feedback"> </div>
        </div>

        <div class="form-group">
            <label for="contentInput">Content</label>
            <textarea class="form-control" id="contentInput" rows="3" name="content"></textarea>
            <div class="invalid-feedback"> </div>
        </div>

        <div class="form-group">
            <label for="categoryInput">Content</label>
            <select class="form-control" name="category_id" id="categoryInput">
                @foreach($categories as $cat)
                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                @endforeach
            </select>
            <div class="invalid-feedback"> </div>
        </div>
        <div class="form-group mt-3">
            <button class="btn btn-outline-success" type="submit">Save post</button>
        </div>
    </form>
            </div>
        </div>
    </div>
@endsection


