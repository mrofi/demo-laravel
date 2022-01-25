<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Roles') }}
        </h2>
        <a href="{{ route('cms.roles.create') }}">
            <x-button class="bg-blue-500 text-white" type="button">
                Add Role
            </x-button>
        </a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{$dataTable->table()}}
        </div>
    </div>

    <x-slot name="scripts">
        {{$dataTable->scripts()}}
    </x-slot>
</x-app-layout>
