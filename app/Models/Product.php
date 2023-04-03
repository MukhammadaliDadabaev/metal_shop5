<?php

namespace App\Models;

use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'title',
        'content',
        'description',
        'price',
        'category_id',
        'preview_image'
    ];

    //    KO'P --- PRODUCT-DA | KO'P --- TAG BOR
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }

    //    KO'P --- PRODUCT-DA | 1.ta --- CATEGORY BOR
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    //    1.ta --- PRODUCT-DA | KO'P --- COLOR BOR
    public function colors(): BelongsToMany
    {
        return $this->belongsToMany(Color::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public static function uploadFile(StoreRequest $request, $image = null)
    {
        if ($request->hasFile('preview_image')) {
            if ($image) {
                Storage::delete($image);
            }
            $imageName = $request->file('preview_image')->getClientOriginalName();
            return $request->file('preview_image')->storeAs('images', $imageName);
        }
        return null;
    }

//    public static function updateFile(UpdateRequest $request)
//    {
//        if ($request->hasFile('preview_image')) {
//            Storage::delete($request);
//            $imageName = $request->file('preview_image')->getClientOriginalName();
//            return $request->file('preview_image')->storeAs('images', $imageName);
//        }
//        return null;
//    }


}
