<?php

namespace CITYSHOP\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function get_store($name)
    {
        return view('store',['name' => $name]);
    }
}
