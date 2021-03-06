<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserForm extends Model
{
    use HasFactory;
    protected $table = 'user';
    protected $fillable = [
        'name_user','email','nickname','phone','age'
    ];
    protected $primaryKey = "id_user";
}
