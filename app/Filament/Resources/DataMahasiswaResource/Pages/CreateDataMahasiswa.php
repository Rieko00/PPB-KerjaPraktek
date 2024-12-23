<?php

namespace App\Filament\Resources\DataMahasiswaResource\Pages;

use App\Filament\Resources\DataMahasiswaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDataMahasiswa extends CreateRecord
{
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected static string $resource = DataMahasiswaResource::class;
}
