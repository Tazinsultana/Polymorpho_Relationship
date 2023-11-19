<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vidioes extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
        ];
        public function comments()
        {
            return $this->morphMany(Comments::class, 'commentable');
        }
}
