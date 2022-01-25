<a href="{{ route('cms.articles.edit', ['article' => $model]) }}">Edit</a>

<form action="{{ route('cms.articles.destroy', ['article' => $model]) }}" method="POST">
    @method('DELETE')
    @csrf
    <button type="submit" class="text-red-400">Delete</button>
</form>
