<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">





            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nombre
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Apellido
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Correo
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Telefono
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($datos as $dato )

                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th class="px-6 py-4 font-medium whitespace-nowrap text-white">
                                {{$dato->nombre}}
                            </th>
                            <td class="px-6 py-4 text-white">
                                {{$dato->apellido}}
                            </td>
                            <td class="px-6 py-4 text-white">
                                {{$dato->email}}
                            </td>
                            <td class="px-6 py-4 text-white">
                                {{$dato->telefono}}
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>




        </div>
    </div>
</x-app-layout>