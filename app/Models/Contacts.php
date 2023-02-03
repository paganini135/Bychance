<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'pro_start',
        'pro_end',
        'contents',
        'project',
        'cname',
        'name',
        'phone',
        'email',
        'file'
    ];
}
