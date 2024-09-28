<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Logged in</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style>
.post-body,.post-title {
    display: block; /* Ensures it behaves as a block element */
    max-height: 100px; /* Limit the height */
    overflow: hidden; /* Hide overflow */
    text-overflow: ellipsis; /* Show ellipsis */
    white-space: nowrap; /* Prevent text wrapping */
}
</style>
</head>
<body>
  <div class="card-body p-3 mb-5 bg-secondary">
    <div class="text-center text-white">
        <h1>Welcome to {{auth()->user()->name}}'s blogs list</h1>
        <a class="btn btn-success" href='/post'>Add More Blogs</a>
        <a class="btn btn-success" href='/'>Home Page</a>
    </div>
</div>

@foreach ($p as $u)
<div class="container bg-light rounded mb-3">
    <div class="row">
        <div class="col p-2 justify-content-center align-items-center">
            <h2 class="post-title w-1 py-2">{{$u->title}}</h2>
            <span class="post-body" style="color: rgb(6, 189, 12);">{{$u->body}} </span>

            <!-- Image Display Section -->
            @if($u->image)  <!-- Check if image path exists -->
                <div class="mt-2">
                    <img src="{{asset($u->image)}}" alt="Post Image" class="img-thumbnail" style="max-width: 150px; height: auto;">
                </div>
            @else
                <p>No image uploaded.</p>
            @endif
        </div>

        <div class="col p-2 d-flex justify-content-center align-items-center">
            <a class="btn btn-danger mx-3" href='{{url('deleteblog', $u->id)}}'>Delete Post</a>
            <a class="btn btn-success" href='{{url('edit_post', $u->id)}}'>Edit Post</a>
        </div>
    </div>
</div>
@endforeach

    
</body>
</html>