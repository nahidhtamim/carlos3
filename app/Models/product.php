<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'cat_id',
        'image',
        'title',
        'description',
        'slug',
        'featured',
        'status',
    ];

    public function cat_info()
    {
        return $this->belongsTo(product::class,'cat_id','id');
    }
}
