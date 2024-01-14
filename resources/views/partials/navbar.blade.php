<section id="navbar" class="">
  <div class="flex justify-between bg-[#052E16] h-16 rounded-full shadow-2xl">
    <div id="navbar-kiri" class="flex w-full md:px-4 px-2">
      <div class="py-4 px-4">
        <button id="mobile-menu" class="block md:hidden">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth="1.5" stroke="white" class="h-8 w-8">
            <path strokeLinecap="round" strokeLinejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button>
      </div>
      <div class="flex md:py-2 py-3">
        <a href="/">
          <img src="https://raw.githubusercontent.com/rstubryan/assets/master/gambar/lawaklu/logo.png" class="md:h-12 h-10 md:flex hidden" />
        </a>
        <a href="/">
          <h2 class="text-white md:text-3xl text-2xl md:py-1 py-0.5 font-semibold md:block hidden">
            Lawaklu
          </h2>
        </a>
        <div class="px-8">
          <div class="h-11 bg-[#B7EB38] rounded-2xl md:block hidden">
            <p class="text-[#B7EB38]">|</p>
          </div>
        </div>
        <a href="/categories">
          <h2 class="text-white hover:underline md:text-base text-base md:py-3 py-0.5 md:block hidden">
            Categories
          </h2>
        </a>
        <div id="sidebar" class="fixed inset-y-0 left-0 z-50 w-64 bg-[#EDF3F1] p-4 hidden shadow-2xl">
          <div class="flex justify-between">
            <a href="/">
              <img src="https://raw.githubusercontent.com/rstubryan/assets/master/gambar/lawaklu/logo.png" class="h-54" />
            </a>
          </div>
          <div class="flex justify-end">
            <div class="flex px-4">
              <button id="close-sidebar" class="text-black focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-7 w-7">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
              </button>
            </div>
          </div>
          <div class="flex items-center px-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
            </svg>
            <a href="/categories">
              <h2 class="text-[#052E16] font-semibold text-base py-5 px-3 block">
                Categories
              </h2>
            </a>
          </div>
          @auth
          <div class="flex items-center px-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
            </svg>
            <a href="/account">
              <h2 class="text-[#052E16] font-semibold text-base py-5 px-3 block">
                {{ auth()->user()->username }}
              </h2>
            </a>
          </div>
          @endauth
          <div class="px-4 py-2">
            <div class="border-t border-[#052E16] opacity-10"></div>
          </div>

          @auth
          <div class="flex items-center px-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
            </svg>
            <form method="POST" action="/logout" role="none">
              @csrf
              <button type="submit" class="text-[#052E16] font-semibold text-base py-5 px-3 block" role="menuitem" tabindex="-1" id="menu-item-2">
                Logout
              </button>
            </form>
          </div>
          @else
          <div class="flex items-center px-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
            </svg>
            <a href="/login">
              <h2 class="text-[#052E16] font-semibold text-base py-5 px-3 block">
                Login
              </h2>
            </a>
          </div>
          @endauth

        </div>
      </div>
    </div>

    <script>
      document.addEventListener("DOMContentLoaded", function() {
        const mobileMenuButton = document.getElementById("mobile-menu");
        const sidebar = document.getElementById("sidebar");
        const closeSidebarButton = document.getElementById("close-sidebar");

        mobileMenuButton.addEventListener("click", () => {
          sidebar.classList.toggle("hidden");
        });

        closeSidebarButton.addEventListener("click", () => {
          sidebar.classList.add("hidden");
        });

        const sidebarLinks = sidebar.querySelectorAll("a");
        sidebarLinks.forEach(link => {
          link.addEventListener("click", () => {
            sidebar.classList.add("hidden");
          });
        });
      }); 
    </script>

    <div class="flex w-full md:py-3 py-4 justify-end md:px-10 px-6 md:gap-5 gap-0">
      <button id="button-addmemes" class="bg-[#B7EB38] hover:bg-[#7BAF00] rounded-full md:px-4 px-2 transition-colors duration-300 ease-in-out">
        <a href="/dashboard">
          <div class="flex text-[#052E16] hover:text-white">
            <div class="md:py-0.5 px-1">
              <p class="text-2xl">+</p>
            </div>
            <div>
              <p class="text-lg md:py-1.5 py-1 font-base px-1 md:block hidden">
                Add memes
              </p>
            </div>
          </div>
        </a>
      </button>

      <div id="navbar-profile" class="md:block hidden">
        <div class="relative inline-block text-left">
          <div>
            <button type="button" class="inline-flex w-full justify-center gap-x-1.5 rounded-md px-3 py-2 text-lg font-semibold text-[#B7EB38] shadow-sm" id="menu-button" aria-expanded="false" aria-haspopup="true">
              @auth
              <p class="md:block hidden"> {{ auth()->user()->username }} </p>
              @else
              <p class="md:block hidden"> Profile </p>
              @endauth
              <svg class="md:block hidden -mr-1 md:h-7 md:w-7 h-5 w-5 text-white" viewBox="0 0 20 20" fill="white" aria-hidden="true">
                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
              </svg>
            </button>
          </div>
          <div class="absolute right-0 z-10 md:mt-2 mt-3 w-32 origin-top-right rounded-md bg-[#B7EB38] shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1" id="dropdown-menu">
            <div class="py-1" role="none">

              @auth
              <a href="/account" class="text-[#052E16] hover:animate-pulse block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Account</a>
              <form method="POST" action="/logout" role="none">
                @csrf
                <button type="submit" class="text-[#052E16] hover:animate-pulse block w-full px-4 py-2 text-left text-sm" role="menuitem" tabindex="-1" id="menu-item-2">
                  Logout
                </button>
              </form>
              @else
              <a href="/login" class="text-[#052E16] hover:animate-pulse block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">Login</a>
              @endauth

            </div>
          </div>
        </div>
      </div>
      <script>
        const menuButton = document.getElementById("menu-button");
        const dropdownMenu = document.getElementById("dropdown-menu");

        menuButton.addEventListener("click", () => {
          const expanded =
            menuButton.getAttribute("aria-expanded") === "true";
          menuButton.setAttribute("aria-expanded", String(!expanded));
          dropdownMenu.classList.toggle("hidden", !expanded);
        });

        document.addEventListener("click", (event) => {
          const isInsideDropdown =
            menuButton.contains(event.target) ||
            dropdownMenu.contains(event.target);
          if (!isInsideDropdown) {
            menuButton.setAttribute("aria-expanded", "false");
            dropdownMenu.classList.add("hidden");
          }
        });
      </script>
    </div>
  </div>
</section>