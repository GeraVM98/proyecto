@extends('layouts.admin')
@section('contenido')
<div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
    <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
        <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
            Clientes
        </div>
        <div class="p-3">
            <button class="bg-transparent hover:bg-blue-500 text-blue-dark font-semibold hover:text-white py-2 px-4 border border-blue hover:border-transparent rounded">
                <a href="{{ route('cliente.create')}}">Agregar</a> 
            </button>
            <table class="table-responsive w-full rounded">
                <thead>
                  <tr>
                    <th class="border w-1/8 px-4 py-2">ID</th>
                    <th class="border w-1/6 px-4 py-2">Nombre</th>
                    <th class="border w-1/6 px-4 py-2">Domicilio</th>
                    <th class="border w-1/6 px-4 py-2">Correo</th>
                    <th class="border w-1/6 px-4 py-2">Telefono</th>
                    <th class="border w-1/6 px-4 py-2">Nivel</th>
                    <th class="border w-1/5 px-4 py-2">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($clientes as $cliente)
                        <tr>
                            <td class="border px-4 py-2">{{$cliente -> id}}</td>
                            <td class="border px-4 py-2">{{$cliente -> nombre}}</td>
                            <td class="border px-4 py-2">{{$cliente -> domicilio}}</td>
                            <td class="border px-4 py-2">{{$cliente -> correo}}</td>
                            <td class="border px-4 py-2">{{$cliente -> telefono}}</td>
                            <td class="border px-4 py-2">{{$cliente -> nivel_id}}</td>
                            <td class="border px-4 py-2">
                                <a href="{{route('cliente.show', $cliente->id)}}" class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
                                        <i class="fas fa-eye"></i></a>
                                <a href="{{route('cliente.edit', $cliente->id)}}" class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
                                        <i class="fas fa-edit"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection