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
<section id="add-meme">
    <div class="pb-6">
        <div class="w-full">
            <p class="text-[#052E16] font-semibold text-2xl text-center">
                Add memes
            </p>
        </div>
    </div>
    <form action="/dashboard/posts/{{ $post->slug }}" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="py-4">
            <div class="py-2">
                <label for="image" class="text-justify">Gambar</label>
                <input type="hidden" name="oldImage" value="{{ $post->image }}">
                @if($post->image)
                <div class="w-full flex justify-center items-center">
                    <img id="img-preview" class="w-max h-full object-cover" src="{{ asset('storage/' . $post->image) }}" alt="" />
                </div>
                @else
                <div class="w-full flex justify-center items-center">
                    <img id="img-preview" class="h-full w-max object-cover">
                </div>
                @endif
                <div class="flex items-center border-b border-gray-300 py-2">
                    <span class="sr-only">Choose File</span>
                    <input onchange="previewImage()" type="file" id="image" name="image" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-[#B7EB38] file:text-[#052E16] hover:file:bg-[#7BAF00]" />
                    @error('image')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="py-2">
                <label for="title" class="text-justify">Judul</label>
                <div class="flex items-center border-b border-gray-300 py-2">
                    <input class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" id="title" name="title" placeholder="Judul meme-mu" required autofocus value="{{ $post->title }}" />
                    @error('title')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="py-2">
                <label for="slug" class="text-justify">Slug</label>
                <div class="flex items-center border-b border-gray-300 py-2">
                    <input class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" id="slug" name="slug" placeholder="Slug otomatis" value="{{ $post->slug }}" />
                    @error('slug')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="py-2">
                <label for="category" class="text-justify">Kategori</label>
                <div class="flex items-center border-b border-gray-300 py-2">
                    <select class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" name="category_id" placeholder="Pilih kategori">
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>

        </div>
        <div class="flex justify-center">
            <button class="flex-shrink-0 bg-[#B7EB38] hover:bg-[#7BAF00] border-[#B7EB38] hover:border-[#7BAF00] text-sm border-4 text-[#052E16] hover:text-white py-1 px-2 rounded-full transition-colors duration-300 ease-in-out" type="submit">
                Update
            </button>
        </div>
    </form>
</section>

<script>
    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('#img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function() {
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });
</script>
@endsection