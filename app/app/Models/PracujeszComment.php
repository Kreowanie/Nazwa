<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PracujeszComment extends Model
{
    use HasFactory;

    protected $table = 'pracujeszcomments';
    protected $fillable = ['name', 'email', 'website', 'content'];
}
