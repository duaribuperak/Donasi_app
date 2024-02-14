<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>History Pemasukan</title>
</head>
<body>

<div class=" w-screen min-h-screen  bg-white">

<!-- button kembali -->
<a href="/home" class="">
  <div class="btn rounded-md ml-7 mt-7 text-slate-100 bg-slate-500 hover:bg-slate-800 border-none items-center">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
      <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
    </svg><p>Kembali</p>
  </div>
</a>


<!-- card -->
<div class="flex justify-center py-28  ">
  <a href="#" class="block p-12 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-600  dark:hover:bg-gray-800 cursor-pointer-none">
    <div class="flex items-center">
      <h1 class="mb-2 text-4xl font-semibold tracking-wider text-gray-900 dark:text-white">Rp.</h1>
      <h1 class="mb-2 text-6xl font-semibold tracking-wider text-gray-900 dark:text-white">{{ $total }}</h1>
    </div>
    <p class="font-normal text-gray-100 ">total dukungan yang masuk</p>
  </a>
  
  <!-- <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
    <p class="font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
  </a> -->
</div>
  

<!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com --> 
  <div class="mb-3 ml-4">
    <form action="/duitmasuk" method="get" class="relative mb-4 flex w-72 flex-wrap items-stretch">
      <input
        type="search"
        name="search"
        class="relative flex-auto rounded-l border border-solid border-neutral-100 bg-transparent bg-clip-border px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary"
        placeholder="Search"
        aria-label="Search"
        aria-describedby="button-addon1" 
        value="{{ request('search') }}"
        />
        
        <!--Search button-->
        <button
        class="relative z-[2] flex items-center rounded-r bg-primary px-6 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-primary-700 hover:shadow-lg focus:bg-primary-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary-800 active:shadow-lg"
        type="button"
        id="button-addon1"
        data-te-ripple-init
        data-te-ripple-color="light">
        <svg
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 20 20"
        fill="currentColor"
        class="h-5 w-5">
        <path
        fill-rule="evenodd"
        d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
        clip-rule="evenodd" />
        </svg>
      </button>
    </form>
  </div>

<!-- Tables -->
<div class="scroll-smooth focus:scroll-auto">
  <table class="w-full min-w-max table-auto text-left">
    <!-- tabel judul -->
    <thead class="">
      <tr class=" bg-slate-100">
        <!-- Dari -->
        <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50 border-r">
          <p class="text-black font-medium antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 leading-none opacity-70">Dari 
          </p>
        </th>

        <!-- Pesan -->
        <th class=" border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50 border-r">
          <p class=" text-black font-medium text-center antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 leading-none opacity-70">Pesan 
          </p>
        </th>


        <!-- Nominal -->
        <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50 border-r">
          <p class="text-black font-medium antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 leading-none opacity-70">Nominal 
            
          </p>
        </th>

        <!-- status -->
        <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50 border-r">
          <p class="text-black font-medium antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 leading-none opacity-70">Status 
          </p>
        </th> 
            

        <!-- Tanggal -->
        <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50 border-r">
          <p class="text-black font-medium antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 leading-none opacity-70">Tanggal 
            <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4">
              <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
            </svg> -->
          </p>
        </th>

        <!-- Aksi-->
        <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50 border-r">
          <p class="text-black font-medium antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 leading-none opacity-70">Aksi</p>
        </th>
      </tr>
    </thead>

    
    <!-- tabel isi -->
    <tbody>
    @foreach($histories as $history)
      <tr class="">
        <!-- Dari -->
        <td class="p-4 border-b border-blue-gray-50 border-r">
          <div class="flex items-center gap-3">
            <img src="https://demos.creative-tim.com/test/corporate-ui-dashboard/assets/img/team-3.jpg" alt="John Michael" class="inline-block relative object-cover object-center rounded-full w-9 h-9 ">
            <div class="flex flex-col">
              <p class="text-black block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">{{ $history->name }}</p>
              <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal text-slate-500">{{ $history->email }}</p>
            </div>
          </div>
        </td>


        <!-- Pesan -->
        <td class="p-4 border-b border-blue-gray-50 border-r">
          <div class="flex items-center w-96 gap-3">
            <div class="flex flex-col">
              <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal text-black">{{ $history->message }}</p>
            </div>
          </div>
        </td>


        <!-- Nominal -->
        <td class="p-4 border-b border-blue-gray-50 border-r">
          <div class="flex flex-col">
            <p class="text-black block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">Rp. {{ $history->nominal }}</p>
          </div>
        </td>

        <!-- status -->
        <td class="p-4 border-b border-blue-gray-50 border-r">
          <div class="w-max">
            <div class="relative grid items-center font-sans font-bold uppercase whitespace-nowrap select-none bg-green-500/20 text-green-600 py-1 px-2 text-xs rounded-md" style="opacity: 1;">
              <span class="">{{ $history->transaction->status }}</span>
            </div>
          </div>
        </td>

        <!-- Tanggal -->
        <td class="p-4 border-b border-blue-gray-50 border-r">
          <p class="text-black block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">{{ $history->created_at->format('d/m/Y') }}</p>
        </td>

        <!-- action -->
        <td class="p-4 border-b border-blue-gray-50">
          <!-- button Read -->
          <button class="relative align-middle select-none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-blue-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30" type="button">
            <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 hover:fill-yellow-500">
                <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 0 1 0-1.113ZM17.25 12a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0Z" clip-rule="evenodd" />
              </svg>
            </span>
          </button>

          <!-- button edit -->
          <button class="relative align-middle select-none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-blue-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30" type="button">
            <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-5 w-5 hover:fill-blue-500">
                <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z"></path>
              </svg>
            </span>
          </button>

          <!-- button delete -->
          <button class="relative align-middle select-none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-blue-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30" type="button">
            <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor " class="hover:fill-red-700 w-6 h-6">
                <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z" clip-rule="evenodd" />
              </svg>
            </span>
          </button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>



<!-- status pending akan diganti jadi gagal buat di admin dan di user -->
<!-- <td class="p-4">
  <div class="w-max">
    <div class="relative grid items-center font-sans font-bold uppercase whitespace-nowrap select-none bg-red-500/20 text-red-700 py-1 px-2 text-xs rounded-md" style="opacity: 1;">
      <span class="">Pending</span>
    </div>
  </div>
</td> -->


<!-- status schedule akan diganti jadi proses buat di admin dan di user -->
<!-- <td class="p-4 border-b border-blue-gray-50">
</div>
          <div class="w-max">
            <div
              class="relative grid items-center font-sans font-bold uppercase whitespace-nowrap select-none bg-yellow-500/20 text-yellow-600 py-1 px-2 text-xs rounded-md"
              style="opacity: 1"
            >
              <span class="">Scheduled </span>
            </div>
          </div>
        </td> -->

</body>
</html>