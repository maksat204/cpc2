@extends('layouts.app')

@section('title', 'EDIT PAGE')

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

<a class="btn btn-outline-primary" href="{{ route('posts.index') }}">Go to Index Page</a>


     <form action="{{route('posts.update', $post->id)}}" method="post">
         @csrf
         @method('PUT')
         <div class="form-group">
             <label for="titleInput">Title</label>
             <input type ="text" class="form-control" name="title" value="{{$post->title}}"> <br>
             <div class="invalid-feedback"> </div>
         </div>

         <div class="form-group">
             <label for="contentInput">Content</label>
             <textarea name="content" class="form-control" cols="30" rows="10">{{$post->content}}</textarea>
             <div class="invalid-feedback"> </div>
         </div>

         <div class="form-group">
             <label for="categoryInput">Category</label>
             <select class="form-control" name="category_id" id="categoryInput">
                 @foreach($errors as $cat)
                     <option @if($cat->id == $post->category_id) selected @endif value="{{$cat->id}}">{{$cat->name}}</option>
                 @endforeach
             </select><br>
             <div class="invalid-feedback"> </div>
         </div>
         <div class="form-group mt-3">
             <button class="btn btn-outline-success" type="submit">Edit post</button>
         </div>
     </form>
</div>
</div>
</div>
@endsection


