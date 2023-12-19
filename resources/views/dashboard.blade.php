<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Área do Personal') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="flex flex-col max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 mb-5 overflow-hidden shadow-sm sm:rounded-lg">
                <a href="/clients"class="bg-red-500 text-gray-900 dark:text-gray-100 text-center">
                    <p class="p-5 hover:bg-blue-700">Alunos</p>
                </a>
            </div>
            <div class="bg-white dark:bg-gray-800 mb-5 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="text-gray-900 dark:text-gray-100 text-center">
                    <a href="/clients/register-client/">
                        <p class="p-5 hover:bg-blue-700">Cadastrar Aluno</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
