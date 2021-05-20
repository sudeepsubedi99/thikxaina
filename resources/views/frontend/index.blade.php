@extends('layouts.main')

@section('content')

   <div class="container px-4 pt-16 mx-auto">
       <div class="">
           <a href="#" class="text-lg font-semibold tracking-wider text-yellow-500 uppercase hover-gray:300">Feature storys</a>
           <img src="/img/story.jpg" alt="story" class="inset-0 object-fill w-full h-48 mt-2 ">
           <span class="text-sm text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, labore. Dicta dolore corrupti consectetur, minus labore amet nisi alias dolorum dolorem maiores doloribus laudantium iusto consequatur pariatur, iure ipsa doloremque.</span>
       </div>

       {{-- Popular Products --}}

     <div class="mt-4 popular-products ">
       <h2 class="text-lg font-semibold tracking-wider text-yellow-500 uppercase">Popular Products</h2>
       <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 ">
           <div class="mt-8 ">
               <a href="#">
                   <img src="/img/goldstar.jpg" alt="goldstar" class="transition duration-150 ease-in-out hover:opacity-75">
               </a>
               <div class="mt-2">
                   <a href="#" class="mt-2 text-lg hover-gray:300 ">Goldstar shoe</a>
                   <div class="flex text-sm text-gray-400 item-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 text-yellow-500 fill-current" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                    </svg>
                       <span class="ml-2">85%</span>
                       <span class="mx-2">|</span>
                       <span>Feb 20, 2020</span>
                   </div>
                   <div class="text-sm text-gray-400"> 
                       Shoes, Sport, Durable
                   </div>
               </div>
            </div>
        <div class="mt-8 ">
            <a href="#">
                <img src="/img/goldstar.jpg" alt="goldstar" class="transition duration-150 ease-in-out hover:opacity-75">
            </a>
            <div class="mt-2">
                <a href="#" class="mt-2 text-lg hover-gray:300 ">Goldstar shoe</a>
                <div class="flex text-sm text-gray-400 item-center">
                 <svg xmlns="http://www.w3.org/2000/svg" class="w-4 text-yellow-500 fill-current" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                 </svg>
                    <span class="ml-2">85%</span>
                    <span class="mx-2">|</span>
                    <span>Feb 20, 2020</span>
                </div>
                <div class="text-sm text-gray-400"> 
                    Shoes, Sport, Durable
                </div>
            </div>
        </div>
        <div class="mt-8 ">
            <a href="#">
                <img src="/img/goldstar.jpg" alt="goldstar" class="transition duration-150 ease-in-out hover:opacity-75">
            </a>
            <div class="mt-2">
                <a href="#" class="mt-2 text-lg hover-gray:300 ">Goldstar shoe</a>
                <div class="flex text-sm text-gray-400 item-center">
                 <svg xmlns="http://www.w3.org/2000/svg" class="w-4 text-yellow-500 fill-current" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                 </svg>
                    <span class="ml-2">85%</span>
                    <span class="mx-2">|</span>
                    <span>Feb 20, 2020</span>
                </div>
                <div class="text-sm text-gray-400"> 
                    Shoes, Sport, Durable
                </div>
            </div>
        </div>
        <div class="mt-8 ">
            <a href="#">
                <img src="/img/goldstar.jpg" alt="goldstar" class="transition duration-150 ease-in-out hover:opacity-75">
            </a>
            <div class="mt-2">
                <a href="#" class="mt-2 text-lg hover-gray:300 ">Goldstar shoe</a>
                <div class="flex text-sm text-gray-400 item-center">
                 <svg xmlns="http://www.w3.org/2000/svg" class="w-4 text-yellow-500 fill-current" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                 </svg>
                    <span class="ml-2">85%</span>
                    <span class="mx-2">|</span>
                    <span>Feb 20, 2020</span>
                </div>
                <div class="text-sm text-gray-400"> 
                    Shoes, Sport, Durable
                </div>
            </div>
         </div>
       </div>
       {{-- End Popular Products --}}

        {{-- New Movie --}}


     <div class="mt-4 new-products ">
        <h2 class="text-lg font-semibold tracking-wider text-yellow-500 uppercase">New Products</h2>
        <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            <div class="mt-8">
                <a href="#">
                    <img src="/img/goldstar.jpg" alt="goldstar" class="transition duration-150 ease-in-out hover:opacity-75">
                </a>
                <div class="mt-2">
                    <a href="#" class="mt-2 text-lg hover-gray:300 ">Goldstar shoe</a>
                    <div class="flex text-sm text-gray-400 item-center">
                     <svg xmlns="http://www.w3.org/2000/svg" class="w-4 text-yellow-500 fill-current" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                     </svg>
                        <span class="ml-2">85%</span>
                        <span class="mx-2">|</span>
                        <span>Feb 20, 2020</span>
                    </div>
                    <div class="text-sm text-gray-400"> 
                        Shoes, Sport, Durable
                    </div>
                </div>
             </div>
         <div class="mt-8">
             <a href="#">
                 <img src="/img/goldstar.jpg" alt="goldstar" class="transition duration-150 ease-in-out hover:opacity-75">
             </a>
             <div class="mt-2">
                 <a href="#" class="mt-2 text-lg hover-gray:300 ">Goldstar shoe</a>
                 <div class="flex text-sm text-gray-400 item-center">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-4 text-yellow-500 fill-current" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                  </svg>
                     <span class="ml-2">85%</span>
                     <span class="mx-2">|</span>
                     <span>Feb 20, 2020</span>
                 </div>
                 <div class="text-sm text-gray-400"> 
                     Shoes, Sport, Durable
                 </div>
             </div>
         </div>
         <div class="mt-8">
             <a href="#">
                 <img src="/img/goldstar.jpg" alt="goldstar" class="transition duration-150 ease-in-out hover:opacity-75">
             </a>
             <div class="mt-2">
                 <a href="#" class="mt-2 text-lg hover-gray:300 ">Goldstar shoe</a>
                 <div class="flex text-sm text-gray-400 item-center">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-4 text-yellow-500 fill-current" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                  </svg>
                     <span class="ml-2">85%</span>
                     <span class="mx-2">|</span>
                     <span>Feb 20, 2020</span>
                 </div>
                 <div class="text-sm text-gray-400"> 
                     Shoes, Sport, Durable
                 </div>
             </div>
         </div>
         <div class="mt-8">
             <a href="#">
                 <img src="/img/goldstar.jpg" alt="goldstar" class="transition duration-150 ease-in-out hover:opacity-75">
             </a>
             <div class="mt-2">
                 <a href="#" class="mt-2 text-lg hover-gray:300 ">Goldstar shoe</a>
                 <div class="flex text-sm text-gray-400 item-center">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-4 text-yellow-500 fill-current" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                  </svg>
                     <span class="ml-2">85%</span>
                     <span class="mx-2">|</span>
                     <span>Feb 20, 2020</span>
                 </div>
                 <div class="text-sm text-gray-400"> 
                     Shoes, Sport, Durable
                 </div>
                </div>
            </div>
        </div>
        {{-- user hamro site --}}

        <div class="mt-4 Hamro review ">
            <h2 class="text-lg font-semibold tracking-wider text-yellow-500 uppercase">User Site Review</h2>
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/goldstar.jpg" alt="goldstar" class="transition duration-150 ease-in-out hover:opacity-75">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="mt-2 text-lg hover-gray:300 ">Goldstar shoe</a>
                        <div class="flex text-sm text-gray-400 item-center">
                         <svg xmlns="http://www.w3.org/2000/svg" class="w-4 text-yellow-500 fill-current" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                         </svg>
                            <span class="ml-2">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2020</span>
                        </div>
                        <div class="text-sm text-gray-400"> 
                            Shoes, Sport, Durable
                        </div>
                    </div>
                 </div>
             <div class="mt-8">
                 <a href="#">
                     <img src="/img/goldstar.jpg" alt="goldstar" class="transition duration-150 ease-in-out hover:opacity-75">
                 </a>
                 <div class="mt-2">
                     <a href="#" class="mt-2 text-lg hover-gray:300 ">Goldstar shoe</a>
                     <div class="flex text-sm text-gray-400 item-center">
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-4 text-yellow-500 fill-current" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                      </svg>
                         <span class="ml-2">85%</span>
                         <span class="mx-2">|</span>
                         <span>Feb 20, 2020</span>
                     </div>
                     <div class="text-sm text-gray-400"> 
                         Shoes, Sport, Durable
                     </div>
                 </div>
             </div>
             <div class="mt-8">
                 <a href="#">
                     <img src="/img/goldstar.jpg" alt="goldstar" class="transition duration-150 ease-in-out hover:opacity-75">
                 </a>
                 <div class="mt-2">
                     <a href="#" class="mt-2 text-lg hover-gray:300 ">Goldstar shoe</a>
                     <div class="flex text-sm text-gray-400 item-center">
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-4 text-yellow-500 fill-current" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                      </svg>
                         <span class="ml-2">85%</span>
                         <span class="mx-2">|</span>
                         <span>Feb 20, 2020</span>
                     </div>
                     <div class="text-sm text-gray-400"> 
                         Shoes, Sport, Durable
                     </div>
                 </div>
             </div>
             <div class="mt-8">
                 <a href="#">
                     <img src="/img/goldstar.jpg" alt="goldstar" class="transition duration-150 ease-in-out hover:opacity-75">
                 </a>
                 <div class="mt-2">
                     <a href="#" class="mt-2 text-lg hover-gray:300 ">Goldstar shoe</a>
                     <div class="flex text-sm text-gray-400 item-center">
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-4 text-yellow-500 fill-current" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                      </svg>
                         <span class="ml-2">85%</span>
                         <span class="mx-2">|</span>
                         <span>Feb 20, 2020</span>
                     </div>
                     <div class="text-sm text-gray-400"> 
                         Shoes, Sport, Durable
                     </div>
                    </div>
                </div>
            </div>


    </div>

@endsection