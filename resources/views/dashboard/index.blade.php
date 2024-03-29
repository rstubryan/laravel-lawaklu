@extends('layouts.main')
@section('content')
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
<section id="manage-meme">
    <div class="py-4 w-full">
        <p class="text-[#052E16] font-semibold text-2xl text-center">
            Welcome to Dashboard, {{ auth()->user()->username }}
        </p>
        <div class="py-10 flex gap-5 justify-center">
            <div>
                <a href="/dashboard/posts/create">
                    <button class="flex-shrink-0 bg-[#B7EB38] hover:bg-[#7BAF00] border-[#B7EB38] hover:border-[#7BAF00] text-sm border-4 text-[#052E16] hover:text-white py-1 px-2 rounded-full transition-colors duration-300 ease-in-out" type="button">
                        <span class="text-base">+</span> Add memes
                    </button>
                </a>
            </div>
            <div>
                <a href="/dashboard/posts">
                    <button class="flex-shrink-0 bg-[#B7EB38] hover:bg-[#7BAF00] border-[#B7EB38] hover:border-[#7BAF00] text-sm border-4 text-[#052E16] hover:text-white py-1 px-2 rounded-full transition-colors duration-300 ease-in-out" type="button">
                        <span class="text-base">+</span> Manage memes
                    </button>
                </a>
            </div>
        </div>
    </div>
</section>

@can('admin')
<section id="manage-meme-admin">
    <div class="py-4 w-full">
        <p class="text-[#052E16] font-semibold text-2xl text-center">
            Admin panel
        </p>
        <div class="py-10 flex gap-5 justify-center">
            <div>
                <a href="/dashboard/categories">
                    <button class="flex-shrink-0 bg-[#B7EB38] hover:bg-[#7BAF00] border-[#B7EB38] hover:border-[#7BAF00] text-sm border-4 text-[#052E16] hover:text-white py-1 px-2 rounded-full transition-colors duration-300 ease-in-out" type="button">
                        <span class="text-base">+</span> Manage categories
                    </button>
                </a>
            </div>
            <div>
                <a href="/dashboard/manage-post">
                    <button class="flex-shrink-0 bg-[#B7EB38] hover:bg-[#7BAF00] border-[#B7EB38] hover:border-[#7BAF00] text-sm border-4 text-[#052E16] hover:text-white py-1 px-2 rounded-full transition-colors duration-300 ease-in-out" type="button">
                        <span class="text-base">+</span> Manage post
                    </button>
                </a>
            </div>
        </div>
    </div>
</section>
@endcan
@endsection