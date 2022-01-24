@extends('app.layout')

@section('content')
<div class="max-w-screen-lg mx-auto my-10">
    <div class="mb-4 md:mb-0 w-full mx-auto relative">
        <div class="px-4 lg:px-0">
            <h2 class="text-4xl font-semibold text-gray-800 leading-tight">
                {{ $article->title }}
            </h2>
            <a
                href="#"
                class="py-2 text-green-700 inline-flex items-center justify-center mb-2"
            >
                {{ $article->category->name }}
            </a>
            </div>

            <img src="https://images.unsplash.com/photo-1587614387466-0a72ca909e16?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80" class="w-full object-cover lg:rounded" style="height: 28em;"/>
        </div>

        <div class="flex flex-col lg:flex-row lg:space-x-12">

            <div class="px-4 lg:px-0 mt-12 text-gray-700 text-lg leading-relaxed w-full lg:w-3/4">
                {!! $article->content !!}
            </div>

            <div class="w-full lg:w-1/4 m-auto mt-12 max-w-screen-sm">
            <div class="p-4 border-t border-b md:border md:rounded">
                <div class="flex py-2">
                <img src="https://randomuser.me/api/portraits/men/97.jpg"
                    class="h-10 w-10 rounded-full mr-2 object-cover" />
                <div>
                    <p class="font-semibold text-gray-700 text-sm"> {{ $article->author->name }} </p>
                    <p class="font-semibold text-gray-600 text-xs"> Editor </p>
                </div>
                </div>
                <p class="text-gray-700 py-3">
                    {{ $article->author->about }}
                </p>
                <button class="px-2 py-1 text-gray-100 bg-green-700 flex w-full items-center justify-center rounded">
                Follow
                <i class='bx bx-user-plus ml-2' ></i>
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
