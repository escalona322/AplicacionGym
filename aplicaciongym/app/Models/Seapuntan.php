<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seapuntan extends Model
{
    use HasFactory;
    public function clase()
        {
        return $this->belongsTo(clase::class);
        }
        public function User()
        {
        return $this->belongsTo(User::class);
        }
        public $timestamps = false;
}
