<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Role Detail :name', ['name' => $role->name]) }}
        </h2>

        @if (session()->has('success'))
            <div class="p-6 bg-blue-400 border-r-2">{{ session('success') }}</div>
        @endif
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {!! Form::model($role, ['route' => ['cms.roles.assign_permission', compact('role')]]) !!}
            @php
                $actions = [
                    'index', // datatable
                    'create',
                    'update',
                    'delete',
                    'view',
                    'force_delete',
                    'restore',
                ];
            @endphp
            <table>
                <thead>
                    <tr class="p-2">
                        <th class="p-2 border">Permision</th>
                        @foreach ($actions as $action)
                            <th class="p-2 border">{{ $action }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @forelse ($permissions as $groupName => $group)
                        <tr class="p-2">
                            <td class="p-2 border">
                                {{ $groupName }}
                            </td>
                            @foreach ($actions as $action)
                                <td class="p-2 border">
                                    @php
                                        $permissionName = $groupName . '.' . $action;
                                    @endphp
                                    {{ Form::checkbox('permissions['. $permissionName .']', 1, $role->hasPermissionTo($permissionName)) }}
                                </td>
                            @endforeach
                        </tr>
                    @empty
                        <tr class="p-2">No data</tr>
                    @endforelse
                </tbody>
            </table>

            <x-button>Save</x-button>
            {!! Form::close() !!}
        </div>
    </div>
</x-app-layout>
