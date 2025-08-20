<?php

namespace App\Filament\Resources\ConsumerGoodResource\Pages;

use App\Filament\Resources\ConsumerGoodResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListConsumerGood extends ListRecords
{
    protected static string $resource = ConsumerGoodResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
