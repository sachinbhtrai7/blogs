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
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> --}}
</head>
<body style="background-image:linear-gradient(115deg,#5c3aad,#8f828f)">
   
    <nav class="font-sans py-4 ">
        <div class="container mx-auto px-2 flex justify-between">
            <div class="flex space-x-3 text-3xl text-white font-semibold ">
                <h1 class="text-yellow-500 font-bold text-3xl">SBhtrai</h1>
            </div>

            
          
            <div>
                <ul class="flex text-white text-2xl space-x-6">
                @if (auth()->user())
                <li><a class="hover:text-yellow-500" href="/logout">Log Out</a></li>
                <li><a class="hover:text-yellow-500" href="/lists">ManagePosts</a></li>

                 
                  @else
                  <li class="hover:text-yellow-500"><a href="/login">Login</a></li>
                  <li class="hover:text-yellow-500"><a href="/register">Register</a></li>
                  @endif
                    
                </ul>
                
            </div>
            </div>

            </nav>

           

            <div class="text-center">
                <h1 class="text-4xl font-bold text-red-500 transition-opacity duration-500 delay-300 opacity-0 hover:opacity-100">
                  Warm Greeting From Sachin
                </h1>
              </div>
             

 <!-- Container for demo purpose -->
<div class="text-center my-24 mx-auto md:px-6">
    <!-- Section: Design Block -->
    <section class="mb-32 text-center">
        <!-- Flex container for articles -->
        <div class="flex flex-wrap justify-center">
            @foreach($p as $u) 
            <div class="w-full md:w-6/12 xl:w-4/12 px-3 mb-8">
                <!-- Single article -->
                <div class="relative overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20" 
                    data-te-ripple-init data-te-ripple-color="light">
                    <img src="{{$u->image}}" class="w-full" />
                    <a href="#!">
                        <div class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,98.4%,.15)]">
                        </div>
                    </a>
                </div>
                <h5 class="mt-3 mb-2 text-lg font-bold">{{$u->title}}</h5>
                <p class="mb-1 text-lg text-white dark:text-neutral-300">
                    <small>Published by </small><a href="#!">{{$u->name}}</a>
                </p>
                <p class="mb-6 text-gray-700 dark:text-neutral-400">
                    {{$u->body}}
                </p>
                <a data-te-ripple-init data-te-ripple-color="light"
                    class="inline-block rounded-full bg-primary px-6 mb-10 text-xs font-medium uppercase leading-normal text-green-500 shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                    href="" role="button">Read more</a>
                <hr>
            </div>
            @endforeach
        </div>
        <!-- End of Flex container -->
    </section>
    <!-- Section: Design Block -->
</div>


  
  <!-- Container for demo purpose -->

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
</body>
</html>
