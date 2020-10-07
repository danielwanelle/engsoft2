<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Fornecedores') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{route('providers.create')}}" class="add">
                <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                Cadastrar
                </button>
            </a>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="table-auto">
                    <thead>
                        <tr>
                        <th class="px-4 py-2">Nome</th>
                        <th class="px-4 py-2">Quantidade</th>
                        <th class="px-4 py-2">Valor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- @foreach($data as $d) -->
                        <tr>
                        <td class="border px-4 py-2">Intro to CSS</td>
                        <td class="border px-4 py-2">Adam</td>
                        <td class="border px-4 py-2">858</td>
                        </tr>
                        <!-- @endforeach -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
