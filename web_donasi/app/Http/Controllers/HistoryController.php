<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\Transaction;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class HistoryController extends Controller
{
    public function duitmasuk() {
    

        $query = Donation::query()->with(['toUser', 'transaction'])->where('to_user_id', Auth::id());
        
        if(request()->get('search')){
            $query->where('name','like', '%' . request()->get('search') . '%');
        }
        
        $histories = $query->get();
        $total = $histories->sum('nominal');
        return view('duitmasuk', compact('histories', 'total'));
    }
    
    public function duitkeluar(){ 
        $query = Donation::query()->with(['user', 'transaction'])->where('user_id', Auth::id());
        
        if(request()->get('search')){
            $query->where('name','like', '%' . request()->get('search') . '%');
        }         
        
        $histories = $query->get();
        $total = $histories->sum('nominal');
        
        return view('duitkeluar', compact('histories', 'total'));
        
    }
    
    public function destroy(Request $request) {
			$record = Donation::findOrFail($request->get('id'));
			
			if($record) {
				$record->delete();

				return redirect('/home');
			}
    }
}
