@extends('layouts.admin')
@section('contenido')
<div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
    <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
        <div class="bg-gray-200 px-2 py-3 border-solid border-gray-300 border-b">
            Ferreteria
        </div>
        <div class="p-1 flex flex-1 flex-col md:flex-row lg:flex-row justify-between md:mx-2 lg:mx-2">
            <div class="rounded overflow-hidden shadow-lg">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Pagina de Inicio</div>
                    <p class="text-gray-700 text-base">
                    Pagina para administracion de clientes de una ferreteria de ventas al mayoreo y menudeo
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
