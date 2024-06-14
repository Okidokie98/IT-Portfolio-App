<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pop extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'series', 'number', 'category', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
