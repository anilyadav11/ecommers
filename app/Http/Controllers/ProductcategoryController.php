<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product_categorie;
use App\Models\categorie;
use App\Models\product;

class ProductcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productc = Product_categorie::with('product', 'category')->get();
        return view('admin.productcategory.index', compact('productc'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $products = product::all();
        $categories = categorie::all();
        return view('admin.productcategory.create', compact(['products', 'categories']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Validate incoming request data.
        $validatedData = $request->validate([
            'name'          => 'required|string|max:255',
            'product_id'    => 'required|exists:products,id',
            'categorie_id'  => 'required|exists:categories,id',
        ]);

        // Create the product category.
        // If you prefer mass assignment, ensure the model's $fillable property includes these fields.
        $productCategory = Product_categorie::create([
            'name'          => $validatedData['name'],
            'product_id'    => $validatedData['product_id'],
            'category_id'  => $validatedData['categorie_id'],
        ]);

        // Redirect to a list or any appropriate page with a success message.
        return redirect()->route('admin.productcategory.index')
            ->with('success', 'Product category created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $productc = Product_categorie::find($id);
        $products = product::all();
        $categories = categorie::all();
        return view('admin.productcategory.edit', compact(['productc', 'products', 'categories']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'          => 'required|string|max:255',
            'product_id'    => 'required|exists:products,id',
            'categorie_id'  => 'required|exists:categories,id',
        ]);
        $productc = Product_categorie::find($id);
        $productc->update($request->all());
        return redirect()->route('admin.productcategory.index')->with('success', 'Product category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $productc = Product_categorie::find($id);
        $productc->delete();
        return redirect()->route('admin.productcategory.index')->with('success', 'Product category deleted successfully.');
    }
}
