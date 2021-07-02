<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/dist/styles.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
          crossorigin="anonymous">
    <style>
        .login{
            background: url('{{ asset('img/fondo.jpg')}}')
        }
    </style>
    <title>Registro</title>
</head>
<body class="h-screen font-sans login bg-cover">
<div class="container mx-auto h-full flex flex-1 justify-center items-center">
    <div class="w-full max-w-lg">
        <div class="leading-loose">
            <form  method="POST" action="{{ route('register') }}" class="max-w-xl m-4 p-10 bg-white rounded shadow-xl">
                <p class="text-gray-800 font-medium">Registro</p>
                @csrf
                <div class="">
                    <label class="block text-sm text-gray-00" for="cus_name">{{ __('Name') }}</label>
                    <input name="name" id="name" class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded"  type="text" required=""  aria-label="Name" value="{{old('name')}}">
                    @error('name')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="">
                    <label class="block text-sm text-gray-00" for="cus_name">{{ __('Email') }}</label>
                    <input name="email" id="email" class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded"  type="text" required=""  aria-label="Name" value="{{old('email')}}">
                    @error('email')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="">
                    <label class="block text-sm text-gray-00" for="cus_name">{{ __('Password') }}</label>
                    <input name="password" id="password" class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded"  type="password" required=""  aria-label="Name">
                    @error('password')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="">
                    <label class="block text-sm text-gray-00" for="cus_name">{{ __('Confirm Password') }}</label>
                    <input name="password_confirmation" id="password_confirmation" class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded"  type="password" required=""  aria-label="Name">
                    @error('password_confirmation')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mt-4">
                    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">{{ __('Register') }}</button>
                </div>
                <a class="inline-block right-0 align-baseline font-bold text-sm text-500 hover:text-blue-800" href="/login">
                    {{ __('Already registered?') }}
                </a>
            </form>
        </div>
    </div>
</div>

</body>
</html>