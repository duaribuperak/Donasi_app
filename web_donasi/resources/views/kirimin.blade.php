<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Document</title>
</head>
<body>
  <!-- component -->
<!-- Code on GiHub: https://github.com/vitalikda/form-floating-labels-tailwindcss -->
<style>
  .-z-1 {
    z-index: -1;
  }

  .origin-0 {
    transform-origin: 0%;
  }

  input:focus ~ label,
  input:not(:placeholder-shown) ~ label,
  textarea:focus ~ label,
  textarea:not(:placeholder-shown) ~ label,
  select:focus ~ label,
  select:not([value='']):valid ~ label {
    /* @apply transform; scale-75; -translate-y-6; */
    --tw-translate-x: 0;
    --tw-translate-y: 0;
    --tw-rotate: 0;
    --tw-skew-x: 0;
    --tw-skew-y: 0;
    transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate))
      skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    --tw-scale-x: 0.75;
    --tw-scale-y: 0.75;
    --tw-translate-y: -1.5rem;
  }

  input:focus ~ label,
  select:focus ~ label {
    /* @apply text-black; left-0; */
    --tw-text-opacity: 1;
    color: rgba(0, 0, 0, var(--tw-text-opacity));
    left: 0px;
  }
</style>

<div class="min-h-screen bg-gray-100 p-0 sm:p-12">
  <a href="/profile" class="fixed ">
    <div class="btn rounded-md text-slate-100 bg-slate-500 hover:bg-slate-800 border-none items-center">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
      </svg><p>Kembali</p>
    </div>
  </a>
  <div class="mx-auto max-w-md px-6 py-12 bg-white border-0 shadow-lg sm:rounded-3xl">
    <h1 class="text-2xl font-bold  text-slate-800">Kirim-Kirim Wirrr</h1>
    <p class="mb-8">saling berbagi itu indah</p>
    <form id="form" novalidate action="">
      <div class="relative z-0 w-full mb-5">
        <input
          type="text"
          name="nama"
          placeholder=" "
          required
          class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
        />
        <label for="nama" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Nama User</label>
        <!-- <span class="text-sm text-red-600 hidden" id="error">Nama user yang dikirim wajib di isi</span> -->
      </div>

      <div class="relative z-0 w-full mb-5">
        <input
          type="email"
          name="email"
          placeholder=" "
          class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
        />
        <label for="email" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Alamat Email</label>
        <!-- <span class="text-sm text-red-600 hidden" id="error">Email yang dikirim wajib di isi wajib di isi</span> -->
      </div>

      <!-- <div class="relative z-0 w-full mb-5">
        <input
          type="password"
          name="password"
          placeholder=" "
          class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
        />
        <label for="password" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Password</label>
        <span class="text-sm text-red-600 hidden" id="error">Password wajib di isi</span>
      </div> -->

      <!-- <fieldset class="relative z-0 w-full p-px mb-5">
        <legend class="absolute text-gray-500 transform scale-75 -top-3 origin-0">Choose an option</legend>
        <div class="block pt-3 pb-2 space-x-4">
          <label>
            <input
              type="radio"
              name="radio"
              value="1"
              class="mr-2 text-black border-2 border-gray-300 focus:border-gray-300 focus:ring-black"
            />
            Option 1
          </label>
          <label>
            <input
              type="radio"
              name="radio"
              value="2"
              class="mr-2 text-black border-2 border-gray-300 focus:border-gray-300 focus:ring-black fill-transparent"
            />
            Option 2
          </label>
        </div>
        <span class="text-sm text-red-600 hidden" id="error">Option has to be selected</span>
      </fieldset> -->

      <div class="relative z-0 w-full mb-5">
        <select
          name="select"
          value=""
          onclick="this.setAttribute('value', this.value);"
          class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-black border-gray-200"
        >
          <option value="" selected disabled hidden></option>
          <option value="1">Dana</option>
          <option value="2">Gopay</option>
          <option value="3">Qris</option>
          <option value="4">Link Aja</option>
          <option value="5">Ovo</option>
        </select>
        <label for="select" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Pilih Metode Pembayaran</label>
        <!-- <span class="text-sm text-red-600 hidden" id="error">Option has to be selected</span> -->
      </div>

      <div class="flex flex-row space-x-4">
        <div class="relative z-0 w-full mb-5">
          <input
            type="text"
            name="tanggal"
            placeholder=" "
            onclick="this.setAttribute('type', 'date');"
            class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
          />
          <label for="tanggal" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Tanggal</label>
          <!-- <span class="text-sm text-red-600 hidden" id="error">Tanggal wajib di isi</span> -->
        </div>
        <!-- <div class="relative z-0 w-full">
          <input
            type="text"
            name="time"
            placeholder=" "
            onclick="this.setAttribute('type', 'time');"
            class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
          />
          <label for="time" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Time</label>
          <span class="text-sm text-red-600 hidden" id="error">Time is required</span>
        </div> -->
      </div>

      <div class="relative z-0 w-full mb-5">
        <input
          type="number"
          name="nominal"
          placeholder=" "
          class="pt-3 pb-2 pl-7 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
        />
        <div class="absolute top-0 left-0 mt-3 ml-0 text-gray-400">Rp.</div>
        <label for="nominal" class="absolute duration-300 top-3 left-8 -z-1 origin-0 text-gray-500">Nominal</label>
        <!-- <span class="text-sm text-red-600 hidden" id="error">Nominal wajib di isi</span> -->
      </div>

      <div class="relative z-0 w-full mb-5">
        <!-- <input
          type="text"
          name="pesan"
          placeholder=" "
          class="pt-3 pb-2 pr-12 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
        />
        <div class="absolute top-0 right-0 mt-3 mr-4 text-gray-400"></div>
        <label for="pesan" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">pesan</label>
        <span class="text-sm text-red-600 hidden" id="error">Pesan Wajib Di isi</span> -->
        
        <textarea name="pesan" id="" cols="51" rows="7" class=" bg-slate-100 rounded-md font-normal pl-2" placeholder="pesan"></textarea>
        <span class=" text-sm">*harap di isi ya, tapi optional kok</span>
      </div>

      <button
        id="submit"
        type="submit"
        class="w-full px-6 py-3 mt-3 text-lg font-medium text-white transition-all duration-150 ease-linear rounded-md shadow outline-none bg-slate-500 hover:bg-slate-700 hover:shadow-lg focus:outline-none"
        >
        Kirim Wirrr
      </button>
    </form>
  </div>
</div>

<script>
  'use strict'

  document.getElementById('submit').addEventListener('click', kirimWir)
  // const errMessages = document.querySelectorAll('#error')

  function kirimWir() {
    // Show error message
    errMessages.forEach((el) => {
      el.classList.toggle('hidden')
    })

    // Highlight input and label with red
    const allBorders = document.querySelectorAll('.border-gray-200')
    const allTexts = document.querySelectorAll('.text-gray-800')
    allBorders.forEach((el) => {
      el.classList.toggle('border-red-600')
    })
    allTexts.forEach((el) => {
      el.classList.toggle('text-red-600')
    })
  }
</script>

</body>
</html>