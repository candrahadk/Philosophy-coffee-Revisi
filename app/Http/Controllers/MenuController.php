<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    public function index()
    {
        return view('admin.pages.menu.index', [
            'title' => 'Menu',
            'menus' => Menu::latest()->filter(request('search'))->paginate(10)->withQueryString()
        ]);
    }

    public function create()
    {
        return view('admin.pages.menu.create', [
            'title' => 'Tambah Menu',
        ]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'required|integer',
            'description' => 'required',
        ]);


        $menu = new Menu();
        $menu->name = $request->name;
        $menu->price = $request->price;
        $menu->description = $request->description;

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $request->image->extension();
            $file->move(public_path('images'), $filename);
            $menu->image = $filename;
        }

        $menu->save();
        return redirect()->route('menu.index')->with('status', 'Data ditambah!');
    }


    public function edit($id)
    {
        return view('admin.pages.menu.edit', [
            'title' => 'Edit Menu',
            'menu' => Menu::find($id),
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048' . $request->oldimage ? '' : 'required',
            'price' => 'required|integer',
            'description' => 'required',
        ]);


        $menu = Menu::findOrFail($request->id);
        $menu->name = $request->name;
        $menu->price = $request->price;
        $menu->description = $request->description;

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $request->image->extension();
            $file->move(public_path('images'), $filename);
            $menu->image = $filename;


            if (File::exists(public_path('images/' . $request->oldimage))) {
                File::delete(public_path('images/' . $request->oldimage));
            }
        }

        $menu->save();
        return redirect()->route('menu.index')->with('status', 'Data diupdate!');
    }



    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);
        $menu->delete();
        if (File::exists(public_path('images/' . $menu->image))) {
            File::delete(public_path('images/' . $menu->image));
        }

        return redirect()->route('menu.index')->with('status', 'Data terhapus!');
    }
}
