<?php

namespace App\Http\Controllers\Webs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
class HomeController extends Controller
{
    public function index(){
        $data['menu'] = Menu::where('status',1)->get();
        return view('website.pages.home',compact('data'));
    }
    public function product(){
        $data['menu'] = Menu::where('status',1)->get();
        return view('website.pages.menu',compact('data'));
    }

}
