<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VerificationCode extends Model
{
    protected $fillable = ['user_id', 'otp', 'expire_at'];

    // Rest of your model code...
}
