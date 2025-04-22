<?php

namespace App\Filament\Resources\ServiceHeroSectionResource\Pages;

use App\Filament\Resources\ServiceHeroSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListServiceHeroSections extends ListRecords
{
    protected static string $resource = ServiceHeroSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
