<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\MasterItem;

class HomeController extends Controller
{
    public function home()
    {
        $all_items = MasterItem::all();
        $data = [
            'title' => "Home",
            'name' => 'Zahra',
            'email' => 'anandanicko9@gmail.com',
            'item' => $all_items
        ];
        // MasterItem::create([
        //     'name' => 'Printer',
        //     'deskripsi' => 'Print DataPart',
        //     'harga_beli' => 2000000
        // ]);
        // $master_item = new MasterItem();
        // $master_item->name = "Printer";
        // $master_item->deskripsi = "Print DataPart";
        // $master_item->harga_beli = 2000000;
        // $master_item->save();
        return view ('home',$data);
    }
}
