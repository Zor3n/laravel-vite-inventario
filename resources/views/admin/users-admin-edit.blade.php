<x-app-layout>
    <x-slot name="title">
        {{ __('Editar Usuario') }}
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Usuario') }}
        </h2>
    </x-slot>

    <div class="py-6 px-9 lg:px-9">
        <h3 id="user_id" class="mb-4 text-xl font-medium text-gray-900 dark:text-white hidden"></h3>
        <form class="space-y-6 flex flex-col" method="POST" action="{{ route('users.update', $user)}}">
            <div>
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900 font-bold">
                    {{ __('Nombre:') }}</label>
                <input type="text" name="name_edit" id="name_edit"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-500 dark:placeholder-gray-500 dark:text-gray-900"
                    value="{{ $user->name }}"
                    placeholder="Diego..." required>
            </div>

            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900 font-bold">
                    {{ __('Correo:') }}</label>
                <input type="email" name="email_edit" id="email_edit"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-500 dark:placeholder-gray-500 dark:text-gray-900"
                    value="{{ $user->email }}"
                    placeholder="name@company.com" required>
            </div>

            <div>
                <h3 class="mb-4 font-semibold text-gray-900 dark:text-gray-900 font-bold">{{ __('Rol') }}</h3>
                <ul
                    class="w-48 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
                        <div class="flex items-center pl-3">
                            <input checked id="list-radio-license" type="radio" value="" name="list-radio"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="list-radio-license"
                                class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">{{ __('Usuario') }}</label>
                        </div>
                    </li>
                    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
                        <div class="flex items-center pl-3">
                            <input id="list-radio-id" type="radio" value="" name="list-radio"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="list-radio-id"
                                class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">{{ __('Admin') }}</label>
                        </div>
                    </li>
                </ul>
            </div>
            @method('PATCH')
            @csrf
            <button type="submit"
                class="block self-end focus:outline-none text-black bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900">
                {{ __('Confirmar') }}</button>
        </form>
    </div>
</x-app-layout>
