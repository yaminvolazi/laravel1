<?php

namespace CITYSHOP\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function get_produits()
    {
        return view('home');
    }
}
