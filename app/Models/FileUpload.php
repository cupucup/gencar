<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileUpload extends Model
{
    use HasFactory;
    protected $fillable = [
        'no_filez',
        'date',
        'date_receipt',
        'origin',
        'regarding',
        'path',
        'name',
        'extension',
        'status',
        'disposition_id',
        'instructions',
        'objective',
        'active'
    ];
    public function disposition()
    {
        return $this->belongsTo(Disposition::class);
    }
}
