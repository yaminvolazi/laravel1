<?php

namespace CITYSHOP\Http\Controllers;

use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function get_categories()
    {
        return view('categories');
    }
}
