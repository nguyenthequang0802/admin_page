<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    public function book(){
        return $this->hasMany(Book::class, 'type_id', 'id');
    }
}
