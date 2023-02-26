@extends('layouts.appTwo')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
<script src="https://cdn.tailwindcss.com"></script>
<div class="container py-12 px-6 h-full">
    <div class="flex justify-center items-center flex-wrap h-full g-6 text-gray-800" >
        <div lass="xl:w-10/12">
            <div class="block bg-white shadow-lg rounded-lg bg-gradient-to-r from-blue-500 to-transparent">
            <div class="card-header text-white"
                style="background: #1488CC !important; 
                background: -webkit-linear-gradient(to right, #2B32B2, #1488CC) !important;
                background: linear-gradient(to left, #2B32B2, #1488CC) !important;"
                >
                    {{ __('Login') }}
                </div>
            <div class="lg:flex lg:flex-wrap g-0">
            <div class="lg:w-6/12 px-4 md:px-0">
            <div class="text-center">
                <img class="mx-auto w-48" src="{{ asset('/img/peloteo.png') }}" alt="logo" />
                
                
              </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">
                            {{ trans('validation.attributes.email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">
                            {{ trans('validation.attributes.password') }}
                        </label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary text-white">
                                    {{ __('Entrar') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="lg:w-6/12 flex items-center lg:rounded-r-lg rounded-b-lg lg:rounded-bl-none bg-gradient-to-r from-green-400 to-blue-500 " >
  
  <div id="carouselExampleSlidesOnly" class="carousel slide relative" data-bs-ride="carousel">
    <div class="carousel-inner relative w-full overflow-hidden">
      <div class="carousel-item active relative float-left w-full">
        <img src="https://i.pinimg.com/564x/01/20/e6/0120e616d2ff47fb03a2646e4fca4370.jpg" class="block w-full" alt="Wild Landscape" />
      </div>
      <div class="carousel-item relative float-left w-full">
        <img src="https://i.pinimg.com/564x/01/20/e6/0120e616d2ff47fb03a2646e4fca4370.jpg" class="block w-full" alt="Camera" />
      </div>
      <div class="carousel-item relative float-left w-full">
        <img src="https://i.pinimg.com/564x/01/20/e6/0120e616d2ff47fb03a2646e4fca4370.jpg" class="block w-full" alt="Exotic Fruits" />
      </div>
    </div>
  </div>


</div>
            </div>

        </div>
        </div>
    </div>
</div>
@endsection
