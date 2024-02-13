<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Home</title>
</head>
<body>

<!-- component -->
<nav class="bg-gray-200 shadow shadow-gray-300 w-100 px-8 md:px-auto w-full">
	<div class="md:h-16 h-28 mx-auto md:px-4 container flex items-center justify-between flex-wrap md:flex-nowrap">
		<!-- Logo -->
		<div class="text-indigo-500 md:order-1">
			<!-- Heroicon - Chip Outline -->
			<!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
				stroke="currentColor">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
					d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
			</svg> -->
		</div>

		<div class="text-gray-500 order-3 w-full md:w-auto md:order-2">
			<!-- <ul class="flex font-semibold justify-between">
				<li class="md:px-4 md:py-2 text-indigo-500"><a href="#">Dashboard</a></li>
				<li class="md:px-4 md:py-2 hover:text-indigo-400"><a href="#">Search</a></li>
				<li class="md:px-4 md:py-2 hover:text-indigo-400"><a href="#">Explore</a></li>
				<li class="md:px-4 md:py-2 hover:text-indigo-400"><a href="#">About</a></li>
				<li class="md:px-4 md:py-2 hover:text-indigo-400"><a href="#">Contact</a></li>
			</ul> -->

      <h1 class="font-medium">{{ $user->username }}</h1>

		</div>

		<div class="order-2 md:order-3">
    <a href="/profile">
      <img src="https://demos.creative-tim.com/test/corporate-ui-dashboard/assets/img/team-3.jpg" alt="John Michael" class="inline-block relative object-cover object-center rounded-full w-9 h-9 ">  
    </a>
			<!-- <button class="px-4 py-2 bg-slate-500 hover:bg-slate-600 text-gray-50 rounded-xl flex items-center gap-2 font-medium">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M3 3a1 1 0 011 1v12a1 1 0 11-2 0V4a1 1 0 011-1zm7.707 3.293a1 1 0 010 1.414L9.414 9H17a1 1 0 110 2H9.414l1.293 1.293a1 1 0 01-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0z" clip-rule="evenodd" />
          </svg>
        <span class="font-inter">Logout</span>
      </button> -->
		</div>
	</div>
</nav>


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