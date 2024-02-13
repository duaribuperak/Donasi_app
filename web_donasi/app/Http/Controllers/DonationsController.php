<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\URL;

class DonationsController extends Controller
{
    public function kirimin(string $username) {
        
        $user = User::query()->where('username', $username)->first();
        return view('kirimin', ["user" => $user]);
        
    }

    public function update(Request $request) {
        $transaction = Transaction::query()->where('ref_id', $request->get('order_id'))->firstOrFail();

        $transaction->status = $request->get('transaction_status');
        $transaction->save();

        return response()->json([
            "status" => "ok"
        ]);
    }

    public function create(Request $request) {
        $donation = Donation::query()->create([
            "user_id" => $request->get('user_id'),
            "to_user_id" => $request->get('to_user_id'),
            "name" => $request->get('name'),
            "email" => $request->get('email'),
            "nominal" => $request->get('data')['gross_amount'],
            "message" => $request->get('message')
        ]);

        $transaction = Transaction::query()->create([
        "donation_id" => $donation->id,
        "ref_id" =>  $request->get('data')['order_id'],
        "amount" => $donation->nominal,
        "status" => $request->get('data')['transaction_status'],
        ]);
    }

    public function createSnapToken(Request $request){
        
        $url = env("MIDTRANS_API_URL") . "/snap/v1/transactions";
        $data = [
            "transaction_details"=> [
                "order_id" => "transaction". now()->timestamp, 
                "gross_amount"=> $request->get('nominal')
            ],
            "customer_details"=> [
                "first_name"=> $request->get('name'),
                "email"=> $request->get('email'),
            ],
            "expiry"=> [
                "start_time"=> now()->format('Y-m-d H:i:s O'),
                "duration"=> 30,
                "unit"=> "minutes"
            ],
            "callbacks"=> [ 
                "finish" => URL::to( "/home/" . $request->get("username"))
            ]
        ];

        $headers = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'Authorization' => 'Basic ' . base64_encode(env('MIDTRANS_SERVER_KEY') . ':')
        ];

        $token = Http::withHeaders($headers)->post($url, $data)->json();

        return response()->json($token);
    }
}
