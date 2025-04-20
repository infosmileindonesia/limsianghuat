<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendPageController extends Controller
{


    public function about()
    {
        return view('frontend.about');
    }

    public function brands()
    {
        $alcoholBrands = dummyAlcoholBrand();

        $nonAlcoholBrands = collect([
            [
                'name' => 'Pocari Sweat',
                'image' => asset('img/placeholder/brands/no-alcohol/product-7.png'),
            ],
            [
                'name' => 'San Miguel',
                'image' => asset('img/placeholder/brands/no-alcohol/product-8.png'),
            ],
            [
                'name' => 'Oishiiyori',
                'image' => asset('img/placeholder/brands/no-alcohol/product-9.png'),
            ],
            [
                'name' => 'Pocari Sweat',
                'image' => asset('img/placeholder/brands/no-alcohol/product-7.png'),
            ],
            [
                'name' => 'San Miguel',
                'image' => asset('img/placeholder/brands/no-alcohol/product-8.png'),
            ],
            [
                'name' => 'Oishiiyori',
                'image' => asset('img/placeholder/brands/no-alcohol/product-9.png'),
            ],
        ]);

        $foodBrands = collect([
            [
                'image' => asset('img/placeholder/brands/beverages/product-10.png'),
            ],
            [
                'image' => asset('img/placeholder/brands/beverages/product-11.png'),
            ],
            [
                'image' => asset('img/placeholder/brands/beverages/product-12.png'),
            ],
            [
                'image' => asset('img/placeholder/brands/beverages/product-10.png'),
            ],
            [
                'image' => asset('img/placeholder/brands/beverages/product-11.png'),
            ],
            [
                'image' => asset('img/placeholder/brands/beverages/product-12.png'),
            ],
        ]);

        return view('frontend.brands', compact('alcoholBrands', 'nonAlcoholBrands', 'foodBrands'));
    }

    public function distribution()
    {
        return view('frontend.distribution');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function careers()
    {
        return view('frontend.careers');
    }

}
