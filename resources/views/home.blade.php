@extends('layouts.main')
@section('content')
<div>
  <section id="content">
    @if ($posts->count())
    <div class="py-12">
      <div class="w-full">
        <p class="text-[#052E16] font-semibold text-2xl text-center">
          {{ $title  }}
        </p>
        <div class="text-center py-2">
          <span class="text-[#052E16]">Latest of all post</span>
          <a href="#">
            <p class="text-[#052E16] rounded-md px-1">{{ $posts[0]->created_at->diffForHumans() }}</p>
          </a>
        </div>
      </div>
    </div>

    @foreach($posts as $post)
    <div class="md:flex shadow-2xl w-full h-full">
      <div class="w-full">
        <img src="https://placehold.co/600x600" alt="" />
      </div>
      <div class="bg-white rounded-br-full px-10 py-6 md:py-9 w-full">
        <div class="md:px-6 py-3">
          <div class="">
            <div class="py-2">
              <a class="flex font-semibold py-2 text-xl" href="/posts/{{ $post->slug }}">
                {{ $post->title }}
              </a>
              <button class="bg-[#B7EB38] px-2 py-1 rounded-md">
                <a class="flex text-sm underline text-[#052E16]" href="/categories/{{ $post->category->slug }}">
                  #{{ $post->category->name }}
                </a>
              </button>
            </div>
            <div class="flex justify-between rounded-full">
              <p class="flex font-semibold py-2 pr-2">{{ $post->likes }} likes</p>
              <div class="flex">
                <img src="https://placehold.co/40x40" class="rounded-full flex" />
                <a href="/authors/{{ $post->author->username }}">
                  <p class="flex py-2 px-2">{{ $post->author->name }}</p>
                </a>
              </div>
            </div>
          </div>
          <p class="text-justify">
            {{ $post->body }}
          </p>
        </div>
        <div class="py-2">
          <button class="md:px-5 pr-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="#B7EB38" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
            </svg>
          </button>
          <button class="md:px-5 px-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M7.498 15.25H4.372c-1.026 0-1.945-.694-2.054-1.715a12.137 12.137 0 0 1-.068-1.285c0-2.848.992-5.464 2.649-7.521C5.287 4.247 5.886 4 6.504 4h4.016a4.5 4.5 0 0 1 1.423.23l3.114 1.04a4.5 4.5 0 0 0 1.423.23h1.294M7.498 15.25c.618 0 .991.724.725 1.282A7.471 7.471 0 0 0 7.5 19.75 2.25 2.25 0 0 0 9.75 22a.75.75 0 0 0 .75-.75v-.633c0-.573.11-1.14.322-1.672.304-.76.93-1.33 1.653-1.715a9.04 9.04 0 0 0 2.86-2.4c.498-.634 1.226-1.08 2.032-1.08h.384m-10.253 1.5H9.7m8.075-9.75c.01.05.027.1.05.148.593 1.2.925 2.55.925 3.977 0 1.487-.36 2.89-.999 4.125m.023-8.25c-.076-.365.183-.75.575-.75h.908c.889 0 1.713.518 1.972 1.368.339 1.11.521 2.287.521 3.507 0 1.553-.295 3.036-.831 4.398-.306.774-1.086 1.227-1.918 1.227h-1.053c-.472 0-.745-.556-.5-.96a8.95 8.95 0 0 0 .303-.54" />
            </svg>
          </button>
          <button class="md:px-5 px-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
            </svg>
          </button>
          <button class="md:px-5 px-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
            </svg>
          </button>
        </div>
      </div>
    </div>
    <div class="py-6"></div>
    <!-- BATAS ITERASI -->
    @endforeach
  </section>
</div>
@else
<p class="text-center text-2xl text-[#052E16]">Tidak ada post ditemukan</p>
@endif
<div class="py-6">
  {{ $posts->links() }}
</div>
@endsection