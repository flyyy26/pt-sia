<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class Artikel extends Model
{
    use HasFactory;

    protected $table = 'artikels';

    protected $fillable = ['title', 'slug', 'image', 'description', 'kategori_id', 'tags', 'status'];

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }
    
    public function kategori(): BelongsTo
    {
        return $this->belongsTo(kategori::class);
    }

    protected static function boot(){
        parent::boot();

        static::creating(function ($post) {
            $post->author_id = Auth::id();
        });

        static::saving(function ($post){
            if (empty($post->slug) || $post->isDirty('title')) {
                $post->slug = Str::slug($post->title);
            }
        });
    }
}
