<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Document</title>
</head>
<body>
  
  <div class="p-6 sm:p-12  w-screen min-h-screen bg-white dark:text-gray-900">
    <div class="flex justify-between mb-20 ">
      <a href="/home" class="">
        <div class="btn rounded-md text-slate-100 bg-slate-500 hover:bg-slate-800 border-none items-center">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
          </svg><p>Kembali</p>
        </div>
      </a>
      <a href="/Logout" class="">
        <div class="btn rounded-md text-slate-100 bg-slate-500 hover:bg-slate-800 border-none items-center">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
          </svg>
          <p>Logout</p>
        </div>
      </a>
    </div>

    <div class="flex flex-col space-y-4 md:space-y-0 md:space-x-6 md:flex-row ">
      <img src="https://source.unsplash.com/75x75/?portrait" alt="" class="self-center flex-shrink-0 w-24 h-24 border rounded-full md:justify-self-start dark:bg-gray-500 ">
      <div class="flex flex-col">
        <h1 class=" text-2xl font-semibold text-center md:text-left">{{ $user->username }}</h1>
        <h4 class=" dark:text-gray-400 mb-5">{{ $user->email }}</h4>
        <p class="dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt modi animi facilis soluta accusantium at! Sunt porro iste quod error. Illum sit perspiciatis voluptatibus veritatis libero sapiente dolores! Nesciunt, doloribus. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem repellendus accusantium consequatur veniam iure nobis alias cupiditate doloremque assumenda. Quasi amet commodi tenetur cupiditate? Unde reiciendis eligendi qui corrupti dolorem?</p>
      </div>
    </div>

    <div class="flex justify-center pt-4 space-x-4 align-center">
      <a action="/login" method="post" href="" class="border border-slate-200 rounded-md mt-20">
        @csrf
        <div type="submit" class="btn rounded-md hover:text-white bg-white hover:bg-slate-800 border-none items-center">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
          </svg>
          <p>Edit Profile</p>
        </div>
</a>
    </div>
  </div>

</body>
</html>