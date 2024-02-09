<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    // menampilkan view
    public function index() {
        return view('register');
    }

    // menangkap data yang dikirim dari input register
    public function store(Request $request) {
			// unique() berguna ketika digunakan saat login
			$validatedData = $request->validate([
					'nama' => 'required|min:5|max:255',
					'username' => 'required|min:3|max:255|unique:users',
					'email' => 'required|email:dns|unique:users',
					'password' => 'required|min:8|max:255'
			]);

			$validatedData['password'] = Hash::make($validatedData['password']);
			// $validatedData['password'] = bcrypt($validatedData['password']);

			// semmua data baik nama, username, email dan password ketika masuk ke sign up / register sepenuhnya harus berbeda
			// jika sama maka laravel akan me load atau merefresh di halaman yang sama, dan data yang sama dimasukkan akan hilang karena ke refresh
			
			User::create($validatedData);
			
			//flashing data (semacanm alert)
			// $request->session()->flash('success', 'Registrasi Berhasi, Silahkan Login Terlebih Dahulu'); 

			// untuk menghubungkan atau mengconnect dengan page login
			return redirect('/login')->with('success', 'Registrasi Berhasi, Silahkan Login Terlebih Dahulu');

		}
}
