<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhoneNumber extends Model
{
    use HasFactory;

    public $table = 'phone_number';
    public $primaryKey = 'id_phone';

    public $fillable = [
        "ddi",
        "ddd",
        "number"
    ];
}
