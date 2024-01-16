@extends('layouts.main')
@section('content')
<div>
    <section id="button-back">
        <div class="py-6 w-full">
            <div class="flex hover:underline">
                <button class="flex">
                    <a href="/dashboard/posts" class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 px-1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
                        </svg>
                        <p class="text-[#052E16] px-1 text-base">Back to posts</p>
                    </a>
                </button>
            </div>
        </div>
    </section>
    <section id="content">
        <div class="py-6">
            <div class="w-full">
                <p class="text-[#052E16] font-semibold text-2xl text-center">
                    Show post
                </p>
            </div>
        </div>
        <div class="flex py-4 gap-5">
            <div class="px-4 bg-[#B7EB38] rounded-full">
                <form action="/dashboard/posts/{{ $post->slug }}/edit">
                    <button class="flex items-center py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                        </svg>
                        <p class="px-2">Update post</p>
                    </button>
            </div>
            <div class="px-4 bg-[#B7EB38] rounded-full">
                <form action="/dashboard/posts/{{ $post->slug }}" method="post">
                    @method('delete')
                    @csrf
                    <button onclick="return confirm('Yakin masbro?')" class="flex items-center py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                        </svg>
                        <p class="px-2">Delete post</p>
                    </button>
            </div>
            </form>
        </div>
</div>
<div class="md:flex flex-col shadow-2xl w-full h-full">
    <div class="w-full">
        <img src="https://placehold.co/1200x600" alt="" />
    </div>
    <div class="bg-white rounded-br-full px-10 py-6 md:py-9 w-full">
        <div class="md:px-6 py-3">
            <div class="">
                <div class="py-2">
                    <a class="flex font-semibold py-2 text-xl" href="/post/{{ $post->slug }}">
                        {{ $post->title }}
                    </a>
                    <div class="py-2">
                        <button class="bg-[#B7EB38] px-2 py-1 rounded-md">
                            <a class="flex text-sm underline text-[#052E16]" href="/categories/{{ $post->category->slug }}">
                                #{{ $post->category->name }}
                            </a>
                        </button>
                    </div>
                </div>
                <div class="flex justify-between rounded-full py-2 items-center">
                    <p class="flex font-semibold pr-2">{{ $post->likes }} likes</p>
                    <div class="flex items-center">
                        <p class="text-justify">
                            {{ $post->created_at->diffForHumans() }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex items-center py-2">
                <img src="https://placehold.co/40x40" class="rounded-full flex" />
                <a href="/authors/{{ $post->author->username }}">
                    <p class="flex py-2 px-2">{{ $post->author->username }}</p>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="py-6"></div>
<!-- BATAS ITERASI -->
</section>
</div>
@endsection