<?php

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Route;

if (!function_exists('isActiveRoute')) {
    /**
     * Check if the current route matches any of the given route names.
     *
     * @param array|string $routeNames
     * @return bool
     */
    function isActiveRoute($routeNames): bool
    {
        if (is_array($routeNames)) {
            return in_array(Route::currentRouteName(), $routeNames);
        }

        return Route::currentRouteName() === $routeNames;
    }
}

if (!function_exists('isContactUsRoute')) {
    /**
     * Check if the current route is the contact us route.
     *
     * @return bool
     */
    function isContactUsRoute(): bool
    {
        return isActiveRoute('contact');
    }
}

if (!function_exists('dummyAlcoholBrand')) {
    /**
     * Generate a dummy alcohol brand name.
     *
     * @return string
     */
    function dummyAlcoholBrand(): Collection
    {
        $categories = collect([
            [
                'name' => 'Wine',
                'slug' => 'wine',
                'products' => collect([]),
            ],
            [
                'name' => 'Beer',
                'slug' => 'beer',
                'products' => collect([]),
            ],
            [
                'name' => 'Cider',
                'slug' => 'cider',
                'products' => collect([]),
            ],
            [
                'name' => 'Soju',
                'slug' => 'soju',
                'products' => collect([]),
            ],
            [
                'name' => 'Spirit',
                'slug' => 'spirit',
                'products' => collect([]),
            ],
        ]);

        $brandBeer = collect([
            [
                'name' => 'Anker Pilsener',
                'slug' => 'anker-pilsener',
                'image' => asset('img/placeholder/brands/alcohol/product-1.png'),
            ],
            [
                'name' => 'Anker Lychee',
                'slug' => 'anker-lychee',
                'image' => asset('img/placeholder/brands/alcohol/product-2.png'),
            ],
            [
                'name' => 'Anker Pineapple',
                'slug' => 'anker-pineapple',
                'image' => asset('img/placeholder/brands/alcohol/product-3.png'),
            ],
            [
                'name' => 'Kuda Putih Pilsener',
                'slug' => 'kuda-putih-pilsener',
                'image' => asset('img/placeholder/brands/alcohol/product-4.png'),
            ],
            [
                'name' => 'San Miguel Light',
                'slug' => 'san-miguel-light',
                'image' => asset('img/placeholder/brands/alcohol/product-5.png'),
            ],
            [
                'name' => 'Carlsberg',
                'slug' => 'carlsberg',
                'image' => asset('img/placeholder/brands/alcohol/product-6.png'),
            ]
        ]);

        // push the brandBeer to the products of the beer category
        $brandBeer->each(function ($brand) use ($categories) {
            $categories->firstWhere('slug', 'beer')['products']->push($brand);
        });

        // create a dummy product for each category
        // the image must be different for each category name by adding the category slug + iteration number from a placeholder third party image
        $categories->whereNotIn('slug', ['beer'])->map(function ($category) {

            $count = 1;
            $max = 10;
            $category['products'] = collect([]);

            while ($count <= $max) {
                $category['products']->push([
                    'name' => $category['name'] . ' Product ' . $count,
                    'slug' => $category['slug'] . '-product-' . $count,
                    'image' => 'https://placehold.co/300x300/000/fff?text=' . $category['slug'] . '+' . $count,
                ]);
                $count++;
            }
            return $category;

        })->each(function ($category) use ($categories) {
            foreach ($category['products'] as $product) {
                $categories->firstWhere('slug', $category['slug'])['products']->push($product);
            }
        });

        return $categories;
    }
}
