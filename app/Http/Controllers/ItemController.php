<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class ItemController extends Controller
{
    public function index()
    {
        // Mengambil data dari API
        $response = Http::get('http://127.0.0.1:8000/api/items')->json();

        $items = $response['data']['data']??[];

        // Mengirim data ke view
        return view('items.index', ['items' => $items]);
    }
}