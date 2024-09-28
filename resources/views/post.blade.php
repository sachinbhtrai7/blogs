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

    <h1 class="text-center mb-5">You are on blogs page</h1>
    <div>
        <a href="/logout">
            <h2 class="text-2xl text-blue-500 hover:underline text-center font-semibold mb-4">Logout</h2>
        </a>
    </div>
    <hr>
    
    <div class="flex justify-center items-center h-screen">
        <div class="bg-white p-8 rounded shadow-md w-full max-w-md">
            <h2 class="text-2xl text-center font-semibold mb-4">Create Posts</h2>
            <form action="/create_post" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="title" class="block text-gray-700 font-semibold mb-2">Title</label>
                    <input type="text" name="title" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" placeholder="Enter title" required>
                </div>
    
                <div class="mb-6">
                    <label for="content" class="block text-gray-700 font-semibold mb-2">Content</label>
                    <textarea name="body" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" placeholder="Content Here" required></textarea>
                </div>
    
                <!-- New Image Upload Field -->
                <div class="mb-4">
                    <label for="image" class="block text-gray-700 font-semibold mb-2">Upload Image</label>
                    <input type="file" name="image" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" required>
                </div>
    
                <button type="submit" value="submit" class="bg-blue-500 text-white px-4 py-2 w-full rounded hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Create</button>
    
            </form>
            <a href="/lists">
                <button type="button" class="bg-blue-500 mt-6 text-white px-4 py-2 w-full rounded hover:bg-blue-600 focus:outline-none focus:bg-blue-600">View All your Existing Posts</button>
            </a>
        </div>
    </div>
    

    
</body>
</html>