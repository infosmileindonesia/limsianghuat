<?php

namespace App\Filament\Resources\BrandNonAlcoholResource\Pages;

use App\Filament\Resources\BrandNonAlcoholResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBrandNonAlcohol extends EditRecord
{
    protected static string $resource = BrandNonAlcoholResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
