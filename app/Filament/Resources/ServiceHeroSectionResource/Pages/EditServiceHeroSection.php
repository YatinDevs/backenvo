<?php

namespace App\Filament\Resources\ServiceHeroSectionResource\Pages;

use App\Filament\Resources\ServiceHeroSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditServiceHeroSection extends EditRecord
{
    protected static string $resource = ServiceHeroSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
