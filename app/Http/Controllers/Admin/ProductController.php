<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $products = DB::table('products')->where('status', 1)->orderBy('name')->paginate(10);

        return view('admin.products.list', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : view
    {
        return view('admin.products.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'category_name' => 'required|string|in:MICRONUTRIENTS,BIO-PESTICIDES,PESTICIDES',
            'menu_position' => 'required|string|in:col1,col2,col3,col4',
            'image' => 'required|image|mimes:jpeg,png,jpg',
            'micronutrient' => 'nullable|string|max:255',
            'major_ingredients' => 'nullable|string',
            'role_and_function' => 'nullable|string',
            'use_recommendation' => 'nullable|string|max:255',
            'available_pack' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|boolean',
        ]);

        try {
            $product = new Product;
            $product->name = @$data['name'];
            $product->category_name = @$data['category_name'];
            $product->menu_position = @$data['menu_position'];
            $product->micronutrient = @$data['micronutrient'];
            $product->major_ingredients = @$data['major_ingredients'];
            $product->role_and_function = @$data['role_and_function'];
            $product->use_recommendation = @$data['use_recommendation'];
            $product->available_pack = @$data['available_pack'];
            $product->description = @$data['description'];
            $product->status = @$data['status'];

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time().rand(0000, 9999).'.'.$image->getClientOriginalExtension();
                $product->image = 'storage/'.$image->storeAs('product-images', $imageName, 'public');
            }

            $product->save();
            session()->flash('alert-success', 'New product created successfully!');

            return redirect()->intended(route('admin.products.index'));
        } catch (Exception $e) {
            session()->flash('alert-danger', $e->getMessage());
        }

        return redirect()->intended(route('admin.products.create'))->withInput();
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product) : View
    {
        return view('admin.products.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product) : RedirectResponse
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'category_name' => 'required|string|in:MICRONUTRIENTS,BIO-PESTICIDES,PESTICIDES',
            'menu_position' => 'required|string|in:col1,col2,col3,col4',
            'image' => 'nullable|image|mimes:jpeg,png,jpg',
            'micronutrient' => 'nullable|string|max:255',
            'major_ingredients' => 'nullable|string',
            'role_and_function' => 'nullable|string',
            'use_recommendation' => 'nullable|string|max:255',
            'available_pack' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|boolean',
        ]);

        try {
            $product->name = @$data['name'];
            $product->category_name = @$data['category_name'];
            $product->menu_position = @$data['menu_position'];
            $product->micronutrient = @$data['micronutrient'];
            $product->major_ingredients = @$data['major_ingredients'];
            $product->role_and_function = @$data['role_and_function'];
            $product->use_recommendation = @$data['use_recommendation'];
            $product->available_pack = @$data['available_pack'];
            $product->description = @$data['description'];
            $product->status = @$data['status'];

            if ($request->hasFile('image')) {
                $oldImage = $product->image;
                $image = $request->file('image');
                $imageName = time().rand(0000, 9999).'.'.$image->getClientOriginalExtension();
                $product->image = 'storage/'.$image->storeAs('product-images', $imageName, 'public');

                if (isset($oldImage) && File::exists($oldImage)) {
                    File::delete($oldImage);
                }
            }

            $product->update();
            session()->flash('alert-success', 'Product updated successfully!');

        } catch (Exception $e) {
            session()->flash('alert-danger', $e->getMessage());
        }
        return redirect()->intended(route('admin.products.edit', ['product' => $product->id]));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Product $product) : RedirectResponse
    {
        try {
            $product->delete();
            $oldImage = $product->image;
            if (isset($oldImage) && File::exists($oldImage)) {
                File::delete($oldImage);
            }

            session()->flash('alert-success','Product Deleted Successfully');
        } catch(Exception $e) {
            session()->flash('alert-danger', $e->getMessage());
        }

        return redirect()->route('admin.products.index');
    }
}
