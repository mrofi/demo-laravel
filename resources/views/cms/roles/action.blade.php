<a href="{{ route('cms.roles.show', ['role' => $model]) }}" class="text-green-700">Show</a>
<a href="{{ route('cms.roles.edit', ['role' => $model]) }}">Edit</a>

{!! Form::open(['url' => route('cms.roles.destroy', ['role' => $model]), 'method' => 'DELETE']) !!}
    <button type="submit" class="text-red-400">Delete</button>
{!! Form::close() !!}
