<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAccounts extends Model
{
    use HasFactory;
    protected $fillable=['user_id','provider_user_id','provider'];


    public function User(){
        return $this->belongsTo(User::class);
    }

}