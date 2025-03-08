<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\product;

class HomeController extends Controller
{
    public function index()
    {
        // Popular Products (based on views count)
        // $popularProducts = Product::orderBy('views', 'desc')->take(10)->get();
        $Products = Product::all()->take(10);
        $Prod = Product::all()->take(10);
        // Top Selling Products (based on total sales)
        $topSellingProducts = Product::select('products.id', 'products.name', 'products.price', 'products.image') // Include all necessary columns
            ->join('order_items', 'products.id', '=', 'order_items.product_id')
            ->selectRaw('COUNT(order_items.product_id) as total_sales')
            ->groupBy('products.id', 'products.name', 'products.price', 'products.image') // Group by all selected columns
            ->orderByDesc('total_sales')
            ->take(10)
            ->get();
        $topSellingProduct = Product::select('products.id', 'products.name', 'products.price', 'products.image') // Include all necessary columns
            ->join('order_items', 'products.id', '=', 'order_items.product_id')
            ->selectRaw('COUNT(order_items.product_id) as total_sales')
            ->groupBy('products.id', 'products.name', 'products.price', 'products.image') // Group by all selected columns
            ->orderByDesc('total_sales')
            ->take(3)
            ->get();

        // New Products (latest products added)
        $newProducts = product::orderBy('created_at', 'desc')->take(3)->get();
        $newProduct = product::orderBy('created_at', 'desc')->take(10)->get();
        // Trending Products (based on sales in the last 7 days)
        $trendingProducts = Product::select('products.id', 'products.name', 'products.price', 'products.image') // Include necessary columns
            ->join('order_items', 'products.id', '=', 'order_items.product_id')
            ->where('order_items.created_at', '>=', now()->subDays(7))
            ->selectRaw('COUNT(order_items.product_id) as recent_sales')
            ->groupBy('products.id', 'products.name', 'products.price', 'products.image') // Group by all selected columns
            ->orderByDesc('recent_sales')
            ->take(3)
            ->get();
        $trendingProduct = Product::select('products.id', 'products.name', 'products.price', 'products.image') // Include necessary columns
            ->join('order_items', 'products.id', '=', 'order_items.product_id')
            ->where('order_items.created_at', '>=', now()->subDays(7))
            ->selectRaw('COUNT(order_items.product_id) as recent_sales')
            ->groupBy('products.id', 'products.name', 'products.price', 'products.image') // Group by all selected columns
            ->orderByDesc('recent_sales')
            ->take(10)
            ->get();
        $feterd = Product::select('products.id', 'products.name', 'products.price', 'products.image') // Include necessary columns
            ->join('order_items', 'products.id', '=', 'order_items.product_id')
            ->where('order_items.created_at', '>=', now()->subDays(7))
            ->selectRaw('COUNT(order_items.product_id) as recent_sales')
            ->groupBy('products.id', 'products.name', 'products.price', 'products.image') // Group by all selected columns
            ->orderByDesc('recent_sales')
            ->take(10)
            ->get();
        return view('index', compact('topSellingProducts', 'newProducts', 'trendingProducts', 'Products', 'newProduct', 'trendingProduct', 'topSellingProduct', 'feterd', 'Prod'));
    }
    public function productDetail($id)
    {
        $product = product::find($id);
        return view('product-detail', compact('product'));
    }
}
