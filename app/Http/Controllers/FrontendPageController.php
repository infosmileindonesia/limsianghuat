<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\BrandAlcohol;
use App\Models\BrandFoodAlcohol;
use App\Models\BrandNonAlcohol;
use App\Models\ConsumerBrand;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Spatie\ResponseCache\Facades\ResponseCache;

class FrontendPageController extends Controller
{

    public function index()
    {
        $banners = Banner::all();
        $distributions = \App\Models\Distribution::with(['media'])->get();
        return view('welcome', compact('banners', 'distributions'));
    }

    public function about()
    {
        $testimonials = Testimonial::all();

        // dna
        // focus
        // network
        // expertise
        // integrity
        // market
        // delivery
        $whyContents = [
            [
                'number' => '01',
                'title' => __('contents.about.why.dna.title'),
                'description' => __('contents.about.why.dna.description'),
            ],
            [
                'number' => '02',
                'title' => __('contents.about.why.focus.title'),
                'description' => __('contents.about.why.focus.description'),
            ],
            [
                'number' => '03',
                'title' => __('contents.about.why.network.title'),
                'description' => __('contents.about.why.network.description'),
            ],
            [
                'number' => '04',
                'title' => __('contents.about.why.expertise.title'),
                'description' => __('contents.about.why.expertise.description'),
            ],
            [
                'number' => '05',
                'title' => __('contents.about.why.integrity.title'),
                'description' => __('contents.about.why.integrity.description'),
            ],
            [
                'number' => '06',
                'title' => __('contents.about.why.market.title'),
                'description' => __('contents.about.why.market.description'),
            ],
            [
                'number' => '07',
                'title' => __('contents.about.why.delivery.title'),
                'description' => __('contents.about.why.delivery.description'),
            ],
        ];

        // chunk into 4 items per row
        $whyContents = collect($whyContents)->chunk(4)->map(function ($chunk) {
            return $chunk->map(function ($item) {
                return (object) $item;
            });
        });

        return view('frontend.about', compact('testimonials', 'whyContents'));
    }

    public function brands()
    {

        $brandBeers = BrandAlcohol::where('type', BrandAlcohol::TYPE_BEER)->get();
        $brandSprits = BrandAlcohol::where('type', BrandAlcohol::TYPE_SPIRIT)->get();
        $brandSoju = BrandAlcohol::where('type', BrandAlcohol::TYPE_SOJU)->get();
        $brandWines = BrandAlcohol::where('type', BrandAlcohol::TYPE_WINE)->get();
        $brandCider = BrandAlcohol::where('type', BrandAlcohol::TYPE_CIDER)->get();

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

        if ($brandSprits->count() > 0) {
            $alcoholBrands = $alcoholBrands->map(function ($brand) use ($brandSprits) {
                if ($brand['slug'] == 'spirit') {
                    $brand['products'] = $brandSprits->map(function ($brandSpirit) {
                        return [
                            'name' => $brandSpirit->name,
                            'image' => asset('storage/' . $brandSpirit->image),
                        ];
                    });
                }
                return $brand;
            });
        }

        if ($brandSoju->count() > 0) {
            $alcoholBrands = $alcoholBrands->map(function ($brand) use ($brandSoju) {
                if ($brand['slug'] == 'soju') {
                    $brand['products'] = $brandSoju->map(function ($brandSoju) {
                        return [
                            'name' => $brandSoju->name,
                            'image' => asset('storage/' . $brandSoju->image),
                        ];
                    });
                }
                return $brand;
            });
        }

        if ($brandWines->count() > 0) {
            $alcoholBrands = $alcoholBrands->map(function ($brand) use ($brandWines) {
                if ($brand['slug'] == 'wine') {
                    $brand['products'] = $brandWines->map(function ($brandWine) {
                        return [
                            'name' => $brandWine->name,
                            'image' => asset('storage/' . $brandWine->image),
                        ];
                    });
                }
                return $brand;
            });
        }

        if ($brandCider->count() > 0) {
            $alcoholBrands = $alcoholBrands->map(function ($brand) use ($brandCider) {
                if ($brand['slug'] == 'cider') {
                    $brand['products'] = $brandCider->map(function ($brandCider) {
                        return [
                            'name' => $brandCider->name,
                            'image' => asset('storage/' . $brandCider->image),
                        ];
                    });
                }
                return $brand;
            });
        }


        $nonAlcoholBrands = BrandNonAlcohol::all()->map(function ($brand) {
            return [
                'name' => $brand->name,
                'image' => $brand->getImageUrlAttribute(),
            ];
        });

        $foodBrands = BrandFoodAlcohol::all()->map(function ($brand) {
            return [
                'name' => $brand->name,
                'image' => $brand->getImageUrlAttribute(),
            ];
        });
        $consumerBrands = ConsumerBrand::all()->map(function ($brand) {
            return [
                'name' => $brand->name,
                'image' => $brand->getImageUrlAttribute(),
            ];
        });        

        return view('frontend.brands', compact('alcoholBrands', 'nonAlcoholBrands', 'foodBrands', 'consumerBrands'));
    }

    public function distribution()
    {

        $horecaContents = [
            asset('img/horeca/st-regis.png'),
            asset('img/horeca/ritz-carlton.png'),
            asset('img/horeca/the-westin.png'),
            asset('img/horeca/dharmawangsa.png'),
            asset('img/horeca/intern-continental.png'),
            asset('img/horeca/jw-marrtiot.png'),
            asset('img/horeca/mercure.png'),
            asset('img/horeca/pullman.png'),
            asset('img/horeca/raffles.png'),
            asset('img/horeca/ritz-carlton-logo.png'),
            asset('img/horeca/st-regis-logo.png'),
            asset('img/horeca/the-westin-logo.png'),
        ];

        $modernTradeContents = [
            asset('img/modern-trade/aeon-hall.png'),
            asset('img/modern-trade/aeon.png'),
            asset('img/modern-trade/dutabuah.png'),
            asset('img/modern-trade/farmers-market.png'),
            asset('img/modern-trade/grand-lucky-hall.png'),
            asset('img/modern-trade/k3mart.png'),
            asset('img/modern-trade/ranch-hall.png'),
            asset('img/modern-trade/the-food-hall.png'),
            asset('img/modern-trade/total-buah.png'),
        ];

        $distributions = \App\Models\Distribution::with(['media'])->get();


        return view('frontend.distribution', compact('horecaContents', 'modernTradeContents', 'distributions'));
    }

    public function contact()
    {
        $places = [
            'ChIJ1xLy-nKJ2TERbzwd0vkrkbk',
            'ChIJC9pumkMdai4Rj8mVum52gXo',
            'ChIJrav3issfai4RI-YItQnOOgI',
            'ChIJKwGCpDY_0i0RwiiCu6625xc',
            'ChIJMe45w6H_1y0RfiNItYw-c3M',
        ];

        return view('frontend.contact', compact('places'));
    }

    public function careers()
    {
        return view('frontend.careers');
    }

    public function setLocale($locale)
    {

        if (in_array($locale, ['en', 'zh_TW'])) {

            App::setLocale($locale);
            session(['locale' => $locale]);
        } else {
            return redirect()->back()->with('error', 'Invalid locale selected.');
        }

        ResponseCache::clear();

        return redirect()->back();
    }

}
