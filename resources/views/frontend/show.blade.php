@extends('layouts.main')

@section('content')
    <div class="border-b border-gray-800 product-info">
        <div class="container flex flex-col px-4 py-16 mx-auto md:flex-row">
            <img src="/img/goldstar.jpg" alt="goldstar" class="w-64 md:w-96">
            <div class="ml-24">
                <h2 class="text-4xl font-samibold">Goldstar v2.0</h2>
                <div class="flex flex-wrap text-sm text-gray-400 item-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 text-yellow-500 fill-current" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                    </svg>
                       <span class="ml-2">85%</span>
                       <span class="mx-2">|</span>
                       <span>Feb 20, 2020</span>
                   </div>
                   <p class="mt-8 text-gray-300">
                       Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum vel a voluptatum consequuntur dolorum aut!
                   </p>

                   <div class="mt-12">
                       <h4 class="font-semibold text-white">Feature</h4>
                       <div class="flex mt-4">
                        <div>
                            <div>Model</div>
                            <div class="text-sm text-gray-400">Bella G-10 series</div>
                        </div>
                        <div class="ml-8"> 
                            <div>Color</div>
                            <div class="text-sm text-gray-400">Blue Black White</div>
                        </div>
                       </div>
                   </div>

                   <div class="mt-12">
                       <button class="flex items-center px-5 py-4 font-semibold text-gray-900 transition duration-150 ease-in-out bg-yellow-500 rounded hover:bg-yellow-600 ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                          </svg>
                          <span class="ml-2"> Play Review</span>
                       </button>
                       
                   </div>
            </div>
        </div>
        

    </div>  <!-- end product-info -->

    <div class="border-b border-gray-800 product-review">
        <div class="container px-4 py-16 mx-auto">
            <h2 class="text-4xl font-semibold">
                Review
            </h2>
        </div>
    </div>

    <div class="border-b border-gray-800 product-images">
        <div class="container px-4 py-16 mx-auto">
            <h2 class="text-4xl font-semibold">
                Images
            </h2>
        </div>
    </div>

@endsection