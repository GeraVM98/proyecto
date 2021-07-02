@extends('layouts.admin')
@section('contenido')
<div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
    <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
        <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
            Departamentos
        </div>
        <div class="p-3">
            <button class="bg-transparent hover:bg-blue-500 text-blue-dark font-semibold hover:text-white py-2 px-4 border border-blue hover:border-transparent rounded">
                <a href="{{ route('departamento.create')}}">Agregar</a> 
            </button>
            <table class="table-responsive w-full rounded">
                <thead>
                  <tr>
                    <th class="border w-1/8 px-4 py-2">ID</th>
                    <th class="border w-1/6 px-4 py-2">Nombre</th>
                    <th class="border w-1/6 px-4 py-2">Encargado</th>
                    <th class="border w-2/6 px-4 py-2">Descripcion</th>
                    <th class="border w-1/6 px-4 py-2">Usuario</th>
                    <th class="border w-1/5 px-4 py-2">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($departamentos as $departamento)
                        <tr>
                            <td class="border px-4 py-2">{{$departamento -> id}}</td>
                        <td class="border px-4 py-2">{{$departamento -> nombre}}</td>
                        <td class="border px-4 py-2">{{$departamento -> encargado}}</td>
                        <td class="border px-4 py-2">{{$departamento -> descripcion}}</td>
                        <td class="border px-4 py-2">{{$departamento -> user -> name}}</td>
                        <td class="border px-4 py-2">
                            <a href="{{route('departamento.show', $departamento->id)}}" class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
                                    <i class="fas fa-eye"></i></a>
                            <a href="{{route('departamento.edit', $departamento->id)}}" class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
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