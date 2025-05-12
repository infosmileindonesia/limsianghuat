<?php

namespace App\Filament\Resources\BrandAlcoholResource\Pages;

use App\Filament\Resources\BrandAlcoholResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBrandAlcohol extends EditRecord
{
    protected static string $resource = BrandAlcoholResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
