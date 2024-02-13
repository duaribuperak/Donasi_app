<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script type="text/javascript"
            src="https://app.sandbox.midtrans.com/snap/snap.js"
            data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
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
  <a href="/home" class="fixed ">
    <div class="btn rounded-md text-slate-100 bg-slate-500 hover:bg-slate-800 border-none items-center">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
      </svg><p>Kembali</p>
    </div>
  </a>
  <div class="mx-auto max-w-md px-6 py-12 bg-white border-0 shadow-lg sm:rounded-3xl">
    <h1 class="text-2xl font-bold  text-slate-800">Kirim-Kirim Wirrr</h1>
    <p class="mb-8">saling berbagi itu indah kirim ke {{ $user->nama }}</p>
    <form id="form" method="post" action="/kirimin">
      <div class="relative z-0 w-full mb-5">
        <input
          type="text"
          name="name"
          placeholder=""
          value=""
          required
          class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
        />
        <label for="nama" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Nama User</label>
      </div>

      <div class="relative z-0 w-full mb-5">
        <input
          type="email"
          name="email"
          placeholder=" "
          value=""
          class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
        />
        <label for="email" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Alamat Email</label>
      </div>
      

      <div class="flex flex-row space-x-4">
        <div class="relative z-0 w-full mb-5">
          <input
            type="text"
            name="date"
            placeholder=" "
            onclick="this.setAttribute('type', 'date');"
            value="{{ now()->format('m/d/Y') }}"
            class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
          />
          <label for="tanggal" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Tanggal</label>
          <!-- <span class="text-sm text-red-600 hidden" id="error">Tanggal wajib di isi</span> -->
        </div>
      </div>

      <div class="relative z-0 w-full mb-5">
        <input
          type="number"
          name="nominal"
          placeholder=""
          class="pt-3 pb-2 pl-7 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
        />
        <div class="absolute top-0 left-0 mt-3 ml-0 text-gray-400">Rp.</div>
        <label for="nominal" class="absolute duration-300 top-3 left-8 -z-1 origin-0 text-gray-500">Nominal</label>
        <!-- <span class="text-sm text-red-600 hidden" id="error">Nominal wajib di isi</span> -->
      </div>

      <div class="relative z-0 w-full mb-5">
        <textarea name="message" id="" cols="51" rows="7" class=" bg-slate-100 rounded-md font-normal pl-2" placeholder="message"></textarea>
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

<script type="text/javascript">
  

  async function coba(payload, result) {
    const data = (await fetch("http://localhost:8000/api/create", {
      method: "POST",
      headers: {
        "Content-Type": "application/json"
      },
      body: JSON.stringify({
        "user_id": "{{ auth()->id() }}",
        "to_user_id": "{{ $user->id }}",
        "name": payload.get('name'),
        "email": payload.get('email'),
        "message": payload.get('message'),
        "data": result
      })
    }).json())
  }

let payButton = document.getElementById("form");
let token = undefined
payButton.addEventListener("submit", async function (e) {
    e.preventDefault()
    const payload = new FormData(payButton)
    const data = (await fetch("http://localhost:8000/api/get-snap-token", {
      method:"POST",
      headers:{
        "Content-Type": "application/json"
      },
      body: JSON.stringify({
        name: payload.get('name'),
        email: payload.get('email'),
        nominal: payload.get('nominal'),
        message: payload.get('message'),
        username: "{{ auth()->user()->username }}"
      })
    })).json()

    data.then((res) => {
      snap.pay(res.token, {
        onSuccess: async function(result){
          await coba(payload, result)
        },
        onPending: async function(result){
          console.log(result)
          await coba(payload, result)
        },
        onError: async function(result){
          await coba(payload, result)
        },
        onClose: function(){
          alert('Transaksi belum di buat')
        }
      });
    })
  });
</script>

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