<x-guest-layout>
    <form action="/clients" method="POST">
        @csrf
        {{-- name input --}}
        <div class="">
            <x-input-label for="name" :value="('Nome do aluno')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        {{-- years and weight input --}}
        <div class="flex flex-wrap justify-around items-center my-3">
            <div class="flex-col w-1/4">
                <x-input-label for="years" :value="('Idade do aluno')" />
                <x-text-input id="years" class="w-full"  type="number" name="years" required autofocus />
                <x-input-error :messages="$errors->get('years')" class="mt-2"/>
            </div>

            <div class="flex-col w-1/4">
                <x-input-label for="weight" :value="('Peso do aluno')" />
                <x-text-input id="weightNum" class="w-full" type="number" name="weight" required autofocus />
                <x-input-error :messages="$errors->get('weight')" class="mt-2" />
            </div>
            <div class="w-1/3">
                <x-input-label for="gender" :value="('Genero do aluno')" />
                <select class="w-full bg-gray-900 text-gray-300 border-gray-700 rounded-md " name="gender" id="gender">
                    <option value="0">Masculino</option>    
                    <option value="1">Feminino</option>    
                </select>
            </div>
        </div>
        
        <div class="flex justify-center">
            <x-primary-button class="ms-4 mt-1">
                <input type="submit" value="Registrar">
            </x-primary-button>
        </div>

    </form>
</x-guest-layout>