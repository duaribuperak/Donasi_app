<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_id",
        "to_user_id",
        "name",
        "email",
        "nominal", 
        "message"
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    // kita yang mengirim ke user lain
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    // kita menerima dari user lain
    public function toUser(){
        return $this->belongsTo(User::class, 'to_user_id');
    }

    // models ini terkait dengan transaksi
    public function transaction(){
			return $this->hasOne(Transaction::class, 'donation_id');
	}
}
