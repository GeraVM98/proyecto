<!doctype html>
<html lang="en">

<head>
  <title>Ingresar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="{{ asset('css/dist/styles.css')}}">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
  <style>
  .login{
    background: url('{{ asset('img/fondo.jpg')}}')
  }
  </style>  
</head>

<body class="h-screen font-sans login bg-cover">
<div class="container mx-auto h-full flex flex-1 justify-center items-center">
  <div class="w-full max-w-lg">
    <div class="leading-loose">
      <form method="POST" action="{{ route('login') }}" class="max-w-xl m-4 p-10 bg-white rounded shadow-xl">
        @csrf
        <p class="text-gray-800 font-medium text-center text-lg font-bold">Ingresar</p>
        <div class="">
          <label class="block text-sm text-gray-00" for="email">{{ __('Email') }}</label>
          <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="email" name="email" type="text" required="" aria-label="username" value="{{old('email')}}">
          @error('email')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
          @enderror
        </div>
        <div class="mt-2">
          <label class="block text-sm text-gray-00" for="password">{{ __('Password') }}</label>
          <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="password" name="password" type="password" required=""  aria-label="password">
          @error('password')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
          @enderror
        </div>
        <div class="mt-4 items-center justify-between">
            <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">{{ __('Log in') }}</button>
          <a class="inline-block right-0 align-baseline  font-bold text-sm text-500 hover:text-blue-800" href="{{ route('password.request') }}">
            Forgot Password?
          </a>
        </div>
        <a class="inline-block right-0 align-baseline font-bold text-sm text-500 hover:text-blue-800" href="{{ route('register') }}">
          Crear Cuenta
        </a>
      </form>

    </div>
  </div>
</div>
</body>

</html>
