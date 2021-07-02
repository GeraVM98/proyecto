@extends('layouts.admin')
@section('contenido')

    <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
        <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
            <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
                Formulario de Cliente
            </div>
            <div class="p-3">
                @if (isset($cliente))
                    <form action="{{route('cliente.update', $cliente)}}" method="POST" class="w-full">
                    @method("PATCH")
                @else
                    <form action="{{route('cliente.store')}}" method="POST" class="w-full">
                @endif
                @csrf
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                   for="grid-password">
                                   Nombre:
                            </label>
                            <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                    name="nombre" id="nombre" value="{{old('nombre') ?? $cliente->nombre ?? ''}}" type="text">
                                    @error('nombre')
                                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                    @enderror
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                   for="grid-password">
                                   Domicilio:
                            </label>
                            <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                    name="domicilio" id="domicilio" value="{{old('domicilio') ?? $cliente->domicilio ?? ''}}" type="text">
                                    @error('domicilio')
                                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                    @enderror
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                   for="grid-password">
                                   Correo:
                            </label>
                            <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                    name="correo" id="correo" value="{{old('correo') ?? $cliente->correo ?? ''}}" type="text">
                                    @error('correo')
                                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                    @enderror
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                   for="grid-password">
                                   Telefono:
                            </label>
                            <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                    name="telefono" id="telefono" value="{{old('telefono') ?? $cliente->telefono ?? ''}}" type="text">
                                    @error('telefono')
                                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                    @enderror
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                   for="grid-password">
                                   Nivel:
                            </label>
                            <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                    name="nivel_id" id="nivel_id" value="{{old('nivel_id') ?? $cliente->nivel_id ?? ''}}" type="text">
                                    @error('nivel_id')
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