<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(5);
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.product.index', compact('products', 'categories', 'tags'));
    }

    public function create()
    {
        $categories = Category::pluck('title', 'id')->all();
        $tags = Tag::pluck('title', 'id')->all();
        $colors = Color::pluck('title', 'id')->all();

        return view('admin.product.create', compact('categories', 'tags', 'colors'));
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $data['preview_image'] = Product::uploadFile($request);

        $product = Product::create($data);
        $product->tags()->sync($request->tags);
        $product->colors()->sync($request->colors);

        return redirect()->route('admin.product.index')
            ->with('success', 'Product qushildi...😎');
    }

    public function edit(Product $product)
    {
        $categories = Category::pluck('title', 'id')->all();
        $tags = Tag::pluck('title', 'id')->all();
        $colors = Color::pluck('title', 'id')->all();

        return view('admin.product.edit', compact('categories', 'tags', 'colors', 'product'));
    }

    public function update(StoreRequest $request, Product $product)
    {
        $data = $request->validated();
        $data['preview_image'] = Product::uploadFile($request, $product->preview_image);

        $product->update($data);
        $product->tags()->sync($request->tags);
        $product->colors()->sync($request->colors);

        return redirect()->route('admin.product.index')
            ->with('success', 'O\'zgarish saqlandi...😎');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.product.index');
    }
}
