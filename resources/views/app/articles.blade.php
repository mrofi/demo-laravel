@extends('app.layout')

@section('content')
    <!--Parent div-->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
        @foreach ($articles as $article)
            <!--Card-->
            <a href="{{ route('articles.show', compact('article')) }}">
                <div class="md:p-8 p-2 bg-white">
                    <!--Banner image-->
                    <img
                    class="rounded-lg w-full"
                    src="https://images.unsplash.com/photo-1603349206295-dde20617cb6a?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80
                    "
                    />

                    <!--Tag-->
                    <p class="text-indigo-500 font-semibold text-base mt-2">{{ $article->category->name }}</p>
                    <!--Title-->
                    <h1
                    class="font-semibold text-gray-900 leading-none text-xl mt-1 capitalize truncate"
                    >
                    {{ $article->title }}
                    </h1>
                    <!--Description-->
                    <div class="max-w-full">
                    <p class="text-base font-medium tracking-wide text-gray-600 mt-1">
                        {{ $article->excerpt }}
                    </p>
                    </div>
                    <div class="flex items-center space-x-2 mt-20">
                    <!--Author's profile photo-->
                    <img
                        class="w-10 h-10 object-cover object-center rounded-full"
                        src="https://randomuser.me/api/portraits/men/54.jpg"
                        alt="random user"
                    />
                    <div>
                        <!--Author name-->
                        <p class="text-gray-900 font-semibold">{{ $article->author->name }}</p>
                        <p class="text-gray-500 font-semibold text-sm">
                        {{ $article->published_at->format('F d, Y') }} &middot; 6 min read
                        </p>
                    </div>
                    </div>
                </div>
            </a>
            <!--End of Card-->
        @endforeach
    </div>
    <!--End of parent div-->
@endsection
