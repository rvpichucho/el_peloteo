@extends('layouts.appTwo')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
<script src="https://cdn.tailwindcss.com"></script>
<div class="row">
<!-- component -->
<div class="bg-gray-900 min-h-screen flex items-center justify-center">
  <div class="bg-gray-800 flex-1 flex flex-col space-y-5 lg:space-y-0 lg:flex-row lg:space-x-10 max-w-6xl sm:p-6 sm:my-2 sm:mx-4 sm:rounded-2xl">
    <!-- Navigation -->
   
    <!-- Content -->
    <div class="flex-1 px-2 sm:px-0">
      <div class="flex justify-between items-center">
        <h3 class="text-3xl font-extralight text-white/50">Canchas</h3>
       
      </div>
      <div class="mb-10 sm:mb-0 mt-10 grid gap-4 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
        <a href="{{ route('cancha-uno') }}" class="btn btn-outline-primary">
        <div class="relative group bg-gray-900 py-10 sm:py-20 px-4 flex flex-col space-y-2 items-center cursor-pointer rounded-md hover:bg-gray-900/80 hover:smooth-hover">
          <img class="w-20 h-20 object-cover object-center rounded-full" src="https://www.espaciosdeportivos.com.gt/wp-content/uploads/2020/01/Cancha-Sintetica-Chimaltenango-1.jpeg" alt="cuisine" />
          <h4 class="text-white text-2xl font-bold capitalize text-center">Cancha de Futbol cesped Sintetica</h4>
          <p class="text-white/50">55 members</p>
          <p class="absolute top-2 text-white/20 inline-flex items-center text-xs">22 Online <span class="ml-2 w-2 h-2 block bg-green-500 rounded-full group-hover:animate-pulse"></span></p>
        </div>
        </a>
        <a href="{{ route('cancha-dos') }}" class="btn btn-outline-primary">
        <div class="relative group bg-gray-900 py-10 sm:py-20 px-4 flex flex-col space-y-2 items-center cursor-pointer rounded-md hover:bg-gray-900/80 hover:smooth-hover">
          <img class="w-20 h-20 object-cover object-center rounded-full" src="https://i.pinimg.com/originals/7e/3b/5b/7e3b5b13a5595cccd5e872e02becb31b.jpg" alt="art" />
          <h4 class="text-white text-2xl font-bold capitalize text-center">Cancha de Basket</h4>
          <p class="text-white/50">132 members</p>
          <p class="absolute top-2 text-white/20 inline-flex items-center text-xs">4 Online <span class="ml-2 w-2 h-2 block bg-green-500 rounded-full group-hover:animate-pulse"></span></p>
        </div>
        </a>
        <a href="{{ route('cancha-tres') }}" class="btn btn-outline-primary">
        <div class="relative group bg-gray-900 py-10 sm:py-20 px-4 flex flex-col space-y-2 items-center cursor-pointer rounded-md hover:bg-gray-900/80 hover:smooth-hover">
          <img class="w-20 h-20 object-cover object-center rounded-full" src="https://www.castillodeamaguana.com/imagenes/carruseles_deportes/voley/voley/voley1_carrusel.jpg" alt="gaming" />
          <h4 class="text-white text-2xl font-bold capitalize text-center">Cancha de Ecuavoley</h4>
          <p class="text-white/50">207 members</p>
          <p class="absolute top-2 text-white/20 inline-flex items-center text-xs">0 Online <span class="ml-2 w-2 h-2 block bg-red-400 rounded-full group-hover:animate-pulse"></span></p>
        </div>
        </a>

        
        <div class="relative group bg-gray-900 py-10 sm:py-20 px-4 flex flex-col space-y-2 items-center cursor-pointer rounded-md hover:bg-gray-900/80 hover:smooth-hover">
          <img class="w-20 h-20 object-cover object-center rounded-full" src="https://civideportes.com.co/wp-content/uploads/2019/10/C%C3%B3mo-hacer-una-cancha-de-f%C3%BAtbol.jpg" alt="gaming" />
          <h4 class="text-white text-2xl font-bold capitalize text-center">cancha de futbol cesped natural </h4>
          <p class="text-white/50">207 members</p>
          <p class="absolute top-2 text-white/20 inline-flex items-center text-xs">0 Online <span class="ml-2 w-2 h-2 block bg-red-400 rounded-full group-hover:animate-pulse"></span></p>
        </div>
        
       
        
      </div>
    </div>
  </div>
</div>
</div>
@endsection