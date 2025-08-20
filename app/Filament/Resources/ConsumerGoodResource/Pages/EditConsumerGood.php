<?php

namespace App\Filament\Resources\ConsumerGoodResource\Pages;

use App\Filament\Resources\ConsumerGoodResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditConsumerGood extends EditRecord
{
    protected static string $resource = ConsumerGoodResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
