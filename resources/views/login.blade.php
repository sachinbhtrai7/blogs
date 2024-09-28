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
                    <li class="hover:text-yellow-500"><a href="/register">Register</a></li>
                    <li class="hover:text-yellow-500"><a href="/">Home</a></li>

                </ul>
                
            </div>
            </div>

            </nav>

           

            <div class="text-center">
                <h1 class="text-4xl font-bold text-white">
                  You are in login page
                </h1>
              </div>

              <div class=" flex justify-center items-center h-screen">
                <div class="bg-white p-8 rounded shadow-md w-full max-w-md">
                    <h2 class="text-2xl text-center font-semibold mb-4">Login</h2>
                    <form action="/login" method="POST" id="login_form">
                        @csrf
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                            <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" placeholder="Your email address" required>
                        </div>
                        
                        <div class="mb-6">
                            <label for="password" class="block text-gray-700 font-semibold mb-2">Password</label>
                            <input type="password" id="password" name="password" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" placeholder="Your password" required>
                        </div>
                        <div class="flex justify-between items-center ">
                            <div>
                                <a href="/forgot_password" class="text-blue-500 hover:underline">Forgot Password?</a> <br>
                            </div>
                            <button type="submit" value="login" class="bg-blue-500 text-white px-4 py-2 w-full rounded hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Login</button>
                        </div>
                        <div class="text-center mt-4">
                            <div>Don't have acccount</div> <a href="/register" class="text-blue-500">Register Here</a>  
                        </div>
                    </form>
                </div>
              </div>


            <footer class=" text-black font-bold bg-gray-300 py-4 my-72">
                <div class="container mx-auto px-2 flex justify-between">
                    <div class=" space-x-3 text-3xl font-bold ">
                        <div class="flex space-x-3">
                        <h1 class="font-bold text-3xl">SBhtrai</h1>
                       
                        </div><br>

                    <div>
                    <ul class="text-lg">
                        <li>+977 9867350000</li>
                        <li>sachinbhtrai7@gmail.com</li>
                        <li>bhattaraisachin.com.np</li>
        
                    </ul>
                    </div>
                </div>
        
        
        
                <div class="mb-4">
                    <div class="font-bold text-2xl">Services</div><br>
                     <ul>
                    <li class="hover:text-yellow-600 ">Web Design</li>
                   <li class="hover:text-yellow-600 ">Graphics Design</li>
                   <li class="hover:text-yellow-600 ">Content Writing</li>
                   <li class="hover:text-yellow-600 ">Advertising</li>
                    
                    
        
                </div>
        
        
                <div>
                    <div class="font-bold text-2xl">
                        Subscribe
        
                    </div>
                    <br>
                    <input type="email" placeholder="Enter Email Address">
        
        
                </div>
                </div>
            </footer>
                <div class="text-white text-xl items-center -my-56">
                    © 2022. All rights reserved. Design by Sachin
                </div>
                </footer>

            




</body>
</html>