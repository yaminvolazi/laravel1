<?php

namespace CITYSHOP\Http\Controllers;

use Illuminate\Http\Request;
use CITYSHOP\Store;

class StoreController extends Controller
{
    /*------------------ CITYSHOP -------------------*/

    // Liste of stores
    public function index($name=null)
    {
        if($name!=null){
            return view('store',['name' => $name]);
        }else{
            $stores = Store::all();
            return view('stores',['stores' => $stores]);            
        }

    }

    /*--------------- CITYSHOP ADMIN -----------------*/

    // Liste of stores
    public function index_admin($name=null)
    {
        if($name!=null){
            return view('admin.store',['name' => $name]);
        }else{
            $stores = Store::all();
            return view('admin.stores',['stores' => $stores]);            
        }

    }

    // Store creation form
    public function create_store()
    {
        return view('admin.create_store');
    } 

    // Save store
    public function save_store()
    {

    }

    // Get store data and put themes into form
    public function edit_store()
    {

    }

    // Update store
    public function update_store()
    {
    
    }

    // Delete Store
    public function delete_store()
    {
    
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
