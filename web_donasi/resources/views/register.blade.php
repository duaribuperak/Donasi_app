<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Register</title>
</head>
<body>

<!--
  Heads up! 👋

  Plugins:
    - @tailwindcss/forms
-->

<div class="mx-auto min-w-screen min-h-screen px-4 py-16 sm:px-6 lg:px-8 bg-white">
  <div class="mx-auto max-w-lg mt-9">
    <h1 class="text-center text-2xl font-bold text-indigo-600 sm:text-3xl">Selamat Datang, Wir!</h1>

    <p class="mx-auto mt-4 max-w-md text-center text-gray-500">
      isi kan data diri untuk membuat akun baru
    </p>

    <form action="/register" method="post" class="mb-0 mt-6 space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-8">
      <p class="text-center text-lg font-medium text-gray-700">Buat akun baru</p>
      @csrf
      
      <div>
        <label for="username" class="sr-only">Username</label>
        <div class="relative ">
          <input
            type="text"
            id="username"
            name="username"
            class="w-full rounded-lg focus:outline-none focus:ring focus:ring-violet-300 p-4 pe-12 text-sm shadow-sm bg-gray-100 "
            placeholder="username"
            />
        </div>
      </div>
      <div>
        <label for="nama" class="sr-only">Nama</label>
        <div class="relative ">
          <input
            type="text"
            id="nama"
            name="nama"
            class="w-full rounded-lg focus:outline-none focus:ring focus:ring-violet-300 p-4 pe-12 text-sm shadow-sm bg-gray-100"
            placeholder="nama"
            />
        </div>
      </div>

      <div>
        <label for="email" class="sr-only">Email</label>
        <div class="relative ">
          <input
            type="email"
            id="email"
            name="email"
            class="w-full rounded-lg focus:outline-none focus:ring focus:ring-violet-300 p-4 pe-12 text-sm shadow-sm bg-gray-100"
            placeholder="email"
          />

          <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-4 w-4 text-gray-400"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"
              />
            </svg>
          </span>
        </div>
      </div>

      <div>
        <label for="password" class="sr-only">Password</label>

        <div class="relative">
          <input
            type="password"
            id="password"
            name="password"
            class="w-full rounded-lg focus:outline-none focus:ring focus:ring-violet-300 p-4 pe-12 text-sm shadow-sm bg-gray-100 "
            placeholder="password"
          />

          <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-4 w-4 text-gray-400"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
              />
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
              />
            </svg>
          </span>
        </div>
      </div>
      <button
        type="submit"
        class="block w-full rounded-lg bg-indigo-600 text-center  py-3 text-sm font-medium text-white">
        Sign up
      </button>
      <!-- <a href="" class="">
      </a> -->

      <p class="text-center text-sm text-gray-500">
        sudah punya akun?
        <a class="underline text-blue-500 hover:text-blue-700" href="/login">Sign in</a>
      </p>
    </form>
  </div>
</div>    

</body>
</html>