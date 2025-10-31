<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ninja extends Model
{
    protected $fillable = ['name', 'skill', 'bio']; // Pemret de préciser ce qui est remplissable, le contraire est "guarded" (admin role par exemple)

    /** @use HasFactory<\Database\Factories\NinjaFactory> */
    use HasFactory;
}
