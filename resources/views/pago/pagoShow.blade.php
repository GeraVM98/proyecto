@extends('layouts.admin')
@section('contenido')
    <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
        <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
            <div class="bg-gray-200 px-2 py-3 border-solid border-gray-300 border-b">
                Detalle del cliente
            </div>
            <div class="p-1 flex flex-1 flex-col md:flex-row lg:flex-row justify-between md:mx-2 lg:mx-2">
                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">{{$cliente -> nombre}}</div>
                        <p class="text-gray-700 text-base">
                            <b>Domicilio:</b><br>
                            {{$cliente -> domicilio}}
                        </p>
                        <p class="text-gray-700 text-base">
                            <b>Correo:</b><br>
                            {{$cliente -> correo}}
                        </p>
                        <p class="text-gray-700 text-base">
                            <b>Telefono:</b><br>
                            {{$cliente -> telefono}}
                        </p>
                        <p class="text-gray-700 text-base">
                            <b>Nivel:</b><br>
                            {{$cliente -> nivel_id}}
                        </p>
                    </div>
                </div>
            </div>
            <form action="{{route('cliente.destroy', $cliente)}}" method="POST">
                @method("DELETE")
                @csrf
                <div class="md:flex md:items-center">
                    <div class="md:w-1/3"></div>
                    <div class="md:w-2/3">
                        <button class="bg-transparent hover:bg-blue-500 text-blue-dark font-semibold hover:text-white py-2 px-4 border border-blue hover:border-transparent rounded"
                            type="submit">
                            Eliminar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection