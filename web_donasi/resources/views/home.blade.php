<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Home</title>
</head>
<body>

<div class="bg-white w-screen min-h-screen">
  <div class="flex gap-5 justify-center pt-32">

    <div class="grid gap-5 items-center">
      <!-- button history dukungan -->
      <div class=" card w-96 shadow-xl bg-white rounded-md">
        <div class="card-body text-slate-600">
          <h2 class="card-title">Histroy Duit Masuk</h2>
          <p>Data dukungan yang masuk dari user lain yang mengirim donasi</p>

          <a href="/duitmasuk">
            <div class="card-actions justify-end">
              <button class="btn text-white">Lanjut Wirrr
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3">
                </svg>
              </button>
            </div>
          </a>
        </div>
      </div>
      
      <!-- button history dukungan -->
      <div class="card w-96 shadow-xl bg-white rounded-md">
        <div class="card-body text-slate-600">
          <h2 class="card-title">Cairin Wirr!!</h2>
          <p>Donasi yang masuk dapat di cairkan melalui bank atau E-Wallet kesayangan anda</p>
          <a href="/cairin" class="">
            <div class="card-actions justify-end">
              <button class="btn text-white">Lanjut Wirrr
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                </svg>
              </button>
            </div>
          </a>
        </div>
      </div>
    </div>

    <div class="grid gap-5">
      <!-- button history dukungan -->
      <div class="card w-96 shadow-xl bg-white rounded-md">
        <div class="card-body text-slate-600">
          <h2 class="card-title">History Duit Keluar</h2>
          <p>Data dari transaksi yang anda berika kepada user lain</p>
          <a href="/duitkeluar" class="">
            <div class="card-actions justify-end">
              <button class="btn text-white">Lanjut Wirrr
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                </svg>
              </button>
            </div>
          </a>
        </div>
      </div>
  
      <!-- button history dukungan -->
      <div class="card w-96 shadow-xl bg-white rounded-md">
        <div class="card-body text-slate-600">
          <h2 class="card-title ">Tentang Kami</h2>
          <p>Berisi informasi tentang kami para developer Nyawer Wirr!!</p>
          <a href="/tentangkami" class="">
            <div class="card-actions justify-end">
              <button class="btn text-white">Lanjut Wirrr
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                </svg>
              </button>
            </div>
          </a>
        </div>
      </div>

    </div>
  </div>
</div>

</body>
</html>