<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function addMenu(Request $request)
    {
        $menu = new Menu;
        $menu->id_warung = $request->input('id_warung');
        $menu->nama_menu = $request->input('nama_menu');
        $menu->harga_menu = $request->input('harga_menu');
        $menu->save();

        return redirect()->back();
    }

    public function showMenu()
    {
        $show = Menu::all();
        return view('pesan.pilihmenu',compact('show'));
    }

    public function subMenu($id)
    {
        return view('menu.subMenu')->with('no',$id);
    }

    public function daftarMenu($id)
    {
        $shows = Menu::where('id_warung',$id)->get();
        return view('menu.daftarmenu',compact('shows'));
    }
}
