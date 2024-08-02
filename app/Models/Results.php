<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Results extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'path', 'extension', 'type', 'users_id'];

    public function image_url()
    {
        return asset($this->path);
    }
}
