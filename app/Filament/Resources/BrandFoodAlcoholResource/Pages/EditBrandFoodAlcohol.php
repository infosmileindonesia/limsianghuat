<?php

namespace App\Filament\Resources\BrandFoodAlcoholResource\Pages;

use App\Filament\Resources\BrandFoodAlcoholResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBrandFoodAlcohol extends EditRecord
{
    protected static string $resource = BrandFoodAlcoholResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
