<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory, Sluggable;

    protected $table = 'products';
    protected $guarded = false;

    //    KO'P --- PRODUCT-DA | KO'P --- TAG BOR
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    //    KO'P --- PRODUCT-DA | 1.ta --- CATEGORY BOR
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    //    1.ta --- PRODUCT-DA | KO'P --- COLOR BOR
    public function colors(): HasMany
    {
        return $this->hasMany(Color::class);
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
