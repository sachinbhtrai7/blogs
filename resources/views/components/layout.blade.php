<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            </div>
            </nav>

       {{$slot}}

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