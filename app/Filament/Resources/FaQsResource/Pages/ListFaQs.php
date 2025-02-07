<?php

namespace App\Filament\Resources\FaQsResource\Pages;

use App\Filament\Resources\FaQsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFaQs extends ListRecords
{
    protected static string $resource = FaQsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
