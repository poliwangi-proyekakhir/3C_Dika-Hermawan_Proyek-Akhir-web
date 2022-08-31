<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{
    use HasFactory;

    protected $table = 'userdata';

    protected $fillable = [
        'nama',
        'email',
        'alamat',
        'kontak',
        'role',
        'image',
        'navbar_status',
        'status',
        'created_by',
    ];
}
