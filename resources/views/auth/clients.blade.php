<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    {{-- Flash mensager --}}
    @if (session('msg'))
        <div class="bg-green-200  mb-3 hidden w-full items-center rounded-lg px-6 py-5 text-base text-warning-800 data-[te-alert-show]:inline-flex"
        role="alert"
        data-te-alert-init
        data-te-alert-show>
            <p class="mr-1 msg">{{ session('msg') }}</p>
        <button type="button"
            class="ml-auto box-content rounded-none border-none p-1 text-warning-900 opacity-50 hover:text-warning-900 hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
            data-te-alert-dismiss
            aria-label="Close">
             <span class="w-[1em] focus:opacity-100 disabled:pointer-events-none disabled:select-none disabled:opacity-25 [&.disabled]:pointer-events-none [&.disabled]:select-none [&.disabled]:opacity-25">
                <svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="currentColor"
                    class="h-6 w-6">
                    <path
                        fill-rule="evenodd"
                        d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z"
                        clip-rule="evenodd" />
                </svg>
            </span>
        </button>
    </div>
    @endif
    {{-- content --}}
    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white text-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                {{-- search icon --}}
                <div class="flex m-auto max-w-4xl">
                    <div class="py-4 flex justify-center w-full flex-wrap items-stretch">
                    <input
                        type="search"
                        class="relative m-0 block min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600 dark:text-neutral-900 dark:placeholder:text-neutral-200 dark:focus:border-primary"
                        placeholder="Buscar"
                        aria-label="Search"
                        aria-describedby="button-addon2" />
                    <span
                        class="input-group-text flex items-center whitespace-nowrap rounded px-3 py-1.5 text-center text-base font-normal text-neutral-700 dark:text-neutral-200"
                        id="basic-addon2">
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20"
                        fill="currentColor"
                        class="h-5 w-5">
                        <path
                            fill-rule="evenodd"
                            d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                            clip-rule="evenodd" />
                        </svg>
                    </span>
                    </div>
                </div>
                {{-- teble for clients --}}
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                                <table class="w-full text-sm">
                                    <thead class="border-b font-medium dark:border-neutral-500">
                                        <tr>
                                            <th scope="col" class="px-6 py-4">Matricula</th>
                                            <th scope="col" class="px-6 py-4">Nome</th>
                                            <th scope="col" class="px-6 py-4">Idade</th>
                                            <th scope="col" class="px-6 py-4">Peso</th>
                                        </tr>
                                    </thead>
                                    @foreach ($clients as $client)
                                    <tbody>
                                        <tr class="border-b transition duration-300 ease-in-out dark:border-neutral-500  text-center">
                                            <td class="px-6 py-4">{{ $client->id }}</td>
                                            <td class="px-6 py-4">{{ $client->name }}</td>
                                            <td class="px-6 py-4">{{ $client->years }}</td>
                                            <td class="px-6 py-4">{{ $client->weight }}</td>
                                            <td><a href="/clients/{{ $client->id }}" class="px-6 py-4 bg-yellow-900 hover:bg-yellow-500">EDT</a></td>
                                            <td>    
                                                <form action="/clients/{{ $client->id }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="px-6 py-4 bg-red-900 hover:bg-red-500">DELETE</button>
                                                </form>
                                            </td>
                                            
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
