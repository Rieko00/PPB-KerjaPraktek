<?php

namespace App\Filament\Dosen\Resources\DosenResource\Pages;

use App\Filament\Dosen\Resources\DosenResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDosens extends ListRecords
{
    protected static string $resource = DosenResource::class;
    protected static ?string $title = 'Data Dosen';
    protected static ?string $navigationLabel = 'Dosen';
    protected static ?string $slug = 'data-dosen';
    protected ?string $heading = 'dosen';
    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
