<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $page='home';
        $sliderdata=Product::limit(4)->get();
        $productlist1=Product::limit(6)->get();
        $setting = Setting::first();

        return view('home.index',[
            'page'=>$page,
            'setting'=>$setting,
        'sliderdata'=>$sliderdata,
        'productlist1'=>$productlist1

            ]);
    }

    public function aboutus()
    {
        $setting = Setting::first();
        return view('home.index',[
            'setting'=>$setting,
        ]);
    }

    public function deneme()
    {
        return view('home.deneme');
    }

    public function test()
    {
        return view('home.test');
    }

    public function menu()
    {
        //
        $data= Category::all();
        return view('home.menu.menu',[
            'data' => $data


        ]);
        $data->parent_id = $request->parent_id;
    }
    public function hotdrinks()
    {
        $productlist1=Product::all();
        return view('home.menu.hotdrinks',[
            'productlist1'=>$productlist1
        ]);
    }
    public function colddrinks()
    {
        $productlist1=Product::all();
        return view('home.menu.colddrinks',[
            'productlist1'=>$productlist1
        ]);
    }
    public function frontcolds()
    {
        $productlist1=Product::all();
        return view('home.menu.frontcolds',[
            'productlist1'=>$productlist1
        ]);
    }
    public function mainfoods()
    {
        $data= Category::all();
        return view('home.menu.mainfoods',[
            'data' => $data


        ]);
    }
    public function deserts()
    {
        $productlist1=Product::all();
        return view('home.menu.deserts',[
            'productlist1'=>$productlist1
        ]);
    }
    public function drills()
    {
        $productlist1=Product::all();
        return view('home.menu.drills',[
            'productlist1'=>$productlist1
        ]);
    }
    public function juicydishes()
    {
        $productlist1=Product::all();
        return view('home.menu.juicydishes',[
            'productlist1'=>$productlist1
        ]);
    }
}
