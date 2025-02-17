<?php

namespace App\Filament\Resources\FaQsResource\Pages;

use App\Filament\Resources\FaQsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateFaQs extends CreateRecord
{
    protected static string $resource = FaQsResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index'); // Redirect ke halaman index setelah create
    }
}
