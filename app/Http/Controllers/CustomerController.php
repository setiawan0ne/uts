<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CustomerController extends Controller
{
    //
    public function index()
    {
        // Mengambil data dari API
        $response = Http::get('http://127.0.0.1:8000/api/customers')->json();

        $customers = $response['data']['data']??[];

        // Mengirim data ke view
        return view('customers.index', ['customers' => $customers]);
    }
}
