<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Role') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {!! Form::model($model, ['route' => 'cms.roles.store']) !!}

            {!! Form::text('name') !!}
            {!! Form::submit() !!}


            {!! Form::close() !!}
        </div>
    </div>
</x-app-layout>
