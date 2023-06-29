<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Person extends Model
{

    protected $table = 'person';
    protected $primaryKey = 'id_person';

    protected $fillable = [
        'first_name',
        'last_name',
        'cpf',
        'gender',
        'phone',
        'id_user'
    ];

    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id_user', 'id_user');
    }
}
