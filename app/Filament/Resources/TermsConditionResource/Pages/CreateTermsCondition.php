<?php

namespace App\Filament\Resources\TermsConditionResource\Pages;

use App\Filament\Resources\TermsConditionResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTermsCondition extends CreateRecord
{
    protected static string $resource = TermsConditionResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index'); // Redirect ke halaman index setelah create
    }
}
