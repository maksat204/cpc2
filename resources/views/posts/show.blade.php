<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>All post</title>
  <body class="antialiased">
    <a href="{{ route('posts.index') }}">Go to Index Page</a>


<h3>{{$post->title}}</h3>
<p>{{ $post->content }} </p>

  <a href="{{route('posts.edit', $post->id)}}">Edit</a>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

  </body>
</html>
