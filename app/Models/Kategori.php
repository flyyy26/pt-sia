<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Kategori extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    protected static function boot(){
        parent::boot();

        static::saving(function ($category){
            if (empty($category->slug) || $category->isDirty('name')) {
                $category->slug = Str::slug($category->name);
            }
        });
    }

    public function artikels(): HasMany{
        return $this->hasMany(Artikel::class);
    }
}
