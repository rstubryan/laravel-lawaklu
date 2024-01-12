@extends('layouts.main')
@section('content')
<div>
    <section id="button-back">
        <div class="py-6 w-full">
            <div class="flex hover:underline">
                <button class="flex">
                    <a href="/" class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 px-1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
                        </svg>
                        <p class="text-[#052E16] px-1 text-base">Back to main menu</p>
                    </a>
                </button>
            </div>
        </div>
    </section>
    <section id="content">
        <div class="py-6">
            <div class="w-full">
                <p class="text-[#052E16] font-semibold text-2xl text-center">
                    <a href="">
                        Meme categories
                    </a>
                </p>
            </div>

            <div class="flex justify-center py-6">
                <form action="/categories" method="GET">
                    <input type="text" name="search" class="border-2 border-[#B7EB38] rounded-md px-2 py-2" placeholder="Cari kategori tanpa '#'" value="{{ request()->query('search') }}" />
                    <button type="submit" class="bg-[#B7EB38] rounded-md px-2 py-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                        </svg>
                    </button>
                </form>
            </div>
        </div>
        @foreach($categories as $category)
        <div class="flex w-full h-full">
            <div class="py-2 md:px-2">
                <button class="bg-[#B7EB38] px-2 py-1 rounded-md md:mr-0 mr-4">
                    <ul>
                        <li>
                            <a class="flex text-sm underline text-[#052E16] px-2" href="/categories/{{ $category->slug }}">
                                #{{ $category->name }}
                            </a>
                        </li>
                    </ul>
                </button>
            </div>
            <!-- BATAS ITERASI -->
            @endforeach
        </div>
    </section>
</div>
@endsection