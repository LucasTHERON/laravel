<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dojo extends Model
{
    protected $fillable = ['name', 'desription', 'location'];
    /** @use HasFactory<\Database\Factories\DojoFactory> */
    use HasFactory;

    public function ninjas(){
        $this->hasMany(Ninja::class);
        // $dojo->ninjas renvoie des objets ninjas
    }
}
