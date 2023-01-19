<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class Coffee extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'coffee',
        'description',
        'country',
    ];

    public function mayowner(){
        return $this->belongsTo(User::class,'user_id');
    }
}
