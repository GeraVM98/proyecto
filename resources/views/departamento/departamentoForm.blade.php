@extends('layouts.admin')
@section('contenido')

    <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
        <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
            <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
                Formulario de Departamentos
            </div>
            <div class="p-3">
                @if (isset($departamento))
                    <form action="{{route('departamento.update', $departamento)}}" method="POST" class="w-full">
                    @method("PATCH")
                @else
                    <form action="{{route('departamento.store')}}" method="POST" class="w-full">
                @endif
                @csrf
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                                   for="grid-first-name">
                                    Nombre:
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600"
                                    name="nombre" id="nombre" value="{{old('nombre') ?? $departamento->nombre ?? ''}}" type="text">
                                    @error('nombre')
                                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                    @enderror
                        </div>
                        <div class="w-full md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                                   for="grid-last-name">
                                   Encargado:
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600"
                                    name="encargado" id="encargado" value="{{old('encargado') ?? $departamento->encargado ?? ''}}" type="text">
                                    @error('encargado')
                                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                    @enderror
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                   for="grid-password">
                                   Descripcion:
                            </label>
                            <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                    name="descripcion" id="descripcion" value="{{old('descripcion') ?? $departamento->descripcion ?? ''}}" type="text">
                                    @error('descripcion')
                                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                    @enderror
                        </div>
                    </div>
                    <div class="md:flex md:items-center">
                        <div class="md:w-1/3"></div>
                        <div class="md:w-2/3">
                            <button class="bg-transparent hover:bg-blue-500 text-blue-dark font-semibold hover:text-white py-2 px-4 border border-blue hover:border-transparent rounded"
                                type="submit">
                                Enviar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection