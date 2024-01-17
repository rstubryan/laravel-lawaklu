@extends('layouts.main')
@section('content')
<section id="button-back">
    <div class="py-6 w-full">
        <div class="flex hover:underline">
            <button class="flex">
                <a href="/dashboard" class="flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 px-1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
                    </svg>
                    <p class="text-[#052E16] px-1 text-base">Back to dashboard</p>
                </a>
            </button>
        </div>
    </div>
</section>
<section id="manage-meme">
    <div class="py-0 w-full">
        <p class="text-[#052E16] font-semibold text-2xl text-center">
            Dashboard
        </p>
        @if(session()->has('success'))
        <div class="py-4">
            <div class="w-full">
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Success!</strong>
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            </div>
        </div>
        @endif
        <div class="py-6">
            <div class="bg-white rounded-3xl p-4 shadow-2xl">
                <table class="table-auto">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Kategori</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="text-justify leading-loose px-5">
                                {{ $post->title }}
                            </td>
                            <td class="text-center">{{ $post->category->name }}</td>
                            <td>
                                <div class="md:flex md:justify-between items-center">
                                    <div class="flex px-4">
                                        <a href="/dashboard/posts/{{ $post->slug }}">
                                            <button>
                                                <div class="">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                    </svg>
                                                </div>
                                            </button>
                                        </a>
                                    </div>
                                    <div class="flex px-4">
                                        <form action="/dashboard/posts/{{ $post->slug }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button onclick="return confirm('Yakin masbro?')">
                                                <div class="">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                    </svg>
                                                </div>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection