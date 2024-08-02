<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'title',
        'date',
        'users_id',
        'category_id',  // Ubah dari 'category' menjadi 'category_id'
        'content',
    ];

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn ($image) => url('/uploads/news/' . $image),
        );
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
