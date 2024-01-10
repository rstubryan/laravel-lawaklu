<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add memes</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="bg-[#EDF3F1]">
    <div class="container mx-auto">
      <div class="flex flex-col items-center justify-center h-screen">
        <div class="grid">
          <div class="w-full max-w-xs">
            <form
              class="bg-white shadow-2xl rounded px-8 pt-6 pb-8 mb-4"
              method="post"
            >
              <div class="py-4">
                <h2 class="text-center font-semibold text-2xl">Register</h2>
              </div>
              <div class="mb-4">
                <label
                  class="block text-gray-700 text-sm font-bold mb-2"
                  for="email"
                >
                  E-mail
                </label>
                <input
                  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                  id="email"
                  type="text"
                  placeholder="E-mail"
                />
              </div>
              <div class="mb-2">
                <label
                  class="block text-gray-700 text-sm font-bold mb-2"
                  for="name"
                >
                  Name
                </label>
                <input
                  class="shadow appearance-none rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                  id="name"
                  type="name"
                  placeholder="John Doe"
                />
              </div>
              <div class="mb-6">
                <label
                  class="block text-gray-700 text-sm font-bold mb-2"
                  for="password"
                >
                  Password
                </label>
                <input
                  class="shadow appearance-none rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                  id="password"
                  type="password"
                  placeholder="******************"
                />
              </div>
              <div class="flex">
                <button
                  class="bg-[#B7EB38] hover:bg-[#7BAF00] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                  type="submit"
                >
                  Sign Up
                </button>
                <a
                  class="inline-block align-baseline py-2.5 px-9 text-sm text-black hover:text-gray-400"
                  href="login.html"
                >
                  Sign In
                </a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <style>
      .container {
        width: 100%;
        max-width: 1200px;
      }
    </style>
  </body>
</html>
