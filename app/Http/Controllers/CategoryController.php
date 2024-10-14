<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    

    public function index()
    {
        // Ambil semua data kategori dari database
        $categories = Category::all();

        // Debug untuk melihat apakah data terkirim dengan benar
        // dd($categories);

        return view('components.layout', ['categories' => $categories]);
    }
}


