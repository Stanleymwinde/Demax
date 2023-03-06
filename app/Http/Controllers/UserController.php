<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }
    public function properties()
    {
        $products = collect(config('products'));
        $currentPage = request()->input('page', 1);
        $perPage = 3; // Change this to the desired number of items per page

        // Get the total number of products
        $totalProducts = $products->count();

        // Calculate the number of pages
        $totalPages = ceil($totalProducts / $perPage);

        // Modify the products collection to get only the required items for the current page
        $products = $products->skip(($currentPage - 1) * $perPage)->take($perPage);

        // Create a new LengthAwarePaginator instance
        $paginator = new LengthAwarePaginator(
            $products,
            $totalProducts,
            $perPage,
            $currentPage,
            ['path' => request()->url(), 'query' => request()->query()]
        );

        return view('user.properties', compact('paginator'));
    }


    public function services()
    {
        return view('user.services');
    }

    public function about()
    {
        return view('user.about');
    }

    public function contact()
    {
        return view('user.contact');
    }

    public function show($id)
    {
        $properties = config('properties');
        $property = collect($properties)->firstWhere('id', $id);
        return view('user.propertysingle', compact('property'));
    }
    public function get($id)
    {
        $products = config('products');
        $product = collect($products)->firstWhere('id', $id);
        return view('user.productsingle', compact('product'));
    }
}
