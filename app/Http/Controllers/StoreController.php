<?php

namespace CITYSHOP\Http\Controllers;

use Illuminate\Http\Request;
use CITYSHOP\Store;

class StoreController extends Controller
{
    public function get_store($name)
    {
        return view('store',['name' => $name]);
    }

    public function get_stores()
    {
        $stores = Store::all();
        return view('stores',['stores' => $stores]);
    }

    public function add_store()
    {
        $store = new Store();

        $store->name = "name 3";
        $store->address = "address 3";
        $store->tels = "tels 3";
        $store->emails = "emails 3";
        $store->website = "website 3";
        $store->avatar = "avatar 3";
        $store->cover = "cover 3";
        $store->description = "description 3";

        $store->save();

    }
}
