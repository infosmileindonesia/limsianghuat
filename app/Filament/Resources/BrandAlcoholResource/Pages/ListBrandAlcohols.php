<?php

namespace App\Filament\Resources\BrandAlcoholResource\Pages;

use App\Filament\Resources\BrandAlcoholResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBrandAlcohols extends ListRecords
{
    protected static string $resource = BrandAlcoholResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
