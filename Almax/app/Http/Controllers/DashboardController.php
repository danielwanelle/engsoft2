<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Outlet;
use App\Models\Product;
use App\Models\Provider;

class DashboardController extends Controller
{
    public function index()
    {
        $products = Product::latest()->take(5)->get();
        $invoices = Invoice::latest()->take(5)->get();
        $outlets = Outlet::latest()->take(5)->get();
        $providers = Provider::latest()->take(5)->get();

        return view('dashboard', [
            'products' => $products,
            'invoices' => $invoices,
            'outlets' => $outlets,
            'providers' => $providers,
        ]);
    }
}
