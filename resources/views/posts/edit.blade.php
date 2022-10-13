<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Create a post</title>
<body>
<a href="{{ route('posts.index') }}">Go to Index Page</a>


     <form action="{{route('posts.update', $post->id)}}" method="post">
         @csrf
         @method('PUT')
         Title: <input type ="text" name="title" value="{{$post->title}}"> <br>
         category:
         <select name="category_id">
             @foreach($errors as $cat)
                 <option @if($cat->id == $post->category_id) selected @endif value="{{$cat->id}}">{{$cat->name}}</option>
             @endforeach
         </select><br>
         Content: <textarea name="content" cols="30" rows="10">{{$post->content}}</textarea>
    <button type="submit">Update post</button>
     </form>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
