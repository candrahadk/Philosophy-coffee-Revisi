<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {



        return view('website.pages.home', [
            'title' => 'Home',
            'menus' => Menu::limit(4)->get(),
        ]);
    }

    public function menu()
    {

        return view('website.pages.menu', [
            'menus' => Menu::latest()->get(),
            'title' => 'Menu'
        ]);
    }

    public function reservation()
    {
        return view('website.pages.reservation', [
            'menus' => Menu::get(),
            'title' => 'Reservasi'
        ]);
    }

    public function about()
    {
        $title = 'About';
        return view('website.pages.about', compact('title'));
    }

    public function contact()
    {
        $title = 'Contact';
        return view('website.pages.contact', compact('title'));
    }
}
