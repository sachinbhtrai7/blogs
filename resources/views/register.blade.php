<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
    <link rel="stylesheet" href="/dist/output.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
@vite('resources/css/app.css')
</head>
<body style="background-image:linear-gradient(115deg,#5c3aad,#8f828f)">
   
    <nav class="font-sans py-4 ">
        <div class="container mx-auto px-2 flex justify-between">
            <div class="flex space-x-3 text-3xl text-white font-semibold ">
                <h1 class="text-yellow-500 font-bold text-3xl">SBhtrai</h1>
            </div>
           
            <div>
                <ul class="flex text-white text-2xl space-x-6">
                    <li class="hover:text-yellow-500"><a href="/login">Login</a></li>
                </ul>
                
            </div>
            </div>

            </nav>

           

            <div class="text-center">
                <h1 class="text-4xl font-bold text-white">
                  You are in Register page
                </h1>
              </div>
 <div class=" flex justify-center items-center h-screen ">
    <div class="bg-white p-4 rounded shadow-md w-full max-w-md">
        <h2 class="text-2xl text-center font-semibold mb-4">Register</h2>
        <form action="/register" method="POST" id="register_form">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-semibold mb-2">Name</label>
                <input type="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" 
                placeholder="Your name here" required>
            <name>


            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" 
                placeholder="Your email address" required>
            </div>

            <div class="mb-4">
                <label for="phone" class="block text-gray-700 font-semibold mb-2">Phone Number</label>
                <input type="number" name="phone" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" 
                placeholder="Your phone number" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-semibold mb-2">Password</label>
                <input type="password" name="password" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" 
                placeholder="Your password" required></div>

                <div class="mb-6">
                    <label for="password" class="block text-gray-700 font-semibold mb-2"> Confirm Password</label>
                    <input type="password" name="confirm_password" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" 
                    placeholder="Confirm password">

            </div>


            <div class="flex justify-between items-center ">
                <div>
                    <a href="/forgot_password" class="text-blue-500 hover:underline">Forgot Password?</a> <br>
                </div>
                <button type="submit" value="register" class="bg-blue-500 text-white px-4 py-2 w-full rounded hover:bg-blue-600 focus:outline-none
                 focus:bg-blue-600">Register</button>
            </div>
            <div class="text-center mt-4">
                <div>Already have acccount</div> <a href="/login" class="text-blue-500">Login Here</a>  
            </div>