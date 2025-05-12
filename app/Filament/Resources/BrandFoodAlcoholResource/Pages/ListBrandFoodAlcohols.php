<?php

namespace App\Filament\Resources\BrandFoodAlcoholResource\Pages;

use App\Filament\Resources\BrandFoodAlcoholResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBrandFoodAlcohols extends ListRecords
{
    protected static string $resource = BrandFoodAlcoholResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
