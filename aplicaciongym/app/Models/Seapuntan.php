<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seapuntan extends Model
{
    use HasFactory;
    public function clase()
        {
        return $this->belongsToMany(clase::class);
        }
        public function User()
        {
        return $this->belongsToMany(User::class);
        }
        public $timestamps = false;
}
