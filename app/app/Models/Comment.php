<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    // Dodajemy 'name', 'email', 'website', i 'content' do fillable
    protected $fillable = ['name', 'email', 'website', 'content'];
}
