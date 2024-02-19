<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'member_name',
        'member_image',
        'member_role',
        'member_facebook',
        'member_twitter',
        'member_linkedin',
        'member_gmail',
    ];
}
