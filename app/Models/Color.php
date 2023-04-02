<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Color extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = ['title'];

    //    --- PRODUCT-DA |
    //    1.ta --- PRODUCT-DA | KO'P --- COLOR BOR
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
