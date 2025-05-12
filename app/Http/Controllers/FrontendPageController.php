<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\BrandAlcohol;
use App\Models\BrandNonAlcohol;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class FrontendPageController extends Controller
{

    public function index()
    {
        $banners = Banner::all();

        return view('welcome', compact('banners'));
    }

    public function about()
    {

        $testimonials = Testimonial::all();

        return view('frontend.about', compact('testimonials'));
    }

    public function brands()
    {

        $brandBeers = BrandAlcohol::where('type', BrandAlcohol::TYPE_BEER)->get();

        $alcoholBrands = dummyAlcoholBrand();

        // replace products in $alcoholBrands slug == 'beer' with $brandBeer
        $alcoholBrands = $alcoholBrands->map(function ($brand) use ($brandBeers) {
            if ($brand['slug'] == 'beer') {
                $brand['products'] = $brandBeers->map(function ($brandBeer) {
                    return [
                        'name' => $brandBeer->name,
                        'image' => asset('storage/' . $brandBeer->image),
                    ];
                });
            }
            return $brand;
        });

        $nonAlcoholBrands = BrandNonAlcohol::all()->map(function ($brand) {
            return [
                'name' => $brand->name,
                'image' => $brand->getImageUrlAttribute(),
            ];
        });

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
