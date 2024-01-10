@extends('layouts.main')
@section('content')
        <section id="button-back">
          <div class="py-6 w-full">
            <div class="flex hover:underline">
              <button class="flex">
                <a href="/" class="flex">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-6 h-6 px-1"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3"
                    />
                  </svg>
                  <p class="text-[#052E16] px-1 text-base">Back to main menu</p>
                </a>
              </button>
            </div>
          </div>
        </section>
        <div class="pb-6">
          <div class="w-full">
            <p class="text-[#052E16] font-semibold text-2xl text-center">
              Profile
            </p>
          </div>
        </div>
        <section id="profile-photo" class="flex items-center justify-center">
          <div class="">
            <div class="w-full">
              <button>
                <label for="photo-upload" class="relative cursor-pointer">
                  <img
                    src="https://placehold.co/300x300"
                    class="rounded-full"
                  />
                  <input
                    id="photo-upload"
                    name="photo-upload"
                    type="file"
                    class="sr-only"
                  />
                </label>
              </button>
            </div>
          </div>
        </section>
        <section id="profile-info">
          <div class="py-2">
            <form class="w-full">
              <p class="text-justify">Username</p>
              <div class="flex items-center border-b border-gray-300 py-2">
                <input
                  class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                  type="text"
                  placeholder="Username account"
                  aria-label="Username"
                />
              </div>
            </form>
          </div>
          <div class="py-2">
            <form class="w-full">
              <label class="text-justify" for="email">E-mail</label>
              <div class="flex items-center border-b border-gray-300 py-2">
                <input
                  class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                  type="email"
                  id="email"
                  placeholder="E-mail account"
                  aria-label="Email"
                  disabled
                />
                <button
                  class="flex-shrink-0 bg-[#B7EB38] hover:bg-[#7BAF00] border-[#B7EB38] hover:border-[#7BAF00] text-sm border-4 text-[#052E16] hover:text-white py-1 px-2 rounded-full transition-colors duration-300 ease-in-out"
                  type="button"
                >
                  Edit
                </button>
              </div>
            </form>
          </div>
          <div class="py-2">
            <form class="w-full">
              <label class="text-justify" for="password">Password</label>
              <div class="flex items-center border-b border-gray-300 py-2">
                <input
                  class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                  type="password"
                  id="password"
                  placeholder="*********"
                  aria-label="Password"
                  disabled
                />
                <button
                  class="flex-shrink-0 bg-[#B7EB38] hover:bg-[#7BAF00] border-[#B7EB38] hover:border-[#7BAF00] text-sm border-4 text-[#052E16] hover:text-white py-1 px-2 rounded-full transition-colors duration-300 ease-in-out"
                  type="button"
                >
                  Edit
                </button>
              </div>
            </form>
          </div>
          <div class="flex justify-center py-4">
            <button
              class="flex-shrink-0 bg-[#B7EB38] hover:bg-[#7BAF00] border-[#B7EB38] hover:border-[#7BAF00] text-sm border-4 text-[#052E16] hover:text-white py-1 px-2 rounded-full transition-colors duration-300 ease-in-out"
              type="submit"
            >
              Save changes
            </button>
          </div>
        </section>
@endsection