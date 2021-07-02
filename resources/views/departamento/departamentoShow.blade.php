@extends('layouts.admin')
@section('contenido')
    <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
        <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
            <div class="bg-gray-200 px-2 py-3 border-solid border-gray-300 border-b">
                Detalle de Departamento
            </div>
            <div class="p-1 flex flex-1 flex-col md:flex-row lg:flex-row justify-between md:mx-2 lg:mx-2">
                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">{{$departamento -> nombre}}</div>
                        <p class="text-gray-700 text-base">
                            <b>Encargado:</b><br>
                            {{$departamento -> encargado}}
                        </p>
                        <p class="text-gray-700 text-base">
                            <b>Descripcion:</b><br>
                            {{$departamento -> descripcion}}
                        </p>
                    </div>
                </div>
            </div>
            <form action="{{route('departamento.destroy', $departamento)}}" method="POST">
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
        <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
            <div class="bg-gray-200 px-2 py-3 border-solid border-gray-300 border-b">
                Agregar Cliente
            </div>
            <div class="w-full md:w-3/3 px-3 mb-6 md:mb-0">
                <form action="{{route('departamento.agrega-cliente', $departamento)}}" method="POST">
                    @csrf
                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1" for="grid-state">
                        <b>Selecciona un Cliente</b> 
                    </label>
                    <div class="relative">
                        <select multiple="" name="cliente_id[]" class="block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey" id="grid-state">
                            @foreach ($clientes as $cliente)
                                <option value="{{$cliente->id}}" {{array_search($cliente->id, $departamento->clientes->pluck('id')->toArray()) !== false ? 'selected' : ''}}>{{$cliente->nombre}}</option>
                            @endforeach
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-grey-darker">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="md:flex md:items-center">
                        <div class="md:w-1/3"></div>
                        <div class="md:w-2/3">
                            <button class="bg-transparent hover:bg-blue-500 text-blue-dark font-semibold hover:text-white py-2 px-4 border border-blue hover:border-transparent rounded"
                                type="submit">
                                Actualizar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
        <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
            <div class="bg-gray-200 px-2 py-3 border-solid border-gray-300 border-b">
                Clientes registrados
            </div>
            <div class="p-1 flex flex-1 flex-col md:flex-row lg:flex-row justify-between md:mx-2 lg:mx-2">
                <div class="rounded overflow-hidden shadow-lg">
                    <div class="px-6 py-4">
                        <table class="table-responsive w-full rounded">
                            <thead>
                              <tr>
                                <th class="border w-1/8 px-4 py-2">ID</th>
                                <th class="border w-2/6 px-4 py-2">Nombre</th>
                                <th class="border w-2/6 px-4 py-2">Telefono</th>
                                <th class="border w-1/6 px-4 py-2">Nivel</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($departamento->clientes as $cliente)
                                    <tr>
                                        <td class="border px-4 py-2">{{$cliente -> id}}</td>
                                    <td class="border px-4 py-2">{{$cliente -> nombre}}</td>
                                    <td class="border px-4 py-2">{{$cliente -> telefono}}</td>
                                    <td class="border px-4 py-2">{{$cliente -> nivel_id}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection