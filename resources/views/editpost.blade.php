<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Logged in</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    @vite('resources/css/app.css')

</head>
<body>

   
    <div class="flex justify-center items-center h-screen">
        <div class="bg-white p-8 rounded shadow-md w-full max-w-md">
            <h2 class="text-2xl text-center font-semibold mb-4">Edit Posts</h2>
            <form action="/edit_post/{{$data->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
    
                <div class="mb-4">
                    <label for="title" class="block text-gray-700 font-semibold mb-2">Title</label>
                    <input type="text" name="title" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" placeholder="Enter New title" required value="{{$data->title}}">
                </div>
    
                <div class="mb-6">
                    <label for="content" class="block text-gray-700 font-semibold mb-2">Content</label>
                    <textarea name="body" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" placeholder="Add Content Here" required>{{$data->body}}</textarea>
                </div>
    
                <!-- Image Display and Upload Section -->
                <div class="mb-4">
                    <label for="image" class="block text-gray-700 font-semibold mb-2">Current Image</label>
                    @if($data->image)
                        <img src="{{$data->image}}" alt="Current Image" class="mb-2 w-full h-auto rounded" />
                    @else
                        <p>No image uploaded.</p>
                    @endif
                    
                   
                </div>
    
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 w-full rounded hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Save</button>
            </form>
        </div>
    </div>
    
</body>
</html>