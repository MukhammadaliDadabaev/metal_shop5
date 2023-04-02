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

        if ($request->hasFile('preview_image')) {
            $folder = date('Y-m-d');
            $imageName = $request->file('preview_image')->getClientOriginalName();
            $data['preview_image'] = $request->file('preview_image')
                ->storeAs('images/' . $folder, $imageName);
        }

//        if ($request->hasFile('preview_image')) {
//            $folder = date('Y-m-d');
//           $data['preview_image'] = $request->file('preview_image')
//                ->store('images/' . $folder);
//        }

        $product = Product::create($data);
        $product->tags()->sync($request->tags);
        $product->colors()->sync($request->colors);

        return redirect()->route('admin.product.index')
            ->with('success', 'Product qushildi...😎');
    }

    public function edit(Product $product)
    {
        return view('admin.product.edit', compact('product'));
    }

    public function update(UpdateRequest $request, Product $product)
    {
        $data = $request->validated();
        $product->update($data);

        return view('admin.product.show', compact('product'));
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.product.index');
    }
}
