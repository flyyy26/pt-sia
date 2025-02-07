<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $fillable = ['file_path'];

    // Method untuk mendapatkan URL media
    public function getUrlAttribute()
    {
        return asset('storage/' . $this->file_path);
    }
}
