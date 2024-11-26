<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OptymizmComment extends Model
{
    use HasFactory;

    protected $table = 'optymizmcomments';
    protected $fillable = ['name', 'email', 'website', 'content'];
}
