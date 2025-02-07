<?php

namespace App\Filament\Resources\FaQsResource\Pages;

use App\Filament\Resources\FaQsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFaQs extends EditRecord
{
    protected static string $resource = FaQsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
