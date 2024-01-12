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
          <img src="https://raw.githubusercontent.com/rstubryan/assets/master/gambar/lawaklu/logo.png" class="md:h-12 h-10 flex" />
        </a>
        <a href="/">
          <h2 class="text-white md:text-3xl text-2xl md:py-1 py-0.5 font-semibold md:block hidden">
            Lawaklu
          </h2>
        </a>
      </div>
    </div>

    <div class="flex w-full md:py-3 py-4 justify-end md:px-10 px-5 md:gap-5 gap-0">
      <button id="button-addmemes" class="bg-[#B7EB38] hover:bg-[#7BAF00] rounded-full md:px-4 px-2 transition-colors duration-300 ease-in-out">
        <a href="/manage-meme">
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

      <div id="navbar-profile">
        <div class="relative inline-block text-left">
          <div>
            <button type="button" class="inline-flex w-full justify-center gap-x-1.5 rounded-md px-3 py-2 text-lg font-semibold text-[#B7EB38] shadow-sm" id="menu-button" aria-expanded="false" aria-haspopup="true">
              <p class="md:block hidden">Profile</p>
              <svg class="-mr-1 md:h-7 md:w-7 h-5 w-5 text-white" viewBox="0 0 20 20" fill="white" aria-hidden="true">
                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
              </svg>
            </button>
          </div>

          <div class="absolute right-0 z-10 md:mt-2 mt-3 w-32 origin-top-right rounded-md bg-[#B7EB38] shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1" id="dropdown-menu">
            <div class="py-1" role="none">
              <a href="/account" class="text-[#052E16] hover:animate-pulse block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Account</a>
              <form method="POST" action="#" role="none">
                <button type="submit" class="text-[#052E16] hover:animate-pulse block w-full px-4 py-2 text-left text-sm" role="menuitem" tabindex="-1" id="menu-item-3">
                  Sign out
                </button>
              </form>
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