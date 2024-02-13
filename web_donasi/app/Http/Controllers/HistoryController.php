<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    public function duitmasuk(Request $request) {
        
        $query = Donation::query()->with(['toUser', 'transaction'])->where('to_user_id', Auth::id());

        

        $histories = $query->get();

        $total = $histories->sum('nominal');

        return view('duitmasuk', compact('histories', 'total'));
    }
    
    public function duitkeluar(){ 
        $query = Donation::query()->with(['user', 'transaction'])->where('user_id', Auth::id());

        $histories = $query->get();

        $total = $histories->sum('nominal');

        return view('duitkeluar', compact('histories', 'total'));
    }
}
