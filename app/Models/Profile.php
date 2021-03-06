<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public $timestamps = false;

    use HasFactory;

    protected $fillable = [
        'Fullname', 
        'Role',
        'Gender',
        'Instagram',
        'LinkedIn',
        'Address',
        'Birthday'
    ];
}
