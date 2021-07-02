@extends('layouts.admin')
@section('contenido')
<div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
    <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
        <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
            Clientes
        </div>
        <div class="p-3">
            <table class="table-responsive w-full rounded">
                <thead>
                  <tr>
                    <th class="border w-1/8 px-4 py-2">ID</th>
                    <th class="border w-1/6 px-4 py-2">Cliente</th>
                    <th class="border w-1/6 px-4 py-2">Departamento</th>
                    <th class="border w-1/6 px-4 py-2">Fecha</th>
                    <th class="border w-1/6 px-4 py-2">Monto</th>
                    <th class="border w-1/6 px-4 py-2">Usuario</th>
                    {{--<th class="border w-1/5 px-4 py-2">Acciones</th>--}}
                  </tr>
                </thead>
                <tbody>
                    @foreach ($pagos as $pago)
                        <tr>
                            <td class="border px-4 py-2">{{$pago -> id}}</td>
                            <td class="border px-4 py-2">{{$pago -> cliente_id}}</td>
                            <td class="border px-4 py-2">{{$pago -> departamento_id}}</td>
                            <td class="border px-4 py-2">{{$pago -> fecha}}</td>
                            <td class="border px-4 py-2">{{$pago -> monto}}</td>
                            <td class="border px-4 py-2">{{$pago -> user -> name}}</td>
                            {{--<td class="border px-4 py-2">
                                <a href="{{route('cliente.show', $cliente->id)}}" class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
                                        <i class="fas fa-eye"></i></a>
                            </td>--}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection